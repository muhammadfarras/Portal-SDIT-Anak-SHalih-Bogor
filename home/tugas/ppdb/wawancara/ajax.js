function callAjax (){
    var nopesertaNode = document.getElementById ("no_peserta").value;
    
    var request = new XMLHttpRequest ();
    request.open ("GET","ajax.php?time="+Math.random()+"&current-interview=bos&no-peserta="+nopesertaNode);
    request.send ();
    
    request.onreadystatechange = function () {
        if (request.readyState == 4  && request.status == 200){
            console.log (request.responseText);
        }
    };
    
}

window.setInterval (callAjax,1000);
