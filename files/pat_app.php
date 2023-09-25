<?php
include("protect.php");
include("dbconnect.php");
extract($_POST);
$rdate=date("d-m-Y");
$uname=$_SESSION['uname'];
$qry=mysql_query("select * from md_patient where uname='$uname'");
$row=mysql_fetch_array($qry);

$doctor=$row['doctor'];

$arr=array("10.00AM","10.15AM","10.30AM","10.45AM","11.00AM","11.15AM","11.45AM","12.00PM","12.15PM","12.30PM","12.45PM");

if(isset($btn))
{
$aa=explode("-",$adate);
$adate1=$aa[2]."-".$aa[1]."-".$aa[0];

$mq=mysql_query("select max(id) from md_appoint");
$mr=mysql_fetch_array($mq);
$id=$mr['max(id)']+1;

$rdate=date("d-m-Y");

	$q1=mysql_query("select * from md_appoint where adate='$adate1'");
	$n1=mysql_num_rows($q1);

	if($n1<11)	
	{
		$atime=$arr[$n1];
$ins=mysql_query("insert into md_appoint(id,pid,doctor,adate,atime,amount,rdate) values($id,'$uname','$doctor','$adate1','$atime','100','$rdate')");
					
	?>
	<script language="javascript">
	//alert("Appointment has sent");
	window.location.href="pat_pay.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script language="javascript">
	alert("No Appointment");
	window.location.href="pat_app.php";
	</script>
	<?php
	}
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
				<h3>Appointment</h3>
		 		<p>
				
			  <form name="form1" method="post">
					  <div class="form-group">
					    <label for="InputName1">Date</label>
					    <input type="date" name="adate" class="form-control">
					  </div>
					  
					  <div class="form-group">
					    <label for="InputName1">Purpose</label>
					    <input type="text" name="purpose" class="form-control">
					  </div>
					  
					  <input type="submit" name="btn" class="btn btn-theme" value="Submit">
			    <div class="msg"><?php echo $msg; ?></div>
				</form>
				<p>&nbsp;</p>
		 		<div class="spacing"></div>
		 		
			<h3>Appointments</h3>
		 		
	 			<?php
				
				
				$qry=mysql_query("select * from md_appoint where pid='$uname' order by id desc");
				$num=mysql_num_rows($qry);
				
				if($num>0)
				{
				
				?>
		 		<table width="727" height="59" border="1">
                  <tr>
                    <th width="70" class="bg-info">Sno</th>
                    <th width="196" class="bg-info">Appoint Date</th>
                    <th width="105" class="bg-info">Time</th>
                    <th width="133" class="bg-info">Amount</th>
                    <th width="189" class="bg-info">Book Date </th>
                  </tr>
				  <?php
				  $i=0;
				  while($row=mysql_fetch_array($qry))
				  {
				  $i++;
				  ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['adate']; ?></td>
                    <td><?php echo $row['atime']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['rdate']; ?></td>
                  </tr>
				  <?php
				  }
				  
				  ?>
                </table>
				<?php
				}
			
				?>	
				
				
		 		
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
