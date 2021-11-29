<?php
include_once("config2.php");
$id=$_GET['pno'];
$result=mysqli_query($mysqli,"select* from bookticket order by pno=$id");
while($res=mysqli_fetch_array($result))
{
    $fname=$res['fname'];
    $pno=$res['pno'];
    $email=$res['email'];
    $src=$res['src'];
    $dest=$res['dest'];
    $adultage=$res['adultage'];
    $chage=$res['chage'];
    $iage=$res['iage'];

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
<a href="BookingForm.html">Home</a>
<body>
<div class="login">
 
  

        <form method="POST" class="form-group">
            <!--form-->
            <h1 class="text-center">Book Your Ticket</h1>

            <div id="form">
                <!--form-->
                <div id="input5">

                    <h3 class="text-white">Personal Details</h3>
                </div>


                <div id="input6">
                    <!--input6-->
                    <input type="text" id="input-group" placeholder="Full Name" name="fname">
                    <input type="number" id="input-group" placeholder="Phone Number" name="pno">
                    <input type="email" id="input-group1" placeholder="Email" name="email">
                </div>
                <br><br>

                <h3 class="text-white">Booking Details</h3>

                <div id="input">

                    <input type="text" id="input-group" placeholder="From" name="src">
                    <input type="text" id="input-group" placeholder="To" name="dest">


                </div>


                <div id="input2">

                    <input type="number" id="input-group" placeholder="Adult Age" name="adultage">
                    <input type="number" id="input-group" placeholder="Children(2-11years) Age" name="chage">
                    <input type="number" id="input-group" placeholder="infant(under 2years) Age" name="iage">
                </div>
                <br><br>
                <button type="submit" style="height:40px;margin-top:1vh;background-color:orange;border-radius:8px;" name="submit"><a href="table3.php" style="text-decoration: none;color:black "name="submit">UPDATE</a></button>
                
            </div>
            <!--form-->

        </form>
        <!--form-->
 
</div>
<?php
 if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $pno=$_POST['pno'];
    $email=$_POST['email'];
    $src=$_POST['src'];
    $dest=$_POST['dest'];
    $adultage=$_POST['adultage'];
    $chage=$_POST['chage'];
    $iage=$_POST['iage'];
    
  $result=mysqli_query($mysqli,"update bookticket set pno='$pno',fname='$fname',src='$src',dest='$dest',adultage='$adultage',chage='$chage',iage='$iage' where pno=$id");
  
  
  
  if($result){
      header("location:table3.php");
  }
  else{
      echo "Failed";
  }
}


?>
</body>
</html>