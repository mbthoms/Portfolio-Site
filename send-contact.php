<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<?php $title = "Sending Message... - Matthew Thoms, Web Designer / Developer"; ?>
	<script>alert("Thank you for contacting me. As early as possible I will contact you.");</script>
	<!--<meta HTTP-EQUIV="REFRESH" content="0; url=index.php">-->
</head>
<body>
	<?php
	// Contact Form Vars.
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$email_from = $email;
	$email_to = 'matthew@matthewthoms.com';
	$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . 'Message: ' . $message;
	$success = @mail($email_to, $body, 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message);
	?>
</body>
