
<style>
	.tabcontent 
	{
	    display: none;
	    width: 100%;
	    padding: 15px 25px;
	    border: 1px solid #ccc;
	    border-top: none;
	}
	.label-style
	{

	    font-size:14px;
	    font-weight:bold;
	    color: #3c3e40!important;
	   
	}
	.bg-color
	{
	    background-color: #6777ef;
	    color:white;
	}
	.slect_ht{
		padding: 0px !important;
    	height: 22px !important;
	}
   
</style>
<!-- <body class="bg-light"> -->
	<div class="container-fluid card bg-white  ">
	    <div class="row bg-light p-0">
		    <div class="tab">
				<div class="container" id=" mydiv">
					<button class="tablinks  active" onclick="openCity(event, 'all')">All Bugs</button>
					<button class="tablinks " onclick="openCity(event, 'new')">New Bugs</button>
				</div>
			</div>
		</div>
		<div class="row bg-white p-0">
			<div id="all" class="tabcontent">
			<table id="example" class="display nowrap table-responsive" style="width:100%">
				<thead>
					<th>Bug Title</th>
					<th>Date</th>
					<!--<th>Status</th>-->
					<th>Severity</th>
					<!--<th>Reporter</th>-->
					<th>ASSigned To </th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
					foreach ($all_bugs_info as $buggy) {
						// print_r($buggy);
					?>
					<tr>
						<td><a href="<?=base_url('Bugs/bugsDetails')?>"><?=$buggy->bug_title?></a></td>
						<td><?=date('d, M Y',strtotime($buggy->created_time))?></td>
						<!--<td>-->
						<!--	<div class="row">-->
						<!--		<div class="col-sm-4">-->
						<!--		<label class="bg-success text-white p-1">Resolved</label>-->
						<!--		</div>-->
						<!--		<div class="col-sm-6">-->
						<!--			<select class="slect_ht form-control" name="department">-->
						<!--			<option value="name1">Change</option>-->
						<!--			<option value="name2">Verified</option>-->
						<!--			<option value="name3">Resolved</option>-->
						<!--			<option value="name1">In Progress</option>-->
						<!--			<option value="name2">Confirmed</option>-->
						<!--			<option value="name3">Unconfirmed</option>-->
						<!--			</select>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</td>-->
						<td><label class="bg-primary text-white p-1">Minor</label></td>
						<!--<td>Undefined User</td>-->
						<td>Everyone<i class="fa fa-question-circle"></i> <i class="fa fa-plus text-primary"></i></td>
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
                                       <a href="<?=base_url('Bugs/edit?id='.$buggy->bug_id)?>"><span class="sele_staus bg-success p-1 text-white"><i class="far fa-edit"></i></span></a>
                                        <?php }
                                         else
                                         {
                                          ?>
                                          <a href="javascript:void(0)" style="visibility: hidden"><span class="sele_staus bg-success p-1 text-white"><i class="far fa-edit"></i></span></a>
                                          <?php
                                          }
                                         if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                          {?>

                                        <a href="javascript:void(0)" bugs_id="<?=$buggy->bug_id?>" class="deletetbugss"><span class="bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>
                                        <?php }
                                         else
                                         {
                                          ?>

                                       <span style="visibility: hidden" class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>

                                          <?php
                                          }

                                        }
                                    }?>
						</td>
				
					</tr>
				<?php } ?>
				</tbody>
				<!--<tfoot>-->
				<!--   <tr>-->
						
				<!--        <th>Name/Title</th>-->
				<!--        <th>Date</th>-->
				<!--        <th>Account Name</th>-->
				<!--        <th>Ammount</th>-->
				<!--        <th>Status</th>-->
				<!--        <th>Attachment</th>-->
				<!--        <th>Action</th>-->
				<!--    </tr>-->
				<!--</tfoot>-->
			</table>
			    <!-- <table class="table table-striped ">
					<thead>
						<tr class="text-center">
							<th>Bug Title</th>
							<th>Date</th>
							<th>Status</th>
							<th>Severity</th>
							<th>Reporter</th>
						   	<th>ASSigned To </th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
				  
						  <tr>
							<td><a href="#">Edit mode not displaying all the item</a></td>
							<td>07.30.2019 10:30</td>
							<td>
								<div class="row">
									<div class="col-sm-4">
								       <label class="bg-success text-white p-1">Resolved</label>
								    </div>
								    <div class="col-sm-6">
									    <select class=" form-control" name="department">
					                       <option value="name1">Change</option>
					                       <option value="name2">Verified</option>
					                       <option value="name3">Resolved</option>
					                       <option value="name1">In Progress</option>
					                       <option value="name2">Confirmed</option>
					                       <option value="name3">Unconfirmed</option>
					                    </select>
					                </div>
				                </div>
							</td>
							<td><label class="bg-primary text-white p-1">Minor</label></td>
							<td>Undefined User</td>
							<td>Everyone<i class="fa fa-question-circle"></i> <i class="fa fa-plus text-primary"></i></td>
							<td scope="row" >
							    <button type="button"  id="edit" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button>
								
								<button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
							</td>
					 
						</tr>
						  
					</tbody>
					
                </table> -->
			</div>

			<div id="new" class="tabcontent">
			    <div class="row mt-3">
				    <div class="col-md-12">
				    	<form id="add_bug">
					    	<div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class="ml-5 label-style" >Issue # <span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-3">
										<input type="text" name="issue_no" required="" class="form-control" id="designation" aria-describedby="emailHelp">
									</div>
								</div>
							</div>
						    <div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class="ml-5 label-style">Bug Title  <span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-5">
									<input type="hidden" name="company_id" value="<?=$this->session->userdata('logged_user')[0]->company_id?>">
										<input type="text" class="form-control" required="" name="bug_title" id="designation" aria-describedby="emailHelp" >
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class="ml-5 label-style">Related To </label>
									</div>
									<div class="col-sm-5">
										<select class=" form-control" required="" id="related_to">
											<option value="" selected="" disabled="">None</option>
											<option value="project">Projects</option>
											<option value="oppor">Opportunities</option>
										</select>
									</div>
								</div>
							</div>
							<div class="project_opportunity">
								
							</div>
							<div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class="ml-5 label-style">Reporter  <span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-5">
										<select class=" form-control" name="reporter">
											<?php
											foreach ($admin_staff as $reporter) {
											?>
											<option value="<?=$reporter->user_id?>"><?php
											if ($reporter->role_id=='1') {
												$namer="(Admin)";
											}elseif ($reporter->role_id=='2') {
												$namer="(Client)";
											}
											else{
												$namer="(Staff)";
											}
											echo $reporter->full_name.$namer;
											?></option>
										<?php } ?>
										</select>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class="ml-5 label-style">Priority  <span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-5">
										<select class=" form-control" name="priority">
											<option value="high">High</option>
											<option value="medium">Medium</option>
											<option value="low">Low</option>
											<option value="ok">Ok</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class="ml-5 label-style">Severity  <span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-5">
										<select class=" form-control" name="severity">
											<option value="minor">Minor</option>
											<option value="major">Major</option>
											<option value="show">Show Stopper</option>
											<option value="must">Must be Fixed</option>
										</select>
									</div>
								</div>
							</div>
									
							<div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class=" label-style">Description</label>
									</div>
									<div class="col-sm-7">
										<textarea id="reset1" cols="70" rows="1">
						  							
										</textarea>
										<script>
										   CKEDITOR.replace('reset1');
										</script>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class=" label-style">Reproducibility</label>
									</div>
									<div class="col-sm-7">
										<textarea id="reproduct" cols="70" rows="1">
						  							
										</textarea>
										<script>
										   CKEDITOR.replace('reproduct');
										</script>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class=" label-style">Bug Status  <span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-5">
										<select class=" form-control" name="bug_status">
											<option value="unconform">Unconfirmed</option>
											<option value="conform">Confirmed</option>
											<option value="in">In Progress</option>
											<option value="resolved">Resolved</option>
											<option value="verified">Verified</option>
										</select>
									</div>
								</div>
							</div>
						              <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Assigned To <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
                <div class="checkbox c-radio needsclick">
                  <input type="radio" value="everyone" id="everyone" name="assign_to" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                </div>
                <div class="checkbox c-radio needsclick">
                  <input type="radio" value="custom" name="assign_to" class="customize_permission"> Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group dvPassport"  style="display: none">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Select Users<span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
                 <?php
                 $count=1;
                 foreach ($users as $user) {
                 ?>

                   <input type="checkbox" value="<?=$user['user_id']?>" class="chkPassport admind" > <?=$user['username']?> 
                   <?php
                   if ($user['role_id']=='1') {
                   echo '<strong class="badge btn-danger">Admin</strong>';
                   }
                   else{
                   	echo '<strong class="badge btn-primary">Staff</strong>';
                   }
                   ?>
                 <br>
                 <div class="row dvPassport"  id="dvPassport<?=$count?>" style="display: none">
                    <div class="col-md-3">
                   <input type="checkbox" class="data" value="View" > View
                  </div>
                  <div class="col-md-3">
                       <input type="checkbox" class="data" value="Edit" > Edit
                  </div>
                  <div class="col-md-3">
                      <input type="checkbox" class="data" value="Delete"> Delete
                  </div>
                 </div>
                 <?php
                 $count++;
                  }
                 ?>
              </div>
            </div>
          </div>
						    <div class="row mt-5">
				               <div class="offset-4 col-sm-4">
				                 <button type="submit" class="btn btn-info  m-auto text-center w-50">Save</button>
				               </div>
				            </div>
						<form>
					</div>
				</div>
			</div>
		</div> 
	</div>
<script type="text/javascript">
$(document).ready(function(){
  $(".btn1").click(function(){
    $(".dvPassport").hide();
  });
 
});

    $(function () {
        $(".customize_permission").click(function () {
            if ($(this).is(":checked")) {
                $(".dvPassport").show();
            } else {
                $(".dvPassport").hide();
            }
        });
    });
</script>
<script type="text/javascript">
        $("#add_bug").submit(function(e){
         e.preventDefault();
         var ar=[];
           var count=1;
           var obj = {};
            $('.admind').each(function(){
              var pass_id="#dvPassport"+count;
              if($(this).is(':checked')){
               var user_id=$(this).val();
               var data=$(pass_id).find('.data');
               data.each(function(){
                if($(this).is(':checked')){
                  ar.push($(this).val());
                }
               })
               obj[user_id] = ar;
               ar=[];
               }
               count++;
            })
         var new_ar=[];
          $('.song').each(function(){
              if($(this).is(':checked'))
              {
                  new_ar.push($(this).val()); 
              }        
          });
         var project_settings=JSON.stringify(new_ar);
         var permission=JSON.stringify(obj);
         if(Object.keys(permission).length==2){
          permission="all";
         }
         if($('#everyone').is(':checked')) { permission="all"; }
         var formData= new FormData($(this)[0]);
         formData.append('permission',permission);
         formData.append('reproducibility', CKEDITOR.instances.reproduct.getData());
         formData.append('bug_description', CKEDITOR.instances.reset1.getData());
         $.ajax({
             url:"<?=base_url()?>Bugs/add_bug",
              type:"post",
              data:formData,
              contentType:false,
              processData:false,
              cache:false,
             success:function(response)
             {
             	//console.log(response);
                //var response=JSON.parse(response);
               if(response==1){
                 swal("Bug Added Successfully!", "Created", "success");
                 location.reload();
                 //window.location.href='<?=base_url()?>Home';
               }
               else{
                swal('OOPS', "Something Went Wrong", "error");
              }
             }
         });
    });
</script>

	<script type="text/javascript">
	$(document).on('change','#related_to',function(){
		var related_to=$(this).val();
		if (related_to=="project") {
			var name="project_id";
			var label="Select Project";
		}
		else{
			var name="opportunities_id";
			var label="Select Opportunity";
		}
		$.ajax({
			type:'POST',
			data:{
				related_to:related_to,
			},
			url:'<?=base_url()?>Bugs/fetch_bugs_projects_oppor',
			success:function(response){
				var response=JSON.parse(response);
				//console.log(response.data['1'].project_id);
				var html="";
				html+='<div class="form-group">';
				html+=	'<div class="row">';
				html+=			'<div class="offset-2 col-sm-2">';
				html+=				'<label for="exampleInputEmail1" class="ml-5 label-style">'+label+'</label>';
				html+=			'</div>';
				html+=			'<div class="col-sm-5">';
				html+=				'<select class=" form-control" name="'+name+'">';
				html+=					'<option value="" selected="" disabled="">'+label+'</option>';
				if(response.status==1){
						for(var i=0;i<response.data.length;i++){
				html+=			'<option value="'+response.data[i].project_id+'">'+response.data[i].project_name+'</option>';
								}
							}
							else{
						for(var i=0;i<response.data.length;i++){
				html+=			'<option value="'+response.data[i].opportunities_id+'">'+response.data[i].opportunity_name+'</option>';
								}
							}
				html+=		'</select>';
				html+=			'</div>';
				html+=		'</div>';
				html+=	'</div>';
				$('.project_opportunity').empty();
				$('.project_opportunity').append(html);
			}
		})
	})
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
		// Add active class to the current button (highlight it)
		var header = document.getElementById("myDIV");
		var btns = header.getElementsByClassName("btn");
		for (var i = 0; i < btns.length; i++) {
		  btns[i].addEventListener("click", function() {
		  var current = document.getElementsByClassName("active");
		  current[0].className = current[0].className.replace(" active", "");
		  this.className += " active";
		  });
		}
   </script>

	
	<script>
$( document ).ready(function() 
{
	$('#all').css('display','block');
})
</script>

<script>
  $( function() {
	$( "#datepicker" ).datepicker();
  } );
</script>

<script>
  $( function() {
	$( "#datepicker1" ).datepicker();
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
$(document).ready(function(){
  $("#edit").click(function(){
    $("#all").hide();
    $("#new").show();
  });
 
});
</script>
 <script type="text/javascript">
        $(document).ready(function(){
          $('.deletetbugss').on('click',function(){ 
             var bugs_id=$(this).attr("bugs_id");
               // alert(bugs_id);
           if(confirm("Are you Sure want to delete this record?") ==true)
            {       
            // alert(owner_id);         
                $.ajax({
                  url:"<?=base_url('Bugs/DeleteBugsData')?>",
                  type:"post",
                  data:{bugs_id:bugs_id},
                  success:function(response)
                  {   
                  response=JSON.parse(response);             
                     if (response==1)
                      {
                        swal("Bugs", "Delete successfully", "success")
                   // alert('');
                    location.reload();
                    
                       }
                  }
                 })                           
             userPreference = "Data Delete successfully!";

             }
             else 
             {
              userPreference = "Save Canceled!";
              }
              
          });
        })  ;
      </script>
<!-- 
</body>
</html> -->
