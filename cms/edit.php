<?php require_once('09_sec/direct-url-prevention_ebene_2.php') ?>
<?php require_once('06_prefs/config.php') ?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Das Edit-Form</title>
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

<!-- Artikel-Auflistung -->
        <h1>Das Edit-Form</h1>
        <h2>fürs Fan-Forum</h2>

        <p class="login-hinweis">Wenn Sie einen Artikel löschen möchten oder den Inhalt unangebracht finden, wenden Sie sich über das <a class="bold grau" href="../cms/kontakt.php" target="_blank" title="Link zur Kontakt-Site">Kontakt-Formular</a> an den Seitenbetreiber.</p>

<!-- Back-to-Dashboard-Button -->
        <a href="cms_dashboard.php"><img src="../pictures/cms/back-button_round_grey.svg" alt="Back-to-Dashboard-Button fürs CMS" class="dashboard_overview"><span class="button_description back">Dashboard</span></a>

              <?php
              // Vordefinieren der benötigten Variabeln
              $image = '';
              $headline = '';
              $copy = '';
              $autor = '';

              // Vordefinieren der Result-Variable für die while-Schlaufe (Neuester Eintrag zuerst)
              $result = $db->query("SELECT * FROM data ORDER BY date DESC") or die($db->error);
                  // Aufruf und Ausgabe aller Daten aus "data"
                  while ($row = mysqli_fetch_array($result)): ?>
                      <div class="eintrag-auflistung">

                          <!-- Bild -->
                          <?php echo "<img class='eintrag-bild' src='04_file-upload/images/".$row['image']."' >"; ?>

                          <!-- Datum -->
                          <?php
                          $dateFormat = $row['date'];
                          $date = new DateTime($dateFormat);
                          // Ausgabe des angepassten Datums und des Autors (falls gewünscht)
                          echo "<p class='date_autor'>".$date->format('d.m.Y, H:i')." &#124; "."<span class='schwarz'>".$row['autor']."</span>"."</p>";
                          ?>

                          <!-- Headline -->
                          <?php echo "<h3 class='hl_edit'>".$row['headline']."</h3>"; ?>

                          <!-- Copy -->
                          <?php echo "<p>".$row['copy']."</p>"; ?>

                          <!-- Edit-Button -->
                          <a href="05_file-edit/eintrag_bearbeiten_user.php?edit=<?php echo $row['id']; ?>">
                              <img class="edit-button" src="../pictures/cms/edit-button_round_grey.svg"
                              alt="Edit-Button fürs CMS" name="edit">
                                  <span class="edit_description">Eintrag bearbeiten</span>
                          </a>
                      </div>
              <?php endwhile; ?>

      </section>
</main>

<!-- Footer -->
<?php include('../cms/08_inc/footer_ebene_2.php') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../javascript/main.js"></script>

</body>

</html>
