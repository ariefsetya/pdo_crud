<?php
$engi = "mysql";
$host = "localhost";
$dbsa = "crud";
$user = "root";
$pass = "windows10";

$koneksi = new PDO($engi.':dbname='.$dbsa.";host=".$host,
					// mysql:dbname=crud;host=localhost
					$user,
					$pass);

//echo $engi.':dbname='.$dbsa.";host=".$host;
//die();

?>