<?php

require('connection_login.php');

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email,$vcode)
{
    require ("PHPMailer/PHPMailer.php");
    require ("PHPMailer/SMTP.php");
    require ("PHPMailer/Exception.php");

    $mail = new PHPMailer(true);

    try {
                           //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'itsabtu.rs@gmail.com';                     //SMTP username
        $mail->Password   = 'itsabtu.2023';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('itsabtu.rs@gmail.com', 'ItsAbtU');
        $mail->addAddress($email);     
        
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'E-mail Verification from ItsAbtU';
        $mail->Body    = "Thanks for registration! Click the link to verify the email address
        <a href='http://localhost/wellness/verify.php?email=$email&vcode=$vcode'>Verify</a> ";
    
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

if(isset($_POST['login']))
{
    $query="SELECT * FROM `registered_user` WHERE `email`='$_POST['email'] ";
    $result=mysqli_query($con,$query);

    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['isVerified']==1){
                if(password_verify($_POST['password'],$result_fetch['password']))
                {
                    $_SESSION['logged_in']=true;
                    $_SESSION['email']=$result_fetch['email'];
                // header("location:login.php"); #####
                    echo"
                        <script>alert('Login successfully');
                        window.location.href='login.php';
                        </script>
                    ";
                }
                else
                {
                    echo"
                        <script>alert('Incorrect password');
                        window.location.href='login.php';
                        </script>
                    ";
                }
            }
            else{
                echo"
                        <script>alert('E-mail not verified');
                        window.location.href='login.php';
                        </script>
                    ";
            }
        }
        else
        {
            echo"
                <script>alert('E-mail not registerd');
                window.location.href='login.php';
                </script>
            ";
        }
}
else
{
    echo"
        <script>alert('Cannot Run Query');
        window.location.href='login.php';
        </script>
    ";
}#!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
}

if(isset($_POST['Register']))  ####
{

$user_exist_query="SELECT * FROM `registered_user` WHERE `email`='$_POST[email]' ";
$result=mysqli_query($con,$user_exist_query);

if($result)
{
    if(mysqli_num_rows($result)>0)
    {
        $result_fetch=mysqli_fetch_assoc($result);
        if($result_fetch['email']==$_POST['email'])
        {
            echo"
                <script>alert({$result_fetch['email']} 'already registerd');
                window.location.href='login.php';
                </script>
            ";
         }
     }
     else
    {
        if($_POST['password'] == $_POST['confirm_password'])
        {   
            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
            $vcode=bin2hex(random_bytes(16));
            $query="INSERT INTO `registered_user`(`email`, `password`, `VerificationCode`, `isVerified`) VALUES ('$_POST[email]','$password','$vcode','0')";
            if(mysqli_query($con,$query) && sendMail($_POST['email'],$vcode)){
                echo"
                    <script>alert('Registration Successful');
                    window.location.href='login.php';
                    </script>
                ";
            }
            else{
                echo"
                    <script>alert('Registration: Server Down');
                    window.location.href='login.php';
                    </script>
                ";
            }
        }
        else{
            echo"
                    <script>alert('Re-enter password');
                    window.location.href='login.php';
                    </script>
                ";
        }
    }
}
else
{
    echo"
        <script>alert('Cannot Run Query');
        window.location.href='login.php';
        </script>
    ";
}

}
?>