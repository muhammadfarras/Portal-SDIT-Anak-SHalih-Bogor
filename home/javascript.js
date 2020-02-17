/*
 * Bismillah
 * SDIT Anshal, 8 Januari 2020
 * 08:57 PM
*/

var divJob = document.getElementsByName ("job");


function giveHrefDiv () {
    
    function callBack (e){
        console.log (e.target.attributes[0].value);
        window.location.assign (e.target.attributes[0].value);
    }
    
    for (var i = 0 ; i < divJob.length ; i++){
        divJob[i].addEventListener ("click",callBack);
    }
    
    
}
