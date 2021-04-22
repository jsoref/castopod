<?php

namespace Config;

use CodeIgniter\Events\Events;
use CodeIgniter\Exceptions\FrameworkException;

/*
 * --------------------------------------------------------------------
 * Application Events
 * --------------------------------------------------------------------
 * Events allow you to tap into the execution of the program without
 * modifying or extending core files. This file provides a central
 * location to define your events, though they can always be added
 * at run-time, also, if needed.
 *
 * You create code that can execute by subscribing to events with
 * the 'on()' method. This accepts any form of callable, including
 * Closures, that will be executed when the event is triggered.
 *
 * Example:
 *      Events::on('create', [$myInstance, 'myMethod']);
 */

Events::on('pre_system', function () {
    if (ENVIRONMENT !== 'testing') {
        if (ini_get('zlib.output_compression')) {
            throw FrameworkException::forEnabledZlibOutputCompression();
        }

        while (ob_get_level() > 0) {
            ob_end_flush();
        }

        ob_start(function ($buffer) {
            return $buffer;
        });
    }

    /*
     * --------------------------------------------------------------------
     * Debug Toolbar Listeners.
     * --------------------------------------------------------------------
     * If you delete, they will no longer be collected.
     */
    if (CI_DEBUG) {
        Events::on(
            'DBQuery',
            'CodeIgniter\Debug\Toolbar\Collectors\Database::collect',
        );
        Services::toolbar()->respond();
    }
});

Events::on('login', function ($user) {
    helper('auth');

    // set interact_as_actor_id value
    $userPodcasts = $user->podcasts;
    if ($userPodcasts = $user->podcasts) {
        set_interact_as_actor($userPodcasts[0]->actor_id);
    }
});

Events::on('logout', function ($user) {
    helper('auth');

    // remove user's interact_as_actor session
    remove_interact_as_actor();
});

/*
 * --------------------------------------------------------------------
 * ActivityPub events
 * --------------------------------------------------------------------
 * Update episode metadata counts
 */
Events::on('on_note_add', function ($note) {
    if ($note->episode_id) {
        model('EpisodeModel')
            ->where('id', $note->episode_id)
            ->increment('notes_total');
    }

    // Removing all of the podcast pages is a bit overkill, but works perfectly
    // same for other events below
    cache()->deleteMatching("page_podcast#{$note->actor->podcast->id}*");
});

Events::on('on_note_remove', function ($note) {
    if ($note->episode_id) {
        model('EpisodeModel')
            ->where('id', $note->episode_id)
            ->decrement('notes_total', 1 + $note->reblogs_count);

        model('EpisodeModel')
            ->where('id', $note->episode_id)
            ->decrement('reblogs_total', $note->reblogs_count);

        model('EpisodeModel')
            ->where('id', $note->episode_id)
            ->decrement('favourites_total', $note->favourites_count);
    }

    cache()->deleteMatching("page_podcast#{$note->actor->podcast->id}*");
    cache()->deleteMatching("page_note#{$note->id}*");
});

Events::on('on_note_reblog', function ($actor, $note) {
    if ($episodeId = $note->episode_id) {
        model('EpisodeModel')
            ->where('id', $episodeId)
            ->increment('reblogs_total');

        model('EpisodeModel')
            ->where('id', $episodeId)
            ->increment('notes_total');
    }

    cache()->deleteMatching("page_podcast#{$note->actor->podcast->id}*");
    cache()->deleteMatching("page_note#{$note->id}*");

    if ($actor->is_podcast) {
        cache()->deleteMatching("page_podcast#{$actor->podcast->id}*");
    }
});

Events::on('on_note_undo_reblog', function ($reblogNote) {
    $note = $reblogNote->reblog_of_note;
    if ($episodeId = $note->episode_id) {
        model('EpisodeModel')
            ->where('id', $episodeId)
            ->decrement('reblogs_total');

        model('EpisodeModel')
            ->where('id', $episodeId)
            ->decrement('notes_total');
    }

    cache()->deleteMatching("page_podcast#{$note->actor->podcast->id}*");
    cache()->deleteMatching("page_note#{$note->id}*");

    if ($reblogNote->actor->is_podcast) {
        cache()->deleteMatching(
            "page_podcast#{$reblogNote->actor->podcast->id}*",
        );
    }
});

Events::on('on_note_reply', function ($reply) {
    $note = $reply->reply_to_note;

    cache()->deleteMatching("page_podcast#{$note->actor->podcast->id}*");
    cache()->deleteMatching("page_note#{$note->id}*");
});

Events::on('on_reply_remove', function ($reply) {
    $note = $reply->reply_to_note;

    cache()->deleteMatching("page_podcast#{$note->actor->podcast->id}*");
    cache()->deleteMatching("page_note#{$note->id}*");
});

Events::on('on_note_favourite', function ($actor, $note) {
    if ($note->episode_id) {
        model('EpisodeModel')
            ->where('id', $note->episode_id)
            ->increment('favourites_total');
    }

    cache()->deleteMatching("page_podcast#{$actor->podcast->id}*");
    cache()->deleteMatching("page_note#{$note->id}*");

    if ($note->in_reply_to_id) {
        cache()->deleteMatching("page_note#{$note->in_reply_to_id}*");
    }
});

Events::on('on_note_undo_favourite', function ($actor, $note) {
    if ($note->episode_id) {
        model('EpisodeModel')
            ->where('id', $note->episode_id)
            ->decrement('favourites_total');
    }

    cache()->deleteMatching("page_podcast#{$actor->podcast->id}*");
    cache()->deleteMatching("page_note#{$note->id}*");

    if ($note->in_reply_to_id) {
        cache()->deleteMatching("page_note#{$note->in_reply_to_id}*");
    }
});

Events::on('on_block_actor', function ($actorId) {
    cache()->deleteMatching('page_podcast*');
    cache()->deleteMatching('page_note*');
});

Events::on('on_unblock_actor', function ($actorId) {
    cache()->deleteMatching('page_podcast*');
    cache()->deleteMatching('page_note*');
});

Events::on('on_block_domain', function ($domainName) {
    cache()->deleteMatching('page_podcast*');
    cache()->deleteMatching('page_note*');
});

Events::on('on_unblock_domain', function ($domainName) {
    cache()->deleteMatching('page_podcast*');
    cache()->deleteMatching('page_note*');
});
