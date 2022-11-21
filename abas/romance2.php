<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Books</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Css Ofline -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Navbar -->
    <?php
      include "navbar.php";
    ?>
    <!-- Banner -->
    <img class="img-fluid" src="../img/banners/ban-romance.png" alt="">
    
    <!-- Livros -->
    <div class="fund-inf">
        <h1 class="center"><tt>Grandes Clássicos da Literatura</tt></h1>
        <br><hr><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/romance/a-s.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">A Seleção</h5>
                <p>Muitas garotas sonham em ser princesas, mas este não é o caso de America Singer. Ela topa se inscrever na Seleção só para agradar a mãe, certa de que não será sorteada para participar da competição em que o príncipe escolherá sua futura esposa. Mas é claro que depois disso sua vida nunca mais será a mesma...</p>
              </div>
            </div>
          </div>
        </div>
        
        <br><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/romance/u-m-fl.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Um Milhão de Finais Felizes</h5>
                <p>Jonas ainda não sabe muito bem o que quer para o seu futuro, mas é apaixonado por livros e vive anotando suas ideias de histórias em um caderninho de bolso. Ao mesmo tempo em que precisa lidar com o conservadorismo de seus pais em casa, passa grande parte dos seus dias trabalhando no Rocket Café, na cidade de São Paulo. E é lá que, certo dia, conhece Arthur, um garoto de barbas ruivas que o inspira a escrever um novo livro. A partir de então, Jonas passa a entender seu desejo de viver sem precisar corresponder às expectativas dos pais </p>
              </div>
            </div>
          </div>
        </div>
        
        <br><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/romance/t-p-d.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Teto Para Dois</h5>
                <p>Eles dividem um apartamento com uma cama só. Ele dorme de dia, ela, à noite. Os dois nunca se encontraram, mas estão prestes a descobrir que, para se sentir em casa, às vezes é preciso jogar as regras pela janela.  Mas será que essa solução aparentemente perfeita resiste a um ex-namorado obsessivo, uma namorada ciumenta, um irmão encrencado, dois empregos exigentes e alguns amigos superprotetores?</p>
              </div>
            </div>
          </div>
        </div>
  
        <img class="zombie" src="../img/icones/terror/zombie.png" alt="" width="300px">
  
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="romance.php">Anterior</a></li>
            <li class="page-item"><a class="page-link" href="romance.php">1</a></li>
            <li class="page-item"><a class="page-link" href="romance2.php">2</a></li>
            <li class="page-item"><a class="page-link" href="romance3.php">3</a></li>
            <li class="page-item"><a class="page-link" href="romance3.php">Próximo</a></li>
          </ul>
        </nav>
      </div> 
      
      <!-- Fundo -->
      <footer class="foot-rom">
          <br><br><br><br><br><br><br><br>    
      </footer>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>