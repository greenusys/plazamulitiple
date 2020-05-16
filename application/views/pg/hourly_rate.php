
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
     
              <div class="row">
                    <div class="col-md-6 bg-white">
                      <h4 class=" p-2">Hourly Template</h4>
                    </div>
                  <div class="col-md-6 bg-white text-right ">
                    <div class="p-2">date
                <button class="btn btn-danger d-none check_btn"><i class="fas fa-sign-out-alt"></i> Checkout</button>
                     <button class="btn btn-success check_btn "><i class="fas fa-sign-in-alt"></i> Checkin</button>
                   </div>
                  </div>
              </div>
             
        
          <div class="row mt-4">
            <div class="col-lg-12">
              <div class="card">
               <!--  <div class="card-header">
                  <h4>Budget vs Sales</h4>
                </div> -->
             <!--    <div class="card-body">
                  <canvas id="myChart" height="158"></canvas>
                </div> -->
                <ul class="nav nav-tabs nav-justified md-tabs indigo col-md-5" id="myTabJust" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
                      aria-selected="true">Hourly Rate List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                      aria-selected="false">Set Hourly Grade</a>
                  </li>
                 <!--  <li class="nav-item ">
                  <a class="nav-link" id="import_project" data-toggle="tab" href="#imp_project" role="tab" aria-controls="imp_project" aria-selected="false">Import Transfer </a>
                  </li> -->
                </ul>
                <div class="tab-content card pt-3" id="myTabContentJust">
                  <div class="tab-pane fade show active px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

                   <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>From Account</th>
                                <th>To Account</th>
                                <th>Ammount</th>
                                <th>Date</th>
                                <th>Attachment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>Tittle</td>
                              
                                <td>System Architect</td>
                                <td>$320,800</td>
                                <td>2011/04/25</td>
                                <td>61</td>
                               
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
                              
                                <td>System Architect</td>
                                <td>$320,800</td>
                                <td>2011/04/25</td>
                                <td>61</td>
                               
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
                                <th>From Account</th>
                                <th>To Account</th>
                                <th>Ammount</th>
                                <th>Date</th>
                                <th>Attachment</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
                  <div class="tab-pane fade px-4" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                    <div class="row">
                       <div class="col-md-8 offset-md-1 mt-3">
                     <div class="">
                       
                          <form action="/action_page.php">
                            <div class="form-group  row mt-2">
                                 <label class="col-md-3 text-right">Hourly Grade<sup class="text-danger">*</sup></label>
                               <div class="col-md-9">
                                    <input type="text" class=" form-control"placeholder="Enter Hourly Grade">
                               </div>

                            </div>
                            <div class="form-group  row">
                             <label class="col-md-3 text-right">Hourly Rate<sup class="text-danger">*</sup></label>
                               <div class="col-md-9">
                                   <input type="text" class=" form-control"placeholder="Enter Hourly Rate" >
                               </div>

                            </div>
                          </form>
                        </div>
                        
                          <div class="text-center ">
                            <button type="submit" class="btn btn-primary pull-right">Save</button>
                          </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="tab-pane fade show px-4" id="imp_project" role="tabpanel" aria-labelledby="import_project">
                    <div class="row">
                     
                        <div class="col-md-12 card p-4">
                          <div class="col-md-5 offset-md-1 mt-3">
                            <form action="/action_page.php">
                                <div class="form-group  row">
                                  <label for="staticEmail" class="text-right col-sm-3 col-form-label font-weight-bold">Choose File <sup class="a1">*</sup></label>
                                  <div class="col-sm-8">
                                      <input type="file" class="text-right form-control border-0 d-none" id="img" placeholder="">
                                  <label for="img" class="border w-50 pl-3">Select File</label>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="staticEmail" class="text-right col-sm-3 col-form-label font-weight-bold">Task Status <sup class="a1">*</sup></label>
                                  <div class="col-sm-8">
                                     <select class="form-control">
                                      <option value="" selected="">select</option>
                                      <option value="">A</option>
                                      <option value="">A</option>
                                      <option value="">A</option>
                                     </select>            
                                  </div>
                              </div>
                                <div class="form-group row">
                                  <label for="staticEmail" class="text-right col-sm-3 col-form-label font-weight-bold">  Assigned to <sup class="a1">*</sup></label>
                                  <div class="col-sm-8">
                                     <input type="radio" name="everyone" value="everyone" checked=""> Everyone  <i class="fa fa-question-circle" aria-hidden="true"></i><br>
                                    <input type="radio" name="everyone" value="everyone">  customize permision  <i class="fa fa-question-circle" aria-hidden="true"></i>
                                  </div>
                                </div>
                                <div class="" style="padding-left: 26%">
                                  <button type="submit" class="btn btn-primary">upload</button>
                              </div>  
                            </form>   
                          </div>
                        </div>
                      </div>
              

                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
