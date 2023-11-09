<h1>Cadastrar Atendente</h1>
<form action="?page=atendente-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_atendente" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf_atendente" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email_atendente" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone_atendente" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco_atendente" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Contratação</label>
        <input type="date" name="data_contratacao" class="form-control">
    </div>
    <div class="mb-3">
        <label>Salário</label>
        <input type="text" name="salario" class="form-control">
    </div>
    <div class="mb-3">
        <label>Turno</label>
        <select name="turno" class="form-control">
            <option value="Manhã">Manhã</option>
            <option value="Tarde">Tarde</option>
            <option value="Noite">Noite</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
</form>
