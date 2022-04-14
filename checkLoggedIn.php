<?php
    session_start();
    if(isset($_SESSION['logged_in']))
    {
        if($_SESSION['logged_in']== true)
        {
            header("location:tips&suggestion.php");
        }
    }
    else
        {
            $_SESSION['current_page']="tips&suggestion.php";
            header("location:login.php");
        }
?>