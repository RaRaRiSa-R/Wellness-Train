<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalized</title>
    <link rel="stylesheet" href="css/categories.css">
     <link rel="stylesheet" href="css/image-bar-style.css">
     <link rel="stylesheet" type="text/css" href="css/footer.css"> 
</head>
<body class="back">
    <?php
    include('navbar.php');
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
            <a href="personalized_playlist.php?id=<?php echo $datarow['SNo']?>" class="border"><img src="images/<?php echo $datarow['Image']?>" alt=""></a>
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
                        header("location:login.php");
                    }
                    else
                    {
                        header("location:{$_SESSION['current_page']}");
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