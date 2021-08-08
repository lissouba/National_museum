<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="with=device-width, initial-scale=1.0">
  <title>BOOKING</title>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <?php include 'menu.php'; ?>
<style>
  body{
margin: 0;
padding: 0;
font-family: sans-serif;
background: url('images/rwes.jpg') no-repeat;
background-size: cover;


}

<style type="text/css">
    body{
      padding: 0;
      margin: 0;
      background: url('crime.jpg') no-repeat;
      background-size: cover;
    }
    .form{
      font-family: 'Roboto',sans-serif;
      position: relative;
      z-index: 1;
      background: palegreen;
      opacity: 99%;
      max-width: 50%;
      margin: 200px auto 100px;
      padding: 10px 45px 30px 45px;
      text-align: center;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5PX 0 rgb(0, 0, 0,0.24);
      border-width: 10px;


 }
 p{
  
  text-align: center;
  width: 2.2cm;
  padding-left: 15cm;
  padding-bottom: -8cm;
 }

 .form P{
  font-size:15PX;
  padding: center;
  padding: 1px;
  text-align: center;
 }
 #id{
  width: 25%;
  background-color: gray;
 }

 .form input{
  outline: 0px;
  padding:10px
  border-radius: 10px;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding:15px ;
  box-sizing: border-box;
  font-size: 14px ;

}

.form input:hover{
  background-color:D3F8F9;
  transition: all is ease 0s;

}
.form input:focus{
  background-color:#D3F8F9 ;
  transition: all is ease 0s;


}



}
.form button:hover, .form button:active, .form button:foccus{
  background-color: #06c5cf;
  transition: great 0s;
}
@media (max-width: 700px){
  .form{
  font-size: 10px;
}
#id{
  background-color: red;
}

   
    
</style>
</head>
<body>


<div class="form">
  <h2 style="background-color:palegreen;">Please Fill Your Identification!</h2>
  
<form action="booknow.php" method="POST">
  
 <input type="text" name="fname" class="form-report" placeholder="First Name
 "><br><br>
 <input type="text" name="lname" class="form-report" placeholder="Last Name
 "><br><br>

 <input type="email" name="email" placeholder="Your Email" required><br><br>


 <input type="text" name="phone" placeholder="Phone Number" required><br><br>


<!-- <input type="text" name="occupy" placeholder="Select Museum" required><br><br>-->
Select Museum:
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


 <input type="date" name="date"  placeholder="Date
 "><br><br>
 <input type="submit" name="sub" value="Book Now" id="id">

</div>

 <p ></p>

</form>
<?php  include 'footer.php';?>
</body>
</html> 