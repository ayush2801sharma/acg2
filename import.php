<?php
use SimpleExcel\SimpleExcel;
if(isset($_POST['import'])){

    if(move_uploaded_file($_FILES['excel_file']['tmp_name'],$_FILES['excel_file']['name'])){
        

        require_once('SimpleExcel/SimpleExcel.php'); // load the main class file (if you're not using autoloader)
    
        $excel = new SimpleExcel('csv');                    // instantiate new object (will automatically construct the parser & writer type as XML)
    
        $excel->parser->loadFile($_FILES['excel_file']['name']);            // load an XML file from server to be parsed
    
        $foo = $excel->parser->getField();                  // get complete array of the table
        $count=1;
        $db = mysqli_connect('localhost','root','','service');
        while(count($foo)>$count){
            $sonumber=$foo[$count][0];
            $dateservice=$foo[$count][1];
            $installationcomplete=$foo[$count][2];

             $machinedetails=$foo[$count][3];
             $serialnumber=$foo[$count][4];
             $customername=$foo[$count][5];

              $locationservice=$foo[$count][6]; 
              $region=$foo[$count][7];
              $ponumber=$foo[$count][8];
               $ressubassembly=$foo[$count][9];
                $resassembly=$foo[$count][10];

               $resqa=$foo[$count][11];

               $resdispatch=$foo[$count][12];

               $invoicedate=$foo[$count][13];
               $invoicenumber=$foo[$count][14];
               $dispatchfile=$foo[$count][15];
               
              
               $remarks=$foo[$count][16];
               $incoterms=$foo[$count][17];

               $sodate=$foo[$count][18];
               $podate=$foo[$count][19];
                

               
            
            $query="INSERT INTO service (sonumber, dateservice, installationcomplete, machinedetails,serialnumber, customername, locationservice, region, ponumber, ressubassembly, resassembly, resqa, resdispatch, invoicedate, invoicenumber, dispatchfile, remarks, incoterms, sodate, podate) VALUES ('$sonumber', '$dateservice', '$installationcomplete', '$machinedetails', '$serialnumber', '$customername', '$locationservice', '$region', '$ponumber', '$ressubassembly', '$resassembly', '$resqa', '$resdispatch', '$invoicedate', '$invoicenumber', '$dispatchfile', '$remarks', '$incoterms', '$sodate', '$podate')";
            //print($query);exit;
            mysqli_query($db,$query);
            $count++;
        }
        
        echo"<script>window.location.href='service.php';</script>";

        
    }
    
}
?>