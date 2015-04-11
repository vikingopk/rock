<html>
	<head>
		<title>SOCIETYROCK - Registro</title>
		<link rel="stylesheet" text="text/css" href="estilo.css" />
		
	</head>
	<body>
		<?php include 'connect.php'; ?>
		<?php include 'functions.php'; ?>

		<?php include 'header.php'; ?>

		<div id="body">
		<b>Registrate Aqui</b>
		<br/><br/>

		<form method='post'>

		<?php
			if (isset($_POST['submit'])) {
				# code...
				$username = $_POST['username'];
				$password = $_POST['password'];
				if (empty($username)or empty ($password)) {
					# code...
					$message = "Casilla vacia, inserte datos por favor:";
				}else{
					mysql_query("INSERT INTO users VALUES('','$username', '".md5($password)."')");
					$message ="Usuario ingresado con exito!";
				}
				echo "<div id='box'>$message</div>";
			}

		?>
		Usuario
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