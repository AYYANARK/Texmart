<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tex";

$conn = new mysqli($servername, $username, $password, $dbname);



$id = $_POST['pid'];
echo $id;
$sql = "SELECT * from pproddesc WHERE ProdId='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0 )
{
        $row = $result->fetch_assoc();
        $product= $row["Product"];
        $pid= $row["ProdId"];
        $quan=  $row["Quantity"];
        $col = $row["Colour"];
 $size= $row["Size"];
        $mat= $row["Material"];
        $type=  $row["Type"];
        $cpu = $row["CostPerUnit"];
	
}
?>


<html>
<head>	
	<title>P_UP_Edit Data</title>
</head>

<body>
	<p>EDIT THE VALUES:</p>	<br>
	<form name="form9" method="post" action="pup.php">
		<table width="25%" border="0">
                 
			
			
<tr> 
			&nbsp;<label>PRODUCT</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
                  
             <select name="product" value="<?php echo "$product";?>">
               <option >Dhoti</option>
               <option >Coat</option>
               <option >Pant</option>
               <option >Shirt</option>
		<option >Saree</option>
               <option >Salwar</option>
               <option >Leggings</option>
               <option >Patiala</option>
             </select>
</tr>

<tr> 
				<td>PROD.ID</td>
				<td><input type="text" name="pid" value="<?php echo "$pid";?>"></td>
	
			</tr>
			<tr> 
				<td>QUANTITY</td>
				<td><input type="text" name="quan" value="<?php echo "$quan";?>"></td>
	
			</tr>
			<tr> 
				<td>COLOUR</td>
				<td><input type="text" name="colour" value="<?php echo "$col";?>"></td>
			</tr>
			<tr> 
				<td>SIZE</td>
				<td><input type="text" name="size" value="<?php echo "$size";?>"></td>
			</tr>
<tr> 
				<td>MATERIAL</td>
				<td><input type="text" name="mat" value="<?php echo "$mat";?>"></td>
			</tr>
<tr> 
				<td>TYPE</td>
				<td><input type="text" name="type" value="<?php echo "$type";?>"></td>
			</tr>
<tr> 
				<td>COST</td>
				<td><input type="text" name="cost" value="<?php echo "$cpu";?>"></td>
			</tr>
			
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="UPDATE"></td>
			</tr>
		</table>
	</form>
</body>
</html>
