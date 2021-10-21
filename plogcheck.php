<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tex";

$conn = new mysqli($servername, $username, $password,$dbname);
$uname=$_POST["username"];
$pass=$_POST["password"];
$sql1= "SELECT * FROM psignup WHERE Username='$uname'";

$result1=$conn->query($sql1);

if($result1->num_rows>0)
{
  $row=$result1->fetch_assoc();
  $usern=$row["Username"];
$passn=$row["Password"];

 if((strcmp($uname,$usern)) == (strcmp($pass,$passn)) )
{	echo $uname;
	echo "Logged In";
   header('Location:pinter.html');
}
else
{
        echo "TRY AGAIN";
	header('Location:main.html');
} 
  
}

else
{
        echo "TRY AGAIN";
	header('Location:main.html');
} 
$conn->close();
?>