// const fetchBtn = document.getElementById("fetchBtn");
// const countries = document.getElementsByClassName("countries");
// const capitals = document.getElementsByClassName("capitals");
  
// fetchBtn.addEventListener("click", buttonHandler);
  
// // Defining buttonHandler function
// function buttonHandler() {
  
//     // First create an XMLHttprequest object
//     const xhr = new XMLHttpRequest();
//     xhr.open("GET", "capitals.json", true);
//     xhr.getResponseHeader("Content-type", "application/json");
  
//     xhr.onload = function() {
//         const obj = JSON.parse(this.responseText);
//         Array.from(countries).forEach((country, index) => {
//             country.innerText = obj.countries_capitals[index].country;
//         });
  
//         Array.from(capitals).forEach((capital, index) => {
//             capital.innerText = obj.countries_capitals[index].capital;
//         });
//     }
  
//     xhr.send();
// }




$(document).ready(function() {
    console.log("hello");
    $("#fetchBtn").click(function() {
      $.ajax({
        url: "capitals.json",
        type: "GET",
        dataType: "json",
        success: function(obj) {
          $(".countries").each(function(index) {
            $(this).text(obj.countries_capitals[index].country);
          });
    
          $(".capitals").each(function(index) {
            $(this).text(obj.countries_capitals[index].capital);
          });
        }
      });
    });
  });
  