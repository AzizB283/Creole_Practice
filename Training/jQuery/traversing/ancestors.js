$(document).ready(function(){


    // parent

    $("#fspanbtn").click(function(){
        $("#fspan").parent().css("color","red");

    })


    $("#sspanbtn").click(function(){
        $("#sspan").parent().css("color","red");

    })



    // parents

    $("#findall").click(function(){
        $("#aspan").parents().css("color","red");

    })


    $("#finddiv").click(function(){
        $("#aspan").parents("div").css({"color":"green","border":"3px solid green"});
    })



    // parentsUntil 


    $("#pubtn").click(function(){
        $("#puspan").parentsUntil("#pu").css({"color":"red","border":"3px solid red"});
    })
})