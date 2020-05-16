<?php
    $session=$this->session->userdata('logged_user');
   
$myId=$session[0]->user_id;
$role_id=$session[0]->role_id;
?>

  <script>
    function openCity(evt, cityName) {
      console.log(evt);
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
$(document).on('click','.next_contact',function(){

  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
  tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById('contactDetails').style.display = "block";
  $('#contact_tab').addClass('active');
})

$(document).on('click','.next_web',function(){

var i, tabcontent, tablinks;
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
tabcontent[i].style.display = "none";
}
tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
}
document.getElementById('web').style.display = "block";
$('#web_tab').addClass('active');
})

$(document).on('click','.next_hosting',function(){

var i, tabcontent, tablinks;
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
tabcontent[i].style.display = "none";
}
tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
}
document.getElementById('hosting').style.display = "block";
$('#hosting_tab').addClass('active');
})
</script>
  
  <script>
    $( function() {
    $( "#slider-range-min" ).slider({
      range: "min",
      value: 37,
      min: 1,
      max: 100,
      slide: function( event, ui ) {
      $( "#amount" ).val(ui.value + "%");
      }
    });
    $( "#amount" ).val($( "#slider-range-min" ).slider( "value" ) );
    } );
  </script>
  
  <script>
    $( function() {
    $( ".datepicker" ).datepicker({ dateFormat: 'yy-dd-mm' });
    } );
  </script>
<script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $(".dvPassport").hide();
  });
 
});
$(document).on('click','.dlt_project',function(){
  var projectId=$(this).attr('d-Pro');
  $.ajax({
    url:"<?=base_url('Projects/delete_project')?>",
    type:"post",
    data:{project_id:projectId},
    success:function(response){
        response=JSON.parse(response);
        if(response.status==1){
            swal('success','Project Deleted Successfully.','success');      
            $('#myTabContentJust').load(document.URL +  ' #myTabContentJust');  
        }
    }
  });
  
});
$(document).on('click','.edt_project',function(){
  var projectId=$(this).attr('d-Pro');
  window.location.href="<?=base_url('Projects/')?>"+project_id;
  swal('success','Yeah','success');
});
</script>

<?php
  // $pover
  
  $all_project_info = $this->db->get('tbl_project')->result();
  $totalProject=count($all_project_info);
  // echo ' ***  '.
  $p_started = 0;
  $p_in_progress = 0;
  $p_completed = 0;
  $project_time = 0;
  // $project_time = $this->User_model->my_spent_time($profile_info->user_id, true);

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
  // $totalProject=$p_started+$p_in_progress+$p_completed;

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
          </div> -->
         
          <div class="row mt-4">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2 px-2">
                <div class="row  py-1">
                 <div class="col-md-8">
                   <div class=" ">
                      <h6 class="text_col">In Progress</h6>
                   </div>
                 </div>
                 <div class="col-md-4">
                    <span><?=$p_in_progress?>/<?=$totalProject?></span>
                 </div>
               </div>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?=($p_in_progress/$totalProject)*100?>%">
                    <?=(int)(($p_in_progress/$totalProject)*100)?>%
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2 px-2">
                <div class="row  py-1">
                 <div class="col-md-8">
                   <div class=" ">
                      <h6 class="text_col">Completed</h6>
                   </div>
                 </div>
                 <div class="col-md-4">
                    <span><?=$p_completed?>/<?=$totalProject?></span>
                 </div>
               </div>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?=($p_completed/$totalProject)*100?>%">
                    <?=(int)(($p_completed/$totalProject)*100)?>%
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2 px-2">
                <div class="row  py-1">
                 <div class="col-md-8">
                   <div class=" ">
                      <h6 class="text_col">Started</h6>
                   </div>
                 </div>
                 <div class="col-md-4">
                    <span><?=$p_started?>/<?=$totalProject?></span>
                 </div>
               </div>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?=($p_started/$totalProject)*100?>%%">
                    <?=(int)(($p_started/$totalProject)*100)?>%
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-2 col-md-2 col-sm-12">
              <div class="card card-statistic-2 px-2">
                <div class="row  py-1">
                 <div class="col-md-8">
                   <div class=" ">
                      <h6 class="text_col">Overdue</h6>
                   </div>
                 </div>
                 <div class="col-md-4">
                    <span>9/<?=$totalProject?></span>
                 </div>
               </div>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                    40%
                  </div>
                </div>
              </div>
            </div> -->
           <!--  <div class="col-lg-2 col-md-2 col-sm-12">
              <div class="card card-statistic-2 px-2">
                <div class="row  py-1">
                 <div class="col-md-8">
                   <div class=" ">
                      <h6 class="text_col">Overdue</h6>
                   </div>
                 </div>
                 <div class="col-md-4">
                    <span>9/<?=$totalProject?></span>
                 </div>
               </div>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                    40%
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
              <div class="card card-statistic-2 px-2">
                <div class="row  py-1">
                 <div class="col-md-8">
                   <div class=" ">
                      <h6 class="text_col">Overdue</h6>
                   </div>
                 </div>
                 <div class="col-md-4">
                    <span>9/<?=$totalProject?></span>
                 </div>
               </div>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                    40%
                  </div>
                </div>
              </div>
            </div> -->
  
          </div>
          <div class="row mt-4">
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
                      aria-selected="true">All Projects</a>
                  </li>
                  <?php if($role_id!=3):?>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                      aria-selected="false">New Project</a>
                  </li>
                  <li class="nav-item ">
                  <a class="nav-link" id="import_project" data-toggle="tab" href="#imp_project" role="tab" aria-controls="imp_project" aria-selected="false">Import Projects</a>
                  </li>
                <?php endif;?>
                </ul>
                <div class="tab-content card pt-3" id="myTabContentJust">
                  <div class="tab-pane fade show active px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

                   <table id="" class="alldatatable display nowrap table-responsive" style="width:100%">
                        <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Client</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Assigned To</th>
                                <th>Downloads</th>
                                <th>Action</th>
                             
                            </tr>
                        </thead>

                        <tbody>
                          <?php
                          foreach ($project as $pr) {
                            $taskprogress=number_format($pr['taskprogress']);
                            // print_r($pr);
                            // print_r('<bt>');
                          ?>
                            <tr>
                              <td>  
                                <a href="<?=base_url('Projects/project_details/').$pr['project_id']?>"><?=$pr['project_name']?>
                                  <div class="progress">
                                      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?=$taskprogress?>%">
                                       
                                       <?=$taskprogress?>
                                      </div>
                                </div>
                              </td>
                                <td><?=$pr['client_name']?></td>
                                <td><?=$pr['end_date']?></td>
                                
                                <td>
                                  <?php
                                  if ($pr['project_status']=="completed") {
                                    echo "<span class='text-white bg-success sele_staus'>Completed</span>";
                                  }
                                  elseif ($pr['project_status']=="deferred") {
                                    echo "<span class='text-white bg-danger sele_staus'>Deferred</span>";
                                  }
                                  elseif ($pr['project_status']=="waiting_for_someone") {
                                    echo "<span class='text-white bg-warning sele_staus'>Waiting For Someone</span>";
                                  }
                                  elseif ($pr['project_status']=="in_progress") {
                                    echo "<span class='text-white bg-warning sele_staus'>In Progresse</span>";
                                  }
                                  else{
                                    echo "<span class='text-white bg-danger sele_staus'>Not Started</span>";
                                  }
                                  ?>
                                  <div class="btn-group open">
                                      <button class="btn btn-xs p-0 border btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> Change <span class="caret"></span></button>
                                      <ul class="dropdown-menu animated zoomIn">
                                        <li><a href="<?=base_url()?>Projects/update_projecter/<?=$pr['project_id']?>/waiting_for_someone">Waiting For Someone</a></li>
                                        <li><a href="<?=base_url()?>Projects/update_projecter/<?=$pr['project_id']?>/deferred">Deferred</a></li>
                                        <li><a href="<?=base_url()?>Projects/update_projecter/<?=$pr['project_id']?>/completed">Completed</a></li>
                                        <li><a href="<?=base_url()?>Projects/update_projecter/<?=$pr['project_id']?>/in_progress">In Progress</a></li>
                                        <li><a href="<?=base_url()?>Projects/update_projecter/<?=$pr['project_id']?>/Not_Started">Not Started</a></li>
                                      </ul>
                                  </div>
                                 </td>
                                <td>
                                  <?php
                                  // if(count($pr['assigned_to'])>0){
                                  //   foreach ($pr['assigned_to'] as $assigned_to) {
                                  //     print_r($assigned_to);
                                  //    echo '<img src="'.base_url().'" class="rounded-circle"> <a href="javascript:void(0)" id="open_modal"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                                  //   }
                                  // // print_r($pr['assigned_to']);
                                  
                                  // }else{
                                  //    echo '<a href="javascript:void(0)" id="open_modal"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                                  // }

                                  if(count($pr['assigned_to'])>0){
                                    foreach ($pr['assigned_to'] as $user) {
                                      if ($user=="Everyone") {
                                        echo "Everyone";
                                      }else{
                                          echo '<a href="'.base_url('User/userDetails/').$user->userid.'"><img src="'.base_url().$user->avatar.'"  width="20px" class="rounded-circle" alt="'.$user->fullname.'"  title ="'.$user->fullname.'"></a>';
                                      }
                                    }
                                  
                                  }
                                  // die(json_encode($pr));
                                  // $total = count($pr);
                                  // print_r($pr);
                                  // if($total>8)
                                  // {
                                  //   $total=$total-8;
                                  //   for($i=0;$i<$total;$i++)
                                  //   {
                                  //     if($pr[$i]=="Everyone ")
                                  //     {
                                  //       echo "Everyone";
                                  //     }
                                  //     else{
                                  //       // echo $pr[$i]->fullname;
                                  //     }
                                  //  }
                                  // }
                                  // else{
                                  //   echo "Everyone";
                                  // }
                                  //print_r($pr[0]->fullname);
                                 
                                  ?>
                                </td>
                                <td>
                                  <?php
                                  if ($pr['project_uploads']==null) {
                                    echo "No Downloads";
                                  }
                                  else{
                                    echo "<a href='".base_url()."Projects/downloader/".$pr['project_id']."'>Download Now</a>";
                                  }
                                  ?>
                                </td>
                                <td>
                                    <div class="">
                                      <?php
                                      foreach($Assign_permission as $checkpermission)
                                        {
                                          $permission=$checkpermission->permission;
                                          // print_r($permission);
                                          foreach ($UsersPermission as $Uperms) 
                                            {
                                             $Userpermi=$Uperms->permission;
                                                
                                          if(strpos($permission,'Edit')!==false||strpos($Userpermi,'Edit')!==false)
                                          {?>
                                      <a href="<?=base_url('Projects/editProject/').$pr['project_id']?>" class="sele_staus bg-info p-1 text-white " d-Pro="<?=$pr['project_id']?>"><span><i class="far fa-edit"></i></span></a>
                                       <?php }
                                         else
                                         {
                                          ?>
                                           <a href="#"
                                           style="visibility: hidden" class="sele_staus bg-info p-1 text-white " d-Pro="<?=$pr['project_id']?>"><span><i class="far fa-edit"></i></span></a>
                                           <?php
                                          }
                                         if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                          {?>


                                      <a href="javascript:void(0)" class="dlt_project" d-Pro="<?=$pr['project_id']?>"><span class="sele_staus bg-danger p-1  text-white"><i class="far fa-trash-alt"></i></span></a>
                                       <?php }
                                         else
                                         {
                                          ?>

                                      <a href="javascript:void(0)" style="visibility: hidden"class="dlt_project" d-Pro="<?=$pr['project_id']?>"><span class="sele_staus bg-danger p-1  text-white"><i class="far fa-trash-alt"></i></span></a>
                                      <?php
                                          }

                                        }
                                      }?>
                                       <!-- <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span> -->
                                    </div>

                                </td>
                             
                            </tr>
                            <?php
                             }
                            ?>
                        </tbody>
                    </table>
                  </div>
      <div class="tab-pane fade px-4" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                     <div class="row">
        <div class="col-sm-7 cl-md-7 col-lg-7">
          <form id="create_project">
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label >Project Name <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-9">
                <input type="hidden" name="company_id" value="<?=$this->session->userdata('logged_user')[0]->company_id?>">
                <input type="text" name="project_name" class="form-control" >
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label >Select Client  <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-8">
                <div class="input-group">
                      <select name="client_id" class="form-control" id="e1" style="width: 100%" >
                          <option value="">Select Client</option>
                          <?php
                          foreach($clients as $client){
                            ?>
                          <option value="<?=$client->client_id?>"><?=$client->name?></option>
                          <?php
                          }
                          ?>
                      </select>
                </div>
              </div>
              <div class="col-sm-1">
                  <span type="button" class="btn btn-light butn" data-toggle="modal" data-target="#myModal" title="New Client"><i class="fa fa-plus"></i></span>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label >Progress </label>
              </div>
              <div class="col-sm-9">
                  <div id="slider-range-min"></div>
                <div class="d-flex bg-light">
                    <div class="col-sm-4">
                    
                      <label for="amount">Progress</label>
                      <input type="text" id="amount" name="progress" readonly style="border:0; color:#f6931f;width:40%; font-weight:bold;">
                    
                  </div>
                    <script>
                    // $(document).ready(function(){
                    //   $('input[type="checkbox"]').on('change', function() {
                    //    $('input[type="checkbox"]').not(this).prop('checked', false);
                    // });
                    // })
                    </script>
                  <div class="col-sm-4">
                    <input type="checkbox" name="vehicle1" value="hours"> Project Hours<br>
                  </div>
                  <div class="col-sm-4">
                    <input type="checkbox" name="vehicle1" value="task"> Through Tasks<br>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label >Start Date  <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-8">
                <input type="text" name="start_date" class="form-control datepicker">
              </div>
              <div class="col-sm-1">
                  <button type="button" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label >End Date  <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-8">
                <input type="text" name="end_date" class="form-control datepicker">
              </div>
              <div class="col-sm-1">
                  <button type="button" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label >Billing Type  <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-9">
                <div class="input-group">
                      <select name="billing_type" class="form-control" id="bill2" style="width: 100%" required="">
                          <option value="">Fixed Price</option>
                          <option value="1">Only Project Hours</option>
                          <option value="2">Only Task Hours</option>
                          <option value="3">Project & Tasks Hours</option>
                      </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label >Fixed Price  </label>
              </div>
              <div class="col-sm-9">
                <input type="number" name="fixed_rate" class="form-control" id="fp" placeholder="50" >
              </div>
            </div>
          </div>

          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label >Received Amount  </label>
              </div>
              <div class="col-sm-9">
                <input type="number" name="token_amount" class="form-control" id="token" value="0" >
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label >Estimate Hours  </label>
              </div>
              <div class="col-sm-9">
                <input type="number" step="0.01" value="" class="form-control" name="estimate_hours" data-parsley-id="23">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label >Status  <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-9">
                <div class="input-group">
                  <select name="project_status" class="form-control" id="stat_br" style="width: 100%"  required="" >
                      <option value="started">Started </option>
                      <option value="in_progress">In progress</option>
                      <option value="on_hold">Hold</option>
                      <option value="cancelled">Cancel</option>
                     <option value="completed">Completed</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label >Demo Url </label>
              </div>
              <div class="col-sm-9">
                <input type="text" name="demo_url" class="form-control" placeholder="http://www.demo.com" >
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label >Assigned To <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
                <div class="checkbox c-radio needsclick">
                  <input type="radio" value="" name="everyone" id="everyone" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                </div>
                <div class="checkbox c-radio needsclick">
                  <input type="radio" value="" name="everyone" class="customize_permission"> Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                </div>
              </div>
            </div>
          </div>
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
          <div class="form-group dvPassport"  style="display: none">
              <div class="row">
              <div class="col-sm-3">
                <label >Select Users<span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
                 <?php
                 $count=1;
                 foreach ($users as $user) {
                 ?>

                   <input type="checkbox" name="vehicle2" value="<?=$user['user_id']?>" class="chkPassport admind" > <?=$user['username']?> <strong class="badge btn-danger">Admin</strong>
                 <br>
                 <div class="row dvPassport"  id="dvPassport<?=$count?>" style="display: none">
                    <div class="col-md-3">
                   <input type="checkbox" class="data" name="vehicle1" value="View" > View
                  </div>
                  <div class="col-md-3">
                       <input type="checkbox" class="data" name="vehicle1" value="Edit" > Edit
                  </div>
                  <div class="col-md-3">
                      <input type="checkbox" class="data" name="vehicle1" value="Delete"> Delete
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
        <div class="offset-1 col-sm-4 cl-md-4 col-lg-4 ">
        <?php
        foreach ($settings as $setting) {
        ?>
        <label class="small-box"> <?=$setting['description']?>
          <input type="checkbox" class="song" checked="checked" value="<?=$setting['settings']?>"> 
          <span class="checkmark"></span>
        </label>
        <hr>
        <?php
        }
        ?>
        </div>
    </div>
      <div class="row">
        <div class=" col-md-2">
          <label >Description <span class="text-danger">*</span> </label>
      </div>
      <div class="col-md-10">
           <textarea name="editor1"></textarea>
                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
      </div>
    </div>
    <div class="row mt-3">
        <div class="offset-11 col-md-1">
         <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
<script type="text/javascript">
        $("#create_project").submit(function(e){
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
         var new_ar=[];
          $('.song').each(function(){
              if($(this).is(':checked'))
              {
                  new_ar.push($(this).val()); 
              }        
          });
         var project_settings=JSON.stringify(new_ar);
         var permission=JSON.stringify(obj);
         if(Object.keys(permission).length==2){
          permission="all";
         }
         if($('#everyone').is(':checked')) { permission="all"; }
         var formData= new FormData($(this)[0]);
         formData.append('permission',permission);
         formData.append('project_settings',project_settings);
         formData.append('description', CKEDITOR.instances.editor1.getData());
         $.ajax({
             url:"<?=base_url()?>Projects/create_project",
              type:"post",
              data:formData,
              contentType:false,
              processData:false,
              cache:false,
             success:function(response)
             {
                var response=JSON.parse(response);
               if(response.status==1){
                 swal("Project Created Successfully!", "Created", "success");
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
<!--                     <div class="text-right">
                      <button class="btn btn-success rounded-0"><i class="fa fa-download" aria-hidden="true"></i> Download Sample</button>
                    </div> -->
                    <div class="row">
                      <form id="upload_project" class="w-100">
                       <div class="col-md-12 card p-4">
                          <div class="col-md-5 offset-md-1 mt-3">
                                                       <div class="form-group row">
                                  <label for="staticEmail" class="text-right col-sm-3 col-form-label font-weight-bold">Select Project <sup class="a1">*</sup></label>
                                  <div class="col-sm-8">

                                     <select  name="project_id" class="form-control " id="task_status" style="width: 100%" required="">
                                      <option value="" selected="" disabled="">Select Project</option>
                                      <?php
                                      foreach ($project as $pr) {
                                      ?>
                                      <option value="<?=$pr['project_id']?>"><?=$pr['project_name']?></option>
                                    <?php } ?>
                                     </select>            
                                  </div>
                              </div>
                                <div class="form-group  row">
                                  <label for="staticEmail" class="text-right col-sm-3 col-form-label font-weight-bold">Choose Files <sup class="a1">*</sup></label>
                                  <div class="col-sm-8">
                                      <input type="file" name="files[]" multiple class="text-right form-control border-0 d-none" id="img" placeholder="">
                                  <label for="img" class="border w-50 pl-3">Select Files</label>
                                  </div>
                                </div>
        
                               </div>
                                <div class="" style="padding-left: 26%">
                                  <button type="submit" class="btn btn-primary">Upload</button>
                              </div>  
                               </div>
                            </form>   
                         
                        </div>
                      </div>
              

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<script type="text/javascript">
      $("#upload_project").submit(function(e){
       e.preventDefault();
          var formData= new FormData($(this)[0]);
          $.ajax({
            url:"<?=base_url()?>Projects/upload_project",
            type:"post",
             data:formData,
             contentType:false,
             processData:false,
             cache:false,
            success:function(response)
            {
              //console.log(response);
              var response=JSON.parse(response);
              if(response.status==1)
              {
                swal("Uploaded", "success", "success");
                location.reload();
              }
              else if(response.status=="0")
              {
               swal("OOPS", "Something Went Wrong", "error");
              }
            }
         });
    });
</script>
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content style">
          <div class="modal-header border-bottom">
            <h5 class="modal-title" id="exampleModalLabel">Client list</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
        <div class="modal-body">
          <div class="card">
            <div class="tab">
                <div class="container tabsb">
                <button class="tablinks active" onclick="openCity(event, 'general')">General</button>
                <button class="tablinks" id="contact_tab" onclick="openCity(event, 'contactDetails')">Contact Details</button>
                <button class="tablinks" id="web_tab" onclick="openCity(event, 'web')">Web</button>
                <button class="tablinks" id="hosting_tab" onclick="openCity(event, 'hosting')">Hosting</button>
              </div>
            </div>
          <form id="new_client"> 
            <div id="general" class=" tabcontent" style="display: block">
                <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Company Name <span class="text-danger">*</span> </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" >
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Company Email <span class="text-danger">*</span> </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" >
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Company VAT </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="vat" >
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Customer Group  </label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <select name="customer_group_id" class="form-control " id="cus_grp" style="width: 100%">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
                  </div>
                  <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Language  </label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <select name="language" class="form-control" id="language"style="width: 100%">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
                  </div>
                  <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Currency </label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <select name="currency" class="form-control " style="width: 100%" id="currency"> 
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Short Note  </label>
                  </div>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="short_note"></textarea>
                  </div>
                </div>
              </div>
              <div class="modal-footer border-top-0 modal-butn">
                <span class="btn btn-primary next_contact">Next</span>
              </div>
            </div>

            <div id="contactDetails" class="tabcontent">
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Company Phone</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="number" name="phone" class="form-control" >
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Company Mobile </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="mobile" >
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Zip code </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="zipcode" class="form-control" >
                  </div>
                </div>
                  </div> 
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Company City</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="city" class="form-control" >
                  </div>
                </div>
                  </div> 
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="comp_country">Company Country</label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <select name="country" class="form-control"  id="comp_country">
                        <option value="">India</option>
                      </select>
                    </div>
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Company Fax</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="fax" class="form-control" >
                  </div>
                </div>
                  </div>
                <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Company Address </label>
                  </div>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="address"></textarea>
                  </div>
                </div>
                  </div>  
                            <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label > Latitude( Google Map ) </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="latitude" class="form-control" >
                  </div>
                </div>
                  </div>
                            <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Longitude( Google Map ) </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="longitude" class="form-control" >
                  </div>
                </div>
                  </div>   
          <div class="modal-footer border-top-0 modal-butn">
            <span class="btn btn-primary next_web">Next</span>
          </div>         
            </div>

            <div id="web" class="tabcontent">
                <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Company Website</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="website" class="form-control" >
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Skype id</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="skype_id" class="form-control" >
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Facebook URL</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="facebook" class="form-control" >
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Twitter URL</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="twitter" class="form-control" >
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Linkedin URL</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="linkedin" class="form-control" >
                  </div>
                </div>
                  </div>
            <div class="modal-footer border-top-0 modal-butn">
            <span class="btn btn-primary next_hosting">Next</span>
          </div>
            </div>
            <div id="hosting" class="tabcontent">
                <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Hosting Company</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="hosting_company" class="form-control" >
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Hosting</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="hostname" class="form-control" >
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Username</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="username" class="form-control" >
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Password</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" >
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label >Port</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="port" class="form-control" >
                  </div>
                </div>
                  </div>
                  <!-- <div class="modal-footer border-top-0 modal-butn"> -->
            <button type="submit" class="btn btn-primary">Save</button>
          <!-- </div> -->
          </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
     <style>
 
     </style>
     <script type="text/javascript">
  $(document).on('keyup','#token',function(){
      var token= parseInt($(this).val());
      var fp = parseInt($('#fp').val());
      if (token > fp) {
        swal('Error','Token Amount Can not be greater than fixed price','warning');
        $('#token').val("0");
      }
  })
</script>
      <script>
        $(document).ready(function() {
        $("#e1").select2(); 
        $("#bill2").select2();
        $("#cus_grp").select2(); 
        $("#stat_br").select2();
        $("#cus_grp").select2(); 
        $("#language").select2();
        $("#currency").select2(); 
        $("#comp_country").select2();
        $("#task_status").select2();
       });

       $(document).on('submit','#new_client',function(e){
        e.preventDefault();
        var formData= new FormData($(this)[0]);
        $.ajax({
            url:"<?=base_url()?>Client/client_ajax",
             type:"post",
             data:formData,
             contentType:false,
             processData:false,
             cache:false,
            success:function(response)
            {
              var response=JSON.parse(response);
              if(response.status==1){
                //$("#profile-just").load(location.href + " #profile-just");
                swal("Client Added Successfully", "Success", "success");
              }
              else if(response.status=="0"){
                swal('Client Already Exists', "Client Already Exists", "error");
              }
            }
        });
       })

      //  $("#new_project").submit(function(e){
      //   e.preventDefault();
      //   console.log("working");
      //   var formData= new FormData($(this)[0]);
      //   for(var pair of formData.entries()) {
      //     console.log(pair[0]+ ', '+ pair[1]); 
      //   }
        // $.ajax({
        //     url:"<?=base_url()?>login/signin",
        //      type:"post",
        //      data:formData,
        //      contentType:false,
        //      processData:false,
        //      cache:false,
        //     success:function(response)
        //     {
        //        var response=JSON.parse(response);
        //       if(response.status==1){
        //         //swal("User Registred Successfully!", "Please Login!", "success");
        //         window.location.href='<?=base_url()?>Home';
        //       }
        //       else if(response.status=="0"){
        //         swal(response.msg, "Please Check Credentials!", "error");
        //       }
        //     }
        // });
    //});
    </script>




