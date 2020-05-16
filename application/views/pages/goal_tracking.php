	<style>
	.active{
		background: white !important;
	}
</style>

		<div class="row mt-4">
		   <div class="col-lg-12">
		   		<div class="row bg-light">
				    <div class="tab">
						<div class="container" id=" mydiv">
							<button class="tablinks btn active" onclick="openCity(event, 'general')">Goal Tracking</button>
							<button class="tablinks btn" onclick="openCity(event, 'contact')">Set New Goal</button>
						</div>
					</div>
				</div>
				<div class="row bg-white">
					<div id="general" class="tabcontent w-100">
					    <table class="table table-striped ">
							<thead>
								<tr>
									<th>Subject</th>
									<th>Type</th>
									<th>Target Achivement</th>
									<th>Start Date</th>
									<th>Request Date</th>
								   
									<th>End date </th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
						  
								  <tr>
									<td>Tiger Nixon</td>
									<td>2011/04/25</td>
									<td>Edinburgh</td>
									<td>Edinburgh</td>
									<td>Tiger Nixon</td>
									<td>2011/04/25</td>
									<td>Edinburgh</td>
							 
								</tr>
								  
							</tbody>
							
		                </table>
					</div>

					<div id="contact" class="tabcontent w-100">
					    <div class="row mt-3">
						    <div class="col-md-12">
							    <div class="form-group">
									<div class="row">
										<div class="offset-2 col-sm-2">
											<label for="exampleInputEmail1" class="ml-5 label-style">Subject  <span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-5">
											<input type="text" class="form-control" id="designation" aria-describedby="emailHelp" >
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="offset-2 col-sm-2">
											<label for="exampleInputEmail1" class="ml-5 label-style">Goal Type  <span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-5">
											<select class=" form-control" name="department">
												<option value="it">Achieve Total Income</option>
												<option value="it">Total Income By Bank</option>
												<option value="it">Achieve Total Expense</option>
												<option value="it">Total Expense By Bank</option>
												<option value="it">Invoice Goal</option>
												<option value="it">Estimate Goal</option>
											</select>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="offset-1 col-sm-3">
											<label for="exampleInputEmail1" class="ml-5 label-style">Target Achievement <span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-5">
											<input type="text" class="form-control" id="designation" aria-describedby="emailHelp" >
										</div>
									</div>
								</div>
					
					           <div class="form-group">
									<div class="row">
										<div class="offset-2 col-sm-2">
											<label for="exampleInputEmail1" class="label-style">Start Date <span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-4">
											<input type="text" id="datepicker" placeholder="2020" class="form-control">
										</div>
										<div class="col-sm-1">
											<button type="button" id="acount" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
										</div>
										
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="offset-2 col-sm-2">
											<label for="exampleInputEmail1" class="label-style">End Date <span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-4">
											<input type="text" id="datepicker1" placeholder="2020" class="form-control">
										</div>
										<div class="col-sm-1">
											<button type="button" id="acount" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
										</div>
										
									</div>
								</div>
		            
		            
								
								<div class="form-group">
									<div class="row">
										<div class="offset-2 col-sm-2">
											<label for="exampleInputEmail1" class=" label-style">Description</label>
										</div>
										<div class="col-sm-5">
											<textarea rows="2" cols="59"></textarea>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="offset-2 col-sm-2">
											<label for="exampleInputEmail1" class=" label-style">Permission <span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-7">
										
											<div class="checkbox c-radio needsclick ">
												<input type="radio" name="gender" value="male" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
											</div>
											<div class="checkbox c-radio needsclick">
												<input type="radio" name="gender" value="male" id="chkPassport" onclick="ShowHideDiv(this)" > Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
											</div>
										</div>
									</div>
							    </div>
								<div class="form-group"  id="dvPassport" style="display: none">
							    <div class="row">
									<div class="offset-2 col-sm-2">
										<label for="exampleInputEmail1" class="label-style">select Users<span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-9">
										 <input type="checkbox" name="vehicle1" value="Bike"  id="chkPassport1" onclick="ShowHideDiv(this)"> admin <strong class="badge btn-danger">Admin</strong>
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
										 
		                                 <input type="checkbox" name="vehicle2" value="Car"  id="chkPassport2" onclick="ShowHideDiv(this)" > adminko <strong class="badge btn-danger">Admin</strong>
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
								
								
							</div>
						</div>
					</div>
				</div> 
			</div>
		   </div>
 	</section>
</div>

	
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
var header = document.getElementById("mydiv");
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
	$('#general').css('display','block');
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