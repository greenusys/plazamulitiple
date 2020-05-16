 
      <!-- Main Content -->
<!--       <div class="main-content">
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
        <style>
          .input_year {
                font-size: 14px;
                padding: 0px 5px !important;
                height: 34px !important;
                
          }
          .input-group{
            margin: 0 auto;
          }
          .mnth_c{
                color: #444;
                display: block;
                padding: 11px 20px;
                /*border-bottom: 1px solid;*/
          }
          .mnth_c:hover{
            background: #6777ef;
            color: white;
            text-decoration: none;
          }
          .card .card-header .btn {
    margin-top: 1px;
    padding: 4px 12px;
}
       /*   h1 {
              margin-left: 15px;
              margin-bottom: 20px;
          }

          @media (min-width: 768px) {

              .brand-pills > li > a {
                  border-top-right-radius: 0px;
                border-bottom-right-radius: 0px;
              }
              
              li.brand-nav.active a:after{
                content: " ";
                display: block;
                width: 0;
                height: 0;
                border-top: 20px solid transparent;
                border-bottom: 20px solid transparent;
                border-left: 9px solid #428bca;
                position: absolute;
                top: 50%;
                margin-top: -20px;
                left: 100%;
                z-index: 2;
              }
          }*/
          .brand-pills .active a{
                background: #6777ef;
               color: white;

          }
          .form-control{
            border-radius: 3px !important;
          }
          .input-group-addon {
    padding: 0px 14px !important;
    background: #edf1f2 !important;
}
.btn-purple:hover {
    color: #ffffff;
    background-color: #7266bad6 !important;
    border-color: rgba(0, 0, 0, 0);
}
.btn-purple {
    color: #ffffff;
    background-color: #7266ba;
    border-color: transparent;
}
        </style>
        <script type="text/javascript">
          $(document).on("click","#advn_salry",function(){
              $(this).hide();
              $("#advn_div").hide();
                 $(".yetr__").hide();
              $("#advn_salry_reprt").show();
              $("#advn_sar_reprt_div").show();
          })
           $(document).on("click","#advn_salry_reprt",function(){
              $(this).hide();
                 $(".yetr__").show();
                 $("#advn_div").show();
               $("#advn_sar_reprt_div").hide();
               $("#advn_salry").show();
          })
        </script>
        <div class="row mt-5">
          <div class="col-md-3">
            <form action="<?php echo base_url() ?>Payroll/advanceSalary">
                 <div class="yetr__">
                    <ul class="list-unstyled d-flex">
                      <li ><strong>Year :</strong></li>
                      <li>
                          <div class='input-group date datetimepicker10 w-75' id='datetimepicker10'>
                              <input type='text' name="year" class="input_year form-control" value="<?php
                                if (!empty($year)) {
                                    echo $year;
                                }
                                ?>" data-format="yyyy" />
                                <span class="input-group-addon">
                                  <span ><i class="fa fa-calendar"></i></span>
                              </span>
                          </div>
                      </li>
                      <li><button class="btn btn-info" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button></li>
                    </ul>
                </div>
              </form>
              </div>
              <div class="col-md-7">
                <div class="mt-3"><a href="#" class="text-danger" data-toggle="modal" data-target="#exampleModal" data-toggle="tooltip" ><i class="fas fa-plus"></i> New Advance Salary</a></div>
              </div>
              <div class="col-md-2">
                <div class="text-right">
                  <button class="btn btn-info" id="advn_salry"><i class="fas fa-undo-alt"></i> Switch</button>
                  <button class="btn btn-purple" style="display:none" id="advn_salry_reprt"><i class="fas fa-undo-alt"></i> Switch</button>
                </div>
              </div>
            </div>
          <div class="row " id="advn_div">
         
              <!-- <div class="card"></div> -->
              <div class="col-md-3">
       

              <div class="card">
                <ul class="list-unstyled">
                  <?php
                    foreach ($advance_salary_info as $key => $v_advance_salary):
                        $month_name = date('F', strtotime($year . '-' . $key)); // get full name of month by date query
                  ?>
                  <li class="<?php
                        if ($current_month == $key) {
                            echo 'active';
                        }
                        ?>">
                    <a aria-expanded="<?php
                            if ($current_month == $key) {
                                echo 'true';
                            } else {
                                echo 'false';
                            }
                            ?>" data-toggle="tab" href="#<?php echo $month_name ?>" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> <?php echo $month_name; ?></strong> </a>
                  </li>
<!--                    <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> February</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> March </strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> April </strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> May</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> June</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> July</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> August</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> September</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> October</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> November </strong> </a> 
                  </li>
                   <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> December</strong> </a>
                  </li> -->
                  <?php endforeach; ?>
                </ul>
              </div>
              </div>
              <div class="col-md-9">
                  <div class="card">
                                    <div class="tab-content pl0">
                    <?php
                    foreach ($advance_salary_info as $key => $v_advance_salary):
                        $month_name = date('F', strtotime($year . '-' . $key)); // get full name of month by date query
                        ?>
                        <div id="<?php echo $month_name ?>" class="tab-pane <?php
                        if ($current_month == $key) {
                            echo 'active';
                        }
                        ?>">
                            <div class="panel panel-custom">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <strong><i class="fa fa-calendar"></i> <?php echo $month_name . ' ' . $year; ?>
                                        </strong>
                                        <div class="pull-right hidden-print">
                                            <span
                                                class="hidden-print"><?php echo btn_pdf('admin/payroll/advance_salary_pdf/' . $year . '/' . $key); ?></span>
                                        </div>
                                    </div>

                                </div>
                                <!-- Table -->
                                <table class="table table-striped table-hover" id="example">
                                    <thead>
                                    <tr>
                                    <th>EMP ID</th>
                                    <th>Name</th>
                                    <th>Amount </th>
                                    <th>Deduct Month</th>
                                    <th>Request Date</th>
                                   
                                    <th>Status </th>
                                    <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $total_amount = 0;
                                    if (!empty($v_advance_salary)): foreach ($v_advance_salary as $advance_salary) : ?>
                                        <tr>
                                            <td><?php echo $advance_salary->employment_id ?></td>
                                            <td><?php echo $advance_salary->fullname ?></td>
                                            <td><?php echo display_money($advance_salary->advance_amount, default_currency());
                                                $total_amount += $advance_salary->advance_amount;
                                                ?></td>
                                            <td><?php echo date('Y M', strtotime($advance_salary->deduct_month)) ?></td>
                                            <td><?= strftime(config_item('date_format'), strtotime($advance_salary->request_date)) ?></td>

                                            <td><?php
                                                if ($advance_salary->status == '0') {
                                                    echo '<span class="label label-warning">Pending</span>';
                                                } elseif ($advance_salary->status == '1') {
                                                    echo '<span class="label label-success">Accepted</span>';
                                                } elseif ($advance_salary->status == '2') {
                                                    echo '<span class="label label-danger">Rejected</span>';
                                                } else {
                                                    echo '<span class="label label-info">Paid</span>';
                                                }
                                                ?></td>
                                                <td>
                                                    <a href="<?= base_url() ?>admin/payroll/advance_salary_details/<?= $advance_salary->advance_salary_id ?>"
                                                       class="btn btn-info btn-xs" title="View"
                                                       data-toggle="modal"
                                                       data-target="#myModal"><span
                                                            class="fa fa-list-alt"></span></a>
                                                </td>

                                        </tr>
                                        <?php
                                        $key++;
                                    endforeach;
                                        ?>
                                        <tr class="total_amount">
                                            <td class="hidden-print"></td>
                                            <td colspan="1" style="text-align: right;">
                                                <strong>Total Advance Salary
                                                    : </strong></td>
                                            <td colspan="3" style="padding-left: 8px;">
                                                <strong><?php echo display_money($total_amount, default_currency()); ?></strong>
                                            </td>
                                        </tr>
                                    <?php else : ?>
                                        <td colspan="6">
                                            <strong>Nothing To Display</strong>
                                        </td>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
<!--                       <div class="card-header row border-bottom py-1">
                        <div class="col-md-6">
                          <span><i class="fas fa-calendar-alt"></i> <strong> Month Name</strong></span> 
                         </div> -->
                          <!-- <div class="col-md-6 text-right"><button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div> -->
<!--                       </div> -->
<!--                       <div class="p-2 pt-3 ">
                       <table id="example" class="display nowrap " style="width:100%">
                            <thead>
                                <tr>
                                    <th>EMP ID</th>
                                    <th>Name</th>
                                    <th>Amount </th>
                                    <th>Deduct Month</th>
                                    <th>Request Date</th>
                                   
                                    <th>Status </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                          
                                  <tr>
                                    <td>Tiger Nixon</td>
                                    <td>2011/04/25</td>
                                    <td>Edinburgh</td>
                                    <td>Edinburgh</td>
                                    <td>Tiger Nixon</td>
                                    <td>2011/04/25</td>
                                    <td>Edinburgh</td>
                             
                                </tr>
                                   <tr>
                                    <td>Tiger Nixon</td>
                                    <td>2011/04/25</td>
                                    <td>Edinburgh</td>
                                    <td>Edinburgh</td>
                                    <td>Tiger Nixon</td>
                                    <td>2011/04/25</td>
                                    <td>Edinburgh</td>
                             
                                </tr>
                                   <tr>
                                    <td>Tiger Nixon</td>
                                    <td>2011/04/25</td>
                                    <td>Edinburgh</td>
                                    <td>Edinburgh</td>
                                    <td>Tiger Nixon</td>
                                    <td>2011/04/25</td>
                                    <td>Edinburgh</td>
                                  
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>EMP ID</th>
                                    <th>Name</th>
                                    <th>Amount </th>
                                    <th>Deduct Month</th>
                                    <th>Request Date</th>
                                    <th>Status </th>
                                    <th>Action</th>

                                </tr>
                            </tfoot>
                        </table>
                      </div> -->
                  </div>
              </div>
            
          </div>
          <div style="display: none" id="advn_sar_reprt_div">
                    <div role="tabpanel" class="row">
            <div class="col-sm-3">
              <div class="card">
                <ul class="list-unstyled nav-pills brand-pills nav-stacked" role="tablist">
                    <li role="presentation" class="brand-nav active"><a href="#tab1"class="mnth_c border-bottom"   aria-controls="tab1" role="tab" data-toggle="tab"><strong>Advance Salary Report</strong></a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab2" class="mnth_c border-bottom"  aria-controls="tab2" role="tab" data-toggle="tab"><strong>Advance Salary</strong></a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab3" class="mnth_c border-bottom"  aria-controls="tab3" role="tab" data-toggle="tab"><strong>All Advance Salary</strong></a></li>
                  <!--   <li role="presentation" class="brand-nav"><a href="#tab4" class="mnth_c border-bottom"  aria-controls="tab4" role="tab" data-toggle="tab">Corporate ipsum</a></li> -->
                </ul>
              </div>
            </div>
            <div class="col-sm-9">
              <div class="card p-3">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                      <div class="card-header row border-bottom py-1">
                        <div class="col-md-8">
                          <span><i class="fas fa-calendar-alt"></i> <strong> Advance Salary Report</strong></span> 
                        </div>

                          <div class="col-md-4 text-right ">
                              <ul class="list-unstyled d-flex">
                                 
                                    <li>
                                      <div class='input-group date form-group datetimepicker10' id='datetimepicker10'>
                                        <strong>Year :</strong> &nbsp;&nbsp;<input type='text' class="form-control" />
                                          <span class="input-group-addon">
                                            <span ><i class="fa fa-calendar"></i></span>
                                        </span>
                                      </div>
                                    </li>
                                  <li> <button class="btn btn-success rounded-0"><i class="fas fa-search"></i></button></li>
                              </ul>

                             <span> </span>   
                           

                          </div>
                      </div>
                        <ul class="list-unstyled ">
                          <li class="border-bottom p-2">All Advance Salary Report</li>
                            <li class="border-bottom p-2">My Report</li>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab2">
                      <div class="p-2 pt-3 ">
                       <table id="example" class="display nowrap " style="width:100%">
                            <thead>
                                <tr>
                                    <th>EMP ID</th>
                                    <th>Name</th>
                                    <th>Amount </th>
                                    <th>Deduct Month</th>
                                    <th>Request Date</th>
                                   
                                    <th>Status </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                          
                                  <tr>
                                    <td>Tiger Nixon</td>
                                    <td>2011/04/25</td>
                                    <td>Edinburgh</td>
                                    <td>Edinburgh</td>
                                    <td>Tiger Nixon</td>
                                    <td>2011/04/25</td>
                                    <td>Edinburgh</td>
                             
                                </tr>
                                   <tr>
                                    <td>Tiger Nixon</td>
                                    <td>2011/04/25</td>
                                    <td>Edinburgh</td>
                                    <td>Edinburgh</td>
                                    <td>Tiger Nixon</td>
                                    <td>2011/04/25</td>
                                    <td>Edinburgh</td>
                             
                                </tr>
                                   <tr>
                                    <td>Tiger Nixon</td>
                                    <td>2011/04/25</td>
                                    <td>Edinburgh</td>
                                    <td>Edinburgh</td>
                                    <td>Tiger Nixon</td>
                                    <td>2011/04/25</td>
                                    <td>Edinburgh</td>
                                  
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>EMP ID</th>
                                    <th>Name</th>
                                    <th>Amount </th>
                                    <th>Deduct Month</th>
                                    <th>Request Date</th>
                                    <th>Status </th>
                                    <th>Action</th>

                                </tr>
                            </tfoot>
                        </table>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab3">
                       <div class="p-2 pt-3 ">
                       <table id="example" class="display nowrap " style="width:100%">
                            <thead>
                                <tr>
                                    <th>EMP ID</th>
                                    <th>Name</th>
                                    <th>Amount </th>
                                    <th>Deduct Month</th>
                                    <th>Request Date</th>
                                   
                                    <th>Status </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                          
                                   <?php
                                   if(isset($All_expense_Data) && !empty($All_expense_Data)){
                                foreach($All_expense_Data as $AED)
                                {
                                    //  print_r($AED);
                                ?>
                                   <tr>
                                    <td>Tiger Nixon</td>
                                    <td>2011/04/25</td>
                                    <td>Edinburgh</td>
                                    <td>Edinburgh</td>
                                    <td>Tiger Nixon</td>
                                    <td>2011/04/25</td>
                                    <td>Edinburgh</td>
                                  
                                </tr>
                                <?php
                                }}?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>EMP ID</th>
                                    <th>Name</th>
                                    <th>Amount </th>
                                    <th>Deduct Month</th>
                                    <th>Request Date</th>
                                    <th>Status </th>
                                    <th>Action</th>

                                </tr>
                            </tfoot>
                        </table>
                      </div>
                    </div>
     <!--                <div role="tabpanel" class="tab-pane" id="tab4">
                        <p>
                            Collaboratively administrate empowered markets via plug-and-play networks. 
                            Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without 
                            revolutionary ROI.
                        </p>
                        <p>
                            Efficiently unleash cross-media information without cross-media value. 
                            Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar 
                            solutions without functional solutions.
                        </p>
                        <p>
                            Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate 
                            one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service 
                            for state of the art customer service.
                        </p>
                    </div> -->
                </div>
              </div>
            </div>
        </div>
          </div>
    
        </section>
      </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content style">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Request Advance Salary</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
        <div class="modal-body">
            <form method="POST" action="<?=base_url()?>Payroll/save_advance_salary">
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Employee <sup class="text-danger">*</sup></label>
                </div>
                <div class="col-sm-6">
                  <input type="hidden" name="company_id" value="<?=$this->session->userdata('logged_user')[0]->company_id?>">
                  <select  name="user_id" class="form-control " id="imptask_status" style="width: 100%" required="">
                    <option value="" selected="">Select Department</option>
                    <?php
                    foreach ($all_employee as $emp=>$val) {
                    ?>
                      <optgroup label="<?=$emp?>">
                        <?php
                        foreach ($val as $value) {
                        ?>
                        <option value="<?=$value->user_id?>"><?=$value->fullname?></option>
                      <?php } ?>
                      </optgroup>
                    <?php } ?>
                  </select> 
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Amount <sup class="text-danger">*</sup> </label>
                </div>
                <div class="col-sm-6">
                  <input type="number" class="form-control" id="" name="advance_amount"  placeholder="Amount" required="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Deduct Month <sup class="text-danger">*</sup>  </label>
                </div>
                <div class="col-sm-6">
                    <div class='input-group date form-group datetimepicker11' id='datetimepicker10'>
                        <input type='text' class="form-control" name="deduct_month" />
                          <span class="input-group-addon">
                            <span ><i class="fa fa-calendar"></i></span>
                        </span>
                     </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Reason  </label>
                </div>
                <div class="col-sm-6">
                  <textarea type="number" name="reason" class="form-control" id=""  placeholder="Reason" rows="5"></textarea>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
        <div class="modal-footer border-top-0 modal-butn">
          <span type="button" class="btn btn-secondary">close</span>
          </div>
      </div>
    </div>
  </div>


<script type="text/javascript">
    $(function () {
        $('.datetimepicker10').datetimepicker({
            viewMode: 'years',
            format: 'YYYY'
        });
    });
    $(function () {
        $('.datetimepicker11').datetimepicker({
            viewMode: 'years',
            format: 'YYYY-MM'
        });
    });
</script>
<script>
     $(document).ready(function() {
          $(".hourly_status").select2();
          $("#imptask_status").select2();
          $(".monthly_status").select2();
      });
  </script>