<?php
//This script will handle login
session_start();

// check if the user is already logged in

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}


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
        <label for="fileqa1">Excel file</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
    </form>
    <h5>Or</h5>
    <form>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="crfid">CRF ID</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="fsid">FS ID</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="jiraid">Jira ID</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="customernameqa">Customer Name</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
          <label for="scopeoftheproject">Scope of the Project</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-4">
          <label for="testscenariostatus">Test Scenario Status</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
      </div>


      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="system">System</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="regulatory">Regulatory</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="numberportal">Number Portal</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="serversoftware">Server Software</label>
            <input type="text" class="form-control" id="inputEmail4">
          </div>
          <div class="form-group col-md-4">
            <label for="nonnavstarsoftware">Non Navstar Software</label>
            <input type="text" class="form-control" id="inputPassword4">
          </div>
          <div class="form-group col-md-4">
            <label for="visionversion">Vision Version </label>
            <input type="text" class="form-control" id="inputPassword4">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="dbscriptversion">DB Script Version</label>
            <input type="text" class="form-control" id="inputEmail4">
          </div>
          <div class="form-group col-md-4">
            <label for="dtechdii">D.Tech DII </label>
            <input type="text" class="form-control" id="inputPassword4">
          </div>
          <div class="form-group col-md-4">
            <label for="navstarsoftware">Navstar Software </label>
            <input type="text" class="form-control" id="inputPassword4">
          </div>
        </div>


        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="plcandhmiversion">PLC and HMI Version</label>
            <input type="text" class="form-control" id="inputEmail4">
          </div>
          <div class="form-group col-md-4">
            <label for="printerinunitstation">Printer in Unit Station</label>
            <input type="text" class="form-control" id="inputPassword4">
          </div>
          <div class="form-group col-md-4">
            <label for="camerainunitstation">Camera in Unit Station</label>
            <input type="text" class="form-control" id="inputPassword4">
          </div>
        </div>


        

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="cpuconfigurationinunitstation">CPU configuration in unit station</label>
            <input type="text" class="form-control" id="inputEmail4">
          </div>
          <div class="form-group col-md-4">
            <label for="printerinintermediatestation">Printer in intermediate station </label>
            <input type="text" class="form-control" id="inputPassword4">
          </div>
          <div class="form-group col-md-4">
            <label for="camerainintermediatestation">Camera in intermediate station </label>
            <input type="text" class="form-control" id="inputPassword4">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="cpuconfigurationinintermediatestation">CPU configuration in intermediate station</label>
            <input type="text" class="form-control" id="inputEmail4">
          </div>
          <div class="form-group col-md-4">
            <label for="printerinlastntermediatestation">Printer in last intermediate station</label>
            <input type="text" class="form-control" id="inputPassword4">
          </div>
          <div class="form-group col-md-4">
            <label for="camerainlastintermediatestation">Camera in last intermediate station</label>
            <input type="text" class="form-control" id="inputPassword4">
          </div>
        </div>


        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="printerinpalletstation">Printer in pallet station</label>
            <input type="text" class="form-control" id="inputEmail4">
          </div>
          <div class="form-group col-md-4">
            <label for="cpuinpalletstation">CPU in pallet station</label>
            <input type="text" class="form-control" id="inputPassword4">
          </div>
          <div class="form-group col-md-4">
          <label for="numberportal">Project Status</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>Released</option>
            <option>Testing planned</option>
            <option>Testing in progress</option>
            <option>Test scenario prepared, testing to be planned</option>
            <option>In requirement analysis</option>
            <option>On hold</option>
            <option>Opportunity Dropped</option>
            <option>FS pending</option>
          </select>
        </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="softwarepath">Software Path</label>
            <input type="url" class="form-control" id="inputEmail4">
          </div>
          <div class="form-group col-md-4">
            <label for="testdatapath">Test Data Path</label>
            <input type="url" class="form-control" id="inputPassword4">
          </div>
          <div class="form-group">
            <label for="attachmentsofrn">Attachments of RN, TSR, IA & IOQ</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
        </div>


        <div class="form-group col-md-2">
          <label for="remarksqa">Remarks</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
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
    </form>
  </div>


  <div class="container my-4">


    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">Sr.No</th>
          <th scope="col">Cr ID</th>
          <th scope="col">FS ID</th>
          <th scope="col">Customer Name</th>
          <th scope="col">Feature</th>
          <th scope="col">Client Software</th>
          <th scope="col">Server Software</th>
          <th scope="col">Project status</th>
          <th scope="col">Info</th>
        </tr>
      </thead>
      <tbody>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>