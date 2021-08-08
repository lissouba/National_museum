<HTML>
 <HEAD>
  <TITLE>Message sent</TITLE>
  <Link rel="stylesheet" href="style_menu.css" type="text/css" media="all">

<style type="text/css">
    
body{

    background: lightgray;
    text-transform: uppercase;
    font-size: 20px;

}
text{
    background-size: 3px;
    border-color: black;
    border-width: 3px;
    border-style: solid;
}





</style>




 </HEAD>

<BODY >
<center>

<?php
include("dba.inc.php");

               $name=$_POST['name'];
               $email=$_POST['email'];
               $subject=$_POST['Subject'];
               $suggestion=$_POST['suggestion'];
               $sql="INSERT INTO `contact`(`Id`, `firstname`, `E-mail`,`Subject`,`suggestion`) VALUES ('','$name','$email','$subject','$suggestion')";
               $result=$conn->query($sql);
               
               echo " Thanks"."</br>"."your message was successful sent"."</br>"." you will get response on your E-mail after six hours ";

?>   
<a href="contact.php" class="drop"><p align="center" style="border-width: 12px;">go back</p></a>  

</BODY>
</HTML>




