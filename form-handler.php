<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = '92206529+ellawsm@users.noreply.github.com ';

$email_subject = 'New Question';

$email_body = "User Name = $name.\n".
                "User Email = $visitor_email.\n".
                "User Message = $message.\n";

$to = 'ellawebsitetest@gmail.com';

$header = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email\r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html")

?>