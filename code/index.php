<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=no"/>
    <title>UI Prototype Integreat</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <header class="fixed pin-t pin-x flex flex-wrap">
        <div id="search" class="flex-1 relative">
            <form>
            <i data-feather="search" class="absolute text-grey-darker"></i>
            <input type="search" placeholder="Suchen..." class="w-full pl-12 pr-6">
            </form>
        </div>
        <div id="instance-selector" class="relative flex flex-wrap flex-col justify-center px-3 cursor-pointer text-grey-darkest">
            <div class="flex flex-wrap">
                <i data-feather="server"></i>
                <span class="mt-1 ml-2">
                    Bad Tölz
                </span>
            </div>
            <div id="instance-selector-list" class="absolute shadow rounded-b">
            <a href="" class="block px-4 py-3 text-grey-darkest hover:bg-grey">
                Dormagen
            </a>
            <a href="" class="block px-4 py-3 text-grey-darkest hover:bg-grey">
                Landkreis Germerskirchen
            </a>
            <a href="" class="block px-4 py-3 text-grey-darkest hover:bg-grey">
                Kissing
            </a>
            <a href="" class="block px-4 py-3 text-grey-darkest hover:bg-grey">
                Nürnberg
            </a>
            <a href="" class="block px-4 py-3 text-grey-darkest hover:bg-grey rounded-b">
                Landkreis Oberallgäu
            </a>
            </div>
        </div>
        <div id="language-selector" class="relative flex flex-wrap flex-col justify-center px-4 cursor-pointer text-grey-darkest">
            <div class="flex flex-wrap">
                <div style="padding-top:5px;">
                    <img src="images/flags/de.png" title="Deutsch" />
                </div>
                <span class="mt-1 ml-2">
                    Deutsch
                </span>
            </div>
            <div id="language-selector-list" class="absolute shadow rounded-b">
                <a href="" class="block px-4 py-3 text-grey-darkest hover:bg-grey">
                    English
                </a>
                <a href="" class="block px-4 py-3 text-grey-darkest hover:bg-grey">
                    العربية
                </a>
                <a href="" class="block px-4 py-3 text-grey-darkest hover:bg-grey">
                    فارسی
                </a>
                <a href="" class="block px-4 py-3 text-grey-darkest hover:bg-grey">
                    Français
                </a>
                <a href="" class="block px-4 py-3 text-grey-darkest hover:bg-grey rounded-b">
                    Türkçe
                </a>
            </div>
        </div>
        <div id="user-info" class="relative pl-2 pr-6 text-grey-darkest flex flex-wrap flex-col justify-center cursor-pointer">
            <span class="relative block pr-6">
                Sascha Beele
                <i data-feather="chevron-down" class="absolute pin-t pin-r"></i>
            </span>
            <div id="user-menu" class="absolute shadow rounded-b">
                <a href="/" class="relative block pl-10 pr-4 py-3 text-grey-darkest hover:bg-grey">
                    <i data-feather="help-circle" class="absolute"></i>
                    Hilfe
                </a>
                <a href="/" class="relative block pl-10 pr-4 py-3 text-grey-darkest hover:bg-grey">
                    <i data-feather="message-square" class="absolute"></i>
                    Autorenchat
                </a>
                <a href="/" class="break-words relative block pl-10 pr-4 py-3 text-grey-darkest hover:bg-grey">
                    <i data-feather="grid" class="absolute"></i>
                    Netzwerkverwaltung
                </a>
                <a href="/" class="relative block pl-10 pr-4 py-3 text-grey-darkest hover:bg-grey rounded-b">
                    <i data-feather="log-out" class="absolute text-red"></i>
                    Abmelden
                </a>
            </div>
        </div>
    </header>
    <nav id="primary-navigation" class="fixed pin-l pin-y">
        <div id="logo" class="w-full text-center p-2">
            <img src="images/integreat-logo-white.png" alt="Integreat Logo" class="max-w-full" />
        </div>
        <div id="menu" class="pb-2">
            <a href="/" class="relative block text-grey-light hover:text-grey-darker hover:bg-integreat <?php if(!isset($_GET['site'])): ?>active<?php endif; ?>">
                <i data-feather="grid" class="absolute"></i>
                Dashboard
            </a>
            <a href="?site=stats" class="relative block text-grey-light hover:text-grey-darker hover:bg-integreat <?php if($_GET['site'] == 'stats'): ?>active<?php endif; ?>">
                <i data-feather="bar-chart" class="absolute"></i>
                Statistiken
            </a>
            <a href="?site=pages" class="relative block text-grey-light hover:text-grey-darker hover:bg-integreat <?php if($_GET['site'] == 'pages' or $_GET['site'] == 'new-page'): ?>active<?php endif; ?>">
                <i data-feather="layout" class="absolute"></i>
                Seiten
            </a>
            <a href="?site=events" class="relative block text-grey-light hover:text-grey-darker hover:bg-integreat <?php if($_GET['site'] == 'events' or $_GET['site'] == 'new-event'): ?>active<?php endif; ?>">
                <i data-feather="calendar" class="absolute"></i>
                Veranstaltungen
            </a>
            <a href="?site=users" class="relative block text-grey-light hover:text-grey-darker hover:bg-integreat <?php if($_GET['site'] == 'users' or $_GET['site'] == 'new-user'): ?>active<?php endif; ?>">
                <i data-feather="users" class="absolute"></i>
                Benutzer
            </a>
            <a href="?site=feedback" class="relative block text-grey-light hover:text-grey-darker hover:bg-integreat <?php if($_GET['site'] == 'feedback'): ?>active<?php endif; ?>">
                <i data-feather="thumbs-up" class="absolute"></i>
                Feedback
            </a>
            <a href="?site=notifications" class="relative block text-grey-light hover:text-grey-darker hover:bg-integreat <?php if($_GET['site'] == 'notifications' or $_GET['site'] == 'new-notification'): ?>active<?php endif; ?>">
                <i data-feather="send" class="absolute"></i>
                Push Notifications
            </a>
            <a href="?site=pdf" class="relative block text-grey-light hover:text-grey-darker hover:bg-integreat <?php if($_GET['site'] == 'pdf'): ?>active<?php endif; ?>">
                <i data-feather="layers" class="absolute"></i>
                PDF Export
            </a>
            <a href="?site=imprint" class="relative block text-grey-light hover:text-grey-darker hover:bg-integreat <?php if($_GET['site'] == 'imprint'): ?>active<?php endif; ?>">
                <i data-feather="file-text" class="absolute"></i>
                Impressum
            </a>
            <a href="?site=settings" class="relative block text-grey-light hover:text-grey-darker hover:bg-integreat <?php if($_GET['site'] == 'settings'): ?>active<?php endif; ?>">
                <i data-feather="sliders" class="absolute"></i>
                Einstellungen
            </a>
        </div>
    </nav>
    <main class="relative">
        <div class="p-6">
            <?php
                if(!isset($_GET['site'])) {
                    require('./sites/dashboard.php');
                } elseif($_GET['site'] == 'stats') {
                    require('./sites/stats.php');
                } elseif($_GET['site'] == 'pages') {
                    require('./sites/pages.php');
                } elseif($_GET['site'] == 'new-page') {
                    require('./sites/new-page.php');
                } elseif($_GET['site'] == 'events') {
                    require('./sites/events.php');
                } elseif($_GET['site'] == 'new-event') {
                    require('./sites/new-event.php');
                } elseif($_GET['site'] == 'users') {
                    require('./sites/users.php');
                } elseif($_GET['site'] == 'new-user') {
                    require('./sites/new-user.php');
                } elseif($_GET['site'] == 'feedback') {
                    require('./sites/feedback.php');
                } elseif($_GET['site'] == 'notifications') {
                    require('./sites/notifications.php');
                } elseif($_GET['site'] == 'new-notification') {
                    require('./sites/new-notification.php');
                } elseif($_GET['site'] == 'pdf') {
                    require('./sites/pdf.php');
                } elseif($_GET['site'] == 'imprint') {
                    require('./sites/imprint.php');
                } elseif($_GET['site'] == 'settings') {
                    require('./sites/settings.php');
                }
            ?>
        </div>
    </main>
    
    <script>
      feather.replace()
    </script>
  </body>
</html>
