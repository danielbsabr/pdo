<?php

//Local do banco
$host = "localhost";
//Nome do banco de dados
$db = "livraria";
//Seu Usuário no banco de dados
$user = "root";
//Senha do banco de dados
$pass = "#armc2014";
//Estabelecendo a conexão
try{
	/*
		Agora o pulo do gato, precisamos especificar o banco de dados que iremos trabalhar, no nosso caso, optei pelo mysql. Em seguida especificamos o local e o nome do banco de dados e por último o usuário e a senha 
	*/
	$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);	
}catch (Exception $e){
	echo "Erro ao estabelecer conexão com o banco de dados:".$e->getMessage();
	die;
}
?>
