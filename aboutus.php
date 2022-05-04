<?php
    session_start();
    $_SESSION['current_page'] = "aboutus.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     <link rel="stylesheet" href="css/image-bar-style.css">
     <link rel="stylesheet" href="css/footer.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
     <!-- <link rel="stylesheet" type="text/css" href="css/footer.css"> -->
     <style>
         .ba{
          

            background-color: #7fe0e65c;
            height: 162px;
         }
        .back{
            background-color: #10d7ca47;
            height: 162px;
        }
        .block{
             display:flex;
             flex-direction:row;
             justify-content:center;
             align-items:center;
            padding:2px 12px;
             gap:20px;
         }
         .block-rev{
             display:flex;
             flex-direction:row-reverse;
             justify-content:center;
             align-items:center;
            padding:2px 12px;
             gap:20px;

         }
       img{
          
            height: 109px;
            padding: 9px 0px;
        
     }
     span{
             color: red;
            font-weight: 800;
            font-family: 'Mukta', sans-serif;
         }
         .para{
             width:60%;
            padding: 32px;
          text-align: center;
          margin:auto;
         }
         @media (max-width:493px)and (min-width:445px) {
            .ba{
          

          background-color: #7fe0e65c;
          height: 200px;
       }
      .back{
          background-color: #10d7ca47;
          height: 200px;
      }

             
         }
         @media (max-width:445px)and (min-width:451px) {
            .ba{
          

          background-color: #7fe0e65c;
          height: 200px;
       }
      .back{
          background-color: #10d7ca47;
          height: 200px;
      }
p{
    font-size:18px;
}
             
         }
         @media (max-width:661px)and (min-width:486px) {
            .ba{
          

          background-color: #7fe0e65c;
          height: 200px;
       }
      .back{
          background-color: #10d7ca47;
          height: 200px;
      }
p{
    font-size:15px;
}
             
         }
         @media (max-width:486px)and (min-width:445px) {
           
p{
    font-size:12px;
}
             
         }
         @media (max-width:445px)and (min-width:440px) {
            .ba{
          

          background-color: #7fe0e65c;
          height: 160px;
       }
      .back{
          background-color: #10d7ca47;
          height: 160px;
      }
p{
    font-size:12px;
}
img {
    height: 109px;
    width: 40%;
    padding: 9px 0px;
}
}
@media (max-width:440px)and (min-width:290px) {
            .ba{
          

          background-color: #7fe0e65c;
          height: 165px;
       }
      .back{
          background-color: #10d7ca47;
          height: 165px;
      }
p{
    font-size:10px;
}
img {
    height: 109px;
    width: 40%;
    padding: 9px 0px;
}
}

         </style>
</head>
<body>
<nav id="nav">
        <div id="logo" >ItsAbtU</div>
            <ul>
            <li class="container displ btn"><a href="#">Health</a>
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
                        <li><a class="active" href="aboutus.php">About Us</a></li>
                        <li><a href="bmi-calories.php">BMI/calories</a></li>
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

<div  class="ba">
   <div class="block-rev para">
    
   <p><span >We believe in prudent investment of your Time</span><br></p>
</div> 
    </div>
<div class="back">
   <div class="block" >
       <img src="images\internet1.jpg" alt="" />
       <p><br>Internet is publicly available, which has it's own pros and cons. Pros are, everyone can access it and learn from  available information but cons are that anybody could also use it to provide information to others based on their whatsoever knowledge. For instance, refer to  Youtube. </p>
</div> 
    </div>
    <div  class="ba">
        <div class="block-rev">
            <img src="images/reliable1.jpg" alt="" />
         <p><br> YOUTUBE the popular source of information because it's well known that people tends to learn 
            better by watching information provided in terms of videos then reading it from textbooks!<br>
             But issue is anyone could post anything on youtube by making a Youtube Channel. Same goes  for writing
              article and uploading them for everyone. 
             
              
              </p>
     </div> 
         </div>
   
    <div  class="back">
   <div class="block">
       <img src="images/doctor.jpg" alt="" />
    <p><br> There are soo many solutions in the form of answers and now the query is which one to go for? <br>
        ItsAbtU provides information on health from reliable sources. The articles present, are written by specialists/ doctors.
         Also the given video links are made by Doctors/experts themselves or are from those Youtube channels that are famous and  
         provides true information!. 
         
         </p>
</div> 
    </div>
    <div class="ba">
   <div class="block-rev">
       <img src="images/allinone.jpg" alt="" />
       <p><br> ItsAbtU accommodates knowledge in the form of All in One.
         You don't need to wander different sites for different subtypes of health!<br> Details associated to all three
          main subsets of health i.e., Physical Health, Mental Health and Personal Care are given simultaneously.</p>
</div> 
    </div>
                </body>
            <?php
                include('footer.php');
            ?>
</html>