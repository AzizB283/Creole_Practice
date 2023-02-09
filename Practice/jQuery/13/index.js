$(document).ready(function(){

    // var value = value.html($("input:checked").val());
    // // console.log(value)

    // $("span").text(value);

    $("#btn").click(function(){
        var value = $('input:checked').val()

        $("#span").text(value);
    })
})
console.log("hello")