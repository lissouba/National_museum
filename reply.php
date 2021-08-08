
<form action="comment2.php" method="POST">

<?php
session_start();
//$dele=$_POST['dele'];
include 'dba.inc.php';
$se=$_GET['identity'];
$_SESSION['set']=$se;
$sql=mysqli_query($conn,"SELECT * FROM comments where cid='$se'");
  while($row = mysqli_fetch_array($sql)){
            $emd=$row['comment'];
            $em=$row['email'];
           
                
    }
    echo "<fieldset style='border:none;background-color:grey;width:3cm;border-radius:50px 50px 0px;height:2cm;text-align:center;'>$emd</fieldset>";
?>
<textarea name="text" style="margin-left:3.5cm;"></textarea>
  <!--<a href="https://mail.google.com/mail/u/0/#inbox?compose=new">--><input type="submit" name="" value="send" >
  <br><br><br>
  
  <p style="text-decoration:"><a style="text-decoration:" href="commentview1.php">BACK</a></p></form>