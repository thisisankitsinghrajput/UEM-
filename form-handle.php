<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'email@email.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message .\n";

$to = 'ankits39229@gmail.com';

$headers = "From: $email_from \r\n";


$headers = "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>

<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitizeInput($_POST['name']);
    $visitor_email = sanitizeInput($_POST['email']);
    $subject = sanitizeInput($_POST['subject']);
    $message = sanitizeInput($_POST['message']);

    $email_from = 'email@email.com';
    $email_subject = 'New Form Submission';
    $email_body = "User Name: $name.\n" .
                  "User Email: $visitor_email.\n" .
                  "Subject: $subject.\n" .
                  "User Message: $message.\n";

    $to = 'ankits39229@gmail.com';

    $headers = "From: $email_from\r\n";
    $headers .= "Reply-To: $visitor_email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (filter_var($visitor_email, FILTER_VALIDATE_EMAIL)) {
        if (mail($to, $email_subject, $email_body, $headers)) {
            header("Location: contact.html");
            exit;
        } else {
            echo "Error sending email.";
        }
    } else {
        echo "Invalid email address.";
    }
}

function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}
?> -->
