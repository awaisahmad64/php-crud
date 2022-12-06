$(document).ready(function() {
	   function showData(){ 
	   	output= "";
	 $.ajax({
	   url:"show.php",
	   method:"get",
	   dataType:"json",
	   success:function(data){
        if(data){
        	x=data;
        }
        else{
        	x="";
        }
        for(i=0; i<x.length; i++){
          output += "<tr><td>"
        	+x[i].id+"</td><td>"
        	+x[i].name+"</td><td>"
        	+x[i].email+"</td><td>"
        	+x[i].password+
        	"</td><td><button  class='btn btn-sm btn-success btn-edit' data-eid="+x[i].id+">Edit</button><button class='btn btn-sm btn-danger btn-del' data-did="+x[i].id+">Delete</button></td></tr>";
        }
        $("#tbody").html(output);
	   }

	   })
	}
	showData();
	  
	   
	// Ajax code for insert data in 
	$("#btnadd").click(function(e){
		e.preventDefault();
		console.log("btn-clicked");
		let nm = $("#name").val();
		let em = $("#email").val();
		let pwd = $("#pwd").val();
	     data ={name:nm,email:em,password:pwd};
        mydata =JSON.stringify(data);
        $.ajax({
              url:"insert.php",
              method:"post",
              data:mydata,
              success: function(data){
               alert(data);
          $("#myform")[0].reset();
          showData();
              }
        })
	});
	// Ajax code for other method in
	// code for edit
    //  $("#tbody").on("click","#btn-edit",funciton(){
    //    console.log("btn-edit is clicked");
    //  });
  //code for delete
  $("#tbody").on("click",".btn-del",function(){
     let did=$(this).attr("data-eid");
	 console.log(did)
     mydata = {id:did};
     console.log(mydata);
     data = JSON.stringify(mydata);
     $.ajax({
     	url:"delete.php",
     	method:"post",
     	data:data,
     	success:function(data){
     		alert(data);
     		showData();

     	}
     })
  });
});