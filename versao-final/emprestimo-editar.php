<h1>Editar Empréstimo</h1>
<?php
if (isset($_REQUEST['id_emprestimo'])) {
    $id_emprestimo = $_REQUEST['id_emprestimo'];

    $sql = "SELECT * FROM emprestimo WHERE id_emprestimo = $id_emprestimo";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        $row = $res->fetch_object();
?>
        <form action="?page=emprestimo-salvar" method="POST">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id_emprestimo" value="<?php echo $row->id_emprestimo; ?>">
            <div class="mb-3">
                <label>ID do Usuário</label>
                <input type="text" name="id_usuario" value="<?php echo $row->id_usuario; ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label>ID do Livro</label>
                <input type="text" name="id_livro" value="<?php echo $row->id_livro; ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label>Data do Empréstimo</label>
                <input type="date" name="data_emprestimo" value="<?php echo $row->data_emprestimo; ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label>Data de Devolução</label>
                <input type="date" name="data_devolucao" value="<?php echo $row->data_devolucao; ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label>Status do Empréstimo</label>
                <select name="status_emprestimo" class="form-control">
                    <option value="Pendente" <?php if ($row->status_emprestimo == 'Pendente') echo 'selected'; ?>>Pendente</option>
                    <option value="Concluído" <?php if ($row->status_emprestimo == 'Concluído') echo 'selected'; ?>>Concluído</option>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Atualizar Empréstimo</button>
            </div>
        </form>
<?php
    } else {
        echo "Empréstimo não encontrado.";
    }
} else {
    echo "ID de empréstimo não fornecido.";
}
?>
