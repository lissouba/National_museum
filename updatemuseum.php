<?php 
include 'connect.php';
$name=$_POST['mname'];
$price=$_POST['mprice'];
$id=$_POST['id'];
$up=mysqli_query($conn,"UPDATE museum set name='$name',price='$price' where mid='$id'");
if ($up) {
	echo "Museum Is Updated Successfully!";
}

?>