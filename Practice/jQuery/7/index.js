$(document).ready(function(){

    $("#btn").click(function(){
        $("#myTable tr:not(:first-child)").remove()
    })
})