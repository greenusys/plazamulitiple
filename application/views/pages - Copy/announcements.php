

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card p-2">
                    <div class="card-header row border-bottom py-1">
                        <div class="col-md-6">
                            <span><strong>Announcements</strong></span>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-success rounded-0" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>New Announcements</button>
                        </div>
                    </div>
                    <div class="p-2">
                        <table id="example" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Created By</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($Announcement as $announce) {
                                        # code...?
                                        ?>
                                            <tr>
                                                <td><?=$announce->title?></td>
                                                <td><?=$announce->fullname?></td>
                                                <td><?=$announce->start_date?></td>
                                                <td><?=$announce->end_date?></td>
                                                <td><?=$announce->status?></td>
                                                <td>
                                                    <div class="">
                                                        <a href="javascript:void(0)" class="sele_staus bg-info p-1 text-white " data-id="<?=$announce->announcements_id?>"><span><i class="far fa-edit"></i></span></a>
                                                        <a href="javascript:void(0)" class="deleteAnnuo" data-id="<?=$announce->announcements_id?>"><span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span></a>
                                                        <a><span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span></a>
                                                    </div>

                                                </td>

                                            </tr>
                                        <?php
                                    }

                                ?>
                                

                                

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Created By</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
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
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header border-bottom">
                <h5 class="modal-title" id="exampleModalLabel">New Announcements</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="submitAnnouncement">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="exampleInputEmail1"> Title <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" value="" class="form-control" name="title">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class=" col-md-3">
                                <label for="exampleInputEmail1">Description </label>
                            </div>
                            <div class="col-md-9">
                                <textarea name="description"></textarea>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="exampleInputEmail1">Start Date <span class="text-danger">*</span> </label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="datepicker" name="start_date">
                            </div>
                            <div class="col-sm-1">
                                <button type="button" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group " id="end_date">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="exampleInputEmail1">End Date <span class="text-danger">*</span> </label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="datepicker" name="end_date">
                            </div>
                            <div class="col-sm-1">
                                <button type="button" class="btn btn-light butn"><i class="fa fa-calendar"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class=" col-md-3">
                                <label for="exampleInputEmail1">Attachment <span class="text-danger">*</span></label>
                            </div>

                            <div class="col-md-9">
                                <div class="form-group inputDnD">
                                    <label class="sr-only" for="inputFile">File Upload</label>
                                    <input type="file" class="form-control-file text-primary font-weight-bold" id="inputFile" accept="image/*" onchange="readUrl(this)" data-title="Drag and drop a file or Click" name="fileToUpload">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class=" col-md-3">
                                <label for="exampleInputEmail1">Share With </label>
                            </div>
                            <div class="col-md-9">
                                <input type="checkbox" name="shareWith" value="1"> All Clients

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class=" col-md-3">
                                <label for="exampleInputEmail1">Status </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" name="published"> Published

                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" name="unPublished"> Un Published

                            </div>
                        </div>
                         <div class="row">
                            <div class="col">
                                <input type="submit" class="btn btn-info" value="Save">
                            </div>
                        </div>
                    </div>
                </form>
                

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<script>
    CKEDITOR.replace('description');
</script>
<script type="text/javascript">
    $(document).on('submit','#submitAnnouncement',function(e){
        e.preventDefault();
        var formData=new FormData($(this)[0]);
        console.log(formData);
        $.ajax({
            url:"<?=base_url('Announcement/addAnnouncement')?>",
            type:"post",
            cache:false,
            contentType:false,
            processData:false,
            data:formData,
            success:function(response){
                // console.log(response);
                response=JSON.parse(response);
                if(response.code==1){
                    swal("Good job!", response.msg, "success");
                }else{
                    swal("Ooops!", response.msg, "warning");
                }
                
            }
        })
    });

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
</style>