


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
                    <span><strong>Select Employee</strong></span> 
                   </div>
                 <!--    <div class="col-md-6 text-right"><button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div> -->
                </div>


                <div class="p-2">
                <form  method="post" action="<?=base_url('Attendance/getTimeHistory')?>">
                  <div class="form-group pt-2">
                    <div class="row">
                      <div class="offset-1 col-sm-2 text-right">
                        <label for="exampleInputEmail1" class="pt-2">Employee<sup class="text-danger">*</sup></label>
                      </div>
                      <div class="col-sm-5">
                      
                          <div class="input-group">
                                <select name="emp_id" class="form-control" id="emply">
                                    <option selected="" disabled="" value="0">Select Employee</option>
                                    <?php
                                      foreach($Employee as $empD){
                                        // /print_r($empD);
                                        ?>
                                           <option value="<?=$empD->user_id?>"><?=$empD->fullname?> (<?=$empD->designations ?>) </option>   
                                        <?php
                                      }
                                    ?>
                        
                                </select>
                          </div>
                      </div>
                        <div class="col-md-2"><button class="btn btn-success">GO</button></div>
                    </div>
                  
                  </div>
                </form>
              </div>
            </div>
          </div>
          </div>
          <!-- <script type="text/javascript">
            $(document).on('change','#emply',function(){
              var userIdd=$(this).val();
              $.ajax({

              });
            });
          </script> -->
          <!-- <?php
            $current_year=date('Y');
            for($i=2020; $i<=$current_year; $i++){
              ?>
                  <a class="nav-item nav-link col-md-1 p-1 tab_year" id="nav-profile-tab" data-toggle="tab" href="#nav-<?=$i?>" role="tab" aria-controls="nav-profile" aria-selected="false"><?=$i?></a>
              <?php
            }
          ?> -->
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card p-2">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>Time History Details For:
                      <?php if(isset($EmpDetails)):?>
                     <a href="<?=base_url('User/userDetails/').$EmpDetails->user_id?>"><?=$EmpDetails->full_name?></a>
                   <?php endif; ?>
                   </strong></span> 
                   </div>
                 <!--    <div class="col-md-6 text-right"><button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div> -->
                </div>

                 <section id="tabs" class="project-tab p-3">
            
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs border-0 nav-fill row" id="nav-tab" role="tablist">
                               <?php
                                  if (!empty($mytime_info))
                                  {
                                    foreach ($mytime_info as $year => $v_time_info)
                                    { 
                                      if (!empty($v_time_info))
                                      { 
                                        if ($year == $active) {
                                            $cls="active";
                                        }else{
                                          $cls="";
                                        }
                                      ?>
                                      <!-- <li role="presentation" class="<?php
                                      
                                      ?>"> -->
                                      <a class="nav-item nav-link col-md-1 p-1 tab_year <?=$cls?>" id="nav-profile-tab" data-toggle="tab" href="#nav-<?=$year?>" role="tab" aria-controls="nav-profile" aria-selected="false"><?=$year?></a>
                                      <?php 
                                      } 
                                    }
                                  }
                                ?>
                              
                              
                                

                            </div>
                        </nav>

                      <script>
                          // $(document).ready(function(){
                          //   var year="nav-<?=$year?>";

                          // });
                      </script>
                        <div class="tab-content" id="nav-tabContent">
                          <?php
                            if (!empty($mytime_info))
                            {
                              foreach ($mytime_info as $year => $v_time_info)
                              { 
                                if (!empty($v_time_info))
                                { 
                                  if ($year == $active) {
                                      $cls="active";
                                  }else{
                                    $cls="d-none";
                                  }
                                  ?>

                                    <div class="tab-pane  <?=$cls?>" id="nav-<?=$year?>" role="tabpanel" aria-labelledby="nav-home-tab">
                                      <div class="p-2">
                                        <div class="accordion" id="accordionExample">
                                          <?php
                                            if (!empty($v_time_info)){
                                              foreach ($v_time_info as $week => $time_info){
                                                if (!empty($time_info)){
                                                  if($week==date('W')){
                                                    $show="show";
                                                  }else{
                                                    $show="";
                                                  }
                                                    // if(date('Y')==$year){
                                                        $dd="";
                                                    // }else{
                                                    //   $dd="d-none";
                                                    // }
                                                  // print_r( $time_info);
                                                  $curMont=date('m');
                                                  ?>
                                                    <div class="card mt-2 <?=$dd?>">
                                                      <div class="card-header" data-toggle="collapse" data-target="#collapse<?=$week?>" aria-expanded="true">     
                                                          <span class="title pl-3">Week : <?=$week   ?></span>
                                                          <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                                                      </div>

                                                      <div id="collapse<?=$week?>" clock_id="" class="collapse <?=$show?>" data-parent="#accordionExample">
                                                          

                                                        <?php
                                                        // print_r($time_info);
                                                            // foreach($time_info as $key => $value){
                                                            //   // echo $key.'||';
                                                            //   $tm=explode(':',$key);
                                                            //   echo $tm[0].'||';
                                                            
                                                            

                                                        ?>

                                                          <div class="card-body">
                                                              <table class=" table table-stripped table-bordered">
                                                                  <thead>
                                                                      <tr>
                                                                          <th>Clock In Time</th>
                                                                          <th>Clock Out Time</th>
                                                                          <th>IP Address</th>
                                                                          <th>Hours</th>
                                                                          <!-- <th>Action</th> -->
                                                                      </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                  <?php
                                                                if (!empty($time_info)){
                                                                  foreach ($time_info as $key => $v_mytime){
                                                                    $vtimeinfo = $v_mytime[0];
                                                                    if ($vtimeinfo->attendance_status == 1) 
                                                                    {
                                                                      $this->db->where(array('attendance_id' => $vtimeinfo->attendance_id));
                                                                      $timeinfo = $this->db->get('tbl_clock')->result();
                                                                      foreach ($timeinfo as $mytime){
                                                                            // print_r($key);
                                                                            
                                                                            $tiArr=explode(":",$key);
                                                                            $dInArr=explode('.',$tiArr[0]);
                                                                            $day_=trim($dInArr[1]);
                                                                            $month_=trim($dInArr[0]);
                                                                            $year_=trim($dInArr[2]);
                                                                            $dayIn_day=strftime("%b %d %A", mktime(20, 0, 0, $month_, $day_, $year_));
                                                                            $dOutArr=explode('.',$tiArr[1]);
                                                                            $day_2=trim($dOutArr[1]);
                                                                            $month_2=trim($dOutArr[0]);
                                                                            $year_2=trim($dOutArr[2]);
                                                                            $dayOut_day=strftime("%b %d %A", mktime(20, 0, 0, $month_2, $day_2, $year_2));
                                                                            if($curMont==$dInArr[0]){

                                                                            
                                                                          ?>
                                                                              <tr>
                                                                              
                                                                              <td colspan="2" style="background: gainsboro;">Day In:  <?=$dayIn_day?></td>
                                                                              <td colspan="3" style="background: gainsboro;">Day Out: <?=$dayOut_day ?></td>
                                                                              <!-- <td colspan="5" style="background: gainsboro;"><?=date('d M, D', strtotime($key)) ?></td> -->
                                                                              </tr>
                                                                              
                                                                              <tr>
                                                                              <td><?=$mytime->clockin_time?></td>
                                                                              <td>
                                                                                <?php
                                                                                  if (empty($mytime->clockout_time)) {
                                                                                      echo '<span class="text-danger">' . lang("currently_clock_in") . '<span>';
                                                                                  } else {
                                                                                      echo $mytime->clockout_time;
                                                                                  }
                                                                                ?>
                                                                              </td>
                                                                              <td><?= $mytime->ip_address ?></td>
                                                                              <td><?php
                                                                                $total_mm=0;
                                                                                $total_hh=0;
                                                                                  if (!empty($mytime->clockout_time)) {
                                                                                      // calculate the start timestamp
                                                                                      $startdatetime = strtotime($vtimeinfo->date_in . " " . $mytime->clockin_time);
                                                                                      // calculate the end timestamp
                                                                                      $enddatetime = strtotime($vtimeinfo->date_out . " " . $mytime->clockout_time);
                                                                                      // calulate the difference in seconds
                                                                                      $difference = $enddatetime - $startdatetime;
                                                                                      $years = abs(floor($difference / 31536000));
                                                                                      $days = abs(floor(($difference - ($years * 31536000)) / 86400));
                                                                                      $hours = abs(floor(($difference - ($years * 31536000) - ($days * 86400)) / 3600));
                                                                                      $mins = abs(floor(($difference - ($years * 31536000) - ($days * 86400) - ($hours * 3600)) / 60));#floor($difference / 60);
                                                                                      $total_mm += $mins;
                                                                                      $total_hh += $hours;
                                                                                      echo $hours . " : h " . $mins . " m";
                                                                                  }
                                                                                  ?>
                                                                                </td>
                                                                              <!-- <td>
                                                                                      <div class="">
                                                                                          <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                                                                          <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                                                                          <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                                                                          </div>
                                                                              </td> -->
                                                                              </tr>

                                                                          <?php
                                                                            }
                                                                      }
                                                                      }else if ($vtimeinfo->attendance_status == 0){
                                                                        echo 'Absent';
                                                                      }
                                                                      elseif ($vtimeinfo->attendance_status == 3){
                                                                        echo 'On leave';
                                                                      }
                                                                  }
                                                                }    
                                                                  ?>
                                                                  </tbody>
                                                              </table>
                                                          </div>


                                                      </div>
                                                  
                                                      
                                                    </div>
                                                  <?php
                                                  // }
                                                }
                                              }
                                            } 
                                          ?>
                                                  
                                               
                                        </div>
                                      </div>
                                    </div>
                                  <?php
                                  }
                                }
                              }
                            ?>
                        </div>
                    </div>
                </div>
          
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
