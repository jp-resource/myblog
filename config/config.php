<?php

$dbinfo = "mysql:dbname=myblog;host:localhost";

$dbuser = "root" ;
$dbpass = "1234";

try{
	$db = new PDO($dbinfo, $dbuser, $dbpass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Connection failed: ".$e->getMessage();
}

$db->exec('SET CHARACTER SET utf8');

?>