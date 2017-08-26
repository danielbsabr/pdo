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
	*Aqui preparamos nossa instrução de exclusão dos dados.  
	* */
	$sql="DELETE FROM `livros` WHERE `titulo` = ?";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(1,$titulo);
	

	if($stmt->execute())
		echo "Deletado com Sucesso";
	else
		throw new Exception('Erro ao Deletar');

} catch (Exception $e) {
	echo $e->getMessage();	
}

?>