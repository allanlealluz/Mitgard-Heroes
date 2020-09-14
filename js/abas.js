$(document).ready(function() {
	 
	   //Quando carregar a pagina
	   $(".conteudo").hide(); //esta primeira linha servirá para esconder as divs do conteúdo
	   $("ul.menu li:first").addClass("active").show(); //Ativar primeira aba
	   $(".conteudo:first").show('slow'); //abre a pagina suavemente
	 
	   //On Click Event
	   $("ul.menu li").click(function() {// quando clicar no link do menu irá executar a seguinte função:
	      $("ul.menu li").removeClass("active"); //remove a class no link clicado para que não fica marcado
	      $(this).addClass("active"); //adiciona a classe no link clicado para que o usuario saiba em qual link ele esta
	 
	      $(".conteudo").hide(); //esconder as divs do conteúdo
	      var activeaba = $(this).find("a").attr("href"); //Encontrar o valor do atributo rel para identificar a aba que esta ativa + conteúdo
	      $(activeaba).fadeIn('slow'); //efeito de fade in com o conteúdo ativo
	      return false;// o returno falso evita que ao clicar no link a página role para o topo.
	   });
	 
	});

