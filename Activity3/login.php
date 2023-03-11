<?php include('function.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  <div class="header">
 	 <h2>Login</h2>
  </div>
	 
  <form method="POST" action="login.php">

		<div class="input-group">
			<label> Full Name</label>
				<div class="webflow-style-input">
					<input type="text" name="name" required></input>
				</div>
		</div>

		<div class="input-group">
			<label>Email Address</label>
				<div class="webflow-style-input">
					<input type="text" name="email" required></input>
				</div>
		</div>

		<div class="input-group label">
			<label>Password</label>
				<div class="webflow-style-input">
					<input type="password" name="password" required></input>
				</div>
		</div>

		<div class="glowing-btn">
			<a>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<button type="submit" class="button2" name="login_user">Login</button>
			</a>
		</div>
		<br>

		<div class="container">
		<div class="box">
			<div class="information">
				<h1><?php echo $header; ?></h1>
				<p>
				<?php
					echo $name;
					echo "<br>";
					echo $email;
					echo "<br>";
					echo $password;
				?>
				</p>
			</div>
		</div>
		</div>


  </form>

</body>

</html>