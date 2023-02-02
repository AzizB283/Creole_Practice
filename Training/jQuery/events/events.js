$(document).ready(function(){

    $("#click").click(function(){
        $("#para").css("font-weight","bold");
    });

    $("#dblclick").dblclick(function(){
        $("#para").css("font-style","italic");
    });

    $("#mouse").mouseenter(function(){
        $("#para").css("text-decoration","underline");
    })

    $("#mouse").mouseleave(function(){
        $("#para").css("text-decoration","none");
    })


    $("#hover").hover(function(){
        $("#formpara").css("color","red");
    })


    $("#focus").focus(function(){
        $("#formpara").css("background-color","lightblue");
    })

    $("#blur").blur(function(){
        $("#formpara").css("background-color","green");
    })


    $("#downup").mousedown(function(){
        $("#para").hide();
    })

    $("#downup").mouseup(function(){
        $("#para").show();
    })


    $("#on").on({

        click : function(){
            $("#para").css("background-color","lightgreen");
        },

        mousedown : function(){
            $("#para").css("color","red");
        }
    })





    // Keyboard events

    $("#keypress").click(function(){

        $(document).keypress(function(e){
            var s = String.fromCharCode(e.which);
            if (s.match(/[a-zA-Z0-9\.]/))
            alert("You pressed " + s);
        });
    });



    $("#keydown").click(function(){

        $(document).keydown(function(e){
            var s = String.fromCharCode(e.which);
            if (s.match(/[a-zA-Z0-9\.]/))
            alert("You pressed " + s);
        });
    });


    var x = 0;
    $(window).resize(function(){
        $("span").text(x += 1);
    });

    $( "#resize" ).prepend( "The size of the window is : ",$( window ).width(),"px");


});


$(window).load(function(){
    alert("Load function is used");
})