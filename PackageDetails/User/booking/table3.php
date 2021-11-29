<?php
include_once('config2.php');

$result=mysqli_query($mysqli,"select* from bookticket order by fname asc")
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
    <h1 style="text-align:center;color:blue"><u>USERS BOOKING DETAILS</u></h1>
   
    <table border="2" width="400">
        <tr>
        <th>Fullname</th>
        <th>Phone Number</th>
        <th>Email-ID</th>
        <th>Source</th>
        <th>Destination</th>
        <th>Adult Age</th>
        <th>Children Age</th>
        <th>Infant Age</th>
        <th>Update</th>
     
         
    </tr>
    <a href="BookingForm.html" style="font-size:20px;border:5px solid brown;padding:10px;color:black;background-color:red;margin-left:30px">&leftarrow; Back</a> 
    <a href="usercard.html" style="font-size:20px;text-decoration:none;border:5px solid brown;padding:10px;color:black;background-color:red;margin-left:80%"> PAY NOW &rightarrow; </a> 
    

    
<?php
 while($res=mysqli_fetch_array($result)){
     echo '<tr>';
     echo '<td>' .$res['fname'].'</td>';
     echo '<td>' .$res['pno'].'</td>';
     echo '<td>' .$res['email'].'</td>';
     echo '<td>' .$res['src'].'</td>';
     echo '<td>' .$res['dest'].'</td>';
     echo '<td>' .$res['adultage'].'</td>';
     echo '<td>' .$res['chage'].'</td>';
     echo '<td>' .$res['iage'].'</td>';
     
     
     echo "<td> <a href=\"edit2.php?pno=$res[pno]\"><input type='submit' value='Edit'></a>";
     echo "<td> <a href=\"delete2.php?pno=$res[pno]\" onClick=\"return confirm('Are you sure want to delete?')\"><input type='submit' value='Delete'></a></td>";

     echo '</tr>';
    
    }
    

?>
 
 
</table>

 

</body>
</html>