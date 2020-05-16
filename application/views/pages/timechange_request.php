
        
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card p-2">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>All Time Change Request</strong></span> 
                   </div>
                    <div class="col-md-6 text-right"><button class="btn btn-success rounded-0" data-toggle="modal" data-target="#timeManualy"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div>
                </div>
              <div class="p-2">
              <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                               <th>EMP ID</th>
                                <th>Name</th>
                                <th>Date In</th>
                                <th>Time In</th>
                                <th>Date Out</th>
                                <th>Time Out</th>
                                <th>Status</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        <tbody>

                          <?php
                          // print_r($EmpAttendanceDetail);
                            foreach ($EmpAttendanceDetail as $key => $value) {
                              # code...
                              ?>
                                <tr>
                                  <td><?=$value->user_id?></td>
                                  <td><?=$value->fullname?></td>
                                    <td><?=$value->date_in?></td>
                                    <td><?=$value->clockin_time?></td>
                                     <td><?=$value->date_out?></td>
                                    <td><?=$value->clockout_time?></td>
                                    <td>
                                      <?php
                                        if($value->attendance_status==1){
                                          echo 'Present';
                                        }else if($value->attendance_status==0){
                                          echo 'Absent';
                                        }else{
                                          echo 'On Leave';
                                        }
                                      ?>
                                    </td>
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
                                              <!-- <a href="" id="edit_p"class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a> -->

                                         <?php }
                                         else
                                         {
                                          ?>
                                            <!-- <a href="javascript:void(0)" id="edit_p"class="sele_staus bg-info p-1 text-white " style="visibility: hidden"><span><i class="far fa-edit"></i></span></a> -->

                                         <?php
                                          }
                                         if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                          {?>
                                              <a href="javascript:void(0)" class="sele_staus  delete_time_change p-1 text-white " d-id="<?=$value->clock_id?>">  <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>

                                         <?php }
                                         else
                                         {
                                          ?>
                                            <a href="" class="sele_staus  p-1 text-white " style="visibility: hidden">  <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>

                                         <?php
                                          }

                                        }
                                      }
                                      ?>
                                        </div>

                                    </td>
                                   
                                  
                                </tr>
                              <?php
                            }

                          ?>
                            
                            
                          
                              
                        </tbody>
                        <tfoot>
                          <tr>
                               <th>EMP ID</th>
                                <th>Name</th>
                                <th>Time In</th>
                                <th>Time Out</th>
                                <th>Status</th>
                                <th>Action</th>
                               
                            </tr>
                        </tfoot>
                    </table>
              </div>
            </div>
          </div>
          </div>
    
        </section>
      </div>

<!-- Modal -->
<div id="timeManualy" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header">
            <h5 class="modal-title" >Add Time Manually</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
      <div class="modal-body">
        <div>
          <script type="text/javascript">
            $(document).on('submit','#markUserAttendance', function(e){
              e.preventDefault();
              var formData = new FormData($(this)[0]);
              $.ajax({
                url:"<?=base_url('Attendance/markAttendanceManually')?>",
                type:"post",
                cache:false,
                contentType:false,
                processData:false,
                data:formData,
                success:function(response){
                  console.log(response);
                  response=JSON.parse(response);
                  if(response.code==1){
                    swal("Attendance Marked Successfully!", "Marked", "success");
                    location.reload();
                  }else{
                    swal("Ooops!", "Failed", "error");
                  }
                }
              });
            });
          </script>
          <form  id="markUserAttendance">
             <div class="form-group pt-2">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1" class="pt-2">Employee<sup class="text-danger">*</sup></label>
                  </div>
                  <div class="col-sm-7">
                      <div class="input-group">
                          <select name="empl_id" class="form-control" id="emply">
                            <option selected="" disabled="" value="0">Select Employee</option>
                                    <?php
                                      foreach($Employee as $empD){
                                        // /print_r($empD);
                                        ?>
                                           <option value="<?=$empD->user_id?>"><?=$empD->fullname?> (<?=$empD->designations ?>) </option>   
                                        <?php
                                      }
                                    ?>
                          </select>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group pt-2">
                      <div class="row">
                        <div class="col-sm-4 text-right">
                          <label for="exampleInputEmail1" class="pt-2">Date In<sup class="text-danger">*</sup></label>
                        </div>
                        <div class="col-sm-8">
                          <div class='input-group date datetimepicker1' id='datetimepicker1'>
                              <input type='text' class="form-control" name="date_In" />
                              <span class="input-group-addon">
                                  <span ><i class="fa fa-calendar"></i></span>
                              </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group pt-2">
                      <div class="row">
                        <div class="col-sm-4 text-right">
                          <label for="exampleInputEmail1" class="pt-2">Date Out<sup class="text-danger">*</sup></label>
                        </div>
                        <div class="col-sm-8">
                          <div class='input-group date datetimepicker1' id='datetimepicker1'>
                              <input type='text' class="form-control" name="date_Out" />
                              <span class="input-group-addon">
                                  <span ><i class="fa fa-calendar"></i></span>
                              </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group pt-2">
                      <div class="row">
                        <div class=" col-sm-4 text-right">
                          <label for="exampleInputEmail1" class="pt-2">Clock In<sup class="text-danger">*</sup></label>
                        </div>
                        <div class="col-sm-8">
                          <div class='input-group date datetimepicker3' id='datetimepicker3'>
                              <input type='text' class="form-control" name="clock_In"/>
                              <span class="input-group-addon">
                                  <span ><i class="fa fa-calendar"></i></span>
                              </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group pt-2">
                      <div class="row">
                        <div class=" col-sm-4 text-right">
                          <label for="exampleInputEmail1" class="pt-2">Clock Out<sup class="text-danger">*</sup></label>
                        </div>
                        <div class="col-sm-8">
                          <div class='input-group date datetimepicker3' id='datetimepicker3'>
                              <input type='text' class="form-control" name="clock_Out"/>
                              <span class="input-group-addon">
                                  <span ><i class="fa fa-calendar"></i></span>
                              </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-success" >Update</button>
              </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
  $(document).on('click','.delete_time_change',function(){
    var clock_id=$(this).attr('d-id');
    $.ajax({
      url:'<?=base_url('Attendance/delete_clock')?>',
      type:"post",
      data:{clock_id:clock_id},
      success:function(response){
        response=JSON.parse(response);
        swal("Action",response.msg,'info');
        $(this).parent().parent().remove();
        $('#example').load(document.URL +  ' #example');  
      }
    });
  });
   $(function () {
      $('.datetimepicker1').datetimepicker();
   });
      $(function () {
                $('.datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
</script>