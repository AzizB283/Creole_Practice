$(document).ready(function(){
    $("#hide").click(function(){
        $("#hideshow").hide();

    });

    $("#show").click(function(){
        $("#hideshow").show();

    });

    
    // id selector
   $("#parabutton").click(function(){
    $("#para").css("color","red");
   })



   // class selector
   $(".parabtn").click(function(){
    $(".para").css("font-size","20px");
   })



   // button selector
   $("#btn").click(function(){
    $("button").css("border","2px solid green");
   })


   // anchor tag selector
   $("#anchorhide").click(function(){
    $("[href]").hide();
   })

   $("#anchorshow").click(function(){
    $("[href]").show();
   })



   // table tag selector

   $("#evenrow").click(function(){
    $("tr:even").hide();
   })


   $("#oddrow").click(function(){
    $("tr:odd").hide();
   })



});