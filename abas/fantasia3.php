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
    <img class="img-fluid" src="../img/banners/ban-fantasia.png" alt="">
    
    <!-- Livros -->
    <div class="fund-inf">
        <h1 class="center"><tt>Trilogia Senhor Dos Anéis</tt></h1>
        <br><hr><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/fantasia/s1.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">A Sociedade do Anel</h5>
                <p>A Sociedade do Anel começa no Condado, a região rural do oeste da Terra-média onde vivem os diminutos e pacatos hobbits. Bilbo Bolseiro, um dos raros aventureiros desse povo, cujas peripécias foram contadas em O Hobbit, resolve ir embora do Condado e deixa sua considerável herança nas mãos de seu jovem parente Frodo.</p>
                <h5>R$29,99</h5>
              </div>
            </div>
          </div>
        </div>
        
        <br><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/fantasia/s2.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">As Duas Torres</h5>
                <p>Um ataque-surpresa pôs fim à jornada conjunta da Sociedade do Anel. De um lado, o trio formado pelo elfo Legolas, pelo anão Gimli e por Aragorn, herdeiro da realeza dos Homens, tenta resgatar os jovens hobbits Merry e Pippin, capturados por guerreiros-órquicos. A busca pelos companheiros perdidos levará os três a confrontar os cavaleiros do reino de Rohan e o mago renegado Saruman, que também deseja o Um Anel para si.</p>
                <h5>R$29,99</h5>
              </div>
            </div>
          </div>
        </div>
        
        <br><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/fantasia/s3.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">O Retorno do Rei</h5>
                <p>A guerra entre os Povos Livres da Terra-média e Sauron, o Senhor Sombrio da terra de Mordor, chega a seu clímax neste terceiro volume do romance O Senhor dos Anéis. As batalhas grandiosas que estão prestes a acontecer, no entanto, são apenas o pano de fundo para o verdadeiro drama: a missão quase suicida dos hobbits Frodo e Sam, que tentam destruir o Um Anel, fonte do poder de Sauron, infiltrando-se no coração do território do Inimigo.</p>
                <h5>R$29,99</h5>
              </div>
            </div>
          </div>
        </div>
  
        <img class="zombie" src="../img/icones/terror/zombie.png" alt="" width="300px">
  
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="fantasia2.php">Anterior</a></li>
            <li class="page-item"><a class="page-link" href="fantasia.php">1</a></li>
            <li class="page-item"><a class="page-link" href="fantasia2.php">2</a></li>
            <li class="page-item"><a class="page-link" href="fantasia3.php">3</a></li>
            <li class="page-item"><a class="page-link" href="fantasia3.php">Próximo</a></li>
          </ul>
        </nav>
      </div> 
      
      <!-- Fundo -->
      <footer class="foot-fan">
          <br><br><br><br><br><br><br><br>    
      </footer>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>