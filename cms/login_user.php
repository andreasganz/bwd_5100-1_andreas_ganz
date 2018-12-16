<?php require_once('09_sec/direct-url-prevention_ebene_2.php') ?>
<?php require_once('06_prefs/config.php') ?>
<?php require_once('03_login-validierung/login-validation_user.php') ?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Das User-Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Die deutsche Fanseite der New York Knicks">
    <meta name="revisit" content="After 30 days">
    <meta name="keywords" content="Fanpage, New York Knicks, Knicks Links">
    <meta name="author" content="Andreas Ganz">
    <link rel="icon" href="../pictures/logos/favicon_newyorkknicks_round_rgb.png" type="image/png" sizes="32x32">
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/zentral.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/responsive.css" rel="stylesheet" type="text/css">
</head>

<body class="bg_hellgrau">

<!-- Groessere Karten-Ansicht GoogleMaps -->
<div class="modal">
    <img src="../pictures/mobile/close-button_black.svg" class="modal-close" alt="Mobile-Close" title="Mobile-Close">
    <iframe class="modal-iframe"></iframe>
</div>

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
            <li><a href="../php/arena.php" title="Arena">Arena</a></li>
            <li><a href="../php/links.php" title="Links">Links</a></li>
            <li><a href="../cms/fan-forum.php" title="Fan-Forum">Fan-Forum</a></li>
            <li class="kontakt-button"><a href="../cms/kontakt.php" title="Kontakt">Kontakt</a></li>
        </ul>
        <a href="../cms/login_user.php" title="Login"><img src="../pictures/cms/login-button_round_grey.svg" class="login-button_screen" alt="Login-Button Screen" title="Login-Button Screen"><span id="offscreen">Aktiver Navigationspunkt: Login</span></a>
    </nav>

</header>

<!-- Main -->
<main id="main" class="content">
    <section>

<!-- Headline -->
        <h1>Das Login</h1>
        <h2>fürs Fan-Forum</h2>

<!-- Login-Formular -->
        <form class="login-form" method="post" action="login_user.php">
                <?php include('07_errors-success-files/errors-generator.php'); ?>
            <label class="form-field">
                <span class="form-label top">Username</span>
                <input class="form-input" type="text" name="username">
            </label>

            <label class="form-field">
                <span class="form-label">Passwort</span>
                <input class="form-input" type="password" name="password">
            </label>

            <button class="login-bestaetigung" type="submit" name="login_user">Login</button>
        </form>

        <p class="account-hinweis">Haben Sie noch kein Login? Dann registrieren Sie sich <a class="bold" href="../cms/registration.php" title="Link zur Registierungs-Site">hier</a></p>

    </section>
</main>

<!-- Footer -->
<?php include('../cms/08_inc/footer_ebene_2.php') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../javascript/main.js"></script>

</body>

</html>
