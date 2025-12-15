<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "ninwetageorgees@gmail.com";
    $subject = "New Message from Shakespeare Website";

    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    $headers = "From: $email";

    mail($to, $subject, $body, $headers);

    echo "thank you for your message :)";
} else {
    header("Location: index.php");
    exit;
}
?>
