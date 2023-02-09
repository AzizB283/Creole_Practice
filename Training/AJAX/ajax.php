<html>
<head>
<!-- <script>
  function showUser(str) {
    if (str == "") {
      document.getElementById("txtHint").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET","database.php?id="+str,true);
      xmlhttp.send();
    }
  }
</script> -->

<script src="jquery.min.js"></script>
<script>
  $(document).ready(function(){
    console.log("hello")

    $("#select").click(function(){
      $.ajax ('database.php?id=' + $("#select").val(),{

        success : function(response){
          $("#txtHint").html(response);
        },

        error : function(){
          alert("There was an error in displaying responce");
        }
      }
      )
    })
  })
</script>
</head>
<body>

<form>
<select name="users" id="select" >
  <option value="">Select a name:</option>
  <option value="1">Aziz</option>
  <option value="3">Priyansh</option>
  <option value="4">Smit</option>
  <option value="5">Taher</option>
  <option value="6">Sid</option>
  <option value="7">Raj</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>