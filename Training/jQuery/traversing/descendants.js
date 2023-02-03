$(document).ready(function(){

    $("#fcbtn").click(function(){
        $(".div").children().css({"color":"red","border":"2px solid red"});
    })


    $("#scbtn").click(function(){
        $(".div").children("p.first").css({"color":"green","border":"2px solid green"});
    })


    // find method

    $("#allspan").click(function(){
        $(".div").find(".span").css({"color":"red", "border":"2px solid red"})
    })


    $("#alldes").click(function(){
        $(".div").find("*").css({"color":"green","border":"3px solid green"})
    })

})