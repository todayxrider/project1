<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Nurse's-Admin--Protected-Massachussets General Hospital</title>
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
	
if(isset($_POST['sub_new_nurse']))
	{
		if($_POST['nurname'] == "" || $_POST['nurphone'] == "" || $_POST['nurssn'] == "" || $_POST['nuraddress'] == "" || $_POST['nurdob'] == "" || $_POST['nurzip']== "" || $_POST['nurcity']== "" || $_POST['nurst']== "" || $_POST['nurjdate']== "" || $_POST['nurinsno']== "" || $_POST['nurgender']== "" || $_POST['nurmaritial']== "" || $_POST['nurnation']== "" || $_POST['nurexp']== "" || $_POST['nuremail']== "" || $_POST['nurreligion']== "" || $_POST['ename']== "" || $_POST['nurlicense']== "" || $_POST['nurtimings']== "" || $_POST['eaddress']== "" || $_POST['nurcar']== "" || $_POST['nurdays']== "" || $_POST['ephone']== "" || $_POST['nurdepart']== ""){
			
			
			echo "<script>alert('Fill All Fields');</script>";
			
			
			
			}
			else
			{
		
		$ins=mysql_query("insert into nurse_details(nur_name,nur_ssn,nur_dob,nur_jdate,nur_gender,nur_nation,nur_email,nur_hphone,nur_address,nur_zip,nur_city,nur_st,nur_insno,nur_maritial,nur_pexp,nur_religion,emer_name,emer_address,emer_phone,nur_license,nur_caravail,nur_depart,nur_timing,nur_days) values ('$_POST[nurname]','$_POST[nurssn]','$_POST[nurdob]','$_POST[nurjdate]','$_POST[nurgender]','$_POST[nurnation]','$_POST[nuremail]','$_POST[nurphone]','$_POST[nuraddress]','$_POST[nurzip]','$_POST[nurcity]','$_POST[nurst]','$_POST[nurinsno]','$_POST[nurmaritial]','$_POST[nurexp]','$_POST[nurreligion]','$_POST[ename]','$_POST[eaddress]','$_POST[ephone]','$_POST[nurlicense]','$_POST[nurcar]','$_POST[nurdepart]','$_POST[nurtimings]','$_POST[nurdays]')");
		if($ins)
		{
			echo "<script>alert('Nurse Added Successfully');</script>";
			}
		else
		{
			echo "<script>alert('Something Left Empty,Try Again');</script>";
			}
			}
		}
		
		
	
	
	function update()
	{
$upd=mysql_query("update nurse_details set nur_name='$_POST[u_name]',nur_dob='$_POST[u_dob]',nur_jdate='$_POST[u_patin]',nur_gender='$_POST[u_currstatus]',nur_nation='$_POST[u_gender]',nur_email='$_POST[u_maritial]',nur_hphone='$_POST[u_hphn]',nur_address='$_POST[u_address]',nur_zip='$_POST[u_zip]',nur_city='$_POST[u_city]',nur_st='$_POST[u_st]',nur_insno='$_POST[u_physician]',nur_maritial='$_POST[u_gthru]',nur_pexp='$_POST[u_hospreff]',nur_religion='$_POST[u_insno]',nur_emer_name='$_POST[u_sname]',emer_address='$_POST[u_occupation]',emp_at='$_POST[u_empat]',emp_phn='$_POST[u_ephn]',emp_add='$_POST[empadd]',emer_phone='$_POST[u_emernm]',nur_license='$_POST[u_emercn]',nur_caravail='$_POST[u_emeradd]',nur_depart='$_POST[u_emercn]',nur_timing='$_POST[u_emercn]',nur_days='$_POST[u_emercn]' where nur_ssn='$_POST[u_ssn]'");
if($upd)
{
echo "<script>alert('Updated');</script>";	
	}		
else
{
echo "<script>alert('Not Updated');</script>";
	}	
		}		
		

		
		
	
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
                                        <li role="presentation" class="active"><a  href="#" aria-controls="signup" role="tab" data-toggle="tab">Welcome: <?php echo $row['dname'];?></a></li>
                                        
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active text-center" id="signup">
                                            <div class="signup-content">
                                              <span class="or-sep"></span></br>
                                                <form class="form" action="Logout.php" target="new">
                                                    
                                                    <div class="form-group">
                                                        <input type="Submit" name="logout" class="submit-button form-control" value="Logout" />
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
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="navbar-collapse collapse floated" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-with-inside clearfix navbar-right with-border">  <li class=" ">
                                <a href="#">Departments</a>
                                <div class=" wrap-inside-nav">
                                    <div class="inside-col">
                                        <ul class="inside-nav">
                                            <li><a href="#">All Departments</a></li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>

                                <a href="#">Doctor's</a>

                                <div class=" wrap-inside-nav">

                                    <div class="inside-col">

                                        <ul class="inside-nav">

                                            <li><a href="#">Doctor's Section</a></li>


                                        </ul>

                                    </div>

                                </div>

                            </li>

                            <li>

                                <a href="#">Nurses</a>

                                <div class="wrap-inside-nav">

                                    <div class=" inside-col">

                                        <ul class="inside-nav">

                                            <li><a href="#">Nurse's Section</a></li>

                                            

                                        </ul>

                                    </div>

                                </div>

                            </li>

                            <li>

                                <a href="#">Patient's</a>

                                <div class=" wrap-inside-nav">

                                    <div class=" inside-col">

                                        <ul class="inside-nav">

                                            <li><a href="#">Manage-In/Admit patent's</a></li>

                                            <li><a href="#">Manage-Out/Discharge patent's</a></li>

                                            
                                        </ul>

                                    </div>

                                </div>

                            </li>
                            

                            <li>

                                <a href="#">Appointments</a>

                                <div class=" wrap-inside-nav">

                                    <div class=" inside-col">

                                        <ul class="inside-nav">

                                            <li><a href="#">Appointments Section</a></li>

                                           

                                        </ul>

                                    </div>

                                </div>

                            </li>

                            <li>

                                <a href="#">Laboratory</a>

                                <div class=" wrap-inside-nav">

                                    <div class=" inside-col">

                                        <ul class="inside-nav">

                                            <li><a href="#">Laboratory Section</a></li>


                                        </ul>

                                    </div>

                                </div>

                            </li>
                            
                            
                            

                            <li>
                                <a href="#">Extra's</a>
                                <div class=" wrap-inside-nav">
                                    <div class="inside-col">
                                        <ul class="inside-nav">
                                            <li><a href="#">Certification System</a></li>
                                            <li><a href="#">Bed Allotment's</a></li>
                                            <li><a href="#">Attendance & Payroll</a></li>
                                            <li><a href="#">Sms & Email System </a></li>
                                            <li><a href="#">Setting's</a></li>
                                            
                                            
                                            
                                            
                                            <li><a href="#">Bed Allotment's</a></li>
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
        <section class="doconduty-header">
            <div class="header-caption">
                <h1 style="color:white;">Admin Panel</h1>
                <p class="small"  style="color:white;">Nurse's Data Entry</p>
            </div>
        </section>

        <section class="elements">
            <div class="container">

                <!-- Typographics -->
                <!-- ++++++++++++++++++++++++++++++++++++++++ -->

                <div class="row">
                    <div>
                        

                        <p class="subhead" align="center">Nurse's Data Management: </p>				
                        
                        <p class="large" align="center">Easily Maintain & input All Data regarding Nurse's,(Search Nurse's,Add New Nurse,All Nurse in hospital) with Update & Delete Function,(For Admin Only,If you are not please Logout).</p>
                        
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
                            <ul class="nav nav-tabs-alt nav-tabs-one" role="tablist" style="width:1200px;">

                                <li role="presentation" class="active" style="width:250px;"><a  href="#home" aria-controls="home" role="tab" data-toggle="tab">Search Nurse</a></li>
                                <li role="presentation" style="width:250px;"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">New Nurse</a></li>
                                <li role="presentation" style="width:250px;"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" style="text-align:center" >All Nurse's</a></li
                                

                            ></ul><br>
                           
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                 
                                 <table id="new_app" border="0" width="1200">
                                 <tr>
                                 <th colspan="5" style="text-align:center; color:#F93; font-weight:bolder; border:double">Search Nurse(by Name)</th></tr>
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>Name:</strong></td>
                                 <td style="text-align:right;"><input type="text"  size="50" placeholder="Type Nurse Name">
                                 </td>
                                 <td width="100" style="padding-top: 10px;">&nbsp;</td>
                                 <td style="padding-top: 10px;"><strong>Home Phone:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><input type="text"  size="50" placeholder="Type Home phone"></td>
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>S-S-N:</strong></td><td style="padding-top: 10px; text-align:right;"><input type="text"  size="50" placeholder="Type S-S-N">
                                 </td>
                                 <td  style="padding-top: 10px;"width="200">&nbsp;</td>
                                 <td style="padding-top: 10px;" ><strong>Address:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><input type="text"  size="50" placeholder="Type Current Address"></td>
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong> D-O-B:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;"><input type="date"  style="width:365px; height:35px;" >
                                 </td>
                                 <td  style="padding-top: 10px;">&nbsp;</td>
                                 <td style="padding-top: 10px;" colspan="2" align="center" ><strong>Zip:</strong>
                                 <input type="text"  size="5" placeholder="Zip">
                                 <strong>City:</strong>
                                 <input type="text"  size="10" placeholder="City">
                                 <strong>St:</strong>
                                 <input type="text"  size="5" placeholder="St"></td>
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>Join Date:</strong></td><td style="padding-top: 10px; text-align:right;"><input type="date"  style="width:365px; height:35px;" >
                                 </td>
                                 <td  style="padding-top: 10px;">&nbsp;</td>
                                 <td style="padding-top: 10px;"><strong>Insurance No:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><input type="text"  size="50" placeholder="Type Insurance no"></td>
                                 </tr>
                                 
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>Gender:</strong></td><td style="padding-top: 10px; text-align:right;"><select style="width:365px; height:35px;">
                                 <option>Select</option>
                                 <option>Male</option>
                                 <option>Female</option>
                                 <option>Other</option>
								 
</select></td>
                                 <td  style="padding-top: 10px;"></td>
                                 <td style="padding-top: 10px;"><strong>Maritial Status:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><select style="width:365px; height:35px;">
                                 <option>Select</option>
                                 <option>Single</option>
                                 <option>Married</option>
                                 <option>Divorced</option>
								 
</select></td>
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>Nationality:</strong></td><td style="padding-top: 10px; text-align:right;"><input type="text" size="50" placeholder="Type your Nationality"></td>
                                 <td  style="padding-top: 10px;"></td>
                                 <td style="padding-top: 10px;"><strong>Past Exp:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><input type="text"  size="50" placeholder="Previous Experience"></td>
                                 </tr>
                                 
                                 
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px; padding-bottom:30px" ><strong>Email:</strong></td><td style="padding-top: 10px; padding-bottom:30px; text-align:right;"><input type="text"  size="50" placeholder="Type your E-mail"></td>
                                 <td  style="padding-top: 10px;"></td>
                                 <td style="padding-top: 10px; padding-bottom:30px"><strong>Religion:</strong></td>
                                 <td style="padding-top: 10px; padding-bottom:30px; text-align:right;" ><input type="text"  size="50" placeholder="Type your Religion"></td>
                                 </tr>
                                 
                                 <tr >
                                 <th colspan="5" style="text-align:center; color:#F93; font-weight:bolder; border:double">Emergency Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Commute Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Timing Details</th></tr><tr>
                                 <td style="padding-top: 10px; border:double" colspan="5" >
                                 <strong>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                 <input type="text"  size="30" placeholder="Name(Emergency Contact):">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Driving License:&nbsp;&nbsp;&nbsp;</strong>
                                 <select style="width:200px; height:35px;">
                                 <option>Select</option>
                                 <option>Yes</option>
                                 <option>No</option>
                                 <option>Applied For</option>
								 
</select>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Timings:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                 <select style="width:200px; height:35px;">
                                 <option>Select</option>
                                 <option>6a-12p</option>
                                 <option>12p-6p</option>
                                 <option>6p-12a</option>
								 
</select>
                                 </td>
                                 </tr>
                                 
                                 
                                 <tr>
                                 <td style="padding-top: 10px; border:double" colspan="5" >
                                 <strong>Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</strong>
                                 <input type="text"  size="30" placeholder="Type Address(Emergency):">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Car Available:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                 <select style="width:200px; height:35px;">
                                 <option>Select</option>
                                 <option>Yes</option>
                                 <option>No</option>
                                
								 
</select>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Working Days:&nbsp;&nbsp;</strong>
                                 <select style="width:200px; height:35px;">
                                 <option>Select</option>
                                 <option>Mon-Wed</option>
                                 <option>Thur-Sat</option>
                                 <option>Sunday</option>
								 
</select>
                                 </td>
                                 </tr> 
                                 <tr>
                                 <td style="padding-top: 10px; border:double" colspan="5" >
                                 <strong>Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                 <input type="text"  size="30" placeholder="Enter Phone No(Emergency):">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Department:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                 <select style="width:200px; height:35px;">
                                 <option>Select</option>
                                 
								 
</select>
                                 </td>
                                 </tr>
                                 
                                 <tr>
                                <td Align="" colspan="5" style="padding-top: 30px; padding-bottom:30px; border:double; padding-left:20px;" ><input type="text" id="search" size="60" placeholder="Type Nurse name to Search">&nbsp; &nbsp; &nbsp; <input type="button" class="btn btn-success btn-sm" id="clr" value="Search" style="width:150px">
                                 
                               &nbsp; &nbsp; &nbsp; <input type="button" class="btn btn-success btn-sm" id="clr" value="Update" style="width:150px">
                               
                               &nbsp; &nbsp; &nbsp; <input type="button" class="btn btn-success btn-sm" id="clr" value="Delete" style="width:150px">
                               
                               &nbsp; &nbsp; &nbsp; <input type="reset" class="btn btn-success btn-sm" id="clr" value="Clear" style="width:150px">
                               </td>
                                 </tr>
                                 
                                 
                                 
                                 </table>
                                
                              </div>
                              
                              
                              
                              
                              <div role="tabpanel" class="tab-pane" id="new">
                                 <form name="nur_new" action="" method="post">
                                 <table id="new_app" border="0" width="1200">
                                 <tr>
                                 <th colspan="5" style="text-align:center; color:#F93; font-weight:bolder; border:double">Search Nurse(by Name)</th></tr>
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>Name:</strong></td>
                                 <td style=" text-align:right;"><input type="text"  size="50" name="nurname" placeholder="Type Nurse Name">
                                 </td>
                                 <td width="200" style="padding-top: 10px;">&nbsp;</td>
                                 <td style="padding-top: 10px;"><strong>Home Phone:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><input type="text" name="nurphone" size="50" placeholder="Type Home phone"></td>
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>S-S-N:</strong></td><td style="padding-top: 10px; text-align:right;"><input type="text"  size="50" name="nurssn" placeholder="Type S-S-N">
                                 </td>
                                 <td  style="padding-top: 10px;">&nbsp;</td>
                                 <td style="padding-top: 10px;" ><strong>Address:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><input type="text" name="nuraddress" size="50" placeholder="Type Current Address"></td>
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong> D-O-B:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;"><input type="date" name="nurdob" style="width:365px; height:35px;" >
                                 </td>
                                 <td  style="padding-top: 10px;"width="100">&nbsp;</td>
                                 <td style="padding-top: 10px;" colspan="2" align="center" ><strong>Zip:</strong>
                                 <input type="text"  size="5" name="nurzip" placeholder="Zip">
                                 <strong>City:</strong>
                                 <input type="text"  size="10" name="nurcity" placeholder="City">
                                 <strong>St:</strong>
                                 <input type="text"  size="5" name="nurst" placeholder="St"></td>
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>Join Date:</strong></td><td style="padding-top: 10px; text-align:right;"><input type="date" name="nurjdate" style="width:365px; height:35px;" >
                                 </td>
                                 <td  style="padding-top: 10px;">&nbsp;</td>
                                 <td style="padding-top: 10px;"><strong>Insurance No:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><input type="text" name="nurinsno" size="50" placeholder="Type Insurance no"></td>
                                 </tr>
                                 
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>Gender:</strong></td><td style="padding-top: 10px; text-align:right;"><select name="nurgender" style="width:365px;  height:35px;">
                                 <option>Select</option>
                                 <option>Male</option>
                                 <option>Female</option>
                                 <option>Other</option>
								 
</select></td>
                                 <td  style="padding-top: 10px;"></td>
                                 <td style="padding-top: 10px;"><strong>Maritial Status:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><select name="nurmaritial" style="width:365px;  height:35px;">
                                 <option>Select</option>
                                 <option>Single</option>
                                 <option>Married</option>
                                 <option>Divorced</option>
								 
</select></td>
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>Nationality:</strong></td><td style="padding-top: 10px; text-align:right;"><input type="text" name="nurnation" size="50" placeholder="Type your Nationality"></td>
                                 <td  style="padding-top: 10px;"></td>
                                 <td style="padding-top: 10px;"><strong>Past Exp:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><input type="text" name="nurexp" size="50" placeholder="Previous Experience"></td>
                                 </tr>
                                 
                                 
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px; padding-bottom:30px" ><strong>Email:</strong></td><td style="padding-top: 10px; padding-bottom:30px; text-align:right;"><input type="text"  size="50" name="nuremail" placeholder="Type your E-mail"></td>
                                 <td  style="padding-top: 10px;"></td>
                                 <td style="padding-top: 10px; padding-bottom:30px"><strong>Religion:</strong></td>
                                 <td style="padding-top: 10px; padding-bottom:30px; text-align:right;" ><input type="text" name="nurreligion" size="50" placeholder="Type your Religion"></td>
                                 </tr> 
                                 
                                 <tr >
                                 <th colspan="5" style="text-align:center; color:#F93; font-weight:bolder; border:double">Emergency Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Commute Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Timing Details</th></tr><tr>
                                 <td style="padding-top: 10px; border:double" colspan="5" >
                                 <strong>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                 <input type="text" name="ename" size="30" placeholder="Name(Emergency Contact):">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Driving License:&nbsp;&nbsp;&nbsp;</strong>
                                 <select name="nurlicense" style="width:200px;  height:35px;">
                                 <option>Select</option>
                                 <option>Yes</option>
                                 <option>No</option>
                                 <option>Applied For</option>
								 
</select>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Timings:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                 <select name="nurtimings" style="width:200px;  height:35px;">
                                 <option>Select</option>
                                 <option>6a-12p</option>
                                 <option>12p-6p</option>
                                 <option>6p-12a</option>
								 
</select>
                                 </td>
                                 </tr>
                                 
                                 
                                 <tr>
                                 <td style="padding-top: 10px; border:double" colspan="5" >
                                 <strong>Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</strong>
                                 <input type="text" name="eaddress" size="30" placeholder="Type Address(Emergency):">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Car Available:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                 <select name="nurcar" style="width:200px;  height:35px;">
                                 <option>Select</option>
                                 <option>Yes</option>
                                 <option>No</option>
                                
								 
</select>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Working Days:&nbsp;&nbsp;</strong>
                                 <select name="nurdays" style="width:200px;  height:35px;">
                                 <option>Select</option>
                                 <option>Mon-Wed</option>
                                 <option>Thur-Sat</option>
                                 <option>Sunday</option>
								 
</select>
                                 </td>
                                 </tr>
                                 
                                 
                                 <tr>
                                 <td style="padding-top: 10px; border:double" colspan="5" >
                                 <strong>Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                 <input type="text" name="ephone" size="30" placeholder="Enter Phone No(Emergency):">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Department:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                 <select name="nurdepart"  style="width:200px; height:35px;">
                                 <option>Select</option>
                                 
								 
</select>
                                 </td>
                                 </tr>
                                 
                                 <tr>
                               <td Align="center" colspan="5" style="padding-top: 30px; padding-bottom:30px; border:double"> 
                                
                                <input type="submit" class="btn btn-success btn-sm" name="sub_new_nurse" value="Submit" style="width:300px">
                                 
                               &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; <input type="button" class="btn btn-success btn-sm" id="clr" value="Clear" style="width:300px">
                               </td>
                                 </tr>
                                 
                                 
                                 
                                 </table>
                                 </form>
                                
                              </div>
                              
                              
                              
                              
                              
                              
                              
                              
                               <div role="tabpanel" class="tab-pane" id="profile">
                                <table width="1062"><tr>
                                <td><input type="text" id="search_app" size="125" placeholder="Type Patient Name:"> 
                               &nbsp;&nbsp; <input type="button" class="btn btn-success btn-sm" id="Search_butt" value="Search" style="width:150px"></td>
                                </tr></table>
                                </br>
                                
                                   <table class="scroll" width="1100" height="400" border=1>
    <thead>
        <tr>
            <th>Head 1</th>
            <th>Head 2</th>
            <th>Head 3</th>
            <th>Head 4</th>
            <th>Head 5</th>
            <th>Head 6</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Content 1</td>
            <td>Content 2</td>
            <td>Content 3</td>
            <td>Content 4</td>
            <td>Content 5</td>
            <td>Content 6</td>
        </tr>
        <tr>
            <td>Content 1</td>
            <td>Content 2</td>
            <td>Content 3</td>
            <td>Content 4</td>
            <td>Content 5</td>
            <td>Content 6</td>
        </tr>
        <tr>
            <td>Content 1</td>
            <td>Content 2</td>
            <td>Content 3</td>
            <td>Content 4</td>
            <td>Content 5</td>
            <td>Content 6</td>
        </tr>
        <tr>
            <td>Content 1</td>
            <td>Content 2</td>
            <td>Content 3</td>
            <td>Content 4</td>
            <td>Content 5</td>
            <td>Content 6</td>
        </tr>
        <tr>
            <td>Content 1</td>
            <td>Content 2</td>
            <td>Content 3</td>
            <td>Content 4</td>
            <td>Content 5</td>
            <td>Content 6</td>
        </tr>
        <tr>
            <td>Content 1</td>
            <td>Content 2</td>
            <td>Content 3</td>
            <td>Content 4</td>
            <td>Content 5</td>
            <td>Content 6</td>
        </tr>
        <tr>
            <td>Content 1</td>
            <td>Content 2</td>
            <td>Content 3</td>
            <td>Content 4</td>
            <td>Content 5</td>
            <td>Content 6</td>
        </tr>
    </tbody>
</table>
        
                              </div>
                                
                          </div>


                      </div>
                  </div><!--col--><!--col-->
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
