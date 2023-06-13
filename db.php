<!-- Create a connect to SQL Server -->

<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "contact"; //tukar ikut nama database sendiri

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (!$conn) {
	echo "Connection failed!";
}

?>