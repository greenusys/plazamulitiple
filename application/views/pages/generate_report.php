 <div class="row  mt-3">
		    <div class="card shadow w-100 p-2">
			    <h6>Daily Report</h6>
		            <div class="line mt-2"></div>
				<div class="mt-2 ">
					<?php if($this->session->flashdata('msg')){
						echo "<div class='alert-info alert'>".$this->session->flashdata('msg')."</div>";

					}?>
<?php
 $session=$this->session->userdata('logged_user');
// print_r($session);
// $user_id=$session[0]->employment_id;
?>

				    <form method="post" action="<?=base_url('User/addReport')?>" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="row">
										<div class="offset-2 col-sm-3 text-right">
											<label for="exampleInputEmail1" class="label-style ml-4">Send Report To<span class="text-danger"> *</span></label>
										</div>
										<div class="col-sm-4">
										    <div class="form-group">
							                  <select id="u_type" class="form-control selectpicker" name="user_type[]" multiple data-live-search="true" required>
												  <option value="admin">Admin</option>
												  <option value="emp">Employees</option>
											  </select>
							                </div>
								        </div>
									</div>
									<div class="row" id="admin_row" style="display: none;">
										<div class="offset-2 col-sm-3 text-right">
											<label for="exampleInputEmail1" class="label-style ml-4">Choose Admins</label>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<select class="form-control selectpicker" name="admin_list[]" multiple data-live-search="true">
													<option value="">--select--</option>
													<?php
													foreach ($admins as $adm){
														?>
														<option value="<?=$adm->email?>"><?=$adm->full_name?></option>
														<?php
													}
													?>
												</select>
											</div>
										</div>
									</div>
									<div class="row" id="emp_row" style="display: none;">
										<div class="offset-2 col-sm-3 text-right">
											<label for="exampleInputEmail1" class="label-style ml-4">Choose Employees</label>
										</div>
										<div class="col-sm-4">
										    <div class="form-group">
							                  <select class="form-control selectpicker" name="emp_list[]" multiple data-live-search="true">
												  <option value="">--select--</option>
												  <?php
												  foreach ($employees as $emp){
												  	?>
													  <option value="<?=$emp->email?>"><?=$emp->full_name?></option>
												  <?php
												  }
												  ?>
											  </select>
							                </div>
								        </div>
									</div>
									<div class="row">
										<div class="offset-2 col-sm-3 text-right">
											<label for="exampleInputEmail1" class="label-style ml-4">Date Of Report<span class="text-danger"> *</span></label>
										</div>
										<div class="col-sm-4">
										    <div class="form-group">
							                  <div class='input-group date datetimepicker3' >
							                    <input type='text' class="form-control" name="rpt_date" />
							                    <span class="input-group-addon">
							                      <span class="glyphicon glyphicon-time"></span>
							                    </span>
							                  </div>
							                </div>
								        </div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="offset-2 col-sm-3 text-right">
											<label for="exampleInputEmail1" class="label-style">End Of Day : Clock Out Time <span class="text-danger"> *</span></label>
										</div>
										<div class="col-sm-6">
											<input type="time" id="appt" name="rpt_out_time" min="09:00" max="18:00" required>
                                            <small>Office hours are 9:30 am to 6:30 pm</small>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="offset-2 col-sm-3 text-right">
											<label  class="label-style ml-4">Full Name<span class="text-danger"> *</span></label>
										</div>
										<div class="col-sm-6">
											<input type="text" disabled=""  value="<?=$session[0]->full_name?>" class="form-control" id="firstname"  placeholder="Enter First Name">
											<input type="hidden" name="your_name" value="<?=$session[0]->full_name?>">
										</div>

									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="offset-2 col-sm-3 text-right">
											<label for="employee" class="label-style ml-2">Employee Id<span class="text-danger"> *</span></label>
										</div>
										<div class="col-sm-6">
											<input type="text" disabled="" value="<?=$session[0]->employment_id?>" class="form-control" id="employee" name="rpt_employment_id" >
										</div>

									</div>
								</div>
								<input type="hidden" name="user_id" value="<?=$session[0]->user_id?>">
						<!-- 		<div class="form-group">
									<div class="row">
										<div class="col-sm-5 text-right">
											<label for="exampleInputEmail1" class="label-style ml-5">In Terms Of Production, How Was Your Day ?<span class="text-danger"> *</span></label>
										</div>
										<div class="col-sm-6 mt-2">
											<span class="fa fa-star checked size"></span>
											<span class="fa fa-star checked size"></span>
											<span class="fa fa-star checked size"></span>
											<span class="fa fa-star size"></span>
											<span class="fa fa-star size"></span>
										</div>
									</div>
								</div> -->
							<!-- 	<div class="form-group">
									<div class="row">
										<div class=" col-sm-5 text-right">
											<label for="exampleInputEmail1" class="label-style ml-5">Did You Update and Work With Trello Today ?<span class="text-danger"> *</span></label>
										</div>
										<div class="col-sm-6">
											<input type="radio" id="yes" name="choose" value="Yes"> Yes
											<br>
											<input type="radio" id="no" name="choose" value="No" > No
										</div>
									</div>
								</div> -->
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-4 text-right">
											<label  class="label-style ml-4">Did You Meet Your Goals Today ?<span class="text-danger"> *</span></label>
										</div>
										<div class="col-sm-6">
											<input type="radio"  name="rpt_meet_goals" value="Yes"> Yes
											<br>
											<input type="radio"  name="rpt_meet_goals" value="No"> No
											<br>
											<input type="radio"  name="rpt_meet_goals" value="Partially"> Partially
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class=" col-sm-5 text-right">
											<label class="label-style ml-5">Did You Experience Any Problem Or Issues That Keep Your Work From Progressing Today?<span class="text-danger"> *</span></label>
										</div>

										<div class="col-sm-6" >
											<textarea rows="3" name="rpt_issues" cols="69"></textarea>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="offset-2 col-sm-3 text-right">
											<label class="label-style ml-5">Daily Report Summary<span class="text-danger"> *</span></label>
										</div>

										<div class="col-sm-5 " >
											<textarea rows="3" name="rpt_summary" cols="69"></textarea>
											<h6 class="m-auto font">Write a general summary of your work activity today.</h6>
										</div>

									</div>
								</div>
								<div class="form-group">
									<div class="row mt-4">
										<div class="offset-2 col-sm-3 text-right">
											<label class="label-style ml-5">Task 1<span class="text-danger"> *</span></label>
										</div>
										<div class="col-sm-6">
											<textarea rows="3" name="rpt_task1" cols="69"></textarea>
											<h6 class="m-auto font"> Please explain a text you completed today.</h6>
										</div>

									</div>
								</div>
								<div class="form-group">
									<div class="row mt-4">
										<div class="offset-2 col-sm-3 text-right">
											<label class="label-style ml-5">Task 2</label>
										</div>
										<div class="col-sm-6">
											<textarea rows="3" name="rpt_task2" cols="69"></textarea>
											<h6 class="m-auto font"> Please explain a text you completed today.</h6>
										</div>

									</div>
								</div>
								<div class="form-group">
									<div class="row mt-4">
										<div class="offset-2 col-sm-3 text-right">
											<label class="label-style ml-5">Task 3</label>
										</div>
										<div class="col-sm-6">
											<textarea rows="3" name="rpt_task3" cols="69"></textarea>
											<h6 class="m-auto font"> Please explain a text you completed today.</h6>
										</div>

									</div>
								</div>
								<div class="form-group">
									<div class="row mt-4">
										<div class="offset-2 col-sm-3 text-right">
											<label class="label-style ml-5">Goals For Tomorrow <span class="text-danger"> *</span> </label>
										</div>
										<div class="col-sm-6">
											<textarea rows="3" name="rpt_tomorrow_goals" cols="69"></textarea>
											<h6 class="m-auto font"> Outline your goals for the next day.</h6>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row mt-4">
										<div class="offset-1 col-sm-4 text-right">
											<label class="label-style ml-5">Complaints & question & comments </label>
										</div>
										<div class="col-sm-6">
											<textarea rows="3" name="rpt_complaints" cols="69"></textarea>
											<h6 class="m-auto font">Optional</h6>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row mt-4">
										<div class="offset-2 col-sm-3 text-right">
											<label class="label-style ml-4">Attach File Or Document or Screenshots</label>
										</div>
										<div class="col-sm-6">
											<input type="file" id="myfile" name="myfile[]" multiple><br><br>

										</div>
									</div>
								</div>
								<div class="text-center mb-2"><button class="btn btn-success" type="submit">Submit</button></div>
							</div>

						</div>
					<form>
				</div>
		    </div>
		</div>
	</section>
</div>
 <script type="text/javascript">
  $(function () {
    $('.datetimepicker3').datetimepicker({
        viewMode: 'years',
        format: 'DD/MM/YYYY'
	    });
	});

  $(document).on('hide.bs.select','#u_type',function () {
	var selectedVal=$(this).val();
	if(selectedVal.indexOf('emp')!=-1){
		$('#emp_row').show()
	}else{
		$('#emp_row').hide()
	}
	if(selectedVal.indexOf('admin')!=-1){
		$('#admin_row').show()
	}else{
		$('#admin_row').hide()
	}
  })
</script>
