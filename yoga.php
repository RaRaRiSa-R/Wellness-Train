<?php
    require('connection_login.php');
    session_start();
    $_SESSION['current_page'] = "yoga.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga</title>
    <link rel="stylesheet" href="css/image-bar-style.css">
    <link rel="stylesheet" href="css/skincare.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/plus_sign.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
</head>
<body>
<nav id="nav">
        <div id="logo" >ItsAbtU</div>
            <ul>
            <li class="container displ btn"><a href="#">Health</a>
                    <ul class="dropdown">
                        <li><a href="physical-activity.php">Physical Activity</a></li>
                        <li><a href="mental-health.php?category=Videos">Mental Health</a></li>
                        <li><a href="haircare.php?category=Videos">Hair Care</a></li>
                        <li><a href="skincare.php?category=Videos">Skin Care</a></li>
                    </ul>
                </li>  
                <li class="container n-dis"><a class="active" href="physical-activity.php">Physical Activity</a></li>
                <li class="container n-dis"><a href="mental-health.php?category=Videos"> Mental Health</a></li>  
                <li class="container"><a href="#">Personal Care <i class="fa fa-angle-down" style="font-size:20px"></i></a>
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
    <section id="side-img-section">
        <div id="skincare">
            <img class="img" src="images/meditation.jpeg" alt="" />
            <div class="center" id="yoga-img-text">"Yoga is the journey of the self, through the self, to the self. -- The Bhagavad Gita"</div>
        </div>
    </section>
    <section id="main-sc" class="scroll">
        <div class="content-block">
            <div class="filter"></div>
            <?php
            $sql='SELECT * FROM yoga';
            $result=mysqli_query($con,$sql);
            // $num_rows =  mysqli_num_rows($result);
            // $count = 0;
    if($result)
    {
    // if(mysqli_num_rows($result)>0)
        ?>
        <div class="items">
        <?php
    while($datarow=mysqli_fetch_assoc($result))
    {

        // for($i= 0; $i < 3 && $count < $num_rows; $i++)
        // {$count++;
            ?>
            <a class="box-link" href="yoga_playlist.php?id=<?php echo $datarow['SNo']?>">
            <div class="box">
                    <div class="image-wrap">
                        <img class="img" src="images/<?php echo $datarow['Image']?>" alt="" />
                    </div>
                    <div class="health-data-content">
                        <h4><?php echo $datarow['Name']?></h4>
                    </div>
                </div>
            </a>
                <?php
                // if($i<2){
                //     $datarow=mysqli_fetch_assoc($result);
                // }
        // }
    }
        ?>
        </div>
        <?php
}?>
            <div id="s" >
                <a  class="round" href="tips&suggestion.php" ><ion-icon name="add" size="large"></ion-icon></a>
                <div id="trip">Tips/Suggestion</div>
                <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
            </div> 
        </div>
    </section>
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