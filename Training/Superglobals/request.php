<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

<h3>Request</h3><br><br>
<label for="">Enter your name : </label>
<input type="text" name="name" id="">

<input type="submit" value="Submit">

</form>


<?php

// request is used to collect the data after submitting form in html


    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        
    
        if(empty($name)){
            echo "Please fill out field";
        }else {
            echo $name;
            
        }
    
    }






?>