
<?php
  // print_r($client_invoices);
  // print_r($client_estimates);
  // print_r($clint_project);
  // print_r($client_contacts);
?>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<style type="text/css">
/*
.tab 
{
   overflow: hidden;
    background-color:white;
}*/

#con_list{
  display: none;
}

/*.tab button 
{
    background-color: #f5f3f3;
    float: left;
    border: 1px solid;
    outline: none;
    cursor: pointer;
    padding: 7px 20px;
    transition: 0.3s;
    font-size:12px;
}
*/
.tab button:hover 
{
   background-color: #ddd;
}
/*
.tab button.active 
{
   background-color: #ccc;
}*/

.tabcontent 
{
   width:100%;
   display: none;
   padding: 6px 12px;
   border:0px solid;
}
.inputDnD .form-control-file {
  position: relative;
  width: 100%;
  height: 100%;
  min-height: 6em;
  outline: none;
  visibility: hidden;
  cursor: pointer;
  background-color: gray;
  /*box-shadow: 0 0 5px solid gray;*/
}
.inputDnD .form-control-file:before {
  content: attr(data-title);
  position: absolute;
  top: 0.5em;
  left: 0;
  width: 100%;
  min-height: 5em;
  line-height: 2em;
  padding-top: 1.5em;
  opacity: 1;
  visibility: visible;
  text-align: center;
  border: 1px dashed  gray;
  padding: 35px;
  /*transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);*/
  overflow: hidden;
}
.inputDnD .form-control-file:hover:before {
  border-style: dashed;
 /* box-shadow: inset 0px 0px 0px 0.25em  gray;*/
}
@media only screen and (min-width: 576px){
  .modal-dialog {
      max-width: 623px;
      margin: 1.75rem auto;
  }
}
.tabs-left {
  border-bottom: none;
  border-right: 1px solid #ddd;
}
.chk_size{
  width: 20px;
  height: 20px;
}
.tabs-left>li {
  float: none;
 margin:0px;
 border-bottom:1px solid gray;
}
.tabs-left li a{
/*line-height: 1.42857143;*/
    border-bottom-color: #ddd;
    border-right-color: transparent;
   font-weight: 600;
    border: none;
    color: #000000db;
    border-radius: 0px;
    margin: 0px;
    position: relative;
    display: block;
    padding: 10px 15px;
}
.tabs-left li a:hover{
    border-bottom-color: #ddd;
    border-right-color: transparent;
    /*line-height: 1.42857143;*/
    color: white;
    background: #f90;
    border: none;
    text-decoration: none;
    border-radius: 0px;
    margin: 0px;
    position: relative;
    display: block;
    padding: 10px 15px;
}
.tabs-left>li.active>a,
.tabs-left>li.active>a:focus {
    border-bottom-color: #ddd;
    border-right-color: transparent;
   line-height: 1.42857143;
 color: white;
    background: #f90;
    border: none;
    border-radius: 0px;
    text-decoration: none;
    margin: 0px;
    position: relative;
    display: block;
    padding: 10px 15px;
}
.nav-tabs>li>a:hover {
    /* margin-right: 2px; */
    /*line-height: 1.42857143;*/
    border: 1px solid transparent;
    /* border-radius: 4px 4px 0 0; */
}
.tabs-left>li.active>a::after{content: "";
    position: absolute;
    top: 10px;
    right: -10px;
    border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  
  border-left: 10px solid #f90;
    display: block;
    width: 0;}
</style>

<style type="text/css">
.upper_col i{
font-size: 35px;
}
.rigt_col span{
 /* font-size: 12px;*/
  color: gray;
}
</style>
 <div class="row mt-4 m-0">   
          <div class="col-md-3 ">
            <div class="card">
              <div class="row">
                <div class="col-md-5 p-0 upper_col">
                  <div class="bg-primary text-white text-center p-4">
                    <span><i class="far fa-money-bill-alt"></i></span>
                  </div>
                </div>
                <div class="col-md-7 p-0">
                    <div class="text-center p-2 rigt_col">
                          <h6 class="m-0">00.00</h6>
                          <span>Paid Amount</span><br>  
                          <a href="" >More Info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="card">
              <div class="row">
                <div class="col-md-5 p-0 upper_col">
                  <div class="bg-dark text-white text-center p-4">
                    <span><i class="fas fa-dollar-sign"></i></span>
                  </div>
                </div>
                <div class="col-md-7 p-0">
                    <div class="text-center p-2 rigt_col">
                          <h6 class="m-0">00.00</h6>
                          <span>Due Amount</span><br>  
                          <a href="" >More Info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="card">
              <div class="row">
                <div class="col-md-5 p-0 upper_col">
                  <div class="bg-success text-white text-center p-4">
                    <span><i class="fas fa-dollar-sign"></i></span>
                  </div>
                </div>
                <div class="col-md-7 p-0">
                    <div class="text-center p-2 rigt_col">
                          <h6 class="m-0">00.00</h6>
                          <span>Invoice Amount</span><br>  
                          <a href="" >More Info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="card">
              <div class="row">
                <div class="col-md-5 p-0 upper_col">
                  <div class="bg-danger text-white text-center p-4">
                    <span><i class="fas fa-dollar-sign"></i></span>
                  </div>
                </div>
                <div class="col-md-7 p-0">
                    <div class="text-center p-2 rigt_col">
                          <h6 class="m-0">00%</h6>
                          <span>Paid Percentage</span><br>  
                          <a href="" >More Info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
       </div>
    <div class="mb-5">
    <div class="row mt-4">
        <div class="col-sm-3">
           <div class="card shadow"  id="myDIV">
              <ul style="list-style:none" class="nav nav-tabs tabs-left sideways bg-white">
                <li class="w-100 side_br active">
                    <a href="#details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Details</a>
                </li>
               <!--  <li class="w-100 side_br">
                    <a href="#contacts" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Contacts</a>
                </li> -->
           
                <!-- <li class="w-100 side_br">
                    <a href="#notes" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Notes</a>
                </li> -->
               <!--  <li class="w-100 side_br">
                    <a href="#invoices" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Invoices</a>
                </li> -->
                <li class="w-100 side_br">
                    <a href="#payments" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Payments</a>
                </li>
              <!--   <li class="w-100 side_br">
                    <a href="#estimates" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Estimates</a>
                </li> -->

               <!--  <li class="w-100 side_br">
                    <a href="#proposals" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Proposals</a>
                </li> -->
                <!-- <li class="w-100 side_br">
                    <a href="#transaction" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Transactions</a>
                </li> -->
                 <li class="w-100 side_br">
                    <a href="#projects" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Projects</a>
                </li>
                <!-- <li class="w-100 side_br">
                    <a href="#tickets" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Tickets</a>
                </li> -->
                 <!-- <li class="w-100 side_br">
                    <a href="#bugs" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Bugs</a>
                </li> -->
              <!--   <li class="w-100 side_br">
                    <a href="#reminder" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Reminder</a>
                </li> -->
             <!--     <li class="w-100 side_br">
                    <a href="#file_manager" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> File Manager</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#maps" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Map</a>
                </li> -->
              </ul>
           </div>
        </div>

        <div class="col-md-9">
            <div class="tab-content">
                <!---------- Details------->
                <div class="tab-pane active" id="details">
                    <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">Company Name: <?=$client_details->name?></h6></div>
                            <div class="col-md-2 text-right"> 
                                <a href="" class="text-primary font-weight-bold " id="update"><i class="far fa-edit"></i> Edit</a>
                            </div>
                        </div>
                      <div class="line mt-2"></div>
                      <form id="update_client">
                      <div class="row">
                          <div class="col-sm-6">
                             <div class="">
                                 <h4 class="text-gray ml-3">Contact Details</h4>
                                <div class="row">
                                  <div class="col-md-4 text-right">
                                    <label class="">Name</label>
                                  </div>
                                  <div class="col-md-8 ">
                                    <span><input type="text" name="name" value="<?=$client_details->name?>" class="form-control"></span>
                                  </div>
                                </div>
<!--                                 <div class="row">
                                  <div class="col-md-4 text-right">
                                    <label class="">Contact Person</label>
                                  </div>
                                  <div class="col-md-8 ">
                                    <span><input type="text" name="primary_contact" value="<?=$client_details->name?>" class="form-control"></span>
                                  </div>
                                </div> -->
                                <div class="row">
                                  <div class="col-md-4 text-right">
                                    <label class="">Email</label>
                                  </div>
                                  <div class="col-md-8 ">
                                    <span><input type="text" name="email" value="<?=$client_details->email?>" class="form-control" readonly></span>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4 text-right">
                                    <label class="">City</label>
                                  </div>
                                  <div class="col-md-8 ">
                                    <span><input type="text" name="city" value="<?=$client_details->city?>" class="form-control" ></span>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4 text-right">
                                    <label class="">Zip code</label>
                                  </div>
                                  <div class="col-md-8 ">
                                    <span><input type="text" name="zipcode" value="<?=$client_details->zipcode?>" class="form-control" ></span>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-4 text-right">
                                  <label class="">Address</label>
                                </div>
                                <div class="col-md-8 ">
                                  <span><input type="text" name="address" value="<?=$client_details->address?>" class="form-control" ></span>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4 text-right">
                                <label class="">Phone</label>
                              </div>
                              <div class="col-md-8 ">
                                <span><input type="text" name="phone" value="<?=$client_details->phone?>" class="form-control" > </span>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4 text-right">
                                <label class="">Fax</label>
                              </div>
                              <div class="col-md-8 ">
                                <span><input type="text" name="fax" value="<?=$client_details->fax?>" class="form-control" > </span>
                              </div>
                            </div>
                            <input type="hidden" name="client_id" value="<?=$this->uri->segment(3)?>">

                            <div class="text-center">
                                <h4 class="text-gray">Received Amount</h4>
                                <h3 class="text-danger ">$00</h3> 
                            </div> 

                          </div>
                      </div>
                      <div class="text-center">
                         <div class="circular mx-auto" data-value='50'>
                              <span class="circular-left">
                                  <span class="circular-bar border-primary"></span>
                              </span>
                              <span class="circular-right">
                                   <span class="circular-bar border-primary"></span>
                              </span>
                              <div class="circular-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                <div class="h2 font-weight-bold">50<span class="small">%</span></div>
                              </div>
                            </div>
                            <br>
                            <button class="btn btn-primary" type="submit">Update</button>
                      </div>
                      </form>

                      <div class="row m-0 mt-4 bg-gray p-2 ">
                        <div class="col-md-4">Invoice Amount : <span class="bg-primary text-white rounded p-1">$ 00.00</span></div>
                        <div class="col-md-8 text-right text-danger">Invoice Amount : <span class="bg-danger text-white rounded p-1">$ 00.00</span></div>
                      </div>
                    </div>
                </div>

<script type="text/javascript">
       $(document).on('submit','#update_client',function(e){
        e.preventDefault();
        var formData= new FormData($(this)[0]);
        $.ajax({
            url:"<?=base_url()?>Client/update_client_ajax",
             type:"post",
             data:formData,
             contentType:false,
             processData:false,
             cache:false,
            success:function(response)
            {
              // console.log(response);
              var response=JSON.parse(response);
              if(response==1){
                //$("#profile-just").load(location.href + " #profile-just");
                swal("Client Updated Successfully", "Success", "success");
              }
              else{
                swal('OOPS', "Something Went Wrong!!", "error");
              }
            }
        });
       })

  $(function() {
   $(".circular").each(function() {
    var value = $(this).attr('data-value');
    var left = $(this).find('.circular-left .circular-bar');
    var right = $(this).find('.circular-right .circular-bar');

    if (value > 0) {
      if (value <= 50) {
        right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
      } else {
        right.css('transform', 'rotate(180deg)')
        left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
      }
    }
  })      

  function percentageToDegrees(percentage) {
    return percentage / 100 * 360
  }

});
</script>
                <!---------- Details End------->
<script>
  $(document).on("click","#update",function(){
    $(this).hide();
     $("#con_table").hide();
    $("#con_form").show();
    $("#con_list").show();
  })
  $(document).on("click","#con_list",function(){
    $(this).hide();
     $("#con_table").show();
    $("#con_form").hide();
    $("#update").show();
  })
</script>
                <!----------Contact Details------->
                <div class="tab-pane " id="contacts">
                  <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">Contacts</h6></div>
                            <div class="col-md-2 text-right"> 
                                <a href="javascript:void(0)" class="text-primary font-weight-bold new_contact " id="update"><i class="far fa-edit"></i> New Contact</a>
                                 <a href="javascript:void(0)" class="text-primary font-weight-bold new_contact " id="con_list"><i class="far fa-edit"></i> Return to List</a>
                            </div>
                        </div>
                      <div class="line mt-2"></div>
                      <div class="p-2" id="con_table">
                            <table id="example" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                       <th scope="col" class="fs1">Full Name</th>
                                       <th scope="col" class="fs1">Email</th>
                                       <th scope="col" class="fs1">Phone</th>
                                       <th scope="col" class="fs1">Mobile</th>
                                       <th scope="col" class="fs1">Skype ID</th>
                                       <th scope="col" class="fs1">Last login</th>
                                       <th scope="col" class="fs1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      foreach ($client_contacts as $contact) {
                                        # code...
                                        ?>
                                          <tr>
                                             <td scope="col" class="fs1"><?=$contact->fullname?></td>
                                             <td scope="col" class="fs1"><?=$contact->email?></td>
                                             <td scope="col" class="fs1"><?=$contact->phone?></td>
                                             <td scope="col" class="fs1"><?=$contact->mobile?></td>
                                             <td scope="col" class="fs1"><?=$contact->skype?></td>
                                             <td scope="col" class="fs1"><?=$contact->last_login?></td>
                                             <td scope="col" class="fs1">Action</td>
                                          </tr>
                                        <?php
                                      }

                                    ?>
                                </tbody>
                            </table>
                      </div>
                      <div class="p-2" id="con_form" style="display: none">
                        <form method="" action="">
                        <div class="row">
                          <div class="col-md-7">
                                <div class="row form-group">
                                  <label class="col-md-4 text-right">Full Name <sup class="text-danger">*</sup></label>
                                  <div class="col-md-8">
                                    <input type="text" name="" placeholder="Full Name" class="form-control">
                                  </div>
                                </div>
                                <div class="row form-group">
                                  <label class="col-md-4 text-right">Email<sup class="text-danger">*</sup></label>
                                  <div class="col-md-8">
                                    <input type="email" name="" placeholder="Email" class="form-control">
                                  </div>
                                </div>
                                <div class="row form-group">
                                  <label class="col-md-4 text-right">Phone </label>
                                  <div class="col-md-8">
                                    <input type="tel" name="" placeholder="Phone" maxlength="10" minlength="9" class="form-control">
                                  </div>
                                </div>
                                
                                <div class="row form-group">
                                  <label class="col-md-4 text-right">Mobile <sup class="text-danger">*</sup></label>
                                  <div class="col-md-8">
                                    <input type="tel" name="" placeholder="Full Name"  maxlength="10" minlength="9" class="form-control">
                                  </div>
                                </div>
                               
                                <div class="row form-group">
                                  <label class="col-md-4 text-right">Skype ID <sup class="text-danger">*</sup></label>
                                  <div class="col-md-8">
                                    <input type="text" name="" placeholder="Skype ID" class="form-control">
                                  </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-4 text-right">Language <sup class="text-danger">*</sup></label>
                                    <div class="col-md-8">
                                    <select name="" class="form-control">
                                  
                                      <option value="English">English</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-4 text-right">Locale <sup class="text-danger">*</sup></label>
                                    <div class="col-md-8">
                                      <select name="" class="form-control">
                                      <option value="English">English</option>
                                    </select>
                                  </div>
                                </div>
                                 <div class="row form-group">
                                    <label class="col-md-4 text-right">Direction <sup class="text-danger">*</sup></label>
                                    <div class="col-md-8">
                                      <select name="" class="form-control">
                                      <option value="LTR">LTR</option>
                                      <option value="RTL">RTL</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row form-group">
                                  <label class="col-md-4 text-right">Username <sup class="text-danger">*</sup></label>
                                  <div class="col-md-8">
                                    <input type="text" name="" placeholder="Username" class="form-control">
                                  </div>
                                </div>
                                <div class="row form-group">
                                  <label class="col-md-4 text-right">Password <sup class="text-danger">*</sup></label>
                                  <div class="col-md-8">
                                    <input type="password" name="" placeholder="Password" class="form-control">
                                  </div>
                                </div>
                                <div class="row form-group">
                                  <label class="col-md-4 text-right">Confirm Password <sup class="text-danger">*</sup></label>
                                  <div class="col-md-8">
                                    <input type="password" name="" placeholder="Confirm Password" class="form-control">
                                  </div>
                                </div>
                                <div class="row form-group">
                                  <label class="col-md-4 text-right">Send Email Password</label>
                                  <div class="col-md-8">
                                    <input type="checkbox" name="" placeholder="" class="mt-n1 chk_size form-control">
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                               <h5>Permission</h5>
                               <div class="form-group">
                                  <label class="col-md-6 text-right">Dashboard</label>
                                  <input type="checkbox" name="" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                               </div>
                               <div class="form-group">
                                  <label class="col-md-6 text-right">File Manager</label>
                                  <input type="checkbox" name="" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                               </div>
                               <div class="form-group">
                                  <label class="col-md-6 text-right">Mailbox</label>
                                  <input type="checkbox" name="" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                               </div>
                               <div class="form-group">
                                  <label class="col-md-6 text-right">Projects</label>
                                  <input type="checkbox" name="" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                               </div>
                               <!-- <div class="form-group">
                                  <label class="col-md-6 text-right">Bugs</label>
                                  <input type="checkbox" name="" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                               </div> -->
                               <div class="form-group">
                                  <label class="col-md-6 text-right">Invoices</label>
                                  <input type="checkbox" name="" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                               </div>
                               <div class="form-group">
                                  <label class="col-md-6 text-right">Refund Item</label>
                                  <input type="checkbox" name="" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                               </div>
                               <div class="form-group">
                                  <label class="col-md-6 text-right">Estimates</label>
                                  <input type="checkbox" name="" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                               </div>
                               <div class="form-group">
                                  <label class="col-md-6 text-right">Payments</label>
                                  <input type="checkbox" name="" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                               </div>
                               <div class="form-group">
                                  <label class="col-md-6 text-right">Proposals</label>
                                  <input type="checkbox" name="" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                               </div>
                               <!-- <div class="form-group">
                                  <label class="col-md-6 text-right">Tickets</label>
                                  <input type="checkbox" name="" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                               </div> -->
                               <div class="form-group">
                                  <label class="col-md-6 text-right">Quotations</label>
                                  <input type="checkbox" name="" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                               </div>
                               <div class="form-group">
                                  <label class="col-md-6 text-right">Users</label>
                                  <input type="checkbox" name="" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                               </div>
                               <div class="form-group">
                                  <label class="col-md-6 text-right">Settings</label>
                                  <input type="checkbox" name="" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                               </div>
                               <div class="form-group">
                                  <label class="col-md-6 text-right">Private Chat</label>
                                  <input type="checkbox" name="" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                               </div>
                               <div class="form-group">
                                  <label class="col-md-6 text-right">Knowledge Base</label>
                                  <input type="checkbox" name="" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                               </div>
                            </div>
                          </div>
                        </form>  
                      </div>
                    </div>
                </div>
                <!----------Contact Details-End ------>

                <!----------Notes ------>
                <div class="tab-pane " id="notes">
                    <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">Notes</h6></div>
                            <div class="col-md-2 text-right"> 
                                <span class="text-primary font-weight-bold pointer" id="new_notes">New Notes</span>
                            </div>
                        </div>
                      <div class="line mt-2"></div>
                      <div class="p-2">
                        <div style="display: none" class="mb-4" id="notes_togle">
                          <form action="" method="POST">
                            <textarea name="editor" rows="5" id="editor" name=""> </textarea>
                            <div class="text-right">
                              <button class="btn btn-info mt-2" type="submit">Save</button>
                            </div>
                          </form>
                        </div>

                            <table class="table table-striped border ">
                                <thead>
                                    <tr>
                                       <th scope="col" class="fs1">Description</th>
                                       <th scope="col" class="fs1">Added by</th>
                                       <th scope="col" class="fs1">Date</th>
                                       <th scope="col" class="fs1">Action</th>
                                  
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>a</td>
                                      <td>s</td>
                                      <td>d</td>
                                      <td>f</td>
                                    
                                    </tr>
                                </tbody>
                            </table>
                      </div>
                    </div>
                </div>
                <script>
                  $(document).on("click","#new_notes",function(){
                    $("#notes_togle").slideToggle("slow");
                  })
                </script>
                <!----------Notes End ------>

               <!----------Invoices Details------->
                <div class="tab-pane " id="invoices">
                     <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">Invoices</h6></div>
                            <div class="col-md-2 text-right"> 
                                <a  href="" class="text-white bg-primary font-weight-bold px-1">New Invoice</a>
                            </div>
                        </div>
                      <div class="line mt-2"></div>
                      <div class="p-2">
                            <table class="display nowrap alldatatable" style="width:100%">
                                <thead>
                                    <tr>
                                       <th scope="col" class="fs1">Ref No</th>
                                       <th scope="col" class="fs1">Date Issued</th>
                                       <th scope="col" class="fs1">Due Date</th>
                                       <th scope="col" class="fs1">Amount</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                            //                            setlocale(LC_ALL, config_item('locale') . ".UTF-8");
                                  $total_invoice = 0;
                                foreach ($client_invoices as $key => $invoice) {
                                    $total_invoice += $this->invoice_model->invoice_payable($invoice->invoices_id);
                                    ?>
                                    <tr>
                                        <td><a class="text-info"
                                               href="<?= base_url() ?>admin/invoice/manage_invoice/invoice_details/<?= $invoice->invoices_id ?>"><?= $invoice->reference_no ?></a>
                                        </td>
                                        <td><?= strftime(config_item('date_format'), strtotime($invoice->date_saved)); ?> </td>
                                        <td><?= strftime(config_item('date_format'), strtotime($invoice->due_date)); ?> </td>
                                        <td>
                                            <?= display_money($this->invoice_model->invoice_payable($invoice->invoices_id), $cur); ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            
                            ?>
                                </tbody>
                            </table>
                           
                      </div>
                    </div>
                </div>
                <!----------Invoices Details-End ------>

                <!----------Payments------->
                <div class="tab-pane " id="payments">
                   <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">Payments</h6></div>
                            <div class="col-md-2 text-right"> 
                                <!-- <span class="text-primary font-weight-bold " data-toggle="modal" data-target="#bankModal" id="update">Zip Payment</span> -->
                            </div>
                        </div>
                      <div class="line mt-2"></div>
                      <div class="p-2">
                           <table class="table table-striped border ">
                                <thead>
                                    <tr>
                                       <th scope="col" class="fs1">Payment Date</th>
                                       <th scope="col" class="fs1">Invoice Date</th>
                                       <th scope="col" class="fs1">Invoice</th>
                                       <th scope="col" class="fs1">Amount</th>
                                       <th scope="col" class="fs1">Payment Method</th>
                                       <th scope="col" class="fs1">Action</th>
                                  
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $total_amount = 0;
                                foreach ($recently_paid as $key => $v_paid) {
                                    $invoice_info = $this->db->where(array('invoices_id' => $v_paid->invoices_id))->get('tbl_invoices')->row();
                                    $payment_method = $this->db->where(array('payment_methods_id' => $v_paid->payment_method))->get('tbl_payment_methods')->row();

                                    if ($v_paid->payment_method == '1') {
                                        $label = 'success';
                                    } elseif ($v_paid->payment_method == '2') {
                                        $label = 'danger';
                                    } else {
                                        $label = 'dark';
                                    }
                                    $total_amount += $v_paid->amount;
                                    ?>
                                    <tr>
                                        <td>
                                            <a href="<?= base_url() ?>admin/invoice/manage_invoice/payments_details/<?= $v_paid->payments_id ?>"> <?= strftime(config_item('date_format'), strtotime($v_paid->payment_date)); ?></a>
                                        </td>
                                        <td><?= strftime(config_item('date_format'), strtotime($invoice_info->date_saved)) ?></td>
                                        <td><a class="text-info"
                                               href="<?= base_url() ?>admin/invoice/manage_invoice/invoice_details/<?= $v_paid->invoices_id ?>"><?= $invoice_info->reference_no; ?></a>
                                        </td>
                                        <?php $currency = $this->invoice_model->client_currency_sambol($invoice_info->client_id); ?>
                                        <td><?= display_money($v_paid->amount, $currency->symbol) ?></td>
                                        <td><span
                                                    class="label label-<?= $label ?>"><?= !empty($payment_method->method_name) ? $payment_method->method_name : '-'; ?></span>
                                        </td>
                                        <td>
                                            <?= btn_edit('admin/invoice/all_payments/' . $v_paid->payments_id) ?>
                                            <?= btn_view('admin/invoice/manage_invoice/payments_details/' . $v_paid->payments_id) ?>
                                            <?= btn_delete('admin/invoice/delete/delete_payment/' . $v_paid->payments_id) ?>
                                            <a data-toggle="tooltip" data-placement="top"
                                               href="<?= base_url() ?>admin/invoice/send_payment/<?= $v_paid->payments_id . '/' . $v_paid->amount ?>"
                                               title="<?= lang('send_email') ?>"
                                               class="btn btn-xs btn-success">
                                                <i class="fa fa-envelope"></i> </a>
                                        </td>
                                    </tr>

                                    <?php
                                    }
                                
                                ?>
                                </tbody>
                            </table>    
                      </div>
                      <div class="row m-0 mt-4 bg-gray p-2 ">
                        <div class="col-md-4">Paid Amount : <span class="bg-primary text-white rounded p-1">$ 00.00</span></div>
                      
                      </div>
                    </div>
                </div>
                <!----------Payments End ------>

                 <!----------Estimates ------>
                    <div class="tab-pane " id="estimates">
                      <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">Estimates</h6></div>
                            <div class="col-md-2 text-right"> 
                                <a href="" class="bg-primary font-weight-bold px-1 text-white" >New Estimate</a>
                            </div>
                        </div>
                        <div class="line mt-2"></div>
                        <div class="p-2">
                             <table class="table table-striped border ">
                                  <thead>
                                      <tr>
                                         <th scope="col" class="fs1">Ref No</th>
                                         <th scope="col" class="fs1">Date Issued</th>
                                         <th scope="col" class="fs1">Due Date</th>
                                         <th scope="col" class="fs1">Amount</th>
                                     
                                    
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                        <td>a</td>
                                        <td>s</td>
                                        <td>d</td>
                                        <td>f</td>
                                      
                                      </tr>
                                  </tbody>
                              </table>    
                        </div>
                        <div class="row m-0 mt-4 bg-gray p-2 ">
                          <div class="col-md-4">Paid Amount : <span class="bg-primary text-white rounded p-1">$ 00.00</span></div>
                        
                        </div>
                      </div>
                    </div>
                  <!----------Estimates End ------>

                  <!----------All Proposals fund ------>
                    <div class="tab-pane  " id="proposals">
                      <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">All Proposals</h6></div>
                            <div class="col-md-2 text-right"> 
                                <a href="" class="bg-primary font-weight-bold px-1 text-white" >New Proposals</a>
                            </div>
                        </div>
                        <div class="line mt-2"></div>
                        <div class="p-2">
                             <table class="table table-striped border ">
                                  <thead>
                                      <tr>
                                         <th scope="col" class="fs1">Proposal #</th>
                                         <th scope="col" class="fs1">Proposals date</th>
                                         <th scope="col" class="fs1">Expired date</th>
                                         <th scope="col" class="fs1">Status</th>
                                         <th scope="col" class="fs1">Action</th>
                                    
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                        <td>a</td>
                                        <td>s</td>
                                        <td>d</td>
                                        <td>f</td>
                                        <td>f</td>
                                      </tr>
                                  </tbody>
                              </table>    
                        </div>
                        <div class="row m-0 mt-4 bg-gray p-2 ">
                          <div class="col-md-4">Paid Amount : <span class="bg-primary text-white rounded p-1">$ 00.00</span></div>
                         
                        </div>
                      </div> 
                    </div>
                  <!----------Proposals End ------>

                  <!----------Transaction------>
                    <div class="tab-pane " id="transaction">
                      <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">Transaction</h6></div>
                            <div class="col-md-2 text-right"> 
                                <!-- <a href="" class="bg-primary font-weight-bold px-1 text-white" >New Proposals</a> -->
                            </div>
                        </div>
                        <div class="line mt-2"></div>
                        <div class="p-2">
                             <table class="table table-striped border ">
                                  <thead>
                                      <tr>
                                         <th scope="col" class="fs1">Date</th>
                                         <th scope="col" class="fs1">Accounts</th>
                                         <th scope="col" class="fs1">Type</th>
                                         <th scope="col" class="fs1">Amount</th>
                                         <th scope="col" class="fs1">Action</th>
                                    
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                        <td>a</td>
                                        <td>s</td>
                                        <td>d</td>
                                        <td>f</td>
                                        <td>f</td>
                                      </tr>
                                  </tbody>
                              </table>    
                        </div>
                        <div class="row m-0 mt-4 bg-gray p-2 ">
                          <div class="col-md-4">Total Income : <span class="bg-primary text-white rounded p-1">$ 00.00</span></div>
                         <div class="col-md-8 text-right text-danger">Total Expense : <span class="bg-danger text-white rounded p-1">$ 00.00</span></div>
                        </div>
                      </div>
                    </div>
                  <!----------Transaction End ------>

                  <!----------Projects ------>
                    <div class="tab-pane " id="projects">
                      <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">Projects</h6></div>
                            <div class="col-md-2 text-right"> 
                                <span class="text-primary font-weight-bold pointer" >New Projects</span>
                            </div>
                        </div>
                        <div class="line mt-2"></div>
                        <div class="p-2">
                             <table class="table table-striped border ">
                                  <thead>
                                      <tr>
                                         <th scope="col" class="fs1">Project Name</th>
                                         <th scope="col" class="fs1">End Date</th>
                                         <th scope="col" class="fs1">Status</th>
                                    
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      foreach ($clint_project as $project) {
                                        // print_r($project);
                                        ?>
                                          <tr>
                                            <td><?=$project['project_name']?></td>
                                            <td><?=$project['end_date']?></td>
                                            <td><?=$project['project_status']?></td>
                                          </tr>
                                        <?php
                                      }

                                    ?>
                                      
                                  </tbody>
                              </table>    
                        </div>
                       
                      </div>  
                    </div>
                  <!----------Projects End ------>

                  <!----------Tickets ------>
                    <div class="tab-pane " id="tickets">
                      <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">Tickets</h6></div>
                            <div class="col-md-2 text-right"> 
                                <span class="text-primary font-weight-bold pointer" >New Tickets</span>
                            </div>
                        </div>
                        <div class="line mt-2"></div>
                        <div class="p-2">
                             <table class="table table-striped border ">
                                  <thead>
                                      <tr>
                                        <th scope="col" class="fs1">Subject </th>
                                        <th scope="col" class="fs1"> Date</th>
                                        <th scope="col" class="fs1"> Reporter</th>
                                        <th scope="col" class="fs1">Status</th>
                                        <th scope="col" class="fs1"> Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                        <td>a</td>
                                        <td>s</td>
                                        <td>d</td>
                                        <td>s</td>
                                        <td>d</td>
                                      </tr>
                                  </tbody>
                              </table>    
                        </div>
                      </div>  
                    </div>
                  <!----------Tickets End ------>

                  <!----------Bugs ------>
                    <div class="tab-pane " id="bugs">
                      <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">Bugs</h6></div>
                            <div class="col-md-2 text-right"> 
                                <span class="text-primary font-weight-bold pointer" >New Bugs</span>
                            </div>
                        </div>
                        <div class="line mt-2"></div>
                        <div class="p-2">
                             <table class="table table-striped border ">
                                  <thead>
                                      <tr>
                                        <th scope="col" class="fs1">Bug Title </th>
                                        <th scope="col" class="fs1">Status</th>
                                        <th scope="col" class="fs1">Priority</th>
                                        <th scope="col" class="fs1">Reporter</th>
                                        <th scope="col" class="fs1">Assigned To</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                        <td>a</td>
                                        <td>s</td>
                                        <td>d</td>
                                        <td>s</td>
                                        <td>d</td>
                                      </tr>
                                  </tbody>
                              </table>    
                        </div>
                      </div>  
                    </div>
                  <!----------Bugs End ------>

                  <!----------Reminder ------>
                    <div class="tab-pane " id="reminder">
                         <div class="card shadow p-3 mt-4">
                            <div class="row">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold ">Bugs Reports</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class=" p-2">
                              <div class="tab">
                                <div class="offset-3 col-md-9 tabsb">
                                  <button class="tablinks active" onclick="openCity(event, 'reminderList')">Reminder List</button>
                                  <button class="tablinks" onclick="openCity(event, 'setReminder')">Set Reminder</button>
                                </div>
                              </div>
                            
                                <div id="reminderList" class="tabcontent active">
                                   <table class="table table-striped border ">
                                        <thead>
                                            <tr>
                                              <th scope="col" class="fs1">Bug Title </th>
                                              <th scope="col" class="fs1">Status</th>
                                              <th scope="col" class="fs1">Priority</th>
                                              <th scope="col" class="fs1">Reporter</th>
                                              <th scope="col" class="fs1">Assigned To</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <td>a</td>
                                              <td>s</td>
                                              <td>d</td>
                                              <td>s</td>
                                              <td>d</td>
                                            </tr>
                                        </tbody>
                                    </table>    
                                </div>
                                <div id="setReminder" class="mt-3 tabcontent">
                                  <form  method="post" action="">
                                    <div class="form-group row">
                                      <label class="col-md-3 text-right">Date to be notified<sup class="text-danger">*</sup></label>
                                       <div class="col-sm-7">
                                          <input type="number" class="form-control" name="compPhone" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-md-3 text-right">Description</label>
                                       <div class="col-sm-7">
                                          <textarea rows="4" class="form-control" name=""></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                      <label class="col-md-4 text-right">Set Reminder To <sup class="text-danger">*</sup></label>
                                      <div class="col-md-8">
                                        <select name="" id="cust_grp" class="form-control">
                                          <option value="">Adminko</option>
                                          <option value="">RTL</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="text-center">
                                      <input type="checkbox" class="form-control chk_size" name="" >&nbsp;
                                      <label class=" ">Send also an email for this reminder</label>
                                    </div>
                                     <div class="text-center">
                                      <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                  </form>
                                </div>
                                
                            </div>
                           
                        </div>
                    </div>
                    <script type="text/javascript">
                       $(document).ready(function() {
                           $("#cust_grp").select2(); 
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
                            $( document ).ready(function() 
                            {
                              $('#reminderList').css('display','block');
                            })
                        </script>
                  <!----------Reminder End ------>

                   <!----------File Manager ------>
          <!--           <div class="tab-pane " id="file_manager">
                         <div class="card shadow p-3 mt-4">
                            <div class="row">
                                <div class="col-sm-12">
                                   <h6 class="font-weight-bold ">Bugs Reports</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="row p-1">
                                <div id="bugschartContainer" style="height: 370px; width: 100%;"></div>
                            </div>
                        </div>
                    </div> -->
                  <!----------File Manager End ------>

                  <!----------Maps ------>
               <!--      <div class="tab-pane  " id="maps">
                            
                    </div> -->
                  <!----------Maps End ------>
            </div>
        </div>
    </div>    
</div>    
       

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("bugschartContainer", {
    theme: "light2",
    animationEnabled: true,
    
    data: [{
        type: "pie",
        indexLabelFontSize: 18,
        radius: 80,
        indexLabel: "{label} - {y}",
        yValueFormatString: "###0.0\"%\"",
        click: explodePie,
        dataPoints: [
            { y: 54.1,  },
            { y: 21, },
            { y: 24.5,  },
            
        ]
    }]
});
chart.render();

function explodePie(e) {
    for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
        if(i !== e.dataPointIndex)
            e.dataSeries.dataPoints[i].exploded = false;
    }
}
 
}
</script>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("projectchartContainer", {
    animationEnabled: true,
    
    data: [{
        type: "pie",
        startAngle: 240,
        yValueFormatString: "##0.00\"%\"",
        indexLabel: "{label} {y}",
        dataPoints: [
            {y: 100,},
            
        ]
    }]
});
chart.render();

}
</script>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    theme: "light2",
    animationEnabled: true,
    
    data: [{
        type: "pie",
        indexLabelFontSize: 18,
        radius: 80,
        indexLabel: "{label} - {y}",
        yValueFormatString: "###0.0\"%\"",
        click: explodePie,
        dataPoints: [
            { y: 42,  },
            { y: 21, },
            { y: 24.5,  },
            { y: 9, },
            { y: 3.1,  }
        ]
    }]
});
chart.render();

function explodePie(e) {
    for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
        if(i !== e.dataPointIndex)
            e.dataSeries.dataPoints[i].exploded = false;
    }
}
 
}
</script>     
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>   

   <script type="text/javascript">
  $(document).on("click",".side_br",function(){
    $(".side_br").removeClass("active");
    $(this).addClass("active");
  })
</script> 
<script>
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("back");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
      });
    }
</script>


    
<script>
    $(document).ready(function(){
         
          $("#reset").click(function(){
             $("#currency").show();
             $("#account").hide();
             $('#exampleModal').modal('show');
          });
        });
</script>

<script>
    $(document).ready(function(){
     
      $("#update").click(function(){
         $("#currency").hide();
         $("#account").show();
         $('#exampleModal').modal('show');
      });
    });
</script>

<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>

<script>
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
</script>

<script>
    $(document).ready(function(){
      $("#update").click(function(){
         $("#currency").show();
         $('#exampleModal').modal('show');
      });
    });
</script>


<script>
    $(document).ready(function(){
      $("#update").click(function(){
         $("#currency").show();
         $('#exampleModal').modal('show');
      });
    });
</script>
