<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
?>
<div class="container">
    <div class="image_c">
        <img src="/assets/img/logomarca.png" width="300">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname">Nome</label>
                    <input id="firstname" type="text" class="form-control" name="firstname"
                        placeholder="Digite seu primeiro nome" required>
                </div>
            </div>
             <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="lastname">Sobrenome</label>
                    <input id="lastname" type="text" class="form-control" name="lastname"
                        placeholder="Digite seu Sobrenome" required>
                </div>
            </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
            </div>
             <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input id="cpf" type="text" class="form-control" name="email" placeholder="000.000.000-00" required>
                </div>
            </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="number">Telefone</label>
                    <input id="number" type="number" class="form-control" name="number" placeholder="(xx) xxxx-xxxx"
                        required>
                </div>
            </div>
             <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input id="password" type="password" class="form-control" name="password"
                        placeholder="Digite sua senha" required>
                </div>
            </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
           
                    <button class="btn btn-primary "><a href="/admin/central/menu.php">Cadastrar</a></button>

            </div>
        </div>
        </div>
            </div>
        </div>
    </div>
</div>  
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php"; ?>