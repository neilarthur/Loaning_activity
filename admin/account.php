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
                    <li>
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Customer</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-credit-card"></i><a href="add_costumer.php">Add Costumer</a></li>
                            <li><i class="fa fa-credit-card"></i><a href="atm.php">ATM</a></li>
                            <li><i class="fa fa-money"></i><a href="sps.php">SPS</a></li>
                            <li><i class="fa fa-bars"></i><a href="spsv1.php">SPSV1</a></li>
                        </ul>
                    </li> 
                     <li>
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
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#myprofile"><i class="fa fa-user"></i> My Profile</a>

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
                        <h1>Account&nbsp
                            &nbsp&nbsp
                            <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add"><i class="fa fa-plus">&nbsp&nbspADD ACCOUNT</i>
                                                 </button></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

               <!--DISPLAY -->
            <?php

            include_once("../auth.php");

            $query = mysqli_query($con,"SELECT * FROM user");


            $query_run = mysqli_query($con,"SELECT email_address FROM account");

            while ($row=mysqli_fetch_assoc($query) AND $rows=mysqli_fetch_assoc($query_run) ) { ?>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">

                        <aside class="profile-nav alt">
                            <section class="card">
                                <div class="card-header user-header alt bg-dark">
                                    <div class="media">
                                        <a href="#">
                                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                                         </a>
                                        <div class="media-body">
                                            <h4 class="text-light display-6"><?php echo $row['name'];  ?></h4>
                                            <p><?php echo $row['position'];  ?></p>
                                        </div>
                                    </div>
                                </div>


                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="#"><?php echo $rows['email_address'];  ?><span class="badge badge-primary pull-right"></span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-tasks"></i><?php echo $row['p_address'];  ?><span class="badge badge-danger pull-right">15</span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <center>


                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            
                                            <th style="display: none;"><center>Name</center></th>
                                            <th style="display: none;"><center>Address</center></th>
                                            <th style="display: none;"><center>Contact</center></th>
                                            <th style="display: none;"><center>Account</center></th>
                                            <th style="display: none;"><center>Amount</center></th>
                                            <th style="display: none;"><center>Payment</center></th>
                                            <th style="display: none;"><center>Balance</center></th>
                                            <th style="display: none;"><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                     

                                            <tr>
                                                <td style="display: none;"><center><?php echo $row['user_id'];  ?></center></td>
                                                <td style="display: none;"><center><?php echo $row['name'];  ?></center></td>
                                                <td style="display: none;"><center><?php echo $row['lastname'];  ?></center></td>
                                                <td style="display: none;"><center><?php echo $row['position'];  ?></center></td>
                                                <td style="display: none;"><center><?php echo $row['p_address'];  ?></center></td>
                                                <td style="display: none;"><center><?php echo $row['educational'];  ?></center></td>
                                                <td style="display: none;"><center><?php echo $row['t_number'];  ?></center></td>
                                                <td style="display: none;"><center><?php echo $row['age'];  ?></center></td>
                                                <td style="display: none;"><center><?php echo $row['civil_status'];  ?></center></td>
                                                <td style="display: none;"><center><?php echo $row['gender'];  ?></center></td>
                                                <td style="display: none;"><center><?php echo $row['birthday'];  ?></center></td>
                                                <td style="display: none;"><center><?php echo $rows['email_address'];  ?></center></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm viewbtn" data-toggle="modal" data-target="#view"><i class="fa fa-eye"></i> </button>
                                                    <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#approved"><i class="fa fa-check"></i></button>
                                                    <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#reject"><i class="fa fa-times"></i></button>
                                                    <button type="submit" class="btn btn-primary btn-sm deletebtn" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                       
                                    </tbody>
                                </table>
                                           
                                        </center>
                                    </li>
                                </ul>

                            </section>
                        </aside>
                    </div>

                </div>
            </div>
             <?php } ?>

            <!--/.col-->




            <!--/.col-->

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
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                                   
                                                    <input id="name" type="text" class="text-light display-6 bg-dark" name="name" readonly="" style="border: none;">

                                                    <input id="position" type="text" class="text-light display-6 bg-dark" name="position" readonly="" style="border: none;">
                                                    <input id="t_number" type="text" class="text-light display-6 bg-dark" name="t_number" readonly="" style="border: none;">

                                                    <input id="birthday" type="text" class="text-light display-6 bg-dark" name="birthday" readonly="" style="border: none;">
                                                </div>
                                            </div>
                                        </div>

                                    </section>
                                </aside>
                            </div>
                                         <div class="col-sm-6">
                                            <input type="hidden" name="update_id" id="update_id">
                                             <input id="email_address" name="email_address" type="text" class="form-control" value="Email Address"><br/>
                                              <input id="p_address" name="p_address" type="text" class="form-control" value="Permanent Address"><br/>
                                               <input id="educational" name="educational" type="text" class="form-control" value="High Educational Attainment">
                                            </div>                         
                                        </div>

                                        <div class="row">
                                                     <div class="col-sm-6">
                                                        <label></label>
                                                          <input id="tel_number" name="tel_number" type="text" class="form-control" placeholder="Telephone/Mobile Number here!">
                                                          <label></label>
                                                          <input id="civil_status" name="civil_status" type="text" class="form-control" placeholder="Civil Status here!">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label></label>
                                                          <input id="age" name="age" type="text" class="form-control" placeholder="Age here!">
                                                        <label></label>
                                                          <input id="gender" name="gender" type="text" class="form-control" placeholder="Gender here!">
                                                    </div>
                                        </div>
                                    </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
<!-- end modal view -->

 <!-- modal approved -->
<div class="modal fade" id="approved" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Approved Account</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                
                                        <p align="center">Are you sure? You want to approved this Account?</p>

                                        <div class="modal-footer">
                                            <button type="button" name="approved" class="btn btn-secondary" data-dismiss="modal">YES</button>
                                             <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                                        </div>
                            </div>
                                                         
                        </div>
                    </div>
                </div>
<!-- end modal approved -->

<!-- modal reject -->
<div class="modal fade" id="reject" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Reject Account</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                
                                        <p align="center">Are you sure? You want to Reject this Account?</p>

                                        <div class="modal-footer">
                                            <button type="button" name="reject" class="btn btn-secondary" data-dismiss="modal">YES</button>
                                             <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                                        </div>
                            </div>
                                                         
                        </div>
                    </div>
                </div>
<!-- end modal reject -->

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

                            <form action="delete_account.php" method="POST">
                                <div class="modal-body">

                                <input type="hidden" name="delete_id" id="delete_id">
                                        <p align="center">Are you sure? You want to Delete this Account?</p>

                                        <div class="modal-footer">
                                            <button type="submit" name="deletedata" class="btn btn-secondary">YES</button>
                                             <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                                        </div>
                            </div>
                            </form>
                            
                                                         
                        </div>
                    </div>
                </div>
<!-- end modal delete -->

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Add  Costumer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                
                                         <form action="add_account.php" method="POST">
                            <div class="card-header">
                                <strong class="card-title">Personal Information</strong>
                            </div><br/>
                            <div class="row">
                                        <div class="col-sm-3">
                                              <label for="lastname" class="control-label mb-1">Lastname</label>
                                              <input id="lastname" name="lastname" type="text" class="form-control" placeholder="Lastname here!">
                                        </div>
                                         <div class="col-sm-3">
                                              <label for="fname" class="control-label mb-1">name</label>
                                              <input id="name" name="name" type="text" class="form-control" placeholder="Firstname here!">
                                        </div>
                                         <div class="col-sm-3">
                                              <label for="middle_name" class="control-label mb-1">Middle Name</label>
                                              <input id="mid_name" name="mid_name" type="text" class="form-control" placeholder="Middlename here!">
                                        </div>
                                        <div class="col-sm-3">
                                              <label for="password" class="control-label mb-1">Password</label>
                                              <input id="password" name="password" type="password" class="form-control" placeholder="Password here!">
                                        </div>

                                                                    
                            </div>

                            <div class="row">
                                        <div class="col-sm-6">
                                              <label for="p_address" class="control-label mb-1">Permanent Address</label>
                                              <input id="p_address" name="p_address" type="text" class="form-control" placeholder="Permanent Address here!">
                                        </div>
                                         <div class="col-sm-6">
                                              <label for="e_address" class="control-label mb-1">Email Address</label>
                                              <input id="email_address" name="email_address" type="text" class="form-control" placeholder="Email Address here!">
                                        </div>
                            </div>

                            <div class="row">
                                        <div class="col-sm-4">
                                              <label for="Birthday" class="control-label mb-1">Birthday</label>
                                              <input id="birthday" name="birthday" type="date" class="form-control" placeholder="Birthday here!">
                                        </div>
                                         <div class="col-sm-4">
                                              <label for="t_number" class="control-label mb-1">Telephone/Mobile Number</label>
                                              <input id="tel_number" name="t_number" type="text" class="form-control" placeholder="Telephone/Mobile Number here!">
                                        </div>
                            </div>

                            <div class="row">
                                        <div class="col-sm-6">
                                              <label for="educational" class="control-label mb-1">High Educational Attainment</label>
                                              <input id="educational" name="educational" type="text" class="form-control" placeholder="High Educational Attainment here!">
                                               <label for="age" class="control-label mb-1">Age</label>
                                              <input id="age" name="age" type="text" class="form-control" placeholder="Age here!">
                                               <label for="gender" class="control-label mb-1">Gender</label>
                                              <input id="gender" name="gender" type="text" class="form-control" placeholder="Gender here!">
                                        </div>
                                        <div class="col-sm-6">
                                              <label for="civil_status" class="control-label mb-1">Civil Status</label>
                                              <input id="civil_status" name="civil_status" type="text" class="form-control" placeholder="civil status here!">
                                               <label for="position" class="control-label mb-1">Position</label>
                                              <input id="position" name="position" type="text" class="form-control" placeholder="Company Position here!">
                                        </div>  
                            </div><br/>
                            <div class="card-footer">
                                <button type="submit" name="save" class="btn btn-primary btn-sm" style="">
                                         <i class="fa fa-save"></i> Save
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> Clear
                                </button>
                            </div>
                        </form>
                            </div>
                                                         
                        </div>
                    </div>
                </div>
<!-- end modal delete -->



 <!-- Profile Modal -->
<div class="modal fade" id="myprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">My Profile</h5>
      </div>
      <div class="modal-body">
        <div class="mb-3">
                <?php

                include_once "../auth.php";

                $datas = mysqli_query($con, "SELECT * FROM user where user_id = '{$_SESSION['uid']}'");

                $sql = mysqli_fetch_array($datas);
                ?>
                <label class="form-label">Name</label>
                <input type="text" name="fname" class="form-control" value="<?php echo $sql['name'] ?>"  Readonly>
                <label class="form-label">Position</label>
                <input type="text" name="position" class="form-control" value="<?php echo $sql['position'] ?>" Readonly><br>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

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
        $('#name').val(data[1]);
        $('#position').val(data[3]);
        $('#p_address').val(data[4]);
        $('#educational').val(data[5]);
        $('#t_number').val(data[6]);
        $('#tel_number').val(data[6]);
        $('#age').val(data[7]);
        $('#civil_status').val(data[8]);
        $('#gender').val(data[9]);
        $('#birthday').val(data[10]);
        $('#email_address').val(data[11]);



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
