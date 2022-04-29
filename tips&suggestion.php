<?php
    session_start();
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
</head>
<body>
    <?php
        include('navbar.php');
    ?>
    <section>
        <div class="heading">
            <h1>User's Tips <span onclick="scrollToBottom();" class="tooltip"><img src="images/icons/writing.png" style="width: 30px; height: 30px;"/><span class="tooltiptext">Write Tips</span></span></h1>
            <p>You are free to read and write anything</p>
        </div>
        <?php
        require('connection_login.php');
        $sql = 'SELECT * FROM user_tips t JOIN registered_user u ON (u.email = t.email)';
        $result = mysqli_query($con, $sql);
        if($result){
        ?>
        <div class="user-tips">
            <?php
            while($datarow = mysqli_fetch_assoc($result)){
                $len = intval(strlen($datarow['content']));
                $sublen = intval( strlen(substr($datarow['content'], 0, strpos($datarow['content'], '</p>'))) );

                $n_date = date_create($datarow['added_on']);
                $date = date_format($n_date, 'd-M-Y');
            ?>
            <div class="items">
                <div class="user-name">
                    <p><?php echo $datarow['username']; ?> <span class="far fa-calendar-alt"> <?php echo $date ?></span></p>
                </div>
                <h2><?php echo $datarow['Title']; ?></h2>
                <div>
                    <?php
                    if($len - $sublen > 50){
                    ?>
                        <p><?php echo substr($datarow['content'], 0, strpos($datarow['content'], '</p>'));?></p>
                        <div class="read-more-text">
                            <?php echo substr($datarow['content'], strpos($datarow['content'], '</p>'));?>
                        </div>
                        <span class="read-more-btn">...Read More</span>
                    <?php
                    }
                    else{
                    ?>
                        <p><?php echo $datarow['content']; ?></p>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <?php
        }
        else{
            ?>
            <div class="no-tips">
                <p>No Tips Available</p>
            </div>  
            <?php
        }
        ?>
        
    </section>
    <section>
        <?php
            if(isset($_SESSION['message'])){
                if($_SESSION['message'] == "Data Inserted Successfully"){
                    ?>
                    <p id="success-message"><?php echo $_SESSION['message']; ?></p>
                    <?php
                    unset($_SESSION['message']);
                }
                else{
                    ?>
                    <p id="failiur-message"><?php echo $_SESSION['message']; ?></p>
                    <?php
                    unset($_SESSION['message']);
                }
            }
            
        ?>
        <div class="give-tips">
            <h3> Give Some Tips and Suggestion</h3>
        </div>
        <form method="post" action="tips_submission.php">
            <div class="blog-title">
                <i class="fas fa-pen"></i>
                <input type="text" name="title" id="title" placeholder="Enter article title" required />
            </div>
            <textarea id="editor" name="editor" required></textarea>
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
    <script>
        function scrollToBottom() {
            window.scrollTo(0, document.body.scrollHeight);
        }
        history.scrollRestoration = "manual";
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
<?php
    if(isset($_SESSION['scrollToBottom'])){
        echo "<script> 
                window.scrollTo(0, document.body.scrollHeight);
        </script>";
        unset($_SESSION['scrollToBottom']);
    }
?>