<?php
include('config.php');

if ($_REQUEST['acao'] === 'cadastrar') {
    $id_usuario = $_POST['id_usuario'];
    $id_livro = $_POST['id_livro'];
    $data_emprestimo = $_POST['data_emprestimo'];
    $data_devolucao = $_POST['data_devolucao'];

    $sql = "INSERT INTO emprestimo (id_usuario, id_livro, data_emprestimo, data_devolucao) 
            VALUES ('$id_usuario', '$id_livro', '$data_emprestimo', '$data_devolucao')";

    $res = $conn->query($sql);

    if ($res === true) {
        echo "<script>alert('Empréstimo cadastrado com sucesso!');</script>";
    } else {
        echo "<script>alert('Não foi possível cadastrar o empréstimo');</script>";
    }
} elseif ($_REQUEST['acao'] === 'editar') {
    $id_emprestimo = $_POST['id_emprestimo'];
    $id_usuario = $_POST['id_usuario'];
    $id_livro = $_POST['id_livro'];
    $data_emprestimo = $_POST['data_emprestimo'];
    $data_devolucao = $_POST['data_devolucao'];

    $sql = "UPDATE emprestimo 
            SET id_usuario='$id_usuario', id_livro='$id_livro', data_emprestimo='$data_emprestimo', data_devolucao='$data_devolucao' 
            WHERE id_emprestimo=$id_emprestimo";

    $res = $conn->query($sql);

    if ($res === true) {
        echo "<script>alert('Empréstimo editado com sucesso!');</script>";
    } else {
        echo "<script>alert('Não foi possível editar o empréstimo');</script>";
    }
}

echo "<script>location.href='?page=emprestimo-listar';</script>";
?>
