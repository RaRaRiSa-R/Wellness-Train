<?php
require('connection_login.php');
$sql='SELECT  p.topicname, p.links FROM skincare s ,skincare_playlist p WHERE s.sno=p.scid';
$result=mysqli_query($con,$sql);
if($result)
{
    // if(mysqli_num_rows($result)>0)
    while($datarow=mysqli_fetch_assoc($result))
    {
        echo $datarow['topicname'] .  $datarow['links'];
    }
// echo $_GET['id'] ;
}
?>