<?php
// Definieren der Variabel für Fehler-Ausgaben
$errors = [];
// Definieren der Variabel für fehlende Felder
$missing = [];
// Angenommen der Input enthält keine komischen Zeichen
$suspect = false;
// Variable definieren dass Mail noch nicht abgeschickt wurde
$mailSent = false;
// Variable definieren um nach ungültigen Eingaben zu suchen
$pattern = '/Content-type:|Bcc:|Cc:/i';

// Definition der Befehle beim drücken vom "Abschicken"-Button
if (isset($_POST['send'])) {
    $expected = ['name', 'email', 'nachricht'];
    $required = ['name', 'email', 'nachricht'];
    $to = 'Andreas Ganz <andreas.ganz@hotmail.com>';
    $subject = 'Feedback auf die Knicks-Fanpage';
    $headers = [];
    $headers[] = 'From: andreas.ganz@hotmail.com';
    // $headers[] = 'Cc: andreas.ganz@hotmail.com';
    $headers[] = 'Content-type: text/plain; charset=utf-8';
    $authorized = null; // '-fandreas.ganz@hotmail.com';
    require './01_mail-validierung/mail-validation.php';
    if ($mailSent) {
        header('Location: 01_mail-validierung/mailversand_user-nachricht.php');
        exit;
    }
}

// Pro Usability: Der User muss bei einer falschen oder schon vorhandenen Eingabe nicht noch mal alle Felder ausfüllen
// Nach dem Absenden werden die Eingaben wieder in die "Value"-Eingaben im Formular übertragen
if (isset($_POST['send'])) {
    // Übergabe der Formular-Eingaben an die Variabeln
    $nameValue = $_POST['name'];
    $emailValue = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $nachrichtValue = $_POST['nachricht'];
} else {
    // Variabeln werden leer gesetzt, damit beim ersten Durchgang kein Fehler generiert wird
    $nameValue = "";
    $emailValue = "";
    $nachrichtValue = "";
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Kontakt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Die deutsche Fanseite der New York Knicks">
    <meta name="revisit" content="After 30 days">
    <meta name="keywords" content="Fanpage, New York Knicks, Kontakt">
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
            <li class="kontakt-button"><a href="../cms/kontakt.php" class="aktuelle_seite" title="Kontakt">Kontakt</a><span id="offscreen">Aktiver Navigationspunkt: Kontakt</span></li>
        </ul>
        <a href="../cms/login_user.php" title="Login"><img src="../pictures/cms/login-button_round_grey.svg" class="login-button_screen" alt="Login-Button Screen" title="Login-Button Screen"></a>
    </nav>

</header>

<!-- Main -->
<main id="main" class="content">
    <section>

        <h1>Kontaktieren</h1>
        <h2>Sie mich</h2>

<!-- Kontakt-Formular -->
        <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">

            <!-- Vorname/Nachname -->
            <label class="form-field" for="name">
                <span class="form-label top">Vorname/Nachname
                    <?php if ($missing && in_array('name', $missing)) : ?>
                        <span class="warning">&emsp;Vorname und Nachname eingeben</span>
                    <?php endif; ?>
                </span>
                <input class="form-input" type="text" name="name" id="name" value="<?=$nameValue?>">
            </label>

            <!-- Mail-Adresse -->
            <label class="form-field" for="email">
                <span class="form-label">E-Mail-Adresse
                    <?php if ($missing && in_array('email', $missing)) : ?>
                        <span class="warning">&emsp;Mail-Adresse eingeben</span>
                    <?php elseif (isset($errors['email'])) : ?>
                        <span class="warning">&emsp;Ungültige Mail-Adresse!</span>
                    <?php endif; ?>
                </span>
                <input class="form-input" type="email" name="email" id="email" value="<?=$emailValue?>">
            </label>

            <!-- Nachricht -->
            <label class="form-field" for="nachricht">
                <span class="form-label">Ihre Nachricht
                    <?php if ($missing && in_array('nachricht', $missing)) : ?>
                        <span class="warning">&emsp;Kommentar eingeben<br></span>
                    <?php endif; ?>
                </span>
                <textarea class="form-input nachricht" type="text" name="nachricht" id="nachricht"><?=$nachrichtValue?>
                </textarea>
            </label>

            <!-- Send-Button -->
            <button class="send-button" type="submit" name="send" id="send">Abschicken</button>

        <!-- Fehlermeldung, falls Mail nicht abgeschickt werden kann -->
        <?php if ($_POST && ($suspect || isset($errors['mailfail']))) : ?>
            <p class="warning"><br>Sorry, Ihre Mail konnte leider nicht verschickt werden.</p>
        <?php endif; ?>

        </form>

<!-- Adressblock rechts -->
        <aside>
            <p class="adresse"> <span class="bold">Andreas Ganz</span> <br /> Letzigraben 5 <br /> 8003 Zürich</p>
            <p><span class="bold">Mobile:</span> 079 730 07 99 <br />
            <span class="bold">Mail:</span> <a href="mailto:andreas.ganz@hotmail.com?subject=Knicks-Fanpage" title="Mail an andreas.ganz@hotmail.com">andreas.ganz@hotmail.com</a></p>

            <p>Für eine grössere Ansicht der Karte <a href="#" data-modal-link="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.615380893819!2d8.502054115840977!3d47.380424811567536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a31c7e0ad33%3A0xeda37f6b400b3a0e!2sLetzigraben+5%2C+8003+Z%C3%BCrich!5e0!3m2!1sde!2sch!4v1511898371952"><span class="bold">hier</span></a> klicken.</p>

<!-- Google-Maps-Karte -->
            <iframe class="googlemaps_klein" title="Google-Maps-Karte für Letzigraben 5" tabindex="-1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.615380893819!2d8.502054115840977!3d47.380424811567536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a31c7e0ad33%3A0xeda37f6b400b3a0e!2sLetzigraben+5%2C+8003+Z%C3%BCrich!5e0!3m2!1sde!2sch!4v1511898371952">
            </iframe>
        </aside>

    </section>
</main>

<!-- Footer -->
<?php include('../cms/08_inc/footer_ebene_2.php') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../javascript/main.js"></script>

</body>

</html>
