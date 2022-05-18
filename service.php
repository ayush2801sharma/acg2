<?php
//This script will handle login
session_start();
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
    <form>
      <div class="form-group">
        <label for="Fileservice1">Excel file</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
    </form>
    <h5>Or</h5>
    <form>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="sonumber">SO Number</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="customername">Customer name</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="machinesrno">Machine Sr. no.</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="serialnumber">Serial Number</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="location">location</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="ponumber">PO Number</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="machinetype">Machine type</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="macid">MAC ID</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="controller">Controller</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="process">Process</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="motherboard">Mother Board</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="harddisk">Hard disk</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="ram">RAM</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="sdioversion">SDIO version</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="software">Software</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="firmware">Firmware</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="language">Language</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="operatingsystem">Operating system</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="regulatory">Regulatory</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="serversoftwareversion">Server Software Version</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="database">Database</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="numberportal">Number Portal</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="camera1">Camera 1</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="camera2">Camera 2</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="printerconfiguration">Printer Configuration</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="scannerconfiguration">Scanner Configuration</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="nilicense">NI License</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="microsoftloicense">Microsoft License</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="oslicense">O.S license</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="deptsubassembly">Dept Sub Assembly</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="startdatesubassembly">Start Date Subassembly</label>
          <input type="date" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="enddatesubassembly">End Date Subassembly</label>
          <input type="date" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="tatsubassembly">TAT Sub Assembly</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="responsiblesubassembly">Responsible Subassembly</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="deptquality">Dept quality</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="startdatequality">Start Date Quality</label>
          <input type="date" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="responsibleassembly">Responsible Assembly</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="invoicedate">Invoice Date</label>
          <input type="date" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="invoicenumber">Invoice Number</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <form>
          <div class="form-group">
            <label for="dispatchfile">Dispatch file</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
        </form>
        <div class="form-group col-md-4">
          <label for="incoterms">Incoterms</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-2">
          <label for="sodate">SO Date</label>
          <input type="date" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-2">
          <label for="podate">PO Date</label>
          <input type="date" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="enddatequality">End Date Quality</label>
          <input type="date" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="deptquality">Dept quality</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="tatquality">TAT Quality</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="responsiblequality">Responsible Quality</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="deptdispatch">Dept Dispatch</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="startdatedispatch">Start Date Dispatch</label>
          <input type="date" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="enddatedispatch">End Date Dispatch</label>
          <input type="date" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="tatdispatch">TAT Dispatch</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="responsibledispatch">Responsible Dispatch</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="form-group col-md-4">
        <label for="remarksservice">Remarks</label>
        <input type="text" class="form-control" id="inputPassword4">
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
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