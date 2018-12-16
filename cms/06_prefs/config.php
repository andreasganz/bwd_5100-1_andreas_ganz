<?php
session_start();

// Datenbank-Credentials
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "root";
$dbName = "cms_knicks-fanpage";

// Mit Datenbank verbinden
$db = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

// Fehlerausgabe bei fehlgeschlagener Verbindung
if (mysqli_connect_errno()) {
    die("Die Datenbank-Verbindung ist fehlgeschlagen: ".mysqli_connect_error());
}
?>
