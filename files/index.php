<?php
session_start();
include("dbconnect.php");
extract($_POST);


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
<script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://github.com/philnash/react-express-starter.git"></script>
<div>
<!--
const app = express();
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
app.use(pino);
app.post('/api/messages', (req, res) => {
  res.header('Content-Type', 'application/json');

});
app.post('/api/messages', (req, res) => {
  res.header('Content-Type', 'application/json');
  client.messages
    .create({
      from: process.env.TWILIO_PHONE_NUMBER,
      to: req.body.to,
      body: req.body.body
    })
    .then(() => {
      res.send(JSON.stringify({ success: true }));
    })
    .catch(err => {
      console.log(err);
      res.send(JSON.stringify({ success: false }));
    });
});
import React, { Component } from 'react';

class SMSForm extends Component {

}

export default SMSForm;

import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import SMSForm from './SMSForm';

class App extends Component {
  render() {
    return (
	class SMSForm extends Component {
  constructor(props) {
    super(props);
    this.state = {
      message: {
        to: '',
        body: ''
      },
      submitting: false,
      error: false
    };
  }

  // rest of the component
}
   --->
    </div>
	  <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />

          <SMSForm />
        </header>
      </div>
    );
  }
}

export default App;
<script type="text/babel">
export const App = () => {
    const refresh = () => window.location.reload(true)

    return (
        <button onClick={refresh}>Refresh</button>
    )
}
}

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<Football />);


     // ReactDOM.render(<Hello />, document.getElementById('mydiv'))
    </script>
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
          <!--<a class="navbar-brand" href="#"><img src="1.png" height="100" width="100"><h1>Marks Hospital<h1></a>-->
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
				<h3>Welcome to Our Hospital</h3>
				<?php
				$q1=mysql_query("select * from md_addlist order by id desc");
$n1=mysql_num_rows($q1);
if($n1>0)
{
$r1=mysql_fetch_array($q1);
$pid=$r1['pid'];
$q2=mysql_query("select * from md_patient where uname='$pid'");
$r2=mysql_fetch_array($q2);
$mobile=$r2['contact'];

$dd=explode("-",$r1['date1']);
$md=mktime(0,0,0,$dd[1],$dd[0]-1,$dd[2]);
$date1=date("d-m-Y",$md);

$dd2=explode("-",$r1['date2']);
$md2=mktime(0,0,0,$dd2[1],$dd2[0]-1,$dd2[2]);
$date2=date("d-m-Y",$md2);

$dd3=explode("-",$r1['date3']);
$md3=mktime(0,0,0,$dd3[1],$dd3[0]-1,$dd3[2]);
$date3=date("d-m-Y",$md3);

$dd4=explode("-",$r1['date4']);
$md4=mktime(0,0,0,$dd4[1],$dd4[0]-1,$dd4[2]);
$date4=date("d-m-Y",$md4);

$dd5=explode("-",$r1['date5']);
$md5=mktime(0,0,0,$dd5[1],$dd5[0]-1,$dd5[2]);
$date5=date("d-m-Y",$md5);

$message="";
$cdate=date("d-m-Y");
	if($cdate==$date1)
	{
	$message="Tomorrow you have take HeptatisB vaccine in your child";
	}
	else if($cdate==$date2)
	{
	$message="Tomorrow you have take Inactivated Polio vaccine in your child";
	}
	else if($cdate==$date3)
	{
	$message="Tomorrow you have take Varicella vaccine in your child";
	}
	else if($cdate==$date4)
	{
	$message="Tomorrow you have take Rotavirus vaccine in your child";
	}
	else if($cdate==$date5)
	{
	$message="Tomorrow you have take HPV vaccine in your child";
	}
	
	if($message!="")
	{
		echo '<iframe src="http://iotcloud.co.in/testsms/sms.php?sms=emr&name=Consumer&mess='.$message.'&mobile='.$mobile.'" frameborder="0" style="display:none"></iframe>';

	}

}
				
				?>
		 		<p><img src="assets/img/smg-home-img.jpg" width="615" height="481" class="img-responsive"></p>
	 		  <a href="single-post.html">
	 		  <h3 class="ctitle">Hospital</h3>
	 		  </a>
		 		<div dir="ltr">
		 		 
		 		</div>
		 		<div class="spacing"></div>
		 		<h6>SHARE:</h6>
				
		 		<p class="share">
		 			<a href="#"><i class="fa fa-twitter"></i></a>
		 			<a href="#"><i class="fa fa-facebook"></i></a>
		 			<a href="#"><i class="fa fa-tumblr"></i></a>
		 			<a href="#"><i class="fa fa-google-plus"></i></a>		 		
		 		</p>
		 		
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
					<h4>Marks Hospital<h4>
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
		 			<h4>Address</h4>
		 			<div class="hline-w"></div>
		 			<p>
					 Plot No.43, Ramalakshmi Nagar 2nd St,<br/>
					 Ramalakshmi Nagar, K.Pudur, Tamil Nadu 625014,<br/>
		 			 India. <br/>
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
