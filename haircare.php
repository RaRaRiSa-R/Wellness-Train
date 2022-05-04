<?php
    require('connection_login.php');
    session_start();
    $_SESSION['current_page'] = "haircare.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Care</title>
    <link rel="stylesheet" href="css/image-bar-style.css">
    <link rel="stylesheet" href="css/skincare.css">
    <link rel="stylesheet" href="css/filter.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css"> 
    <link rel="stylesheet" type="text/css" href="css/plus_sign.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>

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
                        <li><a class="active" href="haircare.php?category=Videos">Hair Care</a></li>
                        <li><a href="skincare.php?category=Videos">Skin Care</a></li>
                    </ul>
                </li>  
                <!-- <li class="container n-dis"><a href="dietplan.php">Diet plan </a></li>   -->
                <li class="container n-dis"><a href="physical-activity.php">Physical Activity</a></li>
                <li class="container n-dis"><a href="mental-health.php?category=Videos"> Mental Health</a></li>  
                <li class="container n-dis"><a href="#">Personal Care <i class="fa fa-angle-down" style="font-size:20px"></i></a>
                    <ul class="dropdown">
                        <li class="container n-dis"><a class="active" href="haircare.php?category=Videos"> Hair Care</a></li>
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
    <section id="side-img-section">
        <div id="skincare">
            <img class="img" src="images/haircare1.jpg" alt="" />
            <div class="center" id="haircare-img-text">"Good Hair is defined by hair health not by hair texture"</div>
        </div>
    </section>
    <section id="main-sc" class="scroll">
        <div class="content-block">
            <div class="filter">
                <div class="b" id="myBtnContainer">
                  <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" METHOD = "get" >
                    <?php
                    if($_GET['category'] == "Videos")
                    {    
                    ?>
                    <input class="btn-filter active" type="submit" value="Videos" name="category" onclick="filterSelection('video')" />
                    <input class="btn-filter " type="submit" value="Articles" name="category" onclick="filterSelection('article')" />
                    <?php      
                    }
                    else{
                    ?>
                    <input class="btn-filter " type="submit" value="Videos" name="category" onclick="filterSelection('video')" />
                    <input class="btn-filter active" type="submit" value="Articles" name="category" onclick="filterSelection('article')" />
                    <?php  }  ?>
                  </form>
                </div>
            </div>
                <?php
                    // print_r($_GET);
                    // $sql='SELECT * FROM hair_care WHERE Category = "videos" ';      //by default
                if(isset($_GET['category'])){         //according to user's need
                  $sql="SELECT * FROM hair_care WHERE Category = '{$_GET['category']}' ";
                }
                $result=mysqli_query($con,$sql);
                if($result)
                {
                //   $num_rows =  mysqli_num_rows($result) ;   
                //   $count = 0;
                      ?>
            <div class="items">
                <?php   
                  while($datarow=mysqli_fetch_assoc($result))
                  { 
                // for($i= 0; $i < 3 && $count < $num_rows; $i++){  
                //   $count++;
                    if($_GET['category'] == "Videos"){  ?>
                      <a class="box-link" href="haircare_playlist.php?id=<?php echo $datarow['sno'];?>">
                  <?php }
                    else{ ?>
                      <a class="box-link" href="haircare_article.php?id=<?php echo $datarow['sno'];?>">
                  <?php } ?>
                  <div class="box">
                      <div class="image-wrap">
                          <img class="img" src="images/<?php echo $datarow['image'];?>" alt="" />
                      </div>
                      <div class="health-data-content">
                          <h4><?php echo $datarow['Name'];?></h4>
                      </div>
                  </div>
                    </a>
                  <?php  // $datarow=mysqli_fetch_assoc($result);
                // }   
                  }
                ?>
            </div>
                <?php
                }?>
            </div>
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