<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
?> 

    <style>

        #about-section {
            padding: 2em;
        }

        #about-section:after {
            content: "";
            display: table;
            clear: both;
        }

        #text {
            float: left;
            width: 60%; /* Ajuste conforme necessário */
        }

        #image {
            float: right;
            width: 40%; /* Ajuste conforme necessário */
        }
        .intro-topo {
    background-color: #f48840;
    color: #fff;
    text-align: center;
    padding: 40px;
}
  
    </style>

<div class="intro-topo">
        <h1>Bem-vindo à Página de Quem Somos</h1>
        <p>Um pouco sobre a Empresa.</p>
</div>
    <section id="about-section" class="container">
        <div id="text">
            <h2>Quem Somos</h2>
            <p><strong>Somos uma Empresa de Tecnologia, voltada para Web e app. Soluções fáceis e práticas para agilizar nossa vida.
Responsável pelo controle de Clientes e usuários em transportes Públicos ou Privados.
Controle de Saldo e Crédito em transporte.
Recarga de Cartão.
Reportagem de ocorrido em transporte.</strong></p>
        </div>

        <div id="image">
            <img src="/assets/img/somos.png" alt="Imagem da Empresa" style=" height: 500px;
    width: auto; ">
        </div>
    </section>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";?> 

</body>
</html>
