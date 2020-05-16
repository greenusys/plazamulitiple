
<style type="text/css">
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
    background: #f90;
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
    background: #f90;
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
    line-height: 1.42857143;
    border: 1px solid transparent;
    /* border-radius: 4px 4px 0 0; */
}
.tabs-left>li.active>a::after{content: "";
    position: absolute;
    top: 10px;
    right: -10px;
    border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  
  border-left: 10px solid #f90;
    display: block;
    width: 0;}
</style>

<!-- Main Content -->
<div class="main-content">
    <section class="section">

        <div class="row">
            <div class="col-md-6 bg-white">
                <h4 class=" p-2">Announcements</h4>
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
    
        <div class="row">
        <div class="col-md-3"> <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left sideways bg-white">
            <li class="w-100 "><a href="#home-v" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Company Details</a></li>
            <li class="w-100"> <a href="#profile-v" data-toggle="tab"><i class="fas fa-desktop" aria-hidden="true"></i> System Settings</a></li>
            <li class="w-100"><a href="#email_set" data-toggle="tab"><i class="fas fa-envelope" aria-hidden="true"></i> Email Settings</a></li>
            <li class="w-100"><a href="#sms_set" data-toggle="tab"><i class="fas fa-envelope" aria-hidden="true"></i> SMS Settings</a></li>
            <li class="w-100"><a href="#email_temp" data-toggle="tab"><i class="fas fa-pen-square"></i> Email Templates</a></li>
            <li class="w-100"><a href="#email_inte" data-toggle="tab"><i class="far fa-envelope"></i> Email Integration</a></li>
            <li class="w-100"><a href="#payment_set" data-toggle="tab"><i class="fas fa-dollar-sign"></i> Payment Settings</a></li>
            <li class="w-100"><a href="#invoice_set" data-toggle="tab"><i class="far fa-money-bill-alt"></i> Invoice Settings</a></li>
            <li class="w-100"><a href="#estimate_set" data-toggle="tab"><i class="fas fa-sticky-note"></i> Estimate Settings</a></li>
            <li class="w-100"><a href="#proposal_set" data-toggle="tab"><i class="fa fa-leaf" aria-hidden="true"></i> Proposal Settings</a></li>
            <li class="w-100"><a href="#purchase" data-toggle="tab"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Purchase Purchase</a></li>
            <li class="w-100"><a href="#tick_leads" data-toggle="tab"><i class="fas fa-ticket-alt"></i> Ticket & Leads Settings </a></li>
            <li class="w-100"><a href="#theme_set" data-toggle="tab"><i class="fa fa-code" aria-hidden="true"></i> Theme Settings</a></li>
            <li class="w-100"><a href="#dashboard" data-toggle="tab"><i class="fas fa-tachometer-alt"></i> Dashboard Settings</a></li>
            <li class="w-100"><a href="#work_days" data-toggle="tab"><i class="fa fa-calendar" aria-hidden="true"></i> Working Days</a></li>
            <li class="w-100"><a href="#leave_category" data-toggle="tab"><i class="fab fa-pagelines"></i> Leave Category</a></li>
            <li class="w-100"><a href="#income_cat" data-toggle="tab"><i class="fa fa-certificate" aria-hidden="true"></i> Income Category</a></li>
            <li class="w-100"><a href="#expense_cat" data-toggle="tab"><i class="fa fa-tasks" aria-hidden="true"></i> Expense Category</a></li>
            <li class="w-100"><a href="#customer_grp" data-toggle="tab"><i class="fa fa-users" aria-hidden="true"></i> Customer Group</a></li>
            <li class="w-100"><a href="#allowed_ip" data-toggle="tab"><i class="fa fa-server" aria-hidden="true"></i> Allowed IP</a></li>
            <li class="w-100"><a href="#lead_status" data-toggle="tab"><i class="fa fa-list" aria-hidden="true"></i> Leads Status</a></li>
            <li class="w-100"><a href="#lead_source" data-toggle="tab"><i class="fa fa-arrow-down" aria-hidden="true"></i> Lead Source </a></li>
            <li class="w-100"><a href="#opportunities_st" data-toggle="tab"><i class="far fa-dot-circle"></i> Opportunities State Reason</a></li>
            <li class="w-100"><a href="#custom_fld" data-toggle="tab"><i class="far fa-star"></i> Custom Field</a></li>
            <li class="w-100"><a href="#payment_met" data-toggle="tab"><i class="far fa-money-bill-alt"></i> Payment Method</a></li>
            <li class="w-100"><a href="#cronjob" data-toggle="tab"><i class="fab fa-contao"></i> Cronjob</a></li>
            <li class="w-100"><a href="#menu_all" data-toggle="tab"><i class="fa fa-compass" aria-hidden="true"></i> Menu Allocation</a></li>
            <li class="w-100"><a href="#notify" data-toggle="tab"><i class="far fa-bell"></i> Notifications</a></li>
            <li class="w-100"><a href="#email_notify" data-toggle="tab"><i class="far fa-bell"></i> Email Notification</a></li>
            <li class="w-100 active"><a href="#backup_data" data-toggle="tab"><i class="fa fa-database" aria-hidden="true"></i> Backup Database</a></li>
            <li class="w-100"><a href="#translation" data-toggle="tab"><i class="fa fa-language" aria-hidden="true"></i> Translations</a></li>
            <li class="w-100"><a href="#sys_update" data-toggle="tab"><i class="fas fa-edit"></i> System Update</a></li>
          
          </ul>
        </div>

        <div class="col-md-9">
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane bg-white active" id="home-v">Home Tab.</div>
            <div class="tab-pane" id="profile-v">Profile Tab.</div>
            <div class="tab-pane" id="messages-v">Messages Tab.</div>
            <div class="tab-pane" id="settings-v">Settings Tab.</div>
          </div>
        </div>

        <div class="clearfix"></div>

      </div>

            </div>
        </div>

    </section>
</div>
<!-- Modal -->

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