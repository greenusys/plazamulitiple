
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
                    <span><strong>Grant Permission</strong></span> 
                   </div>
                 <!--    <div class="col-md-6 text-right"><button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div> -->
                </div>


              <div class="p-2">
                <form  method="post ">
                  <div class="form-group pt-2">
                    <div class="row">
                      <div class="offset-1 col-sm-2 text-right">
                        <label for="exampleInputEmail1" class="pt-2">Designation<sup class="text-danger">*</sup></label>
                      </div>
                      <div class="col-sm-5">
                      
                          <div class="input-group">
                                <select name="client_id" class="form-control" id="desig_id">
                                    <option selected="" disabled="">Select Designation</option>
                                    <?php
                                      foreach($Designation as $des){
                                        // /print_r($empD);
                                        ?>
                                           <option value="<?=$des->departments_id?>"><?=$des->deptname?> </option>   
                                        <?php
                                      }
                                    ?>
                                </select>
                          </div>
                      </div>
                    </div>

                    <div class="row mt-2">
                      <div class="offset-1 col-sm-2 text-right">
                        <label for="exampleInputEmail1" class="pt-2">Department<sup class="text-danger">*</sup></label>
                      </div>
                      <div class="col-sm-5">
                      
                          <div class="input-group">
                                <select name="client_id" required="" class="form-control" id="emply">
                                    
                                </select>
                          </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card p-2">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>Grant Permission</strong></span> 
                   </div>
                 
                </div>

                 <section id="tabs" class="project-tab p-3">
            
                        <div class="row">
                            <div class="col-md-12">
                               <form  id ="add_perm">
                                <table id="" class="display nowrap table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">View</th>
                                                <th class="text-center">Delete</th>
                                                <th class="text-center">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                          
                                                  <tr id="dvPassport">
                                                    <td><input type="checkbox" name="" id="view1" value="View" class="data h_22 form-control"></td>
                                                      <td><input type="checkbox" name="" id="delete1" value="Delete" class="data h_22 form-control"></td>
                                                      <td><input type="checkbox" name="" id="edit1" value="Edit" class="data h_22 form-control"></td>
                                                  
                                                  </tr>
                                        </tbody>
                                        <tfoot>
                                             <tr>
                                                <th class="text-center">View</th>
                                                <th class="text-center">Delete</th>
                                                <th class="text-center">Edit</th>
                                             </tr>
                                        </tfoot>
                                    </table>
                                    <button type="submit" class="btn btn-success float-right">Grant Permission</button>
                                </form>
                                
                            </div>
                        </div>
                  
                </section>
                
              </div>
            </div>
          </div>
    
        </section>
      </div>
  <script>

$('#add_perm').submit(function(e){
  e.preventDefault();
  var ar=[];
  var obj = {};
      var pass_id="#dvPassport";
     var user_id=1;
     var data=$(pass_id).find('.data');
     data.each(function(){
      if($(this).is(':checked')){
        ar.push($(this).val());
      }
     })
     var permission=JSON.stringify(ar);
     var desig_id=$('#emply').val();
     if (desig_id==null || desig_id.length==0 || permission.length==2) {
      swal("Please select department and select at least one check box", "Check All Things to Continue", "warning");
     }
     else{
      $.ajax({
        type:'POST',
        data:{
          permission:permission,
          desig_id:desig_id
        },
        url:'<?=base_url()?>Permission/add_permission',
        success:function(response){
          if (response==1) {
            swal("Permissions Granted Successfully!", "Granted", "success");
          }
          else{
            swal("OOPS!", "Something went wrong!!", "warning");
          }
        }
      })
     }
     })

     $(document).ready(function() {
        $("#emply").select2();
        $("#desig_id").select2();
      });

     $(document).on('change','#emply',function(){
      var desig_id=$(this).val();
      $.ajax({
        type:'POST',
        data:{
          desig_id:desig_id,
        },
        url:'<?=base_url()?>Department/fetch_designation',
        success:function(response){
                      $('#view1').prop('checked', false);
            $('#edit1').prop('checked', false);
            $('#delete1').prop('checked', false);
          if (response!="") {
            var response=JSON.parse(response);
            //console.log(response.length);
            for(var i=0;i<response.length;i++){
              if(response[i]=="View"){
                $('#view1').prop('checked', true);
              }
              else if(response[i]=="Edit"){
                $('#edit1').prop('checked', true);
              }
              else{
                $('#delete1').prop('checked', true);
              }
            }
          }
        }
      })
     })

     $(document).on('change','#desig_id',function(){
       var dept_id=$(this).val();
       $.ajax({
        type:'POST',
        data:{
          dept_id:dept_id
        },
        url:'<?=base_url()?>Department/getDesignations_ajax',
        success:function(response){
          //console.log(response);
          var response = JSON.parse(response);
          var html='';
          html+='<option selected="" disabled="">Select Department</option>';
          for (var i = 0; i <response.data.length; i++) {
            html+='<option value="'+response.data[i].designations_id+'">'+response.data[i].designations+'</option>';
          }
          $('#emply').empty();
          $('#emply').append(html);
        }
       })
     })
  </script>