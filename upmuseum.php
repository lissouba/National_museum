<?php 
session_start();

if (!isset($_SESSION['email'])) {
    header("Location:index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="style.css">

  <title>ADD NEW MUSEUM</title>

</head>
<style type="text/css">
  body{
  font-size:19px;
  padding-right:20px ;
  background-size: cover;
  background-color: palegreen;
}
.container:hover{
  background: blueviolet;

  color: red;
  border-color: rgba(255, 255, 255, .1);
}
@media (max-width: 710px) and (min-width: 700px);
.table-responsive
body{
  height: 10px;

  }
}
.table{
   border-collapse: collapse;
       background-color: palegreen;

}

</style>
<body style="padding-top:20px;background-color: palegreen;">
  <?php //include 'admenu.php';?>

<form method="post" action="uppmuseum.php">

  <section class="footer-main-div,table-responsive">

  <div class="container" >

                   
 <table class="table table-dark"> 
  <h1 align="center" tabindex="">UPDATE MUSEUM</h1>
  <tr><th>MUSEUM:</th>
    <!--<td><input type="text" name="name" required="required"></td>
  </tr><br>-->
  <td><label for="museums"></label>

<select name="name" id="museums">
  <?php 
include 'connect.php';
$q=mysqli_query($conn,"SELECT name from museum");
while ($w=mysqli_fetch_array($q)) {
  $v=$w['name'];
  echo "<option value='$v'>$v</option>";
}
  ?>
</select><br></td>
  </tr><br>

                      
 </table>
 <input type="submit" name="sub" value="Update Museum" align="center" style="text-align: center;"><br><br><br><br><br>
 <P> <a href="adminpage.php" style="text-decoration:none;margin-left: 4cm; margin-bottom: -1cm;">BACK</a></P>
  </div></section>

</form>


</body>
</html>