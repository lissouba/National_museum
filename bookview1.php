<?php 
session_start();

if (!isset($_SESSION['email'])) {
    header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>WE VALUE YOUR FEEDBACK</title>
	 <?php include 'admenu.php';?>
    
    <style type="text/css">
        
@import url('https://fonts.googleapis.com/css?family=Allura|Josefin+Sans');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    list-style: none;
    text-decoration: none;
    font-family: 'Josefin Sans', sans-serif;
}
html,body{
    display: grid;
    height: 100%;
    width: 100%;
    place-items: center;
    background: -webkit-linear-gradient(left, #ffffff, #ffffff);
     background: url('images/back1.jpg') no-repeat top center;
  }
  ::selection{
    background: #fa4299;
    color: #fff;
  }
  .wrapper{
    overflow: hidden;
    max-width: 390px;
    background: #fff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
  }
  .wrapper .title-text{
    display: flex;
    width: 200%;
  }
  .wrapper .title{
    width: 50%;
    font-size: 35px;
    font-weight: 600;
    text-align: center;
    transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
  }
  .wrapper .slide-controls{
    position: relative;
    display: flex;
    height: 50px;
    width: 100%;
    overflow: hidden;
    margin: 30px 0 10px 0;
    justify-content: space-between;
    border: 1px solid lightgrey;
    border-radius: 5px;
  }
  .slide-controls .slide{
    height: 100%;
    width: 100%;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    text-align: center;
    line-height: 48px;
    cursor: pointer;
    z-index: 1;
    transition: all 0.6s ease;
  }
  .slide-controls label.signup{
    color: #000;
  }
  .slide-controls .slider-tab{
    position: absolute;
    height: 100%;
    width: 50%;
    left: 0;
    z-index: 0;
    border-radius: 5px;
    background: -webkit-linear-gradient(left, #a445b2, #fa4299);
    transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
  }
.table_responsive {
    max-width: 900px;
    max-height: 450px;
    border: 1px solid #00bcd4;
    background-color: #efefef33;
    padding: 15px;
    overflow: auto;
    margin: auto;
    border-radius: 4px;
    overflow-y: scroll;
}
table {
    width: 100%;
    font-size: 13px;
    color: #444;
    white-space: nowrap;
    border-collapse: collapse;
}

table>thead {
    background-color:gray;
    color: #fff;
}

table>thead th {
    padding: 15px;
}
table th,
table td {
    border: 1px solid #00000017;
    padding: 10px 15px;
}
table>tbody>tr>td>img {

    display: inline-block;
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #fff;
    box-shadow: 0 2px 6px #0003;
    -webkit-transition: width 2s ease, height 2s ease;
    -moz-transition: width 2s ease, height 2s ease;
    -o-transition: width 2s ease, height 2s ease;
    -ms-transition: width 2s ease, height 2s ease;
    transition: width 2s ease, height 2s ease;
}
table>tbody>tr>td>img:hover {
    width: 300px;
    height: 300px;
   }
.action_btn {
    display: flex;
    justify-content: center;
    gap: 10px;
}
.action_btn>a {
    text-decoration: none;
    color: #444;
    background: #fff;
    border: 1px solid;
    display: inline-block;
    padding: 7px 20px;
    font-weight: bold;
    border-radius: 3px;
    transition: 0.3s ease-in-out;
}
.action_btn>a:nth-child(1) {
    border-color: #26a69a;
}
.action_btn>a:nth-child(2) {
    border-color: orange;
}

.action_btn>a:hover {
    box-shadow: 0 3px 8px #0003;
}
table>tbody>tr {
    background-color: #fff;
    transition: 0.3s ease-in-out;
}
table>tbody>tr:nth-child(even) {
    background-color: rgb(238, 238, 238);
}

table>tbody>tr:hover{
    filter: drop-shadow(0px 2px 6px #0002);
}
  input[type="radio"]{
    display: none;
  }
  #signup:checked ~ .slider-tab{
    left: 50%;
  }
  #signup:checked ~ label.signup{
    color: #fff;
    cursor: default;
    user-select: none;
  }
  #signup:checked ~ label.login{
    color: #000;
  }
  #login:checked ~ label.signup{
    color: #000;
  }
  #login:checked ~ label.login{
    cursor: default;
    user-select: none;
  }
  .wrapper .form-container{
    width: 100%;
    overflow: hidden;
  }
  .form-container .form-inner{
    display: flex;
    width: 200%;
  }
  .form-container .form-inner form{
    width: 50%;
    transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
  }
  .form-inner form .field{
    height: 50px;
    width: 100%;
    margin-top: 20px;
  }
  .form-inner form .field input{
    height: 100%;
    width: 100%;
    outline: none;
    padding-left: 15px;
    border-radius: 5px;
    border: 1px solid lightgrey;
    border-bottom-width: 2px;
    font-size: 17px;
    transition: all 0.3s ease;
  }
  .form-inner form .field input:focus{
    border-color: #fc83bb;
    /* box-shadow: inset 0 0 3px #fb6aae; */
  }
  .form-inner form .field input::placeholder{
    color: #999;
    transition: all 0.3s ease;
  }
  form .field input:focus::placeholder{
    color: #b3b3b3;
  }
  .form-inner form .pass-link{
    margin-top: 5px;
  }
  .form-inner form .signup-link{
    text-align: center;
    margin-top: 30px;
  }
  form .btn{
    height: 50px;
    width: 100%;
    border-radius: 5px;
    position: relative;
    overflow: hidden;
  }
  form .btn .btn-layer{
    height: 100%;
    width: 300%;
    position: absolute;
    left: -100%;
    background: -webkit-linear-gradient(right, #a445b2, #fa4299, #a445b2, #fa4299);
    border-radius: 5px;
    transition: all 0.4s ease;;
  }
  form .btn:hover .btn-layer{
    left: 0;
  }
  form .btn input[type="submit"]{
    height: 100%;
    width: 100%;
    z-index: 1;
    position: relative;
    background: none;
    border: none;
    color: #fff;
    padding-left: 0;
    border-radius: 5px;
    font-size: 20px;
    font-weight: 500;
    cursor: pointer;
  }


h1.title{
    margin-bottom: 20px;
    color: #444444;
    font-family: 'Allura', cursive;
    text-transform: uppercase;
    font-size: 38px;
    word-spacing: 25px;
    letter-spacing: 5px;
}

p{
    margin-bottom: 26px;
    font-size: 30px;
    color: black;
    text-align: center;
}
  .btn:hover{
    background:#2CC06B; 
  }
  
  #btn2{
    float:left;
    background:#3498db;
    width:125px;  padding-top:5px;
    padding-bottom:5px;
    color:white;
    border-radius:4px;
    border: #2980b9 1px solid;
    
    margin-top:20px;
    margin-bottom:20px;
    margin-left:10px;
    font-weight:800;
    font-size:0.8em;
  }
  
  #btn2:hover{ 
  background:#3594D2; 
  }

.btn a {
    width: 180px;
    height: 35px;
    line-height: 35px;
    border: 2px solid #fb2274;
    display: block;
    margin: 25px auto 0;
    text-align: center;
}

.main_container{
    position: relative;
}

/* Navigation Bar */
.navbar{
    width: 100%;
    height: 65px;
    position: absolute;
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.logo a{
    font-size: 32px;

}
.navbar_items ul{
    display: flex;
}
.navbar_items ul li{
    margin: 0 10px;
}

.navbar_items ul li a{
    text-transform: uppercase;
    color: #fff;
}
/* banner_image */
.banner_image{
   
    background-size: cover;
    width: 100%;
    height: 200px;
    display: flex;
    justify-content: bottom;
    align-items: center;
}

.banner_content{
    text-align: center;
    color: red;
}

.banner_content h1{
    text-transform: uppercase;
    line-height: 38px;
    margin-bottom: 15px;
}

.banner_content h1 span{
    color: #fb2274;
}


/* About */
.about,
.services,
.contactus,
.ourteam{
    text-align: center;
    padding: 5% 10%;
}

/* Contact us */
.form_wrapper .form_input{
    margin-bottom: 15px;
}

.form_wrapper .form_input input[type="text"]{
    width: 250px;
    padding: 12px 20px; 
    border: 1px solid #ccc;
}

.form_wrapper .form_input textarea{
    width: 250px;
    padding: 12px 20px; 
    height: 80px;
    resize: none;
    border: 1px solid  #ccc;
}
/* footer */
.footer{
    width: 100%;
    text-align: center;
    background: #444444;
    padding: 20px 0;
}

.footer a{
    color: #fff;
}
@media (max-width: 720px){

    .navbar{
        height: auto;
        flex-direction: column;
    }

    .logo{
        margin-bottom: 20px;
    }

    .navbar_items ul{
        flex-direction: column;
        text-align: center;
    }

    .navbar_items ul li{
        margin-bottom:5px;
    }

    .banner_content{
        margin-top: 35px;
    }

}

/* arrow */
.arrow{
    position: fixed;
    bottom: 25px;
    right: 25px;
    width: 40px;
    height: 40px;
    line-height: 50px;
    text-align: center;
    cursor: pointer;
    background: #fb2274;
    border-radius: 50%;
    display: none;
}

.arrow img{
    width: 20px;
    height: 20px;
    z-index: 1;
}
















    </style>
</head>
<body>
	 
<div class="main_container" id="home">
	<div class="navbar">
		<div class="logo">
			<p style="text-align: center;"></p>
		</div>
		<div class="navbar_items">
			<ul>
               <!-- <li><a href="advert.html"></a></li>-->
				<!--<li><a href="adminpage.html">BACK</a></li>-->
			</ul>
		</div>
	</div>
	<div class="banner_image">
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
$sql = "SELECT * FROM book";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table >";
        echo "<thead>";
            echo "<tr>";
                
                echo "<th>First Name</th>";
                 echo "<th>Last Name</th>";
                  echo "<th>Email</th>";
                   echo "<th>Telephone</th>";
                   echo "<th>Museum</th>";
                echo "<th>Date</th>";
                echo "<th >Action</th>";
            echo "</tr>";
            echo "</thead>";
        while($row = mysqli_fetch_array($result)){
        	$identity= $row['id'];
            echo "<tbody>";    
            echo "<tr>";
               // echo "<td>" . $row['cid'] . "</td>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['museum'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";

                 echo "<td>" ?> <a href="deletebook.php?identity=<?php echo $row['id'];?>"> <button>Delete</button></a>

              
           <?php echo "</tr>";
            echo "</tbody>"; 
        } 
        echo "</table>";
      
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);
?>
    </div>
	</div>
	
	<div class="footer">
	</div>
	<div class="arrow">
		<a href="#home"><img src="images/arrow.png" alt="up_arrow"></a>
	</div>
</div>	
</body>
</html>

