$(document).ready(function(){

    $("#table").on("keyup",function(){
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(value)> -1)
        });
    });


    $("#list").on("keyup",function(){
        var lvalue = $(this).val().toLowerCase();
        
        $("#myList li").filter(function (){
            $(this).toggle($(this).text().toLowerCase().indexOf(lvalue)>-1);
        })
    })


    $("#any").on("keyup",function(){
        var val = $(this).val().toLowerCase();

        $("#myId *").filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(val)>-1);
        })
    })
});