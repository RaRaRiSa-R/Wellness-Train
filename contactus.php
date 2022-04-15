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
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap');
            </style>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    </style>
    </head>
    <body>
    <?php
        include('navbar.php');
    ?>

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