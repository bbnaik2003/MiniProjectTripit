<?php

include_once('connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if(isset($_POST['submit'])){
    echo $uid=$_POST['uid'];
    echo $uname=$_POST['uname'];
    echo $pass=$_POST['pass'];
    if($mysqli=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName)){
echo "connection created";
    }
    else{
        echo "problem";
    }
    echo "<br>";
   $result=mysqli_query($mysqli,"Insert into login VALUES('$uid','$uname','$pass')");
   if($result){
       echo "Data inserted";
   }
   else{
       echo "Failed";
   }
}




if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
	$adminname = test_input($_POST["adminname"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM adminlogin");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['adminname'] == $adminname) &&
			($user['password'] == $password)) {
				header("Location: adminpage.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
	}
}

?>
