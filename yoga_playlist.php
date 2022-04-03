<?php
// require('connection_login.php');
// $sql="SELECT  p.Name, p.link FROM yoga y JOIN yogasd p ON y.SNo = p.scid WHERE p.scid = '{$_GET['id']}' ";
// $result=mysqli_query($con,$sql);
// if($result)
// {
//     // if(mysqli_num_rows($result)>0)
//     while($datarow=mysqli_fetch_assoc($result))
//     {
//         echo $datarow['Name'] .  $datarow['link'] . '<br>';

//         //$datarow=mysqli_fetch_assoc($result);
//     }
// // echo $_GET['id'] ;
// }
?>

<?php
    session_start();
    $_SESSION['current_page'] = "yoga_playlist.php";
?>
<?php
    require('connection_login.php');
    $sql="SELECT * FROM yoga WHERE SNo={$_GET['id']}";
    $result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga</title>
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
    <section id="playlist">
        <div class="main-description">
            <?php
                if($result){
                    while($datarow = mysqli_fetch_assoc($result)){
            ?>
            <img src="images/<?php echo $datarow['Image']; ?>" alt="">
            <div class="desc">
                <h3><?php echo $datarow['Name']; ?></h3>
                <div class="dropdown">
                    <img class="dropbtn" src="images/icons/hamburger.jpeg" alt=""/>
                    <div class="dropdown-content">
                        <form action="" id="language">
                            <input type="submit" value="English" name="Language" />
                            <input type="submit" value="Hindi" name="Language" />    
                            <input type="submit" value="Both" name="Language"/>                       
                        </form>
                    </div>
                </div>
                <p><?php echo $datarow['Description']; ?></p>
            </div>
        </div>
            <?php
                    }
                }
                $sql="SELECT p.Name, p.link, p.Description FROM yoga y JOIN yogasd p ON y.Sno = p.scid WHERE p.scid = '{$_GET['id']}' ";
                $result=mysqli_query($con,$sql);
                if($result){
                    if(mysqli_num_rows($result)>0){
                        while($datarow=mysqli_fetch_assoc($result))
                        {
                        ?>
                        <div id="playlist-content">
                            <a href="<?php echo $datarow['link'] ; ?>" target = "blank">
                                <div class="block">
                                    <img src="images/icons/youtube.jpeg" alt="">
                                        <p><?php echo $datarow['Name'] ;?></p>
                                </div></a>
                        </div>
                        <?php
                    }
                    }
                    else{
                        ?>
                    <div id="playlist-content" class="no-content">
                                <div class="block">
                                        <p>No Video Available yet</p>
                                </div>
                    </div>

                    <?php
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