
<?PHP
session_start();
include("connect.php");
if(isset($_POST['login']))
{
$un=$_POST['email'];
$pass=$_POST['pwd'];

if($un=="" && $pass=="")
{
echo "<script>alert('feild are empty');</script>";	
	}
	
if($un=="guest@mgh.com" && $pass=="guest")
{
$fet=mysql_query("select * from reg_details where email='$un' and upass='$pass'");
$row=mysql_fetch_array($fet);

if($row['email']!="" && $row['upass']!="")
{
$_SESSION['username']=$row['email'];
header('Location:Guest-index.php');	
	}
	}	
else
{
$fet=mysql_query("select * from reg_details where email='$un' and upass='$pass'");
$row=mysql_fetch_array($fet);

if($row['email']!="" && $row['upass']!="")
{
$_SESSION['username']=$row['email'];
header('Location:gallery.php');	
	}
else
{
echo "<script>alert('Wrong username or password');</script>";	
	}		
	}	
	}

?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Home-Massachussets General Hospital</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/images/favicon.ico" rel="icon">
        <link rel="stylesheet" type="text/css" href="assets/css/master.css">	

    </head>

    <body id="home" data-offset="80" data-target=".navbar" data-spy="scroll">

        <div id="page-preloader"><span class="spinner"></span></div>
        <!-- Navigation -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <header class="header">
            <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container relative-nav-container">
                    <a class="toggle-button visible-xs-block" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-navicon"></i>
                    </a>
                    <a class="navbar-brand scroll" href="index.php">
                        <img class="normal-logo hidden-xs" src="assets/images/logo.png" alt="logo"/>
                        <img class="inverse-logo hidden-xs" src="assets/images/logo-w.png" alt="logo"/>
                        <img class="visible-xs-block" src="assets/images/logo-sign2.png" width="40" height="44" alt="logo"/>
                    </a>
                    <ul class="nav navbar-nav navbar-right nav-icons wrap-user-control">
                        <li><a id="search-open" href="#fakelink"><i class="fa fa-search"></i></a></li>
                        <li class="open-signup">
                            <a href="#fakelink"><i class="fa fa-user"></i></a>
                            <div class="wrap-login-signup">
                                <div role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs-alt nav-tabs-one" role="tablist">
                                        <li role="presentation" class="active"><a  href="#signup" aria-controls="signup" role="tab" data-toggle="tab">Sign Up</a></li>
                                        <li role="presentation"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Log In</a></li>
                                        
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active text-center" id="signup">
                                            <div class="signup-content">
                                                <h5>Register Patient</h5>
                                                
                                                <span class="or-sep"></span></br>
                                                <form class="form" action="Registration.php" target="new" >
                                              
                                                    <div class="form-group">
													
                                                        <input type="submit" name="newacc" class="submit-button form-control" value="Create new account" />
														
                                          </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="login">

                                            <div class="signup-content">
                                                <h5>Your Account</h5>
                                                <form class="form" name="login" action="" method="post">
                                                    <div class="form-group">
                                                        <input placeholder="Login" type="text" name="email" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input placeholder="Password" type="text" name="pwd" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" name="login" class="submit-button form-control" value="Login" />
                                                    </div>
                                                </form>
                                                <span class="forgot">Forgot <a href="#">password or login</a>?</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="navbar-collapse collapse floated" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-with-inside clearfix navbar-right with-border">  <li class=" ">
                                <a href="index.php">Home</a>
                                <div class=" wrap-inside-nav">
                                    
                                </div>
                            </li>

                            <li>

                                <a href="About-2.html">About Us</a>

                                <div class=" wrap-inside-nav">

                                    

                                </div>

                            </li>

                            <li>

                                <a href="service.html">Services</a>

                                <div class="wrap-inside-nav">

                                    
                                </div>

                            </li>

                            <li><a href="News.html">News & Events</a>
                            <div class="wrap-inside-nav">

                                    
                                </div>
                                </li>

                            <li>

                                <a href="#">Gallery</a>

                                <div class=" wrap-inside-nav">

                                    <div class=" inside-col">

                                        <ul class="inside-nav">

                                            <li><a href="gallery.html">Hospital Gallery</a></li>

                                            <li><a href="gallery-2.html">Doctor's gallery</a></li>

                                            

                                           

                                        </ul>

                                    </div>

                                </div>

                            </li>

                            
                            <li>
                                <a href="#">Contacts</a>
                                <div class=" wrap-inside-nav">
                                    <div class="inside-col">
                                        <ul class="inside-nav">
                                            <li><a href="contact-2.html">Contact Info</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="navbar-search">
                    <div class="container">
                        <form role="search">
                            <div class="input-group">
                                <input type="text" placeholder="Type your search..." class="form-control" autocomplete="off">
                                <span class="input-group-btn">
                                    <button type="reset" class="btn search-close" id="search-close">
                                        <i class="fa fa-close"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </header><!--/.header -->


        <!-- Home - Header -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <section class="home-header dark">
            <div class="container">	
                <div class="row">
                    <div class="col-sm-6 col-xs-10">
                        <h2 class="wow fadeInUp"  data-wow-delay="1s" data-wow-duration="1.5s">It's Our Service that Establishes Loyalty,Not our Contracts</h2>
                        <p class="large wow fadeInUp" data-wow-delay="1.8s" data-wow-duration="1.5s">Massachussets General Hospital is committed to a patient-first philosophy that combines care, compassion and clinical excellence with a focus on customer service – in short, quality health care..</p>
                        <!--				<a class="btn btn-primary btn-short">Get srarted now</a>
                                                        <a class="btn btn-warning btn-short">Discover More</a>				-->
                        <div class="row wow fadeInUp"  data-wow-delay="2.6s" data-wow-duration="1.5s">
                            <div class="col-md-5">
                                <a class="btn btn-primary btn-short">Get srarted now</a></div>
                            <div class="col-md-5">
                                <a class="btn btn-warning btn-short">Discover More</a></div>  
                        </div>
                    </div>
                </div><!--row-->
            </div><!--container-->
        </section>

        <!-- Home - About -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <section class="about-product" id="about">
            <div class="container">	
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <header class="section-header">
                            <p class="subhead">About Our Hospital</p>
                            <h2>Interface Benefits</h2>
                        </header>	
                    </div>
                </div><!--row-->
                <div class="row">
                    <div class="col-md-3 col-sm-offset-1 wow fadeInUp" data-wow-duration="2s" >
                        <article>
                            <h5>Mobile version</h5>
                            <p>Now you can access your Account Information,Reports and Pay online Via Phone.</p>
                        </article>
                    </div>
                    <div class="col-md-3 col-sm-offset-1 wow fadeInUp" data-wow-duration="2s" >
                        <article>
                            <div class="tline"></div>
                            <h5>Affordable price</h5>
                            <p>We are providing Facilities which can be easily provided to everyone in very affordable Fees.</p>
                        </article>
                    </div>
                    <div class="col-md-3 col-sm-offset-1 wow fadeInUp" data-wow-duration="2s" >
                        <article>
                            <h5>Goal Achievement</h5>
                            <p>The goal of Massachussets General Hospital for Health Care Quality & Innovation is to improve outcomes, create more satisfied patients and better value, all across the Worldwide hospitals</p>
                        </article>
                    </div>
                </div><!--row-->
                <div class="row">
                    <div class="col-md-12">
                        <img class="img-responsive" src="assets/images/placehold/1140x400.png" alt="pic" />
                    </div>
                </div><!--row-->
            </div><!--container-->
        </section>

        <!-- Home - Features -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <section class="features dark  parallax-section-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="2s">
                        <article>
                            <span aria-hidden="true" class="icon-trophy"></span>
                            <h5>Award's</h5>
                            <p>selected as National Healthcare Awards program</p>
                        </article>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="2s">
                        <article>
                            <span aria-hidden="true" class="icon-users" ></span>
                            <h5>Financial Goal </h5>
                            <p>Can achieve this goal in the short term by focusing on appropriate utilization</p>
                        </article>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="2s">
                        <article>
                            <span aria-hidden="true" class="icon-speedometer"></span>
                            <h5>Clinical Goals</h5>
                            <p>Should assess the health of community to determine the greatest needs.</p>
                        </article>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <article>
                            <span aria-hidden="true" class="icon-shield"></span>
                            <h5>Targetting Goals</h5>
                            <p>By setting specific financial, clinical and patient engagement goals.</p>
                        </article>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <article>
                            <span aria-hidden="true" class="icon-graduation"></span>
                            <h5>Graduated Doctors</h5>
                            <p>Arrange a get together for newly Doctrate students for appreciation.</p>
                        </article>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="2s">
                        <article>
                            <span aria-hidden="true" class="icon-game-controller"></span>
                            <h5>Friendly Enviroment</h5>
                            <p>Always gives a friendly enviroment to patients and staff</p>
                        </article>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="2s">
                        <article>
                            <span aria-hidden="true" class="icon-layers"></span>
                            <h5>Quality Patient Care</h5>
                            <p>Design and Implement new programs to improve Patient Satisfaction.</p>
                        </article>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="2s"  data-wow-delay="0.3s">
                        <article>
                            <span aria-hidden="true" class="icon-support"></span>
                            <h5>Cost Effectiveness</h5>
                            <p>Affordable Charges/Fee for every one with easy understanding fee chart.</p>
                        </article>
                    </div>
                </div><!--row-->
            </div><!--container-->
        </section>

        <!-- Home - Steps -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <section class="steps" id="section-steps">
            <a class="striped-icon divider scroll" href="#section-steps">
                <i class="fa fa-chevron-down"></i>
            </a>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <header class="section-header wow fadeInUp" data-wow-duration="2">
                            <p class="subhead">Quick results</p>
                            <h2>Access anywhere Worldwide</h2>
                            <p class="large">We are providing this facility to our registered patients to pay online and on the other end they can get their reports by mail as a complete description of patient.</p>
                        </header>	
                    </div>
                </div><!--row-->
                <div class="row">
                    <div class="col-md-4 wow fadeInUp " data-wow-duration="2s">
                        <article>
                            <div class="striped-icon-small" >1</div>				
                            <img src="assets/images/icons/icon-1.svg" alt="icon" />
                            <h5>Pay Online Bills</h5>
                            <p>Now you can pay your bills online via using our Android or Iphone Application.</p>
                        </article>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <article>
                            <div class="striped-icon-small">2</div>
                            <img src="assets/images/icons/icon-2.svg" alt="icon" />
                            <h5> Patient Medical History</h5>
                            <p>Now you can get Patient history easily without waiting for hours and hours by using our online Web.</p>
                        </article>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                        <article>
                            <div class="striped-icon-small">3</div>
                            <img src="assets/images/icons/icon-3.svg" alt="icon" />
                            <h5>Online Feedback</h5>
                            <p>You can Submit your Reviews and Comments online via your account</p>
                        </article>
                    </div>
                </div><!--row-->
            </div><!--container-->
        </section>

        <!-- Home - Analytics-->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <section class="analytics" id="services">
            <a class="striped-icon divider scroll" href="#services">
                <i class="fa fa-chevron-down"></i>
            </a>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <header class="section-header wow fadeInUp" data-wow-duration="2s">
                            <p class="subhead">Graphical Interface</p>
                            <h2>Detailed Analytics</h2>
                            <p class="large">The Ratio of massachussets General Hospital is growing day by day because of our friendly staff and affordable services and soon we will be on the top and we always try our best to serve our best.</p>
                        </header>	
                    </div>
                </div><!--row-->

                <div class="row">
                    <div class="col-md-6   wow fadeInUp" data-wow-duration="2s">
                        <div id="accordion-one" role="tablist" aria-multiselectable="true">			
                            <div class="panel panel-default panel-alt-two"  >

                                <div class="panel-heading active" role="tab" id="headingOne">
                                    <h5 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-one" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="accordion-icon">
                                                <span class="stacked-icon">
                                                    <i class="fa fa-rocket"></i>
                                                </span>
                                            </span>
                                            By organising team buildings
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        We do play a lot, but we also work hard and like to challenge ourselves with proposing new projects that will further better our skills and connect us as a team. We value continuous education and professional growth, encourage attending conferences to improve their skills.
                                    </div>
                                </div>

                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h5 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion-one" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">	
                                            <span class="accordion-icon">
                                                <span class="stacked-icon">
                                                    <i class="fa fa-quote-left"></i>
                                                </span>
                                            </span>
                                            We are also each others extended family
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        We always take care of our patients and try our best to make a family and friendly environments,So they can recover very soon and continue to live their life as they were living before.                                     </div>
                                </div>

                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h5 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion-one" href="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">	
                                            Explore further even when you believe
                                            <span class="accordion-icon">
                                                <span class="stacked-icon">
                                                    <i class="fa fa-flag"></i>
                                                </span>
                                            </span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                       In addition to the original consortium, SCH has since attracted some of Pakistan’s top doctors and surgeons. It is a top grade facility that rivals the finest hospitals in Europe and USA.
                                    </div>
                                </div>						  
                            </div><!--panel-->
                        </div><!--accordion-->
                    </div>
                    <div class="col-md-6">
                        <div id="graph-line"></div>
                    </div>
                </div><!--row-->		
            </div><!--container-->
        </section>

        <!-- Home - Video-->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <section class="video dark parallax-section-1">
            <div class="video-bg"></div>
            <article>
                <div class="container">
                    <div class="row">
                        <div id="custom">
                            <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=FIV3dDdY1Fw&feature=youtu.be',containment:'#custom',autoPlay:true, mute:true, startAt:0, opacity:1}"></a>

                        </div>

                        <div class="col-md-5">
                            <h2 class="text-right">Our Youtube</h2>
                        </div>
                        <div class="col-md-2">
                            <div class="striped-icon-xlarge">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <h2 class="text-left">youtube.com/MassGeneralHospital</h2>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <!-- Home - Team-->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <section class="team home-team">
            <div class="container">	
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <header class="section-header   wow fadeInUp" data-wow-duration="2s">
                            <p class="subhead">Team Work</p>
                            <h2>We Are Sincere With Our Profession</h2>
                            <p class="large">Wether it's a headache,fever or  flu,no illness stands a chance against a doctor like us,  yes we are proffessionals.</p>
                        </header>	
                    </div>
                </div><!--row-->
            </div><!--container-->

            <!-- Content for Popover  -->
            <div class="hidden" id="member-1">
                <div class="popover-body">
                    <div class="member-info">
                        <h5>Dr.Dave </h5>
                        <p class="large">GECONOLOGIST</p>
                    </div>
                    <a href="#fakelink" class="member-contact"><span aria-hidden="true" class="icon-envelope"></span></a>
                </div>
            </div>
            <div class="hidden" id="member-2">
                <div class="popover-body">
                    <div class="member-info">
                        <h5> Dr.Sarah </h5>
                        <p class="large">Orthopedic Surgeon</p>
                    </div>
                    <a href="#fakelink" class="member-contact"><span aria-hidden="true" class="icon-envelope"></span></a>
                </div>
            </div>
            <div class="hidden" id="member-3">
                <div class="popover-body">
                    <div class="member-info">
                        <h5> Dr.James </h5>
                        <p class="large">Neurologist Surgeon</p>
                    </div>
                    <a href="#fakelink" class="member-contact"><span aria-hidden="true" class="icon-envelope"></span></a>
                </div>
            </div>
            <div class="hidden" id="member-4">
                <div class="popover-body">
                    <div class="member-info">
                        <h5> Dr.Zohaib Lasson </h5>
                        <p class="large">Urology Surgeon</p>
                    </div>
                    <a href="#fakelink" class="member-contact"><span aria-hidden="true" class="icon-envelope"></span></a>
                </div>
            </div>
            <div class="hidden" id="member-5">
                <div class="popover-body">
                    <div class="member-info">
                        <h5> Dr.Rick </h5>
                        <p class="large">Cardiologist Surgeon</p>
                    </div>
                    <a href="#fakelink" class="member-contact"><span aria-hidden="true" class="icon-envelope"></span></a>
                </div>
            </div>
            <div class="hidden" id="member-6">
                <div class="popover-body">
                    <div class="member-info">
                        <h5> Dr.Lisa </h5>
                        <p class="large">Skin Specialist</p>
                    </div>
                    <a href="#fakelink" class="member-contact"><span aria-hidden="true" class="icon-envelope"></span></a>
                </div>
            </div>
            <div class="hidden" id="member-7">
                <div class="popover-body">
                    <div class="member-info">
                        <h5> Dr.Sam </h5>
                        <p class="large">General Surgeon</p>
                    </div>
                    <a href="#fakelink" class="member-contact"><span aria-hidden="true" class="icon-envelope"></span></a>
                </div>
            </div>

            <div class="scroll-container">
                <div class="scroll-content">
                    <div class="scroll-wrapper">
                        <div class="team-member" >
                            <img src="assets/images/team/member-1.png" alt="member" data-popover-content="#member-1" data-toggle="popover"/>
                        </div>
                        <div class="team-member">
                            <img src="assets/images/team/member-2.png" alt="member"  data-popover-content="#member-2" data-toggle="popover"/>
                        </div>
                        <div class="team-member">
                            <img src="assets/images/team/member-3.png" alt="member"  data-popover-content="#member-3" data-toggle="popover"/>
                        </div>
                        <div class="team-member">
                            <img src="assets/images/team/member-4.png" alt="member"  data-popover-content="#member-4" data-toggle="popover"/>
                        </div>
                        <div class="team-member">
                            <img src="assets/images/team/member-5.png" alt="member"  data-popover-content="#member-5" data-toggle="popover"/>
                        </div>
                        <div class="team-member">
                            <img src="assets/images/team/member-6.png" alt="member" data-popover-content="#member-6" data-toggle="popover" />
                        </div>
                        <div class="team-member">
                            <img src="assets/images/team/member-7.png" alt="member"  data-popover-content="#member-7" data-toggle="popover"/>
                        </div>
                        <div class="team-member">
                            <img src="assets/images/team/member-8.png" alt="member"  data-popover-content="#member-3" data-toggle="popover"/>
                        </div>
                        <div class="team-member">
                            <img src="assets/images/team/member-9.png" alt="member"  data-popover-content="#member-1" data-toggle="popover"/>
                        </div>
                        <div class="team-member">
                            <img src="assets/images/team/member-10.png" alt="member"  data-popover-content="#member-4" data-toggle="popover"/>
                        </div>
                    </div><!--scroll-wrapper-->
                </div>
                <div class="scroll-slider-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-8 col-md-offset-2">
                                <div class="scroll-slider"></div>		
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container team-description-container">	
                <div class="row">
                    <div class="col-md-6">
                        <div class="team-description   wow fadeInUp no-padding" data-wow-duration="2s">
                            <h3>What We Do</h3>
                            <p>We helps you make medical decisions with confidence. We provide access to the best medical minds in the world so you can be sure you have the right diagnosis and treatment plan. We also help you find specialists and get expert answers to medical questions. </p>
                            <p>As a physician referral service, our job is to provide simple and convenient doctor access to attorneys. We do not get directly involved with any case. All communication takes place between the doctors and the attorneys, but we are always available to talk to either party if any discrepancies arise.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Progress -->
                        <ul class="skills">
                            <li data-percent="80"  class="skills-animated">
                                <span>Neurologist</span>
                                <div class="progress">
                                    <div class="progress-percent">
                                        <span class="progress-bar-tooltip">80</span>%
                                    </div>
                                </div>
                            </li>
                            <li data-percent="60" class="skills-animated">
                                <span>General Surgeon</span>
                                <div class="progress">
                                    <div class="progress-percent">
                                        <span class="progress-bar-tooltip">60</span>%
                                    </div>
                                </div>
                            </li>
                            <li data-percent="90" class="skills-animated">
                                <span>Cardiologist</span>
                                <div class="progress">
                                    <div class="progress-percent">
                                        <span class="progress-bar-tooltip">90</span>%
                                    </div>
                                </div>
                            </li>
                            <li data-percent="70" class="skills-animated">
                                <span>Cancer Specialist Department</span>
                                <div class="progress">
                                    <div class="progress-percent">
                                        <span class="progress-bar-tooltip">70</span>%
                                    </div>
                                </div>
                            </li>
                        </ul>			
                    </div>
                </div><!--row-->
            </div><!--container-->				

        </section>

        <!-- Home - Gallery -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ --><!-- Home - Price -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ --><!-- Home - Testimonials -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <section class="testimonials" id="testimonials">
            <a class="striped-icon divider scroll" href="#testimonials">
                <i class="fa fa-chevron-down"></i>
            </a>
            <div class="container">	
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <header class="section-header wow fadeInUp" data-wow-duration="2s">
                            <p class="subhead">Our Reviews</p>
                            <h2>What Patient's Say about us?</h2>
                            <p class="large">Reviews Of Our Doctor's And Faculty Team By Our Patients.</p>
                        </header>	
                    </div>
                </div><!--row-->

                <div id="testimonials-carousel">
                    <div class="reviews">
                        <div class="client left">
                            <p class="large comment">Its glad to meet such a good Dr. who treat me . </p>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#fakelink">
                                        <img class="avatar media-object " src="assets/images/placehold/60x60 (3).png" alt="avatar" />
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Chris</h5>
                                    <p>Cardio Patient</p>
                                </div>
                            </div>
                        </div>
                        <div class="client right">
                            <p class="large comment">Thanks for giving us a good and friendly environment. </p>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#fakelink">
                                        <img class="avatar media-object " src="assets/images/placehold/60x60 (2).png" alt="avatar" />
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Denis Svetlov</h5>
                                    <p>Cancer Patient</p>
                                </div>
                            </div>
                        </div>
                    </div><!--reviews-->
                    <div class="reviews">
                        <div class="client left">
                            <p class="large comment">Its good to see Professional and Experienced Doctor.</p>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#fakelink">
                                        <img class="avatar media-object " src="assets/images/placehold/60x60.png" alt="avatar" />
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">John </h5>
                                    <p>Neurology Patient</p>
                                </div>
                            </div>
                        </div>
                        <div class="client right">
                            <p class="large comment">I am really happy that i am back at home, just because of my doctor and his experience</p>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#fakelink">
                                        <img class="avatar media-object " src="assets/images/placehold/60x60 (1).png" alt="avatar" />
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Clark</h5>
                                    <p>Dental Patient</p>
                                </div>
                            </div>
                        </div>
                    </div><!--reviews-->
                </div><!--carousel-->

                <div class="brands">
                    <div class="row no-gutter">
                        <div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-duration="2s">
                            <div class="brand-logo"> <img src="assets/images/sponsorslogo/logo1.png" alt="brand" />
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-duration="2s">
                            <div class="brand-logo"> <img src="assets/images/sponsorslogo/logo2.png" alt="brand" />
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-duration="2s">
                            <div class="brand-logo"> <img src="assets/images/sponsorslogo/logo3.png" alt="brand" />
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-duration="2s">
                            <div class="brand-logo"> <img src="assets/images/sponsorslogo/logo4.png" alt="brand" />
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-duration="2s">
                            <div class="brand-logo"> <img src="assets/images/sponsorslogo/logo5.png" alt="brand" />
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-duration="2s">
                            <div class="brand-logo"> <img src="assets/images/sponsorslogo/logo6.png" alt="brand" />
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-duration="2s">
                            <div class="brand-logo"> <img src="assets/images/sponsorslogo/logo7.png" alt="brand" />
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-duration="2s">
                            <div class="brand-logo"> <img src="assets/images/sponsorslogo/logo8.png" alt="brand" />
                            </div>
                        </div>
                    </div><!--row-->
                </div><!--brands-->
            </div><!--container-->
        </section>

        <!-- Home - Twitter -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <section class="twitter dark parallax-section-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <article>
                            <i class="fa fa-twitter"></i>
                            <div id="twitter-carousel">
                                <div class="twitter-feed">
                                    <p>Had a great brainstorming session with Dr James.it was really helpfull for me</p>
                                    <footer>@jame_michael <cite> 1 days ago</cite></footer>
                                </div>
                                <div class="twitter-feed">
                                    <p> "Basically everything in healthcare is broken, and if you can fix even a small part, it's better than a photo sharing app". 
                                     </p>
                                    <footer>@Sandy_mustache <cite> 2 days ago</cite></footer>
                                </div>
                                <div class="twitter-feed">
                                    <p>"Study shows overreliance on CT and MRI for headache has doubled in 11 years" .</p>
                                    <footer>@Sam <cite> 3 days ago</cite></footer>
                                </div>
                                <div class="twitter-feed">
                                    <p> "The importance of sleep in the #medical community ". 
                                     </p>
                                    <footer>@jackie <cite> 4 days ago</cite></footer>
                                </div>
                                <div class="twitter-feed">
                                    <p> "Your best assurance of excellence in health care is to have a questioning student looking over your doctor's shoulder." 
                                     </p>
                                    <footer>@prince <cite> 5 days ago</cite></footer>
                                </div>
                                <div class="twitter-feed">
                                    <p> "Doctors are quite frustrated by poor usability of digital healthcare tools". 
                                     </p>
                                    <footer>@honey <cite> 6 days ago</cite></footer>
                                </div>
                                <div class="twitter-feed">
                                    <p> "Why one state isn't worried about a rise in hospital medical errors". 
                                     </p>
                                    <footer>@decent_guy <cite> 7 days ago</cite></footer>
                                </div>
                                <div class="twitter-feed">
                                    <p> "A Day in the Life of @KendrickLamar in New York". 
                                     </p>
                                    <footer>@robin <cite> 8 days ago</cite></footer>
                                </div>
                                <div class="twitter-feed">
                                    <p> "Welcome home... For the last time.". 
                                     </p>
                                    <footer>@sam <cite> 9 days ago</cite></footer>
                                </div>
                                <div class="twitter-feed">
                                    <p> "Jimmy and I are excited to officially be a part of the Apple family. I can't wait to get started on the new saga in my life and career!". 
                                     </p>
                                    <footer>@romeo <cite> 10 days ago</cite></footer>
                                </div>
                                <div class="twitter-feed">
                                    <p> "No place like home. @KingJames big things ahead.". 
                                     </p>
                                    <footer>@sarah <cite> 11 days ago</cite></footer>
                                </div>
                                <div class="twitter-feed">
                                    <p> "I'm excited about the potential opening of Cuba. The next time I perform THIS is where I'd like to be". 
                                     </p>
                                    <footer>@maria <cite> 12 days ago</cite></footer>
                                </div>
                            </div>
                        </article>
                    </div>
                </div><!--row-->
            </div><!--container-->
        </section>

        <!-- Home - Blog -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <section class="blog" id="blog">
            <a class="striped-icon divider scroll" href="#blog">
                <i class="fa fa-chevron-down"></i>
            </a>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <header class="section-header  wow fadeInUp" data-wow-duration="2s">
                            <p class="subhead">Subscribe Us</p>
                            <h2>News on the Go !!</h2>
                            <p class="large">Now you can get our e-mail alerts related to our Events on the go...</br>Subscribe to our E-Mail Alert</p>
                        </header>	
                    </div>
                
                <div class="row  wow fadeInUp" data-wow-duration="2s">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="subscribe">
                            <form class="form-inline clearfix">
                                <input type="email" class="form-control pull-left"  placeholder="Enter email">
                                <button type="submit" class="btn btn-primary btn-round pull-right hidden-xs">Subscribe</button>
                                <button type="submit" class="btn btn-primary btn-round-small pull-right visible-xs-block">
                                    <i class="fa fa-pencil fa-lg"></i>
                                </button>
                            </form>
                        </div>	
                    </div>
                </div><!--row-->
            </div><!--container-->
        </section>

        <!-- Home - Application -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <section class="application" id="application">
            <a class="striped-icon divider scroll" href="#application">
                <i class="fa fa-chevron-down"></i>
            </a>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <header class="section-header  wow fadeInUp" data-wow-duration="2s">
                            <p class="subhead">always at hand</p>
                            <h2>Mobile App Download</h2>
                            <ul class="list-inline text-center">
                                <li>
                                    <a href="https://play.google.com/store/books/details/Cynthia_Gabriel_Natural_Hospital_Birth?id=OGAnd0zNdIkC"><img src="assets/images/googleplay-logo.png" alt="button" /></a>
                                </li>
                                <li>
                                    <a  href="http://store.apple.com/us"><img src="assets/images/appstore-logo.png" alt="button" /></a>

                                </li>
                            </ul>
                        </header>	
                    </div>
                </div><!--row-->
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="app-features left-features  wow fadeInUp" data-wow-duration="2s">
                            <h5>Cloud Computing</h5>
                            <p>Cloud computing is the result of evolution and adoption of existing technologies and paradigms.</p>
                            <div class="striped-icon-large">
                                <span aria-hidden="true" class="icon-cloud-download"></span>
                            </div>				
                        </div>
                        <div class="app-features left-features  wow fadeInUp" data-wow-duration="2s">
                            <h5>User Friendly</h5>
                            <p>goal is primarily for an understandable, user-friendly interface.</p>
                            <div class="striped-icon-large">
                                <span aria-hidden="true" class="icon-check"></span>
                            </div>				
                        </div>
                        <div class="app-features left-features  wow fadeInUp" data-wow-duration="2s">
                            <h5>Retina Display</h5>
                            <p>Our App is created on full Retina display mode,user can take advantage of 4k technology.</p>
                            <div class="striped-icon-large">
                                <span aria-hidden="true" class="icon-eye"></span>
                            </div>				
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm hidden-xs  wow fadeInUp" data-wow-duration="2s">
                        <img class="app-demo" src="assets/images/placehold/350x620.png" alt="hand" />
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                        <div class="app-features right-features  wow fadeInUp" data-wow-duration="2s">
                            <h5>Kepp an Eye on your Data</h5>
                            <p>Now You can keep an eye on your details like reports and appointments through our Application</p>
                            <div class="striped-icon-large">
                                <span aria-hidden="true" class="icon-camera"></span>
                            </div>				
                        </div>
                        <div class="app-features right-features  wow fadeInUp" data-wow-duration="2s">
                            <div class="striped-icon-large">
                                <span aria-hidden="true" class="icon-link"></span>
                            </div>				
                            <h5>Easy Connectivity</h5>
                            <p>Easily coonectivity by having user id and password registered by Hospital Management.</p>
                        </div>
                        <div class="app-features right-features  wow fadeInUp" data-wow-duration="2s">
                            <h5>Settings</h5>
                            <p>You can change setting whenever you want by sellecting setting tab in Application.</p>
                            <div class="striped-icon-large">
                                <span aria-hidden="true" class="icon-settings"></span>
                            </div>				
                        </div>
                    </div>

                </div><!--row-->

            </div><!--container-->
        </section>

        <!-- Footer - Tabs -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <footer class="home-footer dark-map" id="contact">
            <div class="container">
                <!-- Nav tabs -->
                <ul class="nav  nav-tabs-alt nav-tabs-two nav-tab-inverse" role="tablist">
                    <li role="presentation" class="active"><a href="#contact-info" aria-controls="contact-info" role="tab" data-toggle="tab">Contact info</a></li>
                    <li role="presentation"><a href="#service-inquiry" aria-controls="service-inquiry" role="tab" data-toggle="tab">Service Inquiry</a></li>
                    <li role="presentation"><a href="#on-map" aria-controls="on-map" role="tab" data-toggle="tab">View on Map</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <!-- Contact Info -->
                    <!-- ++++++++++++++++++++++++++++++++++++++++ -->
                    <div role="tabpanel" class="tab-pane active" id="contact-info">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="footer-header">	
                                    <h2>Contact info</h2>
                                    <p class="large">you can contact us any time 24/7 online,Our Customer Service department is ready to help you out & If you are experiencing a medical emergency, dial 911 for help,Thanks.</p>
                                </div>	
                            </div>				
                        </div><!--row-->
                        <div class="row">
                            <div class="col-md-4">
                                <article class="contact-item">
                                    <div class="dotted-line hidden-sm hidden-xs"></div>
                                    <div class="striped-icon-xlarge">
                                        <span aria-hidden="true" class="icon-pointer"></span>
                                    </div>
                                    <h5>Address</h5>
                                    <p>55 Fruit Street,Boston, MA 02114</p>
                                </article>
                            </div>
                            <div class="col-md-4">
                                <article class="contact-item">
                                    <div class="dotted-line hidden-sm hidden-xs"></div>
                                    <div class="striped-icon-xlarge">
                                        <span aria-hidden="true" class="icon-call-end"></span>
                                    </div>
                                    <h5>Phones</h5>
                                    <p>+ 617-726-2000,  +617-724-8800</p>
                                </article>
                            </div>
                            <div class="col-md-4">
                                <article class="contact-item">
                                    <div class="striped-icon-xlarge">
                                        <span aria-hidden="true" class="icon-envelope"></span>
                                    </div>
                                    <h5>E-mail</h5>
                                    <p>mgs@hosp.com,  support@mgs.com</p>
                                </article>
                            </div>
                        </div>
                    </div><!--tabpanel-->

                    <!-- Service Inquiry -->
                    <!-- ++++++++++++++++++++++++++++++++++++++++ -->
                    <div role="tabpanel" class="tab-pane" id="service-inquiry">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="footer-header">	
                                    <h2>Service Inquiry</h2>
                                </div>	
                            </div>				
                        </div><!--row-->
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3 contact-form">
                                <div id="response"></div>
                                <form  method="post" action="sendEmail.php" name="contact-form" id="contact-form">			             
                                    <div><input type="text" placeholder="Subject" value="" name="subject"  id="subject" class="form-control"></div>
                                    <div><input type="text" placeholder="Your name" value="" name="name" id="name" class="form-control"></div>
                                    <div><input type="email" placeholder="Your email" value="" name="email" id="email" class="form-control"></div>
                                    <div><textarea id="message" class="form-control" rows="3" name="message" placeholder="Your message"></textarea></div>
                                    <div><input  class="contact_button button btn btn-primary btn-block" type="submit" name="submit" id="submit" value="Send Message" /></div>
                                </form>	
                            </div>
                        </div>
                    </div><!--tabpanel-->

                    <!-- Map -->
                    <!-- ++++++++++++++++++++++++++++++++++++++++ -->
                    <div role="tabpanel" class="tab-pane" id="on-map">
                        <div id="mapCanvas"></div>
                    </div><!--tabpanel-->

                </div><!--tab-content-->

                <!-- Copyright -->
                <!-- ++++++++++++++++++++++++++++++++++++++++ -->
                <div class="copyright-alt">
                    <ul class="copyright-links list-inline">
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook fa-lg"></i></a></li>
                        <li><a href="https://www.twitter.com/"><i class="fa fa-twitter fa-lg"></i></a></li>
                        <li><a href="https://www.youtube.com/"><i class="fa fa-youtube-play fa-lg"></i></a></li>
                        <li><a href="https://www.googleplus.com/"><i class="fa fa-google-plus fa-lg"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="fa fa-instagram fa-lg"></i></a></li>
                    </ul>			
                    <p>&copy; 2011-2014 – Trademarks and brands are the property of IT PROFESSIONALS TEAM</p>
                </div>
            </div><!--container-->
        </footer>       

        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
        <!-- Include BOOTSTRAP plugins  -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Include plugins --> 
        <script src="assets/js/jquery.mb.YTPlayer.js"></script>		
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/jquery.ui.effect.min.js"></script>
        <script src="assets/js/contact.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <script src="assets/js/fancybox/jquery.fancybox.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script>
            new WOW().init();
            (function($) {
                $(document).ready(function() {
                    if (!Modernizr.touch) {
                        $(".player").mb_YTPlayer();
                    } else {
                        $('.video-bg ').css('display', 'block');
                    }
                });
            })(jQuery);
        </script>
        <script>
            new WOW().init();
        </script>
        <!-- Google maps -->    
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="assets/js/map.js"></script>  
        <!-- Include local script calls -->  
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/TweenMax.min.js"></script>
        <script src="assets/js/highcharts.js"></script>
        <script src="assets/js/Chart.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>
