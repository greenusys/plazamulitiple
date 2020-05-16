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
   .straight
   {
   	    border-right: 1px solid gray;
   }
   .container1 
   {
	    display: block;
	    position: relative;
	    padding-left: 35px;
	    margin-bottom: 12px;
	    cursor: pointer;
	    font-size: 14px;
	    -webkit-user-select: none;
	    -moz-user-select: none;
	    -ms-user-select: none;
	    user-select: none;
   }

	.container1 input 
	{
	   position: absolute;
	   opacity: 0;
	   cursor: pointer;
	}
	.checkmark1 
	{
	    position: absolute;
	    top: 0;
	    left: 0;
	    height: 25px;
	    width: 25px;
	    background-color: #eee;
	    border-radius: 50%;
	}
	.container1:hover input ~ .checkmark1 
	{
	    background-color: #ccc;
	}
	.container1 input:checked ~ .checkmark1 
	{
	    background-color: #2196F3;
	}
	.checkmark1:after 
	{
	    content: "";
	    position: absolute;
	    display: none;
	}
	.container1 input:checked ~ .checkmark1:after 
	{
	    display: block;
	}
	.container1 .checkmark1:after {
	 	top: 9px;
		left: 9px;
		width: 8px;
		height: 8px;
		border-radius: 50%;
		background: white;
	}
	.table tr td{
		padding:10px 5px !important;
	}
	.label_danger{
		color: #fc544b !important;
		font-size: 14px;
    	font-weight: bold;
	}
</style>

	<div class="container-fluid card mt-5">
	    <div class="row bg-light p-0">
		    <div class="tab">
				<div class="container tabsb " id=" mydiv">
					<button class="tablinks btn active" onclick="openCity(event, 'all')">All Invoices</button>
					<button class="tablinks btn" onclick="openCity(event, 'Create')">Create Invoice</button>
				</div>
			</div>
		</div>
		<div class="row bg-white p-0">
			<div id="all" class="tabcontent">
			    <!-- <table class="table table-striped ">
					<thead>
						<tr class="text-center">
							<th>Invoice</th>
							<th>Invoice Date</th>
							<th>Due Date</th>
							<th>Client Name</th>
							<th>Due Amount</th>
						   	<th>Status </th>
							<th>Action</th>
						</tr>
					</thead>
								
                </table> -->
                <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                               
                            <th>Invoice</th>
							<th>Invoice Date</th>
							<th>Due Date</th>
							<th>Client Name</th>
						   	<th>Status </th>
							<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php
                        	foreach ($fetch_invoices as $invoicer) {
                        		// print_r($invoicer);
                        	?>
                           <tr>
                           	<td><?=$invoicer->reference_no?></td>
                       		<td><?=$invoicer->invoice_date?></td>
                           	<td><?=$invoicer->due_date?></td>
                           	<td><?=$invoicer->name?></td>
                           	<td><?=$invoicer->status?></td>
                           	<td>
                           		<?php
                                      foreach($Assign_permission as $checkpermission)
                                        {
                                          $permission=$checkpermission->permission;
                                          foreach ($UsersPermission as $Uperms) 
                                            {
                                             $Userpermi=$Uperms->permission;
                                             if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                          {?>
                             <a href="javascript:void(0)" invoice_id="<?=$invoicer->invoices_id?>" class="deleteinvoice"><span class="bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>
                           	  <?php }
                                         else
                                         {
                                          ?>
                                           <a href="javascript:void(0)" style="visibility: hidden"  class="deleteinvoice"><span class="bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>
                                         
                                           <?php
                                          }

                                        }
                                    }?>
                                      </td>

                           </tr>
                             <?php }?>
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
			</div>

			<div id="Create" class="tabcontent">
				<form id="update_invoice">
			        <div class="row mt-3">
				        <div class="col-md-7 straight">
					        <div class="form-group">
								<div class="row">
									<div class="offset-1 col-sm-2">
										<label for="exampleInputEmail1" class=" label-style">Ref No  <span class="text-danger">*</span></label>
									</div>
									<div class="col-sm-7">
										<input type="text" class="form-control" name="reference_no" id="designation" aria-describedby="emailHelp" placeholder="">
									</div>
									<div class="col-sm-2">
										<label class="bg-info p-1 text-white" id="recur">Recurring</label>
									</div>
								</div>
							</div>
<script>
	$(document).ready(function(){
		$('#moredata').hide();
	  $("#recur").click(function(){

		var attr = $('.check_recur_frequency').attr('name');
		if (typeof attr !== typeof undefined && attr !== false) {
		    $('.check_recur_frequency').removeAttr("name");
		    $('.check_recur_start_date').removeAttr("name");
		    $('.check_recur_end_date').removeAttr("name");
		}
		else{
			$('.check_recur_frequency').attr('name','recur_frequency');
		    $('.check_recur_start_date').attr('name','recur_start_date');
		    $('.check_recur_end_date').attr('name','recur_end_date');
		}
	    $("#moredata").toggle();
	  });
	 
	});
</script>
							<div id="moredata">
								<div class="form-group">
									<div class="row">
										<div class=" col-sm-3">
											<label for="exampleInputEmail1" class="ml-4 label-style">Recur Every </label>
										</div>
										<div class="col-sm-5">
											<select class="form-control check_recur_frequency">
												<option value="none">None</option>
												<option value="7D">Week</option>
												<option value="1M">Month</option>
												<option value="3M">Quarter</option>
												<option value="6M">Six Monthly</option>
												<option value="1Y">One Year</option>
												<option value="2Y">Two year</option>
												<option value="3Y">Three Year</option>
											</select>
										</div>
									</div>
							    </div>
							    <div class="form-group">
									<div class="row">
										<div class=" col-sm-3">
											<label for="exampleInputEmail1" class="label-style ml-4">Start Date</label>
										</div>
										<div class="col-sm-6">
											<input type="text" id="datepicker" placeholder="" class="form-control check_recur_start_date">
										</div>
										<div class="col-sm-1">
											<span type="button" id="acount" class="btn btn-light butn"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
								</div>
						
								<div class="form-group">
									<div class="row">
										<div class=" col-sm-3">
											<label for="exampleInputEmail1" class="label-style ml-4">End Date </label>
										</div>
										<div class="col-sm-6">
											<input type="text" id="datepicker1" placeholder="" class="form-control check_recur_end_date">
										</div>
										<div class="col-sm-1">
											<span type="button" id="acount" class="btn btn-light butn"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
								</div>
							</div>
							   
							<div class="form-group">
							    <div class="row">
									<div class="offset-1 col-sm-2">
										<label for="exampleInputEmail1" class="label-style"> Client  <span class="text-danger">*</span> </label>
									</div>
									<div class="col-sm-6">
										<div class="input-group">
		                                    <select name="client_id" class="form-control select_boxs" style="width: 100%" required="" id="client_main_id" data-parsley-id="6" tabindex="-1" aria-hidden="true">
		                                        <option value="" selected="" disabled="">Select Client</option>
		                                        <?php
		                                        foreach ($clients as $clnt) {
		                                        ?>
		                                        <option value="<?=$clnt->client_id?>"><?=$clnt->name?></option>
		                                    <?php } ?>
		           		                    </select>
			                            </div>
									</div>
								</div>
							</div>

				<div class="form-group">
								<div class="row">
									<div class=" col-sm-3">
										<label for="exampleInputEmail1" class="ml-5 label-style">Projects </label>
									</div>
									<div class="col-sm-7">
										<select class=" form-control" name="project_id" id="project_main_id">
											<option >None</option>
										</select>
									</div>
								</div>
							</div>
							 <div class="form-group">
									<div class="row">
										<div class=" col-sm-3">
											<label for="exampleInputEmail1" class="label-style ml-4">Invoice Date</label>
										</div>
										<div class="col-sm-6">
											<input type="text" id="datepicker2" name="invoice_date" placeholder="" class="form-control">
										</div>
										<div class="col-sm-1">
											<span type="button" id="acount" class="btn btn-light butn"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
								</div>
						
								<div class="form-group">
									<div class="row">
										<div class=" col-sm-3">
											<label for="exampleInputEmail1" class="label-style ml-5">Due Date </label>
										</div>
										<div class="col-sm-6">
											<input type="text" id="datepicker3" name="due_date" placeholder="" class="form-control">
										</div>
										<div class="col-sm-1">
											<span type="button" id="acount" class="btn btn-light butn"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
								</div>
							
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1"  id="d_type" class="label-style ml-3">Discount Type</label>
									</div>
									<div class="col-sm-7">
										<select class=" form-control disType" name="discount_type">
											<option selected="" value="">No Discount</option>
											<option value="1">Before Tax</option>
											<option value="2">After Tax</option>
										</select>
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

			
      	<div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Assigned To <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
                <div class="checkbox c-radio needsclick">
                  <input type="radio" value="" name="everyone" id="everyone" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                </div>
                <div class="checkbox c-radio needsclick">
                  <input type="radio" value="" name="everyone" class="customize_permission"> Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
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
						</div>
						<div class=" col-sm-5">
							<div class="form-group">
								<div class="row">
									<div class="offset-1 col-sm-4">
										<label for="exampleInputEmail1" class="label-style ml-4 ">Sales Agent</label>
									</div>
									<div class="col-sm-7">
										<select class=" form-control" name="user_id">
											<option value="" selected="" disabled="">Select Sales Agent</option>
											<?php
											foreach ($users as $user) {
											?>
											<option value="<?=$user['user_id']?>"><?=$user['username']?></option>
										<?php } ?>
										</select>
									</div>
								</div>
							</div>
						</div>
				    </div>
				    <div class="row mt-3">
				    	<div class="col-md-12">
					        <div class="form-group">
								<div class="row">
									<div class=" col-sm-1">
										<label for="exampleInputEmail1" class=" label-style ml-4">Notes</label>
									</div>
									<div class="col-sm-10">
										<textarea id="editor1" cols="100" rows="1" >
						  							
										</textarea>
										<script>
										   CKEDITOR.replace('editor1');
										</script>
									</div>
								</div>
							</div>
						</div>
				    </div>
				    <div class="row">
<!-- 				    	<div class="col-sm-4">
				    		<div class="form-group">
								<div class="row">
									<div class="col-sm-12">
										<select class=" form-control" name="item">
											<option value="minor">Add Items</option>
										</select>
									</div>
								</div>
							</div>
				    	</div> -->
                        <div class="offset-2 col-sm-6">
                        	<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="exampleInputEmail1" class="label-style ">Show quantity as</label>
									</div>
									<div class="col-sm-9">
										<div class="example d-flex">
										    <label class="container1">Qty
												<input type="radio" checked="checked" head="Qty" class="quant" value="qty" name="show_quantity_as">
												<span class="checkmark1"></span>
											</label>
											<label class="container1 ml-5">Hours
											   <input type="radio" name="show_quantity_as" class="quant" head="Hours" value="hours">
											   <span class="checkmark1"></span>
											</label>
											<label class="container1 ml-5">Qty/hours
											   <input type="radio" name="show_quantity_as" class="quant" head="Qty/Hours" value="qty_hours">
											   <span class="checkmark1"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
				    	</div>
				    </div>
<script type="text/javascript">
	$(document).on('change','.quant',function(){
		var quant=$('input[name="show_quantity_as"]:checked').attr('head');
		$('.table_qty').html(quant);
	})
</script>
				    <div class="row">
				    	<table class="table " id="mytable">
							<thead>
								<tr class="text-center">
									<th>Item Name</th>
									<th>Description</th>
									<th class="table_qty">Qty</th>
									<th>Price</th>
									<th>Tax Rate</th>
								   	<th>Total</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody id="apnd_table">
							    <tr id="show">
									<td>
										<label class="form-control">Item Name</label>
										<!-- <textarea cols="30" rows="2" class="text-center"></textarea> -->
									</td>
									<td>
										<label class="form-control">Description</label>
									
									</td>
									<td>

										<h6><input type="text" name="" class="p-1 border-0" placeholder="Unit Type"></h6>
										<label class="form-control">1</label>
										<!-- <input type="text" class="form-control qty_amt p-1" value="1"> -->
										
									</td>
									<td class="">
										<label class="form-control">Price</label>
									</td>
									<td>
										<select class=" form-control">
											<option value="minor">NO Tax</option>
										</select>
									</td>
									<td class="total_prc text-center"></td>
									<td >
									   <span type="button" class="btn btn-info small-box" id="add">
										  <i class="fas fa-check"></i>
										</span> 
									</td>
								</tr>
							
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td >Sub Total :	</td>
									<td class="sub_tt"></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								    <td >Discount (%)</td>
									<td ><input type="text" class="form-control discount" name="discount_percent" placeholder="0"></td>
									<td>- <span class="dis_tt">0.00</span></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								    <td >Adjustment</td>
									<td><input type="text" class="form-control adjustment" placeholder="0"></td>
									<td class="adjs_tt">0.00</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td > Total :	</td>
									<td class="grand_tt">0.00</td>
								</tr>
							</tbody>
                        </table>
                     
				    </div>
											
				    <div class="row mt-5">
		               <div class="offset-6 col-sm-6">
		                 <!-- <button type="submit" class="btn btn-primary ">Save as Draft</button> -->
		                  <button type="submit" class="btn btn-success ">Add</button>
		               </div>
		            </div>
		        </form>
<!-- 		        <button class="btn btn-primary checker">Checker</button> -->
			</div>
		</div> 
	</div>
	
<script>


	$(document).ready(function(){
$(document).on("click","body",function(){
	$(".qty_amt").each(function() {
		var qty = $(this).val();
   		var price = $(this).parent().parent().find(".item_prc").val();
   		var total = qty*price;
   		$(this).parent().parent().find(".total_prc").html(total);

	});
	calculate();
})

	  $("#add").click(function(){
	   // $("#data").show();
	     html=' <tr class="main_row">'+
				'<td>'+
						'<textarea cols="30" rows="2" class="text-center item_name" placeholder="Item Name"></textarea>'+
					'</td>'+
					'<td>'+
						'<textarea cols="30" rows="2" class="text-center description" placeholder="Description"></textarea>'+
					'</td>'+
					'<td>'+
						'<input type="text" class="form-control qty_amt p-1 quantity_table" value="1">'+
						'<span><input type="text" class="border-0 p-1 unit" placeholder="Unit Type"></span>'+
					'</td>'+
					'<td class="">'+
						'<input type="text" class="form-control item_prc p-1" placeholder="Price">'+
					'</td>'+
					'<td>'+
						'<select class=" form-control">'+
							'<option value="minor">NO Tax</option>'+
						'</select>'+
					'</td>'+
					'<td class="total_prc"></td>'+
					'<td >'+
					   '<span type="button" class="btn btn-danger small-box del_row">'+
						  '<i class="far fa-trash-alt"></i>'+
						'</span> '+
					'</td>'+
				'</tr>';
			//$("#apnd_table").append(html);
			$("#apnd_table tr:first").after(html);
	  });
	 
	 $(document).on("click",".del_row",function(){
	 	$(this).parent().parent().remove();
	 })
	 var dtt=0;
	 function calculate(){
	 	var total = 0; 
 		$(".total_prc").each(function(){
 			var tt = $(this).html();
 			total =total+parseInt(tt);
 		})
 			$(".sub_tt").html(total);
 		var discount =$(".discount").val(); 
 		if(discount){
 			var dis_type=$(".disType").val();
 			if(dtt==0){
	 			if(dis_type=='no_discount'){
	 				alert("First Select Discount Type.");
	 				dtt=1;
	 				$("#d_type").removeClass("label-style");
	 				$("#d_type").addClass("label_danger");
	 				$('html,body').animate({
				        scrollTop: $("#" + "d_type").offset().top
				    }, 'slow');
	 			}else{
	 				discount_tt = total*(discount/100);
	 				$(".dis_tt").html(discount_tt);
	 				total = total - discount_tt;
	 			}
	 		}
 		}else{
 			dtt=0;
 		}
 	
 		$(".grand_tt").html(total);
 		var adjs = $(".adjustment").val();
 		if(adjs){
 			$(".adjs_tt").html(adjs);
 			$(".grand_tt").html(total+parseInt(adjs));
 		}
	 }	

// $(document).on("keypress",".adjustment",function(){
// alert("dadsa");
// })

	});
</script>

	<script>
$(document).on('change','#client_main_id',function(){
	var client_id = $(this).val();
	$.ajax({
		type:'POST',
		data:{
			client_id:client_id
		},
		url:'<?=base_url()?>Sales/fetch_project',
		success:function(response){
			var response = JSON.parse(response);
			var html='';
			html+='<option value="" selected="" disabled="">Select Project</option>';
			if (response.status==1) {
				for(var i=0;i<response.data.length;i++){
				html+='<option value="'+response.data[i].project_id+'">'+response.data[i].project_name+'</option>';
				}
			  $('#project_main_id').empty();
			  $('#project_main_id').append(html);
			}
			else{
			  $('#project_main_id').empty();
			  $('#project_main_id').append(html);
			}
		}
	})
})	
</script>

<script type="text/javascript">
        $("#update_invoice").submit(function(e){
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
         var permission=JSON.stringify(obj);
         if(Object.keys(permission).length==2){
          permission="all";
         }
         if($('#everyone').is(':checked')) { permission="all"; }
         var formData= new FormData($(this)[0]);
         var discount_total=$('.dis_tt').html();
         var adjustment=$('.adjs_tt').html();
         formData.append('adjustment',adjustment);
         formData.append('discount_total',discount_total);
         formData.append('permission',permission);
         formData.append('notes', CKEDITOR.instances.editor1.getData());
         $.ajax({
             url:"<?=base_url()?>Sales/create_invoice",
              type:"post",
              data:formData,
              contentType:false,
              processData:false,
              cache:false,
             success:function(response)
             {
               var response=JSON.parse(response);
               if(response.status==1){
               	var invoices_id=response.invoice_id;
				var item_name=[];
				var item_desc=[];
				var quantity=[];
				var unit=[];
				var unit_cost=[];
				var total_cost=[];
				$('.main_row').each(function() {
				  	item_name.push($(this).find('.item_name').val());
				  	item_desc.push($(this).find('.description').val());
				  	quantity.push($(this).find('.quantity_table').val());
				  	unit.push($(this).find('.unit').val());
				  	unit_cost.push($(this).find('.item_prc').val());
				  	total_cost.push($(this).find('.total_prc').html());
				});
				$.ajax({
					type:'POST',
					data:{
						invoices_id:invoices_id,
						item_name:item_name,
						item_desc:item_desc,
						quantity:quantity,
						unit:unit,
						unit_cost:unit_cost,
						total_cost:total_cost
					},
					url:'<?=base_url()?>Sales/main_invoice',
					success:function(resp){
						if (resp==1) {
							swal("Success", "Invoice Created Successfully", "success");
							location.reload();
						}
						else{
							swal("OOPS", "Something Went Wrong", "warning");
						}
					}
				})
               }
               else if(response.status=="0"){
                swal(response.msg, "Already Exists", "error");
              }
             }
         });
    });
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
	 $(function () {
        $(".addgenral").click(function () {
            $('#general').css('display','block');
        });
    });
</script>




<script>
  $( function() {
	$( "#datepicker" ).datepicker(
		{ dateFormat: 'dd-mm-yy' }
		);
  } );
</script>

<script>
  $( function() {
	$( "#datepicker1" ).datepicker(
		{ dateFormat: 'yy-mm-dd' }
		);
  } );
</script>
<script>
  $( function() {
	$( "#datepicker2" ).datepicker(
		{ dateFormat: 'yy-mm-dd' }
		);
  } );
</script>

<script>
  $( function() {
	$( "#datepicker3" ).datepicker(
		{ dateFormat: 'yy-mm-dd' }
		);
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
	  $("#delete").click(function(){
	    $("#data").hide();
	     
	  });
	 
	});
</script>
<script type="text/javascript">
	$(document).on('click','.deleteinvoice',function(){
			var invoice_id=$(this).attr('invoice_id');
			// alert(invoice_id);
			if(confirm("Are you Sure want to delete this record?") ==true)
            {  
			$.ajax({
				url:"<?=base_url('Sales/deleteInvoice')?>",
				type:"post",
				data:{invoice_id:invoice_id},

				success:function(response){
					response=JSON.parse(response);
					console.log(response.data);

					if(response.code==1){
						swal("Invoice!","Deleted Successfully","success");
						 location.reload()
					}
					
				}
			})
			 }
			 // else{
				// 		swal("Invoice!", 'Data Secure', "Success");
				// 		// location.reload(); 
				// 	}
		});
</script>




</body>
</html>