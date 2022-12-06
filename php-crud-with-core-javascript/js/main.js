document.getElementById('addbtn').addEventListener("click",addstudent);
function addstudent(e){

	e.preventDefault();
	console.log("button is clicked");
	let nm = document.getElementById("name").value;
	let fnm = document.getElementById("fname").value;
	let em = document.getElementById("email").value;
	var mydata ={name:nm, fname:fnm, email:em};
	console.log(mydata);
	var data = JSON.stringify(mydata);
	console.log(data);
	var xhr = new XMLHttpRequest();
	xhr.open("POST","insert.php",true);
	xhr.onload = ()=>{
        if(xhr.status===200)
        {
        	document.getElementById('myform').reset();
            alert(xhr.responseText);
            showdata();
        }
        else{
        	alert("Server Error");
        }
	};
	xhr.send(data);
	var tbody = document.getElementById("tbody");
}
function showdata(){
	tbody.innerHTML= "";
	var xhr = new XMLHttpRequest();
	//xhr.responseType = "json";
	xhr.open("GET","retrieve.php");
	xhr.responseType = "json";
	xhr.onload = ()=>{
		if(xhr.status===200){
		 if(xhr.response)
		 {
		 	x = xhr.response;
		 }
		 else{
		 	x="";
		 }
		 for(var i=0; i<x.length; i++)
		 {
           tbody.innerHTML += "<tr><td>"+x[i].id+
           "</td><td>"+x[i].name+"</td><td>"+x[i].fname+
           "</td><td>"+x[i].email+
           "</td><td><button class='btn btn-danger btn-sm mr-1 btn-del' btn-sid="
           +x[i].id+
           ">Delete</button><button class='btn-sm btn btn-primary btn-edit' btn-sid="
           +x[i].id+">Edite</button></td></tr>";
           // alert(xhr.response);
		 }
		}
		else{
			alert("Server Error");
		}
	}
	xhr.send();
}
showdata();