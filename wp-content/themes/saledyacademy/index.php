<?php
/**
 * The template for displaying Home page.
 *
 * @file      index.php
 * @package   Saledy Academy
 * @author    Saledy Academy
 * 
 **/
?>
<?php get_header();?>
<body data-spy="scroll" class="home-page-body">
    
    <div id="home">
        <video id="video-bg" autoplay="" loop="" muted="" poster="<?php echo get_template_directory_uri(); ?>/images/vid-first-frame.png" media="all and (min-width: 1200px)" style="width: 100%; height: auto; min-width: 100%; overflow: hidden;">
            <source src="//cdn.upgrad.com/marketingvideofullhd.webm" type="video/webm"/>
            <source src="//cdn.upgrad.com/marketingvideofullhd.mp4" type="video/mp4"/>
        </video>
        <script>
            var videoElement = document.getElementById('video-bg');
            if (window.innerWidth >= 1200)
                videoElement.setAttribute('poster', '<?php echo get_template_directory_uri(); ?>/images/vid-first-frame.png');
        </script>
        
        <?php get_template_part('menu'); ?>
        
        <div class="upgrad-description upgrad-description-home">
            <div class="heading-text">
                <h1 class="text-center white-text bold-font text-uppercase">Discover a sharper you</h1>
                <h2 class="text-center white-text light-font">With the most immersive learning experience</h2>
                <div class="text-center apply-button-container"><a href="#programs" class="btn btn-default view-programs-video-home homepage-custom-button">Explore Programs</a></div>
            </div>
        </div>
    </div>
    <div class="boxed">
        <section class="about-upgrad-section hide">
            <div class="about-upgrad-contet-wrapper">
                <h2 class="white-text light-font">UpGrad Talks</h2>
                <p class="white-text light-font">UpGrad is an online higher education platform providing rigorous industry relevant programs designed and delivered in collaboration with world-class faculty and industry. Merging the latest technology, pedagogy and services, UpGrad is creating an immersive learning experience – anytime and anywhere.</p>
            </div>
            <div class="about-upgrad-video-wrapper">
                <div class="about-upgrad-button-wrapper">
                    <a href="#" data-toggle="modal" data-target="#courseVideoModal" class="about-upgrad-btn-image"><img src="<?php echo get_template_directory_uri(); ?>/images/ic_play_circle_filled_white_24px.svg" alt="Watch Video" title="Watch Video"/></a>
                    <a href="#" data-toggle="modal" data-target="#courseVideoModal" class="btn text-uppercase homepage-custom-button btn-watch-video">Watch Video</a></div>
            </div>
        </section>
        <section id="programs" class="courser-card-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-10">
                        <h2 class="light-font mb-1">Our Programs</h2>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <a href="/digital-marketing/" data-courseName="Digital Marketing" data-cohort="December_2016" class="fb-dgtl-mrkt-view-details course-card-box">
                                    <div class="course-card-wrapper">
                                        <div class="course-card-image-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/course_card_dm.png" class="img-responsive"/></div>
                                        <div class="course-card-content-wrapper">
                                            <div class="row">
                                                <div class="col-sm-8"><strong class="bold-font">Digital Marketing</strong>
                                                    <p class="light-font">Learn how to strategise and execute marketing initiatives in the digital age</p>
                                                </div>
                                                <div class="col-sm-4"><span class="logo-text text-uppercase">certified by</span><img src="<?php echo get_template_directory_uri(); ?>/images/iamai_logo.jpg" class="img-responsive"/></div>
                                            </div>
                                        </div>
                                        <div class="course-card-button-wrapper">
                                            <div class="course-date">
                                                <p><span class="bold-font">Starts:</span> December, 2016</p>
                                            </div>
                                            <div class="course-button">
                                                <button type="button" data-courseName="Digital Marketing" data-cohort="December_2016" class="course-card-button fb-dgtl-mrkt-view-details">Know More<span class="arrow-forward"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <a href="/product-management/" data-courseName="Product Management" data-cohort="January_2017" class="course-card-box fb-pm-view-details">
                                    <div class="course-card-wrapper">
                                        <div class="course-card-image-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/course_card_pm.png" class="img-responsive"/></div>
                                        <div class="course-card-content-wrapper"><strong class="bold-font">Product Management</strong>
                                            <p class="light-font">Become a product manager - learn to build and grow world-class consumer products</p>
                                        </div>
                                        <div class="course-card-button-wrapper">
                                            <div class="course-date">
                                                <p><span class="bold-font">Starts:</span> January, 2017</p>
                                            </div>
                                            <div class="course-button">
                                                <button type="button" data-courseName="Product Management" data-cohort="January_2017" class="course-card-button fb-pm-view-details">Know More<span class="arrow-forward"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <a href="/entrepreneurship/" data-courseName="Entrepreneurship" data-cohort="January_2017" class="course-card-box fb-ent-view-details">
                                    <div class="course-card-wrapper">
                                        <div class="course-card-image-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/course_card_swu.png" class="img-responsive"/></div>
                                        <div class="course-card-content-wrapper"><strong class="bold-font">Entrepreneurship</strong>
                                            <p class="light-font">Accelerate your Entrepreneurial journey with the right skills to create a sustainable business</p>
                                        </div>
                                        <div class="course-card-button-wrapper">
                                            <div class="course-date">
                                                <p><span class="bold-font">Starts:</span> January, 2017</p>
                                            </div>
                                            <div class="course-button">
                                                <button type="button" data-courseName="Entrepreneurship" data-cohort="January_2017" class="course-card-button fb-ent-view-details">Know More<span class="arrow-forward"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <a href="/data-analytics/" data-courseName="Data Analytics" data-cohort="March_2017" class="course-card-box fb-da-view-details">
                                    <div class="course-card-wrapper">
                                        <div class="course-card-image-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/course_card_da.png" class="img-responsive"/></div>
                                        <div class="course-card-content-wrapper">
                                            <div class="row">
                                                <div class="col-sm-8"><strong class="bold-font">Data Analytics</strong>
                                                    <p class="light-font">Equip yourself with the right tools, knowledge and industry applications</p>
                                                </div>
                                                <div class="col-sm-4"><span class="logo-text text-uppercase">pg diploma by</span><img src="<?php echo get_template_directory_uri(); ?>/images/iiitb-logo.png" class="img-responsive"/></div>
                                            </div>
                                        </div>
                                        <div class="course-card-button-wrapper">
                                            <div class="course-date">
                                                <p><span class="bold-font">Starts:</span> March 2017</p>
                                            </div>
                                            <div class="course-button">
                                                <button type="button" data-courseName="Data Analytics" data-cohort="March_2017" class="course-card-button fb-da-view-details">Know More<span class="arrow-forward"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="course-card-wrapper">
                                    <div class="course-card-image-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/course_card_ddm.png" class="img-responsive"/></div>
                                    <div class="course-card-content-wrapper">
                                        <div class="row">
                                            <div class="col-sm-8"><strong class="bold-font">Data-Driven Management</strong>
                                                <p class="light-font">Empower yourself to make smarter data-driven decisions instead!</p>
                                            </div>
                                            <div class="col-sm-4"><span class="logo-text text-uppercase">In Association with</span><img src="<?php echo get_template_directory_uri(); ?>/images/gramener.png" class="img-responsive"/></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="notify-me notify-me-box new-notify-me-box">
                                                <form id="data-driven-management" data-cohort="December_2016" class="form-inline notify-me-form material">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-sm-6 notify-input-box-left">
                                                                <input type="text" placeholder="Your email" name="email" class="form-control email-req notify-email"/>
                                                            </div>
                                                            <div class="col-sm-6 notify-input-box-right">
                                                                <input type="text" placeholder="Your number" name="phoneNumber" class="form-control mobile-req"/>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <button type="submit" class="btn btn-primary notify-me-button"> i’m interested</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div role="alert" class="alert success ajax-response hide"><a href="#" data-dismiss="alert" class="close">&times;</a><strong>Success!</strong> We will get in touch with you shortly.</div>
                                                <div role="alert" class="alert failure ajax-response hide"><a href="#" data-dismiss="alert" class="close">&times;</a><strong>Error!</strong> Please try again.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="coming-soon-sticky-wrapper">
                                        <p class="text-uppercase white-text">coming soon</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="course-card-wrapper">
                                    <div class="course-card-image-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/course_card_dtm.png" class="img-responsive"/></div>
                                    <div class="course-card-content-wrapper">
                                        <div class="row">
                                            <div class="col-sm-12"><strong class="bold-font">Digital Technology Management</strong>
                                                <p class="light-font">10 month PG diploma program to help you understand the underlying principles of digital technologies</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="notify-me notify-me-box new-notify-me-box">
                                                <form id="digital-technology-management" data-cohort="Feb_2017" class="form-inline notify-me-form material">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-sm-6 notify-input-box-left">
                                                                <input type="text" placeholder="Your email" name="email" class="form-control email-req notify-email"/>
                                                            </div>
                                                            <div class="col-sm-6 notify-input-box-right">
                                                                <input type="text" placeholder="Your number" name="phoneNumber" class="form-control mobile-req"/>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <button type="submit" class="btn btn-primary notify-me-button"> i’m interested</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div role="alert" class="alert success ajax-response hide"><a href="#" data-dismiss="alert" class="close">&times;</a><strong>Success!</strong> We will get in touch with you shortly.</div>
                                                <div role="alert" class="alert failure ajax-response hide"><a href="#" data-dismiss="alert" class="close">&times;</a><strong>Error!</strong> Please try again.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="coming-soon-sticky-wrapper">
                                        <p class="text-uppercase white-text">coming soon</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="why-upgrad" class="key-points">
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-10">
                        <h2 class="light-font">The UpGrad Experience</h2>
                        <div class="row">
                            <div class="col-sm-4 why-upgrad-row">
                                <div class="row">
                                    <div class="col-sm-12 hidden-xs why-upgrad-cell">
                                        <div class="item text-center"><img src="<?php echo get_template_directory_uri(); ?>/images/homepage-illustration-1.png" class="key-points-image"/></div>
                                    </div>
                                    <div class="col-sm-12 why-upgrad-cell">
                                        <h3 class="bold-font black-text">Expert Instructors &amp; Mentors</h3>
                                        <p class="commom-para black-text">Our instructor panel consists of a mix of renowned industry leaders and accomplished subject matter experts, who not only co-develop the program with us, but also mentor the students.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 why-upgrad-row">
                                <div class="row">
                                    <div class="col-sm-12 hidden-xs why-upgrad-cell">
                                        <div class="item text-center"><img src="<?php echo get_template_directory_uri(); ?>/images/homepage-illustration-2.png" alt="" title="" class="key-points-image"/></div>
                                    </div>
                                    <div class="col-sm-12 why-upgrad-cell">
                                        <h3 class="bold-font black-text">Real Industry Insights</h3>
                                        <p class="commom-para black-text">Our aim is to nurture sharp minds with latest industry practices and cutting-edge curriculum. Each program is delivered using rich online content, real industry case studies and project work.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 why-upgrad-row">
                                <div class="row">
                                    <div class="col-sm-12 hidden-xs why-upgrad-cell">
                                        <div class="item text-center"><img src="<?php echo get_template_directory_uri(); ?>/images/homepage-illustration-3.png" alt="" title="" class="key-points-image"/></div>
                                    </div>
                                    <div class="col-sm-12 why-upgrad-cell">
                                        <h3 class="bold-font black-text">Dedicated Student Support</h3>
                                        <p class="commom-para black-text">Our team of in-house student advisors assists the students on all fronts - be it career counselling or placement assistance or program-related doubts.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="count-numbers-section" class="hide">
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-10">
                        <div class="row">
                            <div class="col-sm-4 text-center number-bloc"><img src="<?php echo get_template_directory_uri(); ?>/images/ic_hourglass_empty_blue_48px.svg"/>
                                <p class="text-uppercase bold-font">hours of content</p><strong>389</strong></div>
                            <div class="col-sm-4 text-center number-bloc"><img src="<?php echo get_template_directory_uri(); ?>/images/ic_person_outline_blue_48px.svg"/>
                                <p class="text-uppercase bold-font">number of instructors</p><strong>42</strong></div>
                            <div class="col-sm-4 text-center number-bloc"><img src="<?php echo get_template_directory_uri(); ?>/images/ic_language_blue_48px.svg"/>
                                <p class="text-uppercase bold-font">countries represented</p><strong>12</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonials" class="homepage-testimonials hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-10">
                        <h2 class="light-font"> UpGrad Community</h2>
                        <div id="course-testimonials" >
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/testimonila-banner-romil-jain.png"/>
                                <div class="testimonial-desc">
                                    <blockquote class="bold-font">StartUp with UpGrad helped me think through all aspects of building a technology product and establishing a business</blockquote>
                                    <p class="user-name">Romil Jain</p><span class="user-desingation">Founder - Gentclub.in</span><a href="#" type="button" data-toggle="modal" data-target="#courseVideoModal" data-video-id="cIw-7fnyxI8" class="btn main-button testimonial-button"><span class="glyphicon glyphicon-play"></span>View Story</a></div>
                            </div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/testimonila-banner-pranav-marwah.png" />
                                <div class="testimonial-desc">
                                    <blockquote class="bold-font">The video bank helped me understand the success and failure stories of reputed entrepreneurs at an early stage. Which also helped me hone my skills.</blockquote>
                                    <p class="user-name">Pranav Marwah</p><span class="user-desingation">Founder - ThinQbate</span><a href="#" type="button" data-toggle="modal" data-target="#courseVideoModal" data-video-id="d8Hy7ZXE2ko" class="btn main-button testimonial-button"><span class="glyphicon glyphicon-play"></span>View Story</a></div>
                            </div>
                            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/testimonila-banner-subha-chandrasekaran.png"/>
                                <div class="testimonial-desc">
                                    <blockquote class="bold-font">This program offers interactions with a lot of people you were reading about.</blockquote>
                                    <p class="user-name">Subha Chandrasekaran</p><span class="user-desingation">Founder - RainKraft</span><a href="#" type="button" data-toggle="modal" data-target="#courseVideoModal" data-video-id="eB2KjSR2ZEw" class="btn main-button testimonial-button"><span class="glyphicon glyphicon-play"></span>View Story</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="upgrad-partners" class="hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-10">
                        <h2 class="light-font">We partner with the Best</h2>
                        <ul class="upgrad-partners-list text-center clearfix">
                            <li>
                                <div class="partner-logo img-1"></div>
                            </li>
                            <li>
                                <div class="partner-logo img-2"></div>
                            </li>
                            <li>
                                <div class="partner-logo img-3"></div>
                            </li>
                            <li>
                                <div class="partner-logo img-4"></div>
                            </li>
                            <li>
                                <div class="partner-logo img-5"></div>
                            </li>
                            <li>
                                <div class="partner-logo img-6"></div>
                            </li>
                            <li>
                                <div class="partner-logo img-7"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="upgrad-blog hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-10">
                        <h2 class="light-font">From the UpGrad blog</h2>
                        <div id="upgrad-blog-slider" data-slick="{"slidesToShow": 3, "slidesToScroll": 3}">
                            <div class="item">
                                <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-8.jpg" alt="Product Managers Who Changed The World" title="Product Managers Who Changed The World"/>
                                    <div class="blog-content">
                                        <p class="text-center">Product Managers Who Changed The World</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-7.jpg" alt="17 Essential Tech Skills For Digital Marketers In 2017" title="17 Essential Tech Skills For Digital Marketers In 2017"/>
                                    <div class="blog-content">
                                        <p class="text-center">17 Essential Tech Skills For Digital Marketers In 2017</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-9.jpg" alt="Why We Killed Our Android Program (And What We Learnt)" title="Why We Killed Our Android Program (And What We Learnt)"/>
                                    <div class="blog-content">
                                        <p class="text-center">Why We Killed Our Android Program (And What We Learnt)</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-4.jpg" alt="The Start-Up Guide: What Do Investors Look For?" title="The Start-Up Guide: What Do Investors Look For?"/>
                                    <div class="blog-content">
                                        <p class="text-center">The Start-Up Guide: What Do Investors Look For?</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-5.jpg" alt="How To Become A [T] Shaped Marketer In The Digital Age?" title="How To Become A [T] Shaped Marketer In The Digital Age?"/>
                                    <div class="blog-content">
                                        <p class="text-center">How To Become A [T] Shaped Marketer In The Digital Age?</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-6.jpg" alt="The Idea Called UpGrad: Why Education Is Serious Business" title="The Idea Called UpGrad: Why Education Is Serious Business"/>
                                    <div class="blog-content">
                                        <p class="text-center">The Idea Called UpGrad: Why Education Is Serious Business</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-1.jpg" alt="How you should budget your Digital Marketing spends" title="How you should budget your Digital Marketing spends"/>
                                    <div class="blog-content">
                                        <p class="text-center">How you should budget your Digital Marketing spends</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-2.jpg" alt="Graduation day of Startup With UpGrad – Class of Nov 2015 : The Journey" title="Graduation day of Startup With UpGrad – Class of Nov 2015 : The Journey"/>
                                    <div class="blog-content">
                                        <p class="text-center">Graduation day of Startup With UpGrad – Class of Nov 2015 : The Journey</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-3.jpg" alt="Decode your way into Product Management" title="Decode your way into Product Management"/>
                                    <div class="blog-content">
                                        <p class="text-center">Decode your way into Product Management</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <br/>
            </div>
        </section>
        <section class="press hidden-xs">
            <div class="container">
                <br/>
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-10">
                        <h2 class="light-font">Press Room</h2>
                        <div class="text-center">
                            <a href="#" target="_blank" class="inc42"><img src="<?php echo get_template_directory_uri(); ?>/images/inc42.png" alt="inc42" width="120" class="img-responsive"/></a>
                            <a href="#" target="_blank" class="etimes"><img src="<?php echo get_template_directory_uri(); ?>/images/etimes.png" alt="Economic Times" width="120" class="img-responsive"/></a>
                            <a href="#" target="_blank" class="nternet"><img src="<?php echo get_template_directory_uri(); ?>/images/nternet.png" alt="Eternet.in" width="120" class="img-responsive"/></a>
                            <a href="#" target="_blank" class="yourstory"><img src="<?php echo get_template_directory_uri(); ?>/images/YourStory.png" alt="YourStory" width="120" class="img-responsive"/></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <a href="#" target="_blank" class="techportal"><img src="<?php echo get_template_directory_uri(); ?>/images/techportal.png" alt="techportal" width="120" class="img-responsive"/></a>
                            <a href="#" target="_blank" class="vccircle"><img src="<?php echo get_template_directory_uri(); ?>/images/vccircle-logo.png" alt="vccircle" width="120" class="img-responsive"/></a>
                            <a href="#" target="_blank" class="indiatoday"><img src="<?php echo get_template_directory_uri(); ?>/images/indiatoday.png" alt="indiatoday" width="120" class="img-responsive"/></a>
                            <a href="#" target="_blank" class="businesstoday"><img src="<?php echo get_template_directory_uri(); ?>/images/businesstoday.png" alt="businesstoday" width="120" class="img-responsive"/></a>
                        </div>
                    </div>
                </div>
                <br/>
                <br/>
            </div>
        </section>
        <section class="join-community visible-xs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="light-font">Join the UpGrad Community</h2>
                        <p class="custom-para light-font">Advance your professional journey with real lessons, actionable insights &amp; expert mentors.</p>
                    </div>
                    <div class="col-sm-12 community-form-wrapper">
                        <form role="form" class="form community-form material">
                            <div class="form-group">
                                <label for="event" class="community-label text-uppercase">which program interests you?</label>
                                <div class="material-input">
                                    <select id="select-course" name="selectCourse" required="required" class="select-course">
                                        <option value="">Choose program</option>
                                        <option value="digital-marketing">Digital Marketing</option>
                                        <option value="product-management">Product Management</option>
                                        <option value="entrepreneurship">UpGrad Entrepreneurship Program</option>
                                        <option value="data-analytics">PG Diploma in Data Analytics</option>
                                        <option value="data-driven-management">Data-Driven Management</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstname" class="community-label text-uppercase">first name</label>
                                <input type="text" name="firstname" required="required" class="community-input form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="email" class="community-label text-uppercase">email address</label>
                                <input type="text" name="email" required="required" class="community-input form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="phonenumber" class="community-label text-uppercase">mobile number</label>
                                <input type="text" name="phoneNumber" required="required" class="community-input form-control"/>
                            </div>
                            <div class="form-group login-form-group margin-none">
                                <button type="submit" class="main-button community-submit-btn text-uppercase text-center">join community</button>
                            </div>
                            <div role="alert" class="alert success ajax-response hide"><a href="#" data-dismiss="alert" class="close">&times;</a><strong>Success!</strong> We will get in touch with you shortly.</div>
                            <div role="alert" class="alert failure ajax-response hide"><a href="#" data-dismiss="alert" class="close">&times;</a><strong>|  Please try again.</strong></div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>


<?php get_footer();?>