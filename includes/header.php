<?php
    
    use \App\Session\Login;

    // USUÁRIO LOGADO
    $usuarioLogado = Login::getUsuarioLogado();

    // DETALHES DO USUÁRIO
    $usuario = $usuarioLogado ? 
               $usuarioLogado['nome'].'<a href="logout.php" class="text-light fw-bold ms-2">Sair</a>' :
               'Visitante <a href="login.php" class="text-light fw-bold ms-2">Entrar</a>'

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">       

        <title>PHP Site vaga de empregos</title>

    </head>
    <body class="bg-dark text-light">
        <div class="container">
            <div class="jumbotron bg-danger rounded p-2">
                <h4>PHP Site vaga de empregos</h4>
                <p>Exemplo de CRUD com PHP orientado a objeto</p>

                <hr class="border-light">

                <div class="d-flex justify-content-start">
                    <?=$usuario?>
                </div>
            </div>
    
