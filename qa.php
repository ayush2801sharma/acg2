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
                    url: "getData.php",
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
  <script src = "jqajax.js"></script>


</head>

<body>
<?php






  ?>

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
    
 
    <form class="for" id="myform">
      <div class="form-row">
      <div class="form-group col-md-10">
          <label for="id"></label>
          <input type="text" class="form-control" id="id" style="display:none;" >
        </div>
        <div class="form-group col-md-4">
          <label for="crfid">CRF ID</label>
          <input type="text" class="form-control" id="crfid">
        </div>
        <div class="form-group col-md-4">
          <label for="fsid">FS ID</label>
          <input type="text" class="form-control" id="fsid">
        </div>
        <div class="form-group col-md-4">
          <label for="jiraid">Jira ID</label>
          <input type="text" class="form-control" id="jiraid">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="customername">Customer Name</label>
          <input type="text" class="form-control" id="customername">
        </div>
        <div class="form-group col-md-4">
          <label for="scopeofproject">Scope of the Project</label>
          <input type="text" class="form-control" id="scopeofproject">
        </div>
        <div class="form-group col-md-4">
          <label for="testscenariostatus">Test Scenario Status</label>
          <input type="text" class="form-control" id="testscenariostatus">
        </div>
      </div>


      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="system">System</label>
          <input type="text" class="form-control" id="system">
        </div>
        <div class="form-group col-md-4">
          <label for="regulatory">Regulatory</label>
          <select id="regulatory" class="form-control">
            <option selected>Choose...</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="numberportal">Number Portal</label>
          <select id="numberportal" class="form-control">
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
            <input type="text" class="form-control" id="serversoftware">
          </div>
          <div class="form-group col-md-4">
            <label for="nonnavstarsoftware">Non Navstar Software</label>
            <input type="text" class="form-control" id="nonnavstarsoftware">
          </div>
          <div class="form-group col-md-4">
            <label for="visionversion">Vision Version </label>
            <input type="text" class="form-control" id="visionversion">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="dbscriptversion">DB Script Version</label>
            <input type="text" class="form-control" id="dbscriptversion">
          </div>
          <div class="form-group col-md-4">
            <label for="dtechii">D.Tech DII </label>
            <input type="text" class="form-control" id="dtechii">
          </div>
          <div class="form-group col-md-4">
            <label for="navstarsoftware">Navstar Software </label>
            <input type="text" class="form-control" id="navstarsoftware">
          </div>
          <div class="form-group col-md-4">
            <label for="firmware">Firmware </label>
            <input type="text" class="form-control" id="firmware">
          </div>
        </div>


        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="plcandhmiversion">PLC and HMI Version</label>
            <input type="text" class="form-control" id="plcandhmiversion">
          </div>
          <div class="form-group col-md-6">
            <label for="printerinunitstation">Printer in Unit Station</label>
            <input type="text" class="form-control" id="printerinunitstation">
          </div>
          <div class="form-group col-md-6">
            <label for="camerainunitstation">Camera in Unit Station</label>
            <input type="text" class="form-control" id="camerainunitstation">
          </div>
        </div>


        

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="cpuconfigurationinunitstation">CPU configuration in unit station</label>
            <input type="text" class="form-control" id="cpuconfigurationinunitstation">
          </div>
          <div class="form-group col-md-4">
            <label for="camerainnavstarstation">Camera in Navstar Station</label>
            <input type="text" class="form-control" id="camerainnavstarstation">
          </div>
          <div class="form-group col-md-4">
            <label for="cpuconfigurationinnavstarstation">CPU configuration in Navstar Station</label>
            <input type="text" class="form-control" id="cpuconfigurationinnavstarstation">
          </div>

          <div class="form-group col-md-4">
            <label for="printerinintermediatestation">Printer in intermediate station </label>
            <input type="text" class="form-control" id="printerinintermediatestation">
          </div>
          <div class="form-group col-md-4">
            <label for="camerainintermediatestation">Camera in intermediate station </label>
            <input type="text" class="form-control" id="camerainintermediatestation">
          </div>
          <div class="form-group col-md-4">
            <label for="cpuconfigurationinintermediatestation">Cpu Configuration in intermediate station </label>
            <input type="text" class="form-control" id="cpuconfigurationinintermediatestation">
          </div>
        </div>

        <div class="form-row">
         
          
          
          <div class="form-group col-md-4">
            <label for="printerinlastintermediatestation">Printer in last intermediate station </label>
            <input type="text" class="form-control" id="printerinlastintermediatestation">
          </div>
          <div class="form-group col-md-4">
            <label for="camerainlastintermediatestation">Camera in last intermediate station </label>
            <input type="text" class="form-control" id="camerainlastintermediatestation">
          </div>
          <div class="form-group col-md-6">
            <label for="cpuconfigurationinlastintermediatestation">Cpu Configuration in last intermediate station </label>
            <input type="text" class="form-control" id="cpuconfigurationinlastintermediatestation">
          </div>
        </div>

      


        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="printerinpalletstation">Printer in pallet station</label>
            <input type="text" class="form-control" id="printerinpalletstation">
          </div>
          <div class="form-group col-md-6">
            <label for="cpuinpalletstation">CPU in pallet station</label>
            <input type="text" class="form-control" id="cpuinpalletstation">
          </div>
          <div class="form-group col-md-6">
            <label for="scanner">Scanner</label>
            <input type="text" class="form-control" id="scanner">
          </div>
          <div class="form-group col-md-6">
          <label for="projectstatus">Project Status</label>
          <select id="projectstatus" class="projectstatus">
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
          <div class="form-group col-md-6">
            <label for="softwarepath">Software Path</label>
            <input type="url" class="form-control" id="softwarepath">
          </div>
          <div class="form-group col-md-6">
            <label for="testdatapath">Test Data Path</label>
            <input type="url" class="form-control" id="testdatapath">
          </div>
          <div class="form-group">
            <label for="attachmentsofrn">Attachments of RN, TSR, IA & IOQ</label>
            <input type="file" class="form-control-file" id="attachmentsofrn">
          </div>
        </div>


        <div class="form-group col-md-10">
          <label for="remark">Remarks</label>
          <input type="text" class="form-control" id="remark">
        </div>
      </div>
    
      <button type="submit" class="btn btn-primary" id="btnadd">Submit</button>
      <div id="msg"></div>
    </form>
  </div>


  <div class="container my-4">


    <table class="table" id="tableid">
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