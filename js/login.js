function verifyUser(){
    var username = document.querySelector('#username').value;
    var password = document.querySelector('#password').value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.querySelector('.userInvalid').innerHTML = this.responseText;
        }
    }
    xhttp.open("GET", "hasAcc.php?user="+username, true);
    xhttp.open("GET", "hasAcc.php?user="+password, true);

    xhttp.send();
}

function pwdValid(){
    var pwd = document.querySelector('#pwd').value;
    var pwdC = document.querySelector('#cpwd').value;
    if(pwd != pwdC){
        document.querySelector('.pwd').innerHTML = "password not matched";
    }
    if(pwdC == '' || pwd == pwdC){
        document.querySelector('.pwd').innerHTML = '';
    }
}

function formValidation(){
    let userValidC = document.querySelector('.userTaken');
    let userValidI = document.querySelector('#userValid');
    let passCon = document.querySelector('.pwd');
    let fname = document.querySelector('.fnameValid');
    let lname = document.querySelector('.lnameValid');

    if(userValidC.innerHTML !== "" || userValidI.innerHTML !== ""  || passCon.innerHTML !== "" 
    || fname.innerHTML !== "" || lname.innerHTML !== ""){
        return false;
    }else if(userValidC.innerHTML === "" && userValidI.innerHTML === ""  && passCon.innerHTML === "" 
    && fname.innerHTML === "" && lname.innerHTML === ""){
        return true;
    }
}

$(document).ready(() =>{
    // Account Input 

    $('#username').keyup(function(){
        let pattern = /^[A-Za-z0-9]{5,20}$/;
        var username = $('#username').val();
        if(pattern.test(username) == false){
            $('#userValid').html ("5~20 characters and numbers Only");
        }else{
            $('#userValid').html ("");
        }
    });
    $('#fname').keyup(function(){
        let parttern = /^[A-Za-z]{0,20}$/;
        var username = $('#fname').val();
        if(parttern.test(username) == false){
            $('.fnameValid').html ("Only characters");
        }else{
            $('.fnameValid').html ("");
        }
    });
    $('#lname').keyup(function(){
        let parttern = /^[A-Za-z]{0,20}$/;
        var username = $('#lname').val();
        if(parttern.test(username) == false){
            $('.lnameValid').html ("Only characters");
        }else{
            $('.lnameValid').html ("");
        }
    });                      
});