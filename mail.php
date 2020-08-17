<?php

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if (!empty($name) && !empty($email) && !empty($message)) {
        $name = trim(htmlspecialchars($name));
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email) {
            $mess = "Email incorrect";
            header("Location:contact.php?error=$mess");
            exit();
        } else {
            $to = 'amar91syll@gmail.com';
            $subject = 'Message de contact';
            $body = "Name: $name\nEmail: $email\nmessage: $message";
           // mail($to, $subject, $body);
            $mess = "Votre message a bien ete envoye";
            header("Location:contact.php?message=$mess");
        }
    } else {
        $mess = "Donnees manquantes";
        header("Location:contact.php?error=$mess");
    }


}


















