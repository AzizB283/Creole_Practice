

// using pure js
// let fetchBtn = document.getElementById('fetchBtn');


//     fetchBtn.addEventListener('click', buttonClickHandler);

//     function buttonClickHandler() {
//      console.log('You have clicked the fetchBtn');

//     // Instantiate an xhr object
//     const xhr = new XMLHttpRequest();

//     // Open the object
//     // xhr.open('GET', 'https://jsonplaceholder.typicode.com/todos/1', true);

//     // USE THIS FOR POST REQUEST
//     xhr.open('POST', 'https://dummy.restapiexample.com/api/v1/create', true);
//     xhr.getResponseHeader('Content-type', 'application/json');


//     // What to do on progress (optional)
//     xhr.onprogress = function(){
//         console.log('On progress');
//     }


//     // xhr.onreadystatechange = function () {
//     //     console.log('ready state is ', xhr.readyState);

//     // }

//     // What to do when response is ready
//     xhr.onload = function () {
//         if(this.status === 200){

//             // console.log(this.responseText)
//             document.getElementById("list").innerHTML = this.responseText;
//         }
//         else{
//             console.log("Some error occured")
//         }
//     }

//     // send the request
//     params = `{"name":"test34sad545","salary":"123","age":"23"}`;
//     xhr.send(params);

//     console.log("We are done!");

// }



// using jquery
$(document).ready(function () {

    $("#fetchBtn").click(function () {

        $.ajax({
            url: "https://jsonplaceholder.typicode.com/todos/1",
            type: "GET",
            dataType: "json",


            success: function (response) {
                var data = "<ul>";
                data += "<li>ID: " + response.id + "</li>";
                data += "<li>Title: " + response.title + "</li>";
                data += "<li>Completed: " + response.completed + "</li>";
                data += "</ul>";
                $("#list").html(data);

            },

            error: function () {
                alert("There was an error in displaying responce");
            }
        })

    })

})




// using pure js

    // let popBtn = document.getElementById('popBtn');
    // popBtn.addEventListener('click', popHandler);

    // function popHandler() {
    //     console.log('You have clicked the pop handler');

    //     // Instantiate an xhr object
    //     const xhr = new XMLHttpRequest();

    //     // Open the object
    //     xhr.open('GET', 'https://dummyjson.com/products/1', true);


    //     // What to do when response is ready
    //     xhr.onload = function () {
    //         if(this.status === 200){
    //             let obj = JSON.parse(this.responseText);
    //             console.log(obj);
    //             let list = document.getElementById('list');
    //             str = "";
    //             for (key in obj)
    //             {
    //                 str += `${obj[key]}<br>`;
    //             }
    //             list.innerHTML = str;
    //         }
    //         else{
    //             console.log("Some error occured")
    //         }
    //     }

    //     // send the request
    //     xhr.send();
    //     console.log("We are done fetching employees!");

    // }


// using jQuery 

$(document).ready(function () {

    $("#popBtn").click(function () {
        console.log('You have clicked the pop handler');

        $.ajax({
            type: "GET",
            url: "https://dummyjson.com/products/1",
            success: function (response) {
                console.log(response);
                let data = "";
                for (key in response) {
                    data += response[key] + "<br>";
                }
                $("#list").html(data);
            },
            error: function () {
                console.log("Some error occurred");
            }
        });
        console.log("We are done fetching employees!");
    });
});

