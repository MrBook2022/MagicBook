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
            <img src="../img/capaslivros/infantil/pequenoprincipe.png" class="img-fluid rounded-start" alt="..." width="200px">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">O Pequeno Príncipe</h5>
              <p>A Pequena Garota encontra o excêntrico Aviador, que a introduz ao mágico mundo do Pequeno Príncipe. Neste mundo em que tudo é possível, a Garota aprende a redescobrir sua infância.</p>
              <s>R$99,90</s>
              <h5>R$29,90</h5>
            </div>
          </div>
        </div>
      </div>
      
      <br><br>
      <div class="card mb-3" style="max-width: 720px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../img/capaslivros/infantil/sb.png" class="img-fluid rounded-start" alt="..." width="300px">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Sr. Bliss</h5>
              <p>O Sr. Bliss morava numa casa com cômodos altos e porta de entrada muito alta, e ele só usava chapéus bem altos. Um dia o sr. Bliss resolveu sair pela estrada com seu carro novo, e aí começou uma aventura incrível, envolvendo três ursos, vizinhos enfurecidos, os irmãos Dorkins, o Giracoelho e outros personagens estranhos.</p>
              <s>R$19,50</s>
              <h5>R$9,50</h5>
            </div>
          </div>
        </div>
      </div>

      <br><br>
      <div class="card mb-3" style="max-width: 710px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../img/capaslivros/infantil/m-l.png" class="img-fluid rounded-start" alt="..." width="200px">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">O Monstro Que Adorava Ler</h5>
              <p>À beira de uma floresta encantada, um monstro assustador encontra um estranho objeto, que ele cheira e lambe. Não tem gosto de nada! Com raiva, joga-o no chão. No entanto, esse objeto admirável vai mudar completamente sua vida e seu humor. Uma história engraçada, surpreendente e tocante sobre a magia dos livros e o prazer da leitura.</p>
              <s>R$19,99</s>
              <h5>R$9,99</h5>
            </div>
          </div>
        </div>
      </div>
      
      <img class="prin" src="../img/icones/pq-inf2.png" alt="">

      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="infantil.php">Anterior</a></li>
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