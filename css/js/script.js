
const errorMessage = "There was an error while processing the request";

"use strict";
$(document).ready(function() {
    $("#btnSubTitle").on("click", function () {
        
        const txtTitle =$("#txtTitle").val().trim();
        console.log(txtTitle);
        if (txtTitle=="") {
           
            window.location.href ="go.php";
            
        }
        else{
            alert("Enput dsjbsjfhksjfjksn");
                    
        }   
});
    });