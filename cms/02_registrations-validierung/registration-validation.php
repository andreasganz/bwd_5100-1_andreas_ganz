<?php
// User-Registration-Definition

// Fehler-Ausgabe wird vordefiniert
$errors = array();

// Bei gedrücktem Registration-Button Variabeln definieren
if (isset($_POST['reg_user'])) {
  // Alle Daten aus den Formular-Feldern auslesen und in Variabeln definieren
  $username = mysqli_real_escape_string($db, filter_var($_POST['username'], FILTER_SANITIZE_STRING));
  $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
  $password_1 = mysqli_real_escape_string($db, filter_var($_POST['password_1'], FILTER_SANITIZE_STRING));
  $password_2 = mysqli_real_escape_string($db, filter_var($_POST['password_2'], FILTER_SANITIZE_STRING));

  // Überprüfung, ob Formular-Felder alle korrekt ausgefüllt wurden
  // Mit dem "array_push()"-Befehl werden die Fehlermeldungen unter der "$errors"-Array abgelegt
  if (empty($username)) {
      array_push($errors, "Username wird benötigt");
  }
  if (empty($email)) {
      array_push($errors, "E-Mail-Adresse wird benötigt");
  }
  if (empty($password_1)) {
      array_push($errors, "Passwort wird benötigt");
  }
  if ($password_1 != $password_2) {
    	array_push($errors, "Die beiden Passwörter stimmen nicht überein");
  }

  // Überprüfung, ob der User nicht schon mit dem gleichen Usernamen und/oder Mail registriert ist
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  // Fehlermeldung falls der User bereits besteht
  if ($user) {
    if ($user['username'] === $username) {
        array_push($errors, "Username besteht bereits");
    }
    // Fehlermeldung falls die E-Mail-Adresse bereits besteht
    if ($user['email'] === $email) {
        array_push($errors, "E-Mail-Adresse besteht bereits");
    }
  }

  // User wird registriert, wenn keine Fehlermeldungen mehr generiert werden
  if (count($errors) == 0) {
    // Das Passwort wird noch verschlüsselt, bevor es in die Datenbank eingespeist wird
    $password = password_hash($password_1, PASSWORD_DEFAULT);

    // Daten werden in die jeweiligen Tabellen übertragen
  	$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Du bist jetzt eingeloggt";
  	header('location: cms_dashboard.php');
  }
}

// Pro Usability: Der User muss bei einer falschen oder schon vorhandenen Eingabe nicht noch mal alle Felder ausfüllen
// Nach dem Absenden werden die Eingaben wieder in die "Value"-Eingaben im Formular übertragen
if (isset($_POST['reg_user'])) {
    // Übergabe der Formular-Eingaben an die Variabeln
    $usernameValue = $_POST['username'];
    $emailValue = $_POST['email'];
} else {
    // Variabeln werden leer gesetzt, damit beim ersten Durchgang kein Fehler generiert wird
    $usernameValue = "";
    $emailValue = "";
    $password1Value = "";
    $password2Value = "";
}
?>
