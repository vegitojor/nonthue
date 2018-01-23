<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   var_dump($_POST['name']);
   var_dump($_POST['email']);
   var_dump($_POST['message']);
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));

$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'j.velazquez1985@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Nonthue desde el formulario de contacto:  $name";
$email_body = "Tu has recibido un mensaje desde el formulario de contacto del sitio Nonthue.\n\n"."Acá estan los detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = "From: noreply@criaderononthue.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
   var_dump($_POST['name']);
return true;         
?>
