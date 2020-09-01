<?php

class Cadastrar {
    private $pdo;
  public  function __construct($dbname,$host,$user,$senha){
			try {
				$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
			} catch (PDOException $e) {
				echo "erro com o banco".$e->getMessage();
				exit();
			}
			catch(Exception $e){
				echo "erro generico".$e->getMessage();
                                exit();
			}
 
    }
    public function BuscarDados(){
        $res=array();
        $cmd=$this->pdo->query("SELECT*FROM usuarios ORDER BY email");
        $res=$cmd->fetchAll(PDO::FETCH_ASSOC);
        RETURN $res;
    }
    public function cadastrarPessoa($email,$senha){
        
        $cmd = $this->pdo->prepare("SELECT id from usuarios WHERE email = :e ");
        $cmd->bindValue(":e",$email );
        $cmd->execute();
        if($cmd->rowCount()>0){
            return false;
        }else{
            $cmd=$this->pdo->prepare("INSERT INTO usuarios (email,senha)VALUES( :e, :s)");
            $cmd->bindValue(":e",$email );
            $cmd->bindValue(":s",$senha );
            $cmd->execute();
        return true;
    }    
    
}
 function excluirPessoa($id){
     $cmd = $this->pdo->prepare("DELETE FROM usuarios WHERE id = :id");
     $cmd->bindValue(":id",$id);
     $cmd->execute();
 }
 function buscarDadosPessoa($id){
     $res = array();
     $cmd = $this->pdo->prepare("SELECT*FROM usuarios WHERE id = :id");
     $cmd->bindValue(":id",$id);
     $cmd->execute();
     $res = $cmd->fetch(PDO::FETCH_ASSOC);
     return $res;
    
     
 }
 function atualizarDados($id,$email,$senha){               
     $cmd = $this->pdo->prepare("UPDATE usuarios SET email = :e , senha = :s WHERE id = :id");
     $cmd->bindValue(" :e ",$email);
     $cmd->bindValue(" :s ",$senha);
     $cmd->bindValue(" :id ",$id);
     $cmd->execute();
     return true;
 } 
 
}
