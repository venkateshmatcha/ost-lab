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

$Id=$_POST["id"];
$Sname = $_POST["sname"];
$Email = $_POST["email"];

$sql="insert into stds(id,sname,email)values ('$Id','$Sname','$Email')";

mysqli_query($conn, $sql);

$sql1="SELECT * FROM stds ORDER BY id";

mysqli_query($conn, $sql1);

echo "Achievement details of ".$Sid." is succesfully inserted in the Database";

if($Sid >= 10)  
{
  $sql2="insert into stds1(sid,sname,email)values ('$Sid','$Sname','$Email')";

  mysqli_query($conn, $sql2);

  $sql3="SELECT * FROM stds1 ORDER BY sid";

  mysqli_query($conn, $sql3);

  echo "Achievement details of ".$Sid." is succesfully inserted in the Another Database";


}
?>
</body>
</html>