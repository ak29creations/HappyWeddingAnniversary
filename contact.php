<?php session_start(); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>

<?php
$Success = FALSE;
if (isset($_POST['Submit'])) {

    $Name = htmlentities(str_replace("'", "`", $_POST['Name']));
    $phone = htmlentities(str_replace("'", "`", $_POST['Phone']));
    $email = htmlentities(str_replace("'", "`", $_POST['Email']));
    $subject = htmlentities(str_replace("'", "`", $_POST['Subject']));
    $message = htmlentities(str_replace("'", "`", $_POST['Message']));

        $n = "\n";
        $to = "aswin.caxigo@gmail.com";
        $subject = "Feedback  Details";
        $message = "Name : " . $Name . $n . "Phone : " . $phone . $n . "E mail : " . $email . $n . "Subject: " . $subject . $n . "Message : " . $message;
        $from = $email;
        $headers = "X-Priority: 2\nX-MSmail-Priority: high";
        if (mail($to, $subject, $message, $headers, $from)) {
            $Success = TRUE;
            $Message = "Mail Sent Successfully";
            echo $Message;
            echo "<script> location.href='index.html'; </script>";
            exit;        
        } else {
            $Message = "Mail Sent Failed";
            echo $Message;
            echo "<script> location.href='contact.php'; </script>";
            exit;        
        }
        
        session_destroy();
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

	
<!-- contact --> 
<div class="contact-w3-agileits" id="contact">
	<div class="contact-main">
		<div class="col-md-12 col-sm-12 col-12 contact-right-w3l">
			<h1 style="color:rgb(12, 12, 36);">Contact Me</h1>
			<br>
			<form action="contact.php" method="post">
				<input type="text" class="name" name="Name" placeholder="Name" required="">
				<input type="text" class="name" name="Phone" placeholder="Phone" required="">
				<input type="email" class="name" name="Email" placeholder="Email" required="">
				<input type="text" class="name" name="Subject" placeholder="Subject" required="">
				<textarea name="Message" placeholder="Your Message" required=""></textarea>
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