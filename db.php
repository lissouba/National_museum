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



$name1 = $_POST["name"];
  $email1 = $_POST["email"];
  $comment1 = $_POST["comment"];
  $gender1 = $_POST["gender"];


$sql="insert into comments (name,email,comment,gender) values('$name1','$email1','$comment1','$gender1')";


if($conn->query($sql)===TRUE)
{
  echo "THANK YOU FOR YOUR COMMENT!"."BACK";

}
else{

  echo "error:".$sql."<br>".$conn->error;





}


?>
