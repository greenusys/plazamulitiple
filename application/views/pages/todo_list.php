<?php
    //     function daysleft($time)
    // {
    //     $result = null;
    //     $to_date = strtotime($time); //Future date.
    //     $cur_date = strtotime(date('Y-m-d'));
    //     $timeleft = $to_date - $cur_date;
    //     $daysleft = round((($timeleft / 24) / 60) / 60);
    //     if ($daysleft == 1) {
    //         $result = ",".$daysleft . ' ' . 'day' . ' ' . 'left';
    //     } else if ($daysleft > 1) {
    //         $result = ",".$daysleft . ' ' . 'days' . ' ' . 'left';
    //     } else if ($daysleft == -1) {
    //         $result = ",".$daysleft . ' ' . 'day' . ' ' . 'gone';
    //     } else if ($daysleft > -1) {
    //         $result = ",".$daysleft . ' ' . 'days' . ' ' . 'gone';
    //     }
    //     return $result;

    // }
?>	
      <div class="row mt-4">
		    <div class="col-sm-6">
			    <div class="card bg-white shadow p-3">
				   <form action="<?=base_url()?>User/addTodoList" method="POST">
						<div class="row ">
						    <div class="offset-1 col-md-8">
								<div class="form-group">
									<div class="row">
										<div class=" col-sm-4 text-right">
											<label for="users">Select Users<span class="text-danger">*</span></label>
										</div>
										<div class="col-sm-8">
                      
											<select type="text" class="form-control" name="users" id="users" style="width:100%">
												<option disabled="" selected="">Select User</option>
                        <?php
                        foreach ($users as $user) {
                        ?>
                        <option value="<?=$user->user_id?>" <?php if ($user->user_id==$main_id) {
                          echo "selected";
                        }?> ><?=$user->fullname?></option>
                      <?php } ?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<button class="btn btn-primary text-weight-bold text-white">Go</button>
							</div>
						</div>
					
					</form>
				</div>
			</div>
		</div>

		<div class="mt-3">
			<div class="card p-2">
		      <div class="card-header row border-bottom py-1">
		        <div class="col-md-6">
		          <span><strong>To Do List</strong></span>
		        </div>
		         <div class="col-md-6 text-right">
		          <button class="btn btn-success p-1" data-toggle="modal" data-target="#addTodoModal" >Add New</button>
		        </div>
		      </div>
		      <div class="p-2">
                   <table class="table table-striped display nowrap" id="table2">
                 
                      <thead class="">
                       <tr>
                          <th></th>
                         <th>What To Do</th>
                         <th>Status</th>
                         <th>End Date</th>
                          <th></th>
                       </tr>
                      </thead>
            
                    <tbody>
                      <?php
                      $count=1;
                      foreach ($fetch_to_do as $todo) {
                      ?>
                        <tr>
                            <td class="sorter text-white"><?=$count?></td>
                            <td><?=$todo->title?>
                            <?php
                            if ($todo->fullname!=null) {
                            ?>
                            <small class="block" data-toggle="tooltip" data-placement="top" data-original-title="" title="">Assign by<a class="text-danger" href="#"><?=$todo->fullname?></a>
                                </small>
                              <?php } ?>
                          </td>
                            <td><?php
                                  if ($todo->status=="3") {
                                    echo "<span class='text-white bg-success sele_staus'>Done</span>";
                                  }
                                  elseif ($todo->status=="2") {
                                    echo "<span class='text-white bg-danger sele_staus'>On Hold</span>";
                                  }
                                  else{
                                    echo "<span class='text-white bg-warning sele_staus'>In Progress</span>";
                                  }
                                  ?>
                                  
                                  <div class="btn-group open">
                                      <button class="btn btn-xs p-0 border btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> Change <span class="caret"></span></button>
                                      <ul class="dropdown-menu animated zoomIn">
                                        <li><a class="change_status" status="1" todo_id="<?=$todo->todo_id?>"  href="javascript:void(0)">In Progress</a></li>
                                        <li><a class="change_status" status="3" todo_id="<?=$todo->todo_id?>"  href="javascript:void(0)">Done</a></li>
                                        <li><a class="change_status" status="2" todo_id="<?=$todo->todo_id?>"  href="javascript:void(0)">On Hold</a></li>
                                      </ul>
                                  </div></td>
                            <td><strong data-toggle="tooltip" data-placement="top"
                                    title="<?= strftime(config_item('date_format'), strtotime($todo->due_date)) ?>"><?= date("l", strtotime($todo->due_date)) ?>
                                <span class="block"><?= daysleft($todo->due_date) ?></span>

                            </strong></td>
                            <td><span class="p-1 text-white btn btn-info editor" todo_id="<?=$todo->todo_id?>" title="Edit"><i class="far fa-edit"></i></span>
                            <span class="p-1 ml-2 text-white btn btn-danger deleter" todo_id="<?=$todo->todo_id?>" title="Delete"><i class="far fa-trash-alt"></i></span></td>
                        </tr>
                      <?php 
                      $count++;
                    } ?>
                  </table>
		      	
		      </div>
			</div>
		</div>
	</section>
</div>
  <script>
     $(document).ready(function() {
        $("#users").select2();
         
      });

     $(document).on('click','.deleter',function(){
         var todo_id=$(this).attr('todo_id');
           swal({
                title: "Are you sure?",
                text: "You will not be able to recover!",
                icon: "warning",
                buttons: [
                  'No, cancel it!',
                  'Yes, I am sure!'
                ],
                dangerMode: true,
              }).then(function(isConfirm) {
                if (isConfirm) {
                  $.ajax({
                    type:'POST',
                    data:{
                      todo_id:todo_id
                    },
                    url:'<?=base_url()?>User/delete_todo',
                    success:function(response){
                      if (response==1) {
                        swal('Deleted','To Do List Removed','success');
                        location.reload();
                      }
                      else{
                        swal('OOPS','Something Went Wrong','warning');
                      }
                    }
                  })
                }
              })
     })

     $(document).on('click','.change_status',function(){
         var status=$(this).attr('status');
         var todo_id=$(this).attr('todo_id');
         $.ajax({
          type:'POST',
          data:{
            status:status,
            todo_id:todo_id
          },
          url:'<?=base_url()?>User/update_todo',
          success:function(response){
            if (response==1) {
              location.reload();
            }else{
              swal('OOPS','Something Went Wrong','warning');
            }
          }
         })
     })
  </script>
               <!-----------todo add modal----------->
<div class="modal fade" id="addTodoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add TODO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="line mt-2"></div>
      <div class="modal-body">
        <div class=" mt-4">
          <div class="card ">
          
              <form method="POST" action="<?=base_url()?>Test/add_todo">
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>Users <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                  <input type="hidden" name="company_id" value="<?=$this->session->userdata('logged_user')[0]->company_id?>">
                    <select class="form-control" name="user_id" placeholder="">
                      <option selected="" disabled="">Select User</option>
                        <?php
                        foreach ($users as $user) {
                        ?>
                        <option value="<?=$user->user_id?>"><?=$user->fullname?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>What To DO <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                   <textarea class="form-control" row="4" name="title"></textarea>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>Status <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                    <select class="form-control" name="status" placeholder="">
                      <option selected="" value="1">In Process</option>
                      <option value="2">On Hold</option>
                      <option value="3">Done</option>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>Due Date <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                   <div class='input-group date datetimepicker1' id='datetimepicker1'>
                        <input type='text' name="due_date" class="form-control" />
                        <span class="input-group-addon">
                            <span ><i class="fa fa-calendar"></i></span>
                        </span>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
          </div>
        </div>
      </div>
 <!--      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update TODO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="line mt-2"></div>
      <div class="modal-body">
        <div class=" mt-4">
          <div class="card ">
          
              <form id="update_task">
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>Users <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                    <select class="form-control" id="element" name="user_id" placeholder="">
                      <option selected="" disabled="">Select User</option>
                        <?php
                        foreach ($users as $user) {
                        ?>
                        <option value="<?=$user->user_id?>"><?=$user->fullname?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>What To DO <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                   <textarea class="form-control" row="4" name="title" id="text_todo"></textarea>
                  </div>
                </div>
                <input type="hidden" value="" name="todo_id" id="todo_task_id">
<!--                 <div class="row form-group">
                  <div class="col-md-3 text-right"><label>Status <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                    <select class="form-control" name="status" id="main_status" placeholder="">
                      <option value="1">In Process</option>
                      <option value="2">On Hold</option>
                      <option value="3">Done</option>
                    </select>
                  </div>
                </div> -->
                <div class="row form-group">
                  <div class="col-md-3 text-right"><label>Due Date <sup class="text-danger">*</sup></label> </div>
                  <div class="col-md-9">
                   <div class='input-group date datetimepicker1' id='datetimepicker1'>
                        <input type='text' name="due_date" id="task_date" class="form-control" />
                        <span class="input-group-addon">
                            <span ><i class="fa fa-calendar"></i></span>
                        </span>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
          </div>
        </div>
      </div>
 <!--      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<script type="text/javascript">
      $("#update_task").submit(function(e){
       e.preventDefault();
          var formData= new FormData($(this)[0]);
          $.ajax({
            url:"<?=base_url()?>User/update_todo_ajax",
            type:"post",
             data:formData,
             contentType:false,
             processData:false,
             cache:false,
            success:function(response)
            {
              if(response==1)
              {
                swal("Updated", "To Do Updated Successfully", "success");
                location.reload();
              }
              else
              {
               swal("OOPS", "Something Went Wrong", "error");
              }
            }
         });
    });
</script>
<script type="text/javascript">
  $(document).on('click','.editor',function(){
    var todo_id=$(this).attr('todo_id');
    $.ajax({
      type:'POST',
      data:{
        todo_id:todo_id
      },
      url:'<?=base_url()?>User/fetch_to_do_id',
      success:function(response){
        var response=JSON.parse(response);
        if (response.status==1) {
        var user_id=response.data[0].user_id;
        $('#element option[value="'+user_id+'"]').attr("selected", "selected");
        $('#main_status option[value="'+user_id+'"]').attr("selected", "selected");
        $('#text_todo').html(response.data[0].title);
        $('#task_date').val(response.data[0].due_date);
        $('#todo_task_id').val(todo_id);
        $('#updateModal').modal('show');
       }
       else{
        swal('OOPS','Something Went Wrong','error');
       }
      }
    })
    // $('#element option[value=""]').attr("selected", "selected");
    // $('#updateModal').modal('show');
  })
</script>
<script type="text/javascript">
     $(function () {
          $('.datetimepicker1').datetimepicker();
      });
  
</script>