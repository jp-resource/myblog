<?php

$dbinfo = "mysql:dbname=myblog;host:localhost";

$dbuser = "root" ;
$dbpass = "1234";

$db = new PDO($dbinfo, $dbuser, $dbpass);
$db->exec('SET CHARACTER SET utf8');

?>