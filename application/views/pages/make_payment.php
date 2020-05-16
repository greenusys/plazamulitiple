          <div class="row mt-4">
           <div class="col-lg-12">
              <div class="card">
              <style type="text/css">
                .label-danger {
                    background-color: red;
                }
                .label-success {
                    background-color: #27c24c;
                }
                .label {
                    display: inline;
                    padding: .2em .6em .3em;
                    font-size: 75%;
                    color: #fff;
                }
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
                    <form method="POST" action="<?=base_url()?>Payroll/makePayment">
                      <div class="row">
                        <div class="col-md-4 text-right pt-1">
                          <label class="form-group">Select Department<sup class="text-danger">*</sup></label>
                          <br>
                          <br>
                          <label>Select Month<sup class="text-danger">*</sup></label>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group"> 
                            <select  name="dept_id" class="form-control " id="imptask_status" style="width: 100%" required="">
                              <option value="">Select Department</option>
                              <?php
                              foreach ($departments as $dept) {
                              ?>
                              <option value="<?=$dept->departments_id?>"><?=$dept->deptname?></option>
                              <?php
                              }
                              ?>
                            </select> 
                          </div>
                          <div class='input-group date form-group' id='datetimepicker10'>
                              <input type='text' name="sal_date" class="form-control" />
                                <span class="input-group-addon">
                                  <span ><i class="fa fa-calendar"></i></span>
                              </span>
                           </div>
                           <div class=""><button class="btn btn-info w-100 ">Go</button></div>
                        </div>
                       
                      </div>
                  
                    </form>
                      <script type="text/javascript">
                          $(function () {
                              $('#datetimepicker10').datetimepicker({
                                  viewMode: 'years',
                                  format: 'YYYY-MM'
                              });
                          });
                      </script>
                    <div class="mt-5">
                        <div class="card-header row border-bottom py-1">
                          <div class="col-md-6">
                            <span><strong>Payment Info for month year</strong></span> 
                           </div>
                            <!-- <div class="col-md-6 text-right"><button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div> -->
                        </div>
                      <div class="pt-3">
                         <table id="example" class="display nowrap " style="width:100%">
                              <thead>
                                  <tr>
                                      <th>EMP ID</th>
                                      <th>Name</th>
                                      <th>Salary Type </th>
                                      <th>Basic Salary</th>
                                      <th>Net Salary</th>
                                      <th>Details</th>
                                      <th> Status </th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>

                                <?php
                               // print_r($table_data);
                                foreach ($table_data as $main_data) {
                                ?>
                                    <tr>
                                      <td><?=$main_data->employment_id?></td>
                                      <td><?=$main_data->fullname?></td>
                                      <td><?php
                                      if($main_data->salary_grade==""){
                                        echo "Salary Not Set Yet";
                                      }
                                      else{
                                        echo $main_data->salary_grade;
                                      }
                                      ?></td>
                                      <td><?=$main_data->basic_salary?></td>
                                      <td><?=$main_data->basic_salary?></td>
                                      <td><?=$main_data->fullname?></td>
                                      <td>
                                        <?php
                                        if($main_data->salary_grade!=""){
                                          if($main_data->salary_paid=="true"){
                                            echo "<span class='label label-success'>Paid</span>";
                                          }
                                          else{
                                            echo "<span class='label label-danger'>Unpaid</span>";
                                          }
                                        }
                                        ?>
                                        </td>
                                      <td><?php
                                      if ($main_data->salary_paid=="true") { ?>
                                          <a class="text-success" href='<?=base_url()?>Payroll/payslip/<?=$main_data->salary_payment_id[0]->salary_payment_id?>'>Generate Payslip</a>
                                    <?php  }
                                      elseif ($main_data->salary_grade!="") {?>
                                        <a href='<?=base_url()?>Payroll/makePayment/<?=$main_data->user?>/<?=$main_data->search_date?>/<?=$main_data->departments_id?>'>Make Payment</a>
                                      <?php }
                                      else{
                                        echo "Set Salary";
                                      }
                                      ?></td>
                                  </tr>
                                  <?php
                                  }
                                  ?>
                              </tbody>
                              <tfoot>
                                  <tr>
                                      <th>EMP ID</th>
                                      <th>Name</th>
                                      <th>Salary Type </th>
                                      <th>Basic Salary</th>
                                      <th>Net Salary</th>
                                      <th>Details</th>
                                      <th>  Status </th>
                                      <th>Action</th>
                                  </tr>
                              </tfoot>
                          </table>
                        </div>
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
  </script>