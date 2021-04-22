<?php
require_once 'Cadastrar.php';
$p= new Cadastrar("login", "127.0.0.1", "root", "");

?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">   
        <title>Mitgard heroes</title>
        <link rel="shortcut icon" href="nbproject/Viking.png">
    
    </head> 
    <body>  
              
        <h1 align="Center">Mitgard Heroes</h1>
        <div id="Voltar">
          
        <a href="Inicio.php">Voltar</a> 
             
        </div>
        <?php
       
        if(isset($_POST['email']))//clicou no botão cadastrar ou editar
        {   $email= addslashes($_POST['email']);
            $senha= addslashes($_POST['senha']);
            if(!empty($email) && !empty($senha)){
             $p->cadastrarPessoa($email, $senha);
        
             
            }else{
                echo"Preencha todos os campos";
            }
        }
        
        
        ?>
        <?php
        if(isset($_GET['id_up'])){
            $id_update = addslashes($_GET['id_up']);
            $res = $p->buscarDadosPessoa($id_update);
            
        }
        ?>
          <section id="esquerda">
               <div id="testao"> 
                   <h3>Cadastrar</h3>
                   <form method="POST" action="index.php" >    
            
            <input type="email" name="email" id="email"placeholder="Email" value="<?php if(isset($res)){echo $res['email'];} ?>">            
            <input type="password"name="senha" id="senha"placeholder="Password"value="<?php if(isset($res)){echo $res['senha'];} ?>">
            <input type="submit" value="<?php if(isset($res)){echo "Atualizar";}else{echo "Cadastrar";} ?>" >
            
        </form>
               </section>
</form>
        <section id="Direita">
            <table>
                <tr id="titulo">
                    <td>Email</td>
                    <td>Senha</td>
                    <td>Ações</td>
                <pre>

                       <?php
            $dados = $p->BuscarDados();
            if(count($dados)>0){
                for($i=0; $i < count($dados); $i++){
                         
               echo'<tr>';
                    foreach ($dados[$i] as $k => $v) {
                     if($k != "id"){
                        echo"<td>".$v."</td>" ;
                     }
                    
                        
                     
                    
                }
                    ?>
                   </div>
                     <td>

                <a href="index.php?id_up=<?php echo $dados[$i]['id'];?>">Editar</a>
                <a href="index.php?id=<?php echo $dados[$i]['id'];?>">Excluir</a>
                     </td>
    <?php 
                    echo'</tr>';
                
                }
            }else{
          echo"Ainda não ha pessoas cadastradas";
            }   
               
              ?> 
</pre>
           
        </div>

</table>
             </section>
        
           
         
         <?php
if(isset($_GET['id'])){
    $id_usuario = addslashes($_GET['id']);
    $p->excluirPessoa($id_usuario);
    header("location: index.php");
}
    

?>  
      


                
            
        <style>
            *{
                padding:0px;
                margin:0px;
            }
            
            h1{
               color:brown;
               background-color:red;
               font-size:50px;
            }
        
          
            
            p{
                text-align:justify;
                color:black;
            }
            h2{
                color:brown;
                background-color:red;
            }
          input{
                     
            height:55px;
            width: 400px;
            margin:10px;
            font-size:16pt;
            padding: 10px 20px;
            background-color:rgba(255,255,255,0.05);
          
            
            
           
            
        } 
        input[type=submit]{
             cursor:pointer;
        }
        form{
           
           
         
        }       
        div#testao{
           
            margin:150px auto 0px auto;
        }
        submit{
            background-color:salmon;
            
        }
        #Direita{
            width:65%;
            background-color:brown;
            height:500px;
            float:left;
        }
        #esquerda{
         width:35%;
         background-color:lightgray;
         float:left;
         height:500px;
            
        }
        table{
            background-color:red;
            width:90%;
            margin:auto;
        }
        tr{
            line-height:30px;
        }
        tr#titulo{
            font-weight:bold;
            background-color:darkred;
        }
        #Voltar{background-color:red;}
        
            </style>
        
        <?php
       
       ?>
            <table>
                <tr>
                
                 
        
                    
                </tr>
            </table>
        </body>
</html>
