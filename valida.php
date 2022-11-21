<?php
    include "conexao.php";

    if(isset($_POST['email'])){
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
        
        //escreve a sql
        $sql = "select * from usuarios where emailUsu = '$email' and senhaUsu = '$senha'";
        //executa a sql
        $testeLogin = mysqli_query($conexao,$sql);
        $existe = mysqli_num_rows($testeLogin);
       
        
        if($existe){
            //carrega a sql em um vetor(array)
            $dados = mysqli_fetch_array($testeLogin);
            $senha = $dados['senhaUsu'];
            $nome = $dados['nomeUsu'];
            $email = $dados['emailUsu'];
            $sexo = $dados['sexoUsu'];
            $nasc = $dados['nascUsu'];

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            $_SESSION['sexo'] = $sexo;
            $_SESSION['nasc'] = $nasc;
            $_SESSION['senha'] = $senha;


            header('location: abas/perfil.php');
        }
        else{
            echo "<div class='alert alert-danger' role='alert'>
            Usuário ou senha inválidos
          </div>";
        }
    }
    

?>