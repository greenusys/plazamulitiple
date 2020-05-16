 <style>
	.stocklist
	{
		display:none;
	}
	.saleslist
	{
		display:none;
	}
	.quotationlist
	{
		display:none;
	}
	.knowledgelist
	{
		display:none;
	}
	.transactionlist
	{
		display:none;
	}
	.officelist
	{
		display:none;
	}
	.managelist
	{
		display:none;
	}
	.assignlist
	{
		display:none;
	}
	.attandancelist
	{
		display:none;
	}
	.recruitmentlist
	{
		display:none;
	}
	.payrolllist
	{
		display:none;
	}
	.performancetlist
	{
		display:none;
	}
	.utilitylist
	{
		display:none;
	}
	.reportlist
	{
		display:none;
	}
	.transactionslist
	{
		display:none;
	}
	.projectlist
	{
		display:none;
	}
	.settinglist
	{
		display:none;
	}
   .mt
    {
	   margin-top:-36px;
    }
	.mt1
    {
	   margin-top:-70px;
   }
   .bg-table-color
{
	background-color: #6c757d69!important;
}
</style>
<script type="text/javascript">
	$(document).on('change','#selDept',function(){
		
		if($(this).val()==0){
			$('.newDpe').show();
		}else{
			$('.newDpe').hide();
		}
	});
	$(document).on('submit','#addDeptDesig',function(e){
		e.preventDefault();
		var formData=new FormData($(this)[0]);
		$.ajax({
			url:"<?=base_url('Department/addNewDep')?>",
			type:"post",
			cache:false,
			contentType:false,
			processData:false,
			data:formData,
			success:function(response){
				// console.log(response);
				response=JSON.parse(response);
				if(response.code==1){
					// swal('Success')
					swal("Good job!", response.msg, "success");
				}else{
					swal("Oops!", response.msg, "warning");
				}
				setInterval(function(){ location.reload()}, 2000);
			}

		});
	});
</script>
<div class="container bg-white mt-5" id="ticket">
    <!-- <div class="row">
		<div class="col-md-8">
		   <h6 class="mt font-weight-bold">New Department</h6>
		</div>
		<div class="col-md-1">
		   <button type="button" class="btn btn-primary mt1" id="email">Save</button>
		</div>
		<div class="col-md-3">
		   <button type="button" class="btn btn-primary mt1" id="email">Save & Add More</button>
		</div>
	</div> -->
	<div class="line mt-2"></div>
	<div class="row mt-5">
	    <div class="col-sm-12">
	        <form id="addDeptDesig">
			    <div class="row">
				    <div class="col-md-12">
						<div class="form-group">
							<div class="row">
								<div class="offset-1 col-sm-3">
									<label for="exampleInputEmail1" class="ml-5">Select Department <span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-6">
									<select class=" form-control" name="department" id="selDept">
										<option value="0">Select Department</option>
										<?php
											foreach ($Depart as $dept) {
												# code...
												echo '<option value="'.$dept->departments_id.'">'.$dept->deptname.'</option>';
											}
										?>
									    
										<!-- <option value="it">IT/Collaborative</option> -->
										
									</select>
								</div>
							</div>
						</div>
						
						<div class="form-group newDpe"  >
							<div class="row">
								<div class="offset-2 col-sm-2">
									<label for="exampleInputEmail1"> New Department </label>
								</div>
								
								<div class="col-sm-6">
									<input type="text" class="form-control" name="newDepartment" aria-describedby="emailHelp" >
								</div>
							</div>
						</div>
						<div class="form-group newDpe" >
							<div class="row">
								<div class="offset-2 col-sm-2">
									<label for="exampleInputEmail1"> Department Head </label>
								</div>

								<div class="col-sm-6">
									<select class="form-control" name="departmentHead">
										<option value="8">Admin</option>
										<?php
											foreach ($Employee as $emp) {
												# code...
												echo '<option value="'.$emp->user_id.'">'.ucwords($emp->fullname).'</option>';
											}
										?>
									</select>
									
								</div>
							</div>
						</div>
						<div class="form-group ">
							<div class="row">
								<div class="offset-2 col-sm-2">
									<label for="exampleInputEmail1"> Designation <span class="text-danger">*</span> </label>
								</div>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="designation" aria-describedby="emailHelp" >
								</div>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary mt1" >Save</button>
						</div>
				    </div>
			    </div>	
				<!-- <div class="row">
				    <table class="table table-striped">
						    <tbody>
							<tr style="height:50px">
							    <th>
								   <label class="small-box">Permission
									   <input type="checkbox">
									   <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">View
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">Create
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th> 
								    <label class="small-box">Edit
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								    <label class="small-box">Delete
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							</tr>
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box"> Dashboard
									   <input type="checkbox" checked="checked">
									   <span class="checkmark"></span>
							       </label>
								</th>
							    <td>
								   <label class="small-box">
									   <input type="checkbox" checked="checked">
									   <span class="checkmark"></span>
							       </label> 
								</td>
							    <td></td>
							    <td></td>
								<td></td>
							</tr>
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box"> Calendar
									   <input type="checkbox" checked="checked">
									   <span class="checkmark"></span>
							       </label>
								</th>
							    <td>
								   <label class="small-box">
									   <input type="checkbox" checked="checked">
									   <span class="checkmark"></span>
							       </label> 
								</td>
							    <td></td>
							    <td></td>
								<td></td>
							</tr>
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box">Mailbox
									   <input type="checkbox">
									   <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <td>
								   <label class="small-box">
									   <input type="checkbox">
									   <span class="checkmark bg-white border" ></span>
							       </label> 
								</td>
							    <td></td>
							    <td></td>
								<td></td>
							</tr>
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box">File Manager
									   <input type="checkbox ">
									   <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <td>
								   <label class="small-box">
									   <input type="checkbox">
									   <span class="checkmark bg-white border"></span>
							       </label> 
								</td>
							    <td></td>
							    <td></td>
								<td></td>
							</tr>
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box">Projects
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th> 
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							</tr>
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box">Tasks
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th> 
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							</tr>
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box">Bugs
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th> 
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							</tr>
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box">Opportunities
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th> 
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							</tr>
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box">Leads
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th> 
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							</tr>
							
							
							
							<tr style="height:50px" class="bg-table-color" id="stock">
							    <th scope="row">
								   <label class="small-box">Stock
							          <a href="javascript:void(0)" id="vStock"><i class="fa fa-plus text-white" ></i> <input type="checkbox">
							          <span class="checkmark bg-white border"></span></a>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th> 
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							</tr>
							
						
								<tr style="height:50px" class="stocklist" >
									<th scope="row">
									   <label class="small-box"> Items
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="stocklist">
									<th scope="row">
									   <label class="small-box"> Supplier
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="stocklist">
									<th scope="row">
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="stocklist">
									<th scope="row">
									   <label class="small-box"> Return Stock
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="stocklist">
									<th scope="row">
									   <label class="small-box"> Purchase Payment
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
							
							<tr style="height:50px" id="sales" class="bg-table-color">
							    <th scope="row">
								   <label class="small-box">Sales
							         <a href="javascript:void(0)" id="vStock1"><i class="fa fa-plus text-white" ></i> <input type="checkbox">
							          <span class="checkmark bg-white border"></span></a>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th> 
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							</tr>
							
								<tr style="height:50px" class="saleslist">
									<th scope="row">
									   <label class="small-box"> Invoice
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="saleslist">
									<th scope="row">
									   <label class="small-box"> Estimates
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="saleslist">
									<th scope="row"> 
									   <label class="small-box">Recurring Invoice
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="saleslist">
									<th scope="row">
									   <label class="small-box">  Payments Received
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="saleslist">
									<th scope="row">
									   <label class="small-box">  Proposals
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="saleslist">
									<th scope="row">
									   <label class="small-box">  Tax Rates
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
							</div>
							<tr style="height:50px" class="bg-table-color" id="quotation">
							    <th scope="row">
								   <label class="small-box"> Quotations	
							          <a href="javascript:void(0)" id="vStock2"><i class="fa fa-plus text-white" ></i> <input type="checkbox">
							          <span class="checkmark bg-white border"></span></a>
							       </label>
								</th>
							    <th></th>
							    <th></th>
							    <th></th>
							</tr>
                           
								<tr style="height:50px" class="quotationlist">
									<th scope="row">
									   <label class="small-box">  Quotations List
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="quotationlist">
									<th scope="row">
									   <label class="small-box">  Quotations Form
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
							</div>
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box"> Tickets
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th> 
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							</tr>
							<tr style="height:50px" class="bg-table-color" id="knowledge">
							    <th scope="row">
								   <label class="small-box"> Knowledge Base	
								      <a href="javascript:void(0)" id="vStock3"><i class="fa fa-plus text-white" ></i> <input type="checkbox">
							          <span class="checkmark bg-white border"></span></a>
							       </label>
								</th>
							    <th><label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
							    <th><label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
							    <th><label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
								<th><label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
							</tr>
							
								<tr style="height:50px" class="knowledgelist">
									<th scope="row">
									   <label class="small-box">   Knowledge Base	

										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="knowledgelist">
									<th scope="row">
									   <label class="small-box">  Articles
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="knowledgelist">
									<th scope="row">
									   <label class="small-box">Category
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
							
							<tr style="height:50px"  class="bg-table-color" id="transaction">
							    <th scope="row">
								   <label class="small-box"> Transactions
							          <a href="javascript:void(0)" id="vStock4"><i class="fa fa-plus text-white" ></i> <input type="checkbox">
							          <span class="checkmark bg-white border"></span></a>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th> 
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							</tr>
							
								<tr style="height:50px" class="transactionlist">
									<th scope="row">
									   <label class="small-box">  Expense
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="transactionlist">
									<th scope="row">
									   <label class="small-box"> Deposit
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="transactionlist">
									<th scope="row"> 
									   <label class="small-box">Transfer
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="transactionlist">
									<th scope="row">
									   <label class="small-box">   Transactions Report
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th></th>
									<th></th>
									<th></th>
									
								</tr>
								<tr style="height:50px" class="transactionlist">
									<th scope="row">
									   <label class="small-box"> Transfer Report
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th></th>
									<th></th>
									<th></th>
								</tr>
								<tr style="height:50px" class="transactionlist">
									<th scope="row">
									   <label class="small-box">  Balance Sheet
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th></th>
									<th></th>
									<th></th>
									
								</tr>
								<tr style="height:50px" class="transactionlist">
									<th scope="row"> 
									   <label class="small-box"> Bank & Cash
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="transactionlist">
									<th scope="row"> 
									   <label class="small-box">Client
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="transactionlist">
									<th scope="row"> 
									   <label class="small-box">Departments
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
															
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box">Client
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th> 
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							</tr>
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box">Departments
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th> 
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							</tr>
							<tr style="height:50px" class="bg-table-color" id="office">
							    <th scope="row">
								   <label class="small-box">  Office Asset	
							          <a href="javascript:void(0)" id="vStock5"><i class="fa fa-plus text-white" ></i> <input type="checkbox">
							          <span class="checkmark bg-white border"></span></a>
							       </label>
								</th>
							    <th><label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
							    <th><label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
							    <th><label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
								<th><label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
							</tr>
                           
								<tr style="height:50px" class="officelist">
									<th scope="row">
									   <label class="small-box">   Stock Category
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="officelist">
									<th scope="row">
									   <label class="small-box">   Stock List
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
							
							<tr style="height:50px" class="bg-table-color" id="manage">
							    <th scope="row">
								   <label class="small-box">  Manage Stock			
							         <a href="javascript:void(0)" id="vStock6"><i class="fa fa-plus text-white" ></i> <input type="checkbox">
							          <span class="checkmark bg-white border"></span></a>
							       </label>
								</th>
							    <th></th>
							    <th></th>
							    <th></th>
							</tr>
                            
								<tr style="height:50px" class="managelist">
									<th scope="row">
									   <label class="small-box">   Stock History
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								
							
							<tr style="height:50px" class="bg-table-color" id="assign">
							    <th scope="row">
								   <label class="small-box"> Assign Stock	
							          <a href="javascript:void(0)" id="vStock7"><i class="fa fa-plus text-white" ></i> <input type="checkbox">
							          <span class="checkmark bg-white border"></span></a>
							       </label>
								</th>
							    <th></th>
							    <th></th>
							    <th></th>
							</tr>
                           									
								<tr style="height:50px" class="assignlist">
									<th scope="row">
									   <label class="small-box">  Assign Stock 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="assignlist">
									<th scope="row">
									   <label class="small-box"> Assign Stock Report
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
							
							<tr style="height:50px" class="bg-table-color" id="attandance">
							    <th scope="row">
								   <label class="small-box">  Attendance
							          <a href="javascript:void(0)" id="vStock8"><i class="fa fa-plus text-white" ></i> <input type="checkbox">
							          <span class="checkmark bg-white border"></span></a>
							       </label>
								</th>
							    <th> <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
							    <th> <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
							    <th> <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
									   	   </label></th>
							    <th> <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
							</tr>
                           
								<tr style="height:50px" class="attandancelist">
									<th scope="row">
									   <label class="small-box">  Time History
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="attandancelist">
									<th scope="row">
									   <label class="small-box">    Timechange Request
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									  
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="attandancelist">
									<th scope="row">
									   <label class="small-box">   Attendance Report
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="attandancelist">
									<th scope="row">
									   <label class="small-box">  Mark Attendance
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									    <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									  <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									
								</tr>
							
							<tr style="height:50px" class="bg-table-color" id="recruitment">
							    <th scope="row">
								   <label class="small-box"> Recruitment			
							          <a href="javascript:void(0)" id="vStock9"><i class="fa fa-plus text-white" ></i> <input type="checkbox">
							          <span class="checkmark bg-white border"></span></a>
							       </label>
								</th>
								<th>
								   <label class="small-box"> 
									  <input type="checkbox">
									  <span class="checkmark bg-white border"></span>
								   </label>
								</th>
							    <th><label class="small-box"> 
									  <input type="checkbox">
									  <span class="checkmark bg-white border"></span>
								   </label></th>
							    <th><label class="small-box"> 
									  <input type="checkbox">
									  <span class="checkmark bg-white border"></span>
								   </label></th>
							    <th><label class="small-box"> 
									  <input type="checkbox">
									  <span class="checkmark bg-white border"></span>
								   </label></th>
							</tr>
                           
								<tr style="height:50px" class="recruitmentlist">
									<th scope="row">
									   <label class="small-box">   Jobs Posted
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="recruitmentlist">
									<th scope="row">
									   <label class="small-box">   Jobs Application
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									  
									</th>
									<th>
									   
									</th>
									<th>
									   
									</th>
									
								</tr>
							
							<tr style="height:50px" class="bg-table-color" id="payroll">
							    <th scope="row">
								   <label class="small-box"> Payroll	
							          <a href="javascript:void(0)" id="vStock10"><i class="fa fa-plus text-white" ></i> <input type="checkbox">
							          <span class="checkmark bg-white border"></span></a>
							       </label>
								</th>
							    <th><label class="small-box"> 
									  <input type="checkbox">
									  <span class="checkmark bg-white border"></span>
								   </label></th>
							    <th><label class="small-box"> 
									  <input type="checkbox">
									  <span class="checkmark bg-white border"></span>
								   </label></th>
							    <th><label class="small-box"> 
									  <input type="checkbox">
									  <span class="checkmark bg-white border"></span>
								   </label></th>
								   <th><label class="small-box"> 
									  <input type="checkbox">
									  <span class="checkmark bg-white border"></span>
								   </label></th>
							</tr>
                            									
								<tr style="height:50px" class="payrolllist">
									<th scope="row">
									   <label class="small-box">  Salary Template
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="payrolllist">
									<th scope="row">
									   <label class="small-box"> Hourly Template
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="payrolllist">
									<th scope="row">
									   <label class="small-box">   Manage Salary
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="payrolllist">
									<th scope="row">
									   <label class="small-box">  Employee Salary List
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="payrolllist">
									<th scope="row">
									   <label class="small-box">  Make Payment
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="payrolllist">
									<th scope="row">
									   <label class="small-box">  Generate Payslip
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="payrolllist">
									<th scope="row">
									   <label class="small-box">  Payroll Summary
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="payrolllist">
									<th scope="row">
									   <label class="small-box">  Advance Salary
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="payrolllist">
									<th scope="row">
									   <label class="small-box">  Provident Fund
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="payrolllist">
									<th scope="row">
									   <label class="small-box"> Overtime
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="payrolllist">
									<th scope="row">
									   <label class="small-box">  Employee Award
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									    <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										 <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										 <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
							
							<tr style="height:50px" class="bg-table-color" id="performance">
							    <th scope="row">
								   <label class="small-box">  Performance	
							          <a href="javascript:void(0)" id="vStock11"><i class="fa fa-plus text-white" ></i> <input type="checkbox">
							          <span class="checkmark bg-white border"></span></a>
							       </label>
								</th>
							    <th><label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
							    <th><label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
							    <th><label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
							   <th><label class="small-box">
								  <input type="checkbox">
								  <span class="checkmark bg-white border"></span>
							   </label></th>
							</tr>
                            
								
								<tr style="height:50px" class="performancetlist">
									<th scope="row">
									   <label class="small-box">   Indicator
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="performancetlist">
									<th scope="row">
									   <label class="small-box"> Give Appraisal
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="performancetlist">
									<th scope="row">
									   <label class="small-box">  Performance Report
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
							
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box"> Leave Management
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   
								</th>
							    <th> 
								    
								</th>
							    <th>
								    
								</th>
							</tr>
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box"> Training
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th> 
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							</tr>
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box">  Announcements
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th> 
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							</tr>
							<tr style="height:50px" class="bg-table-color" id="utility">
							    <th scope="row">
								   <label class="small-box">  Utilities
							          <a href="javascript:void(0)" id="vStock12"><i class="fa fa-plus text-white" ></i> <input type="checkbox">
							          <span class="checkmark bg-white border"></span></a>
							       </label>
								</th>
							    <th><label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label></th>
							    <th><label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label></th>
							    <th><label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label></th>
								<th><label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label></th>   
							</tr>
                          
								<tr style="height:50px" class="utilitylist">
									<th scope="row">
									   <label class="small-box">   Holiday
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="utilitylist">
									<th scope="row">
									   <label class="small-box"> Goal Tracking
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
							</div>
							<tr style="height:50px" class="bg-table-color" id="report">
							    <th scope="row">
								   <label class="small-box">Reports
							          <a href="javascript:void(0)" id="vStock13"><i class="fa fa-plus text-white" ></i> <input type="checkbox">
							          <span class="checkmark bg-white border"></span></a>
							       </label>
								</th>
							    <th><label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
							    <th><label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
							    <th><label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
								<th><label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label></th>
							</tr>
                           
								<tr style="height:50px" class="reportlist">
									<th scope="row">
									   <label class="small-box">  Sales
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								
							
							<tr style="height:50px" class="bg-table-color" id="transactions">
							    <th scope="row">
								   <label class="small-box">  Transactions		
							          <a href="javascript:void(0)" id="vStock14"><i class="fa fa-plus text-white" ></i> <input type="checkbox">
							          <span class="checkmark bg-white border"></span></a>
							       </label>
								</th>
							    <th></th>
							    <th></th>
							    <th></th>
								   
							</tr>
                          
								
								<tr style="height:50px" class="transactionslist">
									<th scope="row">
									   <label class="small-box">  Account Statement
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="transactionslist">
									<th scope="row">
									   <label class="small-box">  Expense Report
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="transactionslist">
									<th scope="row">
									   <label class="small-box">   Income Reports
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="transactionslist">
									<th scope="row">
									   <label class="small-box">  Income Vs Expense
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="transactionslist">
									<th scope="row">
									   <label class="small-box">  Report by Date
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="transactionslist">
									<th scope="row">
									   <label class="small-box">  Report by Month
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="transactionslist">
									<th scope="row">
									   <label class="small-box"> All Income
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="transactionslist">
									<th scope="row">
									   <label class="small-box">   All Expense
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="transactionslist">
									<th scope="row">
									   <label class="small-box">  All Transactions
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
																
							
							<tr style="height:50px" class="bg-table-color" id="project">
							    <th scope="row">
								   <label class="small-box"> Projects			
							          <a href="javascript:void(0)" id="vStock15"><i class="fa fa-plus text-white" ></i> <input type="checkbox">
							          <span class="checkmark bg-white border"></span></a>
							       </label>
								</th>
							    <th></th>
							    <th></th>
							    <th></th>
								   
							</tr>
                          
								<tr style="height:50px" class="projectlist">
									<th scope="row">
									   <label class="small-box">   Project Tasks
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="projectlist">
									<th scope="row">
									   <label class="small-box">  Project Bugs
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="projectlist">
									<th scope="row">
									   <label class="small-box">   Projects Report
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
																
							
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box"> User
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th> 
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								    <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							</tr>
							<tr style="height:50px" class="bg-table-color" id="setting">
							    <th scope="row">
								   <label class="small-box"> Setting			
							          <a href="javascript:void(0)" id="vStock16"><i class="fa fa-plus text-white" ></i> <input type="checkbox">
							          <span class="checkmark bg-white border"></span></a>
							       </label>
								</th>
							    <th> <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label></th>
							    <th> <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label></th>
							    <th> <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label></th>
								<th> <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label></th>
							</tr>
							
								
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  Invoice Settings
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  Estimate Settings
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  Tickets & Leads Settings
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  Theme Settings
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">   Working Days
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">  
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  Leave Category
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  Income Category
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  Expense Category
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  Customer Group
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  Contract Type
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									    <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										 <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										 <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  Leads Status
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  Lead Source
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  Opportunities State Reason
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  Custom Field
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  Payment Method
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box"> Cronjob
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">   Menu Allocation
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">   Notifications
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
                                <tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">   Email Notification
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">   Backup Database
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  Translations
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  System Update
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box"> purchase_settings
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									  <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label> 
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">   Company Details
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  Allowed IP
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th> 
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
										<label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  System Settings
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box"> 
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
								<tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">   Email Settings
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
                                <tr style="height:50px" class="settinglist">
									<th scope="row">
									   <label class="small-box">  Email Templates
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   <label class="small-box">
										  <input type="checkbox">
										  <span class="checkmark bg-white border"></span>
									   </label>
									</th>
									<th>
									   
									</th>
									<th> 
										
									</th>
									<th>
										
									</th>
								</tr>
                              <tr style="height:50px" class="settinglist">
							    <th scope="row">
								   <label class="small-box">  Email Integration
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   
								</th>
							    <th> 
								    
								</th>
							    <th>
								    
								</th>
							</tr>
							<tr style="height:50px" class="settinglist">
							    <th scope="row">
								   <label class="small-box">  Payment Settings
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								  
								</th>
							    <th> 
								    
								</th>
							    <th>
								    
								</th>
							</tr>		
                            <tr style="height:50px" class="settinglist">
							    <th scope="row">
								   <label class="small-box">  Dashboard Settings
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								  
								</th>
							    <th> 
								    
								</th>
							    <th>
								    
								</th>
							</tr>												
							
							
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box">  Backup Database
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   
								</th>
							    <th> 
								    
								</th>
							    <th>
								    
								</th>
							</tr>
							<tr style="height:50px">
							    <th scope="row">
								   <label class="small-box">  Private Chat
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								   <label class="small-box">
							          <input type="checkbox">
							          <span class="checkmark bg-white border"></span>
							       </label>
								</th>
							    <th>
								  
								</th>
							    <th> 
								    
								</th>
							    <th>
								    
								</th>
							</tr>
					    </tbody>
					</table>
				</div> -->
			</form>
		</div>
	</div>
</div>


<script>
	$(document).on('click','#vStock',function(){
		$('.stocklist').toggle(1000);
	});
</script>
<script>
	$(document).on('click','#vStock1',function(){
		$('.saleslist').toggle(1000);
	});
</script>

<script>
	$(document).on('click','#vStock2',function(){
		$('.quotationlist').toggle(1000);
	});
</script>

<script>
	$(document).on('click','#vStock3',function(){
		$('.knowledgelist').toggle(1000);
	});
</script>

<script>
	$(document).on('click','#vStock4',function(){
		$('.transactionlist').toggle(1000);
	});
</script>
<script>
	$(document).on('click','#vStock5',function(){
		$('.officelist').toggle(1000);
	});
</script>
<script>
	$(document).on('click','#vStock6',function(){
		$('.managelist').toggle(1000);
	});
</script>
<script>
	$(document).on('click','#vStock7',function(){
		$('.assignlist').toggle(1000);
	});
</script>
<script>
	$(document).on('click','#vStock8',function(){
		$('.attandancelist').toggle(1000);
	});
</script>

<script>
	$(document).on('click','#vStock9',function(){
		$('.recruitmentlist').toggle(1000);
	});
</script>

<script>
	$(document).on('click','#vStock10',function(){
		$('.payrolllist').toggle(1000);
	});
</script>

<script>
	$(document).on('click','#vStock11',function(){
		$('.performancetlist').toggle(1000);
	});
</script>

<script>
	$(document).on('click','#vStock12',function(){
		$('.utilitylist').toggle(1000);
	});
</script>

<script>
	$(document).on('click','#vStock13',function(){
		$('.reportlist').toggle(1000);
	});
</script>

<script>
	$(document).on('click','#vStock14',function(){
		$('.transactionslist').toggle(1000);
	});
</script>

<script>
	$(document).on('click','#vStock15',function(){
		$('.projectlist').toggle(1000);
	});
</script>

<script>
	$(document).on('click','#vStock16',function(){
		$('.settinglist').toggle(1000);
	});
</script>
