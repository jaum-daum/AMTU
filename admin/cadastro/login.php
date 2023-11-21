<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
?>

<div class="container">
    <div class="image_c">
        <img src="/assets/img/logomarca.png" width="300">
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-group">
                <label for="firstname">E-mail</label>
                <input id="firstname" type="text" class="form-control" name="firstname"
                    placeholder="Digite seu E-mail" required>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-group">
                <label for="password">Senha</label>
                <input id="password" type="password" class="form-control" name="password"
                    placeholder="Digite sua Senha" required>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-md-12 text-center">
           
                    <button class="btn btn-primary "><a href="/admin/cadastro/cadastro.php">Cadastrar</a></button>
                    <button class="btn btn-primary "><a href="/admin/central/menu.php">Logar</a></button>
            </div>
        </div>
</div>



<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php"; ?>