$(document).ready(function(){

    $("#btn").click(function(){
       var count = $('input:checkbox').length;
       $("#res").append(count)
    })
})

console.log("heloo")