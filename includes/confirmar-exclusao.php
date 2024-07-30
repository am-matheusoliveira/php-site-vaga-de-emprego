<main class="mt-5">

    <h2 class="mt-2">Excluir vaga</h2>

    <form method="post">
        <div class="form-group">
            <p>Você deseja realmente excluir a vaga <strong><?=$obVaga->titulo?></strong>?</p>
        </div>

        <div class="form-group mt-5">
            <a href="index.php">
                <button type="button" class="btn btn-success">Cancelar</button>
            </a>

            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>
        
    </form>
</main>