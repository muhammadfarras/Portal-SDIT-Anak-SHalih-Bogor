/*
 * Bismillah
 * SDIT Anshal, 8 Januari 2020
 * 08:57 PM
*/
/*
var noPesertaNode = document.getElementsByClassName ("no-peserta");
    
        
        
function callAjax (){
        var request = new XMLHttpRequest ();
        
        for ( var i = 0 ; i < noPesertaNode.length ; i++ ){
            request.open ("GET","ajax.php?time="+Math.random()+"&current-interview=bos&no-peserta="+noPesertaNode[i].innerHTML);
            request.send ();
        
        
            request.onreadystatechange = function () {
                if (request.readyState == 4  && request.status == 200){
                    noPesertaNode[i].innerHTML =  request.responseText ;
                }
            };
        }
}


window.setInterval (callAjax,1000);
*/