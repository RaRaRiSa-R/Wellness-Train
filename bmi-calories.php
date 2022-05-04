<?php
    session_start();
    $_SESSION['current_page'] = "bmi-calories.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI/Calories</title>
    <link rel="stylesheet" href="css/image-bar-style.css">
    <link rel="stylesheet" href="css/box-bmi-cal-design.css"/>
    <link rel="stylesheet" href="css/footer.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
<nav id="nav">
        <div id="logo" >ItsAbtU</div>
            <ul>
            <li class="container displ "><a href="#">Health <i class="fa fa-angle-down" style="font-size:20px"></i></a>
                    <ul class="dropdown">
                        <li><a href="physical-activity.php">Physical Activity</a></li>
                        <li><a href="mental-health.php?category=Videos">Mental Health</a></li>
                        <li><a href="haircare.php?category=Videos">Hair Care</a></li>
                        <li><a href="skincare.php?category=Videos">Skin Care</a></li>
                    </ul>
                </li>  
                <li class="container n-dis"><a href="physical-activity.php">Physical Activity</a></li>
                <li class="container n-dis"><a href="mental-health.php?category=Videos"> MentalHealth</a></li>  
                <li class="container n-dis"><a href="#">Personal Care <i class="fa fa-angle-down" style="font-size:20px"></i></a>
                    <ul class="dropdown">
                        <li class="container n-dis"><a href="haircare.php?category=Videos"> Hair Care</a></li>
                        <li class="container n-dis"><a href="skincare.php?category=Videos"> Skin Care</a></li>
                    </ul>
                </li>
                <li class="container"><a href="#">Menu <i class="fa fa-angle-down" style="font-size:20px"></i></a>
                    <ul id="marg" class="dropdown">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a class="active" href="bmi-calories.php">BMI/calories</a></li>
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
    <?php
        include('image-navbar.php');
    ?>
    <section id="calculation-page-part">
        <div class="bmi-block">
            <div class="btn-style">
                <a href="#" id="bmi" class="border-rght">BMI</a>
                <a href="#" id="calories" >CALORIES</a>
            </div>
            <div class="div">
                <p id="message"></p>
            </div>
                <form id = "bmiBlock" class="content-12" onsubmit="return false">
                    <div class="input-design">
                        <label>Age</label>
                        <input type="number" id="age" class="input" min = 12 max = 80  required/>
                    </div>
                    <div class="input-design">
                        <label>Height</label>
                        <input type="text" id="height" class="input" required/>
                        <span>Feet</span>
                    </div>
                    <div class="input-design">
                        <label>Weight</label>
                        <input type="number" id="weight" class="input" required/>
                        <span>Kg</span>
                    </div>
                    <div class="btn-style gap-20">
                        <button type="submit" class="btn" onclick="bmiValue();">Calculate</button>
                        <button type="reset" href="#" class="btn">Clear</button>
                    </div>
                    <div class="input-design">
                        <hr>
                    </div>
                    <div class="input-design">
                        <label>BMI</label>
                        <input type="text" name="bmivalue" class="input" id="bmivalue" />
                    </div>
                    <div class="input-design">
                        <label id="weight-label">Weight Status</label>
                        <input type="text" name="status" class="input" id="status" />
                    </div>
                </form>
                <form id="caloriesBlock" style="display:none" class="content-12" onsubmit="return false">
                    <div class="input-design">
                        <label>Age</label>
                        <input type="number" class="input" id="Age1" min = 12 max = 80 />
                    </div>
                    <div class="input-design">
                        <label>Gender</label>
                        <input type="radio" id="male" value="male" name="g" > <label class="width-10">Male</label>
                        <input type="radio" id="female" value="female" name="g" ><label class="width-10">Female</label>
                    </div>
                    <div class="input-design">
                        <label>Height</label>
                        <input type="text" class="input" id="Height1"/>
                        <span>Feet</span>
                    </div>
                    <div class="input-design">
                        <label>Weight</label>
                        <input type="text" class="input" id="Weight1"/>
                        <span>Kg</span>
                    </div>
                    <div class="input-design">
                        <label>Activity</label>
                        <select name="activity-doing" id="activity" class="input">
                            <option value="select"></option>
                            <option value="bmr">Basal Metabolic Rate (BMR)</option>
                            <option value="sedentary">Sedentary: little or no exercise</option>
                            <option value="light">Light: exercise 1-3 times/week</option>
                            <option value="Moderate">Moderate: exercise 4-5 times/week</option>
                            <option value="Active">Active: daily exercise or intense exercise 3-4 times/week</option>
                            <option value="Very Active">Very Active: intense exercise 6-7 times/week</option>
                        </select>
                    </div>
                    <div class="btn-style gap-20">
                        <button href="#" class="btn" onclick="calorieValue();">Calculate</button>
                        <button href="#" class="btn">Clear</button>
                    </div>
                    <div class="input-design">
                        <label>Calorie</label>
                        <input type="text" name="calorie" class="input" id="calorie" />
                    </div>
                </form>
        </div>
    </section>
    <?php
        include('footer.php');
    ?>
    <script>
        var Buttonbmi = document.getElementById('bmi');
        var Buttoncalorie = document.getElementById('calories');
        var bmiblock = document.getElementById('bmiBlock');
        var caloriesblock = document.getElementById('caloriesBlock');

        Buttonbmi.onclick = function(){
            bmiblock.style.display = "flex";
            caloriesblock.style.display = "none";
        }
        Buttoncalorie.onclick = function(){
            bmiblock.style.display = "none";
            caloriesblock.style.display = "flex";
        }
    </script>
    <script type="text/JavaScript">
        
        function bmiValue(){
            var age = document.getElementById('age').value;
            var weight = document.getElementById('weight').value;
            var height = document.getElementById('height').value;

            //BMI CALCULATION PART
            if(height != '' && weight != '')
            {
                height = height * 12;
                height = height * 0.025; //now height in meter

                var bmi = weight / Math.pow(height, 2);
                console.log(bmi);
                document.getElementById('bmivalue').value = bmi;

                    if( bmi >= 30)
                        document.getElementById('status').value = 'Obesity';
                    else if( bmi >= 25)
                        document.getElementById('status').value = 'Overweight';
                    else if(bmi >= 18.5)
                        document.getElementById('status').value = 'Healthy Weight';
                    else
                        document.getElementById('status').value = 'Under Weight';
            }
            else{
                document.getElementById('message').innerText = "Please fill all the fields";
                document.getElementById('message').style.padding = "5px 8%";
            }
        }
    </script>

<script type="text/JavaScript">
        
        function calorieValue(){
            var age = document.getElementById('Age1').value;
            var weight = document.getElementById('Weight1').value;
            var height = document.getElementById('Height1').value;
            var activity= document.getElementById('activity').value;
            var gender= document.getElementsByName('g');

            //BMI CALCULATION PART
            if(height != '' && weight != '' && age!= '')
            {
              
                for(i = 0; i < gender.length; i++) {
                    if(gender[i].checked)
                    var genvalue = gender[i].value;
                }
                height = height * 30.48;
                
                var bmr;

                if(genvalue == 'male')
                {
                    bmr= 66.47 + (13.75 * weight) + (5.003 * height) - (6.755 * age);
                }
                else if(genvalue == 'female')
                {
                    bmr=655.1 + (9.563 * weight) + (1.850 * height) - (4.676 * age)
                }
                console.log(bmr);
                var caloriesIntake;

                if(activity== "sedentary")
                {
                    caloriesIntake=bmr * 1.2;
                }
                else if(activity== "light")
                {
                    caloriesIntake=bmr * 1.375;
                }
                else if(activity == "Moderate")
                {
                    caloriesIntake=bmr * 1.55;
                }
                else if(activity == "Active")
                {
                    caloriesIntake=bmr * 1.725;
                }
                else if(activity == "Very Active")
                {
                    caloriesIntake=bmr * 1.9;
                }

                console.log(caloriesIntake);
                document.getElementById('calorie').value = caloriesIntake;
            }
            else{
                document.getElementById('message').innerText = "Please fill all the fields";
                document.getElementById('message').style.padding = "5px 8%";
            }
        }
    </script>
</body>
    
</html>