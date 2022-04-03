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
    // echo print_r($_POST);
    $content=$_POST['editor'];
    $added_on=date('Y-m-d h:i:s');
    $sql="INSERT INTO user_tips(content, added_on) VALUES ('$content','$added_on')";
    $result = mysqli_query($con,$sql);

    if($result){
        $_SESSION['message'] = "Data Inserted Successfully";
        header('location:index.php');
        die();
    }
    else{
        echo "Sorry Can't submitted";
    }
}
?>
<script src="ckeditor/ckeditor.js"></script>
    <form method="post" >
    <textarea id="editor" name="editor">

    </textarea>
    <input type="submit" name="submit" >
    </form>
    <script>
        CKEDITOR.replace('editor');
</script>