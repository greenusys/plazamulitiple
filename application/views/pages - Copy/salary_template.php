
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
                      aria-selected="true">Salary Template List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                      aria-selected="false">Set Salary Template</a>
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
                                <th>SL</th>
                                <th>Salary Grade</th>
                                <th>Basic Salary</th>
                                <th>Overtime(Per Hour)</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          $count=1;
                          foreach ($templates as $template) {
                          ?>
                            <tr>
                                <td><?=$count?>.</td>
                                <td><a href="javascript:void(0);" onclick="open_modal(<?=$template->salary_template_id?>)"><?=$template->salary_grade?></a></td>
                                <td><?=$template->basic_salary?></td>
                                <td><?=$template->overtime_salary?></td>
                                <td>
                                    <div class="">
                                      <a href="javascript:void(0);"  class="sele_staus bg-info p-1 text-white"><span><i class="far fa-edit"></i></span></a>
                                      <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                       <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
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
                                <th>SL</th>
                                <th>Salary Grade</th>
                                <th>Basic Salary</th>
                                <th>Overtime(Per Hour)</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
                  <div class="tab-pane fade px-4" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                  <form id="set_template">
                   <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="col-md-6 offset-md-2 mt-3">
                              <div class="form-group row">
                                <label for="staticEmail" class="t3 text-right  col-sm-3 col-form-label font-weight-bold">Salary grade<sup class="a1">*</sup></label>
                              
                                <div class="col-md-9">
                                <input type="text" required="" name="salary_grade" class="enter form-control"placeholder="Enter Salary grade">
                              </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="t3 text-right  col-sm-3 col-form-label font-weight-bold">Basic salary<sup class="a1">*</sup></label>
                              
                                <div class="col-md-9">
                                <input type="number" required="" name="basic_salary" value="0" class="enter form-control total_last" id="basic_salary" placeholder="Enter Basic Salary">
                              </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="t3 text-right  col-sm-3 col-form-label font-weight-bold">Overtime rate(per hour)</label>
                              
                                <div class="col-md-9">
                                <input type="text" required="" name="overtime_salary" class="enter form-control" placeholder="Enter Overtime Rate">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
             

                  <div class="row">
                    <div class="col-md-6">
                      <div class="card">
                    
                          <div class="card-header row border-bottom py-1">
                            <div class="col-md-6">
                              <span><strong>Allowances</strong></span> 
                             </div>
                           <!--    <div class="col-md-6 text-right"><button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div> -->
                          </div>
                       
                   
                            <div class="form-group">
                                  <input type="text" readonly value="House Rent Allowance" class=" font-weight-bold label_allow">
                                  <input type="number" value="0" class="form-control total_last">
                              </div>
                     
                            <div class="form-group">
                                  <input type="text" readonly value="Medical Allowance" class=" font-weight-bold label_allow">
                                  <input type="number" value="0" class="form-control total_last">
                            </div>
                            <div class="form-group allowance">

                            </div>
                           <a href="javascript:void(0);" class="add_allow"><b>+ Add More</b></a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="card">
                        
                            <div class="card-header row border-bottom py-1">
                              <div class="col-md-6">
                                <span><strong>Deduction</strong></span> 
                               </div>
                             <!--    <div class="col-md-6 text-right"><button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div> -->
                            </div>
                       
                          
                            <div class="form-group">
                                  <input type="text" readonly value="Provident Fund" class=" font-weight-bold label_deduct">
                                  <input type="number" value="0" class="form-control total_deduct">
                              </div>
                               <div class="form-group">
                                  <input type="text" readonly value="Tax Deduction" class=" font-weight-bold label_deduct">
                                  <input type="number" value="0" class="form-control total_deduct">
                                </div>
                            <div class="form-group deduct">

                            </div>
                        
                            <a href="javascript:void(0);" class="add_deduct"><b>+ Add More</b></a>
                    
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pull-right">
                            <div class="">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <strong>Total Salary Details</strong>
                                    </div>
                                </div>
                                <div class="">
                                    <table class="table table-bordered custom-table">
                                       
                                          <tr><!-- Sub total -->
                                            <th class=" vertical-td">Gross Salary :
                                            </th>
                                            <td class="">
                                                <input name="" disabled="" value="" id="total" class="form-control" data-parsley-id="18" type="text">
                                            </td>
                                        </tr> <!-- / Sub total -->
                                        <tr><!-- Total tax -->
                                            <th class="c vertical-td">Total Deduction :</th>
                                            <td class="">
                                                <input name="" disabled="" value="" id="deduc" class="form-control" data-parsley-id="20" type="text">
                                            </td>
                                        </tr><!-- / Total tax -->
                                        <tr><!-- Grand Total -->
                                            <th class="vertical-td">Net Salary :
                                            </th>
                                            <td class="">
                                                <input name="" disabled="" required="" value="" id="net_salary" class="form-control" data-parsley-id="22" type="text">
                                            </td>
                                        </tr><!-- Grand Total -->
                                  
                                  </table><!-- Order Total table list start -->
                                  <button type="submit" class="btn btn-primary float-right">Save</button>
                                </div>
                            </div>
                        </div><!-- ****************** Total Salary Details End  *******************-->
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Salary Template Details</h4>
        <div class="pull-right ">
              <span><a href="http://plazacrm.com/admin/payroll/salary_template/5" class="btn btn-primary btn-xs" title="" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil-square-o"></i></a></span>
              <span><a href="http://plazacrm.com/admin/payroll/salary_template_pdf/5" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="PDF"><span> <i="" class="fa fa-file-pdf-o"></span></a></span>
              <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="" onclick="printDiv('printableArea')" data-original-title="Print"><i class="fa fa-print"></i></button>
            </div>
      </div>
      <hr>
      <div class="modal-body">
        <div class="row">
          <div class="container">
          <div class="">
                    <div class="d-flex">
                        <label for="field-1" class="col-sm-5 control-label"><strong>Salary Grades:</strong></label>
                        <p class="form-control-static">vfvggf</p>
                    </div>
                    <div class="d-flex">
                        <label for="field-1" class="col-sm-5 control-label"><strong>Basic Salary                                :</strong>
                        </label>
                        <p class="form-control-static">â‚¬ 222,00</p>
                    </div>
                    <div class="d-flex">
                        <label for="field-1" class="col-sm-5 control-label"><strong>Overtime                                <small>(Per Hour)</small>
                                :</strong> </label>
                        <p class="form-control-static">â‚¬ 22,00</p>
                    </div>
                  </div>
                  <div class="row">
            <div class="col-sm-6">
              <div class="panel panel-primary">
                <div class="panel-heading" style="border-bottom: 2px solid blue;"><strong>Total Salary Details</strong></div>
                <div class="panel-body">
                  <div class="d-flex">
                  <label class="col-sm-6 control-label"><strong>House Rent Allowance: </strong></label>
                  <p class="form-control-static">$‚¬ 100,00</p>
                  </div>
                  <div class="d-flex">
                  <label class="col-sm-6 control-label"><strong>Medical Allowance: </strong></label>
                  <p class="form-control-static">$‚¬ 100,00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="panel panel-primary">
                <div class="panel-heading" style="border-bottom: 2px solid blue;"><strong>Deductions</strong></div>
                  <div class="panel-body">
                  <div class="d-flex">
                  <label class="col-sm-6 control-label"><strong>House Rent Allowance: </strong></label>
                  <p class="form-control-static">$‚¬ 100,00</p>
                  </div>
                  <div class="d-flex">
                  <label class="col-sm-6 control-label"><strong>Medical Allowance: </strong></label>
                  <p class="form-control-static">$‚¬ 100,00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="panel panel-primary">
                <div class="panel-heading" style="color:white;border-bottom: 2px solid blue;background-color: #23b7e5;: "><strong>Total Salary Details</strong></div>
                  <div class="panel-body">
                  <div class="d-flex">
                  <label class="col-sm-6 control-label"><strong>Gross Salary: </strong></label>
                  <p class="form-control-static">$‚¬ 100,00</p>
                  </div>
                  <div class="d-flex">
                  <label class="col-sm-6 control-label"><strong>Total Deduction: </strong></label>
                  <p class="form-control-static">$‚¬ 100,00</p>
                  </div>
                  <div class="d-flex">
                  <label class="col-sm-6 control-label"><strong>Net Salary: </strong></label>
                  <p class="form-control-static">$‚¬ 100,00</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>
      </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script>
function open_modal(id){
  var template_id=id;
  // $.ajax({
  //   type:'POST',
  //   data:{
  //     template_id:template_id
  //   },
  //   url:'<?=base_url()?>Payroll/fetch_template',
  //   success:function(response){
  //     console.log(response);
  //   }
  // })
  $('#myModal').modal('show');
}


$("#set_template").submit(function(e){
         e.preventDefault();
         var label_allowances = [];
         var label_deductions = [];
         var value_allowances = [];
         var value_deductions = [];
         var counter=0;

         $('.label_allow').each (function() {
            if($.trim($(this).val()) === '') {
              counter=1;
            } else {
                label_allowances.push($(this).val());
            }
          });

         $('.label_deduct').each(function(){
            if($.trim($(this).val()) === '') {
              counter=1;
            } else {
                label_deductions.push($(this).val());
            }
         })

         $('.total_last').each(function(){
            if($.trim($(this).val()) === '') {
              counter=1;
            } else {
                value_allowances.push($(this).val());
            }
         })

         $('.total_deduct').each(function(){
            if($.trim($(this).val()) === '') {
              counter=1;
            } else {
                value_deductions.push($(this).val());
            }
         })

         if(counter==1){
          alert("Please Fill All Fields");
         }else{
         value_allowances.shift();
         var formData= new FormData($(this)[0]);
         formData.append('allowance_label',label_allowances);
         formData.append('allowance_value',value_allowances);
         formData.append('deduction_label',label_deductions);
         formData.append('deduction_value',value_deductions);
         $.ajax({
             url:"<?=base_url()?>Payroll/set_template",
              type:"post",
              data:formData,
              contentType:false,
              processData:false,
              cache:false,
             success:function(response)
             {
               var response=JSON.parse(response);
               if(response.status==1){
                 swal("Template Created Successfully!", "Created", "success");
                 $("#example").load(location.href + " #example");
                 //window.location.href='<?=base_url()?>Home';
               }
               else if(response.status=="0"){
                swal(response.msg, "Already Exists", "error");
              }
             }
         });
       }
})

$(document).on('click','.add_allow',function(){
   var html='<div class="row new_allowance pb-3">'+
              '<div class="col-sm-9">'+
                '<input type="text" placeholder="Enter Allowances Label" class="form-control label_allow">'+
                '<input type="number" value="0"; placeholder="Enter Allowances Value" class="form-control total_last">'+
              '</div>'+
              '<div class="col-sm-3">'+
                '<strong><a href="javascript:void(0);" class="remCF"><i class="fa fa-times"></i>&nbsp;Remove</a></strong>'+
              '</div>'+
              '</div>';
   $('.allowance').append(html);
})

$(document).on('click','.remCF',function(){
    $(this).parent().parent().parent().remove();
    var inputs = $(".total_last");
    var basic_salary=$('#basic_salary').val();
    var total=0;
    var deducts=0;
    for(var i = 0; i < inputs.length; i++){
      total+=parseFloat($(inputs[i]).val());
    }
    var deduct_class = $(".total_deduct");
    for(var z = 0; z < deduct_class.length; z++){
      deducts+=parseFloat($(deduct_class[z]).val());
    }
    final_total=total-deducts;
    //console.log(final_total);
    $('#total').val(total);
    $('#deduc').val(deducts);
    $('#net_salary').val(final_total);
})


$(document).on('click','.add_deduct',function(){
   var html='<div class="row new_deduct pb-3">'+
              '<div class="col-sm-9">'+
                '<input type="text" placeholder="Enter Deduction Label" class="form-control label_deduct">'+
                '<input type="number" value="0" class="form-control total_deduct">'+
              '</div>'+
              '<div class="col-sm-3">'+
                '<strong><a href="javascript:void(0);" class="remCF"><i class="fa fa-times"></i>&nbsp;Remove</a></strong>'+
              '</div>'+
              '</div>';
   $('.deduct').append(html);
})

$(document).on('change','.total_last',function(){
    if($(this).val().trim().length === 0){
        $(this).val(0);
    }
    var inputs = $(".total_last");
    var basic_salary=$('#basic_salary').val();
    var total=0;
    var deducts=0;
    var final_total=0;
    for(var i = 0; i < inputs.length; i++){
      total+=parseFloat($(inputs[i]).val());
    }

    var deduct_class = $(".total_deduct");
    for(var z = 0; z < deduct_class.length; z++){
      deducts+=parseFloat($(deduct_class[z]).val());
    }
    final_total=total-deducts;
    //console.log(final_total);
    $('#total').val(total);
    $('#deduc').val(deducts);
    $('#net_salary').val(final_total);
})

$(document).on('change','.total_deduct',function(){
      if($(this).val().trim().length === 0){
        $(this).val(0);
      }
    var inputs = $(".total_last");
    var basic_salary=$('#basic_salary').val();
    var total=0;
    var deducts=0;
    var final_total=0;
    for(var i = 0; i < inputs.length; i++){
      total+=parseFloat($(inputs[i]).val());
    }

    var deduct_class = $(".total_deduct");
    for(var z = 0; z < deduct_class.length; z++){
      deducts+=parseFloat($(deduct_class[z]).val());
    }
    final_total=total-deducts;
    //console.log(final_total);
    $('#total').val(total);
    $('#deduc').val(deducts);
    $('#net_salary').val(final_total);
})
</script>  