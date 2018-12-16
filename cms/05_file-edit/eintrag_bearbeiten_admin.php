<?php require_once('../09_sec/direct-url-prevention_ebene_3.php') ?>
<?php require_once('../06_prefs/config.php') ?>
<?php require_once('../../cms/05_file-edit/edit-proccess_admin.php') ?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Das Update-Form für den Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Die deutsche Fanseite der New York Knicks">
    <meta name="revisit" content="After 30 days">
    <meta name="keywords" content="Fanpage, New York Knicks, Knicks Links">
    <meta name="author" content="Andreas Ganz">
    <link rel="icon" href="../../pictures/logos/favicon_newyorkknicks_round_rgb.png" type="image/png" sizes="32x32">
    <link href="../../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../../css/zentral.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../css/responsive.css" rel="stylesheet" type="text/css">
</head>

<body class="bg_hellgrau">

<!-- Groessere Karten-Ansicht GoogleMaps -->
<div class="modal">
    <img src="../../pictures/mobile/close-button_black.svg" class="modal-close" alt="Mobile-Close" title="Mobile-Close">
    <iframe class="modal-iframe"></iframe>
</div>

<!-- Skip-Links -->
<?php include('../../cms/08_inc/skip-links.php') ?>

<header>

<!-- Logo -->
<?php include('../../cms/08_inc/logo_ebene_3.php') ?>

<!-- Menu-Balken Mobile -->
<?php include('../../cms/08_inc/menu-balken_mobile_ebene_3.php') ?>

<!-- Navigation Mobile -->
<?php include('../../cms/08_inc/navigation_mobile_ebene_3.php') ?>

<!-- Navigation Screen -->
    <nav id="navigation">
        <ul>
            <li><a href="../../php/geschichte.php" title="Geschichte">Geschichte</a></li>
            <li><a href="#" title="Team">Team</a>
                <ul>
                    <li><a href="../../php/roster.php" title="Roster">Roster</a></li>
                    <li><a href="../../php/statistiken.php" title="Statistiken">Statistiken</a></li>
                </ul>
            </li>
            <li><a href="../../php/arena.php" title="Arena">Arena</a></li>
            <li><a href="../../php/links.php" title="Links">Links</a></li>
            <li><a href="../../cms/fan-forum.php" title="Fan-Forum">Fan-Forum</a></li>
            <li class="kontakt-button"><a href="../../cms/kontakt.php" title="Kontakt">Kontakt</a></li>
        </ul>
        <a href="../../cms/login_user.php" title="Login"><img src="../../pictures/cms/login-button_round_grey.svg" class="login-button_screen" alt="Login-Button Screen" title="Login-Button Screen"><span id="offscreen">Aktiver Navigationspunkt: Login</span></a>
    </nav>

</header>

<!-- Main -->
<main id="main" class="content">
    <section>

<!-- Headline -->
        <h1>Das Admin-Update-Form</h1>
        <h2>fürs Fan-Forum</h2>

<!-- Back-to-Admin-Button -->
        <a href="../admin.php"><img src="../../pictures/cms/back-button_round_grey.svg" alt="Back-to-Admin-Button fürs CMS" class="dashboard_overview"><span class="button_description back">Admin-Bereich</span></a>

<!-- Update-Formular -->
        <form class="login-form" method="post" action="eintrag_bearbeiten_admin.php" enctype="multipart/form-data">

        <?php include('../07_errors-success-files/errors-generator.php'); ?>
        <?php include('../07_errors-success-files/success-generator.php'); ?>

            <!-- Versteckte Angabe der ID des ausgewählten Datensatzes -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <!-- Autor (Optional) -->
            <label class="form-field">
                <span class="form-label top">Autor <span class="grau">(bei Update obligatorisch)</span></span>
                <input class="form-input" type="text" name="autor" value="<?php echo $autor; ?>">
            </label>

            <!-- Headline -->
            <label class="form-field">
                <span class="form-label">Headline</span>
                <input class="form-input" type="text" name="headline" value="<?php echo $headline; ?>">
            </label>

            <!-- Copy -->
            <label class="form-field">
                <span class="form-label">Copy</span>
                <textarea class="form-input copy" rows="8" type="text" name="copy"><?php echo $copy; ?></textarea>
            </label>

            <!-- Anmerkung, dass kein neues Bild ausgewählt werden muss wenn nicht gewünscht -->
            <p class="dont_update_pic">Kein neues Bild? Einfach auf «Updaten» klicken</p>

            <!-- Bild -->
            <label class="form-field">
                <input type="file" name="image" id="image" class="inputfile" value="<?php echo $image; ?>" data-multiple-caption="{count} files selected"/>
                <label for="image"><p class="pic-button no_update">Bild wählen</p><span class="pic-button_description"></span></label>
            </label>

            <!-- Update-/Clear-Button -->
            <button class="upload-button" type="submit" name="update">Updaten</button>
            <button class="clear-button" type="submit" name="clear">Clear</button>

        </form> <br><br>

    </section>
</main>

<!-- Footer -->
<?php include('../../cms/08_inc/footer_ebene_3.php') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../../javascript/main.js"></script>
<script src="../../javascript/bild-input_upload-form.js"></script>

</body>

</html>
