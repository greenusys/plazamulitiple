		<div class="container bg-white  mt-5" id="ticket">
		    <div class="row">
				<div class="col-md-10">
				   <h6 class="mt">IP Restriction For :<?=$ip =$this->input->ip_address();?></h6>
				</div>
			</div>
			    <div class="line"></div>
				<div class="row pd-5 mt-4">
					
				</div>
				<?php if($act==1): ?>
        			<div class="row">
        			    <div class=" col-md-8 offset-md-2">
        			       <form id="addIpAddress">
        			           <div class="form-group">
        			               <label>Ip Address</label>
        			               <input class="form-control" type="text" name="ip_address" value="<?=$ip?>">
        			               <span class="text-danger">Note: Only Selected Ip Address can mark Attendance.</span>
        			           </div>
        			           <div class="form-group">
        			               
        			               <input class="btn btn-success" type="submit" value="Allow">
        			              
        			           </div>
        			       </form>
        			    </div>
        			</div>
        		<?php endif; ?>
    			<div class="row" >
    			    <div class=" col-md-8 offset-md-2">
    			       <table class="table table-responsive" id="tbl_">
    			           <thead>
    			               <th>S.No</th>
    			               <th>IP Address</th>
    			               <th>Status</th>
    			               <?php if($act==1): ?> <th>Action</th><?php endif; ?>
    			           </thead>
    			           <tbody>
    			               <?php $i=1;?>
    			               <?php foreach($ip_address as $ip) : ?>
    			               <tr>
    			                   <td><?=$i;?></td>
    			                   <td><?=$ip->allowed_ip; ?></td>
    			                   <td><?=ucfirst($ip->status); ?></td>
    			                   <?php if($act==1): ?>
    			                    <td>
    			                        <a href="javascript:void(0)" class="accept_ btn btn-info" data-id="<?=$ip->allowed_ip_id?>"><i class="far fa-check-square"></i></a>
    			                        <a href="javascript:void(0)" class="reject_ btn btn-danger" data-id="<?=$ip->allowed_ip_id?>"><i class="fas fa-times"></i></a>
    			                        <a href="javascript:void(0)" class="delete_ btn btn-danger" data-id="<?=$ip->allowed_ip_id?>"><i class="fas fa-trash"></i></a>
    			                    </td>
    			                   <?php endif; ?>
    			               </tr>
    			               <?php $i++; ?>
    			               <?php endforeach; ?>
    			           </tbody>
    			       </table>
    			    </div>
    			</div>
		</div>
      </div>
    </div>
  </div>
  <script>
      $(document).on('submit','#addIpAddress',function(e){
          e.preventDefault();
          var formData= new FormData($(this)[0]);
         $.ajax({
             url:"<?=base_url('Restriction/ip_address_add')?>",
             type:"post",
             cache:false,
             contentType:false,
             processData:false,
             data:formData,
             success:function(response){
                        console.log(response);
                        response=JSON.parse(response);
                        if(response.code==1){
                            swal("Great!!", response.msg, "success");
                        }else{
                            swal("Oops..!", response.msg, "warning");
                        }
                         $('#addIpAddress')[0].reset();
                        location.reload();
                    }
         });
      });
      $(document).on('click','.reject_',function(){
          var id=$(this).attr('data-id');
          $.ajax({
             url:"<?=base_url('Restriction/ip_action')?>",
             type:"post",
             data:{id:id,act:2},
             success:function(response){
                        console.log(response);
                        response=JSON.parse(response);
                        if(response.code==1){
                            swal("Great!!", response.msg, "success");
                        }else{
                            swal("Oops..!", response.msg, "warning");
                        }
                        $("#tbl_").load(location.href + " #tbl_");
                    }
         });
      });
      $(document).on('click','.accept_',function(){
          var id=$(this).attr('data-id');
          $.ajax({
             url:"<?=base_url('Restriction/ip_action')?>",
             type:"post",
             data:{id:id,act:1},
             success:function(response){
                        console.log(response);
                        response=JSON.parse(response);
                        if(response.code==1){
                            swal("Great!!", response.msg, "success");
                        }else{
                            swal("Oops..!", response.msg, "warning");
                        }
                        $("#tbl_").load(location.href + " #tbl_");
                    }
         });
      });
      $(document).on('click','.delete_',function(){
      	swal({
    		  title: "Are you sure?",
    		  text: "Once deleted, you will not be able to recover this record!",
    		  icon: "warning",
    		  buttons: true,
    		  dangerMode: true,
    		})
    		.then((willDelete) => {
    		  if (willDelete) {
    		  	 var id=$(this).attr('data-id');
    	          $.ajax({
    	             url:"<?=base_url('Restriction/delete_Ip')?>",
    	             type:"post",
    	             data:{id:id,act:1},
    	             success:function(response){
    	                        console.log(response);
    	                        response=JSON.parse(response);
    	                        if(response.code==1){
    	                            swal("Great!!", response.msg, "success");
    	                        }else{
    	                            swal("Oops..!", response.msg, "warning");
    	                        }
    	                        $("#tbl_").load(location.href + " #tbl_");
    	                    }
    	         });
    		  } else {
    		    swal("Your  record is safe!");
    		  }
    		});
         
      });
      
  </script>
