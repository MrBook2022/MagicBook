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
    <img class="img-fluid" src="../img/banners/ban-misterio.png" alt="">
    
    <!-- Livros -->
    <div class="fund-inf">
        <h1 class="center"><tt>Grandes Clássicos da Literatura</tt></h1>
        <br><hr><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/misterio/a-u-f.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">A Última Festa </h5>
                <p>Programado para acontecer em um cenário idílico, o réveillon que Miranda, Katie e os outros amigos que conheceram na faculdade passarão juntos este ano promete refeições deliciosas regadas a champanhe, música, jogos e conversas descontraídas. E então, em meio à grande festa da última noite do ano, o fio que os mantém unidos enfim arrebenta. No dia seguinte, alguém está morto e uma forte nevasca impede a vinda do resgate. Ninguém pode entrar. Ninguém pode sair. Nem o assassino.</p>
                <s>R$19,99</s>
              <h5>R$9,99</h5>
              </div>
            </div>
          </div>
        </div>
        
        <br><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/misterio/a-m-n-j.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">A mulher na janela</h5>
                <p>Anna Fox mora sozinha na bela casa que um dia abrigou sua família feliz. Separada do marido e da filha e sofrendo de uma fobia que a mantém reclusa, ela passa os dias bebendo vinho, assistindo a filmes antigos, conversando com estranhos na internet e espionando os vizinhos. Quando os Russells se mudam para a casa do outro lado do parque, Anna fica obcecada por aquela família perfeita. Certa noite, ela vê na casa deles algo que a deixa aterrorizada e faz seu mundo – e seus segredos chocantes – começar a ruir.</p>
                <s>R$19,99</s>
              <h5>R$9,99</h5>
              </div>
            </div>
          </div>
        </div>
        
        <br><br>
        <div class="card mb-3" style="max-width: 710px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/capaslivros/misterio/o-a-d-r-a.jpg" class="img-fluid rounded-start" alt="..." width="250px">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">O assassinato de Roger Ackroyd</h5>
                <p>O milionário Roger Ackroyd é encontrado morto, esfaqueado com uma adaga tunisiana – objeto raro de sua coleção particular . A morte do fidalgo industrial é a terceira de uma misteriosa sequência de crimes, iniciada com a de Ashley Ferrars, que pode ter sido causada ou por uma ingestão acidental de soníferos ou envenenamento articulado por sua esposa – esta, aliás, completa a sequência de mortes, num provável suicídio. </p>
                <s>R$19,99</s>
              <h5>R$9,99</h5>
              </div>
            </div>
          </div>
        </div>
  
        <img class="zombie" src="../img/icones/terror/zombie.png" alt="" width="300px">
  
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="misterio.php">Anterior</a></li>
            <li class="page-item"><a class="page-link" href="misterio.php">1</a></li>
            <li class="page-item"><a class="page-link" href="misterio2.php">2</a></li>
            <li class="page-item"><a class="page-link" href="misterio.php">3</a></li>
            <li class="page-item"><a class="page-link" href="misterio2.php">Próximo</a></li>
          </ul>
        </nav>
      </div> 
      
      <!-- Fundo -->
      <footer class="foot-mis">
          <br><br><br><br><br><br><br><br>    
      </footer>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>