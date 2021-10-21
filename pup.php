<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tex";
$conn = new mysqli($servername, $username, $password, $dbname);
//echo "hello";
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
} 

        
	$product1=$_POST['product'];
	$pid1=$_POST['pid'];
	$quan1=$_POST['quan'];
	$colour1 = $_POST['colour'];	
	$size1=$_POST['size'];
	$mat1=$_POST['mat'];
	$type1=$_POST['type'];
	$cost1 = $_POST['cost'];
	$sql = "UPDATE pproddesc SET Product='$product1',ProdId='$pid1',Quantity='$quan1',Colour='$colour1',Size='$size1',Material='$mat1',Type='$type1',CostPerUnit='$cost1' WHERE ProdId=$pid1";
	if ($conn->query($sql) === TRUE)
	{
 	  echo "UPDATION DONE SUCCESSFULLY!";
	  //header('Location: index1.html');
	}
	else 
	{
	    echo "Error updating record: " . $conn->error;
	}

?>