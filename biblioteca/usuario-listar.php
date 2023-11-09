<h1>Listar Usuário</h1>
<?php
$sql = "SELECT * FROM usuario";
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
    echo "<th>Data de Nascimento</th>";
    echo "<th>Telefone</th>";
    echo "<th>Ações</th>";
    echo "</tr>";

    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>".$row->id_usuario."</td>";
        echo "<td>".$row->nome_usuario."</td>";
        echo "<td>".$row->cpf_usuario."</td>";
        echo "<td>".$row->email_usuario."</td>";
        echo "<td>".$row->data_nasc_usuario."</td>";
        echo "<td>".$row->fone_usuario."</td>";
        echo "<td>
              <button onclick=\"location.href='?page=usuario-editar&id_usuario=".$row->id_usuario."';\" class='btn btn-success'>Editar</button>
              <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=usuario-salvar&acao=excluir&id_usuario=".$row->id_usuario."';}else{false;}\" class='btn btn-danger'>Excluir</button>
           </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Não encontrou resultado";
}
?>
