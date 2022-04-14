<?php require('connection_login.php');
 ?>
 <?php
    session_start();
    $_SESSION['current_page'] = "mental-health.php?category=videos";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health</title>
    <link rel="stylesheet" href="css/image-bar-style.css">
    <link rel="stylesheet" href="css/skincare.css">
    <link rel="stylesheet" href="css/filter.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css"> 
    <link rel="stylesheet" type="text/css" href="css/plus_sign.css"> 
</head>
<body>
    <?php
        include('navbar.php');
    ?>
    <section id="side-img-section">
        <div id="skincare">
            <img class="img" src="images/mental-stress.jpg" alt="" />
            <div class="center">"It's okay to not be okay-It means that your mind is trying to heal itself"</div>
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
            <?php  }
                  ?>
                  </form>
                </div>
            </div>
            <?php
            //  print_r($_GET);
             $sql='SELECT * FROM mental_health WHERE Category = "videos" ';      //by default
            if(isset($_GET['category'])){         //according to user's need
                $sql="SELECT * FROM mental_health WHERE category = '{$_GET['category']}' ";
            }
            $result=mysqli_query($con,$sql);
            if($result)
            {
            //   $num_rows =  mysqli_num_rows($result) ;
            //   $count = 0;
              // if(mysqli_num_rows($result)>0)
              ?>
            <div class="items">
                <?php
                while($datarow=mysqli_fetch_assoc($result))
                {
                ?>
                <?php   
                //   for($i= 0; $i < 3 && $count < $num_rows; $i++){  
                    // $count++;
                  if($_GET['category'] == "Videos"){  ?>
                    <a class="box-link" href="mental_health_playlist.php?id=<?php echo $datarow['sno'];?>">
                    <?php   }
                  else{ ?>
                    <a class="box-link" href="mentalhealth_article.php?id=<?php echo $datarow['sno'];?>">
                    <?php    }  ?>
                    <div class="box">
                        <div class="image-wrap">
                            <img class="img" src="images/<?php echo $datarow['image'];?>" alt="" />
                        </div>
                        <div class="health-data-content">
                            <h4><?php echo $datarow['name'];?></h4>
                        </div>
                    </div>
                </a>
                <?php   //$datarow=mysqli_fetch_assoc($result);
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