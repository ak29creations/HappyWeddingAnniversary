<?php
if (isset($_POST['Submit'])) {

    $Name = $_POST['Name'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

        $n = "\n";
        $to = "aswin.caxigo@gmail.com";
		$headers = "From: ".$email;
		$message = "Name : " . $Name . $n . "Phone : " . $phone . $n . "E mail : " . $email . $n . "Subject: " . $subject . $n . "Message : " . $message;

        mail($to, $subject, $message, $headers);
        header("Location :index.html?mailsend")
        
        }
?>
