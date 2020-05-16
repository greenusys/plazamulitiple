 <style>
  .w_20{
    width: 20px;
  }
 </style>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
     
              <div class="row">
                    <div class="col-md-6 bg-white">
                      <h4 class=" p-2">Mark Attendance</h4>
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
                  <div class="col-md-3">
                    <span><strong>Mark Attendance</strong></span> 
                   </div>
                    <div class="col-md-9 text-right ">
                      <ul class="list-unstyled d-flex m-0 float-right">
                        <li class="d-flex">
                          <input type="checkbox" name="" class="w_20 form-control"> &nbsp;Mark all clock in &nbsp; &nbsp;
                        </li>
                        <li class="d-flex">
                          <input type="checkbox" name="" class="w_20 form-control"> &nbsp; Mark all clock out &nbsp; &nbsp;
                        </li>
                        <li class="d-flex">
                          <input type="checkbox" name="" class="w_20 form-control"> &nbsp; Mark all  &nbsp; &nbsp;
                        </li>
                        <li>
                                  <button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Update</button>
                        </li>
                      </ul>
                    
             
                    </div>
                </div>
              <div class="p-2">
                <form  method="post ">
                <table id="example" class="display nowrap table" style="width:100%">
                        <thead>
                            <tr>
                                <th>EMP ID</th>
                                <th> Name</th>
                                <th>Clocking Hours</th>
                           
                             
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td><input type="checkbox" name=" " class="h_22 form-control"></td>
                                <td>Tiger Nixon</td>
                                <td><button class="btn btn-success">Check In</td>
                            
                            </tr>
                            
                             <tr>
                              <td><input type="checkbox" name=" " class="h_22 form-control"></td>
                                <td>Tiger Nixon</td>
                                <td><button class="btn btn-success">Check In</td>
                            
                            </tr>
                             <tr>
                              <td><input type="checkbox" name=" " class="h_22 form-control"></td>
                                <td>Tiger Nixon</td>
                                <td><button class="btn btn-success">Check In</td>
                            
                            </tr>
                        </tbody>
                        <tfoot>
                             <tr>
                                <th>EMP ID</th>
                                <th> Name</th>
                                <th>Clocking Hours</th>
                             </tr>
                        </tfoot>
                    </table>
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