/*
 * Bismillah
 * Muhammad Farras Ma'ruf
 * Bogor, 06 Januari 2020
*/

var submitNode = document.getElementById ("submit");
var inputNode = document.getElementsByTagName ("input");

var namaDepanNode = document.getElementById ("nama_depan");
var namaBelakangNode = document.getElementById ("nama_belakang");
var warnNamaDepanNode = document.getElementById ("warn-nama-depan");
var warnNamaBelakangNode = document.getElementById ("warn-nama-belakang");
var emailNode = document.getElementById ("email");
var warnEmailNode = document.getElementById ("warn-email");
var nohpNode = document.getElementById ("nohp");
var warnNohpNode = document.getElementById ("warn-nohp");
var passSatuNode = document.getElementById ("password");
var warnPassSatuNode = document.getElementById ("warn-pass");
var passDuaNode = document.getElementById ("password2");
var warnPassDuaNode = document.getElementById ("warn-pass2");
var validasiNode = document.getElementById ("validasi");
var kodeNode = document.getElementById ("kode");

var dbDepanNode = document.getElementById ("0");
var dbBelakangNode = document.getElementById ("1");
var dbTeleponNode = document.getElementById ("2");
var dbEmailNode = document.getElementById ("3");
var dbPasswordNode = document.getElementById ("4");

var bodyNode = document.getElementById ("body");
var loadingNode = document.createElement ("div");
var h3Node = document.createElement ("h3");
var textNode = document.createTextNode ("Mohon menunggu data antum sedang kami proeses");

// Validasi jangan ada form yang kosong
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

function checkValidNameDepan () {
    
    function callBack (e) {
        var polaAngka = new RegExp (/\d/);
        if (polaAngka.test (namaDepanNode.value)){
            e.preventDefault();
            warnNamaDepanNode.innerHTML = "Gunakan huruf";
            warnNamaDepanNode.setAttribute ("title","Jangan gunakan karakter khusus atau angka");
        }
        else {
            warnNamaDepanNode.innerHTML = "";
            warnNamaDepanNode.removeAttribute ("title");
        }
    }
    
    namaDepanNode.addEventListener ("keyup",callBack);
    submitNode.addEventListener ("click",callBack);
}

function checkValidNameBelakang () {
    
    function callBack (e) {
        var polaAngka = new RegExp (/\d/);
        if (polaAngka.test (namaBelakangNode.value)){
            e.preventDefault();
            warnNamaBelakangNode.innerHTML = "Gunakan huruf";
            warnNamaBelakangNode.setAttribute ("title","Jangan gunakan karakter khusus atau angka");
        }
        else {
            warnNamaBelakangNode.innerHTML = "";
            warnNamaBelakangNode.removeAttribute ("title");
        }
    }
    
    namaBelakangNode.addEventListener ("keyup",callBack);
    submitNode.addEventListener ("click",callBack);
}


// Validasi email harus @anakshalihbogor
function checkEmail () {
    function callBack (e){
        
        var polaTrue = new RegExp (/@anakshalihbogor.sch.id/);
        
        if (!polaTrue.test (emailNode.value)){
            
            e.preventDefault();

            warnEmailNode.setAttribute  ("title","Gunakan email anakshalihbogor.sch.id");
            warnEmailNode.innerHTML = "wajib domain anakshalih";
        }
        else {
            warnEmailNode.innerHTML = " ";
        }
    }
    submitNode.addEventListener ("click",callBack);
    emailNode.addEventListener ("keyup",callBack);
}

// validasi email jika sudah terdaftar tidak bisa mendaftar lagi
function isEmailRegistered () {
    function callAjax(){
        var request = new XMLHttpRequest ();
        request.open ("GET","ajax.php?time="+Math.random()+"&is-registered=is"+"&email="+emailNode.value);
        request.send ();
        
        request.onreadystatechange = function () {
            if ((request.status == 200) && (request.readyState == 4)){
                var respone = request.responseText;
                
                if (respone == "terdaftar"){
                    warnEmailNode.setAttribute  ("title","Email sudah terdaftar");
                        warnEmailNode.innerHTML = "Email sudah terdaftar";
                }                
            }
        };
        
    }
    function callBack (e) {
        if (warnEmailNode.innerHTML == "Email is registered"){
            e.preventDefault();
            
        }
    }
    
    emailNode.addEventListener ("keyup",callAjax);
    submitNode.addEventListener ("click",callAjax);
    submitNode.addEventListener ("click",callBack);
}


// Validasi no handphone harus 62 didepan
function checkNumb () {
    
    function callBack (e){
        
        if (nohpNode.value.length >= 2){
            
            var pola = new RegExp (/^62/);
            
            if (!pola.test (nohpNode.value)){
                e.preventDefault();
                warnNohpNode.setAttribute  ("title","ex: 6281234567890");
                warnNohpNode.innerHTML = "Gunakan 62 mengganti 0";
            }
            else {
                warnNohpNode.innerHTML = " ";
            }
            
        }
        
    }
    submitNode.addEventListener ("click",callBack);
    nohpNode.addEventListener ("keyup",callBack);
}

// validasi password 1 dan 2 harus sama
function checkPassword () {
    
    function callBackSame (e){
        
        if (passSatuNode.value != passDuaNode.value){
            
            e.preventDefault();
            warnPassDuaNode.innerHTML = "Password tidak sama";
        }
        else {
            warnPassDuaNode.innerHTML = " ";
        }
        
    }
    
    passDuaNode.addEventListener ("keyup",callBackSame);
    submitNode.addEventListener ("click",callBackSame);
    
    function callBackEmptyPass (e){
        var pola = new RegExp(/\s/);
        var polaLanjutan = new RegExp (/\W/);
        
        if (pola.test (passSatuNode.value) || polaLanjutan.test (passSatuNode.value) ){
            
            e.preventDefault();
            warnPassSatuNode.setAttribute  ("title","Password anda aneh");
            warnPassSatuNode.innerHTML = "Password anda aneh";
            
        }
        else {
            warnPassSatuNode.innerHTML = " ";
        }
        
    }
    passSatuNode.addEventListener ("keyup",callBackEmptyPass);
    submitNode.addEventListener ("click",callBackEmptyPass);
}


function checkKode () {
    
    function callAjax (){
        var request = new XMLHttpRequest ();
        request.open ("GET","ajax.php?time="+Math.random()+"&kode-pendaftaran="+validasiNode.value);
        request.send();
        
        request.onreadystatechange = function () {
            
            if ((request.readyState == 4) && (request.status = 200 )){
                var checkKodeVar = request.responseText;
                
                if (checkKodeVar == kodeNode.innerHTML){
                    
                    h3Node.appendChild (textNode);
                    loadingNode.appendChild (h3Node);
                    bodyNode.appendChild (loadingNode);
                    loadingNode.classList.add ("loading");
                    
                    request.open ("GET","ajax.php?time="+Math.random()+"&kode-ok=ok"+"&email="+dbEmailNode.value+
                                  "&nama_depan="+dbDepanNode.value+"&nama_belakang="+dbBelakangNode.value+
                                  "&telepon="+dbTeleponNode.value+"&password="+dbPasswordNode.value);
                    request.send();
                    
                    request.onreadystatechange = function () {
                        if ((request.readyState == 4) && (request.status = 200 )){
                            if (request.responseText == "oke"){
                                
                                window.location.replace ("../");     
                                console.log ("go to index");
                            }
                        }
                    };
                }
                
            }
            
        };
    }
    
    validasiNode.addEventListener ("keyup",callAjax);
    
}









