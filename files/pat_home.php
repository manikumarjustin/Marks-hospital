<?php
include("protect.php");
include("dbconnect.php");
extract($_POST);
$rdate=date("d-m-Y");
$uname=$_SESSION['uname'];
$qry=mysql_query("select * from md_patient where uname='$uname'");
$row=mysql_fetch_array($qry);
$pid=$row['id'];
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
          <a class="navbar-brand" href="#"><?php include("heading.php"); ?></a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <?php include("head_pat.php"); ?>
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
				<h3>Patient Information </h3>
		 		<p>
				
			  <form name="form1" method="post">
				 	 
			    <div class="form-group">
				      <table width="500" height="149" border="1">
                          <tr>
                            <th width="189" scope="col">Patient ID </th>
                            <th width="295" scope="col"><?php echo $row['uname']; ?></th>
                          </tr>
                          <tr>
                            <th scope="col"> Name </th>
                            <th scope="col"><?php echo $row['name']; ?></th>
                          </tr>
                          <tr>
                            <th scope="col">Gender</th>
                            <th scope="col"><?php echo $row['gender']; ?></th>
                          </tr>
                          <tr>
                            <th scope="col">Date of Birth </th>
                            <th scope="col"><?php echo $row['dob']; ?></th>
                          </tr>
                          <tr>
                            <th scope="col">Address</th>
                            <th scope="col"><?php echo $row['address']; ?></th>
                          </tr>
                          <tr>
                            <th scope="col">City</th>
                            <th scope="col"><?php echo $row['city']; ?></th>
                          </tr>
                          <tr>
                            <th scope="col">Contact No. </th>
                            <th scope="col"><?php echo $row['contact']; ?></th>
                          </tr>
                          <tr>
                            <th scope="col">E-mail</th>
                            <th scope="col"><?php echo $row['email']; ?></th>
                          </tr>
                          <tr>
                            <th scope="col">Blood Group </th>
                            <th scope="col"><?php echo $row['blood_grp']; ?></th>
                          </tr>
                          <tr>
                            <th scope="col">Specialist</th>
                            <th scope="col"><?php echo $row['doctor']; ?></th>
                          </tr>
                          <tr>
                            <th scope="col">Date</th>
                            <th scope="col"><?php echo $row['rdate']; ?></th>
                          </tr>
                        </table>
				      <p>
				        <?php
				  $q2=mysql_query("select * from md_addlist where pid='".$row['uname']."'");
					$n2=mysql_num_rows($q2);
					if($n2>0)
					{
				  ?>
</p>
				      <table width="735" height="67" border="1">
                        <tr>
                          <th width="70" align="center" scope="col">Sno</th>
                          <th width="125" align="center" scope="col">Reg. Date </th>
                          <th width="125" align="center" scope="col">HeptatisB</th>
                          <th width="125" align="center" scope="col">Inactivated Polio Vaccine </th>
                          <th width="125" align="center" scope="col">Varicella</th>
                          <th width="125" align="center" scope="col">Rotavirus</th>
                          <th width="125" align="center" scope="col">HPV</th>
                        </tr>
                        <?php
					$i=0;
					while($r2=mysql_fetch_array($q2))
					{
					$i++;
						?>
                        <tr>
                          <th scope="col"><?php echo $i; ?></th>
                          <th scope="col"><?php echo $r2['rdate']; ?></th>
                          <th scope="col"><?php echo $r2['date1']; ?></th>
                          <th scope="col"><?php echo $r2['date2']; ?></th>
                          <th scope="col"><?php echo $r2['date3']; ?></th>
                          <th scope="col"><?php echo $r2['date4']; ?></th>
                          <th scope="col"><?php echo $r2['date5']; ?></th>
                        </tr>
                        <?php
						
						
					}
					?>
                      </table>
				      <?php
				  }
				  ?>
                      <p></p>
                      <label for="InputName1"></label>
			    </div>
					  					  
			    </form>
				<p>&nbsp;</p>
		 		<div class="spacing"></div>
		 		
		 		
			</div><! --/col-lg-8 -->
	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
		 		<?php include("link_pat.php"); ?>
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
		 			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
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
		 				Some Ave, 987,<br/>
		 				23890, India. <br/>
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
