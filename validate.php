<?php

$emailDB = "alien@space.com";
$passDB = "saturno";
$passDBEnc = password_hash($passDB, PASSWORD_DEFAULT); //encrypt password

$email = $_POST["email"];
$pass = $_POST["pass"];


if($emailDB === $email && password_verify($pass, $passDBEnc)) {
    // echo "Log is done";
    header("location: ./panel.php");
} else {
    echo "Log is wrong";
}