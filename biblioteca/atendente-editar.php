<h1>Editar Atendente</h1>
<?php
$sql = "SELECT * FROM atendente WHERE id_atendente=" . $_REQUEST['id_atendente'];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=atendente-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_atendente" value="<?php echo $row->id_atendente; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_atendente" value="<?php echo $row->nome_atendente; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf_atendente" value="<?php echo $row->cpf_atendente; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email_atendente" value="<?php echo $row->email_atendente; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone_atendente" value="<?php echo $row->telefone_atendente; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco_atendente" value="<?php echo $row->endereco_atendente; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Contratação</label>
        <input type="date" name="data_contratacao" value="<?php echo $row->data_contratacao; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Salário</label>
        <input type="text" name="salario" value="<?php echo $row->salario; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Turno</label>
        <select name="turno" class="form-control">
            <option value="Manhã" <?php echo ($row->turno == "Manhã") ? "selected" : ""; ?>>Manhã</option>
            <option value="Tarde" <?php echo ($row->turno == "Tarde") ? "selected" : ""; ?>>Tarde</option>
            <option value="Noite" <?php echo ($row->turno == "Noite") ? "selected" : ""; ?>>Noite</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Atualizar</button>
    </div>
</form>
