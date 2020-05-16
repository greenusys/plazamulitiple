 
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
     
              <div class="row">
                    <div class="col-md-6 bg-white">
                      <h4 class=" p-2">Timechange Request</h4>
                    </div>
                  <div class="col-md-6 bg-white text-right ">
                    <div class="p-2">date
                <button class="btn btn-danger d-none check_btn"><i class="fas fa-sign-out-alt"></i> Checkout</button>
                     <button class="btn btn-success check_btn "><i class="fas fa-sign-in-alt"></i> Checkin</button>
                   </div>
                  </div>
              </div>
             
        
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card p-2">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>All Time Change Request</strong></span> 
                   </div>
                    <div class="col-md-6 text-right"><button class="btn btn-success rounded-0" data-toggle="modal" data-target="#timeManualy"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div>
                </div>
              <div class="p-2">
              <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                               <th>EMP ID</th>
                                <th>Name</th>
                                <th>Time In</th>
                                <th>Time Out</th>
                                <th>Status</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>Tittle</td>
                              <td>61</td>
                                <td>System Architect</td>
                                <td>$320,800</td>
                                <td>2011/04/25</td>
                                <td>
                                    <div class="">
                                      <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                      <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                       <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                    </div>

                                </td>
                               
                              
                            </tr>
                            
                            <tr>
                              <td>Tittle</td>
                              <td>61</td>
                                <td>System Architect</td>
                                <td>$320,800</td>
                                <td>2011/04/25</td>
                                <td>
                                    <div class="">
                                      <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                      <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                       <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                    </div>

                                </td>
                                
                            </tr>
                              
                        </tbody>
                        <tfoot>
                          <tr>
                               <th>EMP ID</th>
                                <th>Name</th>
                                <th>Time In</th>
                                <th>Time Out</th>
                                <th>Status</th>
                                <th>Action</th>
                               
                            </tr>
                        </tfoot>
                    </table>
              </div>
            </div>
          </div>
          </div>
    
        </section>
      </div>

<!-- Modal -->
<div id="timeManualy" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header">
            <h5 class="modal-title" >Add Time Manually</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
      <div class="modal-body">
        <div>
          <form method="POST">
             <div class="form-group pt-2">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1" class="pt-2">Employee<sup class="text-danger">*</sup></label>
                  </div>
                  <div class="col-sm-7">
                      <div class="input-group">
                          <select name="client_id" class="form-control" id="emply">
                            <option selected="" disabled="">Select Employee</option>
                            <option value="1">Opportunities</option>
                            <option value="2">Bugs</option>
                            <option value="3">Projects</option>
                            <option value="1">Leads</option>
                            <option value="2">Goal Tracking</option>
                            <option value="3">Tasks</option>
                          </select>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group pt-2">
                      <div class="row">
                        <div class="col-sm-5 text-right">
                          <label for="exampleInputEmail1" class="pt-2">Date In<sup class="text-danger">*</sup></label>
                        </div>
                        <div class="col-sm-7">
                          <div class='input-group date datetimepicker1' id='datetimepicker1'>
                              <input type='text' class="form-control" />
                              <span class="input-group-addon">
                                  <span ><i class="fa fa-calendar"></i></span>
                              </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group pt-2">
                      <div class="row">
                        <div class="col-sm-5 text-right">
                          <label for="exampleInputEmail1" class="pt-2">Date Out<sup class="text-danger">*</sup></label>
                        </div>
                        <div class="col-sm-7">
                          <div class='input-group date datetimepicker1' id='datetimepicker1'>
                              <input type='text' class="form-control" />
                              <span class="input-group-addon">
                                  <span ><i class="fa fa-calendar"></i></span>
                              </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group pt-2">
                      <div class="row">
                        <div class=" col-sm-5 text-right">
                          <label for="exampleInputEmail1" class="pt-2">Clock In<sup class="text-danger">*</sup></label>
                        </div>
                        <div class="col-sm-7">
                          <div class='input-group date datetimepicker3' id='datetimepicker3'>
                              <input type='text' class="form-control" />
                              <span class="input-group-addon">
                                  <span ><i class="fa fa-calendar"></i></span>
                              </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group pt-2">
                      <div class="row">
                        <div class=" col-sm-5 text-right">
                          <label for="exampleInputEmail1" class="pt-2">Clock Out<sup class="text-danger">*</sup></label>
                        </div>
                        <div class="col-sm-7">
                          <div class='input-group date datetimepicker3' id='datetimepicker3'>
                              <input type='text' class="form-control" />
                              <span class="input-group-addon">
                                  <span ><i class="fa fa-calendar"></i></span>
                              </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-success" >Update</button>
              </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
   $(function () {
      $('.datetimepicker1').datetimepicker();
   });
      $(function () {
                $('.datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
</script>