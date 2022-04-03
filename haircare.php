<?php
    require('connection_login.php');
    session_start();
    $_SESSION['current_page'] = "haircare.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haircare</title>
    <link rel="stylesheet" href="css/image-bar-style.css">
    <link rel="stylesheet" href="css/skincare.css">
    <link rel="stylesheet" href="css/filter.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css"> 
</head>
<body>
    <?php
        include('navbar.php');
    ?>
    <section id="side-img-section">
        <div id="skincare">
            <img class="img" src="images/haircare1.jpg" alt="" />
            <div class="center">"Good Hair is defined by hair health not by hair texture"</div>
        </div>
    </section>
    <section id="main-sc" class="scroll">
        <div class="content-block">
        <div class="filter">
                <div class="b" id="myBtnContainer">
                  <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" METHOD = "get" >
                  <?php
                  if($_GET['category'] == "Videos")
                  {    
                 ?>
                    <input class="btn-filter active" type="submit" value="Videos" name="category" onclick="filterSelection('video')" />
                    <input class="btn-filter " type="submit" value="Article" name="category" onclick="filterSelection('article')" />
                <?php      
                }
                else{
              ?>
                    <input class="btn-filter " type="submit" value="Videos" name="category" onclick="filterSelection('video')" />
                    <input class="btn-filter active" type="submit" value="Article" name="category" onclick="filterSelection('article')" />
            <?php  }
                  ?>
                  </form>
                </div>
            </div>
                    <?php
                    // print_r($_GET);
                    // $sql='SELECT * FROM hair_care WHERE Category = "videos" ';      //by default
                   if(isset($_GET['category'])){         //according to user's need
                      $sql="SELECT * FROM hair_care WHERE category = '{$_GET['category']}' ";
                   }
                   $result=mysqli_query($con,$sql);
                   if($result)
                   {
                     $num_rows =  mysqli_num_rows($result) ;   
                     $count = 0;
                       while($datarow=mysqli_fetch_assoc($result))
                       {
                       ?>
                   <div class="items">
                       <?php   
                         for($i= 0; $i < 3 && $count < $num_rows; $i++){  
                           $count++;
                         if($_GET['category'] == "Videos"){  ?>
                           <a class="box-link" href="haircare_playlist.php?id=<?php echo $datarow['SNo'];?>">
                 <?php   }
                         else{ ?>
                           <a class="box-link" href="haircare_article.php?id=<?php echo $datarow['SNo'];?>">
                 <?php    }  ?>
                       <div class="box">
                               <div class="image-wrap">
                                   <img class="img" src="images/" alt="" />
                               </div>
                               <div class="health-data-content">
                                   <h4><?php echo $datarow['Name'];?></h4>
                               </div>
                           </div>
                       </a>
                       <?php   $datarow=mysqli_fetch_assoc($result);
                       }   
                       ?>
                   </div>
                   <?php
                       }
                   }?>
               </div>
               <div >
                   <i class="fa-solid fa-circle-plus"></i>
               </div>
           
        </div>
    </section>
    <?php 
        include('footer.php');
    ?>
</body>
</html>