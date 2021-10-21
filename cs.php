<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tex";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$search=$_POST["search"];
$sql="SELECT * from pproddesc where Product='$search' ";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
   echo "<table  border='2'>";
            echo ' <tr>
              	<td>Product</td>
              <td>ProdId</td>
		<td>Quantity</td>
		<td>Colour</td>
		<td>Size</td>
               <td>Material</td>
		<td>Type</td>
		<td>CostPerUnit</td>
		<td>Photo</td>
		</tr>';
    while($row = $result->fetch_assoc()) {
		$img1=$row['Photo'];
	        echo ' <tr>
              	<td>'.$row['Product'].'</td>
               <td>'.$row['ProdId'].'</td>
		<td>'.$row['Quantity'].'</td>
		<td>'.$row['Colour'].'</td>
		<td>'.$row['Size'].'</td>
                <td>'.$row['Material'].'</td>
		<td>'.$row['Type'].'</td>
		<td>'.$row['CostPerUnit'].'</td>
                <td><img height="150" width="80" src="' .$img1. '"/></td>
		</tr>';
}
} 
else {
    echo "0 results";
}
$conn->close();

?>

<html>
<form action="payment.html">
<h3>Enter the Product Id of the Product which you like to choose</h3><input type="text" ><input type="submit" value="PROCEED TO PAYMENT">
</form>
</html>