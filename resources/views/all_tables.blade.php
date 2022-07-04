<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Event</title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="{{'assets/img/favicon.png'}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{'assets/css/bootstrap.min.css'}}">

    <!-- Fontawesome CSS --> 
	<link rel="stylesheet" href="{{'assets/plugins/fontawesome/css/fontawesome.min.css'}}">
	<link rel="stylesheet" href="{{'assets/plugins/fontawesome/css/all.min.css'}}">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{'assets/css/feather.css'}}">

    <!-- Datetable CSS-->
    <link rel="stylesheet" href="{{'assets/css/dataTables.bootstrap4.min.css'}}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{'assets/css/select2.min.css'}}">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{'assets/css/style.css'}}">
    
    
    

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Header -->
        <div class="header">
            <!-- Logo -->
            <div class="header-left">
                <a href="admin_dashboard.html" class="logo">
                    <img src="{{'assets/img/logo.png'}}" alt="Logo">
                </a>
                <a href="admin_dashboard.html" class="logo logo-small">
                    <img src="{{'assets/img/logo-small.png'}}" alt="Logo" width="30" height="30">
                </a>
            </div>
            <!-- /Logo -->
            
            <a href="javascript:void(0);" id="toggle_btn">
                <i class="feather-menu"></i>
            </a>
            
            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search" />
                    <button class="btn" type="submit"><i class="feather-search"></i></button>
                </form>
            </div>
            
            <!-- Mobile Menu Toggle -->
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar">
                <i class="feather-menu" aria-hidden="true"></i>
            </a>
            <!-- /Mobile Menu Toggle -->
            
            <!-- Header Right Menu -->
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fas fa-bell"></i>
                        <span class="badge badge-pill bg-danger float-right">1</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="John Doe" src="assets/img/user.jpg" class="img-fluid">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">V</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">L</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">G</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">V</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="ad-text">Jones Ferdinand</span>
                        <span class="user-img">
                            <img src="assets/img/profile/user-06.jpg" alt="">
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <a class="dropdown-item" href="admin_login.html">Logout</a>
                    </div>
                </li>
            </ul>
            <!-- /Header Right Menu -->
        </div>
        <!-- /Header -->

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="{{url('admin_dashboard')}}"><i class="fas fa-chart-pie"></i><span class="side-txt">Dashboard</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-th-large"></i><span class="side-txt">Bookings</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li class="active"><a href="{{url('all_bookings')}}">All Bookings</a></li>
                                <li><a href="{{url('pending_bookings')}}">Pending Bookings</a></li>
                                <li><a href="{{url('all_tables')}}">All Tables</a></li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('contributors')}}"><i class="fas fa-chart-pie"></i><span class="side-txt">Contributors</span></a>
                        </li>
                        <li>
                            <a href="{{url('process_login')}}"><i class="fas fa-chart-pie"></i><span class="side-txt">View Seats</span></a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper dashboard-wrap">

            <div class="content container-fluid">

                <!-- Main Page -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                <div style="overflow-x:auto;overflow-y: auto;">

                                <h6 class="card-title text-bold">All Table Details</h6>
                                <!-- <input type="text" placeholder="Search.."  id="ip2" style="float:right"  > -->
                              
                                <table class="datatable table table-stripped">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Table Category</th>
                                            <th>Table Number</th>
                                            
                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=0;@endphp
                                        @foreach($vip as $vips)
                                        <tr>
                                            <td class="text-nowrap">
                                                <div>{{$i+=1}}</div>
                                            </td>
                                            <td>
                                               {{$vips->table_name}} 
                                               
                                            </td>												 <td>
                                               {{$vips->table_number}} 
                                               
                                            </td>       	
                                            
                                        </tr>
                                       @endforeach
                                       @foreach($platinum as $platinums)
                                        <tr>
                                            <td class="text-nowrap">
                                                <div>{{$i+=1}}</div>
                                            </td>
                                            <td>
                                               {{$platinums->table_name}} 
                                               
                                            </td>                                                <td>
                                               {{$platinums->table_number}} 
                                               
                                            </td>           
                                            
                                        </tr>
                                       @endforeach
                                       @foreach($gold as $golds)
                                        <tr>
                                            <td class="text-nowrap">
                                                <div>{{$i+=1}}</div>
                                            </td>
                                            <td>
                                               {{$golds->table_name}} 
                                               
                                            </td>                                                <td>
                                               {{$golds->table_number}} 
                                               
                                            </td>           
                                            
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main PAGE -->
                <!-- Notification -->
                <div class="notification-box">
                    <div class="msg-sidebar notifications msg-noti">
                        <div class="topnav-dropdown-header">
                            <span>Messages</span>
                        </div>
                        <div class="drop-scroll msg-list-scroll">
                            <ul class="list-box">
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">R</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Richard Miles </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item new-message">
                                            <div class="list-left">
                                                <span class="avatar">J</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">John Doe</span>
                                                <span class="message-time">1 Aug</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">T</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Tarah Shropshire </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">M</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Mike Litorus</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">C</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Catherine Manseau </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">D</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Domenic Houston </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">B</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Buster Wigton </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">R</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Rolland Webber </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">C</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Claire Mapes </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">M</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Melita Faucher</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">J</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Jeffery Lalor</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">L</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Loren Gatlin</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">T</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Tarah Shropshire</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="chat.html">See all messages</a>
                        </div>
                    </div>
                </div>
                <!-- /Notification -->
            </div>
            <!-- Page Wrapper -->
        </div>
        <!-- /Main Wrapper -->
    </div>

    <!-- jQuery -->
    <script src="{{'assets/js/jquery-3.6.0.min.js'}}"></script>

    <!-- Bootstrap Core JS -->
	<script src="{{'assets/js/bootstrap.bundle.min.js'}}"></script>

    <!-- Datatable JS -->
<script src="{{'assets/js/jquery.dataTables.min.js'}}"></script>
<script src="{{'assets/js/dataTables.bootstrap4.min.js'}}"></script>
    <!-- Slimscroll JS -->
    <script src="{{'assets/js/jquery.slimscroll.js'}}"></script>
    
    <!-- Select2 JS -->
    <script src="{{'assets/js/select2.min.js'}}"></script>

    <!-- Datetimepicker JS -->
    <script src="{{'assets/js/moment.min.js'}}"></script>
    <script src="{{'assets/plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js'}}"></script>

    <!-- Chart JS -->
    <script src="{{'assets/js/apexcharts.min.js'}}"></script>

    <!-- Custom JS -->
    <script src="{{'assets/js/app.js'}}"></script>
 
</body>

</html>