function searchTravel(){

let source = document.getElementById("source").value;
let destination = document.getElementById("destination").value;
let type = document.getElementById("type").value;

let xhr = new XMLHttpRequest();

xhr.open("POST","ajax/searchTravel.php",true);

xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");

xhr.onload = function(){

document.getElementById("results").innerHTML = this.responseText;

};

xhr.send("source="+source+"&destination="+destination+"&type="+type);

}