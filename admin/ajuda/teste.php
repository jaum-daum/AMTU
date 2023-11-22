<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
?>
<style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.intro-topo {
    background-color: #f48840;
    color: #fff;
    text-align: center;
    padding: 40px;
}

h1 {
    margin: 0;
}

p {
    margin-top: 10px;
}

.main-content {
    padding: 20px;
}



hr {
    border: 2px solid black;
    margin: 20px 0; 
}

a {
  color: inherit;
  text-decoration: none; 
  font-weight: bold;
}

a:hover {
  text-decoration: underline; 
}

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
footer{
    bottom: -180px !important;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <div class="intro-topo">
        <h1>Bem-vindo à Página de Ajuda</h1>
        <p>Encontre respostas para suas dúvidas abaixo.</p>
</div>
<div class="container">
    <section class="main-content">
        <h2>Como Utilizar Esta Página</h2>
        <p>Esta página foi projetada para fornecer informações e suporte. Click em um dos menus para ser levado ao submenu.</p>
        
        <ul>
        <li><a href="#introducao">1. INTRODUÇÃO</a></li>
        <li><a href="#publico">2. PÚBLICO ALVO</a></li>
        <li><a href="#acesso">3. ACESSO</a></li>
        <li><a href="#cadastro">4. CADASTRO</li>
        <li><a href="#cartao">5.CARTÃO</a></li>
        <li><a href="#denuncia">6. DENUNCIA</a></li>
        </ul>

        <h2 id="introducao">1.INTRODUÇÃO</h2>
    <P>Atualmente com o avanço da tecnologia, muitas pessoas tem o smartphone e com isso muitos programas são resolvidos diretamente com o próprio celular, não precisando ir até o local físico, por exemplo com essas dificuldades; chuva, mobilidade, distancia, tempo, com isso foi visto uma maneira de poder resolver esse transtorno.
        Nosso software consiste em facilitar a vida dos usuarios que usam o transporte publico ou privado,oferecendo soluções para tarefas como recarga de cartão etc.. de forma conviniente, eliminando as futuras dificuldades de deslocamento fisico.
    </P>
    <hr>
    <h2 id="publico">2. PÚBLICO ALVO</h2>
    <P>
        <ul>
            <li>Estudantes</li>
        </ul>
        <ul>
            <li>Motoristas</li>
        </ul>
        <ul>
            <li>Faixa Etária</li>
        </ul>
        <ul>
            <li>Mulheres</li>
        </ul>
    </P>
    <hr>

    <h2 id="acesso">3. ACESSO</h2>
    <hr>
    <h2 id="cadastro">4. CADASTRO</h2>
    <h4>4.1 Cadastro de Motorista</h4>
    <p>Para poder cadastrar um Motorista no sistema precisa seguir os seguintes passo:</p>
    <li>No menu inicial localize o Cabeçalho(Parte Superior), Click em "motorista".</li>
    <li>Aberto o Menu de Estudante, click em "Cadastrar".</li>
    <li>Em tela de Cadastro, Preencher as informações pedida.</li>
    <li>Apos preenchimento, Click em Cadastrar.</li>
    <li>Visualizar Mensagem de "Cadastro Realizado com Sucesso".</li>
    <br>
    <h4>4.2 Cadastro de Estudante</h4>
    <p>Para poder cadastrar um Estudante no sistema precisa seguir os seguintes passo:</p>
    <li>No menu inicial localize o Cabeçalho(Parte Superior), Click em "Estudante".</li>
    <li>Aberto o Menu de Estudante, click em "Cadastrar".</li>
    <li>Em tela de Cadastro, Preencher as informações pedida.</li>
    <li>Apos preenchimento, Click em Cadastrar.</li>
    <li>Visualizar Mensagem de "Cadastro Realizado com Sucesso".</li>
    <br>
    <h4>4.3 CADASTRO DE USUÁRIO</h4>
    <p>Para poder cadastrar um usuario no sistema precisa seguir os seguintes passo:</p>
    <li>No menu inicial localize o Cabeçalho(Parte Superior), Click em "Usuario".</li>
    <li>Aberto o Menu de usuario, click em "Cadastrar".</li>
    <li>Em tela de Cadastro, Preencher as informações pedida.</li>
    <li>Apos preenchimento, Click em Cadastrar.</li>
    <li>Visualizar Mensagem de "Cadastro Realizado com Sucesso".</li>
    <hr>

    <h3 id="cartao">5. CARTÃO</h3>
    <h4>5.1 Recarga do Cartão</h4>
    <p>Para poder recargar o cartão no sistema precisa seguir os seguintes passo:</p>
    <li>No menu inicial localize o botão de recarga(Parte Superior), Click em "Recarregar".</li>
    <li>Aberto o Menu de usuario, click em "Recarregar".</li>
    <li>Em tela de Recarregar, Preencher as informações pedida.</li>
    <li>Apos preenchimento, Click em pagar.</li>
    <li>Apos o pagamento, Click em "voltar ao inicio".</li>
    <li>Visualizar Mensagem de "Pagamento efetuado com Sucesso".</li>
    <br>
    <h4 >5.2 CONSULTA DE SALDO</h4>
    <P>Para poder saber o quanto de saldo ainda resta no seu cartão , você precisa seguir os seguintes passo-a-passo:</p>
    <li>No menu inicial localize o botão de consulta de saldo(Parte Superior), Click em "consultar saldo".</li>
    <li>Aberto o MENU  de saldo, click em "VER SALDO".</li>
    <li>Nessa tela você conseguirá Visualizar o saldo do seu cartão.</li>
    <li>Caso queira Recarregar click no botão "Recarregar CARTÃO".</li>
    <li>caso não consiga, click no botão de ajuda</li>
    <li>Refazer passo a passo de "recarga de saldo".</li>
    <br>
    <h4>5.3 BLOQUEIO DO CARTÃO</h4>
    <P>O bloqueio de cartão consiste em bloquear se cartão em caso de perda, siga o passo-a-passo:</p>
    <li>No menu inicial localize o botão de Bloqueio de cartão(Parte Superior), Click em "bloquear".</li>
    <li> Apos aberto o MENU  de bloqueio.</li>
    <li>Será pedido seu cpf, e tera a opcão de cartão comun,cartão de Estudante.</li>
    <li>apos a sua escolha você vizualizará a Mensagem"cartão bloqueado".</li>
    <hr>
    <h3 id="denuncia">6. DISQUE DENÚNCIA</h3>
    <P> Para utilizar o serviço disque-denuncia siga o passo-a-passo</p>
    <li>No menu inicial localize o botão de Fazer denúncia(Parte Superior).</li>
    <li>Apos aberto a pagina de "BLOQUEIO".</li>
    <li>tera uma barra de escrita para voce colocar sua denuncia.</li>
    <li>logo apos click em "enviar".</li>
    <li>E então analizaremos sua denuncia e tomaremos as devidas ações.</li>
    <hr>



        <h2>Perguntas Frequentes</h2>
        <p>Aqui estão algumas perguntas frequentes que podem ajudar a esclarecer suas dúvidas:</p>
        <ul>
            <li><strong>Como faço para criar uma conta?</strong> - Consulte a seção "Cadastro" para obter instruções passo a passo.</li>
            <li><strong>Como faço para bloquear cartão</strong> - Visite a seção "Cartão" para obter informações sobre o bloqueio.</li>
        </ul>
        <a href="ajuda.pdf" target="_blank" class="pdf-link">
        <i class="fas fa-file-pdf fa-2x"></i> Abrir em PDF
    </a>
    </section>
</div>



<style>
footer {
    background-color: #011434;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: relative;
    bottom: 0;
    width: 100%;

    
}
</style>
<footer class="">


    <div class="container">
      <img 
        src="/assets/img/logomarca.png" 
        alt="Logo barbearia"
        style="width: 10% !important;
        height: auto;"
      />
    </div>

    <p>Copyright 2023 | Recarga Flex - Todos direitos reservados.</p>
  </footer>



