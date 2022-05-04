<?php
     session_start();
     $_SESSION['current_page'] = "contactus.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact US</title>
        <link href="css/CuStyle.css" type="text/css" rel="stylesheet" >
        <link rel="stylesheet" href="css/image-bar-style.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap');
            </style>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    </style>
    </head>
    <body>
    <nav id="nav">
        <div id="logo" >ItsAbtU</div>
            <ul>
            <li class="container displ"><a href="#">Health <i class="fa fa-angle-down" style="font-size:20px"></i></a>
                    <ul class="dropdown">
                        <!-- <li><a href="dietplan.php">Diet Plan</a></li> -->
                        <li><a href="physical-activity.php">Physical Activity</a></li>
                        <li><a href="mental-health.php?category=Videos">Mental Health</a></li>
                        <li><a href="haircare.php?category=Videos">Hair Care</a></li>
                        <li><a href="skincare.php?category=Videos">Skin Care</a></li>
                    </ul>
                </li>  
                <!-- <li class="container n-dis"><a href="dietplan.php">Diet plan </a></li>   -->
                <li class="container n-dis"><a href="physical-activity.php">Physical Activity</a></li>
                <li class="container n-dis"><a href="mental-health.php?category=Videos"> MentalHealth</a></li>  
                <li class="container n-dis"><a href="#">Personal Care <i class="fa fa-angle-down" style="font-size:20px"></i></a>
                    <ul class="dropdown">
                        <li class="container n-dis"><a href="haircare.php?category=Videos"> Hair Care</a></li>
                        <li class="container n-dis"><a href="skincare.php?category=Videos"> Skin Care</a></li>
                    </ul>
                </li>
                <li class="container"><a href="#">Menu <i class="fa fa-angle-down" style="font-size:20px"></i></a>
                    <ul id="marg" class="dropdown">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="bmi-calories.php">BMI/calories</a></li>
                        <li><a class= "active" href="contactus.php">Contact Us</a></li>
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

        <div class="cont">
           
            <span class="Cb">
                <span class="Cleft">
                    <h1>Get in touch</h1>
                    <p>We would love to hear from you. Feel free to contact us. <br>Here's how you can reach us...</p>
                </span>

                <span class="Cright">
                            
                    <div class="qt">
                    <img src="images/icons/email.png" width="35%" height="40%" >
                    <a href="mailto: itsabtu.rs@gmail.com"><h3>Reach us on Gmail</h3></a>
                    </div>
                    <div class="pt">
                        <img src="images/icons/call.png" width="40%" height="40%">
                        <a href="tel: 9876890022"><h3>Call Us</h3></a>
                    </div>  
                </span>
            </span>
        </div>
        <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <ul>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-col">
             <ul>
                 <li><a href="otherS.php">Our Services</a></li>
             </ul>
         </div>
            <div class="footer-col">
                <ul>
                    <li><a href="faq.php">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
    </body>
</html>