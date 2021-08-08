<?php 
session_start();

if (!isset($_SESSION['email'])) {
    header("Location:index.php");
    }
?>
<!DOCKTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transition//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	   <meta name="viewport" content="width=device-width, initial-scare=1" />
	   <title>National Museums</title>
	   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   <link rel="stylesheet" type="text/css" href="css/style.css" >
</head>
<body>
<nav>
      <p><img src="images/logo.png"/></p>
        
              <ul>
                 <li><a class="a" href=" ">Home</a></li>
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
<div class="front">
      <img src="images/color.png"/>
      <img src="images/home.gif"/>	
     </div>      	  
		<section class="section-2">
		    
			<div class="contents2">
		         <h2>Various Museums</h2>
 					
					
								       <div class="gallery">
											<div class="img1"> 
											  <a href="king.php"><img src="images/inyambo.jpg"></a>
										   <div class="desc"><a href="king.php">King's Palace Museum</a></div>
										 </div>
										 </div>
									  <div class="gallery">
									         <div class="img2">
									         <a href="eth.php"><img src="images/eth1.jpg"></a>
										     <div class="desc"><a href="eth.php">Ethnographic Museum</a></div>
									  </div>
									  </div>	 
									  <div class="gallery">
									        <div class="img3">
									          <a href="rw.php"><img src="images/rwes1.jpg"></a>
										   <div class="desc"><a href="rw.php">Museum of Rwesero</a></div>
									  </div>
									  </div> 
									   <div class="gallery">
									        <div class="img4">
									          <a href="env.php"><img src="images/env1.jpg"></a>
										   <div class="desc"><a href="env.php">Museum of Environment</a></div>
									  </div>
									  </div>
									  
									  <div class="gallery">
									        <div class="img5">
									          <a href="lib.php"><img src="images/7192.jpg"></a>
										   <div class="desc"><a href="lib.php">National Liberation Park Museum</a></div>
									  </div>
									  </div>
									   <div class="gallery">
									        <div class="img6">
									          <a href="gen.php"><img src="images/gen.jpg"></a>
										   <div class="desc"><a href="gen.php">Campaign Against Genocide</a></div>
									  </div>
									  </div>
									   <div class="gallery">
									        <div class="img7">
									       <a href="art.php"><img src="images/rwart.jpg"></a>
										   <div class="desc"><a href="art.php">Rwanda Art Museum</a></div>
									  </div>
									  </div>
									   <div class="gallery">
									       <div class="img8">
									       <a href="kand.php"><img src="images/kand.jpg"></a>
										   <div class="desc"><a href="kand.php">Kandt House Museum</a></div>
									  </div>
									  </div>
									  	
					</div>
				</section>
		
		<div class="footer-main-div">
		    <div class="footer-social-icons">
			       <ul>
				          <li><a href="https://www.facebook.com/RwandaMuseums" target="blank"><i class="fa fa-facebook"></i></a></li>
						  <li><a href="https://twitter.com/RwandaMuseums" target="blank"><i class="fa fa-twitter"></i></a></li>
						  <li><a href="https://www.youtube.com/user/INMRWANDA" target="blank"><i class="fa fa-google-plus"></i></a></li>
						  <li><a href="#" target="blank"><i class="fa fa-youtube"></i></a></li>
				   </ul>
			</div>
			
			  <div class="footer-menu-one">
			          <ul>
					         <li><a href="index.php">Home</a></li>
							 <li><a href="#">About Us</a></li>
							 <li><a href="museums.php">Our Museums</a></li>
							 <li><a href="contact.php">Contact Us</a></li>

					  </ul>
			  </div>
			  
			  <div class="footer-menu-two">
			          <ul>
					         <li><a href="#">Blogs</a></li>
							 <li><a href="#">News</a></li>
							 <li><a href="#">Media</a></li>
					  </ul>
			  </div>
			
		</div>
		
		<div class="footer-bottom">
		    <p>Design for Learning</p>
		</div>
    </body>				 
</html>