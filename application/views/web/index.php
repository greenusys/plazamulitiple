
<div class="container-fluid bg-light">
   <div class="row p-5">
      <div class="col-md-7  col-7 mt-4">
        <h1 class="font-weight-bold">Trust your sales to the CRM trusted by the world</h1>
        <p class="text mt-4">PLAZA CRM empowers a global network of over 150,000 businesses in 180 countries to convert more leads, engage with customers, and grow their revenue. Transform your business with the world’s favorite customer relationship management software.</p>
      </div>
      <div class="offset-md-1 col-md-4  col-5 border-0 card shadow p-4" id="form">
        <h5 class="text-center">Get started with your 15-day free trial</h5>
        <form id="registerNew">
          <input type="text" name="nam" placeholder="Enter Your Name" class="form-control mt-3">
          <input type="text" name="compnam" placeholder="Company Name" class="form-control mt-3">
           <input type="text" name="eml" placeholder="Email" class="form-control mt-2">
            <input type="text" name="pswd" placeholder="Password" class="form-control mt-2">
             <input type="number" name="nam" placeholder="Phone Number" class="form-control mt-2">
             <button class="butn text-white font-weight-bold w-100 border-0 shadow p-2 rounded mt-4">SUBMIT</button>
        </form>
      </div>
      <script type="text/javascript">
        $(document).on('submit','#registerNew',function(e){
          var formData=new FormData($(this)[0]);
          e.preventDefault();
          // alert("EEEEE");
          $.ajax({
            url:"<?=base_url('Web/registerNewCompany')?>",
            type:"post",
            cache:false,
            contentType:false,
            processData:false,
            data:formData,
            success:function(response){
                      console.log(response);
                  }
          })
        });
      </script>
   </div>
   <div class="row mt-2 card">
      <img src="<?=base_url('assets_web/')?>image/banner.jpg" class="img-fluid">
   </div>
   <div class="row mt-3 p-5">
      <div class="offset-md-1 col-md-5 col-6">
          <div class="card border click p-4">
            <h5 class="text-center font-weight-bold">Constellation Research's Best Enterprise Software Vendor</h5>
            <p class=" mt-3">PLAZA CRM has been recognized for its innovation, relentless focus on re-invention, and an ever-expanding portfolio of enterprise-class business applications.</p>
          </div>
      </div>
      <div class="col-md-5 col-6">
          <div class="card border click p-4">
              <h5 class="text-center font-weight-bold">Winner of PCMag's Business Choice Awards for CRM</h5>
              <p class=" mt-3">According to the PCMag survey, PLAZA CRM is the most recommended CRM and the only one with a positive NPS score among other leading CRM vendors.</p>
          </div>
      </div>
   </div>
</div>
<div class="container-fluid h-color p-5">
    <div class="row mt-5">
       <div class="col-md-6 col-6">
          <h2 class="font-weight-bold text-white">Connect with your customers <br>wherever they are</h2>
          <ul class="list-unstyled mt-4">
             <li class="text-white"><i class="fa fa-check-circle" style="color:white"></i>  Reach customers across every channel: telephone, email, live chat, and social media</li>
             <li class="text-white mt-3"><i class="fa fa-check-circle" style="color:white"></i>  Measure the effectiveness of your customer communication and find the best time and channel to reach out to your customers</li>
             <li class="text-white mt-3"><i class="fa fa-check-circle" style="color:white"></i>  Get real-time notifications when customers interact with your business</li>
          </ul>
       </div>
       <div class="offset-md-1 col-md-5 col-6">
         <img src="<?=base_url('assets_web/')?>image/img2.png" class="img-fluid">
       </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
          <div class="card border-0 shadow">
            <h6 class="text-center font-weight-bold bg-light p-1">Telephony</h6>
            <img src="<?=base_url('assets_web/')?>image/phone.jpg" class="img-fluid rounded">
          </div>
        </div>
        <div class="col-md-3">
          <div class="card border-0 shadow">
            <h6 class="text-center font-weight-bold bg-light p-1 ">Email</h6>
            <img src="<?=base_url('assets_web/')?>image/email.jpg" class="img-fluid rounded">
          </div>
        </div>
        <div class="col-md-3">
          <div class="card border-0 shadow">
            <h6 class="text-center font-weight-bold bg-light p-1">Live Chat</h6>
            <img src="<?=base_url('assets_web/')?>image/livechat.png" class="img-fluid rounded">
          </div>
        </div>
        <div class="col-md-3">
          <div class="card border-0 shadow">
            <h6 class="text-center font-weight-bold bg-light p-1">Social</h6>
            <img src="<?=base_url('assets_web/')?>image/social2.jpg" class="img-fluid rounded">
          </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-light p-5">
   <div class="row mt-5">
       <div class="col-md-6 col-6 mt-5">
          <h2 class="font-weight-bold">Save more time with<br> automation</h2>
          <ul class="list-unstyled mt-4">
             <li><i class="fa fa-check-circle"></i>  Automate every aspect of your business and cut out time-intensive, repetitive tasks</li>
             <li class="mt-3"><i class="fa fa-check-circle"></i>  Streamline your lead nurturing process and make the most of every incoming lead</li>
             <li class="mt-3"><i class="fa fa-check-circle"></i>  Trigger instant actions, stay on top of activities, and follow up better with workflows</li>
          </ul>
       </div>
       <div class="offset-md-1 col-md-5 col-6">
         <img src="<?=base_url('assets_web/')?>image/img1.jpg" class="img-fluid shadow">
       </div>
    </div>
    <div class="top card p-5 border-0">
        <h2 class="font-weight-bold text-center">Join 150,000+ businesses who sell smarter,<br> better and faster with PLAZA CRM</h2>
        <div class="row mt-3">
          <div class="offset-md-3 col-md-3 col-6">
             <button class=" p-2 rounded border-0 text-white font-weight-bold butn1" id="sign">SIGN UP FOR FREE</button>
          </div>
          <div class="col-md-3 col-6">
              <a href="features.php"><button class=" p-2 rounded  font-weight-bold butn2"> SEE ALL FEATURES</button></a>
          </div>
        </div>
    </div>  
</div>
<div class="container-fluid h-color p-5">
   <div class="row">
      <div class="col-md-3">
        <h2 class="font-weight-bold text-white">Why choose PLAZA CRM?</h2>
      </div>
      <div class="col-md-4 line">
        <ul class="list-unstyled mt-4">
          <li class="text-white"><i class="fa fa-check-circle"></i>  Simple, straightforward user interface with a minimal learning curve</li>
          <li class="mt-3 text-white"><i class="fa fa-check-circle"></i>  Flexible, month-to-month contracts supported by transparent pricing plans</li>
          <li class="mt-3 text-white"><i class="fa fa-check-circle"></i>  Deployment, consultation, onboarding, and training programs to help you get started smoothly</li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="list-unstyled mt-4">
          <li class="text-white"><i class="fa fa-check-circle"></i>  Migration wizard to easily import data from spreadsheets or other CRM systems</li>
          <li class="mt-3 text-white"><i class="fa fa-check-circle"></i>  Fully extensible developer platform that facilitates tighter integration of CRM with external systems and applications</li>
          <li class="mt-3 text-white"><i class="fa fa-check-circle"></i>  Sell on the go with our award-winning CRM apps for both iOS and Android</li>
        </ul>
      </div>
   </div>
   <div class="row card p-4 mt-5 border-0">
    <h2 class="font-weight-bold text-center">Testimonials for <b>PLAZA CRM</b></h2>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active bg-light mt-4">
            <div class="row">
              <div class="col-md-3">
                  <img src="<?=base_url('assets_web/')?>image/a3.png" class="d-block img-style" alt="...">
               </div>
               <div class="col-md-9">
                 <p class="mt-4">“From using spreadsheets to PLAZA CRM, we have managed to capture data in a more versatile way and have also minimized our sales cycle. It gives us more visibility of how our business is moving and makes us much more efficient."</p>
                 <h6 class="font-weight-bold">Anand Goyal,</h6>
                 <h6>Program Leader - Service Provider Network,</h6>
                 <h6>Amazon India</h6>
               </div>
               
            </div>
          </div>
          <div class="carousel-item bg-light mt-4">
             <div class="row">
              <div class="col-md-3">
                  <img src="<?=base_url('assets_web/')?>image/a3.png" class="d-block img-style" alt="...">
               </div>
               <div class="col-md-9">
                 <p class="mt-4">“From using spreadsheets to PLAZA CRM, we have managed to capture data in a more versatile way and have also minimized our sales cycle. It gives us more visibility of how our business is moving and makes us much more efficient."</p>
                 <h6 class="font-weight-bold">Anand Goyal,</h6>
                 <h6>Program Leader - Service Provider Network,</h6>
                 <h6>Amazon India</h6>
               </div>
              </div>
          </div>
          <div class="carousel-item bg-light mt-4">
            <div class="row">
              <div class="col-md-3">
                  <img src="<?=base_url('assets_web/')?>image/a3.png" class="d-block img-style" alt="...">
               </div>
               <div class="col-md-9">
                 <p class="mt-4">“From using spreadsheets to PLAZA CRM, we have managed to capture data in a more versatile way and have also minimized our sales cycle. It gives us more visibility of how our business is moving and makes us much more efficient."</p>
                 <h6 class="font-weight-bold">Anand Goyal,</h6>
                 <h6>Program Leader - Service Provider Network,</h6>
                 <h6>Amazon India</h6>
               </div>
               
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="capturerousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
   </div>
</div>
<div class="container-fluid bg-light p-4">
    <div class="row">
       <div class="offset-md-1 col-md-4">
          <img src="<?=base_url('assets_web/')?>image/img3.png" class="img-fluid" style="height:350px">
       </div>
       <div class="offset-md-1 col-md-5 mt-4">
         <h2 class="font-weight-bold text-center mt-5">Improved Sales. Lasting Relationships. Faster Growth.</h2>
        <div class="row mt-4">
          <div class=" col-md-5 col-6">
             <button class=" p-3 rounded border-0 text-white font-weight-bold butn1" id="sign1">SIGN UP FOR FREE</button>
          </div>
          <div class="col-md-7 col-6">
              <a href="plans.php"><button class=" p-3 rounded  font-weight-bold butn2"> SEE PLANS AND PRICING</button></a>
          </div>
        </div>
       </div>
    </div>
</div>

<script>
  $(document).ready(function (){
    $("#sign").click(function (){
       $('html, body').animate({
          scrollTop: $("#form").offset().top
      }, 2000);
    });
  });
</script>

<script>
  $(document).ready(function (){
    $("#sign1").click(function (){
       $('html, body').animate({
          scrollTop: $("#form").offset().top
      }, 2000);
    });
  });
</script>
