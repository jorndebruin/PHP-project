<?php

if(isset($_POST["submit"])) {

    $naam = htmlspecialchars($_POST['naam']);
    $email = htmlspecialchars($_POST['email']);
    $wachtwoord = htmlspecialchars($_POST['password']);


    $profiel =
    $naam . "*" .
    $email . "*" .
    $wachtwoord . "/n";

}