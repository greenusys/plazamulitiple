<?php
	// print_r($project_details);
	$project_details=$project_details[0];
?>
<style type="text/css">
.back
{
	background-color:white;
	color:black;
}
.active, .back:hover
{
	background-color: #23b7e5 !important;
	color:white;
}
.he
{
	 height:34px;
}
.top
{
	margin-top:-6px;
}
.top1
{
	margin-top:-25px;
}
.timer {
    font-size: 46px;
    text-align: center;
    display: inline-block;
    color: #555;
    font-weight: 300;
}
.imageuploadify .imageuploadify-images-list button.btn-default {
    display: block;
    color: #3AA0FF;
    /* border-color: #3AA0FF; */
    border-radius: -2em;
    margin: 20px auto;
    width: 25%;
    max-width: 500px;
    color:black;
}
.imageuploadify .imageuploadify-images-list span.imageuploadify-message {
    font-size: 19px;
  border-top: 0px solid #3AA0FF; 
     border-bottom: 0px solid #3AA0FF; 
    padding: 10px;
    display: inline-block;
    color:black;
}
</style>
  <style type="text/css">

.space { margin: 10px 0px 10px 0px; }
.header { background: #003267; background: linear-gradient(to right, #011329 0%,#00639e 44%,#011329 100%); padding:20px 10px; color: white; box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.75); }
.header a { color: white; }
.header h1 a { text-decoration: none; }
.header h1 { padding: 0px; margin: 0px; }
.main { padding: 10px; margin-top: 10px; }
</style>

<style>
.toolbar {
  margin: 10px 0px;
}

.toolbar > .toolbar-item:not(:last-child) {
  border-right: 1px solid #ccc;
}

.toolbar-item {
  padding: 0px 10px;
}

.toolbar-item a {
  text-decoration: none;
  color: black;
  display: inline-block;
  margin-right: 5px;
  font-size: 14px;
}
.selected-button {
  border-bottom: 2px solid orange;
}
#inp_amnt{
	display: none;
}
</style>
<div class=" mb-5">
		<div class="row mt-4">
		    <!-- <div class="col-sm-3 bg-white shadow">
		    	<div class="tab">
				   <div class="card shadow"  id="myDIV">
					   	<button class="tablinks btn  border p-2 text-left pl-5 back active" onclick="openCity(event, 'proj')">Project Details</button> -->
						<!-- <button class="tablinks btn border p-2 text-left pl-5 back" onclick="openCity(event, 'cal')">Calendar</button>
						<button class="tablinks btn border p-2 text-left pl-5 back" onclick="openCity(event, 'com')">Comments</button>
						<button class="tablinks btn border p-2 text-left pl-5 back" onclick="openCity(event, 'att')">Attachment</button>
						<button class="tablinks btn border p-2 text-left pl-5 back" onclick="openCity(event, 'mil')">Milestones</button>
						<button class="tablinks btn border p-2 text-left pl-5 back" onclick="openCity(event, 'task')">Tasks</button>
						<button class="tablinks btn border p-2 text-left pl-5 back" onclick="openCity(event, 'bug')">Bugs</button>
						<button class="tablinks btn border p-2 text-left pl-5 back" onclick="openCity(event, 'gant')">Gantt View</button>
						<button class="tablinks btn border p-2 text-left pl-5 back" onclick="openCity(event, 'note')">Notes</button>
						<button class="tablinks btn border p-2 text-left pl-5 back" onclick="openCity(event, 'time')">Timesheet</button>
						<button class="tablinks btn border p-2 text-left pl-5 back" onclick="openCity(event, 'tick')">Tickets</button>
						<button class="tablinks btn border p-2 text-left pl-5 back" onclick="openCity(event, 'invo')">Invoice</button>
						<button class="tablinks btn border p-2 text-left pl-5 back" onclick="openCity(event, 'esti')">Estimates</button>
						<button class="tablinks btn border p-2 text-left pl-5 back" onclick="openCity(event, 'expen')">Expense</button>
						<button class="tablinks btn border p-2 text-left pl-5 back" onclick="openCity(event, 'pro')">Project Setting</button>
						<button class="tablinks btn border p-2 text-left pl-5 back" onclick="openCity(event, 'act')">Activities</button> -->
				      <!-- <ul style="list-style:none" class="p-0">
					     <a href="basicdetails.php" class="text-dark text-decoration-none"><li class="border p-2 back active pl-4">Project Details</li></a>
						 <a href="bankdetails.php" class="text-dark text-decoration-none"><li class="border p-2 back pl-4">Calendar</li></a>
						 <a href="documentdetails.php" class="text-dark text-decoration-none"><li class="border p-2 back pl-4">Comments</li></a>
						 <a href="salarydetails.php" class="text-dark text-decoration-none"><li class="border p-2 back pl-4">Attachment</li></a>
						 <a href="timedetails.php" class="text-dark text-decoration-none"><li class="border p-2 back pl-4">Milestones</li></a>
						 <a href="leavedetails.php" class="text-dark text-decoration-none"><li class="border p-2 back pl-4">Tasks</li></a>
						 <a href="providentdetails.php" class="text-dark text-decoration-none"><li class="border p-2 back pl-4">Bugs</li></a>
						 <a href="overtimedetails.php" class="text-dark text-decoration-none"><li class="border p-2 back pl-4">Gantt View</li></a>
						 <a href="taskdetails.php" class="text-dark text-decoration-none"><li class="border p-2 back pl-4">Notes</li></a>
						 <a href="project.php" class="text-dark text-decoration-none"><li class="border p-2 back pl-4">Timesheet</li></a>
						 <a href="bugsdetails.php" class="text-dark text-decoration-none"><li class="border p-2 back pl-4">Tickets</li></a>
						 <a href="activitydetails.php" class="text-dark text-decoration-none"><li class=" p-2 back pl-4">Invoice</li>
						 </a>
						 <a href="taskdetails.php" class="text-dark text-decoration-none"><li class="border p-2 back pl-4">Estimates</li></a>
						 <a href="project.php" class="text-dark text-decoration-none"><li class="border p-2 back pl-4">Expense</li></a>
						 <a href="bugsdetails.php" class="text-dark text-decoration-none"><li class="border p-2 back pl-4">Project Setting</li></a>
						 <a href="activitydetails.php" class="text-dark text-decoration-none"><li class=" p-2 back pl-4">Activities</li>
					  </ul> -->
		<!-- 		   </div>
				</div>
			</div>
 -->
			<div class="col-md-12">
				<div id="proj" class="card tabcontent  d-block  border-0">
					<div class=" p-3" id="project" >
						
						<div class="row">
							<div class="col-sm-10">
				                <h6><?=$project_details->project_name?></h6>
				            </div>
				            <div class="col-sm-2">
				            	 <a href="<?=base_url('Projects/editProject/').$project_details->project_id?>" class="text-decoration-none text-primary" id="edits">Edit Projects</a>
				            </div>
				        </div>
					    <div class="line"></div>
					    <form >
						    <div class="row mt-4">
						    	<!-- <div class="col-md-12"> -->
							        
							          <div class="col-md-6">
									    <div class="form-group">
							              <div class="row">
							                <div class="offset-1 text-right col-sm-3">
							                  <label class="label-style">Project Name :</label>
							                </div>
							                <div class="col-sm-7">
							                     <label><?=$project_details->project_name?></label>
							                </div>
							              </div>
							            </div>
							            <div class="form-group">
							              <div class="row">
							                <div class="offset-1 text-right col-sm-3">
							                  <label class="label-style">Client : </label>
							                </div>
							                <div class="col-sm-7">
							                  <label class="label-style"><?=$project_details->name?> </label>
							                </div>
							              </div>
							            </div>
							            <div class="form-group">
							              <div class="row">
							                <div class="offset-1 col-sm-3 text-right">
							                  <label class="label-style">Start Date :</label>
							                </div>
							                <div class="col-sm-7">
							                   <label class="label-style"><?=$project_details->start_date?></label>
							                </div>
							              </div>
							            </div>
							            <div class="form-group">
							              <div class="row">
							                <div class="offset-1 col-sm-3 text-right">
							                  <label class="label-style">Billing Type :</label>
							                </div>
							                <div class="col-sm-7">
							                   <label class="label-style"><?=$project_details->billing_type?></label>
							                </div>
							              </div>
							            </div>
							            <div class="form-group">
							              <div class="row">
							                <div class="offset-1 col-sm-3 text-right">
							                  <label class="label-style">Demo Url : </label>
							                </div>
							                <div class="col-sm-7">
							                   <a href="#"><label class="label-style"><?=$project_details->demo_url?></label></a>
							                </div>
							              </div>
							            </div>
							            <div class="form-group">
							              <div class="row">
							                <div class="offset-1 col-sm-3 text-right">
							                  <label class="label-style ml-3">Status :</label>
							                </div>
							                <div class="col-sm-5 d-flex">
							                	<div class="refreshlocation">
							                	<input type="hidden" id="projectidss" value="<?=$project_details->project_id?>">
							                   <label class="rounded bg-warning p-1 he  text-white" ><?=$project_details->project_status?></label></div>
							                   <!-- <label class=" p-1 ml-3 top"><span class="bg-primary p-1 text-white"></span> -->
							                   	   <select class="ml-1 projectstatus form-control bg-success text-white" name="department">
							                   	   	    <option value="change">Change</option>
														<option value="started">Started</option>
														<option value="in_progress">In progress</option>
														<option value="on_hold">On Hold</option>
														<option value="cancel">Cancel</option>
														<option value="completed">Completed</option>
												   </select>
							                  
							                </div>
							              </div>
							            </div>
							       </div>
							       <div class="col-sm-6">
							       	  <!--  <div class="form-group">
							              <div class="row">
							                <div class="offset-1 col-sm-4">
							                  <label  class="label-style ml-3">Timer Status </label>
							                </div>
							                <div class="col-sm-7 d-flex">
							              
							                   <label  class="bg-danger p-1  text-white" ><?=$project_details->timer_status?></label>
							                   <label  class="bg-success p-1  text-white ml-3" >Start Timer</label>
							       		     </div>
							              </div>
							            </div> -->
							             <div class="form-group">
							              <div class="row">
							                <div class="offset-1 col-sm-3 text-right">
							                  <label  class="label-style">End Date :</label>
							                </div>
							                <div class="col-sm-7">
							                  <label  ><?=$project_details->end_date?></label>
							                </div>
							              </div>
							            </div>
							            <div class="form-group">
							              <div class="row">
							                <div class="offset-1 col-sm-3 text-right">
							                  <label  class="label-style">Estimate Hours :</label>
							                </div>
							                <div class="col-sm-7">
							                   <label  ><?=$project_details->estimate_hours?></label>
							                </div>
							              </div>
							            </div>
							            <div class="form-group">
							              <div class="row">
							                <div class="offset-1 col-sm-3 text-right">
							                  <label  class="label-style">Fixed Rate:</label>
							                </div>
							                <div class="col-sm-7">
							                   <label  ><?=$project_details->fixed_rate?></label>
							                </div>
							              </div>
							            </div>
					            		<div class="form-group">
							              <div class="row">
							                <div class="offset-1 col-sm-3 text-right">
							                  <label  class="label-style">Received Amount :</label>
							                </div>
							                <div class="col-sm-7">
							                   <label  ><?=$project_details->token_amount?></label>
							                </div>
							              </div>
							            </div>
				            			<div class="form-group">
							              <div class="row">
							                <div class="offset-1 col-sm-3 text-right">
							                  <label  class="label-style">Remaining Amount :</label>
							                </div>
							                <div class="col-sm-7">
							                   <label  ><?=$project_details->remaining_amt?></label>
							                </div>
							              </div>
							            </div>

							            <div class="form-group">
							              <div class="row">
							                <div class="offset-1 col-sm-3 text-right">
							                  <label  class="label-style ml-5">Budget :</label>
							                </div>
							                <div class="col-sm-7">
							                   <label  >00</label>
							                </div>
							              </div>
							            </div>
							            <div class="form-group">
							              <div class="row">
							                <div class="offset-1 col-sm-3 text-right">
							                  <label  class="label-style" >Total Earning :</label>
							                </div>
							                <div class="col-sm-7 ">
							                	 <label  >00</label>
							                	 <label class="btn btn-primary p-1" id="amnt">ADD</label>
							                	<div id="inp_amnt" >
								                   <input class="form-control" name="" >
								                   <button class="btn btn-primary p-1">Update</button>
								               </div>
							                </div>
							              </div>
							            </div>
<script type="text/javascript">
	$(document).on("click","#amnt",function(){
		$("#inp_amnt").slideToggle();
	})
</script>
							       <!--      <div class="form-group">
							              <div class="row">
							                <div class="offset-1 col-sm-4">
							                  <label  class="label-style ml-3">Participants</label>
							                </div>
							                <div class="col-sm-7">
							                   <label  >Everyone <i class="fa fa-question-circle"></i> &nbsp; <i class="fa fa-plus text-primary" data-toggle="modal" data-target="#myModal"></i></label>
							                </div>
							              </div>
							            </div> -->
							       </div>
					           </div>
					         <!--   <div class="row">
					           	    <div class="form-group">
									    <div class="row">
											<div class="offset-1 col-sm-3">
												<label  class="label-style">Completed: </label>
											</div>
											<div class="col-sm-8">
											    <div id="slider-range-min"></div>
												<div class="row bg-light">
												    <div class="col-sm-4">
														
															<label for="amount">Progress</label>
															<input type="text" id="amount" readonly style="border:0; color:#f6931f;width:40%; font-weight:bold;">
														
													</div>
													<div class="col-sm-4">
														<input type="checkbox" name="vehicle1" value="Bike"> Project Hours<br>
													</div>
													<div class="col-sm-4">
														<input type="checkbox" name="vehicle1" value="Bike"> Through Tasks<br>
													</div>
												</div>
											</div>
										</div>
									</div>
					           </div> -->
					       <!--     <div class="row text-center">
					           	    <div class="w-100">
						           	   <ul class="list-unstyled">
						           	   	   <li class="timer ">0 : 1 : 29</li>
						           	   	   <li>Hours &nbsp; Minutes &nbsp; Seconds</li>
						           	   	   <li>
						           	   	   	    <div class="row">
						           	   	   	    	<div class="offset-4 col-md-8">
								           	   	   	  <div class="form-group">
											              <div class="row">
											                <div class="offset-1 col-sm-3">
											                  <label  class="label-style ml-2">Total Expense:</label>
											                </div>
											                <div class="col-sm-2">
											                   <label  >â‚¬ 0,00</label>
											                </div>
											              </div>
										              </div>
										           </div>
										        </div>
						           	   	   </li>
						           	   	   <li>
						           	   	   	   <div class="row top1">
						           	   	   	    	<div class="offset-4 col-md-8">
								           	   	   	  <div class="form-group">
											              <div class="row">
											                <div class="offset-1 col-sm-3">
											                  <label  class="label-style">Billable Expense:</label>
											                </div>
											                <div class="col-sm-2">
											                   <label  >â‚¬ 0,00</label>
											                </div>
											              </div>
										              </div>
										           </div>
										        </div>
						           	   	   </li>
						           	   	   <li>
						           	   	   	    <div class="row top1">
						           	   	   	    	<div class="offset-4 col-md-8">
								           	   	   	  <div class="form-group">
											              <div class="row">
											                <div class="col-sm-4">
											                  <label  class="label-style">Non Billable Expense:</label>
											                </div>
											                <div class="col-sm-2">
											                   <label  >â‚¬ 0,00</label>
											                </div>
											              </div>
										              </div>
										           </div>
										        </div>
						           	   	   </li>
						           	   	   <li>
						           	   	   	   <div class="row top1">
						           	   	   	    	<div class="offset-4 col-md-8">
								           	   	   	  <div class="form-group">
											              <div class="row">
											                <div class="col-sm-4">
											                  <label  class="label-style ml-3">Billed Expense:</label>
											                </div>
											                <div class="col-sm-2">
											                   <label  >â‚¬ 0,00</label>
											                </div>
											              </div>
										              </div>
										           </div>
										        </div>
						           	   	   </li>
						           	   	   <li>
						           	   	   	   <div class="row top1">
						           	   	   	    	<div class="offset-4 col-md-8">
								           	   	   	  <div class="form-group">
											              <div class="row">
											                <div class="col-sm-4">
											                  <label  class="label-style ml-3">Unbilled Expense:</label>
											                </div>
											                <div class="col-sm-2">
											                   <label  >â‚¬ 0,00</label>
											                </div>
											              </div>
										              </div>
										           </div>
										        </div>
						           	   	   </li>
						           	   	   <li class="font-weight-bold "><h2>Total Bill : â‚¬ 50,00</h2></li>
						           	   </ul>
						           	</div>
					           </div> -->
				<!-- 	           <div class="row">
					           	    <div class="col-sm-4">
					           	    	<div class="form-group">
										    <div class="row">
												<div class="col-sm-12">
													<label  class="label-style">0 / 16 Days Gone (0% ) </label>
												</div>
												<div class="col-sm-12">
												    <div id="slider-range-min"></div>
													<div class="row bg-light">
													    <div class="col-sm-4">
															<input type="text" id="amount" readonly style="border:0; color:#f6931f;width:40%; font-weight:bold;">
														</div>
													</div>
												</div>
											 </div>
									    </div>
					           	    </div>	
					           	    <div class="col-sm-4">
					           	    	<div class="form-group">
										    <div class="row">
												<div class="col-sm-12">
													<label  class="label-style text-danger">Left Works</label>
												</div>
												<div class="col-sm-12">
												  
													<div class="row">
													    <div class="col-sm-12">
															<label  class="label-style">4 Hours : 58 Minutes : 31 Seconds </label>
														</div>
													</div>
												</div>
											 </div>
									    </div>
					           	    </div>	
					           	    <div class="col-sm-4">
					           	    	<div class="form-group">
										    <div class="row">
												<div class="col-sm-12">
													<label  class="label-style">0 / 0 Open Tasks (0% ) </label>
												</div>
												<div class="col-sm-12">
												    <div id="slider-range-min"></div>
													<div class="row bg-light">
													    <div class="col-sm-4">
															<input type="text" id="amount" readonly style="border:0; color:#f6931f;width:40%; font-weight:bold;">
														</div>
													</div>
												</div>
											 </div>
									    </div>
					           	    </div>	
					           </div>
					           <div class="row p-2 bg-light">
					           	<h6>dsgdfgfdgdf</h6>
					           </div> -->

					        </form>
					    </div>
				    </div>

				    <div class="container bg-white card shadow p-5" id="form" style="display:none">
					    <div class="row">
						    <div class="col-sm-8 cl-md-8 col-lg-8">
						        <form>
									<div class="form-group">
									    <div class="row">
											<div class="col-sm-3">
												<label >Project Name <span class="text-danger">*</span> </label>
											</div>
											<div class="col-sm-9">
												<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
											</div>
										</div>
									</div>
									<div class="form-group">
									    <div class="row">
											<div class="col-sm-3">
												<label >Select Client  <span class="text-danger">*</span> </label>
											</div>
											<div class="col-sm-8">
												<div class="input-group">
				                                    <select name="client_id" class="form-control select_box select2-hidden-accessible" style="width: 100%" required="" data-parsley-id="6" tabindex="-1" aria-hidden="true">
				                                        <option value="">Select Client</option>
				                                        <option value="1">GMAP</option>
				                                        <option value="2">HR</option>
				                                        <option value="3">IT</option>
				                                        <option value="4">BI</option>
				                                        <option value="5">Marketing ( Uro-Onco)</option>
				                                        <option value="6">R&amp;D</option>
				                                        <option value="7">Communication</option>
				                                        <option value="8">Global</option>
				                                        <option value="9">Medical</option>
				                                        <option value="10">Entreprise Excellence</option>
				                                        <option value="11">BI&amp;A</option>
				                                        <option value="12">Regulatory</option>
				                                        <option value="13">Purchasing</option>
				                                        <option value="14">ali</option>
				                                    </select>
					                            </div>
											</div>
											<div class="col-sm-1">
											    <button type="button" class="btn btn-light butn" data-toggle="modal" data-target="#exampleModal" data-toggle="tooltip" data-placement="top" title="New Client"><i class="fa fa-plus"></i></button>
											</div>
										</div>
									</div>
									<div class="form-group">
									    <div class="row">
											<div class="col-sm-3">
												<label >Progress </label>
											</div>
											<div class="col-sm-9">
											    <div id="slider-range-min"></div>
												<div class="row bg-light">
												    <div class="col-sm-4">
														
															<label for="amount">Progress</label>
															<input type="text" id="amount" readonly style="border:0; color:#f6931f;width:40%; font-weight:bold;">
														
													</div>
													<div class="col-sm-4">
														<input type="checkbox" name="vehicle1" value="Bike"> Project Hours<br>
													</div>
													<div class="col-sm-4">
														<input type="checkbox" name="vehicle1" value="Bike"> Through Tasks<br>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
									    <div class="row">
											<div class="col-sm-3">
												<label >Start Date  <span class="text-danger">*</span> </label>
											</div>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="datepicker">
											</div>
											<div class="col-sm-1">
											    <button type="button" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
											</div>
										</div>
									</div>
									<div class="form-group">
									    <div class="row">
											<div class="col-sm-3">
												<label >End Date  <span class="text-danger">*</span> </label>
											</div>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="datepicker">
											</div>
											<div class="col-sm-1">
											    <button type="button" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
											</div>
										</div>
									</div>
									<div class="form-group">
									    <div class="row">
											<div class="col-sm-3">
												<label >Billing Type  <span class="text-danger">*</span> </label>
											</div>
											<div class="col-sm-9">
												<div class="input-group">
				                                    <select name="client_id" class="form-control select_box select2-hidden-accessible" style="width: 100%" required="" data-parsley-id="6" tabindex="-1" aria-hidden="true">
				                                        <option value="">Fixed Price</option>
				                                        <option value="1">Only Project Hours</option>
				                                        <option value="2">Only Task Hours</option>
				                                        <option value="3">Project & Tasks Hours</option>
				                                    </select>
					                            </div>
											</div>
										</div>
									</div>
									<div class="form-group">
									    <div class="row">
											<div class="col-sm-3">
												<label >Fixed Price  </label>
											</div>
											<div class="col-sm-9">
												<input type="email" class="form-control" placeholder="50" id="exampleInputEmail1" aria-describedby="emailHelp">
											</div>
										</div>
									</div>
									<div class="form-group">
									    <div class="row">
											<div class="col-sm-3">
												<label >Estimate Hours  </label>
											</div>
											<div class="col-sm-9">
												<input type="number" step="0.01" value="" class="form-control" name="estimate_hours" data-parsley-id="23">
											</div>
										</div>
									</div>
									<div class="form-group">
									    <div class="row">
											<div class="col-sm-3">
												<label >Status  <span class="text-danger">*</span> </label>
											</div>
											<div class="col-sm-9">
												<div class="input-group">
				                                    <select name="client_id" class="form-control select_box select2-hidden-accessible" style="width: 100%" required="" data-parsley-id="6" tabindex="-1" aria-hidden="true">
				                                        <option value="">Started </option>
				                                        <option value="1">In progress</option>
				                                        <option value="2">Hold</option>
				                                        <option value="3">Cancel</option>
														 <option value="3">Completed</option>
				                                    </select>
					                            </div>
											</div>
										</div>
									</div>
									<div class="form-group">
									    <div class="row">
											<div class="col-sm-3">
												<label >Demo Url </label>
											</div>
											<div class="col-sm-9">
												<input type="email" class="form-control" placeholder="http://www.demo.com" id="exampleInputEmail1" aria-describedby="emailHelp">
											</div>
										</div>
									</div>
									<div class="form-group">
									    <div class="row">
											<div class="col-sm-3">
												<label >Assigned To <span class="text-danger">*</span></label>
											</div>
											<div class="col-sm-9">
											
												<div class="checkbox c-radio needsclick ">
													<input type="radio" name="gender" value="male" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
				                                </div>
												<div class="checkbox c-radio needsclick">
													<input type="radio" name="gender" value="male" id="chkPassport"  > Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
				                                </div>
											</div>
										</div>
									</div>
									<div class="form-group"  id="dvPassport" style="display: none">
									    <div class="row">
											<div class="col-sm-3">
												<label >select Users<span class="text-danger">*</span></label>
											</div>
											<div class="col-sm-9">
												 <input type="checkbox" name="vehicle1" value="Bike"  id="chkPassport1" > admin <strong class="badge btn-danger">Admin</strong>
												 <br>
												 <div class="row"  id="dvPassport1" style="display: none">
												    <div class="col-md-3">
													 <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> View
													</div>
													<div class="col-md-3">
													     <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Edit
													</div>
													<div class="col-md-3">
													    <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Delete
													</div>
												 </div>
												 
				                                 <input type="checkbox" name="vehicle2" value="Car"  id="chkPassport2"  > adminko <strong class="badge btn-danger">Admin</strong>
												 <br>
												 <div class="row"  id="dvPassport2" style="display: none">
												    <div class="col-md-3">
													 <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> View
													</div>
													<div class="col-md-3">
													     <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Edit
													</div>
													<div class="col-md-3">
													    <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Delete
													</div>
												 </div>
											</div>
										</div>
									</div>
										
								</form>
						   </div>
						    <div class=" col-sm-4 cl-md-4 col-lg-4 ">
						       <label class="small-box"> Allow Client to Show Team Members
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<hr>
								<label class="small-box">Allow Client to Show Milestones
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<hr>
								<label class="small-box"> Allow Client to Project Tasks
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<hr>
								<label class="small-box"> Allow Client to Project Attachments
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<hr>
								<label class="small-box"> Allow Client to Timesheets
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<hr>
								<label class="small-box"> Allow Client to Project Bugs
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<hr>
								<label class="small-box"> Allow Client to Project History
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<hr>
								<label class="small-box"> Allow Client to Project Calender
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<hr>
								<label class="small-box"> Allow Client to Project Comments
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<hr>
								<label class="small-box"> Allow Client to Gantt Chart
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<hr>
								<label class="small-box"> Allow Client to Show Project Hours
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<hr>
								<label class="small-box"> Allow Client to Show Project Tasks Comments
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<hr>
								<label class="small-box"> Allow Client to Show Project Tasks Attachments
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<hr>
								<label class="small-box"> Allow Client to Show Project Tasks Hours
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<hr>
								<label class="small-box"> Allow Client to All Finance Overview
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<hr>
								<label class="small-box"> Allow Staff to All Finance Overview
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<hr>
						    </div>
						</div>
						<div class="row">
						    <div class=" col-md-2">
							    <label >Description <span class="text-danger">*</span> </label>
							</div>
							<div class="col-md-10">
							     <textarea name="editor1"></textarea>
				                <script>
				                        CKEDITOR.replace( 'editor1' );
				                </script>
							</div>
						</div>
						<div class="row mt-3">
						    <div class="offset-8 col-md-4 d-flex">
							   <button type="button" class="btn btn-primary">Update</button>
     				           <button type="button" class="btn btn-danger">cancel</button>
							</div>
						</div>
					</div>
                   <div id="cal" class="tabcontent border-0">
                   	    <div class="row">
							<div class="col-sm-11">
				                <h6>Calendar</h6>
				            </div>
				        </div>
					    <div class="line"></div>
						<div class="header d-none">
						  <h1>HTML5 Calendar with Day/Week/Month Views (JavaScript, PHP)</a></h1>
						  <div>DayPilot for JavaScript</a> - HTML5 Calendar/Scheduling Components for JavaScript/Angular/React/Vue</div>
						</div>

						<div class="main">
						  <div class="d-none" style="float:left; width: 220px;">
						    <div id="nav"></div>
						  </div>
						  <div class="w-100">
						    <div class="toolbar buttons">
						      <span class="toolbar-item"><a id="buttonDay" href="#">Day</a></span>
						      <span class="toolbar-item"><a id="buttonWeek" href="#">Week</a></span>
						      <span class="toolbar-item"><a id="buttonMonth" href="#">Month</a></span>
						    </div>
						    <div id="dpDay"></div>
						    <div id="dpWeek"></div>
						    <div id="dpMonth"></div>
						  </div>

						</div>
                      </div>
						<script type="text/javascript">

						  var nav = new DayPilot.Navigator("nav");
						  nav.showMonths = 3;
						  nav.skipMonths = 3;
						  nav.init();

						  var day = new DayPilot.Calendar("dpDay");
						  day.viewType = "Day";
						  addEventHandlers(day);
						  day.init();

						  var week = new DayPilot.Calendar("dpWeek");
						  week.viewType = "Week";
						  addEventHandlers(week);
						  week.init();

						  var month = new DayPilot.Month("dpMonth");
						  addEventHandlers(month);
						  month.init();

						  function addEventHandlers(dp) {
						    dp.onEventMoved = function (args) {
						      $.post("backend_move.php",
						        {
						          id: args.e.id(),
						          newStart: args.newStart.toString(),
						          newEnd: args.newEnd.toString()
						        },
						        function() {
						          console.log("Moved.");
						        });
						    };

						    dp.onEventResized = function (args) {
						      $.post("backend_resize.php",
						        {
						          id: args.e.id(),
						          newStart: args.newStart.toString(),
						          newEnd: args.newEnd.toString()
						        },
						        function() {
						          console.log("Resized.");
						        });
						    };

						    // event creating
						    dp.onTimeRangeSelected = function (args) {

						      DayPilot.Modal.prompt("New event name:", "Event").then(function(modal) {
						        dp.clearSelection();

						        if (!modal.result) {
						          return;
						        }

						        $.post("backend_create.php",
						          {
						            start: args.start.toString(),
						            end: args.end.toString(),
						            name: modal.result
						          },
						          function(data) {
						            var e = new DayPilot.Event({
						              start: args.start,
						              end: args.end,
						              id: data.id,
						              resource: args.resource,
						              text: modal.result
						            });
						            dp.events.add(e);
						          }
						        );

						      });
						    };

						    dp.onEventClick = function(args) {

						    };
						  }

						  var switcher = new DayPilot.Switcher({
						    triggers: [
						      {id: "buttonDay", view: day },
						      {id: "buttonWeek", view: week},
						      {id: "buttonMonth", view: month}
						    ],
						    navigator: nav,
						    selectedClass: "selected-button",
						    onChanged: function(args) {
						      console.log("onChanged fired");
						      switcher.events.load("backend_events.php");
						    }
						  });

						  switcher.select("buttonDay");

						</script>

			   
			    <div id="com" class="tabcontent border-0 ">
			    	<div class="row">
						<div class="col-sm-12">
			               <h6>Comments</h6>
			            </div>
				    </div>
					<div class="line"></div>
					<div class="row">
					    <div class="col-sm-12 cl-md-12 col-lg-12">
					        <form>
								<div class="form-group">
								    <div class="row">
										<div class="col-sm-12">
											<textarea cols="108" rows="5">Rahul Kumar</textarea>
										</div>
									</div>
								</div> 
								<div class="form-group">
								    <div class="row">
										<div id="jquery-script-menu">
											<div class="jquery-script-center">									
											<div class="jquery-script-ads"><script type="text/javascript"><!--
											google_ad_client = "ca-pub-2783044520727903";
											/* jQuery_demo */
											google_ad_slot = "2780937993";
											google_ad_width = 728;
											google_ad_height = 90;
											//-->
											</script>
											<script type="text/javascript"
											src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
											</script></div>
											<div class="jquery-script-clear"></div>
											</div>
											</div>
											        <div class="container" >
											            <form>
											                <input type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
											            </form>
											        </div>

											       <!--  <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
											        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
											        <script type="text/javascript" src="js/imageuploadify.min.js"></script>

											        <script type="text/javascript">
											            $(document).ready(function() {
											                $('input[type="file"]').imageuploadify();
											            })
											        </script>
											<script type="text/javascript">

											  var _gaq = _gaq || [];
											  _gaq.push(['_setAccount', 'UA-36251023-1']);
											  _gaq.push(['_setDomainName', 'jqueryscript.net']);
											  _gaq.push(['_trackPageview']);

											  (function() {
											    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
											    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
											    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
											  })();

											</script>
									</div>
								</div> 
								<div class="row">
									<div class="offset-9 col-sm-3">
                                       <button type="submit" class="btn btn-primary ">Post Comment</button>
                                    </div>
								</div>
							</form>
						</div>
					</div>
			    </div>
			    <div id="att" class="tabcontent border-0">
			    	<div class="row">
							<div class="col-sm-9">
				                <h6>Attachment List</h6>
				            </div>
				            <div class="col-sm-3">
				            	 <h6 class="text-primary" id="new"><i class="fa fa-plus"></i> New Attachment</h6>
				            </div>
				    </div>
					<div class="line"></div>
			    </div>
			    <div id="mil" class="tabcontent border-0">
			    </div>
			    <div id="task" class="tabcontent border-0">
			    </div>
			    <div id="bug" class="tabcontent border-0">
			    </div>
			    <div id="gant" class="tabcontent border-0">
			    </div>
			    <div id="note" class="tabcontent border-0">
			    </div>
			    <div id="time" class="tabcontent border-0">
			    </div>
			    <div id="tick" class="tabcontent border-0">
			    </div>
			    <div id="invo" class="tabcontent border-0">
			    </div>
			    <div id="esti" class="tabcontent border-0">
			    </div>
			    <div id="expen" class="tabcontent border-0">
			    </div>
			    <div id="pro" class="tabcontent border-0">
			    </div>
			    <div id="act" class="tabcontent border-0">
			    </div>
			</div>
		</div>
	</div>


  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">All Users</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
             <form>
		    <div class="row mt-4">
		    	<div class="col-md-12">
					<div class="form-group">
						<div class="row">
							<div class="offset-1 col-sm-3">
								<label  class="label-style">Assigned To <span class="text-danger">*</span></label>
							</div>
								<div class="col-sm-8">
									<div class="checkbox c-radio needsclick ">
										<input type="radio" name="gender" value="male" class="btn5"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
	                                </div>
									<div class="checkbox c-radio needsclick">
										<input type="radio" name="gender" value="male" id="chkPassport5"  > Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
	                                </div>
								</div>
							</div>
						</div>
						<div class="form-group"  id="dvPassport5" style="display: none">
						    <div class="row">
								<div class="offset-1 col-sm-3">
									<label  class="label-style">select Users<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-8">
									 <input type="checkbox" name="vehicle1" value="Bike"  id="chkPassport4" > admin <strong class="badge btn-danger">Admin</strong>
									 <br>
									 <div class="row"  id="dvPassport4" style="display: none">
									    <div class="col-md-3">
										 <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> View
										</div>
										<div class="col-md-3">
										     <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Edit
										</div>
										<div class="col-md-3">
										    <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Delete
										</div>
									 </div>
									 
	                                 <input type="checkbox" name="vehicle2" value="Car"  id="chkPassport6"  > adminko <strong class="badge btn-danger">Admin</strong>
									 <br>
									 <div class="row"  id="dvPassport6" style="display: none">
									    <div class="col-md-3">
										 <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> View
										</div>
										<div class="col-md-3">
										     <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Edit
										</div>
										<div class="col-md-3">
										    <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Delete
										</div>
									 </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer border-top-0">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Update</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content style">
			    <div class="modal-header border-bottom-0">
				    <h5 class="modal-title" id="exampleModalLabel">Client list</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
			    </div>
			    <div class="line"></div>
				<div class="modal-body">
					<div class="card">
						<div class="tab">
						    <div class="container">
								<button class="tablinks" onclick="openCity(event, 'London')">General</button>
								<button class="tablinks" onclick="openCity(event, 'Paris')">Contact Details</button>
								<button class="tablinks" onclick="openCity(event, 'Tokyo')">Web</button>
								<button class="tablinks" onclick="openCity(event, 'india')">Hosting</button>
							</div>
						</div>
						<div id="London" class="tabcontent">
						    <form>
						    <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Company Name <span class="text-danger">*</span> </label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Company Email <span class="text-danger">*</span> </label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Company VAT </label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Customer Group  </label>
									</div>
									<div class="col-sm-9">
										<div class="input-group">
											<select name="client_id" class="form-control select_box select2-hidden-accessible" style="width: 100%" required="" data-parsley-id="6" tabindex="-1" aria-hidden="true">
												<option value=""></option>
											</select>
										</div>
									</div>
								</div>
					        </div>
					        <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Language  </label>
									</div>
									<div class="col-sm-9">
										<div class="input-group">
											<select name="client_id" class="form-control select_box select2-hidden-accessible" style="width: 100%" required="" data-parsley-id="6" tabindex="-1" aria-hidden="true">
												<option value=""></option>
											</select>
										</div>
									</div>
								</div>
					        </div>
					        <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Currency </label>
									</div>
									<div class="col-sm-9">
										<div class="input-group">
											<select name="client_id" class="form-control select_box select2-hidden-accessible" style="width: 100%" required="" data-parsley-id="6" tabindex="-1" aria-hidden="true">
												<option value=""></option>
											</select>
										</div>
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Short Note  </label>
									</div>
									<div class="col-sm-9">
										<textarea class="form-control" name="short_note"></textarea>
									</div>
								</div>
					        </div>
							</form>
						</div>

						<div id="Paris" class="tabcontent">
						  <form>
						  <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Company Phone</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Company Mobile </label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Zip code </label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div> 
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Company City</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div> 
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Company Country</label>
									</div>
									<div class="col-sm-9">
										<div class="input-group">
											<select name="client_id" class="form-control select_box select2-hidden-accessible" style="width: 100%" required="" data-parsley-id="6" tabindex="-1" aria-hidden="true">
												<option value="">India</option>
											</select>
										</div>
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Company Fax</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
                            <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Company Address </label>
									</div>
									<div class="col-sm-9">
										<textarea class="form-control" name="short_note"></textarea>
									</div>
								</div>
					        </div>	
                            <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label > Latitude( Google Map ) </label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
                            <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Longitude( Google Map ) </label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
                          </form>							
						</div>

						<div id="Tokyo" class="tabcontent">
						   <form>
						    <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Company Website</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Skype id</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Facebook URL</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Twitter URL</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Linkedin URL</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
						  </form>
						</div>
						<div id="india" class="tabcontent">
						  <form>
						    <div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Hosting Company</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Hosting</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Username</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Password</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label >Port</label>
									</div>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
					        </div>
							</form>
						</div>
					</div>
				</div>
			    <div class="modal-footer border-top-0 modal-butn">
     				<button type="button" class="btn btn-primary">Save</button>
			    </div>
			</div>
		</div>
	</div>

<script>
	var header = document.getElementById("myDIV");
	var btns = header.getElementsByClassName("back");
	for (var i = 0; i < btns.length; i++) {
	  btns[i].addEventListener("click", function() {
	  var current = document.getElementsByClassName("active");
	  current[0].className = current[0].className.replace(" active", "");
	  this.className += " active";
	  });
	}
</script>

<script>
	function openCity(evt, cityName) {
	  var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("tabcontent");
	  for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablinks");
	  for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }
	  document.getElementById(cityName).style.display = "block";
	  evt.currentTarget.className += " active";
	}
</script>

<script>
	  $( function() {
		$( "#slider-range-min" ).slider({
		  range: "min",
		  value: 37,
		  min: 1,
		  max: 700,
		  slide: function( event, ui ) {
			$( "#amount" ).val( "$" + ui.value );
		  }
		});
		$( "#amount" ).val( "$" + $( "#slider-range-min" ).slider( "value" ) );
	  } );
  </script>
  
  <script>
	  $( function() {
		$( "#datepicker" ).datepicker();
	  } );
  </script>
  
  

<script type="text/javascript">
    $(function () {
        $("#chkPassport").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport").show();
            } else {
                $("#dvPassport").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#chkPassport1").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport1").show();
            } else {
                $("#dvPassport1").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#chkPassport2").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport2").show();
            } else {
                $("#dvPassport2").hide();
            }
        });
    });
</script>
<script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $("#dvPassport").hide();
  });
 
});
</script>

<script>
// $(function () {
//   $("#edits").click(function(){
//   	 $("#form").show();
//     $("#project").hide();
//   });
// });


$(document).on("click","#edits",function(){
	$("#form").show();
    $("#project").hide();
})
</script>

<script type="text/javascript">
    $(function () {
        $("#chkPassport5").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport5").show();
            } else {
                $("#dvPassport5").hide();
            }
        });
    });

    $(function () {
        $("#chkPassport4").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport4").show();
            } else {
                $("#dvPassport4").hide();
            }
        });
    });
       $(function () {
        $("#chkPassport6").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport6").show();
            } else {
                $("#dvPassport6").hide();
            }
        });
    });
</script>
<script>
	$(document).ready(function(){
	  $(".btn5").click(function(){
	    $("#dvPassport5").hide();
	  });
	 
	});
</script>

<script>
	$(document).ready(function(){
	 
	  $("#update").click(function(){
		 $("#currency").hide();
		 $("#account").show();
		 $('#exampleModal').modal('show');
	  });
	});
</script>
 <script type="text/javascript">
   $('.projectstatus').on('change',function(){
        var pro_status=$(this).val();
        var project_id=$('#projectidss').val();
           // alert(status_id);
           // alert(project_id);
        $.ajax({
            url:'<?=base_url('Projects/ChangeStatusByPro_id')?>',
            type:"POST",
            data:{pro_status:pro_status,project_id:project_id},
        //   dataType:'JSON',
            success:function(response)
            {
              var response =JSON.parse(response);
                console.log(response.data);
                {
                        
                    swal("Project Status", "Updated", "success");

                         }
                            $(".refreshlocation").load(location.href + " .refreshlocation");            
            }              
        });
    });
</script>