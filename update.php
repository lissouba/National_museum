<?php

include('config.php');
if (isset($_POST['submit']))
{
$id=$_GET['identity'];
$pi=mysqli_real_escape_string($conn, $_POST['CATEGORY']);
$pn=mysqli_real_escape_string($conn, $_POST['SINGLE']);
$pc=mysqli_real_escape_string($conn, $_POST['GROUP']);

mysqli_query($conn,"UPDATE rates SET CATEGORY='$pi', SINGLE='$pn',GROUP='$pc' WHERE rid='".$id."'");

//header("Location:advpanel.php");
}

if (isset($_GET['identity']) && is_numeric($_GET['identity']) && $_GET['identity'] > 0)
{
//$id = $_GET['rid'];
$result = mysqli_query($conn,"SELECT * FROM rates WHERE rid=".$_GET['identity']."");

$row = mysqli_fetch_array($result);
if($row)
{
$id = $row['rid'];
$pi = $row['CATEGORY'];
$pn = $row['SINGLE'];
$pc = $row['GROUP'];
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
<input type="hidden" name="rid" value="<?php echo $id; ?>"/>
<table border="0">
<tr>
<th colspan="2" bgcolor="skyblue"><b>Edit Records </b></th>
</tr>
<tr  bgcolor="darkgrey">
<td width="179" ><b>CATEGORY<font color="red"><em></em></font></b></td>
<td><label>
<input type="text" name="CATEGORY" value="<?php echo $pi; ?>"  />
</label></td>
</tr>

<tr  bgcolor="darkgrey">
<td width="179"><b>SINGLE<font color="red"><em></em></font></b></td>
<td><label>
<input type="text" name="SINGLE" value="<?php echo $pn ?>" />
</label></td>
</tr>

<tr  bgcolor="darkgrey">
<td width="179"><b>GROUP<font color="red"><em></em></font></b></td>
<td><label>
<input type="text" name="GROUP" value="<?php echo $pc ?>" />
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
