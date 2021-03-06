
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
                    <a class="nav-link" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
                      aria-selected="true">Hourly Rate List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
                      aria-selected="false">Set Hourly Grade</a>
                  </li>
                 <!--  <li class="nav-item ">
                  <a class="nav-link" id="import_project" data-toggle="tab" href="#imp_project" role="tab" aria-controls="imp_project" aria-selected="false">Import Transfer </a>
                  </li> -->
                </ul>
                <div class="tab-content card pt-3" id="myTabContentJust">
                  <div class="tab-pane fade px-4" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

                   <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Hourly Rate</th>
                                <th>Hourly Grade</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          $count=1;
                          foreach ($templates as $data) {
                          ?>
                            <tr>
                                <td><?=$count?></td>
                                <td><?=$data->hourly_grade?></td>
                                <td><?=$data->hourly_rate?></td> 
                                <td>
                                    <div class="">
                                       <a href="<?=base_url()?>Payroll/hourlyTemplate/<?=$data->hourly_rate_id?>"><span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span></a>
                                       <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                    </div>

                                </td>
                            </tr>
                            <?php
                            $count++;
                          }
                            ?>
                        </tbody>
                        <tfoot>
                             <tr>
                                <th>#</th>
                                <th>Hourly Rate</th>
                                <th>Hourly Grade</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
                  <div class="tab-pane fade show active px-4" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                    <div class="row">
                       <div class="col-md-8 offset-md-1 mt-3">
                     <div class="">
                       
                          <form id="add_hourly">
                            <div class="form-group  row mt-2">
                                 <label class="col-md-3 text-right">Hourly Grade<sup class="text-danger">*</sup></label>
                               <div class="col-md-9">
                                    <input type="text" required="" value="<?=$templater[0]->hourly_grade?>" class="form-control" name="hourly_grade" placeholder="Enter Hourly Grade">
                               </div>

                            </div>
                            <div class="form-group  row">
                             <label class="col-md-3 text-right">Hourly Rate<sup class="text-danger">*</sup></label>
                               <div class="col-md-9">
                                   <input type="number" required="" value="<?=$templater[0]->hourly_rate?>" name="hourly_rate" class=" form-control" placeholder="Enter Hourly Rate" >
                                   <input type="hidden" value="<?=$templater[0]->hourly_rate_id?>" name="hourly_rate_id">
                               </div>

                            </div>
                          <div class="text-center ">
                            <button type="submit" class="btn btn-primary pull-right">Update</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
<script type="text/javascript">
        $(document).on('submit','#add_hourly',function(e){
        e.preventDefault();
        var formData= new FormData($(this)[0]);
        $.ajax({
            url:"<?=base_url()?>Payroll/update_template_ajax",
             type:"post",
             data:formData,
             contentType:false,
             processData:false,
             cache:false,
            success:function(response)
            {
              if(response==1){
                swal('Updated', "Updated Successfully", "success");
              }
              else{
                swal('OOPS', "Something went wrong", "error");
              }
            }
        });
       }) 
</script>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
