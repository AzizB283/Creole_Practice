$(document).ready(function () {

    // hide/show effect

    $("#hide").click(function () {
        $("#hideshow").hide();
    })

    $("#show").click(function () {
        $("#hideshow").show();
    })


    $("#toggle").click(function () {
        $("#hideshow").toggle();
    })


    // fade effect 


    $("#fadeout").click(function () {
        $("#fadepara").fadeOut(1000);
    })

    $("#fadein").click(function () {
        $("#fadepara").fadeIn(2000);
    })


    $("#fadetoggle").click(function () {
        $("#fadepara").fadeToggle(2000);
    })


    $("#fadeto").click(function () {
        $("#fadepara").fadeTo(1000, 0.5);
    })



    // sliding effect

    $("#slidedown").click(function () {
        $("#slidepara").slideDown("slow");
    })

    $("#slideup").click(function () {
        $("#slidepara").slideUp("slow");
    })


    $("#slidetoggle").click(function () {
        $("#slidepara").slideToggle("");
    })


    $("#animate").click(function () {
        $("#animatediv").animate({
            left: '250px',
            opacity: '0.5',
            height: '150px',
            width: '150px'
        },1000);
    })



    // stop effect 

    $("#start").click(function(){
        $("#stopeffect").slideDown(5000);
    })

    $("#stop").click(function(){
        $("#stopeffect").stop();
    });



    // stop animation 
    $("#start").click(function(){
        $("#stopeffect").animate({left: '100px'}, 5000);
        $("#stopeffect").animate({fontSize: '200px'}, 5000);
      });
      
      $("#stop").click(function(){
        $("#stopeffect").stop();
      });
    
      $("#stop2").click(function(){
        $("#stopeffect").stop(true);
      });
    
      $("#stop3").click(function(){
        $("#stopeffect").stop(true, true);
      }); 



      // callback effect 

      $("#callback").click(function(){
        $("#callbackpara").hide(function(){
            alert("Paragraph is now hidden");
        })
      })



      // chaining 

      $("#chaining").click(function(){
        $("#chainingpara").css("font-weight","bold").slideUp(2000).slideDown(2000);
      })

});