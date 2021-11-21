<?php
$connect = mysqli_connect("localhost","root","","registration");
if(isset($_POST['register'])){
    
    $pin = $_POST['pin'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $pass = $_POST['pass'];
    $sname = $_POST['sname'];
    $gender = $_POST['gender'];
    // $register = $_POST['register'];

    $query = "INSERT INTO users(pin,uname,email,phoneno,passwd,surname,gender) VALUES('$pin','$uname','$email','$number','$pass','$sname','$gender')";

    $result = mysqli_query($connect,$query);

    if($result){
        echo "registered";

    }else{
        echo "not registered";
    }

}
?>