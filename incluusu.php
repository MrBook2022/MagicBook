<?php
    include "conexao.php";

    if(isset($_POST['nome'])){
        //coletar dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $ano = $_POST['ano'];
        $sexo = $_POST['sexo'];

        //comunicação com o banco de dados - insere no banco
        $sql = "INSERT INTO `usuarios`(`nomeUsu`, `emailUsu`, `nascUsu`, `sexoUsu`, `senhaUsu`) VALUES ('$nome','$email','$ano','$sexo','$senha')";
        $incluir = mysqli_query($conexao,$sql);

        //saída - feedback com o usuário
        if($incluir){
            echo "
                <script>
                    alert('Usuário cadastrado com sucesso, realize o login!');
                    window.location = 'login_cadastro.php';
                </script>
            ";
        }
        else{
            echo "
            <p> Sistema Temporariamente fora do ar. </p>
            <p> Entre em contato com o administrador do Sistema. </p>
        ";
        }
    }
    else{
        echo "
            <p> Está é uma página de tratamento de dados. </p>
            <p> Clique <a href='cadastro.php'> aqui </a> para incluir um usuário. </p>
        ";
    }

?>