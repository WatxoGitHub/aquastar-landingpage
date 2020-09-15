<?php 
$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email']));
$subject    = @trim(stripslashes($_POST['company']));  
/* $subject    = @trim(stripslashes($_POST['subject']));  */
$message    = @trim(stripslashes($_POST['message'])); 
$to   		= "dekontruccion@gmail.com";
$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($to, $subject, $message, $headers);

 die;

/* $name       = $_POST['name']; 
$from       = $_POST['email']; 
$subject    = $_POST['company']; 
$message    = $_POST['message']; 
$to   		= "dekontruccion@gmail.com";

$mensaje = "De: $name \n";
$mensaje .= "Correo: $from \n";
$mensaje .= "Asunto: $subject \n";
$mensaje .= "Mensaje: $message";

$headers = "MIME-Version: 1.0";
$headers .= "Content-type: text/plain; charset=iso-8859-1";
$headers .= "X-Mailer: PHP/".phpversion();

mail($to, $subject, $message, $headers); */

