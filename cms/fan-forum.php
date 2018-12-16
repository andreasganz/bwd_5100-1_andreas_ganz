<?php require_once('../cms/06_prefs/config.php') ?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Das Fan-Forum</title>
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
            <li><a href="../php/links.php" title="Links">Links</a></li>
            <li><a href="../cms/fan-forum.php" class="aktuelle_seite" title="Fan-Forum">Fan-Forum</a><span id="offscreen">Aktiver Navigationspunkt: Fan-Forum</span></li>
            <li class="kontakt-button"><a href="../cms/kontakt.php" title="Kontakt">Kontakt</a></li>
        </ul>
        <a href="../cms/login_user.php" title="Login"><img src="../pictures/cms/login-button_round_grey.svg" class="login-button_screen" alt="Login-Button Screen" title="Login-Button Screen"></a>
    </nav>

</header>

<!-- Main -->
<main id="main" class="content">
    <section>

<!-- Artikel-Auflistung -->
        <h1>Das Fan-Forum</h1>
        <h2>für alle Fans</h2>

        <p>Sie möchten einen Artikel verfassen? Dann müssen Sie sich erst <a class="bold" href="../cms/login_user.php" title="Link zur Registierungs-Site">einloggen.</a> <br>
        <span class="grau">Wenn Sie einen Artikel löschen möchten oder den Inhalt unangebracht finden, wenden Sie sich über das <a class="bold grau" href="../cms/kontakt.php" target="_blank" title="Link zur Kontakt-Site">Kontakt-Formular</a> an den Seitenbetreiber.</span></p>

        <?php
        // Darstellen aller erstellten Einträge
        $errors = array();

        if (count($errors) == 0) {
          // Ausgabe der Daten aus der Upload-Datenbank (Neuester Eintrag zuerst)
          $sql = "SELECT * FROM data ORDER BY date DESC";
          $result = mysqli_query($db, $sql);
          while ($row = mysqli_fetch_array($result)) {
              echo "<div class='artikel'>";

              // Bild
              echo "<img class='pic_fan-forum' src='../cms/04_file-upload/images/".$row['image']."' >";

              // Datum
              // Neuformulierung des datetime-Formats
              $dateFormat = $row['date'];
              $date = new DateTime($dateFormat);
              // Ausgabe des angepassten Datums und des Autors (falls gewünscht)
              echo "<p class='date_autor'>".$date->format('d.m.Y, H:i')." &#124; "."<span class='schwarz'>".$row['autor']."</span>"."</p>";

              // Headline
              echo "<h3>".$row['headline']."</h3>";

              // Copy
              echo "<p>".$row['copy']."</p>";

              echo "</div>";
          }
        }
        ?>

    </section>
</main>

<!-- Footer -->
<?php include('../cms/08_inc/footer_ebene_2.php') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../javascript/main.js"></script>

</body>

</html>
