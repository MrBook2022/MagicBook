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
    <img class="img-fluid" src="../img/banners/ban-terror.png" alt="">
    
    <!-- Livros -->
    <div class="fund-inf">
        <h1 class="center"><tt>Grandes Clássicos da Literatura</tt></h1>
        <br><hr><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/terror/o-d.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">O Demonologista</h5>
                <p>David Ullman, renomado professor da Universidade de Columbia, especializado na figura literária do Diabo. Para David, o Anjo Caído é apenas um ser mitológico.Ao aceitar um convite para testemunhar um suposto fenômeno sobrenatural em Veneza, o que seria apenas uma boa desculpa para tirar férias na Itália com sua filha de 12 anos se transforma em uma jornada assustadora aos recantos mais sombrios da alma.

                </p>
              </div>
            </div>
          </div>
        </div>
        
        <br><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/terror/c-s.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Com sangue</h5>
                <p>Este é um livro sobre amor, amizade, talento e justiça… em suas formas mais deturpadas. Em Com sangue, Stephen King reúne quatro contos com protagonistas inteligentes e complexos, que têm sua vida comum transformada por algum elemento inexplicável.</p>
              </div>
            </div>
          </div>
        </div>
        
        <br><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/terror/o-q-aa.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">O Que Aconteceu Com Annie</h5>
                <p>Quando Joe Thorne era adolescente, sua irmã mais nova desapareceu. Anos depois, um e-mail anônimo o leva mais uma vez ao passado: “Eu sei o que aconteceu com sua irmã. Joe vê a oportunidade de resolver o que arrasta consigo há mais de duas décadas. Mas voltar também significa abrir velhas feridas. Afinal, alguns segredos são grandes demais e Joe não faz ideia de onde está se metendo.</p>
              </div>
            </div>
          </div>
        </div>
  
        <img class="greg" src="../img/icones/fantasma.png" alt="" width="300px">
  
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="terror2.php">Anterior</a></li>
            <li class="page-item"><a class="page-link" href="terror.php">1</a></li>
            <li class="page-item"><a class="page-link" href="terror2.php">2</a></li>
            <li class="page-item"><a class="page-link" href="terror3.php">3</a></li>
            <li class="page-item"><a class="page-link" href="terror3.php">Próximo</a></li>
          </ul>
        </nav>
      </div> 
      
      <!-- Fundo -->
      <footer class="foot-ter">
          <br><br><br><br><br><br><br><br>    
      </footer>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>