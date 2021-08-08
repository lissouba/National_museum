<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>WE VALUE YOUR SUGGESTION</title>
	<h1 style="">Be free to give your feedback!</h1>
<?php include 'menu.php'; ?>
</head>
<body>

<form action="comment.php" method="POST" style="margin-top: 2cm;background-color: skyblue;width:40% ;margin-left: 7cm;text-align: center;"> 
  <br>
  Name: <input type="text" name="name" required="">
  <br><br>
  E-mail: <input type="email" name="email" required="">
  <br><br>
  Comment:<br> 
  <textarea name="comment" rows="5" cols="40" placeholder="write your comment here!" style="font-size: 20px;"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>