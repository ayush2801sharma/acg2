$(document).ready(function(){
//retrive
function showdata(){
    $.ajax({
        url:"retrive.php",
        method: "GET",
        success: function(data){
            console.log(data);
        }
    })
}

//ajax request for insert data 
$("#btnadd").click(function (e){
 e.preventDefault();
 console.log("save button clicked")
 let crfid = $("#crfid").val();
 let fsid = $("#fsid").val();
 let jiraid = $("#jiraid").val();
 let customername = $("#customername").val();
 let scopeofproject = $("#scopeofproject").val();
 let testscenariostatus = $("#testscenariostatus").val();
 let system = $("#system").val();
 let regulatory = $("#regulatory").val();
 let numberportal = $("#numberportal").val();
 let serversoftware = $("#serversoftware").val();
 let nonnavstarsoftware = $("#nonnavstarsoftware").val();
 let visionversion = $("#visionversion").val();
 let dbscriptversion = $("#dbscriptversion").val();
 let dtechii = $("#dtechii").val();
 let navstarsoftware = $("#navstarsoftware").val();
 let firmware = $("#firmware").val();
 let plcandhmiversion = $("#plcandhmiversion").val();
 let printerinunitstation = $("#printerinunitstation").val();
 let camerainunitstation = $("#camerainunitstation").val();
 let cpuconfigurationinunitstation = $("#cpuconfigurationinunitstation").val();
 let camerainnavstarstation = $("#camerainnavstarstation").val();
 let cpuconfigurationinnavstarstation = $("#cpuconfigurationinnavstarstation").val();
 let printerinintermediatestation = $("#printerinintermediatestation").val();
 let camerainintermediatestation = $("#camerainintermediatestation").val();
 let cpuconfigurationinintermediatestation = $("#cpuconfigurationinintermediatestation").val();
 let printerinlastintermediatestation = $("#printerinlastintermediatestation").val();
 let camerainlastintermediatestation = $("#camerainlastintermediatestation").val();
 let cpuconfigurationinlastintermediatestation = $("#cpuconfigurationinlastintermediatestation").val();
 let printerinpalletstation = $("#printerinpalletstation").val();
 let cpuinpalletstation = $("#cpuinpalletstation").val();
 let scanner = $("#scanner").val();
 let projectstatus = $("#projectstatus").val();
 let softwarepath = $("#softwarepath").val();
 let testdatapath = $("#testdatapath").val();
 let attachmentsofrn = $("#attachmentsofrn").val();
 let remark = $("#remark").val();

 mydata= { crfid: crfid, fsid: fsid, jiraid:jiraid, customername:customername, scopeofproject:scopeofproject, testscenariostatus: testscenariostatus,system:system, regulatory:regulatory, numberportal: numberportal, serversoftware:serversoftware, nonnavstarsoftware:nonnavstarsoftware, visionversion:visionversion, dbscriptversion : dbscriptversion , dtechii:dtechii, navstarsoftware:navstarsoftware,firmware:firmware, plcandhmiversion :plcandhmiversion , printerinunitstation:printerinunitstation, camerainunitstation:camerainunitstation, cpuconfigurationinunitstation:cpuconfigurationinunitstation,camerainnavstarstation:camerainnavstarstation,cpuconfigurationinnavstarstation:cpuconfigurationinnavstarstation, printerinintermediatestation:printerinintermediatestation,camerainintermediatestation:camerainintermediatestation,cpuconfigurationinintermediatestation:cpuconfigurationinintermediatestation,printerinlastintermediatestation:printerinlastintermediatestation, camerainlastintermediatestation:camerainlastintermediatestation,cpuconfigurationinlastintermediatestation:cpuconfigurationinlastintermediatestation,        printerinpalletstation:printerinpalletstation, cpuinpalletstation:cpuinpalletstation,     scanner:scanner,projectstatus:projectstatus, softwarepath:softwarepath, testdatapath:testdatapath, attachmentsofrn:attachmentsofrn, remark:remark};
// console.log(mydata);
$.ajax({
    url:"insert.php",
    method: "POST",
    data: JSON.stringify(mydata),
    success: function(data){
        console.log(data);
        msg = "<div class='alert alert-dark mt-3'>" + data + "</div>";
        $("#msg").html(msg);
        document.getElementById('myform').reset()
    },
   
});
});
});