<?php
/**
 * The template for services page.
 *
 **/
 // Template Name: Services
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
							<li class="active"><a href="<?php echo site_url(); ?>/services">Services</a></li>
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
							<h1>Services</h1>
							
						</div>
						<div class="row mb90">
							<div class="col-md-6">
								<p>Saledy Media is your dedicated digital solution studio. As a leading mobile/web development & digital marketing in Vietnam, we offer a complete array of services that help companies from startup to large corporations get noticed and success.

								</p>
								<div class="pricing-body">
									<ul class="list_square_blue">
										<li>Mobile/Web Development</li>
										<li>Digital Marketing</li>
										<li>Strategic Branding Planning</li>
										<li>Content Strategy</li>
										<li>Graphic design</li>
										<li>Logo & corporate identities design.</li>
										<li>Social media</li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<img src="<?php echo get_template_directory_uri(); ?>/images/service.jpg" alt="" class="img-responsive">
							</div>
						</div>

						

					</div>
					
				</div>
			</div>
		</section>
		<section class="section dark">
			<div class="container">
			
				<ul class="nav nav-tabs alt">
					<li class="active btn btn-main"><a href="#webdesign" data-toggle="tab">MOBILE/WEB DEVELOPMENT</a></li>
					<li class="btn btn-main"><a href="#webdevelopment" data-toggle="tab">DIGITAL MARKETING</a></li>
					<li class="btn btn-main"><a href="#webmaintenance" data-toggle="tab">CONTENT MARKETING</a></li>
					<li class="btn btn-main"><a href="#branding" data-toggle="tab">CI BRANDING</a></li>
					<li class="btn btn-main"><a href="#seo" data-toggle="tab">SEO</a></li>
				</ul>
						
				<div class="tab-content alt">
					<div class="tab-pane active" id="webdesign">
						<div class="section-content row">        
							<div class="col-sm-6 animated fadeInLeft visible" data-animation="fadeInLeft">
								<img src="<?php echo get_template_directory_uri(); ?>/images/web-app-design.jpg" class="img-responsive" alt="process 3">
							</div>
							<div class="col-sm-6 animated fadeInRight visible" data-animation="fadeInRight">
								<br>
								<article class="center">
									<h3><span class="highlight">MOBILE/WEB DEVELOPMENT</span></h3>
									<p>The design can be either yours or ours, someone still needs to breath life into those beautiful concepts, and that’s where Saledy Media’s development service comes in place. We are standardized for SaaS (Software	as a Service), RIA (Rich Internet Application), Visual Web Application, Web 2.0, and AJAX application development and maintenance. With us, you	just need to focus on your idea and business and leave us the technical parts.</p>
									<p>We bring you the best Website Design and Custom Service of building, migrating, customizing and optimizing your websites	with popular CMS frameworks like Joomla, WordPress, Magento, Shopify,	Pretashop, LightSpeed POS Store, Spreecommerce, etc. Your website will run fast, stably and be	optimized for marketing purposes like SEO and SEM.</p>
									<p>We bring you the best iOS Development Service and Android Development Service with both native app development and cross-platform framework development	by using Ionic, Meteor, PhoneGap and Titanium. Especially, our iOS team is always up-to-date with latest technologies, frameworks and platforms. We have been working with MapBox, Indoor, Stripe and etc.</p>
								</article>
							</div>
						</div>
					</div>
						
					<div class="tab-pane" id="webdevelopment">
						<div class="section-content row">                
							<div class="col-sm-6 pull-right animated fadeInRight visible" data-animation="fadeInRight">
								<img src="<?php echo get_template_directory_uri(); ?>/images/phone.jpg" class="img-responsive pull-right" alt="process 2">
							</div>
							<div class="col-sm-6 animated fadeInLeft visible" data-animation="fadeInLeft">
								<br><br>
								<article class="center">
									<h3><span class="highlight">DIGITAL MARKETING</span></h3>
									<p>To us, Content is the King. We move the audience by our Story telling skill.Based on your objectives, we will provide
										cost-per-penny campaign model, all are tracked, analyzed and optimized. Beyond the short-term Marketing, let’s build a long-run community for consumers! We provide not only digital solution but the long-term strategy.</p>
									<p>Our digital services include: </p>
									<ul class="list_square_blue">
										<li>Digital Advertising</li>
										<li>Search Engine Optimization (SEO)</li>
										<li>Search Engine Marketing (SEM)</li>
										<li>Email Marketing</li>
										<li>Facebook Marketing/ Social Media</li>
										<li>Media Buying</li>
										
									</ul>
									     
								</article>
							</div>
						</div>
					</div>

					<div class="tab-pane" id="webmaintenance">
						<div class="section-content row">                
							<div class="col-sm-6 pull-right animated fadeInRight visible" data-animation="fadeInRight">
								<img src="<?php echo get_template_directory_uri(); ?>/images/web-maintenance.jpg" class="img-responsive pull-right" alt="process 2">
							</div>
							<div class="col-sm-6 animated fadeInLeft visible" data-animation="fadeInLeft">
								<br><br>
								<article class="center">
									<h3><span class="highlight">CONTENT MARKETING</span></h3>
									<p>To us, Content is the King. We move the audience by our Story telling skill.Based on your objectives, we will provide
										cost-per-penny campaign model, all are tracked, analyzed and optimized. Beyond the short-term Marketing, let’s build a long-run community for consumers! We provide not only digital solution but the long-term strategy.</p>
									<p>Our content services include: </p>
									<ul class="list_square_blue">
										<li>Advertising & PR Planning</li>
										<li>Content Planning & Copywriting</li>
										<li>Creative Concept & Production</li>
										<li>Photos Shooting & Photo-telling</li>
										<li>Digital Magazine & Online News</li>
										
									</ul>
									     
								</article>
							</div>
						</div>
					</div>	
					<div class="tab-pane" id="branding">
						<div class="section-content row">        
							<div class="col-sm-6 animated fadeInLeft visible" data-animation="fadeInLeft">
								<img src="<?php echo get_template_directory_uri(); ?>/images/branding.jpg" class="img-responsive" alt="process 3">
							</div>
							<div class="col-sm-6 animated fadeInRight visible" data-animation="fadeInRight">
								<br>
								<article class="center">
									<h3><span class="highlight">BRANDING & CORPORATE IDENTITY DESIGN</span></h3>
									<p>Branding is an art of knowing how your prospective clients see you and your business for the first time. They perceive your company’s image and form a psychological opinion and state of mind before getting to know you in detail. A great brand combines design, logo, marketing strategy and a message to evoke emotions and convey your company’s values to those inside and outside the organization. Saledy Media understands the essential elements to capture the spirit of your company in order to maximize the brand’s reach-out to the key target audience. </p>
									
									<p>We provide:</p>
									<ul class="list_square_blue">
										<li>Corporate Identity / Logo Design</li>
										<li>Corporate Rebranding / Branding Guideline Creation</li>
										<li>Business Card Design</li>
										<li>Letterhead Design</li>
										<li>Office Template Design (.doc,.ppt,.xls)</li>
										<li>E-mail Signature Design</li>
										<li>Web Icon Design</li>
										<li>Advertisement Design</li>
										<li>Facility Branding</li>
									</ul>
								</article>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="seo">
						<div class="section-content row">        
							<div class="col-sm-6 animated fadeInLeft visible" data-animation="fadeInLeft">
								<img src="<?php echo get_template_directory_uri(); ?>/images/uplab-seo-service.jpg" class="img-responsive" alt="process 3">
							</div>
							<div class="col-sm-6 animated fadeInRight visible" data-animation="fadeInRight">
								<br>
								<article class="center">
									<h3><span class="highlight">SEO/Social Media</span></h3>
									<p>We provide:</p>
									<ul class="list_square_blue">
										<li>on-page SEO</li>
										<li>link development (link building)</li>
										<li>website SEO audit</li>
										<li>SEO content writing</li>
										<li>code optimaztion</li>
										<li>keyword analysis</li>
										<li>Facebook Advertising</li>
										<li>Copywriting</li>
										
									</ul>
								</article>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="reel_i __assesment">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="wrap">
						  <div class="section">
							<h2 class="rich_h1">Let your project done by our successful agile methodology</h2>
						  </div>
						  <div class="section reel_aside">
							<div class="section steps">
							  <div class="steps_i __dot">Requirement Analysis</div>
							  <div class="steps_line"></div>
							  <div class="steps_i __arrow">Design</div>
							  <div class="steps_line"></div>
							  <div class="steps_i __arrow">Development</div>
							  <div class="steps_line"></div>
							  <div class="steps_i __arrow">Quality Assurance</div>
							  <div class="steps_line"></div>
							  <div class="steps_i __arrow">Deployment</div>
							  <div class="steps_line"></div>
							  <div class="steps_i __dot">Release to market!</div>
							</div>
							<div class="section">
							  <a class="btn __white" href="<?php echo site_url(); ?>/contact" style="width: 160px">Apply</a>
							</div>
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