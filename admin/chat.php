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
                    <li>
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
                        <a href="#"> <i class="menu-icon fa fa-envelope"></i>Chat</a>
                    </li>
                    <li>
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
                        <h1>Dashboard</h1>
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
                        <div class="row">
                            <div class="col-sm-4">
                                <h4 class="card-title mb-0">Message Me!!!</h4>
                            </div>
                            <!--/.col-->
                            
                            <!--/.col-->


                        </div>
                        <!--/.row-->
                        <!-- chat -->
                        <div class="chart-wrapper mt-4">
                           <div class="container py-2 px-4">
                              <!-- For demo purpose-->

                              <div class="row rounded-lg overflow-hidden shadow">
                                <!-- Users box-->
                                <div class="col-5 px-0">
                                  <div class="bg-white">

                                    <div class="bg-gray px-4 py-2 bg-light">
                                      <p class="h5 mb-0 py-1">Recent</p>
                                    </div>

                                    <div class="messages-box">
                                      <div class="list-group rounded-0">
                                        <a class="list-group-item list-group-item-action active text-white rounded-0">
                                          <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                            <div class="media-body ml-4">
                                              <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">25 Dec</small>
                                              </div>
                                              <p class="font-italic mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                          </div>
                                        </a>

                                        <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                          <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                            <div class="media-body ml-4">
                                              <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">14 Dec</small>
                                              </div>
                                              <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur. incididunt ut labore.</p>
                                            </div>
                                          </div>
                                        </a>

                                        <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                          <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                            <div class="media-body ml-4">
                                              <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">9 Nov</small>
                                              </div>
                                              <p class="font-italic text-muted mb-0 text-small">consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                          </div>
                                        </a>

                                        <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                          <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                            <div class="media-body ml-4">
                                              <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">18 Oct</small>
                                              </div>
                                              <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                          </div>
                                        </a>

                                        <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                          <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                            <div class="media-body ml-4">
                                              <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">17 Oct</small>
                                              </div>
                                              <p class="font-italic text-muted mb-0 text-small">consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                          </div>
                                        </a>

                                        <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                          <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                            <div class="media-body ml-4">
                                              <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">2 Sep</small>
                                              </div>
                                              <p class="font-italic text-muted mb-0 text-small">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                          </div>
                                        </a>

                                        <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                          <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                            <div class="media-body ml-4">
                                              <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">30 Aug</small>
                                              </div>
                                              <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                          </div>
                                        </a>

                                        <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                          <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                            <div class="media-body ml-4">
                                              <div class="d-flex align-items-center justify-content-between mb-3">
                                                <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">21 Aug</small>
                                              </div>
                                              <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                          </div>
                                        </a>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- Chat Box-->
                                <div class="col-7 px-0">
                                  <div class="px-4 py-5 chat-box bg-white">
                                    <!-- Sender Message-->
                                    <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                      <div class="media-body ml-3">
                                        <div class="bg-light rounded py-2 px-3 mb-2">
                                          <p class="text-small mb-0 text-muted">Test which is a new approach all solutions</p>
                                        </div>
                                        <p class="small text-muted">12:00 PM | Aug 13</p>
                                      </div>
                                    </div>

                                    <!-- Reciever Message-->
                                    <div class="media w-50 ml-auto mb-3">
                                      <div class="media-body">
                                        <div class="bg-primary rounded py-2 px-3 mb-2">
                                          <p class="text-small mb-0 text-white">Test which is a new approach to have all solutions</p>
                                        </div>
                                        <p class="small text-muted">12:00 PM | Aug 13</p>
                                      </div>
                                    </div>

                                    <!-- Sender Message-->
                                    <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                      <div class="media-body ml-3">
                                        <div class="bg-light rounded py-2 px-3 mb-2">
                                          <p class="text-small mb-0 text-muted">Test, which is a new approach to have</p>
                                        </div>
                                        <p class="small text-muted">12:00 PM | Aug 13</p>
                                      </div>
                                    </div>

                                    <!-- Reciever Message-->
                                    <div class="media w-50 ml-auto mb-3">
                                      <div class="media-body">
                                        <div class="bg-primary rounded py-2 px-3 mb-2">
                                          <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
                                        </div>
                                        <p class="small text-muted">12:00 PM | Aug 13</p>
                                      </div>
                                    </div>

                                    <!-- Sender Message-->
                                    <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                                      <div class="media-body ml-3">
                                        <div class="bg-light rounded py-2 px-3 mb-2">
                                          <p class="text-small mb-0 text-muted">Test, which is a new approach</p>
                                        </div>
                                        <p class="small text-muted">12:00 PM | Aug 13</p>
                                      </div>
                                    </div>

                                    <!-- Reciever Message-->
                                    <div class="media w-50 ml-auto mb-3">
                                      <div class="media-body">
                                        <div class="bg-primary rounded py-2 px-3 mb-2">
                                          <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
                                        </div>
                                        <p class="small text-muted">12:00 PM | Aug 13</p>
                                      </div>
                                    </div>

                                  </div>

                                  <!-- Typing area -->
                                  <form action="#" class="bg-light">
                                    <div class="input-group">
                                      <input type="text" placeholder="Type a message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
                                      <div class="input-group-append">
                                        <button id="button-addon2" type="submit" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
                                      </div>
                                    </div>
                                  </form>
                                  <br/><br/>
                                </div>
                              </div>
                            </div>
                        </div>
                        <!-- end chat -->
                    </div>
                  
                </div>
            </div>


 <!-- Modal -->
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






</body>

</html>
