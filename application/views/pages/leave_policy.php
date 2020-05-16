 <style type="text/css">
       .show{
        display: block !important;
       }
       .card {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.38);
  }
  .tab_year{    
    background: #8080807d;
    font-weight: 700;
  }
  .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
    border-top: 3px solid #6777ef;
}
.card .card-header{
      padding: 4px 3px;
}
/*.accordion .card-header:after {
    font-family: "Font Awesome 5 Brands","Font Awesome 5 Free";
    content: "\f146";
    float: right; 
    color: #7d7d7d;
}*/
/*.accordion .card-header.collapsed:after {  
    font-family: "Font Awesome 5 Brands","Font Awesome 5 Free";
    content: "\f0fe";
    color: #7d7d7d;
}*/
.card-header .title {
    font-size: 17px;
    color: #6777ef;
    font-weight: 600;
}
.card-header .accicon {
    float: right;
    font-size: 20px;
    width: 1.2em;
    right: 0px;
    position: absolute;
}
.card-header{
  cursor: pointer;
  border-bottom: none;
}
.card{
  border: 1px solid #ddd;
}
.card-body{
  border-top: 1px solid #ddd;
}
.card-header:not(.collapsed) .rotate-icon {
  transform: rotate(180deg);
}
.table:not(.table-sm):not(.table-md):not(.dataTable) td, .table:not(.table-sm):not(.table-md):not(.dataTable) th {
    padding: 0 16px;
    height: 40px;
    vertical-align: middle;
}
     </style>   

<div class="row mt-4">
  <div class="col-md-12">
    <div class="card p-2">
      <div class="card-header row border-bottom py-1">
        <div class="col-md-6">
          <span><strong>Leave Policy</strong></span>
        </div>

      </div>
      <div class="p-2">
        <form id="policydata">
          <!--  <div class="form-group mb-0">
            <div class="row">
              <div class="offset-1 col-sm-2 text-right">
                  <label for="exampleInputEmail1" class="pt-2">Policy Name<sup class="text-danger">*</sup></label>
              </div>
              <div class="col-sm-7">
                <div class='input-group date form-group' id=''>
                   <input type="text" class="form-control" name="lpolicy_name">
                    
               </div>
              </div>
            </div>
          </div> -->
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-2 text-right">
                <label for="exampleInputEmail1" class="pt-2">Deparments<sup class="text-danger">*</sup></label>
              </div>
              <div class="col-sm-7">
                <div class="input-group">
                  <select name="lpolicy_department_id" class="form-control fetchdeptid" id="emply">
                    <option selected="" disabled="" value="0">Select Department</option>
                     <?php
                        foreach($fetch_Department_data as $deptdata)
                        {
                        ?>
                          <option  value="<?=$deptdata->departments_id?>"><?=$deptdata->deptname?></option>;
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
              <div class="offset-1 col-sm-2 text-right">
                <label for="exampleInputEmail1" class="pt-2">Designation<sup class="text-danger">*</sup></label>
              </div>
              <div class="col-sm-7">
                <div class="input-group">
                  <select name="lpolicy_designation_id" class="form-control fetchdesigid" id="designationforleave">
                    <option value="0">Select Designation</option>
                     
                     </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group mb-0">
            <div class="row">
              <div class="offset-1 col-sm-2 text-right">
                  <label for="exampleInputEmail1" class="pt-2">Category Name : <sup class="text-danger">*</sup></label>
              </div>
              <div class="col-sm-7">
                <div class='input-group date form-group' id=''>
                  <input type="text" class="form-control" name="lpolicy_category_id">
                   
                    
               </div>
              </div>
            </div>
          </div>
          <div class="form-group mb-0">
            <div class="row">
              <div class="offset-1 col-sm-2 text-right">
                  <label for="exampleInputEmail1" class="pt-2">Days : <sup class="text-danger">*</sup></label>
              </div>
              <div class="col-sm-7">
                <div class='input-group date form-group' id=''>
                   <input type="text" class="form-control" id="lpolicy_days" name="lpolicy_days" >
                    
               </div>
              </div>
            </div>
          </div>
          <div class="form-group mb-0">
            <div class="row">
              <div class="offset-1 col-sm-2 text-right">
                  <label for="exampleInputEmail1" class="pt-2">Gender : <sup class="text-danger">*</sup></label>
              </div>
              <div class="col-sm-7">
                <div class='input-group date form-group' id=''>
                  <select name="lpolicy_gender" class="form-control" id="emply">
                    <option selected="" disabled="" value="0">Select</option>
                     <option  value="1">ALL</option>
                      <option  value="2">Male</option>
                       <option  value="3">Female</option>
                    
                                             
             
                                    
                  </select>
                    
               </div>
              </div>
            </div>
          </div>
           <div class="form-group mb-0">
            <div class="row">
              <div class="offset-2  col-md-5">
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1" class="pt-2">Effective Date : <sup class="text-danger">*</sup></label>
                  </div>
                  <div class="col-md-6">
                    <input type="date" class="form-control" name="lpolicy_effective_date">
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1" class="pt-2">Available Leave : <sup class="text-danger">*</sup></label>
                  </div>
                  <div class="col-md-4">
                    <strong><input type="text"  id="availableleave" placeholder="Available Leaves" class=" form-control" readonly>  </strong>
                  </div>
                </div>
              </div>
              <div class="offset-1 col-sm-2 text-right">
                  
              </div>
              <div class="col-sm-7">
                <div class='input-group date form-group' id=''>
                   
                    
               </div>
              </div>
            </div>
          </div>
         <!--  <div class="form-group mb-0">
            <div class="row">
              <div class="offset-1 col-sm-2 text-right">
                  <label for="exampleInputEmail1" class="pt-2">Activate<sup class="text-danger">*</sup></label>
              </div>
              <div class="col-sm-2">
                <div class='input-group date form-group' id=''>
                   <input type="checkbox" name="lpolicy_activate" value="1" class="form-control form-control">
                  
                    
               </div>
              </div>
            </div>

          </div> -->
           <div class="row">
              <div class="offset-1 col-sm-2 text-right">
                  
              </div>
              <div class="col-sm-7">
                <div class='input-group date form-group' >
                      
               </div>
              </div>
            </div>
          <div class="row">
            <div class="offset-3 col-sm-3" >
              <button type="submit" class="btn btn-primary addpolicybutton">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
<!-- <div class="row mt-4">
  <div class="col-md-12">
  <div class="card p-2">
 <section id="tabs" class="project-tab p-3">
    <div class="row">
        <div class="col-md-12">
                <div class="p-2">
                  <div class="accordion" id="accordionExample">
                    <div class="card mt-2 dd">
                      <div class="card-header" data-toggle="collapse" data-target="#collapse5" aria-expanded="true">     
                          <span class="title pl-3">Week : 5</span>
                          <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                      </div>
                      <div id="collapse5" clock_id="" class="collapse" data-parent="#accordionExample">
                          <div class="card-body">
                              <table class=" table table-stripped table-bordered">
                                <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>05.01.2020</th>
                                      <th>05.01.2020</th>
                                      <th>05.01.2020</th>
                                      <th>05.01.2020</th>
                                  </tr>
                                </thead>
                                <tbody>         
                                <tr>
                                  
                                </tr>
                               
                         
                          </tbody>
                        </table>
                      </div>  
                    </div>
                  <div>
                </div>
              </div>
            </div>
          </div> -->
        
</section>          
    </div>
  </div>
</div>
</section>
      </div>
  <script>
     $(document).ready(function() {
        $("#emply").select2();
      });
  </script>
 <script type="text/javascript">
  $(function () {
      $('#datetimepicker10').datetimepicker({
          viewMode: 'years',
          format: 'MM/YYYY'
      });
  });
</script>

     <script>
      var availLeave;
        // $('.checkagain').on('click',function(){
          $('.fetchdeptid').on('change',function(){
            var dept_id=$(this).val();
              // alert(dept_id);
            $.ajax({
              url:"<?=base_url('Leavemanagement/fetchDesignationById')?>",
              type:"post",
              data:{dept_id:dept_id},
              success:function(response)
              {
                //   console.log(response.data);
                  response=JSON.parse(response);
                   console.log(response.data);
                  if(response.code==1)
                  {
                    $("#designationforleave").empty();
                    
                    for (var i = 0; i <response.data.length; i++) 
                    {
                        var html;
                         console.log(response.data[i].designations);
                        html+='<option value="'+response.data[i].designations_id+'">'+response.data[i].designations+'</option>';
                        // html+="<option value="'+response.data[i].id+'">" + response.data[i].name + "</option>";
                       
                        
                    }
                    $('#designationforleave').append(html);
                }
                else
                  {
                       $('#designationforleave').append('no data found');
                  }
                  
              }
                  
              });
            });  
      
        // $('.checkagain').on('click',function(){
          $('.fetchdesigid').on('change',function(){
            var desig_id=$(this).val();
               // alert(desig_id);
            $.ajax({
              url:"<?=base_url('Leavemanagement/Fetchtotalleave')?>",
              type:"post",
              data:{desig_id:desig_id},
              success:function(response)
              {
                //   console.log(response.data);
                  var response=JSON.parse(response);
                   // console.log('fetchtotalleave',response.data);
                    
                   if(response.code==1)
                   {
                          $("#availableleave").empty();
                        var totalleave=response.data[0].total_Yearlyleave;
                        console.log('Total Leavesucces',totalleave);
                        // $('#availableleave').val(totalleave); 
                        $.ajax({
                        url:"<?=base_url('Leavemanagement/checkAvailableleave')?>",
                        type:"post",
                        data:{desig_id:desig_id},

                        success:function(response)
                        {
                          //console.log(response.data);
                          response=JSON.parse(response);
                          console.log('Taken Leave',response.data);
                           $("#availableleave").empty();
                          var takenleave=response.data; 
                          var availableleave=totalleave-takenleave;
                          console.log(totalleave,takenleave);
                          console.log('available leave',availableleave);
                          if(availableleave >0   )
                          {
                            availLeave=availableleave;
                            $('#availableleave').val(availableleave);
                            $('#lpolicy_days').attr('maxlength',availableleave);
                            // alert('empty');
                          }
                          else
                          {
                             $('#availableleave').val('No More Leave Available');
                             $("#addpolicybutton").attr("disabled", true);
                             $("#addpolicybutton").prop('disabled', false);
                             $(".addpolicybutton").prop('disabled', false);
                          }
                        }    
                        });
                       
                   }
                   else
                   {
                    // console.log('no data',totalleave)
                    $('#availableleave').val('no data found');
                   }

           
              }    
              });
            });
   
       
     
    $(document).ready(function(){
    $("#policydata").submit(function(e){
    e.preventDefault();
    var formData= new FormData($(this)[0]);

    $.ajax({
        url:"<?=base_url('Leavemanagement/addLeavePolicyData')?>",
         type:"post",
         data:formData,
         // enctype:"multipart/form-data",
         contentType:false,
         processData:false,
         cache:false,
        success:function(response)
        {
         var obj=JSON.parse(response);
         console.log(obj.status);
         if(obj.status==0)
         {
         swal("Policy", "Already Exist", "error")
         }
         if(obj.status==1)
         {
          swal("Policy", "Added", "success")
         }
         if(obj.status==2)
         {
          swal("Policy", "Try Again", "error")
         }
         location.reload();
        }
    });
    });

    });

    $('#lpolicy_days').on('keyup',function(){
      var AvailLe=$(this).attr('maxlength');
      var pressValue=parseInt($(this).val());
      console.log("Press Value : "+pressValue);
      if(pressValue > AvailLe){
          swal("Leaves!", "Out Of Stock", "error");
        // alert("Leaves Out Of Stock");
        $($(this).val(""));
      }
    });

</script>