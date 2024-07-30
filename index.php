<?php

// COMPOSER - AUTOLOAD
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vaga;
use \App\Db\Pagination;
use \App\Session\Login;

// OBRIGA O USUÁRIO A ESTAR LOGADO
Login::requireLogin();

// BUSCA
$busca = filter_input(INPUT_GET, 'busca', FILTER_UNSAFE_RAW);

// FILTRO DE STATUS
$filtroStatus = filter_input(INPUT_GET, 'filtroStatus', FILTER_UNSAFE_RAW);
$filtroStatus = in_array($filtroStatus, ['s', 'n']) ? $filtroStatus : '';

// CONDIÇÕES SQL
$condicoes = [
    !empty($busca) ? 'titulo LIKE "%'.str_replace(' ', '%', $busca).'%"' : null,
    !empty($filtroStatus) ? 'ativo = "'.$filtroStatus.'"' : null
];

// REMOVE POSIÇÕES VAZIAS
$condicoes = array_filter($condicoes);

// CLÁUSULA WHERE 
$where = implode(' AND ', $condicoes);

// QUANTIDADE TOTAL DE VAGAS
$quantidadeVagas = Vaga::getQuantidadeVagas($where);

// PÁGINAÇÃO
$obPagination = new Pagination($quantidadeVagas, ($_GET['pagina'] ?? 1), 10);
  
// OBTÉM AS VAGAS
$vagas = Vaga::getVagas($where, null, $obPagination->getLimit());

// HEADER
include __DIR__.'/includes/header.php';

// CONTENT
include __DIR__.'/includes/listagem.php';

// FOOTER
include __DIR__.'/includes/footer.php';