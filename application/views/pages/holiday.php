<?php
    $session=$this->session->userdata('logged_user');
   
$myId=$session[0]->user_id;
$role_id=$session[0]->role_id;
?>
<style type="text/css">
.back
{
  background-color:white;
}
/*.active, .back:hover
{
  background-color: #23b7e5 !important;
  color:white;
}*/
</style>
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
    padding: 0px 12px;
}
     
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
.color-tag {
    display: inline-block;
    width: 13px;
    height: 13px;
    margin: 2px 10px 0 0;
    transition: all 300ms ease;
}
.clickable {
    cursor: pointer;
}
.color-tag.active {
    border-radius: 50%;
}
.month_tbs .active{
  background: #6777ef;
    color: white;
}
</style>
          <div class="row mt-4">
            <div class="col-lg-12">
              <div class="">
                <div class="first_div" id="advn_div">
        <div class="row mt-5">
          <div class="col-md-4">
                 <div class="yetr__">
                  <form method="POST" action="<?=base_url()?>Utilities/holiday">
                    <ul class="list-unstyled d-flex">
                      <li ><strong>Year :</strong></li>
                      <li>
                          <div class='input-group date datetimepicker11 w-75' id='datetimepicker11'>
                              <input type='text' class="input_year form-control" data-format="yyyy" name="year" value="<?php
                if (!empty($year)) {
                    echo $year;
                }
                ?>" />
                                <span class="input-group-addon">
                                  <span ><i class="fa fa-calendar"></i></span>
                              </span>
                          </div>
                      </li>
                      <li><button class="btn btn-info" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button></li>
                    </ul>
                  </form>
                </div>
              </div>
              <?php if($role_id!=3):?>
              <div class="col-md-7">
                <div class="mt-3">
                  <a href="#" class="text-danger" data-toggle="modal" data-target="#exampleModal" data-toggle="tooltip" ><i class="fas fa-plus"></i> New Holiday</a>
                </div>
              </div>
            <?php endif;?>
              <div class="col-md-2">
                <div class="text-right">
                  <!-- <button class="btn btn-info" id="advn_salry"><i class="fas fa-undo-alt"></i> Switch</button> -->
                  <!-- <button class="btn btn-purple" style="display:none" id="advn_salry_reprt"><i class="fas fa-undo-alt"></i> Switch</button> -->
                </div>
              </div>
            </div>
          <div class="row " >

    <div class="col-md-3">
      <div class="card">
        <ul class="mt nav-pills month_tbs nav-stacked navbar-custom-nav list-unstyled">
            <?php
            foreach ($all_holiday_list as $key => $v_holiday_list):
                $year = date('Y');
                $month_name = date('F', strtotime($year . '-' . $key)); // get full name of month by date query
                ?>
                <li class="month_sel <?php
                if ($current_month == $key) {
                    echo 'active';
                }
                ?>">
                    <a aria-expanded="<?php
                    if ($current_month == $key) {
                        echo 'true';
                    } else {
                        echo 'false';
                    }
                    ?>" data-toggle="tab" class="mnth_c border-bottom " href="#<?php echo $month_name ?>">
                        <i class="fa fa-fw fa-calendar"></i> <?php echo $month_name; ?> </a>
                </li>
            <?php endforeach; ?>
        </ul>
      </div>
    </div>
<script>
$(document).on("click",".month_sel",function(){
  $(".month_sel").removeClass("active");
  $(".mnth_c").removeClass("active");
  $(this).addClass("active");
})
</script>
<div class="col-md-9">
  <div class="card">
        <div class="tab-content pl0">
            <?php
            foreach ($all_holiday_list as $key => $v_holiday_list):
                $year = date('Y');
                $month_name = date('F', strtotime($year . '-' . $key)); // get full name of month by date query
                ?>
                <div id="<?php echo $month_name ?>" class="tab-pane <?php
                if ($current_month == $key) {
                    echo 'active';
                }
                ?>">
                    <div class="card-header row border-bottom py-1">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <strong><i class="fa fa-calendar"></i> <?php echo $month_name; ?></strong>
                            </div>

                        </div>
                        <!-- Table -->
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th  >Event Name</th>
                                <th >Start Date</th>
                                <th >End Date</th>
                                <th >Color</th>
                                <th >Action</th>
                                <?php if (!empty($edited) || !empty($deleted)) { ?>
                                    <th class="col-sm-2">Action</th>
                                <?php } ?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $key = 1 ?>
                            <?php if (!empty($v_holiday_list)): foreach ($v_holiday_list as $v_holiday) : ?>
                                <tr>
                                    <td><?php echo $v_holiday->event_name ?></td>
                                    <td><?=$v_holiday->start_date?></td>
                                    <td><?=$v_holiday->end_date?></td>
                                    <td><span style="background-color:<?= $v_holiday->color ?>"
                                              class="color-tag"></span></td>
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
                                     <a href="<?=base_url('Utilities/Edit_Holiday/').$v_holiday->holiday_id?>" class="bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                     
                                     <?php }
                                         else
                                         {
                                          ?>
                                          <a href="#" style="visibility: hidden"class="bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                          <?php
                                          }
                                         if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                          {?>

                                      <a href="javascript:void(0)" holiday_id="<?=$v_holiday->holiday_id?>" class="deletetholiday"><span class="bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>
                                       <?php }
                                         else
                                         {
                                          ?>
                                           <a href="#" style="visibility: hidden"class="deletetholiday"><span class="bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>

                                      <!--  <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span> -->
                                      <?php
                                          }

                                        }
                                      }?>

                                    </div>

                                </td>

                                </tr>
                                <?php
                                $key++;
                            endforeach;
                                ?>
                            <?php else : ?>
                                <td colspan="3">
                                    <strong>Nothin to Display</strong>
                                </td>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>
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
    
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content style">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Holiday</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
        <div class="modal-body">
            <form id="add_holiday">
            
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Event Name <sup class="text-danger">*</sup> </label>
                </div>
                <div class="col-sm-6">
                  <input type="hidden" name="company_id" value="<?=$this->session->userdata('logged_user')[0]->company_id?>">
                  <input type="text" class="form-control" id="" name="event_name"  placeholder="Enter Your Event Name" required="">
                </div>
              </div>
            </div>
      <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Description <sup class="text-danger">*</sup> </label>
                </div>
                <div class="col-sm-6">
                    <textarea rows="3" cols="42" required="" name="description"></textarea>
                </div>
              </div>
            </div>
            
            
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Start Date <sup class="text-danger">*</sup>  </label>
                </div>
                <div class="col-sm-6">
                    <div class='input-group date form-group datetimepicker10' id='datetimepicker10'>
                        <input type='text' name="start_date" required="" class="form-control" />
                          <span class="input-group-addon">
                            <span ><i class="fa fa-calendar"></i></span>
                        </span>
                     </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">End Date <sup class="text-danger">*</sup>  </label>
                </div>
                <div class="col-sm-6">
                    <div class='input-group date form-group datetimepicker10' id='datetimepicker10'>
                        <input type='text' name="end_date" required="" class="form-control" />
                          <span class="input-group-addon">
                            <span ><i class="fa fa-calendar"></i></span>
                        </span>
                     </div>
                </div>
              </div>
            </div>
            <!-- <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Location </label>
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="" name="location" placeholder="Enter Your Location">
                </div>
              </div>
            </div> -->
            <div class="form-group" style="margin-left: 120px">
                <label for="field-1" class="col-sm-3 control-label"></label>

                <div class="color-palet col-sm-8">
                    <span style="background-color:#83c340" class="color-tag clickable active" data-color="#83c340"></span>
                    <span style="background-color:#29c2c2" class="color-tag clickable" data-color="#29c2c2"></span>
                    <span style="background-color:#2d9cdb" class="color-tag clickable" data-color="#2d9cdb"></span>
                    <span style="background-color:#aab7b7" class="color-tag clickable" data-color="#aab7b7"></span>
                    <span style="background-color:#f1c40f" class="color-tag clickable" data-color="#f1c40f"></span>
                    <span style="background-color:#e18a00" class="color-tag clickable" data-color="#e18a00"></span>
                    <span style="background-color:#e74c3c" class="color-tag clickable" data-color="#e74c3c"></span>
                    <span style="background-color:#d43480" class="color-tag clickable" data-color="#d43480"></span>
                    <span style="background-color:#ad159e" class="color-tag clickable" data-color="#ad159e"></span>
                    <span style="background-color:#34495e" class="color-tag clickable" data-color="#34495e"></span>
                    <span style="background-color:#dbadff" class="color-tag clickable" data-color="#dbadff"></span>
                    <span style="background-color:#f05050" class="color-tag clickable" data-color="#f05050"></span>
                    <input id="color_tag" type="hidden" name="color" value="#83c340">
                </div>
            </div>
            <button type="submit" class="btn btn-primary text-left">Save</button>
          </form>
        </div>
        <div class="modal-footer border-top-0 modal-butn text-left">
         
          </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
        $(document).ready(function(){
          $('.deletetholiday').on('click',function(){ 
             var holiday_id=$(this).attr("holiday_id");
             // alert(holiday_id);
           if(confirm("Are you Sure want to delete this record?") ==true)
            {       
            // alert(owner_id);         
                $.ajax({
                  url:"<?=base_url('Utilities/DeleteHoliday')?>",
                  type:"post",
                  data:{holiday_id:holiday_id},
                  success:function(response)
                  {   
                  response=JSON.parse(response);             
                     if (response==1)
                      {
                        swal("Holiday", "Event Delete successfully", "success")
                   // alert('');
                    location.reload();
                    
                       }
                       else{
                        swal("Holiday", "Try Again", "error")
                   // alert('');
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
      $("#add_holiday").submit(function(e){
       e.preventDefault();
          var formData= new FormData($(this)[0]);
          $.ajax({
            url:"<?=base_url()?>Utilities/add_holiday",
            type:"post",
             data:formData,
             contentType:false,
             processData:false,
             cache:false,
            success:function(response)
            {
              var response=JSON.parse(response);
              if(response==1)
              {
                $('#add_holiday').trigger("reset");
                swal("Successfull", "Holiday Added Successfully", "success");
              }
              else
              {
               swal("OOPS", "Something Went Wrong", "error");
              }
            }
         });
    });


  $(document).on('click','.clickable',function(){
    var el=$(this);
    $( ".clickable" ).removeClass( "active" );
    el.addClass("active");
    var color_code=el.attr('data-color');
    $('#color_tag').val(color_code);
  })
</script>
<script type="text/javascript">
    $(function () {
        $('.datetimepicker10').datetimepicker({
            viewMode: 'years',
            format: 'YYYY-MM-DD'
        });
    });

      $(function () {
        $('.datetimepicker11').datetimepicker({
            viewMode: 'years',
            format: 'YYYY'
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
  <script type="text/javascript">
  $(document).ready(function() {
    $('#award_list').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
