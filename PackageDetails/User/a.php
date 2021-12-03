<?php
if($_POST)
{
    $host='localhost';
    $user='root';
    $pass='';
    $db='person';
    $pname=$_POST['pname'];
    $ppass=$_POST['ppass'];
    $conn=mysqli_connect($host,$user,$pass,$db);
    $query="select * from persond where pname='$pname' and ppass='$ppass'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['auth']='true';
        header('Location:userloginhomepage.html');
    }
        else{
            echo 'wrong username or password';
        }
    }
