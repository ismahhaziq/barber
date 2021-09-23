<?php

$sname= "sql209.epizy.com";
$username= "epiz_29207214";
$password = "4qPFriC2j9Cyjt";
$db_name = "epiz_29207214_barber";

$conn = mysqli_connect($sname, $username, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
