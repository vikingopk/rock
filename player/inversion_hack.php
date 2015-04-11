<?php  //getdata
	$con=mysql_connect("localhost","targetph","Inacap2014++");
	mysql_select_db("targetph_hackathon");

	$rut = $_REQUEST['rut'];
	$rut = '12556189-2';
	
	$sql = "Select rut_player from who where rut_inversor = '".$rut."'";
	$datos = array();
	$result = mysql_query($sql, $con);

	     while($row = mysql_fetch_object($result)){
		     $datos[] = $row;
	     }

	echo json_encode($datos);
?>