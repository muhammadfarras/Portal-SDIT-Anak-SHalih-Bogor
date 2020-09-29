/**
Bismillah
SDIT Anshal 2020
24 September 2020
*/

// node untuk niput di form
var inputNama = document.getElementById ("inputnama");
var inputNamaAyah = document.getElementById ("inputnamaayah");
var inputemailayah = document.getElementById ("inputemailayah");
var inputHpAyah = document.getElementById ("inputhpayah");
var inputNamaIbu = document.getElementById ("inputnamaibu");
var inputEmailIbu = document.getElementById ("inputemailibu");
var inputHpIbu = document.getElementById ("inputhpibu");

//node untuk modal
var spanNama = document.getElementById ("spannama");
var spanNamaAyah = document.getElementById ("spannamaayah");
var spanEmailAyah = document.getElementById ("spanemailayah");
var spanHpayah = document.getElementById ("spanhpayah");
var spanNamaibu = document.getElementById ("spannamaibu");
var spanEmailIbu = document.getElementById ("spanemailibu");
var spanHpIbu = document.getElementById ("spanhpibu");

var btnSubmit = document.getElementById ("buttonSubmit");

// Button di modal
var btnSure = document.getElementById ("btnsure");

function htmlEntities(str) {
    return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
}


function placeOnSpan () {
  spanNama.innerHTML = htmlEntities(inputNama.value);
  spanNamaAyah.innerHTML = htmlEntities(inputNamaAyah.value);
  spanemailayah.innerHTML = htmlEntities(inputemailayah.value);
  spanHpayah.innerHTML = htmlEntities(inputHpAyah.value);
  spanNamaibu.innerHTML = htmlEntities(inputNamaIbu.value);
  spanEmailIbu.innerHTML = htmlEntities(inputEmailIbu.value);
  spanHpIbu.innerHTML = htmlEntities(inputHpIbu.value);
}

function runAjax () {

  var arr = [inputNamaAyah.value,inputemailayah.value,inputHpAyah.value,inputNamaIbu.value,inputEmailIbu.value,inputHpIbu.value];
  arr = JSON.stringify (arr);
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log (this.responseText);
    }
  };
  xmlhttp.open("GET", "post.php?data=" + arr, true);
  xmlhttp.send();
}



btnSubmit.addEventListener ("click",placeOnSpan);
btnSure.addEventListener ("click",runAjax);
