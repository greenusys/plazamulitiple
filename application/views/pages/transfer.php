
        
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
                      aria-selected="true">All Transfer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                      aria-selected="false">New Transfer</a>
                  </li>
                 <!--  <li class="nav-item ">
                  <a class="nav-link" id="import_project" data-toggle="tab" href="#imp_project" role="tab" aria-controls="imp_project" aria-selected="false">Import Transfer </a>
                  </li> -->
                </ul>
                <div class="tab-content card pt-5" id="myTabContentJust">
                  <div class="tab-pane fade show active px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

                   <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>From Account</th>
                                <th>To Account</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Attachment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($All_Transfer_Data as $ATD)
                                {
                                      // print_r($ATD);
                                ?>
                            <tr>
                               <!-- <input type="hidden" name="from_account_id" value="<?=$ATD->from_account_id?>"class="fetch_fromAcc"> -->
                              <td><?=ucwords($ATD['From'])?></td>
                                <td><?=ucwords($ATD['To'])?></td>
                               <td><?=$ATD['Amount']?></td>
                                <td><?=$ATD['Date']?></td>
                              
                                <td><a href="<?=base_url('uploads/transfer/').$ATD['Attachement']?>" download>Download</a></td>
                           
                                <td>
                                    <div class="">
                                      <?php
                                      foreach($Assign_permission as $checkpermission)
                                        {
                                          $permission=$checkpermission->permission;
                                            foreach ($UsersPermission as $Uperms) 
                                            {
                                             $Userpermi=$Uperms->permission;     
                                          if(strpos($permission,'Edit')!==false||strpos($Userpermi,'Edit')!==false)
                                          {?>
                                     <a href="<?=base_url('Transaction/Edit_Transfer/').$ATD['TransferId']?>" class="bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                     <?php }
                                         else
                                         {
                                          ?>
                                          <a href="#" style="visibility: hidden"class="bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                          <?php
                                          }
                                             if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                          {?>
                                            <a href="javascript:void(0)" transactions_id="<?=$ATD['TransferId']?>" class="deletettransfertransaction"><span class="bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>
                                             <?php }
                                         else
                                         {
                                          ?>
                                    <a href="javascript:void(0)" style="visibility: hidden" ><span class="bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>
                                     <?php
                                          }

                                        }
                                      }?>

                                      <!-- 
                                       <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span> -->
                                    </div>

                                </td>
                               
                            </tr>
                             <?php
                                }?>
                     </tbody>
                        <!--<tfoot>-->
                        <!--     <tr>-->
                        <!--        <th>From Account</th>-->
                        <!--        <th>To Account</th>-->
                        <!--        <th>Ammount</th>-->
                        <!--        <th>Date</th>-->
                        <!--        <th>Attachment</th>-->
                        <!--        <th>Action</th>-->
                        <!--    </tr>-->
                        <!--</tfoot>-->
                    </table>
                  </div>
                  <div class="tab-pane fade px-4" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                    <div class="row">
        <div class="offset-1 col-sm-8 cl-md-8 col-lg-8">
             <?php
                  if($this->session->flashdata('msg'))
                  {
                    echo '<div class="alert alert-info">'.$this->session->flashdata('msg').'</div>';
                  }
                ?>
            <form action="<?=base_url('Transaction/AddTransferData')?>" method="post" enctype="multipart/form-data">
          <div class="form-group row">
              <div class="col-sm-3 text-right">
                <label for="exampleInputEmail1">From Account <sub class="text-danger">*</sub></label>
              </div>
              <div class="col-sm-8">
                <div class="input-group">
                       <select name="From_Account_id" class="form-control" id="customer_group">
                          <option value="0">Select Account</option>
                          <?php
                          foreach($fetch_Account_Data as $AccData)
                          {
                          ?>
                         <option class="fetchusersbalance" users_balance="<?=$AccData->account_id?>" value="<?=$AccData->account_id?>"><?=$AccData->account_name ?></option>
                          <?php   
                          }
                          ?>
                      </select>
                </div>
              </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3 text-right">
                <label for="exampleInputEmail1">To Account <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-8">
                <div class="input-group">
                       <select name="To_Account_id" class="form-control" id="customer_group">
                          <option value="0">Select Account</option>
                          <?php
                          foreach($fetch_Account_Data as $AccData)
                          {
                          ?>
                         <option class="fetchusersbalance" users_balance="<?=$AccData->account_id?>" value="<?=$AccData->account_id?>"><?=$AccData->account_name ?></option>
                          <?php   
                          }
                          ?>
                      </select>
                </div>
              </div>
             
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3 text-right">
                <label for="exampleInputEmail1">Date   </label>
              </div>
              <div class="col-sm-8">
                <div class='input-group date' id='datetimepicker1'>
                      <input type='date' name="transferdate"class="form-control" />
                    <span class="input-group-addon">
                    <span ><i class="fa fa-calendar"></i></span>
                    </span>
                </div>
              </div>
            </div>
          </div>
           
          <div class="form-group">
            <div class="row">
              <div class=" col-sm-3 text-right">
                <label for="exampleInputEmail1">Notes  </label>
              </div>
              <div class="col-sm-8">
               <textarea class="form-control" name="short_note"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3 text-right">
                <label for="exampleInputEmail1">Amount  <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-6">
               <input type="number" name="transfer_amount"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>

            <div class="form-group row">
              
              <div class="col-sm-3 text-right">
                <label for="exampleInputEmail1">Payment Method</label>
              </div>
              <div class="col-sm-8">
                  <div class="input-group">
                        <select name="payment_methods_id" class="form-control" id="customer_group">
                            <option value="0">Select payment method</option>
                            <?php
                          foreach($fetch_Method_Data as $MethodData)
                          {
                          ?>
                         <option value="<?=$MethodData->payment_methods_id?>"><?=$MethodData->method_name ?></option>
                          <?php   
                          }
                          ?>
                        </select>
                  </div>
              </div>
         </div>
        
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3 text-right">
                <label for="exampleInputEmail1">Reference  </label>
              </div>
              <div class="col-sm-8">
                <input type="text" name="transferreference" value="" class="form-control" placeholder="e.g. Transection Id, Check No" name="estimate_hours" data-parsley-id="23">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
                <div class="col-sm-3 text-right">
                  <label for='uploaded_file'>Attachment</label>
                            </div>
              <div class="col-sm-8">
                <div class="form-group files">
                  <!--<label>Upload Your File </label>--->
                   <input type="file" name="files[]" class="form-control" multiple>
                </div>
              </div>
              </div>
          </div>
          
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3 text-right">
                <label for="exampleInputEmail1 " >Permission<span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
                <div class="checkbox c-radio needsclick ">
                  <input type="radio" name="permission" value="all" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                                </div>
                <!-- <div class="checkbox c-radio needsclick">
                  <input type="radio" name="permission" value="" id="chkPassport" onclick="ShowHideDiv(this)" > Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                                </div> -->
              </div>
            </div>
          </div>
          <!--<div class="form-group"  id="dvPassport" style="display: none">-->
          <!--    <div class="row">-->
          <!--    <div class="col-sm-3">-->
          <!--      <label for="exampleInputEmail1">select Users<span class="text-danger">*</span></label>-->
          <!--    </div>-->
              <!--<div class="col-sm-9">
                 <input type="checkbox" name="vehicle1" value="Bike"  id="chkPassport1" onclick="ShowHideDiv(this)"> admin <strong class="badge btn-danger">Admin</strong>
                 <br>
                 <div class="row"  id="dvPassport1" style="display: none">
                    <div class="col-md-3">
                   <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> View
                  </div>
                  <div class="col-md-3">
                       <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Edit
                  </div>
                  <div class="col-md-3">
                      <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Delete
                  </div>
                 </div>
                 
                                 <input type="checkbox" name="vehicle2" value="Car"  id="chkPassport2" onclick="ShowHideDiv(this)" > adminko <strong class="badge btn-danger">Admin</strong>
                 <br>
                 <div class="row"  id="dvPassport2" style="display: none">
                    <div class="col-md-3">
                   <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> View
                  </div>
                  <div class="col-md-3">
                       <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Edit
                  </div>
                  <div class="col-md-3">
                      <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Delete
                  </div>
                 </div>
              </div>--->
             
            </div>
          </div>
          <div class="row mt-3">
        <div class="offset-11 col-md-1">
         <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
      </form>
         
        </div>
    </div>
                  </div>
                  <!-- <div class="tab-pane fade show px-4" id="imp_project" role="tabpanel" aria-labelledby="import_project">
                    <div class="row">
                     
                        <div class="col-md-12 card p-4">
                          <div class="col-md-5 offset-md-1 mt-3">
                            <form action="/action_page.php">
                                <div class="form-group  row">
                                  <label for="staticEmail" class="text-right col-sm-3 col-form-label font-weight-bold">Choose File <sup class="a1">*</sup></label>
                                  <div class="col-sm-8">
                                      <input type="file" class="text-right form-control border-0 d-none" id="img" placeholder="">
                                  <label for="img" class="border w-50 pl-3">Select File</label>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="staticEmail" class="text-right col-sm-3 col-form-label font-weight-bold">Task Status <sup class="a1">*</sup></label>
                                  <div class="col-sm-8">
                                     <select class="form-control">
                                      <option value="" selected="">select</option>
                                      <option value="">A</option>
                                      <option value="">A</option>
                                      <option value="">A</option>
                                     </select>            
                                  </div>
                              </div>
                                <div class="form-group row">
                                  <label for="staticEmail" class="text-right col-sm-3 col-form-label font-weight-bold">  Assigned to <sup class="a1">*</sup></label>
                                  <div class="col-sm-8">
                                     <input type="radio" name="everyone" value="everyone" checked=""> Everyone  <i class="fa fa-question-circle" aria-hidden="true"></i><br>
                                    <input type="radio" name="everyone" value="everyone">  customize permision  <i class="fa fa-question-circle" aria-hidden="true"></i>
                                  </div>
                                </div>
                                <div class="" style="padding-left: 26%">
                                  <button type="submit" class="btn btn-primary">upload</button>
                              </div>  
                            </form>   
                          </div>
                        </div>
                      </div>
              

                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      
        <script type="text/javascript">
        $(document).ready(function(){
          $('.deletettransfertransaction').on('click',function(){ 
             var transactions_id=$(this).attr("transactions_id");
             // alert(owner_id);
           if(confirm("Are you Sure want to delete this record?") ==true)
            {       
            // alert(owner_id);         
                $.ajax({
                  url:"<?=base_url('Transaction/DeleteTranferTransaction')?>",
                  type:"post",
                  data:{transactions_id:transactions_id},
                  success:function(response)
                  {   
                  response=JSON.parse(response);             
                     if (response==1)
                      {
                   alert('Delete Record successfully');
                    location.reload();
                    
                       }
                  }
                 })                           
             // userPreference = "Data Delete successfully!";

             }
             else 
             {
              userPreference = "Save Canceled!";
              }
              
          })
        })  
      </script>
 <script>
        $(document).ready(function() {
      
        $("#cust_grp").select2(); 
        $("#accounts").select2();
        $(".language").select2();
        $(".currency").select2(); 
        $("#country").select2();
      
       });
    </script>

<script type="text/javascript">
    $(function () {
        $("#chkPassport").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport").show();
            } else {
                $("#dvPassport").hide();
            }
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $("#chkPassport1").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport1").show();
            } else {
                $("#dvPassport1").hide();
            }
        });
    });
</script>