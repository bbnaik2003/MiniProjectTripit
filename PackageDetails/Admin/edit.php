<?php
include_once("config.php");
$id=$_GET['sno'];
$result=mysqli_query($mysqli,"select* from pack order by sno=$id");
while($res=mysqli_fetch_array($result))
{
    $sno=$res['sno'];
    $placename=$res['placename'];
    $city=$res['city'];
    $state=$res['state'];
    $pincode=$res['pincode'];
    $open=$res['open'];
    $price=$res['price'];
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
<a href="addpackage.html">Home</a>
<body>
<div class="login">
<form action="" method="POST">
            <fieldset style="padding: 10px;">

                <legend style="font-size:20px;color:wheat">LOGIN DETAILS</legend>
                <br>
                <b><p style="font-size:20px;color:white">SNo: <input type="number" name="sno" id="sno" placeholder="sno" value="<?php echo $sno;?>"autocomplete="off"></p>
                    <br></b>
                <b> <p style="font-size:20px;color:white">PlaceName: <input type="text" name="placename" id="placename" placeholder="placename" value="<?php echo $placename;?>" autocomplete="off"></p>
                <br></b>
                <b><p style="font-size:20px;color:white">City: <input type="text" name="city" id="city" placeholder="city" value="<?php echo $city;?>"autocomplete="off"></p>
                <b><p style="font-size:20px;color:white">State: <input type="text" name="state" id="state" placeholder="state" value="<?php echo $state;?>"autocomplete="off"></p><br></b>
                
                <b><p style="font-size:20px;color:white">Pincode: <input type="number" name="pincode" id="pincode" placeholder="pincode" value="<?php echo $pincode;?>"autocomplete="off"></p><br></b>
                
                <b><p style="font-size:20px;color:white">Open: <input type="text" name="open" id="open" placeholder="open" value="<?php echo $open;?>"autocomplete="off"></p><br></b>
                
                <b><p style="font-size:20px;color:white">Price: <input type="number" name="price" id="price" placeholder="price" value="<?php echo $price;?>"autocomplete="off"></p><br></b>
                <br>
             <input type="hidden" name="id" value=<?php echo $_GET['sno'];?>>
            </b>
                <input type="submit" name="submit" value="Update" style="border:5px solid red;border-style=outset;padding:10px;background-color:violet;color:white;margin-left:100px">
            </fieldset><br>

            <br>
        </form>
</div>
<?php
 if(isset($_POST['submit'])){
    $sno=$_POST['sno'];
    $placename=$_POST['placename'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $open=$_POST['open'];
    $price=$_POST['price'];
    
  $result=mysqli_query($mysqli,"update pack set sno='$sno',placename='$placename',city='$city',state='$state',pincode='$pincode',open='$open',price='$price' where sno=$id");
  
  
  
  if($result){
      header("location:table1.php");
  }
  else{
      echo "Failed";
  }
}


?>
</body>
</html>
