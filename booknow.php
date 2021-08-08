
<?php 
include 'connect.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$museums=$_POST['museums'];
$date=$_POST['date'];
$date2 = "2021-08-30";
if($museums==='butare' && $date<=$date2){
	echo"Not available";
}
else{
$sq=mysqli_query($conn,"INSERT into book values(null,'$fname','$lname','$email','$phone','$museums','$date')");
if ($sq) {
 include 'menu.php';
 echo "</br>";
echo "<div style='margin-top:200px;margin-left:600px;width:2cm;font-size:29px'>BOOKED</div>";
}
else
echo "try again!!";
}
?>