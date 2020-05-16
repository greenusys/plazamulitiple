
        
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card p-2">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>Reports List</strong></span> 
                   </div>
               <!--      <div class="col-md-6 text-right"><button class="btn btn-success rounded-0" data-toggle="modal" data-target="#timeManualy"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div> -->
                </div>
              <div class="p-2">
              <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                               <th>Report ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Time Out</th>
                                
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        <tbody>

                          <?php
                          // print_r($EmpAttendanceDetail);
                            foreach ($reports_list as $report) {
                              # code...
                              ?>
                                <tr>
                                  <td><?=$report->rpt_id?></td>
                                  
                                  <td><?=$report->full_name?></td>
                                  <td><?=$report->email?></td>
                                    <td><?=$report->rpt_date?></td>
                                    <td><?=$report->rpt_out_time?></td>
                              
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
                                       <a href="#"><span class="sele_staus bg-success p-1 text-white"><i class="far fa-edit"></i></span></a>
                                        <?php }
                                         else
                                         {
                                          ?>
                                          <a href="javascript:void(0)" style="visibility: hidden"><span class="sele_staus bg-success p-1 text-white"><i class="far fa-edit"></i></span></a>
                                          <?php
                                          }
                                         if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                          {?>

                                       <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                        <?php }
                                         else
                                         {
                                          ?>

                                       <span style="visibility: hidden" class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>

                                          <?php
                                          }

                                        }
                                      }?>
                                          
                                        </div>

                                    </td>
                                   
                                  
                                </tr>
                              <?php
                            }

                          ?>
                    
                        </tbody>
                        <tfoot>
                          <tr>
                               <th>Report ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Time Out</th>
                           
                                <th>Action</th>
                               
                            </tr>
                        </tfoot>
                    </table>
              </div>
            </div>
          </div>
          </div>
    
        </section>
      </div>

 <script type="text/javascript">
    $(document).on('click','.view_rpts', function(e){
      e.preventDefault();
     var rpt_id = $(this).attr("rpt_id");
     var html='';
      $.ajax({
        url:"<?=base_url('User/fetchReport')?>",
        type:"post",
        data:{rpt_id:rpt_id},
        cache:false,
       success:function(response){
         // console.log(response);
          response=JSON.parse(response);
          if(response.error==0){
            $("#report_date").val(response.data.rpt_date);
            $("#appt").val(response.data.rpt_out_time);
            $("#fullname").val(response.data.full_name);
            $("#employee_id").val(response.data.employment_id);

            $("#rpt_meet_goals").html(response.data.rpt_meet_goals);

            $("#rpt_issues").val(response.data.rpt_issues);
            $("#rpt_summary").val(response.data.rpt_summary);
            $("#rpt_task1").val(response.data.rpt_task1);
            $("#rpt_task2").val(response.data.rpt_task2);
            $("#rpt_task3").val(response.data.rpt_task3);
            $("#rpt_tomorrow_goals").val(response.data.rpt_tomorrow_goals);
            $("#rpt_complaints").val(response.data.rpt_complaints);
            var images = response.data.rpt_images;
           var img = images.split(',');
           var len = img.length;
           console.log(len);
            for (var i = 0; i < len ; i++){
              html+='<div class="col-md-3">'+
                    '<img class="img-fluid" src="<?=base_url()?>uploads/report_images/'+img[i]+'">'+
                    '</div>';
              $("#imgDiv").append(html);      
            }

             $("#dailyReportModal").modal("show");
            
          }else{
           
          }
        }
      });
    });

    $(document).on("click","#printReport",function(){
      var divContents = $("#print_body").html();
       var printWindow = window.open('', '', 'height=400,width=800');
        printWindow.document.write(divContents);
        printWindow.print();
    })
</script>
<!-- Modal -->
<div id="dailyReportModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header">
            <h5 class="modal-title" >Daily Report</h5>
            <!-- <button class="btn btn-success" id="printReport">Print</button> -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
      <div class="modal-body" id="print_body">
        <div>
        
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="row">
                    <div class=" col-sm-3 text-right">
                      <label for="exampleInputEmail1" class="label-style ml-4">Date Of Report<span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                                
                                  <input type='text' class="form-control" name="rpt_date" id="report_date" />
                            
                                </div>
                              </div>
                        </div>
                  </div>
                
                <div class="form-group">
                  <div class="row">
                    <div class=" col-sm-3 text-right">
                      <label for="exampleInputEmail1" class="label-style">End Of Day : Clock Out Time <span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" id="appt" name="rpt_out_time" readonly="" disabled="">
                                         
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class=" col-sm-3 text-right">
                      <label  class="label-style ml-4">Full Name<span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" disabled=""  class="form-control" id="fullname"  placeholder="Enter First Name">
                    </div>
                    
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class=" col-sm-3 text-right">
                      <label for="employee" class="label-style ml-2">Employee Id<span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" disabled=""  class="form-control" id="employee_id" name="rpt_employment_id" >
                    </div>
                    
                  </div>
                </div>
               
            <!--    <div class="form-group">
                  <div class="row">
                    <div class="col-sm-5 text-right">
                      <label for="exampleInputEmail1" class="label-style ml-5">In Terms Of Production, How Was Your Day ?<span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-sm-6 mt-2">
                      <span class="fa fa-star checked size"></span>
                      <span class="fa fa-star checked size"></span>
                      <span class="fa fa-star checked size"></span>
                      <span class="fa fa-star size"></span>
                      <span class="fa fa-star size"></span>
                    </div>
                  </div>
                </div> -->
              <!--  <div class="form-group">
                  <div class="row">
                    <div class=" col-sm-5 text-right">
                      <label for="exampleInputEmail1" class="label-style ml-5">Did You Update and Work With Trello Today ?<span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-sm-6">
                      <input type="radio" id="yes" name="choose" value="Yes"> Yes
                      <br>
                      <input type="radio" id="no" name="choose" value="No" > No
                    </div>
                  </div>
                </div> -->
                <div class="form-group">
                  <div class="row">
                    <div class=" col-sm-4 text-right">
                      <label  class="label-style ml-4">Did You Meet Your Goals Today ?<span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-sm-6">
                     <h6 id="rpt_meet_goals"></h6>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class=" col-sm-12 ">
                      <label class="label-style ">Did You Experience Any Problem Or Issues That Keep Your Work From Progressing Today?<span class="text-danger"> *</span></label>
                    </div>
                  </div>
                    <div class="w-100" >
                      <textarea rows="3" name="rpt_issues" id="rpt_issues" cols="69"></textarea>
                    </div>
                 
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class=" col-sm-12 ">
                      <label class="label-style ">Daily Report Summary<span class="text-danger"> *</span></label>
                    </div>
                  </div>
                    <div class="w-100 " >
                      <textarea rows="3" name="rpt_summary" id="rpt_summary" cols="69"></textarea>
                      <!-- <h6 class="m-auto font">Write a general summary of your work activity today.</h6> -->
                    </div>
                    
                
                </div>
                <div class="form-group">
                  <div class="row mt-4">
                    <div class=" col-sm-12">
                      <label class="label-style ">Task 1<span class="text-danger"> *</span></label>
                    </div>
                  </div>
                    <div class="w-100">
                      <textarea rows="3" name="rpt_task1" id="rpt_task1" cols="69"></textarea>
                      <h6 class="m-auto font"> Please explain a text you completed today.</h6>
                    </div>
                    
                 
                </div>
                <div class="form-group">
                  <div class="row mt-4">
                    <div class="col-sm-12">
                      <label class="label-style ">Task 2</label>
                    </div>
                  </div>
                    <div class="w-100">
                      <textarea rows="3" name="rpt_task2" id="rpt_task2" cols="69"></textarea>
                      <h6 class="m-auto font"> Please explain a text you completed today.</h6>
                    </div>
                    
                  
                </div>
                <div class="form-group">
                  <div class="row mt-4">
                    <div class=" col-sm-12">
                      <label class="label-style ">Task 3</label>
                    </div>
                  </div>
                    <div class="w-100">
                      <textarea rows="3" name="rpt_task3" id="rpt_task3" cols="69"></textarea>
                      <h6 class="m-auto font"> Please explain a text you completed today.</h6>
                    </div>
                 
                </div>
                <div class="form-group">
                  <div class="row mt-4">
                    <div class=" col-sm-12">
                      <label class="label-style ">Goals For Tomorrow <span class="text-danger"> *</span> </label>
                    </div>
                  </div>
                    <div class="w-100">
                      <textarea rows="3" name="rpt_tomorrow_goals" id="rpt_tomorrow_goals" cols="69"></textarea>
                      <h6 class="m-auto font"> Outline your goals for the next day.</h6>
                    </div>
                 
                </div>
                <div class="form-group">
                  <div class="row mt-4">
                    <div class=" col-sm-12">
                      <label class="label-style ">Complaints & question & comments </label>
                    </div>
                  </div>
                    <div class="w-100">
                      <textarea rows="3" name="rpt_complaints" id="rpt_complaints" cols="69"></textarea>
                      <h6 class="m-auto font">Optional</h6>
                    </div>
                  
                </div>
                <div class="form-group">
                  <div class="row mt-4">
                    <div class=" col-sm-12">
                      <label class="label-style ">Attach File Or Document or Screenshots</label>
                    </div>
                  
                  </div>
                  <div class="row" id="imgDiv">
                    
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

  