<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="./src/css/estilo-escolha.css">
  <link rel="shortcut icon" href="./assets/logo-white.png" type="image/x-icon">
  <title>Escolha seu Parceiro | RentCar</title>
</head>

<body>
  <!-- Cabeçalho -->
  <header>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#" class="logo">
            <img src="./assets/logo-white.png" alt="logo" class="logo-white">
            <img src="./assets/logo-dark.png" alt="logo" class="logo-dark">
            <span>RentCar</span>
          </a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#home">Início</a></li>
        <li><a href="#about">Catálogo</a></li>
        <li><a href="#choose">Sobre nós</a></li>
        <li><a href="#client">Ajuda</a></li>
        <li><a href="#">Registrar</a></li>
      </ul>
      <div class="nav__btns">
        <button class="btn">Alugar</button>
      </div>
    </nav>
  </header>

  <!-- Seção de Carros -->
  <section class="deals" id="deals">
    <div class="section__container deals__container">
      <h2 class="section__header">Nosso catálogo 🚗</h2>
      <div class="deals__tabs">
        <button class="btn active" data-id="Tesla">Tesla</button>
        <button class="btn" data-id="Mitsubishi">Mitsubishi</button>
        <button class="btn" data-id="Mazda">Mazda</button>
        <button class="btn" data-id="Toyota">Toyota</button>
        <button class="btn" data-id="Honda">Honda</button>
      </div>

      <!-- Conteúdo de Tesla -->
      <div id="Tesla" class="tab__content active">
        <div class="deals__card">
          <img src="./assets/deals-1.png" alt="deals">
          <div class="deals__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-line"></i></span>
            <span>(550)</span>
          </div>
          <h4>Tesla Model S</h4>
          <div class="deals__card__grid">
            <div><span><i class="ri-group-line"></i></span> 4 Pessoas</div>
            <div><span><i class="ri-steering-2-line"></i></span> Automático</div>
            <div><span><i class="ri-speed-up-line"></i></span> 400km</div>
            <div><span><i class="ri-car-line"></i></span> Elétrico</div>
          </div>
          <hr>
          <div class="deals__card__footer">
            <h3>R$180<span>/Por dia</span></h3>
            <a href="./src/php/alugar_carro.php">
              Alugar já <span><i class="ri-arrow-right-line"></i></span>
            </a>
          </div>
        </div>
        <!-- Repetir estrutura para mais carros -->
      </div>
    </div>
  </section>

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="./src/js/main.js"></script>
</body>

</html>
