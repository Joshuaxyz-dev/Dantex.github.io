<?php

if (isset($_POST['submit'])) {
$firstname = $_POST['first name'];
$lastname = $_POST['last name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "joshuaerusiafe@yahoo.com";
$headers = "From: ".$mailFrom;
$txt ="You have recieved an email from ".$firstname..$lastname.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
}
?>