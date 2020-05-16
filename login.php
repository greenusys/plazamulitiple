<!DOCTYPE html>
<html lang="en">
<head>
  <title>Plazacrm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link href="css/style.css" rel="stylesheet">
  <style>
    .backform-color
    {
       background: linear-gradient(to bottom, #6777ef 42%, #6600ff 100%);
       height:630px;
    }
    .logo-size
    {
       height:55px;
    }
    @media only screen and (max-width: 600px)
    {
       .backform-color
       {
           background: linear-gradient(to bottom, #6777ef 42%, #6600ff 100%);
          height:auto;
       }
    }
  </style>
</head>
<body class="backform-color">
  <div class="container-fluid mt-5">
    <div class="card shadow m-auto  w-75 p-5 rounded-0">
       <div class="row">
           <div class="col-md-8 border-right">
              <img src="image/logo.png" class="img-fluid logo-size">
              <hr class="mt-1">
              <h4 class="font-weight-bold mt-4 ml-3">Sign in</h4>
              <h5 class="ml-3">to access CRM</h5>
              <form class="mt-5">
                  <input type="text" name="eml" placeholder="Email address or mobile number" class="form-control p-4 ml-3 w-75 bg-light">
                  <input type="Password" name="pswd" placeholder="Enter Your Password" class="form-control p-4 ml-3 w-75 bg-light mt-3">
                  <button class="butn text-center text-white font-weight-bold p-3 border-0 rounded mt-5 w-75 ml-3">Login</button>
              </form>
           </div>
           <div class="col-md-4">
              <img src="image/img2.png" class="img-fluid">
              <h6 class="font-weight-bold text-center mt-4">KEEP YOUR ACCOUNT SECURE</h6>
              <hr>
              <h6 class="text-center">PLAZACRM is our new in-house multi-factor authentication app. Shield your PLAZACRM account now.</h6>
           </div>
       </div>
    </div>
  </div>
</body>
</html>