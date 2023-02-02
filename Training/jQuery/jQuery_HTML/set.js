$(document).ready(function(){

    $("#set").click(function(){
        $("#settext").text("This text is set using jquery");
    })


    $("#setbtn").click(function(){
        $("#sethtml").html("<b>This text is set using jquery</b>");
    })

    $("#val").click(function(){
        $("#name").val("Aziz");
    })

})