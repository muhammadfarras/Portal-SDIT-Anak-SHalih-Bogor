function callAjax (){
    var nopesertaNode = document.getElementById ("no_peserta").value;
    
    var request = new XMLHttpRequest ();
    request.open ("GET","ajax.php?time="+Math.random()+"&current-interview=bos&no-peserta="+nopesertaNode);
    request.send ();
    
    request.onreadystatechange = function () {
        if (request.readyState == 4  && request.status == 200){
            
        }
    };
    
}

function callAjaxTime () {
    
    var request = new XMLHttpRequest ();
    request.open ("GET","ajax-time.php?time="+Math.random()+"&current-time=bos");
    request.send ();
    
    request.onreadystatechange = function () {
        if (request.readyState == 4  && request.status == 200){

            var currentTime =  (request.responseText);
            document.getElementById ("time").innerHTML = currentTime;
            
        }
    };
}

function timeNow () {
    var beginningDate = ((new Date().valueOf()) / 1000);
    beginningDate = Math.round (beginningDate);
    var currentTime = document.getElementById ("time").innerHTML = beginningDate; 
    return currentTime;
    
}
var timeNow = timeNow();

function countDown (){
    var timeNow = window.timeNow;
    var currentTime = document.getElementById ("time").innerHTML;
    
    var showCurrentTime = document.getElementById ("time-show");
    var running = (currentTime - timeNow);
    
    
    var seconds = running % 60;
    
    if (String (seconds).length == 1){
        seconds = "0"+seconds;
    }
    
    var minutes = running / 60;
    minutes = Math.round(minutes);
    if (String (minutes).length == 1){
        
        minutes = "0"+minutes;
    }
    
    
    
    
    if(running >= 300){
        showCurrentTime.innerHTML = "waktu yang telah dihabiskan, "+minutes+" : "+seconds+"<br>Sisa waktu kurang dari 5 menit ";
    }
    else if(running >= 540) {
        showCurrentTime.innerHTML = "waktu yang telah dihabiskan, "+minutes+" : "+seconds+"<br>Sisa waktu kurang dari 1 menit ";
    }
    else if(running >= 600) {
        showCurrentTime.innerHTML = "waktu yang telah dihabiskan, "+minutes+" : "+seconds+"<b><br>Waktu wawancara telah habis . . .</b>";
    }
    else {
        showCurrentTime.innerHTML = "waktu yang telah dihabiskan, "+minutes+" : "+seconds;
    }
}

window.setInterval (callAjax,1000);
window.setInterval (callAjaxTime,1000);
window.setInterval (countDown,1000);