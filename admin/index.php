
<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style-index.css" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


  <title>Recarga Flex</title>
</head>
<body>
  <!-- HEADER -->
  <div class="bg-home">
    <header>

      <nav class="header-content container">

        <div class="header-logo" data-aos="fade-up" data-aos-delay="300">
          <img 
            src="assets/bus.jpg" 
            alt="topo bus"
          />
        </div>

        <div data-aos="fade-down">
          <a class="header-button" href="#">
            Agendar horário
          </a>
        </div>

      </nav>

      <main class="hero container" data-aos="fade-up" data-aos-delay="400">
        <h1>ESTILO É UM REFLEXO DA SUA ATITUDE E SUA PERSONALIDADE.</h1>
        <p>Horário de funcionamento: 09:00 ás 19:00</p>
        <a 
          href="https://api.whatsapp.com/send?phone=5511000000000&text=Quero%20fazer%20um%20agendamento%20hoje!" 
          class="button-contact" 
          target="_blank"
        >
          Agendar horário
        </a>
      </main>

    </header>

  </div>

  <!-- ABOUT -->
  <section class="about">
    <div class="container about-content">
      <div data-aos="zoom-in" data-aos-delay="100">
        <img 
          src="assets/images.svg" 
          alt="Imagem sobre a barbearia"
        />
      </div>

      <div 
        class="about-description"
        data-aos="zoom-out-left" data-aos-delay="250"
      >
        <h2>Sobre</h2>
        <p>Lorem ipsum dolor sit amet consectetur. Ornare eget pellentesque proin risus. Orci proin morbi vestibulum convallis leo vestibulum mus. Non duis augue eros mattis a quis sem sodales.</p>
        <p>Horário de funcionamento: <strong>09:00</strong> ás <strong>19:00</strong></p>
      </div>

    </div>
  </section>

  <!-- SERVICES -->

  <section class="services">

    <div class="services-content container">
      <h2>Serviços</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem nihil officiis sed magni in reiciendis cupiditate tenetur cumque voluptatum quibusdam, consectetur impedit quaerat dicta iusto velit atque enim culpa dolore.</p>
    </div>

    <section class="haircuts">

      <div class="haircut" data-aos="fade-up" data-aos-delay="150">
        <img
          src="assets/corte1.png"
          alt="Corte normal"
        />
        <div class="haircut-info">
          <strong>Corte normal</strong>
          <button>
            R$ 45,00
          </button>
        </div>
      </div>

      <div class="haircut" data-aos="fade-up" data-aos-delay="250">
        <img
          src="assets/corte2.png"
          alt="Barba completa"
        />
        <div class="haircut-info">
          <strong>Barba completa</strong>
          <button>
            R$ 35,00
          </button>
        </div>
      </div>

      <div class="haircut" data-aos="fade-up" data-aos-delay="400">
        <img
          src="assets/corte3.png"
          alt="Corte e barba"
        />
        <div class="haircut-info">
          <strong>Corte e barba</strong>
          <button>
            R$ 85,00
          </button>
        </div>
      </div>

    </section>

  </section>

  <!-- FOOTER -->

  <div class="services">
    <h2>Venha conhecer</h2>
  </div>

  <iframe
  width="100%"
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7476.4115143508725!2d-54.58602051703828!3d-20.45674056051272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9486e8954ac0b10d%3A0x7149aba0cb5688b8!2sShopping%20Campo%20Grande!5e0!3m2!1sen!2sbr!4v1688840244482!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <footer class="footer">
    <div class="footer-icons">
      <a href="#">
        <i class="fa-brands fa-instagram fa-2x"></i>   
       </a>
       <a href="#">
         <i class="fa-brands fa-facebook fa-2x"></i>   
       </a>
       <a href="#">
         <i class="fa-brands fa-tiktok fa-2x"></i>   
       </a>
    </div>

    <div>
      <img 
        src="assets/logo.svg" 
        alt="Logo barbearia"
      />
    </div>

    <p>Copyright 2023 | Dev Barbearia - Todos direitos reservados.</p>
  </footer>

  <!-- Button Whatsapp -->

  <a 
   href="https://api.whatsapp.com/send?phone=5511000000000&text=Quero%20fazer%20um%20agendamento%20hoje!"
   class="btn-whatsapp"
   target="_blank"
   data-aos="zoom-in-up" data-aos-delay="400"
  >
    <img src="assets/whatssapp.svg" alt="Botao whatsapp" />
    <span class="tooltip-text">Agende seu horário</span>
  </a>


  <script src="script.js"></script>
</body>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";?> 
</html>