<?php

// COMPOSER - AUTOLOAD
require __DIR__.'/vendor/autoload.php';

// TÍTULO DA PÁGINA
define('TITLE', 'Cadastrar vaga');

use \App\Entity\Vaga;
use \App\Session\Login;

// OBRIGA O USUÁRIO A ESTAR LOGADO
Login::requireLogin();

// INSTANCIA DE VAGA
$obVaga = new Vaga;

// VALIDAÇÃO DO POST
if(isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])){
        
    $obVaga->titulo    = $_POST['titulo'];
    $obVaga->descricao = $_POST['descricao'];
    $obVaga->ativo     = $_POST['ativo'];
    $obVaga->cadastrar();

    // RETORNANDO - HOMEPAGE
    header('location: index.php?status=success');
    exit;
}

// HEADER
include __DIR__.'/includes/header.php';

// CONTENT
include __DIR__.'/includes/formulario.php';

// FOOTER
include __DIR__.'/includes/footer.php';