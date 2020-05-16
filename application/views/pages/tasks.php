<?php
    $session=$this->session->userdata('logged_user');
   
$myId=$session[0]->user_id;
$role_id=$session[0]->role_id;
?>
            <!--  <div class="p-3">
            <div class="row bg-white mt-3">
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span>0</span>
                    <p>Without Converted</p>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span>0</span>
                    <p>Last Weeks Created</p>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span>0</span>
                    <p>Completed Achievement</p>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span>0</span>
                    <p>Without Converted</p>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span>0</span>
                    <p>Pending Achievement</p>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span class="chart" data-percent="40">
                      <span class="percent"></span>
                    </span>
                    <span class="ml-2"> Done</span>
                  </div>

                </div>
            </div>  
          </div>
          -->
        <?php
        $tasks_info = $this->db->get('tbl_task')->result();
        // $tasks_info = $this->User_model->my_permission('tbl_task', $profile_info->user_id);

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
        $startper=number_format(($t_not_started/$totalTasks)*100);
        $progressper=number_format(($t_in_progress/$totalTasks)*100);
        $completedper=number_format(($t_completed/$totalTasks)*100);
        ?>
          <div class="row mt-4">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2 px-2">
                <div class="row  py-1">
                 <div class="col-md-8">
                   <div class=" ">
                      <h6 class="text_col">Not Started</h6>
                   </div>
                 </div>
                 <div class="col-md-4">
                    <span><?=$t_not_started?>/<?=$totalTasks?></span>
                 </div>
               </div>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:
                    <?=$startper?>%;">
                    <?=$startper?>% 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2 px-2">
                <div class="row  py-1">
                 <div class="col-md-8">
                   <div class=" ">
                      <h6 class="text_col">In Progress</h6>
                   </div>
                 </div>
                 <div class="col-md-4">
                    <span><?=$t_in_progress?>/<?=$totalTasks?></span>
                 </div>
               </div>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?=$progressper?>%">
                   <?=$progressper?>%
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2 px-2">
                <div class="row  py-1">
                 <div class="col-md-8">
                   <div class=" ">
                      <h6 class="text_col">Complete</h6>
                   </div>
                 </div>
                 <div class="col-md-4">
                    <span><?=$t_completed?>/<?=$totalTasks?></span>
                 </div>
               </div>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?=$completedper?>%">
                   <?=$completedper?>%
                  </div>
                </div>
              </div>
            </div>
   
  
          </div>
          <div class="row mt-4" >
            <div class="col-lg-12">
              <div class="card">
               <!--  <div class="card-header">
                  <h4>Budget vs Sales</h4>
                </div> -->
             <!--    <div class="card-body">
                  <canvas id="myChart" height="158"></canvas>
                </div> -->
                <ul class="nav nav-tabs nav-justified md-tabs indigo col-md-5" id="myTabJust" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
                      aria-selected="true">All Tasks</a>
                  </li>
                  <?php if($role_id!=3):?>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                      aria-selected="false">New Tasks</a>
                  </li>
                <?php endif; ?>
<!--                   <li class="nav-item ">
                  <a class="nav-link" id="import_project" data-toggle="tab" href="#imp_project" role="tab" aria-controls="imp_project" aria-selected="false">Import Tasks</a>
                  </li> -->
                </ul>
                <div class="tab-content card pt-3" id="myTabContentJust">
                  <div class="tab-pane fade show active px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

                   <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Task Name</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Assigned To</th>
                                <th>Action</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          foreach ($task_data as $tasker) {
                          ?>
                            <tr>
                              <td><input type="checkbox" name=" " class="h_22 form-control"></td>
                                <td><a href="<?=base_url('Task/task_details').'/'.$tasker['task_id']?>"><?=$tasker['task_name']?></a></td>
                                <td><?=$tasker['due_date']?></td>
                                <td>
                                  <?php
                                  if ($tasker['task_status']=="completed") {
                                    echo "<span class='text-white bg-success sele_staus'>Completed</span>";
                                  }
                                  elseif ($tasker['task_status']=="deferred") {
                                    echo "<span class='text-white bg-danger sele_staus'>Deferred</span>";
                                  }
                                  elseif ($tasker['task_status']=="waiting_for_someone") {
                                    echo "<span class='text-white bg-warning sele_staus'>Waiting For Someone</span>";
                                  }
                                  elseif ($tasker['task_status']=="in_progress") {
                                    echo "<span class='text-white bg-warning sele_staus'>In Progress</span>";
                                  }
                                  else{
                                    echo "<span class='text-white bg-danger sele_staus'>Not Started</span>";
                                  }
                                  ?>
                                  
                                  <div class="btn-group open">
                                      <button class="btn btn-xs p-0 border btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> Change <span class="caret"></span></button>
                                      <ul class="dropdown-menu animated zoomIn">
                                        <li><a href="<?=base_url()?>Task/update_tasks/<?=$tasker['task_id']?>/waiting_for_someone">Waiting For Someone</a></li>
                                        <li><a href="<?=base_url()?>Task/update_tasks/<?=$tasker['task_id']?>/deferred">Deferred</a></li>
                                        <li><a href="<?=base_url()?>Task/update_tasks/<?=$tasker['task_id']?>/completed">Completed</a></li>
                                        <li><a href="<?=base_url()?>Task/update_tasks/<?=$tasker['task_id']?>/in_progress">In Progress</a></li>
                                        <li><a href="<?=base_url()?>Task/update_tasks/<?=$tasker['task_id']?>/not_started">Not Started</a></li>
                                      </ul>
                                  </div>
                                 </td>
                                <td><?php
                                if(count($tasker['assigned_to'])>0){
                                  foreach ($tasker['assigned_to'] as $user) {
                                    if ($user=="Everyone") {
                                      echo "Everyone";
                                    }else{
                                        echo '<img src="'.base_url().$user->avatar.'"  width="20px" class="rounded-circle" alt="'.$user->fullname.'"  title ="'.$user->fullname.'">';
                                    }
                                  }
                                
                                }
                                
                                ?> <span class="ml-2" id="open_modal" task_id="<?=$tasker['task_id']?>"><i class="fa fa-edit" aria-hidden="true"></i></span></td>
                                <td>
                                    <div class="">
                                      <?php
                                      foreach($Assign_permission as $checkpermission)
                                        {
                                          $permission=$checkpermission->permission;

                                          foreach ($UsersPermission as $Uperms) 
                                            {

                                             $Userpermi=$Uperms->permission;
                                          if(strpos($permission,'Edit')!==false||strpos($Userpermi,'Edit')!==false)

                                          {?>
                                              <a href="<?=base_url('Task/editTaskpage/').$tasker['task_id']?>" id="edit_p"class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>

                                         <?php }
                                         else
                                         {
                                          ?>
                                            <a href="<?=base_url('Task/editTaskpage/').$tasker['task_id']?>" id="edit_p"class="sele_staus bg-info p-1 text-white " style="visibility: hidden"><span><i class="far fa-edit"></i></span></a>

                                         <?php
                                          }
                                         if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                          {?>
                                              <a href="javascript:void(0)" class="sele_staus  p-1 text-white delete_task" d-id="<?=$tasker['task_id']?>">  <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>

                                         <?php }
                                         else
                                         {
                                          ?>
                                            <a href="" class="sele_staus  p-1 text-white " style="visibility: hidden">  <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>

                                         <?php
                                          }

                                        }
                                      }?>

                                     <!--  <a href="<?=base_url('Task/task_details').'/'.$tasker['task_id']?>" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                      <a href=""><span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a> -->
                                       <!-- <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span> -->

                                    </div>

                                </td>
                             
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                             <tr>
                                <th></th>
                                <th>Task Name</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Assigned To</th>
                                <th>Action</th>
                             
                            </tr>
                        </tfoot>
                    </table>
                  </div>
                  <div class="tab-pane fade px-4" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
        <form id="create_task">
                    <div class="row">
        <div class="offset-1 col-sm-8 cl-md-8 col-lg-8">
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Task Name <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-9">
                <input type="hidden" name="company_id" value="<?=$this->session->userdata('logged_user')[0]->company_id?>">
                <input type="text" name="task_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Related To   </label>
              </div>
              <div class="col-sm-9">
                <div class="input-group">
                  <select name="client_id" class="form-control" id="related_to">
                      <option value="" selected>None</option>
<!--                       <option value="opportunities">Opportunities</option> -->
<!--                       <option value="bug">Bugs</option> -->
                      <option value="project">Projects</option>
<!--                       <option value="leads">Leads</option>
                      <option value="goal">Goal Tracking</option>
                      <option value="task">Tasks</option> -->
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group related_to_task">
            
          </div>

          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Start Date  <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-9">
              
                    <div class='input-group date datetimepicker1' id='datetimepicker1'>
                        <input type='text' name="task_start_date" class="form-control" />
                        <span class="input-group-addon">
                            <span ><i class="fa fa-calendar"></i></span>
                        </span>
                    </div>
         
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Due Date  <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-9">
                 <div class='input-group date datetimepicker1' id=''>
                        <input type='text' name="due_date" class="form-control" />
                        <span class="input-group-addon">
                            <span ><i class="fa fa-calendar"></i></span>
                        </span>
                    </div>
              </div>
             <!--  <div class="col-sm-1">
                  <button type="button" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
              </div> -->
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Hourly Rate  </label>
              </div>
              <div class="col-sm-9">
                <input type="number" name="hourly_rate" step="0.01" value="" class="form-control" name="estimate_hours" data-parsley-id="23">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Estimated Hours  </label>
              </div>
              <div class="col-sm-9">
                <input type="number" name="task_hour" step="0.01" value="" class="form-control" name="estimate_hours" data-parsley-id="23">
              </div>
            </div>
          </div>
          
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Progress </label>
              </div>
              <div class="col-sm-9">
                  <div id="slider-range-min"></div>
                <div class="d-flex bg-light">
                    <div class="col-sm-4">
                    
                      <label for="amount">Progress</label>
                      <input type="text" id="amount" name="task_progress" readonly style="border:0; color:#f6931f;width:40%; font-weight:bold;">
                    
                  </div>
<!--                   <div class="col-sm-4">
                    <input type="checkbox" name="vehicle1" value="Bike"> Through tasks hours<br>
                  </div>
                  <div class="col-sm-4">
                    <input type="checkbox" name="vehicle1" value="Bike"> Through Sub tasks<br>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Task Status  <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-9">
                <div class="input-group">
                    <select name="task_status" class="form-control" id="task_status">
                       <option value="not_started">Not Started </option>
                        <option value="in_progress">In progress</option>
                        <option value="completed">Completed</option>
                        <option value="deferred">Deferred</option>
                        <option value="waiting_for_someone">Waiting For Someone</option>
                    </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class=" col-md-3">
                <label for="exampleInputEmail1">Task Description </label>
              </div>
              <div class="col-md-9">
                 <textarea name="editor1"></textarea>
                <script>
                    CKEDITOR.replace( 'editor1' );
                </script>
              </div>
                    </div>
                </div>
          <div class="form-group">
              <div class="row">
              <div class=" col-md-3">
                <label for="exampleInputEmail1">Billable  <span class="text-danger">*</span></label>
              </div>
              <div class="col-md-9">
                <div class="checkbox">
                  <label>
                  <input type="checkbox" name="billable" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                  </label>
                </div>
              </div>
                    </div>
                </div>
          <div class="form-group">
                                  <div class="row">
                                  <div class="col-sm-3">
                                    <label for="exampleInputEmail1">Assigned To <span class="text-danger">*</span></label>
                                  </div>
                                  <div class="col-sm-9">
                                    <div class="checkbox c-radio needsclick">
                                      <input type="radio" name="radio_admin" value="" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                                                    </div>
                                    <div class="checkbox c-radio needsclick">
                                      <input type="radio" name="radio_admin" value=""  class="chkPassport"> Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                                                    </div>
                                  </div>
                                </div>
                              </div>
                                 <div class="form-group dvPassport"  style="display: none">
                                    <div class="row">
                                    <div class="col-sm-3">
                                      <label for="exampleInputEmail1">select Users<span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-9">
                                       <?php
                                       $count=1;
                                       foreach ($users as $user) {
                                       ?>

                                         <input type="checkbox" value="<?=$user['user_id']?>" class="chkPassport admind" ><?=$user['username']?><?php 
                                         if ($user['role_id']==1) {
                                           echo "<strong class='badge btn-danger'>Admin</strong>";
                                         }
                                         else{
                                          echo "<strong class='badge btn-primary'>Staff</strong>";
                                         }
                                         ?>
                                       <br>
                                       <div class="row dvPassport"  id="dvPassport<?=$count?>" style="display: none">
                                          <div class="col-md-3">
                                         <input type="checkbox" class="data" value="View" > View
                                        </div>
                                        <div class="col-md-3">
                                             <input type="checkbox" class="data" value="Edit" > Edit
                                        </div>
                                        <div class="col-md-3">
                                            <input type="checkbox" class="data" value="Delete"> Delete
                                        </div>
                                       </div>
                                       <?php
                                       $count++;
                                        }
                                       ?>
                                    </div>
                                  </div>
                                </div>
            
       </div>
        
    </div>
    
    <div class="row mt-3">
        <div class="offset-11 col-md-1">
         <button type="submit" style="display: none" class="btn btn-primary save_btn">Save</button>
      </div>
      
    </div>
    </form>
<script type="text/javascript">
    $(function () {
        $(".customize_permission").click(function () {
            if ($(this).is(":checked")) {
                $(".dvPassport").show();
            } else {
                $(".dvPassport").hide();
            }
        });
    });
</script>
<script type="text/javascript">
        $("#create_task").submit(function(e){
         e.preventDefault();
         var ar=[];
           var count=1;
           var obj = {};
            $('.admind').each(function(){
              var pass_id="#dvPassport"+count;
              if($(this).is(':checked')){
               var user_id=$(this).val();
               var data=$(pass_id).find('.data');
               data.each(function(){
                if($(this).is(':checked')){
                  ar.push($(this).val());
                }
               })
               obj[user_id] = ar;
               ar=[];
               }
               count++;
            })
         // var new_ar=[];
         //  $('.song').each(function(){
         //      if($(this).is(':checked'))
         //      {
         //          new_ar.push($(this).val()); 
         //      }        
         //  });
         // var project_settings=JSON.stringify(new_ar);
         var permission=JSON.stringify(obj);
         if(Object.keys(permission).length==2){
          permission="all";
         }
        // if($('#everyone').is(':checked')) { permission="all"; }
         var formData= new FormData($(this)[0]);
         formData.append('permission',permission);
         formData.append('task_description', CKEDITOR.instances.editor1.getData());
         $.ajax({
             url:"<?=base_url()?>Task/create_task",
              type:"post",
              data:formData,
              contentType:false,
              processData:false,
              cache:false,
             success:function(response)
             {
                var response=JSON.parse(response);
               if(response.status==1){
                 swal("Task Created Successfully!", "Created", "success");
                 //window.location.href='<?=base_url()?>Home';
               }
               else if(response.status=="0"){
                swal(response.msg, "Already Exists", "error");
              }
             }
         });
    });
</script>
                  </div>
                  <div class="tab-pane fade show px-4" id="imp_project" role="tabpanel" aria-labelledby="import_project">
                     <div class="float-right">
                      <button class="btn btn-success rounded-0"><i class="fa fa-download" aria-hidden="true"></i> Download Sample</button>
                    </div>
                    <div class="row">
                        <div class="col-md-12 card p-4">
                          <div class="col-md-8 offset-md-1 mt-3">
                            <form action="/action_page.php">
                                <div class="form-group  row">
                                  <label for="staticEmail" class="text-right col-sm-3 col-form-label font-weight-bold">Choose File <sup class="a1">*</sup></label>
                                  <div class="col-sm-8">
                                      <input type="file" class="text-right form-control border-0 d-none" id="img" placeholder="">
                                  <label for="img" class="border w-50 pl-3">Select File</label>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="staticEmail" class="text-right col-sm-3 col-form-label font-weight-bold">Task Status <sup class="a1">*</sup></label>
                                  <div class="col-sm-8">
                                     <select  name="imptask_status" class="form-control " id="imptask_status" style="width: 100%" required="">
                                      <option value="" selected="">select</option>
                                      <option value="">GMAP</option>
                                      <option value="">HR</option>
                                      <option value="">IT</option>
                                     </select>        
                                  </div>
                              </div>
                               <div class="form-group">
                                  <div class="row">
                                  <div class="col-sm-3 form-group text-right">
                                    <label for="exampleInputEmail1" class="  col-form-label font-weight-bold">Assigned To <span class="text-danger">*</span></label>
                                  </div>
                                  <div class="col-sm-9">
                                    <div class="checkbox c-radio needsclick">
                                      <input type="radio" name="radio_admin" value="" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                                                    </div>
                                    <div class="checkbox c-radio needsclick">
                                      <input type="radio" name="radio_admin" value=""  class="chkPassport"> Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                                                    </div>
                                  </div>
                                </div>
                              </div>
                                 <div class="form-group dvPassport"  style="display: none">
                                    <div class="row">
                                    <div class="col-sm-3">
                                      <label for="exampleInputEmail1">select Users<span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-9">
                                       <input type="checkbox" name="vehicle1" value="Bike"  class="chkPassport1"> admin <strong class="badge btn-danger">Admin</strong>
                                       <br>
                                       <div class="row dvPassport1"  id="dvPassport1" style="display: none">
                                          <div class="col-md-3">
                                         <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> View
                                        </div>
                                        <div class="col-md-3">
                                             <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Edit
                                        </div>
                                        <div class="col-md-3">
                                            <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Delete
                                        </div>
                                       </div>
                                       
                                         <input type="checkbox" name="vehicle2" value="Car" class="chkPassport2" > adminko <strong class="badge btn-danger">Admin</strong>
                                       <br>
                                       <div class="row dvPassport2"  id="dvPassport2" style="display: none">
                                          <div class="col-md-3">
                                         <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> View
                                        </div>
                                        <div class="col-md-3">
                                             <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Edit
                                        </div>
                                        <div class="col-md-3">
                                            <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Delete
                                        </div>
                                       </div>
                                    </div>
                                  </div>
                                </div>
            
                                <div class="" style="padding-left: 26%">
                                  <button type="submit" class="btn btn-primary">upload</button>
                              </div>  
                            </form>   
                          </div>
                        </div>
                      </div>
              

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

<div id="assign_to" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header border-bottom">
          <h5 class="modal-title" id="exampleModalLabel">All Users</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form id="updater">
          <input type="hidden" value="" id="tasker_id" name="task_id">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-3">
              <label for="exampleInputEmail1">Assigned To <span class="text-danger">*</span></label>
            </div>
            <div class="col-sm-9">
              <div class="checkbox c-radio needsclick">
                <input type="radio" name="radio_admin" value="" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                              </div>
              <div class="checkbox c-radio needsclick">
                <input type="radio" name="radio_admin" value=""  class="chkPassport"> Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
              </div>
            </div>
          </div>
        </div>
           <div class="form-group dvPassport"  style="display: none">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">select Users<span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
                                   <?php
                   $count=1;
                   foreach ($users as $user) {
                   ?>

                     <input type="checkbox" value="<?=$user['user_id']?>" class="chkPassport admindModal" ><?=$user['username']?><?php 
                     if ($user['role_id']==1) {
                       echo "<strong class='badge btn-danger'>Admin</strong>";
                     }
                     else{
                      echo "<strong class='badge btn-primary'>Staff</strong>";
                     }
                     ?>
                   <br>
                   <div class="row dvPassport"  id="dvPassportModal<?=$count?>" style="display: none">
                      <div class="col-md-3">
                     <input type="checkbox" class="data" value="View"> Can View
                    </div>
                    <div class="col-md-3">
                         <input type="checkbox" class="data" value="Edit" > Can Edit
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" class="data" value="Delete"> Can Delete
                    </div>
                   </div>
                   <?php
                   $count++;
                    }
                   ?>
<!--                  <input type="checkbox" name="vehicle1" value="Bike"  class="chkPassport1"> admin <strong class="badge btn-danger">Admin</strong>
                 <br>
                 <div class="row dvPassport1"  id="dvPassport1" style="display: none">
                    <div class="col-md-3">
                   <input type="checkbox" name="admin1" value="view" checked="checked" disabled="">Can View
                  </div>
                  <div class="col-md-3">
                       <input type="checkbox" name="admin1" value="edit" checked="checked" disabled="">Can Edit
                  </div>
                  <div class="col-md-3">
                      <input type="checkbox" name="admin1" value="Delete" checked="checked" disabled="">Can Delete
                  </div>
                 </div>
                 
                   <input type="checkbox" name="vehicle2" value="Car" class="chkPassport2" > adminko <strong class="badge btn-danger">Admin</strong>
                 <br>
                 <div class="row dvPassport2"  id="dvPassport2" style="display: none">
                    <div class="col-md-3">
                   <input type="checkbox" name="admin2" value="view" checked="checked" disabled="">Can View
                  </div>
                  <div class="col-md-3">
                       <input type="checkbox" name="admin2" value="edit" checked="checked" disabled="">Can Edit
                  </div>
                  <div class="col-md-3">
                      <input type="checkbox" name="admin2" value="delete" checked="checked" disabled="">Can Delete
                  </div>
                 </div> -->
              </div>
            </div>
          </div>
          <div class="text-center" > <button type="submit" class="btn btn-success" >Update</button></div>
        </form>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
$(document).on('click','#open_modal',function(){
    var task_id=$(this).attr('task_id');
    $('#tasker_id').val(task_id);
    $('#assign_to').modal('show');
})

        $("#updater").submit(function(e){
         e.preventDefault();
         var ar=[];
           var count=1;
           var obj = {};
            $('.admindModal').each(function(){
              var pass_id="#dvPassportModal"+count;
              if($(this).is(':checked')){
               var user_id=$(this).val();
               var data=$(pass_id).find('.data');
               data.each(function(){
                if($(this).is(':checked')){
                  ar.push($(this).val());
                }
               })
               obj[user_id] = ar;
               ar=[];
               }
               count++;
            })
         // var new_ar=[];
         //  $('.song').each(function(){
         //      if($(this).is(':checked'))
         //      {
         //          new_ar.push($(this).val()); 
         //      }        
         //  });
         // var project_settings=JSON.stringify(new_ar);
         var permission=JSON.stringify(obj);
         if(Object.keys(permission).length==2){
          permission="all";
         }
        // if($('#everyone').is(':checked')) { permission="all"; }
         var formData= new FormData($(this)[0]);
         formData.append('permission',permission);
         $.ajax({
             url:"<?=base_url()?>Task/task_updater",
              type:"post",
              data:formData,
              contentType:false,
              processData:false,
              cache:false,
             success:function(response)
             {
                //var response=JSON.parse(response);
               if(response==1){
                location.reload();
                 // swal("Task Created Successfully!", "Created", "success");
                 //window.location.href='<?=base_url()?>Home';
               }
               else{
                swal("Error", "Error", "error");
              }
             }
         });
    });
</script>

<script>
  $(document).on('change','#related_to',function(){
    var related= $(this).val();
    if(related=="project"){
      $.ajax({
        type:'GET',
        url:'<?=base_url()?>Projects/fetch_all_projects',
        success:function(response){
          var response=JSON.parse(response);
          var html='';
          html+='<div class="row">'
                +'<div class="col-sm-3">'
                +'<label for="exampleInputEmail1">Select Project</label>'
              +'</div>'
              +'<div class="col-sm-9">'
                +'<div class="input-group">'
                  +'<select name="project_id" class="form-control">'
                      +'<option value="">None</option>';
                      for(var i=0;i<response.data.length;i++){
          html+='<option value="'+response.data[i].project_id+'">'+response.data[i].project_name+'</option>';
                      }
          html+= '</select>'
                +'</div>'
              +'</div>'
            +'</div>';
          $('.related_to_task').empty();
          $('.related_to_task').append(html);
          $('.save_btn').show();
        }
      })
    }
    else{
      $('.save_btn').hide();
    }
  })
</script>

<script type="text/javascript">
    $(function () {
        $(".chkPassport").click(function () {
            if ($(this).is(":checked")) {
                $(".dvPassport").show();
            } else {
                $(".dvPassport").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $(".chkPassport1").click(function () {
            if ($(this).is(":checked")) {
                $(".dvPassport1").show();
            } else {
                $(".dvPassport1").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $(".chkPassport2").click(function () {
            if ($(this).is(":checked")) {
                $(".dvPassport2").show();
            } else {
                $(".dvPassport2").hide();
            }
        });
    });
</script>
<script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $(".dvPassport").hide();
  });
 
  // $(function(){
  //     $('#datetimepicker1').datetimepicker();
  // });
  // $(function () {
  //    $(".datetimepicker1").datepicker();
  // });


                $(function () {
                    $('.datetimepicker1').datetimepicker();
                });
       
});
</script>
<script>
  $(document).on('click','.delete_task',function(){
    var taskId=$(this).attr('d-id');
    
    $.ajax({
      url:'<?=base_url('Task/delete_task')?>',
      type:"post",
      data:{task_id:taskId},
      success:function(response){

        response=JSON.parse(response);
        swal("Action",response.msg,'info');
        $(this).parent().parent().remove();
        $('#example').load(document.URL +  ' #example');
  
          
      }
    });
  });
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    </script>
  
  <script>
    $( function() {
    $( "#slider-range-min" ).slider({
      range: "min",
      value: 37,
      min: 1,
      max: 100,
      slide: function( event, ui ) {
      $( "#amount" ).val( "%" + ui.value );
      }
    });
    $( "#amount" ).val( "%" + $( "#slider-range-min" ).slider( "value" ) );
    } );
  </script>
  
  <script>
     $(document).ready(function() {
        $("#task_status").select2();
          $("#imptask_status").select2();
      });
  </script>