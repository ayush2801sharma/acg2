
<?php
define('DB_SERVER','127.0.0.1');
define('DB_USERNAME','root');
define('DB_PASSWORD','tnt123');
define('DB_NAME','qaprojects');


$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($conn == false){
    die('Error : Cannot connect');

}

$data =  stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id= $mydata['id'];
$crfid = $mydata['crfid'];
$fsid = $mydata['fsid'];
$jiraid = $mydata['jiraid'];
$customername = $mydata['customername'];
$scopeofproject = $mydata['scopeofproject'];
$testscenariostatus = $mydata['testscenariostatus'];
$system = $mydata['system'];
$regulatory = $mydata['regulatory'];
$numberportal = $mydata['numberportal'];
$serversoftware = $mydata['serversoftware'];
$nonnavstarsoftware = $mydata['nonnavstarsoftware'];
$visionversion = $mydata['visionversion'];
$dbscriptversion = $mydata['dbscriptversion'];
$dtechii = $mydata['dtechii'];
$navstarsoftware = $mydata['navstarsoftware'];
$firmware = $mydata['firmware'];
$plcandhmiversion = $mydata['plcandhmiversion'];
$printerinunitstation = $mydata['printerinunitstation'];
$camerainunitstation = $mydata['camerainunitstation'];
$cpuconfigurationinunitstation = $mydata['cpuconfigurationinunitstation'];
$camerainnavstarstation= $mydata['camerainnavstarstation'];
$cpuconfigurationinnavstarstation= $mydata['cpuconfigurationinnavstarstation'];
$printerinintermediatestation = $mydata['printerinintermediatestation'];
$camerainintermediatestation = $mydata['camerainintermediatestation'];
$cpuconfigurationinintermediatestation = $mydata['cpuconfigurationinintermediatestation'];
$printerinlastintermediatestation = $mydata['printerinlastintermediatestation'];
$camerainlastintermediatestation = $mydata['camerainlastintermediatestation'];
$cpuconfigurationinlastintermediatestation = $mydata['cpuconfigurationinlastintermediatestation'];
$printerinpalletstation = $mydata['printerinpalletstation'];
$cpuinpalletstation = $mydata['cpuinpalletstation'];
$scanner = $mydata['scanner'];
$projectstatus= $mydata['projectstatus'];
$softwarepath = $mydata['softwarepath'];
$testdatapath = $mydata['testdatapath'];
$attachmentsofrn = $mydata['attachmentsofrn'];
$remark = $mydata['remark'];

//insert
//

//update
if(!empty($crfid) || !empty($jiraid)|| !empty($fsid)){
    $sql= "INSERT INTO qaprojects(id,crfid, fsid, jiraid, customername,
     scopeofproject, testscenariostatus,system, regulatory, numberportal, serversoftware,
      nonnavstarsoftware, visionversion, dbscriptversion, dtechii, navstarsoftware, firmware, 
      plcandhmiversion,printerinunitstation, camerainunitstation, cpuconfigurationinunitstation,
       camerainnavstarstation,cpuconfigurationinnavstarstation, printerinintermediatestation, 
       camerainintermediatestation, cpuconfigurationinintermediatestation, printerinlastintermediatestation,
        camerainlastintermediatestation, cpuconfigurationinlastintermediatestation, printerinpalletstation, 
        cpuinpalletstation, scanner, projectstatus, softwarepath, testdatapath,attachmentsofrn ,remark)
         VALUES('$id', '$crfid', '$fsid ', '$jiraid', '$customername', '$scopeofproject', '$testscenariostatus',
          '$system', '$regulatory', '$numberportal', '$serversoftware', '$nonnavstarsoftware', '$visionversion',
           '$dbscriptversion','$dtechii', '$navstarsoftware', '$firmware', '$plcandhmiversion', '$printerinunitstation',
            '$camerainunitstation','$cpuconfigurationinunitstation', '$camerainnavstarstation', 
            '$cpuconfigurationinnavstarstation','$printerinintermediatestation','$camerainintermediatestation',
            '$cpuconfigurationinintermediatestation','$printerinlastintermediatestation', 
            '$camerainlastintermediatestation', '$cpuconfigurationinlastintermediatestation', '$printerinpalletstation', 
            '$cpuinpalletstation', '$scanner', '$projectstatus', '$softwarepath','$testdatapath', '$attachmentsofrn', 
            '$remark') ON DUPLICATE KEY UPDATE id = '$id', crfid ='$crfid', fsid ='$fsid',jiraid ='$jiraid',customername ='$customername',
            scopeofproject ='$scopeofproject',testscenariostatus ='$testscenariostatus',testscenariostatus ='$testscenariostatus',system ='$system',regulatory ='$regulatory',
            numberportal ='$numberportal',serversoftware ='$serversoftware',
            nonnavstarsoftware ='$nonnavstarsoftware',visionversion ='$visionversion',dbscriptversion ='$dbscriptversion',
            dtechii ='$dtechii',navstarsoftware ='$navstarsoftware', firmware ='$firmware',plcandhmiversion ='$plcandhmiversion',
            printerinunitstation ='$printerinunitstation',camerainunitstation ='$camerainunitstation',cpuconfigurationinunitstation ='$cpuconfigurationinunitstation'
            ,camerainnavstarstation ='$camerainnavstarstation',cpuconfigurationinnavstarstation ='$cpuconfigurationinnavstarstation',printerinintermediatestation ='$printerinintermediatestation',camerainlastintermediatestation ='$camerainlastintermediatestation',cpuconfigurationinlastintermediatestation ='$cpuconfigurationinlastintermediatestation',
            printerinpalletstation ='$printerinpalletstation',cpuinpalletstation ='$cpuinpalletstation',scanner ='$scanner',projectstatus ='$projectstatus',
            softwarepath ='$softwarepath',testdatapath ='$testdatapath',attachmentsofrn='$attachmentsofrn',remark ='$remark' ";
    if($conn->query($sql) == TRUE){
        echo "inserted";
    }else{
        echo "not inserted";
    }

}else{
    echo "Fill ID either of top 3";
}


?>
