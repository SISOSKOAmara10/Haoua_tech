<?php  
	session_start();
try {
	$strConnection= 'mysql:host=localhost;dbname=haoua_tech';
	$pdo = new PDO ($strConnection,'root','');

	} 
catch (PDOException $e) {
	
$msg = 'ERREUR PDO dans'  . $e->getMessage();
die ($msg);
}
?>