document.getElementById("send").addEventListener("click",function(){
    newToDo();
});

function newToDo(){
    var toDo = document.getElementById("toDo");
    var header = "toDo="+toDo.value;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            //it was correctly completed
            uploadToDo();
        }
    };

    xmlhttp.open("POST","newToDo.php",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send(header);
}

function uploadToDo(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("show-to-do").innerHTML = this.responseText;

        }
    };

    xmlhttp.open("GET","showToDo.php",true);
    xmlhttp.send();
}