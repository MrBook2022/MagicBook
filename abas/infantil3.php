<DOCTYPE html>
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
    <img src="../img/banners/img4.png" class="img-fluid" alt="crianças">

    <!-- Livros -->
  
    <div class="fund-inf">
      <h1 class="center"><tt>Sucessos Para Toda Familia</tt></h1>
      <br><hr><br>
      <div class="card mb-3" style="max-width: 710px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../img/capaslivros/infantil/bia-elef.jpg" class="img-fluid rounded-start" alt="..." width="250px">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Bia e o elefante: Piquenique</h5>
              <p>Os dois amigos inseparáveis voltam para mais uma aventura: vão fazer um piquenique! O que será que a Bia vai levar? E o Elefante? Cada um deles escolhe um elemento, que vai aumentando gradativamente na história. Mas quando tudo está pronto, uma chuva faz os dois mudarem os planos e fazer um piquenique em casa!</p>
              <s>R$19,99</s>
              <h5>R$9,99</h5>
            </div>
          </div>
        </div>
      </div>
      
      <br><br>
      <div class="card mb-3" style="max-width: 720px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../img/capaslivros/infantil/p-r.jpg" class="img-fluid rounded-start" alt="..." width="250px">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">A História do Pedro Coelho</h5>
              <p>Pedro Coelho é um animal rebelde que apronta todas no quintal e até dentro da casa do Mr. McGregor, com quem trava uma dura batalha pelo carinho e atenção da amante de animais Bea.</p>
              <s>R$39,99</s>
              <h5>R$22,99</h5>
            </div>
          </div>
        </div>
      </div>

      <br><br>
      <div class="card mb-3" style="max-width: 710px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../img/capaslivros/infantil/m-m-m.jpg" class="img-fluid rounded-start" alt="..." width="250px">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Marcelo, Marmelo, Martelo</h5>
              <p>Situações do cotidiano ganham encanto nas palavras de Ruth Rocha, que inova a maneira de contar histórias. Os personagens dos três contos deste livro são crianças que vivem no espaço urbano. Elas resolvem seus impasses com muita esperteza e vivacidade: Marcelo cria palavras novas; Teresinha e Gabriela acabam se identificando, apesar das diferenças; Caloca compreende a importância da amizade.</p>
              <s>R$19,39</s>
              <h5>R$9,30</h5>
            </div>
          </div>
        </div>
      </div>
      
      <img class="elef" src="../img/icones/elef-inf3.png" alt="">

      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="infantil2.php">Anterior</a></li>
          <li class="page-item"><a class="page-link" href="infantil.php">1</a></li>
          <li class="page-item"><a class="page-link" href="infantil2.php">2</a></li>
          <li class="page-item"><a class="page-link" href="infantil3.php">3</a></li>
          <li class="page-item"><a class="page-link" href="infantil3.php">Próximo</a></li>
        </ul>
      </nav>
    </div> 
    
    <!-- Fundo -->
    <footer>
        <img src="../img/banners/img5.png" class="img-fluid" alt="">    
    </footer>
</body>
</html>