<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tex";

$conn = new mysqli($servername, $username, $password,$dbname);
$uname=$_POST["username"];
$pass=$_POST["password"];
/*if(ctype_alnum($uname)){
    echo "Yes, It's an alphanumeric string/text";
}
else{
    echo "No, It's not an alphanumeric string/text";
}*/

/*if (preg_match('/^[a-z0-9 .\-]+$/i', $uname)) {
    echo "valid";
} 
else{
	
	echo "invalid";}
*/
$sql1= "SELECT * FROM csignup WHERE Username='$uname'";
$result1=$conn->query($sql1);

if($result1->num_rows>0 & $result->num_rows==1)
{
  $row=$result1->fetch_assoc();
  $usern=$row["Username"];
$passn=$row["Password"];
  }
if((strcmp($uname,$usern)) == (strcmp($pass,$passn)) )
{	echo $uname;
	echo "Logged In";
   header('Location:customerselect.html');
}
else
{
        echo "TRY AGAIN";
	header('Location:main.html');
}

$conn->close();
?>