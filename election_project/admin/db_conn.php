<?php

$sname= "localhost";
$unmae= "afoakwa";
$password = "123";

$db_name = "election_Admins";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}





