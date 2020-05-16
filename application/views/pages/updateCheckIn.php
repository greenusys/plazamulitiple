		<div class="container bg-white py-2 mt-1" id="ticket">
		    <div class="row">
  				<div class="col-md-6">
  				   <h6 class="mt">Mark Attendance Manually</h6>
  				</div>
          <div class="col-md-6">
            <?php
              print_r($myAttendanceData);
            ?>
              <div class="form-group"> 
                <label>Mark Present:</label>
                 <input class="btn btn-success" type="submit" value="Mark Present" id="markPresent">
              </div>
          </div>
  			</div>
			    <div class="line"></div>
	
       
        <?php  if(count($myCheckInData)==1 && $myCheckInData[0]->clockout_time==""): ?>
    			<!-- <div class="row">
    			    <div class=" col-md-8 offset-md-2">
    			       <form id="updateCheckIn">
    			           <div class="form-group">
    			               <label>Add Check In Time</label>
                            <div class="input-group date datetimepicker3 timepicker" id="datetimepicker3">
                                
                                <input type="text" class="form-control" name="clock_in" value="<?=date('H:i:')?>">
                                <span class="input-group-addon">
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </span>
                            </div>
    			           </div>
                     <div class="form-group"> 
                        <input type="text" class="form-control" name="clock_Id" value="<?=$myCheckInData[0]->clock_id?>" readonly>
                     </div>
                     
    			           <div class="form-group"> 
    			               <input class="btn btn-success" type="submit" value="Update">
    			           </div>
    			       </form>
    			    </div>
    			</div> -->
           <?php endif; ?>
        	<div class="row" >
              <div class=" col-md-8 offset-md-2">
                <!-- <?php print_r($myCheckInData)?> -->
                 <table class="table table-responsive text-center" id="tbl_">
                   <thead>
                     <th>S.No</th>
                     <th>Check In</th>
                     <th>Check Out</th>
                     <th>Action</th>

                   </thead>
                   <tbody>
                    <?php $i=1;?>
                    <?php
                      $h=0;
                      $min=0;
                      $sec=0;
                    ?>
                    <?php foreach($myCheckInData as $time) :?>
                      <?php
                          // $now_=date('H:i:s');
                          $start_date = new DateTime($time->clockin_time);
                          $since_start = $start_date->diff(new DateTime($time->clockout_time));
                          $h+=$since_start->h;
                          $min+=$since_start->i;
                          $sec+=$since_start->s;

                          if($sec > 59){
                            $min+=(int)($sec/60);
                            $sec=(int)($sec%60);
                          }
                          // echo $since_start->days.' days total<br>';
                          // echo $since_start->y.' years<br>';
                          // echo $since_start->m.' months<br>';
                          // echo $since_start->d.' days<br>';
                          // echo $since_start->h.' hours<br>';
                          // echo $since_start->i.' minutes<br>';
                          // echo $since_start->s.' seconds<br>';
                      ?>
                     <tr>
                       <td><?=$i?></td>
                       <td><?=$time->clockin_time?></td>
                       <td><?=($time->clockout_time=="")? "--" : $time->clockout_time ?></td>
                       <td><a href="javascript:void(0)" class="delete_ btn btn-danger" data-id="<?=$time->clock_id?>"><i class="fas fa-trash"></i></a></td>
                     </tr>
                     <?php $i++;?>
                   <?php endforeach; ?>
                     <tr>
                       <td colspan='2'> <strong>Total Working:</strong><span class="text-success"><i> <?=$h.' h : '.$min.' min : '.$sec.' seconds'?></i></span></td>
                     </tr>
                   </tbody>
                 </table>
              </div>
          </div>
         
		</div>
      </div>
    </div>
  </div>
  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script> -->
  <script>
    $(document).on('submit','#updateCheckIn',function(e){
          e.preventDefault();
          var formData= new FormData($(this)[0]);
         $.ajax({
             url:"<?=base_url('Attendance/updateCheckInData')?>",
             type:"post",
             cache:false,
             contentType:false,
             processData:false,
             data:formData,
             success:function(response){
                        console.log(response);
                        response=JSON.parse(response);
                        if(response.code==1){
                            swal("Great!!", response.msg, "success");
                        }else{
                            swal("Oops..!", response.msg, "warning");
                        }
                         $("#tbl_").load(location.href + " #tbl_"); 
                    }
         });
      });
    $(document).on('click','#markPresent',function(){
         $.ajax({
             url:"<?=base_url('Attendance/markPresent')?>",
             type:"post",
             success:function(response){
                        console.log(response);
                        // response=JSON.parse(response);
                        // if(response.code==1){
                        //     swal("Great!!", response.msg, "success");
                        // }else{
                        //     swal("Oops..!", response.msg, "warning");
                        // }
                        //  $("#tbl_").load(location.href + " #tbl_"); 
                    }
         });
      });
    $(document).on('click','.delete_',function(){
        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this record!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
             var id=$(this).attr('data-id');
                $.ajax({
                   url:"<?=base_url('Attendance/delete_clock_Status')?>",
                   type:"post",
                   data:{id:id,act:1},
                   success:function(response){
                              console.log(response);
                              response=JSON.parse(response);
                              if(response.code==1){
                                  swal("Great!!", response.msg, "success");
                              }else{
                                  swal("Oops..!", response.msg, "warning");
                              }
                              $("#tbl_").load(location.href + " #tbl_");
                          }
               });
          } else {
            swal("Your  record is safe!");
          }
        });
         
      });
     $(function () {
                $('.datetimepicker3').datetimepicker({
                    format: 'HH:mm:ss'
                });
            });
      
      
      
  </script>
