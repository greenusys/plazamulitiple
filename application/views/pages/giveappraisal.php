<body class="bg-light">
    <div class="container-fluid">
	    <div class="card shadow bg-white p-3 mt-5">
			<div class="row">
				<div class="col-md-12">
				   <h6 class="font-weight-bold">Give Performance Appraisal</h6>
				</div>
			</div>
			<div class="line"></div>
			<div class="row mt-5">
				<div class="col-sm-12">
					 <form role="form" data-parsley-validate="" novalidate=""
                      action="<?=base_url('Performance/giveAppraisal')?>" method="post"
                      class="form-horizontal" style="margin-top: 20px;">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="row">
										<div class="offset-2 col-sm-2 text-right">
											<label for="exampleInputEmail1" class="ml-5">Employee <span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-6">
										 <select name="user_id" id="employee" class="form-control select_box" required="">
										 	<option value="" disabled="" selected="">Select Employee</option>
		                                <?php if (!empty($all_employee)): ?>
                                    <?php foreach ($all_employee as $dept_name => $v_all_employee) : ?>
                                        <optgroup label="<?php echo $dept_name; ?>">
                                            <?php if (!empty($v_all_employee)):foreach ($v_all_employee as $v_employee) : ?>
                                                <option value="<?php echo $v_employee->user_id; ?>"
                                                   >
                                                   <?php echo $v_employee->fullname . ' ( ' . $v_employee->designations . ' )' ?></option>
                                            <?php endforeach; ?>
                                            <?php endif; ?>
                                        </optgroup>
                                    <?php endforeach; ?>
                                <?php endif; ?>
											</select>
										</div>
									</div>
								</div> 
								
								<div class="form-group">
									<div class="row">
										 <div class="offset-2 col-sm-2 text-right">
						                  <label for="exampleInputEmail1" class="pt-2">Select Month<sup class="text-danger">*</sup></label>
						              </div>
										<div class="col-sm-6">
							                <div class='input-group date form-group' id='datetimepicker10'>
							                     <input type="text" required="" value="<?php
                                if (!empty($appraisal_month)) {
                                    echo $appraisal_month;
                                } elseif (!empty($get_appraisal_info->appraisal_month)) {
                                    echo $get_appraisal_info->appraisal_month;
                                }
                                ?>" class="form-control monthyear" name="appraisal_month" autocomplete="off" />
							                    <span class="input-group-addon">
							                      <span ><i class="fa fa-calendar"></i></span>
							                  </span>
							               </div>
							              </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-2">
						   <button type="submit" class="btn btn-primary m-auto" style="width:15%" id="go">Go</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid mb-3" id="table" >
		<?php
		if (!empty($indicator_flag)) {

    ?>
    <form role="form" id="give_performance_appraisal"
              action="<?=base_url('Performance/save_performance_appraisal')?>" method="post" class="form-horizontal" style="margin-top: 10px;">
              <?php
	    	  if (!empty($appraisal_once_given)) { ?>
            <h6 class="text-center"><span
                    style="color: red;">Appraisal_already_provided</span> <?= date('F Y', strtotime($appraisal_month)) ?>
            </h6>
        <?php } ?>
	    <div class="row">
	    	 
	    	
	        <div class="col-sm-6">
		        <div class="card shadow bg-white p-3 mt-5">
			        <div class="row">
						<div class="col-md-12">
						   <h6 class="font-weight-bold">Technical Competencies</h6>
						</div>
					</div>
			        <div class="line"></div>
					<div class="row mt-3">
				       <div class="col-sm-12">
					        <table class="table border table-striped">
							    <thead>
									<tr>
									    <th scope="col">Indicator</th>
									    <th scope="col">Expected Value</th>
									    <th scope="col">Set Value</th>
									</tr>
							    </thead>
							    <tbody>
								<tr>
									<td>Customer Experience Management</td>
									<td>
									<?php

                                if (!empty($performance_indicator_details->customer_experiece_management) && $performance_indicator_details->customer_experiece_management == 1) 
                                {
                                    echo 'Beginner';
                                } 
                                elseif (!empty($performance_indicator_details->customer_experiece_management) && $performance_indicator_details->customer_experiece_management == 2) 
                                {
                                    echo 'Intermediate';
                                } 
                                elseif (!empty($performance_indicator_details->customer_experiece_management) && $performance_indicator_details->customer_experiece_management == 3) 
                                {
                                    echo 'Advanced';
                                } 
                                elseif (!empty($performance_indicator_details->customer_experiece_management) && $performance_indicator_details->customer_experiece_management == 4) 
                                {
                                    echo 'Expert_leader';
                                } 
                                else 
                                {
                                    echo "<span style='color:red;font-style:italic;line-height:2.4;'>Not_set</span>";
                                }
                                ?></td>
						 		<td>
                                <?php if (!empty($performance_indicator_details->customer_experiece_management) && $performance_indicator_details->customer_experiece_management != 0) { ?>
                                    <select name="customer_experiece_management" class="form-control">
                                        <option value="">None</option>
                                        <option value="1" selected="<?= (!empty($get_appraisal_info->customer_experiece_management) && $get_appraisal_info->customer_experiece_management == 1 ? 'selected' : '')?>">Beginner</option>
                                        <option
                                            value="2" selected="<?= (!empty($get_appraisal_info->customer_experiece_management) && $get_appraisal_info->customer_experiece_management == 2 ? 'selected' : '')?>">intermediate</option>
                                        <option
                                            value="3" selected="<?= (!empty($get_appraisal_info->customer_experiece_management) && $get_appraisal_info->customer_experiece_management == 3 ? 'selected' : '') ?>">Advanced</option>
                                        <option
                                            value="4" selected="<?= (!empty($get_appraisal_info->customer_experiece_management) && $get_appraisal_info->customer_experiece_management == 4 ? 'selected' : '') ?>">Expert_leader</option>
                                    </select>
                                <?php } ?>
                            	</td>
							</tr>
							<tr> <!-- marketing row ---->
                            <td>Marketing</td>
                            <td>
									<?php

                                if (!empty($performance_indicator_details->marketing) && $performance_indicator_details->marketing == 1) 
                                {
                                    echo 'Beginner';
                                } 
                                elseif (!empty($performance_indicator_details->marketing) && $performance_indicator_details->marketing == 2) 
                                {
                                    echo 'Intermediate';
                                } 
                                elseif (!empty($performance_indicator_details->marketing) && $performance_indicator_details->marketing == 3) 
                                {
                                    echo 'Advanced';
                                } 
                                elseif (!empty($performance_indicator_details->marketing) && $performance_indicator_details->marketing == 4) 
                                {
                                    echo 'Expert_leader';
                                } 
                                else 
                                {
                                    echo "<span style='color:red;font-style:italic;line-height:2.4;'>Not_set</span>";
                                }
                                ?></td>
                            <td>
                                <?php if (!empty($performance_indicator_details->marketing) && $performance_indicator_details->marketing != 0) { ?>
                                    <select name="marketing" class="form-control">
                                        <option value="">None</option>
                                        <option value="1" selected="<?= (!empty($get_appraisal_info->marketing) && $get_appraisal_info->marketing == 1 ? 'selected' : '') ?>">Beginner</option>
                                        <option value="2" selected="<?= (!empty($get_appraisal_info->marketing) && $get_appraisal_info->marketing == 2 ? 'selected' : '') ?>">Intermediate</option>
                                        <option value="3" selected="<?= (!empty($get_appraisal_info->marketing) && $get_appraisal_info->marketing == 3 ? 'selected' : '') ?>">Advanced</option>
                                        <option  value="4" selected="<?= (!empty($get_appraisal_info->marketing) && $get_appraisal_info->marketing == 4 ? 'selected' : '') ?>">Expert_leader</option>
                                    </select>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr> <!-- management row ---->
                            <td>Management</td>
                             <td>
									<?php

                                if (!empty($performance_indicator_details->management) && $performance_indicator_details->management == 1) 
                                {
                                    echo 'Beginner';
                                } 
                                elseif (!empty($performance_indicator_details->management) && $performance_indicator_details->management == 2) 
                                {
                                    echo 'Intermediate';
                                } 
                                elseif (!empty($performance_indicator_details->management) && $performance_indicator_details->management == 3) 
                                {
                                    echo 'Advanced';
                                } 
                                elseif (!empty($performance_indicator_details->management) && $performance_indicator_details->management == 4) 
                                {
                                    echo 'Expert_leader';
                                } 
                                else 
                                {
                                    echo "<span style='color:red;font-style:italic;line-height:2.4;'>Not_set</span>";
                                }
                                ?></td>
                            <td>
                                <?php if (!empty($performance_indicator_details->management) && $performance_indicator_details->management != 0) { ?>
                                    <select name="management" class="form-control">
                                        <option value="">None</option>
                                        <option
                                            value="1" selected="<?= (!empty($get_appraisal_info->management) && $get_appraisal_info->management == 1 ? 'selected' : '') ?>">Beginner</option>
                                        <option
                                            value="2" selected="<?= (!empty($get_appraisal_info->management) && $get_appraisal_info->management == 2 ? 'selected' : '') ?>"> Intermediate</option>
                                        <option
                                            value="3" selected="<?= (!empty($get_appraisal_info->management) && $get_appraisal_info->management == 3 ? 'selected' : '') ?>"> Advanced</option>
                                        <option
                                            value="4" selected="<?= (!empty($get_appraisal_info->management) && $get_appraisal_info->management == 4 ? 'selected' : '') ?>"> Expert_leader</option>
                                    </select>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr> <!-- administration row ---->
                            <td>Administration</td>
                             <td>
									<?php

                                if (!empty($performance_indicator_details->administration) && $performance_indicator_details->administration == 1) 
                                {
                                    echo 'Beginner';
                                } 
                                elseif (!empty($performance_indicator_details->administration) && $performance_indicator_details->administration == 2) 
                                {
                                    echo 'Intermediate';
                                } 
                                elseif (!empty($performance_indicator_details->administration) && $performance_indicator_details->administration == 3) 
                                {
                                    echo 'Advanced';
                                } 
                                elseif (!empty($performance_indicator_details->administration) && $performance_indicator_details->administration == 4) 
                                {
                                    echo 'Expert_leader';
                                } 
                                else 
                                {
                                    echo "<span style='color:red;font-style:italic;line-height:2.4;'>Not_set</span>";
                                }
                                ?></td>
                            <td>
                                <?php if (!empty($performance_indicator_details->administration) && $performance_indicator_details->administration != 0) { ?>
                                    <select name="administration" class="form-control">
                                        <option value="">None</option>
                                        <option
                                            value="1" selected="<?= (!empty($get_appraisal_info->administration) && $get_appraisal_info->administration == 1 ? 'selected' : '') ?>">Beginner</option>
                                        <option
                                            value="2" selected="<?= (!empty($get_appraisal_info->administration) && $get_appraisal_info->administration == 2 ? 'selected' : '') ?>"> Intermediate</option>
                                        <option
                                            value="3" selected="<?= (!empty($get_appraisal_info->administration) && $get_appraisal_info->administration == 3 ? 'selected' : '') ?>"> Advanced</option>
                                        <option
                                            value="4" selected="<?= (!empty($get_appraisal_info->administration) && $get_appraisal_info->administration == 4 ? 'selected' : '') ?>">Expert_leader</option>
                                    </select>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr> <!-- presentation_skill row ---->
                            <td>Presentation_skill</td>
                            <td>
									<?php

                                if (!empty($performance_indicator_details->presentation_skill) && $performance_indicator_details->presentation_skill == 1) 
                                {
                                    echo 'Beginner';
                                } 
                                elseif (!empty($performance_indicator_details->presentation_skill) && $performance_indicator_details->presentation_skill == 2) 
                                {
                                    echo 'Intermediate';
                                } 
                                elseif (!empty($performance_indicator_details->presentation_skill) && $performance_indicator_details->presentation_skill == 3) 
                                {
                                    echo 'Advanced';
                                } 
                                elseif (!empty($performance_indicator_details->presentation_skill) && $performance_indicator_details->presentation_skill == 4) 
                                {
                                    echo 'Expert_leader';
                                } 
                                else 
                                {
                                    echo "<span style='color:red;font-style:italic;line-height:2.4;'>Not_set</span>";
                                }
                                ?></td>
                            <td>
                                <?php if (!empty($performance_indicator_details->presentation_skill) && $performance_indicator_details->presentation_skill != 0) { ?>
                                    <select name="presentation_skill" class="form-control">
                                        <option value="">None</option>
                                        <option
                                            value="1" selected="<?= (!empty($get_appraisal_info->presentation_skill) && $get_appraisal_info->presentation_skill == 1 ? 'selected' : '') ?>">Beginner</option>
                                        <option
                                            value="2" selected="<?= (!empty($get_appraisal_info->presentation_skill) && $get_appraisal_info->presentation_skill == 2 ? 'selected' : '') ?>">Intermediate</option>
                                        <option
                                            value="3" selected="<?= (!empty($get_appraisal_info->presentation_skill) && $get_appraisal_info->presentation_skill == 3 ? 'selected' : '') ?>"> Advanced</option>
                                        <option
                                            value="4" selected="<?= (!empty($get_appraisal_info->presentation_skill) && $get_appraisal_info->presentation_skill == 4 ? 'selected' : '') ?>"> Expert_leader</option>
                                    </select>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr> <!-- quality_of_work row ---->
                            <td>Quality_of_work</td>
                            <td>
									<?php

                                if (!empty($performance_indicator_details->quality_of_work) && $performance_indicator_details->quality_of_work == 1) 
                                {
                                    echo 'Beginner';
                                } 
                                elseif (!empty($performance_indicator_details->quality_of_work) && $performance_indicator_details->quality_of_work == 2) 
                                {
                                    echo 'Intermediate';
                                } 
                                elseif (!empty($performance_indicator_details->quality_of_work) && $performance_indicator_details->quality_of_work == 3) 
                                {
                                    echo 'Advanced';
                                } 
                                elseif (!empty($performance_indicator_details->quality_of_work) && $performance_indicator_details->quality_of_work == 4) 
                                {
                                    echo 'Expert_leader';
                                } 
                                else 
                                {
                                    echo "<span style='color:red;font-style:italic;line-height:2.4;'>Not_set</span>";
                                }
                                ?></td>
                            <td>
                                <?php if (!empty($performance_indicator_details->quality_of_work) && $performance_indicator_details->quality_of_work != 0) { ?>
                                    <select name="quality_of_work" class="form-control">
                                        <option value="">None</option>
                                        <option
                                            value="1" selected="<?= (!empty($get_appraisal_info->quality_of_work) && $get_appraisal_info->quality_of_work == 1 ? 'selected' : '') ?>">Beginner</option>
                                        <option
                                            value="2" selected="<?= (!empty($get_appraisal_info->quality_of_work) && $get_appraisal_info->quality_of_work == 2 ? 'selected' : '') ?>"> Intermediate</option>
                                        <option
                                            value="3" selected="<?= (!empty($get_appraisal_info->quality_of_work) && $get_appraisal_info->quality_of_work == 3 ? 'selected' : '') ?>"> Advanced</option>
                                        <option
                                            value="4" selected="<?= (!empty($get_appraisal_info->quality_of_work) && $get_appraisal_info->quality_of_work == 4 ? 'selected' : '') ?>"> Expert_leader</option>
                                    </select>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr> <!-- efficiency row ---->
                            <td>Efficiency</td>
                             <td>
									<?php

                                if (!empty($performance_indicator_details->efficiency) && $performance_indicator_details->efficiency == 1) 
                                {
                                    echo 'Beginner';
                                } 
                                elseif (!empty($performance_indicator_details->efficiency) && $performance_indicator_details->efficiency == 2) 
                                {
                                    echo 'Intermediate';
                                } 
                                elseif (!empty($performance_indicator_details->efficiency) && $performance_indicator_details->efficiency == 3) 
                                {
                                    echo 'Advanced';
                                } 
                                elseif (!empty($performance_indicator_details->efficiency) && $performance_indicator_details->efficiency == 4) 
                                {
                                    echo 'Expert_leader';
                                } 
                                else 
                                {
                                    echo "<span style='color:red;font-style:italic;line-height:2.4;'>Not_set</span>";
                                }
                                ?></td>
                            <td>
                                <?php if (!empty($performance_indicator_details->efficiency) && $performance_indicator_details->efficiency != 0) { ?>
                                    <select name="efficiency" class="form-control">
                                        <option value="">None</option>
                                        <option
                                            value="1" selected="<?= (!empty($get_appraisal_info->efficiency) && $get_appraisal_info->efficiency == 1 ? 'selected' : '') ?>">Beginner</option>
                                        <option
                                            value="2" selected="<?= (!empty($get_appraisal_info->efficiency) && $get_appraisal_info->efficiency == 2 ? 'selected' : '') ?>"> Intermediate</option>
                                        <option
                                            value="3" selected="<?= (!empty($get_appraisal_info->efficiency) && $get_appraisal_info->efficiency == 3 ? 'selected' : '') ?>"> Advanced</option>
                                        <option
                                            value="4" selected="<?= (!empty($get_appraisal_info->efficiency) && $get_appraisal_info->efficiency == 4 ? 'selected' : '') ?>"> Expert_leader</option>
                                    </select>
                                <?php } ?>
                            </td>
                        </tr>
							    </tbody>
							</table>
					   </div>
					</div>
			    </div>
		    </div>
		    <div class="col-sm-6">
		        <div class="card shadow bg-white p-3 mt-5">
			        <div class="row">
						<div class="col-md-12">
						   <h6 class="font-weight-bold">Behavioural / Organizational Competencies</h6>
						</div>
					</div>
			        <div class="line"></div>
					<div class="row mt-3">
				       <div class="col-sm-12">
					       <table class="table border table-striped">
							    <thead>
									<tr>
									    <th scope="col">Indicator</th>
									    <th scope="col">Expected Value</th>
									    <th scope="col">Set Value</th>
									</tr>
							    </thead>
							   <tbody>

                        <tr> <!-- integrity row ---->
                            <td>integrity</td>
                            <td><?php
                                if (!empty($performance_indicator_details->integrity) && $performance_indicator_details->integrity == 1) {
                                    echo Beginner;
                                } elseif (!empty($performance_indicator_details->integrity) && $performance_indicator_details->integrity == 2) {
                                    echo Intermediate;
                                } elseif (!empty($performance_indicator_details->integrity) && $performance_indicator_details->integrity == 3) {
                                    echo Advanced;
                                } 
                                else {
                                    echo "<span style='color:red;font-style:italic;line-height:2.4;'>Not_set</span>";
                                }
                                ?>
                            </td>
                            <td>
                                <?php if (!empty($performance_indicator_details->integrity) && $performance_indicator_details->integrity != 0) { ?>
                                    <select name="integrity" class="form-control">
                                        <option value="">None</option>
                                        <option
                                            value="1" selected="<?= (!empty($get_appraisal_info->integrity) && $get_appraisal_info->integrity == 1 ? 'selected' : '') ?>"> Beginner</option>
                                        <option
                                            value="2" selected="<?= (!empty($get_appraisal_info->integrity) && $get_appraisal_info->integrity == 2 ? 'selected' : '') ?>"> Intermediate</option>
                                        <option
                                            value="3" selected="<?= (!empty($get_appraisal_info->integrity) && $get_appraisal_info->integrity == 3 ? 'selected' : '') ?>"> Advanced</option>
                                    </select>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr> <!-- professionalism row ---->
                            <td>Professionalism</td>
                             <td><?php
                                if (!empty($performance_indicator_details->professionalism) && $performance_indicator_details->professionalism == 1) {
                                    echo Beginner;
                                } elseif (!empty($performance_indicator_details->professionalism) && $performance_indicator_details->professionalism == 2) {
                                    echo Intermediate;
                                } elseif (!empty($performance_indicator_details->professionalism) && $performance_indicator_details->professionalism == 3) {
                                    echo Advanced;
                                } else {
                                    echo "<span style='color:red;font-style:italic;line-height:2.4;'>Not_set</span>";
                                }
                                ?>
                            </td>
                            <td>
                                <?php if (!empty($performance_indicator_details->professionalism) && $performance_indicator_details->professionalism != 0) { ?>
                                    <select name="professionalism" class="form-control">
                                        <option value="">None</option>
                                        <option
                                            value="1" selected="<?= (!empty($get_appraisal_info->professionalism) && $get_appraisal_info->professionalism == 1 ? 'selected' : '') ?>"> Beginner</option>
                                        <option
                                            value="2" selected="<?= (!empty($get_appraisal_info->professionalism) && $get_appraisal_info->professionalism == 2 ? 'selected' : '') ?>"> Intermediate</option>
                                        <option
                                            value="3" selected="<?= (!empty($get_appraisal_info->professionalism) && $get_appraisal_info->professionalism == 3 ? 'selected' : '') ?>"> Advanced</option>
                                    </select>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr> <!-- team_work row ---->
                            <td>Team_work</td>
                            <td><?php
                                if (!empty($performance_indicator_details->team_work) && $performance_indicator_details->team_work == 1) {
                                    echo Beginner;
                                } elseif (!empty($performance_indicator_details->team_work) && $performance_indicator_details->team_work == 2) {
                                    echo Intermediate;
                                } elseif (!empty($performance_indicator_details->team_work) && $performance_indicator_details->team_work == 3) {
                                    echo Advanced;
                                } else {
                                    echo "<span style='color:red;font-style:italic;line-height:2.4;'>Not_set</span>";
                                }
                                ?>
                            </td>
                            <td>
                                <?php if (!empty($performance_indicator_details->team_work) && $performance_indicator_details->team_work != 0) { ?>
                                    <select name="team_work" class="form-control">
                                        <option value="">None</option>
                                        <option
                                            value="1" selected="<?= (!empty($get_appraisal_info->team_work) && $get_appraisal_info->team_work == 1 ? 'selected' : '') ?>"> Beginner</option>
                                        <option
                                            value="2" selected="<?= (!empty($get_appraisal_info->team_work) && $get_appraisal_info->team_work == 2 ? 'selected' : '') ?>"> Intermediate</option>
                                        <option
                                            value="3" selected="<?= (!empty($get_appraisal_info->team_work) && $get_appraisal_info->team_work == 3 ? 'selected' : '') ?>"> Advanced</option>
                                    </select>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr> <!-- critical_thinking row ---->
                            <td>Critical_thinking</td>
                            <td><?php
                                if (!empty($performance_indicator_details->critical_thinking) && $performance_indicator_details->critical_thinking == 1) {
                                    echo Beginner;
                                } elseif (!empty($performance_indicator_details->critical_thinking) && $performance_indicator_details->critical_thinking == 2) {
                                    echo Intermediate;
                                } elseif (!empty($performance_indicator_details->critical_thinking) && $performance_indicator_details->critical_thinking == 3) {
                                    echo Advanced;
                                } else {
                                    echo "<span style='color:red;font-style:italic;line-height:2.4;'>Not_set</span>";
                                }
                                ?>
                            </td>
                            <td>
                                <?php if (!empty($performance_indicator_details->critical_thinking) && $performance_indicator_details->critical_thinking != 0) { ?>
                                    <select name="critical_thinking" class="form-control">
                                        <option value="">None</option>
                                        <option
                                            value="1" selected="<?= (!empty($get_appraisal_info->critical_thinking) && $get_appraisal_info->critical_thinking == 1 ? 'selected' : '') ?>"> Beginner</option>
                                        <option
                                            value="2" selected="<?= (!empty($get_appraisal_info->critical_thinking) && $get_appraisal_info->critical_thinking == 2 ? 'selected' : '') ?>"> Intermediate</option>
                                        <option
                                            value="3" selected="<?= (!empty($get_appraisal_info->critical_thinking) && $get_appraisal_info->critical_thinking == 3 ? 'selected' : '') ?>"> Advanced</option>
                                    </select>
                                <?php } ?>
                            </td>
                        </tr>
                         <tr> <!-- conflict_management row ---->
                            <td>Conflict_management</td>
                            <td><?php
                                if (!empty($performance_indicator_details->conflict_management) && $performance_indicator_details->conflict_management == 1) {
                                    echo Beginner;
                                } elseif (!empty($performance_indicator_details->conflict_management) && $performance_indicator_details->conflict_management == 2) {
                                    echo Intermediate;
                                } elseif (!empty($performance_indicator_details->conflict_management) && $performance_indicator_details->conflict_management == 3) {
                                    echo Advanced;
                                } else {
                                    echo "<span style='color:red;font-style:italic;line-height:2.4;'>Not_set</span>";
                                }
                                ?>
                            </td>
                            <td>
                                <?php if (!empty($performance_indicator_details->conflict_management) && $performance_indicator_details->conflict_management != 0) { ?>
                                    <select name="conflict_management" class="form-control">
                                        <option value="">None</option>
                                        <option
                                            value="1" selected="<?= (!empty($get_appraisal_info->conflict_management) && $get_appraisal_info->conflict_management == 1 ? 'selected' : '') ?>"> Beginner</option>
                                        <option
                                            value="2" selected="<?= (!empty($get_appraisal_info->conflict_management) && $get_appraisal_info->conflict_management == 2 ? 'selected' : '') ?>"> Intermediate</option>
                                        <option
                                            value="3" selected="<?= (!empty($get_appraisal_info->conflict_management) && $get_appraisal_info->conflict_management == 3 ? 'selected' : '') ?>"> Advanced</option>
                                    </select>
                                <?php } ?>
                            </td>
                        </tr>
                         <tr> <!-- attendance row ---->
                            <td>Attendance</td>
                            <td><?php
                                if (!empty($performance_indicator_details->attendance) && $performance_indicator_details->attendance == 1) {
                                    echo Beginner;
                                } elseif (!empty($performance_indicator_details->attendance) && $performance_indicator_details->attendance == 2) {
                                    echo Intermediate;
                                } elseif (!empty($performance_indicator_details->attendance) && $performance_indicator_details->attendance == 3) {
                                    echo Advanced;
                                } else {
                                    echo "<span style='color:red;font-style:italic;line-height:2.4;'>Not_set</span>";
                                }
                                ?>
                            </td>
                            <td>
                                <?php if (!empty($performance_indicator_details->attendance) && $performance_indicator_details->attendance != 0) { ?>
                                    <select name="attendance" class="form-control">
                                        <option value="">None</option>
                                        <option
                                            value="1" selected="<?= (!empty($get_appraisal_info->attendance) && $get_appraisal_info->attendance == 1 ? 'selected' : '') ?>"> Beginner</option>
                                        <option
                                            value="2" selected="<?= (!empty($get_appraisal_info->attendance) && $get_appraisal_info->attendance == 2 ? 'selected' : '') ?>"> Intermediate</option>
                                        <option
                                            value="3" selected="<?= (!empty($get_appraisal_info->attendance) && $get_appraisal_info->attendance == 3 ? 'selected' : '') ?>"> Advanced</option>
                                    </select>
                                <?php } ?>
                            </td>
                        </tr>
                         <tr> <!-- ability_to_meed_deadline row ---->
                            <td>Ability_to_meet_deadline</td>
                            <td><?php
                                if (!empty($performance_indicator_details->ability_to_meed_deadline) && $performance_indicator_details->ability_to_meed_deadline == 1) {
                                    echo Beginner;
                                } elseif (!empty($performance_indicator_details->ability_to_meed_deadline) && $performance_indicator_details->ability_to_meed_deadline == 2) {
                                    echo Intermediate;
                                } elseif (!empty($performance_indicator_details->ability_to_meed_deadline) && $performance_indicator_details->ability_to_meed_deadline == 3) {
                                    echo Advanced;
                                } else {
                                    echo "<span style='color:red;font-style:italic;line-height:2.4;'>Not_set</span>";
                                }
                                ?>
                            </td>
                            <td>
                                <?php if (!empty($performance_indicator_details->ability_to_meed_deadline) && $performance_indicator_details->ability_to_meed_deadline != 0) { ?>
                                    <select name="ability_to_meed_deadline" class="form-control">
                                        <option value="">None</option>
                                        <option
                                            value="1" selected="<?= (!empty($get_appraisal_info->ability_to_meed_deadline) && $get_appraisal_info->ability_to_meed_deadline == 1 ? 'selected' : '') ?>"> Beginner</option>
                                        <option
                                            value="2" selected="<?= (!empty($get_appraisal_info->ability_to_meed_deadline) && $get_appraisal_info->ability_to_meed_deadline == 2 ? 'selected' : '') ?>"> Intermediate</option>
                                        <option
                                            value="3" selected="<?= (!empty($get_appraisal_info->ability_to_meed_deadline) && $get_appraisal_info->ability_to_meed_deadline == 3 ? 'selected' : '') ?>"> Advanced</option>
                                    </select>
                                <?php } ?>
                            </td>
                        </tr>
             
                        </tbody>
							</table>
					   </div>
					</div>
			    </div>
		    </div>
	    </div>
		<div class="row mt-5">
		    <div class="col-sm-10">
			    <div class="form-group">
					<div class="row">
						<div class=" col-sm-1">
							<label for="exampleInputEmail1" class="ml-3">Remarks:</label>
						</div>
						<div class="col-sm-10">
							<textarea name="general_remarks" id="remarks" cols="70" rows="1"></textarea>
						</div>
						<script>
						    CKEDITOR.replace('remarks');
						</script>
					</div>
				</div> 
			</div>
			<div> <!--- Hidden Inputs ---->
                    <input type="hidden" name="user_id" value="<?php
                    if (!empty($user_id)) {
                        echo $user_id;
                    } elseif (!empty($get_appraisal_info->user_id)) {
                        echo $get_appraisal_info->user_id;
                    }
                    ?>">
                    <input type="hidden" name="appraisal_month" value="<?php
                    if (!empty($appraisal_month)) {
                        echo $appraisal_month;
                    } elseif (!empty($get_appraisal_info->appraisal_month)) {
                        echo $get_appraisal_info->appraisal_month;
                    }
                    ?>">
                </div>
			<div class="col-sm-2">
			    <button type="submit" class="btn btn-primary m-auto w-100 font-weight-bold">Update</button>
			</div>
		</div>
	</form>
		<?php } ?>
	</div>
	
<script>
   $(document).ready(function(){
	  $("#go").click(function(){
		 $("#table").toggle();
	 });
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
 </body>
</html>