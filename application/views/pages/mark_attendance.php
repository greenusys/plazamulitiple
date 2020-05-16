 <style>
  .w_20{
    width: 20px;
  }
 </style>
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card p-2">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-3">
                    <span><strong>Mark Attendance</strong></span> 
                   </div>
                    <div class="col-md-9 text-right ">
                      <ul class="list-unstyled d-flex m-0 float-right">
                        <li class="d-flex">
                          <input type="checkbox" name="" class="w_20 form-control"> &nbsp;Mark all clock in &nbsp; &nbsp;
                        </li>
                        <li class="d-flex">
                          <input type="checkbox" name="" class="w_20 form-control"> &nbsp; Mark all clock out &nbsp; &nbsp;
                        </li>
                        <li class="d-flex">
                          <input type="checkbox" name="" class="w_20 form-control"> &nbsp; Mark all  &nbsp; &nbsp;
                        </li>
                        <li>
                          <button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Check In</button>
                        </li>
                      </ul>
                    </div>
                </div>
              <div class="p-2">
                <form  method="post ">
                <table id="example" class="display nowrap table" style="width:100%">
                        <thead>
                            <tr>
                                <th>EMP ID</th>
                                <th> Name</th>
                                <th>Clocking Hours</th>
                            </tr>
                        </thead>
                        <tbody>

                          <?php
                            foreach ($Employee as $key => $value) {
                              # code...
                              ?>
                                  <tr>
                                    <td><input type="checkbox" name=" " class="h_22 form-control"></td>
                                      <td><?=$value->fullname?></td>
                                      <td><a class="btn btn-success markAttendanceManually text-white" emp-Id="<?=$value->user_id?>">Check In</a></td>
                                  
                                  </tr>
                              <?php
                            }

                          ?>
                            
                            
                             <!-- <tr>
                              <td><input type="checkbox" name=" " class="h_22 form-control"></td>
                                <td>Tiger Nixon</td>
                                <td><button class="btn btn-success">Check In</td>
                            
                            </tr>
                             <tr>
                              <td><input type="checkbox" name=" " class="h_22 form-control"></td>
                                <td>Tiger Nixon</td>
                                <td><button class="btn btn-success">Check In</td>
                            
                            </tr> -->
                        </tbody>
                        <tfoot>
                             <tr>
                                <th>EMP ID</th>
                                <th> Name</th>
                                <th>Clocking Hours</th>
                             </tr>
                        </tfoot>
                    </table>
                </form>
              </div>
            </div>
          </div>
          </div>
    
        </section>
      </div>
  <script>
    $(document).on('click','.markAttendanceManually',function(){
      var empId=$(this).attr('emp-Id');
      console.log('Employee Id: '+empId);
      $.ajax({
        url:"<?=base_url('Attendance/markAttendanceParticullary')?>",
        type:"post",
        data:{empId: empId},
        success:function(response){
                  console.log(response);
                }
      });
    });

                            
     $(document).ready(function() {
        $("#emply").select2();
      });
  </script>
  <script type="text/javascript">
   $(function () {
      $('.datetimepicker1').datetimepicker();
   });
 </script>