<?php
     session_start();
     $_SESSION['current_page'] = "faq.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="css/image-bar-style.css">
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
    <?php
        include('navbar.php');
    ?>
    <div id="f"><h1>FAQ's</h1></div>
    <!-- <section> -->
      
        <div class="container">
            <div class="acc">
                <div class="acc-item" id="question1">
                    <a class="acc-link" href="#question1">
                        Where will  user login ?
                        <ion-icon  name="add" size="small" class="icon-add"></ion-icon> 
                        
                        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script> 
                        <ion-icon name="remove-outline" size="small" class="icon-remove"></ion-icon>  
                        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                         <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                    </a>
                    <div class="answer">
                     <p>Our website is login free website but user want to give the tip and suggetion and see the dietplan then user need the login.</p>
                    </div>
                </div>
                <div class="acc-item" id="question2">
                    <a class="acc-link" href="#question2">
                      How BMI(Body Mass Index) calculated ?
                        <ion-icon name="add" size="small"  class="icon-add"></ion-icon> 
                        <ion-icon name="remove" size="large"  class="icon-remove"></ion-icon> 
                        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
                    </a>
                    <div class="answer">
                        <p><pre>
                            BMI = Weight/(Height*Height)


                                    where,
                                        weight in kg
                                        height in m  
                        </pre></p>
                    </div>
                </div>
                <div class="acc-item" id="question3">
                    <a class="acc-link" href="#question3">
                     What are range of the BMI(Body Mass Index)?
                        <ion-icon name="add" size="small"  class="icon-add"></ion-icon> 
                        <ion-icon name="remove" size="large"  class="icon-remove"></ion-icon> 
                        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
                    </a>
                    <div class="answer">
                        <p><table border="1" width="50%" height="70%" class="mar">
                            <tr>
                                <td><h4>BMI</h4></td>
                                <td><h4>Weight Status</h4></td>
                            </tr>
                            <tr><td>Below 18.5</td>
                        <td>Underweight</td></tr>
                      
                        <tr><td>18.5-24.9</td>
                        <td>Healthy</td></tr>
                        <tr><td>25.0-29.9</td>
                        <td>Overweight</td></tr>
                        <tr><td>30.0 above</td>
                        <td>Obese</td></tr>
                        </table></p>
                    </div>
                </div>
                <div class="acc-item" id="question4">
                    <a class="acc-link" href="#question4">
                            Some videos maker name.
                        <ion-icon name="add" size="small"  class="icon-add"></ion-icon> 
                        <ion-icon name="remove" size="large"  class="icon-remove"></ion-icon> 
                        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
                    </a>
                    <div class="answer">
                        <p><pre>              
                        . TEDx
                        . The yoga institute
                        . Sadhguru
                        . Sandeep Maheshwari
                        . Fit tuber
                        . Sister Shivani
                        </pre>  </p>
                    </div>
                </div>
                <div class="acc-item" id="question4">
                    <a class="acc-link" href="#question4">
                        
                        <ion-icon name="add" size="small"  class="icon-add"></ion-icon> 
                        <ion-icon name="remove" size="large"  class="icon-remove"></ion-icon> 
                        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
                    </a>
                    <div class="answer">
                        <p>   Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quibusdam natus suscipit culpa corrupti reiciendis at voluptates debitis doloremque placeat? Cum necessitatibus possimus deserunt eaque quam maxime quidem, sit ea.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, nesciunt suscipit. Nemo corrupti repellendus at rerum molestias hic, dignissimos quaerat mollitia quas est. Ullam dignissimos officiis culpa quasi voluptatibus fugiat?
                            Ipsum nisi quidem ratione iusto cum neque optio porro, architecto natus illum quisquam amet excepturi laudantium iure assumenda recusandae esse quaerat eaque necessitatibus quos, aut odit, repellat alias? Officia, amet.</p>
                    </div>
                </div>
            </div>

        </div>
    <!-- </section> -->
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