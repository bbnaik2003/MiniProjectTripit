<?php
include_once('config3.php');

$result=mysqli_query($mysqli,"select* from users order by pin asc")
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
        <th>Pin</th>
        <th>UName</th>
        <th>Email</th>
        <th>PhoneNo</th>
        <th>Password</th>
        <th>Surname</th>
        <th>Gender</th>
     
         
    </tr>
    <a href="AdminLogin.html" style="font-size:20px;border:5px solid brown;padding:10px;color:black;background-color:red;margin-left:30px">&leftarrow; Back</a> 
    <!-- <a href="addpackage.html" style="font-size:20px;border:5px solid brown;padding:10px;color:black;background-color:red;margin-left:80%">Insert &downarrow;</a> -->

    
<?php
 while($res=mysqli_fetch_array($result)){
     echo '<tr>';
     echo '<td>' .$res['pin'].'</td>';
     echo '<td>' .$res['uname'].'</td>';
     echo '<td>' .$res['email'].'</td>';
     echo '<td>' .$res['phoneno'].'</td>';
     echo '<td>' .$res['passwd'].'</td>';
     echo '<td>' .$res['surname'].'</td>';
     echo '<td>' .$res['gender'].'</td>';
     
     
     //echo "<td> <a href=\"edit3.php?pin=$res[pin]\"><input type='submit' value='Edit'></a>";
     //echo "<td> <a href=\"delete3.php?pin=$res[pin]\" onClick=\"return confirm('Are you sure want to delete?')\"><input type='submit' value='Delete'></a></td>";

     echo '</tr>';
    
    }
    

?>
 
 
</table>

</body>
</html>