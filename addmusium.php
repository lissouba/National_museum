<?php  
include 'connect.php';
 include 'menu.php';
$name=$_POST['name'];
$price=$_POST['price'];
$sql=mysqli_query($conn,"INSERT into museum values(null,'$name','$price')");
if ($sql) {
	echo"<div style='margin-top:80px;margin-left:500px;width:200px;'>New museum Added</div>";
}
else
echo "not inserted,try again!";
?>