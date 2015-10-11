<html lang="pt-br">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['cursos']) 		||
   empty($_POST['hora'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "<p align='center'><br><br><br><br><br>Erro no preenchimento, <a href='contact.html'>clique aqui</a> e tente novamente<br><br> Lembre-se de Preencher todos os campos.</p>";
   }
else {
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$cursos = $_POST['cursos'];
$hora = $_POST['hora'];
	
// Create the email and send the message
$uit = 'universe_it@outlook.com'; //for uit
$ugm = 'universeit.usp@gmail.com'; //for uit    
$email_subject = "$name quer $cursos - Visita Universe It";
$email_body = "\n\nNome: $name\n\nEmail: $email_address\n\nCursos: $cursos\n\nPhone: $phone\n\nMelhor Horario: $hora";
$headers = "From: universe_it@outlook.com\n"; 
$headers .= "Reply-To: universe_it@outlook.com";	
mail($uit,$email_subject,$email_body,$headers);
mail($ugm,$email_subject,$email_body,$headers);
echo "<br><br><br><br><br><p align='center'><h2 align='center'>Obrigado por se cadastrar, nos vemos terça!!<br><br><a href='https://www.facebook.com/pages/Universe-It/111334529216997'><i class='fa fa-facebook-official fa-6'></i></a><br></h2></p>";}		
?>
</body>
</html>