<?php
session_start();

if (!isset($_SESSION["islogin"]) || $_SESSION["islogin"] != true) {
  header("location: ../login.php");
  exit;
}
if (!isset($_SESSION["position"]) ||  $_SESSION["position"] != 'staff') {
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
                            <li><i class="fa fa-money"></i><a href="sps.php">SPS</a></li>
                            <li><i class="fa fa-bars"></i><a href="spsv1.php">SPSV1</a></li>
                        </ul>
                    </li> 
                     <li class="active">
                        <a href="chat.php"> <i class="menu-icon fa fa-envelope"></i>Chat</a>
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

                            <a class="nav-link" href="logout_staff.php"><i class="fa fa-power-off"></i> Logout</a>
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
                        <h1>Costumer/ATM</h1>
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

                                        <!--DISPLAY -->
                                        <?php

                                        include_once("../auth.php");

                                        $query = mysqli_query($con,"SELECT * FROM customer WHERE category = 'atm'");
                                        $sql = mysqli_query($con,"SELECT * FROM loan_info ");
                                        while ($row=mysqli_fetch_assoc($query) AND $rows=mysqli_fetch_assoc($sql)) { ?>
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
                                                <td><center><?php echo $rows['loan_account'];  ?></center></td>
                                                <td><center><?php echo $rows['loan_amount'];  ?></center></td>
                                                <td><center><?php echo $rows['loan_payment'];  ?></center></td>
                                                <td><center><?php echo $rows['loan_balance'];  ?></center></td>

                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm viewbtn" data-bs-toggle="modal" data-bs-target="#viewmodal"><i class="fa fa-eye"></i> </button>

                                                    <button type="submit" class="btn btn-primary btn-sm deletebtn" data-bs-toggle="modal" data-bs-target="#delete"><i class="fa fa-trash"></i>
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
                                             <input id="category" name="category" type="text" class="form-control" value="ATM" readonly=""><br/>
                                              <input id="p_address" name="permanent_address" type="text" class="form-control" value="Permanent Address" readonly=""><br/>
                                               <input id="email" name="email" type="email" class="form-control" value="Mailing Address" readonly="">
                                            </div>                         
                                        </div>

                                        <div class="row">
                                                     <div class="col-sm-6">
                                                        <label></label>
                                                          <input id="mobile_no" name="mobile_no" type="text" class="form-control" placeholder="Telephone/Mobile Number here!" readonly="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                        <label></label>
                                                          <input id="id_number" name="id_number" type="text" class="form-control" placeholder="ID Card Number here!" readonly="">
                                                    </div>
                                        </div>

                                        <div class="row">
                                                    <div class="col-sm-6">
                                                          <label></label>
                                                          <input id="mother_name" name="mother_name" type="text" class="form-control" placeholder="Mother's Name here!" readonly="">
                                                          <label></label>
                                                          <input id="father_name" name="father_name" type="text" class="form-control" placeholder="Father's Name here!" readonly="">
                                                          <label></label>
                                                          <input id="spouse_name" name="spouse_name" type="text" class="form-control" placeholder="Name of Spouse here!" readonly="">
                                                    </div>
                                                    <div class="col-sm-6">
                                                          <label></label>
                                                          <input id="mother_no" name="mother_no" type="text" class="form-control" placeholder="Contact Person here!" readonly="">
                                                          <label></label>
                                                          <input id="father_no" name="father_no" type="text" class="form-control" placeholder="Contact Number here!" readonly="">
                                                          <label></label>
                                                          <input id="spouse_no" name="spouse_no" type="text" class="form-control" placeholder="Spouse Contact Number here!" readonly="">
                                                    </div>  
                                        </div><br/>

                                        <div class="card-header">
                                            <strong class="card-title">Company Information</strong>
                                        </div><br/>
                                        <div class="row">
                                                    <div class="col-sm-4">
                                                          <label></label>
                                                          <input id="company_affiliated" name="company_affiliated" type="text" class="form-control" placeholder="Lastname here!" readonly="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                          <label></label>
                                                          <input id="company_address" name="company_address" type="text" class="form-control" placeholder="Firstname here!" readonly="">
                                                    </div>
                                                     <div class="col-sm-4">
                                                          <label></label>
                                                          <input id="company_no" name="company_no" type="text" class="form-control" placeholder="Middlename here!" readonly="">
                                                    </div>
                                        </div>

                                         <div class="row">
                                                    <div class="col-sm-6">
                                                          <label></label>
                                                          <input id="company_position" name="company_position" type="text" class="form-control" placeholder="Permanent Address here!" readonly="">
                                                    </div>
                                                     <div class="col-sm-6">
                                                          <label></label>
                                                          <input id="company_status" name="company_status" type="text" class="form-control" placeholder="Email Address here!" readonly="">
                                                    </div>
                                        </div><br/>

                                                                    <div class="card-header">
                            <strong class="card-title">Loan Information</strong>
                            </div><br/>
                            <div class="row">
                                        <div class="col-sm-4">
                                              <label for="loan_amount" class="control-label mb-1">Loan Amount</label>
                                              <input id="loan_amount" name="loan_amount" type="text" class="form-control" placeholder="Loan amount!" readonly="">
                                        </div>
                                         <div class="col-sm-4">
                                              <label for="loan_balance" class="control-label mb-1">Loan Balance</label>
                                              <input id="loan_balance" name="loan_balance" type="text" class="form-control" placeholder="Firstname here!" readonly="">
                                        </div>

                                        <div class="col-sm-4">
                                              <label for="loan_payment" class="control-label mb-1">Loan Payment</label>
                                              <input id="loan_payment" name="loan_payment" type="text" class="form-control" placeholder="Firstname here!" readonly="">
                                        </div>

                                        <div class="col-sm-4">
                                              <label for="loan_account" class="control-label mb-1">Loan Account</label>
                                              <input id="loan_account" name="loan_account" type="text" class="form-control" placeholder="Firstname here!" readonly="">
                                        </div>
                            </div>
                            </div><br/>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
<!-- end modal view -->



<!-- modal delete -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Approved Account</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <form action="delete_atm.php" method="POST">
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
                <label class="form-label">lastname</label>
                <input type="text" name="lname" class="form-control" value="<?php echo $sql['Lastname'] ?>"  Readonly>
                <label class="form-label">Position</label>
                <input type="text" name="position" class="form-control" value="<?php echo $sql['position'] ?>" Readonly>
                <label class="form-label">Birthday</label>
                <input type="text" name="lname" class="form-control" value="<?php echo $sql['birthday'] ?>"  Readonly>
                <label class="form-label">Address</label>
                <input type="text" name="lname" class="form-control" value="<?php echo $sql['p_address'] ?>"  Readonly><br>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

        $('#loan_amount').val(data[20]);
        $('#loan_account').val(data[19]);
        $('#loan_payment').val(data[21]);
        $('#loan_balance').val(data[22]);


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

            $('#loan_amount1').val(data[20]);
            $('#loan_account1').val(data[19]);
            $('#loan_payment1').val(data[21]);
            $('#loan_balance1').val(data[22]);
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
