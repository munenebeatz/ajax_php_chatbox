<?php

$db_conn = new mysqli('localhost','root','root','prac_shoutbox');

if(!$db_conn->connect_error){
	echo "Success connection";
}else{
	echo $db_conn->connect_error;
	die();
}