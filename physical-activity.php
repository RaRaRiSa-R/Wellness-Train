<?php
    session_start();
    $_SESSION['current_page'] = "physical-activity.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physical-Activity</title>
    <link rel="stylesheet" href="css/image-bar-style.css">
    <link rel="stylesheet" href="css/skincare.css">
    <link rel="stylesheet" href="css/physical-activity.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
    <?php
    include("navbar.php");
    ?>
    <section id="side-img-section-exer">
        <div id="skincare">
            <img class="img" src="images/meditation.jpeg" alt=""/>
            <div class="center">“Once you are exercising regularly, the hardest thing is to stop it.”</div>
        </div>
    </section>
    <section id="main-phy" class="scroll">
        <div class="content-block-phy">
            <div class="filter-items">
                <div class= "box-content">
                    <div>
                        <a class="box-link" href="yoga.php">
                        <div class="box">
                            <div class="image-wrap">
                                <img class="img" src="images/yoga.jpg" alt="" />
                            </div>
                            <div class="health-data-content">
                                <h4>YOGA</h4>
                            </div>
                        </div></a>
                    </div>
                    <div   class="div">
                        <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nobis vero culpa a autem maxime inventore voluptatibus, iusto adipisci ab ducimus vel sed dignissimos laudantium suscipit consequatur. Accusantium odio eaque eum quibusdam Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, veniam?</p>
                    </div>
                </div>

                <div class= "box-content  flex-dir">
                    <div>
                        <a class="box-link" href="exercise.php">
                        <div class="box">
                            <div class="image-wrap">
                                <img class="img" src="images/body-exercise.jfif" alt="" />
                            </div>
                            <div class="health-data-content">
                                <h4>EXERCISE</h4>
                            </div>
                        </div></a>
                    </div>
                    <div   class="div">
                        <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nobis vero culpa a autem maxime inventore voluptatibus, iusto adipisci ab ducimus vel sed dignissimos laudantium suscipit consequatur. Accusantium odio eaque eum quibusdam Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, veniam?</p>
                    </div>
                </div>


                <!-- <div class= "box-content">
                    <div   class="div p">
                        <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur  Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo rerum ducimus autem ex eaque blanditiis et vitae enim qui, beaicia, consequatur placeat. Accusantium nuasi quis nobis voluptas omnis!adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, facere. Perferendis, praesentium! Ratione nobis vero culpa a autem maxime inventore voluptatibus, iusto adipisci ab ducimus vel sed dignissimos laudantium suscipit consequatur. Accusantium odio eaque eum quibusdam Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, veniam?</p>
                    </div>
                    <div>
                        <a class="box-link" href="exercise.php">
                        <div class="box img-pos">
                            <div class="image-wrap">
                                <img class="img" src="images/workout.jpeg" alt="" />
                            </div>
                            <div class="health-data-content">
                                <h4>EXERCISE</h4>
                            </div>
                        </div></a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    
                    <ul>
                        <li><a href="#">about us</a></li>
                    
                        
                    </ul>
                </div>
                <div class="footer-col">
                    
                 <ul>
        
                     <li><a href="#">our services</a></li>
                    
                  
                 </ul>
             </div>
                <div class="footer-col">
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        
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