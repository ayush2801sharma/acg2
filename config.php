

<?php


define('hostname','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');

$conn = mysqli_connect(hostname,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($conn == false){
    dir('Error : Cannot connect');

}


?>