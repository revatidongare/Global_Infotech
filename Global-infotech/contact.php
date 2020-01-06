<!DOCTYPE html>
<html lang="en">
<head>
<?php include'contact-head.php'?>
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<?php include'nav.php'?>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="index.html">Home</a></li>
					<li class="menu_item menu_mm"><a href="#">About us</a></li>
					<li class="menu_item menu_mm"><a href="courses.html">Courses</a></li>
					<li class="menu_item menu_mm"><a href="elements.html">Elements</a></li>
					<li class="menu_item menu_mm"><a href="news.html">News</a></li>
					<li class="menu_item menu_mm"><a href="#">Contact</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/banner1.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Contact</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Get in touch</div>

						<div class="contact_form_container">
							<form action="post">
								<input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
								<input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
								<button id="contact_send_btn" type="button" class="contact_send_btn trans_200" value="Submit">send message</button>
							</form>
						</div>
					</div>
						
				</div>

				<div class="col-lg-4">
					<div class="about">
						<div class="about_title">Global Infotech</div>
						<p class="about_text"> This computer institute in lonavala is successfully paving its way through the fields of Programming and Engineering acting as a full proof educational facilitator thus consistently delivering the demand of industry ready professionals.</p>

						<div class="contact_info">
							<ul>
								<li class="contact_info_item">
									<!-- <div class="contact_info_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div> -->
									Sahayadri heights office no. 3 , opp ram mandir , Bhangarwadi , Lonavala , 410401
								</li>
								<li class="contact_info_item">
									<!-- <div class="contact_info_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div> -->
									9823475566
								</li>
								<li class="contact_info_item">
									<!-- <div class="contact_info_icon">
										<img src="images/envelope.svg" alt="contact@vinnovatetechnologies.com">
									</div> -->
									<a href="contact@vinnovatetechnologies.com" style="color:#4682b4;">contact@vinnovatetechnologies.com</a>
								</li>
							</ul>
						</div>

					</div>
				</div>

			</div>

			<!-- Google Map -->

			<div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container">
							
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3778.2508478745194!2d73.41619031500308!3d18.742329067245773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be8010aebf2cc03%3A0x2b710ccf58f47bbe!2sGlobal%20Infotech!5e0!3m2!1sen!2sin!4v1570176955395!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
						
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<?php include'footer.php'?>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>

</body>
</html>

