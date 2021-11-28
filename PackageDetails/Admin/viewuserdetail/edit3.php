<?php
include_once("config3.php");
$id=$_GET['pin'];
$result=mysqli_query($mysqli,"select* from users order by pin=$id");
while($res=mysqli_fetch_array($result))
{
    $pin=$res['pin'];
    $uname=$res['uname'];
    $email=$res['email'];
    $phoneno=$res['phoneno'];
    $passwd=$res['passwd'];
    $surname=$res['surname'];
    $gender=$res['gender'];
}

?>

 <!DOCTYPE html>
<html>
<head>
    
    <title> </title>
    <style>
        .login {
    padding: 20px;
    background-color:skyblue;
    border-radius: 20px;
    height: 400px;
    width: 400px;
    
    box-shadow: 10px 10px 10px 5px;
    text-shadow: 2px 2px 2px blue;
    margin-top:30px;
}
    </style>
    
</head>
<a href="AdminLogin.html">Home</a>
<body>
<div class="login">
<form action="" method="POST">
            <fieldset style="padding: 10px;">

                <legend style="font-size:20px;color:wheat">LOGIN DETAILS</legend>
                <br>
                <b><p style="font-size:20px;color:white">SNo: <input type="number" name="pin" id="sno" placeholder="sno" value="<?php echo $sno;?>"autocomplete="off"></p>
                    <br></b>
                <b> <p style="font-size:20px;color:white">PlaceName: <input type="text" name="uname" id="placename" placeholder="placename" value="<?php echo $placename;?>" autocomplete="off"></p>
                <br></b>
                <b><p style="font-size:20px;color:white">City: <input type="text" name="email" id="city" placeholder="city" value="<?php echo $city;?>"autocomplete="off"></p>
                <b><p style="font-size:20px;color:white">State: <input type="text" name="phoneno" id="state" placeholder="state" value="<?php echo $state;?>"autocomplete="off"></p><br></b>
                
                <b><p style="font-size:20px;color:white">Pincode: <input type="number" name="passwd" id="pincode" placeholder="pincode" value="<?php echo $pincode;?>"autocomplete="off"></p><br></b>
                
                <b><p style="font-size:20px;color:white">Open: <input type="text" name="surname" id="open" placeholder="open" value="<?php echo $open;?>"autocomplete="off"></p><br></b>
                
                <b><p style="font-size:20px;color:white">Price: <input type="gender" name="gender" id="price" placeholder="price" value="<?php echo $price;?>"autocomplete="off"></p><br></b>
                <br>
             <input type="hidden" name="id" value=<?php echo $_GET['sno'];?>>
            </b>
                <input type="submit" name="register" value="Update" style="border:5px solid red;border-style=outset;padding:10px;background-color:violet;color:white;margin-left:100px">
            </fieldset><br>

            <br>
        </form>
</div>
<?php
 if(isset($_POST['register'])){
    $pin=$_POST['pin'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $phoneno=$_POST['phoneno'];
    $passwd=$_POST['passwd'];
    $surname=$_POST['surname'];
    $gender=$_POST['gender'];
    
  $result=mysqli_query($mysqli,"update users set pin='$pin',uname='$uname',email='$email',phoneno='$phoneno',passwd='$passwd',surname='$surrname',gender='$gender' where pin=$id");
  
  
  
  if($result){
      header("location:table4.php");
  }
  else{
      echo "Failed";
  }
}


?>
</body>
</html>
