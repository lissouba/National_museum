<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>WE VALUE YOUR FEEDBACK</title>
  
    
    <style type="text/css">
  </style></head>
<?php
session_start();
$server="localhost";
$username="root";
$password="";
$db="db_museum";

$conn=new mysqli($server,$username,$password,$db);

if($conn->connect_error)
{

die("connection failed !".connect_error);
}

$se=$_SESSION['set'];
$text=$_POST['text'];
$update=mysqli_query($conn,"UPDATE comments set reply='$text' where cid='$se'");
if ($update) {
	echo "donee";
}
else
echo "try again";

?>

<body>
    
               <p> <a href="adminpage.php">BACK</a></p>
                </body
            

