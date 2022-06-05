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
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <title>A.C.G Inspection</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript">
            function drawChart() {
                // call ajax function to get sports data
                var jsonData = $.ajax({
                    url: "getDatas.php",
                    dataType: "json",
                    async: false
                }).responseText;
                //The DataTable object is used to hold the data passed into a visualization.
                var data = new google.visualization.DataTable(jsonData);
                
                // To render the pie chart.
                var chart = new google.visualization.PieChart(document.getElementById('chart_container'));
                chart.draw(data, {width: 400, height: 240});
            }
            // load the visualization api
            google.charts.load('current', {'packages':['corechart']});

            // Set a callback to run when the Google Visualization API is loaded.
            google.charts.setOnLoadCallback(drawChart);
        </script>
  <script src = "jqajaxs.js"></script> 
  
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
  <!--chart-->
<h2>Project Status </h2>
        <div id="chart_container"></div>

  <div class="container mt-4">
    <h3>Add Project:</h3>
    <hr>
    <h5>Fill either form or add excel file </h5>
    <div class="outer-container">
    <form  method="post" action="import.php"  enctype="multipart/form-data">
    <div>
                <label>Choose Excel File</label> 
                <input type="file"  name = "excel_file" accept=".csv">
                <button type="submit"  name="import"  class="btn-submit">Import</button>
        
            </div>
    </form>
    </div>
    
    
    <h5>Or</h5>
    <form class="for" id="myform">
      <div class="form-row"  >
      <div class="form-group col-md-10">
          <label for="id"></label>
          <input type="text" class="form-control" id="id" style="display:none;" >
        </div>
        <div class="form-group col-md-4">
          <label for="sonumber">SO Number</label>
          <input type="text" class="form-control" id="sonumber">
        </div>
        <div class="form-group col-md-4">
          <label for="dateservice">Date</label>
          <input type="date" class="form-control" id="dateservice">
        </div>
        <div class="form-group col-md-4">
          <label for="installationcomplete">Installation complete</label>
          <input type="installationcomplete" class="form-control" id="installationcomplete">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="machinedetails">Machine details</label>
          <input type="machinedetails" class="form-control" id="machinedetails">
        </div>
        <div class="form-group col-md-4">
          <label for="serialnumber">serial number</label>
          <input type="serialnumber" class="serialnumber" id="serialnumber">
        </div>
        <div class="form-group col-md-4">
          <label for="customername">Customer Name</label>
          <input type="text" class="form-control" id="customername">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="locationservice">location</label>
          <input type="text" class="form-control" id="locationservice">
        </div>
        <div class="form-group col-md-4">
          <label for="region">region</label>
          <input type="region" class="form-control" id="region">
        </div>
        <div class="form-group col-md-4">
          <label for="ponumber">PO number</label>
          <input type="ponumber" class="form-control" id="ponumber">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="ressubassembly">Res subassembly</label>
          <input type="text" class="form-control" id="ressubassembly">
        </div>
        <div class="form-group col-md-4">
          <label for="resassembly">res assembly</label>
          <input type="text" class="form-control" id="resassembly">
        </div>
        <div class="form-group col-md-4">
          <label for="resqa">Res qa</label>
          <input type="text" class="form-control" id="resqa">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="resdispatch">Res Dispatch</label>
          <input type="text" class="form-control" id="resdispatch">
        </div>
        <div class="form-group col-md-4">
          <label for="invoicedate">Invoice date</label>
          <input type="date" class="form-control" id="invoicedate">
        </div>
        <div class="form-group col-md-4">
          <label for="invoicenumber">Invoice number</label>
          <input type="text" class="form-control" id="invoicenumber">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="dispatchfile">Dispatch file</label>
          <input type="text" class="form-control" id="dispatchfile">
        </div>
        <div class="form-group col-md-4">
          <label for="remarks">remarks</label>
          <input type="text" class="form-control" id="remarks">
        </div>
        <div class="form-group col-md-4">
          <label for="incoterms">Incoterms</label>
          <input type="text" class="form-control" id="incoterms">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="sodate">SO date</label>
          <input type="date" class="form-control" id="sodate">
        </div>
        <div class="form-group col-md-4">
          <label for="podate">PO date</label>
          <input type="text" class="form-control" id="podate">
        </div>
      </div>
      <button type="submit" class="btn btn-primary" id="btnadd">Submit</button>





  </div>

    </form>

    <div class="container my-4">


    <table class="table" id="tableid">
      <thead>
        <tr>
          <th scope="col">Sr.No</th>
          <th scope="col">SO number</th>
          <th scope="col">installation complete</th>
          <th scope="col">Machine details</th>
          <th scope="col">serial number</th>
          <th scope="col">Customer Name</th>
          <th scope="col">PO number</th>
          <th scope="col">Invoice number</th>
          <th scope="col">region</th>
          <th scope="col">Info</th>
        </tr>
      </thead>
      <tbody id="tbody"></tbody>
    </table>
  </div>


    

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
  <script src= "https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src= "https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
  <script src= "https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script src= "https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src= "https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

  <!-- table functions-->
  <script>
    $(document).ready(function () {
   

    });
  </script>
 
</body>

</html>