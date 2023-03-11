<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="design.css"> -->
    <title>Guessing Game!</title>
</head>
<body>

    <form method="POST">

        <input name="num1" type="text"> 
        <button name="guess">SUBMIT</button>
        <p><?php echo $result; ?> </p>

    </form>
</body>
</html>