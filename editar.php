<?php

// COMPOSER - AUTOLOAD
require __DIR__.'/vendor/autoload.php';

// TÍTULO DA PÁGINA
define('TITLE', 'Editar vaga');

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
if(isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])){

    $obVaga->titulo    = $_POST['titulo'];
    $obVaga->descricao = $_POST['descricao'];
    $obVaga->ativo     = $_POST['ativo'];
    $obVaga->atualizar();

    // echo('<pre>'); print_r($obVaga); echo('</pre>'); exit;


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