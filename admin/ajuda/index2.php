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
footer{
    margin-top: 200px !important;
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
.intro-topo {
    background-color: #f48840;
    color: #fff;
    text-align: center;
    padding: 40px;
}
main {
    min-height: 500px;
}

.iconestopo{
    margin-top: 200px;
}
</style>
</head>
<main>
<div class="intro-topo">
        <h1>Bem-vindo à Página de Ajuda</h1>
        <p>Abra o PDF de ajuda ou Abra o central de ajuda online.</p>
</div>

    <div class="iconestopo">
    <a href="ajuda.pdf" target="_blank" class="pdf-link">
        <i class="fas fa-file-pdf fa-2x"></i> Abrir PDF
    </a> <br>
    <a href="teste.php" target="_blank" class="pdf-link">
    <i class="fas fa-info-circle fa-2x"></i> Abrir menu online
    </a>
</div>
</main>


</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php" ?>

</html>