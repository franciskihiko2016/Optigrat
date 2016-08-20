<!DOCTYPE HTML>
<html>
<header>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="stylesoft.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">
    <link href="css/metro-schemes.css" rel="stylesheet">

    <link href="css/docs.css" rel="stylesheet">

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/metro.js"></script>
    <script src="js/docs.js"></script>
    <script src="js/prettify/run_prettify.js"></script>
    <script src="js/ga.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</header>
<body>
    <div class="container">
	    <div class="row">
		    <div class="col-md-12">
			<div class="">
			  <div class="row">
			  
			      <div class="col-md-12 logoarea" style="background-color:" >
				  
				     <div class="col-md-12" style="background-color:#C0C0C0;color:white">
				       <div class="col-md-10">
					      <img src="img/optigrat logo.png" height="80px" width="80px"/>
					   </div>
					   <div class="col-md-2">
					   Call:0721494711</br>
					   Email:info@optigrat.com
					        
					   </div>
					  </div> 
					  <div class="row">
					      <div class="col-md-12">
						     <ul class="m-menu">
    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home |</a></li>
    <li><a href="aboutus.php">About Us</a></li>
    <li><a href="ourteam.php">Our Team</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="project.php">Projects</a></li>
    <li><a href="contactus.php">Contact us</a></li>
	</ul>
						  </div>
					  </div>
					  </div> 
				  </div>
			  </div>
			 <div class="row">
			  <div class="col-md-12" >
			 
			      <img src="img/optigrat.jpg" width="100%" height="20%"/>
			  </div> 
			  <div class="row">
			  <div class="col-md-12">
			    <div class="col-md-12" style="background-color:green">
			 
			      <marquee style="color:white"><b>OPTIGRAT Ltd</b> <em>Business Consultancy Firm</em>&nbsp;&nbsp;&nbsp;<b>Committed To Integrity and Excellence</b></marquee>
				  </div>
			  </div>
			</div>
			<div class="row">
			   <div class="col-md-12">
			        <div class="col-md-4">
					    <div class="panel panel-success">
						   <div class="panel-heading">
						      <h4><b>Quick Contact</b><h4>
						   </div>
						   <div class="panel-body">
						  <?php
						    if(isset($_POST['submit']) && isset($_POST['name'])&& isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['message']) )
							{
							
							   $name=$_POST['name'];
							   $email=$_POST['email'];
							   $phone=$_POST['phone'];
							   $message=$_POST['message'];
							   
							   $to="info@optigrat.com";
							   $subject=$email;
							   $body="Name:".$name."\n phone:".$phone. "\n".$message;
							   if(mail($to,$subject,$body))
							   {
							     echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\"
aria-hidden=\"true\">
&times;
</button>
Success! Well done its submitted.
</div>";
							   } else { echo "<div class=\"alert  alert-danger\">Sorry! failed to sent.Please try again</div>";}
							}
						   
						   ?>
						  <form role="form" method="POST" class="" action="index.php">
						      <div class="form-group">
							  <label for="name">Name:</label>
							      <input type="text" name="name" required class="form-control"/>
							  </div> 
							  <div class="form-group">
							  <label for="Email">Email:</label>
							      <input type="email" name="email" required class="form-control"/>
							  </div>
							  <div class="form-group">
							  <label for="phone">Phone:</label>
							      <input type="tel" name="phone"  required class="form-control"/>
							  </div>
							  <div class="form-group">
							  <label for="message">Message:</label>
							      <textarea type="text" name="message"  required class="form-control"></textarea>
							  </div>
							  <div class="form-group">
							  
							      <span class="badge"><input type="submit"  required name="submit" class="form-control button btn-success"/></span>
							  </div>
						  </form>
						  </div>
						</div>
					
					</div>
					 <div class="col-md-8">
					  <div class="panel text-center">
					  <div class="">
					  </div>
					  <br>
					  <br> <br>
					  <center><b>Contact us</b></center>
							 <hr/>
							 <address>
                             <strong>OPTIGRAT Company Ltd</strong><br>
                               PO.BOX 86263-80100<br>
                       MOMBASA,KENYA<br>
               <abbr title="Phone">Phone:</abbr> (254)0721494711
                  </address>
                 <address>
             <strong>Optigrat</strong><br>
            <a href="mailto:#">info@optigrat.com</a>
             </address> 
					  </div>
				
				  
				</div>
					
			   
			   </div>
			</div>
			
			
			   
			
			
			
			
			
			
			
			
			<div class="row">
			     <div class="col-md-12" style="background-color:black;color:white;border-radius:10px,10px,10px">
				       <div class="col-md-5">
					         OPTIGRAT Company Ltd</br>
							 PO.BOX 86263-80100</br>
							 MOMBASA,KENYA</br>
							 Phone:0721494711<br>
							 Email:info@optigrat.com
					   </div>
					   <div class="col-md-7" style="">
					     <ul  class="nav navbar-nav" style="color:white">
						 <li> <a href="index.php" style="color:white">Home</a></li>
						 <li> <a href="aboutus.php" style="color:white">About us</a></li>
						 <li> <a href="ourteam.php" style="color:white">Our Team</a></li>
						 <li> <a href="services.php" style="color:white">Services</a></li>
						 <li> <a href="project.php" style="color:white">Project</a></li>
						 <li> <a href="contactus.php" style="color:white">Contact Us</a></li>
						 
						</ul>
						
						<div class="row">
						     <div class="col-md-12">
							   Copyright © 2015 OPTIGRAT Ltd &nbsp; &nbsp; &nbsp;Website designed by:<span class="badge"><a href="http://www.smartsoftexperts.com" style="color:WHITE">SMART SOFT EXPERTS</a></span>
							 </div>
						</div>
					   </div>
					   
				 </div>	
			 <br>
			</div>
			
			</div>
		</div>
	</div>
	 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/popover.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>