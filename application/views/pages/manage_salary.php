
          <div class="row mt-4">
           <div class="col-lg-12">
              <div class="card">
<style type="text/css">
.chkbox_ht{
  height: 23px;
  width: 23px;
}
.select2-container .select2-selection--multiple, .select2-container .select2-selection--single{
      min-height: 35px;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
color: #444;
min-height: 35px;
line-height: 35px !important;
}
.select2-container--default .select2-selection--single .select2-selection__arrow{
min-height: 35px
}
              </style>
                  <div class=" p-4" >
                      <div class="row">
                        <div class="col-md-4 text-right pt-2">Select Department<sup class="text-danger">*</sup></div>
                        <div class="col-md-4">
                          <select  name="imptask_status" class="form-control " id="imptask_status" style="width: 100%" required="">
                            <option value="" selected="">Select Department</option>
                            <?php
                            foreach ($departments as $dept) {
                            ?>
                            <option value="<?=$dept->departments_id?>"><?=$dept->deptname?></option>
                            <?php
                          }
                            ?>
                          </select> 
                        </div>
                        <div class="col-md-2"><button class="btn btn-info search">Go</button></div>
                      </div>
                    <div class="mt-5">
                     <table id="example" class="display nowrap " style="width:100%">
                          <thead>
                              <tr>
                                  <th>Employee Name</th>
                                  <th>Designation</th>
                                  <th>Hourly </th>
                                  <th>Monthly</th>
                                
                              </tr>
                          </thead>
                          <tbody id="user_data">
<!--                               <tr>
                                  <td>Tiger Nixon</td>
                                  <td>2011/04/25</td>
                                  <td>
                                    <div class="d-flex">
                                        <div ><input type="checkbox" name="" class="chkbox_ht mt-2"></div>
                                      <select  name="imptask_status" class="form-control hourly_status" style="width: 60%;margin-top: -15px;" required="">
                                        <option value="" selected="">Select Hourly Grade</option>
                                        <option value="">IT / Collaborative</option>
                                        <option value="">HR</option>
                                        <option value="">IT</option>
                                      </select> 
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex">
                                      <div ><input type="checkbox" name="" class="chkbox_ht mt-2"></div>
                                      <select  name="imptask_status" class="form-control monthly_status" style="width: 60%" required="">
                                        <option value="" selected="">Select Monthly Grade</option>
                                        <option value="">IT / Collaborative</option>
                                        <option value="">HR</option>
                                        <option value="">IT</option>
                                      </select> 
                                    </div>
                                  </td>
                              </tr> -->
                          </tbody>
                          <tfoot>
                                <tr>
                                  <th>Employee Name</th>
                                  <th>Designation</th>
                                  <th>Hourly </th>
                                  <th>Monthly</th>
                                
                              </tr>
                          </tfoot>
                      </table>
                    </div>
                  </div>
                  
              </div>
            </div>
          </div>
    
        </section>
      </div>
<script>
     $(document).ready(function() {
          $(".hourly_status").select2();
          $("#imptask_status").select2();
          $(".monthly_status").select2();
      });

     $(document).on('click','.search',function(){
         var dept_id=$("#imptask_status option:selected").val();
         var url="<?=base_url()?>Payroll/manageSalary/"+dept_id;
         window.location.href=url;
     })
</script>
