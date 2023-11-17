<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Perfil do Usuário</title>
</head>
<body>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 10px;
}

header a {
  color: white;
  text-decoration: none;
  float: right;
  margin-right: 20px;
}

.profile {
  text-align: center;
  padding: 20px;
}

.profile img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-bottom: 10px;
}

.options {
  padding: 20px;
}

.options h2 {
  color: #333;
}

.options ul {
  list-style-type: none;
  padding: 0;
}

.options li {
  margin-bottom: 10px;
}

.options a {
  text-decoration: none;
  color: #333;
  display: block;
  padding: 8px;
  background-color: #f0f0f0;
  border-radius: 5px;
}

.options a:hover {
  background-color: #ddd;
}

</style>
  <header>
    <h1>Seu Perfil</h1>
    <a href="#">Logout</a>
  </header>

  <div class="profile">
    <img src="avatar.jpg" alt="Avatar do Usuário">
    <h2>Nome do Usuário</h2>
    <p>Email: usuario@email.com</p>
  </div>

  <div class="options">
    <h2>Opções de Perfil</h2>
    <ul>
      <li><a href="#">Editar Perfil</a></li>
      <li><a href="#">Alterar Senha</a></li>
      <li><a href="#">Configurações</a></li>
    </ul>
  </div>

</body>
</html>
