<?php require('connection_login.php');
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
            <div class="filter"></div>
            <?php
            $sql='SELECT * FROM skincare';
$result=mysqli_query($con,$sql);
if($result)
{
    // if(mysqli_num_rows($result)>0)
    while($datarow=mysqli_fetch_assoc($result))
    {

        ?>
        <div class="items">
        <?php
        for($i=0 ; $i < 3 ; $i++)
        {
            ?>
            <a href="skincare_playlist.php?id=<?php echo $datarow['sno']?>">
            <div class="box">
                    <div class="image-wrap">
                        <img class="img" src="images/<?php echo $datarow['image']?>" alt="" />
                    </div>
                    <div class="health-data-content">
                        <h4><?php echo $datarow['topicname']?></h4>
                    </div>
                </div>
        </a>
                <?php
                $datarow=mysqli_fetch_assoc($result);
        }?>
        </div>
        <?php
    }
}?>
        </div>
    </section>
    <?php 
        include('footer.php');
    ?>
</body>

</html>