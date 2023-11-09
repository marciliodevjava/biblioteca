<form action="?page=emprestimo-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>ID do Usuário</label>
        <input type="text" name="id_usuario" class="form-control">
    </div>
    <div class="mb-3">
        <label>ID do Livro</label>
        <input type="text" name="id_livro" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data do Empréstimo</label>
        <input type="date" name="data_emprestimo" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Devolução</label>
        <input type="date" name="data_devolucao" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Cadastrar Empréstimo</button>
    </div>
</form>
