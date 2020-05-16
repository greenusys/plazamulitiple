    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<style type="text/css">

.tab 
{
   overflow: hidden;
    background-color:white;
}

.tab button 
{
    background-color: #f5f3f3;
    float: left;
    border: 1px solid;
    outline: none;
    cursor: pointer;
    padding: 7px 20px;
    transition: 0.3s;
    font-size:12px;
}

.tab button:hover 
{
   background-color: #ddd;
}

.tab button.active 
{
   background-color: #ccc;
}

.tabcontent 
{
   width:100%;
   display: none;
   padding: 6px 12px;
   border:0px solid;
}
.inputDnD .form-control-file {
  position: relative;
  width: 100%;
  height: 100%;
  min-height: 6em;
  outline: none;
  visibility: hidden;
  cursor: pointer;
  background-color: gray;
  /*box-shadow: 0 0 5px solid gray;*/
}
.inputDnD .form-control-file:before {
  content: attr(data-title);
  position: absolute;
  top: 0.5em;
  left: 0;
  width: 100%;
  min-height: 5em;
  line-height: 2em;
  padding-top: 1.5em;
  opacity: 1;
  visibility: visible;
  text-align: center;
  border: 1px dashed  gray;
  padding: 35px;
  /*transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);*/
  overflow: hidden;
}
.inputDnD .form-control-file:hover:before {
  border-style: dashed;
 /* box-shadow: inset 0px 0px 0px 0.25em  gray;*/
}
@media only screen and (min-width: 576px){
  .modal-dialog {
      max-width: 623px;
      margin: 1.75rem auto;
  }
}
.tabs-left {
  border-bottom: none;
  border-right: 1px solid #ddd;
}

.tabs-left>li {
  float: none;
 margin:0px;
 border-bottom:1px solid gray;

  
}
.tabs-left li a{
/*line-height: 1.42857143;*/
    border-bottom-color: #ddd;
    border-right-color: transparent;
   font-weight: 600;
    border: none;
    color: #000000db;
    border-radius: 0px;
    margin: 0px;
    position: relative;
    display: block;
    padding: 10px 15px;
}
.tabs-left li a:hover{
    border-bottom-color: #ddd;
    border-right-color: transparent;
    /*line-height: 1.42857143;*/
    color: white;
    background: #6777ef;
    border: none;
    text-decoration: none;
    border-radius: 0px;
    margin: 0px;
    position: relative;
    display: block;
    padding: 10px 15px;
}
.tabs-left>li.active>a,
.tabs-left>li.active>a:focus {
    border-bottom-color: #ddd;
    border-right-color: transparent;
   line-height: 1.42857143;
 color: white;
    background: #6777ef;
    border: none;
    border-radius: 0px;
    text-decoration: none;
    margin: 0px;
    position: relative;
    display: block;
    padding: 10px 15px;
}
.nav-tabs>li>a:hover {
    /* margin-right: 2px; */
    /*line-height: 1.42857143;*/
    border: 1px solid transparent;
    /* border-radius: 4px 4px 0 0; */
}
.tabs-left>li.active>a::after{content: "";
    position: absolute;
    top: 10px;
    right: -10px;
    border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  
  border-left: 10px solid #6777ef;
    display: block;
    width: 0;}
</style>

<!-- Main Content -->


        <div class="row mt-4">
            <div class="col-md-12">
    
        <div class="row">
        <div class="col-md-3"> <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left sideways bg-white">
            <li class="w-100 side_br active"><a href="#home-v" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Company Details</a></li>
            <li class="w-100 side_br"> <a href="#profile-v" data-toggle="tab"><i class="fas fa-desktop" aria-hidden="true"></i> System Settings</a></li>
            <li class="w-100 side_br"><a href="#email_set" data-toggle="tab"><i class="fas fa-envelope" aria-hidden="true"></i> Email Settings</a></li>
            <li class="w-100 side_br"><a href="#sms_set" data-toggle="tab"><i class="fas fa-envelope" aria-hidden="true"></i> SMS Settings</a></li>
            <li class="w-100 side_br"><a href="#email_temp" data-toggle="tab"><i class="fas fa-pen-square"></i> Email Templates</a></li>
            <li class="w-100 side_br"><a href="#email_inte" data-toggle="tab"><i class="far fa-envelope"></i> Email Integration</a></li>
            <li class="w-100 side_br"><a href="#payment_set" data-toggle="tab"><i class="fas fa-dollar-sign"></i> Payment Settings</a></li>
            <li class="w-100 side_br"><a href="#invoice_set" data-toggle="tab"><i class="far fa-money-bill-alt"></i> Invoice Settings</a></li>
            <li class="w-100 side_br"><a href="#estimate_set" data-toggle="tab"><i class="fas fa-sticky-note"></i> Estimate Settings</a></li>
            <li class="w-100 side_br"><a href="#proposal_set" data-toggle="tab"><i class="fa fa-leaf" aria-hidden="true"></i> Proposal Settings</a></li>
            <li class="w-100 side_br"><a href="#purchase" data-toggle="tab"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Purchase Purchase</a></li>
            <li class="w-100 side_br"><a href="#tick_leads" data-toggle="tab"><i class="fas fa-ticket-alt"></i> Ticket & Leads Settings </a></li>
            <li class="w-100 side_br"><a href="#theme_set" data-toggle="tab"><i class="fa fa-code" aria-hidden="true"></i> Theme Settings</a></li>
            <li class="w-100 side_br"><a href="#dashboard" data-toggle="tab"><i class="fas fa-tachometer-alt"></i> Dashboard Settings</a></li>
            <li class="w-100 side_br"><a href="#work_days" data-toggle="tab"><i class="fa fa-calendar" aria-hidden="true"></i> Working Days</a></li>
            <li class="w-100 side_br"><a href="#leave_category" data-toggle="tab"><i class="fab fa-pagelines"></i> Leave Category</a></li>
            <li class="w-100 side_br"><a href="#income_cat" data-toggle="tab"><i class="fa fa-certificate" aria-hidden="true"></i> Income Category</a></li>
            <li class="w-100 side_br"><a href="#expense_cat" data-toggle="tab"><i class="fa fa-tasks" aria-hidden="true"></i> Expense Category</a></li>
            <li class="w-100 side_br"><a href="#customer_grp" data-toggle="tab"><i class="fa fa-users" aria-hidden="true"></i> Customer Group</a></li>
            <li class="w-100 side_br"><a href="#allowed_ip" data-toggle="tab"><i class="fa fa-server" aria-hidden="true"></i> Allowed IP</a></li>
            <li class="w-100 side_br"><a href="#lead_status" data-toggle="tab"><i class="fa fa-list" aria-hidden="true"></i> Leads Status</a></li>
            <li class="w-100 side_br"><a href="#lead_source" data-toggle="tab"><i class="fa fa-arrow-down" aria-hidden="true"></i> Lead Source </a></li>
            <li class="w-100 side_br"><a href="#opportunities_st" data-toggle="tab"><i class="far fa-dot-circle"></i> Opportunities State Reason</a></li>
            <li class="w-100 side_br"><a href="#custom_fld" data-toggle="tab"><i class="far fa-star"></i> Custom Field</a></li>
            <li class="w-100 side_br"><a href="#payment_met" data-toggle="tab"><i class="far fa-money-bill-alt"></i> Payment Method</a></li>
            <li class="w-100 side_br"><a href="#cronjob" data-toggle="tab"><i class="fab fa-contao"></i> Cronjob</a></li>
            <li class="w-100 side_br"><a href="#menu_all" data-toggle="tab"><i class="fa fa-compass" aria-hidden="true"></i> Menu Allocation</a></li>
            <li class="w-100 side_br"><a href="#notify" data-toggle="tab"><i class="far fa-bell"></i> Notifications</a></li>
            <li class="w-100 side_br"><a href="#email_notify" data-toggle="tab"><i class="far fa-bell"></i> Email Notification</a></li>
            <li class="w-100  side_br"><a href="#backup_data" data-toggle="tab"><i class="fa fa-database" aria-hidden="true"></i> Backup Database</a></li>
            <li class="w-100 side_br"><a href="#translation" data-toggle="tab"><i class="fa fa-language" aria-hidden="true"></i> Translations</a></li>
            <li class="w-100 side_br"><a href="#sys_update" data-toggle="tab"><i class="fas fa-edit"></i> System Update</a></li>
          
          </ul>
        </div>
<script type="text/javascript">
  $(document).on("click",".side_br",function(){
    $(".side_br").removeClass("active");
    $(this).addClass("active");
  })
</script>
        <div class="col-md-9">
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane bg-white active" id="home-v">
               <div class="container bg-white card ">
                    <h6 class="mt">Company Details</h6>
                  <div class="line mt-2"></div>
                  <div class="row pd-4 mt-4">
                      <div class="offset-1 col-sm-9">
                          <form method="post" action="<?=base_url('Backupdatabase/')?>">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Company Name <span class="text-danger">*</span> </label>
                            </div>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tester">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Legal Name  <span class="text-danger">*</span> </label>
                            </div>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tester">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Contact Person  </label>
                            </div>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tester">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class=" col-sm-3">
                              <label for="exampleInputEmail1">Company Address <span class="text-danger">*</span> </label>
                            </div>
                            <div class="col-sm-9">
                              <textarea class="form-control" name="short_note"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Country</label>
                            </div>
                            <div class="col-sm-9">
                              <div class="input-group">
                                    <select name="client_id" class="form-control" id="customer_group">
                                        <option value="0">Selected Country</option>
                                        <option value="5" >France </option>
                                        <option value="4" >Other Countries</option>
                                        <option value="3" >Afganistan</option>
                                        <option value="2" >Aringland Islands</option>
                                        <option value="1" >Albania</option>
                                    </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">City </label>
                            </div>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Dehradun">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Zip Code </label>
                            </div>
                            <div class="col-sm-4">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="28">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Company Phone</label>
                            </div>
                            <div class="col-sm-4">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Company Email</label>
                            </div>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="info@greenusys.com">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Company Website </label>
                            </div>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label for="exampleInputEmail1">Company VAT</label>
                            </div>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="row mt-3">
                      <div class="offset-3 col-md-3">
                       <button type="button" class="btn btn-primary">Save</button>
                    </div>
                  </div>
                </div>
            </div>
            <div class="tab-pane bg-white " id="profile-v">
              <div class="container card " id="sys_set">
                  <h6 class="mt">System Settings</h6>
                <div class="line mt-2"></div>
                <div class="row pd-4 mt-4">
                    <div class="offset-1 col-sm-9">
                        <form>
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Default Language</label>
                          </div>
                          <div class="col-sm-6">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option lang="ar" value="arabic">English</option>
                                                    <option lang="ar" value="arabic">Arabic</option>
                                <option lang="zh" value="chinese">Chinese</option>
                                <option lang="cs" value="czech">Czech</option>
                                <option lang="da" value="danish">Danish</option>
                                <option lang="nl" value="dutch">Dutch</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Locale</label>
                          </div>
                          <div class="col-sm-6">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option lang="ar" value="arabic">French(France)</option>
                                                    <option lang="ar" value="arabic">French(Congo)</option>
                                <option lang="zh" value="chinese">French(Equatorial Guinea)</option>
                                <option lang="cs" value="czech">French(Gabon)</option>
                                <option lang="da" value="danish">French(Guodeloupe)</option>
                                <option lang="nl" value="dutch">French(Guinea)</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Time Zone <span class="text-danger">*</span> </label>
                          </div>
                          <div class="col-sm-7">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="Pacific/Midway">(UTC -11:00) Pacific/Midway</option>
                                                    <option value="Pacific/Niue" selected="selected">(UTC -11:00) Pacific/Niue</option>
                                                    <option value="Pacific/Pago_Pago">(UTC -11:00) Pacific/Pago_Pago</option>
                                                    <option value="America/Adak">(UTC -10:00) America/Adak</option>
                                                    <option value="Pacific/Honolulu">(UTC -10:00) Pacific/Honolulu</option>
                                                    <option value="Pacific/Johnston">(UTC -10:00) Pacific/Johnston</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Default Currency  </label>
                          </div>
                          <div class="col-sm-6">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="BRL">Euro</option>
                                <option value="GBP">British Pound</option>
                                <option value="CAD">Canadian Dollar</option>
                                <option value="CLP">Chilean Peso</option>
                                <option value="CNY">Chinese Yuan</option>
                                <option value="CZK">Czech Koruna</option>
                                                </select>
                                          </div>
                          </div>
                          <div class="col-sm-1">
                              <button type="button" id="curency" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Add New Currency"><i class="fa fa-plus"></i></button>
                          </div>
                          <div class="col-sm-1">
                              <a href="allcurrency.php"><button type="button" id="crncy_page" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View All Currency To Action"><i class="fa fa-calendar"></i></button></a>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Default Account</label>
                          </div>
                          <div class="col-sm-7">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                                    <option value="">None</option>
                                                </select>
                                          </div>
                          </div>
                          <div class="col-sm-1">
                              <button type="button" id="acount" class="btn btn-light butn" data-toggle="tooltip" data-placement="top" title="New Account"><i class="fa fa-plus"></i></button>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Attendance Report  </label>
                          </div>
                          <div class="col-sm-7">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="BRL">Attendance Report 1</option>
                                <option value="GBP">Attendance Report 2</option>
                                <option value="CAD">Attendance Report 3</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Project Details View </label>
                          </div>
                          <div class="col-sm-7">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="BRL">Project Details View 1</option>
                                <option value="GBP">Project Details View 2</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Task details view </label>
                          </div>
                          <div class="col-sm-7">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="BRL">Task details view 1</option>
                                <option value="GBP">Task details view 2</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Currency Position</label>
                          </div>
                          <div class="col-sm-4">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option lang="ar" value="arabic">$ 100</option>
                                                    <option lang="ar" value="arabic">100 $</option>
                                
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Default Tax</label>
                          </div>
                          <div class="col-sm-7">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="BRL">No Task</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Tables Pagination Limit </label>
                          </div>
                          <div class="col-sm-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="50">
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Date Format</label>
                          </div>
                          <div class="col-sm-4">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="%d-%m-%Y">29-12-2019</option>
                                <option value="%m-%d-%Y">12-29-2019</option>
                                <option value="%Y-%m-%d">2019-12-29</option>
                                <option value="%d-%m-%y">29-12-19</option>
                                <option value="%m-%d-%y">12-29-19</option>
                                <option value="%m.%d.%Y" selected="selected">12.29.2019</option>
                                <option value="%d.%m.%Y">29.12.2019</option>
                                <option value="%Y.%m.%d">2019.12.29</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Time Format</label>
                          </div>
                          <div class="col-sm-4">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="g:i a">7:38 pm</option>
                                <option value="g:i A">7:38 PM</option>
                                <option value="H:i" selected="selected">19:38</option>
                                                </select>
                                          </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Money Format</label>
                          </div>
                          <div class="col-sm-3">
                            <div class="input-group">
                                                <select name="client_id" class="form-control" id="customer_group">
                                  <option value="1">1,234.00</option>
                                <option value="2" selected="selected">1.234,00</option>
                                <option value="3">1234.00</option>
                                <option value="4">1234,00</option>
                                <option value="5">1'234.00</option>
                                <option value="6">1 234.00</option>
                                <option value="7">1 234,00</option>
                                <option value="8">1 234'00</option>
                                                </select>
                                          </div>
                          </div>
                          <div class="col-sm-2">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Allowed Files</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="gif|png|jpeg|jpg|pdf|doc|txt|docx|xls|zip|rar|xls|mp4|ico|xlsx|pptx">
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Max File size (MB)</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="5000" >
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Google API KEY</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="AIzaSyDH0Cn1U4RGzExl3IySE9X_ZlXKpyxj2Z4">
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Recaptcha site key</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                            <h6>Go to <span><a href="#">https://www.google.com/recaptcha/admin</a></span> to setup Recaptcha</h6>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Recaptcha secret key</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Auto close ticket</label>
                          </div>
                          <div class="col-sm-4">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="72">  
                          </div>
                          <div class="col-sm-4">
                            <h6>Hours <span class="text-danger">Requires CRON</span></h6>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Enable Languages</label>
                          </div>
                          <div class="col-sm-4">
                            <label class="small-box">
                               <input type="checkbox" checked="checked">
                               <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Allow Sub Tasks</label>
                          </div>
                          <div class="col-sm-4">
                            <label class="small-box">
                               <input type="checkbox" checked="checked">
                               <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-4">
                            <label for="exampleInputEmail1">Only Allowed IP can Clock IN/OUT</label>
                          </div>
                          <div class="col-sm-4">
                            <label class="small-box">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class=" col-sm-4">
                            <label for="exampleInputEmail1">Allow Client Registration</label>
                          </div>
                          <div class="col-sm-4">
                            <label class="small-box">
                               <input type="checkbox" checked="checked">
                               <span class="checkmark"></span>
                            </label> 
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-4">
                            <label for="exampleInputEmail1">Allow Apply job from Login</label>
                          </div>
                          <div class="col-sm-4">
                            <label class="small-box">
                               <input type="checkbox" checked="checked">
                               <span class="checkmark"></span>
                            </label>  
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-4">
                            <label for="exampleInputEmail1">Client Default Menu <span class="text-danger">*</span></label>
                          </div>
                          <div class="col-sm-8">
                             <select class="js-example-basic-multiple w-100" name="friends[]" multiple="multiple" style="width:100%">
                              <option value="Deepak">Deepak Nouliya</option>
                              <option value="Rahul">Rahul</option>
                              <option value="Ravish">Ravish</option>
                              <option value="Shivam">Shivam</option>
                              <option value="Shubham">Shubham</option>
                              <option value="Kaif">Kaif</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-4">
                            <label for="exampleInputEmail1">Client Can Create Project</label>
                          </div>
                          <div class="col-sm-4">
                            <label class="small-box">
                               <input type="checkbox" checked="checked">
                               <span class="checkmark"></span>
                            </label> 
                          </div>
                        </div>
                      </div>
                      </form>
                  </div>
                </div>
                <div class="row mt-3">
                    <div class="offset-4 col-md-3">
                     <button type="button" class="btn btn-primary">Save Changes</button>
                  </div>
                </div>
              </div>
<!----------currency-------->
          <div class="container bg-white card " id="cuurency_all" style="display:none">
      <div class="row">
        <div class="col-sm-10">
              <h6 class="mt">All Currency</h6>
      </div>
      <div class="col-sm-2">
               <button type="button"  id="back_frm" class="btn btn-success mt1 fs" data-toggle="tooltip" data-placement="top" title="Back"><i class="fas fa-arrow-left"></i>Back</button>
              <button type="button" id="curency" class="btn btn-success mt1 fs" data-toggle="tooltip" data-placement="top" title="Add New Currency"><i class="fa fa-plus"></i></button>
      </div>
    </div>
    <div class="line mt-butn"></div>
    <div class="row mt-4">
        <table class="table table-striped">
          <thead>
          <tr>
            <th scope="col">Code</th>
            <th scope="col">Code Name</th>
            <th scope="col">Symbol</th>
            <th scope="col">Action</th>
          </tr>
          </thead>
          <tbody>
          <tr>
              <th scope="row">AUD</th>
              <td>Australian Dollar</td>
              <td>$</td>
              <td><button type="button" class="btn btn-info fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button></td>
          </tr>
          <tr>
              <th scope="row">BAN</th>
              <td>Bangladesh</td>
              <td>BDT</td>
              <td><button type="button" class="btn btn-info fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button></td>
          </tr>
          <tr>
              <th scope="row">BRL</th>
              <td>Brazilian Real</td>
              <td>R$</td>
              <td><button type="button" class="btn btn-info fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button></td>
          </tr>
          </tbody>
            </table>
    </div>
  </div>
  <!----------currency-end ------->
</div>

<!--------email setting--------->
 <div class="tab-pane bg-white" id="email_set">
    <div class="container card">
      <h6 class="mt font-weight-bold">Email Settings</h6>
    <div class="line mt-2"></div>
    <div class="row pd-5 mt-4">
        <div class="offset-1 col-sm-9">
            <form>
            <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Company Email <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-7">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="info@greenusys.com">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Use Postmark</label>
              </div>
              <div class="col-sm-2">
                <label class="small-box">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
          
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Email Protocol <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-7">
                <div class="input-group">
                                    <select name="client_id" class="form-control" id="customer_group">
                      <option lang="ar" value="arabic">PHP mail</option>
                                        <option lang="ar" value="arabic">SMTP</option>
                    <option lang="zh" value="chinese">Send Mail</option>
                                    </select>
                              </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">SMTP HOST </label>
              </div>
              <div class="col-sm-7">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="smtp.gmail.com">
                <h6 class="fs1">SMTP Server Address.</h6>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">SMTP USER </label>
              </div>
              <div class="col-sm-7">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="smtp@admin.com">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">SMTP PASSWORD </label>
              </div>
              <div class="col-sm-7">
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="*****">
              </div>
              <div class="col-sm-2">
                  <a href="#"><h6 class="fs1" id="acount">See Password</h6></a>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">SMTP PORT</label>
              </div>
              <div class="col-sm-7">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="587">
              </div>
            </div>
          </div>
          
          <div class="form-group">
              <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Email Encryption  </label>
              </div>
              <div class="col-sm-4">
                <div class="input-group">
                    <select name="client_id" class="form-control" id="customer_group">
                      <option lang="ar" value="arabic">None</option>
                      <option lang="ar" value="arabic">SSL</option>
                      <option lang="zh" value="chinese">TLS</option>
                    </select>
                </div>
              </div>
            </div>
          </div>
          
        </form>
      </div>
    </div>
    <div class="row mt-3">
        <div class="offset-3 col-md-3">
         <button type="button" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>
  
<div class="container bg-white card p-5 mt-5">
      <h6 class="mt font-weight-bold">Sent Test Email</h6>
    <div class="line mt-2"></div>
    <div class="row pd-5 mt-4">
        <div class="offset-1 col-sm-9">
            <form>
            <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Email Address </label>
              </div>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
              </div>
            </div>
          </div>
      </form>
      </div>
    </div>
    <div class="row mt-3">
        <div class="offset-3 col-md-3">
         <button type="button" class="btn btn-primary">Sent Test Email</button>
      </div>
    </div>
  </div>
  
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
          
      <div class="modal-content style" id="account" style="display: none">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">See Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
        <div class="modal-body">
            <form>
            <div class="form-group">
              <div class="row">
                
                <div class="col-sm-11">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Current Password">
                </div>
              </div>
            </div>
            
            
          </form>
        </div>
        <div class="modal-footer border-top-0 modal-butn">
          <button type="button" class="btn btn-secondary">close</button>
          <button type="button" class="btn btn-primary">Update</button>
          </div>
      </div>
    </div>
  </div>
<script>
  $(document).ready(function(){
   
    $("#acount").click(function(){
     $("#currency").hide();
     $("#account").show();
     $('#exampleModal').modal('show');
    });
  });
</script>
</div>
<!--------email setting--------->     
<!--------sms setting--------->
 
 <div class="tab-pane bg-white" id="sms_set">
    <div class="container card ">
      <div class="row">
        <div class="col-md-12">
        <div class="accordion" id="accordionExample">
          <div class="card border">
            <div class="card-header" id="headingThree">
              <div class="row">
                <div class="col-md-11">
                  <h6 class="text-primary font-weight-bold">Twilio</h6>
                </div>
                <div class="col-md-1">
                   <i class="fa fa-caret-down btn btn-link collapsed text-decoration-none"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size:24px"></i>
                </div>
                
              </div>
                <div class="line"></div>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body pd-5">
                <p>Twilio SMS integration is one way messaging, means that your customers won't be able to reply to the SMS. Phone numbers must be in format <a href="#">E.164.</a> Click <a href="#">here</a> to read more how phone numbers should be formatted.</p>
                <div class="row pd-5">
                    <div class="col-md-12">
                    <form>
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-2 col-sm-2">
                            <label for="exampleInputEmail1">Account SID <span class="text-danger">*</span> </label>
                          </div>
                          <div class="col-sm-5">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-2 col-sm-2">
                            <label for="exampleInputEmail1">Auth Token <span class="text-danger">*</span> </label>
                          </div>
                          <div class="col-sm-5">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-1 col-sm-3">
                            <label for="exampleInputEmail1">Twilio Phone Number <span class="text-danger">*</span> </label>
                          </div>
                          <div class="col-sm-5">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-2 col-sm-2">
                            <label for="exampleInputEmail1">Active<span class="text-danger">*</span> </label>
                          </div>
                          <div class="col-sm-5">
                            <label class="small-box">
                               <input type="checkbox">
                               <span class="checkmark"></span>
                            </label>
                          </div>
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
    </div>
    
    <div class="row mt-2">
        <div class="col-md-12">
        <div class="accordion" id="accordionExample">
          <div class="card border">
            <div class="card-header" id="headingtwo">
              <div class="row">
                <div class="col-md-11">
                  <h6 class="text-primary font-weight-bold">Clickatell</h6>
                </div>
                <div class="col-md-1">
                   <i class="fa fa-caret-down btn btn-link collapsed text-decoration-none"  data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo" style="font-size:24px"></i>
                </div>
                
              </div>
                <div class="line"></div>
            </div>
            <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordionExample">
              <div class="card-body pd-5">
                <p>Clickatell SMS integration is one way messaging, means that your customers won't be able to reply to the SMS.</p>
                <div class="row pd-5">
                    <div class="col-md-12">
                    <form>
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-2 col-sm-2">
                            <label for="exampleInputEmail1">API Key  <span class="text-danger">*</span> </label>
                          </div>
                          <div class="col-sm-5">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                        </div>
                      </div>
                                          
                                        
                      <div class="form-group">
                        <div class="row">
                          <div class="offset-2 col-sm-2">
                            <label for="exampleInputEmail1">Active <span class="text-danger">*</span> </label>
                          </div>
                          <div class="col-sm-5">
                            <label class="small-box">
                               <input type="checkbox">
                               <span class="checkmark"></span>
                            </label>
                          </div>
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
    </div>
    
    <div class="row mt-2">
        <div class="col-md-12">
        <div class="card padd">
          <h6 class="font-weight-bold">SMS template</h6>
          <p>Leave contents blank to disable specific SMS template.</p>
          <div class="line"></div>
          <div class="row mt-3">
              <div class="col-md-10">
               <h6 class="font-weight-bold">Invoice Reminder Notice template</h6>
                 <p>Send SMS when invoice reminder notice sent when send invoice to client primary contact.</p>
            </div>
            <div class="col-md-2">
                <span class="text-primary" id="see">See Merge Fields</span>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <textarea class="form-control" name="short_note"></textarea>
            </div>
            <p class="text-center" id="text" style="display: none">{full_name}, {client_name}, {contact_email}, {invoice_link}, {invoice_ref}, {invoice_date}, {invoice_due_date}, {invoice_status}, {invoice_subtotal}, {invoice_total}, {site_name}</p>
          </div>
          
          <div class="row mt-3">
              <div class="col-md-10">
               <h6 class="font-weight-bold">Invoice Overdue Notice template</h6>
                 <p>Send SMS when invoice overdue notice sent to client primary contact.</p>
            </div>
            <div class="col-md-2">
                <span class="text-primary" id="see1">See Merge Fields</span>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <textarea class="form-control" name="short_note"></textarea>
            </div>
            <p class="text-center" id="text1" style="display: none">{full_name}, {client_name}, {contact_email}, {invoice_link}, {invoice_ref}, {invoice_date}, {invoice_due_date}, {invoice_status}, {invoice_subtotal}, {invoice_total}, {site_name}</p>
          </div>
          <div class="row mt-3">
              <div class="col-md-10">
               <h6 class="font-weight-bold">Invoice Payment Recorded template</h6>
                 <p>Send SMS when invoice payment is saved.</p>
            </div>
            <div class="col-md-2">
                <span class="text-primary" id="see2">See Merge Fields</span>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <textarea class="form-control" name="short_note"></textarea>
            </div>
            <p class="text-center" id="text2" style="display: none">{full_name}, {client_name}, {contact_email}, {invoice_link}, {invoice_ref}, {invoice_date}, {invoice_due_date}, {invoice_status}, {invoice_subtotal}, {invoice_total}, {site_name}</p>
          </div>
          
          <div class="row mt-3">
              <div class="col-md-10">
               <h6 class="font-weight-bold">Estimate Expiration Reminder template</h6>
                 <p>Send SMS when expiration Estimate sent to client primary contact.</p>
            </div>
            <div class="col-md-2">
                <span class="text-primary" id="see3">See Merge Fields</span>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <textarea class="form-control" name="short_note"></textarea>
            </div>
            <p class="text-center" id="text3" style="display: none">{full_name}, {client_name}, {contact_email}, {invoice_link}, {invoice_ref}, {invoice_date}, {invoice_due_date}, {invoice_status}, {invoice_subtotal}, {invoice_total}, {site_name}</p>
          </div>
          
          <div class="row mt-3">
              <div class="col-md-10">
               <h6 class="font-weight-bold">Proposal Expiration Reminder template</h6>
                 <p>Send SMS when expiration reminder send to Related Proposals.</p>
            </div>
            <div class="col-md-2">
                <span class="text-primary" id="see4">See Merge Fields</span>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <textarea class="form-control" name="short_note"></textarea>
            </div>
            <p class="text-center" id="text4" style="display: none">{full_name}, {client_name}, {contact_email}, {invoice_link}, {invoice_ref}, {invoice_date}, {invoice_due_date}, {invoice_status}, {invoice_subtotal}, {invoice_total}, {site_name}</p>
          </div>
          
          <div class="row mt-3">
              <div class="col-md-10">
               <h6 class="font-weight-bold">Purchase Notice template</h6>
                 <p>Send SMS when Purchase confirmation/update stock notice sent to</p>
            </div>
            <div class="col-md-2">
                <span class="text-primary" id="see5">See Merge Fields</span>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <textarea class="form-control" name="short_note"></textarea>
            </div>
            <p class="text-center" id="text5" style="display: none">{full_name}, {client_name}, {contact_email}, {invoice_link}, {invoice_ref}, {invoice_date}, {invoice_due_date}, {invoice_status}, {invoice_subtotal}, {invoice_total}, {site_name}</p>
          </div>
          
          <div class="row mt-3">
              <div class="col-md-10">
               <h6 class="font-weight-bold">Purchase payment Notice template</h6>
                 <p>Send SMS when Purchase payment confirmation notice sent.</p>
            </div>
            <div class="col-md-2">
                <span class="text-primary" id="see6">See Merge Fields</span>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <textarea class="form-control" name="short_note"></textarea>
            </div>
            <p class="text-center" id="text6" style="display: none">{full_name}, {client_name}, {contact_email}, {invoice_link}, {invoice_ref}, {invoice_date}, {invoice_due_date}, {invoice_status}, {invoice_subtotal}, {invoice_total}, {site_name}</p>
          </div>
          
          <div class="row mt-3">
              <div class="col-md-10">
               <h6 class="font-weight-bold">Purchase Return Stock Notice template</h6>
                 <p>Send SMS when Purchase return stock notice sent.</p>
            </div>
            <div class="col-md-2">
                <span class="text-primary" id="see7">See Merge Fields</span>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <textarea class="form-control" name="short_note"></textarea>
            </div>
            <p class="text-center" id="text7" style="display: none">{full_name}, {client_name}, {contact_email}, {invoice_link}, {invoice_ref}, {invoice_date}, {invoice_due_date}, {invoice_status}, {invoice_subtotal}, {invoice_total}, {site_name}</p>
          </div>
          
          <div class="row mt-3">
              <div class="col-md-10">
               <h6 class="font-weight-bold">Purchase Return Stock Payment Notice template</h6>
                 <p>Send SMS when Purchase return stock notice sent.</p>
            </div>
            <div class="col-md-2">
                <span class="text-primary" id="see8">See Merge Fields</span>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <textarea class="form-control" name="short_note"></textarea>
            </div>
            <p class="text-center" id="text8" style="display: none">{full_name}, {client_name}, {contact_email}, {invoice_link}, {invoice_ref}, {invoice_date}, {invoice_due_date}, {invoice_status}, {invoice_subtotal}, {invoice_total}, {site_name}</p>
          </div>
          
          <div class="row mt-3">
              <div class="col-md-10">
               <h6 class="font-weight-bold">Transaction Record expense/deposit/transfer template</h6>
                 <p>Send SMS when Transaction Record expense/deposit/transfer notified for reminder.</p>
            </div>
            <div class="col-md-2">
                <span class="text-primary" id="see9">See Merge Fields</span>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <textarea class="form-control" name="short_note"></textarea>
            </div>
            <p class="text-center" id="text9" style="display: none">{full_name}, {client_name}, {contact_email}, {invoice_link}, {invoice_ref}, {invoice_date}, {invoice_due_date}, {invoice_status}, {invoice_subtotal}, {invoice_total}, {site_name}</p>
          </div>
          
          <div class="row mt-3">
            <div class="col-md-10">
               <h6 class="font-weight-bold">Staff Reminder template</h6>
                 <p>Send SMS when staff notified for reminder.</p>
            </div>
            <div class="col-md-2">
                <span class="text-primary" id="see10">See Merge Fields</span>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <textarea class="form-control" name="short_note"></textarea>
            </div>
            <p class="text-center" id="text10" style="display: none">{full_name}, {client_name}, {contact_email}, {invoice_link}, {invoice_ref}, {invoice_date}, {invoice_due_date}, {invoice_status}, {invoice_subtotal}, {invoice_total}, {site_name}</p>
          </div>
        </div>
      </div>
    </div>
                
    <div class="row bg-light mt-3 padd">
        <div class="col-md-3">
         <button type="button" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>
  
<script>
  $(document).ready(function(){
    $("#see").click(function(){
    $("#text").toggle();
   });
  });
</script> 

<script>
  $(document).ready(function(){
    $("#see1").click(function(){
    $("#text1").toggle();
   });
  });
</script> 

<script>
  $(document).ready(function(){
    $("#see2").click(function(){
    $("#text2").toggle();
   });
  });
</script> 

<script>
  $(document).ready(function(){
    $("#see3").click(function(){
    $("#text3").toggle();
   });
  });
</script> 

<script>
  $(document).ready(function(){
    $("#see4").click(function(){
    $("#text4").toggle();
   });
  });
</script> 

<script>
  $(document).ready(function(){
    $("#see5").click(function(){
    $("#text5").toggle();
   });
  });
</script> 

<script>
  $(document).ready(function(){
    $("#see6").click(function(){
    $("#text6").toggle();
   });
  });
</script> 

<script>
  $(document).ready(function(){
    $("#see7").click(function(){
    $("#text7").toggle();
   });
  });
</script> 

<script>
  $(document).ready(function(){
    $("#see8").click(function(){
    $("#text8").toggle();
   });
  });
</script> 

<script>
  $(document).ready(function(){
    $("#see9").click(function(){
    $("#text9").toggle();
   });
  });
</script> 

<script>
  $(document).ready(function(){
    $("#see10").click(function(){
    $("#text10").toggle();
   });
  });
</script> 
 </div>
<!--------sms setting--------->
<!--------Email Template--------->
  <div class="tab-pane bg-white" id="email_temp">
       <div class="container shadow">
      <div class="row">
        <div class="col-sm-9">
            <h6 class="mt font-weight-bold">Email Settings</h6>
      </div>
      <div class="col-sm-3">
             <button type="button" class="btn btn-primary font-weight-bold" id="choose"><i class="fa fa-gear fa-spin"></i> Choose Template <i class='fas fa-caret-down'></i></button>
      </div>
    </div>
    <div class="line mt-1"></div>
    <div class="row card shadow p-4 w-25 float-right" id="template" style="display:none">
        <ul style="list-style:none" class="p-0">
          <a href="accountemail.php"><li class="bg-light p-2 mt-1">Account Emails</li></a>
        <a href="invoiceemail.php"><li class="bg-light p-2 mt-1">Invoicing Emails</li></a>
        <a href="taskemail.php"><li class="bg-light p-2 mt-1">Tasks Email</li></a>
        <a href="bugemail.php"><li class="bg-light p-2 mt-1">Bugs Email</li></a>
        <a href="projectemail.php"><li class="bg-light p-2 mt-1">Project Email</li></a>
        <a href="ticketemail.php"><li class="bg-light p-2 mt-1">Ticketing Emails</li></a>
        <a href="hrmemail.php"><li class="bg-light p-2 mt-1">HRM Emails</li></a>
        <hr>
        <a href="extraemail.php"><li class="bg-light p-2">Extra Emails</li></a>
      </ul>
    </div>

    <div class="row p-2">
        <div class="col-md-12">
        <div class="tab">
           <button class="tablinks" onclick="openCity(event, 'active')">Active Account</button>
           <button class="tablinks" onclick="openCity(event, 'change')">Change Email</button>
           <button class="tablinks" onclick="openCity(event, 'forgot')">Forgot Password?</button>
           <button class="tablinks" onclick="openCity(event, 'register')">Register Email</button>
           <button class="tablinks" onclick="openCity(event, 'reset')">Reset Password</button>
           <button class="tablinks" onclick="openCity(event, 'welcome')">Welcome Email</button>
        </div>
            </div>
            
      <div id="active" class="tabcontent">
          <div class="col-md-12">
              <div class="form-group">
            <div class="row mt-2">
              <div class=" col-sm-12">
                <label for="exampleInputEmail1" class="label-style"> Subject</label>
              </div>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="Active Account">
              </div>
            </div>
            </div>
          </div>
          <div class="col-md-12">
            <h6 class="font-weight-bold text-secondary">Message</h6>
            <textarea name="remarks" id="active1" cols="70" rows="1">
             <p>Welcome to {SITE_NAME}!</p>
                       <p>Thanks for joining {SITE_NAME}. We listed your sign in details below, make sure you keep them safe.</p>
                       <p>To verify your email address, please follow this link:</p>
                       <p class="font-weight-bold text-info">Finish your registration...</p>
                       <p>Link doesn't work? Copy the following link to your browser address bar:</p>
                       <p class="text-primary">{ACTIVATE_URL}</p>
                       <p class="mt-5 mb-5">Please verify your email within {ACTIVATION_PERIOD} hours, otherwise your registration will become invalid and you will have to register again.</p>
             <p>Your username: {USERNAME}</p>
             <p>Your email address: {EMAIL}</p>
             <p>Your password: {PASSWORD}</p>

            <p class="mt-3">Have fun!</p>
            <p>The {SITE_NAME} Team</p>
          </textarea>
          <script>
             CKEDITOR.replace('active1');
          </script>
        </div>
      </div>

      <div id="change" class="tabcontent">
        <div class="col-md-12">
          <div class="form-group">
            <div class="row mt-2">
              <div class=" col-sm-12">
                <label for="exampleInputEmail1" class="font-weight-bold text-secondary"> Subject</label>
              </div>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="Change Email">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <h6 class="font-weight-bold text-secondary">Message</h6>
          <textarea name="remarks" id="change1" cols="70" rows="1">
             <p>New email address on {SITE_NAME}

          You have changed your email address for {SITE_NAME}.
          Follow this link to confirm your new email address:
          Confirm your new email
          Link doesn't work? Copy the following link to your browser address bar:
          {NEW_EMAIL_KEY_URL}

          Your email address: {NEW_EMAIL}

          You received this email, because it was requested by a {SITE_NAME} user. If you have received this by mistake, please DO NOT click the confirmation link, and simply delete this email. After a short time, the request will be removed from the system.
          Thank you,
          The {SITE_NAME} Team</p>
          </textarea>
          <script>
             CKEDITOR.replace('change1');
          </script>
        </div>
      </div>

      <div id="forgot" class="tabcontent">
          <div class="col-md-12">
          <div class="form-group">
            <div class="row mt-2">
              <div class=" col-sm-12">
                <label for="exampleInputEmail1" class="font-weight-bold text-secondary"> Subject</label>
              </div>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="Forgot Password">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <h6 class="font-weight-bold text-secondary">Message</h6>
          <textarea name="remarks" id="forgot1" cols="70" rows="1">
               <p>New Password

              Forgot your password, huh? No big deal.
              To create a new password, just follow this link:

              Create a new password
              Link doesn't work? Copy the following link to your browser address bar:
              {PASS_KEY_URL}


              You received this email, because it was requested by a {SITE_NAME} user.



              This is part of the procedure to create a new password on the system. If you DID NOT request a new password then please ignore this email and your password will remain the same.


              Thank you,
              The {SITE_NAME} Team</p>
          </textarea>
          <script>
             CKEDITOR.replace('forgot1');
          </script>
          </div>
      </div>
        
      <div id="register" class="tabcontent">
          <div class="col-md-12">
          <div class="form-group">
            <div class="row mt-2">
              <div class=" col-sm-12">
                <label for="exampleInputEmail1" class="font-weight-bold text-secondary"> Subject</label>
              </div>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="Registration Successful">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <h6 class="font-weight-bold text-secondary">Message</h6>
          <textarea name="remarks" id="register1" cols="70" rows="1">
               <p>Welcome to {SITE_NAME}

                Thanks for joining {SITE_NAME}. We listed your sign in details below, make sure you keep them safe.
                To open your {SITE_NAME} homepage, please follow this link:
                {SITE_NAME} Account!
                Link doesn't work? Copy the following link to your browser address bar:
                {SITE_URL}
                Your username: {USERNAME}
                Your email address: {EMAIL}
                Your password: {PASSWORD}
                Have fun!
                The {SITE_NAME} Team.</p>
                
          </textarea>
          <script>
             CKEDITOR.replace('register1');
          </script>
        </div>
      </div>

      <div id="reset" class="tabcontent">
          <div class="col-md-12">
          <div class="form-group">
            <div class="row mt-2">
              <div class=" col-sm-12">
                <label for="exampleInputEmail1" class="font-weight-bold text-secondary"> Subject</label>
              </div>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="Reset Password">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <h6 class="font-weight-bold text-secondary">Message</h6>
          <textarea name="remarks" id="reset1" cols="70" rows="1">
             <p>New password on {SITE_NAME}

            You have changed your password.
            Please, keep it in your records so you don't forget it.

            Your username: {USERNAME}
            Your email address: {EMAIL}
            Your new password: {NEW_PASSWORD}

            Thank you,
            The {SITE_NAME} Team</p>
                          
          </textarea>
          <script>
             CKEDITOR.replace('reset1');
          </script>
        </div>
      </div>

      <div id="welcome" class="tabcontent">
          <div class="col-md-12">
          <div class="form-group">
            <div class="row mt-2">
              <div class=" col-sm-12">
                <label for="exampleInputEmail1" class="font-weight-bold text-secondary"> Subject</label>
              </div>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="Welcome Email">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <h6 class="font-weight-bold text-secondary">Message</h6>
            <textarea name="remarks" id="welcome1" cols="70" rows="1">
             <p>Hello {NAME},

            Welcome to {COMPANY_NAME} .Thanks for joining {COMPANY_NAME}.

            We just wanted to say welcome.

            Please contact us if you need any help.

            Click here to view your profile: {COMPANY_URL}


            Have fun!
            The {COMPANY_NAME} Team.</p>
                          
          </textarea>
          <script>
             CKEDITOR.replace('welcome1');
          </script>
        </div>
      </div>
    
    </div>
    <div class="row bg-light p-3">
       <button type="button" class="btn btn-info font-weight-bold">Save Changes</button>
    </div>
  </div>
  
<script>
   $(document).ready(function(){

    $("#choose").click(function(){
     $("#template").toggle();
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
$(document).ready(function(){
  $('#active').css('display','block');
})
</script>

  </div>
<!--------Email Template End--------->
<!--------Email Integration --------->
<div class="tab-pane bg-white" id="email_inte">
  <div class="container " id="ticket">
      <div class="row">
      <div class="col-md-9">
         <h6 class="mt font-weight-bold">Email Integration For Tickets</h6>
      </div>
      <div class="col-md-3">
         <button type="button" class="btn btn-primary mt1" id="email">Set Email For Leads</button>
      </div>
    </div>
    <div class="line mt2"></div>
    <div class="row pd-5 mt-4">
      <div class="offset-1 col-sm-9">
         <h6><strong>Postmaster cronjob link </strong> &nbsp; &nbsp; &nbsp;  wget -q -O- http://plazacrm.com/postmaster/tickets</h6>
         <h6 class="mt-3"><strong>Last postmaster run </strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  07.27.2018 16:59</h6>
        <a href="#"><h6 class="mt-4 text-primary font-weight-bold" id="it"><i class="fa fa-gear" style="font-size:24px"></i> IT / Collaborative</h6></a>
      </div>
    </div>
    
    <div class="row  mt-4 card" id="form" style="display:none">
        <div class="offset-1 col-sm-9 mt-3 mb-3">
            <form>
            <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style"> Email <span class="text-danger">*</span> </label>
              </div>
              <div class="col-sm-7">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Encryption</label>
              </div>
              <div class="col-sm-2">
                <label class="small-box">TLS
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-sm-2">
                <label class="small-box">SSL
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-sm-3">
                <label class="small-box">No Encryption
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
                    
          <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Host</label>
              </div>
              <div class="col-sm-7">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Username </label>
              </div>
              <div class="col-sm-7">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Password </label>
              </div>
              <div class="col-sm-7">
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="col-sm-2">
                  <a href="#"><h6 class="fs1" id="acount">See Password</h6></a>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Mailbox</label>
              </div>
              <div class="col-sm-7">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="INBOX">
                <h6 class="fs1">e.g Gmail: INBOX</h6>
              </div>
            </div>
          </div>
          
          <div class="form-group">
              <div class="row mt-4">
              <div class="offset-3 col-sm-9">
                <div class="row">
                  <div class="col-sm-4">
                    <label class="small-box">Only Unread Emails
                      <input type="checkbox" >
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="offset-1 col-sm-7">
                    <label class="small-box">DELETE EMAIL FROM SERVER AFTER IMPORT
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        
        <div class="row mt-5">
          <div class="offset-3 col-md-3">
             <button type="button" class="btn btn-primary">Save Changes</button>
          </div>
          <div class="offset-3 col-md-3">
             <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Please Save Email Setting First Then Test">Test Email Settings</button>
          </div>
            </div>
      </div>
    </div>
  </div>
  
  <div class="container bg-white card p-5 mt-5" id="setform" style="display:none">
      <div class="row">
      <div class="col-md-9">
         <h6 class="mt font-weight-bold">Email Integration For Leads</h6>
      </div>
      <div class="col-md-3">
         <button type="button" class="btn btn-primary mt1" id="setemail">Set Email For ticket</button>
      </div>
    </div>
     
    <div class="line"></div>
    <div class="row pd-5 mt-4">
        <div class="offset-1 col-sm-9">
            <form>
            <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Encryption</label>
              </div>
              <div class="col-sm-2">
                <label class="small-box">TLS
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-sm-2">
                <label class="small-box">SSL
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-sm-3">
                <label class="small-box">No Encryption
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
                    
          <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Host</label>
              </div>
              <div class="col-sm-7">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Username </label>
              </div>
              <div class="col-sm-7">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Password </label>
              </div>
              <div class="col-sm-7">
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="col-sm-2">
                  <a href="#"><h6 class="fs1" id="acount1">See Password</h6></a>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Mailbox</label>
              </div>
              <div class="col-sm-7">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="INBOX">
                <h6 class="fs1">e.g Gmail: INBOX</h6>
              </div>
            </div>
          </div>
          
          <div class="form-group">
              <div class="row mt-4">
              <div class="offset-3 col-sm-9">
                <div class="row">
                  <div class="col-sm-4">
                    <label class="small-box">Only Unread Emails
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="offset-1 col-sm-7">
                    <label class="small-box">DELETE EMAIL FROM SERVER AFTER IMPORT
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row mt-4">
              <div class="col-sm-3">
                <label for="exampleInputEmail1">Notified User</label>
              </div>
              <div class="col-sm-7 ">
                 <select class="js-example-basic-multiple w-100" name="friends[]" multiple="multiple">
                  <option value="Deepak">Deepak Nouliya</option>
                  <option value="Rahul">Rahul</option>
                  <option value="Ravish">Ravish</option>
                  <option value="Shivam">Shivam</option>
                  <option value="Shubham">Shubham</option>
                  <option value="Kaif">Kaif</option>
                </select>
              </div>
            </div>
          </div>
        </form>
                
        <div class="row mt-5">
          <div class="col-sm-12">
            <h6><strong>Postmaster cronjob link </strong> &nbsp; &nbsp; &nbsp;  wget -q -O- http://plazacrm.com/postmaster/tickets</h6>
          </div>
          <div class="col-sm-12">
             <h6 class="mt-3"><strong>Last postmaster run </strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  07.27.2018 16:59</h6>
          </div>
        </div>
        
        <div class="row mt-5">
          <div class="offset-3 col-md-3">
             <button type="button" class="btn btn-primary">Save Changes</button>
          </div>
          <div class="offset-3 col-md-3">
             <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Please Save Email Setting First Then Test">Test Email Settings</button>
          </div>
            </div>
      </div>
    </div>
  </div>

<script>
   $(document).ready(function(){
    $('.js-example-basic-multiple').select2();
});
  $(document).ready(function(){
   
    $("#it").click(function(){
     $("#form").toggle();
   });
 });
</script>

<script>
  $(document).ready(function(){
   
    $("#email").click(function(){
     $("#setform").toggle();
      $("#ticket").hide();
   });
 });
</script>

<script>
  $(document).ready(function(){
   
    $("#setemail").click(function(){
      $("#ticket").show();
      $("#setform").hide();
   });
 });
</script>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
          
      <div class="modal-content style" id="account" style="display: none">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">See Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
        <div class="modal-body">
            <form>
            <div class="form-group">
              <div class="row">
                
                <div class="col-sm-11">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Current Password">
                </div>
              </div>
            </div>
            
            
          </form>
        </div>
        <div class="modal-footer border-top-0 modal-butn">
          <button type="button" class="btn btn-secondary">close</button>
          <button type="button" class="btn btn-primary">Update</button>
          </div>
      </div>
    </div>
  </div>

  <script>
  $(document).ready(function(){
   
    $("#acount1").click(function(){
     $("#currency").hide();
     $("#account1").show();
     $('#exampleModal').modal('show');
    });
  });
</script>


<script>
  $(document).ready(function(){
   
    $("#acount").click(function(){
     $("#currency").hide();
     $("#account").show();
     $('#exampleModal').modal('show');
    });
  });
</script>
</div>
<!--------Email Integration End--------->

<!--------Payment Setting --------->
<div class="tab-pane bg-white" id="payment_set">
  <div class="container bg-white card p-5 mt-5">
      <h6 class="mt font-weight-bold">Payment Settings</h6>
    <div class="line mt-2"></div>
    <div class="row card border-0 shadow p-3 pd-4 mt-4">
        <table class="table table-striped text-center">
        <thead>
          <tr>
            <th>Icon</th>
              <th>Gateway Name</th>
              <th>Status</th>
              <th>Action</th>
          </tr>
        </thead>
        <tbody>
            <tr>
            <td class="w-25"><img src="image/paypal.png" class="table-img"></td>
              <td>paypal</td>
              <td><span class="label success">Active</span></td>
              <td><a href="Paymentsettingform.php" class="btn btn-info size" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></a></td>
            </tr>
            <tr>
            <td><img src="image/social.png" class="table-img"></td>
              <td>Stripe</td>
              <td><span class="label success">Active</span></td>
              <td> <a href="Paymentsettingform.php" class="btn btn-info fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></a></td>
            </tr>
            <tr>
            <td><img src="image/check.png" class="table-img"></td>
              <td>  2checkout</td>
              <td><span class="label danger">Deactive</span></td>
               <td><a href="Paymentsettingform.php" class="btn btn-info fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></a></td>
            </tr>
        </tbody>
            </table>
        <!--<table class="table table-bordered table-striped">
          <thead>
          <tr>
              
          </tr>
        </thead>
        <tbody>
          <tr>
              <th><img src="image/paypal.png" class="img-fluid"></th>
              <td>paypal</td>
              <td><span class="label success">Active</span></td>
              <td><button type="button" class="btn btn-info fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button></td>
          </tr>
          <tr>
              <td><img src="image/social.png"></td>
              <td>Stripe</td>
              <td><span class="label success">Active</span></td>
              <td><button type="button" class="btn btn-info fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button></td>
          </tr>
          <tr>
              <td><img src="image/check.png"></td>
              <td>2checkout</td>
              <td><span class="label danger">Deactive</span></td>
              <td><button type="button" class="btn btn-info fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button></td>
          </tr>
          </tbody>
          </tbody>
      </table>--->
    </div>
  </div>
</div>
<!--------Payment Setting End--------->

<!--------Invoice Setting --------->
<div class="tab-pane bg-white" id="invoice_set">
  <div class="container card">
      <h6 class="mt font-weight-bold">Invoice Settings</h6>
    <div class="line mt-2"></div>
    <div class="row pd-4 mt-4">
        <div class="offset-1 col-sm-9">
            <form>
          
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Invoice Prefix <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="INV">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Invoices due after <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="5" >
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                <label for="exampleInputEmail1" class="label-style">Invoice Starting Number <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                <label for="exampleInputEmail1" class="label-style">Invoice Number Format</label>
              </div>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="[INV]-[yyyy]-[mm]-[dd]-[number]">
                <small class="fs">ex [INV] = Invoice Prefix,[yyyy] = 'Current Year (2020)'[yy] ='Current Year (20)',[mm] = 'Current Month(Jan)',[m] = 'Current Month(01)',[dd] = 'Current Date (01)',[number] = 'Invoice Number (0001)'</small>
              </div>
            </div>
          </div>
                            
          <div class="form-group">
            <div class="row">
              <div class=" col-sm-4">
                <label for="exampleInputEmail1" class="label-style">qty calculation from items</label>
              </div>
              <div class="col-sm-4">
                <label class="small-box">
                   <input type="checkbox" checked="checked">
                   <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Total Item Qty Alert</label>
              </div>
              <div class="col-sm-4">
                <label class="small-box">
                   <input type="checkbox">
                   <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Amount To Words</label>
              </div>
              <div class="col-sm-8">
                <label class="small-box">
                    <input type="checkbox"> Output total amount in Invoice,Payments,Estimate,Proposal and Purchase
                    <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class=" col-sm-4">
                <label for="exampleInputEmail1" class="label-style">Amount To Words into lowercase</label>
              </div>
              <div class="col-sm-4">
                <label class="small-box">
                   <input type="checkbox">
                   <span class="checkmark"></span>
                </label> 
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                <label for="exampleInputEmail1" class="label-style">Allow client to edit amount<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="Allow client to edit amount when make payment by online"></i></label>
              </div>
              <div class="col-sm-4">
                <label class="small-box">
                   <input type="checkbox" >
                   <span class="checkmark"></span>
                </label>  
              </div>
            </div>
          </div>
                        
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                <label for="exampleInputEmail1" class="label-style">Increment Invoice Number</label>
              </div>
              <div class="col-sm-4">
                <label class="small-box">
                   <input type="checkbox" checked="checked">
                   <span class="checkmark"></span>
                </label>  
              </div>
            </div>
          </div>
                    
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Show Item Tax</label>
              </div>
              <div class="col-sm-4">
                <label class="small-box">
                   <input type="checkbox" checked="checked">
                   <span class="checkmark"></span>
                </label> 
              </div>
            </div>
          </div>
          
          <div class="form-group">
              <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Invoice View</label>
              </div>
              <div class="col-sm-8">
                <div class="input-group">
                                    <select name="client_id" class="form-control" id="customer_group">
                      <option lang="ar" value="arabic">Tax Invoice</option>
                                        <option lang="ar" value="arabic">Standard</option>
                    <option lang="zh" value="chinese">Indian GST</option>
                                    </select>
                              </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                <label for="exampleInputEmail1" class="label-style">Send Email When Recur</label>
              </div>
              <div class="col-sm-4">
                <label class="small-box">
                   <input type="checkbox" checked="checked">
                   <span class="checkmark"></span>
                </label> 
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Invoice Logo</label>
              </div>
              <div class="col-sm-4">
                  <img id="blah" src="#" alt="your image" />
                <input type='file' onchange="readURL(this);" />
                          </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Default Terms</label>
              </div>
              <div class="col-sm-8">
                 <textarea name="editor1"></textarea>
                <script>
                    CKEDITOR.replace( 'editor1' );
                </script>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Invoice Footer Text</label>
              </div>
              <div class="col-sm-8">
                 <textarea name="editor2"></textarea>
                <script>
                    CKEDITOR.replace( 'editor2' );
                </script>
              </div>
            </div>
          </div>
          
          
          </form>
        
      </div>
    </div>
    <div class="row mt-3">
        <div class="offset-4 col-md-3">
         <button type="button" class="btn btn-primary" >Save Changes</button>
      </div>
    </div>
  </div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

</div>
<!--------Invoice Setting End--------->

<!--------Estimate Setting --------->
<div class="tab-pane bg-white" id="estimate_set">
  <div class="container bg-white card p-5 mt-5">
      <h6 class="mt font-weight-bold">Estimate Settings</h6>
    <div class="line mt-2"></div>
    <div class="row pd-4 mt-4">
        <div class="offset-1 col-sm-9">
            <form>
          
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Estimate Prefix<span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="EST">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                <label for="exampleInputEmail1" class="label-style">Estimate Starting Number <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                <label for="exampleInputEmail1" class="label-style">Estimate Number Format </label>
              </div>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="[INV]-[yyyy]-[mm]-[dd]-[number]">
                <small class="fs">ex [EST] = Estimate Prefix,[yyyy] = 'Current Year (2020)'[yy] ='Current Year (20)',[mm] = 'Current Month(Jan)',[m] = 'Current Month(01)',[dd] = 'Current Date (02)',[number] = 'Invoice Number (0001)'</small>
              </div>
            </div>
          </div>
                            
                                  
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                <label for="exampleInputEmail1" class="label-style">Increment Estimate Number</label>
              </div>
              <div class="col-sm-4">
                <label class="small-box">
                   <input type="checkbox" checked="checked">
                   <span class="checkmark"></span>
                </label>  
              </div>
            </div>
          </div>
                    
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Show Item Tax</label>
              </div>
              <div class="col-sm-4">
                <label class="small-box">
                   <input type="checkbox" checked="checked">
                   <span class="checkmark"></span>
                </label> 
              </div>
            </div>
          </div>
                    
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Estimate Terms</label>
              </div>
              <div class="col-sm-8">
                 <textarea name="estimate_terms"></textarea>
                <script>
                    CKEDITOR.replace( 'estimate_terms' );
                </script>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Estimate Footer Text</label>
              </div>
              <div class="col-sm-8">
                 <textarea name="estimate_footer"></textarea>
                <script>
                    CKEDITOR.replace('estimate_footer');
                </script>
              </div>
            </div>
          </div>
        
          </form>
        
      </div>
    </div>
    <div class="row mt-3">
        <div class="offset-4 col-md-3">
         <button type="button" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>

</div>
<!--------Estimate Setting End--------->

<!--------Proposal Setting --------->
<div class="tab-pane bg-white" id="proposal_set">
  <div class="container bg-white card p-5 mt-5">
      <h6 class="mt font-weight-bold">Proposal Settings</h6>
    <div class="line mt-2"></div>
    <div class="row pd-4 mt-4">
        <div class="offset-1 col-sm-9">
            <form>
          
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Proposal Prefix <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="PRO-">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                <label for="exampleInputEmail1" class="label-style">Proposal Starting No <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                <label for="exampleInputEmail1" class="label-style">Proposal Number Format </label>
              </div>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="[INV]-[yyyy]-[mm]-[dd]-[number]">
                <small class="fs">ex [PRO-] = Proposal Prefix,[yyyy] = 'Current Year (2020)'[yy] ='Current Year (20)',[mm] = 'Current Month(Jan)',[m] = 'Current Month(01)',[dd] = 'Current Date (02)',[number] = 'Invoice Number (0001)'</small>
              </div>
            </div>
          </div>
                            
                                  
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                <label for="exampleInputEmail1" class="label-style">Increment Proposal No</label>
              </div>
              <div class="col-sm-4">
                <label class="small-box">
                   <input type="checkbox" checked="checked">
                   <span class="checkmark"></span>
                </label>  
              </div>
            </div>
          </div>
                    
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Show Item Tax</label>
              </div>
              <div class="col-sm-4">
                <label class="small-box">
                   <input type="checkbox" checked="checked">
                   <span class="checkmark"></span>
                </label> 
              </div>
            </div>
          </div>
                    
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Proposal Terms</label>
              </div>
              <div class="col-sm-8">
                 <textarea name="proposal_terms"></textarea>
                <script>
                    CKEDITOR.replace( 'proposal_terms' );
                </script>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Proposal Footer</label>
              </div>
              <div class="col-sm-8">
                 <textarea name="proposal_footer"></textarea>
                <script>
                    CKEDITOR.replace( 'proposal_footer' );
                </script>
              </div>
            </div>
          </div>
        
          </form>
        
      </div>
    </div>
    <div class="row mt-3">
        <div class="offset-4 col-md-3">
         <button type="button" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>

</div>
<!--------Proposal Setting End--------->

<!--------Purchase--------->
  <div class="tab-pane bg-white" id="purchase">
    <div class="container bg-white card p-5 mt-5">
      <h6 class="mt font-weight-bold">Purchase Settings</h6>
    <div class="line mt-2"></div>
    <div class="row pd-4 mt-4">
        <div class="offset-1 col-sm-9">
            <form>
          
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Purchase Prefix <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="PUR">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Purchase Start no  <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                <label for="exampleInputEmail1" class="label-style">Purchase Number Format</label>
              </div>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="[INV]-[yyyy]-[mm]-[dd]-[number]">
                <small class="fs">ex [PUR] = Purchase Prefix,[yyyy] = 'Current Year (2020)'[yy] ='Current Year (20)',[mm] = 'Current Month(Jan)',[m] = 'Current Month(01)',[dd] = 'Current Date (02)',[number] = 'Invoice Number (0001)'</small>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Return Stock Prefix<span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="R">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Return Stock Start no <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                <label for="exampleInputEmail1" class="label-style">Return Stock Number Format</label>
              </div>
              <div class="col-sm-5">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="[INV]-[yyyy]-[mm]-[dd]-[number]">
                <small class="fs">ex [R] = Return Stock Prefix ,[yyyy] ='Current Year (2020)'[yy] ='Current Year (20)',[mm] = 'Current Month(Jan)',[m] = 'Current Month(01)',[dd] = 'Current Date (02)',[number] = 'Invoice Number (0001)'</small>
              </div>
            </div>
          </div>
                              
                
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Purchase Notes</label>
              </div>
              <div class="col-sm-8">
                 <textarea name="purchase_notes"></textarea>
                <script>
                    CKEDITOR.replace( 'purchase_notes' );
                </script>
              </div>
            </div>
          </div>
          </form>
      </div>
    </div>
    <div class="row mt-3">
        <div class="offset-4 col-md-3">
         <button type="button" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>

  </div>
<!--------Purchase End--------->

<!--------Tickets and Lead Setting --------->
<div class="tab-pane bg-white" id="tick_leads">
  <div class="container card" id="leads">
      <h6 class="mt font-weight-bold" >Tickets Settings</h6>
    <div class="line mt-2"></div>
    <div class="row pd-4 mt-4">
        <div class="offset-1 col-sm-9">
            <form>
            <div class="form-group">
              <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Default Department</label>
              </div>
              <div class="col-sm-6">
                <div class="input-group">
                                    <select name="default department" class="form-control" id="Default_Department">
                                        <option value="0">IT/Collabrative</option>
                                    </select>
                              </div>              
              </div>
            </div>
          </div>
          
          <div class="form-group">
              <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Default Status</label>
              </div>
              <div class="col-sm-6">
                <div class="input-group">
                      <select name="Default Status" class="form-control" id="Default_Status">
                          <option value="0">Answered</option>
                          <option value="1">Closed</option>
                          <option value="2">Open</option>
                          <option value="3">In Progress</option>
                      </select>
                </div>              
              </div>
            </div>
          </div>
          
          <div class="form-group">
              <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Default Priority</label>
              </div>
              <div class="col-sm-6">
                <div class="input-group">
                                    <select name="Default Priority" class="form-control" id="Default_Priority">
                                        <option value="0">High</option>
                    <option value="1">Medium</option>
                    <option value="2">Low</option>
                    <option value="3">Ok</option>
                                    </select>
                              </div>              
              </div>
              <div class="col-sm-2">
                   <a href="#"><h6 class="fs1" data-toggle="modal" data-target="#exampleModal">New Priority</h6></a>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                <label for="exampleInputEmail1" class="label-style">Notify Ticket Reopened</label>
              </div>
              <div class="col-sm-4">
                <label class="small-box">
                   <input type="checkbox" checked="checked">
                   <span class="checkmark"></span>
                </label>  
              </div>
            </div>
          </div>
        </form>
       </div>
    </div>
    
    <h6 class="mt-3 font-weight-bold">Leads Settings</h6>
    <div class="line mt-2"></div>
    <div class="row pd-4 mt-4">
        <div class="offset-1 col-sm-9">
            <form>
            <div class="form-group">
              <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Default Source</label>
              </div>
              <div class="col-sm-6">
                <div class="input-group">
                                    <select name="Default Source" class="form-control" id="Default_Source">
                                        <option value="0"></option>
                                    </select>
                              </div>              
              </div>
              <div class="col-sm-2">
                   <a href="#"><h6 class="fs1" id="source">New Source</h6></a>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">Default Status</label>
              </div>
              <div class="col-sm-6">
                <div class="input-group">
                                    <select name="Default Status" class="form-control" id="Default_Status">
                                        <option value="0"></option>
                    
                                    </select>
                              </div>              
              </div>
              <div class="col-sm-2">
                   <a href="#"><h6 class="fs1" id="status">New Status</h6></a>
              </div>
            </div>
          </div>
          
          <div class="form-group">
              <div class="row">
              <div class="col-sm-4">
                <label for="exampleInputEmail1" class="label-style">New Leads Permission</label>
              </div>
              <div class="col-sm-6">
              
                <div class="checkbox c-radio needsclick ">
                  <input type="radio" name="gender" value="male" class="btn1"> Everyone<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                                </div>
                <div class="checkbox c-radio needsclick">
                  <input type="radio" name="gender" value="male" id="chkPassport" onclick="ShowHideDiv(this)" > Customise Permission<i title="" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" data-original-title="who have permission for this menu and all admin user."></i><br>
                                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group"  id="dvPassport" style="display: none">
              <div class="row">
              <div class="offset-1 col-sm-3">
                <label for="exampleInputEmail1" class="label-style">select Users<span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-8">
                 <input type="checkbox" name="vehicle1" value="Bike"  id="chkPassport1" onclick="ShowHideDiv(this)"> admin <strong class="badge btn-danger">Admin</strong>
                 <br>
                 <div class="row"  id="dvPassport1" style="display: none">
                    <div class="col-md-3">
                   <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Can View
                  </div>
                  <div class="col-md-3">
                       <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Can Edit
                  </div>
                  <div class="col-md-3">
                      <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Can Delete
                  </div>
                 </div>
                 
                                 <input type="checkbox" name="vehicle2" value="Car"  id="chkPassport2" onclick="ShowHideDiv(this)" > adminko <strong class="badge btn-danger">Admin</strong>
                 <br>
                 <div class="row"  id="dvPassport2" style="display: none">
                    <div class="col-md-3">
                   <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Can View
                  </div>
                  <div class="col-md-3">
                       <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Can Edit
                  </div>
                  <div class="col-md-3">
                      <input type="checkbox" name="vehicle1" value="Bike" checked="checked"> Can Delete
                  </div>
                 </div>
              </div>
            </div>
          </div>
            </form>
      </div>
    </div>
    
    <div class="row mt-3">
        <div class="offset-4 col-md-8">
         <button type="button" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>
  
  <div class="container bg-white padd " id="LeadSource" style="display:none">
      <h6 class="font-weight-bold">Lead Source</h6>
    <div class="line mt-3"></div>
    <div class="row">
        <div class="offset-10 col-md-2">
         <button type="button" class="btn btn-info" id="back" data-toggle="tooltip" data-placement="top" title=" Back To Previous Page"><i class="fa fa-long-arrow-left"></i> &nbsp; Back</button>
       </div>
    </div>
    <div class="row mt-4">
        <div class=" col-md-12">
            <table class="table table-striped  table-bordered">
          <thead>
            <tr>
              <th scope="col" class="fs1">Lead Source</th>
              <th scope="col" class="fs1">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr id="sick">
              <td scope="row" class="text-info">Total Leads : 0</td>
              <td>
                  <button type="button" id="edit" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button>
                
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
              </td>
            </tr>
            <tr id="sickagain" style="display:none"> 
              <td scope="row"> <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="Lead Source"></td>
              
              <td scope="row">
                  <button type="button" class="btn btn-success fs" data-toggle="tooltip" data-placement="top" title="update"><i class="fa fa-check"></i></button>
                
                <button type="button" id="cancel" class="btn btn-danger fs" data-toggle="tooltip" data-placement="top" title="cancel"><i class="fa fa-close"></i></button>
              </td>
            </tr>
            <tr>
              <td scope="row" class="text-info">sonali</td>
              <td>
                  <button type="button" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></button>
                
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td scope="row" class="text-info">Total Leads : 0</td>
              <td>
                  <button type="button" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></button>
                
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td scope="row">
                  <input type="email" class="form-control " id="priority" aria-describedby="emailHelp" placeholder="Lead Source">
              </td>
                      
              <td scope="row" >
                <button type="button" class="btn btn-info w-25" >Add</button>
              </td>
            </tr>
          </tbody>
        </table> 
        </div>
    </div>
  </div>
  
  <div class="container bg-white padd " id="leadStatus" style="display:none">
      <h6 class="font-weight-bold">Leads Status</h6>
    <div class="line mt-3"></div>
    <div class="row">
        <div class="offset-10 col-md-2">
         <button type="button" class="btn btn-info" id="backpage" data-toggle="tooltip" data-placement="top" title=" Back To Previous Page"><i class="fa fa-long-arrow-left"></i> &nbsp; Back</button>
       </div>
    </div>
    <div class="row mt-4">
        <div class=" col-md-12">
            <table class="table table-striped ">
          <thead>
            <tr>
                <th scope="col" class="fs1">Leads Status</th>
              <th scope="col" class="fs1">Leads Type</th>
              <th scope="col" class="fs1">Order No</th>
              <th scope="col" class="fs1">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">
                  <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="Leads Status">
              </td>
              <td scope="row">
                  <div class="input-group">
                                    <select name="client_id" class="form-control" id="customer_group">
                      <option lang="ar" value="arabic">None</option>
                                        <option lang="ar" value="arabic">SSL</option>
                    <option lang="zh" value="chinese">TLS</option>
                                    </select>
                              </div>
              </td>
              <td scope="row">
                  <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="Leads Status">
              </td>
              <td>
                <button type="button" class="btn btn-primary" >Add</button>
              </td>
            </tr>
          </tbody>
        </table> 
        </div>
    </div>
  </div>
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content style">
          <!--<div class="modal-header border-bottom-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
          </button>
          </div>---->
         
        <div class="modal-body">
          <div class="card">
            <div class="tab">
                <div class="container">
                <button class="tablinks" onclick="openCity(event, 'list')">Priority List</button>
                <button class="tablinks" onclick="openCity(event, 'new')">New Priority</button>
              </div>
            </div>
            <div id="list" class="tabcontent">
                <table class="table table-striped">
                <thead>
                  <tr>
                      <th scope="col">Priority</th>
                      <th scope="col">Action</th>
                      
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td scope="row">High</td>
                      <td><button type="button" class="btn btn-danger " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button></td>
                  </tr>
                  <tr>
                      <td scope="row">Medium</td>
                      <td><button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button></td>
                  </tr>
                  <tr>
                      <td scope="row">Low</td>
                      <td><button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button></td>
                  </tr>
                  <tr>
                      <td scope="row">Ok</td>
                      <td><button type="button" class="btn btn-danger " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div id="new" class="tabcontent">
              <form>
                <div class="form-group">
                <div class="row">
                  <div class="offset-1 col-sm-2">
                    <label for="exampleInputEmail1" class="label-style">priority <span class="text-danger">*</span></label>
                  </div>
                  <div class="col-sm-5">
                    <input type="email" class="form-control" id="priority" aria-describedby="emailHelp">
                  </div>
                </div>
                  </div>
              <div class="row">
                <div class="offset-3 col-md-3">
                  <button type="button" class="btn btn-info">Upload</button>
                </div>
                <div class=" col-md-3">
                  <button type="button" class="btn btn-primary">Close</button>
                </div>
              </div>
              </form>             
            </div>
          </div>
        </div>
          <!--<div class="modal-footer border-top-0 modal-butn">
            <button type="button" class="btn btn-primary">Save</button>
          </div>--->
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
  $( document ).ready(function() 
  {
    $('#list').css('display','block');
  })
</script>

<script>
  $(document).ready(function(){
   
    $("#source").click(function(){
      $("#LeadSource").show();
      $("#leads").hide();
   });
 });
</script>

<script>
  $(document).ready(function(){
   
    $("#status").click(function(){
      $("#leadStatus").show();
      $("#leads").hide();
   });
 });
</script>

<script>
  $(document).ready(function(){
   
    $("#back").click(function(){
      $("#LeadSource").hide();
       $("#leadStatus").hide();
      $("#leads").show();
   });
 });
</script>

<script>
  $(document).ready(function(){
   
    $("#backpage").click(function(){
      $("#LeadSource").hide();
       $("#leadStatus").hide();
      $("#leads").show();
   });
 });
</script>
 
 <script>
   $(document).ready(function(){
    $("#edit").click(function(){
     $("#sickagain").show();
     $("#sick").hide();
   });
 });
</script> 
            
<script>
   $(document).ready(function(){
    $("#cancel").click(function(){
     $("#sick").show();
     $("#sickagain").hide();
   });
 });
</script> 
</div>
<!--------Tickets and Lead Setting End--------->

<!--------Theme Setting --------->
<div class="tab-pane bg-white" id="theme_set">
  <div class="container bg-white padd shadow mt-5">
      <h6 class="font-weight-bold">Theme Settings</h6>
    <div class="line mt-1"></div>
    <div class="row mt-4 p-3">
        <div class="offset-2 col-md-10">
        <div class="form-group">
          <div class="row">
            <div class="offset-1 col-sm-2">
              <label for="exampleInputEmail1" class="label-style"> Sitename </label>
            </div>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="Tester" >
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="offset-1 col-sm-2">
              <label for="exampleInputEmail1" class="label-style">logo</label>
            </div>
            <div class="col-sm-6">
              <select class=" form-control" name="department">
                <option value="active">Logo & Sitename</option>
                <option value="deactive">Logo</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-3">
              <label for="exampleInputEmail1" class="label-style"> Active Pre-loader</label>
            </div>
            <div class="col-sm-7">
              <label class="small-box">  
                 <input type="checkbox" checked="checked">
                 <span class="checkmark"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-3">
              <label for="exampleInputEmail1" class="label-style">Active custom color</label>
            </div>
            <div class="col-sm-7">
              <label class="small-box">  
                 <input type="checkbox" >
                 <span class="checkmark"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-3">
              <label for="exampleInputEmail1" class="label-style">Company Logo</label>
            </div>
            <div class="col-sm-3">
              <img id="blah" src="#" alt="your image" / style="border:1px solid">
              <input type='file' onchange="readURL1(this);" / class="mt-2">
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-secondary font-weight-bold mt-4">Remove</button>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="offset-1 col-sm-2">
              <label for="exampleInputEmail1" class="label-style">Favicon</label>
            </div>
            <div class="col-sm-3">
              <img id="blah1" src="#" alt="your image" / style="border:1px solid">
              <input type='file' onchange="readURL2(this);" / class="mt-2">
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-secondary font-weight-bold mt-4">Remove</button>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-3">
              <label for="exampleInputEmail1" class="label-style">Login Background</label>
            </div>
            <div class="col-sm-3">
              <img id="blah2" src="#" alt="your image" / style="border:1px solid">
              <input type='file' onchange="readURL3(this);" / class="mt-2">
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-secondary font-weight-bold mt-4">Remove</button>
            </div>
          </div>
        </div>
        <div class="form-group mt-4">
          <div class="row">
            <div class="col-sm-3">
              <label for="exampleInputEmail1" class="label-style">Login Position</label>
            </div>
            <div class="col-sm-5">
              <select class=" form-control" name="department">
                <option value="active">Left</option>
                <option value="deactive">Right</option>
                <option value="deactive">Center</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group mt-4">
          <div class="row">
            <div class="col-sm-3">
              <label for="exampleInputEmail1" class="label-style">Sidebar Theme</label>
            </div>
            <div class="col-sm-5">
              <div class="row">
                  <div class="col-sm-2">
                   <img src="<?=base_url()?>assets/img/img1.jpg" class="img-fluid size">
                </div>
                <div class="col-sm-2">
                    <img src="<?=base_url()?>assets/img/img2.jpg" class="img-fluid size">
                </div>
                <div class="col-sm-2">
                    <img src="<?=base_url()?>assets/img/img3.jpg" class="img-fluid size">
                </div>
                <div class="col-sm-2">
                     <img src="<?=base_url()?>assets/img/img4.jpg" class="img-fluid size">
                </div>
                <div class="col-sm-2">
                     <img src="<?=base_url()?>assets/img/img5.jpg" class="img-fluid size">
                </div>
                <div class="col-sm-2">
                     <img src="<?=base_url()?>assets/img/img6.jpg" class="img-fluid size">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group mt-5">
          <div class="row">
            <div class="offset-1 col-sm-2">
              <label for="exampleInputEmail1" class="label-style">Layout</label>
            </div>
            <div class="col-sm-5">
              <h6>Horiozontal</h6>
            </div>
            <div class="col-sm-2">
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-3">
              <label for="exampleInputEmail1"></label>
            </div>
            <div class="col-sm-5">
              <h6>Fixed</h6>
            </div>
            <div class="col-sm-2">
              <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-3">
              <label for="exampleInputEmail1"></label>
            </div>
            <div class="col-sm-5">
              <h6>Boxed</h6>
            </div>
            <div class="col-sm-2">
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-3">
              <label for="exampleInputEmail1"></label>
            </div>
            <div class="col-sm-5">
              <h6>Collapsed</h6>
            </div>
            <div class="col-sm-2">
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-3">
              <label for="exampleInputEmail1"></label>
            </div>
            <div class="col-sm-5">
              <h6>Float</h6>
            </div>
            <div class="col-sm-2">
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-3">
              <label for="exampleInputEmail1"></label>
            </div>
            <div class="col-sm-5">
              <h6>Show Scrollbar</h6>
            </div>
            <div class="col-sm-2">
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-3">
              <label for="exampleInputEmail1"></label>
            </div>
            <div class="col-sm-5">
              <h6 class="text-danger">RTL</h6>
            </div>
            <div class="col-sm-2">
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
        </div>
                
        <div class="row mt-4">
            <div class="offset-3 col-sm-9">
               <button type="button" class="btn btn-info font-weight-bold size">Save Changes</button>
          </div>
        </div>
        </div>
    </div>
  </div>
  
<script>
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(120);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
 </script>
 
 <script>
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah1')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(120);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
 </script>
 
 <script>
    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah2')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(120);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
 </script>

 <style>
.size
{
  height:34px;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
 </style>
</div>
<!--------Theme Setting End--------->

<!--------Dashboard Setting --------->
<div class="tab-pane bg-white" id="dashboard">
      <div class="container card" id="leads">
      <h6 class="mt font-weight-bold">Admin Dashboard Settings</h6>
    <div class="line mt-2"></div>
    <div class="row pd-4 mt-4">
        <div class="col-sm-12">
           <table class="table table-striped  table-bordered">
          <tbody>
            <tr>
              <td scope="row">
                  <h6>Income Expense Report</h6>
              </td>
              <td scope="row">
                  <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="col-sm-8">  
              </td>
              <td scope="row">
                  <h6>Active</h6>
              </td>
              <td>
                <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger">
              </td>
            </tr>
            
            <tr>
              <td scope="row">
                  <h6>Tickets Tasks Reports    </h6>
              </td>
              <td scope="row">
                  <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="col-sm-12">  
              </td>
              <td scope="row">
                  <h6>Active</h6>
              </td>
              <td>
                <input type="checkbox" checked data-toggle="toggle" data-on="No" data-off="Yes" data-onstyle="danger" data-offstyle="success">
              </td>
            </tr>
            
            <tr>
              <td scope="row">
                  <h6>Tickets Tasks Reports    </h6>
              </td>
              <td scope="row">
                  <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="col-sm-12">  
              </td>
              <td scope="row">
                  <h6>Active</h6>
              </td>
              <td>
                <input type="checkbox" checked data-toggle="toggle" data-on="yes" data-off="No" data-onstyle="success" data-offstyle="danger">
              </td>
              <td scope="row">
                  <h6  data-toggle="tooltip" data-placement="top" title="Staff also can see this feature">Staff <i class="fa fa-question-circle"></i></h6>
                    </td>
              <td>
                <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger">
              </td>
            </tr>
            
            <tr>
              <td scope="row">
                  <h6> Invoice Payments Reports  </h6>
              </td>
              <td scope="row">
                  <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="col-sm-4">  
              </td>
              <td scope="row">
                  <h6>Active</h6>
              </td>
              <td>
                <input type="checkbox" checked data-toggle="toggle" data-on="No" data-off="Yes" data-onstyle="danger" data-offstyle="success">
              </td>
              <td scope="row">
                  <h6  data-toggle="tooltip" data-placement="top" title="Staff also can see this feature">Staff <i class="fa fa-question-circle"></i></h6>
                    </td>
              <td>
                <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger">
              </td>
            </tr>
          </tbody>
        </table>  
       </div>
    </div>
  </div>
  
  <div class="container bg-white card p-5 mt-4 shadow" id="leads">
    <h6 class="mt-3 font-weight-bold">Client Dashboard Settings</h6>
    <div class="line mt-2"></div>
    <div class="row pd-4 mt-4">
        <div class="col-sm-12">
          <table class="table table-striped  table-bordered">
          <tbody>
            <tr>
              <td scope="row">
                  <h6>Invoice Amount</h6>
              </td>
              <td scope="row">
                  <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="col-sm-8">  
              </td>
              <td scope="row">
                  <h6>Active</h6>
              </td>
              <td>
                <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger">
              </td>
            </tr>
            
            <tr>
              <td scope="row">
                  <h6>Paid Amount</h6>
              </td>
              <td scope="row">
                  <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="col-sm-12">  
              </td>
              <td scope="row">
                  <h6>Active</h6>
              </td>
              <td>
                <input type="checkbox" checked data-toggle="toggle" data-on="No" data-off="Yes" data-onstyle="danger" data-offstyle="success">
              </td>
            </tr>
            
            <tr>
              <td scope="row">
                  <h6>Paid Percentage</h6>
              </td>
              <td scope="row">
                  <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="col-sm-8">  
              </td>
              <td scope="row">
                  <h6>Active</h6>
              </td>
              <td>
                <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger">
              </td>
            </tr>
            
          </tbody>
        </table>  
            
      </div>
    </div>
  </div>

</div>
<!--------Dashboard Setting End--------->
  
<!--------Working Days --------->
<div class="tab-pane bg-white" id="work_days">
  <div class="container bg-white padd">
      <h6 class="font-weight-bold">Working Days</h6>
    <div class="line mt-3"></div>
    <div class="row pd-4 mt-4">
        <div class="offset-1 col-sm-9">
            <form>
            <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-2">
                <label for="exampleInputEmail1" class="label-style"> Office Time </label>
              </div>
              <div class="col-sm-3">
                <label class="small-box" id="days"> Every Day same time
                   <input type="checkbox" checked="checked">
                   <span class="checkmark"></span>
                </label> 
              </div>
              <div class="col-sm-4">
                <label class="small-box"> Set Different time
                   <input type="checkbox">
                   <span class="checkmark"></span>
                </label> 
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="offset-1 col-sm-2">
                <label for="exampleInputEmail1" class="label-style"> Start Hour </label>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <div class='input-group date datetimepicker3'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-time"></span>
                    </span>
                  </div>
                </div>
              </div>
              
              <div class="offset-1 col-sm-2">
                <label for="exampleInputEmail1" class="label-style"> End Hour <span class="text-danger">*</span></label>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <div class='input-group date datetimepicker3'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-time"></span>
                    </span>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          
          <div class="row">
            <div class="col-sm-2 mt-4">
              <label class="small-box label-style" id="days"> Saturday
                 <input type="checkbox" checked="checked">
                 <span class="checkmark"></span>
              </label> 
            </div>
            <div class="col-sm-2  mt-4">
              <label class="small-box label-style" id="days"> Sunday
                 <input type="checkbox" checked="checked">
                 <span class="checkmark"></span>
              </label> 
            </div>
            <div class="col-sm-2  mt-4">
              <label class="small-box label-style" id="days"> Monday
                 <input type="checkbox" checked="checked">
                 <span class="checkmark"></span>
              </label> 
            </div>
            <div class="col-sm-2  mt-4">
              <label class="small-box label-style" id="days"> Tuesday
                 <input type="checkbox" checked="checked">
                 <span class="checkmark"></span>
              </label> 
            </div>
            <div class="col-sm-2  mt-4">
              <label class="small-box label-style" id="days"> Wednesday
                 <input type="checkbox" checked="checked">
                 <span class="checkmark"></span>
              </label> 
            </div>
            <div class="col-sm-2  mt-4">
              <label class="small-box label-style" id="days"> Thrusday
                 <input type="checkbox" checked="checked">
                 <span class="checkmark"></span>
              </label> 
            </div>
            <div class="col-sm-2  mt-4">
              <label class="small-box label-style" id="days"> Friday
                 <input type="checkbox" checked="checked">
                 <span class="checkmark"></span>
              </label> 
            </div>
          </div> 
          <div class="row mt-4">
              <button type="button" class="btn btn-primary font-weight-bold m-auto">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
 <script type="text/javascript">
  $(function () {
    $('.datetimepicker3').datetimepicker({
      format: 'LT'
    });
  });
</script> 
  
</div>
<!--------Working Days End--------->

<!--------Leave Category --------->
<div class="tab-pane bg-white" id="leave_category">
    <div class="container bg-white padd">
      <h6 class="font-weight-bold">Leave Category</h6>
    <div class="line mt-3"></div>
    <div class="row mt-4">
        <div class=" col-md-12">
            <table class="table table-striped  table-bordered">
          <thead>
            <tr>
              <th scope="col" class="fs1">Leave Category</th>
              <th scope="col" class="fs1">Leave Quota</th>
              <th scope="col" class="fs1">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr id="sick">
              <td scope="row" class="text-dark">Sick</td>
              <td scope="row" >2</td>
              <td scope="row" >
                  <button type="button" id="edit" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></button>
                
                <button type="button" id="" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr id="sickagain" style="display:none"> 
              <td scope="row"> <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="Sick"></td>
              <td scope="row" ><input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="2"></td>
              <td scope="row">
                  <button type="button" class="btn btn-success fs" data-toggle="tooltip" data-placement="top" title="update"><i class="fa fa-check"></i></button>
                
                <button type="button" id="cancel" class="btn btn-danger fs" data-toggle="tooltip" data-placement="top" title="cancel"><i class="fa fa-close"></i></button>
              </td>
            </tr>
            <tr>
              <td scope="row" class="text-dark">Marriage</td>
              <td scope="row" >3</td>
              <td scope="row" >
                  <button type="button" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></button>
                
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td scope="row" class="text-info"></td>
               <td scope="row" >0</td>
              <td scope="row" >
                  <button type="button" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></button>
                
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td scope="row" class="text-dark">emargency</td>
              <td scope="row" >0</td>
              <td scope="row" >
                  <button type="button" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></button>
                
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
            
            <tr>
              <td scope="row">
                  <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="Leave Category">
              </td>
              
              <td scope="row">
                  <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="Days/Years">
              </td>
              <td scope="row" >
                <button type="button" class="btn btn-primary w-50" >Add</button>
              </td>
            </tr>
            
          </tbody>
        </table> 
        </div>
    </div>
  </div>
  
<script>
   $(document).ready(function(){
    $("#edit").click(function(){
     $("#sickagain").show();
     $("#sick").hide();
   });
 });
</script> 
            
<script>
   $(document).ready(function(){
    $("#cancel").click(function(){
     $("#sick").show();
     $("#sickagain").hide();
   });
 });
</script> 
</div>
<!--------Leave Category End--------->


<!--------Income Category  --------->
<div class="tab-pane bg-white" id="income_cat">
  <div class="container padd">
      <h6 class="font-weight-bold">Income Category</h6>
    <div class="line mt-3"></div>
    <div class="row mt-4">
        <div class=" col-md-12">
            <table class="table table-striped  border">
          <thead>
            <tr>
              <th scope="col" class="fs1">Income Category</th>
              <th scope="col" class="fs1">Description</th>
              <th scope="col" class="fs1">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr id="sick">
              <td scope="row" class="text-info">Total Leads : 0</td>
              <td scope="row" class="text-info"></td>
              <td scope="row" >
                  <button type="button" id="edit" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button>
                
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
              </td>
            </tr>
            <tr id="sickagain" style="display:none"> 
              <td scope="row"> <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="Income Category"></td>
              <td scope="row">
                 <textarea rows="1" cols="40" class="w-100" style="height:40px"></textarea>
              </td>
              <td scope="row">
                  <button type="button" class="btn btn-success fs" data-toggle="tooltip" data-placement="top" title="update"><i class="fa fa-check"></i></button>
                
                <button type="button" id="cancel" class="btn btn-danger fs" data-toggle="tooltip" data-placement="top" title="cancel"><i class="fa fa-close"></i></button>
              </td>
            </tr>
            
            <tr>
              <td scope="row">
                  <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="Income Category">
              </td>
              
              <td scope="row">
                 <textarea rows="1" cols="40" class="w-100" style="height:40px"></textarea>
              </td>
              <td scope="row" >
                <button type="button" class="btn btn-info w-50" >Add</button>
              </td>
            </tr>
            
          </tbody>
        </table> 
        </div>
    </div>
  </div>
  
<script>
   $(document).ready(function(){
    $("#edit").click(function(){
     $("#sickagain").show();
     $("#sick").hide();
   });
 });
</script> 
            
<script>
   $(document).ready(function(){
    $("#cancel").click(function(){
     $("#sick").show();
     $("#sickagain").hide();
   });
 });
</script>   

</div>
<!--------Income Category End--------->

<!--------Expense Category  --------->
<div class="tab-pane bg-white" id="expense_cat">
    <div class="container card">
      <h6 class="font-weight-bold">Expense Category</h6>
    <div class="line mt-3"></div>
    <div class="row mt-4">
        <div class=" col-md-12">
            <table class="table table-striped  table-bordered">
          <thead>
            <tr>
              <th scope="col" class="fs1">Expense Category</th>
              <th scope="col" class="fs1">Description</th>
              <th scope="col" class="fs1">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr id="sick">
              <td scope="row" class="text-dark">Test Category</td>
              <td scope="row" class="text-dark">Test Category</td>
              <td scope="row" >
                  <button type="button" id="edit" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button>
                
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
              </td>
            </tr>
            <tr id="sickagain" style="display:none"> 
              <td scope="row"> <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="Test Category"></td>
              <td scope="row" > <textarea rows="1" cols="40" class="w-100" style="height:40px">Test Category</textarea></td>
              <td scope="row">
                  <button type="button" class="btn btn-success fs" data-toggle="tooltip" data-placement="top" title="update"><i class="fa fa-check"></i></button>
                
                <button type="button" id="cancel" class="btn btn-danger fs" data-toggle="tooltip" data-placement="top" title="cancel"><i class="fa fa-close"></i></button>
              </td>
            </tr>
            
            <tr>
              <td scope="row">
                  <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="Expense Category">
              </td>
              
              <td scope="row">
                 <textarea rows="1" cols="40" class="w-100" style="height:40px"> </textarea>
              </td>
              <td scope="row" >
                <button type="button" class="btn btn-info w-50" >Add</button>
              </td>
            </tr>
            
          </tbody>
        </table> 
        </div>
    </div>
  </div>
  
<script>
   $(document).ready(function(){
    $("#edit").click(function(){
     $("#sickagain").show();
     $("#sick").hide();
   });
 });
</script> 
            
<script>
   $(document).ready(function(){
    $("#cancel").click(function(){
     $("#sick").show();
     $("#sickagain").hide();
   });
 });
</script>
</div>
<!--------Expense Category End--------->

<!--------Cutomer Group  --------->
<div class="tab-pane bg-white" id="customer_grp">
  <div class="container card padd">
      <h6 class="font-weight-bold">Customer Group</h6>
    <div class="line mt-3"></div>
    <div class="row mt-4">
        <div class=" col-md-12">
            <table class="table table-striped  border">
          <thead>
            <tr>
              <th scope="col" class="fs1">Customer Group</th>
              <th scope="col" class="fs1">Description</th>
              <th scope="col" class="fs1">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr id="sick">
              <td scope="row" class="text-info">Total Client : 0</td>
              <td scope="row" class="text-info"></td>
              <td scope="row" >
                  <button type="button" id="edit" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button>
                
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
              </td>
            </tr>
            
            <tr id="sickagain" style="display:none"> 
              <td scope="row"> <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="Customer Group"></td>
              <td scope="row" > <textarea rows="1" cols="40" class="w-100" style="height:40px"></textarea></td>
              <td scope="row">
                  <button type="button" class="btn btn-success fs" data-toggle="tooltip" data-placement="top" title="update"><i class="fa fa-check"></i></button>
                
                <button type="button" id="cancel" class="btn btn-danger fs" data-toggle="tooltip" data-placement="top" title="cancel"><i class="fa fa-close"></i></button>
              </td>
            </tr>
            
            <tr>
              <td scope="row">
                  <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="Customer Group" style="width:445px">
              </td>
              
              <td scope="row">
                 <textarea rows="1" cols="70" style="height:40px" class="w-100"></textarea>
              </td>
              <td scope="row" >
                <button type="button" class="btn btn-info w-100" >Add</button>
              </td>
            </tr>
            
          </tbody>
        </table> 
        </div>
    </div>
  </div>
  
<script>
   $(document).ready(function(){
    $("#edit").click(function(){
     $("#sickagain").show();
     $("#sick").hide();
   });
 });
</script> 
            
<script>
   $(document).ready(function(){
    $("#cancel").click(function(){
     $("#sick").show();
     $("#sickagain").hide();
   });
 });
</script>       
      
</div>
<!--------Cutomer Group End--------->

<!--------Allowed IP  --------->

<style type="text/css">
  .btn_ht{
    height: fit-content;
  }
</style>
<div class="tab-pane bg-white" id="allowed_ip">
  <div class="container card padd">
      <h6 class="font-weight-bold">Allowed IP</h6>
    <div class="line mt-1"></div>
    <div class="row mt-4">
        <div class=" col-md-12">
            <table class="table table-striped border">
          <thead>
            <tr>
              <th scope="col" class="fs1">Allowed IP</th>
              <th scope="col" class="fs1">Status</th>
              <th scope="col" class="fs1">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr id="sick">
              <td scope="row"></td>
              <td scope="row"><button class="bg-success text-white text-center ">Active</button></td>
              <td scope="row" class="row">
                  <button type="button" id="edit" class="btn btn-danger btn_ht " data-toggle="tooltip" data-placement="top" title="Click to Reject"><i class="fas fa-times"></i></button>
                  <a href="allowed_ip.php">
                    <button type="button" class="btn btn-primary btn_ht" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></button>
                  </a>
                <button type="button" class="btn btn-danger btn_ht " data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr id="sickagain" style="display:none">
              <td scope="row"></td>
              <td scope="row"><div class="bg-danger text-white text-center style">Reject</div></td>
              <td scope="row" class="d-flex">
                  <button type="button" id="cancel" class="btn btn-success fs " data-toggle="tooltip" data-placement="top" title="Click to Active"><i class="fas fa-times"></i></button>
                  <a href="allowed_ip.php"><button type="button" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></button></a>
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
            
            <tr>
              <td scope="row">
                  <input type="email" class="form-control " id="priority" aria-describedby="emailHelp" placeholder="Allowed Ip">
              </td>
              
              <td scope="row">
                 <select class=" form-control" name="department">
                   <option value="active">Active</option>
                   <option value="reject">Reject</option>
                </select>
              </td>
              <td scope="row" >
                <button type="button" class="btn btn-info" >Add</button>
              </td>
            </tr>
            
          </tbody>
        </table> 
        </div>
    </div>
  </div>
  
  <script>
   $(document).ready(function(){
    $("#edit").click(function(){
     $("#sickagain").show();
     $("#sick").hide();
   });
 });
</script> 
            
<script>
   $(document).ready(function(){
    $("#cancel").click(function(){
     $("#sick").show();
     $("#sickagain").hide();
   });
 });
</script>   
 
</div>
<!--------Allowed IP End--------->

<!--------Leads Status  --------->
<div class="tab-pane bg-white" id="lead_status">
  <div class="container bg-white padd">
      <h6 class="font-weight-bold">Leads Status</h6>
    <div class="line mt-1"></div>
    <div class="row mt-4">
        <div class=" col-md-12">
            <table class="table table-striped border">
          <thead>
            <tr>
                <th scope="col" class="fs1">Leads Status</th>
              <th scope="col" class="fs1">Leads Type</th>
              <th scope="col" class="fs1">Order No</th>
              <th scope="col" class="fs1">Action</th>
            </tr>
          </thead>
          <tbody>
              <tr id="sick">
              <td scope="row" class="text-info">Total Leads : 0</td>
              <td></td>
              <td></td>
              <td scope="row">
                  <button type="button" id="toatal_edit" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></button>
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr id="total_sickagain" style="display:none"> 
              <td scope="row"> <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="Lead Status"></td>
              <td scope="row" ><input type="email" class="form-control" id="priority" aria-describedby="emailHelp" ></td>
              
              <td scope="row" ><input type="email" class="form-control" id="priority" aria-describedby="emailHelp" ></td>
              
              <td scope="row">
                  <button type="button" class="btn btn-success fs" data-toggle="tooltip" data-placement="top" title="update"><i class="fa fa-check"></i></button>
                
                <button type="button" id="cancel" class="btn btn-danger fs" data-toggle="tooltip" data-placement="top" title="cancel"><i class="fas fa-times"></i></button>
              </td>
            </tr>
            <tr>
               <td scope="row">
                <input type="email" class="form-control " id="status" aria-describedby="emailHelp" placeholder="Lead Status">
               </td>
               <td scope="row">
                 <select class=" form-control" name="department">
                  <option value="none">None</option>
                  <option value="close">Close</option>
                  <option value="open">Open</option>
                 </select>
               </td>
               <td scope="row">
                <input type="email" class="form-control " id="order" aria-describedby="emailHelp" placeholder="Order No">
               </td>
              <td scope="row" >
                <button type="button" class="btn btn-info w-50" >Add</button>
              </td>
            </tr>
          </tbody>
        </table> 
        </div>
    </div>
  </div>

<script>
   $(document).ready(function(){
    $("#toatal_edit").click(function(){
     $("#total_sickagain").show();
     $("#sick").hide();
   });
 });
</script> 
            
<script>
   $(document).ready(function(){
    $("#cancel").click(function(){
     $("#sick").show();
     $("#total_sickagain").hide();
   });
 });
</script> 
</div>
<!--------Leads Status End--------->

<!--------Lead Source --------->
<div class="tab-pane bg-white" id="lead_source">
  <div class="container card padd">
      <h6 class="font-weight-bold">Lead Source</h6>
    <div class="line mt-1"></div>
    <div class="row mt-4">
        <div class=" col-md-12">
            <table class="table table-striped border">
          <thead>
            <tr>
              <th scope="col" class="fs1">Lead Source</th>
              <th scope="col" class="fs1">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr id="sick">
              <td scope="row" class="text-info">Total Leads : 0</td>
              <td scope="row">
                  <button type="button" id="lead_sourceedit" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o"></i></button>
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
              </td>
            </tr>
            <tr id="lead_sourcesickagain" style="display:none"> 
              <td scope="row"> <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="Lead Source"></td>
              
              <td scope="row">
                  <button type="button" class="btn btn-success fs" data-toggle="tooltip" data-placement="top" title="update"><i class="fa fa-check"></i></button>
                
                <button type="button" id="cancel" class="btn btn-danger fs" data-toggle="tooltip" data-placement="top" title="cancel"><i class="fas fa-times"></i></button>
              </td>
            </tr>
            <tr>
              <td scope="row">
                 <h6 class="text-dark">h1</h6>
                 
                 <h6 class="text-info mt-2">Total Leads : 0</h6>
              </td>
              <td scope="row">
                  <button type="button" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></button>
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td scope="row">
                  <input type="email" class="form-control " id="priority" aria-describedby="emailHelp" placeholder="Lead Source">
              </td>
                      
              <td scope="row" >
                <button type="button" class="btn btn-info w-25" >Add</button>
              </td>
            </tr>
            
          </tbody>
        </table> 
        </div>
    </div>
  </div>
  
<script>
   $(document).ready(function(){
    $("#lead_sourceedit").click(function(){
     $("#lead_sourcesickagain").show();
     $("#sick").hide();
   });
 });
</script> 
            
<script>
   $(document).ready(function(){
    $("#cancel").click(function(){
     $("#sick").show();
     $("#lead_sourcesickagain").hide();
   });
 });
</script>
</div>
<!--------Lead Source End--------->

<!--------Opportunities States Reason  --------->
<div class="tab-pane bg-white" id="opportunities_st">
  <div class="container bg-white padd">
      <h6 class="font-weight-bold">Opportunities State Reason</h6>
    <div class="line mt-1"></div>
    <div class="row mt-4">
        <div class=" col-md-12">
            <table class="table table-striped border">
          <thead>
            <tr>
                <th scope="col" class="fs1">Opportunities State</th>
              <th scope="col" class="fs1">Reason</th>
              <th scope="col" class="fs1">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
               <td scope="row">
                 <select class=" form-control" name="department">
                  <option value="open">OPen</option>
                  <option value="won">Won</option>
                  <option value="abandoned">Abandoned</option>
                   <option value="suspende">Suspended</option>
                  <option value="lost">Lost</option>
                 </select>
               </td>
               <td scope="row">
                <input type="email" class="form-control " id="order" aria-describedby="emailHelp">
               </td>
              <td scope="row" >
                <button type="button" class="btn btn-info" >Add</button>
              </td>
            </tr>
          </tbody>
        </table> 
        </div>
    </div>
  </div>
</div>
<!--------Opportunities States Reason End--------->

<!--------Cutom Field  --------->
<div class="tab-pane bg-white" id="custom_fld">
  <style>
 .tabcontent 
 {
    display: none;
    width: 100%;
    padding: 15px 25px;
    border: 1px solid #ccc;
    border-top: none;
}


</style>

  <div class="container card">
      <div class="row bg-light">
        <div class="tab">
        <div class="container" id=" mydiv">
          <button class="tablinks btn active" onclick="openCity(event, 'general')">Custom Field</button>
          <button class="tablinks btn" onclick="openCity(event, 'contact')">New Field</button>
        </div>
      </div>
    </div>
    <div class="row bg-white">
      <div id="general" class="tabcontent">
         <h1>Table</h1> 
      </div>

      <div id="contact" class="tabcontent">
          <div class="row mt-3">
            <div class="col-md-12">
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1" class="ml-5 label-style">Custom Field For <span class="text-danger">*</span></label>
                </div>
                <div class="col-sm-5">
                  <select class=" form-control" name="department">
                    <option value="it">Deposit</option>
                    <option value="it">Expense</option>
                    <option value="it">Tasks</option>
                    <option value="it">Projects</option>
                    <option value="it">Leads</option>
                    <option value="it">Bugs</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1" class="ml-5 label-style">Field Label <span class="text-danger">*</span></label>
                </div>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="designation" aria-describedby="emailHelp" >
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1" class="ml-5 label-style">Default Label</label>
                </div>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="designation" aria-describedby="emailHelp" >
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1" class="ml-5 label-style">Help Text</label>
                </div>
                <div class="col-sm-5">
                  <textarea rows="2" cols="59"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1" class="ml-5 label-style">Field Type<span class="text-danger">*</span></label>
                </div>
                <div class="col-sm-5">
                  <select class=" form-control" name="department">
                    <option value="it">Text Field</option>
                    <option value="it">Text Area</option>
                    <option value="it">Select</option>
                    <option value="it">Email</option>
                    <option value="it">Date</option>
                    <option value="it">Checkbox</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1" class="ml-5 label-style">This Field is Required?</label>
                </div>
                <div class="col-sm-5">
                  <label class="small-box">
                    <input type="checkbox">
                    <span class="checkmark bg-white border"></span>
                    </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1" class="ml-5 label-style">Show on table</label>
                </div>
                <div class="col-sm-5">
                  <label class="small-box">
                    <input type="checkbox">
                    <span class="checkmark bg-white border"></span>
                    </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1" class="ml-5 label-style">Show on Details</label>
                </div>
                <div class="col-sm-5">
                  <label class="small-box">
                    <input type="checkbox">
                    <span class="checkmark bg-white border"></span>
                    </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1" class="ml-5 label-style">Visible for admin only</label>
                </div>
                <div class="col-sm-5">
                  <label class="small-box">
                    <input type="checkbox">
                    <span class="checkmark bg-white border"></span>
                    </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1" class="ml-5 label-style">Active</label>
                </div>
                <div class="col-sm-5">
                  <input type="checkbox" checked data-toggle="toggle" data-on="NO" data-off="Yes" data-onstyle="danger" data-offstyle="success">
                </div>
              </div>
            </div>
            
          </div>
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
// Add active class to the current button (highlight it)
var header = document.getElementById("mydiv");
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
  $('#general').css('display','block');
})
</script>
</div>
<!--------Cutom Field End--------->

<!--------Payment Method  --------->
<div class="tab-pane bg-white" id="payment_met">
  <div class="container bg-white padd">
      <h6 class="font-weight-bold">Payment Method</h6>
    <div class="line mt-1"></div>
    <div class="row mt-4">
        <div class=" col-md-12">
            <table class="table table-striped border">
          <thead>
            <tr>
              <th scope="col" class="fs1">Method Name</th>
              <th scope="col" class="fs1">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr id="sick">
              <td scope="row">Online</td>
              <td scope="row">
                  <button type="button" id="payment_edit" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></button>
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr id="payment_sickagain" style="display:none"> 
              <td scope="row"> <input type="email" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="Online"></td>
              
              <td scope="row">
                  <button type="button" class="btn btn-success fs" data-toggle="tooltip" data-placement="top" title="update"><i class="fa fa-check"></i></button>
                
                <button type="button" id="cancel" class="btn btn-danger fs" data-toggle="tooltip" data-placement="top" title="cancel"><i class="fas fa-times"></i></button>
              </td>
            </tr>
            <tr>
              <td scope="row">Paypal</td>
              <td scope="row">
                  <button type="button" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></button>
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td scope="row">Payoneer</td>
              <td scope="row">
                  <button type="button" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></button>
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td scope="row">Bank Transfer</td>
              <td scope="row">
                  <button type="button" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></button>
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td scope="row">Cash</td>
              <td scope="row">
                  <button type="button" class="btn btn-primary fs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></button>
                <button type="button" class="btn btn-danger fs " data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td scope="row">
                  <input type="email" class="form-control " id="priority" aria-describedby="emailHelp" placeholder="Method Name">
              </td>
                      
              <td scope="row" >
                <button type="button" class="btn btn-info w-25" >Add</button>
              </td>
            </tr>
            
          </tbody>
        </table> 
        </div>
    </div>
  </div>
  
  <script>
   $(document).ready(function(){
    $("#payment_edit").click(function(){
     $("#payment_sickagain").show();
     $("#sick").hide();
   });
 });
</script> 
            
<script>
   $(document).ready(function(){
    $("#cancel").click(function(){
     $("#sick").show();
     $("#payment_sickagain").hide();
   });
 });
</script>
</div>
<!--------Payment Method End--------->

<!--------CronJob --------->
<div class="tab-pane bg-white" id="cronjob">
    <div class="container card padd">
      <h6 class="font-weight-bold">Cronjob Settings <span class="text-info">Run Cron Manually</span></h6>
    <div class="line mt-1"></div>
    <div class="row mt-4">
        <div class=" col-md-12">
            <div class="form-group">
          <div class="row">
            <div class="offset-2 col-sm-2">
              <label for="exampleInputEmail1" class="label-style">Active Cronjob</label>
            </div>
            <div class="col-sm-8">
              <label class="small-box">  This enables the cronjob feature if it is setup correctly.
                 <input type="checkbox" checked="checked">
                 <span class="checkmark"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="offset-1 col-sm-3">
              <label for="exampleInputEmail1" class="label-style">Automatic Backup Database</label>
            </div>
            <div class="col-sm-8">
              <label class="small-box"> Creates a database backup every 7 days. Requires cronjob to be acttivated!
                 <input type="checkbox" checked="checked">
                 <span class="checkmark"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="offset-2 col-sm-2">
              <label for="exampleInputEmail1"  class="label-style">Cronjob Link</label>
            </div>
            <div class="col-sm-8">
              <h6 class="text-info">http://greenusys.com/cronjob/index</h6>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="offset-2 col-sm-2">
              <label for="exampleInputEmail1"  class="label-style" >Last Cronjob Run </label>
            </div>
            <div class="col-sm-8">
              <h6>2018-01-07 21:00</h6>
            </div>
          </div>
        </div>
        </div>
    </div>
    <div class="row mt-4">
        <button type="button" class="btn btn-primary font-weight-bold m-auto" >Save Changes</button>
    </div>
    <div class="row p-3">
        <h6>If cronjobs are not included in your hosting subscription, you can use a free cronjob service like <a href="https://www.easycron.com/?ref=18097"><span class="text-primary">Free Cronjob Service</span></a></h6>
    </div>
  </div>
</div>
<!--------CronJob End--------->

<!--------Menu Allocation --------->
<div class="tab-pane bg-white" id="menu_all">
  <style>
  .stocklist
  {
    display:none;
  }
  .saleslist
  {
    display:none;
  }
  .quotationlist
  {
    display:none;
  }
  .baselist
  {
    display:none;
  }
  .transectionlist
  {
    display:none;
  }
  .officelist
  {
    display:none;
  }
  .managelist
  {
    display:none;
  }
  .assignlist
  {
    display:none;
  }
  .attendancelist
  {
    display:none;
  }
  .recruitmentlist
  {
    display:none;
  }
  .payrolllist
  {
    display:none;
  }
  .performancelist
  {
    display:none;
  }
  .utilitylist
  {
    display:none;
  }
  .reportlist
  {
    display:none;
  }
  .translist
  {
    display:none;
  }
  .projectlist
  {
    display:none;
  }
</style>

  <div class="container bg-white padd">
      <div class="row">
        <div class="col-sm-10">
             <h6 class="font-weight-bold">Menu Allocation</h6>
      </div>
      <div class="col-sm-2">
             <a href="menuallocation.php"><button type="button" class="btn btn-primary font-weight-bold">Submit</button></a>
      </div>
    </div>
    <div class="line mt-1"></div>
    <div class="row mt-4">
        <div class="col-sm-5">
         <h6 class="font-weight-bold">Active Menu</h6>
         <ul style="list-style:none" class="p-0">
                  <li class="border p-2 rounded-sm mt-1">Dashboard</li> 
                  <li class="border p-2 rounded-sm mt-1">Calendar</li>
          <li class="border p-2 rounded-sm mt-1">Mail box</li>
          <li class="border p-2 rounded-sm mt-1">File Manager</li>  
          <li class="border p-2 rounded-sm mt-1">Projects</li>
          <li class="border p-2 rounded-sm mt-1">Tasks</li> 
                  <li class="border p-2 rounded-sm mt-1">Bugs</li>
          <li class="border p-2 rounded-sm mt-1">Opportunities</li>
          <li class="border p-2 rounded-sm mt-1">Leads</li> 
          <a href="javascript:void(0)" id="vStock1" class="text-dark text-decoration-none"> <li class="border p-2 rounded-sm mt-1" id="stock"><i class="fa fa-plus"></i> Stock</li></a> 
             <ul style="list-style:none" class="stocklist">
              <li class="border p-2 rounded-sm mt-1">Items</li> 
                        <li class="border p-2 rounded-sm mt-1">Supplier</li>
                <li class="border p-1 rounded-sm mt-1"></li>
                <li class="border p-2 rounded-sm mt-1">Return Stock</li>  
                <li class="border p-2 rounded-sm mt-1">Purchase Payment</li>
           </ul>
           
           <a href="javascript:void(0)" id="vStock2" class="text-dark text-decoration-none"> <li class="border p-2 rounded-sm mt-1" id="sales"><i class="fa fa-plus"></i> sales</li></a>  
             <ul style="list-style:none" class="saleslist">
              <li class="border p-2 rounded-sm mt-1">Invoice</li> 
                        <li class="border p-2 rounded-sm mt-1">Estimates</li>
                <li class="border p-2 rounded-sm mt-1">Recurring Invoice</li>
                <li class="border p-2 rounded-sm mt-1">Payments Received</li> 
                <li class="border p-2 rounded-sm mt-1">Proposals</li>
            <li class="border p-2 rounded-sm mt-1">Tax Rates</li> 
                <a href="javascript:void(0)" id="vStock3" class="text-dark text-decoration-none"> <li class="border p-2 rounded-sm mt-1" id="quotation"><i class="fa fa-plus"></i> Quotations</li></a>  
               <ul style="list-style:none" class="quotationlist">
                  <li class="border p-2 rounded-sm mt-1">Quotations List</li> 
                              <li class="border p-2 rounded-sm mt-1">Quotations Forms</li>
               </ul>
           </ul>
          <li class="border p-2 rounded-sm mt-1">Tickets</li>
          
                  <a href="javascript:void(0)" id="vStock4" class="text-dark text-decoration-none"> <li class="border p-2 rounded-sm mt-1" id="base"><i class="fa fa-plus"></i> Knowledge Base</li></a> 
             <ul style="list-style:none" class="baselist">
              <li class="border p-2 rounded-sm mt-1">Knowledge Base</li>  
                        <li class="border p-2 rounded-sm mt-1">Articles</li>
                <li class="border p-1 rounded-sm mt-1">Category</li>
           </ul>
           
           <a href="javascript:void(0)" id="vStock5" class="text-dark text-decoration-none"> <li class="border p-2 rounded-sm mt-1" id="transection"><i class="fa fa-plus"></i> Transections</li></a> 
             <ul style="list-style:none" class="transectionlist">
              <li class="border p-2 rounded-sm mt-1">Expense</li> 
                        <li class="border p-2 rounded-sm mt-1">Deposit</li>
                <li class="border p-2 rounded-sm mt-1">Transfer</li>
                <li class="border p-2 rounded-sm mt-1">Transections Report</li> 
                <li class="border p-2 rounded-sm mt-1">Transfer Report</li>
            <li class="border p-2 rounded-sm mt-1">Balance Sheet</li>
            <li class="border p-2 rounded-sm mt-1">Bank & Cash</li>
                     </ul>            
                  <li class="border p-2 rounded-sm mt-1">Client</li>
          <li class="border p-2 rounded-sm mt-1">Departments</li>
          
          <a href="javascript:void(0)" id="vStock6" class="text-dark text-decoration-none"> <li class="border p-2 rounded-sm mt-1" id="office"><i class="fa fa-plus"></i> Office Asset</li></a> 
             <ul style="list-style:none" class="officelist">
              <li class="border p-2 rounded-sm mt-1">Stock Category</li>  
                        <li class="border p-2 rounded-sm mt-1">Stock List</li>
            <a href="javascript:void(0)" id="vStock7" class="text-dark text-decoration-none"> <li class="border p-2 rounded-sm mt-1" id="manage"><i class="fa fa-plus"></i> Manage Stock</li></a> 
               <ul style="list-style:none" class="managelist">
                  <li class="border p-2 rounded-sm mt-1">Stock History</li> 
                 </ul>
            <a href="javascript:void(0)" id="vStock8" class="text-dark text-decoration-none"> <li class="border p-2 rounded-sm mt-1" id="assign"><i class="fa fa-plus"></i> Assign Stock</li></a> 
               <ul style="list-style:none" class="assignlist">
                  <li class="border p-2 rounded-sm mt-1">Assign Stock</li>  
                              <li class="border p-2 rounded-sm mt-1">Assign Stock Report</li>
               </ul>
                <li class="border p-2 rounded-sm mt-1">Stock Report</li>
           </ul>
           
             <a href="javascript:void(0)" id="vStock9" class="text-dark text-decoration-none"> <li class="border p-2 rounded-sm mt-1" id="attendance"><i class="fa fa-plus"></i> Attendance</li></a>  
             <ul style="list-style:none" class="attendancelist">
              <li class="border p-2 rounded-sm mt-1">Time History</li>  
                        <li class="border p-2 rounded-sm mt-1">Timechange Request</li>
                <li class="border p-2 rounded-sm mt-1">Attendance Report</li>
                <li class="border p-2 rounded-sm mt-1">Mark Attendance</li> 
                     </ul>  
           
           <a href="javascript:void(0)" id="vStock10" class="text-dark text-decoration-none"> <li class="border p-2 rounded-sm mt-1" id="recruitment"><i class="fa fa-plus"></i> Recruitment</li></a> 
             <ul style="list-style:none" class="recruitmentlist">
              <li class="border p-2 rounded-sm mt-1">Jobs Posted</li> 
                        <li class="border p-2 rounded-sm mt-1">Jobs Application</li>
          </ul> 
          
          <a href="javascript:void(0)" id="vStock11" class="text-dark text-decoration-none"> <li class="border p-2 rounded-sm mt-1" id="payroll"><i class="fa fa-plus"></i> Payroll</li></a>  
             <ul style="list-style:none" class="payrolllist">
              <li class="border p-2 rounded-sm mt-1">Salary Template</li> 
                        <li class="border p-2 rounded-sm mt-1">Hourly Template</li>
                <li class="border p-2 rounded-sm mt-1">Manage Salary</li>
                <li class="border p-2 rounded-sm mt-1">Employee Salary List</li>  
                <li class="border p-2 rounded-sm mt-1">Make Payment</li>
            <li class="border p-2 rounded-sm mt-1">Generate Payslip</li>
            <li class="border p-2 rounded-sm mt-1">Payroll Summary</li>
            <li class="border p-2 rounded-sm mt-1">Advance Salary</li>  
                <li class="border p-2 rounded-sm mt-1">Provident Fund</li>
            <li class="border p-2 rounded-sm mt-1">Overtime</li>
            <li class="border p-2 rounded-sm mt-1">Employee Award</li>
                     </ul>  
       
                  <a href="javascript:void(0)" id="vStock12" class="text-dark text-decoration-none"> <li class="border p-2 rounded-sm mt-1" id="performance"><i class="fa fa-plus"></i> Performance</li></a>  
             <ul style="list-style:none" class="performancelist">
              <li class="border p-2 rounded-sm mt-1">Indicator</li> 
                        <li class="border p-2 rounded-sm mt-1">Give Appraisal</li>
                <li class="border p-2 rounded-sm mt-1">Performance Report</li>
                     </ul>  
            
          <li class="border p-2 rounded-sm mt-1">Leave Management</li>  
                  <li class="border p-2 rounded-sm mt-1">Training</li>
          <li class="border p-2 rounded-sm mt-1">Announcements</li>
                   
                  <a href="javascript:void(0)" id="vStock13" class="text-dark text-decoration-none"> <li class="border p-2 rounded-sm mt-1" id="utility"><i class="fa fa-plus"></i> Utilities</li></a>  
             <ul style="list-style:none" class="utilitylist">
              <li class="border p-2 rounded-sm mt-1">Holiday</li> 
                        <li class="border p-2 rounded-sm mt-1">Goal Tracking</li>
               
                     </ul>           
          
          <a href="javascript:void(0)" id="vStock14" class="text-dark text-decoration-none"> <li class="border p-2 rounded-sm mt-1" id="report"><i class="fa fa-plus"></i> Reports</li></a> 
             <ul style="list-style:none" class="reportlist">
              <li class="border p-2 rounded-sm mt-1">Sales</li> 
              <a href="javascript:void(0)" id="vStock15" class="text-dark text-decoration-none"> <li class="border p-2 rounded-sm mt-1" id="trans"><i class="fa fa-plus"></i> Transations</li></a>  
               <ul style="list-style:none" class="translist">
                  <li class="border p-2 rounded-sm mt-1">Account Statement</li> 
                <li class="border p-2 rounded-sm mt-1">Expense Report</li>  
                <li class="border p-2 rounded-sm mt-1">Income Reports</li>  
                <li class="border p-2 rounded-sm mt-1">Income Vs EXpense</li> 
                <li class="border p-2 rounded-sm mt-1">Report by Date</li>  
                <li class="border p-2 rounded-sm mt-1">Report by Month</li> 
                <li class="border p-2 rounded-sm mt-1">All Income</li>  
                <li class="border p-2 rounded-sm mt-1">All Expense</li> 
                <li class="border p-2 rounded-sm mt-1">All Transactions</li>  
                 </ul>
            <a href="javascript:void(0)" id="vStock16" class="text-dark text-decoration-none"> <li class="border p-2 rounded-sm mt-1" id="project"><i class="fa fa-plus"></i> Projects</li></a> 
               <ul style="list-style:none" class="projectlist">
                  <li class="border p-2 rounded-sm mt-1">Project Tasks</li> 
                              <li class="border p-2 rounded-sm mt-1">Project Bugs</li>
                <li class="border p-2 rounded-sm mt-1">Projects Report</li>
               </ul>
                <li class="border p-2 rounded-sm mt-1">Tasks Report</li>
            <li class="border p-2 rounded-sm mt-1">Bugs Report</li>
            <li class="border p-2 rounded-sm mt-1">Tickets Report</li>
            <li class="border p-2 rounded-sm mt-1">Client Report</li>
           </ul>
          <li class="border p-2 rounded-sm mt-1">User</li>
          <li class="border p-2 rounded-sm mt-1">Settings</li>
          <li class="border p-2 rounded-sm mt-1">Backup Database</li>
          <li class="border p-2 rounded-sm mt-1">Private Chat</li>
         </ul>
      </div>
      <div class="offset-1 col-sm-5">
          <h6 class="font-weight-bold">In Active Menu</h6>
          <ul style="list-style:none" class="p-0">
                     <li class="border p-2 rounded-sm mt-1">Please Scroll up down each menu for one time</li> 
          </ul>
      </div>
    </div>
  </div>
  
 <script>
  $(document).on('click','#vStock1',function(){
    $('.stocklist').toggle(500);
  });
 </script>
 <script>
  $(document).on('click','#vStock2',function(){
    $('.saleslist').toggle(500);
  });
 </script>
 <script>
  $(document).on('click','#vStock3',function(){
    $('.quotationlist').toggle(500);
  });
 </script>
 <script>
  $(document).on('click','#vStock4',function(){
    $('.baselist').toggle(500);
  });
 </script>
 <script>
  $(document).on('click','#vStock5',function(){
    $('.transectionlist').toggle(500);
  });
 </script>
 <script>
  $(document).on('click','#vStock6',function(){
    $('.officelist').toggle(500);
  });
 </script>
 <script>
  $(document).on('click','#vStock7',function(){
    $('.managelist').toggle(500);
  });
 </script>
 <script>
  $(document).on('click','#vStock8',function(){
    $('.assignlist').toggle(500);
  });
 </script>
 <script>
  $(document).on('click','#vStock9',function(){
    $('.attendancelist').toggle(500);
  });
 </script>
 <script>
  $(document).on('click','#vStock10',function(){
    $('.recruitmentlist').toggle(500);
  });
 </script>
 <script>
  $(document).on('click','#vStock11',function(){
    $('.payrolllist').toggle(500);
  });
 </script>
 <script>
  $(document).on('click','#vStock12',function(){
    $('.performancelist').toggle(500);
  });
 </script>
 <script>
  $(document).on('click','#vStock13',function(){
    $('.utilitylist').toggle(500);
  });
 </script>
 <script>
  $(document).on('click','#vStock14',function(){
    $('.reportlist').toggle(500);
  });
 </script>
 <script>
  $(document).on('click','#vStock15',function(){
    $('.translist').toggle(500);
  });
 </script>
 <script>
  $(document).on('click','#vStock16',function(){
    $('.projectlist').toggle(500);
  });
 </script>
</div>
<!--------Menu Allocation End--------->

<!--------Notification --------->
<div class="tab-pane bg-white" id="notify">
  <div class="container card">
      <h6 class="font-weight-bold">Notification Settings</h6>
    <div class="line mt-1"></div>
    <div class="row mt-4 p-3">
        <div class=" col-md-9">
            <div class="form-group">
          <div class="row">
            <div class="offset-2 col-sm-2">
              <label for="exampleInputEmail1"  class="label-style"> Pusher app id </label>
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="401479" >
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="offset-2 col-sm-2">
              <label for="exampleInputEmail1"  class="label-style"> Pusher app key</label>
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="4cf88668659dc9c987c3" >
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="offset-1 col-sm-3">
              <label for="exampleInputEmail1"  class="label-style"> Pusher app secret </label>
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="6fce183b214d17c20dd5" >
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="offset-2 col-sm-2">
              <label for="exampleInputEmail1"  class="label-style"> Pusher cluster </label>
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="ap2" >
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-4">
              <label for="exampleInputEmail1"  class="label-style"> Auto check for new notifications </label>
            </div>
            <div class="col-sm-6">
              <input type="number" class="form-control auto_check_for_new_notifications" value="0" name="auto_check_for_new_notifications">
              <h6>(Seconds - Set 0 to disable)</h6>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-4">
              <label for="exampleInputEmail1"  class="label-style"> Enable Desktop Notifications </label>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" checked data-toggle="toggle" data-on="yes" data-off="No" data-onstyle="success" data-offstyle="danger">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-4">
              <label for="exampleInputEmail1"  class="label-style"> Enable Real Time Notifications </label>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" checked data-toggle="toggle" data-on="NO" data-off="Yes" data-onstyle="danger" data-offstyle="success">
            </div>
          </div>
        </div>
        
        <div class="row mt-4"><button type="button" class="btn btn-info font-weight-bold m-auto size">Update</button></div>
        
        </div>
      <div class=" col-sm-3 card bg-light p-2">
         <p>Go to <span class="text-info">pusher.com</span> after singup create app. follow the details</p>
         <p>Name your App – ex ultimate-pro</p>
         <p>Select a Cluster – By default pusher.com will select your cluster, you can change it if its needed. You can read more here what is cluster: https://pusher.com/docs/clusters</p>
         <p>What’s your frond-end tech? – Select jQuery</p>
         <p>What’s your back-end tech? – Select PHP</p>
      </div>
    </div>
  </div>
</div>
<!--------Notification End--------->

<!--------Email Notification --------->
<div class="tab-pane bg-white" id="email_notify">
  <div class="container card padd ">
      <h6 class="font-weight-bold">Email Notifications Settings</h6>
    <div class="line mt-1"></div>
    <div class="row mt-4 p-3">
        <div class="offset-2 col-md-10">
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-4">
              <label for="exampleInputEmail1"  class="label-style"> Send Clock Email : <span class="text-danger">*</span> </label>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" checked data-toggle="toggle" data-on="No" data-off="Yes" data-onstyle="danger" data-offstyle="success">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-4">
              <label for="exampleInputEmail1"  class="label-style"> Leave Email : <span class="text-danger">*</span></label>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-4">
              <label for="exampleInputEmail1"  class="label-style"> Overtime Email : <span class="text-danger">*</span></label>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-4">
              <label for="exampleInputEmail1"  class="label-style"> Payslip Email :  <span class="text-danger">*</span></label>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-4">
              <label for="exampleInputEmail1"  class="label-style"> Advance Salary Email :  <span class="text-danger">*</span></label>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-4">
              <label for="exampleInputEmail1"  class="label-style"> Award Email : <span class="text-danger">*</span></label>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-4">
              <label for="exampleInputEmail1"  class="label-style"> Recruitment Email :  <span class="text-danger">*</span></label>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-4">
              <label for="exampleInputEmail1"  class="label-style"> Announcements Email : <span class="text-danger">*</span></label>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-4">
              <label for="exampleInputEmail1"  class="label-style"> Training Email : <span class="text-danger">*</span></label>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-4">
              <label for="exampleInputEmail1"  class="label-style"> Expense Email : <span class="text-danger">*</span></label>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class=" col-sm-4">
              <label for="exampleInputEmail1"  class="label-style"> Deposit Email : <span class="text-danger">*</span></label>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger">
            </div>
          </div>
        </div>
        
        <div class="row mt-4"><button type="button" class="btn btn-info font-weight-bold m-auto size">Update</button></div>
        
        </div>
    </div>
  </div>
</div>
<!--------Email Notification End--------->

<!--------Backup Database --------->
<div class="tab-pane bg-white" id="backup_data">
  <div class="container bg-white padd">
      <div class="row">
        <div class="col-sm-8">
             <h6>Backup Database</h6>
      </div>
      <div class="col-sm-2">
             <a type="button" id="acount" class="btn btn-primary  p-0"><i class="fa fa-download"></i> Restore Database</a>
      </div>
      <div class="col-sm-2">
              <a href="<?=base_url('Rahul/createBackUp')?>" class="btn btn-info  p-0 " id="getBackUp"><i class="fa fa-download"></i> Backup Database</a>
      </div>
    </div>
    <div class="line mt-1"></div>
    <div class="row mt-4">
        <div class=" col-md-12">
            <table class="table table-striped border">
          <thead>
            <tr>
                <th scope="col" class="fs1">Date</th>
              <th scope="col" class="fs1">File Name</th>
              <th scope="col" class="fs1">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr >
              <td scope="row" class="text-dark">2020-02-1122-19  </td>
              <td scope="row" class="text-dark">BD backup</td>
              <td scope="row" >
                <?php
                foreach($Assign_permission as $checkpermission)
                  {
                    $permission=$checkpermission->permission;
                    foreach ($UsersPermission as $Uperms) 
                      {
                       $Userpermi=$Uperms->permission;
                        
                    if(strpos($permission,'Edit')!==false||strpos($Userpermi,'Edit')!==false)
                    {?>
                
                  <button type="button"  class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-download"></i></button>
                   <?php }
                   else
                   {
                    ?>
                     <button type="button"  style="visibility:hidden" class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-download"></i></button>
                     <?php
                      }
                     if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                      {?>

                
                <button type="button" class="btn btn-danger " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>

                       <?php }
                       else
                       {
                        ?>
                           <button type="button" style="visibility: hidden" class="btn btn-danger " data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
                           <?php
                                          }

                                        }
                                      }?>
              </td>
            </tr>
          </tbody>
        </table> 
        </div>
    </div>
  </div>
 
    <div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
          
      <div class="modal-content style" id="account" style="display: none">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">Restore Database</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="line"></div>
        <div class="modal-body">
            <form>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-5">
                    <label for="exampleInputEmail1" class="label-style">Upload Backup Database (. ZIP Files)</label>
                  </div>
                <div class="col-sm-6">
                   <input type="file" id="myfile" name="myfile" multiple><br><br>
                </div>
              </div>
            </div>
            
            
          </form>
        </div>
        <div class="modal-footer border-top-0 modal-butn">
          <button type="button" class="btn btn-primary">Upload</button>
          <button type="button" class="btn btn-secondary">close</button>
          </div>
      </div>
    </div>
  </div>

  <script>
  $(document).ready(function(){
   
    $("#acount").click(function(){
     $("#account").show();
     $('#accountModal').modal('show');
    });
  });
</script>
</div>
<!--------Backup Database End--------->

<!--------Translation --------->
<div class="tab-pane bg-white" id="translation">
  <div class="container card padd ">
      <h6 class="font-weight-bold">Translation</h6>
    <div class="line mt-1"></div>
    <div class=" mt-4 p-3">
        <table id="example" class="display nowrap w-100" style="width:100%">
          <thead>
              <tr>

                  <th>Icon</th>
                  <th>Language</th>
                  <th>Progress</th>
                  <th>Done </th>
                  <th>Total</th>
                  <th>Action</th>
                 
              </tr>
          </thead>
          <tbody>
              <tr>
                <td>Image</td>
                <td>afar</td>
                <td>progress bar</td>
                <td>0</td>
                <td>3422</td>
                <td>
                  <button class="border btn btn-default"><i class="fas fa-check"></i></button>
                  <button class="border btn btn-info ml-2"><i class="far fa-edit"></i></button>
                </td>

              </tr>
          </tbody>
          <tfoot>
              <tr>
                  <th>Icon</th>
                  <th>Language</th>
                  <th>Progress</th>
                  <th>Done </th>
                  <th>Total</th>
                  <th>Action</th>
              </tr>
          </tfoot>
      </table>
    </div>
  </div>
</div>
<!--------Translation End--------->

<!--------System Update --------->
<div class="tab-pane bg-white" id="sys_update">

</div>
<!--------System Update End--------->



          </div>
        </div>

        <div class="clearfix"></div>

      </div>

            </div>
        </div>

    </section>
</div>


<!-- Modal -->
  <div class="modal fade" id="systemSetting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
              
      <div class="modal-content style" id="currency" style="display:none">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">From Items</h5>
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
                  <label for="exampleInputEmail1">Code</label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Method Name">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Name</label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Method Name">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Symbol</label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Method Name">
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
      
      <div class="modal-content style" id="account" style="display: none">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">New Account</h5>
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
                  <label for="exampleInputEmail1">Account Name <span class="text-danger">*</span></label>
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
                  <textarea class="form-control" name="short_note"></textarea>
                </div>
              </div>
              </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Initial Balance <span class="text-danger">*</span></label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Group">
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
  
<!--currency modal----->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
              
      <div class="modal-content style" id="currency" style="display:none">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">From Items</h5>
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
                  <label for="exampleInputEmail1">Code</label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Method Name">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Name</label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Method Name">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Symbol</label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Method Name">
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
      
      <div class="modal-content style" id="account" style="display: none">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">New Account</h5>
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
                  <label for="exampleInputEmail1">Account Name <span class="text-danger">*</span></label>
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
                  <textarea class="form-control" name="short_note"></textarea>
                </div>
              </div>
              </div>
            <div class="form-group">
              <div class="row">
                <div class="offset-1 col-sm-3">
                  <label for="exampleInputEmail1">Initial Balance <span class="text-danger">*</span></label>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Group">
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
  $(document).on('click','#getBackUp',function(){
    $.ajax({
      url:"<?=base_url('Rahul/createBackUp')?>",
      type:"post",
      success:function(response){

      }
    });
  });

  $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

  $(document).on("click","#back_frm",function(){
      $("#cuurency_all").hide();
       $("#sys_set").show();
  })
    $(document).on("click","#crncy_page",function(){
      $("#cuurency_all").show();
       $("#sys_set").hide();
  })
  $(document).ready(function(){
   
    $("#curency").click(function(){
     $("#currency").show();
     $("#account").hide();
     $('#systemSetting').modal('show');
    });
  });
</script>

<script>
  $(document).ready(function(){
   
    $("#acount").click(function(){
     $("#currency").hide();
     $("#account").show();
     $('#systemSetting').modal('show');
    });
  });
</script>


<script>
    CKEDITOR.replace('editor1');
</script>
<script type="text/javascript">
   $(document).ready(function() {
      function readUrl(input) {
  
  if (input.files && input.files[0]) {
    let reader = new FileReader();
    reader.onload = (e) => {
      let imgData = e.target.result;
      let imgName = input.files[0].name;
      input.setAttribute("data-title", imgName);
      console.log(e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }

}
});
</script>