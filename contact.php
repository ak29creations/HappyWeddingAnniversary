<?php
if (isset($_POST['Submit'])) {

	require 'PHPMailerAutoload.php';
	require 'credential.php';


	$mail = new PHPMailer;
	
	$mail->SMTPDebug = 4;                               // Enable verbose debug output
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = EMAIL;                 // SMTP username
	$mail->Password = PASS;                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to
	
	$mail->setFrom(EMAIL, 'AK');
	$mail->addAddress($_POST['Email']);     // Add a recipient
	$mail->addReplyTo(EMAIL);
	
	
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = $_POST['Subject'];
	$mail->Body    = '<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
	$mail->AltBody = $_POST['Message'];
	
	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}
        
        }
?>
