<?php
require_once 'DbObjectClass.php';

$db = new DbObject('localhost','root','','bfac');
$db->connect();
//mysql_connect("localhost", "root", "") or die(mysql_error());
//mysql_select_db("projectx") or die(mysql_error());

/* $db = new mysqli('localhost', 'root', '','projectx');

if(mysqli_connect_errno())
{
	echo 'Error: Could not connect to DataBase';

	exit;
}*/
?>