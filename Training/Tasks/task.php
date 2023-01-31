<form method="post">
    <label for="">Enter a number : </label>        
 <input type="num" name="num"/>

 <input type="submit" value="Submit">
</form>  


<?php       

$x=0;
$num = $_POST['num'];
// $num=121;
$n=$num; 
while(floor($num))
{  
$mod = $num%10;
$x = $x * 10 + $mod;  
$num = $num/10;
}  

if($n==$x){
    echo "Palindrome";
}else{
    echo "Not palindrome";
}
     
      ?>  