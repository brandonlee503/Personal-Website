<?php

//Get info
$to = 'leebran@onid.oregonstate.edu';
$name = $_POST[name];
$email = $_POST[theEmail];
$subject = $_POST[subject];
$message = $_POST[message];

//Clean and verify email;
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);

if(!$email){
    die("Invalid email");
}

//Clean Strings
$name = filter_var($name, FILTER_SANITIZE_STRING);
$subject = filter_var($subject, FILTER_SANITIZE_STRING);
$message = filter_var($message, FILTER_SANITIZE_STRING);

//Combine subject with user's name
$subject = $subject . "-" . $name;

//Add header
$headers = 'From:'. $email . "\r\n"; // Sender's Email

//Wrap message because php
$message = wordwrap($message, 70);

//Send with php mail function
mail($to, $subject, $message, $headers);

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Brandon Lee</title>
    <meta name="description" content="Brandon Lee's Personal Website"/>
    <meta name="author" content="Brandon Lee"/>
    <meta name="copyright" content="Brandon Lee Copyright (c) 2015"/>
    <!------------CSS------------>
    <link rel="stylesheet" href="css/foundation.css"/>
    <link rel="stylesheet" href="css/sendEmailTheme.css"/>
    <link rel="shortcut icon" href="images/icons/brandonlogo.ico">
</head>
<body>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!------------Banner------------>
    <section class="hero">
        <div class="row">
            <div class="large-12 columns">
                <div class="main-wrapper">
                    <h1><b>Brandon Lee</b></h1>
                    <hr>
                    <div class="row">
                        <div class="large-6 columns large-centered">
                            <ul class="button-group even-4">
                                <li><a href="index.html" class="button">Home</a></li>
                                <li><a href="about.html" class="button">About</a></li>
                                <li><a href="resume.html" class="button">Résumé</a></li>
                                <li><a href="contact.html" class="button">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------Banner Content Box------------>
        <div class="row">
            <br><br><br><br><br><br><br><br><br><br>
        </div>
    </section>
    <!------------Content Area------------>
    <section class="hero-content">
        <div class="row">
            <div class="large-12 columns about-content">
                <br>
                <h3>Thanks! Your message has been sent successfully. I will be in touch as soon as possible!</h3>
                <br>
            </div>
        </div>
    </section>
    <!------------Footer------------>
    <footer>
        <div class="row">
            <div class="large-6 columns">
                <p>© Copyright Brandon Lee 2015</p>
            </div>
            <div class="large-6 columns">
                <ul class="inline-list right">
                    <li><a href="about.html">About</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>