<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tex";
$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
} 
	
	$product=$_POST["product"];
	$pid=$_POST["pid"];
	$quan=$_POST["quan"];
	$colour=$_POST["colour"];
	$size=$_POST["size"];
 	$mat=$_POST["mat"];
	$type=$_POST["type"];
	$cost=$_POST["cost"];
$fileName= $_POST['Filename'];
 $sql="INSERT INTO pproddesc values('$product','$pid','$quan', '$colour', '$size','$mat','$type','$cost','$fileName')";
if ($conn->query($sql) === TRUE) {
		
	    echo "YOUR PRODUCT UPLOADED SUCCESSFULLY";
	} 
   

$conn->close();
?>
