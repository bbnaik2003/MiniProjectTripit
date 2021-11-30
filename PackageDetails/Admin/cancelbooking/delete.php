<?php
include_once('config5.php');
$id=$_GET['pno'];
$result=mysqli_query($mysqli,"Delete from pack where pno=$id");

if($result)
{
    header("Location:table.php");
}
else{
    echo "failed";
}
?>