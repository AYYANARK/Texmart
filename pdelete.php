<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tex";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$pid=$_POST['pid'];
$sql = "DELETE FROM pproddesc WHERE ProdId='$pid'";
if ($conn->query($sql) === TRUE) {
    echo "DELETION DONE SUCCESSFULLY";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
