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

// nodeToast
var nodeToast = document.getElementById ("isiToast");

function htmlEntities(str) {
    return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
}

function clearNode (){
  inputNama.value = "";
  inputNamaAyah.value = "";
  inputemailayah.value = "";
  inputHpAyah.value = "";
  inputNamaIbu.value = "";
  inputEmailIbu.value = "";
  inputHpIbu.value = "";
}


function placeOnSpan (e) {

  var attributeModal = document.createAttribute("data-toggle");
  // Make sure the data is fill document
  e.preventDefault();
if (inputNama.value == "" || inputNamaAyah.value == "" || inputemailayah.value == "" || inputHpAyah.value == ""
    || inputNamaIbu.value == "" || inputEmailIbu.value == "" || inputHpIbu.value == ""){
      alert("Tidak boleh ada data yang kosong");

      // check jika ada yang dihapus
      if (btnSubmit.hasAttribute("data-toggle")){
        btnSubmit.removeAttribute ("data-toggle");
      }
}
else {
  // add Atribute
  //  data-toggle="modal"

  attributeModal.value = "modal";

  // masukan attribute kedalam nodeSubmit
  btnSubmit.setAttributeNode (attributeModal);

}

  spanNama.innerHTML = htmlEntities(inputNama.value);
  spanNamaAyah.innerHTML = htmlEntities(inputNamaAyah.value);
  spanemailayah.innerHTML = htmlEntities(inputemailayah.value);
  spanHpayah.innerHTML = htmlEntities(inputHpAyah.value);
  spanNamaibu.innerHTML = htmlEntities(inputNamaIbu.value);
  spanEmailIbu.innerHTML = htmlEntities(inputEmailIbu.value);
  spanHpIbu.innerHTML = htmlEntities(inputHpIbu.value);
}

function runAjax () {
  

  var arr = [inputNama.value,inputNamaAyah.value,inputemailayah.value,inputHpAyah.value,inputNamaIbu.value,inputEmailIbu.value,inputHpIbu.value];
  var namaUpdate = arr[0];
  arr = JSON.stringify (arr);
  console.log (arr)
  var xmlhttp = new XMLHttpRequest();
  console.log (xmlhttp);
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

      if (this.responseText == "berhasil"){

        // show toast
        $(document).ready(function(){
          $('.toast').toast('show');
        });

        // close modal
       $('#exampleModal').modal('hide');

       isiToast.innerHTML = "Alhamdulillah data an <b>"+namaUpdate+"</b> telah diupdate";

       // Menghapus semua node
        clearNode();


      }
    }
  };
  xmlhttp.open("GET", "post.php?data=" + arr, true);
  xmlhttp.send();
  console.log ("oke")
}





btnSubmit.addEventListener ("click",placeOnSpan);
btnSure.addEventListener ("click",runAjax);
