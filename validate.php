<?php

$emailDB = "alien@space.com";
$passDB = "saturno";
$passDBEnc = password_hash($passDB, PASSWORD_DEFAULT); //encrypt password

$email = $_POST["email"];
$pass = $_POST["pass"];

    
if($emailDB === $email && password_verify($pass, $passDBEnc)) {

    session_start();

    $_SESSION["email"] = $email; // We started the session

    header("Location: panel.php");

} else {
    echo "Log is wrong";
}