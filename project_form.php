<?php

// this script requires autoload.php to use the SendGrid API
require 'vendor/autoload.php';

// check for form submission, if form submitted, trim and sanitize the inputs, assign them to variables
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $number = trim(filter_input(INPUT_POST, "number", FILTER_SANITIZE_STRING));
    $business = trim(filter_input(INPUT_POST, "business", FILTER_SANITIZE_STRING));
    $competitors = trim(filter_input(INPUT_POST, "competitors", FILTER_SANITIZE_SPECIAL_CHARS));
    $url = trim(filter_input(INPUT_POST, "url", FILTER_SANITIZE_SPECIAL_CHARS));
    $like = trim(filter_input(INPUT_POST, "like", FILTER_SANITIZE_SPECIAL_CHARS));
    $notlike = trim(filter_input(INPUT_POST, "notlike", FILTER_SANITIZE_SPECIAL_CHARS));
    $admire = trim(filter_input(INPUT_POST, "admire", FILTER_SANITIZE_SPECIAL_CHARS));
    $golive = trim(filter_input(INPUT_POST, "golive", FILTER_SANITIZE_SPECIAL_CHARS));
    $budget = trim(filter_input(INPUT_POST, "budget", FILTER_SANITIZE_SPECIAL_CHARS));
    $look = trim(filter_input(INPUT_POST, "look", FILTER_SANITIZE_SPECIAL_CHARS));
    $aim = trim(filter_input(INPUT_POST, "aim", FILTER_SANITIZE_SPECIAL_CHARS));
    $users = trim(filter_input(INPUT_POST, "users", FILTER_SANITIZE_SPECIAL_CHARS));
    $content = trim(filter_input(INPUT_POST, "content", FILTER_SANITIZE_SPECIAL_CHARS));
    $branding = trim(filter_input(INPUT_POST, "branding", FILTER_SANITIZE_SPECIAL_CHARS));
    $sections = trim(filter_input(INPUT_POST, "sections", FILTER_SANITIZE_SPECIAL_CHARS));
    $features = trim(filter_input(INPUT_POST, "features", FILTER_SANITIZE_SPECIAL_CHARS));


    // build email body content

    $emailBody = "Name: " . $name . "<br>" .
        "EMail: " . $email . "<br>" .
        "Contact Number: " . $number . "<br>" .
        "Nature of business: " . $business . "<br>" .
        "Key competitors: " . $competitors . "<br>" .
        "Current URL: " . $url . "<br>" .
        "Current site likes: " . $like . "<br>" .
        "Current site dislikes: " . $notlike . "<br>" .
        "Admired websites: " . $admire . "<br>" .
        "Go live date: " . $golive . "<br>" .
        "Budget: " . $budget . "<br>" .
        "Desired look and feel: " . $look . "<br>" .
        "Aim of website: " . $aim . "<br>" .
        "Expectation of user action: " . $users . "<br>" .
        "Provided content and assets: " . $content . "<br>" .
        "Brand style guidelines: " . $branding . "<br>" .
        "Pages required: " . $sections . "<br>" .
        "Features: " . $features;


    // SendGrid settings and config

    $from = new SendGrid\Email("leenolan.me","leenolan79@icloud.com");
    $subject = "Lee, you have a website project enquiry!";
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

