<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="updatemuseum.php" method="POST">
	<?php 
include 'connect.php';
$name=$_POST['name'];
$se=0;
$sql=mysqli_query($conn,"SELECT * FROM museum where name='$name'");
while ($sq=mysqli_fetch_array($sql)) 
{
	$n=$sq['name'];
	$p=$sq['price'];
	$id=$sq['mid'];
if ($name=$sq['name']) {
		$se=1;
	}	
}
if ($se==1) {
	echo "Museum name: <input type='text' name='mname' value='$n'><br>";
	echo "Museum price: <input type='text' name='mprice' value='$p'><br>";
	echo " <input type='hidden' name='id' value='$id'><br>";
}
?>
<input type="submit" name="sub" value="update">
</form>
</body>
</html>
