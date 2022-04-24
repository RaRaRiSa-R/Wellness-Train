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
    <title>Home Page</title>
    <link rel="stylesheet" href="css/image-bar-style.css">
    <link rel="stylesheet" href="css/box-bmi-cal-design.css"/>
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<nav id="nav">
        <div id="logo" >ItsAbtU</div>
            <ul>
            <li class="container displ btn"><a href="#">Health</a>
                    <ul class="dropdown">
                        <li><a href="dietplan.php">Diet Plan</a></li>
                        <li><a href="physical-activity.php">Physical Activity</a></li>
                        <li><a href="mental-health.php?category=Videos">Mental Health</a></li>
                        <li><a href="haircare.php?category=Videos">Hair Care</a></li>
                        <li><a href="skincare.php?category=Videos">Skin Care</a></li>
                    </ul>
                </li>  
                <li class="container n-dis"><a href="dietplan.php">Diet plan </a></li>  
                <li class="container n-dis"><a href="physical-activity.php">Physical Activity</a></li>
                <li class="container n-dis"><a href="mental-health.php?category=Videos"> MentalHealth</a></li>  
                <li class="container"><a href="#">Personal Care</a>
                    <ul class="dropdown">
                        <li class="container n-dis"><a href="haircare.php?category=Videos"> Hair Care</a></li>
                        <li class="container n-dis"><a href="skincare.php?category=Videos"> Skin Care</a></li>
                    </ul>
                </li>
                <li class="container"><a href="#">Menu</a>
                    <ul id="marg" class="dropdown">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a class="active" href="bmi-calories.php">BMI/calories</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <?php
                        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
                            ?>
                            <li><a href="personalized.php">Personalized</a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <li class="container">
                <?php
                    // echo "console.log('{$_SESSION['logged_in']}')";
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
                <a href="" id="bmi" class="border-rght">BMI</a>
                <a href="" id="calories" >CALORIES</a>
            </div>
            <div class="div">
                <p id="message"></p>
            </div>
            <!-- <div class="content-12"> -->
                <form id = "bmiBlock" class="content-12" onsubmit="return false">
                    <div class="input-design">
                        <label>Age</label>
                        <input type="number" id="age" class="input" required/>
                    </div>
                    <!-- <div class="input-design">
                        <label>Gender</label>
                        <input type="radio" name="g" id="m"> <label class="width-10">Male</label>
                        <input type="radio" name="g" id="f"><label class="width-10">Female</label>
                    </div> -->
                    <div class="input-design">
                        <label>Height</label>
                        <input type="text" id="height" class="input" required/>
                        <span>in Feet</span>
                    </div>
                    <div class="input-design">
                        <label>Weight</label>
                        <input type="number" id="weight" class="input" required/>
                        <span>in Kg</span>
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
                <form id="caloriesBlock" style="display:none" class="content-12">
                    <div class="input-design">
                        <label>Age</label>
                        <input type="number" class="input" min = 5 max = 80 />
                    </div>
                    <div class="input-design">
                        <label>Gender</label>
                        <input type="radio" id="gender" name="g" id="m"> <label class="width-10">Male</label>
                        <input type="radio" id="gender" name="g" id="f"><label class="width-10">Female</label>
                    </div>
                    <div class="input-design">
                        <label>Height</label>
                        <input type="text" class="input"/>
                        <span>ft</span>
                    </div>
                    <div class="input-design">
                        <label>Weight</label>
                        <input type="text" class="input"/>
                        <span>Kg</span>
                    </div>
                    <div class="input-design">
                        <label>Activity</label>
                        <select name="activity-doing" id="activity" class="input">
                            <option value="select"></option>
                            <option value="bmr">Basal Metabolic Rate (BMR)</option>
                            <option value="sedetary">Sedentary: little or no exercise</option>
                            <option value="light">Light: exercise 1-3 times/week</option>
                            <option value="Moderate">Moderate: exercise 4-5 times/week</option>
                            <option value="Active">Active: daily exercise or intense exercise 3-4 times/week</option>
                            <option value="Very Active">Very Active: intense exercise 6-7 times/week</option>
                            <option value="Extra Active">Extra Active: very intense exercise daily, or physical job</option>
                        </select>
                    </div>
                    <div class="btn-style gap-20">
                        <button href="#" class="btn">Calculate</button>
                        <button href="#" class="btn">Clear</button>
                    </div>
                </form>
            <!-- </div> -->
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
                // bmi = Math.round(bmi);
                console.log(bmi);
                document.getElementById('bmivalue').value = bmi;

                // if(age < 20)
                // {
                //     document.getElementById('weight-label').innerHTML = 'Percentile';
                // }
                // else{
                    if( bmi >= 30)
                        document.getElementById('status').value = 'Obesity';
                    else if( bmi >= 25)
                        document.getElementById('status').value = 'Overweight';
                    else if(bmi >= 18.5)
                        document.getElementById('status').value = 'Healthy Weight';
                    else
                        document.getElementById('status').value = 'Under Weight';
                // }
            }
            else{
                document.getElementById('message').innerText = "Please fill all the fields";
                document.getElementById('message').style.padding = "5px 8%";
            }
        }
    </script>
</body>
    
</html>