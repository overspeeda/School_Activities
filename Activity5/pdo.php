<?php
$dsn = 'mysql:host=localhost;dbname=edangalino'; //Data source Name
$username = 'admin';
$password = '123';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8');

 $conn = new PDO($dsn, $username, $password,$options);
 ?>