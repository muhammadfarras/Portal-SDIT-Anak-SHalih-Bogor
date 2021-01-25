/**
Bismillah
SDIT Anshal 2020
09 November 2020
*/

// node di text form
var nodeFind = document.getElementById('FindNama');
var nodeResult = document.getElementById ('result-container');
var modalNode = document.getElementById ("myModal");
var nodeModalTitle = document.getElementById ("ModalTitle");
var nodeModalBody = document.getElementById("modal-body");

// Span error
var nodeSpanError = document.getElementById ("spanError");

// node dalam modalNode
var nodeNama = document.getElementById ("NamaSiswa");
// Id peserta diinisialisasi saat modal show
var idPeserta;

var nodeField = document.getElementById ("fieldId");

// nodeToast
var nodeToast = document.getElementById ("isiToast");

//node modal button print dan kirim email beserta text form nama panggilan dan no peserta
var nodePrintDanKirim = document.getElementById ("modalBtn");
var nodeTextNoPeserta = document.getElementById ("NoPeserta");
var nodeTextNamaPanggilan = document.getElementById ("NamaPanggilan");

// var node loading page
var nodeLoadingPage = document.getElementById ("loading-page");



// function ajax untuk membuat file pdfnya dan kirim email
function ajaxCreateAndSendPDF () {

  // showloading page first

  var arr = [nodeTextNamaPanggilan.value,nodeTextNoPeserta.value];
  arr = JSON.stringify (arr);
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

      console.log (this.responseText);
      var hasil = JSON.parse(this.responseText);

      // jika status code 1 (Berhasil)
      if (hasil.status == 1){
        nodeSpanError.classList.add ("sr-only");
        nodeSpanError.innerHTML = "";

        // merahkan bg
        nodeTextNoPeserta.classList.remove ("error-input");


        // Close modal
       $('#myModal').modal('hide');

       // Show Toast
       $(document).ready(function(){
         $('.toast').toast('show');
       });

       isiToast.innerHTML = hasil.text+"\n"+
       'Mohon print bukti verifikasi pada -> <a href="'+location.href+'download-file.php?file='+hasil.file+'">Klik disini</a>';
       ;

       // clean form pencarian
       nodeFind.value = "";


       // Clearn Form di modal
       nodeTextNoPeserta.value = "";
       nodeTextNamaPanggilan.value = "";

       // clean result container
       nodeResult.innerHTML = "";

       nodeLoadingPage.classList.replace ("full","sr-only");
      }
      else {

        // Jika ada error
        nodeLoadingPage.classList.replace ("full","sr-only");


        nodeSpanError.classList.remove ("sr-only");
        nodeSpanError.innerHTML = hasil.text;
        nodeTextNoPeserta.classList.add ("error-input");

      }
    }
  };
  xmlhttp.open("GET", "output/?no_id="+nodeTextNoPeserta.value, true);
  xmlhttp.send();
  // saat dikirim
  nodeLoadingPage.classList.replace ("sr-only","full");
}


// function untuk triger button kirim dan dan download pdf
function printAndSend () {


  if (nodeTextNoPeserta.value != "" && nodeTextNamaPanggilan.value != ""){

    //buat ajax untuk membuat file pdfnya ada diatas functionnya

    ajaxCreateAndSendPDF ();
    // console.log ("is not empty");

  }
}


nodePrintDanKirim.addEventListener ("click",printAndSend);
/*=================================================================*/







function showDetail (){
  console.log (this.attributes.target.value);
  // Header nama
  nodeModalTitle.innerHTML = "Penyesuaian Data";



  $('#myModal').modal('show');
  // runAjaxModal
  runAjaxModal(this.attributes.target.value);
}





// Run ajax for modal show
function runAjaxModal (target){
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // json decode

      var hasil = JSON.parse (this.responseText);

      nodeTextNoPeserta.value = hasil.no_peserta;
      nodeTextNamaPanggilan.value = hasil.nama_panggilan;
      nodeNama.value = hasil.nama_panjang;

      console.log (hasil);
    }
  };
  xmlhttp.open("GET", "post.php?type=modal&data="+target , true);
  xmlhttp.send();
}






function runAjax () {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if (nodeFind.value != ""){

        if (this.responseText[1] == 0){
          nodeResult.innerHTML= '<p class="lead"><b>Data tidak ditemukan</b></p>';
        }
        else {
          // jika data yang dicari ada
          nodeResult.innerHTML= this.responseText;
          var button = document.getElementsByName('tujuan');


          for (var i = 0 ; i < button.length ; i++){
            button[i].addEventListener ("click",showDetail);
          }
        }
      }
    }
    else {
      nodeResult.innerHTML = '<p class="lead"><b></b></p>';
    }
  };
  xmlhttp.open("GET", "post.php?type=list&data="+nodeFind.value , true);
  xmlhttp.send();
}


nodeFind.addEventListener ('input',runAjax);




/*poop over */
var kontenPola = '<small>[No urut]-[L atau P]-[PPDB]-[Tahun Pelajaran]-[Kelompok]<hr>';
kontenPola += '<ol><li>No urut harus memiliki 3 digit angka</li>';
kontenPola += '<li><b>L</b> untuk ikhwan dan <b>P</b> untuk akhwat</li>';
kontenPola += '<li>PPDB harus huruf besar semua</li>';
kontenPola += '<li>Tahun pelajaran harus tahun pelajaran dibuka ppdb dengan seperator <i>slash</i> <b>/</b></li>';
kontenPola += '<li>Nomor kelompok ditulis dengan huruf romawi</li></ol>';
kontenPola += '<b><small class="text-muted">Contoh : </small>001-L-PPDB-2021/2022-II </b>';
kontenPola += '';
kontenPola += '</small>';



$(function () {
$('#myPopOver').popover({
  content: kontenPola,
  html: true,
  trigger : 'hover',
  title : 'Pola Penulisan Nomor Peserta',
  delay : { "show": 200, "hide": 300 },
  placement : 'right',
  container: 'body'
  })
})
