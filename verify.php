<?php
    require("connection_login.php");

    if(isset($_GET['email']) && isset($_GET['vcode']))
    {
        $query="SELECT * FROM registered_user WHERE `email`='$_GET[email]' AND `VerificationCode`='$_GET[vcode]'";
        $result=mysqli_query($con,$query);

        if($result)
        {
            if(mysqli_num_rows($result)==1)
            {
                $result_fetch=mysqli_fetch_assoc($result);
                if($result_fetch['isVerified']==0)
                {
                    $update="UPDATE `registered_user` SET `isVerified`='1' WHERE `email`='$result_fetch[email]'";
                    if(mysqli_query($con,$update)){
                        echo"
                        <script>alert('Verification Successful');
                        window.location.href='login.php';
                        </script>
                        ";
                    }
                    else
                    {
                        echo"
                        <script>alert('Verification1: Cannot Run Query');
                        window.location.href='login.php';
                        </script>
                        ";
                    }
                
                }
                else
                {
                    echo"
                    <script>alert('E-mail already verified');
                    window.location.href='login.php';
                    </script>
                ";
                }
            }
        }
        else{ 
            echo"
                <script>alert('Verification2: Cannot Run Query');
                window.location.href='login.php';
                </script>
            ";
        }
    }
?>