  
    <section class="footer">
        <div class="container">
            <br/>
            <br/>
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="footer-brand-logo-section">
                                <li>
                                    <a href="#" class="footer-brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/UpGrad_red_logo.svg" alt=""/></a>
                                    <p class="light-font">Professional Certification Programs Online</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr class="border-footer"/>
                    <div class="row">
                        <div class="col-sm-3">
                            <ul class="footer-section-list">
                                <li>
                                    <p class="text-uppercase">upgrad</p>
                                </li>
                                <li><a href="#" target="_blank">UpGrad Blog</a></li>
                                <li><a href="#" target="_blank">For Teams</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/careers">Careers</a></li>
                            </ul>
                        </div>
                        <hr class="border-footer-mobile visible-xs-block"/>
                        <div class="col-sm-2">
                            <ul class="footer-section-list">
                                <li class="hidden-xs">
                                    <p>&nbsp;</p>
                                </li>
                                <li><a href="/contact">Contact Us</a></li>
                                <li><a href="/privacy" rel="nofollow">Privacy Policy</a></li>
                                <li><a href="/terms" rel="nofollow">Terms &amp; Conditions</a></li>
                                <li><a href="/sitemap" rel="nofollow">Sitemap</a></li>
                            </ul>
                        </div>
                        <hr class="border-footer-mobile visible-xs-block"/>
                        <div class="col-sm-4">
                            <ul class="footer-section-list">
                                <li>
                                    <p class="text-uppercase">courses</p>
                                </li>
                                <li><a href="/digital-marketing/">Digital Marketing Certification Program</a></li>
                                <li><a href="/product-management/">Product Management Certification Program</a></li>
                                <li><a href="/data-analytics/">PG Diploma in Data Analytics</a></li>
                                <li><a href="/entrepreneurship/">Entrepreneurship Certification Program</a></li>
                            </ul>
                        </div>
                        <hr class="border-footer-mobile visible-xs-block"/>
                        <div class="col-sm-3">
                            <ul class="footer-section-list">
                                <li>
                                    <p class="text-uppercase">connect with us</p>
                                </li>
                                <li><a href="#" target="_blank">Facebook</a></li>
                                <li><a href="#" target="_blank">Twitter</a></li>
                                <li><a href="#" target="_blank">LinkedIn</a></li>
                                <li><a href="#" target="_blank">Google+</a></li>
                                <li><a href="#" target="_blank">YouTube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <br/>
    </section>
    <div id="courseVideoModal" tabindex="-1" role="dialog" aria-labelledby="courseVideoModal" aria-hidden="true" class="customVideoModal modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div type="button" data-dismiss="modal" aria-hidden="true" class="close-button-video"><img src="<?php echo get_template_directory_uri(); ?>/images/close_button_video.png" alt="Close Video"/></div>
                    <div class="modal-video">
                        <div id="player" class="embed-responsive-item"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="loginModal" role="dialog" aria-hidden="true" class="modal fade">
        <div class="modal-dialog modal-md">
            <div class="modal-content login-modal">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                    <h3 class="modal-title text-uppercase light-font">Login</h3></div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <p class="text-center grey-text password-change-confirm"> </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <form class="signinForm form center-block material">
                                    <div class="form-group login-form-group aform-group-login">
                                        <label class="login-input-label text-uppercase">email address</label>
                                        <input name="username" type="email" autofocus="autofocus" required class="login-email form-control input-lg"/>
                                    </div>
                                    <div class="form-group login-form-group aform-group-login">
                                        <label class="login-input-label text-uppercase">password</label>
                                        <input name="password" type="password" required class="login-pass form-control input-lg"/>
                                    </div>
                                    <p class="text-center"><a href="#" class="forgot-password-text forgot-password-link">Forgot Password</a></p>
                                    <div class="text-center center-block">
                                        <div class="form-group login-form-group">
                                            <button type="submit" class="main-button main-button-green login-button-nav btn-rectangle bold-font btn-common-height text-uppercase">Sign In</button>
                                        </div>
                                    </div>
                                    <div role="alert" class="alert success ajax-response hide"><a href="#" data-dismiss="alert" class="close">&times;</a><strong>Success!</strong>We will get in touch with you shortly.</div>
                                    <div role="alert" class="alert failure ajax-response hide"><a href="#" data-dismiss="alert" class="close">&times;</a><strong>Error!</strong>Please try again.</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer login-modal-footer">
                    <div class="text-center">
                        <h4 class="grey-text bold-text">Not a Member Yet ?<a href="#" rel="nofollow" class="register-now-button-apply">Register Now</a></h4></div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div id="registerModal" role="dialog" aria-hidden="true" class="modal fade">
        <div class="modal-dialog modal-md">
            <div class="modal-content register-modal-nav">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                    <h3 class="modal-title text-uppercase light-font">Register Now</h3></div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <form class="registerForm form center-block material">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group register-form-group-nav">
                                                <label class="login-input-label text-uppercase">first name</label>
                                                <input name="firstname" type="text" autofocus="autofocus" required class="login-firstname form-control input-lg"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group register-form-group-nav">
                                                <label class="login-input-label text-uppercase">last name</label>
                                                <input name="lastname" type="text" required class="login-lastname form-control input-lg"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group register-form-group-nav">
                                                <label class="login-input-label text-uppercase">mobile number</label>
                                                <input name="phoneNumber" type="tel" required class="phoneNumber form-control input-lg"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group register-form-group-nav">
                                                <label class="login-input-label text-uppercase">email</label>
                                                <input name="email" type="email" required class="login-email form-control input-lg"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div id="reg-password" class="form-group register-form-group-nav">
                                                <label class="login-input-label text-uppercase">password</label>
                                                <input name="password" type="password" required class="login-pass form-control input-lg"/>
                                            </div>
                                            <br/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group register-form-group-nav">
                                                <button type="submit" class="main-button main-button-green btn-common-height register-button-nav btn-rectangle btn-md bold-font text-uppercase">Sign Up</button>
                                            </div>
                                            <div role="alert" class="alert success ajax-response hide"><a href="#" data-dismiss="alert" class="close">&times;</a><strong>Success! </strong>We will get in touch with you shortly.</div>
                                            <div role="alert" class="alert failure ajax-response hide"><a href="#" data-dismiss="alert" class="close">&times;</a><strong>Error!</strong>Please try again.</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer register-modal-footer">
                    <div class="text-center">
                        <h4 class="grey-text bold-text">Already a member of UpGrad ?<a href="#" class="login-now-button-apply btn-rectangle">Log In</a></h4></div>
                </div>
            </div>
        </div>
    </div>
    <div id="registerModal-apply" role="dialog" aria-hidden="true" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content register-modal-nav">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                    <h2 class="modal-title red-text text-uppercase bold-text">Ready to Start your Entrepeneurial Journey?</h2></div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <p class="grey-text text-center">Please create an account below to sign up with UpGrad and start your application.</p>
                            </div>
                            <div class="col-sm-10 col-sm-offset-1">
                                <br/>
                                <div class="short-course-details-wrapper">
                                    <div class="container-fluid">
                                        <div class="col-sm-4">
                                            <div class="short-course-details course-batch-start text-center"><img src="<?php echo get_template_directory_uri(); ?>/images/clock-red.svg" alt="Batch Starts"/>
                                                <p>Batch Starts</p>
                                                <h4 class="bold-font"> </h4></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="short-course-details course-duration text-center"><img src="<?php echo get_template_directory_uri(); ?>/images/calendar-red.svg" alt="Duration"/>
                                                <p>Duration</p>
                                                <h4 class="bold-font"> </h4></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="short-course-details course-fee text-center"><img src="<?php echo get_template_directory_uri(); ?>/images/rupee-red.svg" alt="Program Fees"/>
                                                <p>Program Fee</p>
                                                <h4 class="bold-font"> </h4></div>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <form class="registerForm-apply-button form center-block material">
                                    <div class="form-group register-form-group-nav">
                                        <input name="firstname" type="text" placeholder="First Name" autofocus="autofocus" required class="login-firstname form-control input-lg"/>
                                    </div>
                                    <div class="form-group register-form-group-nav">
                                        <input name="lastname" type="text" placeholder="Last Name" required class="login-lastname form-control input-lg"/>
                                    </div>
                                    <div class="form-group register-form-group-nav">
                                        <input name="phoneNumber" type="tel" placeholder="Mobile Number" required class="phoneNumber form-control input-lg"/>
                                    </div>
                                    <div class="form-group register-form-group-nav">
                                        <input name="email" type="email" placeholder="Email" required class="login-email form-control input-lg"/>
                                    </div>
                                    <div id="reg-password" class="form-group register-form-group-nav">
                                        <input name="password" type="password" placeholder="Create a Password" required class="login-pass form-control input-lg"/>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="center-block text-center">
                                            <div class="form-group register-form-group-nav">
                                                <button type="submit" class="register-button-nav btn btn-primary btn-rectangle btn-md bold-font btn-common-height">Sign Up &amp; Continue </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="alert" class="alert failure ajax-response hide"><a href="#" data-dismiss="alert" class="close">&times;</a> <strong>|  Please try again.</strong></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer register-modal-footer">
                    <div class="text-center">
                        <h4 class="grey-text bold-text">Already a member of UpGrad ?<a href="#" class="btn-rectangle login-now-button-apply btn-common-height">Log In</a></h4></div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>   
</body>

</html>