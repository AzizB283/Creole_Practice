$(document).ready(function(){

    $("#addclass").click(function(){
        $("p").addClass("para");
        $(".para").append(" <br>The class 'para' is added to paragraph");
    })

    $("#removeclass").click(function(){
        $("p").removeClass("para");
        $("p").append(" <br>The class 'para' is removed from paragraph");
    })


    $("#toggleclass").click(function(){
        $("p").toggleClass("para");
    })



    // add css 

    $("#addcolor").click(function(){
        $(".para1").css("color","Red");
    })


    $("#addbgcolor").click(function(){
        $(".para1").css("background-color","Yellow");
    })

    $("#boldtext").click(function(){
        $(".para1").css("font-weight","bold");
    })

    $("#italictext").click(function(){
        $(".para1").css("font-style","italic");
    })

    $("#undertext").click(function(){
        $(".para1").css("text-decoration","underline");
    })



    // change dimension

    $("#width").click(function(){
        $("#dimension").width("200px");
    })


    $("#height").click(function(){
        $("#dimension").height("200px");
    })


    $("#innerwidth").click(function(){
        var txt = "";
        txt += "Inner width: " + $("#dimension").innerWidth() + "</br>";
        $("#txt").append(txt);
    })


    $("#innerheight").click(function(){
        var txt1 = "";
        txt1 += "Inner height: " + $("#dimension").innerHeight() + "</br>";
        $("#txt").append(txt1);
    })


    $("#outerwidth").click(function(){
        var txt2 = "";
        txt2 += "Outer width: " + $("#dimension").outerWidth() + "</br>";
        $("#txt").append(txt2);
    })


    $("#outerheight").click(function(){
        var txt3 = "";
        txt3 += "Outer height: " + $("#dimension").outerHeight() + "</br>";
        $("#txt").append(txt3);
    })



})