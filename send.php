<html>
	
<head>
<title>SocietyRock - NewMessages</title>
		

<link rel="stylesheet" text="text/css" href="estilo.css" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Believe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstarp-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstarp-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!--js-->
<script src="js/jquery.min.js"></script>
<!--/js-->

</head>
	
<body>

<?php include ("connect.php"); 

include ("functions.php"); 

include ("header.php"); ?>


<?php include ("message_title_bar.php"); ?>

<h3>Message - Private Message Society Rock Members</h3>

</div>


<?php
	if (isset($_GET['user']) && !empty($_GET['user'])) {
		# code...
?>
	<form method="post">
	<?php
		if (isset($_POST['message']) && !empty($_POST['message'])) {
			# code...
			$my_id = $_SESSION['user_id'];
			$user = $_GET['user'];
			$random_number = rand();
			$message = $_POST['message'];

			$check_con = mysql_query("SELECT hash FROM message_group WHERE (user_one='$my_id' AND user_two='$user') OR (user_one='$user' AND user_two='$my_id')");

			if (mysql_num_rows($check_con)==1) {
				# code...
				echo "<p>Conversation Already Started</p>";
			}else{
			mysql_query("INSERT INTO message_group VALUES ('$my_id','$user','$random_number')");
			mysql_query("INSERT INTO messages VALUES ('','$random_number','$my_id',$message')");
			echo "<p>Conversation Started !</p>";
			}
		}

	?>
	Enter Message : <br/>
	<textarea name="message" rows="7" cols="60"></textarea>
	<br/><br/>
	<input type="submit" value="Enviar Mensaje" />	
	</form>

<?php
	echo "You Can Start New Conversation";
	} else {
		echo "<b>Select User: </b>";
		$user_list = mysql_query("SELECT id, username FROM users");
		while($run_user = mysql_fetch_array($user_list)){
			$user = $run_user['id'];
			$username = $run_user['username'];

			echo "<p><a href='send.php?user=$user'>$username</a></p>";
		}
	}


?>

			







</body>

</html>