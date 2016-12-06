<?php
require_once('partials/head.php');
require_once('partials/header.php');

$title = "Message Sent! - Matthew Thoms, Web Developer / Designer";


//Getting information from the form
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Emailing Varibles.
$email_to = "matthew@matthewthoms.com";
$subject_line = "Contact Form Message From: $name";
$email_message = "You have received a new Message from matthewthoms.com \n\n ".
	"Here are the details:\n\n ".
	"Name: $name \n\n ".
	"Email: $email \n\n ".
	"Subject: $subject \n\n ".
	"Message: \n\n $message";

//$headers = "From: contact_form@matthewthoms.com";
mail($email_to,$subject_line,$email_message);
echo "<body>
<div class='first-container container text-center'>
	<h1><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i> Message Sent!</h1>
     <p>Thanks for the message, I will get back to you as soon as I can. Maybe check out what I'm doing on social media these days. <i class=\"fa fa-smile-o\" aria-hidden=\"true\"></i></p>
     
     <a href='http://matthewthoms.com' title='Goes back to the homepage of Matthewthoms.com'>Back to the Homepage.</a></div>
  </body>";
require_once('partials/footer.php');
?>