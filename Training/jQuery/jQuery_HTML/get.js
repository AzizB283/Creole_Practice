$(document).ready(function(){


    $("#gettext").click(function(){
        alert ("Text : " + $("#getparatext").text());
    });

    $("#gethtml").click(function(){
        alert ("HTML : " + $("#getparahtml").html());
    });


    $("#submit").click(function(){
        alert ("Your name is : " + $("#name").val());
    })


    $("#attr").click(function(){
        alert($("#google").attr("href"));
    })
});
