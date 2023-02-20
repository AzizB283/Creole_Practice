<?php

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


session_start();
require '../Database/db.php';

if(!empty($_POST['email'])){

    
    $email = $_POST['email'];
    $_SESSION['email']=$email;

    $sql = "SELECT * FROM login where email = '$email'";

    $res = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($res);

    if($_SERVER['REQUEST_METHOD']=='POST'){

        if($row==1){
            
            try{
                
                $otp = rand(100000, 999999);
                $_SESSION['otp'] = $otp;
                $mail = new PHPMailer(true);
                
                $mail->isSMTP();    
                $mail->Mailer = "smtp";
                
                // $mail->SMTPDebug  = 3;  
                $mail->SMTPAuth   = TRUE;
                // $mail->SMTPSecure = "tls";
                $mail->Port       = 587;
                $mail->Host       = "smtp.gmail.com";
                $mail->Username   = "thorthegodofthunder147@gmail.com";
                $mail->Password   = "dqisqyaqrodqkhym";
                // $mail->SMTPOptions = array(
                //     'ssl' => array(
                //     'verify_peer' => false,
                //     'verify_peer_name' => false,
                //     'allow_self_signed' => true
                //     )
                //     );
                
                
                // $mail->IsHTML(true);
                $mail->AddAddress($email);
                $mail->Subject = "Verify Account OTP";
                // echo $otp;
                $mail->Body = $otp; 
                
                if(!$mail->Send()) {
                    
                    $resp['msg'] = "Failed to send email try again";
                    $resp['status'] = false;
                    echo json_encode($resp);
                    exit;
                    // var_dump($mail);


                    
                } else {

                    $success = 1;
                    echo $success;
                    
                    
                    $sql1 = "INSERT INTO otp (email, otp) VALUES ('$email', '$otp')";
                    
                    $res1 = mysqli_query($conn, $sql1);
                    
                    
                }
            }
            catch (phpmailerException $e) {
                $result = $e->errorMessage();
            } catch (Exception $e) {
                $result = $e->getMessage();
            }
            
        }
        else{
            $resp['msg'] = "email not found";
            $resp['status'] = false;
            echo json_encode($resp);
        }
    }


}




?>