<?php
	/**
	*fetch()->Retorna a próxima linha do resultado.
	*fetchAll()-> Retorna um array com todos os resultados.
	*fetchObject()-> Retorna a próxima linha do resultado como objeto.
	*fetchColumn()-> Retorna uma coluna da próxima linha do resultado.
	* */

	include 'conect.php';
	//listando os livros
	$sql = "SELECT * FROM livros";
	$dados = $pdo->query($sql);





?>
<table border="1">
	<caption>Listagem de Livros</caption>
	
	<thead>
		<tr>
			<th>Título</th>
			<th>Preço</th>
			<th>Estoque</th>
		</tr>
	</thead>
	
	<tbody>
		<?php while ($result = $dados->fetch()) {?>
		<tr>
			<td><?php echo $result['titulo']?></td>
			<td><?php echo $result['preco']?></td>
			<td><?php echo $result['estoque']?></td>
		</tr>	    
		<?php } ?>
	
	</tbody>

</table>