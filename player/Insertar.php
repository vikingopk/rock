<?  //putdata
	$latitud = $_REQUEST['latitud'];
	$longitud = $_REQUEST['longitud'];

        $con=mysql_connect("localhost","targetph","inacap2014++");
	mysql_select_db("targetph_hackathon");

        $sqlinserta="insert into paradero (latitud,longitud) values("."'".$latitud."',"."'".$longitud."')";
        mysql_query($sqlinserta,$con);

	echo ($result);
	//echo ("nombre: ".$nombre);
	//echo ("apellido: ".$apellido);
	//echo ("edad: ".$edad);

?>			