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
$Sid = $_POST["sid"];
$QaMarks =$_POST["qamarks"];
$VaMarks =$_POST["vamarks"];
$Reasoning =$_POST["reasoning"];
$Coding=$_POST["codingmarks"];




$sql="insert into phase101(cid,sid,qamarks,vamarks,reasoning,codingmarks) values('$Cid','$Sid','$QaMarks','$VaMarks','$Reasoning','$Coding')";

mysqli_query($conn, $sql);


$sql120 = "select * from phase101 where cid in (select cid from phase11) and sid in (select sid from phase3)";
mysqli_query($conn, $sql120);







  $sql1="SELECT * FROM phase101 ORDER BY sid";

    mysqli_query($conn, $sql1);

echo "Recruiter ".$Cid." is succesfully inserted ".$Sid." Phase1 Marks intothe Database";




if($Cid == 101)
{

if($QaMarks >= 60 && $VaMarks >= 65 && $Reasoning >= 70 && $Coding >= 50)
{

$sql3="insert into phase102(cid,sid,status) values('$Cid','$Sid','Selected')";

mysqli_query($conn, $sql3);

$sql4="SELECT * FROM phase102 ORDER BY sid";

mysqli_query($conn, $sql4);

echo "Recruiter ".$Cid." is succesfully inserted ".$Sid." Phase1 Marks intothe Database";
echo "<br>";



$sql10="insert into phase108(cid,sid) values('$Cid','$Sid')";

mysqli_query($conn, $sql10);

$sql11="SELECT * FROM phase108 ORDER BY sid";

mysqli_query($conn, $sql11);

   
}

else
{

$sql3="insert into phase102(cid,sid,status) values('$Cid','$Sid','Not Selected')";

mysqli_query($conn, $sql3);

$sql4="SELECT * FROM phase102 ORDER BY sid";

mysqli_query($conn, $sql4);

echo "Recruiter ".$Cid." is succesfully inserted ".$Sid." Phase1 Marks intothe Database";



}


}

else if($Cid == 102)

{

 if($QaMarks >= 40 && $VaMarks >= 45 && $Reasoning >= 40 && $Coding >= 40)
{

$sql3="insert into phase102(cid,sid,status) values('$Cid','$Sid','Selected')";

mysqli_query($conn, $sql3);

$sql4="SELECT * FROM phase102 ORDER BY sid";

mysqli_query($conn, $sql4);

echo "Recruiter ".$Cid." is succesfully inserted ".$Sid." Phase1 Marks intothe Database";    

$sql10="insert into phase108(cid,sid) values('$Cid','$Sid')";

mysqli_query($conn, $sql10);

$sql11="SELECT * FROM phase108 ORDER BY sid";

mysqli_query($conn, $sql11); 
}



else

{

$sql3="insert into phase102(cid,sid,status) values('$Cid','$Sid','Not Selected')";

mysqli_query($conn, $sql3);

$sql4="SELECT * FROM phase101 ORDER BY sid";

mysqli_query($conn, $sql4);

echo "Recruiter ".$Cid." is succesfully inserted ".$Sid." Phase1 Marks intothe Database";


}

}

?>
</body>
</html>
