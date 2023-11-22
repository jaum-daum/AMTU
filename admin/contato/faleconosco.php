<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
?> 
    <style>
       

        #contact-info {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 2em;
        }

        .contact-item {
            text-align: center;
        }

       
    </style>

    <section id="contact-info">
        <div class="contact-item">
            <h2>Número de Contato</h2>
            <p>(11) 1234-5678</p>
        </div>

        <div class="contact-item">
            <h2>Email</h2>
            <p>contato@example.com</p>
        </div>
    </section>


    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";?> 
  

</body>
</html>
