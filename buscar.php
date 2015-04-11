

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

<?php
			//$busqueda = $_POST['busqueda'];
			$buscar = $_POST['consulta'];
			if (isset($buscar)) {
				# code...
				$conexion = mysql_connect("localhost","root","") or die(mysql_error());
				$db = mysql_select_db("basedatos1", $conexion) or die(mysql_error());

				$consulta = mysql_query("SELECT * FROM users WHERE username LIKE '%$buscar%'");
				$contador = mysql_num_rows($consulta);
				if($contador == 0){
					print 'No se encontraron Registros en la base de datos';
				}else{
					print 'Se han encontrado'.$contador.'coincidencias con este nombre<br>';
				print '<table width="270" border="0" cellspacing="2" cellpadding="0">';
				while ($datos = mysql_fetch_assoc($consulta)){
						print '<tr><td width="266">'.$datos['username'].' -> '.$datos['id'].'<td></tr>';
				}
				print '</table>';
				}
			}
			?>




			


</body>

</html>