<?php
    include "adm/topo.php";
?>
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style>

  a {
    text-decoration: none;
  }

  @media only screen and (width: 400px) {
    #heroContainer {
    display: block;
    margin: auto;
    width: 100vw;
  }

  #hero {
    margin-top: 15px;
  }

  #hero span {
    margin-left: 65px;
    padding: 51px;
    display: block;
    text-align: center;
  }

  h3 {
    margin-top: 50px;
  }

  #cafeHero {
    display: none;
  }
}
</style>

<body style="background-color: #F8F9FA;">
    <section class="container-fluid row" id="heroContainer">
        <div class="col d-flex justify-content-center align-items-center" id="hero">
            <span style="margin-right: 60px;">
                <h1 style="margin-bottom: 10px;">O melhor <b style="color: #874504;">café</b> do Rio de Janeiro.</h1>
                <p>Com grãos selecionados das melhores plantações do Brasil, nosso café é torrado <br> artesanalmente, proporcionando um sabor incomparável que agrada até os paladares <br> mais exigentes.</p>
                <button type="button" class="btn btn-primary btn-lg" style="background-color: #a05000; border: 0px; border-radius: 30px; width: 170px; margin-top: 20px;"><a target="_blank" href="https://azoroasters.com/?gclid=CjwKCAjwxNW2BhAkEiwA24Cm9NTrewRe7zhDwVXKo0g42JB-UjO0MOGMSED_IsKHEThy66zdxsFfNBoCxMcQAvD_BwE">Saiba mais</a></button>
            </span>
            <img src="img/cafepng.png" alt="" class="w-25" id="cafeHero">
        </div>
    </section>

    <div class="container mt-2 mb-5">
        <h3 style="text-align: center;" class="mb-5">Conheça nossos grãos especiais!</h3>
        <div class="row">
  
            <div class="col">
              <div class="card">
                <img class="card-img-top" src="https://granuttocafe.com.br/wp-content/uploads/2021/10/Cafe-Torrado-e-Moido-Granutto.png" alt="Imagem de capa do card" style="width: 300px; margin: auto; padding: 15px;">
                <div class="card-body">
                  <h5 class="card-title">Serra do Ouro</h5>
                  <p class="card-text">Com notas sutis de caramelo e amêndoas, cada xícara oferece uma experiência dourada, inesquecível e saborosa.</p>
                  <a href="form.php" class="btn btn-primary" style="background-color: #A05000; border: 0; border-radius: 20px; width: 120px;">Comprar</a>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card">
                <img class="card-img-top" src="https://granuttocafe.com.br/wp-content/uploads/2021/10/Cafe-Torrado-e-Moido-Granutto.png" alt="Imagem de capa do card" style="width: 300px; margin: auto; padding: 15px;">
                <div class="card-body">
                  <h5 class="card-title">Jardim Imperial</h5>
                  <p class="card-text">Com um perfil de sabor elegante, que combina frutas vermelhas e chocolate, este café oferece uma degustação majestosa e refinada.</p>
                  <a href="form.php" class="btn btn-primary" style="background-color: #A05000; border: 0; border-radius: 20px; width: 120px;">Comprar</a>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card">
                <img class="card-img-top" src="https://granuttocafe.com.br/wp-content/uploads/2021/10/Cafe-Torrado-e-Moido-Granutto.png" alt="Imagem de capa do card" style="width: 300px; margin: auto; padding: 15px;">
                <div class="card-body">
                  <h5 class="card-title">Pedra Negra</h5>
                  <p class="card-text"> Com notas profundas de cacau e um leve toque de especiarias, este café especial é ideal para quem busca uma experiência forte.</p>
                  <a href="form.php" class="btn btn-primary" style="background-color: #A05000; border: 0; border-radius: 20px; width: 120px;">Comprar</a>
                </div>
              </div>
            </div>

        </div>
    </div>
    
    <footer style="background-color: #4F2E1B;" class="d-flex flex-column justify-content-center align-items-center">
      <img src="img/cafelogo white.svg" alt="" class="logo" style="width: 90px;">
      <nav>
          <ul class="d-flex align-items-center" style="gap: 25px; text-align: center;">
              <a href="">
                  <li style="color: white;">Home</li>
              </a>
              <a href="">
                  <li style="color: white;">Sobre</li>
              </a>
              <a href="">
                  <li style="color: white;">Trabalho</li>
              </a>
          </ul>
      </nav>
      <p style="color: white;">Fernanda Leal - 16</p>
    </footer>
  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>