<?php
//This script will handle login
session_start();
require('library/php-excel-reader/excel_reader2.php');
require('library/SpreadsheetReader.php');
require_once "config.php";
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>PHP login system!</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">A.C.G Inspection Pvt. Ltd.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Create Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="welcome.php">Register</a>
        </li>





      </ul>
    </div>
  </nav>

  <div class="container mt-4">
    <h3>Add Project:</h3>
    <hr>
    <h5>Fill either form or add excel file </h5>
    <form method="POST" action="excelUpload.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="Fileservice1">Excel file</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
      <div class="form-group">
			<button type="submit" name="Submit" class="btn btn-success">Upload</button>
		  </div>
      
		
    </form>
    <h5>Or</h5>
    <form>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="sonumber">SO Number</label>
          <input type="text" class="form-control" id="sonumber">
        </div>
        <div class="form-group col-md-4">
          <label for="dateservice">Date</label>
          <input type="date" class="form-control" id="dateservice">
        </div>
        <div class="form-group col-md-4">
          <label for="installationcomplete">Installation Complete</label>
          <input type="text" class="form-control" id="installationcomplete">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="machinedetails">Machine details</label>
          <input type="text" class="form-control" id="machinedetails">
        </div>
        <div class="form-group col-md-4">
          <label for="serialnumber">Serial Number</label>
          <input type="text" class="form-control" id="serialnumber">
        </div>
        <div class="form-group col-md-4">
          <label for="customername">Customer Name</label>
          <input type="text" class="form-control" id="customername">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="location">Location</label>
          <input type="text" class="form-control" id="location">
        </div>
        <div class="form-group col-md-4">
          <label for="region">Region</label>
          <input type="text" class="form-control" id="region">
        </div>
        <div class="form-group col-md-4">
          <label for="ponumber">PO Number</label>
          <input type="text" class="form-control" id="ponumber">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="ressubassembly">Res Subassembly</label>
          <input type="text" class="form-control" id="ressubassembly">
        </div>
        <div class="form-group col-md-4">
          <label for="resassembly">Res Assembly</label>
          <input type="text" class="form-control" id="resassembly">
        </div>
        <div class="form-group col-md-4">
          <label for="resqa">Res QA</label>
          <input type="resqa" class="form-control" id="resqa">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="resdispatch">Res Dispatch</label>
          <input type="text" class="form-control" id="resdispatch">
        </div>
        <div class="form-group col-md-4">
          <label for="invoicedate">Invoice Date </label>
          <input type="date" class="form-control" id="invoicedate">
        </div>
        <div class="form-group col-md-4">
          <label for="invoicenumber">Invoice Number</label>
          <input type="text" class="form-control" id="invoicenumber">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="dispatchfile">Dispatch file</label>
          <input type="file" class="form-control" id="dispatchfile">
        </div>
        <div class="form-group col-md-4">
          <label for="remarks">Remarks</label>
          <input type="text" class="form-control" id="remarks">
        </div>
        <div class="form-group col-md-4">
          <label for="incoterms">Incoterms</label>
          <input type="text" class="form-control" id="incoterms">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="sodate">SO Date</label>
          <input type="date" class="form-control" id="sodate">
        </div>
        <div class="form-group col-md-4">
          <label for="podate">PO date</label>
          <input type="date" class="form-control" id="podate">
        </div>
        
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>





  </div>

    </form>

    

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>