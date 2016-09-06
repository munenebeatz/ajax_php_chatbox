<?php
include "db.php";

if(isset($_POST['name']) && isset($_POST['shout'])){
	$name = mysqli_real_escape_string($db_conn, $_POST['name']);
	$shout = mysqli_real_escape_string($db_conn, $_POST['shout']);
	$date = mysqli_real_escape_string($db_conn, $_POST['date']);

	$query = "INSERT INTO shouts(name, shout, date) ";
	$query .= "VALUES ('".$name."','".$shout."','".$date."')";

	if(!$db_conn->query($query)){
		echo "ERROR:: ".$db_conn->error;
	}else{
		echo "<li>$name : $shout [$date]</li>";
	}
}