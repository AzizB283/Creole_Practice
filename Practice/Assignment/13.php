<?php

function checkemail($email){
    if(preg_match("/^([a-z0-9]+)@([a-z]+\.)+([a-z]{2,5})$/",$email)){
        return 'true';

}
else {
    return 'false';
}
}


$firstemail = checkemail("somebody@somewhere");
$secondemail = checkemail("person@company.com");


echo $firstemail;
echo "<br>";
echo $secondemail;
?>