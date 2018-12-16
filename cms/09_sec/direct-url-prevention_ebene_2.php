<?php
// Vordefinieren der URL-Variable
$url = '';

// Wenn versucht wird, direkt über die URL auf eine Site zuzugreifen, wird abgebrochen und auf die Homesite weitergeleitet
if ($_SERVER['HTTP_REFERER'] == $url) {
    header('Location: ../index.php');
    exit();
}
?>
