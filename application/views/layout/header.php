<?php

  $session=$this->session->userdata('logged_user');

$myId=$session[0]->user_id;
$role_id=$session[0]->role_id;

  $this->db->where('user_id',$myId);
  $attendaceData=$this->db->get('tbl_attendance')->result();
  // print_r($attendaceData);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Plaza - CRM: Admin Panel</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <!-- CSS Libraries -->
  <!-- <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css"> -->
  <!-- <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css"> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">

 <!--  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css"> -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/components.css">
<!------datepicker---->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css" />
  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?=base_url()?>assets/js/stisla.js"></script>

 <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="<?=base_url()?>assets/js/bootstrap-toggle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
  <!-- JS Libraies -->
 <!--  <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script> -->
  <!-- <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script> -->

  <!-- Template JS File -->
  <script src="<?=base_url()?>assets/js/scripts.js"></script>
  <script src="<?=base_url()?>assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
 <!--  <script src="../assets/js/page/index.js"></script> -->
 <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>


  <link href='<?=base_url()?>assets/css/calendar.css' rel='stylesheet' />
<link href='<?=base_url()?>assets/css/daymain.css' rel='stylesheet' />
<link href='<?=base_url()?>assets/css/timemain.css' rel='stylesheet' />
<script src='<?=base_url()?>assets/js/calendar.js'></script>
<script src='<?=base_url()?>assets/js/interaction.js'></script>
<script src='<?=base_url()?>assets/js/daymain.js'></script>
<script src='<?=base_url()?>assets/js/timemain.js'></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  <script type="text/javascript" src="<?=base_url()?>assets/js/RowSorter.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="<?=base_url()?>assets/js/jquery.easypiechart.min.js"></script>

  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css"> -->
    <!--   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script> -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker-standalone.css">
      <script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap-datetimepicker.min.js"></script>
  <script>
  $(function() {
    $('.chart').easyPieChart({
      easing: 'easeOutBounce',
      onStep: function(from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
      }
    });
    var chart = window.chart = $('.chart').data('easyPieChart');
    $('.js_update').on('click', function() {
      chart.update(Math.random()*200-100);
    });
  });
  </script>
  <style type="text/css">
    .d-non{
      display:none;
    }
    .abc{
      color: crimson;
      font-family: monospace;
      font-size: 16px;
      font-weight: bold;
    }
    .dropdown-list
    {
      left:unset !important;
    }
    .badge-notify{
   background:red;
   position:relative;
   top: -16px;
   left: -10px;
}

.text-gray{
  color: gray;
}
.bg-gray{
background: #f3f3f3;
}
.timer {
    padding: 0;
    text-align: center;
    list-style: none;
}
.timer li {
    font-size: 46px;
    text-align: center;
    display: inline-block;
    color: #555;
    font-weight: 300;
}
.timer li.dots {
    font-size: 25px;
    padding: 16.67px 0;
}
.timer li.dots {
    vertical-align: top;
}
.timeline-2 {
    border-left: 2px solid #23b7e5;
    position: relative;
}
.time-item {

    padding-bottom: 10px;
    position: relative;
}
.item-info {
    margin-bottom: 15px;
    margin-left: 15px;
}
.timeline-2 .time-item:after {
    background-color: #ffffff;
    border-radius: 10px;
    border-style: solid;
    border-width: 2px;
    bottom: 0;
    content: '';
    height: 10px;
    left: 0;
    margin-left: -6px;
    position: absolute;
    top: 5px;
    width: 10px;
}
  </style>
<style type="text/css">




</style>
</head>

<body onload="startTime()">
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
         <!--  <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button> -->
            <!-- <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div> -->
          <!-- </div> -->
        </form>

        <ul class="navbar-nav navbar-right">

          <li class="dropdown dropdown-list-toggle " >
            <a href="javascript:void(0)" data-toggle="dropdown"  class="nav-link notification-toggle nav-link-lg"><i class="far fa-bell"></i>
              <?php
              if($this->load->get_var('unread_notifications')!=0){
              ?>
            <span class="badge badge-notify"><?=$this->load->get_var('unread_notifications')?></span>
          <?php } ?>
          </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a id="change_badge" href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">

                <?php
                $user_notifications = $this->global_model->get_user_notifications(false);
                if (!empty($user_notifications)) {
                    foreach ($user_notifications as $notification) { ?>
                            <!-- list item-->
                            <!-- list item-->
                            <?php if (!empty($notification->link)) {
                                $link = base_url() . $notification->link;
                            } else {
                                $link = '#';
                            }
                            ?>
                            <a href="<?php echo base_url() . $notification->link; ?>"
                               class="dropdown-item dropdown-item-unread';
                               } ?>">
                              <div class="dropdown-item-icon bg-primary text-white">
                                <i class="fas fa-code"></i>
                              </div>
                              <div class="dropdown-item-desc">
                                <?=$notification->value?>
                                <div class="time text-primary"><?php echo $notification->date; ?></div>
                              </div>

                            </a>
                    <?php }
                }
                ?>

              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">

            <img alt="image" src=" <?=base_url().'uploads/profile_pic/'.$session[0]->avatar?>" onerror="this.src='<?=base_url()?>assets/img/avatar/avatar-5.png';" class="rounded-circle mr-1">

            <div class="d-sm-none d-lg-inline-block">Hi, <?=$session[0]->fullname?></div></a>
            <div class="dropdown-menu dropdown-menu-right ml-n5">
              <?php
              // echo $lastLogin=date('H:i:s',strtotime($session[0]->last_login));
              // $cur=date_create(date('H:i:s'));
               // date_diff($cur,$lastLogin);
               // $date1=date_create("2013-03-15");
               //  $date2=date_create("2013-12-12");
               //  $diff=date_diff($date1,$date2);
                $datetime1 = new DateTime();
                $datetime2 = new DateTime($session[0]->last_login);
                $interval = $datetime1->diff($datetime2);
                $elapsed = $interval->format('Last Login: %h h %i min ago');

              // $date=date_create($session[0]->last_login);
              // echo date('Y-m-d');
              // $login_date = new DateTime($session[0]->last_login);
              //  $cur_date=date_default_timezone_set("Asia/kolkata");
              // // print_r($login_date);
              // $cur_date= date('H:i:s');
              // print_r( $login_date);
              // print_r($cur_date);
              // die;


              // $interval = $start_date->diff($end_date);
              // $hours   = $interval->format('%h');
              // $minutes = $interval->format('%i');
              // echo  'Diff. in minutes is: '.($hours * 60 + $minutes);
                              // echo date_format($date,"d/m/y H:i:s");
              ?>

          
              <div class="dropdown-title" style="padding: 10px"><?=$elapsed?></div>
              <a href="<?=base_url('User/userProfile')?>" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="<?=base_url('User/userDetails/').$session[0]->user_id?>" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> My Details
              </a>
             <!--  <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a> -->
              <div class="dropdown-divider"></div>
              <a href="<?=base_url('Login/logout')?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?=base_url('Dashboard/index')?>">PlazaCRM</a>
          </div>

          <ul class="sidebar-menu">
            <li><a class="nav-link" href="<?=base_url('Dashboard')?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
             <?php if($role_id!=3):?>
             <li><a class="nav-link" href="<?=base_url('Announcement/')?>"><i class="fas fa-bullhorn"></i> <span>Announcements </span>  <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></a></li>
           <?php endif; ?>
              <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Attendance</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=base_url('Attendance/timeHistory')?>"><span> <i class="far fa-clock"></i></span>Time History</a></li>
                <?php if($role_id!=3):?>
                  <li><a class="nav-link" href="<?=base_url('Attendance/timeChaneRequest')?>"><span> <i class="far fa-calendar-minus"></i></span>TimeChange Request</a></li>
                <?php endif;?>
                <li><a class="nav-link" href="<?=base_url('Attendance/updateCheckIn')?>"><span><i class="far fa-file-alt"></i></span>Update Check In</a></li>
                <li><a class="nav-link" href="<?=base_url('Attendance/attendanceReport')?>"><span><i class="far fa-file-alt"></i></span>Attendance Report</a></li>
                <!-- <li><a class="nav-link" href="<?=base_url('Attendance/markAttendance')?>"><span><i class="far fa-file-alt"></i></span>Mark Attendance</a></li> -->
              </ul>
            </li>
             <li><a class="nav-link" href="<?=base_url('Backupdatabase')?>"><i class="fas fa-database"></i> <span>Backup Database</span></a></li>

             <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-bug"></i> <span>Bugs <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?=base_url('Bugs/')?>"><span> <i class="fas fa-bug"></i></span>Bugs<i class="fa fa-check" aria-hidden="true" style="color:orange"></i> </a></li>
                  <!-- <li><a class="nav-link" href="<?=base_url('B/jobsApplications')?>"><span><i class="far fa-compass"></i></span>Jobs Application</a></li> -->
                </ul>
            </li>
            <?php if($role_id!=3):?>
            <li><a class="nav-link" href="<?=base_url('Client')?>"><i class="fas fa-users"></i><span>Client  <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></span></a></li>
          <?php endif; ?>
            <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown"><i class="fa fa-user"></i> <span>Department</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?=base_url('Department')?>"><span><i class="fa fa-user"></i></span>Department  <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></a></li>
                  </ul>
            </li>

            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fab fa-dribbble"></i> <span>Leave</span></a>
              <ul class="dropdown-menu">
                <?php if($role_id!=3):?>
                <li><a class="nav-link" href="<?=base_url('Leavemanagement/LeaveYearySection')?>"><i class="fab fa-telegram-plane"></i> <span>Leave Yearly</span> <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></a></li>
              <li><a class="nav-link" href="<?=base_url('Leavemanagement/LeavePolicySection')?>"><i class="fab fa-telegram-plane"></i> <span>Leave Policy</span> <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></a></li>
            <?php endif;?>
              <li><a class="nav-link" href="<?=base_url('Leavemanagement/index')?>"><i class="fab fa-telegram-plane"></i> <span>Leave Management</span> <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></a></li>
              </ul>
            </li>
            <?php if($role_id!=3):?>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-dollar-sign"></i> <span>Payroll</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?=base_url('Payroll/salaryTemplate')?>"><span><i class="far fa-money-bill-alt"></i></span>Salary Template  <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></a></li>
                  <li><a class="nav-link" href="<?=base_url('Payroll/hourlyTemplate')?>"><span>  <i class="far fa-clock"></i></span>Hourly Template  <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></a></li>
                  <li><a class="nav-link" href="<?=base_url('Payroll/manageSalary')?>"><span><i class="fas fa-dollar-sign"></i></span>Manage Salary  <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></a></li>
                  <li><a class="nav-link" href="<?=base_url('Payroll/empSalary')?>"><span><i class="fas fa-user-secret"></i></span>Employee Salary List  <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></a></li>
                  <li><a class="nav-link" href="<?=base_url('Payroll/makePayment')?>"><span><i class="fas fa-tasks"></i></span>Make Payment  <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></a></li>

                  <li><a class="nav-link" href="<?=base_url('Payroll/generatePaySlip')?>"><span><i class="fas fa-list"></i></span>Generate Payslip <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></a></li>
                  <!-- <li><a class="nav-link" href="<?=base_url('Payroll/payrollSummary')?>"><span><i class="fas fa-camera-retro"></i></span>Payroll Summary <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></a></li> -->
                  <li><a class="nav-link" href="<?=base_url('Payroll/advanceSalary')?>"><span><i class="fab fa-cc-mastercard"></i></span>Advance Salary <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></a></li>
                  <li><a class="nav-link" href="<?=base_url('Payroll/providentFund')?>"><span><i class="fas fa-briefcase"></i></span>Provident Fund</a></li>
                  <li><a class="nav-link" href="<?=base_url('Payroll/overTime')?>"><span><i class="far fa-clock"></i></span>Overtime</a></li>
                  <!-- <li><a class="nav-link" href="<?=base_url('Payroll/employeeAward')?>"><span><i class="fas fa-trophy"></i></span>Employee Award</a></li> -->

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="javascript:void(0)" class="nav-link has-dropdown"><i class="fab fa-dribbble"></i> <span>IP Restriction</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?=base_url('Restriction/ip_rest')?>"><span> <i class="fas fa-random"></i></span>IP Restriction<i class="fa fa-check" aria-hidden="true" style="color:orange"></i></a></li>
                 <!--  <li><a class="nav-link" href="<?=base_url('Performance/giveAppraisal')?>"><span><i class="fas fa-plus"></i></span>Give Appraisal</a></li>
                  <li><a class="nav-link" href="<?=base_url('Performance/performanceReport')?>"><span><i class="far fa-calendar"></i></span>Performance Report</a></li> -->

                </ul>
            </li>
             <!-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fab fa-dribbble"></i> <span>Performance</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?=base_url('Performance/indicator')?>"><span> <i class="fas fa-random"></i></span>Indicator<i class="fa fa-check" aria-hidden="true" style="color:orange"></i></a></li>
                  <li><a class="nav-link" href="<?=base_url('Performance/giveAppraisal')?>"><span><i class="fas fa-plus"></i></span>Give Appraisal</a></li>
                  <li><a class="nav-link" href="<?=base_url('Performance/performanceReport')?>"><span><i class="far fa-calendar"></i></span>Performance Report</a></li>

                </ul>
            </li> -->
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fa fa-lock"></i> <span>Permission</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=base_url('Permission')?>"><span><i class="fa fa-lock"></i></span>Set Permiss  <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></a></li>



              </ul>
            </li>
              <?php
            endif;
            ?>
             <!-- <li><a class="nav-link" href=""><i class="fas fa-envelope"></i> <span>Private Chat </span></a></li> -->

            <li><a class="nav-link" href="<?=base_url('Projects')?>"><i class="far fa-folder-open"></i><span>Projects  <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></span></a></li>










             <!-- <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown"><i class="fa fa-briefcase"></i> <span>Designation</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?=base_url('Designation')?>"><span><i class="fa fa-briefcase"></i></span>Designation  <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></a></li>



                  </ul>
                </li> -->

           <?php if($role_id!=3):?>
             <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-globe-europe"></i> <span>Recruitment <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?=base_url('Recruitment/jobsPosted')?>"><span> <i class="fas fa-ticket-alt"></i></span>Jobs Posted<i class="fa fa-check" aria-hidden="true" style="color:orange"></i> </a></li>
                 <!--  <li><a class="nav-link" href="<?=base_url('Recruitment/jobsApplications')?>"><span><i class="far fa-compass"></i></span>Jobs Application</a></li> -->
                </ul>
            </li>
          <?php endif;?>
            <!-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-bug"></i> <span>Bugs <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?=base_url('Bugs/')?>"><span> <i class="fas fa-bug"></i></span>Bugs<i class="fa fa-check" aria-hidden="true" style="color:orange"></i> </a></li>

                </ul>
            </li> -->


            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-globe-europe"></i> <span>Reports </span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?=base_url('User/generateReport')?>"><span> <i class="fas fa-ticket-alt"></i></span>Daily Reports </a></li>
                  <?php if($role_id!=3):?>
                  <li><a class="nav-link" href="<?=base_url('User/reportList')?>"><span><i class="far fa-compass"></i></span>View Report</a></li>
                <?php endif;?>
                  <!-- <li><a class="nav-link" href="<?=base_url('Utilities/gaolTracking')?>"><span><i class="far fa-compass"></i></span>Monthly Report</a></li>
                  <li><a class="nav-link" href="<?=base_url('User/TaskReport')?>"><span><i class="far fa-compass"></i></span>Task Report</a></li>
                  <li><a class="nav-link" href="<?=base_url('User/ProjectReport')?>"><span><i class="far fa-compass"></i></span>Project Reportt</a></li> -->
                </ul>
            </li>
            <?php if($role_id!=3):?>
             <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-globe-europe"></i> <span>Sales </span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?=base_url('Sales')?>"><span> <i class="fas fa-ticket-alt"></i></span>Invoice </a></li>
                </ul>
              </li>
              <?php endif;?>

               <li><a class="nav-link" href="<?=base_url('Task')?>"><i class="fas fa-tasks"></i><span>Tasks <i class="fa fa-check" aria-hidden="true" style="color:orange"></i></span></a></li>

              <?php if($role_id!=3):?>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fab fa-dribbble"></i> <span>Transaction</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?=base_url('Transaction/expense')?>"><span> <i class="far fa-circle"></i></span>Expense</a></li>
                  <li><a class="nav-link" href="<?=base_url('Transaction/deposit')?>"><span><i class="far fa-circle"></i></span>Deposit</a></li>
                  <li><a class="nav-link" href="<?=base_url('Transaction/transfer')?>"><span><i class="far fa-circle"></i></span>Transfer</a></li>
                  <li><a class="nav-link" href="<?=base_url('Transaction/TransactionReport')?>"><span><i class="far fa-circle"></i></span>Transaction Report</a></li>
                 <!--  <li><a class="nav-link" href="<?=base_url('Transaction/TransferReport')?>"><span><i class="far fa-circle"></i></span>Transfer Report</a></li> -->
                  <!-- <li><a class="nav-link" href="<?=base_url('Transaction/expense')?>"><span><i class="far fa-circle"></i></span>Balance Sheet</a></li>
                   <li><a class="nav-link" href="<?=base_url('Transaction/BankAndCash')?>"><span><i class="far fa-money-bill-alt"></i></span>Bank & Cash</a></li> -->
                </ul>
              </li>
             <?php endif; ?>

             <?php if($role_id!=3):?>
            <li><a class="nav-link" href="<?=base_url('User/user_list')?>"><i class="fas fa-user"></i> <span>Users</span></a></li>
            <?php endif; ?>






            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-globe-europe"></i> <span>Utilities </span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?=base_url('Utilities/holiday')?>"><span> <i class="fas fa-ticket-alt"></i></span>Holiday<i class="fa fa-check" aria-hidden="true" style="color:orange"></i> </a></li>
                  <!-- <li><a class="nav-link" href="<?=base_url('Utilities/gaolTracking')?>"><span><i class="far fa-compass"></i></span>Goal Tracking</a></li> -->
                </ul>
            </li>



            </ul>
        </aside>
      </div>
      <script>
          function startTime() {
          var today = new Date();
          var h = today.getHours();
          var m = today.getMinutes();
          var s = today.getSeconds();
          m = checkTime(m);
          s = checkTime(s);
          document.getElementById('txt').innerHTML =
          h + ":" + m + ":" + s;
          var t = setTimeout(startTime, 500);
          }
          function checkTime(i) {
          if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
          return i;
          }
      </script>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

              <div class="row">
                    <div class="col-md-6 bg-white">
                      <h4 class=" p-2">Dashboard</h4>
                    </div>
                  <div class="col-md-6 bg-white text-right ">
                    <div class="row p-2">
                      <div class="col-md-8 p-2 abc">
                        <span>
                            <?=date('l, d-M-Y')?>
                        </span>
                        <span id="txt"></span>
                       <!--  <div class="row">
                          <div class="col-md-6 text-align-right" >

                          </div>
                          <div class="col-md-6" >

                          </div>
                        </div> -->

                      </div>
                      <div class="col-md-4">
                        <?php
                          $ipArr=$this->global_model->getAllowedIP();
                          // $ipArr=$ip_arr;
                          // if(count($ipArr)>0){
                             if (in_array($this->input->ip_address(), $ipArr))
                              {
                            //   echo "Match found";
                               if(isset($_SESSION['clocked'])){
                                    if($_SESSION['clocked']==1){
                                      echo '<button class="btn btn-success check_btn2 chekcIn d-non" onclick="printTime(1)" d-Val="1"><i class="fas fa-sign-in-alt"></i> Checkin</button><button class="btn btn-danger check_btn2 checkOut" onclick="printTime(0)" d-Val="0"><i class="fas fa-sign-out-alt"></i> Checkout</button>';
                                    }else{
                                      echo '<button class="btn btn-success check_btn2 chekcIn" onclick="printTime(1)" d-Val="1"><i class="fas fa-sign-in-alt"></i> Checkin</button><button class="btn btn-danger check_btn2 checkOut d-non" onclick="printTime(0)" d-Val="0"><i class="fas fa-sign-out-alt"></i> Checkout</button>' ;
                                    }
                                }else{
                                    if($this->checkin_status==1){
                                          echo '<button class="btn btn-success check_btn2 chekcIn d-non" onclick="printTime(1)" d-Val="1"><i class="fas fa-sign-in-alt"></i> Checkin</button><button class="btn btn-danger check_btn2 checkOut" onclick="printTime(0)" d-val="0"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Checkout</button>';
                                    }else{
                                       echo '<button class="btn btn-success check_btn2 chekcIn" onclick="printTime(1)" d-Val="1"><i class="fas fa-sign-in-alt"></i> Checkin</button><button class="btn btn-danger check_btn2 checkOut d-non" onclick="printTime(0)" d-Val="0"><i class="fas fa-sign-out-alt"></i> Checkout</button>' ;
                                    }
                                   
                                }
                              }
                            // }
                        ?>

                      </div>
                    </div>

                  </div>
              </div>
  <script type="text/javascript">

    $(document).on('click','.check_btn2',function(){
      var d_time=document.getElementById('txt').innerHTML;
      var elem=$(this);
      var id=elem.attr('d-Val');
      var type;
      if(id==1){
        type=1;
        // console.log("Check In: ");
      }else{
        // console.log("Check Out: ");
        type=0;
      }
      $.ajax({
       url:"<?=base_url('Attendance/markMyAttendance')?>",
        type:"post",
        data:{d_time:d_time,type:type},
       success:function(response)
           {
             // console.log(response);
             response=JSON.parse(response);
             if(response.code==1){
              if(id==1){
                $('.chekcIn').hide();
                $('.checkOut').show();
              }else{
                $('.checkOut').hide();
                $('.chekcIn').show();
              }
             }
           }
      })
    });
    function printTime(id){
      // var d_time=document.getElementById('txt').innerHTML;
      // var type;
      // if(id==1){
      //   type=1;
      //   console.log("Check In: ");
      // }else{
      //   console.log("Check Out: ");
      //   type=0;
      // }
      // $.ajax({
      //  url:"<?=base_url('Attendance/markMyAttendance')?>",
   //      type:"post",
   //      data:{d_time:d_time,type:type},
      //  success:function(response)
      //      {
      //        console.log(response);
      //      }
      // });
      // var old_time=new Date("11:27:45");

      // var now_=new Date(document.getElementById('txt').innerHTML);
      // console.log(" OLD : "+old_time);
      // console.log(" Now : "+d_time);
      // var dif_=(now_.getTime())-old_time.getTime();
      // console.log(" Difference : "+dif_);
    }
 </script>
 <script>

    $(document).on('click','#change_badge',function(){
      $.ajax({
        type:'POST',
        url:'<?=base_url()?>Test/update_notification',
        success:function(response){
          if(response=="1"){
            $('.badge').hide();
          }
        }
      })
    })
    </script>
