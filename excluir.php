<?php

// COMPOSER - AUTOLOAD
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vaga;
use \App\Session\Login;

// OBRIGA O USUÁRIO A ESTAR LOGADO
Login::requireLogin();

// VALIDAÇÃO DO ID
if(!isset($_GET['id_vaga']) or !is_numeric($_GET['id_vaga'])){
    header('location: index.php?status=error');
    exit;
}

// CONSULTA A VAGA
$obVaga = Vaga::getVaga($_GET['id_vaga']);

// VALIDAÇÃO DA VAGA
if(!$obVaga instanceof Vaga){
    header('location: index.php?status=error');
    exit;    
}

// VALIDAÇÃO DO POST
if(isset($_POST['excluir'])){

    $obVaga->excluir();

    // RETORNANDO - HOMEPAGE
    header('location: index.php?status=success');
    exit;
}

// HEADER
include __DIR__.'/includes/header.php';

// CONTENT
include __DIR__.'/includes/confirmar-exclusao.php';

// FOOTER
include __DIR__.'/includes/footer.php';