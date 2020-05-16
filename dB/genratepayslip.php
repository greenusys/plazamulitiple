<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Manage Salary</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body style="background-color: rgba(50, 50, 50, 0.1);">
    <div class="container-fluid" >
      <div class="row m-4 border border-dark py-4 px-0 bg-white">
       <div class="col-md-12 px-0"> <strong class="pl-3">Generate Payslip</strong>       <hr class="border-primary " style="border: 1px solid">   </div>
       


        <div class="col-md-12 text-center d-flex justify-content-center" >
          <form class="form-inline mt-2" action="#">
            <label for=""><strong>Select Department </strong><span class="text-danger">* </span></label>
            <div class="input-group-prepend ml-3" >
            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">
            Select Department 
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">IT/ Collaborative</a>
       
            </div>
          </div>
           
          </form>
        </div>
        <div class="col-md-12 text-center d-flex justify-content-center" >
          <form class="form-inline mt-2" action="#">
            <label for=""><strong>Select Month</strong><span class="text-danger">* </span></label>
            <div class="input-group-prepend ml-5" >
             <input type="date w-100" name="dates">
            </div>
            <br>
          </form>
         
        </div> 
        <div class="text-center w-100"><button class="mt-2 btn btn-primary ml-5 rounded-0" style="width: 30%">Go</button></div>



      </div> 
        <div class="container-fluid" >
      <div class="row m-2 border border-dark  px-0 py-4 bg-white">
         <div class="col-md-12 px-0"> <strong class="pl-3">Generate Payslip</strong> <span class="text-danger">for February 2020 </span>
          <hr class="border-primary " style="border: 1px solid"> </div>
        <div class="col-md-6"><span class="bg-danger p-2"><i class="fa fa-print text-white" aria-hidden="true"></i></span>
              <span class="bg-success p-2 text-white"><i class="fa fa-print" aria-hidden="true"></i> Selected</span>
              <span class="bg-primary p-2 text-white "><i class="fa fa-file-excel-o"> </i></span>
              <span class="bg-primary p-2 text-white"><i class="fa fa-file-excel-o"> </i></span>
              <span class="bg-primary p-2 text-white"><i class="fa fa-file-pdf-o"> </i></span>
              
        </div> 
        <div class="col-md-6 text-right">
          Search: <input type="search" name="">
        </div>

            <div class="table-responsive mt-5">

            <table class="table table-striped table-bordered ">

            <thead>
            <tr >
              <th>EMP ID</th>
              <th>Name</th>
              <th>Salary Type</th>
              <th>Basic Salary</th>
              <th>Net Salary</th>
              <th>Details</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center" colspan="8">
                  No Data Available
                </td>
              </tr>
            </tbody>
           
         
          </table>
        </div>
      </div>
    </div>

    </div>
  </body>
</html>
