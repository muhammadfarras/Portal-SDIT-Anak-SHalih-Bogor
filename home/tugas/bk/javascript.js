window.addEventListener ("load",function (){
    var listNode = document.getElementsByTagName("select");

    


    
    function click (e){
        var pdfNode = e.target.parentNode.nextSibling.nextSibling;
        var emailNode = pdfNode.nextSibling.nextSibling;
        var its = e.target.value;
        
        
        
        var hrefPdf = pdfNode.getAttribute("href");
        var newhrefPdf = hrefPdf.substring(0,hrefPdf.length-1)+its;
        
        var hrefEmail = emailNode.getAttribute("href");
        var newhrefEmail = hrefEmail.substring(0,hrefEmail.length-1)+its;
        
        pdfNode.setAttribute ("href",newhrefPdf);
        emailNode.setAttribute ("href",newhrefEmail);
        
        console.log (hrefPdf);
        console.log (hrefEmail);
        
        
    }
    
    for (var i = 0 ; i < listNode.length ; i++){
        listNode[i].addEventListener ("change",click);

    }
    
    
});





