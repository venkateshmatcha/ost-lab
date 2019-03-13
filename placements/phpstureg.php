<html>
<body>

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

$Sid=$_POST["sid"];
$Sname=$_POST["sname"];
$Phone=$_POST["phone"];
$Birthday=$_POST["bday"];
$Mail=$_POST["mail"];
$Password=$_POST["password"];
$Graduate=$_POST["passing"];
$Graduper=$_POST["gradcgpa"];
$Inter=$_POST["interper"];
$Cgpa=$_POST["cgpa"];



$sql="insert into students(sid,sname,phone,bday,mail,password,passing,gradcgpa,interper,cgpa) values ('$Sid','$Sname','$Phone','$Birthday','$Mail','$Password','$Graduate','$Graduper','$Inter','$Cgpa')";

mysqli_query($conn, $sql);


$sql1="SELECT * FROM students where sid=$Sid  ORDER BY sid";
mysqli_query($conn, $sql1);

echo "Student details of ".$Sid." is succesfully inserted into the STUDENT Database";
echo "<br>";

if($Cgpa >= 70 && $Inter >= 70 && $Graduper >= 70 )
{
 $sql2="insert into phase1(sid,sname,phone,bday,mail,password,passing,gradcgpa,interper,cgpa,status) values  ('$Sid','$Sname','$Phone','$Birthday','$Mail','$Password','$Graduate','$Graduper','$Inter','$Cgpa','Selected')";

 mysqli_query($conn, $sql2);


 $sql3="SELECT * FROM phase1 ORDER BY sid";

 mysqli_query($conn, $sql3);

 echo "      Student details of ".$Sid." is succesfully inserted into the Phase1 Database     " ; 
 echo "<br>";
 
 echo  "               Candidate Is Eligible for Furture Rounds     ";
 


$sql5="insert into phase3(sid,sname) values ('$Sid','$Sname')";
mysqli_query($conn, $sql5);

}

else 
{
 $sql2="insert into phase1(sid,sname,phone,bday,mail,password,passing,gradcgpa,interper,cgpa,status) values  ('$Sid','$Sname','$Phone','$Birthday','$Mail','$Password','$Graduate','$Graduper','$Inter','$Cgpa','Not Selected')";

 mysqli_query($conn, $sql2);


 $sql3="SELECT * FROM phase1 ORDER BY sid";
 mysqli_query($conn, $sql3);

 echo "Student details of ".$Sid." is succesfully inserted into the  Phase1 Database And Candidate Is Not Eligible   for Furture Rounds";

}


	

?>
</body>
</html>