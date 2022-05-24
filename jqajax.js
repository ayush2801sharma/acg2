$(document).ready(function(){
//retrive
function showdata(){
    output ="";
    $.ajax({
        url:"retrieve.php",
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
                output += "<tr><td>"+ x[i].id + "</td><td>" +x[i].crfid + "</td><td>" +x[i].fsid + "</td><td>" +x[i].customername + "</td><td>" +x[i].firmware + "</td><td>" +x[i].nonnavstarsoftware + "</td><td>" +x[i].serversoftware + "</td><td>" +x[i].projectstatus +"</td><td> <button class= 'btn btn-warning btn-sm btn-edit data-sid="+x[i].id+">View</button> </td></tr>";
            }
            $("#tbody").html(output);
        }, 
    });
}

showdata();
//ajax request for insert data 
$("#btnadd").click(function (e){
 e.preventDefault();
 console.log("save button clicked")
 let id = $("#id").val();
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

 mydata= { id:id ,crfid: crfid, fsid: fsid, jiraid:jiraid, customername:customername, scopeofproject:scopeofproject, testscenariostatus: testscenariostatus,system:system, regulatory:regulatory, numberportal: numberportal, serversoftware:serversoftware, nonnavstarsoftware:nonnavstarsoftware, visionversion:visionversion, dbscriptversion : dbscriptversion , dtechii:dtechii, navstarsoftware:navstarsoftware,firmware:firmware, plcandhmiversion :plcandhmiversion , printerinunitstation:printerinunitstation, camerainunitstation:camerainunitstation, cpuconfigurationinunitstation:cpuconfigurationinunitstation,camerainnavstarstation:camerainnavstarstation,cpuconfigurationinnavstarstation:cpuconfigurationinnavstarstation, printerinintermediatestation:printerinintermediatestation,camerainintermediatestation:camerainintermediatestation,cpuconfigurationinintermediatestation:cpuconfigurationinintermediatestation,printerinlastintermediatestation:printerinlastintermediatestation, camerainlastintermediatestation:camerainlastintermediatestation,cpuconfigurationinlastintermediatestation:cpuconfigurationinlastintermediatestation,        printerinpalletstation:printerinpalletstation, cpuinpalletstation:cpuinpalletstation,     scanner:scanner,projectstatus:projectstatus, softwarepath:softwarepath, testdatapath:testdatapath, attachmentsofrn:attachmentsofrn, remark:remark};
// console.log(mydata);
$.ajax({
    url:"insert.php",
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
        url:"edit.php",
        method:"POST",
        dataType:"json",
        data: JSON.stringify(mydata),
        success: function(data){
            //console.log(data);
            $("#id").val(data.id);
            $("#crfid").val(data.crfid);
            $("#fsid").val(data.fsid);
            $("#jiraid").val(data.jiraid);
            $("#customername").val(data.customername);
            $("#scopeofproject").val(data.scopeofproject);
            $("#testscenariostatus").val(data.testscenariostatus);
            $("#system").val(data.system);
            $("#regulatory").val(data.regulatory);
            $("#numberportal").val(data.numberportal);
            $("#serversoftware").val(data.serversoftware);
            $("#nonnavstarsoftware").val(data.nonnavstarsoftware);    
            $("#visionversion").val(data.visionversion);
            $("#dbscriptversion").val(data.dbscriptversion);
            $("#dtechii").val(data.dtechii);
            $("#navstarsoftware").val(data.navstarsoftware);
            $("#firmware").val(data.firmware);
            $("#plcandhmiversion").val(data.plcandhmiversion);
            $("#printerinunitstation").val(data.printerinunitstation);
            $("#camerainunitstation").val(data.camerainunitstation);
            $("#cpuconfigurationinunitstation").val(data.cpuconfigurationinunitstation);
            $("#camerainnavstarstation").val(data.camerainnavstarstation);
            $("#cpuconfigurationinnavstarstation").val(data.cpuconfigurationinnavstarstation);
            $("#printerinintermediatestation").val(data.printerinintermediatestation);
            $("#camerainintermediatestation").val(data.camerainintermediatestation);
            $("#cpuconfigurationinintermediatestation").val(data.cpuconfigurationinintermediatestation);
            $("#printerinlastintermediatestation").val(data.printerinlastintermediatestation);
            $("#camerainlastintermediatestation").val(data.camerainlastintermediatestation);
            $("#cpuconfigurationinlastintermediatestation").val(data.cpuconfigurationinlastintermediatestation);
            $("#printerinpalletstation").val(data.printerinpalletstation);
            $("#cpuinpalletstation").val(data.cpuinpalletstation);
            $("#scanner").val(data.scanner);
            $("#projectstatus").val(data.projectstatus);   
            $("#softwarepath").val(data.softwarepath);              
            $("#testdatapath").val(data.testdatapath);
            $("#attachmentsofrn").val(data.attachmentsofrn);  
            $("#remark").val(data.remark);
        },
    });

});
});