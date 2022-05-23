<?php
    define('DB_SERVER','127.0.0.1');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','tnt123');
    define('DB_NAME','qaprojects');
    
    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);


    //if view clicked
    $data = stripslashes(file_get_contents("php://input"));
    $mydata= json_decode($data, true);
    $id = $mydata['sid'];

    //retrieve
    $sql =" SELECT * FROM qaprojects WHERE id = {$id}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    //return json
    echo json_encode($row);
?>