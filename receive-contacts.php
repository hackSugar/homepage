<?php
if (!isset($_POST['submit'])) {
    echo "error - submit button not pressed";
}
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

if(empty($name || $email)) {
    echo "Must enter email";
}

$email_to = "connor.mcdermid@mcvts.org";

$message = "You have received an email via the contact form on hacksugar.org. \n" . $message;

$headers = "From: $email \r\n";

mail($email_to, $subject, $message, $headers);

header("Location: localhost:4000"); # Must be changed to hacksugar.org later
