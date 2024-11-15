<?php
require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;


if(isset($_POST["e"])){

    $email = $_POST["e"];
    $sendEmail = "greenbellsoftwaresolutions@gmail.com";
    $subject ="Subciption";

    $bodyContent = '<h3>Email : '.$email.'<br/> Subject : '.$subject.'<br/><br/>'.$email. ' is<h2>Subscribe You &#9734;.</b></h2></h3>';

        // email code
        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'buthsaradilakshana07@gmail.com';
        $mail->Password = 'bnhdernquuqhtskn';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('buthsaradilakshana07@gmail.com', 'Company Message');
        $mail->addReplyTo('buthsaradilakshana07@gmail.com', 'Company Message');
        $mail->addAddress($sendEmail);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $bodyContent;

        if(!$mail->send()){
            echo $sendEmail;
            echo $bodyContent;
            echo $subject;
            echo "Subscribe Is Failed Try Again!";
               
       }else{
            echo "success";
       }
    }else{
        echo "Please Enter Your Email.";

    }
?>