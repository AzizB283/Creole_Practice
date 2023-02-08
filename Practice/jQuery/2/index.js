$(document).ready(function(){

    $("#num").keydown(function(){
        var value = $("#num").val()
        var length = value.length
        var remain = 10 - length

        if(remain<=0){
            $("#remaining").append().text("You have entered 10 characters")
        }else{
            $("span").append().text(remain)
        }
    })
})

console.log("hello")