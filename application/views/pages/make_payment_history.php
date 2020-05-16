
      <!-- Main Content -->
     <!--  <div class="main-content">
        <section class="section">
     
              <div class="row">
                    <div class="col-md-6 bg-white">
                      <h4 class=" p-2">Make Payment</h4>
                    </div>
                  <div class="col-md-6 bg-white text-right ">
                    <div class="p-2">date
                <button class="btn btn-danger d-none check_btn"><i class="fas fa-sign-out-alt"></i> Checkout</button>
                     <button class="btn btn-success check_btn "><i class="fas fa-sign-in-alt"></i> Checkin</button>
                   </div>
                  </div>
              </div>
              -->
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
  label{
    width:100%;
  }
  .style {
    width: 790px;
    margin: 0px auto;
}
@media only screen and (min-width: 576px){
  .modal-dialog {
      max-width: 790px;
      margin: 1.75rem auto;
  }
}
</style>
          <div class="row mt-4">
           <div class="col-lg-12">
              <div class="card">
          
     <!--            <ul class="nav nav-tabs nav-justified md-tabs indigo col-md-5" id="myTabJust" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
                      aria-selected="true">Manage Account</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                      aria-selected="false">New Account</a>
                  </li>
                  
  
                </ul> -->
             <!--    <div class="tab-content card pt-5" id="myTabContentJust"> -->
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>Make Payment</strong></span> 
                   </div>
                    <!-- <div class="col-md-6 text-right"><button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div> -->
                </div>

                  <div class=" p-4" >
                   
                    <form method="">
                      <div class="row">
                        <div class="col-md-4 text-right pt-1">
                          <label class="form-group">Select Department<sup class="text-danger">*</sup></label>
                          <br>
                          <br>
                          <label>Select Month<sup class="text-danger">*</sup></label>

                        </div>
                        <div class="col-md-4">
                          <div class="form-group"> 
                            <select  name="imptask_status" class="form-control " id="imptask_status" style="width: 100%" required="">
                              <option value="" selected="">Select Department</option>
                                <?php if (!empty($all_department_info)): foreach ($all_department_info as $v_department_info) :
                                    if (!empty($v_department_info->deptname)) {
                                        $deptname = $v_department_info->deptname;
                                    } else {
                                        $deptname = 'undefined_department';
                                    }
                                    ?>
                                    <option value="<?php echo $v_department_info->departments_id; ?>"
                                        <?php
                                        if (!empty($departments_id)) {
                                            echo $v_department_info->departments_id == $departments_id ? 'selected' : '';
                                        }
                                        ?>><?php echo $deptname ?></option>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </select> 
                          </div>
                            <div class='input-group date form-group' id='datetimepicker10'>
                                <input required type="text" value="<?php
                                if (!empty($payment_month)) {
                                    echo $payment_month;
                                }
                                ?>" class="form-control monthyear" name="payment_month" data-format="yyyy/mm/dd">
                                <span class="input-group-addon">
                                  <span ><i class="fa fa-calendar"></i></span>
                              </span>
                            </div>
                           <div class=""><button class="btn btn-info w-100 ">Go</button></div>
                        </div>
                       
                      </div>
                  
                    </form>
                  </div>
                </div>
              </div>
            </div>
                  <script type="text/javascript">
                      $(function () {
                          $('#datetimepicker10').datetimepicker({
                              viewMode: 'years',
                              format: 'MM/YYYY'
                          });
                      });

                      $('.printMe').click(function(){
                          $("#outprint").print();
                      });
                  </script>
         <?php
        if (!empty($payment_flag))
        if (!empty($advance_salary)) {
            $advance_amount = $advance_salary['advance_amount'];
        } else {
            $advance_amount = 0;
        }
        if (!empty($total_hours)) {
            $total_hour = $total_hours['total_hours'];
            $total_minutes = $total_hours['total_minutes'];
            if ($total_hour > 0) {
                $hours_ammount = $total_hour * $employee_info->hourly_rate;
            } else {
                $hours_ammount = 0;
            }
            if ($total_minutes > 0) {
                $amount = round($employee_info->hourly_rate / 60, 2);
                $minutes_ammount = $total_minutes * $amount;
            } else {
                $minutes_ammount = 0;
            }
            $total_hours_amount = $hours_ammount + $minutes_ammount;
        }
        if (!empty($employee_info->basic_salary)) {
            if (empty($deduction_info)) {
                $deduction_info = 0;
            } else {
                $deduction_info = $deduction_info;
            }
            if (empty($allowance_info)) {
                $allowance_info = 0;
            } else {
                $allowance_info = $allowance_info;
            }
            if (!empty($overtime_info)) {
                $total_hour = $overtime_info['overtime_hours'];
                $total_minutes = $overtime_info['overtime_minutes'];
                if ($total_hour > 0) {
                    $hours_ammount = $total_hour * $employee_info->overtime_salary;
                } else {
                    $hours_ammount = 0;
                }
                if ($total_minutes > 0) {
                    $amount = round($employee_info->overtime_salary / 60, 2);
                    $minutes_ammount = $total_minutes * $amount;
                } else {
                    $minutes_ammount = 0;
                }
                $total_amount = $hours_ammount + $minutes_ammount + $allowance_info;
            }
        }
        if (empty($total_advance)) {
            $total_advance = 0;
        }
        if (empty($deduction_info)) {
            $deduction_info = 0;
        }
        if (empty($total_award)) {
            $total_award = 0;
        }
        if (empty($total_allowance)) {
            $total_allowance = 0;
        }
        if (empty($total_amount)) {
            $total_amount = 0;
        }
        if (empty($v_employee->basic_salary)) {
            $basic_salary = 0;
        } else {
            $basic_salary = $v_employee->basic_salary;
        }
        ?>
              <div class="row mt-4">
                <div class="col-md-3">
                   <div class="card">
                     <div class="card-header border-bottom py-1">
                        <div class="col-md-12">
                          <span><strong>Payment For Month Year<?php
                                        if (!empty($payment_month)) {
                                            echo ' <span class="text-danger">' . date('F Y', strtotime($payment_month)) . '</span>';
                                        }
                                        ?></strong></span> 
                         </div>
                          <!-- <div class="col-md-6 text-right bg-red text-white"><i class="fas fa-print"></i></div> -->
                      </div>
                      <div class="p-3">
                        <form method="POST" action="<?=base_url()?>Payroll/get_payment">
                           
                              <label> Gross Salary
                                <input type="text" name="house_rent_allowance" disabled value="<?php

                                if (!empty($total_hours_amount)) {
                                    echo $gross = round($total_hours_amount, 2);
                                    $deduction_info = 0;
                                } else {
                                    echo $gross = $employee_info->basic_salary + $total_amount;
                                }
                                ?>" class="salary form-control">
                              </label>
                           
                              <label > Total Deduction
                                <input type="text" name="" disabled value="<?php
                                echo $deduction = $deduction_info + $advance_amount;
                                ?>" class="salary form-control">
                              </label>
                      
                              <label> Net Salary
                                <input type="text" id="net_salary" name="other_allowance" disabled value="<?php
                                echo $net_salary = $gross - $deduction;
                                ?>" class="salary form-control">
                              </label>
                                                          <?php
                            $total_award = 0;
                            if (!empty($award_info)): foreach ($award_info as $v_award_info) :
                                ?>
                                <?php if (!empty($v_award_info->award_amount)): ?>
                                <div class="">
                                    <label class="control-label"><?= lang('award') ?>
                                        <small>( <?php echo $v_award_info->award_name; ?> )</small>
                                    </label>
                                    <input type="text" name="other_allowance" disabled id="award"
                                           value="<?php echo $v_award_info->award_amount; ?>"
                                           class="award form-control">
                                    <input type="hidden" name="award_name[]" id="award"
                                           value="<?php echo $total_award += $v_award_info->award_amount; ?>"
                                           class="form-control">
                                </div>
                            <?php endif; ?>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            <input type="hidden" name="total_award" id="total_award" value="" class="form-control">
                                <label> Fine Deduction
                                <input type="text" data-parsley-type="number" name="fine_deduction" id="fine_deduction"
                                       value="<?php
                                       if (!empty($check_salary_payment->fine_deduction)) {
                                           echo $check_salary_payment->fine_deduction;
                                       }
                                       ?>" class="form-control">
                              </label>
                              <label> Payment Amount
                                <input type="text" disabled=""
                                       value="<?php echo $net_salary + $total_award; ?>"
                                       class="payment_amount form-control">
                              </label>  
                          <input type="hidden" name="payment_amount"
                                   value="<?php echo $net_salary + $total_award; ?>"
                                   class="payment_amount form-control">
                            <!-- Hidden Employee Id -->
                            <input type="hidden" id="user_id" name="user_id"
                                   value="<?php echo $employee_info->user_id; ?>" class="salary form-control">
                            <input type="hidden" name="payment_month" value="<?php
                            if (!empty($payment_month)) {
                                echo $payment_month;
                            }
                            ?>" class="salary form-control">
                              <label>Payment Method <sub class="text-danger">*</sub></label>
                              <select class="form-control" name="payment_type">
                                <option selected="" disabled="">Select Payment Method</option>
                                    <?php
                                    $all_payment_method = $this->db->get('tbl_payment_methods')->result();
                                    if (!empty($all_payment_method)) {
                                        foreach ($all_payment_method as $v_payment_method) {
                                            ?>
                                            <option<?php
                                            if (!empty($check_salary_payment->payment_type)) {
                                                echo $check_salary_payment->payment_type == $v_payment_method->payment_methods_id ? 'selected' : '';
                                            }
                                            ?> value="<?= $v_payment_method->payment_methods_id; ?>"><?= $v_payment_method->method_name; ?></option>
                                        <?php }
                                    } ?>
                              </select>
                               <label> Comments 
                                <input type="text" name="comments" value="<?php
                                if (!empty($check_salary_payment->comments)) {
                                    echo $check_salary_payment->comments;
                                }
                                ?>" class=" form-control">
                              </label>
                              <div class="d-flex"> 
                               <label class="float-left"> Deduct From Account <i class="fas fa-question-circle" title="This ammount will be deduct from your account. This account information only admin can see it."></i></label>
                                  <input class=" float-right" type="checkbox" id="sclt_acnts" checked="" name="deduct_from_account" style="width: 20px; height: 20px;">
                              </div>
                              <div class="acounts_sh">
                                <label>Select Accounts</label>
                                <select  name="account_id" class="form-control " id="select_accounts" style="width: 100%" required="">
                                  <option value="" selected="">Select Accounts</option>
                                                                          <?php
                                        $account_info = $this->db->order_by('account_id', 'DESC')->get('tbl_accounts')->result();
                                        if (!empty($account_info)) {
                                            foreach ($account_info as $v_account) : ?>
                                                <option
                                                    value="<?= $v_account->account_id ?>"<?= (config_item('default_account') == $v_account->account_id ? ' selected="selected"' : '') ?>><?= $v_account->account_name ?></option>
                                            <?php endforeach;
                                        }
                                        ?>
                                </select> 
                              </div>
                              <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" data-toggle="tooltip"><i class="fas fa-plus"></i>Add New</a>
                              <br>
                              <button class="btn-info btn">Update</button>
                        </form>
                      </div>
                   </div>
                </div>
                <script type="text/javascript">
                  $(document).on("click","#sclt_acnts",function(){
                    if ($(this).is(":checked"))
                      {
                        $(".acounts_sh").show();  
                        // it is checked
                      }else{
                        $(".acounts_sh").hide();
                      }
                  })
                </script>
                <div class="col-lg-9">
                  <div class="card">        
                      <div class="">
                        <div class="card-header border-bottom py-1">
                          <div class="col-md-6">
                            <span><strong>Payment History</strong></span> 
                           </div>
                            <div class="col-md-6 text-right bg-red text-white">
                              <span class="bg-danger text-white p-1 rounded"><i class="fas fa-print"></i></span>
                            </div>
                        </div>
                      <div class="p-3">
                         <table id="example" class="display nowrap " style="width:100%">
                              <thead>
                                  <tr>
                                      <th>Month</th>
                                      <th>Date</th>
                                      <th>Gross Salary</th>
                                      <th>Total Deduction</th>
                                      <th>Net Salary</th>
                                      <th>Fine Deduction</th>
                                      <th>Amount</th>
                                      <th>Details</th>
                                  </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                      <td></td>
                                      <td>2011/04/25</td>
                                      <td>Edinburgh</td>
                                      <td>Edinburgh</td>
                                      <td>Tiger Nixon</td>
                                      <td>2011/04/25</td>
                                      <td>Edinburgh</td>
                                      <td>
                                        <span class="bg-info p-1 text-white " data-toggle="modal" data-target="#userDetails" data-toggle="tooltip">
                                          <i class="fas fa-keyboard"></i>  
                                        </span>
                                      </td>
                                  </tr>
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
          $("#select_accounts").select2();
          $("#imptask_status").select2();
          $(".monthly_status").select2();
      });
  </script>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content style">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
        <div class="modal-body">
            <form id="add_account">
               <div class="form-group">
                  <div class="row">
                    <div class="offset-1 col-sm-3">
                      <label for="exampleInputEmail1">Account Name <sup class="text-danger">*</sup> </label>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="account_name" class="form-control" id=""  placeholder="Account Name" required="">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="offset-1 col-sm-3">
                      <label for="exampleInputEmail1">Description <sup class="text-danger">*</sup> </label>
                    </div>
                    <div class="col-sm-6">
                      <textarea class="form-control" name="description" id=""  placeholder="" ></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="offset-1 col-sm-3">
                      <label for="exampleInputEmail1">Initial Balance<sup class="text-danger">*</sup> </label>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="balance" class="form-control" id=""  placeholder="Initial Balance" required="">
                      <input type="hidden" name="permission" value="all">
                    </div>
                  </div>
                </div>
                 <div class="modal-footer border-top-0 modal-butn justify-content-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <span type="button" class="ml-2 btn btn-default">close</span>
                  </div>
            </form>
        </div>
    
      </div>
    </div>
  </div>
  <div class="modal fade" id="userDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content style">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Salary Payment Details</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="line"></div>
        <div class="modal-body">
              <div class="row">
                <div class="col-md-3">
                    <div class="">
                      <img src="" >
                    </div>
                </div>
                <div class="col-md-9">
                  <div class="border-bottom"><h4>Ravish Beg</h4></div>
                  <div class="p-3">
                  <div class="row">
                    <div class="col-md-3">
                      <strong>EMP ID :</strong>
                    </div>
                    <div class="col-md-5">
                      1234
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-3">
                      <strong>Departments :  </strong>
                    </div>
                    <div class="col-md-5">
                      IT / Collaborative
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-3">
                      <strong>Designation  :</strong>
                    </div>
                    <div class="col-md-5">
                      Head Of Collaborative
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-3">
                      <strong>Joining Date :</strong>
                    </div>
                    <div class="col-md-5">
                        12.31.1969
                    </div>
                  </div>
                  </div>
                </div>
              </div>
              <div class="card-header border-bottom mt-4 py-1">
                <div class="col-md-12">
                  <span><strong>Salary Details</strong></span> 
                 </div>
                  <!-- <div class="col-md-6 text-right bg-red text-white"><i class="fas fa-print"></i></div> -->
              </div>
                <div class="p-3">
                  <div class="row">
                    <div class="col-md-6">
                      <strong>Salary Month  :</strong>
                    </div>
                    <div class="col-md-5">
                        February 2020
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <strong>Salary Grades :</strong>
                    </div>
                    <div class="col-md-5">
                        grade b
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <strong>Basic Salary :</strong>
                    </div>
                    <div class="col-md-5">
                       â‚¬ 25.000,00
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <strong>Overtime Salary ( Per Hour) :</strong>
                    </div>
                    <div class="col-md-5">
                        â‚¬ 200,00
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <strong>Overtime Hour :</strong>
                    </div>
                    <div class="col-md-5">
                       0:0
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <strong>Overtime Amount :</strong>
                    </div>
                    <div class="col-md-5">
                        â‚¬ 0,00
                    </div>
                  </div>
                </div>  

             <div class="row mt-4">
                <div class="col-md-6">
                  <div class="card">
                      <div class="card-header border-bottom py-1">
                        <div class="col-md-12">
                          <span><strong>Allowances</strong></span> 
                         </div>
                          <!-- <div class="col-md-6 text-right bg-red text-white"><i class="fas fa-print"></i></div> -->
                      </div>
                      <div class="p-3">
                        <div class="row">
                          <div class="col-md-7">
                            <strong>House Rent Allowance :</strong>
                          </div>
                          <div class="col-md-5">
                            â‚¬ 100,00
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <strong>Medical Allowance :</strong>
                          </div>
                          <div class="col-md-5">
                              â‚¬ 100,00
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                      <div class="card-header border-bottom py-1">
                        <div class="col-md-12">
                          <span><strong>Deductions</strong></span> 
                         </div>
                          <!-- <div class="col-md-6 text-right bg-red text-white"><i class="fas fa-print"></i></div> -->
                      </div>
                      <div class="p-3">
                        <div class="row">
                          <div class="col-md-6">
                            <strong>Provident Fund :</strong>
                          </div>
                          <div class="col-md-6">
                            â‚¬ 100,00
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <strong>Tax Deduction :</strong>
                          </div>
                          <div class="col-md-6">
                              â‚¬ 100,00
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
             </div>   
             <div class="row mt-4">
                <div class="card col-md-6 offset-5">
                  <div class="p-2 bg-info text-white"><h5>Total Salary Details</h5></div>
                    <div class="">
                        <div class="row">
                          <div class="col-md-6">
                            <strong>Gross Salary :</strong>
                          </div>
                          <div class="col-md-6">
                             â‚¬ 25.200,00
                          </div>
                        </div>
                         <div class="row">
                          <div class="col-md-6">
                            <strong>Total Deduction :</strong>
                          </div>
                          <div class="col-md-6">
                              â‚¬ 200,00
                          </div>
                        </div>
                         <div class="row">
                          <div class="col-md-6">
                            <strong>Net Salary :</strong>
                          </div>
                          <div class="col-md-6">
                              â‚¬ 25000,00
                          </div>
                        </div>
                         <div class="row">
                          <div class="col-md-6">
                            <strong>Paid Amount :</strong>
                          </div>
                          <div class="col-md-6">                             
                              â‚¬ 25.000,00
                          </div>
                        </div>
                  </div>
                </div>
             </div>
        </div>
       <div class="modal-footer border-top-0 modal-butn ">
                  
                    <span type="button" class="ml-2 btn btn-default">close</span>
                  </div>
      </div>
    </div>
  </div>
<script type="text/javascript">
$(document).on('submit','#add_account',function(e){
e.preventDefault();
var formData= new FormData($(this)[0]);
$.ajax({
    url:"<?=base_url()?>Payroll/add_account",
     type:"post",
     data:formData,
     contentType:false,
     processData:false,
     cache:false,
    success:function(response)
    {
      var response=JSON.parse(response);
      if(response.status==1){
        var html='';
        var html='<option selected value='+response.id+'>'+response.name+'</option>';
        $('#select_accounts').append(html);
        swal("Account Added Successfully", "Success", "success");
      }
      else if(response.status=="0"){
        swal('Account Already Exists', "Account Already Exists", "error");
      }
    }
});
})  
</script>