<?php
?>

<html>
<head>
<!-- <script>
    function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
    }
</script> -->
<script src="jquery.min.js"></script>

<script>
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
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form action="">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"  >
</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>