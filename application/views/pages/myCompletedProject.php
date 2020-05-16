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
    $( ".datepicker" ).datepicker();
    } );
  </script>
<script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $(".dvPassport").hide();
  });
 
});
</script>

         <!--   <div class="p-3">
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
         
          <div class="row mt-4">
            <div class="col-lg-2 col-md-2 col-sm-12">
              <div class="card card-statistic-2 px-2">
                <div class="row  py-1">
                 <div class="col-md-8">
                   <div class=" ">
                      <h6 class="text_col">Overdue</h6>
                   </div>
                 </div>
                 <div class="col-md-4">
                    <span>9/48</span>
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
                    <span>9/48</span>
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
                    <span>9/48</span>
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
                    <span>9/48</span>
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
                    <span>9/48</span>
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
                    <span>9/48</span>
                 </div>
               </div>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                    40%
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
                <ul class="nav nav-tabs nav-justified md-tabs indigo col-md-5" id="myTabJust" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
                      aria-selected="true">Project List</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                      aria-selected="false">New Project</a>
                  </li>
                  <li class="nav-item ">
                  <a class="nav-link" id="import_project" data-toggle="tab" href="#imp_project" role="tab" aria-controls="imp_project" aria-selected="false">Import Projects</a>
                  </li> -->
                </ul>
                <div class="tab-content card pt-3" id="myTabContentJust">
                  <div class="tab-pane fade show active px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

                   <table id="example" class="display nowrap table-responsive" style="width:100%">
                        <thead>
                            <!-- <tr> -->
                                <th>Project Name</th>
                                <th>Client</th>
                                <th>End Date</th>
                                <!-- <th>Status</th> -->
                                <th>Assigned To</th>
                                <th>Downloads</th>
                                <!-- <th>Action</th> -->
                             
                            <!-- </tr> -->
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
                                    echo "<span class='text-white bg-warning sele_staus'>In Progress</span>";
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
                                  $total = count((array)$pr);
              // print_r($total);
                                  if($total>8)
                                  {
                                    $total=$total-8;
                                    for($i=0;$i<$total;$i++)
                                    {
                                      if($pr[0]=="Everyone ")
                                      {
                                        echo "Everyone";
                                      }
                                      else{
                                        // echo $pr[$i]->fullname;
                                      }
                                   }
                                  }
                                  else{
                                    echo "Everyone";
                                  }
                                  //print_r($pr[0]->fullname);
                                 
                                  ?>
                                </td>
                                <td>
                                  <?php
                                  if ($pr['project_uploads']==null) {
                                    echo "No Downloads";
                                  }
                                  else{
                                    echo "<a href='".base_url('Projects/downloader/').$pr['project_id']."'>Download Now</a>";
                                  }
                                  ?>
                                </td>
                                <!-- <td> -->
                                  <!--  <?php
                                      foreach($Assign_permission as $checkpermission)
                                        {
                                          $permission=$checkpermission->permission;
                                              // print_r($permission);
                                          // $permission=explode(',',$checkpermission->permission);

                                            // print_r($permission);
                                            // die;  
                                          if(strpos($permission,'Edit')!==false)
                                          {?>
                                              <a href="" id="edit_p"class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>

                                         <?php }
                                         else
                                         {
                                          ?>
                                            <a href="" id="edit_p"class="sele_staus bg-info p-1 text-white " style="visibility: hidden"><span><i class="far fa-edit"></i></span></a>

                                         <?php
                                          }
                                         if(strpos($permission,'Delete')!==false)
                                          {?>
                                              <a href="" class="sele_staus  p-1 text-white ">  <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>

                                         <?php }
                                         else
                                         {
                                          ?>
                                            <a href="" class="sele_staus  p-1 text-white " style="visibility: hidden">  <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>

                                         <?php
                                          }

                                        }?> -->
                                    <!-- <div class="">
                                      <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                      <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                       <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                    </div> -->

                                <!-- </td> -->
                             
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
                <label for="exampleInputEmail1">Project Name <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-9">
                <input type="text" name="project_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Select Client  <span class="text-danger">*</span> </label>
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
                <label for="exampleInputEmail1">Progress </label>
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
                <label for="exampleInputEmail1">Start Date  <span class="text-danger">*</span> </label>
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
                <label for="exampleInputEmail1">End Date  <span class="text-danger">*</span> </label>
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
                <label for="exampleInputEmail1">Billing Type  <span class="text-danger">*</span> </label>
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
                <label for="exampleInputEmail1">Fixed Price  </label>
              </div>
              <div class="col-sm-9">
                <input type="text" name="fixed_rate" class="form-control" placeholder="50" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Estimate Hours  </label>
              </div>
              <div class="col-sm-9">
                <input type="number" step="0.01" value="" class="form-control" name="estimate_hours" data-parsley-id="23">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Status  <span class="text-danger">*</span> </label>
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
                <label for="exampleInputEmail1">Demo Url </label>
              </div>
              <div class="col-sm-9">
                <input type="text" name="demo_url" class="form-control" placeholder="http://www.demo.com" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                <label for="exampleInputEmail1">Select Users<span class="text-danger">*</span></label>
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
          <label for="exampleInputEmail1">Description <span class="text-danger">*</span> </label>
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
                    <label for="exampleInputEmail1">Company Name <span class="text-danger">*</span> </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Email <span class="text-danger">*</span> </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company VAT </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="vat" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Customer Group  </label>
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
                    <label for="exampleInputEmail1">Language  </label>
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
                    <label for="exampleInputEmail1">Currency </label>
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
                    <label for="exampleInputEmail1">Short Note  </label>
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
                    <label for="exampleInputEmail1">Company Phone</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Mobile </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="mobile" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Zip code </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="zipcode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div> 
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company City</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                    <label for="exampleInputEmail1">Company Fax</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="fax" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
                <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Address </label>
                  </div>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="address"></textarea>
                  </div>
                </div>
                  </div>  
                            <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1"> Latitude( Google Map ) </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="latitude" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
                            <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Longitude( Google Map ) </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="longitude" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                    <label for="exampleInputEmail1">Company Website</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="website" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Skype id</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="skype_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Facebook URL</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="facebook" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Twitter URL</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="twitter" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Linkedin URL</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="linkedin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                    <label for="exampleInputEmail1">Hosting Company</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="hosting_company" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Hosting</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="hostname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Username</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Password</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Port</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="port" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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




