<?php
    session_start();
    $_SESSION['current_page'] = "index.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="css/footer.css" type="text/css" rel="stylesheet">
    <link href="css/image-bar-style.css" type="text/css" rel="stylesheet">
    <link href="css/home.css" type="text/css" rel="stylesheet">
</head>
<body>
<nav id="nav">
        <div id="logo" >ItsAbtU</div>
            <ul>
            <li class="container displ btn"><a href="#">Health</a>
                    <ul class="dropdown">
                        <li><a href="dietplan.php">Diet Plan</a></li>
                        <li><a href="physical-activity.php">Physical Activity</a></li>
                        <li><a href="mental-health.php?category=Videos">Mental Health</a></li>
                        <li><a href="haircare.php?category=Videos">Hair Care</a></li>
                        <li><a href="skincare.php?category=Videos">Skin Care</a></li>
                    </ul>
                </li>  
                <li class="container n-dis"><a href="dietplan.php">Diet plan </a></li>  
                <li class="container n-dis"><a href="physical-activity.php">Physical Activity</a></li>
                <li class="container n-dis"><a href="mental-health.php?category=Videos"> Mental Health</a></li>  
                <li class="container"><a href="#">Personal Care</a>
                    <ul class="dropdown">
                        <li class="container n-dis"><a href="haircare.php?category=Videos"> Hair Care</a></li>
                        <li class="container n-dis"><a href="skincare.php?category=Videos"> Skin Care</a></li>
                    </ul>
                </li>
                <li class="container"><a href="#">Menu</a>
                    <ul id="marg" class="dropdown">
                        <li><a class="active" href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="bmi-calories.php">BMI/calories</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <?php
                        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
                            ?>
                            <li><a href="personalized.php">Personalized</a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <li class="container">
                <?php
                    // echo "console.log('{$_SESSION['logged_in']}')";
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
                    {
                        echo "<a href='logout.php'>logout</a>" ;    
                    }
                    else{
                        echo "<a href='login.php'>Login</a>";
                    }
                    ?>
                </li>             
            </ul>
    </nav>
    <section>
        <div id="content-block">
            <div id="display-heading">
                <h1>ItsAbtU bridges the gap between you and your health.</h1>
                <p>ItsAbtU bridges the gap between you and solutions for your daily health-related queries. We support data, given by Experts/Doctors or highly famous Youtubers who gave reliable information to the masses.</p>
            </div>
            <div>
                <img src="images/home.png" alt="">
            </div>
        </div>
    </section>
    <?php
        include('footer.php');
    ?>
</body>
</html>