<?php

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);
	
	$emailTo = 'francisco.masi@hotmail.com';
	if (empty($subject)) {
	    $subject = 'Mensaje desde sitio web.';
	}
	/*$body = "Nombre: $name \n\nEmail: $email \n\nMensaje:\n$message";
	$headers = 'From: '.$email."\r\n" .
        'Reply-To: '.$email."\r\n";*/

    $asunto = "Contacto web";

    $headers = "From: ".$name." <$email>\r\n";
	$headers .= "X-Mailer: PHP5\n";
	$headers .= 'MIME-Version: 1.0' . "\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers .= "Subject: {$asunto}\r\n";

	// Aqui armamos el cuerpo del mensaje
	$cuerpo = "Nombre: ".$name."<br>";
	$cuerpo .= "Email: ".$email."<br>";
	$cuerpo .= "Mensaje: ".$message;

    mail($emailTo, $asunto, $cuerpo, $headers);
	$emailSent = true;
	echo ('SEND');
?>
