<?php

class Personagens {
  private $nome;
  private $vida;
  private $defesa;
  private $armadura;
  private $ataqueComun;
  private $especial;
  private $passivas;
  private $tipo;
  private $tipoAtaqueComun;
  protected $raridade;
  function Detalhar(){
      echo "<p><b>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b></p>";
      echo "<P><b>".$this->getNome()."</b> com ".$this->getVida()." de vida , com ".$this->getDefesa()." de defesa";
      echo " com armadura de ".$this->getArmadura()." e no ataque comun  ".$this->getTipoAtaqueComun();
      echo " e no ".$this->getEspecial()." e na ".$this->getPassivas();
      echo " ou seja ele é um personagem ".$this->getTipo()."</p>";
  } 
 
  function __construct($nome,$vida, $defesa, $armadura, $ataqueComun,$tipAtaqueComun, $especial, $passivas) {
      $this->nome = $nome;
      $this->setVida($vida);
      $this->defesa = $defesa;
      $this->armadura = $armadura;
      $this->setAtaqueComun($ataqueComun);
      $this->tipoAtaqueComun=$tipAtaqueComun;
      $this->especial = $especial;
      $this->passivas = $passivas;
     
      $this->iniciativa=0;
 
  }
  function getVida() {
      return $this->vida;
  }

  function getDefesa() {
      return $this->defesa;
  }

  function getArmadura() {
      return $this->armadura;
  }

  function getAtaqueComun() {
      return $this->ataqueComun;
  }

  function getEspecial() {
      return $this->especial;
  }

  function getPassivas() {
      return $this->passivas;
  }

  function setVida($vida) {
      $this->vida = $vida;
      $this->setTipo();
  }

  function setDefesa($defesa) {
      $this->defesa = $defesa;
  }

  function setArmadura($armadura) {
      $this->armadura = $armadura;
  }

  function setAtaqueComun($ataqueComun){
      $this->ataqueComun = $ataqueComun;
      $this->setTipo();
  }

  function setEspecial($especial) {
      $this->especial = $especial;
  }

  function setPassivas($passivas) {
      $this->passivas = $passivas;
  }
  function getNome() {
      return $this->nome;
  }

  function setNome($nome){
      $this->nome = $nome;
  }
  function getTipo() {
      return $this->tipo;
  }

  function setTipo() {  
      if($this->vida >= 300 && $this->ataqueComun <=50 ){
          $this->tipo = "Tanker";         
      }
      elseif($this->ataqueComun >= 100 && $this->vida <=200){
          $this->tipo = "Atacante";
      }elseif($this->vida >= 250 && $this->ataqueComun >= 70 ){
          $this->tipo = "Misto";
      }elseif($this->vida >= 350 && $this->ataqueComun >= 100){
          $this->tipo = "Tanker danudo";
      }elseif($this->ataqueComun == 0){
          $this->tipo = " com dinamica diferenciada" ;
      
      }else{
          $this->tipo = "Normal";
      }
      
  }

  function getTipoAtaqueComun() {
      return $this->tipoAtaqueComun;
  }

  function setTipoAtaqueComun($tipoAtaqueComun) {
      $this->tipoAtaqueComun = $tipoAtaqueComun;
      $this->setPersonalidade();
  }
  

  }






