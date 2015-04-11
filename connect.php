<?php
@$connect = mysql_connect("localhost","root","");

if ($connect) {
	# code...
	mysql_select_db("basedatos1");
} else{
	echo "Error en la conexion!";
}

?>