<h1>Listar Atendente</h1>
<?php
$sql = "SELECT * FROM atendente";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    echo "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    echo "<table class='table table-bordered table-striped table-hover'>";
    echo "<tr>";
    echo "<th>#</th>";
    echo "<th>Nome</th>";
    echo "<th>CPF</th>";
    echo "<th>Email</th>";
    echo "<th>Telefone</th>";
    echo "<th>Endereço</th>";
    echo "<th>Data de Contratação</th>";
    echo "<th>Salário</th>";
    echo "<th>Turno</th>";
    echo "<th>Ações</th>";
    echo "</tr>";

    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>".$row->id_atendente."</td>";
        echo "<td>".$row->nome_atendente."</td>";
        echo "<td>".$row->cpf_atendente."</td>";
        echo "<td>".$row->email_atendente."</td>";
        echo "<td>".$row->telefone_atendente."</td>";
        echo "<td>".$row->endereco_atendente."</td>";
        echo "<td>".$row->data_contratacao."</td>";
        echo "<td>".$row->salario."</td>";
        echo "<td>".$row->turno."</td>";
        echo "<td>
              <button onclick=\"location.href='?page=atendente-editar&id_atendente=".$row->id_atendente."';\" class='btn btn-success'>Editar</button>

              <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=atendente-salvar&acao=excluir&id_atendente=".$row->id_atendente."';}else{false;}\" class='btn btn-danger'>Excluir</button>
           </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Não encontrou resultado";
}
?>
