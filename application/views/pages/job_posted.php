    <div class="row mt-4">
      <div class="col-lg-12">
        <div class="card">
          <ul class="nav nav-tabs nav-justified md-tabs indigo col-md-5" id="myTabJust" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
                aria-selected="true">All Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                aria-selected="false">New Jobs Posted</a>
            </li>
          </ul>
          <div class="tab-content card pt-5" id="myTabContentJust">
            <div class="tab-pane fade show active px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">
              <table id="job_post" class="display nowrap" style="width:100%">
                <thead>
                  <tr>
                    <th class="text-center">Job Title</th>
                    <th class="text-center">Designation</th>
                    <th class="text-center">Vacancy</th>
                    <th class="text-center">Last Date</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($fetchjob as $fetch)
                {
                  ?>
                  <tr>
                    <td class="text-capitalize text-center"><?=$fetch->job_title?></td>
                    <td class="text-capitalize text-center"><?=$fetch->designations?></td>
                    <td class="text-capitalize text-center"><?=$fetch->vacancy_no?></td>
                    <td class="text-capitalize text-center"><?=$fetch->last_date?></td>
                    <td class="text-capitalize text-center"><?=$fetch->status?></td>
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
                        
                        <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                        <?php }
                                         else
                                         {
                                          ?>
                                           <a href="" style="visibility: hidden"class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                           <?php
                                          }
                                         if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                          {?>

                        <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                         <?php }
                                         else
                                         {
                                          ?>
                                           <span style="visibility: hidden"class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                           
                                          <?php
                                          }

                                        }
                                      }?>


                         <!-- <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span> -->
                      </div>
                    </td>
                  </tr>
              <?php }?>
                 
                </tbody>
                <tfoot>
                  <tr>
                    <th>Job Title</th>
                    <th>Designation</th>
                    <th>Vacancy</th>
                    <th>Last Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <div class="tab-pane fade px-4" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
              <div class="row">
                <div class="offset-1 col-sm-8 cl-md-8 col-lg-8">
                  <form id="job_posted" role="form" enctype="multipart/form-data" data-parsley-validate="">
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="exampleInputEmail1">Job Title <sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="text" name="job_title" value="<?php
                            if (!empty($job_posted->job_title)) {
                                echo $job_posted->job_title;
                            }
                            ?>" class="form-control" required="1" placeholder="Enter job title">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="exampleInputEmail1">Designation <sub class="text-danger">*</sub> </label>
                        </div>
                        <div class="col-sm-8">
                          <div class="input-group">
                               <select name="designations_id" class="form-control select_box" style="width:100%"
                            required>
                              <option value="">select designation</option>
                              <?php if (!empty($all_department_info)): foreach ($all_department_info as $dept_name => $v_department_info) : ?>
                                  <?php if (!empty($v_department_info)):
                                      if (!empty($all_dept_info[$dept_name]->deptname)) {
                                          $deptname = $all_dept_info[$dept_name]->deptname;
                                      } else {
                                          $deptname ='undefined_department';
                                      }
                                      ?>
                                      <optgroup label="<?php echo $deptname; ?>">
                                          <?php foreach ($v_department_info as $designation) : ?>
                                              <option value="<?php echo $designation->designations_id; ?>"
                                                  <?php
                                                  if (!empty($job_posted->designations_id)) {
                                                      echo $designation->designations_id == $job_posted->designations_id ? 'selected' : '';
                                                  }
                                                  ?>><?php echo $designation->designations ?>
                                                    
                                                  </option>
                                          <?php endforeach; ?>
                                      </optgroup>
                                  <?php endif; ?>
                              <?php endforeach; ?>
                              <?php endif; ?>
                          </select>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-3">
                          <label for="exampleInputEmail1">Job Nature <sub class="text-danger">*</sub> </label>
                        </div>
                        <div class="col-sm-8">
                          <div class="input-group">
                           <select class="form-control" name="employment_type">
                              <option <?= (!empty($job_posted->employment_type) && $job_posted->employment_type == 'contractual' ? 'selected' : '') ?>
                                  value="contractual">contractual</option>
                              <option <?= (!empty($job_posted->employment_type) && $job_posted->employment_type == 'full_time' ? 'selected' : '') ?>
                                  value="full_time">full_time</option>
                              <option <?= (!empty($job_posted->employment_type) && $job_posted->employment_type == 'part_time' ? 'selected' : '') ?>
                                  value="part_time">part_time</option>
                          </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-3">
                          <label for="exampleInputEmail1">Experience   <sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                          <input type="text" name="experience" value="<?php
                            if (!empty($job_posted->experience)) {
                                echo $job_posted->experience;
                            }
                            ?>" class="form-control" required="1" placeholder="1 to 2 Years">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-3">
                          <label for="exampleInputEmail1">Age <sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                          <input type="text" name="age" value="<?php
                          if (!empty($job_posted->age)) {
                              echo $job_posted->age;
                          }
                          ?>" class="form-control" required="1" placeholder="30 to 40">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-3">
                          <label for="exampleInputEmail1">Salary Range  <sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                          <input type="text" name="salary_range" value="<?php
                          if (!empty($job_posted->salary_range)) {
                              echo $job_posted->salary_range;
                          }
                          ?>" class="form-control" required="1" placeholder="Negotiable to 1000 USD">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="exampleInputEmail1">Vacancy <sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                          <input type="number" name="vacancy_no" value="<?php
                          if (!empty($job_posted->vacancy_no)) {
                              echo $job_posted->vacancy_no;
                          }
                          ?>" class="form-control" required="1" placeholder="Enter Vacancy">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="exampleInputEmail1">Posted Date <sub class="text-danger">*</sub> </label>
                        </div>
                        <div class="col-sm-8">
                          <div class='input-group date' id='datetimepicker1'>
                        <!--      <input type="date" name="posted_date" > -->
                              <input type='text' class="form-control"  name="posted_date"/>
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
                          <label for="exampleInputEmail1">Last Date to Apply <sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                          <div class='input-group date' id='datetimepicker2'>
      <!--                       <input type="date" name="last_date" > -->
                              <input type='text' class="form-control" name="last_date" />
                              <span class="input-group-addon">
                              <span ><i class="fa fa-calendar"></i></span>
                              </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class=" col-sm-3">
                          <label for="exampleInputEmail1">Description <sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-9">
                       <textarea class="ckeditor" id="myEditor" name="myEditor" cols="35" rows="20"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                          <div class="col-sm-3">
                            <label for='uploaded_file'>Status</label>
                                      </div>
                        <div class="col-sm-4">
                            <div class="form-group d-flex">
                              <!--<label>Upload Your File </label>--->
                              <input type="radio"  name="status" value="1" class="form-control" checked style="height: 20px;width: 20px"><span class="ml-2"> Published</span>
                            </div>
                        </div>
                         <div class="col-sm-4">
                            <div class="form-group d-flex">
                              <!--<label>Upload Your File </label>--->
                              <input type="radio"  name="status" value="2" class="form-control" style="height: 20px;width: 20px"><span class="ml-2"> Unpublished</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                      <div class="row">
                        <div class="col-sm-3">
                          <label for="exampleInputEmail1">Permission<span class="text-danger">*</span></label>
                        </div>
                        <div class="col-sm-9">
                          <div class="checkbox c-radio needsclick ">
                            <input type="radio" name="Permission" value="all" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                          </div>
                          <div class="checkbox c-radio needsclick">
                            <input type="radio" name="Permission" value="all" id="chkPassport" onclick="ShowHideDiv(this)" > Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <div class="form-group"  id="dvPassport" style="display: none">
                      <div class="row">
                        <div class="col-sm-3">
                          <label for="exampleInputEmail1">select Users<span class="text-danger">*</span></label>
                        </div>
                        <div class="col-sm-9">
                           <?php
                           $count=1;
                           foreach ($users as $user) {
                           ?>
                            <input type="checkbox" value="<?=$user['user_id']?>" class="chkPassport admind" ><?=$user['username']?><strong class="badge btn-danger">Admin</strong>
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
                  <div class="row mt-3">
                    <div class="offset-11 col-md-1">
                      <button type="submit" class="btn btn-primary save_btn">Save</button>
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

  CKEDITOR.replace( 'myEditor',
    {
      fullPage : true,
      uiColor : '#efe8ce'
    });

</script>
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
      max: 700,
      slide: function( event, ui ) {
      $( "#amount" ).val( "$" + ui.value );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range-min" ).slider( "value" ) );
    } );
  </script>
  
  <script>
    $( function() {
    $( "#datepicker" ).datepicker();
    } );
  </script>

<script type="text/javascript">
    $(function () {
        $("#chkPassport").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport").show();
            } else {
                $("#dvPassport").hide();
            }
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $("#chkPassport1").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport1").show();
            } else {
                $("#dvPassport1").hide();
            }
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $("#chkPassport2").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport2").show();
            } else {
                $("#dvPassport2").hide();
            }
        });
    });
</script>

<script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $("#dvPassport").hide();
  });
 
});
</script>

<!-- <script>
    $('.file-upload').file_upload();
</script> -->

<script>
  $( document ).ready(function() 
  {
    $('#general').css('display','block');
  })
</script>
<script type="text/javascript">
      $("#job_posted").submit(function(e){
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
          var permission=JSON.stringify(obj);
          if(Object.keys(permission).length==2)
          {
            permission="all";
          }
          if($('#everyone').is(':checked')) 
          {
           permission="all"; 
          }
          var formData= new FormData($(this)[0]);
          formData.append('job_permissions',permission);
          formData.append('job_description', CKEDITOR.instances.myEditor.getData());
          $.ajax({
            url:"<?=base_url()?>Recruitment/create_job",
            type:"post",
             data:formData,
             contentType:false,
             processData:false,
             cache:false,
            success:function(response)
            {
               var response=JSON.parse(response);
              if(response.status==1)
              {
                swal("Job Posted Successfully!", "Created", "success");
                location.reload();
              }
              else if(response.status=="0")
              {
               swal(response.msg, "Already Exists", "error");
               location.reload();
              }
            }
         });
    });
</script>
<script>
$(document).ready(function(){
 
  $("#acount").click(function(){
   $("#payment").hide();
   $("#paidby").hide();
   $("#account").show();
   $("#category").hide();
   $('#exampleModal').modal('show');
  });
});
</script>

<script>
$(document).ready(function(){
 
  $("#catgry").click(function(){
   $("#payment").hide();
   $("#paidby").hide();
   $("#account").hide();
   $("#category").show();
   $('#exampleModal').modal('show');
  });
});
</script>

<script>
$(document).ready(function(){
 
  $("#paid").click(function(){
     $("#payment").hide();
   $("#paidby").show();
   $("#account").hide();
   $("#category").hide();
   $('#exampleModal').modal('show');
  });
});
</script>
 <script>
        $(document).ready(function() {
      
        $("#cust_grp").select2(); 
        $("#accounts").select2();
        $(".language").select2();
        $(".currency").select2(); 
        $("#country").select2();
      
       });
    </script>
<script>
$(document).ready(function(){
 
  $("#paymnt").click(function(){
     $("#payment").show();
   $("#paidby").hide();
   $("#account").hide();
   $("#category").hide();
   $('#exampleModal').modal('show');
  });
});
</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
          format:'YYYY-MM-DD'
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker2').datetimepicker({
           format:'YYYY-MM-DD'
        });
    });
</script>