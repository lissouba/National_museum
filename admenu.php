
<html>
<head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	   <meta name="viewport" content="width=device-width, initial-scare=1" />
	   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- <link rel="stylesheet" type="text/css" href="newcss.css" >
	   <link rel="stylesheet" type="text/css" href="css/style.css" >-->
	   <style type="text/css">
	   	

nav {
	position:relative;
	width: 100%;
	height: 60px;
	background-color: gray;
	top: 0px;
}

nav p img {
	height: 60px;
	float: left;
	padding: 0px 0px;
}

nav ul {
	float: left;
	background-color: gray;
	width: 100%;
}
.cl ul li a {
	color:black ;

}

nav ul li {
	float: left;
	list-style: none;
	position: relative;
	width: 160px;
	text-align: center;
	color: black;
	margin-right:2px;
}
nav ul li a {
	display: block;
	font-family: arial;
	color: red;
	font-size: 14px;
	padding: 22px 14px;
	text-decoration: none;
}

nav ul li a {
color: red;
}

nav ul li ul {
	display: none;
	position: absolute;
	background-color: black;
	padding: 6px;
	border-radius: 0px 0px 6px 6px;
	opacity: .7;
}

nav ul li:hover ul {
	display: block;
	background-color:skyblue;
}
nav ul li:hover{
	color: red;
}
nav ul li ul{
	width: 6cm;
}

nav ul li ul li {
	width: 265px;
	border-radius: 4px;
}

nav ul li ul a {
	padding: 6px 14px;
}

nav ul li a:hover {
	background-color: blue;
	width: 5cm;
}


	   </style>
	   <script>
function mouseOver() {
  document.getElementById("demo").style.color = "red";
  document.getElementById("demo").style.background-color ="blue";
}

function mouseOut() {
  document.getElementById("demo").style.color = "black";
}
</script>

	   
</head>
<body>
<nav class="cl">
      <p><img src="images/logo.png"/></p>
        
              <ul>
                 <li><a id="demo" onmouseover="mouseOver()" onmouseout="mouseOut()">Home</a></li>
                 <li><a href="addmesium.php">Add Museum</a>
                 </li>	   
                 <li><a class="" href="upmuseum.php">Update Museum</a>
                 </li>	   
                 <li><a href=" commentview1.php">Comment view</a></li>
                 <li><a href="bookview1.php">Book View</a></li>
                 <li><a>Settings</a>
                 	<ul>
                 		   <li><a href="Changepass.html">Change Password</a></li>
                 		   <li><a href=" logout.php">Log out</a></li>
                    </ul>
                  </li>	
              </ul>
		</nav>
	</body>
	</html>