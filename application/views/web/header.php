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
  <link href="<?=base_url('assets_web/')?>css/style.css" rel="stylesheet">
  <style>
    .nav-item
    {
       padding-left:20px !important;
    }
    .img-style
    {
       width:200px;
       height:200px;
       margin:0px auto;
       border-radius:50%;
    }
    .logo-size
    {
       height:55px;
    }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <nav class="navbar navbar-expand-lg navbar-light w-100 h-color">
      <div class="container p-0">
        <div class="row w-100">
          <div class="col-md-5">
            <a href="index.php" class="text-decoration-none"><img src="<?=base_url('assets_web/')?>image/logo.png" class="img-fluid logo-size"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <div class=" col-md-6 mt-1">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link menu-text" href="index.php">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link menu-text" href="plans.php">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link menu-text" href="features.php">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link menu-text" href="plans.php">Plans</a>
                </li>
                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li> -->
              </ul>
            </div>
          </div>
          <div class="col-md-1 mt-2">
             <li class="nav-item dropdown float-right" style="list-style: none">
                  <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='fa fa-user-circle' style='font-size:24px;color:white'></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="login.php">Login</a>
                    <a class="dropdown-item" href="signup.php">Signup</a>
                  </div>
                </li>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>
