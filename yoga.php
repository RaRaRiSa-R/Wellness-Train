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
</head>
<body>
    <?php
        include('navbar.php');
    ?>
    <section id="side-img-section">
        <div id="skincare">
            <img class="img" src="images/meditation.jpeg" alt="" />
            <div class="center">"Good Hair is defined by hair health not by hair texture"</div>
        </div>
    </section>
    <section id="main-sc" class="scroll">
        <div class="content-block">
            <div class="filter"></div>
            <?php
            $sql='SELECT * FROM yoga';
$result=mysqli_query($con,$sql);
$num_rows =  mysqli_num_rows($result) ;
$count = 0;
if($result)
{
    // if(mysqli_num_rows($result)>0)
    while($datarow=mysqli_fetch_assoc($result))
    {

        ?>
        <div class="items">
        <?php
        for($i= 0; $i < 3 && $count < $num_rows; $i++)
        {$count++;
            ?>
            <a href="yoga_playlist.php?id=<?php echo $datarow['SNo']?>">
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
                if($i<2){
                    $datarow=mysqli_fetch_assoc($result);
                }
                
        }?>
        </div>
        <?php
    }
}?>
                <!-- <div class="box">
                    <div class="image-wrap">
                        <img class="img" src="images/yoga.jpg" alt="" />
                    </div>
                    <div class="health-data-content">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae unde </p>
                    </div>
                </div>
                <div class="box">
                    <div class="image-wrap">
                        <img class="img" src="images/yoga.jpg" alt="" />
                    </div>
                    <div class="health-data-content">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae unde </p>
                    </div>
                </div>
                <div class="box">
                    <div class="image-wrap">
                        <img class="img" src="images/yoga.jpg" alt="" />
                    </div>
                    <div class="health-data-content">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae unde </p>
                    </div>
                </div>
                
            </div>
            <div class="items">
                <div class="box">
                    <div class="image-wrap">
                        <img class="img" src="images/yoga.jpg" alt="" />
                    </div>
                    <div class="health-data-content">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae unde </p>
                    </div>
                </div>
                <div class="box">
                    <div class="image-wrap">
                        <img class="img" src="images/yoga.jpg" alt="" />
                    </div>
                    <div class="health-data-content">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae unde </p>
                    </div>
                </div>
                
                 -->
            <!-- </div> -->
        </div>
    </section>
    <?php 
        include('footer.php');
    ?>
</body>

</html>