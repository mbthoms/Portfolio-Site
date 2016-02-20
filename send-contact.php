<?php

	$name = @trim(stripslashes($_POST['name']));
	$email = @trim(stripslashes($_POST['email']));
	$subject = @trim(stripslashes($_POST['subject']));
	$message = @trim(stripslashes($_POST['message']));

	$email_from = $email;
	$email_to = 'matthewthomsmedia@gmail.com';

	$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . 'Message: ' . $message;

	$success = @mail($email_to, $body, 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Website: ' . $website . "\n\n" . 'Message: ' . $message);

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<?php $title = "Sending Message... - Matthew Thoms, Web Designer / Developer"; ?>
	<script>alert("Thank you for contact me. As early as possible I will contact you.");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=index.php">
</head>
