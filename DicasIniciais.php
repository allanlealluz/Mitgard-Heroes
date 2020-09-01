<!doctype html>
<html>
<title>Dicas para iniciais</title>
<div id="teste">
<h1>Dicas para iniciais</h1>
</div>
<div id="tentando">
    <ul>
    <li><a href="Inicio.php">Voltar</a></li>
    </ul>
</div>
<style>
    h1{
        color:brown;
       
    }
   
   #teste{
        background-color:red;
        font:20px Arial;
        height:70px;
        padding-bottom:5px;
        
    }
   #tentando{ width:1327px;height:50px;background:brown;margin:0 auto;padding-top:5px;}
   #tentando ul li{list-style:none;text-align:center;float:left;margin:0 auto;}
   #tentando ul{width:100px;background-color:darkred;list-style:none;text-align:center;height:40px;margin-left:50px;padding-top:10px;margin:0;margin-bottom:100px;}
   #tentando a{
      color:red;
        text-decoration:none;
        font:20px Arial;
      
       
    }
    #tentando ul li a:hover{color:brown;}

</style>

<?php
require_once 'Personagens.php';

class DicasIniciais {
  private  $nome;
   private $tipos;
   private $comoUsar;
   private $Habtankar;
   private $Habdano;

   function __construct($nome, $comoUsar,$hat,$had) {
       $this->nome = $nome;
       $this->comoUsar = $comoUsar;
       $this->Habtankar = $hat;
       $this->Habdano = $had;
   }
   function Mostrar(){
       echo"<p>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>";
       echo " <b> ".$this->getNome()." </b> ".$this->getComoUsar()."<br>";
       echo $this->getHabtankar()."<br>".$this->getHabdano();
       
     
   }
   function getNome() {
       return $this->nome;
   }

   function getTipos() {
       return $this->tipos;
       
   }

   function getComoUsar() {
       return $this->comoUsar;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setTipos($tipos) {
       $this->tipos = $tipos;
       $this->setTipo($tipos);
   }

   function setComoUsar($comoUsar) {
       $this->comoUsar = $comoUsar;
   }
   function getHabtankar() {
       return $this->Habtankar;
   }

   function getHabdano() {
       return $this->Habdano;
   }

   function setHabtankar($Habtankar): void {
       $this->Habtankar = $Habtankar;
   }

   function setHabdano($Habdano): void {
       $this->Habdano = $Habdano;
   }


   
}
?>

<?php
require_once 'DicasIniciais.php';


$b[0]=new DicasIniciais("Rubronir", "ele é o tipico tank não serve para dar dano mais dos iniciais ele é o melhor para lutar contra varios inimigos por causa de sua nevoa que cobre todo o campo de batalha.mas se voce quer dar dano não é com ele.Porem com suas melhorias ele pode ou virar um tanker infernal imune a inumeros efeitos e ganhando defesa toda hora ou virar um personagem danudo que ignorar armadura então se você pegar ele recomendase focar em melhorias","Hab pra tankar:regenera o escudo a cada 2 turnos","Hab pra dano:ao usar a nevoa 1 a cada 2 ataques vão dar dano aumentado baseado em 25% da vida do alvo ,e necessario tambem evoluir a nevoa para aumentar sua duração ");
$b[1]=new DicasIniciais("Gustav", "ele é definivamente bom tanto pra tankar quanto para dar dano por ele ter muita vida e a passiva de aumentar o dano quando perde vida ele fica mais forte com o decorrer da luta sua unica fraqueza é que seu dano é totalmente individual e que ele não da nenhum efeito.Porem com as melhorias ele pode virar uma maquina usando o especial toda hora ou ele pode virar um tanker que se staca apanhando ou seja ele e pau para toda obra","Hab para tankar:ganha 20 de tolerancia a dano e ao ser atacado ganha 5 de dano"," Hab para dano:melhorar o especial para que o cowdown dele seja 1 turno mais se você usar muito constantemente ele entra em recarga.essa ultima é boa mais tem que saber usar");
$b[2]=new DicasIniciais("Rafa", "ele é o personagem inicial com maior dano e mesmo sendo fragil quando ativa seu especial ele consegue tankar bem . o unico problema é seu dano individual e só dar dano no ataque comun.Com sua melhoria ele pode se tornar um personagem a nivel epico aumentando o dano e recuperando parte da vida sempre que ataca ganhando imortalidade ao atacar 3 vezes ou seja pode confiar que todo rafa é bom","Hab para tankar:ao beber 3 vezes ganha imortalidade por 1 turnos Obs:essa hab só funciona bem se você colocar a hab dele beber antes de atacar"," Hab para dano:trocar o especial por Estilo samurai que causa 100 de dano num alvo sangramento e corte ou seja e bem chato e o cowdown é baixo 2 turnos então da para fazer estrago");
$b[3]=new DicasIniciais("Gabo cassete", "ele é um personagem com pacote completo vida razoavel dano mais ou menos e com um passiva que da localtiamento a cada 2 turnos ou seja ele é um personagem meio a meio.Porem com melhoria ele melhora bastante fazendo com que ele de o epsecial em todos e que ao ser atacado pode dar cegueira","Hab de tankar:ao ser atacado pode causa cegueira no alvo"," Hab de dano:personagens com efeito de congelamento levam 50% amais de dano dele Obs essa hab só funciona se você melhorar o especial para dar congelamento");
$b[4]=new DicasIniciais("Nicolau", "ele é o unico atirador dos iniciais ele causa dano bem razoavel um dos maiores e mesmo ele tendo pouco vida ele tem uma passiva para  fazer personagens homens evitarem o atacar.ele com melhoria tem pouca diferença então ele é um personagem que só é bom no começo ","Hab pra tankar:ao ser atacado da medo por 1 turno","Hab de dano:da mais 25 de dano");
$b[5]=new DicasIniciais("Anthony","ele é o tank possui uma das armaduras mais pesadas do jogo mesmo sendo inicial e se melhorado ele vira imortal a unica coisa é que o dano dele é ridiculo até um healer da mais dano do que ele","hab pra tankar:a cada  3 turnos a armadura regenra 2 de duração","hab pra tankar 2.0:apos usar o especial ganha 100 de defesa");
$b[0]->Mostrar();
$b[1]->Mostrar();
$b[2]->Mostrar();
$b[3]->Mostrar();
$b[4]->Mostrar();
$b[5]->Mostrar();

?>
<h5>Criado por allanthepicudo</h5>
<br>
</br>
