
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
                      aria-selected="true">Hourly Rate List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                      aria-selected="false">Set Hourly Grade</a>
                  </li>
                 <!--  <li class="nav-item ">
                  <a class="nav-link" id="import_project" data-toggle="tab" href="#imp_project" role="tab" aria-controls="imp_project" aria-selected="false">Import Transfer </a>
                  </li> -->
                </ul>
                <div class="tab-content card pt-3" id="myTabContentJust">
                  <div class="tab-pane fade show active px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

                   <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Hourly Rate</th>
                                <th>Hourly Grade</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          $count=1;
                          foreach ($templates as $data) {
                            // print_r($data);
                          ?>
                            <tr>
                                <td><?=$count?></td>
                                <td><?=$data->hourly_grade?></td>
                                <td><?=$data->hourly_rate?></td> 
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
                                       <a href="<?=base_url()?>Payroll/hourlyTemplate/<?=$data->hourly_rate_id?>"><span class="sele_staus bg-success p-1 text-white"><i class="far fa-edit"></i></span></a>
                                        <?php }
                                         else
                                         {
                                          ?>
                                          <a href="javascript:void(0)" style="visibility: hidden"><span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span></a>
                                          <?php
                                          }
                                         if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                          {?>

                                       <a href="javascript:void(0)" class="deletehourlyrate" hourlyrate_id="<?=$data->hourly_rate_id?>"><span class=" sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>
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

                                </td>
                            </tr>
                            <?php
                            $count++;
                          }
                            ?>
                        </tbody>
                        <tfoot>
                             <tr>
                                <th>#</th>
                                <th>Hourly Rate</th>
                                <th>Hourly Grade</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
                  <div class="tab-pane fade px-4" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                    <div class="row">
                       <div class="col-md-8 offset-md-1 mt-3">
                     <div class="">
                       
                          <form id="add_hourly">
                            <div class="form-group  row mt-2">
                                 <label class="col-md-3 text-right">Hourly Grade<sup class="text-danger">*</sup></label>
                               <div class="col-md-9">
                                 <input type="hidden" name="company_id" value="<?=$this->session->userdata('logged_user')[0]->company_id?>">
                                    <input type="text" required="" class="form-control" name="hourly_grade" placeholder="Enter Hourly Grade">
                               </div>

                            </div>
                            <div class="form-group  row">
                             <label class="col-md-3 text-right">Hourly Rate<sup class="text-danger">*</sup></label>
                               <div class="col-md-9">
                                   <input type="number" required="" name="hourly_rate" class=" form-control"placeholder="Enter Hourly Rate" >
                               </div>

                            </div>
                          <div class="text-center ">
                            <button type="submit" class="btn btn-primary pull-right">Save</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
<script type="text/javascript">
        $(document).on('submit','#add_hourly',function(e){
        e.preventDefault();
        var formData= new FormData($(this)[0]);
        $.ajax({
            url:"<?=base_url()?>Payroll/set_hourly_template",
             type:"post",
             data:formData,
             contentType:false,
             processData:false,
             cache:false,
            success:function(response)
            {
              if(response==1){
                location.reload();
              }
              else{
                swal('OOPS', "Something went wrong", "error");
              }
              // var response=JSON.parse(response);
              // if(response.status==1){
              //   //$("#profile-just").load(location.href + " #profile-just");
              //   swal("Client Added Successfully", "Success", "success");
              // }
              // else if(response.status=="0"){
              //   swal('Client Already Exists', "Client Already Exists", "error");
              // }
            }
        });
       }) 
</script>
                  <!-- <div class="tab-pane fade show px-4" id="imp_project" role="tabpanel" aria-labelledby="import_project">
                    <div class="row">
                     
                        <div class="col-md-12 card p-4">
                          <div class="col-md-5 offset-md-1 mt-3">
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
                                     <select class="form-control">
                                      <option value="" selected="">select</option>
                                      <option value="">A</option>
                                      <option value="">A</option>
                                      <option value="">A</option>
                                     </select>            
                                  </div>
                              </div>
                                <div class="form-group row">
                                  <label for="staticEmail" class="text-right col-sm-3 col-form-label font-weight-bold">  Assigned to <sup class="a1">*</sup></label>
                                  <div class="col-sm-8">
                                     <input type="radio" name="everyone" value="everyone" checked=""> Everyone  <i class="fa fa-question-circle" aria-hidden="true"></i><br>
                                    <input type="radio" name="everyone" value="everyone">  customize permision  <i class="fa fa-question-circle" aria-hidden="true"></i>
                                  </div>
                                </div>
                                <div class="" style="padding-left: 26%">
                                  <button type="submit" class="btn btn-primary">upload</button>
                              </div>  
                            </form>   
                          </div>
                        </div>
                      </div>
              

                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
            <script type="text/javascript">
        $(document).ready(function(){
          $('.deletehourlyrate').on('click',function(){ 
             var hourly_id=$(this).attr("hourlyrate_id");
              alert(hourly_id);
           if(confirm("Are you Sure want to delete this record?") ==true)
            {       
            // alert(owner_id);         
                $.ajax({
                  url:"<?=base_url('Payroll/DeleteHourly')?>",
                  type:"post",
                  data:{hourly_id:hourly_id},
                  success:function(response)
                  {   
                  response=JSON.parse(response);             
                     if (response==1)
                      {
                   alert('Record Delete successfully');
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
