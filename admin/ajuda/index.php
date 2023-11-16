<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
?>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrir PDF</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    body {
    text-align: center;
}

.pdf-link {
    font-size: 16px;
    padding: 10px 20px;
    text-decoration: none;
    color: #333;
}

.pdf-link i {
    margin-right: 5px;
}

</style>
</head>
<body>

    <a href="ajuda.pdf" target="_blank" class="pdf-link">
        <i class="fas fa-file-pdf fa-2x"></i> Abrir PDF
    </a>
    <a href="guia_usuario.php" target="_blank" class="pdf-link">
        <i class="fas fa-file-pdf fa-2x"></i> abrir ajuda
    </a>

</body>

</script>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php" ?>