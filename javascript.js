/*
 * Bismillah
 * Muhammad Farras Ma'ruf
 * Bogor, 06 Januari 2020
*/
var inputNode = document.getElementsByTagName ("input");
var daftarNode = document.getElementById ("daftar");
var submitNode = document.getElementById ("submit");
var bodyNode = document.getElementById ("body");

var emailNode = document.getElementById ("email");
var warnEmailNode = document.getElementById ("warn-email");
var passwordNode = document.getElementById ("password");
var warnPasswordNode = document.getElementById ("warn-password");

var divNode = document.createElement ("div");
var h3Node = document.createElement ("h3");
var textNode = document.createTextNode ("Mohon bersabar akhie :)");

function checkEmpty (){
    function callBack (e){
        for (var i = 0 ; i < inputNode.length ; i++ ){
            if (inputNode[i].value == ""){
                inputNode[i].placeholder = "Harap diisi";
                e.preventDefault();
            }
        }
        
    }
    submitNode.addEventListener ("click",callBack);
}



function daftarEmail (){
    
    function callBack (e){
        var href = e.target.href;
        href = "register/";
        window.location.assign (href);
    }
    daftarNode.addEventListener ("click",callBack);
}


function isEmailRegistered () {
    
    function callBack () {
        var request = new XMLHttpRequest ();
        request.open ("GET","modal.php?email-terdaftar=ok"+"&email="+emailNode.value);
        request.send ();
        
        request.onreadystatechange = function () {
          
          if (request.readyState == 4 && request.status == 200 ){
            
                if (emailNode.value.length >= 1){
                    warnEmailNode.setAttribute ("title","Email tidak terdaftar");
                    warnEmailNode.innerHTML = request.responseText;
                }
                else {
                    warnEmailNode.innerHTML = "";
                }
          }
        };
    }
    function callPrevent (e) {
        if (warnEmailNode.innerHTML != ""){
            e.preventDefault();
        }
    }
    submitNode.addEventListener ("click",callPrevent);
    emailNode.addEventListener ("blur",callBack);
}

function isEmailAndPassRegistered () {
    
    function callBack () {
        var request = new XMLHttpRequest ();
        request.open ("GET","modal.php?email-pass=ok"+"&email="+emailNode.value+"&password="+passwordNode.value);
        request.send ();
        
        request.onreadystatechange = function () {
          
          if (request.readyState == 4 && request.status == 200 ){
                
                warnPasswordNode.setAttribute ("title","Password anda salah");
                warnPasswordNode.innerHTML = request.responseText;
                console.log (request.responseText);
                
          }
        };
    }
    function callPrevent (e) {
        if (warnPasswordNode.innerHTML != ""){
            e.preventDefault();
        }
    }
    submitNode.addEventListener ("click",callPrevent);
    passwordNode.addEventListener ("blur",callBack);
}

function isSubmitOk () {
    
    function callBack (e){

        if (e.defaultPrevented == true){
            
            var divNode = document.createElement ("div");
            var h3Node = document.createElement ("h3");
            var textNode = document.createTextNode ("Mohon bersabar akhie :)");
            
            h3Node.appendChild (textNode);
            divNode.appendChild (h3Node);
            
            bodyNode.appendChild (divNode);
            divNode.classList.add ("loading");
            
            console.log ("its must work");
        }
        console.log (e);
        console.log (e.defaultPrevented);
    }
    submitNode.addEventListener ("click",callBack);
}



