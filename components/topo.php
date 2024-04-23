<?php
 $css;
 $titulo;
 if (isset($_GET['page'])) {
    $p = $_GET['page'];
    switch($p) {
        case 'jogos':
            $css = "games.css";
            $titulo = "Jogos";
            break;
        case 'empresa':
            $css = "empresa.css";
            $titulo = "Trabalho";
            break;
        case 'fale_conosco':
            $css = "fale.css";
            $titulo = "Fale Conosco";
            break;
        case 'locacao':
            $css = "locacao.css";
            $titulo = "Locação de Jogos";
            break;
        case 'cadastro':
            $css = "cadastro.css";
            $titulo = "Cadastro";
            break;
        case 'login':
            $css = "login.css";
            $titulo = "Login";
            break;
        case 'cadastro-jogo':
            $css = "cadastro-jogo.css";
            $titulo = "Cadastro de Jogos";
            break;
        case 'processar_login':
            $css = "dados.css";
            $titulo = "Processamento do Login";
            break;
        case 'processar_cadastro':
            $css = "dados.css";
            $titulo = "Processamento do Cadastro";           
            break;
        case 'processar_jogo':
            $css = "dados.css";
            $titulo = "Processamento do Jogo";
            break;
        case 'processar_fale':
            $css = "dados.css";
            $titulo = "Processamento de Dados";
            break;

    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?></title>
    <link rel="icon" href="assets/images/logo.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fim.css">
    <link rel="stylesheet" href="css/<?=$css?>">
</head>
<body>
 <header class="topo">
    <div class="barra">
    <div class="logo">
        <a href="index.php?page=home"><img src="assets/images/logo.svg" alt="" srcset=""></a>
        
        <h1>PlayPort</h1>
    </div>
    <a href="index.php?page=cadastro"> <img src="assets/icons/person.svg" alt="" srcset=""> </a>
    </div>

    <div class="divisor"></div>
    <nav class="navegacao">
        <ul>
            <li><a href="index.php?page=jogos">Jogos</a></li>
            <li><a href="index.php?page=locacao">Locação</a></li>
            <li><a href="index.php?page=empresa">Empresa</a></li>
            <li><a href="index.php?page=fale_conosco">Fale Conosco</a></li>
            <li><a href="index.php?page=cadastro">Cadastro</a></li>
        </ul>
    </nav>
 </header>
