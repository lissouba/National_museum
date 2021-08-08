<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>
<form action="booknow.php" method="POST">
	FIRST NAME:<input type="text" name="fname"><br>
	LAST NAME:<input type="text" name="lname"><br>
	Email:<input type="email" name="email"><br>
	Phone Number:<input type="phone" name="phone"><br>
	Select Museum:<br>
	<label for="museums"></label>

<select name="museums" id="museums">
	<?php 
include 'connect.php';
$q=mysqli_query($conn,"SELECT name from museum");
while ($w=mysqli_fetch_array($q)) {
	$v=$w['name'];
	echo "<option value='$v'>$v</option>";
}
	?>
</select><br>
DATE<input type="date" name="date">

<br><br><input type="submit" name="sub" value="Book Now">


</form>
</body>
</html>