<?php
$bug = $bug[0];
?>
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
		<div class="row bg-white p-0">
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
                                        <input type="hidden" name="id" value="<?=$bug->bug_id?>">
										<input type="text" name="issue_no" value="<?=$bug->issue_no?>" required="" class="form-control" id="designation" aria-describedby="emailHelp">
									</div>
								</div>
							</div>
						    <div class="form-group">
								<div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" value="<?=$bug->issue_no?>" class="ml-5 label-style">Bug Title  <span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-5">
										<input type="text" class="form-control" value="<?=$bug->bug_title?>" required="" name="bug_title" id="designation" aria-describedby="emailHelp" >
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
											<option value="" disabled="">None</option>
											<option value="project" <?php echo $bug->project_id!=null?'selected':'' ?>>Projects</option>
											<option value="oppor" <?php echo $bug->opportunities_id!=null?'selected':'' ?>>Opportunities</option>
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
                                                <option value="<?=$reporter->user_id?>" <?php echo $reporter->user_id==$bug->reporter?'selected':'' ?>><?php
                                                if ($reporter->role_id == '1') {
                                                    $namer = "(Admin)";
                                                } elseif ($reporter->role_id == '2') {
                                                    $namer = "(Client)";
                                                } else {
                                                    $namer = "(Staff)";
                                                }
                                                echo $reporter->full_name . $namer;
                                                ?></option>
										<?php }?>
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
											<option value="high" <?php echo $bug->priority=="high"?'selected':'' ?>>High</option>
											<option value="medium" <?php echo $bug->priority=="medium"?'selected':'' ?>>Medium</option>
											<option value="low" <?php echo $bug->priority=="low"?'selected':'' ?>>Low</option>
											<option value="ok" <?php echo $bug->priority=="ok"?'selected':'' ?>>Ok</option>
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
											<option value="minor" <?php echo $bug->severity=="minor"?'selected':'' ?>>Minor</option>
											<option value="major" <?php echo $bug->severity=="major"?'selected':'' ?>>Major</option>
											<option value="show" <?php echo $bug->severity=="show"?'selected':'' ?>>Show Stopper</option>
											<option value="must" <?php echo $bug->severity=="must"?'selected':'' ?>>Must be Fixed</option>
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
                                        <?=$bug->bug_description?>
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
                                        <?=$bug->reproducibility?>
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
											<option value="unconform" <?php echo $bug->bug_status=="unconform"?'selected':'' ?>>Unconfirmed</option>
											<option value="conform" <?php echo $bug->bug_status=="conform"?'selected':'' ?>>Confirmed</option>
											<option value="in" <?php echo $bug->bug_status=="in"?'selected':'' ?>>In Progress</option>
											<option value="resolved" <?php echo $bug->bug_status=="resolved"?'selected':'' ?>>Resolved</option>
											<option value="verified" <?php echo $bug->bug_status=="verified"?'selected':'' ?>>Verified</option>
										</select>
									</div>
								</div>
							</div>
							<?php
							$permissionList=json_decode($bug->permission,true);
							
							?>
						              <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Assigned To <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
                <div class="checkbox c-radio needsclick">
                  <input type="radio" <?php echo $bug->assign_to=="everyone"?'checked':'' ?> value="everyone" id="everyone" name="assign_to" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                </div>
                <div class="checkbox c-radio needsclick">
                  <input type="radio" <?php echo $bug->assign_to=="custom"?'checked':'' ?> value="custom" name="assign_to" class="customize_permission"> Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group dvPassport"  style="display:<?php echo $bug->assign_to=="everyone"?'none':'block' ?>;">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Select Users<span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
                 <?php
                $count = 1;
                foreach ($users as $user) {
                    ?>

                    <input type="checkbox" <?php echo array_key_exists($user['user_id'],$permissionList)?'checked':'' ?> value="<?=$user['user_id']?>" class="chkPassport admind" > <?=$user['username']?>
                                <?php
                    if ($user['role_id'] == '1') {
                        echo '<strong class="badge btn-danger">Admin</strong>';
                    } else {
                        echo '<strong class="badge btn-primary">Staff</strong>';
                    }
                    ?>
                 <br>
                 <div class="row dvPassport"  id="dvPassport<?=$count?>" style="display: <?php echo $bug->assign_to=="everyone"?'none':'flex' ?>;">
                    <div class="col-md-3">
                   <input type="checkbox" <?php echo array_key_exists($user['user_id'],$permissionList) && in_array('View',$permissionList[$user['user_id']])?'checked':'' ?> class="data" value="View" > View
                  </div>
                  <div class="col-md-3">
                       <input type="checkbox" <?php echo array_key_exists($user['user_id'],$permissionList) && in_array('Edit',$permissionList[$user['user_id']])?'checked':'' ?> class="data" value="Edit" > Edit
                  </div>
                  <div class="col-md-3">
                      <input type="checkbox" <?php echo array_key_exists($user['user_id'],$permissionList) && in_array('Delete',$permissionList[$user['user_id']])?'checked':'' ?> class="data" value="Delete"> Delete
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
				                 <button type="submit" class="btn btn-info  m-auto text-center w-50">Update</button>
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
             url:"<?=base_url()?>Bugs/update_bug",
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
                 swal("Bug Updated Successfully!", "Updated", "success");
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

	$(document).ready(function(){
		var related_to=$('#related_to option:selected').val();
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
				var alreadyProjectId='<?=$bug->project_id?>'
				var alreadyOpporId='<?=$bug->opportunities_id?>'
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
								var selected= alreadyProjectId==response.data[i].project_id?"selected":"";
				html+=			'<option value="'+response.data[i].project_id+'"'+selected+'>'+response.data[i].project_name+'</option>';
								}
							}
							else{
						for(var i=0;i<response.data.length;i++){
							var selected= alreadyProjectId==response.data[i].opportunities_id?"selected":"";
				html+=			'<option value="'+response.data[i].opportunities_id+'" '+selected+'>'+response.data[i].opportunity_name+'</option>';
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
    $("#new").show();
});
</script>

