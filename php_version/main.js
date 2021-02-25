function request(){
    var xhttp = new XMLHttpRequest;
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("grid-container").innerHTML = this.responseText;
        }

    };
    xhttp.open("POST",'request_img.php',true);
    xhttp.send();
}
window.onload = request()