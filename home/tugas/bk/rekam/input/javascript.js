var kognitifBoxNode = document.getElementsByClassName ("kognitif-box");
var arr = [];
function isChecked (e){
        var kognitifInputNode = document.getElementById ("kognitif-input");
        
        console.log(e.target.checked);
        if (e.target.checked){
            
            arr.push ("* "+e.target.value);
            
        }
        else {
            // check apakah ada keterang tersebut didalam array
            
            console.log (arr.indexOf ("* "+e.target.value));
            if (arr.indexOf ("* "+e.target.value) != -1){
                var index = arr.indexOf ("* "+  e.target.value);
                
                arr.splice (index,1);
                
            }
        }
        kognitifInputNode.value = arr.join ("");
        console.log (arr);
       
    }


for (var i = 0 ; i < kognitifBoxNode.length ; i++){
    kognitifBoxNode[i].addEventListener ("click",isChecked);
}