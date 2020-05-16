<style>

</style>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
     
              <div class="row">
                    <div class="col-md-6 bg-white">
                      <h4 class=" p-2">Dashboard</h4>
                    </div>
                  <div class="col-md-6 bg-white text-right ">
                    <div class="p-2">date
                <button class="btn btn-danger d-none check_btn"><i class="fas fa-sign-out-alt"></i> Checkout</button>
                     <button class="btn btn-success check_btn "><i class="fas fa-sign-in-alt"></i> Checkin</button>
                   </div>
                  </div>
              </div>
          
          <div class="p-3">
            <div class="row bg-white mt-3">
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span>0</span>
                    <p>Without Converted</p>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span>0</span>
                    <p>Last Weeks Created</p>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span>0</span>
                    <p>Completed Achievement</p>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span>0</span>
                    <p>Without Converted</p>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span>0</span>
                    <p>Pending Achievement</p>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="p-3 pro_status">
                    <span class="chart" data-percent="40">
                      <span class="percent"></span>
                    </span>
                    <span class="ml-2"> Done</span>
                  </div>

                </div>
            </div>  
          </div>
          <div class="row mt-4">
            <div class="col-lg-2 col-md-2 col-sm-12">
              <div class="card card-statistic-2 px-2">
                <div class="row  py-1">
                 <div class="col-md-8">
                   <div class=" ">
                      <h6 class="text_col">Not Started</h6>
                   </div>
                 </div>
                 <div class="col-md-4">
                    <span>9/48</span>
                 </div>
               </div>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                    40%
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
              <div class="card card-statistic-2 px-2">
                <div class="row  py-1">
                 <div class="col-md-8">
                   <div class=" ">
                      <h6 class="text_col">In Progress</h6>
                   </div>
                 </div>
                 <div class="col-md-4">
                    <span>9/48</span>
                 </div>
               </div>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                    40%
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
              <div class="card card-statistic-2 px-2">
                <div class="row  py-1">
                 <div class="col-md-8">
                   <div class=" ">
                      <h6 class="text_col">Deferred</h6>
                   </div>
                 </div>
                 <div class="col-md-4">
                    <span>9/48</span>
                 </div>
               </div>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                    40%
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="card card-statistic-2 px-2">
                <div class="row  py-1">
                 <div class="col-md-8">
                   <div class=" ">
                      <h6 class="text_col">Waiting For Someone</h6>
                   </div>
                 </div>
                 <div class="col-md-4">
                    <span>9/48</span>
                 </div>
               </div>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                    40%
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
              <div class="card card-statistic-2 px-2">
                <div class="row  py-1">
                 <div class="col-md-8">
                   <div class=" ">
                      <h6 class="text_col">Complete</h6>
                   </div>
                 </div>
                 <div class="col-md-4">
                    <span>9/48</span>
                 </div>
               </div>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                    40%
                  </div>
                </div>
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
                      aria-selected="true">Client List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                      aria-selected="false">New Client</a>
                  </li>
                  <li class="nav-item ">
                  <a class="nav-link" id="import_project" data-toggle="tab" href="#imp_project" role="tab" aria-controls="imp_project" aria-selected="false">Import Client</a>
                  </li>
                </ul>
                <div class="tab-content card pt-3" id="myTabContentJust">
                  <div class="tab-pane fade show active px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

                   <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
       
                                <th>Name</th>
                                <th>Contacts</th>
                                <th>Primary Contacts</th>
                                <th>Projects</th>
                                <th>Due Ammount</th>
                                <th>Received Ammount</th>
                                <th>Expense</th>
                                <th>Group</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            
                                <td>Donna Snider</td>
                                <td>2122</td>
                                <td>Customer Support</td>
                                <td>hotel mgmt</td>
                                <td>23131</td>
                                <td>2700</td>
                                <td>1212</td>
                                <td>-</td>
                                <td>
                                    <div class="">
                                      <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                      <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                       <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                            
                                <td>Donna Snider</td>
                                <td>2122</td>
                                <td>Customer Support</td>
                                <td>hotel mgmt</td>
                                <td>23131</td>
                                <td>2700</td>
                                <td>1212</td>
                                <td>-</td>
                                <td>
                                    <div class="">
                                      <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                      <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                       <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                            
                                <td>Donna Snider</td>
                                <td>2122</td>
                                <td>Customer Support</td>
                                <td>hotel mgmt</td>
                                <td>23131</td>
                                <td>2700</td>
                                <td>1212</td>
                                <td>-</td>
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
                                <th>Name</th>
                                <th>Contacts</th>
                                <th>Primary Contacts</th>
                                <th>Projects</th>
                                <th>Due Ammount</th>
                                <th>Received Ammount</th>
                                <th>Expense</th>
                                <th>Group</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
                  <div class="tab-pane fade px-4" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                         <div class="row">
        <div class="col-sm-12 cl-md-12 col-lg-12">
                <div class="card">
             
            <div class="tab">
                <div class="offset-3 col-md-9 tabsb">
                <button class="tablinks active" onclick="openCity(event, 'general')">General</button>
                <button class="tablinks" onclick="openCity(event, 'contactdetails')">Contact Details</button>
                <button class="tablinks" onclick="openCity(event, 'web')">Web</button>
                <button class="tablinks" onclick="openCity(event, 'hosting')">Hosting</button>
              </div>
            </div>
            <div id="general" class="tabcontent active">
                 <form  method="post">
                <div class="form-group">
                    <div class="row">
                      <div class="offset-1 col-sm-2 text-right">
                        <label for="exampleInputEmail1">Company Name <span class="text-danger">*</span> </label>
                      </div>
                      <div class="col-sm-7">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                    </div>
                </div>
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Company Email <span class="text-danger">*</span> </label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Company VAT </label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Customer Group </label>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-group">
                        <select name="client_id" class="form-control" id="customer_group">
                        <option value=""></option>
                        
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-1">
                    <button type="button" class="btn btn-light butn1" data-toggle="modal" data-target="#exampleModal" data-toggle="tooltip" data-placement="top" title="New Customer Group"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Language </label>
                  </div>
                  <div class="col-sm-7">
                    <div class="input-group">
                        <select name="client_id" class="form-control language" id="language" style="width: 100%">
                        <option value="">English</option>
                      </select>
                    </div>
                  </div>
                </div>
                  </div>
                  <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Currency </label>
                  </div>
                  <div class="col-sm-7">
                    <div class="input-group">
                        <select name="client_id" class="form-control currency" id="currency" style="width: 100%">
                        <option value="">Euro</option>
                      </select>
                    </div>
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class=" col-sm-3 text-right">
                    <label for="exampleInputEmail1">Received sms Notifications  </label>
                  </div>
                  <div class="col-md-9">
                    <div class="checkbox input-group gap">
                      <label class="ml-4">
                      <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                      </label>
                    </div>
                  </div>
                </div>
                        </div>
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Short Note  </label>
                  </div>
                  <div class="col-sm-7">
                    <textarea class="form-control" name="short_note"></textarea>
                  </div>
                </div>
                  </div>
                  <div class="row mt-3">
                        <div class="offset-8 col-md-1">
                         <button type="button" class="btn btn-primary">Save</button>
                      </div>
                      <div class=" col-md-3">
                         <button type="button" class="btn btn-warning">Save and Create Contact</button>
                      </div>
                      
                    </div>
                </form>
            </div>

            <div id="contactdetails" class="tabcontent">
              <form  method="post">
                  <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Company Phone</label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Company Mobile </label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Zip code </label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div> 
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Company City</label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div> 
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Company Country</label>
                  </div>
                  <div class="col-sm-7">
                    <div class="input-group">
                        <select name="client_id" class="form-control" id="company_country">
                        <option value="">India</option>
                      </select>
                    </div>
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Company Fax</label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
             <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Company Address </label>
                  </div>
                  <div class="col-sm-7">
                    <textarea class="form-control" name="short_note"></textarea>
                  </div>
                </div>
                  </div>  
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1"> Latitude( Google Map ) </label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Longitude( Google Map ) </label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                        <div class="offset-8 col-md-1">
                         <button type="button" class="btn btn-primary">Save</button>
                      </div>
                      <div class=" col-md-3">
                         <button type="button" class="btn btn-warning">Save and Create Contact</button>
                      </div>
                      
                    </div>
            </form>
          </div>

            <div id="web" class="tabcontent">
              <form  method="post">
                <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Company Website</label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Skype id</label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Facebook URL</label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Twitter URL</label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Linkedin URL</label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
                  <div class="row mt-3">
                        <div class="offset-8 col-md-1">
                         <button type="button" class="btn btn-primary">Save</button>
                      </div>
                      <div class=" col-md-3">
                         <button type="button" class="btn btn-warning">Save and Create Contact</button>
                      </div>
                      
                    </div>
                </form>
            </div>
            
            <div id="hosting" class="tabcontent">
              <form  method="post">
                <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Hosting Company</label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Hosting</label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Username</label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Password</label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2 text-right">
                    <label for="exampleInputEmail1">Port</label>
                  </div>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
                   <div class="row mt-3">
                        <div class="offset-8 col-md-1">
                         <button type="button" class="btn btn-primary">Save</button>
                      </div>
                      <div class=" col-md-3">
                         <button type="button" class="btn btn-warning">Save and Create Contact</button>
                      </div>
                      
                    </div>
               </form>    
            </div>
           
          </div>
      
       </div>
       
     
    </div>
                  </div>
                  <div class="tab-pane fade show px-4" id="imp_project" role="tabpanel" aria-labelledby="import_project">
                    <div class="float-right">
                      <button class="btn btn-success rounded-0"><i class="fa fa-download" aria-hidden="true"></i> Download Sample</button>
                    </div>
                    <div class="row">
                        <div class="col-md-12 card p-4">
                          <div class="col-md-6 offset-md-1 mt-3">
                            <form action="/action_page.php">
                                <div class="form-group  row">
                                  <label for="staticEmail" class="text-right col-sm-3 col-form-label font-weight-bold">Choose File <sup class="a1 text-danger">*</sup></label>
                                  <div class="col-sm-8">
                                      <input type="file" class="text-right form-control border-0 d-none" id="img" placeholder="">
                                  <label for="img" class="border w-50 pl-3">Choose File</label>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="staticEmail" class="text-right col-sm-3 col-form-label font-weight-bold">Customer Group </label>
                                  <div class="col-sm-8">
                                     <select  name="cust_grp" class="form-control " id="cust_grp" style="width: 100%" required="">
                                      <option value="" selected="">select</option>
                                      <option value="">GMAP</option>
                                      <option value="">HR</option>
                                      <option value="">IT</option>
                                     </select>            
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="staticEmail" class="text-right col-sm-3 col-form-label font-weight-bold">Language </label>
                                  <div class="col-sm-8">
                                     <select  name="language" class="form-control language" id="language" style="width: 100%" required="">
                                      <option value="" selected="">select</option>
                                      <option value="">English</option>
                                    
                                     </select>            
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="staticEmail" class="text-right col-sm-3 col-form-label font-weight-bold">Currency </label>
                                  <div class="col-sm-8">
                                     <select  name="currency" class="form-control currency" id="currency" style="width: 100%" required="">
                                      <option value="" selected="">select</option>
                                      <option value="">Euro</option>
                                      <option value="">Hong Kong Doller</option>
                                      <option value="">IT</option>
                                     </select>            
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="staticEmail" class="text-right col-sm-3 col-form-label font-weight-bold">Country </label>
                                  <div class="col-sm-8">
                                     <select  name="country" class="form-control " id="country" style="width: 100%" required="">
                                      <option value="" selected="">select</option>
                                      <option value="">France </option>
                                      <option value="">Albania</option>
                                      
                                     </select>            
                                  </div>
                                </div>
                              
                                <div class="" style="padding-left: 26%">
                                  <button type="submit" class="btn btn-primary">upload</button>
                              </div>  
                            </form>   
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content style">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Customer Group</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
        <div class="modal-body">
            <form>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Customer Group </label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Group">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Description  </label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer border-top-0 modal-butn">
          <button type="button" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary">close</button>
          </div>
      </div>
    </div>
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
    $( document ).ready(function() 
    {
      $('#general').css('display','block');
    })
</script>
      <script>
        $(document).ready(function() {
      
        $("#cust_grp").select2(); 
       
        $(".language").select2();
        $(".currency").select2(); 
        $("#country").select2();
      
       });
    </script>