<?php

try{
	$hostname = "localhost";
	$dbname   = "tcc";
	$username = "root";
	$pw       = "";

	$pdo = new PDO("mysql:host=$hostname;dbname=$dbname","$username","$pw");
}catch (PDOException $e){
	echo "Erro de Conexão ". $e->getMessage(). "\n";
	exit;
}

	// $query = $pdo->prepare("select * from login");
	// $query->execute();

	// for ($i=0; $row = $query->fetch(); $i++) { 
	// 	echo $i." - Tabela de Login <br/>";
	// 	echo $i." - ".$row['id']."<br/>";
	// 	echo $i." - ".$row['email']."<br/>";
	// 	echo $i." - ".$row['senha']."<br/>";
	// }

	// unset($pdo);
	// unset($query);
?>
