<?php

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


session_start();
require '../Database/db.php';

$email = $_POST['email'];

$sql = "SELECT * FROM login where email = '$email'";

$res = mysqli_query($conn, $sql);

$row = mysqli_num_rows($res);



                                          
                             
// $mail->Host = 'smtp.example.com';           // Specify main and backup SMTP servers 
// $mail->SMTPAuth = true;                     // Enable SMTP authentication 
// $mail->Username = 'user@example.com';       // SMTP username 
// $mail->Password = 'email_password';         // SMTP password 
// $mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted 
// $mail->Port = 465;   






if($_SERVER['REQUEST_METHOD']=='POST'){

    if($row==1){

     try{

            $mail = new PHPMailer(true);
            
            $mail->isSMTP();    
            $mail->Mailer = "smtp";
            
            $mail->SMTPDebug  = 3;  
            $mail->SMTPAuth   = TRUE;
            // $mail->SMTPSecure = "tls";
            $mail->Port       = 587;
            $mail->Host       = "smtp.gmail.com";
            $mail->Username   = "thorthegodofthunder147@gmail.com";
            $mail->Password   = "dqisqyaqrodqkhym";
            $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                )
                );
            
            
            $otp = rand(100000, 999999);
            $mail->IsHTML(true);
            $mail->AddAddress($email);
            // $mail->SetFrom("thorthegodofthunder147@gmail.com");
            // $mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
            // $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
            $mail->Subject = "Verify Account OTP";
            echo $otp;
            $mail->Body = $otp; 
            if(!$mail->Send()) {
                echo "Error while sending Email.";
                var_dump($mail);
            } else {
                echo "Email sent successfully";
            }
        }
        catch (phpmailerException $e) {
            $result = $e->errorMessage();
        } catch (Exception $e) {
            $result = $e->getMessage();
        }
        
    }
    else{
        
        echo "Invalid email";
    }
}




?>