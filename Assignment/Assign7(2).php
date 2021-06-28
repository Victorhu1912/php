<html>
<body>
<?php
function showResult1(){
$server_name="localhost";
$user_name="root";
$user_password="";
$database_name="collection";
$table_name="food";
$conn=new mysqli($server_name,$user_name,$user_password,$database_name);	
$res = mysqli_query($conn,"SELECT * FROM collection.food");
echo "Result List：";
echo "<table border=1>";    
echo "<tr><td>Kind</td><td>Size</td><td>WaitTime</td><td>Price</td></tr>";
while($row=mysqli_fetch_array($res)) 
{
 echo "<tr>";
 echo "<td>".$row["Kind"]." </td>";  
 echo "<td>".$row["Size"]." </td>";   
 echo "<td>".$row["WaitTime"]." </td>";  
 echo "<td>".$row["Price"]." </td>";
 echo "<td><button>Contact Now!</button></td>"; 
 echo "</tr>";
}
echo "</table>";	
}
showResult1();
?>
<p></p>
<a href="Assign7.php">Back</a>
</body>
</html>
