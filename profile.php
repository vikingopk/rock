<html>
	<head>
		<title>SOCIETYROCK</title>
		<link rel="stylesheet" text="text/css" href="estilo.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="Believe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstarp-css -->
<link href="css2/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstarp-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!--js-->
<script src="js/jquery.min.js"></script>
<style>
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
} 
</style>
	</head>
	<body>
		<?php include 'connect.php'; ?>
		<?php include 'functions.php'; ?>

		<?php include 'header.php'; ?>

		<div id="body">
		<?php
		$my_id = $_SESSION['user_id']; //user_id'
		if(isset($_GET['user']) && !empty($_GET['user'])){ //u_id
			$u_id = $_GET['user']; //u_id ver porque resulta si le colocas  $user y lo mismo abajo
		}else{
			$u_id = $_SESSION['user_id']; //user_id no desaparece el boton pero manda error en las lineas 52, 53, 57
		}

		echo '<b>'.getuser('username', $u_id).'</b>';
		?>	
		<hr/>
		<?php
			if ($u_id != $_SESSION['user_id']) { // $u_id  user_id
				$check = mysql_query("SELECT id FROM follow WHERE user_one='$my_id' AND user_two='$u_id'");
				if (mysql_num_rows($check) == 1) {
					echo "<a href='actions.php?action=unfollow&u_id=$u_id' class='more'>Unfollow</a>"; //u_id cambiar
				}else{
					echo "<a href='actions.php?action=follow&u_id=$u_id ' class='more'>Follow</a>"; //u_id cambiar
				}
			}
		?>
		<hr/>
		Followers:
		<?php
			$check_followers = mysql_query("SELECT id FROM follow WHERE user_two='$u_id'");
			echo mysql_num_rows($check_followers);
		?>
		<br/>
		Followings:
		<?php
			$check_followings = mysql_query("SELECT id FROM follow WHERE user_one='$u_id'");
			echo mysql_num_rows($check_followings);

		?>

		<a href="https://www.paypal.com/" class="more">Invertir</a>

		</div>	

		
			
			
		
	</body>
</html>