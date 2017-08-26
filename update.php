<?php
/**
*	Inclusão da minha Conexão
* */
include 'conect.php';
/**
 * Variáveis que vem do seu formulário html  
 */
$titulo = "Padrões de Projeto - PHP";
$preco = 60;
$estoque = 5;

try {
	
	/**
	*Aqui preparamos nossa instrução de atualização dos dados  
	* */
	$sql="UPDATE `livros` SET `preco` = ?, `estoque`= ? WHERE `titulo` = ?";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(1,$preco);
	$stmt->bindParam(2,$estoque);
	$stmt->bindParam(3,$titulo);

	if($stmt->execute())
		echo "Atualizado com Sucesso";
	else
		throw new Exception('Erro ao Atualizar');

} catch (Exception $e) {
	echo $e->getMessage();	
}

?>