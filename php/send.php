<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$to = 'jf.torresp@uniandes.edu.co';
$message = 'FROM: '.$name.' Email: '.$email.'Message: '.$message;
$headers = 'From: jf.torresp@uniandes.edu.co' . "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail.
echo "Tu correo fue enviado!"; // success message
}else{
echo "Correo inválido, por favor escriba uno correcto.";
}

?>