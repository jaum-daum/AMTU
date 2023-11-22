<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";

$valid_users = array(
    'user1' => 'password1',
    'user2' => 'password2'
);

$valid_users['admin'] = 'admin';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $valid_users) && $valid_users[$username] == $password) {
        // Login successful - redireciona para a página desejada após o login
        header('Location: /admin/usuarios/index.php');
        exit();
    } else {
        // Login failed
        $error_message = 'Invalid username or password';
    }
}
?>
<style>
footer{
    bottom: -230px !important;
}
</style>
<div class="container">
    <div class="image_c">
        <img src="/assets/img/logomarca.png" width="300">
    </div>
    <div class="container">
        <!-- Restante do seu código HTML aqui -->
        <!-- Adicione o formulário de login abaixo do seu código existente -->

        <form action="" method="post">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="username">Nome de usuário</label>
                        <input id="username" type="text" class="form-control" name="username"
                            placeholder="Digite seu nome de usuário" required>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input id="password" type="password" class="form-control" name="password"
                            placeholder="Digite sua senha" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <button class="btn btn-primary" type="submit">Login</button>
                    <!-- Botão de Cadastro -->
                    <button class="btn btn-primary "><a href="/admin/usuarios/cadastrar.php">Cadastrar</a></button>
                </div>
            </div>
        </form>

        <?php
        if (isset($error_message)) {
            echo '<p class="error">' . $error_message . '</p>';
        }
        ?>
    </div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php"; ?>
