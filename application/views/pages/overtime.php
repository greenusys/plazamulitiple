 
      <!-- Main Content -->
<!--       <div class="main-content">
        <section class="section">
     
              <div class="row">
                    <div class="col-md-6 bg-white">
                      <h4 class=" p-2">Make Payment</h4>
                    </div>
                  <div class="col-md-6 bg-white text-right ">
                    <div class="p-2">date
                <button class="btn btn-danger d-none check_btn"><i class="fas fa-sign-out-alt"></i> Checkout</button>
                     <button class="btn btn-success check_btn "><i class="fas fa-sign-in-alt"></i> Checkin</button>
                   </div>
                  </div>
              </div>
              -->
        <style>
          .input_year {
                font-size: 14px;
                padding: 0px 5px !important;
                height: 34px !important;
                
          }
          .input-group{
            margin: 0 auto;
          }
          .mnth_c{
                color: #444;
                display: block;
                padding: 11px 20px;
                /*border-bottom: 1px solid;*/
          }
          .mnth_c:hover{
            background: #6777ef;
            color: white;
            text-decoration: none;
          }
          .card .card-header .btn {
    margin-top: 1px;
    padding: 4px 12px;
}
       /*   h1 {
              margin-left: 15px;
              margin-bottom: 20px;
          }

          @media (min-width: 768px) {

              .brand-pills > li > a {
                  border-top-right-radius: 0px;
                border-bottom-right-radius: 0px;
              }
              
              li.brand-nav.active a:after{
                content: " ";
                display: block;
                width: 0;
                height: 0;
                border-top: 20px solid transparent;
                border-bottom: 20px solid transparent;
                border-left: 9px solid #428bca;
                position: absolute;
                top: 50%;
                margin-top: -20px;
                left: 100%;
                z-index: 2;
              }
          }*/
          .brand-pills .active a{
                background: #6777ef;
               color: white;

          }
          .form-control{
            border-radius: 3px !important;
          }
          .input-group-addon {
    padding: 0px 14px !important;
    background: #edf1f2 !important;
}
.btn-purple:hover {
    color: #ffffff;
    background-color: #7266bad6 !important;
    border-color: rgba(0, 0, 0, 0);
}
.btn-purple {
    color: #ffffff;
    background-color: #7266ba;
    border-color: transparent;
}
        </style>
        <script type="text/javascript">
          $(document).on("click","#advn_salry",function(){
              $(this).hide();
              $("#advn_div").hide();
                 $(".yetr__").hide();
              $("#advn_salry_reprt").show();
              $("#advn_sar_reprt_div").show();
          })
           $(document).on("click","#advn_salry_reprt",function(){
              $(this).hide();
                 $(".yetr__").show();
                 $("#advn_div").show();
               $("#advn_sar_reprt_div").hide();
               $("#advn_salry").show();
          })
        </script>
        <div class="row mt-5">
          <div class="col-md-3">
                 <div class="yetr__">
                    <ul class="list-unstyled d-flex">
                      <li ><strong>Year :</strong></li>
                      <li>
                          <div class='input-group date datetimepicker10 w-75' id='datetimepicker10'>
                              <input type='text' class="input_year form-control" />
                                <span class="input-group-addon">
                                  <span ><i class="fa fa-calendar"></i></span>
                              </span>
                          </div>
                      </li>
                      <li><button class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button></li>
                    </ul>
                </div>
              </div>
              <div class="col-md-7">
                <div class="mt-3"><a href="#" class="text-danger" data-toggle="modal" data-target="#exampleModal" data-toggle="tooltip" ><i class="fas fa-plus"></i> New Overtime</a></div>
              </div>
          <!--     <div class="col-md-2">
                <div class="text-right">
                  <button class="btn btn-info" id="advn_salry"><i class="fas fa-undo-alt"></i> Switch</button>
                  <button class="btn btn-purple" style="display:none" id="advn_salry_reprt"><i class="fas fa-undo-alt"></i> Switch</button>
                </div>
              </div> -->
            </div>
          <div class="row " id="advn_div">
         
              <!-- <div class="card"></div> -->
              <div class="col-md-3">
       

              <div class="card">
                <ul class="list-unstyled">
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> January</strong> </a>
                  </li>
                   <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> February</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> March </strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> April </strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> May</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> June</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> July</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> August</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> September</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> October</strong> </a>
                  </li>
                  <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> November </strong> </a> 
                  </li>
                   <li>
                    <a href="" class="mnth_c border-bottom"><i class="fas fa-calendar-alt"></i> <strong> December</strong> </a>
                  </li>
                </ul>
              </div>
              </div>
              <div class="col-md-9">
                  <div class="card">
                      <div class="card-header row border-bottom py-1">
                        <div class="col-md-6">
                          <span><i class="fas fa-calendar-alt"></i> <strong> Month Name</strong></span> 
                         </div>
                          <!-- <div class="col-md-6 text-right"><button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div> -->
                      </div>
                      <div class="p-2 pt-3 ">
                       <table id="example" class="display nowrap " style="width:100%">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Overtime Date </th>
                                    <th>Overtime Hour</th>
                                    <th>Status </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                          
                                  <tr>
                                    <td>Tiger Nixon</td>
                                    <td>2011/04/25</td>
                                    <td>Edinburgh</td>
                                    <td>Edinburgh</td>
                                    <td>Tiger Nixon</td>
                                    <td>2011/04/25</td>       
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Overtime Date </th>
                                    <th>Overtime Hour</th>
                                    <th>Status </th>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content style">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Overtime </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
        <div class="modal-body">
            <form id="add_overtime">
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Employee <sup class="text-danger">*</sup></label>
                </div>
                <div class="col-sm-6">
                  <select  name="user_id" class="form-control " id="imptask_status" style="width: 100%" required="">
                    <option value="" selected="">Select Department</option>
                    <?php
                    foreach ($all_employee as $emp=>$val) {
                    ?>
                      <optgroup label="<?=$emp?>">
                        <?php
                        foreach ($val as $value) {
                        ?>
                        <option value="<?=$value->user_id?>"><?=$value->fullname?></option>
                      <?php } ?>
                      </optgroup>
                    <?php } ?>
                  </select> 
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Date<sup class="text-danger">*</sup>  </label>
                </div>
                <div class="col-sm-6">
                  <div class='input-group date datetimepicker1' id='datetimepicker1'>
                      <input type='text' class="form-control" name="overtime_date" />
                      <span class="input-group-addon ">
                          <span ><i class="fa fa-calendar"></i></span>
                      </span>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Ocertime Hour <sup class="text-danger">*</sup>  </label>
                </div>
                <div class="col-sm-6">
                  <div class='input-group date datetimepicker3' id='datetimepicker3' >
                      <input type='text' name="overtime_hours" class="form-control" />
                      <span class="input-group-addon ">
                          <span ><i class="far fa-clock "></i></span>
                      </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Notes  </label>
                </div>
                <div class="col-sm-6">
                  <textarea class="form-control" id=""  placeholder="Reason" name="notes" rows="5"></textarea>
                  <input type="hidden" value="approved" name="status">
                </div>
              </div>
            </div>
           <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
          <div class="modal-footer border-top-0 modal-butn">
            <button type="button" class="btn btn-secondary">close</button>
          </div>
      </div>
    </div>
  </div>
<script type="text/javascript">
$(document).on('submit','#add_overtime',function(e){
e.preventDefault();
var formData= new FormData($(this)[0]);
$.ajax({
    url:"<?=base_url()?>Payroll/add_overtime",
     type:"post",
     data:formData,
     contentType:false,
     processData:false,
     cache:false,
    success:function(response)
    {
      if(response==1){
        swal("Overtime Added Successfully", "Success", "success");
        $('#add_overtime').trigger("reset");
      }
      else{
        swal('Error', "Error", "error");
        $('#add_overtime').trigger("reset");
      }
    }
});
})  
</script>
  <script type="text/javascript">
      $(function () {
          $('#datetimepicker3').datetimepicker({
               format: 'HH:mm'
          });
      });
  </script>
     <script type="text/javascript">
      $(function () {
          $('#datetimepicker1').datetimepicker({
             format: 'YYYY-MM-DD',
          });
      });
  </script>
<script>
     $(document).ready(function() {
          $(".hourly_status").select2();
          $("#imptask_status").select2();
          $(".monthly_status").select2();
      });
  </script>