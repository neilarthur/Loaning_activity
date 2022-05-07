<?php
session_start();

if (!isset($_SESSION["islogin"]) ||  $_SESSION["islogin"] != true) {
  header("location: ../login.php");
  exit;
}
if (!isset($_SESSION["position"]) ||  $_SESSION["position"] != 'admin') {
  header("location: ../login.php");
  exit;
}
require_once "../auth.php";
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WEB AND DATABASE</title>
    <meta name="description" content="WEB AND DATABASE">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--   <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico"> -->

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<style>
    ::-webkit-scrollbar {
  width: 5px;
}

::-webkit-scrollbar-track {
  width: 5px;
  background: #f5f5f5;
}

::-webkit-scrollbar-thumb {
  width: 1em;
  background-color: #ddd;
  outline: 1px solid slategrey;
  border-radius: 1rem;
}

.text-small {
  font-size: 0.9rem;
}

.messages-box,
.chat-box {
  height: 510px;
  overflow-y: scroll;
}

.rounded-lg {
  border-radius: 0.5rem;
}

input::placeholder {
  font-size: 0.9rem;
  color: #999;
}
</style>
</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Costumer</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-credit-card"></i><a href="add_costumer.php">Add Costumer</a></li>
                            <li><i class="fa fa-credit-card"></i><a href="atm.php">ATM</a></li>
                            <li><i class="fa fa-money"></i><a href="#">SPS</a></li>
                            <li><i class="fa fa-bars"></i><a href="spsv1.php">SPSV1</a></li>
                        </ul>
                    </li> 
                     <li class="active">
                        <a href="chat.php"> <i class="menu-icon fa fa-envelope"></i>Chat</a>
                    </li>
                    <li class="active">
                        <a href="account.php"> <i class="menu-icon fa fa-users"></i>Account</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="logout_admin.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Costumer/SPS</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

           <!--  <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
 -->
            <!--/.col-->

            
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                       
                            
                            <!--/.col-->


                      <!--   </div> -->
                        <!-- form -->
                       <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><center>Name</center></th>
                                            <th><center>Address</center></th>
                                            <th><center>Contact</center></th>
                                            <th><center>Account</center></th>
                                            <th><center>Amount</center></th>
                                            <th><center>Payment</center></th>
                                            <th><center>Balance</center></th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include_once("../auth.php");

                                        $query = mysqli_query($con,"SELECT * FROM customer WHERE category = 'sps' ");
                                        while ($row=mysqli_fetch_assoc($query)) { ?> 
                                        <tr>
                                            <td style="display: none;"><center><?php echo $row['customer_id'];  ?></center></td>
                                            <td style="display: none;"><center><?php echo $row['category'];  ?></center></td>
                                            <td style="display: none;"><center><?php echo $row['email'];  ?></center></td>
                                            <td><center><?php echo $row['fname'];  ?></center></td>
                                            <td><center><?php echo $row['permanent_address'];  ?></center></td>
                                            <td><center><?php echo $row['mobile_no'];  ?></center></td>
                                            <td style=" display: none;"><?php echo $row['id_number'];  ?></td>
                                            <td style=" display: none;"><?php echo $row['mother_name'];  ?></td>
                                            <td style=" display: none;"><?php echo $row['father_name'];  ?></td>
                                            <td style=" display: none;"><?php echo $row['spouse_name'];  ?></td>
                                            <td style=" display: none;"><?php echo $row['mother_no'];  ?></td>
                                            <td style=" display: none;"><?php echo $row['father_no'];  ?></td>
                                            <td style=" display: none;"><?php echo $row['spouse_no'];  ?></td>
                                            <td style=" display: none;"><?php echo $row['company_affiliated'];  ?></td>
                                            <td style=" display: none;"><?php echo $row['company_address'];  ?></td>
                                            <td style=" display: none;"><?php echo $row['company_no'];  ?></td>
                                            <td style=" display: none;"><?php echo $row['company_position'];  ?></td>
                                            <td style=" display: none;"><?php echo $row['company_status'];  ?></td>
                                            <td style=" display: none;"><?php echo $row['date_birth'];  ?></td>
                                            <td><center>Account</center></td>
                                            <td><center>Amount</center></td>
                                            <td><center>Payment</center></td>
                                            <td><center>Balance</center></td>

                                            <td>
                                                 <button type="submit" class="btn btn-primary btn-sm viewbtn" data-toggle="modal" data-target="#view"><i class="fa fa-eye"></i> </button>
                                                 <button type="submit" class="btn btn-primary btn-sm updatebtn" data-toggle="modal" data-target="#update"><i class="fa fa-refresh"></i>
                                                 </button>

                                            <button type="submit" class="btn btn-primary btn-sm deletebtn" data-toggle="modal" data-target="#delete"><i class="fa fa-refresh"></i>
                                            </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

                        <!-- end of form -->
                      
                                  <br/><br/>
                                </div>
                              </div>
                            </div>
                        </div>
                        <!-- end chat -->
                    </div>
                  
                </div>
            </div>

           

           


            

            

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <!-- <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script> -->

<!-- modal view -->
<div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Costumer Information</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-header">
                    <strong class="card-title">Personal Information</strong>
                </div><br/>
                <div class="row">
                    <div class="col-sm-6">
                        <aside class="profile-nav alt">
                            <section class="card">
                                <div class="card-header user-header alt bg-dark">
                                    <div class="media">
                                        <a href="#">
                                            <img class="align-self-center rounded-circle mr-3" style="width:125px; height:135px;" alt="" src="images/admin.jpg">
                                        </a>
                                        <div class="media-body">
                                            <input id="fname" type="text" class="text-light display-6 bg-dark" name="fname" readonly="" style="border: none;">

                                            <input id="c_position" type="text" class="text-light display-6 bg-dark" name="company_position" readonly="" style="border: none;">
                                            <input id="m_no" type="text" class="text-light display-6 bg-dark" name="company_position" readonly="" style="border: none;">

                                            <input id="date_birth" type="text" class="text-light display-6 bg-dark" name="date_birth" readonly="" style="border: none;">
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </aside>
                    </div>
                    <div class="col-sm-6">
                        <input type="hidden" name="update_id" id="update_id">
                        <input id="category" name="category" type="text" class="form-control" value="ATM"><br/>
                        <input id="p_address" name="p_address" type="text" class="form-control" value="Permanent Address"><br/>
                        <input id="email" name="email" type="email" class="form-control" value="Mailing Address">
                    </div>
                </div>

                <div class="row">
                             <div class="col-sm-6">
                                <label></label>
                                  <input id="mobile_no" name="mobile_no" type="text" class="form-control" placeholder="Telephone/Mobile Number here!">
                            </div>
                             <div class="col-sm-6">
                                <label></label>
                                  <input id="id_number" name="id_number" type="text" class="form-control" placeholder="ID Card Number here!">
                            </div>
                </div>

                <div class="row">
                            <div class="col-sm-6">
                                  <label></label>
                                  <input id="mother_name" name="mother_name" type="text" class="form-control" placeholder="Mother's Name here!">
                                  <label></label>
                                  <input id="father_name" name="father_name" type="text" class="form-control" placeholder="Father's Name here!">
                                  <label></label>
                                  <input id="spouse_name" name="spouse_name" type="text" class="form-control" placeholder="Name of Spouse here!">
                            </div>
                            <div class="col-sm-6">
                                  <label></label>
                                  <input id="mother_no" name="mother_no" type="text" class="form-control" placeholder="Contact Person here!">
                                  <label></label>
                                  <input id="father_no" name="father_no" type="text" class="form-control" placeholder="Contact Number here!">
                                  <label></label>
                                  <input id="spouse_no" name="spouse_no" type="text" class="form-control" placeholder="Spouse Contact Number here!">
                            </div>  
                </div><br/>

                <div class="card-header">
                    <strong class="card-title">Company Information</strong>
                </div><br/>
                <div class="row">
                            <div class="col-sm-4">
                                  <label></label>
                                  <input id="company_affiliated" name="company_affiliated" type="text" class="form-control" placeholder="Lastname here!">
                            </div>
                             <div class="col-sm-4">
                                  <label></label>
                                  <input id="company_address" name="company_address" type="text" class="form-control" placeholder="Firstname here!">
                            </div>
                             <div class="col-sm-4">
                                  <label></label>
                                  <input id="company_no" name="company_no" type="text" class="form-control" placeholder="Middlename here!">
                            </div>
                </div>

                 <div class="row">
                            <div class="col-sm-6">
                                  <label></label>
                                  <input id="company_position" name="c_position" type="text" class="form-control" placeholder="Permanent Address here!">
                            </div>
                             <div class="col-sm-6">
                                  <label></label>
                                  <input id="company_status" name="company_status" type="text" class="form-control" placeholder="Email Address here!">
                            </div>
                </div><br/>
    </div>
    <div class="modal-footer">
    </div>
</div>
</div>
</div>
<!-- end modal view -->

<!-- modal update -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Costumer Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <form action="update_sps.php" method="POST">

                                <div class="modal-body">
                                 <div class="card-header">
                                    <strong class="card-title">Personal Information</strong>
                                        </div><br/>
                                        <div class="row">
                                                    <div class="col-sm-6">
                                                         
                                <aside class="profile-nav alt">
                                    <section class="card">
                                        <div class="card-header user-header alt bg-dark">
                                            <div class="media">
                                                <a href="#">
                                                    <img class="align-self-center rounded-circle mr-3" style="width:125px; height:135px;" alt="" src="images/admin.jpg">
                                                </a>
                                                <div class="media-body">
                                                     <input id="fname1" type="text" class="text-light display-6 bg-dark" name="fname" readonly="" style="border: none;">

                                                    <input id="c_position1" type="text" class="text-light display-6 bg-dark" name="company_position" readonly="" style="border: none;">
                                                    <input id="m_no1" type="text" class="text-light display-6 bg-dark" name="company_position" readonly="" style="border: none;">

                                                    <input id="date_birth1" type="text" class="text-light display-6 bg-dark" name="date_birth" readonly="" style="border: none;">
                                                </div>
                                            </div>
                                        </div>

                                    </section>
                                </aside>
                            </div>
                             <div class="col-sm-6">
                                            <input type="hidden" name="update_id" id="update_id1">
                                             <input id="category1" name="category" type="text" class="form-control" value="ATM"><br/>
                                              <input id="p_address1" name="permanent_address" type="text" class="form-control" value="Permanent Address"><br/>
                                               <input id="email1" name="email" type="email" class="form-control" value="Mailing Address">
                                            </div>                         
                                        </div>

                                        <div class="row">
                                                     <div class="col-sm-6">
                                                        <label></label>
                                                          <input id="mobile_no1" name="mobile_no" type="text" class="form-control" placeholder="Telephone/Mobile Number here!">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label></label>
                                                          <input id="id_number1" name="id_number" type="text" class="form-control" placeholder="ID Card Number here!">
                                                    </div>
                                        </div>

                                        <div class="row">
                                                    <div class="col-sm-6">
                                                          <label></label>
                                                          <input id="mother_name1" name="mother_name" type="text" class="form-control" placeholder="Mother's Name here!">
                                                          <label></label>
                                                          <input id="father_name1" name="father_name" type="text" class="form-control" placeholder="Father's Name here!">
                                                          <label></label>
                                                          <input id="spouse_name1" name="spouse_name" type="text" class="form-control" placeholder="Name of Spouse here!">
                                                    </div>
                                                    <div class="col-sm-6">
                                                          <label></label>
                                                          <input id="mother_no1" name="mother_no" type="text" class="form-control" placeholder="Contact Person here!">
                                                          <label></label>
                                                          <input id="father_no1" name="father_no" type="text" class="form-control" placeholder="Contact Number here!">
                                                          <label></label>
                                                          <input id="spouse_no1" name="spouse_no" type="text" class="form-control" placeholder="Spouse Contact Number here!">
                                                    </div>  
                                        </div><br/>

                                        <div class="card-header">
                                            <strong class="card-title">Company Information</strong>
                                        </div><br/>
                                        <div class="row">
                                                    <div class="col-sm-4">
                                                          <label></label>
                                                          <input id="company_affiliated1" name="company_affiliated" type="text" class="form-control" placeholder="Lastname here!">
                                                    </div>
                                                     <div class="col-sm-4">
                                                          <label></label>
                                                          <input id="company_address1" name="company_address" type="text" class="form-control" placeholder="Firstname here!">
                                                    </div>
                                                     <div class="col-sm-4">
                                                          <label></label>
                                                          <input id="company_no1" name="company_no" type="text" class="form-control" placeholder="Middlename here!">
                                                    </div>
                                        </div>

                                         <div class="row">
                                                    <div class="col-sm-6">
                                                          <label></label>
                                                          <input id="company_position1" name="company_position" type="text" class="form-control" placeholder="Permanent Address here!">
                                                    </div>
                                                     <div class="col-sm-6">
                                                          <label></label>
                                                          <input id="company_status1" name="company_status" type="text" class="form-control" placeholder="Email Address here!">
                                                    </div>
                                        </div><br/>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="edit" class="btn btn-secondary">Save</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
<!-- end modal update -->

<!-- modal deletet -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Approved Account</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <form action="delete_sps.php" method="POST">
                                 <div class="modal-body">

                                    <input type="hidden" name="delete_id" id="delete_id">
                                        <p align="center">Are you sure? You want to Delete this Account?</p>

                                        <div class="modal-footer">
                                            <button type="submit" name="deletedata" class="btn btn-secondary">YES</button>
                                             <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                                        </div>
                            </form>
                            </div>
                                                         
                        </div>
                    </div>
                </div>
<!-- end modal delete -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="../js/bootstrap.js"></script>



<script type="text/javascript">
     $(document).ready(function() {
      $('.viewbtn').on('click', function() {

        $('#view').modal('show');


        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();


        }).get();

        console.log(data);
        $('#update_id').val(data[0]);
        $('#category').val(data[1]);
        $('#p_address').val(data[4]);
        $('#email').val(data[2]);
        $('#mobile_no').val(data[5]);
        $('#m_no').val(data[5]);
        $('#id_number').val(data[6]);
        $('#mother_name').val(data[7]);
        $('#father_name').val(data[8]);
        $('#spouse_name').val(data[9]);
        $('#mother_no').val(data[10]);
        $('#father_no').val(data[11]);
        $('#spouse_no').val(data[12]);
        $('#company_affiliated').val(data[13]);
        $('#company_address').val(data[14]);
        $('#company_no').val(data[15]);
        $('#company_position').val(data[16]);
        $('#c_position').val(data[16]);
        $('#company_status').val(data[17]);
        $('#fname').val(data[3]);
        $('#date_birth').val(data[18]);
      })
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.updatebtn').on('click', function() {

            $('#update').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_id1').val(data[0]);
            $('#category1').val(data[1]);
            $('#p_address1').val(data[4]);
            $('#email1').val(data[2]);
            $('#mobile_no1').val(data[5]);
            $('#m_no1').val(data[5]);
            $('#date_birth1').val(data[18]);
            $('#id_number1').val(data[6]);
            $('#mother_name1').val(data[7]);
            $('#father_name1').val(data[8]);
            $('#spouse_name1').val(data[9]);
            $('#mother_no1').val(data[10]);
            $('#father_no1').val(data[11]);
            $('#spouse_no1').val(data[12]);
            $('#company_affiliated1').val(data[13]);
            $('#company_address1').val(data[14]);
            $('#company_no1').val(data[15]);
            $('#company_position1').val(data[16]);
            $('#c_position1').val(data[16]);
            $('#company_status1').val(data[17]);
            $('#fname1').val(data[3]);
            $('#date_birth1').val(data[18]);
        })
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.deletebtn').on('click', function() {

            $('#delete').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_id').val(data[0]);

        })
    });
</script>


</body>

</html>
