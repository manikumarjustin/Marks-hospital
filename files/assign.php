<?php
include("protect.php");
include("dbconnect.php");
extract($_REQUEST);
$rdate=date("d-m-Y");
$uname=$_SESSION['uname'];
$qry=mysql_query("select * from md_patient where id=$pid");
$row=mysql_fetch_array($qry);

if(isset($btn))
{
	
mysql_query("update md_patient set status=1,doctor='$doctor' where id=$pid");

header("location:view_patient.php");

}
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
          <?php include("head_hos.php"); ?>
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
				<h3>  Assign Doctor </h3>
		 		
	 			<form name="form1" method="post" action="">
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
                      <th scope="col">Specialist</th>
                      <th scope="col"><select name="special" onChange="this.form.submit()">
					  <option value="">-Select-</option>
					  	<?php
					  $qs=mysql_query("select distinct(specialist) from md_doctor where hname='$uname'");
					  while($rs=mysql_fetch_array($qs))
					  {
					  ?>
					  <option <?php if($special==$rs['specialist']) echo "selected"; ?>><?php echo $rs['specialist']; ?></option>
					  <?php
					  }
					  ?>
                        </select>
                        <select name="doctor">
						<?php
						$qst=mysql_query("select * from md_doctor where specialist='$special' && hname='$uname'");
					  	while($rst=mysql_fetch_array($qst))
					  	{
						?>
						<option value="<?php echo $rst['uname']; ?>"><?php echo $rst['uname'].":".$rst['name']; ?></option>
						<?php
						}
						?>
                        </select>                      </th>
                    </tr>
                    <tr>
                      <th scope="col">&nbsp;</th>
                      <th scope="col"><input type="submit" name="btn" value="Submit"></th>
                    </tr>
                  </table>
              </form>
	 			<p>&nbsp;</p>
		 		<div class="spacing"></div>
		 		
		 		
			</div><! --/col-lg-8 -->
	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
		 		<?php include("link_hos.php"); ?>
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
