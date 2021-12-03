<?php
include_once('config3.php');

$result=mysqli_query($mysqli,"select* from users order by pname asc")
?>


<!DOCTYPE html>
<html>
<head>
    
    <title> </title>
    <style>
        table{
            border-collapse:collapse;
            background-color:lightgreen;
            width:30%;
            height:50%;
            margin-left:35%;
        }
         table td{
             background-color:wheat;
         }
           
    </style>
    
</head>
 
<body style="background-color:lightpink">
    <h1 style="text-align:center;color:blue"><u>USERS LOGIN DETAILS</u></h1>
   
    <table border="2" width="400">
        <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>PhoneNo</th>
        <th>Gender</th>
        <th>Remove</th>
     
         
    </tr>
    <a href="../AdminLogin.html" style="font-size:20px;border:5px solid brown;padding:10px;color:black;background-color:red;margin-left:30px">&leftarrow; Back</a> 
    <!-- <a href="addpackage.html" style="font-size:20px;border:5px solid brown;padding:10px;color:black;background-color:red;margin-left:80%">Insert &downarrow;</a> -->

    
<?php
 while($res=mysqli_fetch_array($result)){
     echo '<tr>';
     echo '<td>' .$res['pname'].'</td>';
     echo '<td>' .$res['ppass'].'</td>';
     echo '<td>' .$res['email'].'</td>';
     echo '<td>' .$res['phoneno'].'</td>';
     
     echo '<td>' .$res['gender'].'</td>';
     
     
    
     echo "<td> <a href=\"delete5.php?pname=$res[pname]\" onClick=\"return confirm('Are you sure want to delete?')\"><input type='submit' value='Delete'></a></td>";

    
    }
    

?>
 
 
</table>

</body>
</html>