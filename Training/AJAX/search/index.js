$(document).ready(function(){

    $("#fname").keyup(function(e){
      console.log(e.target.value);
        
        $.ajax('gethint.php?q='+ $("#fname").val(),{
            success: function(response) {
            $("#txtHint").html(response);
  },
  error: function() {
    alert('There was some error performing the AJAX call!');
  }

        })
    })
})

console.log("Hello");


// using vanilla js

// function showHint(str) {
//     if (str.length == 0) {
//       document.getElementById("txtHint").innerHTML = "";
//       return;
//     } else {
//       var xmlhttp = new XMLHttpRequest();
//       xmlhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//           document.getElementById("txtHint").innerHTML = this.responseText;
//         }
//       };
//       xmlhttp.open("GET", "gethint.php?q=" + str, true);
//       xmlhttp.send();
//     }
//       }