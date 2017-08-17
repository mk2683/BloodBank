<?php include ("classes/Controller.php");
$obj=new Controller;
$obj->stop_access_login();
?>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
	$errName=$errEmail=$errNo=$errMessage=$errHuman="";
		$name = $obj->cleaner($_POST['name']);
		$email = $obj->cleaner($_POST['email']);
		$message = $obj->cleaner($_POST['message']);
		$phno=$obj->cleaner($_POST['no']);
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'example@domain.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n Phone no: $phno\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$name) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$email || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$message) {
			$errMessage = 'Please enter your message';
		}
		//Check if phone no has been entered
		if (!$phno) {
			$errNo = 'Please enter your phone no.';
		}
		//Check if simple anti-bot test is correct
		if ($human !=5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman && !$errNo) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<?php
$err_uname=$err_pwd="";
if($_SERVER['REQUEST_METHOD']=="POST"){
		$uname=$obj->cleaner($_POST["uname"]);
		$pwd=$obj->cleaner($_POST["pwd"]);
		
		
			
		if(!filter_var($uname,FILTER_VALIDATE_EMAIL)){
			$err_uname="Enter correct User Id";
			}
			
		if(strlen($pwd)<6 || strlen($pwd)>15){
			$err_pwd="Passowrd should be of 6 to 15 characters";
			}	
			
		if(empty($err_uname) && empty($err_pwd)){
				$res=$obj->login($uname,$pwd);
				if($res!==false){
					$obj->token_genrate($res);
					}
				}
		else{
			echo '<p class="text-danger">Something Error!</p>';
			}		
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Online Blood Bank Management System</title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/footer-distributed.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">

<script src="jquery-3.0.0.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery-1.12.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<style>
  body {
      position: relative; 
  }
  .affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
  .navbar {
      margin-bottom: 0px;
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
  }
  #section1 {padding-top:50px;height:650px; width:100%; color: #000; background-color: #fff;}
  #section2 {padding-top:50px;height:675px; width:100%; color: #000; background-color: #fff;}
  #section3 {padding-top:50px;height:675px; width:100%; color: #000; background-color: #fff;}
  #section41{padding-top:50px;height:675px; width:100%; color: #000; background-color: #fff;}
  #section42{padding-top:50px;height:675px; width:100%; color: #000; background-color: #fff;}
  #section4 {padding-top:50px;height:675px; width:100%; color: #000; background-color: #fff;}
  #section5 {padding-top:50px;height:500px;width:100%; color: #000; background-color: #fff;}
  #section6{padding-top:50px; height:300px; max-height:auto !important; width:100%; float:left;}
  #about2{float:right; padding:5px;}
  #about1{float:left; margin-left:25px; padding:5px;}
  
  #img{ width:250px; height:100px; position:relative; float:left;}
  
  .back_image{background-image:url(assets/image/1.give%20life%20poster.jpg);
	height:600px;
    background-size:cover;}	
	
  </style>
  
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<!-- start upper header #33381e-->
<div class="container-fluid" style="background-color:#EDEDED; padding:8px;">
  <div class="container">
     <div class="row">
         <div class="col-md-4">
         <p class="topp_header_1"> Designed and Managed By Sanjeet </p>
         </div>
         
         <div class="col-md-6">
         
         <div class="row">
         
         <p class="topp_header_2"> 023 1640 1515 </p>
         
         </div>
         </div>
         
         <div class="col-md-2">
         <div class="row">
         
           <button data-target="#login" data-toggle="modal" class="btn btn-success btn-sm category_editor" data-backdrop="static"><span class="glyphicon glyphicon-user"></span> &nbsp;Login</button>
         
         </div>
         </div>
     </div>
  </div>
</div>
<!-- end upper header -->
<!-- header coding-->
<div class="container-fluid" style="background-color:#fff;height:350px; width:auto;">
    <img src="assets/image/bloodbanksoftware.jpg" alt="Blood Bank System" class="img-responsive">
</div>
<!--end of header coding-->

<!--starting nav bar coding-->

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="360">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Blood Bank System</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1"> <span class="glyphicon glyphicon-home" > </span> Home </a></li>
          <li><a href="#section2"> <span class="glyphicon glyphicon-arrow-down" > </span> About us </a></li>
          <li><a href="#section3"> <span class="glyphicon glyphicon-picture" > </span> Gallery </a></li>
          <li><a href="#section41"> <span class="glyphicon glyphicon-th" > </span> Services </a></li>
          <li><a href="#section4"> <span class="glyphicon glyphicon-envelope" > </span> Blog  </a></li>
          <li><a href="#section5"> <span class="glyphicon glyphicon-earphone" > </span> Contact us  </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>    

<!--end of nav bar coding-->
<!--starting section coding-->

<!--Starting home coding-->

<div id="section1">
  <h1 style="margin-left:10px; color:#0A6C2B; font-family:lobster;">Home</h1><br>
  <!-- start banner background  coding -->
	<div class="back_image" width="100%">
  		<div class="row" style="margin-right:0px;">
     		<div class="col-md-12">
    <!--    <p style="border:2px #0F6406 solid; font-size:25px; background-color:#2CAD0D; color:#FFFFFF; float:right; font-family:Lobster;">  Request a Quote </p>-->
          	<div class="row">
             <div class="col-md-5" style="margin-top:475px; margin-left:10px;">
       <!--      <h1 style="color:#FCFCFC; font-size:60px; margin-top:120px; font-family:Lobster;"> Services That Work For You and Your Health </h1>
             <br>
             <p style="color:#FCFCFC;"> Welcome to 270 yards to meters, our post which answers the question how many meters in 270 yards. If youhave been looking for 270 yds to meters, then you are right here, </p>   -->
             
             <br>
             <button type="button" class="btn btn-group-lg btn-warning"><a target="_self" href="#section5" style="color:#FFFFFF;"> Contact Us </a></button> &nbsp; &nbsp;&nbsp; <button  type="button" class="btn btn-group-lg btn-success"><a target="_self" href="#section41" style="color:#FFFFFF;"> Our Services </a></button>
             </div>
          	</div>
     	  </div>
  		</div>
	</div>

	<!-- end banner background coding -->
</div>

<!--ending home coding-->

<!--Starting about coding-->
<div id="section2" class="container-fluid">
  <h1 style="margin-left:10px; color:#0A6C2B; font-family:lobster;">About Us</h1><br>
  <div class="row">
  			<div id="about1" class="col-md-7"  style=" box-shadow: 10px 10px 5px grey; #boxshadow {
    position: relative;
    box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
    padding: 10px;
    background: white;
}

#boxshadow img {
    width: 100%;
    border: 1px solid #8a4419;
    border-style: inset;
}

#boxshadow::after {
    content: '';
    position: absolute;
    z-index: -1; /* hide shadow behind image */
    box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3); 
    width: 70%; 
    left: 15%; /* one half of the remaining 30% */
    height: 100px;
    bottom: 0;
}">
	<div id="p42" style="font-size:14px; font-weight:bold; font-style:italic; color:#1E5F88;">Lorem ipsum dolor sit amet, consecte turelit. onsecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada .Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada.Lorem ipsum dolor sit amet, consecte turelit.Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada. Lorem ipsum dolor sit amet, consecte turelit. onsecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada .Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada.Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada. Lorem ipsum dolor sit amet, consecte turelit. onsecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada .Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada.Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada. Lorem ipsum dolor sit amet, consecte turelit. onsecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada .Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada.Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada. Lorem ipsum dolor sit amet, consecte turelit. onsecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada .Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada.Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada. Lorem ipsum dolor sit amet, consecte turelit. onsecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada .Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada.<br>
</div>
	<div id="p43"><a href="#" style="display:block;
		list-style:none;
		text-decoration:none;
		text-align:center;
		color:#B92527;
		background:#C1C1C1;
		width:150px;
		max-width:100%;
		margin:0px auto;
		line-height:30px;
		margin-bottom:10px;"><strong>Read more</strong></a></div>
			</div>
	<div id="about2" class="col-md-4"><img src="assets/image/give-blood-background_1057-1029.jpg" class="img-responsive" height="600px"></div>
    </div>
</div>
<!--ending about coding-->

<!--Starting gallery coding-->
<div id="section3">
  <h1 style="margin-left:10px; color:#0A6C2B; font-family:lobster;">Gallery</h1><br>
 
 	 <div class="container-fluid">
		<div class="row">

	<div class="col-sm-12 col-xs-12 styl">
    
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
        <!-- indicators -->
        <ol class="carousel-indicators">
        	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        
        	<!-- wrapper for slide -->
        	<div class="carousel-inner">
            
            	<div class="item active">
                <img src="assets/image/Blood BANNER1.jpg" alt="banner">
                </div>
                
                <div class="item">
                <img src="assets/image/blood-donors-day-poster-slogans.jpg" alt="banner">
                </div>
                
                <div class="item">
                <img src="assets/image/blood-donors-day-slogans-and-quotes.jpg" alt="banner">
                </div>
                
                <div class="item">
                <img src="assets/image/blood-drive-banner-1.jpg" alt="banner">
                </div>
            
            </div>
            
            <!--  left and right carousel -->
            
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        
              </div>
    
    	  </div>

		</div>
	</div>
</div>
<!--Ending gallery coding-->

<!--starting services coding-->
<div id="section41">
  <h1 style="margin-left:10px; color:#0A6C2B; font-family:lobster;"> Services </h1><br>
	<div class="container">
     <div class="row">
     
        <div class="col-md-4" style=" border-radius:5%;">
        <img src="assets/image/slide-4.jpg" width="100%" class="img-responsive" style="width:100%; height:147px;">
        <br>
         <h3 style="color:#0A6C2B; font-family:lobster;"> Donor Registration </h3>
         <br>
          <p style="font-family:Gloria; color:#1B6E0E; font-size:16px;"> Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada. Lorem ipsum dolor sit amet, consecte turelit. onsecte turelit. Vestibulum nec odio  ipsumer Suspe ndisse cursus malesuada .Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada.</p><br>
          <button data-target="#register" data-toggle="modal" class="btn btn-group-lg btn-danger" data-backdrop="static"> &nbsp;Register Here</button>
                    
        </div>
        
         <div class="col-md-4" style=" border-radius:5%;">
        <img src="assets/image/Tue2014_BackgroundBokeh_3.jpg" class="img-responsive" style="width:100%; height:147px;">
        <br>
         <h3 style="color:#0A6C2B; font-family:lobster;"> Need Blood </h3>
         <br>
          <p style="font-family:Gloria; color:#1B6E0E; font-size:16px;"> Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada. Lorem ipsum dolor sit amet, consecte turelit. onsecte turelit. Vestibulum nec odio  ipsumer Suspe ndisse cursus malesuada .Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada.</p><br>
          <button data-target="#need" data-toggle="modal" class="btn btn-group-lg btn-danger" data-backdrop="static"> &nbsp;Apply Here</button>
        </div>
        
         <div class="col-md-4" style=" border-radius:5%;">
         <img src="assets/image/thumb (1).jpg" class="img-responsive" style="width:100%; height:147px;"><br>
         <h3 style="color:#0A6C2B; font-family:lobster;"> Search Donor </h3><br>
         <p style="font-family:Gloria; color:#1B6E0E; font-size:16px;"> Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada. Lorem ipsum dolor sit amet, consecte turelit. onsecte turelit. Vestibulum nec odio  ipsumer Suspe ndisse cursus malesuada .Lorem ipsum dolor sit amet, consecte turelit. Vestibulum nec odio ipsumer Suspe ndisse cursus malesuada.</p><br>
         <button type="button" class="btn btn-group-lg btn-danger"><a target="_self" href="#" style="color:#FFFFFF;"> Search Here </a></button><br>
     </div>
  </div>
	</div>
</div>
<!--Ending services coding-->

<!--Starting Latest Blog coding-->
<div id="section4" class="container-fluid">
 <h1 style="margin-left:10px; color:#0A6C2B; font-family:lobster;">Latest Blog</h1>
  <p>kcdlkcjbdvhvsdvcsdbkdsjvjkdabvwavcahwbckwdyvjadvavglv</p>
</div>
<!--Ending Latest Blog Coding-->

<!--Starting contact us coding-->
<div id="section5" class="container-fluid">
 <h1 style="margin-left:10px; color:#0A6C2B; font-family:lobster;">Contact Us</h1><br>
  <div class="row">
  			<div class="col-md-6">
				<form class="form-horizontal" role="form" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" enctype="multipart/form-data">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name">
							<?php //<span class="err"><?=$errName;</span> ?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com">
                           <?php //<span class="err"><?=$errEmail;></span>?>
						</div>
					</div>
                    <div class="form-group">
						<label for="no" class="col-sm-2 control-label">Phone Number</label>
						<div class="col-sm-10">
							<input type="tel" maxlength="10" class="form-control" id="no" name="no" placeholder="Enter your phone no">
                          <?php //<span class="err"><?php echo $errNo;</span>?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
						<textarea class="form-control" rows="4" placeholder="Write your message here" name="message"></textarea>
						<?php //<span class="err"><?=$errMessage;</span>?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php //<span class="err"><?=$errHuman;</span>?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
						<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php  if(!empty($result)){?>
                   		<span><?=$result?></span>
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
				   <?php }?>	
						</div>
					</div>
				</form> 
			</div>
            <br>
	   <div class="col-md-4" style="float:right;"><img src="assets/image/bloodbankleft (1).jpg" class="img-responsive"></div>
    </div>

</div>

<!--Ending contact us coding-->

<br><br>
<!--Start footer coding-->
<div id="section6">

	 <div class="row">
        <div class="col-md-12">
		<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Company<span>logo</span></h3>

				<p class="footer-links">
					<a href="#section1">Home</a>
					·
					<a href="#section2">About</a>
					·
					<a href="#section3">Gallery</a>
					·
					<a href="#section41">Service</a>
					·
					<a href="#section4">Blog</a>
					·
					<a href="#section5">Contact</a>
				</p>

				<p class="footer-company-name">Company Name &copy; 2017</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Dwarka Sec-16c</span> Delhi, India</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
       </div>
	</div>
</div>
<!--End footer coding-->

 <!-- Login Modal -->
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
          <form id="login" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
                	<div class="form-group has-success">
                    	<input type="text" class="form-control" name="uname" placeholder="Enter Username/Email_ID">
                        <span class="err"><?= $err_uname?></span>
                    </div>
                    <div class="form-group has-success">
                    	<input type="text" class="form-control" name="pwd" placeholder="Enter Password">
                        <span class="err"><?= $err_pwd?></span>
                    </div>
                    <div class="form-group has-success">
                    	<input type="submit" value="Login" class="btn btn-primary">
                    </div>
                </form>
      </div>
    </div>

  </div>
</div>

<!--End login modal-->

<!-- donor register Modal -->
<div id="register" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Donor Registration</h4>
      </div>
      <div class="modal-body">
          <form id="login" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
                	<div class="form-group has-success">
                    	<input type="text" class="form-control" name="uname" placeholder="Enter Username/Email_ID">
                        <span class="err"><?= $err_uname?></span>
                    </div>
                    <div class="form-group has-success">
                    	<input type="text" class="form-control" name="pwd" placeholder="Enter Password">
                        <span class="err"><?= $err_pwd?></span>
                    </div>
                    <div class="form-group has-success">
                    	<input type="submit" value="Sign up!" class="btn btn-primary">
                    </div>
                </form>
      </div>
    </div>

  </div>
</div>

<!--End donor registrer modal-->

<!-- Need Blood(Apply) Modal -->
<div id="need" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Need Blood</h4>
      </div>
      <div class="modal-body">
          <form id="login" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
                	<div class="form-group has-success">
                    	<input type="text" class="form-control" name="uname" placeholder="Enter Username/Email_ID">
                        <span class="err"><?= $err_uname?></span>
                    </div>
                    <div class="form-group has-success">
                    	<input type="text" class="form-control" name="pwd" placeholder="Enter Password">
                        <span class="err"><?= $err_pwd?></span>
                    </div>
                    <div class="form-group has-success">
                    	<input type="submit" value="Apply" class="btn btn-primary">
                    </div>
                </form>
      </div>
    </div>

  </div>
</div>

<!--End Apply modal-->

<!--End of program-->

<!--Stylesheet css coding-->

<style>
.topp_header_1{
	    color: #7f9a48;
    font-style: italic;
    float: left;
    margin: 3px 0px;
	font-size: 19px;
	}
	
.topp_header_2{
	    color:#abb488;
    font-style: italic;
	font-size: 19px;
	margin-left:375px;}
	
	
.topp_header_3{
	    color:#abb488;;
    font-style: italic;
	margin-left:100px;
	font-size: 19px;
	float:right;
	}		
<!--start about-->

#p43 a{
		display:block;
		list-style:none;
		text-decoration:none;
		text-align:center;
		color:#B92527;
		background:#C1C1C1;
		width:150px;
		max-width:100%;
		margin:0px auto;
		line-height:30px;
		margin-bottom:10px;	
	}
	
#p43 a:hover{
		color:#005984;
		background:#ADD1D8;	
	}
<!--Ending about-->
/* In our site, the footers are fixed to the bottom of the page */

footer{
	position: relative;
	bottom: 0px;
}

@media (max-height:800px){
	footer { position: static; }
}

</style>

<!---->

<!--end of section coding-->

<!--Starting scrollspy coding-->
<script>

$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});

</script>
<!--end of scrollspy coding-->
</body>
</html>
