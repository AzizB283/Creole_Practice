$(document).ready(function(){


    // first of div 

    $("#firstpara").click(function(){
        $("p").first().css({"color":"red","border":"2px solid red"});
    })


    $("#firsth3").click(function(){
        $("h3").first().css({"color":"green","border":"2px solid green"});
    })

    $("#lasth3").click(function(){
        $("h3").last().css({"color":"blue","border":"2px solid blue"});
    })


    // eq method - select from specific index

    $("#secpara").click(function(){
        $("p").eq(1).css({"color":"red","border":"2px solid red"})
    })

    $("#frh3").click(function(){
        $("h3").eq(2).css({"color":"green","border":"2px solid green"});
    })


    // filter method 

    $("#filter").on('click',function(){
        $("p").filter(".para").css({"color":"green","border":"2px solid green"})
    })


    $("#not").on('click',function(){
        $("p").not(".para").css({"color":"red","border":"2px solid red"})
    })
})