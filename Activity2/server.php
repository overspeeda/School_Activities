<?php

$result="";

if(isset($_POST['guess'])){
    
    $num1 =$_POST['num1'];


    if($num1 == 50)
    {
        $result = "Congratulations, you are right!";

    }
    else if(empty($num1))
    {
        $result = "Missing guess parameter";

    }
    else if(!is_numeric($num1))
    {
        $result="Your guess is not a number";

    }
    else if($num1 >= 50)
    {
        $result = "Your guess is too high!";
        
    }
    else if($num1 <= 50)
    {
        $result = "Your guess is too low!";
        
    }

 
}
?>