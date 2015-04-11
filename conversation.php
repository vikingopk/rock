<html>
	
<head>
<title>SocietyRock - Conversations</title>
		

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

<?php $my_id = $_SESSION['user_id']; ?>
<br/>
<div>
<?php
	if (isset($_GET['hash']) && !empty($_GET['hash'])) {
		# code...
		$hash = $_GET['hash'];
		$message_query = mysql_query("SELECT from_id, message FROM messages WHERE group_hash='$hash'");
		while ($run_message = mysql_fetch_array($message_query)) {
			# code...
			$from_id = $run_message['from_id'];
			$message = $run_message['message'];

					$user_query = mysql_query("SELECT username FROM users WHERE id='$from_id'");
					$run_user = mysql_fetch_array($user_query);
					$from_username = $run_user['username'];

			echo "<p><b>$from_username</b><br/>$message</p>";
		}
?>
		<br/>
		<form method="post">
		<?php
		if (isset($_POST['message']) && !empty($_POST['message'])) {
			# code...
			$new_message = $_POST['message'];
			mysql_query("INSERT INTO messages VALUES('','$hash','$my_id','$new_message')");
			header('location: conversation.php?hash='.$hash);
		}

		?>
		Enter Message: <br/>
		<textarea name="message" rows="6" cols="50"></textarea>
		<br/><br/>
		<input type="submit" value="Enviar Mensaje">	
		</form>

<?php
	}else{
		echo "<b>Select Conversation :</b>";
		$get_con = mysql_query("SELECT hash, user_one, user_two FROM message_group WHERE user_one='$my_id' OR user_two='$my_id'");
		while ($run_con = mysql_fetch_array($get_con)) {
			# code...
			$hash = $run_con['hash'];
			$user_one = $run_con['user_one'];
			$user_two = $run_con['user_two'];

			if ($user_one ==$my_id) {
				# code...
					$select_id = $user_two;
			}else{
					$select_id = $user_one;
			}
					$user_get =mysql_query("SELECT username FROM users WHERE id='$select_id'");
					$run_user =mysql_fetch_array($user_get);
					$select_username = $run_user['username'];
			echo "<p><a href='conversation.php?hash=$hash'>$select_username</a></p>";
		}

	}

?>
			

</div>
</body>

</html>