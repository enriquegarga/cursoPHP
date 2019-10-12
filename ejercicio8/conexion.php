<?php 
	$user     = "root";
	$password = "root";
	$dbname   = "cursophp";

	try {
	    $dsn = "mysql:host=localhost;dbname=$dbname";
	    $dbh = new PDO($dsn, $user, $password);
	} catch (PDOException $e){
	    echo $e->getMessage();
	}