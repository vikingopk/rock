<?php
include 'connect.php';
include 'functions.php';

$my_id = $_SESSION['user_id'];
$action = $_GET['action'];
$u_id = $_GET['u_id'];

if ($action == 'follow') {
	# code...
	mysql_query("INSERT INTO follow VALUES('', '$my_id', '$u_id')");
}

if ($action == 'unfollow') {
	# code...
	mysql_query("DELETE FROM follow WHERE user_one='$my_id' AND user_two= '$u_id'");
}

header('location: profile.php?u_id='.$u_id); //u_ide

?>