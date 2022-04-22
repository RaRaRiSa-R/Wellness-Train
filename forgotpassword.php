<?php
    require("connection_login.php");

    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function sendMail($email,$resettoken)
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
            $mail->Subject = 'Password Reset Link from ItsAbtU';
            $mail->Body    = "We got a request for reset link form your end. Click the link
            <a href='http://localhost/wellness/updatepassword.php?email=$email&resettoken=$resettoken'>Reset Password</a> ";
    
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
    }
    }
    if(isset($_POST['send-reset-link']))
    {
        $query="SELECT * FROM `registered_user` WHERE `email`='{$_POST['email']}' ";
        $result=mysqli_query($con,$query);

        if($result)
        {
            if(mysqli_num_rows($result)==1)
            {
                $resettoken=bin2hex(random_bytes(16));
                date_default_timezone_set('Asia/Kolkata');
                $date=date("Y-m-d");
                $query="UPDATE `registered_user` SET `resettoken`='$resettoken',`resettokenexpire`='$date' WHERE `email`='{$_POST['email']}'";
                if(mysqli_query($con,$query) && sendMail($_POST['email'],$resettoken))
                {
                    echo"<script>
                    alert('Mail Sent');
                    window.location.href='login.php';
                </script>";
                }
                else
                {
                    echo"<script>
                    alert('Server Down');
                    window.location.href='login.php';
                </script>";
                }
            }
            else
            {
                echo"
                <script>
                    alert('Email not found');
                    window.location.href='login.php';
                </script>";
            }
        }
        else
        {
            echo"
            <script>
            alert('Cannot run query');
            window.location.href='login.php';
            </script>";
        }
    }
?>