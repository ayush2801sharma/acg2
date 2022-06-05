$(document).ready(function(){
//retrive
function showdata(){
    output ="";
    $.ajax({
        url:"retrieves.php",
        method: "GET",
        dataType:'json',          // json string to object
        success: function(data){
            //console.log(data[0].id);
            if(data){
                x= data;
            }else{
                x="";
            }
            for(i=0;i<x.length;i++) {
                output += "<tr><td>"+ x[i].id + "</td><td>" +x[i].sonumber + "</td><td>" +x[i].installationcomplete + "</td><td>" +x[i].machinedetails + "</td><td>" +x[i].serialnumber + "</td><td>" +x[i].customername + "</td><td>" +x[i].ponumber + "</td><td>" +x[i].invoicenumber + "</td><td>" +x[i].region+ "</td><td>" +"</td><td> <button class= 'btn btn-warning btn-sm btn-edit data-sid="+x[i].id+"'>View</button> </td></tr>";
               
            }
            console.log(output);
            $("#tbody").html(output);
            $('#tableid').DataTable({
                dom: 'Bfrtip',
                buttons: [ {
                    extend: 'excelHtml5',
                    customize: function ( xlsx ){
                        var sheet = xlsx.xl.worksheets['sheet1.xml'];
         
                        // jQuery selector to add a border
                        $('row c[r*="10"]', sheet).attr( 's', '25' );
                    }
                } ]
              });
        }, 
    });
}

showdata();
//ajax request for insert data 
$("#btnadd").click(function (e){
 e.preventDefault();
 console.log("save button clicked")
 let id = $("#id").val();
 let sonumber = $("#sonumber").val();
 let dateservice = $("#dateservice").val();
 let installationcomplete = $("#installationcomplete").val();
 let machinedetails = $("#machinedetails").val();
 let serialnumber = $("#serialnumber").val();
 let customername = $("#customername").val();
 let locationservice = $("#locationservice").val();
 let region = $("#region").val();
 let ponumber = $("#ponumber").val();
 let ressubassembly = $("#ressubassembly").val();
 let resassembly = $("#resassembly").val();
 let resqa = $("#resqa").val();
 let resdispatch = $("#resdispatch").val();
 let invoicedate = $("#invoicedate").val();
 let invoicenumber = $("#invoicenumber").val();
 let dispatchfile = $("#dispatchfile").val();
 let remarks = $("#remarks").val();
 let incoterms = $("#incoterms").val();
 let sodate = $("#sodate").val();
 let podate = $("#podate").val();


 mydata= { id:id ,sonumber: sonumber, dateservice: dateservice, installationcomplete:installationcomplete, machinedetails:machinedetails, serialnumber:serialnumber, customername: customername, locationservice:locationservice, region:region, ponumber:ponumber, ressubassembly:ressubassembly, resassembly:resassembly, resqa:resqa, resdispatch : resdispatch , invoicedate:invoicedate, invoicenumber:invoicenumber,dispatchfile:dispatchfile, remarks :remarks , incoterms:incoterms, sodate:sodate, podate:podate};
// console.log(mydata);
$.ajax({
    url:"inserts.php",
    method: "POST",
    data: JSON.stringify(mydata),
    success: function(data){
        console.log(data);
        msg = "<div class='alert alert-dark mt-3'>" + data + "</div>";
        $("#msg").html(msg);
        document.getElementById('myform').reset();
        showdata();
    },
   
});
});


//Ajax request to view
$("tbody").on("click",".btn-edit", function(){
    console.log("view clicked");
    let id = $(this).attr("data-sid");
    //console.log(id);
    mydata = {sid:id};

    $.ajax({
        url:"edits.php",
        method:"POST",
        dataType:"json",
        data: JSON.stringify(mydata),
        success: function(data){
            //console.log(data);
            $("#id").val(data.id);
            $("#sonumber").val(data.sonumber);
            $("#dateservice").val(data.dateservice);
            $("#installationcomplete").val(data.installationcomplete);
            $("#machinedetails").val(data.machinedetails);
            $("#serialnumber").val(data.serialnumber);
            $("#customername").val(data.customername);
            $("#locationservice").val(data.locationservice);
            $("#region").val(data.region);
            $("#ponumber").val(data.ponumber);
            $("#ressubassembly").val(data.ressubassembly);
            $("#resassembly").val(data.resassembly);    
            $("#resqa").val(data.resqa);
            $("#resdispatch").val(data.resdispatch);
            $("#invoicedate").val(data.invoicedate);
            $("#invoicenumber").val(data.invoicenumber);
            $("#dispatchfile").val(data.dispatchfile);
            $("#remarks").val(data.remarks);
            $("#incoterms").val(data.incoterms);
            $("#sodate").val(data.sodate);
            $("#podate").val(data.podate);
           
        },
    });

});
});