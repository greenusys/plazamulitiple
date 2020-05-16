<!--   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script> -->

             <div class="p-3">
            <div class="row bg-white mt-3">
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span>0</span>
                    <p>Without Converted</p>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span>0</span>
                    <p>Last Weeks Created</p>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span>0</span>
                    <p>Completed Achievement</p>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span>0</span>
                    <p>Without Converted</p>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span>0</span>
                    <p>Pending Achievement</p>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span class="chart" data-percent="40">
                      <span class="percent"></span>
                    </span>
                    <span class="ml-2"> Done</span>
                  </div>

                </div>
            </div>  
          </div>
         
        
          <div class="row mt-4">
            <div class="col-lg-12">
              <div class="card">
               <!--  <div class="card-header">
                  <h4>Budget vs Sales</h4>
                </div> -->
             <!--    <div class="card-body">
                  <canvas id="myChart" height="158"></canvas>
                </div> -->
                <!--<ul class="nav nav-tabs nav-justified md-tabs indigo col-md-5" id="myTabJust" role="tablist">-->
                <!--  <li class="nav-item">-->
                <!--    <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"-->
                <!--      aria-selected="true">All Deposite</a>-->
                <!--  </li>-->
                <!--  <li class="nav-item">-->
                <!--    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"-->
                <!--      aria-selected="false">New Deposite</a>-->
                <!--  </li>-->
                <!--  <li class="nav-item ">-->
                <!--  <a class="nav-link" id="import_project" data-toggle="tab" href="#imp_project" role="tab" aria-controls="imp_project" aria-selected="false">Import Deposite</a>-->
                <!--  </li>-->
                <!--</ul>-->
                <div class="tab-content card pt-5" id="myTabContentJust">
                  <!--<div class="tab-pane fade show active px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">-->

                  
                  <!--</div>-->
                  <div class="tab-pane  px-4 show active" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                      <div class="row">
        <div class="offset-1 col-sm-8 cl-md-8 col-lg-8">
            <form action="<?=base_url('Transaction/UpdateDepositData')?>"method="post"  enctype="multipart/form-data">
                 <?php
                foreach($Deposit_DataById as $dataById)
                {
                    //  print_r($dataById);
                ?>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Name/Title </label>
              </div>
              <div class="col-sm-9">
                   <input type="hidden" name="trans_id" value="<?=$dataById->transactions_id?>">
               <input type="text" class="form-control" name="depo_title" value="<?=$dataById->transname?>"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name/Title For Personal Use">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Accounts <sub class="text-danger">*</sub> </label>
              </div>
              <div class="col-sm-8">
                <div class="input-group">
                     <input type="hidden" name="accountsss_id" value="<?=$dataById->account_id?>">
                    <select  name="account_id" class="form-control" id="customer_group" disabled>
                          <option  value="<?=$dataById->transactions_id?>"><?=$dataById->accountholdername?></option>
                          <?php
                          foreach($fetch_Account_Data as $AccData)
                          {
                         ?>
                          
                         <!--<option class="fetchusersbalance" users_balance="<?=$AccData->account_id?>" value=""selected><?=$AccData->account_name ?></option>-->
                          <?php   
                          }
                          ?>
                      </select>
                </div>
              </div>
              
              <div class="col-sm-1">
                  <button type="button" id="acount" class="btn btn-light butn" title="New Accounts"><i class="fa fa-plus"></i></button>
              </div>
            </div>
          </div>
          <?php
                           $usersdetail=$this->session->logged_user;
                           ?>
           <input type="hidden" name="users_idforTransaction" value="<?=$usersdetail[0]->user_id?>">
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Date   </label>
              </div>
              <div class="col-sm-8">
                <div class='input-group date' id=''>
                     <input type='date' value="<?=$dataById->transactiondate?>"name="depodate"class="form-control" />
                    <span class="input-group-addon">
                    <span ><i class="fa fa-calendar"></i></span>
                    </span>
                </div>
              </div>
            </div>
          </div>
           
          <div class="form-group">
            <div class="row">
              <div class=" col-sm-3">
                <label for="exampleInputEmail1">Notes  </label>
              </div>
              <div class="col-sm-9">
              <textarea class="form-control" name="short_note"><?=$dataById->notes?></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Amount  <sub class="text-danger">*</sub></label>
              </div>
              <div class="col-sm-4">
                <input type="hidden" name="depoamount" value="<?=$dataById->amount?>">
               <input disabled type="number" class="form-control" value="<?=$dataById->amount?>"id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Category</label>
              </div>
              <div class="col-sm-8">
                <div class="input-group">
                                    <select name="expenses_cat_id" class="form-control" id="customer_group">
                                        <option value="">Select Category</option>
                                        <?php
                                foreach($fetch_Expenses_Category as $ExCatData)
                                  {
                                      if($dataById->category_id==$ExCatData->expense_category_id)
                                      {
                                         echo '<option value="'.$ExCatData->expense_category_id.'" selected>'.$ExCatData->expense_category.'</option>';
                                      }
                                      else
                                      {
                                           echo '<option value="'.$ExCatData->expense_category_id.'">'.$ExCatData ->expense_category.'</option>';
                                      }
                                  }
                                  ?>
                                    </select>
                              </div>
              </div>
              <div class="col-sm-1">
                  <button type="button" id="catgry" class="btn btn-light butn" title="New Category"><i class="fa fa-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Paid By</label>
              </div>
              <div class="col-sm-8">
                <div class="input-group">
                                    <select name="paid_by_id" class="form-control" id="customer_group">
                        <option value="0">Select a Payer</option>
                         <?php
                          foreach($fetch_Client_Data as $ClientData)
                          {
                              if($dataById->paid_by==$ClientData->client_id)
                              {
                                   echo '<option value="'.$ClientData->client_id.'" selected>'.$ClientData->name.'</option>';
                              }
                              else
                              {
                                   echo '<option value="'.$ClientData->client_id.'">'.$ClientData->name.'</option>';
                              }
                          }
                          ?>
                    </select>
                              </div>
              </div>
              <div class="col-sm-1">
                  <button type="button" id="paid" class="btn btn-light butn" title="New Paid By"><i class="fa fa-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Payment Method</label>
              </div>
              <div class="col-sm-8">
                <div class="input-group">
                                   <select name="payment_methods_id" class="form-control" id="customer_group">
                            <option value="0">Select payment method</option>
                            <?php
                          foreach($fetch_Method_Data as $MethodData)
                          {
                              if($dataById->payment_methods_id==$MethodData->payment_methods_id)
                              {
                               echo '<option value="'.$MethodData->payment_methods_id.'" selected>'.$MethodData->method_name.'</option>'; 
                              }
                              else
                              {
                                  echo '<option value="'.$MethodData->payment_methods_id.'">'.$MethodData->method_name.'</option>'; 
                              }
                          
                          }
                          ?>
                        </select>
                              </div>
              </div>
              <div class="col-sm-1">
                  <button type="button" id="paymnt" class="btn btn-light butn" title="New Payment Method"><i class="fa fa-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Reference  </label>
              </div>
              <div class="col-sm-9">
                <input type="text" value="<?=$dataById->reference?>" name="deporeference" value="" class="form-control" placeholder="e.g. Transection Id, Check No" name="estimate_hours" data-parsley-id="23">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
                <div class="col-sm-3">
                  <label for='uploaded_file'>Attachment</label>
                            </div>
              <div class="col-sm-9">
                                <div class="form-group files">
                  <!--<label>Upload Your File </label>--->
                    <input type="file" name="files[]" class="form-control" multiple>
                </div>
              </div>
              </div>
          </div>
                <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Deposit Image  </label>
              </div>
              <div class="col-sm-9">
               <input type="hidden" name="image_string" id="image_string" value="<?=$dataById->attachement?>" class="form-control">
                  <ul class="d-inline-flex">
                  <?php
                    $myImages=explode(',',$dataById->attachement);
                    for($i=0; $i<count($myImages);$i++)
                    {
                      ?>
                      <li>
                        <img style="width:4em;height:4em;"src="<?php echo base_url().'./uploads/deposit/'.$myImages[$i]?>" class="img-reponsive thumbnail ">
                     
                       <a href="javascript:void(0)" img_id="<?=$i?>"  img_String="<?=$dataById->transactions_id?>" class=" deleteimage fa fa-times-circle"></a>
                     </li>
                      <?php
                    
                    }
                  ?>
                </ul>
              </div>
            </div>
          </div>
          
         <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Permission<span class="text-danger">*</span></label>
              </div>
               <div class="col-sm-9">
                <div class="checkbox c-radio needsclick ">
                    <?php
                    if($dataById->permission='all')
                    {?>
                       <input type="radio" name="permission" checked value="all" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>  
                     
                    <?php
                    }
                    else
                    {?>
                    <input type="radio" name="permission"  value="all" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>  
                        <input type="radio" name="permission" checked value="" id="chkPassport" onclick="ShowHideDiv(this)" > Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br> 
                    <?php
                        
                    }
                    ?>
                 
                                </div>
                <div class="checkbox c-radio needsclick">
                  <input type="radio" name="permission" value="" id="chkPassport" onclick="ShowHideDiv(this)" > Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                                </div>
              </div>
            </div>
          </div>
          <!--<div class="form-group"  id="dvPassport" style="display: none">-->
          <!--    <div class="row">-->
          <!--    <div class="col-sm-3">-->
          <!--      <label for="exampleInputEmail1">select Users<sub class="text-danger">*</sub></label>-->
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
         
        </div>
    </div>
    <?php
        }?>
    <div class="row mt-3">
        <div class="offset-11 col-md-1">
          <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
     </form>
                  </div>
                  <!-- <div class="tab-pane fade show px-4" id="imp_project" role="tabpanel" aria-labelledby="import_project">
                    <div class="text-right dnld_sample"><button class="btn btn-primary"> <i class="fas fa-download"></i>Download Sample</div>
                    <div class="row">
                      
                        <div class="col-md-12 card p-4">
                          <div class="col-md-5 offset-md-1 mt-3">
                            <form action="/action_page.php">
                                <div class="form-group  row">
                                  <label for="staticEmail" class="text-right col-sm-5 col-form-label font-weight-bold">Choose File <sup class="text-danger">*</sup></label>
                                  <div class="col-sm-7">
                                      <input type="file" class="text-right form-control border-0 d-none" id="img" placeholder="">
                                  <label for="img" class="border w-50 pl-3">Select File</label>
                                  </div>
                                </div>
                                <div class="form-group  row">
                                  <label for="accounts" class="text-right col-sm-5 col-form-label font-weight-bold">Accounts <sup class="text-danger">*</sup></label>
                                  <div class="col-sm-7">
                           
                                      <div class="input-group">
                                        <select name="compLanguage" class="form-control language" id="accounts" style="width: 100%">
                                          <option selected="" disabled="">Select Category</option>
                                        </select>
                                      </div>
                                  </div>
                                </div>


                                <div class="form-group  row">
                                  <label for="accounts" class="text-right col-sm-5 col-form-label font-weight-bold">Category <sup class="text-danger">*</sup></label>
                                  <div class="col-sm-7">
                                      <div class="input-group">
                                        <select name="compLanguage" class="form-control language" id="language" style="width: 100%">
                                          <option selected="" disabled="">Select Category</option>
                                        </select>
                                      </div>
                                  </div>
                                </div>

                                <div class="form-group  row">
                                  <label for="accounts" class="text-right col-sm-5 col-form-label font-weight-bold">Paid By <sup class="text-danger">*</sup></label>
                                  <div class="col-sm-7">
                                     <div class="input-group">
                                        <select name="currency" class="form-control currency" id="currency" style="width: 100%">
                                        <option selected="" disabled="">Select a Payer</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group  row">
                                  <label for="accounts" class="text-right col-sm-5 col-form-label font-weight-bold">Payment Method <sup class="text-danger">*</sup></label>
                                  <div class="col-sm-7">
                                     <div class="input-group">
                                        <select name="currency" class="form-control currency" id="country" style="width: 100%">
                                        <option selected="" disabled="">Select Payment Method</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                         
                              <div class="form-group row">
                                  <label for="staticEmail" class="text-right col-sm-5 col-form-label font-weight-bold">Attachment <sup class="text-danger">*</sup></label>
                                  <div class="col-sm-4">
                                      <input type="file" class="text-right form-control border-0 d-none" id="img" placeholder="">
                                  <label for="img" class="border w-100 pl-3">Select File</label>
                                  </div>
                                  <div class="col-md-3">
                                    <span><i class="fa fa-plus" aria-hidden="true"></i> Add More</span>
                                  </div>
                              </div>

                                <div class="form-group row">
                                  <label for="staticEmail" class="text-right col-sm-5 col-form-label font-weight-bold">  Assigned to <sup class="text-danger">*</sup></label>
                                  <div class="col-sm-7">
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content style" id="account" style="display: none">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">New Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
        <div class="modal-body">
            <form>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Account Name <span class="text-danger">*</span></label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Group">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Description  </label>
                </div>
                <div class="col-sm-6">
                  <textarea class="form-control" name="short_note"></textarea>
                </div>
              </div>
              </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Initial Balance <span class="text-danger">*</span></label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Group">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer border-top-0 modal-butn">
          <button type="button" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary">close</button>
          </div>
      </div>
      
      <div class="modal-content style" id="category" style="display:none">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">Expense Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
        <div class="modal-body">
            <form>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Expense Category</label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Expense Category">
                </div>
              </div>
            </div>
            <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1">Description  </label>
              </div>
              <div class="col-sm-6">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description">
              </div>
            </div>
          </div>
            
          </form>
        </div>
        <div class="modal-footer border-top-0 modal-butn">
          <button type="button" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary">close</button>
          </div>
      </div>
      
      <div class="modal-content style" id="paidby" style="display:none">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">Client list</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
        <div class="modal-body">
          <div class="card">
            <div class="tab">
                <div class="container">
                <button class="tablinks" onclick="openCity(event, 'general')">General</button>
                <button class="tablinks" onclick="openCity(event, 'contactdetails')">Contact Details</button>
                <button class="tablinks" onclick="openCity(event, 'web')">Web</button>
                <button class="tablinks" onclick="openCity(event, 'hosting')">Hosting</button>
              </div>
            </div>
            <div id="general" class="tabcontent">
                <form>
                <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Name <span class="text-danger">*</span> </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Email <span class="text-danger">*</span> </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company VAT </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Customer Group  </label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <select name="client_id" class="form-control select_box select2-hidden-accessible" style="width: 100%" required="" data-parsley-id="6" tabindex="-1" aria-hidden="true">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
                  </div>
                  <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Language  </label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <select name="client_id" class="form-control select_box select2-hidden-accessible" style="width: 100%" required="" data-parsley-id="6" tabindex="-1" aria-hidden="true">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
                  </div>
                  <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Currency </label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <select name="client_id" class="form-control select_box select2-hidden-accessible" style="width: 100%" required="" data-parsley-id="6" tabindex="-1" aria-hidden="true">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Short Note  </label>
                  </div>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="short_note"></textarea>
                  </div>
                </div>
                  </div>
              </form>
            </div>

            <div id="contactdetails" class="tabcontent">
              <form>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Phone</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Mobile </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Zip code </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div> 
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company City</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div> 
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Country</label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <select name="client_id" class="form-control select_box select2-hidden-accessible" style="width: 100%" required="" data-parsley-id="6" tabindex="-1" aria-hidden="true">
                        <option value="">India</option>
                      </select>
                    </div>
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Fax</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
                            <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Address </label>
                  </div>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="short_note"></textarea>
                  </div>
                </div>
                  </div>  
                            <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1"> Latitude( Google Map ) </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
                            <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Longitude( Google Map ) </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
                          </form>             
            </div>

            <div id="web" class="tabcontent">
               <form>
                <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Website</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Skype id</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Facebook URL</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Twitter URL</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Linkedin URL</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              </form>
            </div>
            
            <div id="hosting" class="tabcontent">
              <form>
                <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Hosting Company</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Hosting</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Username</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Password</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Port</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
          <div class="modal-footer border-top-0 modal-butn">
            <button type="button" class="btn btn-primary">Save</button>
          </div>
      </div>
      
      <div class="modal-content style" id="payment" style="display:none">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">Payment Method</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
        <div class="modal-body">
            <form>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Method Name</label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Method Name">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer border-top-0 modal-butn">
          <button type="button" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary">close</button>
          </div>
      </div>
      
    </div>
  </div>
<script type="text/javascript">
 $(document).ready(function(){
  $('.deleteimage').on('click',function(){
    var element=$(this);
     var deleteimage=$(this).attr('img_id');
     var imgString=$("#image_string").val();
     $.ajax({
      url:"<?=base_url('Transaction/deleteParticularImageFromArraydeposit')?>",
      type:"post",
      data:{imgIndex:deleteimage,imgString:imgString},

      success:function(response){
        // console.log(response)
        response=JSON.parse(response);
        if(response.code==1){
          element.parent().remove();
          $('#image_string').val(response.newString);
          // console.log("sdfsdf"+response.newString)
        }
      }
     })


  })

 })
</script>
    <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    </script>
  
  <script>
    $( function() {
    $( "#slider-range-min" ).slider({
      range: "min",
      value: 37,
      min: 1,
      max: 700,
      slide: function( event, ui ) {
      $( "#amount" ).val( "$" + ui.value );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range-min" ).slider( "value" ) );
    } );
  </script>
  
  <script>
    $( function() {
    $( "#datepicker" ).datepicker();
    } );
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

<script type="text/javascript">
    $(function () {
        $("#chkPassport2").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport2").show();
            } else {
                $("#dvPassport2").hide();
            }
        });
    });
</script>

<script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $("#dvPassport").hide();
  });
 
});
</script>

<script>
    $('.file-upload').file_upload();
</script>

<script>
  $( document ).ready(function() 
  {
    $('#general').css('display','block');
  })
</script>

<script>
$(document).ready(function(){
 
  $("#acount").click(function(){
   $("#payment").hide();
   $("#paidby").hide();
   $("#account").show();
   $("#category").hide();
   $('#exampleModal').modal('show');
  });
});
</script>

<script>
$(document).ready(function(){
 
  $("#catgry").click(function(){
   $("#payment").hide();
   $("#paidby").hide();
   $("#account").hide();
   $("#category").show();
   $('#exampleModal').modal('show');
  });
});
</script>

<script>
$(document).ready(function(){
 
  $("#paid").click(function(){
     $("#payment").hide();
   $("#paidby").show();
   $("#account").hide();
   $("#category").hide();
   $('#exampleModal').modal('show');
  });
});
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
<script>
$(document).ready(function(){
 
  $("#paymnt").click(function(){
     $("#payment").show();
   $("#paidby").hide();
   $("#account").hide();
   $("#category").hide();
   $('#exampleModal').modal('show');
  });
});
</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script>