<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        $to = "bhavyaprajapati1717+contactthroughphpforgourmetgala@example.com";
        $subject = "New Suggestion on Gourmet Gala";
        $headers = "From: " . $email . "\r\n"; 
        $headers .= "Reply-To: " . $email . "\r\n";

        $body = "Name: " . $name . "\n";
        $body .= "Email: " . $email . "\n";
        $body .= "Message: " . $message . "\n";

        if (mail($to, $subject, $body, $headers)) 
            echo "Email sent successfully!";
        else 
            echo "Error sending email.";
    }
    ?>