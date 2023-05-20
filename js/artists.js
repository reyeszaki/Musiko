function showAlbums(str){
    var xhttp = new XMLHttpRequest();

    if(str == ""){
        document.getElementById("albums").innerHTML="";
        return;
    }

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("albums").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "findAlbums.php?artists_id="+str, true);
    xhttp.send();
}