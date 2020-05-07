<?php session_start(); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>

<?php
$Success = FALSE;
if (isset($_POST['Submit'])) {
    // $valid = validateContact();
    // if ($valid == '') {
    $Name = htmlentities(str_replace("'", "`", $_POST['Name']));
    $phone = htmlentities(str_replace("'", "`", $_POST['Phone']));
    $email = htmlentities(str_replace("'", "`", $_POST['Email']));
    $subject = htmlentities(str_replace("'", "`", $_POST['Subject']));
    $message = htmlentities(str_replace("'", "`", $_POST['Message']));

    $recaptcha = $_POST['g-recaptcha-response'];
    if (!empty($recaptcha)) {

        $n = "\n";
        $to = "aswin.caxigo@gmail.com";
        $subject = "Feedback";
        $message = "Name : " . $Name . $n . "Phone : " . $phone . $n . "E mail : " . $email . $n . "Subject: " . $subject . $n . "Message : " . $message;
        $from = $email;
        $headers = "X-Priority: 2\nX-MSmail-Priority: high";
        if (mail($to, $subject, $message, $headers, $from)) {
            $Success = TRUE;
            $Message = "Mail Sent Successfully";
            //echo $Message;
            echo "<script> location.href='index.php'; </script>";
            exit;        
        } else {
            $Message = "Mail Sent Failed";
            //echo $Message;
            echo "<script> location.href='index.php'; </script>";
            exit;        
        }
        // } else {
        //     $valid = "Sorry, the CAPTCHA code entered was incorrect!";
        // }
        session_destroy();
        //  }
        // $valid;
    } else {
        echo "<script> location.href='index.php'; </script>";
        exit;    
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Happy Anniversary</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //custom-theme -->
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<!-- stylesheet -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //stylesheet -->
	<!-- online fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<!-- //online fonts -->
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" type="text/css" rel="stylesheet">
	<!-- //font-awesome-icons -->
</head>

<body>
	<div class="agileits_main">
		<!-- header -->
		<!-- banner -->
		<div class="w3_banner">
			<div class="container">
				<div class="slider">
					<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li>
								<div class="banner_text_w3layouts">
									<h3>Dear Achan & Amma</h3>
									<span> </span>
								</div>
							</li>
							<li>
								<div class="banner_text_w3layouts">
									<h3>Silver Jubilee</h3>
									<span> </span>
									<p>It’s not easy to hold on to each other no matter how difficult time gets. You
										have come this far because you loved each other and trusted each other for life.
									</p>
								</div>
							</li>
							<li>
								<div class="banner_text_w3layouts">
									<h3>25 Years</h3>
									<span></span>
									<p>25 years of love… 25 years of care.. yes 25 years! You made it mom-dad! Happy
										silver Jubilee.</p>
								</div>
							</li>
						</ul>
					</div>
					<script src="js/responsiveslides.min.js"></script>
					<script>
						// You can also use "$(window).load(function() {"
						$(function () {
							// Slideshow 4
							$("#slider4").responsiveSlides({
								auto: true,
								pager: true,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
									$('.events').append("<li>before event fired.</li>");
								},
								after: function () {
									$('.events').append("<li>after event fired.</li>");
								}
							});

						});
					</script>
				</div>
			</div>
		</div>
		<!-- menu -->
		<nav class="navbar navbar-inverse ">
			<div class="container">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse top-nav w3l" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav linkEffects linkHoverEffect_11 custom-menu">
						<li class="agile_active"><a href="index.html" class="scroll"><span>home</span></a></li>
						<li><a href="#gallery" class="scroll"><span>gallery </span></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- //menu -->
	</div>
	<!-- //banner -->
	<!-- home -->
	<div class="home_ w3layouts">
		<div class="home_grids_w3">
			<div class="home_main">
				<div id="particles-js">
					<div class="col-md-12 col-sm-12 col-12">
						<video playsinline="playsinline" class="center"  autoplay loop controls>
                            <source src="Video1.mp4" type="video/mp4">
                        </video>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>


		</div>
	</div>
	<!-- //home -->

	<!-- gallery -->
	<div class="gallery_wthree" id="gallery">
		<div class="container">
			<h3 class="title">gallery</h3>
			<div class="gallery_grid agleits_w3layouts">
				<div class="col-md-12  col-sm-12 col-12 grid_w3">
					<div class="sub_grid gallery_w3l">
					
						<div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-c grid_w3l">
							<a class="cm-overlay" href="images/4.jpg">
								<img src="images/4.jpg" alt=" " class="img-responsive" />
								<div class="w3agile-text w3agile-text-small">
								</div>
							</a>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-b grid_w3l">
							<a class="cm-overlay" href="images/15.jpg">
								<img src="images/15.jpg" alt=" " class="img-responsive" />
								<div class="w3agile-text w3agile-text-smal1">
								</div>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="sub_grid gallery_w3l">
					
						<div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-c grid_w3l">
							<a class="cm-overlay" href="images/14.jpg">
								<img src="images/14.jpg" alt=" " class="img-responsive" />
								<div class="w3agile-text w3agile-text-small">
								</div>
							</a>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-b grid_w3l">
							<a class="cm-overlay" href="images/16.jpg">
								<img src="images/16.jpg" alt=" " class="img-responsive" />
								<div class="w3agile-text w3agile-text-smal1">
								</div>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
				<div class="col-md-12  col-sm-12 col-12 grid_w3">
					<div class="sub_grid gallery_w3l">
					
						<div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-c grid_w3l">
							<a class="cm-overlay" href="images/.jpg">
								<img src="images/.jpg" alt=" " class="img-responsive" />
								<div class="w3agile-text w3agile-text-small">
								</div>
							</a>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-b grid_w3l">
							<a class="cm-overlay" href="images/.jpg">
								<img src="images/.jpg" alt=" " class="img-responsive" />
								<div class="w3agile-text w3agile-text-smal1">
								</div>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="sub_grid gallery_w3l">
					
						<div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-c grid_w3l">
							<a class="cm-overlay" href="images/13.jpg">
								<img src="images/13.jpg" alt=" " class="img-responsive" />
								<div class="w3agile-text w3agile-text-small">
								</div>
							</a>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-b grid_w3l">
							<a class="cm-overlay" href="images/7.jpg">
								<img src="images/7.jpg" alt=" " class="img-responsive" />
								<div class="w3agile-text w3agile-text-smal1">
								</div>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //gallery -->
<!-- contact --> 
<div class="contact-w3-agileits" id="contact">
	<div class="contact-main">
		<div class="col-md-12 col-sm-12 col-12 contact-right-w3l">
			<h1 style="color:rgb(12, 12, 36);">Contact Me</h1>
			<br>
			<form action="index.php" method="post">
				<input type="text" class="name" name="Name" placeholder="Name" required="">
				<input type="text" class="name" name="Phone" placeholder="Phone" required="">
				<input type="email" class="name" name="Email" placeholder="Email" required="">
				<input type="text" class="name" name="Subject" placeholder="Subject" required="">
				<textarea name="Message" placeholder="Your Message" required=""></textarea>
				<div class="form-group">
                <div class="g-recaptcha" data-sitekey="6LeL6fMUAAAAADYIx_8f8L9fkbpa3WCK-DJV8iXG"></div>
                </div>
				<input type="submit" name="Submit" value="SEND MESSAGE">
			</form>
		</div>
		
		<div class="clearfix"></div>
  </div>
</div>	
<!-- //contact --> 



	<!-- copy-right -->
	<div class="copy-right agileits-w3layouts">
		<div class="container">
			<div class="social-icons agileits">
				<ul>
					<li><a href="https://www.facebook.com/aswin.kesavan.18" target="_blank"
							class="fa fa-facebook icon icon-border facebook"> </a></li>
				</ul>
				<div class="clearfix"> </div>
			</div>
			<p>© 2020 Happy Anniversary. | Design by AK</p>
		</div>
	</div>
	<!-- //copy-right -->
	<!-- Gallery-plugin -->

	<script src="js/jquery.mobile.custom.min.js"></script>
	<script src="js/jquery.cm-overlay.js"></script>
	<script>
		$(document).ready(function () {
			$('.cm-overlay').cmOverlay();
		});
	</script>
	<!-- //Gallery-plugin -->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/particles.js"></script>
	<script type="text/javascript" src="js/app.js"></script>

	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<script type="text/javascript" src="js/bootstrap.js"></script>


</body>

</html>