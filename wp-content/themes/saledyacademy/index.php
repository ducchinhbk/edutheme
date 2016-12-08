<?php
/**
 * The template for displaying Home page.
 *
 * @file      index.php
 * @package   Saledy Media
 * @author    Saledy Media
 * 
 **/
?>
<?php get_header();?>

<section id="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/banner.jpg'); background-size:cover;" class="no-pad">
    <div class="banner-text">
        <div>
            <h2 class="black-text">MAKING<br/>THOUSANDS<br/>OF KIDS GREAT<br/>AT MATH</h2>
            <h5 style="padding-top: 1rem;">2000+ CENTERS ACROSS INDIA</h5>
            <div class="center-align">
                <a href="#" class="cta-btn btn-flat cuemath-yellow white-text" style="margin: 1rem 0;">FIND A CENTER</a>
            </div>
        </div>
    </div>
</section>
<div class="section center-align white-text" style="background: url('<?php echo get_template_directory_uri(); ?>/images/background-01.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="container" style="max-width: 770px;">
        <h4 style="line-height: 130%;">Cuemath is a sophisticated after-school math learning program designed by alumni of IIT, IIM, Stanford, Cambridge and Harvard.</h4>
    </div>
</div>
<section id="cmls" class="container no-pad-bot">
    <h3 class="center-align" style="padding-bottom:2rem;">CUEMATH LEARNING SYSTEM</h3>
    <div class="row">
        <div class="col-sm-6">
            <div class="cmls-group">
                <h5 class="black-text">True Math Learning</h5>
                <p>A curriculum that presents the real beauty of math by going above and beyond what school covers.</p>
            </div>
            <img class="circle" alt="True math learning" src="<?php echo get_template_directory_uri(); ?>/images/truemath-learning.png"/>
        </div>
        <div class="col-sm-6">
            <div class="cmls-group">
                <h5 class="black-text">Technology Enabled</h5>
                <p>Draws on the best of offline and online worlds by supporting paper-based resources with tablet-based online modules.</p>
            </div>
            <img class="circle" alt="Technology enabled" src="<?php echo get_template_directory_uri(); ?>/images/technology-enabled.png"/>
        </div>
        <div class="col-sm-6">
            <div class="cmls-group">
                <h5 class="black-text">Certified Teachers</h5>
                <p>The program is run by teachers who have undergone content, pedagogy and program training.</p>
            </div>
            <img class="circle" alt="Certified Teacher" src="<?php echo get_template_directory_uri(); ?>/images/certified-teachers.png"/>
        </div>
        <div class="col-sm-6">
            <div class="cmls-group">
                <h5 class="black-text">Personalised Attention</h5>
                <p>The program is designed to cater to small batches of students.</p>
            </div>
            <img class="circle" alt="Personalised attention" src="<?php echo get_template_directory_uri(); ?>/images/personalised-attention.png"/>
        </div>
    </div>
    <a href="#" class="cta-btn btn-flat cuemath-yellow white-text">FIND A CENTER</a>
</section>
<div class="divider"></div>
<section id="what-is-covered" class="container no-pad-bot">
    <h3 class="center-align">WHAT IS COVERED?</h3>
    <div class="row">
        <div class="col-sm-4">
            <div class="wis-group" style="border-color:#40c4ff;">
                <h5 class="black-text center-align">School Math</h5>
                <p>Covers the entire curriculum of the CBSE, ICSE and State Boards. Also draws on the US Common Core, UK National and Singapore National Curricula.</p>
            </div>
            <img class="circle" alt="School math" src="<?php echo get_template_directory_uri(); ?>/images/school-math.png"/>
        </div>
        <div class="col-sm-4">
            <div class="wis-group" style="border-color:#ffc000;">
                <h5 class="black-text center-align">Mental Aptitude</h5>
                <p>Builds mathematical thinking by improving verbal, non-verbal, logical and calculation skills through a series of game-like tab-based exercises.</p>
            </div>
            <img class="circle" alt="Mental Aptitude" src="<?php echo get_template_directory_uri(); ?>/images/mental-aptitude.png"/>
        </div>
        <div class="col-sm-4">
            <div class="wis-group" style="border-color:#909090;">
                <h5 class="black-text center-align">Creative Reasoning</h5>
                <p>Encourages out-of-the-box thinking through a series of mathematical puzzles. Children build connections between different domains of math and real life.</p>
            </div>
            <img class="circle" alt="Creative Reasoning" src="<?php echo get_template_directory_uri(); ?>/images/creative-reasoning.png"/>
        </div>
    </div>
    <h5 class="center-align"><a href="/program/" class="grey-text" style="text-decoration: underline;">Know More</a></h5>
    <a href="/parent/signup/" class="cta-btn btn-flat cuemath-yellow white-text">FIND A CENTER</a>
</section>
<div class="divider"></div>
<section id="wicn">
    <h3 class="container center-align">WHY IS CUEMATH NEEDED?</h3>
    <br/><br/>
    <div class="container">
        <div class="row">
            <div class="col-xs-2 valign-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/icons-01.png"/></div>
            <div class="col-xs-10"><p>Studies consistently show kids who excel at Math do better than their peers further on in life.</p></div>
        </div>
        <div class="row">
            <div class="col-xs-2 valign-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/icons-02.png"/></div>
            <div class="col-xs-10"><p>Unfortunately, our education system suits only a handful of students while the rest get labelled as weak in math.</p></div>
        </div>
        <div class="row">
            <div class="col-xs-2 valign-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/icons-03.png"/></div>
            <div class="col-xs-10"><p>We believe that every child has the potential to be proficient in math and build a love for it.</p></div>
        </div>
        <div class="row">
            <div class="col-xs-2 valign-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/icons-04.png"/></div>
            <div class="col-xs-10"><p>Cuemath is designed and structured to make all children fall in love with math and be great at it.</p></div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/cuemath-illustration.png"/><br/><br/>
</section>
<section id="different-from-others" class="hide-on-med-and-down no-pad-top">
    <div class="container">
        <h3 class="center-align" style="padding-bottom:2rem;">OUR STUDENTS ARE DIFFERENT</h3>
        <br/>
        <div class="row">
            <div class="col-xs-3 right-align">
                <h5>Other Students</h5>
                <br/>
                <div>
                    <p class="other-students-heading">Experience math as a collection of unconnected procedures</p>
                </div>
                <div>
                    <p class="other-students-heading">Resort to memorisation due to lack of conceptual understanding</p>
                </div>
                <div>
                    <p class="other-students-heading">End up developing a fear of math</p>
                </div>
            </div>
            <div class="col-xs-6 center-align"><img alt="OUR STUDENTS ARE DIFFERENT" src="<?php echo get_template_directory_uri(); ?>/images/comparison-kid.png"/></div>
            <div class="col-xs-3">
                <h5>Our Students</h5>
                <br/>
                <div>
                    <p class="cuemath-students-heading">Experience the creative side of math</p>
                </div>
                <div>
                    <p class="cuemath-students-heading">Learn to think of math holistically and analytically</p>
                </div>
                <div>
                    <p class="cuemath-students-heading">Fall in love with math</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="mob-different-from-others" class="hide-on-large-only no-pad">
    <h3 class="container center-align" style="padding-bottom:1rem;">OUR STUDENTS ARE DIFFERENT</h3>
    <div class="container" style="padding:1rem 0;">
        <div class="row">
            <div class="col-xs-6">
                <h4>Our Students</h4>
                <br/>
                <div>
                    <p>Experience the creative side of math</p>
                </div>
                <div>
                    <p>Learn to think of math holistically and analytically</p>
                </div>
                <div>
                    <p>Fall in love with math</p>
                </div>
            </div>
            <div class="col-xs-6 valign-wrapper"><img alt="OUR STUDENTS ARE DIFFERENT" src="<?php echo get_template_directory_uri(); ?>/images/kid-colored.png"/></div>
        </div>
    </div>
    <div style="background-color:#f8f8f8; padding:1rem 0;">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h4>Other Students</h4>
                    <br/>
                    <div>
                        <p>Experience math as a collection of unconnected procedures</p>
                    </div>
                    <div>
                        <p>Resort to memorisation due to lack of conceptual understanding</p>
                    </div>
                    <div>
                        <p>End up developing a fear of math</p>
                    </div>
                </div>
                <div class="col-xs-6 valign-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/kid-bw.png"/></div>
            </div>
        </div>
    </div>
</section>
<section class="center-align">
    <h3 class="container cuemath-blue-text" style="font-weight:500;">BECOME A TEACHER WITH CUEMATH</h3>
    <div class="divider cuemath-yellow center-align" style="width:25%; height:2px; margin:auto; margin-top:1rem;"></div><br><br>
    <a href="/teacher/signup/" class="cta-btn btn-flat cuemath-blue white-text">JOIN US AS A TEACHER</a>
</section>
<div class="container" style="line-height:0;">
    <img src="<?php echo get_template_directory_uri(); ?>/images/cuemath-teacher.png" style="display:block; margin:0 auto;"/>
</div>
<div class="section center-align white-text" style="background: url('<?php echo get_template_directory_uri(); ?>/images/background-01.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="container" style="max-width: 500px;">
        <h4 style="line-height: 130%;">Use the Cuemath system to set up a world class math learning centre in your living room!</h4>
    </div>
</div>
<section id="icon-section" class="container">
    <div class="row">
        <div class="col-xs-6 col-sm-3">
            <div class="row">
                <div class="col-xs-4 center-align">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/certified-icon.png"/>
                </div>
                <div class="col-xs-8 valign-wrapper">Get Training and Certification</div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="row">
                <div class="col-xs-4 center-align">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/teaching-icon.png"/>
                </div>
                <div class="col-xs-8 valign-wrapper">Get Teaching Materials</div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="row">
                <div class="col-xs-4 center-align">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/finding-students-icon.png"/>
                </div>
                <div class="col-xs-8 valign-wrapper">Get Support in Finding Students</div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="row">
                <div class="col-xs-4 center-align">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/earning-icon.png"/>
                </div>
                <div class="col-xs-8 valign-wrapper">And Start Earning</div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="center-align">
        <a href="/teacher/signup/" class="cta-btn btn-flat cuemath-blue white-text">JOIN US AS A TEACHER</a>
    </div>
</section>


<?php get_footer();?>