<Style>
  .back_{
    background: #292525;
    color: white;
  }
</Style>
<?php 
//print_r($payslipdata);
// echo"--------------------------------------------";
// print_r($salary_details);
// echo"--------------------------------------------";
// print_r($salOvertime);
?>

          <div class="row mt-4" >
            <div class="col-md-12">
              <div style="float:right">
                  <span class="bg-danger text-white p-1"><i class="far fa-envelope"></i></span>
                  <span class="bg-info text-white p-1" id="printMe"><i class="far fa-copy"></i></span>
              </div>
              <div id="outprint">
                <div style="padding:15px; border-bottom:1px solid gray">
                    <p style="margin: 0px">Tester</p>
                </div>
                <div class="">
                  <div class="" style="margin: 0 auto">
                      <h4 style="text-align: center;margin-bottom: 0px;margin-top:5px" >Payslip</h4>
                      <h4 style="text-align: center">Salary Month : <?=date('F Y',strtotime($payslipdata->payment_month))?></h4>
                  </div>  
                  <div class="">
                   <table class="table" style="width: 100%">
                      <tr>
                        <td><strong>Employment ID :</strong><?=$payslipdata->employment_id?></td>
                        <td><strong>Name :</strong><?=ucwords($payslipdata->fullname)?></td>
                        <td><strong>Payslip No :</strong><?=$payslipdata->payslip_number?></td>
                      </tr>
                      <tr>
                        <td><strong>Mobile :</strong><?=$payslipdata->mobile?></td>
                        <td><strong>Email :</strong><?=$payslipdata->email?></td>
                        <td><strong>Address :</strong><?=$payslipdata->address?></td>
                      </tr>
                      <tr>
                        <td><strong>Departments  :</strong><?=$payslipdata->deptname?></td>
                        <td><strong>Designation  :</strong><?=$payslipdata->designations?></td>
                        <td><strong>Joining Date :</strong><?=$payslipdata->joining_date?></td>
                      </tr>
                   </table>
                </div>
              </div>

              <div class="d-flex" style="display: flex;">
                <div class="" style="width: 55%;">
                  <h4>Earnings</h4>
                  <table class="table er_table" border="1" cellspacing="0" cellpadding="6" style="width: 100%">
                        <tr style=" ">
                          <td><strong>Type of Pay</strong></td>
                          <td><strong>Amount</strong></td>
                        </tr>
                        <?php 
                      
                          foreach ($salary_details as $earning) { 
                              //$grossTotal = $grossTotal+$earning->salary_payment_details_value;
                            switch ($earning->salary_payment_details_label) {
                              case 'Overtime Hour': ?>
                                      <tr>
                                        <td><strong><?=$earning->salary_payment_details_label?> : </strong></td>
                                        <td><?=$salOvertime['overtimeHour']?></td>
                                      </tr>
                            <?php    break;
                              case 'Overtime Amount': ?>
                                      <tr>
                                        <td><strong><?=$earning->salary_payment_details_label?> : </strong></td>
                                        <td><?=$salOvertime['overTimeAmmount']?></td>
                                      </tr>
                            <?php    break;
                              default: ?>
                                     <tr>
                                      <td><strong><?=$earning->salary_payment_details_label?> : </strong></td>
                                      <td><?=$earning->salary_payment_details_value?></td>
                                    </tr>
                            <?php    break;
                            }
                            ?>
                              

                     <?php     }
                        ?>
                     
                      </table>
                  </div>
                  <div class="" style="margin-left: 15px ; width: 42%">
                      <h4>Deductions</h4>
                  <table class="table er_table" border="1" cellspacing="0" cellpadding="6" style="width: 100%">
                        <tr style=" ">
                          <td><strong>Type of Pay</strong></td>
                          <td><strong>Amount</strong></td>
                        </tr>
                            <?php 
                         
                          foreach ($salary_deduction as $deduction) { 
                            ?>
                              <tr>
                                <td><strong><?=$deduction->salary_payment_deduction_label?> : </strong></td>
                                <td><?=$deduction->salary_payment_deduction_value?></td>
                              </tr>

                     <?php     }
                        ?>
                     
                        
                      </table>
                    
                            <h4>Total Details</h4>
                  <table class="table er_table"  cellspacing="0" cellpadding="4" style="width: 100%">
                        <tr >
                          <td><strong>Gross Salary : </strong></td>
                          <td><?=number_format($salOvertime['grossSalary'],2)?></td>
                        </tr>
                        <tr>
                          <td><strong>Total Deduction : </strong></td>
                          <td> <?=number_format($salOvertime['totalDeduction'],2)?></td>
                        </tr>
                       <tr>
                          <td><strong>Net Salary :</strong></td>
                          <td><?= number_format($salOvertime['netSalary'],2)?></td>
                        </tr>
                        <tr >
                          <td style="border-top:1px solid black"><strong>Paid Amount : </strong></td>
                          <td style="border-top:1px solid black"> <strong> <?= number_format($salOvertime['paidAmount'],2)?> </strong></td>
                        </tr>
                        
                      </table>
                  </div>
              </div>
            </div>
          </div>
      </div>


  <script>
     $(document).ready(function() {
        $("#emply").select2();
      });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){

      function printData()
{
   var divToPrint=document.getElementById("outprint");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
      $(document).on("click","#printMe",function(){

      printData();
      })
    })
  </script>