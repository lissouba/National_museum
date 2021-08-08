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
if (isset($_POST['submit']))
{
$id=$_POST['cid'];
$pi=mysqli_real_escape_string($conn, $_POST['username']);
$pn=mysqli_real_escape_string($conn, $_POST['email']);
$pc=mysqli_real_escape_string($conn, $_POST['user_type']);
$pc=mysqli_real_escape_string($conn, $_POST['password']);


mysqli_query($conn,"UPDATE users SET username='$pi', email='$pn',user_type='$pc' WHERE cid='$id'");

header("Location:advpanel.php");
}

if (isset($_GET['cid']) && is_numeric($_GET['cid']) && $_GET['cid'] > 0)
{
$id = $_GET['cid'];
$result = mysqli_query($conn,"SELECT * FROM users WHERE cid=".$_GET['cid']);

$row = mysqli_fetch_array($result);
if($row)
{
$id = $row['cid'];
$pi = $row['username'];
$pn = $row['email'];
$pc = $row['user_type'];
}
else
{
echo "No results!";
}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Edit Item</title>
</head>
<body>



<form action="" method="post" action="update.php">
<input type="hidden" name="Order_Id" value="<?php echo $id; ?>"/>
<table border="0">
<tr>
<th colspan="2" bgcolor="skyblue"><b>Edit Records </b></th>
</tr>
<tr  bgcolor="darkgrey">
<td width="179" ><b>Product Image<font color="red"><em>*</em></font></b></td>
<td><label>
<input type="file" name="ProductImage" value="<?php echo $pi; ?>"  />
</label></td>
</tr>

<tr  bgcolor="darkgrey">
<td width="179"><b>Product Name<font color="red"><em>*</em></font></b></td>
<td><label>
<input type="text" name="ProductName" value="<?php echo $pn ?>" />
</label></td>
</tr>

<tr  bgcolor="darkgrey">
<td width="179"><b>Product Category<font color="red"><em>*</em></font></b></td>
<td><label>
<input type="text" name="ProductCategory" value="<?php echo $pc ?>" />
</label></td>
</tr>
<tr align="Right"  bgcolor="darkgrey">
<td colspan="2"><label>
<input type="submit" name="submit" value="Save Changes">&nbsp; <button><a href="advpanel.php" style="text-decoration: none;">Cancel</a></button> 
</label></td>
</tr>
</table>
</form>
</body>
</html>
