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
                <ul class="nav nav-tabs nav-justified md-tabs indigo col-md-5" id="myTabJust" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
                      aria-selected="true">All Expense</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                      aria-selected="false">New Expense</a>
                  </li>
                 <!--  <li class="nav-item ">
                  <a class="nav-link" id="import_project" data-toggle="tab" href="#imp_project" role="tab" aria-controls="imp_project" aria-selected="false">Import Expense</a>
                  </li> -->
                </ul>
                <div class="tab-content card pt-5" id="myTabContentJust">
                  <div class="tab-pane fade show active px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

                   <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                               
                                <th>Name/Title</th>
                                <th>Date</th>
                                <th>Account Name</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Attachment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                                foreach($All_expense_Data as $AED)
                                {
                                    //  print_r($AED);
                                ?>
                            <tr>
                               
                              <td><a href="<?=base_url('Transaction/Expense_Modal_Detailss/').$AED->transactions_id?>"  transactions_id="<?=$AED->transactions_id?>" class="Expense_Section "data-toggle="modal" data-target="#expensesectiondetails"><?=$AED->transname?></a></td>
                                <td><?=$AED->date?></td>
                                <td><?=$AED->accountholdername?></td>
                               <td><?=$AED->amount?></td>
                               <?php
                               if($AED->status=='non_approved')
                               {?>
                               <td><span class="btn-danger" style="width:1%;height:100%;">Non Approved</span></td>
                               <?php
                               }
                               elseif($AED->status=='paid')
                               {?> 
                                 <td><span class="btn-success">Paid</span></td>
                               <?php
                               }
                               else
                               {?>
                                   <td><span class="" style="width:1%;height:100%;">UnPaid</span></td>
                                <?php
                               }
                               ?>
                              
                               <td ><a href="<?=base_url('uploads/expense/').$AED->attachement?>"  download>Download</a></td>
                           
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
                                     <a href="<?=base_url('Transaction/Edit_Expense/').$AED->transactions_id?>" class="bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                      <?php }
                                         else
                                         {
                                          ?>
                                          <a href="#" style="visibility: hidden" class="bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                          <?php
                                          }
                                         if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                          {?>

                                     
                                      <a href="javascript:void(0)" transactions_id="<?=$AED->transactions_id?>" class="deletettransaction"><span class="bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>
                                      <?php }
                                         else
                                         {
                                          ?>
                                           <a href="javascript:void(0)" transactions_id=""style="visibility: hidden"><span class="bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>
                                    <!--  <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                    -->
                                    
                                         <?php
                                          }

                                        }
                                      }?>

                                    </div>
                                </td>
                               
                            </tr>
                             <?php
                                }?>
                        </tbody>
                        <!--<tfoot>-->
                        <!--   <tr>-->
                               
                        <!--        <th>Name/Title</th>-->
                        <!--        <th>Date</th>-->
                        <!--        <th>Account Name</th>-->
                        <!--        <th>Ammount</th>-->
                        <!--        <th>Status</th>-->
                        <!--        <th>Attachment</th>-->
                        <!--        <th>Action</th>-->
                        <!--    </tr>-->
                        <!--</tfoot>-->
                    </table>
                  </div>
                  <div class="tab-pane fade px-4" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
      <div class="row">
                          
        <div class="offset-1 col-sm-8 cl-md-8 col-lg-8">
          <form id="addexpense" >
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Name/Title </label>
              </div>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="expense_title"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name/Title For Personal Use">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Accounts <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-8">
                <div class="input-group">
                      <select name="account_id" class="form-control" id="customer_group">
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
              <div class="col-sm-1">
                  <button type="button" id="acount" class="btn btn-light butn" title="New Accounts"><i class="fa fa-plus"></i></button>
              </div>
            </div>
          </div>
           <input class="usersBalance" type="hidden" name="account_total_balance">
           <?php
                        //print_r($this->session->logged_user);
                           $usersdetail=$this->session->logged_user;
                        //   $usersdetail[0]->user_id;
                        //   print_r($users_idforTransaction);
                           
                           ?>
           <input type="hidden" name="users_idforTransaction" value="<?=$usersdetail[0]->user_id?>">
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Date   </label>
              </div>
              <div class="col-sm-8">
                <div class='input-group date' id=''>
                    <input type='date' name="expensedate"class="form-control" />
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
                <textarea class="form-control" name="short_note"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Amount  <span class="text-danger">*</span></label>
               
                
              </div>
              <div class="col-sm-4">
                <input type="number" name="expenseamount"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                                  ?>
     <option value="<?=$ExCatData->expense_category_id?>"><?=$ExCatData         ->expense_category?></option>
                                          <?php   
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
                          ?>
                         <option value="<?=$ClientData->client_id?>"><?=$ClientData->name ?></option>
                          <?php   
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
                          ?>
                         <option value="<?=$MethodData->payment_methods_id?>"><?=$MethodData->method_name ?></option>
                          <?php   
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
                <input type="text" name="expensereference" value="" class="form-control" placeholder="e.g. Transection Id, Check No" name="estimate_hours" data-parsley-id="23">
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
                <label for="exampleInputEmail1">Permission<span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
                <div class="checkbox c-radio needsclick ">
                  <input type="radio" name="permission" value="all" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
              </div>
            </div>
          </div>
        
         
        
        </div>
    <!-- </div> -->
    <div class="row mt-3">
        <div class="offset-11 col-md-1">
         <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
     </form>
     
      </div>
            </div>
                  </div>
                 

                  </div>
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
            <?php
              if($this->session->flashdata('msg'))
              {
                echo '<div class="alert alert-info">'.$this->session->flashdata('msg').'</div>';
              }
            ?>
            <form action="<?=base_url('Transaction/AddNewAccount')?>" method="post">
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Account Name <span class="text-danger">*</span></label>
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="deposit_name"name="account_name" aria-describedby="emailHelp" placeholder="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Description  </label>
                </div>
                <div class="col-sm-6">
                  <textarea class="form-control" id="depo_desc"name="Description"></textarea>
                </div>
              </div>
              </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Initial Balance <span class="text-danger">*</span></label>
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="depo_balance"name="initial_balance" aria-describedby="emailHelp" placeholder="">
                </div>
              </div>
            </div>
          
        </div>
        <div class="modal-footer border-top-0 modal-butn">
          <button type="submit"  class="btn btn-primary">Save</button>
          <button type="reset" class="btn btn-secondary">close</button>
          </div>
          </form>
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
            <form action="<?=base_url('Transaction/AddNewExpensesCategory')?>" method="post">
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Expense Category</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="expenses_name"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Expense Category">
                </div>
              </div>
            </div>
            <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1">Description  </label>
              </div>
              <div class="col-sm-6">
                <input type="text" name="expense_description"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description">
              </div>
            </div>
          </div>
        <div class="modal-footer border-top-0 modal-butn">
          <button type="submit" class="btn btn-primary">Save</button>
          <button type="reset" class="btn btn-secondary">close</button>
          </div>
           </form>
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
            <form action="<?=base_url('Transaction/AddMethodName')?>" method="post">
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Method Name</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="method_name"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Method Name">
                </div>
              </div>
            </div>
          
        <div class="modal-footer border-top-0 modal-butn">
          <button type="submit" class="btn btn-primary">Save</button>
          <button type="reset" class="btn btn-secondary">close</button>
          </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  <!--strating of expense-->
  <div class="modal Expense_div" id="expensesectiondetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-style" >
        <div class="container-fluid">
        <div class="row mt-4">
          <div class="col-sm-12">
            <div class="row">
                <div class="col-md-10 col-9">
                   <h5 >Expense Details#<span id="reference"></span></h5>
                </div>
              <div class="col-md-2 col-2">
                   <button type="button" class="btn btn-primary"><span <i="" class="fa fa-file-pdf-o"></span></button>
                </div>
            </div>
            <div class="">
              <div class="line mt-2"></div>
              <form  id="expensemodalreset">
                <div class="row mt-5">
                  <div class="offset-1 col-md-11">
                    <div class="form-group">
                      <div class="row">
                        <div class="offset-1 col-sm-4 col-4">
                          <label for="exampleInputEmail1"><strong>Name/Title :</strong></label>
                        </div>
                        <div class="col-sm-7 col-7">
                          <label for="exampleInputEmail1"><span id="transname"></span></label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="offset-1 col-sm-4 col-4">
                          <label for="exampleInputEmail1"><strong>Date :</strong></label>
                        </div>
                        <div class="col-sm-7 col-7">
                          <label for="exampleInputEmail1"><span id="exdate"></span></label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="offset-1 col-sm-4 col-4">
                          <label for="exampleInputEmail1"><strong>Accounts :</strong></label>
                        </div>
                        <div class="col-sm-7 col-7">
                          <label for="exampleInputEmail1"><span id="account_name"></span></label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="offset-1 col-sm-4 col-4">
                          <label for="exampleInputEmail1"><strong>Amount :</strong></label>
                        </div>
                        <div class="col-sm-7 col-7">
                          <label for="exampleInputEmail1"><span id="transamount"></span></label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="offset-1 col-sm-4 col-4">
                          <label for="exampleInputEmail1"><strong>Category :</strong></label>
                        </div>
                        <div class="col-sm-7 col-7">
                          <label for="exampleInputEmail1"><span id="expense_name"></span></label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="offset-1 col-sm-4 col-4">
                          <label for="exampleInputEmail1"><strong>Paid By :</strong></label>
                        </div>
                        <div class="col-sm-7 col-7">
                          <label for="exampleInputEmail1"><span id="client_name"></span></label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class=" col-sm-5 col-5">
                          <label for="exampleInputEmail1"><strong>Payment Method :</strong></label>
                        </div>
                        <div class="col-sm-7 col-7">
                          <label for="exampleInputEmail1"><span id="paymethod"></span></label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="offset-1 col-sm-4 col-4">
                          <label for="exampleInputEmail1"><strong>Status :</strong></label>
                        </div>
                        <div class="col-sm-7 col-7">
                          <label for="exampleInputEmail1" class="bg-success p-1 text-white"><span id="transstatus"></span></label>
                        </div>
                      </div>
                    </div>
                                  
                    <div class="form-group">
                      <div class="row">
                        <div class="offset-1 col-sm-4 col-4">
                          <label for="exampleInputEmail1"><strong>Attachment :</strong></label>
                        </div>
                        <div class="col-sm-4 col-6">
                            <!--<?php echo base_url().'assets/uploads/expense/'.$myImages[$i]?>-->
                        <img style="width:6em;height:6em;" id="trans_image" src="" alt="" />
                        
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="offset-1 col-sm-4 col-4">
                          <label for="exampleInputEmail1"><strong>Notes :</strong></label>
                        </div>
                        <div class="col-sm-6 col-6 border w-100">
                          <label for="exampleInputEmail1"><span id="notes"></span></label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
            </div>
        
          </div>
        
        </div>
      </div>
    </div>
  </div>
</div>
  <!--ending of expense-->
  <script type="text/javascript">
      $("#addexpense").submit(function(e){
       e.preventDefault();
          var formData= new FormData($(this)[0]);
          // console.log(formData);
          $.ajax({
            url:"<?=base_url('Transaction/AddExpenseData')?>",
            type:"post",
             data:formData,
              // contentType: 'multipart/form-data',
              contentType:false,
             processData:false,
             cache:false,
            success:function(response)
            {
              var response=JSON.parse(response);
              console.log(response);
              if(response.status==1)
              {
                // $('#add_holiday').trigger("reset");
                swal("Expense!", " Added Successfully", "success");
                location.reload();
              }
              else if(response.status==2)
              {
               swal("OOPS", "File Not Be Empty", "error");
              }
              else{
                swal("OOPS", "Something Went Wrong", "error");
              }
            }
         });
    });</script>
  <script type="text/javascript">
  window.onload = function() {
  $(".Expense_div").hide();
};
        $(document).ready(function(){
          $('.Expense_Section').on('click',function(){ 
               var transactions_id=$(this).attr("transactions_id");
             
            //   alert(transactions_id);
            $.ajax({
            url:'<?=base_url('Transaction/Expense_Modal_Detailss')?>',
            type:"post",
            data:{transactions_id:transactions_id},
          // dataType:'JSON',
         
            success:function(response)
            {
                 
                    $(".Expense_div").show();
                    // $('#expensemodalreset')[0].reset();  
                    //  $(this).prev('span').remove();
                     $("#reference").html("");
                     $("#transname").html("");
                     $("#transname").html("");
                     $("#account_name").html("");
                     $("#exdate").html("");
                     $("#expense_name").html("");
                     $("#client_name").html("");
                     $("#paymethod").html("");
                     $("#notes").html("");
                      $("#transstatus").html("");
                       $("#transamount").html("");
                       $("#trans_image").html("");
                    // $(".Expense_div").empty();
                    // $("#reference").empty();
                    // $("#transname").empty(;
                    // $("#account_name").empty(;
                    // $("#exdate").empty();
                    // $("#expense_name").empty();
                    // $("#paidby").empty();
                    // $("#paymethod").empty();
                    // $("#notes").empty();
                    // $("#transstatus").empty();
                    // $("#transamount").empty();
                    // $("#reference").empty();
    
                response=JSON.parse(response);
                 console.log(response);
                var reference=response.data[0].reference;
                var transaction_name=response.data[0].transname;
                var accounts=response.data[0].accountholdername;
                 var transamount=response.data[0].transamount;
                var exdate=response.data[0].transactiondate;
                var expensecategory=response.data[0].expense_name;
                var paidby=response.data[0].clientname;
                var paymentmethod=response.data[0].method_name;
                var notes=response.data[0].notes;
                var trans_status=response.data[0].transaction_status;
                var trans_image='<?=base_url("./uploads/expense/")?>'+response.data[0].attachement;
                // alert(paidby);
                 $("#reference").append(reference);
                $("#transname").append(transaction_name);
                 $("#account_name").append(accounts);
                 $("#exdate").append(exdate);
                 $("#expense_name").append(expensecategory);
                 $("#client_name").append(paidby);
                 $("#paymethod").append(paymentmethod);
                 $("#notes").append(notes);
         $("#transstatus").append(trans_status);
          $("#transamount").append(transamount);
          $("#trans_image").attr('src',trans_image);
          $('#trans_image').attr('src',   trans_image  );
        //  $("#trans_image").append(trans_image);
            }              
        });
            
          });
        }); 
        
  </script>
 
      <script type="text/javascript">
        $(document).ready(function(){
          $('.deletettransaction').on('click',function(){ 
             var transactions_id=$(this).attr("transactions_id");
             // alert(owner_id);
           if(confirm("Are you Sure want to delete this record?") ==true)
            {       
            // alert(owner_id);         
                $.ajax({
                  url:"<?=base_url('Transaction/DeleteTransaction')?>",
                  type:"post",
                  data:{transactions_id:transactions_id},
                  success:function(response)
                  {   
                  response=JSON.parse(response);             
                     if (response==1)
                      {
                        swal("Expense", "Record Delete successfully", "success")
                   // alert('Record Delete successfully');
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

  <script type="text/javascript">
   $('.fetchusersbalance').on('click',function(){
        var user_id=$(this).attr('users_balance');
        //   alert(user_id);
        $.ajax({
            url:'<?=base_url('Transaction/fetchUserBalance')?>',
            type:"POST",
            data:{user_id:user_id},
        //   dataType:'JSON',
            success:function(response)
            {
              var response =JSON.parse(response);
                console.log(response.data);
        
                 var usersbalance =response.data[0].balance;
                 
                 $(".usersBalance").val(usersbalance);
                
                        
            }              
        });
    });
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
<script>
    $('#depo_newaccount').on('click',function(){
        var acc_name=$(this).val('#deposit_name')
        var acc_desc=$(this).val('#depo_desc');
        var acc_amoubt=$(this).val('#depo_balance');
        alert(acc_name);
        alert(acc_desc);
        alert(acc_amoubt);
        
    });
</script>
