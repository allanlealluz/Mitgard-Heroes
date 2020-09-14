<?php 

	include_once("./classes/Lista.php");	
	$lista = new Lista();	
	$lista->setNumPagina($_GET["pg"]);
	$lista->setUrl("principal.php?link=6");
	
?>

<h2> lista de Produtos </h2>

<table cellpadding="0" cellspacing="0" border="1">
	<thead>
		<tr>
			<th>ID </th>
			<th>Titulo </th>
			<th>Ativo </th>
			<th>Editar </th>
			<th>Excluir </th>
		</tr>
	</thead>
	
	<tbody>
		<?php $lista->listaProduto();	?>
		
		<tr>
			<td colspan="5"><?php  $lista ->geraNumeros() ?></td> 
		</tr>
	</tbody>

</table>