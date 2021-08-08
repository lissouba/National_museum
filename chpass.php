<?php

$server="localhost";
$username="root";
$password="";
$db="db_museum";

$conn=new mysqli($server,$username,$password,$db);

if($conn->connect_error)
{

die("connection failed !".connect_error);
}

$a = $_POST["pass1"];
$b = $_POST['newpa'];

$check=0;
$test=0;
$sql = "SELECT password,id FROM users WHERE password = '$a'";
// $sql1 = "UPDATE  user_tbl SET user_pass = '$b'";
$result = mysqli_query($dbCon, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
$pwd=$row["password"];
$id=$row["id"];
if($a===$pwd){
$check=1;
}
}}
if ($check===1) {
	$sql1 = "UPDATE  users SET password = '$b' WHERE id = '$id'";
$result1 = mysqli_query($dbCon, $sql1);
echo "password is changed";
	}
	else{
echo "password is not changed".mysqli_error($dbCon);
	}
?>