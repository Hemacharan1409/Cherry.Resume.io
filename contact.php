<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "hemacharanlakshmipathi@gmail.com"; // Replace with your email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $email_body = "
    <html>
    <head>
      <title>Contact Request</title>
    </head>
    <body>
      <h2>Contact Details</h2>
      <p><strong>Name:</strong> $name</p>
      <p><strong>Email:</strong> $email</p>
      <p><strong>Subject:</strong> $subject</p>
      <p><strong>Message:</strong></p>
      <p>$message</p>
    </body>
    </html>";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "success"; // Message sent successfully
    } else {
        echo "error"; // Message failed to send
    }
}
?>
