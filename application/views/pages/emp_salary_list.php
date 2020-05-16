 
      <!-- Main Content -->
      <!-- <div class="main-content">
        <section class="section">
     
              <div class="row">
                    <div class="col-md-6 bg-white">
                      <h4 class=" p-2">Employee Salary List</h4>
                    </div>
                  <div class="col-md-6 bg-white text-right ">
                    <div class="p-2">date
                <button class="btn btn-danger d-none check_btn"><i class="fas fa-sign-out-alt"></i> Checkout</button>
                     <button class="btn btn-success check_btn "><i class="fas fa-sign-in-alt"></i> Checkin</button>
                   </div>
                  </div>
              </div>
              -->
        
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card p-2">

              <div class="p-2">
              <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                               <th>EMP ID</th>
                                <th>Name</th>
                                <th>Salary Type</th>
                                <th>Basic Salary</th>
                                <th>Overtime(Per Hour)</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                          <?php

                          foreach ($employee as $emp_data) {
                          ?>
                            <tr>
                              <td><?=$emp_data->employment_id?></td>
                              <td><a href="<?=base_url()?>/User/userDetails/<?=$emp_data->user_id?>"><?=$emp_data->fullname?></a></td>
                                <td>
                                  <?php
                                  if ($emp_data->salary_template_id!=null) {
                                    echo $emp_data->salary_grade." (Monthly)";
                                  }
                                  else{
                                    echo "(Hourly)";
                                  }
                                  ?>
                                </td>
                                <td><?php
                                if($emp_data->basic_salary!=null){
                                  echo $emp_data->basic_salary;
                                }
                                else{
                                  echo "0,00 (Per Hour)";
                                }
                                ?>
                                  
                                </td>
                                <td><?php
                                if($emp_data->overtime_salary!=null){
                                  echo $emp_data->overtime_salary;
                                }else{
                                  echo "0";
                                }
                                  ?>
                                  </td>
                                <td>
                                    <div class="">
<!--                                       <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a> -->
                                      <?php
                                      foreach($Assign_permission as $checkpermission)
                                        {
                                          $permission=$checkpermission->permission;
                                          foreach ($UsersPermission as $Uperms) 
                                            {
                                             $Userpermi=$Uperms->permission;
                                          if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                          {?>
                                      <span class="sele_staus bg-danger p-1 text-white delete_payroll" payroll_id="<?=$emp_data->payroll_id?>"><i class="far fa-trash-alt"></i></span>
                                      <?php }
                                         else
                                         {
                                          ?>
                                           <span style="visibility: hidden" class="sele_staus bg-danger p-1 text-white delete_payroll" payroll_id="<?=$emp_data->payroll_id?>"><i class="far fa-trash-alt"></i></span>
                                           <?php
                                          }

                                        }
                                      }?>

<!--                                        <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span> -->
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
                                <th>Salary Type</th>
                                <th>Basic Salary</th>
                                <th>Overtime(Per Hour)</th>
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
<script type="text/javascript">
$(document).on('click','.delete_payroll',function(){
  var payroll_id=$(this).attr('payroll_id');
  if(confirm("Are you sure to delete this record?")){
    $.ajax({
      type:'POST',
      data:{
        payroll_id:payroll_id,
      },
      url:'<?=base_url()?>Payroll/delete_payroll',
      success:function(response){
        if(response==1){
          location.reload();
        }
        else{
          alert("Something Went wrong");
        }
      }
    })
  }
})
</script>
