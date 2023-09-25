<?php
include("protect.php");
include("dbconnect.php");
extract($_REQUEST);
$rdate=date("d-m-Y");
$cy=date("Y");
$uname=$_SESSION['uname'];
$qry=mysql_query("select * from md_patient where uname='$pid'");
$row=mysql_fetch_array($qry);
$dis=$row['disease'];
$ag=explode("-",$row['dob']);
$age=$cy-$ag[2];
$gender=$row['gender'];
$hname=$row['hname'];

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
          <?php include("head_doc.php"); ?>
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
				<h3> Information </h3>
		 		
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
                      <th scope="col">Gender</th>
                      <th scope="col"><?php echo $row['gender']; ?></th>
                    </tr>
                    <tr>
                      <th scope="col">Date of Birth </th>
                      <th scope="col"><?php echo $row['dob']; ?></th>
                    </tr>
                  </table>
                  <p>&nbsp;</p>
                  <table width="339" height="53" border="0">
                    <tr>
                      <th scope="col">Date of Birth 
                        <input type="text" name="dob" value="<?php echo $row['dob']; ?>"></th>
                      <th width="93" scope="col"><input type="submit" name="btn3" value="Assign Date"></th>
                    </tr>
                  </table>
				  <p>&nbsp;</p>
	 			</form>
	 			<p>&nbsp;</p>
				<?php
				
				if(isset($btn3))
				{
				
				$mq=mysql_query("select max(id) from md_addlist");
				$mr=mysql_fetch_array($mq);
				$id=$mr['max(id)']+1;
				
				$rdate=date("d-m-Y");
				
				$dd=explode("-",$dob);
				$md=mktime(0,0,0,$dd[1],$dd[0]+10,$dd[2]);
				$date1=date("d-m-Y",$md);
				
				$md2=mktime(0,0,0,$dd[1]+1,$dd[0],$dd[2]);
				$date2=date("d-m-Y",$md2);
				
				$md3=mktime(0,0,0,$dd[1]+3,$dd[0],$dd[2]);
				$date3=date("d-m-Y",$md3);
				
				$md4=mktime(0,0,0,$dd[1]+6,$dd[0],$dd[2]);
				$date4=date("d-m-Y",$md4);
				
				$md5=mktime(0,0,0,$dd[1]+12,$dd[0],$dd[2]);
				$date5=date("d-m-Y",$md5);
				
				$ins=mysql_query("insert into md_addlist(id,pid,dob,date1,date2,date3,date4,date5,rdate) values($id,'$pid','$dob','$date1','$date2','$date3','$date4','$date5','$rdate')");
					
					?>
					<script language="javascript">
					alert("Date has assigned...");
					window.location.href="view_pat2.php?pid=<?php echo $pid; ?>";
					</script>
					<?php
				}
				
				
				?>
		 		<div class="spacing"></div>
		 		
		 		
			</div><! --/col-lg-8 -->
	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
		 		<?php include("link_doc.php"); ?>
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
		 			<p>A hospital is a health care institution providing patient treatment with specialized health science and auxiliary healthcare staff and medical equipment.
					</p>
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
