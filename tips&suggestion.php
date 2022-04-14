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
    <style>
    .btn{
        color: white;
        background-color: #0E656A  ;
        border: solid 3px #0d0c0c0a;
        letter-spacing: 0.7px;
    }
    </style>
</head>
<body>
    <form method="post" >
    <textarea id="editor" name="editor">

    </textarea>
    <input class="btn" type="submit" name="submit" >
    </form>
</body>

    
    <script>
        CKEDITOR.replace('editor');
</script>
</html>