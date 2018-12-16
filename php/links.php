<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Die besten Links</title>
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
            <li><a href="../php/links.php" class="aktuelle_seite" title="Links">Links</a><span id="offscreen">Aktiver Navigationspunkt: Links</span></li>
            <li><a href="../cms/fan-forum.php" title="Fan-Forum">Fan-Forum</a></li>
            <li class="kontakt-button"><a href="../cms/kontakt.php" title="Kontakt">Kontakt</a></li>
        </ul>
        <a href="../cms/login_user.php" title="Login"><img src="../pictures/cms/login-button_round_grey.svg" class="login-button_screen" alt="Login-Button Screen" title="Login-Button Screen"></a>
    </nav>

</header>

<!-- Main -->
<main id="main" class="content">
    <section>

<!-- Link-Auflistung -->
        <h1>Die besten Links</h1>
        <h2>der Knicks</h2>

            <p class="links">Für alle Anhänger des orange-farbenen Lederballs: <br />
            Die offizielle Seite der NBA: <a class="bold" href="http://www.nba.com" title="Link zu www.nba.com" target="_blank">www.nba.com</a></p>

            <p class="links">Hier kommen alle Fans der New York Knicks auf ihre Kosten: <br />
            Die offizielle Seite der New York Knicks: <a class="bold" href="http://www.nba.com/knicks" title="Link zu www.nba.com/knicks" target="_blank">www.nba.com/knicks</a></p>

            <p class="links">Sie sind auf der Suche nach den aktuellsten Fan-Artikeln? <br />
            Der offizielle Fanshop der New York Knicks: <a class="bold" href="http://www.nyknicksstore.com" title="Link zu www.nyknicksstore.com" target="_blank">www.nyknicksstore.com</a></p>

            <p class="links">Möchten Sie gerne das Mekka des Basketballs und eine der bekanntesten Arenen der Welt besuchen? <br />
            Die offizielle Seite des Madison Square Garden: <a class="bold" href="https://www.msg.com" title="Link zu www.msg.com" target="_blank">www.msg.com</a></p>

    </section>
</main>

<!-- Footer -->
<?php include('../cms/08_inc/footer_ebene_2.php') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../javascript/main.js"></script>

</body>

</html>
