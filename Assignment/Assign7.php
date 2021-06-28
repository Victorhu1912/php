<html>
<head>
<style>
    .red    {
              color: red;
              border: 4px red;
            }

    .blue  {
              color: blue;
              border: 4px blue;
             }
</style>
<script>
var tc = 0;
var cc = 0;
var classes, ID;
function init( ) {
    classes = ["red", "blue"];
}
function changeColors( ) {
    cc = (cc == 3) ? 0 : ++cc;
    document.getElementById("h").className = classes[cc];
    if (tc++ < 200) {
        ID = setTimeout("changeColors( )", 300);
    } else {
        clearTimeout(ID);
    }
}
</script>
</head>
<body onload="init();changeColors( );">
<a href="Assign7(admin).php">Admin Mode</a>
<p></p>
<h1><center><span class="red" id="h">Find Your Favourite Food!</span></center></h1>
<center><img src="/eat2.jpg" /></center>
</body>

<center><form name="f1" action="Assign7.php" method="POST" >
<p style="font-weight:bold;font-style:italic;color:blue;">Food kind</p>
<input type="checkbox" name="c1" value="beef hamburger"<?php if($_SERVER["REQUEST_METHOD"] == "POST"){ 
if (isset($_POST["c1"])=='beef hamburger') 
	echo 'checked'; 
}?>>beef hamburger<?php if($_SERVER["REQUEST_METHOD"] == "POST"){if (isset($_POST["c1"])=='beef hamburger')
showCount();}	
?><br>
<input type="checkbox" name="c2" value="chicken hamburger"<?php if($_SERVER["REQUEST_METHOD"] == "POST"){ 
if (isset($_POST["c2"])=='chicken hamburger') 
	echo 'checked'; 
}?>>chicken hamburger<?php if($_SERVER["REQUEST_METHOD"] == "POST"){if (isset($_POST["c2"])=='chicken hamburger')
showCount();}	
?><br>
<input type="checkbox" name="c3" value="beef fried rice"<?php if($_SERVER["REQUEST_METHOD"] == "POST"){ 
if (isset($_POST["c3"])=='beef fried rice') 
	echo 'checked'; 
}?>>beef fried rice<?php if($_SERVER["REQUEST_METHOD"] == "POST"){if (isset($_POST["c3"])=='beef fried rice')
showCount();}	
?><br>
<input type="checkbox" name="c4" value="chicken fried rice"<?php if($_SERVER["REQUEST_METHOD"] == "POST"){ 
if (isset($_POST["c4"])=='chicken fried rice') 
	echo 'checked'; 
}?>>chicken fried rice<?php if($_SERVER["REQUEST_METHOD"] == "POST"){if (isset($_POST["c4"])=='chicken fried rice') 
showCount();}	
?><br>
<input type="checkbox" name="c5" value="beef noodles"<?php if($_SERVER["REQUEST_METHOD"] == "POST"){ 
if (isset($_POST["c5"])=='beef noodles') 
	echo 'checked'; 
}?>>beef noodles<?php if($_SERVER["REQUEST_METHOD"] == "POST"){if (isset($_POST["c5"])=='beef noodles')
showCount();}	
?><br><br>
<p style="font-weight:bold;font-style:italic;color:blue;">Size</p>
<input type="checkbox" name="c6" value="small"<?php if($_SERVER["REQUEST_METHOD"] == "POST"){ 
if (isset($_POST["c6"])=='small') 
	echo 'checked'; 
}?>>small<?php if($_SERVER["REQUEST_METHOD"] == "POST"){if (isset($_POST["c6"])=='small')
showCount();}	
?><br>
<input type="checkbox" name="c7" value="medium"<?php if($_SERVER["REQUEST_METHOD"] == "POST"){ 
if (isset($_POST["c7"])=='medium') 
	echo 'checked'; 
}?>>medium<?php if($_SERVER["REQUEST_METHOD"] == "POST"){if (isset($_POST["c7"])=='medium')
showCount();}	
?><br>
<input type="checkbox" name="c8" value="large"<?php if($_SERVER["REQUEST_METHOD"] == "POST"){ 
if (isset($_POST["c8"])=='large') 
	echo 'checked'; 
}?>>large<?php if($_SERVER["REQUEST_METHOD"] == "POST"){if (isset($_POST["c8"])=='large')
showCount();}	
?><br><br>
<p style="font-weight:bold;font-style:italic;color:blue;">Wait time</p>
<input type="checkbox" name="c9" value="10 mins"<?php if($_SERVER["REQUEST_METHOD"] == "POST"){ 
if (isset($_POST["c9"])=='10 mins') 
	echo 'checked'; 
}?>>10 mins<?php if($_SERVER["REQUEST_METHOD"] == "POST"){if (isset($_POST["c9"])=='10 mins')
showCount();}	
?><br>
<input type="checkbox" name="c10" value="12 mins"<?php if($_SERVER["REQUEST_METHOD"] == "POST"){ 
if (isset($_POST["c10"])=='12 mins') 
	echo 'checked'; 
}?>>12 mins<?php if($_SERVER["REQUEST_METHOD"] == "POST"){if (isset($_POST["c10"])=='12 mins')
showCount();}	
?><br>
<input type="checkbox" name="c11" value="14 mins"<?php if($_SERVER["REQUEST_METHOD"] == "POST"){ 
if (isset($_POST["c11"])=='14 mins') 
	echo 'checked'; 
}?>>14 mins<?php if($_SERVER["REQUEST_METHOD"] == "POST"){if (isset($_POST["c11"])=='14 mins') 
showCount();}	
?><br>
<input type="checkbox" name="c12" value="16 mins"<?php if($_SERVER["REQUEST_METHOD"] == "POST"){ 
if (isset($_POST["c12"])=='16 mins') 
	echo 'checked'; 
}?>>16 mins<?php if($_SERVER["REQUEST_METHOD"] == "POST"){if (isset($_POST["c12"])=='16 mins')
showCount();}	
?><br><br>
<p style="font-weight:bold;font-style:italic;color:blue;">Price(Dollars)</p>
<input type="checkbox" name="c13" value="5"<?php if($_SERVER["REQUEST_METHOD"] == "POST"){ 
if (isset($_POST["c13"])=='5') 
	echo 'checked'; 
}?>>5<?php if($_SERVER["REQUEST_METHOD"] == "POST"){if (isset($_POST["c13"])=='5')
	showCount();}	
?><br>
<input type="checkbox" name="c14" value="15"<?php if($_SERVER["REQUEST_METHOD"] == "POST"){ 
if (isset($_POST["c14"])=='15') 
	echo 'checked'; 
}?>>15<?php if($_SERVER["REQUEST_METHOD"] == "POST"){if (isset($_POST["c14"])=='15')
	showCount();}	
?><br>
<input type="checkbox" name="c15" value="35"<?php if($_SERVER["REQUEST_METHOD"] == "POST"){ 
if (isset($_POST["c15"])=='35') 
	echo 'checked'; 
}?>>35<?php if($_SERVER["REQUEST_METHOD"] == "POST"){if (isset($_POST["c15"])=='35')
showCount();}	
?><br><br>
<input type="submit" value="Find your food!">
</form></center>
<center><form name="form2" action="Assign7(2).php" method="POST" >
<input type = "submit" value="Find your food without requirements!"/>
</form></center>

<?php
$fbf=$fch=$fbfr=$fcfr=$fbn=$ssmall=$smedium=$slarge=$wm10=$wm12=$wm14=$wm16=$price5=$price15=$price35='';

function showCount(){
	$fbf=$fch=$fbfr=$fcfr=$fbn=$ssmall=$smedium=$slarge=$wm10=$wm12=$wm14=$wm16=$price5=$price15=$price35='';
	$kind=$size=$waittime=$price='';
if (isset($_POST["c1"]))
     $fbf=$_POST['c1'];
 
 if (isset($_POST["c2"]))
	 $fch=$_POST['c2'];
 
 if (isset($_POST["c3"]))
	 $fbfr=$_POST['c3'];
 
 if (isset($_POST["c4"]))
	 $fcfr=$_POST['c4'];
 
 if (isset($_POST["c5"]))
	 $fbn=$_POST['c5'];
 
 if (isset($_POST["c6"]))
	 $ssmall=$_POST['c6'];
 
 if (isset($_POST["c7"]))
	 $smedium=$_POST['c7'];
 
 if (isset($_POST["c8"]))
	 $slarge=$_POST['c8'];
 
 if (isset($_POST["c9"]))
	 $wm10=$_POST['c9'];
 
 if (isset($_POST["c10"]))
	 $wm12=$_POST['c10'];
 
 if (isset($_POST["c11"]))
	 $wm14=$_POST['c11'];
 
 if (isset($_POST["c12"]))
	 $wm16=$_POST['c12'];
 
 if (isset($_POST["c13"]))
	 $price5=$_POST['c13'];
 
 if (isset($_POST["c14"]))
	 $price15=$_POST['c14'];
 
 if (isset($_POST["c15"]))
	 $price35=$_POST['c15'];
	$server_name="localhost";
    $user_name="root";
    $user_password="";
    $database_name="collection";
    $table_name="food";
    $conn=new mysqli($server_name,$user_name,$user_password,$database_name);
	
    if ($fbf=='beef hamburger') 
$kind=$fbf;

else if ($fch=='chicken hamburger')
$kind=$fch;

else if ($fbfr=='beef fried rice')
$kind=$fbfr;

else if ($fcfr=='chicken fried rice')
$kind=$fcfr;

else if ($fbn=='beef noodles')
$kind=$fbn;

if ($ssmall=='small') 
$size=$ssmall;

else if ($smedium=='medium')
$size=$smedium;

else if ($slarge=='large')
$size=$slarge;

if ($wm10=='10 mins')
$waittime=$wm10;

else if ($wm12=='12 mins')
$waittime=$wm12;

else if ($wm14=='14 mins')
$waittime=$wm14;

else if ($wm16=='16 mins')
$waittime=$wm16;

if ($price5=='5')
$price=$price5;

else if ($price15=='15')
$price=$price15;

else if ($price35=='35')
$price=$price35;
	
	
	 if ($kind ==! null && $size ==! null && $waittime ==! null && $price ==! null){
$res = mysqli_query($conn,"SELECT COUNT(*) FROM food WHERE Kind = '$kind' and Size = '$size' and WaitTime = '$waittime' and Price = '$price'");}

else if ($kind == null && $size == null && $waittime == null){
$res = mysqli_query($conn,"SELECT COUNT(*) FROM food WHERE Price = '$price'");

}

else if ($kind == null && $size == null && $price == null){
$res = mysqli_query($conn,"SELECT COUNT(*) FROM food WHERE WaitTime = '$waittime'");}

else if ($kind == null && $waittime == null && $price == null){
$res = mysqli_query($conn,"SELECT COUNT(*) FROM food WHERE Size = '$size'");}

else if ($size == null && $waittime == null && $price == null){
$res = mysqli_query($conn,"SELECT COUNT(*) FROM food WHERE Kind = '$kind'");}

else if ($kind == null && $size == null){
$res = mysqli_query($conn,"SELECT COUNT(*) FROM food WHERE WaitTime = '$waittime' and Price = '$price'");}

else if ($kind == null && $waittime == null){
$res = mysqli_query($conn,"SELECT COUNT(*) FROM food WHERE Size = '$size' 
and Price = '$price'");}

else if ($kind == null && $price == null){
$res = mysqli_query($conn,"SELECT COUNT(*) FROM food WHERE Size = '$size' 
and WaitTime = '$waittime'");}

else if ($size == null && $waittime == null){
$res = mysqli_query($conn,"SELECT COUNT(*) FROM food WHERE Kind = '$kind' 
and Price = '$price'");}

else if ($size == null && $price == null){
$res = mysqli_query($conn,"SELECT COUNT(*) FROM food WHERE Kind = '$kind' 
and WaitTime = '$waittime'");}

else if ($waittime == null && $price == null){
$res = mysqli_query($conn,"SELECT COUNT(*) FROM food WHERE Kind = '$kind' and Size = '$size'");}

else if ($kind == null){
$res = mysqli_query($conn,"SELECT COUNT(*) FROM food WHERE Size = '$size' 
and WaitTime = '$waittime' and Price = '$price'");}

else if ($size == null){
$res = mysqli_query($conn,"SELECT COUNT(*) FROM food WHERE Kind = '$kind' 
and WaitTime = '$waittime' and Price = '$price'");}

else if ($waittime == null){
$res = mysqli_query($conn,"SELECT COUNT(*) FROM food WHERE Kind = '$kind' and Size = '$size' 
and Price = '$price'");	}

else if ($price == null){
$res = mysqli_query($conn,"SELECT COUNT(*) FROM food WHERE Kind = '$kind' and Size = '$size' 
and WaitTime = '$waittime'");}

$row=mysqli_fetch_array($res);
echo "(".$row[0].")";	

}

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
 echo "</tr>";
}
echo "</table>";	
}

function showResult3(){
	$fbf=$fch=$fbfr=$fcfr=$fbn=$ssmall=$smedium=$slarge=$wm10=$wm12=$wm14=$wm16=$price5=$price15=$price35='';
	$kind=$size=$waittime=$price='';
if (isset($_POST["c1"]))
     $fbf=$_POST['c1'];
 
 if (isset($_POST["c2"]))
	 $fch=$_POST['c2'];
 
 if (isset($_POST["c3"]))
	 $fbfr=$_POST['c3'];
 
 if (isset($_POST["c4"]))
	 $fcfr=$_POST['c4'];
 
 if (isset($_POST["c5"]))
	 $fbn=$_POST['c5'];
 
 if (isset($_POST["c6"]))
	 $ssmall=$_POST['c6'];
 
 if (isset($_POST["c7"]))
	 $smedium=$_POST['c7'];
 
 if (isset($_POST["c8"]))
	 $slarge=$_POST['c8'];
 
 if (isset($_POST["c9"]))
	 $wm10=$_POST['c9'];
 
 if (isset($_POST["c10"]))
	 $wm12=$_POST['c10'];
 
 if (isset($_POST["c11"]))
	 $wm14=$_POST['c11'];
 
 if (isset($_POST["c12"]))
	 $wm16=$_POST['c12'];
 
 if (isset($_POST["c13"]))
	 $price5=$_POST['c13'];
 
 if (isset($_POST["c14"]))
	 $price15=$_POST['c14'];
 
 if (isset($_POST["c15"]))
	 $price35=$_POST['c15'];
$server_name="localhost";
$user_name="root";
$user_password="";
$database_name="collection";
$table_name="food";
$conn=new mysqli($server_name,$user_name,$user_password,$database_name);
if ($fbf=='beef hamburger') 
$kind=$fbf;

else if ($fch=='chicken hamburger')
$kind=$fch;

else if ($fbfr=='beef fried rice')
$kind=$fbfr;

else if ($fcfr=='chicken fried rice')
$kind=$fcfr;

else if ($fbn=='beef noodles')
$kind=$fbn;

if ($ssmall=='small') 
$size=$ssmall;

else if ($smedium=='medium')
$size=$smedium;

else if ($slarge=='large')
$size=$slarge;

if ($wm10=='10 mins')
$waittime=$wm10;

else if ($wm12=='12 mins')
$waittime=$wm12;

else if ($wm14=='14 mins')
$waittime=$wm14;

else if ($wm16=='16 mins')
$waittime=$wm16;

if ($price5=='5')
$price=$price5;

else if ($price15=='15')
$price=$price15;

else if ($price35=='35')
$price=$price35;


 if ($kind ==! null && $size ==! null && $waittime ==! null && $price ==! null){
$res = mysqli_query($conn,"SELECT * FROM food WHERE Kind = '$kind' and Size = '$size' 
and WaitTime = '$waittime' and Price = '$price'");}

else if ($kind == null && $size == null && $waittime == null){
$res = mysqli_query($conn,"SELECT * FROM food WHERE Price = '$price'");}

else if ($kind == null && $size == null && $price == null){
$res = mysqli_query($conn,"SELECT * FROM food WHERE WaitTime = '$waittime'");}

else if ($kind == null && $waittime == null && $price == null){
$res = mysqli_query($conn,"SELECT * FROM food WHERE Size = '$size'");}

else if ($size == null && $waittime == null && $price == null){
$res = mysqli_query($conn,"SELECT * FROM food WHERE Kind = '$kind'");}

else if ($kind == null && $size == null){
$res = mysqli_query($conn,"SELECT * FROM food WHERE WaitTime = '$waittime' and Price = '$price'");}

else if ($kind == null && $waittime == null){
$res = mysqli_query($conn,"SELECT * FROM food WHERE Size = '$size' 
and Price = '$price'");}

else if ($kind == null && $price == null){
$res = mysqli_query($conn,"SELECT * FROM food WHERE Size = '$size' 
and WaitTime = '$waittime'");}

else if ($size == null && $waittime == null){
$res = mysqli_query($conn,"SELECT * FROM food WHERE Kind = '$kind' 
and Price = '$price'");}

else if ($size == null && $price == null){
$res = mysqli_query($conn,"SELECT * FROM food WHERE Kind = '$kind' 
and WaitTime = '$waittime'");}

else if ($waittime == null && $price == null){
$res = mysqli_query($conn,"SELECT * FROM food WHERE Kind = '$kind' and Size = '$size'");}

else if ($kind == null){
$res = mysqli_query($conn,"SELECT * FROM food WHERE Size = '$size' 
and WaitTime = '$waittime' and Price = '$price'");}

else if ($size == null){
$res = mysqli_query($conn,"SELECT * FROM food WHERE Kind = '$kind' 
and WaitTime = '$waittime' and Price = '$price'");}

else if ($waittime == null){
$res = mysqli_query($conn,"SELECT * FROM food WHERE Kind = '$kind' and Size = '$size' 
and Price = '$price'");	}

else if ($price == null){
$res = mysqli_query($conn,"SELECT * FROM food WHERE Kind = '$kind' and Size = '$size' 
and WaitTime = '$waittime'");}
	
echo "<center>Search Result List：</center>";
echo "<center><table border=1>";    
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
echo "</table></center>";
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
 if (isset($_POST["c1"]))
     $fbf=$_POST['c1'];
 
 if (isset($_POST["c2"]))
	 $fch=$_POST['c2'];
 
 if (isset($_POST["c3"]))
	 $fbfr=$_POST['c3'];
 
 if (isset($_POST["c4"]))
	 $fcfr=$_POST['c4'];
 
 if (isset($_POST["c5"]))
	 $fbn=$_POST['c5'];
 
 if (isset($_POST["c6"]))
	 $ssmall=$_POST['c6'];
 
 if (isset($_POST["c7"]))
	 $smedium=$_POST['c7'];
 
 if (isset($_POST["c8"]))
	 $slarge=$_POST['c8'];
 
 if (isset($_POST["c9"]))
	 $wm10=$_POST['c9'];
 
 if (isset($_POST["c10"]))
	 $wm12=$_POST['c10'];
 
 if (isset($_POST["c11"]))
	 $wm14=$_POST['c11'];
 
 if (isset($_POST["c12"]))
	 $wm16=$_POST['c12'];
 
 if (isset($_POST["c13"]))
	 $price5=$_POST['c13'];
 
 if (isset($_POST["c14"]))
	 $price15=$_POST['c14'];
 
 if (isset($_POST["c15"]))
	 $price35=$_POST['c15'];
 
 showResult3();
 
}
?>

</html>
