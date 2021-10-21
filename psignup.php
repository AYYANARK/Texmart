<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tex";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	$name=$_POST["name"];
	$loca=$_POST["location"];
        $addr=$_POST["addr"];
	$company=$_POST["company"];
	$pno=$_POST["pno"];
	$mid=$_POST["mid"];
        $uname=$_POST["uname"];
	$pass=$_POST["pass"];
	
	$sql = "INSERT INTO psignup values('$name','$loca','$addr','$company','$pno','$mid','$uname', '$pass')";
	if ($conn->query($sql) === TRUE) {
		
	   // $msg="SIGN INed SUCCESSFULLY";
               
		//echo "<script type='text/javascript'>alert(\"$msg\");</script>";
       // $value=1;
		echo "SIGH INed SUCCESSFULLY";
header('Location: main.html');
    
	} 

	else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
//if($value==1)
{   
}
$conn->close();
?>
