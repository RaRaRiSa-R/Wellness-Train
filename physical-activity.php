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
    <title>Exercise/Yoga</title>
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
                        <!-- <h1>Benefits of Yoga</h1> -->
                        <p>Yoga is an ancient practice that builds strength and awareness and brings together the mind and
                            body. It includes breathing exercises, meditation and asanas or poses that stretch and flex various
                            muscle groups. These asanas are designed to encourage relaxation and reduce stress.
                        </p>
                        <h1> Benefits of Yoga are</h1>
                        <ul>
                                <li>Yoga improves strength, balance and flexibility.</li>
                                <li>Yoga helps with back pain relief</li>
                                <li>Yoga benefits heart health</li>
                                <li>Yoga relaxes you, to help you sleep better.</li>
                                <li>Yoga can mean more energy and brighter moods.</li>
                                <li>Yoga helps you manage stress. </li>
                        </ul>
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
                        <!-- <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h1> -->
                        <p>Exercise is defined as any movement that makes your muscles work and requires your body to burn
calories. There are many types of physical activity, including swimming, running, jogging, walking,
and dancing, to name a few. Being active has been shown to have many health benefits, both
physically and mentally. It may even help you live longer.</p>
                        <h1> Benefits of Exercise are</h1>
                        <ul>
                                <li>Exercise is good for your muscles and bones.</li>
                                <li>Exercise can increase your energy levels</li>
                                <li>Exercise can reduce your risk of chronic disease</li>
                                <li>Exercise can help skin health.</li>
                                <li>Exercise can help your brain health and memory.</li>
                                <li>Exercise can help with relaxation and sleep quality.</li>
                        </ul>
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