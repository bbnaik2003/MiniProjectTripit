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
 
  

        <form class="form-group">
            <!--form-->
            <h1 class="text-center">Book Your Ticket</h1>

            <div id="form">
                <!--form-->
                <div id="input5">

                    <h3 class="text-white">Personal Details</h3>
                </div>


                <div id="input6">
                    <!--input6-->
                    <input type="text" id="input-group" placeholder="Full Name">
                    <input type="number" id="input-group" placeholder="Phone Number">
                    <input type="email" id="input-group1" placeholder="Email">
                </div>
                <br><br>

                <h3 class="text-white">Booking Details</h3>

                <div id="input">

                    <input type="text" id="input-group" placeholder="From">
                    <input type="text" id="input-group" placeholder="To">


                </div>


                <div id="input2">

                    <input type="number" id="input-group" placeholder="Adult Age">
                    <input type="number" id="input-group" placeholder="Children(2-11years) Age">
                    <input type="number" id="input-group" placeholder="infant(under 2years) Age">
                </div>
                <br><br>
                <button type="submit" style="height:40px;margin-top:1vh;background-color:orange;border-radius:8px;" name="reg"><a href="./usercard.html" style="text-decoration: none;color:black">Submit Form</a></button>
                <button type="reset" class="btn btn-primary">Clear Form</button>
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
    
  $result=mysqli_query($mysqli,"update bookticket set pno='$pno',fname='$fname',src='$src',dest='$dest',adultage='$adultage',chage='$chage',iage='$iage' where sno=$id");
  
  
  
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