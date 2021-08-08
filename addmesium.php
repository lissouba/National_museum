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
  background-image:  url("images/im2.jpg");
}
.container:hover{
  background: blue;

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

}
.container{
   background-color: palegreen;
}

</style>
<form method="post" action="addmusium.php">
<body>
  <?php include 'admenu.php';?>
  <br><br><br><br>
  <section class="footer-main-div,table-responsive">

  <div class="container" >

                   
 <table class="table table-dark"> 
  <h1 align="center" tabindex="">ADD NEW MUSEUM</h1>
  <tr><th>MUSEUM NAME:</th>
    <td><input type="text" name="name" required="required"></td>
  </tr><br>
                          
   <tr><th >PRICE PER DAY:</th>
    <td><input type="text" name="price"required="required"></td><br></tr>
                      
 </table>
 <input type="submit" name="sub" value="Add Museum" align="center" ><br><br>
<p style="text-decoration:none;padding-left: 4cm;"><a style="text-decoration:none"; href="adminpage.html" > HOME</a></p>
                        
</div></section>
</form>

</body>
</html>