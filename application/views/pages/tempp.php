<div class="card mt-2">
    <div class="card-header" data-toggle="collapse" data-target="#collapse<?=$week?>" aria-expanded="true">     
        <span class="title pl-3">Week : <?=$week?></span>
        <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
    </div>

    <div id="collapse<?=$week?>" clock_id="" class="collapse <?=$show?>" data-parent="#accordionExample">
        <div class="card-body">
            <table class=" table table-stripped table-bordered">
                <thead>
                    <tr>
                        <th>Clock In Time</th>
                        <th>Clock Out Time</th>
                        <th>IP Address</th>
                        <th>Hours</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td colspan="5"><?= $keyd ?></td>
                        </tr>
                        <tr>
                        <td>08:30</td>
                        <td>08:31</td>
                        <td>103.99.15.182</td>
                        <td>0 : 0 m</td>
                        <td>
                                <div class="">
                                    <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                    <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                    <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                    </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>















<div id="collapse<?=$week?>" clock_id="" class="collapse <?=$show?>" data-parent="#accordionExample">
    <div class="card-body">
    <table class=" table table-stripped table-bordered">
        <thead>
            <tr>
                <th>Clock In Time</th>
                <th>Clock Out Time</th>
                <th>IP Address</th>
                <th>Hours</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($vtimeinfo->attendance_status == 1) {
                $this->db->where(array('attendance_id' => $vtimeinfo->attendance_id));
                $timeinfo = $this->db->get('tbl_clock')->result();
                foreach ($timeinfo as $mytime){

                    ?>
                        <tr>
                        <td colspan="5"><?= $keyd ?></td>
                        </tr>
                        <tr>
                        <td>08:30</td>
                        <td>08:31</td>
                        <td>103.99.15.182</td>
                        <td>0 : 0 m</td>
                        <td>
                                <div class="">
                                    <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                    <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                    <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                    </div>
                        </td>
                        </tr>

                    <?php
                }
                }else if ($vtimeinfo->attendance_status == 0){
                echo 'Absent';
                }
                elseif ($vtimeinfo->attendance_status == 3){
                echo 'On leave';
                }
            ?>
            

            
        </tbody>
    </table>
    </div>
</div>