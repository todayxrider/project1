<?php


include("connect.php");

if(isset($_POST['email'])){
	
		$from=$_POST['emailadd'];
			$name=$_POST['name'];
			$phone=$_POST['phone'];
			$subject=$_POST['subject'];
			$message=$_POST['message'];
			
	    if($from!="" and $name!="" and $phone!="" and $subject!="" and $message!=""){
		
		
		$from=$_POST['emailadd'];
			$name=$_POST['name'];
			$phone=$_POST['phone'];
			
			$email='mghgeneralhosp@gmail.com';
			$subject=$_POST['subject'];
			$message=$_POST['message'];
			$nmph="Sender's Name : ".$name."\n\n Sender's Phone : ".$phone."\n\n Sender's Message : ".$message."\n\n Sender's Email : ".$from;
				
			
			
	mail($email, $subject, $nmph, $from);
	echo "<script>alert('Email Sent');</script>";
	echo "<script>alert('We've received your email. We'll be in touch with you as soon as possible!');</script>";	
	
	}
else
{
	echo "<script>alert('Email not Sent,fields empty');</script>";	
	
	}

}


?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Contact us-Massachussets General Hospital</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/images/favicon.ico" rel="icon">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="assets/css/master.css">

    </head>

    <body id="home" data-offset="80" data-target=".navbar" data-spy="scroll">
        <div id="page-preloader"><span class="spinner"></span></div>

        <!-- Navigation -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <header class="header">
            <nav id="nav" class="navbar white-navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container relative-nav-container">
                    <a class="toggle-button visible-xs-block" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-navicon"></i>
                    </a>
                    <a class="navbar-brand scroll" href="index.html">
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
                                                <h5>Register Customer</h5>
                                                <a href="#" class="signup-facebook">
                                                    <i class="fa fa-facebook-square">&nbsp;&nbsp;</i>Sign in with Facebook
                                                </a>
                                                <span class="or-sep">or</span>
                                                <form class="form">
                                                    <div class="form-group">
                                                        <input placeholder="Enter your e-mail" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="submit-button form-control" value="Create new account" />
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="login">

                                            <div class="signup-content">
                                                <h5>Your Account</h5>
                                                <form class="form">
                                                    <div class="form-group">
                                                        <input placeholder="Login" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input placeholder="Password" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="submit-button form-control" value="Login" />
                                                    </div>
                                                </form>
                                                <span class="forgot">Forgot <a href="#">password or login</a>?</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul> <div class="navbar-collapse collapse floated" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-with-inside clearfix navbar-right with-border">  <li class=" ">
                                <a href="index.html">Home</a>
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


        <!-- Contact-2 - Map -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <section class="wrap-map" >
            <div id="mapCanvas"></div>
        </section>

        <!-- Contact-2 - Contacts -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <section class="wrap-contact-info">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wrap-contact-form contact-form-2">
                    <h4>Send us an Email</h4>
                    <div id="response"></div>
                    <form method="post" action="" name="contact-form" id="contact-form">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <div><input type="text" class="form-control" id="name" placeholder="Your Name" name="name" /></div>
                            </div>
                            <div class="col-md-6">
                                <div><input type="email" class="form-control" id="emailadd" placeholder="Your E-mail" name="emailadd" /></div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <div><input type="tel" class="form-control" id="phone" placeholder="Your Phone" name="phone" /></div>
                            </div>
                            <div class="col-md-6">
                                <div><input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" /></div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <div><textarea class="form-control" id="message" placeholder="Text comment" name="message"></textarea></div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <div><input  class="btn btn-primary" type="submit" name="email" id="email" value="Submit" /></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-12 col-xs-12 wrap-contact-info-text">
                    <h4>Text Info</h4>
                    <p>If you have any question please shoot your question by filling up form on your right side or give us a call or send a letter on given detail's. </p>
                    <h5>Contact Info:</h5>
                    <div class="row ">
                        <div class="col-md-12 clearfix">
                            <div class="type-info pull-left">
                                <i class="fa fa-user"></i>
                                Address:
                            </div>
                            <div class="info pull-right text-right">
                                <p class="no-margin">55 Fruit Street,Boston, MA 02114</p>
                            </div>
                        </div>
                        <div class="col-md-12 clearfix">
                            <div class="type-info pull-left">
                                <i class="fa fa-calendar"></i>
                                Phones:
                            </div>
                            <div class="info pull-right text-right">
                                <p class="no-margin">+ 617-726-2000, +617-724-8800</p>
                            </div>
                        </div>
                        <div class="col-md-12 clearfix">
                            <div class="type-info pull-left">
                                <i class="fa fa-bar-chart"></i>
                                E-mail:
                            </div>
                            <div class="info pull-right text-right">
                                <p class="no-margin">support@mgh.com</p>
                            </div>
                        </div>
                    </div>
                    <br />
                    <h5>Social Networks:</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="copyright-links list-inline">
                                 <li><a href="https://www.facebook.com/"><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="https://www.youtube.com/"><i class="fa fa-youtube-play fa-lg"></i></a></li>
                                <li><a href="https://www.googleplus.com/"><i class="fa fa-google-plus fa-lg"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fa fa-instagram fa-lg"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer - Tabs -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <footer class="contact2-footer" id="contact">
            <!-- Contacts One -->
            <!-- ++++++++++++++++++++++++++++++++++++++++ -->
            <section class="contacts">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-4">
                            <article class="contacts-block bottom-border">					
                                <h5>Contacts</h5>					
                                <ul>
                                    <li>
                                        <p><i class="fa fa-map-marker"></i><span class="no-margin">55 Fruit Street,Boston, MA 02114</span></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-phone"></i>+ 617-726-2000, +617-724-8800</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-envelope"></i><a href="mailto:support@rosetta.com">support@mgh.com</a> </p>

                                    </li>
                                </ul>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="twitter-block bottom-border">
                                <h5 class="offset">Twitter <a href="#fakelink"><i class="fa fa-undo pull-right"></i></a></h5>
                                <div class="twitter-wrap offset left-border">
                                    <p><strong>&#64;innocent_sam</strong>Services are really good and staff is really friendly.<br> 
                                      <span>1 day ago</span></p>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="subscribe-info">
                                <h5 class="offset">Subscribe</h5>
                                <div class="subscribe-wrap offset left-border">
                                    <form>
                                        <label for="contacts-email">Be aware of news</label>
                                        <div class="form-group has-feedback">
                                            <input type="email" class="form-control " id="contacts-email" placeholder="Enter email">
                                            <i class="fa fa-pencil-square fa-lg form-control-feedback"></i>
                                        </div>
                                    </form>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Copyright One-->
            <!-- ++++++++++++++++++++++++++++++++++++++++ -->
            <section class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; 2011-2014 – Trademarks and brands are the property of IT PROFESSIONALS</p>			
                        </div>
                        <div class="col-md-6">
                            <ul class="copyright-links list-inline">
                                 <li><a href="https://www.facebook.com/"><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="https://www.youtube.com/"><i class="fa fa-youtube-play fa-lg"></i></a></li>
                                <li><a href="https://www.googleplus.com/"><i class="fa fa-google-plus fa-lg"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fa fa-instagram fa-lg"></i></a></li>
                            </ul>			
                        </div>
                    </div>
                </div>
            </section>
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

