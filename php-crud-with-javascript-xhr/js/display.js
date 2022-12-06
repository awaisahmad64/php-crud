 let tbody =document.getElementById("tbody");
function display(){
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