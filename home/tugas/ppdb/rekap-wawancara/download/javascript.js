/**
Bismillah
SDIT Anshal 2021
07 Januari 2021
*/

// node di text form
// var btn_21 = document.getElementById ("btn_21");
// var btn_22 = document.getElementById ("btn_22");
// var btn_23 = document.getElementById ("btn_23");
// var btn_24 = document.getElementById ("btn_24");
// var btn_25 = document.getElementById ("btn_25");
// var btn_26 = document.getElementById ("btn_26");

var allBtn = document.getElementsByName ("btn_year");

function setAllBtnToEventClick () {

  for (var i = 0 ; i < allBtn.length ; i++){
    allBtn[i].addEventListener("click",onClick);
  }
}
setAllBtnToEventClick ();

function onClick (){
  // create form first

  var f = document.createElement('form');
  f.action='http://192.168.1.201/portal/home/tugas/ppdb/rekap-wawancara/download/output/';
  f.method='POST';

  var i=document.createElement('input');
  i.type='hidden';
  i.name='year';
  i.value=this.id;
  f.appendChild(i);

  document.body.appendChild(f);
  f.submit();
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
