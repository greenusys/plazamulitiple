
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
                            <?php
                            foreach ($department as $dep) {
                            ?>
                              <tr>
                                  <td><?=$dep->fullname?></td>
                                  <td><?=$dep->designations?></td>
                                  <td>
                                    <div class="d-flex">
                                        <div ><input type="checkbox" <?php if($dep->hourly_rate_id!=null)echo "checked";?> name="hourly[]" class="chkbox_ht mt-2"></div>
                                      <select  name="imptask_status" class="form-control hourly_status" style="width: 60%;" required="">
                                        <option value="">--Select Hourly Grade--</option>
                                        <?php
                                        foreach ($hourly_grade as $hourly) {
                                             $isSelected =""; //added this line
                                             if($dep->hourly_rate_id == $hourly->hourly_rate_id){
                                               $isSelected = "selected";
                                             }
                                        ?>
                                        <option value="<?=$hourly->hourly_rate_id?>" <?=$isSelected?>><?=$hourly->hourly_grade?></option>
<!--                                         <option value="<?=$hourly->hourly_rate_id?>"><?=$hourly->hourly_grade?></option> -->
                                        <?php
                                        }
                                        ?>
                                      </select> 
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex">
                                      <div ><input type="checkbox" <?php if($dep->salary_template_id!=null)echo "checked";?> name="monthly[]" class="chkbox_ht mt-2"></div>
                                      <select  name="imptask_status" class="form-control monthly_status" style="width: 60%" required="">
                                        <option value="">--Select Monthly Grade--</option>
                                        <?php
                                        foreach ($monthly_grade as $monthly) {
                                             $isSelected =""; //added this line
                                             if($monthly->salary_template_id == $dep->salary_template_id){
                                               $isSelected = "selected";
                                             }
                                        ?>
                                        <option value="<?=$monthly->salary_template_id?>" <?=$isSelected?>><?=$monthly->salary_grade?></option>
                                        <?php
                                        }
                                        ?>
                                      </select> 
                                    </div>
                                  </td>
                              </tr>
                              <?php
                              }
                              ?>
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
<script type="text/javascript">
$( document ).ready(function() {
    $('input[type="checkbox"]').on('change', function() {
      var checkedValue = $(this).prop('checked');
        // uncheck sibling checkboxes (checkboxes on the same row)
        $(this).closest('tr').find('input[type="checkbox"]').each(function(){
           $(this).prop('checked',false);
        });
        $(this).prop("checked",checkedValue);

    });
}); 

     $(document).on('click','.search',function(){
         var dept_id=$("#imptask_status option:selected").val();
         var url="<?=base_url()?>Payroll/manageSalary/"+dept_id;
         window.location.href=url;
     }) 
</script>