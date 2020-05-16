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
  </head>

  <body style="background-color: rgba(50, 50, 50, 0.1);">
    <div class="container-fluid" >
      <div class="row m-4 border border-dark  bg-white">
      	   <div class="col-md-12 mt-3 px-0"> <strong class="pl-3">Manage Salary</strong>       <hr class="border-primary " style="border: 1px solid">   </div>
       
        <div class="col-md-12 text-center" style="display: flex; justify-content: center;">
          <form class="form-inline mt-2 " action="#">
            <label for=""><strong>Select Department </strong></strong><span class="text-danger">* </span></label>
            <div class="input-group-prepend ml-5" >
            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">
            Select Department 
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">IT/ Collaborative</a>
       
            </div>
          </div>
            <button class="btn btn-primary ml-5" style="border-radius: unset;">Go</button>
          </form>
        </div>
       
        <div class="table-responsive mt-5">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Employee Name</th>
              <th>Designation</th>
              <th>Hourly</th>
              <th>Monthly</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>Jonathan Tornil Grasa</td>
              <td>Head Of Collaborative</td>
              <td><input type="checkbox"><select><option>Select Hourly Grade</option></select></td>
              <td><input type="checkbox"><select><option>Select Hourly Grade</option></select></td>
            </tr>
            <tr>
              <td>Ivan Corbero</td>
            <td>  Administrator</td>
            <td><input type="checkbox"><select><option>Select Hourly Grade</option></select></td>
            <td><input type="checkbox"><select><option>Select Hourly Grade</option></select></td>
            </tr>
            <tr>
              <td>Bertrand Lagarde</td>
            <td>  VIE</td>
            <td><input type="checkbox"><select><option>Select Hourly Grade</option></select></td>
            <td><input type="checkbox"><select><option>Select Hourly Grade</option></select></td>
            </tr>
            <tr>
              <td>Christelle Saliou</td>
            <td>  Coordinator</td>
            <td><input type="checkbox"><select><option>Select Hourly Grade</option></select></td>
            <td><input type="checkbox"><select><option>Select Hourly Grade</option></select></td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>     <button class="btn btn-primary m-4  "style="float: right; width: 20%; border-radius: unset;">Update</button>
    </div>
  </body>
</html>
