<?php
require('connection_login.php');
$sql="SELECT  p.Name, p.link FROM yoga y JOIN yogasd p ON y.SNo = p.scid WHERE p.scid = '{$_GET['id']}' ";
$result=mysqli_query($con,$sql);
if($result)
{
    // if(mysqli_num_rows($result)>0)
    while($datarow=mysqli_fetch_assoc($result))
    {
        echo $datarow['Name'] .  $datarow['link'] . '<br>';

        //$datarow=mysqli_fetch_assoc($result);
    }
// echo $_GET['id'] ;
}
?>