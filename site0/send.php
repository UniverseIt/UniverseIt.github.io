<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['cursos']) 		||
   empty($_POST['hora'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "<p align='center'>Erro no preenchimento, <a href='contact.html'>clique aqui</a> para voltar</p>";
   }
else {
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$curso = $_POST['curso'];
$hora = $_POST['hora'];
	
// Create the email and send the message
$uit = 'universe_it@outlook.com'; //for uit
$ugm = 'universeit.usp@gmail.com'; //for uit    
$email_subject = "$name quer cursar $curso, Universe It";
$email_body = "\n\nName: $name\n\nEmail:$email_address\n\nCurso:$cursos\n\nPhone:$phone\n\nMelhor Horario:\n$hora";
$headers = "From: universe_it@outlook.com\n"; 
$headers .= "Reply-To: universe_it@outlook.com";	
mail($uit,$email_subject,$email_body,$headers);
mail($ugm,$email_subject,$email_body,$headers);
echo "<p align='center'>Obrigado por se cadastrar, nos vemos terça!!</p>" ;}		
?>