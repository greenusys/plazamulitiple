
<style type="">
  .nav-item:active,.nav-link.active
  {
    background: unset !important;
    border-top:2px solid #008df1 !important;
    border-bottom: 0px !important;
  }
</style>

  <div class="row px-2 mt-3">
    <div class="col-md-12">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link  text-dark active" data-toggle="tab" href="#home">Indicator List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" data-toggle="tab" href="#menu1">Set Indicator</a>
        </li>
      </ul>
  <!-- Tab panes -->
      <div class="tab-content">
        <div id="home" class="tab-pane active bg-white p-3"><br>
          <h3>IT / Collaborative</h3>
            <div class="table-responsive">      
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Designation</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php $sno=1;
                 foreach ($fetch_indicator as $fetch){?>
                  <tr>
                    <td class="text-center"><?=$sno?></td>
                    <td class="text-capitalize text-center"><?=$fetch->designations?></td>
                     <td class="text-center"><span class="bg-primary"><i class="fa fa-list-alt text-white p-2"></i></span></td>
                  </tr>
              <?php 
              $sno++; }?>
                </tbody>
              </table>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade bg-white p-3 col-md-12 p-3">
        <form id="indicator" role="form" enctype="multipart/form-data" data-parsley-validate="">
      <div class="form-group row" id="border-none">
        <label class="col-sm-3 control-label text-right">Designation <span class="text-danger">*</span></label>
        <div class="col-sm-6">
         <select name="designations_id" class="form-control select_box" style="width:100%" required>
            <option value="">select designation</option>
            <?php if (!empty($all_department_info)): foreach ($all_department_info as $dept_name => $v_department_info) : ?>
                <?php if (!empty($v_department_info)):
                    if (!empty($all_dept_info[$dept_name]->deptname)) {
                        $deptname = $all_dept_info[$dept_name]->deptname;
                    } else {
                        $deptname ='undefined_department';
                    }
                    ?>
                    <optgroup label="<?php echo $deptname; ?>">
                        <?php foreach ($v_department_info as $designation) : ?>
                            <option value="<?php echo $designation->designations_id; ?>"
                                <?php
                                if (!empty($job_posted->designations_id)) {
                                    echo $designation->designations_id == $job_posted->designations_id ? 'selected' : '';
                                }
                                ?>><?php echo $designation->designations ?>
                                  
                                </option>
                        <?php endforeach; ?>
                    </optgroup>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </select>
        </div>
    </div>
    
       <div class="row">
      <div class="col-sm-6">
          <div class="panel panel-custom border">
              <div class="panel-heading p-2" style="border-bottom: 2px solid #23b7e5;">
                  <h4 class="panel-title"
                      style="margin-left: 8px;">Technical Competencies</h4>
              </div>
              <div class="box-body p-4">
                  <div class="form-group row" id="border-none">
                      <label class="col-sm-6  control-label">Customer Experience Management</label>
                      <div class="col-sm-5">
                          <select name="customer_experiece_management" class="form-control ">
                              <option value="0">None</option>
                              <option
                                  value="1" > Beginner</option>
                              <option
                                  value="2" > Intermediate</option>
                              <option
                                  value="3" > Advanced</option>
                              <option
                                  value="4" > Expert / Leader</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row" id="border-none">
                      <label class="col-sm-6  control-label">Marketing </label>
                      <div class="col-sm-5">
                          <select name="marketing" class="form-control">
                              <option value="0">None</option>
                              <option
                                  value="1" > Beginner</option>
                              <option
                                  value="2" > Intermediate</option>
                              <option
                                  value="3" > Advanced</option>
                              <option
                                  value="4" > Expert / Leader</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row" id="border-none">
                      <label class="col-sm-6  control-label">Management </label>
                      <div class="col-sm-5">
                          <select name="management" class="form-control">
                              <option value="0">None</option>
                              <option
                                  value="1" > Beginner</option>
                              <option
                                  value="2" > Intermediate</option>
                              <option
                                  value="3" > Advanced</option>
                              <option
                                  value="4" > Expert / Leader</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row" id="border-none">
                      <label
                          class="col-sm-6  control-label">Administration  </label>
                      <div class="col-sm-5">
                          <select name="administration" class="form-control">
                              <option value="0">None</option>
                              <option
                                  value="1" > Beginner</option>
                              <option
                                  value="2" > Intermediate</option>
                              <option
                                  value="3" > Advanced</option>
                              <option
                                  value="4" > Expert / Leader</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row" id="border-none">
                      <label
                          class="col-sm-6  control-label">Presentation Skill </label>
                      <div class="col-sm-5">
                          <select name="presentation_skill" class="form-control">
                              <option value="0">None</option>
                              <option
                                  value="1" > Beginner</option>
                              <option
                                  value="2" > Intermediate</option>
                              <option
                                  value="3" > Advanced</option>
                              <option
                                  value="4" > Expert / Leader</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row" id="border-none">
                      <label
                          class="col-sm-6  control-label">Quality Of Work</label>
                      <div class="col-sm-5">
                          <select name="quality_of_work" class="form-control">
                              <option value="0">None</option>
                              <option
                                  value="1" > Beginner</option>
                              <option
                                  value="2" > Intermediate</option>
                              <option
                                  value="3" > Advanced</option>
                              <option
                                  value="4" > Expert / Leader</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row" id="border-none">
                      <label
                          class="col-sm-6  control-label">Efficiency</label>
                      <div class="col-sm-5">
                          <select name="efficiency" class="form-control">
                              <option value="0">None</option>
                              <option
                                  value="1" > Beginner</option>
                              <option
                                  value="2" > Intermediate</option>
                              <option
                                  value="3" > Advanced</option>
                              <option
                                  value="4" > Expert / Leader</option>
                          </select>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Technical Competency Ends ---->


      <!-- Behavioural Competency Ends ---->
      <div class="col-sm-6">
          <div class="panel panel-custom border">
              <div class="panel-heading p-2" style="border-bottom: 2px solid #23b7e5;">
                  <h4 class="panel-title"
                      style="margin-left: 8px;">Behavioural / Organizational Competencies </h4>
              </div>
              <div class="box-body p-4">
                  <div class="form-group row" id="border-none">
                      <label class="col-sm-6  control-label">Integrity </label>
                      <div class="col-sm-5">
                          <select name="integrity" class="form-control">
                              <option value="0">None</option>
                              <option
                                  value="1" > Beginner</option>
                              <option
                                  value="2" > Intermediate</option>
                              <option
                                  value="3" > Advanced</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row" id="border-none">
                      <label class="col-sm-6  control-label">Professionalism </label>
                      <div class="col-sm-5">
                          <select name="professionalism" class="form-control">
                              <option value="0">None</option>
                              <option
                                  value="1" > Beginner</option>
                              <option
                                  value="2" > Intermediate</option>
                              <option
                                  value="3" > Advanced</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row" id="border-none">
                      <label class="col-sm-6  control-label">Team Work</label>
                      <div class="col-sm-5">
                          <select name="team_work" class="form-control">
                              <option value="0">None</option>
                              <option
                                  value="1" > Beginner</option>
                              <option
                                  value="2" > Intermediate</option>
                              <option
                                  value="3" > Advanced</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row" id="border-none">
                      <label class="col-sm-6  control-label">Critical Thinking</label>
                      <div class="col-sm-5">
                          <select name="critical_thinking" class="form-control">
                              <option value="0">None</option>
                              <option
                                  value="1" > Beginner</option>
                              <option
                                  value="2" > Intermediate</option>
                              <option
                                  value="3" > Advanced</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row" id="border-none">
                      <label class="col-sm-6  control-label">Conflict Management</label>
                      <div class="col-sm-5">
                          <select name="conflict_management" class="form-control">
                              <option value="0">None</option>
                              <option
                                  value="1" > Beginner</option>
                              <option
                                  value="2" > Intermediate</option>
                              <option
                                  value="3" > Advanced</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row" id="border-none">
                      <label class="col-sm-6  control-label">Attendance</label>
                      <div class="col-sm-5">
                          <select name="attendance" class="form-control">
                              <option value="0">None</option>
                              <option
                                  value="1" > Beginner</option>
                              <option
                                  value="2" > Intermediate</option>
                              <option
                                  value="3" > Advanced</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row" id="border-none">
                      <label class="col-sm-6  control-label">Ability To Meet Deadline</label>
                      <div class="col-sm-5">
                          <select name="ability_to_meed_deadline" class="form-control">
                              <option value="0">None</option>
                              <option
                                  value="1" > Beginner</option>
                              <option
                                  value="2" > Intermediate</option>
                              <option
                                  value="3" > Advanced</option>
                          </select>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="row float-right mt-3 mr-1">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>




<script type="text/javascript">
      $("#indicator").submit(function(e){
      e.preventDefault();      
      var formData= new FormData($(this)[0]);
        $.ajax({
          url:"<?=base_url()?>Performance/create_indicator",
          type:"post",
           data:formData,
           contentType:false,
           processData:false,
           cache:false,
          success:function(response)
          {
             var response=JSON.parse(response);
            if(response.status==1)
            {
              swal("Indicator inserted Successfully!", "Created", "success");
            }
            else if(response.status=="0")
            {
             swal(response.msg, "Already Exists", "error");
            }
          }
       });
    });
</script>
