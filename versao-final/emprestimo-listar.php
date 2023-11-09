<h1>Listar Empréstimos</h1>
<?php
$sql = "SELECT e.id_emprestimo, u.nome_usuario, e.data_emprestimo, e.data_devolucao, e.status_emprestimo
        FROM emprestimo AS e
        INNER JOIN usuario AS u ON e.id_usuario = u.id_usuario";

$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    echo "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    echo "<table class='table table-bordered table-striped table-hover'>";
    echo "<tr>";
    echo "<th>#</th>";
    echo "<th>Usuário</th>";
    echo "<th>Data do Empréstimo</th>";
    echo "<th>Data de Devolução</th>";
    echo "<th>Status do Empréstimo</th>";
    echo "<th>Ações</th>";
    echo "</tr>";

    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>" . $row->id_emprestimo . "</td>";
        echo "<td>" . $row->nome_usuario . "</td>";
        echo "<td>" . $row->data_emprestimo . "</td>";
        echo "<td>" . $row->data_devolucao . "</td>";
        echo "<td>" . $row->status_emprestimo . "</td>";
        echo "<td>
              <button onclick=\"location.href='?page=emprestimo-editar&id_emprestimo=" . $row->id_emprestimo . "';\" class='btn btn-success'>Editar</button>

              <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=emprestimo-salvar&acao=excluir&id_emprestimo=" . $row->id_emprestimo . "';}else{false;}\" class='btn btn-danger'>Excluir</button>
           </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Não encontrou resultado";
}
?>
