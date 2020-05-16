    <div class="container-fluid">
	    <div class="row mt-4">
		    <div class="col-sm-6">
			    <div class="card bg-white shadow p-3">
				    <h6>Update Profile</h6>
		            <div class="line mt-2"></div>
					<form action="<?=base_url('User/updateUserInfo')?>" method="post" enctype="multipart/form-data">
						<?php 

						//print_r($user_info);
						?>
						<div class="row">
						    <div class="offset-1 col-md-11">
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="fullname">Full Name<span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-8">
											<input type="text" name="fullname" class="form-control" id="fullname" value="<?=$user_info[0]->fullname?>" placeholder="Adminko">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="phone">phone</label>
										</div>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="phone" id="phone" value="<?=$user_info[0]->phone?>" >
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="language">Language</label>
										</div>
										<div class="col-sm-8">
											<select name="language" id="language" class="form-control">
                                                <option value="english" selected="selected">English</option>
                                            </select>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="exampleInputEmail1">Locale</label>
										</div>
										<div class="col-sm-8">
											<select class=" form-control" name="locale">
											    <option value="aa_DJ">English (United States)</option>
												<option value="aa_DJ">Afar (Djibouti)</option>
												<option value="aa_ER">Afar (Eritrea)</option>
												<option value="aa_ET">Afar (Ethiopia)</option>
												<option value="af_ZA">Afrikaans (South Africa)</option>
												<option value="sq_AL">Albanian (Albania)</option>
											</select>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="imgup">Profile Photo</label>
										</div>
										<div class="col-sm-4">
											<img id="blah" src="<?=base_url()?><?=$user_info[0]->avatar?>" alt="your image" onerror="this.src='<?=base_url()?>assets/img/avatar/avatar-2.png'" class="w-100" />
											<input type='file' name="file" id="imgup" onchange="readURL(this);" />
										</div>
									</div>
									<input type="hidden" value="<?=$user_info[0]->user_id?>" name="user_id">
									<div class="row mt-4">
									    <div class="offset-4 col-sm-8">
									        <button type="submit" class="btn btn-dark">Update Profile</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>	
					<?php if($this->session->flashdata('msg')){
						echo "<div class='alert-info alert'>".$this->session->flashdata('msg')."</div>";
					}?>		
						<h6 class="mt-4">Change Email</h6>
		                <div class="line mt-2"></div>
		                <form action="<?=base_url('User/updateEmail')?>" method="post">
						<div class="row mt-5">
						    <div class="offset-1 col-md-11">
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="password">Current Password</label>
										</div>
										<div class="col-sm-8">
											<input type="password" class="form-control" name="password" id="password" placeholder="Enter Current Password">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="userEmail">New Email</label>
										</div>
										<div class="col-sm-8">
											<input type="text" name="email" class="form-control" id="userEmail" value="<?=$user_info[0]->email?>" placeholder="New Email">
										</div>
									</div>
								</div>
								<input type="hidden" value="<?=$user_info[0]->user_id?>" name="user_id">
								<div class="row mt-4">
									<div class="offset-4 col-sm-8">
										<button type="submit" class="btn btn-dark">Change Email</button>
									</div>
								</div>
								
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-sm-6">
			    <div class="card bg-white shadow p-3">
				    <h6>Change Password</h6>
		            <div class="line mt-2"></div>
					<form method="post" id="updatePassword" >
						<div class="row">
						    <div class="offset-1 col-md-11">
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="oldpassword">Old Password<span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-8">
											<input type="password" name="password" class="form-control" id="oldpassword" placeholder="Enter Your Old Password">
										</div>
									</div>
								</div>
									<input type="hidden" value="<?=$user_info[0]->user_id?>" id="user_id" name="user_id">
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="newpassword">New Password<span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-8">
											<input type="password" name="new_password" class="form-control" id="newpassword" placeholder="Enter Your new Password">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="confirmpassword">Confirm Password<span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-8">
											<input type="password" name="confirm_password" class="form-control" id="confirmpassword" placeholder="Enter Your confirm Password">
											<p class="text-danger" style="display: none" id="passalert">Password Doen't matched.</p>
										</div>
									</div>
									
								</div>
								<div class="row mt-4">
									<div class="offset-4 col-sm-8">
										<button type="submit" class="btn btn-dark">Change Password</button>
									</div>
								</div>
							</div>
						</div>
						</form>
<script>
$(document).on('submit','#updatePassword',function(e){
			e.preventDefault();
			var newpassword=$('#newpassword').val();
			var oldpassword = $('#oldpassword').val();
			var user_id = $('#user_id').val();
			var confirmpassword=$('#confirmpassword').val();
			
			if(newpassword==confirmpassword){
				$.ajax({
					url:"<?=base_url('User/updatePassword')?>",
					type:"post",
					data:{newpassword:newpassword, oldpassword:oldpassword,user_id:user_id},
					success:function(response){
						//console.log(response);
						response=JSON.parse(response);
						if(response.error==0){
							// swal('Success')
							swal("Good job!", response.msg, "success");
							
						}else{
							swal("Oops!", response.msg, "warning");
							
						}
						
					}
				})
			}else{
				$("#passalert").show("slow");
				//$("#passalert").fadeOut("slow");
  				$("#passalert").fadeOut(5000);
			}
		});
</script>

<!-- 						<h6 class="mt-4">Change Username</h6>
		                <div class="line mt-2"></div>
		                <form>		
						<div class="row mt-5">
						    <div class="offset-1 col-md-11">
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="exampleInputEmail1">Password</label>
										</div>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Password Current Password">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="exampleInputEmail1">New Username</label>
										</div>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="newname" aria-describedby="emailHelp" placeholder="New Username">
										</div>
									</div>
								</div>
								<div class="row mt-4">
									<div class="offset-4 col-sm-8">
										<button type="button" class="btn btn-dark">Change Username</button>
									</div>
								</div>
								
							</div>
						</div>
					</form> -->
				</div>
			</div>
		</div>
	</div>
	</section>
</div>
 <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
 </script>