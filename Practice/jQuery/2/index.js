$(document).ready(function(){

    $("#num").keyup(function(e){
        var value = $("#num").val()
        var length = value.length
        var remain = 10 - length

        if(remain>0){
            $("span").append().text(remain)
        }
        else{
            $("span").append().text("You have entered 10 characters")
        }
        
    })

})

console.log("hello")