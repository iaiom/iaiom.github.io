<?php
$server="sql12.freesqldatabase.com";
$username="sql12754055";
$password="EzKBjnIH5k";
$databasename="sql12754055";

$conn = mysqli_connect($server, $username, $password);

$abc=mysqli_select_db($conn,$databasename);

if(!$abc)
{
	die("disconnect");
}
else
{
	//die ("successfull");
}
?>