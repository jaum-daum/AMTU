<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/UsuarioController.php";

    $usuarioControler = new UsuarioController();

    $usuarioControler->cadastrarUsuario();
?>

<main class="container mt-3 mb-3">
    <h1>Cadastrar Usuário</h1>

    <form action="cadastrar.php" method="post" class="row g-3">
        <div class="col-md-12">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="col-md-12">
            <label for="sobrenome" class="form-label">sobrenome</label>
            <input type="text" name="sobrenome" id="sobrenome" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form=label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="cpf" class="form=label">cpf</label>
            <input type="number" name="cpf" id="cpf" class="form-control"required>
        </div>
        <div class="col-md-6">
            <label for="telefone" class="form=label">telefone</label>
            <input type="number" name="telefone" id="telefone " class="form-control"required>
        </div>
        <div class="col-md-6">
            <label for="senha" class="form=label">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control"required>
        </div>
        <div class=col-md-6>
            <label for="perfil" class="form-label">Perfil</label>
            <select name="perfil" class="form-select" id="perfil"required>
                <option>Selecione o Perfil</option>
                <option value="usuario">Usuario</option>
                <option value="administrador">administrador</option>
            </select>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </div>

    </form>

  
</main>  
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";?> 