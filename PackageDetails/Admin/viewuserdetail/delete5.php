<?php
include_once('config3.php');
$id=$_GET['pname'];
$result=mysqli_query($mysqli,"Delete from users where pname=$id");

if($result)
{
    header("Location:table4.php");
}
else{
    echo "failed";
}
?>