





<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Departments-Admin-Massachussets General Hospital</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/images/favicon.ico" rel="icon">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="assets/css/master.css">

    </head>

    <body >
    
   <?php


include("connect.php");
if(isset($_POST['new_dept']))
{	
	insert_depart();
}


if(isset($_POST['update']))
	{
		update();
		}
		
if(isset($_POST['del']))
{
	delete();
	}		
		
		


function insert_depart()
{
	$test=$_POST['deptnm'];
	if($test){
		
		$fet=mysql_query("select * from departments where depart_nm='$test'");
$row=mysql_fetch_array($fet);
if($row['depart_nm']=="" )
{
$ins=mysql_query("insert into departments(requested,depart_nm,description,join_date) values ('$_POST[request]','$_POST[deptnm]','$_POST[desc]','$_POST[jdate]')");


if($ins)
{
	echo "<script>alert('Department Added');</script>";
}
else
{
	echo "<script>alert('Something Went Wrong,Try Again');</script>";
}
	}
else
{
echo "<script>alert('Department Already Created under Same Name');</script>";	
	}		
	}}


function insert_dropdown(){
$sql=mysql_query("select depart_nm from departments");

while($row=mysql_fetch_array($sql)){
	
	echo '<option value="' .$row['depart_nm' ].' ">' .$row['depart_nm'] .'</option>';
	
	
	
	}

}



function update()
	{
$upd=mysql_query("update departments set requested='$_POST[request]',description='$_POST[desc]',join_date='$_POST[jdate]' where depart_nm='$_POST[deptnm]'");
if($upd)
{
echo "<script>alert('Updated');</script>";	
	}		
else
{
echo "Not updated";	
	}	
		}
		
function delete()
{
$del=mysql_query("delete from departments where depart_nm='$_POST[deptnm]'");
if($del)
{
echo "<script>alert('deleted');</script>";	
	}	
else
{
echo "Not deleted";	
	}	
	}		
		
		
	
	
	
if(isset($_POST['ser']))
{
$se=mysql_query("select * from departments where depart_nm='$_POST[dep_drop]'");

$row=mysql_fetch_array($se);	
	}	



$dept_table="select * from departments";
$dept_final=mysql_query($dept_table);




?>
    
    
    
    
        <div id="page-preloader"><span class="spinner"></span></div>

        <!-- Navigation -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <header class="header">
            <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container relative-nav-container">
                    <a class="toggle-button visible-xs-block" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-navicon"></i>
                    </a>
                    <a class="navbar-brand scroll" href="admin_doctors.php">
                        <img class="normal-logo hidden-xs" src="assets/images/mghlogo_b.png" alt="mghlogo_b.png"/>
                        <img class="inverse-logo hidden-xs" src="assets/images/mghlogo.png" alt="mghlogo.png"/>
                        <!--<img class="visible-xs-block" src="assets/images/logo-sign2.png" width="40" height="44" alt="logo"/>-->
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
                                <a href="#">Home</a>
                                <div class=" wrap-inside-nav">
                                    <div class="inside-col">
                                        <ul class="inside-nav">
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="home-2.html">Home 2</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>

                                <a href="#">About</a>

                                <div class=" wrap-inside-nav">

                                    <div class="inside-col">

                                        <ul class="inside-nav">

                                            <li><a href="about.html">About 1</a></li>

                                            <li><a href="about-2.html">About 2</a></li>

                                            <li><a href="about-me.html">About Me</a></li>

                                        </ul>

                                    </div>

                                </div>

                            </li>

                            <li>

                                <a href="#">Service</a>

                                <div class="wrap-inside-nav">

                                    <div class=" inside-col">

                                        <ul class="inside-nav">

                                            <li><a href="service.html">Service 1</a></li>

                                            <li><a href="service-2.html">Service 2</a></li>

                                        </ul>

                                    </div>

                                </div>

                            </li>

                            <li><a href="price.html">Price</a></li>

                            <li>

                                <a href="#">Gallery</a>

                                <div class=" wrap-inside-nav">

                                    <div class=" inside-col">

                                        <ul class="inside-nav">

                                            <li><a href="gallery.html">Gallery Tiles</a></li>

                                            <li><a href="gallery-2.html">Gallery 2 Columns</a></li>

                                            <li><a href="gallery-3.html">Gallery 3 Columns</a></li>

                                            <li><a href="gallery-4.html">Gallery 4 Columns</a></li>

                                            <li><a href="gallery-single.html">Single Project 1</a></li>

                                            <li><a href="gallery-single-2.html">Single Project 2</a></li>

                                        </ul>

                                    </div>

                                </div>

                            </li>

                            <li>

                                <a href="#">Blog</a>

                                <div class=" wrap-inside-nav">

                                    <div class=" inside-col">

                                        <ul class="inside-nav">

                                            <li><a href="blog-3.html">Blog 3 Columns </a></li>

                                            <li><a href="blog-2.html">Blog 2 Columns</a></li>

                                            <li><a href="blog.html">Blog Classic</a></li>

                                            <li><a href="blog-post.html">Blog Single Post </a></li>

                                        </ul>

                                    </div>

                                </div>

                            </li>

                            <li>
                                <a href="#">Contacts</a>
                                <div class=" wrap-inside-nav">
                                    <div class="inside-col">
                                        <ul class="inside-nav">
                                            <li><a href="contact.html">Contacts 1</a></li>
                                            <li><a href="contact-2.html">Contacts 2</a></li>
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

        <!-- Elements Header -->
        <!-- ++++++++++++++++++++++++++++++++++++++++ -->
        <section class="elements-header dark">
            <div class="header-caption">
                <h1>Admin Panel</h1>
                <p class="small">Departments Data Entry</p>
            </div>
        </section>

        <section class="elements">
            <div class="container">

                <!-- Typographics -->
                <!-- ++++++++++++++++++++++++++++++++++++++++ -->

                <div class="row">
                    <div>
                        

                        <p class="subhead" align="center">Add or Make Changes in Deparments:(Administrator) </p>				
                        
                        <p class="large" align="center">Easily Maintain & input All Data regarding hospital departments ,(Add New & Update and delete old ones) with Update & Delete Functions,(For Admin Only,If you are not please Logout)</p>
                        
                        
                    </div>
                </div><!--row-->
            </div>


            <div class="divider">
                <div class="striped-icon">
                    <i class="fa fa-chevron-down"></i>
                </div>
            </div>

            <div class="container">		
                

                <!-- Tabs -->
                <!-- ++++++++++++++++++++++++++++++++++++++++ -->
                <div class="row">
                    <div class="col-md-6">
                        <div role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs-alt nav-tabs-one" role="tablist">

                                <li role="presentation" class="active"><a  href="#home" aria-controls="home" role="tab" data-toggle="tab">New Department</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">All Departments</a></li>
                                

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                 <form action="" id="department" method="post">
                                   
                                 <table id="new_dept" border=2 bordercolor="#CCCCCC" width="600">
                                 
                                  <tr>
                                 <td ><strong>Requested By:</strong></td>
                                 <td style="width:400px; padding-top: 10px;" width="232" Align="center" >
                                 
                                 <select name="request" id="request" style="width:360px; height:35px;">
                                 <option>Select</option>
                                 <option <?php if(@$row['requested'] == "Admin"){echo "selected";}?>>Admin</option>
                                 <option <?php if(@$row['requested'] == "Other"){echo "selected";}?>>Other</option>
                               </select>
                                 
                                 </td>
                                 </tr>
                                 
                                
                                 <tr>
                                 <td ><strong>Department Name:</strong></td>
                                 <td style=" padding-top: 10px;" width="225" Align="center" ><input name="deptnm" type="text" id="name" placeholder="Type Department Name" size="49" value="<?php echo @$row['depart_nm']?>"> </td>
                                 </tr>
                                 
                                 <tr>
                                 <td style="vertical-align:text-top; padding-top: 10px;"><strong>Description:</strong></td>
                                 <td Align="center" style="padding-top: 10px;">
                                 <textarea  name="desc" rows="6" cols="48" style="resize: none;" id="desc" placeholder="Department Description Goes Here" ><?php echo @$row['description']; ?></textarea> </td>
                                 </tr>
                                 
                                 
                                 <tr>
                                 <td ><strong>Join Date:</strong></td>
                                 <td Align="center" style="padding-top: 10px;"><input name="jdate" type="date" id="date" style="width:365px; height:35px;" value="<?php echo @$row['join_date']; ?>"> </td>
                                 </tr>
                              
                                 
                                 <tr>
                                 <td colspan=2 style="padding-top: 30px; padding-bottom:10px;" align="center"><input name="new_dept" type="submit" class="btn btn-success btn-sm" id="clr" style="width:450px" value="Add New"></td>
                                 
                                 </tr>
                                 
                                 <tr>
                                 <td colspan=2 Align="center" style="padding-top: 30px;"><strong>Search(Update/Delete)</strong></td>
                                 
                                 </tr>
                                 
                                 <tr>
                                 <td><strong>Department name:</strong></td>
                                 <td style="width:400px; padding-top: 10px;" width="232" Align="center" >
                                 
                                 <select name="dep_drop" id="dep_drop" style="width:360px; height:35px;" >
                                 <?php insert_dropdown(); ?>
                               </select>
                                 
                                 </td>
                                 </tr>
                                 
                                 
                               
                                 
                                 <tr>
                                
                                 <td Align="center" colspan="2" style="padding-top: 30px; padding-bottom:10px;">
                                 <input type="submit" name="ser" class="btn btn-success btn-sm" id="ser" value="Search" style="width:130px">
                                &nbsp; &nbsp;
                                <input name="update" type="submit" class="btn btn-success btn-sm" id="update" style="width:130px" value="Update">
                                 &nbsp; &nbsp;
                                <input name="del" type="submit" class="btn btn-success btn-sm" id="del" style="width:130px" value="Delete">
                                 &nbsp; &nbsp;
                                <input name="Reset" type="reset" class="btn btn-success btn-sm" id="clr" style="width:130px" value="Clear">
                                </td>
                                 </tr>
                                 
                                 
                                 
                                 </table>
                                </form>
                              </div>
                               <div role="tabpanel" class="tab-pane" id="profile">
                                
                                
                                   <table  width="1100"  height="100" border=1 >
    <thead>
        <tr>
            <th>Requested By</th>
            <th>Depart Name</th>
            <th>Creatione</th>
            <th>Description</th>
            
        </tr>
    </thead>
    
            <?php            
			
			while($depart=mysql_fetch_assoc($dept_final)){
			echo"<tbody >";
			echo"<tr>";
			
			echo"<td>".$depart['requested']."</td>";
			echo"<td>".$depart['depart_nm']."</td>";
			echo"<td>".$depart['join_date']."</td>";
			echo"<td>".$depart['description']."</td>";
			
			echo"</tr>";
			echo"</tbody>";
			}
			
			?>
       
</table>

        
                  </div>
                  <!--col--><!--col-->
              </div><!--row-->

                <div class="row">
                    <div class="row-same-height"><!--col-->			
                    </div><!--row same height-->
    </div><!--row-->
            </div><!--container--><!-- Buttons -->
            <!-- ++++++++++++++++++++++++++++++++++++++++ --><!--container-->

            <!--Social icons--><!--social icons--><!--social icons--><!--Standart columns-->
            <div class="container">
              <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
            </div>

        </section>


        <footer>

            <!-- Contacts One -->
            <!-- ++++++++++++++++++++++++++++++++++++++++ -->
            <section class="contacts">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <article class="contacts-block bottom-border">					
                                <h5>Contacts</h5>					
                                <ul>
                                    <li>
                                        <p><i class="fa fa-map-marker"></i>55 Fruit Street,Boston, MA 02114</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-phone"></i>+ 617-726-2000, +617-724-8800</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-envelope"></i><a href="mailto:support@rosetta.com">support@mgh.com</a>  </p>

                                    </li>
                                </ul>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="twitter-block bottom-border">
                                <h5 class="offset">Twitter <a href="#fakelink"><i class="fa fa-undo pull-right"></i></a></h5>
                                <div class="twitter-wrap offset left-border">
                                    <p><strong>&#64;innocent Sam</strong> Services are really good and staff is really friendly.<br> 
                                      <span>1 days ago</span></p>
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
            <!-- ++++++++++++++++++++++++++++++++++++++++ --><!-- Contacts Two -->
            <!-- ++++++++++++++++++++++++++++++++++++++++ --><!-- Copyright Two-->
            <!-- ++++++++++++++++++++++++++++++++++++++++ -->
            <section class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>&copy; 2011-2014 – Trademarks and brands are the property of IT PROFESSIONALS</p>
                            <p><a class="text-primary" href="#fakelink">Privacy Policy</a> -  All rights reserved</p>			
                        </div>
                        <div class="col-sm-6">
                            <ul class="copyright-links list-inline">
                                <li><a href="https://www.facebook.com/"><i class="icon-circle icon-facebook"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="icon-circle icon-twitter"></i></a></li>
                                
                            </ul>			
                        </div>
                    </div>

                </div>
            </section>

        </footer>		<!-- ++++++++++++++++++++++++++++++++++++++++ -->
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
