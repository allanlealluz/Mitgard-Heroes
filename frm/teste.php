<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8">
<title> mjailton- Curso de loja virtual </title>
<link href="css/css.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/abas.js"></script>
<script type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="js/formata_textArea.js"></script>
</head>
<body>

<form action="./op/op_produto.php" method="post" enctype="multipart/form-data">
	
		<label class="imagem">
			<span class="titulo">Selecione uma imagem </span>
			<input type="file" name="img" >
		</label>
		
		<label>
			<span class="titulo">Título do produto </span>
			<input type="text" name="txt_titulo" id="txt_titulo" value="<?php echo $txt_titulo ?>">
		</label>
		
	
	
	
			<span class="titulo">Conteúdo </span>
			<textarea  name="txt_conteudo" id="txt_conteudo" cols="30" rows="6"><?php echo $txt_conteudo ?> </textarea>
	
	
		
		<input type="hidden" name="nome_imagem" value="<?php  echo $nome_imagem; ?>" />
		<input type="hidden" name="id" value="<?php  echo $id; ?>" />
		<input type="hidden" name="acao" value="<?php if ($acao!=""){ echo $acao;}else{echo "Inserir";} ?>" />
		<input type="submit" value="<?php if ($acao!=""){ echo $acao;}else{echo "Inserir";} ?>" class="botao" />
		
		
	</form>
</body>	
</html>