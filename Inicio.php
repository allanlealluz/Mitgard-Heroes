<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Mitgard heroes</title>
        <link rel="shortcut icon" href="nbproject/Viking.png">
    </head>
    <body>
        <div id="cor">
        <h1>Mitgard Heroes</h1>
        <h2>Personagens</h2>        
        </div> 
        <div id="Links">
            <nav id="Link">
                <a href="http://localhost/MitgardHeroes2/index.php">Avaliações</a>
                <a href="https://www.instagram.com/allanevil/">Instagram</a>
                <a href="Efeitos.php">Guia dos Efeitos</a>
          <a href="DicasIniciais.php">Dicas</a>
           <a href="index.php">Cadastro</a>
           <form method='POST'>
               <input type='search'>
           </form>
           </nav>
    </div>
        </link>
        <style> 
          h1{
        background-color:red;
        color:brown;
    }
    h2{
        background-color:brown;
        color:red;
    }
    #cor{
       
        background-color:red;
    }
    
    #Links a{color:red;text-decoration:none;font:20px Arial;padding:20px 80px;}
    #Links a{background-color:darkred;}
    #Links a:hover{background-color:brown;}

    input[type="search"]{
        margin-left:1100px;
        margin-top:20px;
    }
  
</style>

<?php
 require_once 'Personagens.php';
       $p[0]=new Personagens('Rubronir', 300, 100,"30 dura 4", 30,"da 30 de dano num alvo ","Ataque especial:cria uma nevoa que quem atacar leva cegueira dura 2 turnos cowdown 3", "Passiva 1:ganha 25 de dano cowdown 3","Estrategista");     
       $p[1]=new Personagens("Abanor", 300, 'nenhuma', "nenhuma", 100,"da 100 de dano num alvo","Ataque especial:da 150 de dano e chamas a um time cowdown 3", 'Passiva 1:a batalha se inicia as 08:00 e a cada turno que se aproxima do 12:00 ele ganha 50 de dano apos o meio dia cada turno tem efeito contrario Passiva 2:ganha 20 de dano a cada alvo com chamas Passiva 3:ao ser atacado da 20 de dano e chamas',"Agressivo");
       $p[2]=new Personagens("Rafa puto", 100, "nenhuma", "nenhuma", 100,"da 100 de dano num alvo" ,"Ataque especial:ganha um ataque extra e 20 de dano cowdown 3", "Passiva 1:a cada 25 e vida perdido ganha 10 de dano");
       $p[3]=new Personagens("Gabo cassete", 200, "nenhuma", "35 dura 4", 50,"da 50 de dano num alvo" ,"Ataque especial:da 50 de dano em 3 alvos", "Passiva 1:da 50 de dano e localtiamento por 1 turno cowdown 3");
       $p[4]=new Personagens("Rubronir Quebra da maldição", 250, 100, "nenhuma", 150," da 150 de dano num alvo e 100 no resto da linha", "Ataque Especial:ganha 100 de defesa e causa 200 de dano em um time cowdown 3", "Passiva 1:esquiva e ao esquivar da 50 de dano Passiva 2:Ganha 100 de dano por 2 turnos mais em troca perde 50 de dano pelo resto da batalha Passiva 3:quando esta com defesa da 50 de dano ao ser atacado");
       $p[5]=new Personagens("Viking vila do vapor", 200, "nenhuma", '35 dura 4', 50," da 50 de dano num alvo", "Ataque Especial:da 50 de dano cegueira e chamas em um alvo por 2 turnos","Passiva 1:pode esquivar de ataques fisicos ao esquivar causa cegueira","Estrategista");
       $p[6]=new Personagens("Gustav espirito vingativo", 200, "nenhuma", "nenhuma", 50, "da 50 de dano em 4 alvos mais chamas", "Ataque Especial;da 200 de dano em um time dando chamas cegueira localtiamento congelamento por 1 turno", "Passiva 1:revive apos 2 turnos Passiva 2:da o dobro de dano em rafas ");
       $p[7]=new Personagens("Bakho lider da natureza", 320, "nenhuma", "nenhuma", 50,"da 50 de dano em 4 alvos", "Ataque Especial:cria um ambiente onde personagens da natureza ganha 50 de defesa por turno cura 50 de vida de todo seu time cowdown 3", "Passiva 1:ganha 5 de tolerancia a dano por cada ataque recebido Passiva 2:cura 50 de vida dele e 50 de outro personagem da natureza cowdown2");
       $p[8]=new Personagens("Gustav dançarino de pedra", 250, 300, "nenhuma", 100, "da 100 de dano em 4 alvos mais sua pedra perde 100 de vida", 'Ataque Especial;pega uma pedra com 350 de vida se quando elepegar a pedra ele estiver com uma pedraele a joga dando 200 de dano em 4 alvos',"Passiva 1:defende ataques com sua pedra Passiva 2:se matar alguem no seu ataque comun ganha um ataque extra");
       $p[9]=new Personagens("Darkul o ladrão da escuridão", 200, "nenhuma", "nenhuma", 120, "da 120 de dano num alvo", "Ataque Especial:ganha mais um ataque e mais 25 de dano(efeito permanente)cowdown 3", "Passiva 1:ao matar alguem no ataque comun ganha um turno extra e mais 25 de dano Passiva 2:a cada 20 de vida perdida ganha 5 de dano");
       $p[10]=new Personagens("Rafa negro", 150, "nenhuma", "nenhuma", 150, "da 150 de dano se o alvo não estiver com vida cheia da o dano da vida perdida a mais", "Ataque Especial:ganha 50 de dano e mais um ataque mais perde 50 de vida cowdown 2", "Passiva 1:a cada 50 de vida perdida ganha 25 de dano Passiva 2:perde 50 de vida por turno");
       $p[11]=new Personagens("Tairado", 350, "nenhuma", "10 infinito", 50, "da 50 de dano num alvo", "Ataque Especial:ganha 250 de defesa e ao ser atacado da 25 de dano mais não pode atacar até a defesa for quebrada cowdown 3", "Passiva 1:ao ser atacado 4 vezes da metade do dano recibido em 4 alvos Passiva 2:ao ser atacado ganha 5 de ataque e 10 de defesa");
       $p[12]=new Personagens("Rafa", 150, "nenhuma", "30 dura 3", 80, "da 40 de dano 2x", "Ataque especial:bebe ganhando 20 de dano esquiva e curando 20 de vida dura 2 turnos cowdown 3", "Passiva 1:ganha um  ataque extra");
       $p[13]=new Personagens("Gustav", 350,"nenhuma", "nenhuma", 50, "da 50 de dano num alvo", "Ataque Especial:da 25 de dano 4x num alvo dando chamas cowdown 3", "Passiva 1:ao perder 20 de vida ganha 5 de dano");
       $p[14]=new Personagens("Justo modo ataque", 200,"nenhuma","nenhuma", '25%', "da 25% da vida do alvo", "Ataque Especial:tira qualquer buff de todos cowdown 3", "Passiva 1:não pode morrer para um alvo que o atacou antes de poder contra ataca-lo ");
       $p[15]=new Personagens("Ork general espada", 400, "nenhuma", "40 dura 10", 100, 'da 100 de dano numa linha', "Ataque Especial:da 150 de dano num alvo dando quebra por 2 turnos cowdown 5", "Passiva 1:ao ser atacado tem chance de diminuir um turno no especial Passiva 2;a cada 20 de vida ganha 5 de dano");
       $p[16]= new Personagens("Heitor", 200, "nenhuma", "nenhuma", 0, "planeja um cancelamento de um ataque", "Ataque Especial:da 300 de dano num alvo ignorando defesas e armaduras se o alvo morrer não pode reviver cowdown 4", "Passiva 1:pode esquivar e ao esquivar causa conflito");
       $p[17]= new Personagens("Orfeu", "400", "nenhuma", "30 dura 4", 120, "da 120 de dano numa linha", "Ataque Especial:da 250 de dano em um time quebrando o plano atual cowdown 4", "Passiva 1:a cada 3 ataques recebidos do mesmo alvo ele da mais 50 de dano no mesmo Passiva 2:ao ficar com metade da vida entra no modo 100% ganhando mais 50 de dano no ataque comum e 100 no especial");
       $p[18]= new Personagens("Pain", 200, "nenhuma", "nenhuma", 50,"da 50 de dano" ,"Ataque Especial:ativa os olhos por 1 turno dando controle em quem o atacar cowdown 3", "Passiva 1:cura 50 de vida de um alvo cowdown 2 Passiva 2:transforma um personagem morto em escravo ele volta com metade da vida e não pode usar o especial cowdowm 5");
       $p[19]= new Personagens("Kasame", 400, "nenhuma", 'nenhuma', 100, "da 100 de dano em até 3 alvos de uma coluna", "Ataque Especial:da 200 de dano num time cowdown 3", "Passiva 1:ao ser atacado tem chance de contra atacar Passiva :jogaa agua dimunindo a iniciativa dos inimigos em 10% por 2 turnos cowdown 3");
       $p[20]=new Personagens("Fortius", 300, "nenhuma","40 dura 4", 50, "da 50 de dano num alvo", 'Ataque Especial:entra em modo furia dando mais 50 de dano e absorvendo 25% do dano como vida', "Passiva 1:a cada 10 de vida ganha 5 de dano Passiva 2:ao entrar em combatte da aumento de chance de critico ao seu time por 2 turnos");
       $p[21]= new Personagens("Mago supremo",150, 'nenhuma', "nenhuma", 150, "da 150 de dano num time podendo dar cegueira e chamas", "Ataque Especial:cria uma barreira em volta de seu time com 500 de vida ao levar ataque ela da dano baseado em metade da vida perdida cowdown 5", "Passiva 1:cura um aliado baseado em 10% do dano que ele causar Passiva 2:se ele não for atacado por 5 turnos dobra seu dano");
       $p[22]= new Personagens("Jarem", 250,"nenhuma" , "nenhuma", 100,"da 100 de dano num alvo mais se ele tiver mais de 300 de vida da mais 10% da vida dele", "Ataque Especial:da 150 de dano em um time ganhando 50 de dano cowndown 3", "Passiva 1:aoser  atacado tem 20% de chance de contraatacar dando 25% do dano do alvo Passiva 2:se ele tiver debuffs a chance aumenta para 50%");
       $p[23]= new Personagens('Laila', 250, "nenhuma", "nenhuma", 100, "da 100 de dano num alvo", "Ataque Especial:da 150 de dano num time ficando com raiva cowdown 3", "Passiva 1:ao ser atacada por homens tem chance de ficar com raiva Passiva 2:ao estar com raiva pode contraatacar dando 120 de dano e quebra");
       $p[0]->Detalhar();
       $p[1]->Detalhar();
       $p[2]->Detalhar();
       $p[3]->Detalhar();
       $p[4]->Detalhar();
       $p[5]->Detalhar();
       $p[6]->Detalhar();
       $p[7]->Detalhar();  
       $p[8]->Detalhar();
       $p[9]->Detalhar();
       $p[10]->Detalhar();
       $p[11]->Detalhar();
       $p[12]->Detalhar();
       $p[13]->Detalhar();
       $p[14]->Detalhar();
       $p[15]->Detalhar();
       $p[16]->Detalhar();
       $p[17]->Detalhar();
       $p[18]->Detalhar();
       $p[19]->Detalhar();
       $p[20]->Detalhar();
       $p[21]->Detalhar();
       $p[22]->Detalhar();
       $p[23]->Detalhar();
     ?>
     <h5>Criado por allanthepicudo</h5> 
