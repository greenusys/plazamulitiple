
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card p-2">
        <!--         <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>Attendance Report</strong></span> 
                   </div>
                    <div class="col-md-6 text-right"><button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div>
                </div> -->
              <div class="p-2">
                <form  method="post ">
                  <div class="form-group pt-2">
                    <div class="row">
                      <div class="offset-1 col-sm-2 text-right">
                        <label for="exampleInputEmail1" class="pt-2">Department<sup class="text-danger">*</sup></label>
                      </div>
                      <div class="col-sm-7">
                          <div class="input-group">
                                <select name="client_id" class="form-control" id="emply">
                                    <option selected="" disabled="">Select Employee</option>
                                    <option value="1">IT/Collaborative</option>
                               
                                </select> 
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group pt-2">
                      <div class="row">
                        <div class="offset-1 col-sm-2 text-right">
                          <label for="exampleInputEmail1" class="pt-2">Month<sup class="text-danger">*</sup></label>
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
                    <div class="text-center">
                      <button type="submit" class="btn btn-success" >Search</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
          </div>
    
        </section>
      </div>
  <script>
     $(document).ready(function() {
        $("#emply").select2();
      });
  </script>
  <script type="text/javascript">
   $(function () {
      $('.datetimepicker1').datetimepicker();
   });
 </script>