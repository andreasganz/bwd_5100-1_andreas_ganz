<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Willkommen Knicks-Fans!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Die deutsche Fanseite der New York Knicks">
    <meta name="revisit" content="After 30 days">
    <meta name="keywords" content="Fanpage, New York Knicks, MSG, Madison Square Garden, Knicks Geschichte, Knicks Roster, Knicks Statistiken, Knicks Links">
    <meta name="author" content="Andreas Ganz">
    <link rel="icon" href="pictures/logos/favicon_newyorkknicks_round_rgb.png" type="image/png" sizes="32x32">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/zentral.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-image">

<!-- Skip-Links -->
<?php include('cms/08_inc/skip-links.php') ?>

<header>

<!-- Logo -->
<?php include('cms/08_inc/logo_ebene_1.php') ?>

<!-- Menu-Balken Mobile -->
<?php include('cms/08_inc/menu-balken_mobile_ebene_1.php') ?>

<!-- Navigation Mobile -->
<?php include('cms/08_inc/navigation_mobile_ebene_1.php') ?>

<!-- Navigation Screen -->
    <nav id="navigation">
        <ul>
            <li><a href="php/geschichte.php" title="Geschichte">Geschichte</a></li>
            <li><a href="#" title="Team">Team</a>
                <ul>
                    <li><a href="php/roster.php" title="Roster">Roster</a></li>
                    <li><a href="php/statistiken.php" title="Statistiken">Statistiken</a></li>
                </ul>
            </li>
            <li><a href="php/arena.php" title="Arena">Arena</a></li>
            <li><a href="php/links.php" title="Links">Links</a></li>
            <li><a href="cms/fan-forum.php" title="Fan-Forum">Fan-Forum</a></li>
            <a href="cms/login_user.php" title="Login"><img src="pictures/cms/login-button_round_grey.svg" class="login-button_screen" alt="Login-Button Screen" title="Login-Button Screen"></a>
            <li class="kontakt-button"><a href="cms/kontakt.php" title="Kontakt">Kontakt</a></li>
        </ul>
    </nav>

<!-- Fan-Forum-Banner -->
<a href="cms/fan-forum.php"><img class="fan-forum-banner" src="pictures/fan-forum/fan-forum-banner_knicks-fanpage_rgb.png" alt="Fan-Forum-Banner" title="Fan-Forum-Banner"></a>

</header>

<!-- Main -->
<main id="main" class="content">
    <div class="welcome-text">

<!-- Welcome-Text -->
        <h3>WELCOME</h3>
        <h4><span class="strich_links"></span>TO THE<span class="strich_rechts"></span></h4>
        <h5>GARDEN</h5>

    </div>
</main>

<!-- Footer -->
<?php include('cms/08_inc/footer_ebene_1.php') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="javascript/main.js"></script>

</body>

</html>
