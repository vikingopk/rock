
<html>
	
<head>
<title>SOCIETYROCK</title>
		

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

<div class="container">
	<h3>Friends: </h3>
	<?php
	$my_id = $_SESSION['user_id'];
	$frnd_query =mysql_query("SELECT user_one, user_two FROM follow WHERE user_one='$my_id' OR user_two='$my_id'");
	while ($run_frnd = mysql_fetch_array($frnd_query)) {
		# code...
		$user_one = $run_frnd['user_one'];
		$user_two = $run_frnd['user_two'];
		if ($user_one == $my_id) {
			# code...
			$user = $user_two;
		}else{
			$user = $user_one;
		}
		$username = getuser($user, 'username');
		echo "<a href='profile.php?user=$user' class='box' style='display:block'";
	}
	?>
</div>





			


</body>

</html>