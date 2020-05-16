
        
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card p-2">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>Job Application List</strong></span> 
                   </div>
                   <!--  <div class="col-md-6 text-right"><div class="btn-group">
                        <button type="button" class="btn btn-default rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-filter" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu margl_65">
                          <a class="dropdown-item" href="#">Action</a> -->
                         <!--  <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a> -->
                        <!-- </div>
                      </div>
                    </div> -->
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
                                       <?php
                                      foreach($Assign_permission as $checkpermission)
                                        {
                                          $permission=$checkpermission->permission;
                                          foreach ($UsersPermission as $Uperms) 
                                            {
                                             $Userpermi=$Uperms->permission;
                                          if(strpos($permission,'Edit')!==false||strpos($Userpermi,'Edit')!==false)
                                          {?>
                        
                        <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                        <?php }
                                         else
                                         {
                                          ?>
                                           <a href="" style="visibility: hidden"class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                           <?php
                                          }
                                         if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                          {?>

                        <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                         <?php }
                                         else
                                         {
                                          ?>
                                           <span style="visibility: hidden"class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                           
                                          <?php
                                          }

                                        }
                                      }?>
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
                                       <?php
                                      foreach($Assign_permission as $checkpermission)
                                        {
                                          $permission=$checkpermission->permission;
                                          foreach ($UsersPermission as $Uperms) 
                                            {
                                             $Userpermi=$Uperms->permission;
                                          if(strpos($permission,'Edit')!==false||strpos($Userpermi,'Edit')!==false)
                                          {?>
                        
                        <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                        <?php }
                                         else
                                         {
                                          ?>
                                           <a href="" style="visibility: hidden"class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                           <?php
                                          }
                                         if(strpos($permission,'Delete')!==false||strpos($Userpermi,'Delete')!==false)
                                          {?>

                        <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                         <?php }
                                         else
                                         {
                                          ?>
                                           <span style="visibility: hidden"class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                           
                                          <?php
                                          }

                                        }
                                      }?>
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