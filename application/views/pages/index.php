
          <div class="row mt-4">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="row">
                 <div class="col-md-3">
                   <div class="card-icon shadow-primary bg-primary">
                   <i class="fas fa-tasks"></i>
                  </div>
                </div>
                <div class="col-md-9">
                    <div class="card-wrap text-center">
                      <div class="card-header">
                        <h4><?=count($in_progress_project)?></h4>
                      </div>
                      <div class="card-body">
                       In Progress Projects<br>
                    <span><a href="<?=base_url('Dashboard/projectInprogress')?>">More Info <i class="fas fa-arrow-circle-right"></i></a></span>
                      </div>
                    </div>
                 </div>
               </div>
               
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
               <div class="row">
                 <div class="col-md-3">
                   <div class="card-icon shadow-primary bg-primary">
                     <i class="far fa-folder-open"></i>
                  </div>
                 </div>
                 <div class="col-md-9">
                    <div class="card-wrap text-center">
                      <div class="card-header">
                        <h4><?=count($in_progress_task)?></h4>
                      </div>
                      <div class="card-body">
                       In Progress Task<br>
                    <span><a href="<?=base_url('Dashboard/inProgressTasks')?>">More Info <i class="fas fa-arrow-circle-right"></i></a></span>
                      </div>
                    </div>
                 </div>
               </div>
                
             
              </div>
            </div>
            <!-- <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="card card-statistic-2">
               <div class="row">
                 <div class="col-md-3">
                   <div class="card-icon shadow-primary bg-primary">
                     <i class="far fa-folder-open"></i>
                  </div>
                 </div>
                 <div class="col-md-9">
                    <div class="card-wrap text-center">
                      <div class="card-header">
                        <h4><?=count($in_progress_task)?></h4>
                      </div>
                      <div class="card-body">
                       In Progress Task<br>
                    <span><a href="<?=base_url('Dashboard/inProgressTasks')?>">More Info <i class="fas fa-arrow-circle-right"></i></a></span>
                      </div>
                    </div>
                 </div>
               </div>
                
             
              </div>
            </div> -->
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
               <div class="row">
                 <div class="col-md-3">
                   <div class="card-icon shadow-primary bg-primary">
                     <i class="fas fa-bug"></i>
                  </div>
                 </div>
                 <div class="col-md-9">
                    <div class="card-wrap text-center">
                      <div class="card-header">
                        <h4><?=count($in_progress_bug)?></h4>
                      </div>
                      <div class="card-body">
                       In Progress Bugs<br>
                    <span><a href="<?=base_url('Dashboard/InProgressBugss')?>">More Info <i class="fas fa-arrow-circle-right"></i></a></span>
                      </div>
                    </div>
                 </div>
               </div>
                
             
              </div>
            </div>
          </div>
          <!-- <div class="row ">
           
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="card card-statistic-2">
                <div class="row">
                 <div class="col-md-3">
                   <div class="card-icon shadow-primary bg-primary">
                      <i class="fas fa-bug"></i>
                  </div>
                 </div>
                 <div class="col-md-9">
                    <div class="card-wrap text-center">
                      <div class="card-header">
                        <h4>0</h4>
                      </div>
                      <div class="card-body">
                       In Progress Bugs<br>
                    <span><a href="<?=base_url('Dashboard/inProgressBugs')?>">More Info <i class="fas fa-arrow-circle-right"></i></a></span>
                      </div>
                    </div>
                 </div>
               </div>
              
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="card card-statistic-2">
               <div class="row">
                 <div class="col-md-3">
                   <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-ticket-alt"></i>
                  </div>
                 </div>
                 <div class="col-md-9">
                    <div class="card-wrap text-center">
                      <div class="card-header">
                        <h4>0</h4>
                      </div>
                      <div class="card-body">
                       Open Tickets<br>
                    <span><a href="">More Info <i class="fas fa-arrow-circle-right"></i></a></span>
                      </div>
                    </div>
                 </div>
               </div>
                
             
              </div>
            </div>
          </div> -->
          
          <div class="row mt-4">
            <div class="col-lg-12">
              <div class="card">
               <!--  <div class="card-header">
                  <h4>Budget vs Sales</h4>
                </div> -->
             <!--    <div class="card-body">
                  <canvas id="myChart" height="158"></canvas>
                </div> -->
                <ul class="nav nav-tabs nav-justified md-tabs indigo" id="myTabJust" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
                      aria-selected="true">Overdue Projects(<?=count($Overproject)?>)</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                      aria-selected="false">Overdue Tasks(<?=count($over_due_task)?>)</a>
                  </li>
                 <!--  <li class="nav-item">
                    <a class="nav-link" id="contact-tab-just" data-toggle="tab" href="#contact-just" role="tab" aria-controls="contact-just"
                      aria-selected="false">Overdue Invoice</a>
                  </li> -->
                </ul>
                <div class="tab-content card pt-5" id="myTabContentJust">
                  <div class="tab-pane fade show active px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">
                   <table id="overDuTable" class="alldatatable display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Client</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <!-- <th>Assigned To</th> -->
                                <th>Downloads</th>
                                <!-- <th>Action</th> -->
                             
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          // print_r($Overproject);
                          // die;
                            foreach ($Overproject as $proj_detail) {
                              // print_r($proj_detail);
                              ?>
                                <tr>
                                  <td><a href="<?=base_url('Projects/project_details/').$proj_detail['project_id']?>"><?=$proj_detail['project_name']?></a></td>
                                  <td><a href="<?=base_url('Client/client_details/').$proj_detail['client_id']?>" ><?=$proj_detail['client_name']?></a></td>
                                  <td><?=$proj_detail['end_date']?></td>
                                  <td>
                                     <?php
                                        if ($proj_detail['project_status']=="completed") {
                                          echo "<span class='text-white bg-success sele_staus'>Completed</span>";
                                        }
                                        elseif ($proj_detail['project_status']=="deferred") {
                                          echo "<span class='text-white bg-danger sele_staus'>Deferred</span>";
                                        }
                                        elseif ($proj_detail['project_status']=="waiting_for_someone") {
                                          echo "<span class='text-white bg-warning sele_staus'>Waiting For Someone</span>";
                                        }
                                        elseif ($proj_detail['project_status']=="in_progress") {
                                          echo "<span class='text-white bg-warning sele_staus'>In Progress</span>";
                                        }
                                        else{
                                          echo "<span class='text-white bg-danger sele_staus'>Not Started</span>";
                                        }
                                        ?>
                                        <div class="btn-group open">
                                            <button class="btn btn-xs p-0 border btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> Change <span class="caret"></span></button>
                                            <ul class="dropdown-menu animated zoomIn">
                                              <li><a href="<?=base_url()?>Projects/update_projecter/<?=$proj_detail['project_id']?>/waiting_for_someone">Waiting For Someone</a></li>
                                              <li><a href="<?=base_url()?>Projects/update_projecter/<?=$proj_detail['project_id']?>/deferred">Deferred</a></li>
                                              <li><a href="<?=base_url()?>Projects/update_projecter/<?=$proj_detail['project_id']?>/completed">Completed</a></li>
                                              <li><a href="<?=base_url()?>Projects/update_projecter/<?=$proj_detail['project_id']?>/in_progress">In Progress</a></li>
                                              <li><a href="<?=base_url()?>Projects/update_projecter/<?=$proj_detail['project_id']?>/Not_Started">Not Started</a></li>
                                            </ul>
                                        </div>
                                      
                                  </td>
                                  <!-- <td>
                                    <?php 
                                    if($proj_detail['assigned_to'][0]!=""){
                                      $total = count((array)$proj_detail);
                  // print_r($total);
                                      // if($total>8)
                                      // {
                                      //   $total=$total-8;
                                      //   for($i=0;$i<$total;$i++)
                                      //   {
                                      //     if($proj_detail[$i]=="Everyone ")
                                      //     {
                                      //       echo "Everyone";
                                      //     }
                                      //     else{
                                      //       echo $proj_detail[$i]->fullname;
                                      //     }
                                      //  }
                                      // }
                                      // else{
                                      //   echo "Everyone";
                                      // }



                                      foreach($proj_detail['assigned_to'] as $user){
                                        // print_r($user);
                                        echo '<img src="'.base_url().$user->avatar.'" class="rounded-circle" width="20px">';
                                      }
                                    }
                                      echo '<a href="javascript:void(0)" id="open_modal"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                                   ?>  -->
                                    
                                
                                  <!-- </td> -->
                                  <td>
                                    <?php
                                      if ($proj_detail['project_uploads']==null) {
                                        echo "No Downloads";
                                      }
                                      else{
                                        echo "<a href='".base_url()."Projects/downloader/".$proj_detail['project_id']."'>Download Now</a>";
                                      }
                                      ?>
                                  </td>
                                  <!-- <td>
                                    <div class="">
                                      <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                      <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                       <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                    </div>

                                </td> -->
                                </tr>
                              <?php
                            }
                          ?> 
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Project Name</th>
                                <th>Client</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <!-- <th>Assigned To</th> -->
                                <th>Downloads</th>
                                <!-- <th>Action</th> -->
                          </tr>
                        </tfoot>
                    </table>
                  </div>
                  <div class="tab-pane fade px-4" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                   <table id="" class="alldatatable table table-striped display nowrap" style="width:100%">
                        <thead class="border">
                            <tr>
                                <th>Task Name</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <!-- <th>Action</th> -->
                               
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          // print_r($Overtask);
                            foreach ($Overtask as $task_detail) {
                              // print_r($proj_detail);
                              ?>
                                <tr>
                                  <td><a href="<?=base_url('Task/task_details/').$task_detail['task_id']?>"><?=$task_detail['task_name']?></a></td>
                                  <td><?=$task_detail['due_date']?></td>
                                  <td>
                                  <?php
                                  if ($task_detail['task_status']=="completed") {
                                    echo "<span class='text-white bg-success sele_staus'>Completed</span>";
                                  }
                                  elseif ($task_detail['task_status']=="deferred") {
                                    echo "<span class='text-white bg-danger sele_staus'>Deferred</span>";
                                  }
                                  elseif ($task_detail['task_status']=="waiting_for_someone") {
                                    echo "<span class='text-white bg-warning sele_staus'>Waiting For Someone</span>";
                                  }
                                  elseif ($task_detail['task_status']=="in_progress") {
                                    echo "<span class='text-white bg-warning sele_staus'>In Progress</span>";
                                  }
                                  else{
                                    echo "<span class='text-white bg-danger sele_staus'>Not Started</span>";
                                  }
                                  ?>
                                  
                                  <div class="btn-group open">
                                      <button class="btn btn-xs p-0 border btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> Change <span class="caret"></span></button>
                                      <ul class="dropdown-menu animated zoomIn">
                                        <li><a href="<?=base_url()?>Task/update_tasks/<?=$task_detail['task_id']?>/waiting_for_someone">Waiting For Someone</a></li>
                                        <li><a href="<?=base_url()?>Task/update_tasks/<?=$task_detail['task_id']?>/deferred">Deferred</a></li>
                                        <li><a href="<?=base_url()?>Task/update_tasks/<?=$task_detail['task_id']?>/completed">Completed</a></li>
                                        <li><a href="<?=base_url()?>Task/update_tasks/<?=$task_detail['task_id']?>/in_progress">In Progress</a></li>
                                        <li><a href="<?=base_url()?>Task/update_tasks/<?=$task_detail['task_id']?>/not_started">Not Started</a></li>
                                      </ul>
                                  </div>
                                 </td>
                                  <!-- <td>
                                    <div class="">
                                      <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                      <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                       <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                    </div>
                                  </td> -->
                                </tr>
                              <?php
                            }
                          ?> 
                        </tbody>
                        <tfoot class="border">
                            <tr>
                                <th>Task Name</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <!-- <th>Action</th> -->
                            </tr>
                        </tfoot>
                    </table>
                  </div>
            <!--       <div class="tab-pane fade px-4" id="contact-just" role="tabpanel" aria-labelledby="contact-tab-just">
                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro
                      fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone
                      skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings
                      gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork
                      biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl
                      craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-6">
              <div class="card card-height">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>TO DO List</strong></span> | <a href="<?=base_url('User/addTodoList')?>" >View All</a>
                   </div>
                    <div class="col-md-6 text-right"><button class="btn btn-success rounded-0" data-toggle="modal" data-target="#addTodoModal" > Add New</button></div>
                </div>
                <div class="">
                  <table class="table table-striped display nowrap" id="table2">
                 
                      <thead class="">
                       <tr>
                          <th></th>
                         
                         <th>What To Do</th>
                         <th>Status</th>
                         <th>End Date</th>
                         <th></th>
                       </tr>
                      </thead>
            
                    <tbody>
                      <?php
                     // print_r($to_do);
                      foreach ($to_do as $todo) {
                      ?>
                        <tr>
                            <td class="sorter"></td>
                       
                            <td><?=$todo->title?></td>
                            <td><?php
                            if ($todo->status==1) {
                             echo "In Progress";
                            }
                            elseif ($todo->status==2) {
                              echo "On Hold";
                            }
                            else{
                              echo "Done";
                            }
                            ?></td>
                            <td><?=$todo->due_date?></td>
                            <td>
                              
                              <button class="btn btn-danger ml-2 p-1 deleter" todo_id="<?=$todo->todo_id?>"><i class="far fa-trash-alt"></i></button>
                              
                            </td>
                        </tr>
                      <?php } ?>
                        <!--  <tr>
                            <td class="sorter"></td>
                            <td>Row 2</td>
                            <td>Record 2</td>
                            <td>Record 2</td>
                        </tr>
                        <tr>
                            <td class="sorter"></td>
                            <td>Row 3</td>
                            <td>Record 3</td>
                            <td>Recrod 3</td>
                        </tr>
                        <tr>
                            <td class="sorter"></td>
                            <td>Row 4</td>
                            <td>Record 4</td>
                            <td>Record 4</td>
                        </tr>
                        <tr>
                            <td class="sorter"></td>
                            <td>Row 5</td>
                            <td>Record 5</td>
                            <td>Record 5</td>
                        </tr> -->
                    </tbody>
                 <tfoot>
                  <!--       <tr>
                            <td colspan="4">&nbsp;</td>
                        </tr> -->
                    </tfoot> 

                  </table>
                </div>
              </div>
<script type="text/javascript">
  $(document).on("click",".edit_todo",function(){
    $("#addTodoModal").modal('show');
  })

    $(document).on('click','.deleter',function(){
         var todo_id=$(this).attr('todo_id');
           swal({
                title: "Are you sure?",
                text: "You will not be able to recover!",
                icon: "warning",
                buttons: [
                  'No, cancel it!',
                  'Yes, I am sure!'
                ],
                dangerMode: true,
              }).then(function(isConfirm) {
                if (isConfirm) {
                  $.ajax({
                    type:'POST',
                    data:{
                      todo_id:todo_id
                    },
                    url:'<?=base_url()?>User/delete_todo',
                    success:function(response){
                      if (response==1) {
                        swal('Deleted','To Do List Removed','success');
                        location.reload();
                      }
                      else{
                        swal('OOPS','Something Went Wrong','warning');
                      }
                    }
                  })
                }
              })
     })
</script>

              <!-----------todo add modal----------->
<div class="modal fade" id="addTodoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add TODO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="line mt-2"></div>
      <div class="modal-body">
        <div class=" mt-4">
          <div class="card ">
          
              <form method="POST" action="<?=base_url()?>Test/add_todo">
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>Users <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                    <input type="hidden" name="company_id" value="<?=$this->session->userdata('logged_user')[0]->company_id?>">
                    <select class="form-control" name="user_id" placeholder="">
                      <option selected="" disabled="">Select User</option>
                      <?php
                      foreach ($admin_employee as $emp) {
                      ?>
                      <option value="<?=$emp->user_id?>"><?=$emp->fullname?></option>
                    <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>What To DO <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                   <textarea class="form-control" name="title" row="4"></textarea>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>Status <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                    <select class="form-control" name="status" placeholder="">
                      <option selected="" value="1">In Process</option>
                      <option value="2">On Hold</option>
                      <option value="3">Done</option>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>Due Date <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                   <div class='input-group date datetimepicker1' id='datetimepicker1'>
                        <input type='text' name="due_date" class="form-control" />
                        <span class="input-group-addon">
                            <span ><i class="fa fa-calendar"></i></span>
                        </span>
                    </div>
                  </div>
                </div>
                <button  type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
      </div>
 <!--      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
            </div>
            <div class="col-lg-6">
              <div class="card p-2">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>My Calender</strong></span> 
                   </div>
                    <!-- <div class="col-md-6 text-right"><button class="btn btn-success rounded-0">Add New</button></div> -->
                </div>
              
                <div class="p-2">
                   <div id='calendar'></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-6">
              <div class="card card-height">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>Announcements</strong></span> 
                   </div>
                    <!-- <div class="col-md-6 text-right"><button class="btn btn-success rounded-0">Add New</button></div> -->
                </div>
              
                <div class="">
                  <ul class="list-unstyled p-4">
                    <?php
                      // print_r($get_All_announcement);
                      foreach ($get_All_announcement as $ann_details) {
                        ?>
                          <li class="row">
                            <div class="col-md-2">
                              <div class="annouce_date_col">
                                <div class="month"><?=date('M',strtotime($ann_details->start_date))?></div>
                                <div class="date"><?=date('d',strtotime($ann_details->start_date))?></div>
                              </div>
                            </div>
                            <div class="col-md-10">
                               <a href="<?=base_url('Announcement/announcement_detail/').$ann_details->announcements_id?>"><h6><?=ucfirst($ann_details->title)?></h6></a>
                               <span><?=$ann_details->description?></span>
                               <div class="text-right"><a href="<?=base_url('Announcement/announcement_detail/').$ann_details->announcements_id?>">View Details</a></div>
                            </div>
                          </li>
                        <?php
                      }
                    ?>
                    
                  </ul>  
             
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-6">
              <div class="card card-height">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>Recent Activities</strong></span> 
                   </div> -->
                    <!-- <div class="col-md-6 text-right"><button class="btn btn-success rounded-0">Add New</button></div> -->
                <!-- </div> -->
              
              <!--   <div class="">
                  <ul class="list-unstyled p-4">
                    <li class="row">
                      <div class="rec_act">
                         <img src="../assets/img/avatar/avatar-1.png" alt="" class="rounded-circle img-fluid">
                      </div>
                      <div>
                          <span><strong>Create an external account</strong>&nbsp; Time</span><br>
                          <div>Updated Profile</div>
                      </div> 
                    
                    </li>
                  </ul>  
             
                </div>
              </div>
            </div> -->
          </div>
        
          
        </section>
      </div>
   
<script type="text/javascript">
     $(function () {
          $('.datetimepicker1').datetimepicker();
      });
  
</script>
    <script>
$(document).ready(function(){
   


  // document.addEventListener('DOMContentLoaded', function() {
    var d = new Date();

    var month = d.getMonth()+1;
    var day = d.getDate();

    var output = d.getFullYear() + '-' +
        ((''+month).length<2 ? '0' : '') + month + '-' +
        ((''+day).length<2 ? '0' : '') + day;

    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      defaultDate: output,
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      select: function(arg) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.addEvent({
            title: title,
            start: arg.start,
            end: arg.end,
            allDay: arg.allDay
          })
        }
        calendar.unselect()
      },
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
      <?php
      foreach ($fetch_holiday as $holiday) {
      ?>
        {
          title: '<?=$holiday->event_name?>',
          start: '<?=$holiday->start_date?>',
          end: '<?=$holiday->end_date?>'
        },
      <?php } ?>
        // {
        //   title: 'All Day Event',
        //   start: '2019-08-01'
        // },
        // {
        //   title: 'Long Event',
        //   start: '2020-02-05',
        //   end: '2020-02-10'
        // },
        // {
        //   groupId: 999,
        //   title: 'Repeating Event',
        //   start: '2019-08-09T16:00:00'
        // },
        // {
        //   groupId: 999,
        //   title: 'Repeating Event',
        //   start: '2019-08-16T16:00:00'
        // },
        // {
        //   title: 'Conference',
        //   start: '2019-08-11',
        //   end: '2019-08-13'
        // },
        // {
        //   title: 'Meeting',
        //   start: '2019-08-12T10:30:00',
        //   end: '2019-08-12T12:30:00'
        // },
        // {
        //   title: 'Lunch',
        //   start: '2019-08-12T12:00:00'
        // },
        // {
        //   title: 'Meeting',
        //   start: '2019-08-12T14:30:00'
        // },
        // {
        //   title: 'Happy Hour',
        //   start: '2019-08-12T17:30:00'
        // },
        // {
        //   title: 'Dinner',
        //   start: '2019-08-12T20:00:00'
        // },
        // {
        //   title: 'Birthday Party',
        //   start: '2019-08-13T07:00:00'
        // },
        // {
        //   title: 'Click for Google',
        //   url: 'http://google.com/',
        //   start: '2019-08-28'
        // }
      ]
    });

    calendar.render();
  // });
})
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
             url:"<?=base_url()?>Dashboard/assign_to",
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
                   // print_r($users);
                   foreach ($users as $user) {
                   ?>

                     <input type="checkbox" value="<?=$user['user_id']?>" class=" admindModal" ><?=$user['username']?><?php 
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
              </div>
            </div>
          </div>
          <div class="text-center" > <button type="submit" class="btn btn-success" >Update</button></div>
        </form>
      </div>
      <div class="modal-footer">

        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
      </div>
    </div>

  </div>
</div>
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

<script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $(".dvPassport").hide();
  });
});
</script>