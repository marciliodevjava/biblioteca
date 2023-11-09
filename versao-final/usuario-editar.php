<h1>Editar Usuário</h1>
<?php
$sql = "SELECT * FROM usuario WHERE id_usuario=" . $_REQUEST['id_usuario'];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=usuario-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_usuario" value="<?php echo $row->id_usuario; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_usuario" value="<?php echo $row->nome_usuario; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf_usuario" value="<?php echo $row->cpf_usuario; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email_usuario" value="<?php echo $row->email_usuario; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc_usuario" value="<?php echo $row->data_nasc_usuario; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="fone_usuario" value="<?php echo $row->fone_usuario; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Atualizar</button>
    </div>
</form>
