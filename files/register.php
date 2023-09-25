<?php
session_start();
include("dbconnect.php");
extract($_POST);
$rdate=date("d-m-Y");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title><?php include("title.php"); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="assets/js/modernizr.js"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <h1 style="color:white;"><img src="1.png"width="90" height="80" alt="">Marks Hospital</h1><h5 style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No.43, Ramalakshmi Nagar 2nd St<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;K.Pudur, Tamil Nadu 625014,India.</h5>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <?php include("head_home.php"); ?>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3><?php include("title.php"); ?></h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	 
	<!-- *****************************************************************************************************************
	 BLOG CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- SINGLE POST -->
	 		<div class="col-lg-8">
	 			<! -- Blog Post 1 -->
				<h3>Registration</h3>
		 		<p>
				<?php
if(isset($btn))
{
$mq=mysql_query("select max(id) from md_hospital");
$mr=mysql_fetch_array($mq);
$id=$mr['max(id)']+1;

	

$qry=mysql_query("insert into md_hospital(id,hname,address,city,contact,email,uname,pass) values($id,'$hname','$address','$city','$contact','$email','$uname','$pass')");
if($qry)
{
header("location:login.php?act=success");
}
else
{
$msg="Already Exist!";
}

}

				?>
				<form name="form1" method="post">
				 	  <div class="form-group">
					    <label for="InputName1">Hospital</label>
					    <input type="text" name="hname" class="form-control">
					  </div>
					  <div class="form-group">
					    <label for="InputName1">Address</label>
					    <input type="text" name="address" class="form-control">
					  </div>
					  <div class="form-group">
					    <label for="InputName1">City</label>
					    <input type="text" name="city" class="form-control">
					  </div>
					  <div class="form-group">
					    <label for="InputName1">Contact No.</label>
					    <input type="text" name="contact" class="form-control">
					  </div>
					  <div class="form-group">
					    <label for="InputName1">E-mail</label>
					    <input type="text" name="email" class="form-control">
					  </div>
					  <div class="form-group">
					    <label for="InputName1">Username</label>
					    <input type="text" name="uname" class="form-control">
					  </div>
					   <div class="form-group">
					    <label for="InputName1">Password</label>
					    <input type="password" name="pass" class="form-control">
					  </div>
					   <div class="form-group">
					    <label for="InputName1">Re-type Password</label>
					    <input type="password" name="cpass" class="form-control">
					  </div>
					  					  
					  <input type="submit" name="btn" class="btn btn-theme" value="Register">
					  <div class="msg"><?php echo $msg; ?></div>
				</form>
				</p>
	 		
		 		<div class="spacing"></div>
		 		
		 		
			</div><! --/col-lg-8 -->
	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
		 		<?php include("link_home.php"); ?>
	 		</div>
	 	</div><! --/row -->
	 </div><! --/container -->


	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <div id="footerwrap">
	 	<div class="container">
		 	<div class="row">
		 		<div class="col-lg-4">
		 			<h4>About</h4>
		 			<div class="hline-w"></div>
		 			<p>A hospital is a health care institution providing patient treatment with specialized health science and auxiliary healthcare staff and medical equipment.</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Social Links</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				<a href="#"><i class="fa fa-dribbble"></i></a>
		 				<a href="#"><i class="fa fa-facebook"></i></a>
		 				<a href="#"><i class="fa fa-twitter"></i></a>
		 				<a href="#"><i class="fa fa-instagram"></i></a>
		 				<a href="#"><i class="fa fa-tumblr"></i></a>
		 			</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Our Bunker</h4>
		 			<div class="hline-w"></div>
		 			<p>
					 Plot No.43, Ramalakshmi Nagar 2nd St,<br/>
					 Ramalakshmi Nagar, K.Pudur,<br/>
					 Tamil Nadu 625014,<br/>
					 India.
		 			</p>
		 		</div>
		 	
		 	</div><! --/row -->
	 	</div><! --/container -->
	 </div><! --/footerwrap -->
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/retina-1.1.0.js"></script>
	<script src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/jquery.hoverex.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
  	<script src="assets/js/jquery.isotope.min.js"></script>
  	<script src="assets/js/custom.js"></script>


  </body>
</html>
