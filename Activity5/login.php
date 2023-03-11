<?php
$msg="Login";

session_start();
if(!empty($_SESSION['email'])) {
header('location:welcome.php');
}
require 'pdo.php';


if(isset($_POST['login_user'])) {

$user = $_POST['email'];
$pass = $_POST['password'];

  if (!preg_match ("/@/", $user) ) {  
    $msg = "Use Email only";  
  }
  if(empty($user) || empty($pass)) {
    $msg = 'All field are required';
  }  

  else {
  $query = $conn->prepare("SELECT email, password FROM students WHERE 
  email=? AND password=? ");
  $query->execute(array($user,$pass));
  $row = $query->fetch(PDO::FETCH_BOTH);

    if($query->rowCount() > 0) {
      $_SESSION['email'] = $user;
      header('location:welcome.php');
    } 
    else {
      $msg = "Username/Password is wrong";
    }
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
if(isset($msg)) {
echo $msg;
}
?>
<form method="POST" action="login.php">

        <label>Email</label>
        <br>
        <input type="text" name="email"></input>
        <br>

        <label>Password</label>
        <br>
        <input type="password" name="password"></input>
        <br>

        <button type="submit" name="login_user">Login</button>
        <br>

    </form>

</html>