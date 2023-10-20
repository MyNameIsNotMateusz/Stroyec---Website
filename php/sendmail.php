<?php

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $message = $_POST["message"];

    if (!validateEmail($email)) {
        echo "Proszę podać prawidłowy adres e-mail!";
        exit;
    }

    $to = "czesio170@gmail.com";
    $subject = "Prosba o kontakt";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Wiadomość wysłana pomyślnie!";
    } else {
        echo "Błąd wysyłania wiadomości.";
    }
}
?>
