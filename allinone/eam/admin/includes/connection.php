<?php
$server = "sql12.freesqldatabase.com";
$username = "sql12754055";
$password = "EzKBjnIH5k";
$database = "sql12754055";
$connection = mysqli_connect("$server","$username","$password");
$select_db = mysqli_select_db($connection, $database);
if(!$select_db)
{
	echo("connection terminated");
}
?>