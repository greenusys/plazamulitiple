<style>
  .w_20{
    width: 20px;
  }
 </style>
          
            <div class="col-md-12">
                <div class="p-2">
                  
        <form  id="yearlyleave">
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-2 text-right">
                <label for="exampleInputEmail1" class="pt-2">Designation<sup class="text-danger">*</sup></label>
              </div>
              <div class="col-sm-7">
                <div class="input-group">
                <input type="hidden" name="company_id" value="<?=$this->session->userdata('logged_user')[0]->company_id?>">
                  <select name="designation_id" class="form-control" id="emply">
                    <option selected="" disabled="" value="0">Select Department</option>
                    <?php
                                        foreach($fetch_Designation_data as $desigdata)
                                        {
                                        ?>
              <option  value="<?=$desigdata->designations_id?>"><?=$desigdata->designations?></option>;
                                    <?php
                                        }
                                        ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group mb-0">
            <div class="row">
              <div class="offset-1 col-sm-2 text-right">
                  <label for="exampleInputEmail1" class="pt-2">Total Yearly Leave<sup class="text-danger">*</sup></label>
              </div>
              <div class="col-sm-7">
                <div class='input-group  form-group' id=''>
                 <input type="number" class="form-control " name="totalleave">
                   
               </div>
              </div>
            </div>
          </div>
             
                <div class="text-center">
                  <button type="submit" class="btn btn-success">Submit</button>
              </div>


        </form>
      </div>
      <br>
          <div class="p-2">
               
                <table id="example" class="display nowrap table" style="width:100%">
                        <thead>
                            <tr>
                              <th>S.NO</th>
                                <th>Designation </th>
                                <th>Yearly Leave</th>
                                <th>Added On</th>
                                  <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                          <?php
                          $i=1;
                            foreach ($fetch_Yearly_data as $FYD) {
                              // print_r($FYD);
                              # code...
                              ?>
                                  <tr>  
                                    <td><?=$i?></td>
                                      <td><?=$FYD->designations?></td>
                                      <td><?=$FYD->total_Yearlyleave?></td>
                                   <td><?=$FYD->added_on?></td>
                                   <td>
                                     <?php
                                      foreach($Assign_permission as $checkpermission)
                                        {
                                          $permission=$checkpermission->permission;
                                          foreach ($UsersPermission as $Uperms) 
                                            {
                                             $Userpermi=$Uperms->permission;
                                                
                                          if(strpos($permission,'Edit')!==false||strpos($Userpermi,'Edit')!==false)
                                          {?>

                                    <a href="<?=base_url('Leavemanagement/Edit_Yearlyleave/').$FYD->year_leaveid?>" class="bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                     <?php }
                                         else
                                         {
                                          ?>
                                            <a href="#"style="visibility: hidden" class="bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                             <?php
                                          }
                                         if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                          {?>

                                    <a href="javascript:void(0)" lyear_id="<?=$FYD->year_leaveid?>" class="deletetleaveyearly"><span class="bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>
                                     <?php }
                                         else
                                         {
                                          ?>
                                           <a href="javascript:void(0)" style="visibility: hidden"><span class="bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>
                                            <?php
                                          }

                                        }
                                      }?>
                                   </td>
                                  </tr>
                              <?php
                              $i++;
                            }
                            

                          ?> 
            
                        </tbody>
                      <!--   <tfoot>
                             <tr>
                                <th>EMP ID</th>
                                <th> Name</th>
                                <th>Clocking Hours</th>
                             </tr>
                        </tfoot> -->
                    </table>
             
              </div>

    
        </section>
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

<script type="text/javascript">
        $(document).ready(function(){
          $('.deletetleaveyearly').on('click',function(){ 
             var lyear_id=$(this).attr("lyear_id");
             // alert(owner_id);
           if(confirm("Are you Sure want to delete this record?") ==true)
            {       
            // alert(owner_id);         
                $.ajax({
                  url:"<?=base_url('Leavemanagement/Deleteyearlyleave')?>",
                  type:"post",
                  data:{lyear_id:lyear_id},
                  success:function(response)
                  {   
                  response=JSON.parse(response);             
                     if (response==1)
                      {
                    swal("Policy", "Deleted", "success")
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
      

       $(document).ready(function(){
            $("#yearlyleave").submit(function(e){
                e.preventDefault();
                var formData= new FormData($(this)[0]);
                
                $.ajax({
                    url:"<?=base_url('Leavemanagement/addYearlyLeave')?>",
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
                      swal("Policy", "Already Exist", "error")
                     }
                     location.reload();
                    }
                });
            });

        });

    </script>
  
