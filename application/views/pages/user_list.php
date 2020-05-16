   <?php
    $session=$this->session->userdata('logged_user');
   
$myId=$session[0]->user_id;
$role_id=$session[0]->role_id;
?>

    <div class="row mt-4">
      <div class="col-lg-12">
        <div class="card">
          <ul class="nav nav-tabs nav-justified md-tabs indigo col-md-5" id="myTabJust" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
                aria-selected="true">All Users</a>
            </li>
            <?php if($role_id!=3):?>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                aria-selected="false">New Users</a>
            </li>
          <?php endif;?>
          </ul>
          <div class="tab-content card pt-5" id="myTabContentJust">
            <div class="tab-pane fade show active px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">
              <table id="job_post" class="display nowrap" style="width:100%">
                <thead>
                  <tr>
                    <th class="text-center">Photo</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Username</th>
                    <th class="text-center">Active</th>
                    <th class="text-center">User Type</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
              <?php
              foreach ($all_users as $user) {
                $main_user=$user->user_id;
                // print_r($user);
                // die;
              ?>
                  <tr>
                    <td class="text-capitalize text-center"><img style="height: 50px" src="<?=base_url().$user->avatar?>"></td>
                    <td class="text-capitalize text-center"><a href="<?=base_url('User/userDetails').'/'.$user->user_id?>"><?=$user->fullname?></a></td>
                    <td class="text-capitalize text-center"><?=$user->username?></td>
                    <td class="text-capitalize text-center"><input type="checkbox" checked disabled=""></td>
                    <td class="text-capitalize text-center"><?php
                    if($user->role_id==1){
                      echo "Admin";
                    }
                    elseif ($user->role_id==2) {
                      echo "Client";
                    }
                    else{
                      echo "Staff";
                    }
                    ?></td>
                    <td>
                      <?php
                      if ($user->role_id!=1) {
                      ?>
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
                             <a href="<?=base_url()?>User/edit_user/<?=$main_user?>"><span class="sele_staus bg-success p-1 text-white"><i class="far fa-edit"></i></span></a>
                              <?php }
                               else
                               {
                                ?>
                                <a href="javascript:void(0)" style="visibility: hidden"><span class="sele_staus bg-success p-1 text-white"><i class="far fa-edit"></i></span></a>
                                <?php
                                }
                               if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                {?>


                             <span class="deletetusers sele_staus bg-danger p-1 text-white" users_id="<?=$user->user_id?>" ><i class="far fa-trash-alt"></i></span>
                              <?php }
                               else
                               {
                                ?>

                             <span style="visibility: hidden" class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>

                                <?php
                                }

                              }
                            }?>
                      </div>
                    <?php } ?>
                    </td>
                  </tr> 
                  <?php
                  }
                  ?>             
                </tbody>
                <tfoot>
                  <tr>
                    <th class="text-center">Photo</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Username</th>
                    <th class="text-center">Active</th>
                    <th class="text-center">User Type</th>
                    <th class="text-center">Action</th>
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
                          <label for="full_name">Choose Company<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <select class="form-control" name="company_id" require>
                           <?php
                           foreach($companies as $company){
                             ?>
                             <option value="<?=$company->id?>"><?=$company->company_name?></option>
                             <?php
                           }
                           ?>
                         </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="full_name">Full Name<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="text" name="full_name" value="" class="form-control" required="1" placeholder="e.g Enter your  Full Name">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="Employment_id">Employment ID<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="text" name="Employment_id" value="" class="form-control" required="1" placeholder="e.g 15351">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="exampleInputusername">Username<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="text" name="username" value="" class="form-control" required="1" placeholder="e.g Enter your  Username">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="Password">Password<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="password" id="pass" name="password" value="" class="form-control" required="1" placeholder="Password">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="confirmPassword">Confirm Password<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="password" id="cpass" value="" class="form-control" required="1" placeholder="Confirm Password">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="email">Email<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="email" name="email" value="" class="form-control" required="1" placeholder="Email">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="Phone">Phone<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="text" name="phone" value="" class="form-control" required="1" placeholder="e.g user_placeholder_phone">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="Mobile">Mobile<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="text" name="mobile" value="" class="form-control" required="1" placeholder="e.g user_placeholder_Mobile">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="Skype id ">Skype id <sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="text" name="skype_id" value="" class="form-control" required="1" placeholder="e.g user_placeholder_skype">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="Profilephoto">Profile Photo<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                         <input type="file" name="profilephoto" value="" class="form-control" required="1" placeholder="e.g user_placeholder_skype">
                        </div>
                      </div>
                    </div>
                     <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                          <label for="direction">Direction<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-sm-8">
                          <select id="direction" name="direction" class="form-control" required="">
                                <option value="" disabled="" selected="">Select Direction</option>
                                <option value="LTR">LTR</option>
                                <option value="RTL">RTL</option>
                            </select>
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
                               <select name="designations_id" class="form-control select_box w-100"  required>
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
        $(document).ready(function(){
          $('.deletetusers').on('click',function(){ 
             var users_id=$(this).attr("users_id");
              // alert(users_id);
           if(confirm("Are you Sure want to delete this record?") ==true)
            {       
            // alert(owner_id);         
                $.ajax({
                  url:"<?=base_url('User/DeleteUsers')?>",
                  type:"post",
                  data:{users_id:users_id},
                  success:function(response)
                  {   
                  response=JSON.parse(response);             
                     if (response==1)
                      {
                        swal("User!", "Delete","success");
                      // alert('Record Delete successfully');
                        location.reload();
                    
                       }
                  }
                 })                           
             // userPreference = "Data Delete successfully!";

             }
             else 
             {
              userPreference = "Save Canceled!";
              }
              
          })
        })  
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
  






<!-- <script>
    $('.file-upload').file_upload();
</script> -->


<script type="text/javascript">
      $("#job_posted").submit(function(e){
       e.preventDefault();
          var pass = $('#pass').val();
          var cpass = $('#cpass').val();
          if (pass!=cpass) {
            swal("Passwords Not Matched", "Password And Confirm Password Fields Are Not Same", "error");
          }
          else{
          var formData= new FormData($(this)[0]);
          $.ajax({
            url:"<?=base_url()?>User/new_user",
            type:"post",
             data:formData,
             contentType:false,
             processData:false,
             cache:false,
            success:function(response)
            {
              var response=JSON.parse(response);
              //console.log(response);
              if(response.status==1)
              {
                //console.log(response);
                swal("User", " Added Successfully", "success");
                location.reload();
              }
              else 
              {
               swal("OOPS", response.msg, "error");
                //location.reload();
              }
            }
         });
        }
    });
</script>
 
