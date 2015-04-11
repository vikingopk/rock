<html>
	<head>
		<title>SOCIETYROCK - Login</title>
		<link rel="stylesheet" text="text/css" href="estilo.css" />
	</head>
	<body>
		<?php include 'connect.php'; ?>
		<?php include 'functions.php'; ?>

		<?php include 'header.php'; ?>

		<div id="body">
		<b>Login</b>
		<br/><br/>

		<form method='post' >

		<?php
			if (isset($_POST['submit'])) {
				# code...
				$username = $_POST['username'];
				$password = $_POST['password'];
				if (empty($username)or empty($password)) {
					# code...
					$message = "Casilla vacia, inserte datos por favor:";
				}else{
					$check = mysql_query("SELECT id from users where username='$username' and password='".md5($password)."'");
					if (mysql_num_rows($check) == 0) {
						# code...
						$message = "usuario o contraseña incorrecta";
					}else{
						$run = mysql_fetch_array($check);
						$id = $run['id'];
						$_SESSION['user_id'] = $id;
						header('location: index.php');

					}
				}
				echo "<div id='box'>$message</div>";
			}
		?>
		Usuario<br/>
		<input type='text' name='username' />
		<br/><br/>
		Password
		<input type='password' name='password' />
		<br/><br/>
		<input type='submit' name='submit' value='Entrar' />
			
		</form>
			
		</div>
	</body>
</html>