<!--  -->
<?php
session_start();
if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
else{
}

if(isset($_POST['submit'])){
    require("connection_login.php");
    if(!isset($_SESSION['logged_in']))
    {
        $_SESSION['current_page']="tips&suggestion.php";
        echo"
            <script>alert('Need to be logged in first');
            window.location.href='login.php';
            </script>
         ";
    }
   
    // echo print_r($_POST);
    $content=$_POST['editor'];
    $added_on=date('Y-m-d h:i:s');
    $sql="INSERT INTO user_tips(content, added_on) VALUES ('$content','$added_on')";
    $result = mysqli_query($con,$sql);

    if($result){
        $_SESSION['message'] = "Data Inserted Successfully";
        die();
    }
    else{
        $_SESSION['message'] = "Sorry Can't submitted";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="ckeditor/ckeditor.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tips & Suggestions</title>
    <link rel="stylesheet" href="css/image-bar-style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/tips&suggestion.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include('navbar.php');
    ?>
    <section>
        <div class="heading">
            <h1>User's Tips</h1>
            <p>You are free to read and write anything</p>
        </div>
        <div class="user-tips">
            <div class="items">
                <div class="user-name">
                    <p>Lorem ipsum, <span class="far fa-calendar-alt"> 25-Apr-2022</span></p>
                </div>
                <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem numquam provident quos.</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero beatae quam quo modi culpa itaque ipsum, laudantium, officiis velit alias iste autem ea aspernatur tenetur quod! Aperiam quae odit minima tempore sapiente quasi in labore dolorem
                    <span class="read-more-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis voluptate reprehenderit perferendis?Lorem ipsum dolor, sit amet jdksj. Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto placeat cupiditate libero! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio eum accusamus inventore, exercitationem ut voluptate, soluta quaerat architecto, numquam ipsum hic. Ratione, ipsum dolores?
                    </span>
                    <span class="read-more-btn">...Read More</span>
                </p>
            </div>
            <div class="items bg2">
                <div class="user-name">
                    <p>Lorem ipsum, <span class="far fa-calendar-alt"> 25-Apr-2022</span></p>
                </div>
                <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem numquam provident quos.</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero beatae quam quo modi culpa itaque ipsum, laudantium, officiis velit alias iste autem ea aspernatur tenetur quod! Aperiam quae odit minima tempore sapiente quasi in labore dolorem
                    <span class="read-more-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis voluptate reprehenderit perferendis?Lorem ipsum dolor, sit amet jdksj. Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto placeat cupiditate libero! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio eum accusamus inventore, exercitationem ut voluptate, soluta quaerat architecto, numquam ipsum hic. Ratione, ipsum dolores?
                    </span>
                    <span class="read-more-btn">...Read More</span>
                </p>
            </div>
            <div class="items">
                <div class="user-name">
                    <p>Lorem ipsum, <span class="far fa-calendar-alt"> 25-Apr-2022</span></p>
                </div>
                <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem numquam provident quos.</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero beatae quam quo modi culpa itaque ipsum, laudantium, officiis velit alias iste autem ea aspernatur tenetur quod! Aperiam quae odit minima tempore sapiente quasi in labore dolorem Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    <!-- <span class="read-more-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis voluptate reprehenderit perferendis?Lorem ipsum dolor, sit amet jdksj. Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto placeat cupiditate libero! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio eum accusamus inventore, exercitationem ut voluptate, soluta quaerat architecto, numquam ipsum hic. Ratione, ipsum dolores?
                    </span>
                    <span class="read-more-btn">...Read More</span> -->
                </p>
            </div>
        </div>
    </section>
    <section>
        <div class="give-tips">
            <h3> Give Some Tips and Suggestion</h3>
        </div>
        <form method="post" >
            <div class="blog-title">
                <i class="fas fa-pen"></i>
                <input type="text" name="title" id="title" placeholder="Enter article title" />
            </div>
            <textarea id="editor" name="editor">
            </textarea>
        <input class="btn" type="submit" name="submit" >
        </form>
    </section>
    <?php
        include('footer.php');
    ?>
</body>
    <script>
        CKEDITOR.replace('editor');
    </script>

    <!-- Script for read more button  -->
    <script type="text/javascript">
        parentContainer = document.querySelector('.user-tips');

        parentContainer.addEventListener('click', event=>{
            const current = event.target;
            const isReadMoreBtn = current.className.includes('read-more-btn');

            if(!isReadMoreBtn)  return;

            const currentText = event.target.parentNode.querySelector('.read-more-text');

            currentText.classList.toggle('read-more-text--show');
            current.textContent = current.textContent.includes('Read More') ? "Read Less" : "...Read More";
        })

    </script>
</html>