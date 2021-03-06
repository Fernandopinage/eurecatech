<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/head.css" rel="stylesheet">
    <title>Caixa de Notas Fiscais</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../imgs/logo_prefeitura.png" alt="" width="280" height="90" class="d-inline-block align-text-top">

        </a>
    </div>
</nav>
<nav class="navbar navbar-expand-lg" style="background-color: #3263A6;">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost/eurecatech/view/home.php">Perfil </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img src="../imgs/232021826_154016596844014_5388734205509322776_n.jpg"
                    width="30px;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"
                        style="color: white; margin-left: 15px;">Escrituração</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;margin-left: 15px">Movimento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;margin-left: 15px">Conta Corrente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;margin-left: 15px">Consultas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;margin-left: 15px">Canal Aberto</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color: white;margin-left: 15px">Relatório</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="?p=relatorio">Não Conformidade</a></li>
                    </ul>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;margin-left: 15px">Sair</a>
                </li>
            </ul>
        </div>
        
</nav>

<body>

<?php


if(isset($_GET['p'])){

    header('Location: http://localhost/eurecatech/view/relatorio.php');
}


?>
    