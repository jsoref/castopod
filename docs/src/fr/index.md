---
sidebarDepth: 2
---

# Bienvenue 👋

[![release-badge]][release]&nbsp;[![license-badge]][license]&nbsp;[![contributions-badge]][contributions]&nbsp;[![semantic-release-badge]][semantic-release]&nbsp;[![crowdin-badge]][crowdin]&nbsp;[![discord-badge]][discord]&nbsp;[![stars-badge]][stars]

Castopod est une plateforme d’hébergement gratuite & open-source conçue pour les
podcasteurs qui veulent échanger et interagir avec leur public.

Castopod est facile à installer et a été conçu avec
[CodeIgniter4](https://codeigniter.com/), un framework PHP puissant de très
petite taille.

::: info Status

Castopod is currently in **beta** but already quite stable and used by
podcasters around&nbsp;the&nbsp;world!

:::

<div class="flex items-center">
  <a href="/getting-started/install" class="inline-flex items-center px-4 py-2 mx-auto font-semibold text-center text-white rounded-full shadow gap-x-1 bg-pine-500 hover:no-underline hover:bg-pine-600">Installation<svg viewBox="0 0 24 24" width="1em" height="1em" class="text-xl text-pine-200"><path fill="currentColor" d="m16.172 11-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path></svg></a>
</div>

## Fonctionnalités

- 🌱 &nbsp;Libre, gratuit & open-source (Licence AGPL v3)
- 🔐 &nbsp;focalisé sur la souveraineté des données : votre contenu, votre
  audience et vos statiistiques vous appartiennent, et à vous seulement
- 🪄&nbsp;Fonctionnalités de Podcasting 2.0 : GUID, verrouillage, transcriptions,
  financement, chapitres, géo-localisation, intervenants, extraits sonores, …
- 💬 &nbsp;Réseau social intégré :
  - 🚀 &nbsp;Castopod fait partie du Fédivers, un réseau social décentralisé
  - ❤️ &nbsp;Créer des publications, partager, mettre en favori et commenter des
    épisodes
- 📈 &nbsp;Statistiques intégrées :
  - ⚖️ &nbsp;Conforme GDPR / CCPA / LGPD
  - 🪙&nbsp;Mesure d'audience IABv2
  - 🏡 &nbsp;Statistiques intégrées, aucune tierce partie intermédiaire
- 📢 &nbsp;Outils de marketing intégrés :
  - ✅ &nbsp;Prêt pour le SEO (méta-tags open-graph, JSON-LD…)
  - 📱 &nbsp;PWA: installez comme application autonome
  - 🎨 &nbsp;Couleurs de thèmes personnalisables
  - 🎬 &nbsp;Générez des clips vidéo prêts à partager à partir d'épisodes
  - 🔉 &nbsp;Générez des extraits sonores
  - ▶️ &nbsp;Intégrer vos épisodes dans n'importe quel site web
- 💸 &nbsp;Monétisation:
  - 🔗 &nbsp;Liens de financement
  - 📲 &nbsp;publicité “listen-to-click”
  - 🤝 &nbsp;value4value / WebMonetization
- 📡&nbsp;Publiez vos épisodes partout avec RSS :
  - 📱 &nbsp;Sur tous les index et toutes les applications : Podcast Index,
    Podcasts Apple, Spotify, Google Podcasts, Deezer, Podcast Addict, Podfriend…
  - ⚡&nbsp;Diffusez instantanément vos épisodes avec WebSub
- 📥 &nbsp;Importation de Podcast : déménagez votre podcast existant vers
  Castopod
- 📤 &nbsp;Déplacez votre podcast chez un autre hébergeur
- 🔀 &nbsp;Multi-locataire : hébergez autant de podcasts que vous le souhaitez
- 👥 &nbsp;Multi-utilisateur : ajoutez des contributeurs et définissez leurs
  rôles
- 🌎 &nbsp;support i18n: traduit en Anglais, Français, Polonais, Allemand &
  Brésilien… et bientôt d'autres à venir !

## Motivation

The podcasting ecosystem is decentralized by nature: you can create your podcast
as an RSS file, publish it on the web and have it shared everywhere online.

It is in fact one of the only media to have stayed this way for a long time.

As usages are evolving, more and more people are getting into podcasts: whether
it is creators finding new ways to share their ideas, or listeners in the search
for better content.

With podcasting becoming more widely used, some companies are trying to shift it
towards a more controlled and centralized medium.

Castopod was created in an effort to provide an open and sustainable alternative
to hosting your podcasts, promoting decentralization to ensure that podcasters
creativity can express itself.

This project is pushed by the open-source community, and specifically by the
[Fediverse](https://fediverse.party/en/fediverse/) and
[Podcasting 2.0](https://podcastindex.org/) movements.

## Comparison with other solutions

We believe that a solution is not necessarily right for everyone, it highly
depends on your needs. So, here are comparisons with other tools to help you to
gauge whether Castopod is the right fit for&nbsp;you.

### Castopod vs Wordpress

Castopod is often referred to as "the Wordpress for podcasts" because of the
similarities between the two. In some ways this is true. And actually, Castopod
was greatly inspired by the Wordpress ecosystem, seeing the ease of adoption
from the community and the number of websites running&nbsp;it.

Just like Wordpress, Castopod is free & open source, built using PHP with a
MySQL database and is packaged in a way that you can easily install on most web
servers.

Wordpress is a great way to create your website and extend it with plugins to
get what you want. It is a full fledged CMS that helps you get any type of
website online.

On the other hand, Castopod is meant to address the podcasters needs
specifically, focusing on podcasting, and nothing else. You don't need any
plugin to get you started on your podcasting&nbsp;journey.

This allows optimizing the processes specific to podcasting: ranging from the
creation of your podcasts and the publication of new episodes all the way to
broadcasting, marketing and analytics.

Finally, depending on your needs, Wordpress and Castopod can even live side by
side as they share the same requirements!

### Castopod vs Funkwhale

Funkwhale is a self-hosted, modern free and open-source music server. Just as
Castopod, Funkwhale is on the fediverse, a decentralized social network allowing
interoperability between the two.

Funkwhale was initially built around music. And later on, as the project
evolved, the ability to host podcasts was introduced.

Unlike Funkwhale, Castopod has been designed and built around podcasting
exclusively. This allows easier implementation for features related to the
podcasting ecosystem, such as the podcasting 2.0 features (transcripts,
chapters, locations, persons, …).

So, you should probably use Funkwhale if you want to host your music, and use
Castopod if you want to host your podcasts.

### Castopod vs other podcast hosts

There are many solutions for you to host your podcasts, some of which are really
great and [a lot of them](https://podcastindex.org/apps) are jumping into the
Podcasting 2.0 wagon just like Castopod!

Each of these solutions differ from one another, you may compare with the
[list of features](#features).

That being said, there are two main differences with other podcasting solutions:

- Castopod can be self-hosted and is the only solution that allows you to keep
  full control over what you produce. Also, as it is open-source, you can even
  customize it as you wish.

- Castopod is the only solution that currently integrates both a decentralized
  social network with ActivityPub as well as many of the podcasting 2.0
  features, hoping to bridge the gap between the two.

## Contribuer

Vous appréciez Castopod et aimeriez donner un coup de main ? Jetez un œil à la
documentation suivante pour démarrer.

### Code of conduct

Castopod has adopted a Code of Conduct that we expect project participants to
adhere to. Please read the
[CODE_OF_CONDUCT manual](https://code.castopod.org/adaures/castopod/-/blob/beta/CODE_OF_CONDUCT.md)
so that you can understand what actions will and will not be&nbsp;tolerated.

### Contributing guide

Read our [contributing guide](./contributing/guidelines.md) to learn about our
development process, how to propose bugfixes and improvements, and how to build
and test your changes to Castopod.

## Contact

You may reach us for help or ask any question you have on:

- [Discord](https://castopod.org/discord) (for direct interaction with
  developers and the community)
- [Issue tracker](https://code.castopod.org/adaures/castopod/-/issues) (for
  feature requests & bug reports)

Alternatively, you can follow us on social media platforms to get news about
Castopod:

- [podlibre.social](https://podlibre.social/@Castopod) (Mastodon instance)
- [Twitter](https://twitter.com/castopod)
- [LinkedIn](https://linkedin.com/company/castopod)
- [Facebook](https://www.facebook.com/castopod)

## Sponsors

The ongoing development of Castopod is made possible with the support of its
backers. If you'd like to help, please consider
[sponsoring Castopod's development](https://opencollective.com/castopod/contribute).

<div class="flex flex-wrap gap-x-16 gap-y-8">
  <a href="https://adaures.com/" target="_blank" rel="noopener noreferrer"><img src="/images/sponsors/adaures.svg" alt="Ad Aures Logo" class="h-16" /></a>
  <a href="https://nlnet.nl/project/Castopod/" target="_blank" rel="noopener noreferrer"><img src="/images/sponsors/nlnet.svg" alt="NLnet Logo" class="h-16" /></a>
</div>

## License

[GNU Affero General Public License v3.0](https://choosealicense.com/licenses/agpl-3.0/)

Copyright © 2020-present, [Ad Aures](https://adaures.com/).
https://img.shields.io/gitlab/v/release/2?color=brightgreen&gitlab_url=https%3A%2F%2Fcode.castopod.org%2F&include_prereleases&label=release
https://img.shields.io/github/license/ad-aures/castopod?color=blue
https://img.shields.io/badge/contributions-welcome-brightgreen.svg
https://img.shields.io/badge/%20%20%F0%9F%93%A6%F0%9F%9A%80-semantic--release-e10079.svg
https://img.shields.io/github/stars/ad-aures/castopod?style=social

[release]: https://code.castopod.org/adaures/castopod/-/releases
[license]: https://code.castopod.org/adaures/castopod/-/blob/beta/LICENSE.md
[contributions]: https://code.castopod.org/adaures/castopod/-/issues
[semantic-release]: https://github.com/semantic-release/semantic-release
[discord]: https://castopod.org/discord
[stars]: https://github.com/ad-aures/castopod/stargazers
[crowdin]: https://translate.castopod.org/project/castopod