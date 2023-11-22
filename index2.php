<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagem com Fundo Transparente</title>
    <style>
        body {
            background-color: #f0f0f0; /* Cor de fundo da página */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .imagem-transparente {
            width: 300px; /* Largura da imagem */
            height: 200px; /* Altura da imagem */
            background: url('assets/saldo.png') no-repeat center center;
            background-size: cover;
            opacity: 0.7; /* Valor de opacidade (0.0 a 1.0) */
        }
    </style>
</head>
<body>
    <div class="imagem-transparente"></div>
</body>
</html>
