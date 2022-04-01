<?php require('connection_login.php');
 ?>
 <?php
    session_start();
    $_SESSION['current_page'] = "skincare.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>skincare</title>
    <link rel="stylesheet" href="css/image-bar-style.css">
    <link rel="stylesheet" href="css/skincare.css">
    <link rel="stylesheet" href="filter.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css"> 
</head>
<body>
    <?php
        include('navbar.php');
    ?>
    <section id="side-img-section">
        <div id="skincare">
            <img class="img" src="images/skincare1.jpg" alt="" />
            <div class="center">"Healthy Skin is a reflection of overall wellness"</div>
        </div>
    </section>
    <section id="main-sc" class="scroll">
        <div class="content-block">
            <div class="filter">
                <div class="b" id="myBtnContainer">
                  
                    <input class="btn-filter" type="submit" value="Videos" name="Video" />
                    <input class="btn-filter" type="submit" value="Article" name="Article" />
                </div>
            </div>
            <?php
            // if(isset($_GET['Video'])){
            //     echo $sql='SELECT * FROM skincare WHERE Category = "videos"';
            // }
            // else if(isset($_GET['Article'])){
            //     alert('article');
            //     echo $sql='SELECT * FROM skincare WHERE Category = "article"';
            // }
            // else{
            //     echo $sql='SELECT * FROM skincare WHERE Category = "videos"';
            // }
            $sql='SELECT * FROM skincare WHERE Category = "article" ';
            $result=mysqli_query($con,$sql);
            if($result)
            {
                // if(mysqli_num_rows($result)>0)
                while($datarow=mysqli_fetch_assoc($result))
                {
                ?>
            <div class="items">
                <?php   for($i=0 ; $i < 3 ; $i++){  ?>
                <a class="box-link" href="skincare_article_playlist.php?id=<?php echo $datarow['sno']?>">
                <div class="box">
                        <div class="image-wrap">
                            <img class="img" src="images/<?php echo $datarow['image']?>" alt="" />
                        </div>
                        <div class="health-data-content">
                            <h4><?php echo $datarow['topicname']?></h4>
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
            <!-- <img src ="images/icons/suggestion.png" alt="" /> -->
        </div>
    </section>
    <?php 
        include('footer.php');
    ?>
</body>
<script>
    filterSelection("all") // Execute the function and show all columns
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }
}

// Show filtered elements
function AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</html>