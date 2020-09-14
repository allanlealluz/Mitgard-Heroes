<?php 
		include_once("./classes/DadosDoBanco.php");	
		include "./biblio.php";
		include_once("./classes/Lista.php");
		
		$venda		= new DadosVenda();
		$itens		= new DadosItensVenda();		
		
		$lista = new Lista();	
		$lista->setNumPagina($_GET["pg"]);
		$lista->setUrl("principal.php?link=9");
	
?>
<?php
					
				
				
				$sql="SELECT * FROM categoria";
				//$total = $venda->totalRegistros($sql);
				$lista->setCont(0);
				for($i=0; $i<12; $i++){
					
					$lista->listaPedidos($sql,$i);
					$lista->setCont($i);
		
			?>
<h2> lista de Categoria </h2>

<table cellpadding="0" cellspacing="0" border="1">
	<thead>
		<tr>
			<th><?php echo $i;	?> </th>
			<th>Categoria </th>
			<th>Ativo </th>
			<th>Editar </th>
			<th>Excluir </th>
		</tr>
	</thead>
	
	<tbody>
		<?php //$lista->listaCategoria();	?>
		
		<tr>
			<td colspan="5"><?php // $lista ->geraNumeros() ?></td> 
		</tr>
	</tbody>

</table>
<?php }	?>

<?php  $lista ->geraNumeros() ?>