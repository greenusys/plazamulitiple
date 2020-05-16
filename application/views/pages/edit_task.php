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

<!--  <div class="row mt-4 m-0">   
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
       </div> -->
    <div class="mb-5">
    <div class="row mt-4">
       <!--  <div class="col-sm-3">
           <div class="card shadow"  id="myDIV">
              <ul style="list-style:none" class="nav nav-tabs tabs-left sideways bg-white">
                <li class="w-100 side_br active">
                    <a href="#details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i>Task Details</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#contacts" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Comments</a>
                </li>
           
                <li class="w-100 side_br">
                    <a href="#notes" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Attachments</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#invoices" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Notes</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#payments" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Timesheet</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#estimates" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Sub Tasks</a>
                </li>

                <li class="w-100 side_br">
                    <a href="#proposals" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Activities</a>
                </li>
                
              </ul>
           </div>
        </div>
 -->
        <div class="col-md-12">
            <div class="tab-content">
                <!----------Task Details------->
               
                <?php foreach ($task_data as $task) {
                 ?>
                <div class="tab-pane active" id="details">
                    <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1 text-danger">Task Name: <?=$task['task_name']?></h6></div>
                           
                        </div>
                      <div class="line mt-2"></div>
                      <div class="row">
                          <div class="col-sm-6">
                             <div class="">
                              <div class="row form-group">
                                <label class="col-md-4 text-right">Task Status :</label>
                                <div class="col-md-8 d-flex">
                                  <?php
                                  if($task['task_status']=='completed')
                                  {
                                    ?>
                                  <span class="bg-success text-white p-1">completed</span>
                                  <?php
                                }
                                elseif ($task['task_status']=='not_started') {
                               ?>
                                <span class="bg-info text-white p-1">Not Started</span>
                               <?php }
                               elseif ($task['task_status']=='deferred') {
                               ?>
                                <span class="bg-danger text-white p-1">Deferred</span>
                               <?php }
                                else
                                {?>
                                   <span class="bg-warning text-white p-1">In Progress</span>
                                   <?php }
                                ?>
                                  <div class="dropdown ml-2">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                      Change 
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">Not Started</a>
                                      <a class="dropdown-item" href="#">In Progress</a>
                                      <a class="dropdown-item" href="#">Completed</a>
                                      <a class="dropdown-item" href="#">Deferred</a>
                                      <a class="dropdown-item" href="#">Waiting For Someone</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row form-group">
                                <label class="col-md-4 text-right">Start Date :</label>
                                <div class="col-md-8">
                                  <span class=""><?=$task['task_start_date']?></span>
                                </div>
                              </div>
                              <div class="row form-group">
                                <label class="col-md-4 text-right">Created By :</label>
                                <div class="col-md-8">
                                  <span class=""><?=$task['full_name']?></span>
                                </div>
                              </div>
                              <div class="row form-group">
                                <label class="col-md-4 text-right">Hourly Rate :</label>
                                <div class="col-md-8">
                                  <span class=""><?=$task['task_hour']?></span>
                                </div>
                              </div>
                              <div class="row form-group">
                                <label class="col-md-4 text-right">Billable :</label>
                                <div class="col-md-8">
                                 <!--  <span class="text-white bg-danger p-1"> -->
                                    <select class="form-control">
                                      <option value="0">Select</option>
                                      <option value="<?=$task['billable']?>" selected><?=$task['billable']?></option>
                                      <option value="No" >No</option>
                                    </select>
                                    <!-- </span> -->
                                </div>
                              </div>
                            
                             </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="">
                           <!--    <div class="row form-group">
                                <label class="col-md-4 text-right">Time Status :</label>
                                <div class="col-md-8 d-flex">
                                  <span class="bg-danger text-white p-1">Deferred</span>
                                  <div class="dropdown ml-2">
                                    <button  class="btn btn-success" ">
                                    Start Time
                                    </button>
                              
                                  </div>
                                </div>
                              </div> -->
                              <div class="row form-group">
                                <label class="col-md-4 text-right text-danger">Due Date :</label>
                                <div class="col-md-8">
                                  <span class=""><input type="date" value="<?=$task['due_date']?>" class="form-control"></span>
                                </div>
                              </div>
                              <div class="row form-group">
                                <label class="col-md-4 text-right">Created Date :</label>
                                <div class="col-md-8">
                                  <span class=""><input type="date" value="<?=$task['task_created_date']?>" class="form-control"></span>
                                </div>
                              </div>
                              <div class="row form-group">
                                <label class="col-md-4 text-right">Estimated Hour  :</label>
                                <div class="col-md-8">
                                  <span class=""><input type="text" value="<?=$task['task_hour']?>" class="form-control"></span>
                                </div>
                              </div>
                              <div class="row form-group">
                                <label class="col-md-4 text-right">Participants :</label>
                                <div class="col-md-8">
                                <?php
                                // print_r($task_data);
                                // foreach ($task_data[0]['assigned_to'] as $user_Data) 
                                //  {
                                  // print_r($user_Data);
                                  if(count($task_data[0]['assigned_to'])>0){
                                    foreach ($task_data[0]['assigned_to'] as $user) {
                                      if ($user=="Everyone") {
                                        echo "Everyone";
                                      }else{
                                          echo '<img src="'.base_url().$user->avatar.'"  width="20px" class="rounded-circle" alt="'.$user->fullname.'"  title ="'.$user->fullname.'">';
                                      }
                                    }
                                  
                                  }
                                    // if($newtask['assigned_to'][0]=='Everyone')
                                    // {
                                      ?>
                                    
                                     <!--  <span class=""><strong>Everyone <i class="fas fa-question-circle"></i></strong> &nbsp; &nbsp;<strong data-toggle="modal" data-target="#participantModal" class="text-primary"> -->
                                      <!--   <i class="fas fa-plus"></i> -->
                                      <!-- </strong></span> -->
                                   
                                    <?php
                                  // }
                                  // else
                                  // {
                                 
                                    //print_r($newtask['assigned_to'][0]);
                                    ?>
                                    <!-- <span class=""><strong><?=$newtask['assigned_to'][0]->avatar?> <i class="fas fa-question-circle"></i></strong> &nbsp; &nbsp;<strong data-toggle="modal" data-target="#participantModal" class="text-primary"> -->
                                    <!--   <i class="fas fa-plus"></i> -->
                                    <!-- </strong></span> -->
                                  <?php
                                  // }
                                // }

                              ?>
                               </div>
                              </div>
                            
                            </div>
                          </div>
                      </div>
                        <div class="row form-group ">
                          <label class="col-md-2 text-right">Completed :</label>
                          <div class="col-md-10 pr-5">
                             <div class="progress" style="height: 1.6rem;">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?=$task['task_progress']?>%">
                                  <?=$task['task_progress']?>%
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="text-center">
                            <!-- <ul class="timer">
                              <li>0<span> Hours</span></li>
                              <li class="dots">:</li>
                              <li>0<span> Minutes</span></li>
                              <li class="dots">:</li>
                              <li>10<span>Seconds</span></li>
                            </ul> -->
                            <span class="text-danger">
                              <strong>Task Description:</strong>
                              <hr>
                              <?=$task['task_description']?> 
                            </span>
                        </div>  
                    </div>
                </div>
                <?php
              }
              ?>

      <!-- Modal -->
<div class="modal fade" id="participantModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" method="post" action="">
            <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Assigned To <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
                <div class="checkbox c-radio needsclick">
                  <input type="radio" value="" name="everyone" id="everyone" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                </div>
                <div class="checkbox c-radio needsclick">
                  <input type="radio" value="" name="everyone" class="customize_permission"> Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                </div>
              </div>
            </div>
          </div>

           <div class="form-group dvPassport"  style="display: none">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Select Users<span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
                

                   <input type="checkbox" name="vehicle2" value="" class="chkPassport admind" > <strong class="badge btn-danger">Admin</strong>
                 <br>
                 <div class="row dvPassport"  id="dvPassport" style="display: none">
                    <div class="col-md-3">
                   <input type="checkbox" checked="" class="data" disabled="" name="vehicle1" value="View" > View
                  </div>
                  <div class="col-md-3">
                       <input type="checkbox" checked="" disabled="" class="data" name="vehicle1" value="Edit" > Edit
                  </div>
                  <div class="col-md-3">
                      <input type="checkbox" checked="" disabled="" class="data" name="vehicle1" value="Delete"> Delete
                  </div>
                 </div>
                
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>          
<script type="text/javascript">
    $(function () {
        $(".customize_permission").click(function () {
            if ($(this).is(":checked")) {
                $(".dvPassport").show();
            } else {
                $(".dvPassport").hide();
            }
        });
    });
</script>
<script type="text/javascript">
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
                <!----------Task Details End------->
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
                <!----------Comments ------->
                <div class="tab-pane " id="contacts">
                  <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">Comments</h6></div>
                            <div class="col-md-2 text-right"> 
                               <!--  <a href="javascript:void(0)" class="text-primary font-weight-bold new_contact " id="update"><i class="far fa-edit"></i> New Contact</a>
                                 <a href="javascript:void(0)" class="text-primary font-weight-bold new_contact " id="con_list"><i class="far fa-edit"></i> Return to List</a> -->
                            </div>
                        </div>
                      <div class="line mt-2"></div>
                      <div class="p-2 my-3" id="con_table">
                          <form class="" method="post" action="">
                           <div class="w-100"> 
                            <textarea class="w-100" cols="8" ></textarea></div>
                            <input class="form-control" type="file" name="">
                              <div class="mt-2"><button class="btn btn-info" > Post Comment</button></div>
                          </form>
                      </div>
                    </div>
                </div>
                <!----------Comments End ------>

                <!----------Attachment ------>
                <div class="tab-pane " id="notes">
                    <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">Attachment</h6></div>
                            <div class="col-md-2 text-right"> 
                                <span class="text-primary font-weight-bold pointer">New Attachment</span>
                            </div>
                        </div>
                      <div class="line mt-2"></div>
                      <div class="p-2">
                          
                      </div>
                    </div>
                </div>
               
                <!----------Attachment End ------>

               <!----------Notes------->
                <div class="tab-pane " id="invoices">
                     <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">Notes</h6></div>
                            <div class="col-md-2 text-right"> 
                                <a  href="" class="text-white bg-primary font-weight-bold px-1">New Invoice</a>
                            </div>
                        </div>
                      <div class="line mt-2"></div>
                      <div class="p-2">
                        <form class="" method="post" action="">
                            <textarea id="notes12" name="notes12" ></textarea>
                            <button class="btn btn-info">Update</button>
                        </form>
                      </div>
                    </div>
                </div>
                  <script>
                    CKEDITOR.replace( 'notes12' );
                </script>
                <!----------Notes End ------>

                <!----------Timesheet------->
                <div class="tab-pane " id="payments">
                   <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">Timesheet</h6></div>
                            <div class="col-md-2 text-right"> 
                                <!-- <span class="text-primary font-weight-bold " data-toggle="modal" data-target="#bankModal" id="update">Zip Payment</span> -->
                            </div>
                        </div>
                      <div class="line mt-2"></div>
                       <div class=" p-2">
                              <div class="tab">
                                <div class="offset-3 col-md-9 tabsb">
                                  <button class="tablinks active" onclick="openCity(event, 'timeSheet')">TimeSheet</button>
                                  <button class="tablinks" onclick="openCity(event, 'manualEntry')">Manual Entry</button>
                                </div>
                              </div>
                            
                                <div id="timeSheet" class="tabcontent active" style="display: block;">
                                   <table class="table table-striped border ">
                                        <thead>
                                            <tr>
                                              <th scope="col" class="fs1">User </th>
                                              <th scope="col" class="fs1">Start Time</th>
                                              <th scope="col" class="fs1">Stop Time</th>
                                              <th scope="col" class="fs1">Task Name</th>
                                              <th scope="col" class="fs1">Time Spend</th>
                                              <th scope="col" class="fs1">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <td>
                                                <img src="" class="w-25"> <strong>Adminko</strong>
                                              </td>
                                              <td><span class="p-1 text-white bg-success">02.20.2020</span></td>
                                              <td><span class="p-1 text-white  bg-danger">02.20.2020</span></td>
                                              <td>s</td>
                                              <td><span class="bg-primary text-white p-1 "><i class="far fa-edit"></i></span> <span class="bg-danger ml-2 text-white p-1"><i class="far fa-trash-alt"></i></span> </td>
                                            </tr>
                                        </tbody>
                                    </table>    
                                </div>
                                <div id="manualEntry" class="mt-3 tabcontent">
                                  <form  method="post" action="">
                                    <div class="form-group row">
                                      <label class=" ">Select Tasks<sup class="text-danger">*</sup></label>
                                       <div class="">
                                          <select name="" id="cust_grp" class="form-control">
                                            <option value="">Adminko</option>
                                            <option value="">RTL</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class=" row">
                                      <div class="col-md-8">
                                          <div class="w-100">
                                            <div class="row">
                                                <div class="col-md-6">
                                                  <div class="form-group">
                                                     <label class="">Start Date </label>
                                                    <div class='input-group date datetimepicker1'>
                                                      <input type='text' name="task_start_date" class="form-control" />
                                                      <span class="input-group-addon">
                                                          <span ><i class="fa fa-calendar"></i></span>
                                                      </span>
                                                    </div>
                                                  </div>

                                                   <div class="form-group">
                                                     <label class=" ">End Date </label>
                                                    <div class='input-group date datetimepicker1'>
                                                      <input type='text' name="task_start_date" class="form-control" />
                                                      <span class="input-group-addon">
                                                          <span ><i class="fa fa-calendar"></i></span>
                                                      </span>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-group">
                                                     <label class="">Start Time </label>
                                                     <div class='input-group date datetimepicker3' id='datetimepicker3'>
                                                        <input type='text' class="form-control" name="clock_In"/>
                                                        <span class="input-group-addon">
                                                            <span ><i class="fa fa-calendar"></i></span>
                                                        </span>
                                                    </div>
                                                  </div>
                                                  <div class="form-group">
                                                     <label class=" ">End Time </label>
                                                     <div class='input-group date datetimepicker3' id='datetimepicker3'>
                                                        <input type='text' class="form-control" name="clock_In"/>
                                                        <span class="input-group-addon">
                                                            <span ><i class="fa fa-calendar"></i></span>
                                                        </span>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="">
                                            <label>Reason for Edit <sup class="text-danger">*</sup></label>
                                            <textarea rows="5" class="form-control"></textarea>
                                          </div>
                                          <button class="btn btn-info mt-2">Updates</button>
                                      </div>  
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

   <script type="text/javascript">
  $(document).on("click",".side_br",function(){
    $(".side_br").removeClass("active");
    $(this).addClass("active");
  })
</script> 
                <!----------Timesheet End ------>

                 <!----------Sub Tasks ------>
                    <div class="tab-pane " id="estimates">
                      <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">All Sub Tasks</h6></div>
                            <div class="col-md-2 text-right"> 
                                <a href="" class="bg-primary font-weight-bold px-1 text-white" >New Sub Tasks</a>
                            </div>
                        </div>
                        <div class="line mt-2"></div>
                        <div class="p-2">
                             <table class="table table-striped border ">
                                  <thead>
                                      <tr>
                                         <th scope="col" class="fs1">Task Name</th>
                                         <th scope="col" class="fs1">Due Date </th>
                                         <th scope="col" class="fs1">Progress</th>
                                         <th scope="col" class="fs1">Status</th>
                                         <th scope="col" class="fs1">Change/View</th>
                                    
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
                  <!----------Sub Tasks End ------>

                  <!----------Activities fund ------>
                    <div class="tab-pane  " id="proposals">
                      <div class=" card ">
                        <div class="row m-0">
                            <div class="col-md-10">
                              <h6 class="m-0 mt-1">All Proposals</h6></div>
                            <div class="col-md-2 text-right"> 
                                <a href="" class="bg-primary font-weight-bold px-1 text-white" >Clear Activities</a>
                            </div>
                        </div>
                        <div class="line mt-2"></div>
                        <div class="p-2">
                             <div class="timeline-2">
                                    <div class="time-item">
                                        <div class="item-info">
                                            <small data-toggle="tooltip" data-placement="top" title="" class="text-muted" data-original-title="02.20.2020 18:25">2 hrs ago</small>

                                            <p><strong>
                                              <a href="http://plazacrm.com/admin/user/user_details/8" class="text-info">Adminko</a>
                                              </strong> Timer Off<strong>54645</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row m-0 mt-4 bg-gray p-2 ">
                          <div class="col-md-4">Paid Amount : <span class="bg-primary text-white rounded p-1">$ 00.00</span></div>
                         
                        </div>
                      </div> 
                    </div>
                  <!----------Proposals End ------>

            </div>
        </div>
    </div>    
</div>    
   
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


    