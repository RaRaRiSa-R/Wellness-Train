<?php
    session_start();
    $_SESSION['current_page'] = "haircare_playlist.php?id={$_GET['id']}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Care</title>
    <link rel="stylesheet" href="css/image-bar-style.css">
    <link rel="stylesheet" href="css/playlistStyle.css">
    <link rel="stylesheet" href="css/filter.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css"> 
</head>
<body>
    <?php
        include('navbar.php');
    ?>
    <?php 
            require('connection_login.php');
            $sql="SELECT * FROM hair_care WHERE `sno` ={$_GET['id']}";
            $result=mysqli_query($con,$sql);
    ?>
    <section id="playlist">
        <div class="main-description">
            <?php
            if($result)
            {
                while($datarow=mysqli_fetch_assoc($result))
                {
            ?>
                <img src="images/<?php echo $datarow['image']; ?>" alt="">
            <div class="desc">
                <h3><?php echo $datarow['Name']; ?></h3>
                <div class="dropdown">
                    <img class="dropbtn" src="images/icons/hamburger.jpeg" alt="" />
                    <div class="dropdown-content">
                        <form action="" id="language">
                            <input type="submit" value="English" name="Language" />
                            <input type="submit" value="Hindi" name="Language" />    
                            <input type="submit" value="Both" name="Language"/>                       
                        </form>
                    </div>
                </div>
                <p><?php echo $datarow['Description']; ?></p>
            </div>
                </div>
                <?php
                }
            }
                $sql="SELECT  p.Name, p.Link FROM haircare_playlist p JOIN hair_care s ON (s.sno = p.scid) WHERE p.scid = '{$_GET['id']}' ";
                $result=mysqli_query($con,$sql);
                if($result){
                    if(mysqli_num_rows($result)>0){
                        while($datarow=mysqli_fetch_assoc($result))
                        {
                        ?>
                        <div id="playlist-content">
                            <a href="<?php echo $datarow['Link']; ?>">
                                <div class="block">
                                    <img src="images/icons/youtube.jpeg" alt="">
                                        <p><?php echo $datarow['Name'];?></p>
                                </div></a>
                        </div>
                        <?php
                        }
                    }
                }
                else{
                    echo "Result:false:->lert('query not run')";
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