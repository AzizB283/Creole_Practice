$(document).ready(function(){

    // siblings

    $("#allsib").click(function(){
        $("#para").siblings().css({"color":"red","border":"2px solid red"});
    })


    $("#psib").click(function(){
        $("#para").siblings("h3").css({"color":"green","border":"2px solid green"});
    })



    // next method - find next element 

    $("#pnext").click(function(){
        $("#para1").next().css({"color":"red","border":"2px solid red"});
    })

    $("#divnext").click(function(){
        $(".parent").next().css({"color":"green","border":"2px solid green"});
    })



    // nextall - return next all elements

    $("#nextall").click(function(){
        $("#para2").nextAll().css({"color":"green","border":"2px solid green"});
    })



    // nextUntil - return until next element

    $("#nextuntil").click(function(){
        $("#para3").nextUntil("a").css({"color":"green","border":"2px solid green"})
    })
})