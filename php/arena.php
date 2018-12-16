<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Arena</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Die deutsche Fanseite der New York Knicks">
    <meta name="revisit" content="After 30 days">
    <meta name="keywords" content="Fanpage, New York Knicks, MSG, Madison Square Garden">
    <meta name="author" content="Andreas Ganz">
    <link rel="icon" href="../pictures/logos/favicon_newyorkknicks_round_rgb.png" type="image/png" sizes="32x32">
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/zentral.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/responsive.css" rel="stylesheet" type="text/css">
</head>

<body class="bg_hellorange">

<!-- Skip-Links -->
<?php include('../cms/08_inc/skip-links.php') ?>

<header>

<!-- Logo -->
<?php include('../cms/08_inc/logo_ebene_2.php') ?>

<!-- Menu-Balken Mobile -->
<?php include('../cms/08_inc/menu-balken_mobile_ebene_2.php') ?>

<!-- Navigation Mobile -->
<?php include('../cms/08_inc/navigation_mobile_ebene_2.php') ?>

<!-- Navigation Screen -->
    <nav id="navigation">
        <ul>
            <li><a href="../php/geschichte.php" title="Geschichte">Geschichte</a></li>
            <li><a href="#" title="Team">Team</a>
                <ul>
                    <li><a href="../php/roster.php" title="Roster">Roster</a></li>
                    <li><a href="../php/statistiken.php" title="Statistiken">Statistiken</a></li>
                </ul>
            </li>
            <li><a href="../php/arena.php" class="aktuelle_seite" title="Arena">Arena</a><span id="offscreen">Aktiver Navigationspunkt: Arena</span></li>
            <li><a href="../php/links.php" title="Links">Links</a></li>
            <li><a href="../cms/fan-forum.php" title="Fan-Forum">Fan-Forum</a></li>
            <li class="kontakt-button"><a href="../cms/kontakt.php" title="Kontakt">Kontakt</a></li>
        </ul>
        <a href="../cms/login_user.php" title="Login"><img src="../pictures/cms/login-button_round_grey.svg" class="login-button_screen" alt="Login-Button Screen" title="Login-Button Screen"></a>
    </nav>

</header>

<!-- Main -->
<main id="main" class="content">
    <section>

        <h1>Der «MSG»</h1>
        <h2>Die Arena der Knicks</h2>

        <p>Der Madison Square Garden, oder kurz «MSG» genannt, ist eine der bekanntesten Arenen der Welt und das Heim-Stadion der New York Knicks. Die Halle hat ihren eigenen Fernsehsender und bezeichnet sich selbst als «The World’s Most Famous Arena». Die Mehrzweck-Arena in Manhattan wird vor allem für Sportveranstaltungen (Boxen, Basketball, Eishockey) und Konzerte genutzt. Das heutige Gebäude wurde ab 1963 über den Gleis-Anlagen des Bahnhofs «Pennsylvania Station» errichtet.<br />
        Der Komplex besteht heute aus Kongresszentrum, Kino, Theater und Sportfeld. Die Arena bietet bei Spielen der Knicks Platz für 19'763 Besucher. Die Kosten des Baus beliefen sich auf ungefähr 123 Mio. US-Dollar. <br />
        Wenn Sie mehr über die Arena erfahren oder sich aktuelle Veranstaltungen ansehen möchten, gehen Sie zur «Links»-Seite oder klicken Sie <a class="bold" href="https://www.msg.com" title="Link zu www.msg.com" target="_blank">hier.</a> <br /><br />
        <span class="bold">Um die Gallery zu öffnen, einfach auf eines der Bilder klicken.</span>
        </p>

<!-- Image-Gallery -->
        <div class="gallery bildstrecke" data-gallery>
            <img class="artikelbild" src="../pictures/arena/msg_bau_vogelperspektive_small_rgb.png"
            data-full-image="../pictures/arena/msg_bau_vogelperspektive_rgb.png"
            alt="Der Madison Square Garden im Bau (1968)" title="Der Madison Square Garden im Bau (1968)">

            <img class="artikelbild" src="../pictures/arena/msg_innenansicht_knicks-court_small_rgb.png"
            data-full-image="../pictures/arena/msg_innenansicht_knicks-court_rgb.png"
            alt="Innenansicht und Sitzplan bei Basketball-Spielen" title="Innenansicht und Sitzplan bei Basketball-Spielen">

            <img class="artikelbild" src="../pictures/arena/msg_aussenansicht_small_rgb.png"
            data-full-image="../pictures/arena/msg_aussenansicht_rgb.png"
            alt="Aussenansicht des Madison Square Garden (2017)" title="Aussenansicht des Madison Square Garden (2017)">
        </div>

    </section>
</main>

<!-- Footer -->
<?php include('../cms/08_inc/footer_ebene_2.php') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../javascript/main.js"></script>

</body>

</html>
