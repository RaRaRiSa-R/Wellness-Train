<?php
// require('connection_login.php');
// $sql="SELECT  p.Name, p.link FROM yoga y JOIN yogasd p ON y.SNo = p.scid WHERE p.scid = '{$_GET['id']}' ";
// $result=mysqli_query($con,$sql);
// if($result)
// {
//     // if(mysqli_num_rows($result)>0)
//     while($datarow=mysqli_fetch_assoc($result))
//     {
//         echo $datarow['Name'] .  $datarow['link'] . '<br>';

//         //$datarow=mysqli_fetch_assoc($result);
//     }
// // echo $_GET['id'] ;
// }
?>

<?php
    session_start();
    $_SESSION['current_page'] = "yoga_playlist.php?id={$_GET['id']}";
?>
<?php
    require('connection_login.php');
    $sql="SELECT * FROM yoga WHERE SNo={$_GET['id']}";
    $result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga</title>
    <link rel="stylesheet" href="css/image-bar-style.css">
    <link rel="stylesheet" href="css/playlistStyle.css">
    <link rel="stylesheet" href="css/filter.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
</head>
<body>
<nav id="nav">
        <div id="logo" >ItsAbtU</div>
            <ul>
            <li class="container displ"><a href="#">Health <i class="fa fa-angle-down" style="font-size:20px"></i></a>
                    <ul class="dropdown">
                        <li><a href="physical-activity.php">Physical Activity</a></li>
                        <li><a href="mental-health.php?category=Videos">Mental Health</a></li>
                        <li><a href="haircare.php?category=Videos">Hair Care</a></li>
                        <li><a href="skincare.php?category=Videos">Skin Care</a></li>
                    </ul>
                </li>   
                <li class="container n-dis"><a class="active" href="physical-activity.php">Physical Activity</a></li>
                <li class="container n-dis"><a href="mental-health.php?category=Videos"> Mental Health</a></li>  
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
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="help.php">Help</a></li>
                        <?php
                        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
                            ?>
                            <li><a href="personalized.php">More Topics</a></li>
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
    <section id="playlist">
        <div class="main-description">
            <?php
                if($result){
                    while($datarow = mysqli_fetch_assoc($result)){
            ?>
            <img src="images/<?php echo $datarow['Image']; ?>" alt="">
            <div class="desc">
                <h3><?php echo $datarow['Name']; ?></h3>
                <p><?php echo $datarow['Description']; ?></p>
            </div>
        </div>
            <?php
                    }
                }
                $sql="SELECT p.Name, p.link FROM yoga y JOIN yogasd p ON y.Sno = p.scid WHERE p.scid = '{$_GET['id']}' ";
                $result=mysqli_query($con,$sql);
                if($result){
                    if(mysqli_num_rows($result)>0){
                        while($datarow=mysqli_fetch_assoc($result))
                        {
                        ?>
                        <div id="playlist-content">
                            <a href="<?php echo $datarow['link'] ; ?>" target = "blank">
                                <div class="block">
                                    <img src="images/icons/youtube.jpeg" alt="">
                                        <p><?php echo $datarow['Name'] ;?></p>
                                </div></a>
                        </div>
                        <?php
                    }
                    }
                    else{
                        ?>
                    <div id="playlist-content" class="no-content">
                                <div class="block">
                                        <p>No Video Available yet</p>
                                </div>
                    </div>

                    <?php
                    }
                }
             ?>
        <?php
//
?>
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
                 <li><a href="aboutus.php">Our Services</a></li>
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