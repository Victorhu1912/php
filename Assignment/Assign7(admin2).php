<html>
<body>
<h1>Admin Mode</h1>
<h2>Update a record</h2>
<a href="Assign7(admin).php">Back</a>
<p></p>

<?php
date_default_timezone_set("Australia/Sydney");
$myfile = fopen("recordlog.txt", "a+");
$fid = "";
$kind = "";
$size = "";
$waittime = "";
$price = "";


$server_name="localhost";
$user_name="root";
$user_password="";
$database_name="collection";
$table_name="food";
$conn=new mysqli($server_name,$user_name,$user_password,$database_name);


if($_SERVER["REQUEST_METHOD"] == "POST"){
 if (isset($_POST["f1"]))
     $fid=$_POST['f1'];
 
 if (isset($_POST["k1"]))
	 $kind=$_POST['k1'];
 
 if (isset($_POST["s1"]))
	 $size=$_POST['s1'];
 
 if (isset($_POST["w1"]))
	 $waittime=$_POST['w1'];
 
 if (isset($_POST["p1"]))
	 $price=$_POST['p1'];	
$server_name="localhost";
$user_name="root";
$user_password="";
$database_name="collection";
$table_name="food";
$conn=new mysqli($server_name,$user_name,$user_password,$database_name);
$sql1 = mysqli_query($conn,"UPDATE food SET Kind = '$kind', Size='$size', WaitTime='$waittime', Price='$price' WHERE FoodID = '$fid'");
$myfile = fopen("recordlog.txt", "a+");
$np='The record of FoodID = '.$fid.' has been updated at '.date("h:i:sa").' on '.date("Y/m/d").'<br>';
$txt=$np;
fwrite($myfile, $txt);
fclose($myfile);
}

function showResult1(){
$server_name="localhost";
$user_name="root";
$user_password="";
$database_name="collection";
$table_name="food";
$conn=new mysqli($server_name,$user_name,$user_password,$database_name);	
$res = mysqli_query($conn,"SELECT * FROM collection.food");
echo "Current Result List：";
echo "<table border=1>";    
echo "<tr><td>FoodID</td><td>Kind</td><td>Size</td><td>WaitTime</td><td>Price</td></tr>";
while($row=mysqli_fetch_array($res)) 
{
 echo "<tr>";
 echo "<td>".$row["FoodID"]." </td>"; 
 echo "<td>".$row["Kind"]." </td>";  
 echo "<td>".$row["Size"]." </td>";   
 echo "<td>".$row["WaitTime"]." </td>";  
 echo "<td>".$row["Price"]." </td>";
 echo "</tr>";
}
echo "</table>";	
}
 ?>
 
<form name="f1" action="Assign7(admin2).php" method="POST" > 
<fieldset>
<p>FoodID:</p>
 <input type="text" name="f1" value="<?php echo $fid ;?>" />
<p>Kind:</p> 
 <input type="text" name="k1" value="<?php echo $kind;?>"/>
<p>Size:</p>
 <input type="text" name="s1" value="<?php echo $size;?>" />
<p>WaitTime:</p>
 <input type="text" name="w1" value="<?php echo $waittime;?>" />
<p>Price:</p>
 <input type="number" name="p1" value="<?php echo $price;?>" /> 
<p>
<input type="submit" name="sub1" value="Update a record!"/>
</p> 
</fieldset> 
 </form>
 
<?php
showResult1();
?>

</body>
 </html> 
