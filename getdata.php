
<?php 
// MySQL database connection code
$connection = mysqli_connect("127.0.0.1","root","tnt123","qaprojects") or die("Error " . mysqli_error($connection));
//Fetch sports data
$sql = "SELECT projectstatus, count(projectstatus) as ayush FROM `qaprojects` group by projectstatus;";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
//create an array
$array = array();
$i = 0;
while($row = mysqli_fetch_assoc($result))
{  
    $orgname = $row['projectstatus'];
    $count = $row['ayush'];
    $array['cols'][] = array('type' => 'string'); 
    $array['rows'][] = array('c' => array( array('v'=> $orgname), array('v'=>(int)$count)) );
}
$data = json_encode($array);
echo $data;
?>