<?php
$template_id=$this->uri->segment(3);
?>
          <div class="row mt-4">
            <div class="col-lg-12">
              <div class="card">
                <ul class="nav nav-tabs nav-justified md-tabs indigo col-md-5" id="myTabJust" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
                      aria-selected="true">Salary Template List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                      aria-selected="false">Set Salary Template</a>
                  </li>
                 <!--  <li class="nav-item ">
                  <a class="nav-link" id="import_project" data-toggle="tab" href="#imp_project" role="tab" aria-controls="imp_project" aria-selected="false">Import Transfer </a>
                  </li> -->
                </ul>
                <div class="tab-content card pt-3" id="myTabContentJust">
                  <div class="tab-pane fade px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

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
                                      <a href="javascript:void(0);" onclick="open_modal(<?=$template->salary_template_id?>)" class="sele_staus bg-info p-1 text-white"><span><i class="far fa-edit"></i></span></a>
                                      <span class="sele_staus bg-danger p-1 text-white del_template" temp_id="<?=$template->salary_template_id?>"><i class="far fa-trash-alt"></i></span>
                                       <a href="<?=base_url()?>Payroll/salaryTemplate/<?=$template->salary_template_id?>"><span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span></a>
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
                  <div class="tab-pane fade show active px-4" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                  <form id="set_template">
                   <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="col-md-6 offset-md-2 mt-3">
                              <div class="form-group row">
                                <label for="staticEmail" class="t3 text-right  col-sm-3 col-form-label font-weight-bold">Salary grade<sup class="a1">*</sup></label>
                              
                                <div class="col-md-9">
                                <input type="text" required="" value="<?=$template_details[0]['salary_grade']?>" name="salary_grade" class="enter form-control"placeholder="Enter Salary grade">
                              </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="t3 text-right  col-sm-3 col-form-label font-weight-bold">Basic salary<sup class="a1">*</sup></label>
                              
                                <div class="col-md-9">
                                <input type="number" required="" value="<?=$template_details[0]['basic_salary']?>" name="basic_salary" value="0" class="enter form-control total_last" id="basic_salary" placeholder="Enter Basic Salary">
                              </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="t3 text-right  col-sm-3 col-form-label font-weight-bold">Overtime rate(per hour)</label>
                              
                                <div class="col-md-9">
                                <input type="text" required="" value="<?=$template_details[0]['overtime_salary']?>" name="overtime_salary" class="enter form-control" placeholder="Enter Overtime Rate">
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
                          </div>
                       
                          <?php
                          $allower=0.0;
                          foreach ($allowance as $allowances) {
                            $allower=$allower+$allowances['allowance_value'];
                            ?>
                            <div class="form-group">
                                  <input type="text" value="<?=$allowances['allowance_label']?>" class=" font-weight-bold label_allow">
                                  <input type="number" value="<?=$allowances['allowance_value']?>" class="form-control total_last">
                            </div>

                           <?php
                          }
                          ?>
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

                            </div>              
                          <?php
                          $deducter=0.0;
                          foreach ($deduction as $deductions) {
                          $deducter=$deducter+$deductions['deduction_value'];
                          ?>
                            <div class="form-group">
                                  <input type="text" value="<?=$deductions['deduction_label']?>" class=" font-weight-bold label_deduct">
                                  <input type="number" value="<?=$deductions['deduction_value']?>" class="form-control total_deduct">
                              </div>
                            <?php }

                            ?>
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
                                                <input name="" disabled="" value="<?php echo $gross_salary=$template_details[0]['basic_salary']+$allower ?>" id="total" class="form-control" data-parsley-id="18" type="text">
                                            </td>
                                        </tr> <!-- / Sub total -->
                                        <tr><!-- Total tax -->
                                            <th class="c vertical-td">Total Deduction :</th>
                                            <td class="">
                                                <input name="" disabled="" value="<?=$deducter?>" id="deduc" class="form-control" data-parsley-id="20" type="text">
                                            </td>
                                        </tr><!-- / Total tax -->
                                        <tr><!-- Grand Total -->
                                            <th class="vertical-td">Net Salary :
                                            </th>
                                            <td class="">
                                                <input name="" disabled="" required="" value="<?php echo $gross_salary-$deducter?>" id="net_salary" class="form-control" data-parsley-id="22" type="text">
                                            </td>
                                        </tr><!-- Grand Total -->
                                  
                                  </table><!-- Order Total table list start -->
                                  <button type="submit" class="btn btn-primary float-right">Update</button>
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
                        <p class="form-control-static salary_grade_class"></p>
                    </div>
                    <div class="d-flex">
                        <label for="field-1" class="col-sm-5 control-label"><strong>Basic Salary                                :</strong>
                        </label>
                        <p class="form-control-static basic_salary_class"></p>
                    </div>
                    <div class="d-flex">
                        <label for="field-1" class="col-sm-5 control-label"><strong>Overtime                                <small>(Per Hour)</small>
                                :</strong> </label>
                        <p class="form-control-static overtime_salary_class"></p>
                    </div>
                  </div>
                  <div class="row">
            <div class="col-sm-6">
              <div class="panel panel-primary">
                <div class="panel-heading" style="border-bottom: 2px solid blue;"><strong>Total Salary Details</strong></div>
                <div class="panel-body allowance_class">

                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="panel panel-primary">
                <div class="panel-heading" style="border-bottom: 2px solid blue;"><strong>Deductions</strong></div>
                  <div class="panel-body deduction_class">

                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="panel panel-primary">
                <div class="panel-heading" style="color:white;border-bottom: 2px solid blue;background-color: #23b7e5;: "><strong>Total Salary Details</strong></div>
                  <div class="panel-body">
                  <div class="d-flex">
                  <label class="col-sm-6 control-label"><strong>Gross Salary: </strong></label>
                  <p class="form-control-static gross_class"></p>
                  </div>
                  <div class="d-flex">
                  <label class="col-sm-6 control-label"><strong>Total Deduction: </strong></label>
                  <p class="form-control-static total_deduct_class"></p>
                  </div>
                  <div class="d-flex">
                  <label class="col-sm-6 control-label"><strong>Net Salary: </strong></label>
                  <p class="form-control-static net_salary_class"></p>
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
$(document).on('click','.del_template',function(){
  var template_id=$(this).attr('temp_id');
  if(confirm('Do Your Really Want To Delete This Template? It can not be reversed')){
    $.ajax({
      type:'POST',
      data:{
        template_id:template_id
      },
      url:'<?=base_url()?>Payroll/delete_template',
      success:function(response){
        var response=JSON.parse(response);
        if(response.status==1){
          location.reload();
        }
        else{
          alert('Failed TO Delete');
        }
      }
    })
  }
})


function open_modal(id){
  var template_id=id;
  $.ajax({
    type:'POST',
    data:{
      template_id:template_id
    },
    url:'<?=base_url()?>Payroll/fetch_template',
    success:function(response){
      var response=JSON.parse(response);
      $('.salary_grade_class').html(response.template_details[0].salary_grade);
      $('.basic_salary_class').html(response.template_details[0].basic_salary);
      $('.overtime_salary_class').html(response.template_details[0].overtime_salary);
      var html1='';
      var total_allowance=parseFloat(response.template_details[0].basic_salary);
      var total_deductions=0.0;
      for(var i=0;i<response.allowance.length;i++){
          total_allowance=total_allowance+parseFloat(response.allowance[i].allowance_value);
          html1+='<div class="d-flex">';
          html1+='<label class="col-sm-6 control-label"><strong>'+response.allowance[i].allowance_label+': </strong></label>';
          html1+='<p class="form-control-static">'+response.allowance[i].allowance_value+'</p>';
          html1+='</div>';
      }
      $('.allowance_class').empty();
      $('.allowance_class').append(html1);
      var html2='';
      for(var z=0;z<response.deduction.length;z++){
          total_deductions=total_deductions+parseFloat(response.deduction[z].deduction_value);
          html2+='<div class="d-flex">';
          html2+='<label class="col-sm-6 control-label"><strong>'+response.deduction[z].deduction_label+': </strong></label>';
          html2+='<p class="form-control-static">'+response.deduction[z].deduction_value+'</p>';
          html2+='</div>';
      }
      $('.deduction_class').empty();
      $('.deduction_class').append(html2);
      var final_total=total_allowance-total_deductions;
      $('.gross_class').html(total_allowance);
      $('.total_deduct_class').html(total_deductions);
      $('.net_salary_class').html(final_total);
    }
  })
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
         var templater=<?=$template_id?>;
         var formData= new FormData($(this)[0]);
         formData.append('allowance_label',label_allowances);
         formData.append('allowance_value',value_allowances);
         formData.append('deduction_label',label_deductions);
         formData.append('deduction_value',value_deductions);
         formData.append('template_id',templater);
         $.ajax({
             url:"<?=base_url()?>Payroll/update_template",
              type:"post",
              data:formData,
              contentType:false,
              processData:false,
              cache:false,
             success:function(response)
             {
              //console.log(response);
                if(response==1){
                   swal("Salary Template!", "Updated!", "success");

                  window.location.href="<?=base_url()?>"+"Payroll/salaryTemplate";
                }
                else{
                  swal("OOPS!", "Something Went Wrong!", "error");
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