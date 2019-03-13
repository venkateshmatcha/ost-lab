<html>
<body bgcolor ="lightblue" >
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
$Sid = $_POST["sid"];
$Skills =$_POST["skills"];
$Core =$_POST["core"];
$Others =$_POST["othersubjects"];


$sql="insert into gdtech(cid,sid,skills,core,othersubjects) values('$Cid','$Sid','$Skills','$Core','$Others')";

mysqli_query($conn, $sql);



  $sql1="SELECT * FROM gdtech ORDER BY sid";

    mysqli_query($conn, $sql1);

echo "Recruiter ".$Cid." is succesfully inserted ".$Sid." Technical Round  Marks into the Database ";
echo "<br>";
echo "<br>";
echo "<br>";

if($Cid == 101)
{

if($Skills >= 7 && $Core >= 7 && $Others >= 7)
{

$sql3="insert into tech1(cid,sid,status) values('$Cid','$Sid','Selected')";

mysqli_query($conn, $sql3);

$sql4="SELECT * FROM tech1 ORDER BY sid";

mysqli_query($conn, $sql4);
echo "<br>";

echo "Congragulations ".$Sid."  Your Selected In Technical Round And You Are  Eligible for Non Technical Round .... Good Luck"; 
echo "<br>"; 
echo "<br>";


$sql30="insert into techphase1(cid,sid) values('$Cid','$Sid')";

mysqli_query($conn, $sql30);

$sql40="SELECT * FROM tech1 ORDER BY sid";

mysqli_query($conn, $sql40);
echo "<br>";

}

else
{
echo "You are not selected in Technical Round... ";
}

}

else if($Cid == 102)

{

 if($Skills >= 5  && $Core >= 5 && $Others >= 5)
{

$sql3="insert into tech1(cid,sid,status) values('$Cid','$Sid','selected')";

mysqli_query($conn, $sql3);

$sql4="SELECT * FROM tech1 ORDER BY sid";

mysqli_query($conn, $sql4);
echo "Congragulations ".$Sid."  Your Selected In Technical Round And You Are  Eligible for Non Technical Round .... Good Luck"; 
echo "<br>"; 
echo "<br>";



$sql30="insert into techphase1(cid,sid) values('$Cid','$Sid')";

mysqli_query($conn, $sql30);

$sql40="SELECT * FROM tech1 ORDER BY sid";

mysqli_query($conn, $sql40);
echo "<br>";
}

else
{
echo "You are not selected in Technical Round... ";
}

}


?>
</body>
</html>


