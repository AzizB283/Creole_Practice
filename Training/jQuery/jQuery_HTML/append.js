$(document).ready(function(){

    $("#append").click(function(){
        $("#appendpara").append("This text is shown using append");
    })



    $("#prepend").click(function(){
        $("#prependpara").prepend("This text is inserted using prepend.")
    })



    $("#create").click(function(){
        var txt1 = document.createElement("p");
        txt1.innerHTML="This is new text";
        
        $("body").append(txt1);   
        txt1.id="createpara1";
           
    })
    
    $("#remove").click(function(){
        $("#createpara1").remove("#createpara1");
    })
})

