
<?php
define('DB_SERVER','127.0.0.1');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','service');


$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($conn == false){
    die('Error : Cannot connect');

}

$data =  stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id= $mydata['id'];
$sonumber = $mydata['sonumber'];
$dateservice = $mydata['dateservice'];
$installationcomplete = $mydata['installationcomplete'];
$machinedetails = $mydata['machinedetails'];
$serialnumber = $mydata['serialnumber'];
$customername = $mydata['customername'];
$locationservice = $mydata['locationservice'];
$region = $mydata['region'];
$ponumber = $mydata['ponumber'];
$ressubassembly = $mydata['ressubassembly'];
$resassembly = $mydata['resassembly'];
$resqa = $mydata['resqa'];
$resdispatch = $mydata['resdispatch'];
$invoicedate = $mydata['invoicedate'];
$invoicenumber = $mydata['invoicenumber'];
$dispatchfile = $mydata['dispatchfile'];
$remarks = $mydata['remarks'];
$incoterms = $mydata['incoterms'];
$sodate = $mydata['sodate'];
$podate = $mydata['podate'];


//insert
//

//update
if(!empty($sonumber) ){
    $sql= "INSERT INTO service(id,sonumber, dateservice, installationcomplete, machinedetails,
     serialnumber, customername,locationservice, region, ponumber, ressubassembly,
     resassembly, resqa, resdispatch, invoicedate, invoicenumber, dispatchfile, 
     remarks  ,incoterms, sodate, podate)
         VALUES('$id', '$sonumber', '$dateservice ', '$installationcomplete', '$machinedetails', '$serialnumber', '$customername',
          '$locationservice', '$region', '$ponumber', '$ressubassembly', '$resassembly', '$resqa',
           '$resdispatch','$invoicedate', '$invoicenumber', '$dispatchfile', '$remarks',   '$incoterms',
            '$sodate','$podate') ON DUPLICATE KEY UPDATE id = '$id', sonumber ='$sonumber', dateservice ='$dateservice',installationcomplete ='$installationcomplete',machinedetails ='$machinedetails',
            serialnumber ='$serialnumber',customername ='$customername',locationservice ='$locationservice',region ='$region',ponumber ='$ponumber',
            ressubassembly ='$ressubassembly',resassembly ='$resassembly',
            resqa ='$resqa',resdispatch ='$resdispatch',invoicedate ='$invoicedate',
            invoicenumber ='$invoicenumber',dispatchfile ='$dispatchfile', remarks ='$remarks',  incoterms ='$incoterms',
            sodate ='$sodate',podate ='$podate' ";
    if($conn->query($sql) == TRUE){
        echo "inserted";
    }else{
        echo "not inserted";
    }

}else{
    echo "Fill ID either of top 1";
}


?>
