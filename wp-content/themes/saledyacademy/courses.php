<?php
/**
 * The template for portfolio page.
 *
 **/
 // Template Name: Portfolio
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
							<li class="active"><a href="<?php echo site_url(); ?>/portfolio">Portfolio</a></li>
							<li><a href="<?php echo site_url(); ?>/contact">Contact Us</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
</header>
<section class="reel_i">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="wrap">
						  <blockquote class="citation">
							<p>
							  Our mission is to deliver amazing results 
							  <br>
							  by unlocking opportunities for our clients and our employees simultaneously.
							</p>
						  </blockquote>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="portfolio" id="portfolio">
			<div class="container-fluid ">
				<div class="row">
					<div class="col-md-12 no-padding ">
						<div class="section-title st-center">
							<h1>Portfolio</h1>
							<p>What we have done</p>
							<span>This is a sample collection of our projects. Please contact us for a more detailed portfolio that is closely related to your business.</span>
						</div>
						<div class="filter mb40">
							<form id="filter">
							<fieldset class="group">
								<label class="btn btn-default btn-main"><input type="radio" name="filter" value="all" checked="checked"/>All</label>
								<label class="btn btn-default"><input type="radio" name="filter" value="development"/>Web/App Development</label>
								<label class="btn btn-default"><input type="radio" name="filter" value="digital"/>Digital Marketing</label>
								<label class="btn btn-default"><input type="radio" name="filter" value="brand"/>Branding - Graphic Design</label>
							</fieldset>
							</form><!-- #filter -->
						</div><!-- .filter .mb40 -->

						<div class="grid">
							<figure class="portfolio-item" data-groups='["development"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio-1.png" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["digital"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio-2.png" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["development"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio-3.png" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["digital"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio-4.png" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["digital"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio-5.png" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["development"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio-6.png" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["brand"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio-7.png" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["developmentdevelopment"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio-8.png" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["brand"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio-9.png" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["brand"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio-10.png" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["digital"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio-11.png" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["digital"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio-12.png" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
								</figcaption>
							</figure>
						</div>

					</div>
				</div>
			</div>
		</section>
		<section class="call-us">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3>If you like to work with us</h3>
						<a href="contact.html" class="btn btn-default-o btn-lg">Call Us Now</a>
					</div>
				</div>
			</div>
		</section>
		<section class="contact" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<p>Drop us a line</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<form class="contact-form" role="form">
							<input type="text" class="form-control" id="fname" name="fname" placeholder="Full Name">
							<input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
							<input type="text" class="form-control" id="subj" name="subj" placeholder="Subject">
							<textarea id="mssg" name="mssg" placeholder="Your Message" class="form-control" rows="10"></textarea>
							<button class="btn btn-main btn-lg" type="submit" id="send" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Sending..."><i class="fa fa-paper-plane "></i> Send</button>
						</form>
						<div id="result-message" role="alert"></div>
					</div>
					<div class="col-md-6">
						<p>We are ready to hear more about your project. Contact us today so we can learn more about you, your company and how we can help you meet your goals.</p>
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