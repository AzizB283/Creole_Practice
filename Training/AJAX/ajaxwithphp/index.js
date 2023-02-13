$(document).ready(function(){
    console.log("hello")

    $("#select").change(function(){
      $.ajax ({
      type: "POST",
      url: 'database.php',
      data: { id: $("#select").val() },

      beforeSend : function(){
        $("#txtHint").html("Please wait...");
      },
     
      success : function(response){
        $("#txtHint").html(response);
      },
      
      error : function(){
        alert("There was an error in displaying responce");
    }
    })

  })
})



//   function showUser(str) {
//     if (str == "") {
//       document.getElementById("txtHint").innerHTML = "";
//       return;
//     } else {
//       var xmlhttp = new XMLHttpRequest();
//       xmlhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//           document.getElementById("txtHint").innerHTML = this.responseText;
//         }
//       };
//       xmlhttp.open("GET","database.php?id="+str,true);
//       xmlhttp.send();
//     }
//   }

