<?php require('connection_login.php');
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/image-bar-style.css">
    <link rel="stylesheet" href="css/box-bmi-cal-design.css" />
    <link rel="stylesheet" href="css/transition.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <?php
        include('image-navbar.php');
    ?>
    <section id="calculation-page-part">
        <div class="bmi-block">
            <div class="content-12 card ">
                <div class="btn-style">
                    <a href="#calculation-page-part" id="sign-in" class="border-rght color" onclick="OpenSignIn();">Sign In</a>
                    <a href="#calculation-page-part" id="sign-up" class="color2" onclick="OpenSignUp();">Sign Up</a>
                </div>
                <div id="card" class="inner-box" >
                    <div id="card-front">
                    <form method="POST" action="login_register.php">
                        <div class="input-design">
                            <label>Email</label>
                            <input type="email" name="email" required/>
                        </div>
                        <div class="input-design">
                            <label>Password</label>
                            <input type="password" name="password" required/>
                        </div>
                        <div class="btn-style gap-20 mar-tp">
                            <button type="submit" name="login" class="btn">login</button>
                        </div>
                    </form>
                    </div>
                    <div id="card-back">
                    <form method="POST" action="login_register.php">
                        <!-- <div class="input-design"> -->
                            <!-- <label>Username</label>
                            <input type="text"  required/>
                        </div> -->
                        <div class="input-design">
                            <label>Email</label>
                            <input type="email" name="email" required />
                        </div>
                        <div class="input-design">
                            <label>Password</label>
                            <input type="password" name="password" required/>
                        </div>
                        <div class="input-design">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" required/>
                        </div>
                        <div class="btn-style gap-20">
                            <button type="submit" name="Register" class="btn">Register</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="calculation-page-part">
        <div class="bmi-block">
            <div class="content-12">
                <div class="btn-style">
                    <a href="#" class="border-rght">Sign In</a>
                    <a href="#">Sign Up</a>
                </div>
                    <div class="input-design">
                        <label>Email</label>
                        <input type="email"  />
                    </div>
                    <div class="input-design">
                        <label>Password</label>
                        <input type="password" />
                    </div>
                    <div class="input-design">
                        <label>Confirm Password</label>
                        <input type="password" />
                    </div>
                    <div class="btn-style gap-20">
                        <button href="#" class="btn">Register</button>
                    </div>
            </div>
        </div>
    </section> -->
    <?php
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
        {
            echo
                $_SESSION['e-mail'];
                ?>
                <a href='logout.php'>LOGOUT</a>
                <?php
                 
        }
    ?>
    <?php
        include('footer.php');
    ?>
</body>
<script type="text/JavaScript">
        var card = document.getElementById('card');
        var login = document.getElementById('sign-in');
        var register = document.getElementById('sign-up');
    
        function OpenSignIn() {
            // alert('sign-in');
            login.style.backgroundColor = "rgb(81 198 205 / 60%)";
            login.style.Color = "black";
            register.style.backgroundColor = "rgb(187 202 212 / 27%)";
            register.style.Color = "#4a4747";

            document.getElementById('card-front').style.display = "block";
            document.getElementById('card-back').style.display = "none";
            card.style.transform="rotateY(0deg)";
        }
        function OpenSignUp() {
            // alert('register');
            register.style.backgroundColor = "rgb(81 198 205 / 60%)";
            register.style.Color = "black";
            login.style.backgroundColor = "rgb(187 202 212 / 27%)";
            login.style.Color = "#4a4747";

            // document.getElementById('card-front').style.display = "none";
            // document.getElementById('card-back').style.display = "block";
            card.style.transform="rotateY(-180deg)";
            document.getElementById('card-front').style.display = "none";
            document.getElementById('card-back').style.display = "block";
        }
    </script>
</html>