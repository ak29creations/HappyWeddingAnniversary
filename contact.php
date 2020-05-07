<?php session_start(); ?>

<?php
$Success = FALSE;
if (isset($_POST['Submit'])) {

    $Name = htmlentities(str_replace("'", "`", $_POST['Name']));
    $phone = htmlentities(str_replace("'", "`", $_POST['Phone']));
    $email = htmlentities(str_replace("'", "`", $_POST['Email']));
    $subject = htmlentities(str_replace("'", "`", $_POST['Subject']));
    $message = htmlentities(str_replace("'", "`", $_POST['Message']));

        $n = "\n";
        $to = "aswin.caxigo@gmail.com";
        $subject = "Feedback  Details";
        $message = "Name : " . $Name . $n . "Phone : " . $phone . $n . "E mail : " . $email . $n . "Subject: " . $subject . $n . "Message : " . $message;
        $from = $email;
        $headers = "X-Priority: 2\nX-MSmail-Priority: high";
        if (mail($to, $subject, $message, $headers, $from)) {
            $Success = TRUE;
            $Message = "Mail Sent Successfully";
            echo $Message;
            echo "<script> location.href='index.html'; </script>";
            exit;        
        } else {
            $Message = "Mail Sent Failed";
            echo $Message;
            echo "<script> location.href='index.html'; </script>";
            exit;        
        }
        
        session_destroy();
        }
?>
