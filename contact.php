<?php
if (isset($_POST['email'])) {

    // REPLACE THIS 2 LINES AS YOU DESIRE
    $email_to = "thescienceye@gmail.com";
    $email_subject = "You've got a new submission";

    $name = $_POST['fullName']; // required
    $email = $_POST['email']; // required
    $message = $_POST['message']; // required



    $email_message = "Form details following:\n\n";

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
    mail($email_to, $email_subject, $email_message, $headers);
}
?>