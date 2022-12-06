 let tbody =document.getElementById("tbody");
function display(){
	tbody.innerHTML ="";
const xhr = new XMLHttpRequest();
xhr.open("GET","display.php",true);
xhr.responseType ="json";
xhr.onload = function(){
	if (xhr.status===200)
	 {
      
        if(xhr.response){
        	x=xhr.response;
        }
        else{
        	x="";
        }
        for( i=0; i < x.length; i++)
        {
        	tbody.innerHTML +="<tr><td>"+x[i].id+
        	"</td><td>"+
        	x[i].name+"</td><td>"+
        	x[i].email+"</td><td>"
        	+x[i].password+
        	"</td><td> <button class='btn btn-success btn-sm btn-edit' data-edit="
        	+x[i].id+">Edit</button><button class='btn btn-danger btn-sm btn-del' data-del="
        	+x[i].id+">Delete</button></td></tr>";
        }
	 }
	else{
        console.log("Errror status failed");
	}
};
xhr.send();
}
display();
//insert into data
document.getElementById('submit').addEventListener('click',add_student);

function add_student(e){
	// this function will prevent by default working
	e.preventDefault();
	// this variable contain the values of input fiedls
	let nm = document.getElementById("nameid").value;
	let em = document.getElementById("emailid").value;
	let pwd = document.getElementById("pwdid").value;
	// now we create xmlhttp request 
	const xhr = new XMLHttpRequest();
    //xhr.setRequestHeader("Content-Type","application/json");
	xhr.onload = function(){
           if(xhr.status==200)
           {
           	document.getElementById("myform").reset();
          //  alert(xhr.responseText);
            display();
           }
           else{
           	alert("error");
           }
	};

	xhr.open('post','insert.php', true);
	const mydata = {name:nm,email:em,password:pwd};
	console.log(mydata);
	const data =JSON.stringify(mydata);
	console.log(data);
	xhr.send(data);
}