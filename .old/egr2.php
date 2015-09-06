<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['course']) 		||
   empty($_POST['instagram'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$curso = $_POST['curso'];
$instagram = $_POST['instagram'];
	
// Create the email and send the message
$uit = 'universeit.usp@gmail.com'; //for uit
$email_subject = "$name quer cursar $curso, Universe It";
$email_body = "\n\nName: $name\n\nEmail:$email_address\n\nCurso:$curso\n\nPhone:$phone\n\nInstagram:\n$instagram";
$headers = "From: noreply@universeit.com\n"; 
$headers .= "Reply-To: $email_address";	
mail($uit,$email_subject,$email_body,$headers);
return true;			
?>