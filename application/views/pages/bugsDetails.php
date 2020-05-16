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
  
  border-left: 10px solid #f90;
    display: block;
    width: 0;}
</style>

<style type="text/css">
.bg-gray-dark 
{
    background-color: #3a3f51;
    color: #ffffff !important;
}
.img-style
{
    height: 126px;
    border: 4px solid white;
}
.back
{
    background-color:white;
}
/*.active, .back:hover
{
    background-color: #23b7e5 !important;
    color:white;
}*/
</style>

<div class="row mt-4">
        <div class="col-sm-3">
           <div class="card shadow"  id="myDIV">
              <ul style="list-style:none" class="nav nav-tabs tabs-left sideways bg-white">
                <li class="w-100 side_br active">
                    <a href="#base_details" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Details</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#comments" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Comments</a>
                </li>
           <!-- 
                <li class="w-100 side_br">
                    <a href="#attachment" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Attachment</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#tasks" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Tasks</a>
                </li>
                <li class="w-100 side_br">
                    <a href="#notes" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Notes</a>
                </li>
                 <li class="w-100 side_br">
                    <a href="#activities" data-toggle="tab"><i class="fas fa-info-circle" aria-hidden="true"></i> Activities</a> 
                </li>
              -->
               
              </ul>
           </div>
        </div>

          <div class="col-md-9">
            <div class="tab-content">
                <!----------basic Details------->
                <div class="tab-pane active" id="base_details">
                    <div class="container bg-white card ">
                        <div class="row pt-3">
                            <div class="col-md-10"><h6 class="mt">New button not displayed on Internet Explorer ( Meetings / Navigation Lists )</h6></div>
                            
                            <div class="col-md-2 text-right"> 
                              <span class="text-primary font-weight-bold " data-toggle="modal" data-target="#updateUser" id="update">Update</span>
                            </div>
                    
                        </div>
                      <div class="line mt-2"></div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                              <div class="row mt-2">
                                  <div class=" offset-2 col-sm-4 text-right">
                                      <label for="exampleInputEmail1" class="font-weight-bold  label-style">Issue # :</label>
                                  </div>
                                  <div class="col-sm-6">
                                       <label for="exampleInputEmail1">R&D1</label>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="row mt-2">
                                  <div class=" offset-2 col-sm-4 text-right">
                                      <label for="exampleInputEmail1" class="font-weight-bold  label-style">Bug Status :</label>
                                  </div>
                                  <div class="col-sm-6">
                                     <label for="exampleInputEmail1">
                                        <div class="">
                                          <span class="bg-primary rounded text-white p-1">In Progress</span>
                                            <button class="ml-2 btn btn-xs btn-success dropdown-toggle rounded p-1" data-toggle="dropdown" aria-expanded="false">
                                                Change<span class="caret"></span></button>
                                            <ul class="dropdown-menu animated zoomIn">

                                                <li>
                                                    <a href="http://www.plazacrm.com/admin/bugs/change_status/1/unconfirmed">Unconfirmed</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.plazacrm.com/admin/bugs/change_status/1/confirmed">Confirmed</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.plazacrm.com/admin/bugs/change_status/1/in_progress">In Progress</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.plazacrm.com/admin/bugs/change_status/1/resolved">Resolved</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.plazacrm.com/admin/bugs/change_status/1/verified">Verified</a>
                                                </li>

                                            </ul>
                                        </div>
                                     </label>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                              <div class="row mt-2">
                                  <div class=" offset-2 col-sm-4 text-right">
                                      <label for="exampleInputEmail1" class="font-weight-bold  label-style">Bug Title :</label>
                                  </div>
                                  <div class="col-sm-6">
                                       New button not displayed on Internet Explorer ( Meetings / Navigation Lists )
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="row mt-2">
                                  <div class=" offset-2 col-sm-4 text-right">
                                      <label for="exampleInputEmail1" class="font-weight-bold  label-style">Reporter :</label>
                                  </div>
                                  <div class="col-sm-6">
                                     <label for="exampleInputEmail1">aaa</label>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="tab-pane " id="comments">
                    <div class="container bg-white card ">
                        <div class="row pt-3">
                            <div class="col-md-10"><h6 class="mt">Comments</h6></div>
                           <!--  
                            <div class="col-md-2 text-right"> 
                              <span class="text-primary font-weight-bold " data-toggle="modal" data-target="#updateUser" id="update">Update</span>
                            </div>
                     -->
                        </div>
                      <div class="line mt-2"></div>
                      <div class="row">
                        <form class="">
                          <div class="form-group">
                            <textarea placeholder="New button not displayed on Internet Explorer ( Meetings / Navigation Lists ) Comments" name="" class="w-100" rows="5"></textarea>
                            <input class="form-control" type="file" name="" >
                          </div>
                           <div class="form-group">
                              <input class="form-control" type="file" name="" >
                          </div>
                          <div class="text-right">
                            <button class="btn btn-primary">Post Comments</button>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>

            </div>
          </div>
</div>