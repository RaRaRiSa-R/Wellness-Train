<?php
//require('connection_login.php');
////$sql="SELECT  p.Name, p.link FROM hair_care s JOIN haircare_playlist p ON s.SNo = p.ScId WHERE p.ScId = '{$_GET['id']}' ";
//$result=mysqli_query($con,$sql);
//if($result)
//{
    // if(mysqli_num_rows($result)>0)
    // while($datarow=mysqli_fetch_assoc($result))
    // {
    //     echo $datarow['Name'] .  $datarow['link'] . '<br>';

    //     //$datarow=mysqli_fetch_assoc($result);
    // }
// echo $_GET['id'] ;
//}
?>

<?php
    session_start();
    $_SESSION['current_page'] = "haircare_playlist.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haircare</title>
    <link rel="stylesheet" href="css/image-bar-style.css">
    <link rel="stylesheet" href="css/playlistStyle.css">
    <link rel="stylesheet" href="css/filter.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css"> 
</head>
<body>
    <?php
        include('navbar.php');
    ?>
    <?php 
            require('connection_login.php');
            $sql="SELECT * FROM hair_care WHERE `SNo.` ={$_GET['id']}";
            $result=mysqli_query($con,$sql);
    ?>
    <section id="playlist">
        <div class="main-description">
            <?php
            if($result)
            {
                while($datarow=mysqli_fetch_assoc($result))
                {
            ?>
                <img src="images/<?php echo $datarow['image']; ?>" alt="">
            <div class="desc">
                <h3><?php echo $datarow['Name']; ?></h3>
                <div class="dropdown">
                    <img class="dropbtn" src="images/icons/hamburger.jpeg" alt="" />
                    <div class="dropdown-content">
                        <form action="" id="language">
                            <input type="submit" value="English" name="Language" />
                            <input type="submit" value="Hindi" name="Language" />    
                            <input type="submit" value="Both" name="Language"/>                       
                        </form>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur mollitia omnis sed, non assumenda sequi quasi quaerat fugiat, atque esse nisi? Repudiandae, cum nostrum dolorem eum tempora at blanditiis. Tempora?
                Voluptatum laboriosam, eos repudiandae commodi deleniti laudantium vel eaque? Sequi dicta quaerat asperiores! Minus dicta alias doloremque, impedit et fuga facilis aperiam deserunt nostrum distinctio illo assumenda quisquam enim fugit.</p>
            </div>
                </div>
            <!-- <script>
            function selectlanguage(x)
            {
                // var x=doxument.getElementByID('language').element[0].value;
                // if()
                // {

                // }
            }
            </script> -->
                <?php
                }
            }
                $sql="SELECT  s.Name,p.Name, p.link FROM hair_care s JOIN haircare_playlist p ON `s.SNo.` = p.ScId WHERE p.ScId = '{$_GET['id']} ' ";
                $result=mysqli_query($con,$sql);
                if($result){
                    if(mysqli_num_rows($result)>0){
                        while($datarow=mysqli_fetch_assoc($result))
                    {
                        ?>
                        <div id="playlist-content">
                            <a href="<?php echo $datarow['link'] ; ?>">
                                <div class="block">
                                    <img src="images/icons/youtube.jpeg" alt="">
                                        <p><?php echo $datarow['Name'] ;?></p>
                                </div></a>
                        </div>
                        <?php
                    }
                    }
                }
             ?>
        <?php
//
?>
    </section>
    <?php 
        include('footer.php');
    ?>
</body>

</html>