<?php
/**
 * The template for about us page.
 *
 **/
 // Template Name: About
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
							<li class="active"><a href="<?php echo site_url(); ?>/about">About us</a></li>
							<li><a href="<?php echo site_url(); ?>/services">Services</a></li>
							<li><a href="<?php echo site_url(); ?>/portfolio">Portfolio</a></li>
							<li><a href="<?php echo site_url(); ?>/contact">Contact Us</a></li>
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
							<h1>About</h1>
							
						</div>
						<div class="row mb90">
							<div class="col-md-6">
								<p>Founded in 2015, Saledy Media is young, dedicated mobile/web development & digital marketing company in Ho Chi Minh City (Saigon), Vietnam that deliver outstanding results by providing you with exceptional talent and expertise. 
								 We focus on providing all in-house mobile web development and digital marketing services. 
								 <br>We are an expert in providing ecommerce solutions for clients in Vietnam as well as internationally. Beside building websites, we also help our clients build an impressive marketing image by 
								 creating beautiful corporate identities including logos, business cards, brochures & catalogues just to name a few. We work with the best branding specialists to build brands & branding strategies for businesses.

								</p>
								<p>All of our current websites are fully responsive web designs (RWD) and powered by the most powerful, easy-to-use open-sourced content management system (CMS) such as WordPress, Joomla, e-commerce Mangeto,...
								We have resource enough to be able to work in a wide range of technologies and standards.</p>
								<p>We all work by experience many years in the Media, the Press, Internet and Digital Marketing.
									Loving and having a deep understanding of cultural and people are some of our big advantages.</p>
								<p>We have been delivering excellent work across multiple services to clients and partners in Vietnam, USA, Australia, Israel, Japan, Singapore, Hong Kong and across Europe.</p>
								<div class="section-title mb10">
									<p>Vision</p>
								</div>	
								<p>
									To be a company guided by technological innovations, committed to the highest level of customer satisfaction, contributing to national prosperity and providing its employees with the most favorable working environment possible, thus enabling them to reach their full potential in their professional careers as well as their morale.
								</p>
							</div>
							<div class="col-md-6">
								<img src="<?php echo get_template_directory_uri(); ?>/photos/about.jpg" alt="" class="img-responsive">
							</div>
						</div>
						
						

					</div>
				</div>
			</div>
		</section>
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
		
		<section class="call-us">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3>If you like to work with us</h3>
						<a href="contact" class="btn btn-default-o btn-lg">Call Us Now</a>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>