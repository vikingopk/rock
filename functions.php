<?php

session_start();

function loggedin(){

	if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
		# code...
		return true;
	}else{
		return false;
	}
}

function getuser($field, $user_id){
	$query = mysql_query("SELECT $field FROM users WHERE id='$user_id'");
	$run = mysql_fetch_array($query);
	return $run[$field];
}
function getuser1($id, $field){
	$query = mysql_query("SELECT $field FROM users WHERE id='$id'");
	$run = mysql_fetch_array($query);
	return $run[$field];
}



?>