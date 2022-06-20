<?php

define('hostname','127.0.0.1');
define('DB_USERNAME','root');
define('DB_PASSWORD','tnt123');
define('DB_NAME','login');

$conn = mysqli_connect(hostname,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($conn == false){
    dir('Error : Cannot connect');
}

$query =mysqli_query($conn, "select * from users where username='".$_SESSION['username']."'");
while($row=mysqli_fetch_array($query)){
    $role =$row['role'];
}
if($role=='admin'){


?>


<div class="container mt-4">
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
            <option>India DGFT</option>
            <option>Saudi SFDA</option>
            <option>US HDA</option>
            <option>Russia</option>
            <option>Brazil</option>
            <option>China</option>
            <option>Dubai</option>
            <option>Egypt</option>
            <option>EU</option>
            <option>EPCIS</option> 
            <option>DRAP</option>
            <option>DTTS</option>
            <option>GS1</option>
            <option>Indonesia</option>
            <option>Iran</option>
            <option>Japan and Malaysia</option>
            <option>Jordan</option>
            <option>Oman</option>
            <option>Turkey</option>
            <option>Lebanon</option>
            <option>UAE</option>
            <option>Iran</option>
            <option>Ukraine</option>
            <option>Bahrain</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="numberportal">Number Portal</label>
          <select id="numberportal" class="form-control">
            <option selected>Choose...</option>
            <option>Verisheild</option>
            <option>rfexcel</option>
            <option>SAP ATTP</option>
            <option>SAP Pharma network</option>
            <option>Tracelink</option>
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
            <label for="attachmentsofrn">Attachments of RN, TSR, IA & IOQ (Drive Link)</label>
            <input type="text" class="form-control-file" id="attachmentsofrn">
          </div>
        </div>


        <div class="form-group col-md-10">
          <label for="remark">Remarks</label>
          <input type="text" class="form-control" id="remark">
        </div>
      </div>
    
      <button type="submit" class="btn btn-primary" id="btnadd">Submit</button>
      <div id="msg"></div>
      </div>
    </form>
  

  <?php  }else if($role !='admin'){  ?>
    
    <div class="container mt-4">
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
            <option>India DGFT</option>
            <option>Saudi SFDA</option>
            <option>US HDA</option>
            <option>Russia</option>
            <option>Brazil</option>
            <option>China</option>
            <option>Dubai</option>
            <option>Egypt</option>
            <option>EU</option>
            <option>EPCIS</option> 
            <option>DRAP</option>
            <option>DTTS</option>
            <option>GS1</option>
            <option>Indonesia</option>
            <option>Iran</option>
            <option>Japan and Malaysia</option>
            <option>Jordan</option>
            <option>Oman</option>
            <option>Turkey</option>
            <option>Lebanon</option>
            <option>UAE</option>
            <option>Iran</option>
            <option>Ukraine</option>
            <option>Bahrain</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="numberportal">Number Portal</label>
          <select id="numberportal" class="form-control">
            <option selected>Choose...</option>
            <option>Verisheild</option>
            <option>rfexcel</option>
            <option>SAP ATTP</option>
            <option>SAP Pharma network</option>
            <option>Tracelink</option>
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
            <label for="attachmentsofrn">Attachments of RN, TSR, IA & IOQ (Drive Link)</label>
            <input type="text" class="form-control-file" id="attachmentsofrn">
          </div>
        </div>


        <div class="form-group col-md-10">
          <label for="remark">Remarks</label>
          <input type="text" class="form-control" id="remark">
        </div>
      </div>
      </div>
      </form>
    

<?php } ?>