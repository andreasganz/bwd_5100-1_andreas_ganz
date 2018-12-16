<?php
// Funktion definieren um nach ungültigen Eingaben zu suchen
// Das dritte Argument (&$suspect) wird durch eine Referenz übergeben
function isSuspect($value, $pattern, &$suspect) {
    if (is_array($value)) {
        foreach ($value as $item) {
            isSuspect($item, $pattern, $suspect);
        }
    } else {
        if (preg_match($pattern, $value)) {
            $suspect = true;
        }
    }
}

// Die $_POST-Array wird nach ungültigen Eingaben durchsucht
isSuspect($_POST, $pattern, $suspect);

// Formular wird nur weiter validert, wenn es keine ungültigen Eingaben gab
if (!$suspect) :
    // Überprüfung, ob alle erforderlichen Felder ausgefüllt sind und diese wieder Variabeln zuweisen
    foreach ($_POST as $key => $value) {
        $value = is_array($value) ? $value : trim($value);
        if (empty($value) && in_array($key, $required)) {
            $missing[] = $key;
            $$key = '';
        } elseif (in_array($key, $expected)) {
            $$key = $value;
        }
    }
    // Das Absender-Mail wird validiert
    if (!$missing && !empty($email)) :
        $validemail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if ($validemail) {
            $headers[] = "Reply-to: $validemail";
        } else {
            $errors['email'] = true;
        }
    endif;
    // Falls keine Fehler auftreten, soll der Header- und Body-Text des Mails erstellt werden
    if (!$errors && !$missing) :
        $headers = implode("\r\n", $headers);
        // Nachricht wird initialisiert
        $message = '';
        foreach ($expected as $field) :
            if (isset($$field) && !empty($$field)) {
                $val = $$field;
            } else {
                $val = 'Nicht ausgewählt';
            }
            // Falls es sich um ein Array handelt, wird diese in einen Komma-getrennten String umgewandelt
            if (is_array($val)) {
                $val = implode(', ', $val);
            }
            // Underscores in Field-Names werden mit Abständen ersetzt
            $field = str_replace('_', ' ', $field);
            $message .= ucfirst($field) . ": $val\r\n\r\n";
        endforeach;
        $message = wordwrap($message, 70);
        $mailSent = mail($to, $subject, $message, $headers, $authorized);
        if (!$mailSent) {
            $errors['mailfail'] = true;
        }
    endif;
endif;
