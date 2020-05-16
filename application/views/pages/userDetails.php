<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<!-- <style>
.round{
    
    width: 128px;
    height: 128px;
    border: 2px solid white;
}
.bg-dark-too{
    font-size: 18px;
    color:white;
    text-align:center;
    background:#3a3f51;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="row mt-4">
      <div class="col-lg-12">
        <div class="card">
          
          <div class="row p-2" style="background:#013356">
            <div class="col-md-2">
                <div class="row my-1">
                    <div class="col" align="center">
                        <p class="text-white">1</p>
                        <span class="text-white">Open Projects</span><br>
                        <a href="javascript:void(0)"  >More Info <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col" align="center">
                        <p class="text-white">0</p>
                        <span class="text-white">Completed Projects</span><br>
                        <a href="javascript:void(0)"  >More Info <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            <div class="row my-1">
                    <div class="col" align="center">
                        <p class="text-white">1</p>
                        <span class="text-white">Open Task</span><br>
                        <a href="javascript:void(0)"  >More Info <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col" align="center">
                        <p class="text-white">0</p>
                        <span class="text-white">Completed Tasks</span><br>
                        <a href="javascript:void(0)"  >More Info <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div></div>
            <div class="col-md-4 p-2 text-white" align="center">
                <img src="http://plazacrm.com/uploads/file2019-11-07-00-59-36.jpg" class="round rounded-circle">
                <p><h4><strong>Rahul Kumar</strong></h4></p>
                <p>EMP ID:123456</p>
                <p>IT/Collaborative <i class="fal fa-long-arrow-alt-right"></i> Cordinator</p>
            </div>
            <div class="col-md-2">
                <div class="row my-1">
                    <div class="col" align="center">
                        <p class="text-white">1</p>
                        <span class="text-white">Monthly Attendance</span><br>
                        <a href="javascript:void(0)"  >More Info <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col" align="center">
                        <p class="text-white">0</p>
                        <span class="text-white">Monthly Leave</span><br>
                        <a href="javascript:void(0)"  >More Info <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="row my-1">
                    <div class="col" align="center">
                        <p class="text-white">1</p>
                        <span class="text-white">Monthly Absent</span><br>
                        <a href="javascript:void(0)"  >More Info <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col" align="center">
                        <p class="text-white">0</p>
                        <span class="text-white">Total Award</span><br>
                        <a href="javascript:void(0)"  >More Info <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
          </div>
          <div class="row bg-dark-too py-2">
            <div class="col">
                <p>0:0:0</p>
                <p>Projects Hours</p>
               
            </div>
            <div class="col">
                <p>0:0:0</p>
                <p>Tasks Hours</p>
        
            </div>
            <div class="col">
                <p>0:0:0</p>
                <p>This month Working Hours</p>
                
            </div>
            <div class="col">
                <p>0:0:0</p>
                <p>Working Hours</p>
           
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-3 p-1">
        <div class="card">
            <ul>
                <li style="border-bottom: 1px solid grey; list-style: none"><a href="javascript:void(0)">Basic Details</li>
                <li style="border-bottom: 1px solid grey; list-style: none"><a href="javascript:void(0)">Basic Details</li>
                <li style="border-bottom: 1px solid grey; list-style: none"><a href="javascript:void(0)">Basic Details</li>
            </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div class="card">
            <ul>
                <li style="border-bottom: 1px solid grey; list-style: none"><a href="javascript:void(0)">Basic Details</li>
                <li style="border-bottom: 1px solid grey; list-style: none"><a href="javascript:void(0)">Basic Details</li>
                <li style="border-bottom: 1px solid grey; list-style: none"><a href="javascript:void(0)">Basic Details</li>
            </ul>
        </div>
      </div>
    </div>
</div>


<script type="text/javascript">
  $(document).ready(function() {
    $('#job_post').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
  
<script>
    $( function() {
    $( "#slider-range-min" ).slider({
      range: "min",
      value: 37,
      min: 1,
      max: 700,
      slide: function( event, ui ) {
      $( "#amount" ).val( "$" + ui.value );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range-min" ).slider( "value" ) );
    } );
  </script>
  






 <script>
    $('.file-upload').file_upload();
</script> -->

<style type="text/css">

.tab 
{
   overflow: hidden;
    background-color:white;
}

.tab button 
{
    background-color: #f5f3f3;
    float: left;
    border: 1px solid;
    outline: none;
    cursor: pointer;
    padding: 7px 20px;
    transition: 0.3s;
    font-size:12px;
}

.tab button:hover 
{
   background-color: #ddd;
}

.tab button.active 
{
   background-color: #ccc;
}

.tabcontent 
{
   width:100%;
   display: none;
   padding: 6px 12px;
   border:0px solid;
}
.inputDnD .form-control-file {
  position: relative;
  width: 100%;
  height: 100%;
  min-height: 6em;
  outline: none;
  visibility: hidden;
  cursor: pointer;
  background-color: gray;
  /*box-shadow: 0 0 5px solid gray;*/
}
.inputDnD .form-control-file:before {
  content: attr(data-title);
  position: absolute;
  top: 0.5em;
  left: 0;
  width: 100%;
  min-height: 5em;
  line-height: 2em;
  padding-top: 1.5em;
  opacity: 1;
  visibility: visible;
  text-align: center;
  border: 1px dashed  gray;
  padding: 35px;
  /*transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);*/
  overflow: hidden;
}
.inputDnD .form-control-file:hover:before {
  border-style: dashed;
 /* box-shadow: inset 0px 0px 0px 0.25em  gray;*/
}
@media only screen and (min-width: 576px){
  .modal-dialog {
      max-width: 623px;
      margin: 1.75rem auto;
  }
}
.tabs-left {
  border-bottom: none;
  border-right: 1px solid #ddd;
}

.tabs-left>li {
  float: none;
 margin:0px;
 border-bottom:1px solid gray;

  
}
.tabs-left li a{
/*line-height: 1.42857143;*/
    border-bottom-color: #ddd;
    border-right-color: transparent;
   font-weight: 600;
    border: none;
    color: #000000db;
    border-radius: 0px;
    margin: 0px;
    position: relative;
    display: block;
    padding: 10px 15px;
}
.tabs-left li a:hover{
    border-bottom-color: #ddd;
    border-right-color: transparent;
    /*line-height: 1.42857143;*/
    color: white;
    background: #f90;
    border: none;
    text-decoration: none;
    border-radius: 0px;
    margin: 0px;
    position: relative;
    display: block;
    padding: 10px 15px;
}
.tabs-left>li.active>a,
.tabs-left>li.active>a:focus {
    border-bottom-color: #ddd;
    border-right-color: transparent;
   line-height: 1.42857143;
 color: white;
    background: #f90;
    border: none;
    border-radius: 0px;
    text-decoration: none;
    margin: 0px;
    position: relative;
    display: block;
    padding: 10px 15px;
}
.nav-tabs>li>a:hover {
    /* margin-right: 2px; */
    /*line-height: 1.42857143;*/
    border: 1px solid transparent;
    /* border-radius: 4px 4px 0 0; */
}
.tabs-left>li.active>a::after{content: "";
    position: absolute;
    top: 10px;
    right: -10px;
    border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  
  border-left: 10px solid #f90;
    display: block;
    width: 0;}
</style>

<style type="text/css">
.bg-gray-dark 
{
    background-color: #3a3f51;
    color: #ffffff !important;
}
.img-style
{
    height: 126px;
    border: 4px solid white;
}
.back
{
    background-color:white;
}
/*.active, .back:hover
{
    background-color: #23b7e5 !important;
    color:white;
}*/
</style>




<?php
$activities_info = $this->db->where(array('user' => $profile_info->user_id))->order_by('activity_date', 'DESC')->get('tbl_activities')->result();

$user_info = $this->db->where('user_id', $profile_info->user_id)->get('tbl_users')->row();
$designation = $this->db->where('designations_id', $profile_info->designations_id)->get('tbl_designations')->row();
if (!empty($designation)) {
    $department = $this->db->where('departments_id', $designation->departments_id)->get('tbl_departments')->row();
}
$all_project_info = $this->User_model->my_permission('tbl_project', $profile_info->user_id);

$p_started = 0;
$p_in_progress = 0;
$p_completed = 0;
$project_time = 0;
$project_time = $this->User_model->my_spent_time($profile_info->user_id, true);

if (!empty($all_project_info)) {
  // print_r($all_project_info);
    foreach ($all_project_info as $v_user_project) {
      // print_r($v_user_project->project_status);
      // echo ' || <br>';
        if ($v_user_project->project_status == 'started') {
          $p_started += 1;
            // $p_started += count($v_user_project->project_status);
        }
        if ($v_user_project->project_status == 'in_progress') {
          $p_in_progress += 1;
            // $p_in_progress += count($v_user_project->project_status);
        }
        if ($v_user_project->project_status == 'completed') {
          $p_completed += 1;
            // $p_completed += count($v_user_project->project_status);
        }
    }

}
$totalProject=$p_started+$p_in_progress+$p_completed;

$tasks_info = $this->User_model->my_permission('tbl_task', $profile_info->user_id);

$t_not_started = 0;
$t_in_progress = 0;
$t_completed = 0;
$t_deferred = 0;
$t_waiting_for_someone = 0;
$task_time = 0;
$task_time = $this->User_model->my_spent_time($profile_info->user_id);
if (!empty($tasks_info)):foreach ($tasks_info as $v_tasks):
    if ($v_tasks->task_status == 'not_started') {
      $t_not_started += 1;
        // $t_not_started += count($v_tasks->task_status);
    }
    if ($v_tasks->task_status == 'in_progress') {
      $t_in_progress += 1;
        // $t_in_progress += count($v_tasks->task_status);
    }
    if ($v_tasks->task_status == 'completed') {
      $t_completed += 1;
        // $t_completed += count($v_tasks->task_status);
    }

endforeach;
endif;
$totalTasks=$t_not_started+$t_in_progress+$t_completed;
?>
<body class="bg-light">
    <div class="mb-5">
        <div>
            <div class="row p-3 mt-5 " style="background-color:#1B344E">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-6">
                           <h6 class="text-white"><?php
                                    echo $p_in_progress + $p_started;
                                    ?></h6>
                           <ul class="text-white p-0" style="list-style:none;font-size:13px">
                              <li class="text-light">Open Projects</li>
                              <a href="<?=base_url("Projects")?>" class="text-decoration-none"><li class="text-primary">More info <i class="fa fa-arrow-circle-right"></i></li></a>
                           </ul>
                        </div>
                        <div class="col-sm-6">
                           <h6 class="text-white"><?php
                                    echo $t_in_progress + $t_not_started;
                                    ?></h6>
                           <ul class="text-white p-0" style="list-style:none;font-size:13px">
                              <li class="text-light">Open Tasks</li>
                              <a href="<?=base_url("Task")?>" class="text-decoration-none"><li class="text-primary">More info <i class="fa fa-arrow-circle-right"></i></li></a>
                           </ul>
                        </div>
                        <div class="col-sm-6">
                           <h6 class="text-white"><?php
                                    echo $p_completed;
                                    ?></h6>
                           <ul class="text-white p-0" style="list-style:none;font-size:13px">
                              <li class="text-light">Complete Projects</li>
                              <a href="<?=base_url("Projects")?>" class="text-decoration-none"><li class="text-primary">More info <i class="fa fa-arrow-circle-right"></i></li></a>
                           </ul>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="text-white"><?php
                                    echo $t_in_progress;
                                    ?></h6>
                            <ul class="text-white p-0" style="list-style:none;font-size:13px">
                              <li class="text-light">Complete Tasks</li>
                              <a href="<?=base_url("Task")?>" class="text-decoration-none"><li class="text-primary">More info <i class="fa fa-arrow-circle-right"></i></li></a>
                           </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 m-auto text-center">
                     <?php if ($profile_info->avatar): ?>
                        <img src="<?= base_url() . $profile_info->avatar; ?>"
                              class="rounded-circle img-fluid w-50 img-style">
                    <?php else: ?>
                        <img src="image/img2.jpg" alt="Employee_Image"
                              class="rounded-circle img-fluid w-50 img-style">
                        ;
                    <?php endif; ?>
                   <!--  <img src="image/img2.jpg" alt="..." class="rounded-circle img-fluid w-50 img-style"> -->
                    <h4 class="text-white"><?= $profile_info->fullname ?></h4>
                    <h6 class="text-white">EMP ID:<?=$profile_info->employment_id ?></h6>
                </div>
                <div class="offset-1 col-sm-4">
                    <div class="row">
                        <div class="row">
                            <div class="col-sm-6">
                               <h6 class="text-white"><?php
                                    if (!empty($total_attendance)) {
                                        echo $total_attendance;
                                    } else {
                                        echo '0';
                                    }
                                    ?> / <?php echo $total_days; ?></h6>
                               <ul class="text-white p-0" style="list-style:none;font-size:13px">
                                  <li class="text-light">Monthly Attendance</li>
                                  <a href="<?=base_url('Attendance/attendanceReport')?>" class="text-decoration-none"><li class="text-primary">More info <i class="fa fa-arrow-circle-right"></i></li></a>
                               </ul>
                            </div>
                            <div class="col-sm-6">
                               <h6 class="text-white"><?php
                                    if (!empty($total_absent)) {
                                        echo $total_absent;
                                    } else {
                                        echo '0';
                                    }
                                    ?></h6>
                               <ul class="text-white p-0" style="list-style:none;font-size:13px">
                                  <li class="text-light">Monthly Absent</li>
                                  <a href="<?=base_url('Attendance/attendanceReport')?>" class="text-decoration-none"><li class="text-primary">More info <i class="fa fa-arrow-circle-right"></i></li></a>
                               </ul>
                            </div>
                            <div class="col-sm-12">
                               <h6 class="text-white"><?php
                                    if (!empty($total_leave)) {
                                        echo $total_leave;
                                    } else {
                                        echo '0';
                                    }
                                    ?></h6>
                               <ul class="text-white p-0" style="list-style:none;font-size:13px">
                                  <li class="text-light">Monthly Leave</li>
                                  <a href="<?=base_url('Leavemanagement')?>" class="text-decoration-none"><li class="text-primary">More info <i class="fa fa-arrow-circle-right"></i></li></a>
                               </ul>
                            </div>
                            <!-- <div class="col-sm-6">
                                <h6 class="text-white"><?php
                                    if (!empty($total_award)) {
                                        echo $total_award;
                                    } else {
                                        echo '0';
                                    }
                                    ?></h6>
                                <ul class="text-white p-0" style="list-style:none;font-size:13px">
                                  <li class="text-light">Monthly Awards</li>
                                  <a href="#" class="text-decoration-none"><li class="text-primary">More info <i class="fa fa-arrow-circle-right"></i></li></a>
                               </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="row text-center m-auto">
                    <p class="text-white m-auto text-center"><?php
                    if (!empty($department)) {
                        $dname = $department->deptname;
                    } else {
                        $dname ='Undefined_department';
                    }
                    if (!empty($designation->designations)) {
                        $des = ' &rArr; ' . $designation->designations;
                    } else {
                        $des = '& ' . 'designations';;
                    }
                    echo $dname . ' ' . $des;
                    if (!empty($department->department_head_id) && $department->department_head_id == $profile_info->user_id) { ?></p>
                     <strong
                            class="label label-warning">Department Head</strong>
                    <?php }
                    ?>
                </div>
            </div>
            <div class="row text-center bg-gray-dark p-3">
                <div class="col-md-3">
                    <h4 class="text-white"><?= $this->User_model->get_time_spent_results($project_time) ?></h4>
                    <h6 class="text-white">Projects Hours</h6>
                </div>      
                <div class="col-md-3">
                    <h4 class="text-white"><?= $this->User_model->get_time_spent_results($task_time) ?></h4>
                    <h6 class="text-white">Tasks Hours</h6>
                </div>  
                <div class="col-md-3">
                    <h4 class="text-white"><?php
                    $m_min = 0;
                    $m_hour = 0;

                    if (!empty($this_month_working_hour)) {
                        foreach ($this_month_working_hour as $v_month_hour) {
                            $m_min += $v_month_hour['minute'];
                            $m_hour += $v_month_hour['hour'];
                        }
                    }
                    if ($m_min >= 60) {
                        $m_hour += intval($m_min / 60);
                        $m_min = intval($m_min % 60);
                    }
                    echo round($m_hour) . " h : " . round($m_min) . " min";;
                    ?></h4>
                    <h6 class="text-white">This month Working Hours</h6>
                </div>  
                <div class="col-md-3">
                    <h4 class="text-white"><?php
                    $min = 0;
                    $hour = 0;
                    if (!empty($all_working_hour)) {
                        foreach ($all_working_hour as $v_all_hours) {
                            $min += $v_all_hours['minute'];
                            $hour += $v_all_hours['hour'];

                        }
                    }
                    if ($min >= 60) {
                        $hour += intval($min / 60);
                        $min = intval($min % 60);
                    }
                    echo round($hour) . " h : " . round($min) . " min";;
                    ?></h4>
                    <h6 class="text-white">Working Hours</h6>
                </div>                  
            </div>
        </div>
        
    <div class="row mt-4">
        <div class="col-sm-3">
           <div class="card shadow"  id="myDIV">
              <ul style="list-style:none" class="nav nav-tabs tabs-left sideways bg-white">
                <li class="w-100 side_br active">
                    <a href="#base_details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Basic Details</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#bank_details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Bank Details</a>
                </li>
           
                <li class="w-100 side_br">
                    <a href="#docu_details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Document Details</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#salary_details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Salary Details</a>
                </li>
                <!-- <li class="w-100 side_br">
                    <a href="#timecard_details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Timecard Details</a>
                </li> -->
                <li class="w-100 side_br">
                    <a href="#leave_details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Leave Details</a>
                </li>

                <!-- <li class="w-100 side_br">
                    <a href="#prov_fund" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Provident Fund</a>
                </li> -->
              <!--   <li class="w-100 side_br">
                    <a href="#overtime_details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Overtime Details</a>
                </li> -->
                 <li class="w-100 side_br">
                    <a href="#tasks" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Tasks</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#projects" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Projects</a>
                </li>
                <!--  <li class="w-100 side_br">
                    <a href="#bugs" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Bugs</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#activites" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Activities</a>
                </li> -->

              </ul>
           </div>
        </div>

        <div class="col-md-9">
            <div class="tab-content">
                <!----------basic Details------->
                <div class="tab-pane active" id="base_details">
                    <div class="container bg-white card ">
                        <div class="row pt-3">
                            <div class="col-md-10"><h6 class="mt"><?= ucwords($profile_info->fullname) ?></h6></div>
                            <?php if (!empty($edited)) { ?>
                              <div class="col-md-2 text-right"> 
                                <span class="text-primary font-weight-bold " data-toggle="modal" data-target="#updateUser" id="update">Update</span>
                            </div>
                             <?php } ?>
                        </div>
                      <div class="line mt-2"></div>
                      <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class=" offset-2 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold  label-style">EMP ID :</label>
                                </div>
                                <div class="col-sm-6">
                                  <?= $profile_info->employment_id ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class=" offset-2 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold  label-style">Username :</label>
                                </div>
                                <div class="col-sm-6">
                                   <label for="exampleInputEmail1"><?= $user_info->username ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-2 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Joining Date:</label>
                                </div>
                                <div class="col-sm-6">
                                   <?php if (!empty($profile_info->joining_date)) { ?>
                                    <p class="form-control-static"><?php echo strftime(config_item('date_format'), strtotime($profile_info->joining_date)); ?></p>
                                  <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-2 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Date Of Birth:</label>
                                </div>
                                <div class="col-sm-6">
                                   <?php if (!empty($profile_info->date_of_birth)) { ?>
                                    <p class="form-control-static"><?php echo strftime(config_item('date_format'), strtotime($profile_info->date_of_birth)); ?></p>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-2 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Fathers Name:</label>
                                </div>
                                <div class="col-sm-6">
                                     <?php if (!empty($profile_info->father_name)) { ?>
                                    <p class="form-control-static"><?php echo "$profile_info->father_name"; ?></p>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class=" offset-2 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Email :</label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1"><?=$user_info->email?></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class=" offset-2 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Mobile :</label>
                                </div>
                                <div class="col-sm-6">
                                  <?php echo "$profile_info->mobile"; ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-1 col-sm-5 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Present Address :</label>
                                </div>
                                <div class="col-sm-6">
                                  <?php echo "$profile_info->present_address"; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-2 col-sm-3 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Full Name :</label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1"><?= ucwords($profile_info->fullname) ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-2 col-sm-3 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Password :</label>
                                </div>
                                <div class="col-sm-6">
                                 <p class="form-control-static"><a data-toggle="modal" data-target="#updatepassword"
                                     href="<?= base_url() ?>admin/user/reset_password/<?= $user_info->user_id ?>">Reset_password</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-2 col-sm-3 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Gender:</label>
                                </div>
                                <div class="col-sm-6">
                                   <?php if (!empty($profile_info->gender)) { ?>
                                    <p class="form-control-static"><?php echo lang($profile_info->gender); ?></p>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-1 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Maratial Status:</label>
                                </div>
                                <div class="col-sm-6">
                                      <?php if (!empty($profile_info->maratial_status)) { ?>
                                    <p class="form-control-static"><?php echo lang($profile_info->maratial_status); ?></p>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-1 col-sm-4 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Mothers Name:</label>
                                </div>
                                <div class="col-sm-6">
                                    <?php if (!empty($profile_info->mother_name)) { ?>
                                    <p class="form-control-static"><?php echo "$profile_info->mother_name"; ?></p>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-2 col-sm-3 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Phone :</label>
                                </div>
                                <div class="col-sm-6">
                                    <p class="form-control-static"><?php echo "$profile_info->phone"; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="offset-2 col-sm-3 text-right">
                                    <label for="exampleInputEmail1" class="font-weight-bold label-style">Skype id :</label>
                                </div>
                                <div class="col-sm-6">
                                       <p class="form-control-static"><?php echo "$profile_info->skype"; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>

                <!----------basic Details End------->

                <!----------Bank Details------->
                <div class="tab-pane " id="bank_details">
                    <div class="container bg-white card ">
                        <div class="row pt-3">
                            <div class="col-md-10"><h6 class="mt">Bank Details</h6></div>
                            <?php if (!empty($edited)) { ?>
                            <div class="col-md-2 text-right"> 
                                <span class="text-primary font-weight-bold " data-toggle="modal" data-target="#bankModal" id="update">Update</span>
                            </div>
                             <?php } ?>
                        </div>
                         <?php
                    $all_bank_info = $this->db->where('user_id', $profile_info->user_id)->get('tbl_employee_bank')->result();
                    ?>
                      <div class="line mt-2"></div>
                      <div class="">
                            <table class="table table-striped border">
                                <thead>
                                    <tr>
                                       <th scope="col" class="fs1">Bank</th>
                                       <th scope="col" class="fs1">Name of Account</th>
                                       <th scope="col" class="fs1">Routing Number</th>
                                       <th scope="col" class="fs1"> Account Number</th>
                                       <th scope="col" class="fs1"> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php if (!empty($all_bank_info)) {
                                foreach ($all_bank_info as $v_bank_info) { ?>
                                    <tr>
                                        <td><?= $v_bank_info->bank_name ?></td>
                                        <td><?= $v_bank_info->account_name ?></td>
                                        <td><?= $v_bank_info->routing_number ?></td>
                                        <td><?= $v_bank_info->account_number ?></td>
                                        <td class="hidden-print">
                                            <?= btn_edit_modal('admin/user/new_bank/' . $v_bank_info->user_id . '/' . $v_bank_info->employee_bank_id) ?>
                                            <?= btn_delete('admin/user/delete_user_bank/' . $v_bank_info->user_id . '/' . $v_bank_info->employee_bank_id) ?>
                                        </td>
                                    </tr>
                                <?php }
                            } ?> 
                                </tbody>
                            </table>
                      </div>
                    </div>
                </div>
                <!----------Bank Details-End ------>

                <!----------Document Details------->
                <div class="tab-pane " id="docu_details">
                    <div class="container bg-white card ">
                        <div class="row pt-3">
                            <div class="col-md-10"><h6 class="mt">User Document</h6></div>
                            <?php if (!empty($edited)) { ?>
                            <div class="col-md-2 text-right"> 
                                <span class="text-primary font-weight-bold " data-toggle="modal" data-target="#documentModal" id="update">Update</span>
                            </div>
                            <?php
                          }
                          ?>
                        </div>
                      <div class="line mt-2"></div>
                   <div class="panel-body form-horizontal">
                        <!-- CV Upload -->
                        <?php
                        $document_info = $this->db->where('user_id', $profile_info->user_id)->get('tbl_employee_document')->row();
                        if (!empty($document_info->resume)): ?>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Resume: </label>
                                <div class="col-sm-8">
                                    <p class="form-control-static">
                                        <a href="<?php echo base_url() . $document_info->resume; ?>"
                                           target="_blank" style="text-decoration: underline;">View Resume</a>
                                        <a href="<?= base_url('admin/user/delete_documents/resume/' . $document_info->document_id) ?>"
                                           class="btn btn-xs" title="" data-toggle="tooltip"
                                           data-placement="top"
                                           onclick="return confirm('You are about to delete a record. This cannot be undone. Are you sure?');"
                                           data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                    </p>
                                </div>
                            </div>

                        <?php endif; ?>
                        <?php if (!empty($document_info->offer_letter)): ?>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Offer_latter: </label>
                                <div class="col-sm-8">
                                    <p class="form-control-static">
                                        <a href="<?php echo base_url() . $document_info->offer_letter; ?>"
                                           target="_blank"
                                           style="text-decoration: underline;">View Offer_letter</a>
                                        <a href="<?= base_url('admin/user/delete_documents/offer_letter/' . $document_info->document_id) ?>"
                                           class="btn btn-xs" title="" data-toggle="tooltip"
                                           data-placement="top"
                                           onclick="return confirm('You are about to delete a record. This cannot be undone. Are you sure?');"
                                           data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                    </p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($document_info->joining_letter)): ?>
                            <div class="form-group">
                                <label class="col-sm-4 control-label"><?= lang('joining_latter') ?>
                                    : </label>
                                <div class="col-sm-8">
                                    <p class="form-control-static">
                                        <a href="<?php echo base_url() . $document_info->joining_letter; ?>"
                                           target="_blank"
                                           style="text-decoration: underline;">View joining_letter</a>
                                        <a href="<?= base_url('admin/user/delete_documents/joining_letter/' . $document_info->document_id) ?>"
                                           class="btn btn-xs" title="" data-toggle="tooltip"
                                           data-placement="top"
                                           onclick="return confirm('You are about to delete a record. This cannot be undone. Are you sure?');"
                                           data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                    </p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($document_info->contract_paper)): ?>
                            <div class="form-group">
                                <label class="col-sm-4 control-label"><?= lang('contract_paper') ?>
                                    : </label>
                                <div class="col-sm-8">
                                    <p class="form-control-static">
                                        <a href="<?php echo base_url() . $document_info->contract_paper; ?>"
                                           target="_blank"
                                           style="text-decoration: underline;">View contract_paper</a>
                                        <a href="<?= base_url('admin/user/delete_documents/contract_paper/' . $document_info->document_id) ?>"
                                           class="btn btn-xs" title="" data-toggle="tooltip"
                                           data-placement="top"
                                           onclick="return confirm('You are about to delete a record. This cannot be undone. Are you sure?');"
                                           data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                    </p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($document_info->id_proff)): ?>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">id_prof : </label>
                                <div class="col-sm-8">
                                    <p class="form-control-static">
                                        <a href="<?php echo base_url() . $document_info->id_proff; ?>"
                                           target="_blank"
                                           style="text-decoration: underline;">view id_prof</a>
                                        <a href="<?= base_url('admin/user/delete_documents/id_proff/' . $document_info->document_id) ?>"
                                           class="btn btn-xs" title="" data-toggle="tooltip"
                                           data-placement="top"
                                           onclick="return confirm('You are about to delete a record. This cannot be undone. Are you sure?');"
                                           data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                    </p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($document_info->other_document)): ?>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">other_document
                                    : </label>
                                <div class="col-sm-8">
                                    <?php
                                    $uploaded_file = json_decode($document_info->other_document);

                                    if (!empty($uploaded_file)):
                                        foreach ($uploaded_file as $sl => $v_files):

                                            if (!empty($v_files)):
                                                ?>
                                                <p class="form-control-static">
                                                    <a href="<?php echo base_url() . 'uploads/' . $v_files->fileName; ?>"
                                                       target="_blank"
                                                       style="text-decoration: underline;"><?= $sl + 1 . '. ' . 'view other_document'?></a>
                                                </p>
                                                <?php
                                            endif;
                                        endforeach;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    </div>
                </div>
                <!----------Document Details-End ------>

               <!----------Salary Details------->
                <div class="tab-pane " id="salary_details">
                    <div class="container bg-white card ">
                        <div class="row pt-3">
                            <div class="col-md-10"><h6 class="mt">Salary Details</h6></div>
                            <div class="col-md-2 text-right"> 
                                <span class="text-primary font-weight-bold " data-toggle="modal" data-target="#bankModal" id="update">Update</span>
                            </div>
                        </div>
                      <div class="line mt-2"></div>
                      <?php
                      if (!empty($emp_salary_info)) {
                          ?>
                      <div class="panel-body">
                        <div class="">
                            <label for="field-1" class="col-sm-5 control-label"><strong>Salary_grade
                                    :</strong></label>

                            <p class="form-control-static"><?php echo((!empty($emp_salary_info->salary_template_id)) ? $emp_salary_info->salary_grade : $emp_salary_info->hourly_grade); ?></p>

                        </div>
                        <div class="">
                            <label for="field-1"
                                   class="col-sm-5 control-label"><strong>Basic_salary
                                    :</strong>

                            </label>
                            <?php if (!empty($emp_salary_info->salary_template_id)) {
                                $basic_salary = $emp_salary_info->basic_salary;
                            } else {
                                $basic_salary = $emp_salary_info->hourly_rate;
                            }
                            if (empty($basic_salary)) {
                                $basic_salary = 0;
                            }
                            ?>

                            <p class="form-control-static"><?php

                                $curency = $this->db->where('code', config_item('default_currency'))->get('tbl_currencies')->row();

                                echo display_money($basic_salary, $curency->symbol);

                                ?></p>

                        </div>
                        <?php if (!empty($emp_salary_info->overtime_salary)) { ?>
                            <div class="">

                                <label for="field-1"

                                       class="col-sm-5 control-label"><strong>Overtime

                                        <small>(<?= lang('per_hour') ?>)</small>

                                        :</strong> </label>

                                <p class="form-control-static">

                                    <?php echo display_money($emp_salary_info->overtime_salary, $curency->symbol); ?>

                                </p>

                            </div>
                        <?php } ?>


                        <!-- ***************** Salary Details  Ends *********************-->


                        <!-- ******************-- Allowance Panel Start **************************-->
                        <?php
                        $total_salary = 0;
                        $total_deduction = 0;
                        if (!empty($emp_salary_info->salary_template_id)) { ?>
                            <div class="col-sm-6">

                                <div class="row panel panel-custom" style="margin-left: -30px">

                                    <div class="panel-heading">

                                        <div class="panel-title">

                                            <strong>Allowances</strong>

                                        </div>

                                    </div>

                                    <div class="panel-body">

                                        <?php

                                        if (!empty($salary_allowance_info)):foreach ($salary_allowance_info as $v_allowance_info):
                                            ?>

                                            <div class="">

                                                <label

                                                    class="col-sm-6 control-label"><strong><?php echo $v_allowance_info->allowance_label; ?>

                                                        : </strong></label>

                                                <p class="form-control-static"><?php echo display_money($v_allowance_info->allowance_value, $curency->symbol) ?></p>

                                            </div>

                                            <?php $total_salary += $v_allowance_info->allowance_value; ?>

                                        <?php endforeach; ?>

                                        <?php else: ?>

                                            <h2> Nothing_to_display</h2>

                                        <?php endif; ?>

                                    </div>

                                </div>

                            </div><!-- ********************Allowance End ******************-->
                                  <!-- ************** Deduction Panel Column  **************-->

                            <div class="col-sm-6">

                                <div class=" panel panel-custom" style="margin-right: -30px">

                                    <div class="panel-heading">

                                        <div class="panel-title">

                                            <strong>Deductions</strong>

                                        </div>

                                    </div>

                                    <div class="panel-body">

                                        <?php

                                        if (!empty($salary_deduction_info)):foreach ($salary_deduction_info as $v_deduction_info):

                                            ?>

                                            <div class="">

                                                <label

                                                    class="col-sm-6 control-label"><strong><?php echo $v_deduction_info->deduction_label; ?>

                                                        : </strong></label>

                                                <p class="form-control-static"><?php

                                                    echo display_money($v_deduction_info->deduction_value, $curency->symbol);

                                                    ?></p>

                                            </div>

                                            <?php $total_deduction += $v_deduction_info->deduction_value ?>

                                        <?php endforeach; ?>

                                        <?php else: ?>

                                            <h2>Nothing_to_display</h2>

                                        <?php endif; ?>

                                    </div>

                                </div>

                            </div><!-- ****************** Deduction End  *******************-->
                        <?php } ?>
                        <div class="form-horizontal col-sm-8 pull-right">

                            <div class="panel panel-info" style="margin-right: -30px">

                                <div class="panel-heading">

                                    <div class="panel-title">

                                        <strong>Total_salary_details</strong>

                                    </div>

                                </div>

                                <div class="panel-body">

                                    <div class="">

                                        <label

                                            class="col-sm-6 control-label"><strong>Gross_salary: </strong></label>

                                        <p class="form-control-static"><?php

                                            if (!empty($total_salary) || !empty($basic_salary)) {

                                                $total = $total_salary + $basic_salary;
                                                if (!empty($total)) {
                                                    $total = $total;
                                                } else {
                                                    $total = 0;
                                                }

                                                echo display_money($total, $curency->symbol);

                                            }

                                            ?></p>

                                    </div>

                                    <div class="">

                                        <label

                                            class="col-sm-6 control-label"><strong>Total_deduction

                                                : </strong></label>

                                        <p class="form-control-static"><?php

                                            if (!empty($total_deduction)) {

                                                echo display_money($total_deduction, $curency->symbol);

                                            }

                                            ?></p>

                                    </div>

                                    <div class="">

                                        <label class="col-sm-6 control-label"><strong>Net_salary: </strong></label>

                                        <p class="form-control-static"><?php
                                            if (!empty($total)) {
                                                $total = $total;
                                            } else {
                                                $total = 0;
                                            }

                                            $net_salary = $total - $total_deduction;

                                            echo display_money($net_salary, $curency->symbol);

                                            ?></p>

                                    </div>

                                </div>

                            </div>

                        </div><!-- ****************** Total Salary Details End  *******************-->

                    </div>
                      <?php } else {

                      echo  '<span>no_data</span>';

                    } ?>
                    </div>
                </div>
                <!----------Salary Details-End ------>

                <!----------Timecard Details------->
                <div class="tab-pane " id="timecard_details">
                  <div class="container bg-white card ">
                    <div class="row pt-3">
                      <div class="col-md-10"><h6 class="mt">Timecard Details</h6>
                      </div>
                      <div class="col-md-2 text-right"> 
                        <span class="text-primary font-weight-bold " data-toggle="modal" data-target="#bankModal" id="update">Update</span>
                      </div>
                    </div>
                    <div class="line mt-2"></div>
                  <form id="attendance-form" role="form" enctype="multipart/form-data"
                  action="<?php echo base_url(); ?>User/userDetails/<?= $profile_info->user_id ?>/6"
                  method="post"
                  class="form-horizontal form-groups-bordered">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-2 col-sm-2">
                            <label for="exampleInputEmail1" class="label-style">Month <span class="text-danger">*</span></label>
                          </div>
                          <div class="col-sm-4">
                            <div class='input-group date form-group' id='datetimepicker10'>
                              <input type='text' class="form-control" name="date" value="<?php
                            if (!empty($date)) {
                                echo date('Y-n', strtotime($date));
                            }
                            ?>" autocomplete="off"/>
                              <span class="input-group-addon">
                                <span ><i class="fa fa-calendar"></i></span>
                              </span>
                            </div>
                          </div>
                          <div class="col-sm-1">
                            <button type="submit" class="btn btn-primary butn  font-weight-bold">Go</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                 <?php if (!empty($attendace_info)): ?>
                <div class="card shadow p-3 mt-4">
                 
                    <div class="row">
                      <div class="col-sm-12">
                         <h6 class="font-weight-bold">Works Hours Details of <?php echo date('F-Y', strtotime($date));; ?></h6>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="">
                        <?php
                        foreach ($attendace_info as $week => $v_attndc_info):
                          ?>
                        <div class="row mt-2">
                           <div class="col-md-12">
                              <h6 class="font-weight-bold text-color">Week : <?=$week; ?></h6>
                           </div>
                           <div class="col-md-12 line1"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped  table-bordered">
                                    <thead>
                                        <tr>
                                            <?php
                                        if (!empty($v_attndc_info)): foreach ($v_attndc_info as $date => $attendace):
                                            $total_hour = 0;
                                            $total_minutes = 0;
                                            ?>
                                            <th>
                                                <?= strftime(config_item('date_format'), strtotime($date)) ?>                                                 
                                            </th>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           <?php
                                    if (!empty($v_attndc_info)):foreach ($v_attndc_info as $date => $v_attendace):

                                        $total_hh = 0;
                                        $total_mm = 0;

                                        ?>
                                        <?php
                                        if (!empty($v_attendace)) 
                                        {
                                            foreach ($v_attendace as $v_attandc) {
                                                if ($v_attandc->attendance_status == 1) {

                                                    // calculate the start timestamp
                                                    $startdatetime = strtotime($v_attandc->date_in . " " . $v_attandc->clockin_time);
                                                    // calculate the end timestamp
                                                    $enddatetime = strtotime($v_attandc->date_out . " " . $v_attandc->clockout_time);
                                                    // calulate the difference in seconds
                                                    $difference = $enddatetime - $startdatetime;
                                                    $years = abs(floor($difference / 31536000));
                                                    $days = abs(floor(($difference - ($years * 31536000)) / 86400));
                                                    $hours = abs(floor(($difference - ($years * 31536000) - ($days * 86400)) / 3600));
                                                    $mins = abs(floor(($difference - ($years * 31536000) - ($days * 86400) - ($hours * 3600)) / 60));#floor($difference / 60);
                                                    $total_mm += $mins;
                                                    $total_hh += $hours;
                                                    // output the result
                                                    //echo round($hoursDiff) . " : " . round($minutesDiffRemainder) . " m";
                                                } elseif ($v_attandc->attendance_status == 'H') {
                                                    $holiday = 1;
                                                } elseif ($v_attandc->attendance_status == '3') {
                                                    $leave = 1;
                                                } elseif ($v_attandc->attendance_status == '0') {
                                                    $absent = 1;
                                                }
                                            }
                                        }

                                        ?>
                                        <td>
                                          <?php
                                            if ($total_mm > 59) {
                                                $total_hh += intval($total_mm / 60);
                                                $total_mm = intval($total_mm % 60);
                                            }
                                            $total_hour += $total_hh;
                                            $total_minutes += $total_mm;
                                            if ($total_hh != 0 || $total_mm != 0) 
                                            {
                                                echo $total_hh . " : " . $total_mm . " m";
                                            } 
                                            elseif (!empty($holiday)) 
                                            {
                                                echo '<span style="font-size: 12px;" class="label label-info std_p">Holiday</span>';
                                            } 
                                            elseif (!empty($leave)) 
                                            {
                                                echo '<span style="font-size: 12px;" class="label label-warning std_p">On_leave</span>';
                                            } 
                                            elseif (!empty ($absent)) 
                                            {
                                                echo '<span style="font-size: 12px;" class="label label-danger std_p"> Absent</span>';
                                            } 
                                            else 
                                            {
                                                echo $total_hh . " : " . $total_mm . " m";
                                            }
                                          ?>
                                          </td>
                                            <?php
                                        $holiday = NULL;
                                        $leave = NULL;
                                        $absent = NULL;
                                    endforeach;
                                    endif;
                                    ?>
                                          
                                        </tr>
                                    <tr>
                                        <td colspan="2" class="text-right">
                                            <strong
                                                style="margin-right: 10px; ">Total_working_hour
                                                : </strong>
                                        </td>
                                        <td>
                                            <?php
                                            if ($total_minutes >= 60) {
                                                $total_hour += intval($total_minutes / 60);
                                                $total_minutes = intval($total_minutes % 60);
                                            }
                                            echo $total_hour . " : " . $total_minutes . " m";
                                            ?>
                                        </td>
                                    </tr>
                                  </tbody>
                            </table>
                          </div>
                        </div>
                        <?php endforeach; ?>
                          </div>
                      </div>
                   
                   <?php endif; ?>
                </div>
              </div>
                <!----------Timecard Details-End ------>

                 <!----------Leave Details ------>
                    <div class="tab-pane " id="leave_details">
                        <div class="container bg-white card ">
                            <div class="row pt-3">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold">Leave Details Of <?=ucwords($profile_info->fullname) ?></h6>
                                </div>
                            </div>
                            <div class="line"></div>
                        <div class="row p-2">
                            <table class="table table-striped  ">
                                <tbody>
                                  <?php $leaveSum=0;?>
                                  <?php $leaveTaken=0;?>
                                  <?php $red="";?>
                                  <?php foreach($myLeaveDetails as $leave):?>
                                      <?php
                                      $leaveSum+=$leave['leaveDays'];
                                      $leaveTaken+=$leave['leaveDuration'];
                                       $red=($leave['leaveDuration']==$leave['leaveDays']) ? "text-danger" : "text-success";
                                      ?>
                                  <tr class="border-bottom">
                                      <td><strong><?=ucwords($leave['cat_name'])?>:</strong></td>
                                      <td class="<?=$red?> font-weight-bold" style="    font-size: 16px;"><?=$leave['leaveDuration']?>/<?=$leave['leaveDays']?></td>
                                  </tr>
                                  <?php endforeach;?>
                                  <tr class="border-bottom">
                                      <td><strong>Leaves :</strong></td>
                                      <td class="<?=$red?> font-weight-bold"><?=$leaveTaken?>/<?=$leaveSum?></td>
                                  </tr>     
                                 
                              </tbody>
                            </table>
                        </div>
                        </div> 
                         <div class="card shadow p-3 mt-4 h-50">
                            <div class="row">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold">Leave Report</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                              <table class="table table-striped  ">
                                  <tbody>

                                    
                                    <?php $leaveSum_=0;?>
                                    <?php $leaveTaken_=0;?>
                                    <?php $red="";?>
                                    <?php foreach($myLeaveReport as $leave):?>
                                        <?php
                                        $leaveSum_+=$leave['leaveDays'];
                                        $leaveTaken_+=$leave['leaveDuration'];
                                         $red=($leave['leaveDuration']==$leave['leaveDays']) ? "text-danger" : "text-success";
                                        ?>
                                    <tr class="border-bottom">
                                        <td><strong><?=ucwords($leave['cat_name'])?>:</strong></td>
                                        <td class="<?=$red?> font-weight-bold" style="    font-size: 16px;"><?=$leave['leaveDuration']?>/<?=$leave['leaveDays']?></td>
                                    </tr>
                                    <?php endforeach;?>
                                    <tr class="border-bottom">
                                        <td><strong>Leaves :</strong></td>
                                        <td class="font-weight-bold"><?=$leaveTaken?>/<?=$leaveSum?></td>
                                    </tr>     
                                   
                                </tbody>
                              </table>
                        </div> 
                        
                    </div>
                  <!----------Leave Details End ------>

                  <!----------Provident fund ------>
                    <div class="tab-pane  " id="prov_fund">
                        <div class="container bg-white card ">
                            <div class="row pt-3">
                                <div class="col-sm-10">
                                   <h6 class="font-weight-bold mt-2"><i class="fa fa-calendar"></i> Provident Fund <?=$year?></h6>
                                </div>
                                <div class="col-sm-2">
                                    <div class="bg-primary w-50 p-2 m-auto text-center"data-toggle="tooltip" data-placement="top" title="Download PDF">
                                        <i class="fa fa-file-pdf-o text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <form data-parsley-validate="" novalidate="" role="form" enctype="multipart/form-data"action="<?= base_url(); ?>User/userDetails/<?= $profile_info->user_id ?>/8"          method="post" class="form-horizontal form-groups-bordered">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="offset-2 col-sm-1">
                                                <label for="exampleInputEmail1" class="label-style">Year  <span class="text-danger">*</span></label>
                                            </div>
                                             <div class="col-sm-4">
                                                <div class='input-group date form-group' id='datetimepicker11'>
                                                  <input type='text' class="form-control" name="date" value="<?php if (!empty($year)) {  echo $year; }?>" autocomplete="off"/>
                                                  <span class="input-group-addon">
                                                    <span ><i class="fa fa-calendar"></i></span>
                                                  </span>
                                                </div>
                                            </div>
                                            <div class=" col-sm-1">
                                                <a href="provident.php"><button type="submit" class="btn btn-primary butn text-white font-weight-bold">Go</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <table class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="fs1">Overtime Date</th>
                                                <th scope="col" class="fs1">Overtime Hour</th>
                                                <th scope="col" class="fs1">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                          $total_amount = 0;
                                          $curency = $this->db->get('tbl_currencies')->row();
                                          ?>
                                          <?php if (!empty($provident_fund_info)) {
                                              foreach ($provident_fund_info as $key => $v_provident_fund) {
                                                  $month_name = date('F', strtotime($year . '-' . $key)); // get full name of month by date query

                                                  $curency = $this->db->get('tbl_currencies')->row();
                                                  if (!empty($v_provident_fund)) {
                                                      foreach ($v_provident_fund as $provident_fund) { ?>
                                                          <tr>
                                                              <td><?php echo $month_name ?></td>
                                                              <td><?= strftime(config_item('date_format'), strtotime($provident_fund->paid_date)) ?></td>
                                                              <td><?php echo display_money($provident_fund->salary_payment_deduction_value, $curency->symbol);
                                                                  $total_amount += $provident_fund->salary_payment_deduction_value;
                                                                  ?></td>

                                                          </tr>
                                                          <?php
                                                          $key++;
                                                      };
                                                      $total_amount = $total_amount;
                                                  };

                                              }
                                          }; ?>
                                           <tr class="total_amount">
                                                <td colspan="2" class="text-right">
                                                    <strong>Total provident_fund
                                                        : </strong></td>
                                                <td colspan="3" style="padding-left: 8px;"><strong><?= display_money($total_amount, $curency->symbol);
                                                        ?></strong></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>  
                    </div>
                  <!----------Provident fund End ------>

                  <!----------overtime Details ------>
                    <div class="tab-pane " id="overtime_details">
                        <div class="container bg-white card ">
                            <div class="row pt-3">
                                <div class="col-sm-10">
                                   <h6 class="font-weight-bold mt-2"><i class="fa fa-calendar"></i> Overtime_details<?=$year?></h6>
                                </div>
                                <div class="col-sm-2">
                                    <div class="bg-primary w-50 p-2 m-auto text-center"data-toggle="tooltip" data-placement="top" title="Download PDF">
                                        <i class="fa fa-file-pdf-o text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <form id="attendance-form" role="form" enctype="multipart/form-data"
          action="<?php echo base_url(); ?>User/userDetails/<?= $profile_info->user_id ?>/9" method="post" class="form-horizontal form-groups-bordered">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="offset-2 col-sm-1">
                                                <label for="exampleInputEmail1" class="label-style">Year <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class='input-group date form-group' id='datetimepicker12'>
                                                  <input type='text' class="form-control" name="date" value="<?php
                                                  if (!empty($overtime_year)) { echo $overtime_year; } ?>" autocomplete="off"/>
                                                  <span class="input-group-addon">
                                                    <span ><i class="fa fa-calendar"></i></span>
                                                  </span>
                                                </div>
                                            </div>
                                            <div class=" col-sm-1">
                                                <a href="provident.php"><button type="submit" class="btn btn-primary butn text-white font-weight-bold">Go</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </form>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <table class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="fs1">Payment Month</th>
                                                <th scope="col" class="fs1">Payment Date</th>
                                                <th scope="col" class="fs1">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $key = 1;
                                        $hh = 0;
                                        $mm = 0;
                                        if (!empty($all_overtime_info)) {
                                            foreach ($all_overtime_info as $key => $v_overtime_info) {
                                                if (!empty($v_overtime_info)) {
                                                    foreach ($v_overtime_info as $v_overtime) {
                                                        if ($v_overtime->status == 'pending') {
                                                            $status = '<strong class="label label-warning">'.'Pending'.'</strong>';
                                                        } elseif ($v_overtime->status == 'approved') {
                                                            $status = '<strong class="label label-success">' .  'approved' . '</strong>';
                                                        } else {
                                                            $status = '<strong class="label label-danger">' . $v_overtime->status . '</strong>';
                                                        }
                                                        ?>
                                                        <tr>
                                                            <td><?= strftime(config_item('date_format'), strtotime($v_overtime->overtime_date)) ?></td>
                                                            <td><?php echo $v_overtime->overtime_hours; ?></td>
                                                            <td><?= $status ?>

                                                                <?php
                                                                if ($this->session->userdata('user_type') == 1) {
                                                                    if ($v_overtime->status == 'pending') { ?>
                                                                        <a data-toggle="tooltip" data-placment="top"
                                                                           title="Approved"
                                                                           href="<?= base_url() ?>admin/utilities/change_overtime_status/approved/<?= $v_overtime->overtime_id; ?>"
                                                                           class="btn btn-xs btn-success ml"><i
                                                                                class="fa fa-check"></i> </a>
                                                                        <a data-toggle="tooltip" data-placment="top"
                                                                           title="Reject"
                                                                           href="<?= base_url() ?>admin/utilities/change_overtime_status/rejected/<?= $v_overtime->overtime_id; ?>"
                                                                           class="btn btn-xs btn-danger ml"><i
                                                                                class="fa fa-times"></i></a>
                                                                    <?php } elseif ($v_overtime->status == 'rejected') { ?>
                                                                        <a data-toggle="tooltip" data-placment="top"
                                                                           title="Approved"
                                                                           href="<?= base_url() ?>admin/utilities/change_overtime_status/approved/<?= $v_overtime->overtime_id; ?>"
                                                                           class="btn btn-xs btn-success ml"><i
                                                                                class="fa fa-check"></i> </a>
                                                                    <?php } elseif ($v_overtime->status == 'approved') { ?>
                                                                        <a data-toggle="tooltip" data-placment="top"
                                                                           title="Reject"
                                                                           href="<?= base_url() ?>admin/utilities/change_overtime_status/rejected/<?= $v_overtime->overtime_id; ?>"
                                                                           class="btn btn-xs btn-danger ml"><i
                                                                                class="fa fa-times"></i></a>
                                                                    <?php }
                                                                }
                                                                ?>
                                                            </td>
                                                            <?php $hh += $v_overtime->overtime_hours; ?>
                                                            <?php $mm += date('i', strtotime($v_overtime->overtime_hours)); ?>

                                                        </tr>
                                                        <?php
                                                        $key++;
                                                    };
                                                };
                                            };
                                        };
                                        ?>
                                        <tr class="total_amount">
                                            <td colspan="1" class="text-right">
                                                <strong>Total_overtime_hour : </strong></td>
                                            <td colspan="2" style="padding-left: 8px;"><strong><?php
                                                    if ($hh > 1 && $hh < 10 || $mm > 1 && $mm < 10) {
                                                        $total_mm = '0' . $mm;
                                                        $total_hh = '0' . $hh;
                                                    } else {
                                                        $total_mm = $mm;
                                                        $total_hh = $hh;
                                                    }
                                                    if ($total_mm > 59) {
                                                        $total_hh += intval($total_mm / 60);
                                                        $total_mm = intval($total_mm % 60);
                                                    }
                                                    echo $total_hh . " : " . $total_mm . " m";

                                                    ?></strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                  <!----------overtime Details End ------>

                  <!----------tasks ------>
                    <div class="tab-pane " id="tasks">
                        <div class="container bg-white card ">
                            <div class="row pt-3">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold">Total Task Time Spent</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row p-5 m-auto">
                                <div class="col-md-12  text-center">

                                    <h1 class="timer">0:0:9</h1>
                                </div>
                                <div class="col-md-12  text-center">
                                   <h6 class="label-style">Hours &nbsp; Minutes &nbsp; Seconds</h6> 
                                </div>                     
                            </div>
                        </div> 
                    
                        <div class="card shadow p-3 mt-4">
                            <div class="row">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold ">Task Reports</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row p-1" align="center">
                                <div class="text-center" id="taskReportChartContainer" style="height: 370px; width: 100%;"></div>
                            </div>
                        </div> 

                    </div>
                  <!----------tasks End ------>

                  <!----------Projects ------>
                    <div class="tab-pane " id="projects">
                        <div class="container bg-white card ">
                            <div class="row pt-3">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold">Total Projects Time Spent</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row p-5 m-auto">
                                <div class="col-md-12  text-center">
                                    <h1 class="timer">0:0:9</h1>
                                </div>
                                <div class="col-md-12  text-center">
                                   <h6 class="label-style">Hours &nbsp; Minutes &nbsp; Seconds</h6> 
                                </div>                     
                            </div>
                        </div> 
                
                        <div class="card shadow p-3 mt-4">
                            <div class="row">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold ">Projects Reports</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row p-1">
                                <div class="text-center" id="projectchartContainer" style="height: 370px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                  <!----------Projects End ------>

                  <!----------Bugs ------>
                    <div class="tab-pane " id="bugs">
                         <div class="container bg-white card ">
                            <div class="row pt-3">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold ">Bugs Reports</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row p-1">
                                <div class="text-center" id="bugschartContainer" style="height: 370px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                  <!----------Bugs End ------>

                  <!----------Activities ------>
                    <div class="tab-pane  " id="activites">
                        <div class="card shadow p-3 mt-4">
                            <div class="row">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold ">All Activities</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row p-1">
                               <table class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="fs1">Date</th>
                                                <th scope="col" class="fs1">Module</th>
                                                <th scope="col" class="fs1">Activity</th>
                                                <th scope="col" class="fs1"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                          if (!empty($activities_info)) {
                                              foreach ($activities_info as $v_activity) {
                                                  ?>
                                                  <tr>
                                                     <td scope="row"><?= $v_activity->activity_date?></td>
                                                <td scope="row"><?= $this->db->where('user_id', $v_activity->user)->get('tbl_account_details')->row()->fullname; ?></td>
                                                <td scope="row"><?= $v_activity->module ?></td>
                                                <td scope="row"> <?= $v_activity->activity ?>
                                                          <strong > <?= $v_activity->value1 . ' ' . $v_activity->value2 ?></strong>
                                                        </td>

                                                  </tr>
                                                  <?php
                                              }
                                          }
                                          ?>
                                        </tbody>
                                    </table>
                            </div>
                        </div>      
                    </div>
                  <!----------Activities End ------>
            </div>
        </div>
    </div>    
</div>    
       
<div id="updatepassword" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header border-bottom">
                <h5 class="modal-title" id="exampleModalLabel">Update Password</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="UsersUpdatePassword">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="exampleInputEmail1"> Old Password <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-9">
                                
                                <!--  <input type="hidden" class="idsss form-control" name="announce_id"> -->
                                <input type="text"  class=" form-control" name="oldpass">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="exampleInputEmail1"> New Password <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" value="" class="form-control" name="newpass">
                            </div>
                        </div>
                    </div>
                    <div class="form-group"> 
                         <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-info" >Update</button>
                            </div>
                        </div>
                    </div>
                </form>
                

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<script>
window.onload = function () {

var chart_for_task = new CanvasJS.Chart("taskReportChartContainer", {
    theme: "light2",
    animationEnabled: true,
    
    data: [{
        type: "pie",
        indexLabelFontSize: 18,
        radius: 80,
        indexLabel: "{label} : {y}",
        yValueFormatString: "###0.0\"%\"",
        click: explodePie,
        dataPoints: [
        <?php
        // $total_task=$t_not_started

        ?>
        // $t_not_started = 0;
        // $t_in_progress = 0;
        // $t_completed = 0;
        // $t_deferred = 0;
        // $t_waiting_for_someone = 0;
            { label:'Not Started',y: <?=($t_not_started/$totalTasks)*100?>,  },
            { label:'In Progress',y: <?=($t_in_progress/$totalTasks)*100?>, },
            { label:'Completed',y: <?=($t_completed/$totalTasks)*100?>,  },
            { label:'Deferred',y: <?=($t_deferred/$totalTasks)*100?>,  },
            { label:'Waiting For Someone',y: <?=($t_waiting_for_someone/$totalTasks)*100?>,  },
            
        ]
    }]
});
chart_for_task.render();
var chart = new CanvasJS.Chart("bugschartContainer", {
    theme: "light2",
    animationEnabled: true,
    
    data: [{
        type: "pie",
        indexLabelFontSize: 18,
        radius: 80,
        indexLabel: "{label} - {y}",
        yValueFormatString: "###0.0\"%\"",
        click: explodePie,
        dataPoints: [
            { y: 54.1,  },
            { y: 21, },
            { y: 24.5,  },
            
        ]
    }]
});
chart.render();

function explodePie(e) {
    for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
        if(i !== e.dataPointIndex)
            e.dataSeries.dataPoints[i].exploded = false;
    }
}
 
var chart_for_project = new CanvasJS.Chart("projectchartContainer", {
    animationEnabled: true,
    
    data: [{
        type: "pie",
        startAngle: 240,
        yValueFormatString: "##0.00\"%\"",
        indexLabel: "{label} {y}",
        dataPoints: [

     
            {label:'Started', y: <?=($p_started/$totalProject)*100?>,},
            {label:'In Progress', y: <?=($p_in_progress/$totalProject)*100?>,},
            {label:'Completed', y: <?=($p_completed/$totalProject)*100?>,},
            
        ]
    }]
});
chart_for_project.render();

var chart = new CanvasJS.Chart("chartContainer", {
    theme: "light2",
    animationEnabled: true,
    
    data: [{
        type: "pie",
        indexLabelFontSize: 18,
        radius: 80,
        indexLabel: "{label} - {y}",
        yValueFormatString: "###0.0\"%\"",
        click: explodePie,
        dataPoints: [
            { y: 42,  },
            { y: 21, },
            { y: 24.5,  },
            { y: 9, },
            { y: 3.1,  }
        ]
    }]
});
chart.render();

function explodePie(e) {
    for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
        if(i !== e.dataPointIndex)
            e.dataSeries.dataPoints[i].exploded = false;
    }
}
 
}
</script>     
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>   

   <script type="text/javascript">
  $(document).on("click",".side_br",function(){
    $(".side_br").removeClass("active");
    $(this).addClass("active");
  })
</script> 
<script>
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("back");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
      });
    }
</script>

<div class="modal fade" id="updateUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                            
            <div class="modal-content style" id="currency" style="display:none">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Reset Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="line"></div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Yor Current Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Password For Adminko">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Confirm Password For Adminko">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-top-0 modal-butn">
                    <button type="button" class="btn btn-secondary">close</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
            
            <div class="modal-content style" id="account" style="display: none">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">User Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="line"></div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-2 col-sm-2">
                                    <label for="exampleInputEmail1" class="label-style">EMP ID <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Emploment ID">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-1 col-sm-3">
                                    <label for="exampleInputEmail1" class="label-style">Joining Date <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id="datepicker" placeholder="Enter Joining Date" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" id="acount" class="btn btn-light butn" data-toggle="tooltip" data-placement="top" title="New Account"><i class="fa fa-calendar"></i></button>
                                </div>
                            </div>
                        </div>    
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-2 col-sm-2">
                                    <label for="exampleInputEmail1" class="label-style">Gender <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <select name="client_id" class="form-control" id="customer_group">
                                            <option lang="ar" value="arabic">Male</option>
                                            <option lang="ar" value="arabic">Female</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-1 col-sm-3">
                                    <label for="exampleInputEmail1" class="label-style">Date Of Birth <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" id="datepicker1" placeholder="Enter Joining Date" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" id="acount" class="btn btn-light butn" data-toggle="tooltip" data-placement="top" title="New Account"><i class="fa fa-calendar"></i></button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-1 col-sm-3">
                                    <label for="exampleInputEmail1" class="label-style">Maratial Status<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <select name="client_id" class="form-control" id="customer_group">
                                            <option lang="ar" value="arabic">Married</option>
                                            <option lang="ar" value="arabic">Un-Married</option>
                                            <option lang="ar" value="arabic">Widowed</option>
                                            <option lang="ar" value="arabic">Divorced</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-1 col-sm-3">
                                    <label for="exampleInputEmail1" class="label-style">Fathers Name<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Fathers Name">
                                </div>
                            </div>
                        </div>                      
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-1 col-sm-3">
                                    <label for="exampleInputEmail1" class="label-style">Mothers Name<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mothers Name">
                                </div>
                            </div>
                        </div>      
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-2 col-sm-2">
                                    <label for="exampleInputEmail1" class="label-style">Phone</label>
                                </div>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                            </div>
                        </div>  
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-2 col-sm-2">
                                    <label for="exampleInputEmail1" class="label-style">Mobile</label>
                                </div>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="e.g user_placeholder_mobile">
                                </div>
                            </div>
                        </div>  
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-2 col-sm-2">
                                    <label for="exampleInputEmail1" class="label-style">Skype id</label>
                                </div>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="e.g user_placeholder_skype">
                                </div>
                            </div>
                        </div>  
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-2 col-sm-2">
                                    <label for="exampleInputEmail1" class="label-style">Passport</label>
                                </div>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>  
                        
                                                
                        <div class="form-group">
                            <div class="row">
                                <div class="offset-1 col-sm-3">
                                    <label for="exampleInputEmail1" class="label-style">Present Address</label>
                                </div>
                                <div class="col-sm-5">
                                    <textarea rows="2" cols="33"></textarea>
                                </div>
                            </div>
                        </div>
                        
                        
                    </form>
                </div>
                <div class="modal-footer border-top-0 modal-butn">
                    <button type="button" class="btn btn-secondary">close</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
                
        </div>
    </div>
    
<script>
    $(document).ready(function(){
         
          $("#reset").click(function(){
             $("#currency").show();
             $("#account").hide();
             $('#exampleModal').modal('show');
          });
        });
</script>

<script>
    $(document).ready(function(){
     
      $("#update").click(function(){
         $("#currency").hide();
         $("#account").show();
         $('#exampleModal').modal('show');
      });
    });
</script>

<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>

<script>
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
</script>

<div class="modal fade" id="bankModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                            
            <div class="modal-content style" id="currency" style="display:none">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">New Bank</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="line"></div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="exampleInputEmail1" class="label-style">Bank Name<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="exampleInputEmail1" class="label-style">Routing Number<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="exampleInputEmail1" class="label-style">Name of Account<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="exampleInputEmail1" class="label-style">Account Number<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class=" col-sm-3">
                                    <label for="exampleInputEmail1" class="label-style">Type of Account</label>
                                </div>
                                <div class="col-sm-2">
                                    <label class="switch">
                                    <input type="checkbox"> Checking
                                    <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="col-sm-2">
                                    <label class="switch">
                                    <input type="checkbox"> Savings
                                    <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer border-top-0 modal-butn">
                    <button type="button" class="btn btn-secondary">close</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>  
        </div>
    </div>

<script>
    $(document).ready(function(){
      $("#update").click(function(){
         $("#currency").show();
         $('#exampleModal').modal('show');
      });
    });
</script>

<div class="modal fade" id="documentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                            
      <div class="modal-content style" id="currency" style="display:none">
          <div class="modal-header border-bottom-0">
              <h5 class="modal-title font-weight-bold" id="exampleModalLabel">User Documents</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="line"></div>
          <div class="modal-body">
              <form>
                  <div class="form-group">
                      <div class="row">
                          <div class="offset-2 col-sm-2">
                              <label for="exampleInputEmail1" class="label-style">Resume</label>
                          </div>
                          <div class="col-sm-5">
                               <input type="file" id="myfile" name="myfile">
                          </div>
                      </div>
                  </div>
                  
                  <div class="form-group">
                      <div class="row">
                          <div class="offset-2 col-sm-2">
                              <label for="exampleInputEmail1" class="label-style">Offer Letter</label>
                          </div>
                          <div class="col-sm-5">
                               <input type="file" id="myfile" name="myfile">
                          </div>
                      </div>
                  </div>
                  
                  <div class="form-group">
                      <div class="row">
                          <div class="offset-2 col-sm-2">
                              <label for="exampleInputEmail1" class="label-style">Joining Letter</label>
                          </div>
                          <div class="col-sm-5">
                               <input type="file" id="myfile" name="myfile">
                          </div>
                      </div>
                  </div>
                  
                  <div class="form-group">
                      <div class="row">
                          <div class="offset-1 col-sm-3">
                              <label for="exampleInputEmail1" class="label-style">Contract Paper</label>
                          </div>
                          <div class="col-sm-5">
                               <input type="file" id="myfile" name="myfile">
                          </div>
                      </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="row">
                      <div class="offset-2 col-sm-2">
                          <label for="exampleInputEmail1" class="label-style">ID Prof</label>
                      </div>
                      <div class="col-sm-5">
                           <input type="file" id="myfile" name="myfile">
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                      <div class="row">
                          <div class="offset-1 col-sm-3">
                              <label for="exampleInputEmail1" class="label-style">Other Document</label>
                          </div>
                          <div class="col-sm-5">
                               <input type="file" id="myfile" name="myfile">
                          </div>
                          <div class="col-sm-3">
                              <a href="#"><h6 class="text-primary"><i class="fa fa-plus"></i> Add More</h6></a>
                          </div>
                      </div>
                  </div>
                  
                  
              </form>
          </div>
          <div class="modal-footer border-top-0 modal-butn">
              <button type="button" class="btn btn-secondary">close</button>
              <button type="button" class="btn btn-primary">Update</button>
          </div>
    </div>
   </div>
</div>
<script> 
       $(document).ready(function(){
            $("#UsersUpdatePassword").submit(function(e){
                e.preventDefault();
                var formData= new FormData($(this)[0]); 
                // console.log(formData);
                $.ajax({
                    url:"<?=base_url('User/UpdateUsersPassword')?>",
                     type:"post",
                     data:formData,
                     // enctype:"multipart/form-data",
                     // dataType: 'json', 
                     contentType:false,
                     processData:false,
                     cache:false,
                    success:function(response)
                    {
                     var obj=JSON.parse(response);
                      // console.log('dvsg',response);
                     if(obj.status==2)
                     {
                        swal("Ooops!","Old Password Not Match", "warning");
<<<<<<< HEAD
                        location.reload();
=======
                        $("#UsersUpdatePassword")[0].reset();

>>>>>>> 92a1ca77bfea9d23c5737f2f825c684be0ab9f5a
                     }
                     else if(obj.status==1)
                     {
                       swal("Password!", " Updated Successfully", "success");
                        location.reload();
                     }
                     else
                     {
                      swal("Ooops!","Try Again", "error");
                     }
<<<<<<< HEAD
                     // location.reload();
=======
                    
>>>>>>> 92a1ca77bfea9d23c5737f2f825c684be0ab9f5a
                     
                     // window.location.href='<?=base_url("User/index")?>';
                    }
                });
            });

        });
      </script>

<!-- <script type="text/javascript">
    $(document).on('submit','#UpdatePassword',function(e){
        e.preventDefault();
        var formData=new FormData($(this)[0]);
        console.log(formData);
        $.ajax({
            url:"<?=base_url('User/UpdateUsersPassword')?>",
            type:"post",
            cache:false,
            contentType:false,
            processData:false,
            data:formData,
            // success:function(response){

            //     // console.log(response);
            //     response=JSON.parse(response);
            //     console.log(response);
            //     if(response.code==1)
            //     {
            //         // alert('skja');
            //         swal("Password!", " Updated Successfully", "success");
            //         location.reload();
                    
            //     }else if
            //     {
            //         swal("Ooops!","Old Password Not Match", "warning");
            //     }
            //     else
            //     {
            //        swal("Password!", " Try Again", "error");
            //     }
                
            // }
        })
    });

 
</script> -->
<script>
    $(document).ready(function(){
      $("#update").click(function(){
         $("#currency").show();
         $('#exampleModal').modal('show');
      });
    });
</script>
 <script type="text/javascript">
  $(function () {
      $('#datetimepicker10').datetimepicker({
          viewMode: 'years',
          format: 'YYYY-MM'
      });
  });
  $(function () {
      $('#datetimepicker11').datetimepicker({
          viewMode: 'years',
          format: 'YYYY-MM'
      });
  });
  $(function () {
      $('#datetimepicker12').datetimepicker({
          viewMode: 'years',
          format: 'YYYY-MM'
      });
  });
</script>