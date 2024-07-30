<?php

    $alertaLogin = !empty($alertaLogin) ? '<div class="alert alert-danger">'.$alertaLogin.'</div>' : '';
    $alertaCadastro = !empty($alertaCadastro) ? '<div class="alert alert-danger">'.$alertaCadastro.'</div>' : '';

?>
<div class="jumbotron bg-light text-dark p-5 mt-2 rounded">

    <div class="row">

        <div class="col">

            <form method="post">

                <h2>Login</h2>

                <?=$alertaLogin?>                

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" required>
                </div>

                <div class="form-group mt-2">
                    <button type="submit" name="acao" value="logar" class="btn btn-primary" required>Entrar</button>
                </div>                

            </form>

        </div>
        
        <div class="col">
            <form method="post">
                
                <h2>Cadastre-se</h2>
                
                <?=$alertaCadastro?>

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                </div>                

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" required>
                </div>

                <div class="form-group mt-2">
                    <button type="submit" name="acao" value="cadastrar" class="btn btn-primary" required>Cadastrar</button>
                </div>                

            </form>
        </div>

    </div>

</div>
