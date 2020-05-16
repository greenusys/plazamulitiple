<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<style>
  .image
  { 
      background: url("<?=base_url('assets/img/extra/image3.jpg')?>") no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
  }
  .top-margin
  {
      margin-top:200px;
  }
  .style
  {
    color:#5265f5;

  }
  .font-style
  {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 65px;
      color: #140f58;
  }
  .butn
  {
     background-color:#6777ef;
     color:white;
     font-size:20px;

  }
   .instal-butn
  {
     background-color: #6777ef;
    color: white;
    font-size: 25px;
    height: 65px;

  }
</style>
<body class="image">
    <div class="container">
      <div class="row top-margin">
        <div class="card shadow p-5 bg-white w-50 m-auto" id="card1">
            <div class="row">
              <?php
              if ($this->session->flashdata('item')) {
               echo "<div class='alert-info alert'>".$this->session->flashdata('item')."</div>";
              }
              ?>
              <h1 class="font-weight-bold shadow text-center p-2 font-style w-100">PLAZACRM</h1>
            </div>
            <div class="row mt-5">
              <button class="butn  m-auto font-weight-bold shadow" id="next1">NEXT &nbsp; <i class="fa fa-arrow-right"></i></button>
            </div>
        </div>

        <div class="card shadow p-5 bg-white w-50 m-auto" id="card2" style="display:none">
              <form method="POST" accept-charset="UTF-8" enctype="multipart/form-data" action="<?=base_url('Installation/add_install')?>">
                   <div class="row card shadow p-3">
                    <div class="col-md-12 straight">
                      <div class="form-group">
                        <div class="row ">
                          <div class=" col-sm-3">
                            <label for="exampleInputEmail1" class=" label-style ml-3">Time Zone</label>
                          </div>
                          <div class="col-sm-8">
                             <select class=" form-control" required="" name="timezone">
                             <?php
                              $tzlist = DateTimeZone::listIdentifiers(DateTimeZone::ALL);
                              foreach($tzlist as $value)
                              {
                                echo "<option value=". $value .">". $value ."</option>";
                              }
                              ?>
                              </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class=" col-sm-3">
                            <label for="exampleInputEmail1" class=" label-style ml-4">Currency</label>
                          </div>
                          <div class="col-sm-8">
                             <select class=" form-control" required="" name="currency">
                              <?php
$currency_symbols = array(
  'AED' => '&#1583;.&#1573;', // ?
  'AFN' => '&#65;&#102;',
  'ALL' => '&#76;&#101;&#107;',
  'AMD' => '',
  'ANG' => '&#402;',
  'AOA' => '&#75;&#122;', // ?
  'ARS' => '&#36;',
  'AUD' => '&#36;',
  'AWG' => '&#402;',
  'AZN' => '&#1084;&#1072;&#1085;',
  'BAM' => '&#75;&#77;',
  'BBD' => '&#36;',
  'BDT' => '&#2547;', // ?
  'BGN' => '&#1083;&#1074;',
  'BHD' => '.&#1583;.&#1576;', // ?
  'BIF' => '&#70;&#66;&#117;', // ?
  'BMD' => '&#36;',
  'BND' => '&#36;',
  'BOB' => '&#36;&#98;',
  'BRL' => '&#82;&#36;',
  'BSD' => '&#36;',
  'BTN' => '&#78;&#117;&#46;', // ?
  'BWP' => '&#80;',
  'BYR' => '&#112;&#46;',
  'BZD' => '&#66;&#90;&#36;',
  'CAD' => '&#36;',
  'CDF' => '&#70;&#67;',
  'CHF' => '&#67;&#72;&#70;',
  'CLF' => '', // ?
  'CLP' => '&#36;',
  'CNY' => '&#165;',
  'COP' => '&#36;',
  'CRC' => '&#8353;',
  'CUP' => '&#8396;',
  'CVE' => '&#36;', // ?
  'CZK' => '&#75;&#269;',
  'DJF' => '&#70;&#100;&#106;', // ?
  'DKK' => '&#107;&#114;',
  'DOP' => '&#82;&#68;&#36;',
  'DZD' => '&#1583;&#1580;', // ?
  'EGP' => '&#163;',
  'ETB' => '&#66;&#114;',
  'EUR' => '&#8364;',
  'FJD' => '&#36;',
  'FKP' => '&#163;',
  'GBP' => '&#163;',
  'GEL' => '&#4314;', // ?
  'GHS' => '&#162;',
  'GIP' => '&#163;',
  'GMD' => '&#68;', // ?
  'GNF' => '&#70;&#71;', // ?
  'GTQ' => '&#81;',
  'GYD' => '&#36;',
  'HKD' => '&#36;',
  'HNL' => '&#76;',
  'HRK' => '&#107;&#110;',
  'HTG' => '&#71;', // ?
  'HUF' => '&#70;&#116;',
  'IDR' => '&#82;&#112;',
  'ILS' => '&#8362;',
  'INR' => '&#8377;',
  'IQD' => '&#1593;.&#1583;', // ?
  'IRR' => '&#65020;',
  'ISK' => '&#107;&#114;',
  'JEP' => '&#163;',
  'JMD' => '&#74;&#36;',
  'JOD' => '&#74;&#68;', // ?
  'JPY' => '&#165;',
  'KES' => '&#75;&#83;&#104;', // ?
  'KGS' => '&#1083;&#1074;',
  'KHR' => '&#6107;',
  'KMF' => '&#67;&#70;', // ?
  'KPW' => '&#8361;',
  'KRW' => '&#8361;',
  'KWD' => '&#1583;.&#1603;', // ?
  'KYD' => '&#36;',
  'KZT' => '&#1083;&#1074;',
  'LAK' => '&#8365;',
  'LBP' => '&#163;',
  'LKR' => '&#8360;',
  'LRD' => '&#36;',
  'LSL' => '&#76;', // ?
  'LTL' => '&#76;&#116;',
  'LVL' => '&#76;&#115;',
  'LYD' => '&#1604;.&#1583;', // ?
  'MAD' => '&#1583;.&#1605;.', //?
  'MDL' => '&#76;',
  'MGA' => '&#65;&#114;', // ?
  'MKD' => '&#1076;&#1077;&#1085;',
  'MMK' => '&#75;',
  'MNT' => '&#8366;',
  'MOP' => '&#77;&#79;&#80;&#36;', // ?
  'MRO' => '&#85;&#77;', // ?
  'MUR' => '&#8360;', // ?
  'MVR' => '.&#1923;', // ?
  'MWK' => '&#77;&#75;',
  'MXN' => '&#36;',
  'MYR' => '&#82;&#77;',
  'MZN' => '&#77;&#84;',
  'NAD' => '&#36;',
  'NGN' => '&#8358;',
  'NIO' => '&#67;&#36;',
  'NOK' => '&#107;&#114;',
  'NPR' => '&#8360;',
  'NZD' => '&#36;',
  'OMR' => '&#65020;',
  'PAB' => '&#66;&#47;&#46;',
  'PEN' => '&#83;&#47;&#46;',
  'PGK' => '&#75;', // ?
  'PHP' => '&#8369;',
  'PKR' => '&#8360;',
  'PLN' => '&#122;&#322;',
  'PYG' => '&#71;&#115;',
  'QAR' => '&#65020;',
  'RON' => '&#108;&#101;&#105;',
  'RSD' => '&#1044;&#1080;&#1085;&#46;',
  'RUB' => '&#1088;&#1091;&#1073;',
  'RWF' => '&#1585;.&#1587;',
  'SAR' => '&#65020;',
  'SBD' => '&#36;',
  'SCR' => '&#8360;',
  'SDG' => '&#163;', // ?
  'SEK' => '&#107;&#114;',
  'SGD' => '&#36;',
  'SHP' => '&#163;',
  'SLL' => '&#76;&#101;', // ?
  'SOS' => '&#83;',
  'SRD' => '&#36;',
  'STD' => '&#68;&#98;', // ?
  'SVC' => '&#36;',
  'SYP' => '&#163;',
  'SZL' => '&#76;', // ?
  'THB' => '&#3647;',
  'TJS' => '&#84;&#74;&#83;', // ? TJS (guess)
  'TMT' => '&#109;',
  'TND' => '&#1583;.&#1578;',
  'TOP' => '&#84;&#36;',
  'TRY' => '&#8356;', // New Turkey Lira (old symbol used)
  'TTD' => '&#36;',
  'TWD' => '&#78;&#84;&#36;',
  'TZS' => '',
  'UAH' => '&#8372;',
  'UGX' => '&#85;&#83;&#104;',
  'USD' => '&#36;',
  'UYU' => '&#36;&#85;',
  'UZS' => '&#1083;&#1074;',
  'VEF' => '&#66;&#115;',
  'VND' => '&#8363;',
  'VUV' => '&#86;&#84;',
  'WST' => '&#87;&#83;&#36;',
  'XAF' => '&#70;&#67;&#70;&#65;',
  'XCD' => '&#36;',
  'XDR' => '',
  'XOF' => '',
  'XPF' => '&#70;',
  'YER' => '&#65020;',
  'ZAR' => '&#82;',
  'ZMK' => '&#90;&#75;', // ?
  'ZWL' => '&#90;&#36;',
);
foreach ($currency_symbols as $key => $value) {
                              ?>
                                <option value="<?=$value?>"><?=$key?></option>
                              <?php } ?>
                              </select>
                          </div>
                        </div>
                      </div>
                   </div>
                </div>
            
            <div class="row mt-5">
              <span class="butn  m-auto font-weight-bold shadow" id="next2">NEXT &nbsp; <i class="fa fa-arrow-right"></i></span>
            </div>
        </div>

        <div class="card shadow p-5 bg-white w-50 m-auto" id="card3" style="display:none">
                   <div class="row card shadow p-3">
                    <div class="col-md-12 straight">
                      <div class="form-group">
                        <div class="row ">
                          <div class=" col-sm-3">
                            <label for="exampleInputEmail1" class=" label-style ml-3">Logo</label>
                          </div>
                          <div class="col-sm-8">
                               <img id="blah" src="#" alt="your image" class="border">
                               <input type='file' name="logo" required="" onchange="readURL(this);" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class=" col-sm-3">
                            <label for="exampleInputEmail1" class=" label-style ml-4">Language</label>
                          </div>
                          <div class="col-sm-8">
                             <select class=" form-control" required="" name="language">
                                <option value="English"> English</option>
                              </select>
                          </div>
                        </div>
                      </div>
                   </div>
                </div>
            <div class="row mt-5">
              <button class="butn  m-auto font-weight-bold shadow" type="submit">Start &nbsp; <i class="fa fa-arrow-right"></i></button>
            </div>
          </form>
        </div>

        <div class="card shadow p-5 bg-white w-50 m-auto" id="card4" style="display:none">
            <div class="row">
              <a class="instal-butn  m-auto font-weight-bold shadow w-50 border-0" href="<?=base_url('Login')?>">START &nbsp; <i class="fa fa-download"></i></a>
            </div>
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

<script>
    $(document).ready(function(){
      $("#next1").click(function(){
      $("#card2").show();
      $("#card1").hide();
      $("#card3").hide();
      $("#card4").hide();
    });
  });
</script>

<script>
    $(document).ready(function(){
      $("#next2").click(function(){
      $("#card2").hide();
      $("#card1").hide();
      $("#card3").show();
      $("#card4").hide();
    });
  });
</script>

<script>
    $(document).ready(function(){
      $("#next3").click(function(){
      $("#card2").hide();
      $("#card1").hide();
      $("#card3").hide();
      $("#card4").show();
    });
  });
</script>


</body>
</html>

