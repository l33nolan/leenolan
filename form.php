<?php

// this script requires autoload.php to use the SendGrid API
require 'vendor/autoload.php';

// check for form submission, if form submitted, trim and sanitize the inputs, assign them to variables
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $message = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS));

    // build email body content

    $emailBody = "From: " . $name . "<br>" . "EMail: " . $email . "<br>" . "Message: " . $message;

    // SendGrid settings and config

    $from = new SendGrid\Email("leenolan.me","leenolan79@icloud.com");
    $subject = "Lee, you have a quick contact website enquiry!";
    $to = new SendGrid\Email(null, "leenolan79@icloud.com");
    $content = new SendGrid\Content("text/html", $emailBody);
    $mail = new SendGrid\Mail($from, $subject, $to, $content);

    $apiKey = getenv('SENDGRID_API_KEY');
    $sg = new \SendGrid($apiKey);

    $response = $sg->client->mail()->send()->post($mail);

    echo $response->statusCode();
    echo $response->headers();
    echo $response->body();

}

