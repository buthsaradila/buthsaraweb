<?php

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["name"]) && isset($_POST["email"])){

    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $sendEmail = "greenbellsoftwaresolutions@gmail.com";

    if($email == null){
        echo "Enter your email address.";
    }elseif($msg == null){
        echo "Enter your message.";
    }elseif($name == null){
        echo "Enter your name.";
    }elseif($subject == null){
        echo "Enter your Subject.";
    }else {

    $bodyContent = '<h3>Name : '.$name.'<br/>'.$name.' Email : '.$email.'<br/> Subject : '.$subject.'<br/><br/><b>'.$msg.'</b></h3>';

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
            echo "Message Sending Failed! Try again later."; 
           
       }else{
            echo "success";
       }
    }
    

}else{
    header("Location:index.php");
    echo("Invalid Send Massege");
}



