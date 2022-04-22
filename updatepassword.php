<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <?php
        require('connection_login.php');

        if(isset($_GET['email']) && isset($_GET['resettoken']))
        {
            date_default_timezone_set('Asia/Kolkata');
            $date=date("Y-m-d");

            $query="SELECT * FROM `registered_user` WHERE `email`='$_GET[email]' AND `resettoken`='$_GET[resettoken]' AND `resettokenexpire`='$date'";
            $result=mysqli_query($con,$query);

            if($result)
            {
                if(mysqli_num_rows($result)==1)
                {
                    ?>
                    <form method='POST'>
                    <h3> Create New Password </h3>
                    <input type='password' placeholder="New Password" name='Password'>
                    <button type='submit' name='updatepassword'>Update</button>
                    <input type='text' name='email' value='<?php echo $_GET['email']; ?>'>
                </form>
                <?php
                }
                else
                {
                    echo"<script>
                    alert('Ivalid or Expired Link');
                    window.location.href='login.php';
                </script>";
                }
            }
            else
            {
                echo"<script>
                    alert('Server Down');
                    window.location.href='login.php';
                </script>";
            }
        }
    ?>
    <?php
        if(isset($_POST['updatepassword']))
        {
            $pass=password_hash($_POST['Password'],PASSWORD_BCRYPT);
            $update="UPDATE `registered_user` SET `password`='$pass',`resettoken`=NULL,`resettokenexpire`=NULL WHERE `email`='{$_POST['email']}'";
            if(mysqli_query($con,$update))
            {
                echo"<script>
                    alert('Password Updated Successfully');
                    window.location.href='login.php';
                </script>";
            }
            else
            {
                echo"<script>
                    alert('Password can't be updated as Server Down');
                    window.location.href='login.php';
                </script>";
            }
        }
    ?>
</body>
</html>