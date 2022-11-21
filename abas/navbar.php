<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <!-- Nosso css -->
  <link rel="stylesheet" href="../css/style.css">


</head>
<body>

<nav class="navbar">
    <div class="container-fluid">
      <button class="menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="cardapio"><img src="../img/icones/Group 131 (1).svg" alt="" width="40px"></span>
      </button>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="../img/icones/magic books.svg" width="80px">MAGIC BOOKS</h5>
          <br>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <h5>Principais Categorias</h6>
          <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="terror.php">Terror</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aomance.php">Romance</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="fantasia.php">Fantasia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="misterio.php">Misterio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="infantil.php">Infantil</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="logo">
          <img src="../img/icones/magic books.svg" alt="logo" width="60px">
          <a class="navbar-brand text-dark p-3" href="../index.php">Magic Books</a>
      </div>
      <div class="navbar-itens">
        <?php
                    if(!isset($_SESSION)){
                        session_start();
                    }
                    if(isset($_SESSION['nome'])){
                        $nome = $_SESSION['nome'];
                        $email = $_SESSION['email'];
                        $sexo = $_SESSION['sexo'];
                        $nasc = $_SESSION['nasc'];
                        $senha = $_SESSION['senha'];

                        echo "
                        <a class='navbar-brand' href='perfil.php'>
                        <img src='../img/icones/login.svg' alt='login&cadastro' width='30px'>
                        </a>
                        <a class='navbar-brand' href='logout.php'>
                          <img src='../img/icones/desistir 1.png' alt='login&cadastro' width='30px'>
                        </a>
                        ";
                    }
                    else{
                        echo "
                        <a class='navbar-brand' href='../login_cadastro.php'>
                          <img src='../img/icones/login.svg' alt='login&cadastro' width='30px'></a>
                        ";
                    }
                    
                ?>

      </div>
    </div>
  </nav>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>


