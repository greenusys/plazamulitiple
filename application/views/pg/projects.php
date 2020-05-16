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
    $( function() {
    $( "#slider-range-min" ).slider({
      range: "min",
      value: 37,
      min: 1,
      max: 700,
      slide: function( event, ui ) {
      $( "#amount" ).val( "$" + ui.value );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range-min" ).slider( "value" ) );
    } );
  </script>
  
  <script>
    $( function() {
    $( "#datepicker" ).datepicker();
    } );
  </script>
  
  

<script type="text/javascript">
    $(function () {
        $(".chkPassport").click(function () {
            if ($(this).is(":checked")) {
                $(".dvPassport").show();
            } else {
                $(".dvPassport").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $(".chkPassport1").click(function () {
            if ($(this).is(":checked")) {
                $(".dvPassport1").show();
            } else {
                $(".dvPassport1").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $(".chkPassport2").click(function () {
            if ($(this).is(":checked")) {
                $(".dvPassport2").show();
            } else {
                $(".dvPassport2").hide();
            }
        });
    });
</script>
<script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $(".dvPassport").hide();
  });
 
});
</script>
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
                      <h6 class="text_col">Overdue</h6>
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
                      <h6 class="text_col">Overdue</h6>
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
                      <h6 class="text_col">Overdue</h6>
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
                      <h6 class="text_col">Overdue</h6>
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
                      <h6 class="text_col">Overdue</h6>
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
                      <h6 class="text_col">Overdue</h6>
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
                      aria-selected="true">All Projects</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                      aria-selected="false">New Project</a>
                  </li>
                  <li class="nav-item ">
                  <a class="nav-link" id="import_project" data-toggle="tab" href="#imp_project" role="tab" aria-controls="imp_project" aria-selected="false">Import Projects</a>
                  </li>
                </ul>
                <div class="tab-content card pt-3" id="myTabContentJust">
                  <div class="tab-pane fade show active px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

                   <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2008/11/13</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011/06/27</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                                <td>$112,000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
                  <div class="tab-pane fade px-4" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                     <div class="row">
        <div class="col-sm-7 cl-md-7 col-lg-7">
            <form>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Project Name <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Select Client  <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-8">
                <div class="input-group">
                      <select name="state" class="form-control" id="e1" style="width: 100%" >
                          <option value="">Select Client</option>
                          <option value="1">GMAP</option>
                          <option value="2">HR</option>
                          <option value="3">IT</option>
                          <option value="4">BI</option>
                          <option value="5">Marketing ( Uro-Onco)</option>
                          <option value="6">R&amp;D</option>
                          <option value="7">Communication</option>
                          <option value="8">Global</option>
                          <option value="9">Medical</option>
                          <option value="10">Entreprise Excellence</option>
                          <option value="11">BI&amp;A</option>
                          <option value="12">Regulatory</option>
                          <option value="13">Purchasing</option>
                          <option value="14">ali</option>
                      </select>
                </div>
              </div>
              <div class="col-sm-1">
                  <button type="button" class="btn btn-light butn" data-toggle="modal" data-target="#myModal" title="New Client"><i class="fa fa-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Progress </label>
              </div>
              <div class="col-sm-9">
                  <div id="slider-range-min"></div>
                <div class="d-flex bg-light">
                    <div class="col-sm-4">
                    
                      <label for="amount">Progress</label>
                      <input type="text" id="amount" readonly style="border:0; color:#f6931f;width:40%; font-weight:bold;">
                    
                  </div>
                  <div class="col-sm-4">
                    <input type="checkbox" name="vehicle1" value="Bike"> Project Hours<br>
                  </div>
                  <div class="col-sm-4">
                    <input type="checkbox" name="vehicle1" value="Bike"> Through Tasks<br>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Start Date  <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="datepicker">
              </div>
              <div class="col-sm-1">
                  <button type="button" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">End Date  <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="datepicker">
              </div>
              <div class="col-sm-1">
                  <button type="button" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Billing Type  <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-9">
                <div class="input-group">
                      <select name="billing" class="form-control" id="bill2" style="width: 100%" required="">
                          <option value="">Fixed Price</option>
                          <option value="1">Only Project Hours</option>
                          <option value="2">Only Task Hours</option>
                          <option value="3">Project & Tasks Hours</option>
                      </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Fixed Price  </label>
              </div>
              <div class="col-sm-9">
                <input type="email" class="form-control" placeholder="50" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Estimate Hours  </label>
              </div>
              <div class="col-sm-9">
                <input type="number" step="0.01" value="" class="form-control" name="estimate_hours" data-parsley-id="23">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Status  <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-9">
                <div class="input-group">
                  <select name="status" class="form-control" id="stat_br" style="width: 100%"  required="" >
                      <option value="">Started </option>
                      <option value="1">In progress</option>
                      <option value="2">Hold</option>
                      <option value="3">Cancel</option>
                     <option value="3">Completed</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Demo Url </label>
              </div>
              <div class="col-sm-9">
                <input type="email" class="form-control" placeholder="http://www.demo.com" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Assigned To <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
                <div class="checkbox c-radio needsclick">
                  <input type="radio" name="radio_admin" value="" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                                </div>
                <div class="checkbox c-radio needsclick">
                  <input type="radio" name="radio_admin" value=""  class="chkPassport"> Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                                </div>
              </div>
            </div>
          </div>
          <div class="form-group dvPassport"  style="display: none">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">select Users<span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
                 <input type="checkbox" name="vehicle1" value="Bike"  class="chkPassport1"> admin <strong class="badge btn-danger">Admin</strong>
                 <br>
                 <div class="row dvPassport1"  id="dvPassport1" style="display: none">
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
                 
                   <input type="checkbox" name="vehicle2" value="Car" class="chkPassport2" > adminko <strong class="badge btn-danger">Admin</strong>
                 <br>
                 <div class="row dvPassport2"  id="dvPassport2" style="display: none">
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
            
        </form>
       </div>
        <div class="offset-1 col-sm-4 cl-md-4 col-lg-4 ">
           <label class="small-box"> Allow Client to Show Team Members
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <hr>
        <label class="small-box">Allow Client to Show Milestones
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <hr>
        <label class="small-box"> Allow Client to Project Tasks
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <hr>
        <label class="small-box"> Allow Client to Project Attachments
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <hr>
        <label class="small-box"> Allow Client to Timesheets
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <hr>
        <label class="small-box"> Allow Client to Project Bugs
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <hr>
        <label class="small-box"> Allow Client to Project History
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <hr>
        <label class="small-box"> Allow Client to Project Calender
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <hr>
        <label class="small-box"> Allow Client to Project Comments
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <hr>
        <label class="small-box"> Allow Client to Gantt Chart
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <hr>
        <label class="small-box"> Allow Client to Show Project Hours
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <hr>
        <label class="small-box"> Allow Client to Show Project Tasks Comments
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <hr>
        <label class="small-box"> Allow Client to Show Project Tasks Attachments
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <hr>
        <label class="small-box"> Allow Client to Show Project Tasks Hours
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <hr>
        <label class="small-box"> Allow Client to All Finance Overview
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <hr>
        <label class="small-box"> Allow Staff to All Finance Overview
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <hr>
        </div>
    </div>
      <div class="row">
        <div class=" col-md-2">
          <label for="exampleInputEmail1">Description <span class="text-danger">*</span> </label>
      </div>
      <div class="col-md-10">
           <textarea name="editor1"></textarea>
                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
      </div>
    </div>
    <div class="row mt-3">
        <div class="offset-11 col-md-1">
         <button type="button" class="btn btn-primary">Save</button>
      </div>
      
    </div>
   <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content style">
          <div class="modal-header border-bottom">
            <h5 class="modal-title" id="exampleModalLabel">Client list</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
        <div class="modal-body">
          <div class="card">
            <div class="tab">
                <div class="container tabsb">
                <button class="tablinks active" onclick="openCity(event, 'general')">General</button>
                <button class="tablinks" onclick="openCity(event, 'contactDetails')">Contact Details</button>
                <button class="tablinks" onclick="openCity(event, 'web')">Web</button>
                <button class="tablinks" onclick="openCity(event, 'hosting')">Hosting</button>
              </div>
            </div>
            <div id="general" class=" tabcontent" style="display: block">
                <form>
                <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Name <span class="text-danger">*</span> </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Email <span class="text-danger">*</span> </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company VAT </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Customer Group  </label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <select name="cus_grp" class="form-control " id="cus_grp" style="width: 100%" required="" >
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
                  </div>
                  <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Language  </label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <select name="language" class="form-control" id="language"style="width: 100%" required="" >
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
                  </div>
                  <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Currency </label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <select name="currency" class="form-control " style="width: 100%" id="currency" required=""> 
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Short Note  </label>
                  </div>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="short_note"></textarea>
                  </div>
                </div>
                  </div>
              </form>
            </div>

            <div id="contactDetails" class="tabcontent">
              <form>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Phone</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Mobile </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Zip code </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div> 
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company City</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div> 
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Country</label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <select name="client_id" class="form-control" required="" id="comp_country">
                        <option value="">India</option>
                      </select>
                    </div>
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Fax</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
                            <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Address </label>
                  </div>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="short_note"></textarea>
                  </div>
                </div>
                  </div>  
                            <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1"> Latitude( Google Map ) </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
                            <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Longitude( Google Map ) </label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
                          </form>             
            </div>

            <div id="web" class="tabcontent">
               <form>
                <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Company Website</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Skype id</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Facebook URL</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Twitter URL</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Linkedin URL</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              </form>
            </div>
            <div id="hosting" class="tabcontent">
              <form>
                <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Hosting Company</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Hosting</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Username</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Password</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="exampleInputEmail1">Port</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
          <div class="modal-footer border-top-0 modal-butn">
            <button type="button" class="btn btn-primary">Save</button>
          </div>
      </div>
    </div>
  </div>
                  </div>
                  <div class="tab-pane fade show px-4" id="imp_project" role="tabpanel" aria-labelledby="import_project">
                    <div class="text-right">
                      <button class="btn btn-success rounded-0"><i class="fa fa-download" aria-hidden="true"></i> Download Sample</button>
                    </div>
                    <div class="row">
                      <form method="" class="w-100">
                       <div class="col-md-12 card p-4">
                          <div class="col-md-5 offset-md-1 mt-3">
                       
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
                                     <select  name="task_status" class="form-control " id="task_status" style="width: 100%" required="">
                                      <option value="" selected="">select</option>
                                      <option value="">GMAP</option>
                                      <option value="">HR</option>
                                      <option value="">IT</option>
                                     </select>            
                                  </div>
                              </div>
                            <div class="form-group row">
              <label for="staticEmail" class="text-right col-sm-3 col-form-label font-weight-bold">Assigned To  <sup class="a1">*</sup></label>
              <div class="col-sm-9">
                <div class="checkbox c-radio needsclick">
                  <input type="radio" name="cln_rad" value="" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                                </div>
                <div class="checkbox c-radio needsclick">
                  <input type="radio" name="cln_rad" value=""  class="chkPassport" > Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                                </div>
              </div>
            </div>
        
          </div>
          <div class="form-group dvPassport"  id="dvPassport" style="display: none">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">select Users<span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-9">
                 <input type="checkbox" name="vehicle1" value="Bike"   class="chkPassport1"> admin <strong class="badge btn-danger">Admin</strong>
                 <br>
                 <div class="row dvPassport1"  id="dvPassport1" style="display: none">
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
                 
                   <input type="checkbox" name="vehicle2" value="Car" class="chkPassport2" > adminko <strong class="badge btn-danger">Admin</strong>
                 <br>
                 <div class="row dvPassport2"  id="dvPassport2" style="display: none">
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
                                <div class="" style="padding-left: 26%">
                                  <button type="submit" class="btn btn-primary">upload</button>
                              </div>  
                               </div>
                            </form>   
                         
                        </div>
                      </div>
              

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
     
     <style>
 
     </style>
      <script>
        $(document).ready(function() {
        $("#e1").select2(); 
        $("#bill2").select2();
        $("#cus_grp").select2(); 
        $("#stat_br").select2();
        $("#cus_grp").select2(); 
        $("#language").select2();
        $("#currency").select2(); 
        $("#comp_country").select2();
          $("#task_status").select2();
       });
    </script>




