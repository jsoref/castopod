<?php

/**
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace App\Controllers;

use App\Models\PodcastModel;
use CodeIgniter\HTTP\RedirectResponse;
use mysqli_sql_exception;

class HomeController extends BaseController
{
    public function index(): RedirectResponse | string
    {
        try {
            $allPodcasts = (new PodcastModel())->findAll();
        } catch (mysqli_sql_exception) {
            // An error was caught when retrieving the podcasts from the database.
            // Redirecting to install page because it is likely that Castopod Host has not been installed yet.
            return redirect()->route('install');
        }

        // check if there's only one podcast to redirect user to it
        if (count($allPodcasts) === 1) {
            return redirect()->route('podcast-activity', [$allPodcasts[0]->name]);
        }

        // default behavior: list all podcasts on home page
        $data = [
            'podcasts' => $allPodcasts,
        ];
        return view('home', $data);
    }
}
