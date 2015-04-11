<div id="header">

	<div id="left">
		<b>SOCIETYROCK</b>
		
	</div>
	<div id="right">
		
		<a href='reproductor.php'>Upload</a>
		<a href='index.php'>Home</a>
		<form action="buscar.php" method="post">
				<input type="text" name="consulta" />
				<input type="submit" name="buscar" value="Buscar" />
		</form>

		<?php
		if (loggedin()) {
			# code...
			
		?>
			<a href='profile.php'>Profile</a>
			<a href='friends.php'>Friends</a>
			<a href='members.php'>Members</a>
			<a href='messages.php'>Messages</a>
			<a href='logout.php'>Log Out</a>
		<?php
		}else {
		?>
			<a href='news.php'>News</a>
			<a href='bandas.php'>Bands</a>
			<a href='login.php'>Log In</a>
			<a href='register.php'>Create New Account</a>

		<?php

		}
		?>
		
	</div>
	<div class="clear">
		
	</div>


	
</div>