<html>
<body bgcolor ="47FF33" >
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placements";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$Cid = $_POST["cid"];
$CompanyName=$_POST["companyname"];
$Email = $_POST["email"];
$Password = $_POST["password"];
$URL = $_POST["url"];

$sql="insert into phase11(cid,companyname,email,password,url) values('$Cid','$CompanyName','$Email','$Password','$URL')";

mysqli_query($conn, $sql);

$sql1="SELECT * FROM stds ORDER BY cid";

mysqli_query($conn, $sql1);

echo "Company details of ".$Cid." is succesfully inserted into the Database";


?>
</body>
</html>
