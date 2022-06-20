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
if($role=='admin') {


?>

    
<div class="container mt-4">
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
          <input type="text" class="form-control" id="dateservice">
        </div>
        <div class="form-group col-md-4">
          <label for="installationcomplete">Installation complete</label>
          <select  class="form-control" id="installationcomplete">
          <option selected>Choose...</option>
            <option>Out Of Warranty</option>
            <option>In Warranty</option>
            <option>others</option>
          
          </select>
        </div>
       
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="machinedetails">Machine details</label>
          <input type="text" class="form-control" id="machinedetails">
        </div>
        <div class="form-group col-md-4">
          <label for="serialnumber">serial number</label>
          <input type="text" class="serialnumber" id="serialnumber">
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
          <input type="text" class="form-control" id="region">
        </div>
        <div class="form-group col-md-4">
          <label for="ponumber">PO number</label>
          <input type="text" class="form-control" id="ponumber">
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
          <input type="text" class="form-control" id="invoicedate">
        </div>
        <div class="form-group col-md-4">
          <label for="invoicenumber">Invoice number</label>
          <input type="text" class="form-control" id="invoicenumber">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="dispatchfile">Dispatch file Drive Link</label>
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
          <input type="text" class="form-control" id="sodate">
        </div>
        <div class="form-group col-md-4">
          <label for="podate">PO date</label>
          <input type="text" class="form-control" id="podate">
        </div>
      </div>
      <button type="submit" class="btn btn-primary" id="btnadd">Submit</button>





  </div>

    </form>
    <?php  }elseif($role =='user'){  ?>
    <div class="container mt-4">
   
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
          <input type="text" class="form-control" id="dateservice">
        </div>
        <div class="form-group col-md-4">
          <label for="installationcomplete">Installation complete</label>
          <select  class="form-control" id="installationcomplete">
          <option selected>Choose...</option>
            <option>Out Of Warranty</option>
            <option>In Warranty</option>
            <option>others</option>
          
          </select>
        </div>
       
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="machinedetails">Machine details</label>
          <input type="text" class="form-control" id="machinedetails">
        </div>
        <div class="form-group col-md-4">
          <label for="serialnumber">serial number</label>
          <input type="text" class="serialnumber" id="serialnumber">
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
          <input type="text" class="form-control" id="region">
        </div>
        <div class="form-group col-md-4">
          <label for="ponumber">PO number</label>
          <input type="text" class="form-control" id="ponumber">
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
          <input type="text" class="form-control" id="invoicedate">
        </div>
        <div class="form-group col-md-4">
          <label for="invoicenumber">Invoice number</label>
          <input type="text" class="form-control" id="invoicenumber">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="dispatchfile">Dispatch file Drive Link</label>
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
          <input type="text" class="form-control" id="sodate">
        </div>
        <div class="form-group col-md-4">
          <label for="podate">PO date</label>
          <input type="text" class="form-control" id="podate">
        </div>
      </div>
     





  </div>

    </form>
    <?php  }elseif($role ==''){  ?>
    <div class="container mt-4">
   
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
          <input type="text" class="form-control" id="dateservice">
        </div>
        <div class="form-group col-md-4">
          <label for="installationcomplete">Installation complete</label>
          <select  class="form-control" id="installationcomplete">
          <option selected>Choose...</option>
            <option>Out Of Warranty</option>
            <option>In Warranty</option>
            <option>others</option>
          
          </select>
        </div>
       
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="machinedetails">Machine details</label>
          <input type="text" class="form-control" id="machinedetails">
        </div>
        <div class="form-group col-md-4">
          <label for="serialnumber">serial number</label>
          <input type="text" class="serialnumber" id="serialnumber">
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
          <input type="text" class="form-control" id="region">
        </div>
        <div class="form-group col-md-4">
          <label for="ponumber">PO number</label>
          <input type="text" class="form-control" id="ponumber">
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
          <input type="text" class="form-control" id="invoicedate">
        </div>
        <div class="form-group col-md-4">
          <label for="invoicenumber">Invoice number</label>
          <input type="text" class="form-control" id="invoicenumber">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="dispatchfile">Dispatch file Drive Link</label>
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
          <input type="text" class="form-control" id="sodate">
        </div>
        <div class="form-group col-md-4">
          <label for="podate">PO date</label>
          <input type="text" class="form-control" id="podate">
        </div>
      </div>
     





  </div>

    </form>
    <?php } ?>