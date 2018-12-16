<?php require_once('09_sec/direct-url-prevention_ebene_2.php') ?>

<?php
  session_start();

  // Überprüfen, ob User eingeloggt ist, sonst Weiterleitung auf Login-Page
  if (!isset($_SESSION['username'])) {
    	$_SESSION['username'] = "Du musst dich erst einloggen";
    	header('location: login_user.php');
  }

  // Logout-Definition und Weiterleitung auf die Login-Page
  if (isset($_GET['logout'])) {
    	session_destroy();
    	unset($_SESSION['username']);
    	header("location: login_user.php");
  }
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Das CMS-Dashboard</title>
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
        <a href="../cms/login_user.php" title="Login"><img src="../pictures/cms/login-button_round_grey.svg" class="login-button_screen" alt="Login-Button Screen" title="Login-Button Screen"></a>
    </nav>

</header>

<!-- Main -->
<main id="main" class="content">
    <section>

<!-- Headline -->
        <h1>Das Dashboard</h1>
        <h2>fürs Fan-Forum</h2>

<!-- Logout-Button -->
        <a href="cms_dashboard.php?logout='1'"><img src="../pictures/cms/logout-button_round_grey.svg" alt="Logout-Button fürs CMS" class="logout-button"><span class="button_description logout">Logout</span></a>

<!-- Login-Formular -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Willkommen auf dem Dashboard, <span class="bold"><?php echo $_SESSION['username']; ?></span></p>
        <?php endif ?>

        <a href="../cms/upload.php" title="Neuer Eintrag">
        <div class="eintrag neu">
            <img src="../pictures/cms/add-button_round_green.svg" alt="Add-Button fürs CMS" class="add-button">
            <p>Neuen Eintrag erstellen</p>
        </div>
        </a>

        <a href="../cms/edit.php" title="Einträge bearbeiten">
        <div class="eintrag bearbeiten">
            <img src="../pictures/cms/edit-button_round_blue.svg" alt="Edit-Button fürs CMS" class="add-button">
            <p>Einträge bearbeiten</p>
        </div>
        </a>

        <a href="../cms/login_admin.php" title="Admin-Bereich">
        <div class="eintrag adminbereich">
            <img src="../pictures/cms/admin-button_round_grey.svg" alt="Admin-Button fürs CMS" class="add-button">
            <p>Admin-Bereich</p>
        </div>
        </a>

    </section>
</main>

<!-- Footer -->
<?php include('../cms/08_inc/footer_ebene_2.php') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../javascript/main.js"></script>

</body>

</html>
