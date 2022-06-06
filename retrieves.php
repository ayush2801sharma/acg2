<?php
define('DB_SERVER','127.0.0.1');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','service');


$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($conn == false){
    die('Error : Cannot connect');



}


$sql= "SELECT sonumber,installationcomplete,machinedetails, serialnumber, customername, ponumber, invoicenumber, region from  service";
$result =$conn->query($sql);
if($result->num_rows >0){
    $data= array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
}
  

//return json format data as response to ajax call
echo json_encode($data)

?>