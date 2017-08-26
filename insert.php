<?php
include 'conect.php';
$titulo = "Padrões de Projeto - PHP";
$preco = 140.5;
$estoque = 5;

try {
	
	/**
	*Aqui preparamos primeiramente nossa instrução de inserção e como valores, passamos as "?"(interrogações) para referencia-las com o parâmetro passado pela função bindParam. 
	* */
	$sql="INSERT INTO `livros` (`titulo`, `preco`, `estoque`) VALUES (?, ?, ?)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(1,$titulo);
	$stmt->bindParam(2,$preco);
	$stmt->bindParam(3,$estoque);
	
	if($stmt->execute())
		echo "Gravado com Sucesso";
	else
		throw new Exception("Erro ao gravar informação");

} catch (Exception $e) {
	echo $e->getMessage();	
}

?>