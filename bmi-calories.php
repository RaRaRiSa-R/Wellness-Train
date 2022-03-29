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
    <?php
        include('image-navbar.php');
    ?>
    <section id="calculation-page-part">
        <div class="bmi-block">
            <div class="btn-style">
                <a href="#" class="border-rght">BMI</a>
                <a href="#">CALORIES</a>
            </div>
            <!-- <div class="content-12"> -->
                <form class="content-12" onsubmit="return false">
                    <div class="input-design">
                        <label>Age</label>
                        <input type="number" id="age" required/>
                    </div>
                    <div class="input-design">
                        <label>Gender</label>
                        <input type="radio" name="g" id="m"> <label class="width-10">Male</label>
                        <input type="radio" name="g" id="f"><label class="width-10">Female</label>
                    </div>
                    <div class="input-design">
                        <label>Height</label>
                        <input type="text" id="height" required/>
                        <span>ft</span>
                    </div>
                    <div class="input-design">
                        <label>Weight</label>
                        <input type="number" id="weight" required/>
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
                        <input type="text" name="bmivalue" id="bmivalue" />
                    </div>
                    <div class="input-design">
                        <label id="weight-label">Weight Status</label>
                        <input type="text" name="status" id="status" />
                    </div>
                </form>
            <!-- </div> -->
        </div>
    </section>
    <section id="cal-calculation-page-part">
        <div class="bmi-block">
            <div class="btn-style">
                <a href="#" class="border-rght">BMI</a>
                <a href="#">CALORIES</a>
            </div>
            <div class="content-12">
                    <div class="input-design">
                        <label>Age</label>
                        <input type="number"  min = 5 max = 80 />
                    </div>
                    <div class="input-design">
                        <label>Gender</label>
                        <input type="radio" id="gender" name="g" id="m"> <label class="width-10">Male</label>
                        <input type="radio" id="gender" name="g" id="f"><label class="width-10">Female</label>
                    </div>
                    <div class="input-design">
                        <label>Height</label>
                        <input type="text" />
                        <span>ft</span>
                    </div>
                    <div class="input-design">
                        <label>Weight</label>
                        <input type="text" />
                        <span>Kg</span>
                    </div>
                    <div class="input-design">
                        <label>Activity</label>
                        <select name="activity-doing" id="activity">
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
            </div>
        </div>
    </section>
    <?php
        include('footer.php');
    ?>
    <script type="text/JavaScript">
        function bmiValue(){
            var age = document.getElementById('age').value;
            var gender = document.getElementById('gender').value;
            var weight = document.getElementById('weight').value;
            var height = document.getElementById('height').value;

            //BMI CALCULATION PART
            if(height != '' && weight != '')
            {
                height = height * 12;
                height = height * 0.025; //now height in meter

                var newbmivalue = weight / Math.pow(height, 2);
                newbmivalue = Math.round(newbmivalue);
                document.getElementById('bmivalue').value = newbmivalue;

                if(age < 20)
                {
                    document.getElementById('weight-label').innerHTML = 'Percentile';
                }
                else{
                    if( newbmivalue >= 30)
                        document.getElementById('status').value = 'Obesity';
                    else if( newbmivalue >= 25)
                        document.getElementById('status').value = 'Overweight';
                    else if(newbmivalue >= 18.5)
                        document.getElementById('status').value = 'Healthy Weight';
                    else
                        document.getElementById('status').value = 'Under Weight';
                }
            }
        }
    </script>
</body>
    
</html>