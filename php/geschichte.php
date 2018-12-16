<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Geschichte der Knicks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Die deutsche Fanseite der New York Knicks">
    <meta name="revisit" content="After 30 days">
    <meta name="keywords" content="Fanpage, New York Knicks, Knicks Geschichte">
    <meta name="author" content="Andreas Ganz">
    <link rel="icon" href="../pictures/logos/favicon_newyorkknicks_round_rgb.png" type="image/png" sizes="32x32">
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/zentral.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/responsive.css" rel="stylesheet" type="text/css">
</head>

<body class="bg_hellgrau">

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
            <li><a href="../php/geschichte.php" class="aktuelle_seite" title="Geschichte">Geschichte</a><span id="offscreen">Aktiver Navigationspunkt: Geschichte</span></li>
            <li><a href="#" title="Team">Team</a>
                <ul>
                    <li><a href="../php/roster.php" title="Roster">Roster</a></li>
                    <li><a href="../php/statistiken.php" title="Statistiken">Statistiken</a></li>
                </ul>
            </li>
            <li><a href="../php/arena.php" title="Arena">Arena</a></li>
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

        <h1>Geschichte</h1>
        <h2>des Teams</h2>

        <p>Die Knicks sind neben den Boston Celtics und den Golden State Warriors (ehemals Philadelphia Warriors) der einzige Club, der seit der Gründung der Liga 1946 existiert und sind ein Teil der Atlantic Division in der Eastern Conference der NBA. <br /><br />
        <span class="bold">1946–1967:</span> Das erste Spiel fand am 1. November 1946 in Toronto zwischen den Knicks und den Toronto Huskies statt. <br />
        <span class="bold">1967–1975:</span> 1970 gewannen die Knicks ihre erste Meisterschaft, 1973 holten sie sich den zweiten und bisher letzten NBA-Titel. <br />
        <span class="bold">1975–2008:</span> Die Knicks fallen nach einigen sehr erfolgreichen Jahren zurück ins Mittelmass, grosse Erfolge bleiben aus. <br />
        <span class="bold">2008-2017:</span> Während einigen turbulenten Jahren mit vielen Trainer- und Spielerwechseln befindet sich das Team wieder im Aufschwung. <br /><br />
        <span class="bold">Um die Gallery zu öffnen, einfach auf eines der Bilder klicken.</span>
        </p>

<!-- Image-Gallery -->
        <div class="gallery bildstrecke" data-gallery>
            <img class="artikelbild" src="../pictures/geschichte/walt_frazier_ingame_small_rgb.png"
            data-full-image="../pictures/geschichte/walt_frazier_ingame_rgb.png"
            alt="Der wohl beste Knicks-Spieler aller Zeiten: Walt Frazier" title="Der wohl beste Knicks-Spieler aller Zeiten: Walt Frazier">

            <img class="artikelbild" src="../pictures/geschichte/knicks_logo_uniforms_small_rgb.png"
            data-full-image="../pictures/geschichte/knicks_logo_uniforms_rgb.png"
            alt="Die Entwicklung der Logos und Trikots seit 1946" title="Die Entwicklung der Logos und Trikots seit 1946">
        </div>

    </section>
</main>

<!-- Footer -->
<?php include('../cms/08_inc/footer_ebene_2.php') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../javascript/main.js"></script>

</body>

</html>
