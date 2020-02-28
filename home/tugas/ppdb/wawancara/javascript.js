/*
 * Bismillah
 * SDIT Anshal, 8 Januari 2020
 * 08:57 PM
*/

var divJob = document.getElementsByName ("job");

window.addEventListener ("load",function(){
    var divRadio = document.getElementsByTagName ("input");
    

    function callBack (e) {
            
            if (e.target.getAttribute ("type") == "radio" ){
                if (e.target.checked) {
                    console.log (e.target.parentNode);
                    e.target.parentNode.classList.add ('checked');
                }
                else {
                    e.target.parentNode.classList.remove ('checked');
                }
            }
            
        }
        
    function notChecked() {
        for (var i = 0 ; i < divRadio.length ; i ++){
            if (divRadio[i].checked){
                divRadio[i].parentNode.classList.add ('checked');
            }
            else {
                divRadio[i].parentNode.classList.remove ('checked');
            }
        }
    }

    for (var i = 0 ; i < divRadio.length ; i ++){
        
        divRadio[i].addEventListener ("click",callBack);
        
    }
    window.setInterval (notChecked,100);
});




