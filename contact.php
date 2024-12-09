<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Send email (you'll need to configure a mail server or PHP mail function)
    mail("youremail@example.com", "New Message from Portfolio", $message, "From: $email");
    echo "Thank you for contacting me!";
}
?>