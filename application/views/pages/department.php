<div class="container bg-white  mt-5" id="ticket">
    <div class="row">
		<div class="col-md-10">
		   <h6 class="mt">All Department : <?=date('d-M-Y')?><div id="timestamp"><?=date('H:i:s')?></div></h6>
		</div>
		<div class="col-md-2">

		   <a href="<?=base_url('Department/newDepartment')?>" class="text-dark"><h6 class="mt">New Department</h6></a>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
		    setInterval(timestamp, 1000);
		});

		function timestamp() {
		    $.ajax({
		        url: "<?=base_url('Rahul/getTime')?>",
		        success: function(data) {
		            $('#timestamp').html(data);
		        },
		    });
		}
		$(document).on('click','#ditDept',function(){
			var depId=$(this).attr('d-id');
			var depName=$(this).attr('d-name');
			$('#edit_dept_id').val(depId);
			$('#edit_dept_name').val(depName);
		});

		// $(document).on('submit','#updDe',function(e){
		// 	e.preventDefault();
		// 	var depId=$('#edit_dept_id').val();
		// 	var depHead=$('#dp_head').val();
		// 	if($depHead==0){
		// 		alert("Please Select Department Head.");
		// 	}
			
		// 	var depName=$('#edit_dept_name').val();
		// 	$.ajax({
		// 		url:"<?=base_url('Department/updateDeptName')?>",
		// 		type:"post",
		// 		data:{dptId:depId, dptName:depName,depHead:depHead},
		// 		success:function(response){
		// 			console.log(response);
		// 			response=JSON.parse(response);
		// 			if(response.code==1){
		// 				// swal('Success')
		// 				swal("Good job!", response.data, "success");
		// 				setInterval(function(){ location.reload()}, 2000);
		// 			}else{
		// 				swal("Oops!", response.data, "warning");
		// 				setInterval(function(){ location.reload()}, 2000);
		// 			}
					
		// 		}
		// 	})
		// });
		$(document).on('click','.deleteDepartment',function(){
			var depId=$(this).attr('d-id');
			if(confirm("Are you Sure want to delete this record?") ==true)
            {  
			$.ajax({
				url:"<?=base_url('Department/deleteDepartment')?>",
				type:"post",
				data:{depID:depId},

				success:function(response){
					response=JSON.parse(response);

					if(response.code==1){
						swal("Good job!", response.data, "success");
						setInterval(function(){ location.reload()}, 2000);
					}
					
				}
			})
			 }
			 else{
						swal("Oops!", 'error', "warning");
						setInterval(function(){ location.reload()}, 2000); 
					}
		});
		$(document).on('click','.deleteDesignation',function(){
			var desID=$(this).attr('d-id');
			if(confirm("Are you Sure want to delete this record?") ==true)
            {
					$.ajax({
						url:"<?=base_url('Department/deleteDesignation')?>",
						type:"post",
						data:{desID:desID},
						success:function(response){
							response=JSON.parse(response);
							if(response.code==1){
								swal("Good job!", response.data, "success");
								setInterval(function(){ location.reload()}, 2000);
							}
							
						}
					})
			}
				else{
								swal("Oops!", 'error', "warning");
								setInterval(function(){ location.reload()}, 2000); 
							}

		});
	</script>
	<div class="line"></div>
	<div class="row pd-5 mt-4">
		<?php
			// print_r($Deatils);
			foreach ($Deatils as $value ) {
			  // print_r($value);
			?>
				<div class="col-sm-6">
					<div class="row">
						<div class="col-md-9">
							<h5 class="mt-2 text-dark font-weight-bold"><?=$value['Dept_name']?></h5>
				   			<h6>Department head:<span class="text-info"><?=$value['fullname']?></span></h6>		
						</div>
						<div class="col-md-3">
							<?php
                                      foreach($Assign_permission as $checkpermission)
                                        {
                                          $permission=$checkpermission->permission;
                                          foreach ($UsersPermission as $Uperms) 
                                            {
                                             $Userpermi=$Uperms->permission;
                                          if(strpos($permission,'Edit')!==false||strpos($Userpermi,'Edit')!==false)
                                          {?>

                                          	 <a href="<?=base_url('Department/Edit_Deptarmentsss/').$value['Dept_id']?>"><span class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></span></a>

						 <!--  <a href="<?=base_url('Department/Edit_Deptarmentsss/').$value->Dept_id?>"><i class="fas fa-edit"></i></a> -->
						    <?php }
                                         else
                                         {
                                          ?>
                                           <a href="javascript:void(0)" style="visibility: hidden"class="btn btn-primary fs " id="ditDept"  data-toggle="modal" data-target="#updateDepartment" d-id="<?=$value['Dept_id']?>" d-name="<?=$value['Dept_name']?>"><i class="fas fa-edit"></i></a>
                                          <?php
                                          }
                                         if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                          {?>
						   <a href="javascript:void(0)" class="btn btn-danger fs deleteDepartment" d-id="<?=$value['Dept_id']?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></a>
						   <?php }
                                         else
                                         {
                                          ?>
                                             <a href="javascript:void(0)" style="visibility: hidden"class="btn btn-danger fs deleteDepartment" d-id="<?=$value['Dept_id']?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></a>
                                           <?php
                                          }

                                        }
                                    }?>

						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<table class="table table-striped  table-bordered">
								<thead>
									<tr>
										<th scope="col" class="fs1">#</th>
										<th scope="col" class="fs1">Designation</th>
										<th scope="col" class="fs1">Action</th>
									</tr>
								</thead>
								<tbody> 
									<?php
									$j=1;
										foreach ($value['designation'] as $desg) {
											// print_r($desg);
											# code...
											?>
												<tr>
													<td scope="row" class="text-info"><?=$j?></td>
													<td scope="row" ><?=$desg->designations?></td>
													<td scope="row" >
														<?php
                                      foreach($Assign_permission as $checkpermission)
                                        {
                                          $permission=$checkpermission->permission;
                                          foreach ($UsersPermission as $Uperms) 
                                            {
                                             $Userpermi=$Uperms->permission;
                                          if(strpos($permission,'Edit')!==false||strpos($Userpermi,'Edit')!==false)
                                          {?>
													    <a href="<?=base_url('Department/Edit_Dept/').$desg->designations_id?>"><span class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></span></a>
									    	 <?php }
                                         else
                                         {
                                          ?>
                                           <a href="#" style="visibility: hidden"><button type="button" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></button></a>
                                             <?php
                                          }
                                         if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                          {?>

														
														<a href="javascript:void(0)" type="button" class="btn btn-danger fs deleteDesignation" d-id="<?=$desg->designations_id?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></a>
														<?php }
                                         else
                                         {
                                          ?>

														<a href="javascript:void(0)" type="button"style="visibility: hidden" class="btn btn-danger fs deleteDesignation" d-id="<?=$desg->designations_id?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></a>
                                          <?php
                                          }

                                        }
                                    }?>
													</td>
												</tr>
											<?php
											$j++;
										}
									?>
									
											
									<!-- <tr>
										<td scope="row" class="text-info">2</td>
										<td scope="row">Administrator</td>
										<td scope="row">
										     <a href="departmentform.php"><button type="button" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button></a>
											
											<button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
										</td>
									</tr> -->
									
								</tbody>
							</table> 
						</div>
					</div>
				   
				</div>
			<?php
					
			}
			?>




	</div>
	<div class="row">
	    <div class=" col-md-8">
	       
	    </div>
	</div>
</div>
<!-- <div class="modal" id="updateDepartment" tabindex="-1" role="dialog" aria-labelledby="updateDepartmentLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateDepartmentLabel">Edit Departments</h5>
		<div class="line"></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="updDe">
			<div class="form-group">
				<div class="row">
					<div class="col-sm-4">
						<label for="exampleInputEmail1">Edit Departments <span class="text-danger">*</span></label>
					</div>
					<div class="col-sm-8">
						
						<input type="hidden" class="form-control" id="edit_dept_id" aria-describedby="emailHelp" placeholder="IT/Collaborative">
						<input type="text" class="form-control" id="edit_dept_name" aria-describedby="emailHelp" placeholder="IT/Collaborative">
					</div>

				</div>
				<div class="row">
					<div class="col-sm-4">
						<label for="exampleInputEmail1">Select Dept. Head <span class="text-danger">*</span></label>
					</div>
					<div class="col-sm-8">
						<select class="form-control" name="dp_head" id="dp_head">
							<option value="0"> Select</option>
							<option value="22">RA</option>
						</select>
					</div>

				</div>
				<div class="form-group">
					<button type="sumbit" class="btn btn-primary">Update</button>
				</div>
			</div> 

		</form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        
      </div>
    </div>
  </div>
<!-- </div>	 -->
 <script> 

       $(document).ready(function(){
            $("#depttt").submit(function(e){
                e.preventDefault();
                var formData= new FormData($(this)[0]); 
                $.ajax({
                    url:"<?=base_url('Department/updatedepttt')?>",
                     type:"post",
                     data:formData,
                     // enctype:"multipart/form-data",
                     contentType:false,
                     processData:false,
                     cache:false,
                    success:function(response)
                    {
                     var obj=JSON.parse(response);
                     console.log(obj.status);
                     if(obj.status==0)
                     {
                        swal("Designation", "Error", "error")
                     }
                     if(obj.status==1)
                     {
                      swal("Designation", "Updated", "success")
                     }
                     if(obj.status==2)
                     {
                     swal("Designation", "Try Again", "error")
                     }
                     window.location.href='<?=base_url("Department/index")?>';
                    }
                });
            });

        });

    </script>