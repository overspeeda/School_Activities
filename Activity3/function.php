<?php 
    $name="";
    $password="";
    $email="";
    $header="";

if (isset($_POST['login_user'])) {

    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $password = md5($password);
    $header ="User Information";
}
?>





<?php


// function printinfo (){
//     $name="";
//     $password="";
//     $email="";

//     $name = $_POST['name'];
//     $password = $_POST['password'];
//     $email = $_POST['email'];

//     $password = md5($password);

//     echo $name;
//     echo "<br>";
//     echo $email;
//     echo "<br>";
//     echo $password;

// }
// printinfo();

?>