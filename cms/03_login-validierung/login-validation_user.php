<?php
// User-Login-Definition

// Fehler-Ausgabe wird vordefiniert
$errors = array();

// Bei gedrücktem Login-Button Variabeln definieren
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, filter_var($_POST['username'], FILTER_SANITIZE_STRING));
  $password = mysqli_real_escape_string($db, filter_var($_POST['password'], FILTER_SANITIZE_STRING));

  // Fehlerausgaben bei leeren Eingabe-Feldern
  if (empty($username && $password)) {
    	array_push($errors, "Username und Passwort eingeben");
  }

  // Wenn keine Fehlermeldungen mehr generiert werden, Username- und Login-Check
  if (count($errors) == 0) {
    $query = "SELECT * FROM users WHERE username='$username'";
  	$results = mysqli_query($db, $query);
    $check = mysqli_fetch_assoc($results);

    // Wenn übergebenes Passwort mit dem in der Datenbank übereinstimmt, Weiterleitung aufs Dashboard
		if(password_verify($password, $check['password'])){
    	  $_SESSION['username'] = $username;
    	  $_SESSION['success'] = "Du bist jetzt eingeloggt";
    	  header('location: cms_dashboard.php');
    } else {
        array_push($errors, "Falscher Username oder falsches Passwort");
    }
  }
}
?>
