<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Topics</title>
    <link rel="stylesheet" href="css/categories.css">
     <link rel="stylesheet" href="css/image-bar-style.css">
     <link rel="stylesheet" type="text/css" href="css/footer.css"> 
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
</head>
<body class="back">
<nav id="nav">
        <div id="logo" >ItsAbtU</div>
            <ul>
            <li class="container displ btn"><a href="#">Health</a>
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
                            <li><a class="active" href="personalized.php">Personalized</a></li>
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
    <?php
    include('connection_login.php');
?><div class="hed">
  <h3>Choose any category<h3></div>
    <div class="wrap">
    <?php
            $sql='SELECT * FROM personalized';
            $result=mysqli_query($con,$sql);
            $num_rows =  mysqli_num_rows($result);
            $count = 0;
    if($result)
    {
    while($datarow=mysqli_fetch_assoc($result))
    {?>
        <div class="d">
            <a href="personalized_playlist.php?id=<?php echo $datarow['Sno']?>" class="border"><img src="images/<?php echo $datarow['Image']?>" alt=""></a>
        <p class="b"><?php echo $datarow['Name']?></p>
        </div>
        <?php
    }

    }
    ?>
        <div class="skip-block">
            <div class="skip">
                <a href="<?php 
                    if(!isset($_SESSION['current_page']))
                    {
                        echo 'login.php';
                    }
                    else
                    {
                       echo $_SESSION['current_page'];
                    }
                ?>" class="border">
                <img class="icon" src="images/icons/undo.png" alt=""> SKIP</a>
            </div>
        </div>
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