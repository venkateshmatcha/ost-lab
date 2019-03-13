<html>
<body bgcolor ="yellow" >
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
$Topic1 =$_POST["topic1"];
$Topic2 =$_POST["topic2"];
$Topic3 =$_POST["topic3"];

$sql="insert into gdround(cid,sid,topic1,topic2,topic3) values('$Cid','$Sid','$Topic1','$Topic2','$Topic3')";

mysqli_query($conn, $sql);



  $sql1="SELECT * FROM gdround ORDER BY sid";

    mysqli_query($conn, $sql1);

echo "Recruiter ".$Cid." is succesfully inserted ".$Sid." GroupDicussion  Marks into the Database ";
echo "<br>";
echo "<br>";
echo "<br>";

if($Cid == 101)
{

if($Topic1 >= 7 && $Topic2 >= 7 && $Topic3 >= 7)
{

$sql3="insert into gdphase1(cid,sid,status) values('$Cid','$Sid','Selected')";

mysqli_query($conn, $sql3);

$sql4="SELECT * FROM gdphase1 ORDER BY sid";

mysqli_query($conn, $sql4);
echo "<br>";

echo "Congragulations ".$Sid."  Your Selected And You Are Eligible for Technical Round .... Good Luck"; 
echo "<br>"; 
echo "<br>";

$sql10 = "insert into gdphase2(cid,sid) values('$Cid','$Sid')";
mysqli_query($conn, $sql10);

$sql40="SELECT * FROM gdphase2 ORDER BY sid";

mysqli_query($conn, $sql40);
echo "<br>";

}

else
{

$sql6="insert into gdphase1(cid,sid,status) values('$Cid','$Sid','NotSelected')";

mysqli_query($conn, $sql6);

$sql7="SELECT * FROM gdphase1 ORDER BY sid";

mysqli_query($conn, $sql7);
echo "<br>";

echo "... ".$Sid."  Your are not Selected And You Are Not Eligible for Next Rounds ...."; 
echo "<br>"; 
echo "<br>";




}

}

else if($Cid == 102)

{

 if($Topic1 >= 6 && $Topic2 >= 7 && $Topic3 >= 7)
{

$sql3="insert into gdphase1(cid,sid,status) values('$Cid','$Sid','Selected')";

mysqli_query($conn, $sql3);

$sql4="SELECT * FROM gdphase1 ORDER BY sid";

mysqli_query($conn, $sql4);

echo "Congragulations ".$Sid."  Your Selected And You Are Eligible for Technical Round .... Good Luck"; 

$sql10 = "insert into gdphase2(cid,sid) values('$Cid','$Sid')";
mysqli_query($conn, $sql10);

$sql40="SELECT * FROM gdphase2 ORDER BY sid";

mysqli_query($conn, $sql40);
echo "<br>";
   
}

else
{
$sql6="insert into gdphase1(cid,sid,status) values('$Cid','$Sid','NotSelected')";

mysqli_query($conn, $sql6);

$sql7="SELECT * FROM gdphase1 ORDER BY sid";

mysqli_query($conn, $sql7);
echo "<br>";

echo "... ".$Sid."  Your are not Selected And You Are Not Eligible for Next Rounds ...."; 
echo "<br>"; 
echo "<br>";


}

}


?>
</body>
</html>

