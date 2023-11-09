<?php
include('config.php');

if ($_REQUEST['acao'] === 'cadastrar') {
    $nome_usuario = $_POST['nome_usuario'];
    $cpf_usuario = $_POST['cpf_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $data_nasc_usuario = $_POST['data_nasc_usuario'];
    $fone_usuario = $_POST['fone_usuario'];

    $sql = "INSERT INTO usuario (nome_usuario, cpf_usuario, email_usuario, data_nasc_usuario, fone_usuario) 
            VALUES ('$nome_usuario', '$cpf_usuario', '$email_usuario', '$data_nasc_usuario', '$fone_usuario')";

    $res = $conn->query($sql);

    if ($res === true) {
        echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
    } else {
        echo "<script>alert('Não foi possível cadastrar o usuário');</script>";
    }
} elseif ($_REQUEST['acao'] === 'editar') {
    $id_usuario = $_POST['id_usuario'];
    $nome_usuario = $_POST['nome_usuario'];
    $cpf_usuario = $_POST['cpf_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $data_nasc_usuario = $_POST['data_nasc_usuario'];
    $fone_usuario = $_POST['fone_usuario'];

    $sql = "UPDATE usuario 
            SET nome_usuario='$nome_usuario', cpf_usuario='$cpf_usuario', email_usuario='$email_usuario', data_nasc_usuario='$data_nasc_usuario', fone_usuario='$fone_usuario' 
            WHERE id_usuario=$id_usuario";

    $res = $conn->query($sql);

    if ($res === true) {
        echo "<script>alert('Usuário editado com sucesso!');</script>";
    } else {
        echo "<script>alert('Não foi possível editar o usuário');</script>";
    }
} elseif ($_REQUEST['acao'] === 'excluir') {
    $id_usuario = $_GET['id_usuario'];

    $sql = "DELETE FROM usuario WHERE id_usuario = $id_usuario";
    $res = $conn->query($sql);

    if ($res === true) {
        echo "<script>alert('Usuário excluído com sucesso!');</script>";
    } else {
        echo "<script>alert('Não foi possível excluir o usuário');</script>";
    }
}

echo "<script>location.href='?page=usuario-listar';</script>";
?>
