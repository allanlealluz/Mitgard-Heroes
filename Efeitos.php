<?php
class Efeitos {
    private $nome;
    private $dano;
    private $efeito;
 
    function __construct($nome,$dano, $efeito) {
        $this->dano = $dano;
        $this->efeito = $efeito;
        $this->nome=$nome;
    }
    function Detalhar(){
        echo"<br>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------</br>";
        echo "<p>Efeito <B>".$this->getNome()."</b> causa ".$this->getDano().' '.$this->getEfeito().'</p>';
    } 
    function getDano() {
        return $this->dano;
    }

    function getEfeito() {
        return $this->efeito;
    }

    function setDano($dano): void {
        $this->dano = $dano;
    }

    function setEfeito($efeito): void {
        $this->efeito = $efeito;
    }
    function getNome() {
        return $this->nome;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }
    
}
?>
<h1>Guia dos Efeitos</h1>
<div id="roxinha">
    <ul>
        <li><a href="inicio.php">Voltar</a></li>

        <li><a href="DicasIniciais.php">Dicas</a></li>
</div>
</ul>
<style>
    
    
    div#roxinha{
        width:1320px;
        height:40px;
        background:brown;
        text-align:center;
        top:50px;
        position:absolute;
    
        
    }
  #roxinha ul li{list-style:none;text-align:center;float:left;margin:0 auto;}
  #roxinha ul a{width:100px;background-color:red;list-style:none;text-align:center;height:40px;margin-left:50px;padding-top:10px;margin:0;margin-bottom:100px;}
    
    h1{  
        width:1320px;
        height:50px;
           background-color:red;
    }
  
    
</style>
<?php
require_once 'Efeitos.php';
$b[0]=new Efeitos('Chamas', '25 de dano', 'nenhum efeito a mais');
$b[1]=new Efeitos("Cegueira","0 de dano", "o alvo não pode atacar");
$b[2]=new Efeitos("Veneno", "25 para personagens com 300 mais a cada 100 de vida a menos ele da mais 25 de dano ", "Diminui 10 de tolerancia a dano");
$b[3]=new Efeitos("Quebra", "0 de dano", "Diminui 20 de dano do alvo");
$b[4]=new Efeitos("Cortes", " ", "dano baseado em 50% do ataque da vitima");
$b[5]=new Efeitos("Congelamento", "20 de dano", "perde 50 de iniciativa e se levar outro efeito é congelado em um gelo de 50 de vida");
$b[6]=new Efeitos("Motivação","aumento de dano","aumenta 50% do dano ");
$b[7]=new Efeitos("Paixão","0 de dano", "quem é atingido da todos os buffs a quem deu o efeito");
$b[8]= new Efeitos("Medo", '0 de dano', "quem sofreu o efeito fica paralisado e ao ser atacado por quem deu o efeito leva 25% de dano a mais ");
$b[9]= new Efeitos("Sangramento","25 de dano", "nenhum efeito a mais");
$b[10]= new Efeitos('Raiva', '', "da mais 20 de dano e 20 de iniciativa");
$b[0]->Detalhar();
$b[1]->Detalhar();
$b[2]->Detalhar();
$b[3]->Detalhar();
$b[4]->Detalhar();
$b[5]->Detalhar();
$b[6]->Detalhar();
$b[7]->Detalhar();
$b[8]->Detalhar();
$b[9]->Detalhar();
$b[10]->Detalhar();
        ?>



<title>Guia dos efeitos</title>
</br>


<div id="ma">
<h5>Criado por allanthepicudo</h5>
</div>