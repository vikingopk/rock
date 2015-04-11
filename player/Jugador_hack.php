<?php  //getdata
	$con=mysql_connect("localhost","targetph","inacap2014++");
	mysql_select_db("targetph_hackathon");

	$usuario = $_REQUEST['usuario'];
	$pass = $_REQUEST['contrase'];

	$sql = "SELECT * FROM player WHERE rut_player='".$usuario."'";
	$datos = array();
	$result = mysql_query($sql, $con);

	     while($row = mysql_fetch_object($result)){
		     $datos[] = $row;
	     }

	echo json_encode($datos);
?>