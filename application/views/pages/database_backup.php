<div class="card mt-4 p-2">
      <div class="row">
        <div class="col-sm-8">
             <h6>Backup Database</h6>
      </div>
      <div class="col-sm-2">
             <!-- <a type="button" id="acount" class="btn btn-primary  p-0"><i class="fa fa-download"></i> Restore Database</a> -->
      </div>
      <div class="col-sm-2">
              <a href="<?=base_url('Backupdatabase/backup')?>" class="btn btn-info p-0 px-2 " id="getBackUp"><i class="fa fa-download"></i> Backup Database</a>
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
            <?php
            foreach ($backup as $back) {
            ?>
            <tr >
              <td scope="row" class="text-dark"><?=$back->backup_time?></td>
              <td scope="row" class="text-dark"><?=$back->path?></td>
              <td scope="row" >
                  <a href="<?=base_url()?>Backupdatabase/backup_download/<?=$back->path?>"><button type="button"  class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-download"></i></button></a>
                
                <button type="button" class="btn btn-danger deleter" path="<?=$back->path?>" back_id="<?=$back->backup_id?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
          <?php } ?>
          </tbody>
        </table> 
        </div>
    </div>
  </div>
<script type="text/javascript">
$(document).on('click','.deleter',function(){
  var back_id = $(this).attr('back_id');
  var path = $(this).attr('path');
   swal({
      title: "Are you sure?",
      text: "You will not be able to recover!",
      icon: "warning",
      buttons: [
        'No, cancel it!',
        'Yes, I am sure!'
      ],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {
        $.ajax({
          type:'POST',
          data:{
            back_id:back_id,
            path:path
          },
          url:'<?=base_url()?>Backupdatabase/delete_db',
          success:function(response){
            if (response==1) {
              swal('Deleted','Backup Removed','success');
              location.reload();
            }
            else{
              swal('OOPS','Something Went Wrong','warning');
            }
          }
        })
      }
    })
})
</script>
 
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
</section>
</div>
  <script>
  $(document).ready(function(){
   
    $("#acount").click(function(){
     $("#account").show();
     $('#accountModal').modal('show');
    });
  });
</script>