<?php
// Fehler-Ausgabe wird vordefiniert
$errors = array();
$successes = array();

if (isset($_POST['upload'])) {
    // Alle übermittelten Daten vom Formular sammeln
    $image = $_FILES['image']['name'];
    $headline = $_POST['headline'];
    $copy = $_POST['copy'];
    $autor = $_POST['autor'];

    // Überprüfung, ob Formular-Felder alle korrekt ausgefüllt wurden
    // Mit dem "array_push()"-Befehl werden die Fehlermeldungen unter der "$errors"-Array abgelegt
    if (empty($headline)) {
        array_push($errors, "Headline eingeben");
    }
    if (empty($copy)) {
        array_push($errors, "Copy eingeben");
    }
    if (empty($image)) {
        array_push($errors, "Bild auswählen");
    }

    // Bild-Validation
    $error = false; // Definition der Status Variable
    // Definition der erlaubten Datenformate
    $erlaubte_dateiformate = array('image/jpeg','image/gif','image/png');
    // Fehlerausgaben bei falscher Bild-Validation
    if (count($errors) == 0) {
      if (isset($_FILES['image'])) {
        // Dateiformat einschränken
        if (!in_array($_FILES['image']['type'], $erlaubte_dateiformate)) {
            array_push($errors, "Dieser Dateityp ist nicht erlaubt: Verwenden Sie JPEGs, GIFs oder PNGs!");
        		$error = true;
      	}
        // Auf Upload-Fehler prüfen
        if ($_FILES['image']['error'] > 0) {
            array_push($errors, "Fehler beim Upload: Versuchen Sie die Datei erneut hochzuladen!");
        		$error = true;
      	}
        // Dateigrösse auf 1MB beschränken
        if ($_FILES['image']['size'] > (1024*1024)) {
            array_push($errors, "Die Datei ist zu gross: max. 1MB erlaubt!");
        		$error = true;
      	}
      }
    }

    // Wenn keine Fehlermeldungen mehr generiert werden, wird der Artikel in die Datenbank gespeichert
    if (count($errors) == 0) {
    // Definieren, wo die übermittelten Daten in der Datenbank abgelegt werden sollen
    $sql = "INSERT INTO data (image, headline, copy, autor) VALUES ('$image', '$headline', '$copy', '$autor')";
    // Übertragen der übermittelten Daten in die Datenbank
    $result = mysqli_query($db, $sql);
    // Anzeige nach erfolgreicher Übermittlung
    array_push($successes, "Ihr Eintrag war erfolgreich!");
    array_push($successes, "<p class='schwarz success-after'>Ansehen können Sie sich das Resultat auf dem <a class='bold' target='_blank' href='../cms/fan-forum.php'>Fan-Forum</a></p>");

    // Definieren, wo die hochgeladenen Bilder abgelegt werden sollen
    $target = "04_file-upload/images/".basename($_FILES['image']['name']);

    // Bild wird in Ordner im angegebenen Pfad übertragen
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    }
}

// Pro Usability: Der User muss bei einer falschen oder schon vorhandenen Eingabe nicht noch mal alle Felder ausfüllen
// Nach dem Absenden werden die Eingaben wieder in die "Value"-Eingaben im Formular übertragen
if (isset($_POST['upload'])) {
    // Übergabe der Formular-Eingaben an die Variabeln
    $imageValue = $_FILES['image']['name'];
    $headlineValue = $_POST['headline'];
    $copyValue = $_POST['copy'];
    $autorValue = $_POST['autor'];
} else {
    // Variabeln werden leer gesetzt, damit beim ersten Durchgang kein Fehler generiert wird
    $imageValue = "";
    $headlineValue = "";
    $copyValue = "";
    $autorValue = "";
}

// Felder werden nach erfolgreicher Übermittlung wieder geleert, damit die Daten nicht versehentlich doppelt übermittelt werden
if (count($errors) == 0) {
    $imageValue = "";
    $headlineValue = "";
    $copyValue = "";
    $autorValue = "";
}
?>
