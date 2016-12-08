<?php
/**
 * The template for contact page.
 *
 **/
 // Template Name: Contact
?>

<?php get_header(); ?>
<header class="st-navbar not-home">
			<nav class="navbar navbar-default navbar-fixed-top clearfix" role="navigation">
				<div class="container"><!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sept-main-nav">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/photos/logo3.png" alt="" class="img-responsive"></a>
					</div>
					
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse main-nav" id="sept-main-nav">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="<?php echo site_url(); ?>">Home</a></li>
							<li><a href="<?php echo site_url(); ?>/about">About us</a></li>
							<li><a href="<?php echo site_url(); ?>/services">Services</a></li>
							<li><a href="<?php echo site_url(); ?>/portfolio">Portfolio</a></li>
							<li class="active"><a href="<?php echo site_url(); ?>/contact">Contact Us</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
</header>
<section class="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h1>Contact</h1>
							
						</div>
						<div class="row mb90">
							<div class="col-md-6">
								<p>Our mission is to deliver amazing results by unlocking opportunities for our clients and our employees simultaneously.
								</p>
								<p> <strong>IF YOU’RE LOOKING FOR: </strong></p>
								<div class="pricing-body">
									<ul class="list_square_blue">
										<li>An offshore development team that has the technical expertise to delivery your vision and make it a reality.</li>
										<li>A quality assurance team that is able to review your project needs, understand the details and properly test our work so we don’t waste your time.</li>
										<li>A full circle development team, that is there to support you through the initial development of your project and for the many years after during your growth and success.</li>
										
									</ul>
								</div>
								<p> We are ready to hear more about your project. Contact us today so we can learn more about you, your company and how we can help you meet your goals.</p>
							</div>
							<div class="col-md-6">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.12224486224!2d106.63921101429733!3d10.801948261677067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175294fe7593643%3A0x75fc2555a7f3e79!2zRS5Ub3duIEVXLCBD4buZbmcgSMOyYSwgcGjGsOG7nW5nIDEzLCBUw6JuIELDrG5oLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1464493344254" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>

						

					</div>
				</div>
			</div>
		</section>
		<section class="contact" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h3>Get in touch</h3>
							<p>Drop us a line</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<form class="contact-form" role="form">
							<input type="text" class="form-control" id="fname" name="fname" placeholder="Full Name"/>
							<input type="email" class="form-control" id="email" name="email" placeholder="E-mail"/>
							<input type="text" class="form-control" id="subj" name="subj" placeholder="Subject"/>
							<textarea id="mssg" name="mssg" placeholder="Your Message" class="form-control" rows="10"></textarea>
							<button class="btn btn-main btn-lg" type="submit" id="send" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Sending..."><i class="fa fa-paper-plane "></i> Send</button>
						</form>
						<div id="result-message" role="alert"></div>
					</div>
					<div class="col-md-6">
						<address>
							<strong>HO CHI MINH CITY.</strong><br>
								Etown 3 building, floor 9
								364 Cong Hoa Street,
								Tan Binh District,
								Ho Chi Minh City, Vietnam<br>
							<abbr title="Phone">P:</abbr> (+84) 933741702
						</address>
					</div>
				</div>
			</div>
</section>

<?php get_footer(); ?>