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
                                <th>Date</th>
                                <th>Accounts</th>
                                <th>Type</th>
                                <th>Name/Title</th>
                                <th>Amount</th>
                                <th>Credit</th>
                                <th>Debit</th>
                                <th>Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          foreach ($transaction_report as $key) {
                          ?>
                          <tr>
                            <td><?=$key->date?></td>
                            <td><?=$key->fullname?></td>
                            <td><?=$key->type?></td>
                            <td><?=$key->name?></td>
                            <td><?=$key->amount?></td>
                            <td><?=$key->credit?></td>
                            <td><?=$key->debit?></td>
                            <td><?=$key->total_balance?></td>
                          </tr>
                          <?php
                        }
                          ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Date</th>
                                <th>Accounts</th>
                                <th>Type</th>
                                <th>Name/Title</th>
                                <th>Amount</th>
                                <th>Credit</th>
                                <th>Debit</th>
                                <th>Balance</th>
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
