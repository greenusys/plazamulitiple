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
          <span><strong>Attendance Report</strong></span>
        </div>
      </div>
      <div class="p-2">
        <form role="form" enctype="multipart/form-data"
                      action="<?=base_url('Attendance/get_report')?>" method="post">
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-2 text-right">
                <label for="exampleInputEmail1" class="pt-2">Department<sup class="text-danger">*</sup></label>
              </div>
              <div class="col-sm-7">
                <div class="input-group">
                  <select required name="departments_id" class="form-control" id="emply">
                      <option value="">select department</option>
                      <?php if (!empty($all_department)): foreach ($all_department as $department):
                          if (!empty($department->deptname)) {
                              $deptname = $department->deptname;
                          } else {
                              $deptname ='undefined_department';
                          }
                          ?>
                          <option value="<?= $department->departments_id?>"
                              <?php if (!empty($departments_id)): ?>
                                  <?php echo $department->departments_id == $departments_id ? 'selected ' : '' ?>
                              <?php endif; ?>>
                              <?php echo $deptname ?>
                          </option>
                          <?php
                      endforeach;
                      endif;
                      ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group mb-0">
            <div class="row">
              <div class="offset-1 col-sm-2 text-right">
                  <label for="exampleInputEmail1" class="pt-2">Month<sup class="text-danger">*</sup></label>
              </div>
              <div class="col-sm-7">
                <div class='input-group date form-group' id='datetimepicker10'>
                  <input type='text' class="form-control" name="date" autocomplete="off"/>
                    <span class="input-group-addon">
                      <span ><i class="fa fa-calendar"></i></span>
                  </span>
               </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="offset-3 col-sm-3">
              <button type="submit" class="btn btn-primary">Search</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
 <?php if ((!empty($date)) && !empty($attendace_info)): ?>
<div class="row mt-4">
  <div class="col-md-12">
    <div class="card p-2">
      <div class="card-header row border-bottom py-1">
        <div class="col-md-6">
          <span><strong>Works Hours Details of <?= $month?></strong></span> 
         </div>
       <!--    <div class="col-md-6 text-right"><button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div> -->
      </div>
      <section id="tabs" class="project-tab p-3">

      <div class="row">
        <div class="col-md-12">
        <?php
        foreach ($attendace_info as $week => $v_attndc_info):
          ?>
          <div class="p-2">
            <div class="accordion" id="accordionExample">
              <div class="card mt-2 dd">
                <div class="card-header" data-toggle="collapse" data-target="#collapse<?=$week?>" aria-expanded="true">     
                  <span class="title pl-3">Week :<?= $week; ?></span>
                  <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                </div>
                <div id="collapse<?=$week?>" clock_id="" class="collapse" data-parent="#accordionExample">
                  <div class="card-body">
                    <table class=" table table-stripped table-bordered">
                      <thead>
                        <tr>
                        <th>Name</th>
                          <?php
                          if (!empty($v_attndc_info)): foreach ($v_attndc_info as $date => $attendace):
                              $total_hour = 0;
                              $total_minutes = 0;
                              ?>
                              <th>
                                  <?=date('d-m-Y',strtotime($date))?>
                              </th>
                          <?php endforeach; ?>
                          <?php endif; ?>
                        </tr>
                         
                        </tr>
                      </thead>
                       <tbody>
                        <?php
                        foreach ($employee_info as $v_employee):
                            ?>
                            <tr>
                                <td><?= $v_employee->fullname ?></td>
                                <?php
                                if (!empty($v_attndc_info)):foreach ($v_attndc_info as $date => $attendace):

                                    $total_hh = 0;
                                    $total_mm = 0;
                                    foreach ($attendace as $key => $v_attendace) {
                                        if ($key == $v_employee->user_id) {
                                            ?>
                                            <?php
                                            if (!empty($v_attendace)) {
                                                $hourly_leave = null;
                                                foreach ($v_attendace as $v_attandc) {
                                                    if ($v_attandc->attendance_status == 1) {
                                                        // calculate the start timestamp
                                                        $startdatetime = strtotime($v_attandc->date_in . " " . $v_attandc->clockin_time);
                                                        // calculate the end timestamp
                                                        $enddatetime = strtotime($v_attandc->date_out . " " . $v_attandc->clockout_time);
                                                        // calulate the difference in seconds
                                                        $difference = $enddatetime - $startdatetime;
                                                        $years = abs(floor($difference / 31536000));
                                                        $days = abs(floor(($difference - ($years * 31536000)) / 86400));
                                                        $hours = abs(floor(($difference - ($years * 31536000) - ($days * 86400)) / 3600));
                                                        $mins = abs(floor(($difference - ($years * 31536000) - ($days * 86400) - ($hours * 3600)) / 60));#floor($difference / 60);
                                                        $total_mm += $mins;
                                                        $total_hh += $hours;
                                                        if (!empty($v_attandc->leave_application_id)) { // check leave type is hours
                                                            $is_hours = get_row('tbl_leave_application', array('leave_application_id' => $v_attandc->leave_application_id));
                                                            if (!empty($is_hours) && $is_hours->leave_type == 'hours') {
                                                                $hourly_leave = "<small class='label label-pink text-sm' data-toggle='tooltip' data-placement='top'  title='hourly leave:$is_hours->hours :00 hour'>hourly leave</small>";

                                                            }
                                                        }
                                                        // output the result
                                                        //echo round($hoursDiff) . " : " . round($minutesDiffRemainder) . " m";
                                                    } elseif ($v_attandc->attendance_status == 'H') {
                                                        $holiday = 1;
                                                    } elseif ($v_attandc->attendance_status == '3') {
                                                        $leave = 1;
                                                    } elseif ($v_attandc->attendance_status == '0') {
                                                        $absent = 1;
                                                    }

                                                }
                                            }
                                        }
                                    }
                                    ?>
                                    <td>

                                        <?php
                                        if ($total_mm > 59) {
                                            $total_hh += intval($total_mm / 60);
                                            $total_mm = intval($total_mm % 60);
                                        }
                                        $total_hour += $total_hh;
                                        $total_minutes += $total_mm;

                                        if ($total_hh != 0 || $total_mm != 0) {
                                            echo $total_hh . " h " . $total_mm . " m" .' '. $hourly_leave;
                                        } elseif (!empty($holiday)) {
                                            echo '<span style="font-size: 12px;" class="label label-info std_p">Holiday</span>';
                                        } elseif (!empty($leave)) {
                                            echo '<span style="font-size: 12px;" class="label label-warning std_p">On leave</span>';
                                        } elseif (!empty ($absent)) {
                                            echo '<span style="font-size: 12px;" class="label label-danger std_p">Absent</span>';
                                        } else {
                                            echo $total_hh . " h " . $total_mm . " m";
                                        }
                                        ?>
                                    </td>
                                    <?php
                                    $holiday = NULL;
                                    $leave = NULL;
                                    $absent = NULL;
                                endforeach;
                                endif;
                                ?>
                            </tr>
                        <?php endforeach; ?>

                        <table>
                            <tr>
                                <td colspan="2" class="text-right">
                                    <strong
                                        style="margin-right: 10px; ">Total Working Hours
                                        : </strong>
                                </td>
                                <td>
                                    <?php
                                    if ($total_minutes >= 60) {
                                        $total_hour += intval($total_minutes / 60);
                                        $total_minutes = intval($total_minutes % 60);
                                    }
                                    echo $total_hour . "h : " . $total_minutes . " mins";
                                    ?>
                                </td>
                            </tr>
                        </table>
                  </table>
                </div>  
                </div>
              <div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

        </div>
      </div>
    </section>          
    </div>
  </div>
</div>
<?php endif; ?>
  <script>
     $(document).ready(function() {
        $("#emply").select2();
      });
  </script>
 <script type="text/javascript">
  $(function () {
      $('#datetimepicker10').datetimepicker({
          viewMode: 'years',
          format: 'YYYY-MM'
      });
  });
</script>
