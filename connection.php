<?php
$server="localhost"; //alamat pd/ip
$dbuser= "root";//db username
$dbpassword="";//password db user
$dbname="sistemaduan";//nama db
$db= mysqli_connect($server, $dbuser, $dbpassword, $dbname);

//test db connection
//remove on deployment

if (mysqli_connect_errno($db)) {
	echo "connect failed: ", mysqli_connect_error ($db);
	exit();
}


?>
