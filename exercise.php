<?php
    session_start();
    $_SESSION['current_page'] = "exercise.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
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
            <img class="img" src="images/exercise.jpg" alt="" />
            <div class="center">"Good Hair is defined by hair health not by hair texture"</div>
        </div>
    </section>
    <section id="main-sc" class="scroll">
        <div class="content-block">
            <div class="filter"></div>
            <div class="items">
                <div class="box">
                    <div class="image-wrap">
                        <img class="img" src="images/workout.jpeg" alt="" />
                    </div>
                    <div class="health-data-content">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae unde </p>
                    </div>
                </div>
                <div class="box">
                    <div class="image-wrap">
                        <img class="img" src="images/Squats1.jpg" alt="" />
                    </div>
                    <div class="health-data-content">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae unde </p>
                    </div>
                </div>
                <div class="box">
                    <div class="image-wrap">
                        <img class="img" src="images/exercise.jpg" alt="" />
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
                        <img class="img" src="images/exercise.jpg" alt="" />
                    </div>
                    <div class="health-data-content">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae unde </p>
                    </div>
                </div>
                <div class="box">
                    <div class="image-wrap">
                        <img class="img" src="images/exercise.jpg" alt="" />
                    </div>
                    <div class="health-data-content">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae unde </p>
                    </div>
                </div>
                <div class="box">
                    <div class="image-wrap">
                        <img class="img" src="images/exercise.jpg" alt="" />
                    </div>
                    <div class="health-data-content">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae unde </p>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    <?php 
        include('footer.php');
    ?>
</body>

</html>