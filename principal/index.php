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

  <link rel="stylesheet" href="style.css" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


  <title>Recarga Flex</title>
  <style>
    .icon-container {
            text-align: center;
            margin: 10px;
        }
.icon-container svg {
            width: 36px;
            height: 36px;
            fill: #333;
            transform: rotate(90deg); 
        }
        #myButton {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #011434;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            width: 100px; /* Define a largura do botão em pixels */
            height: 40px; /* Define a altura do botão em pixels */
            
        }

        .haircut-info {
        display: flex;
            flex-direction: column;
            align-items: center;
            }

            .imagem-redimensionada {
            width: 1000px; /* Largura desejada da imagem */
            height: auto; /* Altura automática para manter a proporção original */
        }
           
        .container {
    text-align: center; /* Centraliza o conteúdo dentro do contêiner */
}

h2.underline {
    border-bottom: 4px solid #f48840; /* Substitua #000 pela cor desejada do risco */
    padding-bottom: 5px; /* Ajuste conforme necessário para a posição do risco */
    display: inline-block; /* Mantém o comportamento de bloco e permite a aplicação do border-bottom */
}
  </style>
</head>
<body>
  <!-- HEADER -->
  <div class="bg-home">
    <header>

      <nav class="header-content container">
        

        <div class="header-logo" data-aos="fade-up" data-aos-delay="300">
          <img 
            data-aos="flip-up"
            data-aos-delay="300"
            data-aos-duration="1500"
            src="assets/bus.png" 
            alt="Logo da barbearia"
            class="imagem-redimensionada"
          />
        </div>

      

      </nav>

      <main class="hero container" data-aos="fade-up" data-aos-delay="400">
        <h1>Sistema de Recarga de cartão.</h1>
        <h3>Recarga Flex</h3>
        <a 
          href="/admin/contato/quemsomos.php" 
          class="button-contact" 
          target="_blank"
        >
          Saiba Mais
        </a>
      </main>

    </header>

  </div>

  

  <!-- SERVICES -->

  <section class="services" id="servicos">

    <div class="services-content container">
    <div class="container">
        <h2 class="underline">Serviços</h2>
    </div>
      <div class="icon-container">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 3.795l2.995-2.98 11.132 11.185-11.132 11.186-2.995-2.981 8.167-8.205-8.167-8.205zm18.04 8.205l-8.167 8.205 2.995 2.98 11.132-11.185-11.132-11.186-2.995 2.98 8.167 8.206z"/></svg>
      </div>
      </div>

    <section class="haircuts">

      <div class="haircut" data-aos="fade-up" data-aos-delay="150">
        <img
          src="assets/recarga.png"
          alt="Corte normal"
        />
        <div class="haircut-info">
        
            <strong>Recarga no Cartão</strong>
            <a href="/admin/cartao/index.php"><button id="myButton">
            $
          </button></a>
      </div>
      </div>

      <div class="haircut" data-aos="fade-up" data-aos-delay="250">
        <img
          src="assets/saldo.png"
          alt="Barba completa"
        />
        <div class="haircut-info">
          <strong>Consulta de Saldo</strong>
          <a href="/admin/cartao/index.php">
          <button id="myButton">
            Saldo
          </button>
          </a>
        </div>
      </div>

      <div class="haircut" data-aos="fade-up" data-aos-delay="400">
        <img
          src="assets/denuncia.png"
          alt="Corte e barba"
        />
        <div class="haircut-info">
          <strong>Disque Denúncia</strong>
          <a href="https://denuncia.sigam.sp.gov.br/">
          <button id="myButton">
            190
          </button>
          </a>
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

  

  <!-- Button Whatsapp -->

  <a 
   href="https://api.whatsapp.com/send?phone=5511000000000"
   class="btn-whatsapp"
   target="_blank"
   data-aos="zoom-in-up" data-aos-delay="400"
  >
    <img src="assets/whatssapp.svg" alt="Botao whatsapp" />
    <span class="tooltip-text">Fale Conosco!</span>
  </a>


  <script src="script.js"></script>
</body>


</html>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";?> 