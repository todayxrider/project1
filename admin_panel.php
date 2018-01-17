<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Admin Panel-Protected-Massachussets General Hospital</title>
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
	
	if(isset($_POST['update_patient']))
	{
		update();
		}
	
	
	
	if(isset($_POST['sub_new_pat']))
	{
		if($_POST['name'] == "" || $_POST['lname'] == "" || $_POST['ssn'] == "" || $_POST['dob'] == "" || $_POST['patin'] == "" || $_POST['patout']== "" || $_POST['status']== "" || $_POST['gender']== "" || $_POST['maritial']== "" || $_POST['phone']== "" || $_POST['address']== "" || $_POST['zip']== "" || $_POST['city']== "" || $_POST['st']== "" || $_POST['roomallot']== "" || $_POST['physician']== "" || $_POST['gthru']== "" || $_POST['hospref']== "" || $_POST['insno']== "" || $_POST['sname']== "" || $_POST['occupation']== "" || $_POST['empat']== "" || $_POST['empphn']== "" || $_POST['emp_add']== "" || $_POST['ename']== "" || $_POST['emercontact']== "" || $_POST['emer_add']== ""){
			
			
			echo "<script>alert('Fill All Fields');</script>";
			
			
			
			}
			else
			{
		
		$ins=mysql_query("insert into pat_details(name,lname,ssn,dob,patin,patout,currstatus,gender,maritial,homephone,address,zip,city,st,roomno,physician,goingthru,hospreff,ins_no,spousenm,ocupation,emp_at,emp_phn,emp_add,emer_nm,emer_contact,emer_address) values ('$_POST[name]','$_POST[lname]','$_POST[ssn]','$_POST[dob]','$_POST[patin]','$_POST[patout]','$_POST[status]','$_POST[gender]','$_POST[maritial]','$_POST[phone]','$_POST[address]','$_POST[zip]','$_POST[city]','$_POST[st]','$_POST[roomallot]','$_POST[physician]','$_POST[gthru]','$_POST[hospref]','$_POST[insno]','$_POST[sname]','$_POST[occupation]','$_POST[empat]','$_POST[empphn]','$_POST[emp_add]','$_POST[ename]','$_POST[emercontact]','$_POST[emer_add]')");
		if($ins)
		{
			echo "<script>alert('Patient Added Successfully');</script>";
			}
		else
		{
			echo "<script>alert('Something Left Empty,Try Again');</script>";
			}
			}
		}
		
		
		
		
if(isset($_POST['search_patient']))
{
$se=mysql_query("select * from pat_details where ssn='$_POST[ssn_search]'");

$row=mysql_fetch_array($se);	

if($row)
{
echo "<script>alert('Patient Found');</script>";	
	}	
else
{
echo "<script>alert('No Patient Under this name');</script>";	
	}	
	}
	
	
function update()
	{
$upd=mysql_query("update pat_details set name='$_POST[u_name]',lname='$_POST[u_lname]',dob='$_POST[u_dob]',patin='$_POST[u_patin]',currstatus='$_POST[u_currstatus]',gender='$_POST[u_gender]',maritial='$_POST[u_maritial]',homephone='$_POST[u_hphn]',address='$_POST[u_address]',zip='$_POST[u_zip]',city='$_POST[u_city]',st='$_POST[u_st]',physician='$_POST[u_physician]',goingthru='$_POST[u_gthru]',hospreff='$_POST[u_hospreff]',ins_no='$_POST[u_insno]',spousenm='$_POST[u_sname]',ocupation='$_POST[u_occupation]',emp_at='$_POST[u_empat]',emp_phn='$_POST[u_ephn]',emp_add='$_POST[empadd]',emer_nm='$_POST[u_emernm]',emer_contact='$_POST[u_emercn]',emer_address='$_POST[u_emeradd]' where ssn='$_POST[u_ssn]'");
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
                    </ul> <div class="navbar-collapse collapse floated" id="navbar-collapse">
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
                <p class="small"  style="color:white;">Main</p>
            </div>
        </section>

        <section class="elements">
            <div class="container">

                <!-- Typographics -->
                <!-- ++++++++++++++++++++++++++++++++++++++++ -->

                <div class="row">
                    <div>
                        

                        <p class="subhead" align="center">Patients Data Management: </p>				
                        
                        <p class="large" align="center">Easily Maintain & input All Data regarding patients,(Manage-In Patients,Manage-Out Patients,All Patients) with Updat & Delete Function,(For Admin Only,If you are not please Logout).</p>
                        
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

                                <li role="presentation" class="active" style="width:220px;"><a  href="#home" aria-controls="home" role="tab" data-toggle="tab">Search Patient</a></li>
                                <li role="presentation" style="width:220px;"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">New patient</a></li>
                                <li role="presentation" style="width:440px;"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" style="text-align:center" >All</a></li
                                

                            ></ul><br>
                           
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                 <form name="form2" action="" method="post">
                                 <table id="new_app" border="0" width="1200">
                                 <tr>
                                 <th colspan="5" style="text-align:center; color:#F93; font-weight:bolder; border:double">Search Patient(by Name)</th></tr>
                                 <tr>
                                 <td style="padding-top: 10px;" colspan="2" ><strong>Name:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="u_name" size="18" placeholder="Type Patient Name" value="<?php echo @$row['name']?>">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="u_lname" size="18" placeholder="Patient Last Name" value="<?php echo @$row['lname']?>"></td>
                                 <td width="100" style="padding-top: 10px;">&nbsp;</td>
                                 <td style="padding-top: 10px;"><strong>Home Phone:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><input type="text" name="u_hphn"  size="50" placeholder="Type Home phone" value="<?php echo @$row['homephone']?>"></td>
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>Patient S-S-N:</strong></td><td style="padding-top: 10px; text-align:right;"><input type="text" name="u_ssn"  size="50" placeholder="Type Patient S-S-N" value="<?php echo @$row['ssn']?>">
                                 </td>
                                 <td  style="padding-top: 10px;"width="200">&nbsp;</td>
                                 <td style="padding-top: 10px;" ><strong>Address:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><input type="text" name="u_address"  size="50" placeholder="Type Patient Address" value="<?php echo @$row['address']?>"></td>
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>Patient D-O-B:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;"><input type="date" name="u_dob"  style="width:365px; height:35px;" value="<?php echo @$row['dob']?>" >
                                 </td>
                                 <td  style="padding-top: 10px;">&nbsp;</td>
                                 <td style="padding-top: 10px;" colspan="2" align="center" ><strong>Zip:</strong>
                                 <input type="text" i name="u_zip" size="5" placeholder="Zip" value="<?php echo @$row['zip']?>">
                                 <strong>City:</strong>
                                 <input type="text" name="u_city"size="10" placeholder="City" value="<?php echo @$row['city']?>">
                                 <strong>St:</strong>
                                 <input type="text"  size="5" name="u_st" placeholder="St" value="<?php echo @$row['st']?>"></td>
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px; " ><strong>patient-in:</strong></td><td style="padding-top: 10px; text-align:right;"><input type="date" name="u_patin"  style="width:135px; height:35px" value="<?php echo @$row['patin']?>" >
                                 <strong>&nbsp;&nbsp;Patient-Out:</strong>&nbsp;<input type="date" disabled name="u_patout" style="width:135px; height:35px" value="<?php echo @$row['patout']?>" ></td>
                                 <td width="100" style="padding-top: 10px;">&nbsp;</td>
                                 <td style="padding-top: 10px;"><strong>Room Allotment:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><input type="text"  size="50" placeholder="Patient Room No" value="<?php echo @$row['roomno']?>"></td>
                                 </tr>
                                 
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>Current Status:</strong></td><td style="padding-top: 10px; text-align:right;"><select name="u_currstatus" style="width:365px; height:35px;">
                                 <option <?php if(@$row['currstatus'] == "Select"){echo "selected";}?>>Select</option>
								 <option <?php if(@$row['currstatus'] == "Student"){echo "selected";}?>>Student</option>
                                 <option <?php if(@$row['currstatus'] == "Business Men"){echo "selected";}?>>Business Men</option>
                                 <option <?php if(@$row['currstatus'] == "Retired"){echo "selected";}?>>Retired</option>
</select></td>
                                 <td width="100" style="padding-top: 10px;"></td>
                                 <td style="padding-top: 10px;"><strong>Referring Physician:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><select name="u_physician" style="width:365px; height:35px;">
                                 <option>Select</option>
								 
</select></td>
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>Gender:</strong></td><td style="padding-top: 10px; text-align:right;"><select name="u_gender" style="width:365px; height:35px;">
                                 <option <?php if(@$row['gender'] == "Select"){echo "selected";}?>>Select</option> 
                                 <option <?php if(@$row['gender'] == "Male"){echo "selected";}?>>Male</option>
                                 <option <?php if(@$row['gender'] == "Female"){echo "selected";}?>>Female</option>
                                 <option <?php if(@$row['gender'] == "Other"){echo "selected";}?>>Other</option>
								 
</select></td>
                                 <td width="100" style="padding-top: 10px;"></td>
                                 <td style="padding-top: 10px;"><strong>Going Through:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><input type="text" name="u_gthru" size="50" placeholder="Going Through" value="<?php echo @$row['goingthru']?>"></td>
                                 </tr>
                                 
                                 
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px; padding-bottom:30px" ><strong>maritial Status:</strong></td><td style="padding-top: 10px; padding-bottom:30px; text-align:right;"><select name="u_maritial" style="width:365px; height:35px;">
                                 <option <?php if(@$row['maritial'] == "Select"){echo "selected";}?>>Select</option>
                                 <option <?php if(@$row['maritial'] == "Single"){echo "selected";}?>>Single</option>
                                 <option <?php if(@$row['maritial'] == "Married"){echo "selected";}?>>Married</option>
                                 <option <?php if(@$row['maritial'] == "Divorced"){echo "selected";}?>>Divorced</option>
								 
</select></td>
                                 <td width="100" style="padding-top: 10px;"></td>
                                 <td style="padding-top: 10px; padding-bottom:30px"><strong>Hospital Ref by:</strong></td>
                                 <td style="padding-top: 10px; padding-bottom:30px; text-align:right;" ><input type="text" name="u_hospreff" size="50" placeholder="Who Tell You about MGH"  value="<?php echo @$row['hospreff']?>"></td>
                                 </tr>
                                 
                                 <tr >
                                 <th colspan="5" style="text-align:center; color:#F93; font-weight:bolder; border:double">Insurance information&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Work Information &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Emergency Contact</th></tr><tr>
                                 <td style="padding-top: 10px; border:double" colspan="5" >
                                 <strong>Insurance number:&nbsp;&nbsp;</strong><input type="text" name="u_insno"  size="30" placeholder="insurance no:"  value="<?php echo @$row['ins_no']?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Employee At:&nbsp;&nbsp;&nbsp;</strong><input type="text" name="u_empat"  size="30" placeholder="Employe At:"  value="<?php echo @$row['emp_at']?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><input type="text" name="u_emernm" size="30" placeholder="Name:"  value="<?php echo @$row['emer_nm']?>">
                                 </td>
                                 </tr>
                                 
                                 
                                 <tr>
                                 <td style="padding-top: 10px; border:double" colspan="5" >
                                 <strong>Spouse name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</strong>
                                 <input type="text"  size="30" placeholder="Spouse name:" name="u_sname" value="<?php echo @$row['spousenm']?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Home Phone:&nbsp;&nbsp;&nbsp;</strong><input type="text" name="u_ephn" size="30" placeholder="Home Phone:"  value="<?php echo @$row['emp_phn']?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Contact No:&nbsp;&nbsp;</strong><input type="text" name="u_emercn" size="30" placeholder="Contact No:"  value="<?php echo @$row['emer_contact']?>">
                                 </td>
                                 </tr>
                                 
                                 
                                 <tr>
                                 <td style="padding-top: 10px; border:double" colspan="5" >
                                 <strong>Occupation:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><input type="text" name="u_occupation" size="30" placeholder="Occupation:"  value="<?php echo @$row['ocupation']?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><input type="text" name="empadd" size="30" placeholder="Address:"  value="<?php echo @$row['emp_add']?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><input type="text" name="u_emeradd" size="30" placeholder="Address:"  value="<?php echo @$row['emer_address']?>">
                                 </td>
                                 </tr>
                                 
                                 <tr>
                                <td Align="" colspan="5" style="padding-top: 30px; padding-bottom:30px; border:double; padding-left:20px;" ><input type="text" name="ssn_search" size="60" placeholder="Type Patient name to Search">&nbsp; &nbsp; &nbsp; <input type="submit" name="search_patient"  class="btn btn-success btn-sm"  style="width:150px" value="Search">
                                 
                               &nbsp; &nbsp; &nbsp; <input type="submit" class="btn btn-success btn-sm" name="update_patient" value="Update" style="width:150px">
                               
                               &nbsp; &nbsp; &nbsp; <input type="button" class="btn btn-success btn-sm" id="clr" value="Delete" style="width:150px">
                               
                               &nbsp; &nbsp; &nbsp; <input type="reset" class="btn btn-success btn-sm" id="clr" value="Clear" style="width:150px">
                               </td>
                                 </tr>
                                 
                                 
                                 
                                 </table>
                                 </form>
                                
                              </div>
                              
                              
                              
                              
                              <div role="tabpanel" class="tab-pane" id="new">
                                 <form name="form1" action="" method="post">
                                 <table id="new_pat" border="0" width="1200">
                                 <tr>
                                 <th colspan="5" style="text-align:center; color:#F93; font-weight:bolder; border:double">Add New patient</th></tr>
                                 <tr>
                                 <td style="padding-top: 10px;" colspan="2" ><strong>Name:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" size="18" placeholder="Type Patient Name">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lname" size="18" placeholder="Patient Last Name"></td>
                                 <td width="100" style="padding-top: 10px;">&nbsp;</td>
                                 <td style="padding-top: 10px;"><strong>Home Phone:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><input type="text" name="phone" size="50" placeholder="Type Home phone"></td>
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>Patient S-S-N:</strong></td><td style="padding-top: 10px; text-align:right;"><input type="text" name="ssn" size="50" placeholder="Type Patient S-S-N">
                                 </td>
                                 <td  style="padding-top: 10px;"width="200">&nbsp;</td>
                                 <td style="padding-top: 10px;" ><strong>Address:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><input type="text" name="address" size="50" placeholder="Type Patient Address"></td>
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>Patient D-O-B:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;"><input type="date" name="dob" style="width:365px; height:35px;" >
                                 </td>
                                 <td  style="padding-top: 10px;"width="100">&nbsp;</td>
                                 <td style="padding-top: 10px;" colspan="2" align="center" ><strong>Zip:</strong>
                                 <input type="text" name="zip" size="5" placeholder="Zip">
                                 <strong>City:</strong>
                                 <input type="text" name="city" size="10" placeholder="City">
                                 <strong>St:</strong>
                                 <input type="text" name="st" size="5" placeholder="St"></td>
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>patient-in:</strong></td><td style="padding-top: 10px; text-align:right;"><input type="date" name="patin" style="width:135px; height:35px" >
                                 <strong>&nbsp;&nbsp;&nbsp;Patient-Out:</strong>&nbsp;<input type="date" name="patout" style="width:135px; height:35px" ></td>
                                 <td width="100" style="padding-top: 10px;">&nbsp;</td>
                                 <td style="padding-top: 10px;"><strong>Room Allotment:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><select name="roomallot" style="width:365px; height:35px;">
                                 <option>1</option>
								 <option>2</option>
                                 <option>3</option>
								 <option>4</option>
                                 <option>5</option>
								 <option>6</option>
</select></td>
                                 </tr>
                                 
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>Current Status:</strong></td><td style="padding-top: 10px; text-align:right;"><select name="status" style="width:365px; height:35px;">
                                 <option >Select</option>
								 <option >Student</option>
                                 <option >Business Men</option>
                                 <option >Retired</option>
								 
</select></td>
                                 <td width="100" style="padding-top: 10px;"></td>
                                 <td style="padding-top: 10px;"><strong>Referring Physician:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><select name="physician" style="width:365px; height:35px;">
                                 <option>Select</option>
								 
</select></td>
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px;" ><strong>Gender:</strong></td><td style="padding-top: 10px; text-align:right;"><select name="gender" style="width:365px; height:35px;">
                                 <option>Select</option>
                                 <option>Male</option>
                                 <option>Female</option>
                                 <option>Other</option>
								 
</select></td>
                                 <td width="100" style="padding-top: 10px;"></td>
                                 <td style="padding-top: 10px;"><strong>Going Through:</strong></td>
                                 <td style="padding-top: 10px; text-align:right;" ><input type="text" name="gthru" size="50" placeholder="Going Through"></td>
                                 </tr>
                                 
                                 
                                 </tr>
                                 
                                 <tr>
                                 <td style="padding-top: 10px; padding-bottom:30px" ><strong>maritial Status:</strong></td><td style="padding-top: 10px; padding-bottom:30px; text-align:right;"><select name="maritial" style="width:365px; height:35px;">
                                 <option>Select</option>
                                 <option>Single</option>
                                 <option>Married</option>
                                 <option>Divorced</option>
								 
</select></td>
                                 <td width="100" style="padding-top: 10px;"></td>
                                 <td style="padding-top: 10px; padding-bottom:30px"><strong>Hospital Ref by:</strong></td>
                                 <td style="padding-top: 10px; padding-bottom:30px; text-align:right;" ><input type="text" name="hospref" size="50" placeholder="Who Tell You about MGH"></td>
                                 </tr>
                                 
                                 <tr >
                                 <th colspan="5" style="text-align:center; color:#F93; font-weight:bolder; border:double">Insurance information&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Work Information &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Emergency Contact</th></tr><tr>
                                 <td style="padding-top: 10px; border:double" colspan="5" >
                                 <strong>Insurance number:&nbsp;&nbsp;</strong><input type="text" name="insno" size="30" placeholder="insurance no:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Employee At:&nbsp;&nbsp;&nbsp;</strong><input type="text" name="empat" size="30" placeholder="Employe At:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><input type="text" name="ename" size="30" placeholder="Name:">
                                 </td>
                                 </tr>
                                 
                                 
                                 <tr>
                                 <td style="padding-top: 10px; border:double" colspan="5" >
                                 <strong>Spouse name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</strong>
                                 <input type="text" name="sname" size="30" placeholder="Spouse name:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Home Phone:&nbsp;&nbsp;&nbsp;</strong><input type="text" name="empphn" size="30" placeholder="Home Phone:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Contact No:&nbsp;&nbsp;</strong><input type="text" name="emercontact" size="30" placeholder="Contact No:">
                                 </td>
                                 </tr>
                                 
                                 
                                 <tr>
                                 <td style="padding-top: 10px; border:double" colspan="5" >
                                 <strong>Occupation:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><input type="text" name="occupation" size="30" placeholder="Occupation:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><input type="text" name="emp_add" size="30" placeholder="Address:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><input type="text" name="emer_add" size="30" placeholder="Address:">
                                 </td>
                                 </tr>
                                 
                                 <tr>
                                <td Align="center" colspan="5" style="padding-top: 30px; padding-bottom:30px; border:double"> 
                                
                                <input type="submit" class="btn btn-success btn-sm" name="sub_new_pat" value="Submit" style="width:300px">
                                 
                               &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; <input type="reset" class="btn btn-success btn-sm" id="clr" value="Clear" style="width:300px">
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
