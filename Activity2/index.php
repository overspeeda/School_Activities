<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <title>Guess Game</title>
</head>
<body>
    <div class="start-screen">
    <pre>
      _____                                       _____                   
     / ____|                     _               / ____|                  
    | |  __ _   _  ___  ___ ___ |_|_____ _____  | |  __  ____ _    _  ___ 
    | | |_ | | | |/ _ \/ __/ __|| |  _  |  _  | | | |_ |/ _  | \  / |/ _ \
    | |__| | |_| |  __/\__ \__ \| | | | | |_| | | |__| | |_| |  \/  |  __/
     \_____|\__,_|\___||___/___/|_|_| |_|____ |  \_____|\__,_|_|  |_|\___|
                                         ___| |                           
                                        |_____|                           

    </pre>

    </div>
    <form method="POST">

            <input class="input_1" type="text" name="num1" placeholder="Enter Number Here!">

            <button class="start" name="guess">Guess</button>

    </form>
    
    <div class="answer">
        <p><?php echo $result; ?></p>
    </div>

    <footer>
        <div class="footer-content">
            <h1>Edangalino, Elbernie P.</h1>

            <div class="row">
                <div class="footer-column">
                    <h1>Course: BET-CpET 3DNS</h1>
                </div>

                <div class="footer-column">
                    <h1>Prof: Mr. Jonathan Taylar</h1>
                </div>

                <div class="footer-column">
                    <h1>Subject: Web App Programming</h1>
                </div>
            </div>

           <p>Date of Submission: November 13, 2021</p>
    </footer>
</body>
</html>