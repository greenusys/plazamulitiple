 
      <!-- Main Content -->
      <!-- <div class="main-content">
        <section class="section">
     
              <div class="row">
                    <div class="col-md-6 bg-white">
                      <h4 class=" p-2">Employee Salary List</h4>
                    </div>
                  <div class="col-md-6 bg-white text-right ">
                    <div class="p-2">date
                <button class="btn btn-danger d-none check_btn"><i class="fas fa-sign-out-alt"></i> Checkout</button>
                     <button class="btn btn-success check_btn "><i class="fas fa-sign-in-alt"></i> Checkin</button>
                   </div>
                  </div>
              </div>
              -->
        
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card p-2">
           <!--      <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>Employee Salary List</strong></span> 
                   </div>
                    <div class="col-md-6 text-right"><button class="btn btn-success rounded-0"><i class="fa fa-plus" aria-hidden="true"></i> Add Time Manually</button></div>
                </div> -->
              <div class="p-2">
              <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                               <th>EMP ID</th>
                                <th>Name</th>
                                <th>Salary Type</th>
                                <th>Basic Salary</th>
                                <th>Overtime(Per Hour)</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          foreach ($employee as $emp_data) {
                          ?>
                            <tr>
                              <td><?=$emp_data->employment_id?></td>
                              <td><?=$emp_data->fullname?></td>
                                <td>TO BE CHANGED</td>
                                <td><?=$emp_data->basic_salary?></td>
                                <td><?=$emp_data->overtime_salary?></td>
                                <td>
                                    <div class="">
                                      <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                      <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                       <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                    </div>

                                </td>
                            </tr>  
                            <?php
                            }
                            ?>                 
                        </tbody>
                        <tfoot>
                          <tr>
                               <th>EMP ID</th>
                                <th>Name</th>
                                <th>Salary Type</th>
                                <th>Basic Salary</th>
                                <th>Overtime(Per Hour)</th>
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
