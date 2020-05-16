 <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <!-- Step 2 - Include the fusion theme -->
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#chart-container").insertFusionCharts({
  type: "spline",
  width: "100%",
  height: "100%",
  dataFormat: "json",
  dataSource: {
    chart: {
      caption: "Average Monthly Temperature in Texas",
      yaxisname: "Average Monthly Temperature",
      anchorradius: "5",
      plottooltext: "Average temperature in $label is <b>$dataValue</b>",
      showhovereffect: "1",
      showvalues: "0",
      numbersuffix: "°C",
      theme: "gammel",
      anchorbgcolor: "#72D7B2",
      palettecolors: "#72D7B2"
    },
    data: [
      {
        label: "Jan",
        value: "1"
      },
      {
        label: "Feb",
        value: "5"
      },
      {
        label: "Mar",
        value: "10"
      },
      {
        label: "Apr",
        value: "12"
      },
      {
        label: "May",
        value: "14"
      },
      {
        label: "Jun",
        value: "16"
      },
      {
        label: "Jul",
        value: "20"
      },
      {
        label: "Aug",
        value: "22"
      },
      {
        label: "Sep",
        value: "20"
      },
      {
        label: "Oct",
        value: "16"
      },
      {
        label: "Nov",
        value: "7"
      },
      {
        label: "Dec",
        value: "2"
      }
    ]
  }
});
});
</script>

        
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card p-2">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>Transaction Report</strong></span> 
                   </div>
                    <!-- <div class="col-md-6 text-right"><button class="btn btn-success rounded-0">Add New</button></div> -->
                </div>
              <div class="p-2">
              <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>From Account</th>
                                <th>To Account</th>
                                <th>Ammount</th>
                                <th>Date</th>
                                <th>Attachment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>Tittle</td>
                              
                                <td>System Architect</td>
                                <td>$320,800</td>
                                <td>2011/04/25</td>
                                <td>61</td>
                               
                                <td>
                                    <div class="">
                                      <a href="" class="sele_staus bg-info p-1 text-white "><span><i class="far fa-edit"></i></span></a>
                                      <span class="sele_staus bg-danger p-1 text-white"><i class="far fa-trash-alt"></i></span>
                                       <span class="sele_staus bg-success p-1 text-white"><i class="far fa-clock"></i></span>
                                    </div>

                                </td>
                            </tr>
                            
                            <tr>
                              <td>Tittle</td>
                              
                                <td>System Architect</td>
                                <td>$320,800</td>
                                <td>2011/04/25</td>
                                <td>61</td>
                               
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
                                <th>From Account</th>
                                <th>To Account</th>
                                <th>Ammount</th>
                                <th>Date</th>
                                <th>Attachment</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
              </div>
            </div>
          </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card p-2">
                <div class="card-header row border-bottom py-1">
                  <div class="col-md-6">
                    <span><strong>Transaction Report</strong></span> 
                   </div>
                    <!-- <div class="col-md-6 text-right"><button class="btn btn-success rounded-0">Add New</button></div> -->
                </div>
              <div class="p-2">
                <div id="chart-container"></div>
              </div>
            </div>
          </div>
          </div>
        </section>
      </div>
