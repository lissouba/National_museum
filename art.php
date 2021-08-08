
<?php
         date_default_timezone_set('Europe/Copenhagen');
         include 'dba.inc.php';
		 //include 'comments.inc.php'
?>

<!DOCKTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transition//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	   <meta name="viewport" content="width=device-width, initial-scare=1" />
	   <title>National Museums</title>
	   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
	   <link rel="stylesheet" type="text/css" href="css/style.css" >
</head>
<body>
<?php include 'menu.php'; ?>
<div class="front">
      <img src="images/color.png"/>
      	
     </div>      	  
		<section class="section-2">
		        <div class="contents1">
				     <h1><center>Rwanda Art museum</center></h1>
			<img src="images/art1.jpg"/>
				<p>The “Rwanda Art Museum” in Kanombe is located in 4 kilometers from Kigali International Airport. 
				This former Presidential Palace Museum changed into Rwanda Art Museum effective from 18th May 2018.</p>
				
				<p>The new museum displays contemporary artworks produced by both Rwandan and international artists. The aim is to provide to our visitors’ insight into the 
				originality of Rwandan creativity, arts development from centuries up-to-date, whilst not overlooking traditional or modern imaginations. </p>
				
				<p>A part from permanent exhibition, The Rwanda Art Museum hosts temporally and moving arts exhibitions as well.  Young visitors also enjoy the Art Kids’ Studio 
				where they are given the opportunity to put their art skills to work. We want the museum to be a place where artists meet and exchange ideas. In this line, a room for
				them to exhibit their artworks has been provided by the INMR to their Federation.</p>
				
				<p>As this current museum served as the Presidential Palace during 1970s until late 2000, our visitors can visit this historical building. The flight debris from the 
				FALCON 50’s presidential jet that went down on 6th April 1994 are also found at this heritage site. </p>
				
				</div>
			<!--	<div class="contents2">
				    <p><h3>Please leave your comments here!</h3></p>
				     <?php
        echo"<form method='POST' action='".setComments($conn)."'>
		                    <input type='text' name='uid' value='' placeholder='Enter your E-mail'>
							<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
							<textarea name='message' placeholder='Comments here!!!!'></textarea><br>
							<button type='submit' name='commentSubmit'>Comment</button>
				</form>";	
getComments($conn);				
?>
				</div>  -->
		
		
		
		</section>
		
		<?php include 'footer.php'; ?>
    </body>				 
</html>