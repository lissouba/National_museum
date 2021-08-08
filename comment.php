<?php include 'menu.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>WE VALUE YOUR FEEDBACK</title>
  
    
    <style type="text/css">
  </style></head>
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
$name = $_POST["name"];
  $ema = $_POST["email"];
  $comment = $_POST["comment"];

//$sql="insert into comments values(null,'$name1','$email1','$comment1','$reply')";
$sql=mysqli_query($conn,"INSERT into comments values(null,'$name','$ema','$comment','-')");

if($sql)
{
 
  echo "<div style='margin-top:200px;margin-left:400px;font-size:29px;'>THANK YOU FOR YOUR COMMENT!</div>";
 
}
else{

  echo "error:".mysqli_error($conn);





}


?>


