var a = $.noConflict();

a(document).ready(function(){
    a("button").click(function(){
        a("#p").css({"color":"green","background-color":"yellow"});
    })
})

console.log("hello");