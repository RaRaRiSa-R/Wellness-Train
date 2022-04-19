<?php
session_start();
if(isset($_POST['submit']))
    {
        $_SESSION['scrollToBottom'] = true;
        require('connection_login.php');
        if(!isset($_SESSION['logged_in']))
        {
            $_SESSION['current_page']="tips&suggestion.php";
            echo"
                <script>alert('Need to be logged in first');
                window.location.href='login.php';
                </script>
             ";
        }
        else if($_POST['title'] != "" && $_POST['editor'] != ""){
            $title = $_POST['title'];
            echo $content = $_POST['editor'];
            $added_on = date('Y-m-d h:i:s');

            $sql = "INSERT INTO user_tips(Title, content, email, added_on) VALUES ('$title','$content','{$_SESSION['email']}','$added_on')";
            $result = mysqli_query($con,$sql);
        
            if($result){
                $_SESSION['message'] = "Data Inserted Successfully";
                header('location: tips&suggestion.php');
            }
            else{
                $_SESSION['message'] = "Sorry Can't submitted";
            }
        }
        else{
            $_SESSION['message'] = "Sorry Can't submitted";
            header('location: tips&suggestion.php');
        }
    }
?>