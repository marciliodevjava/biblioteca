<?php
include('config.php');

if ($_REQUEST['acao'] === 'cadastrar') {
    $nome_atendente = $_POST['nome_atendente'];
    $cpf_atendente = $_POST['cpf_atendente'];
    $email_atendente = $_POST['email_atendente'];
    $telefone_atendente = $_POST['telefone_atendente'];
    $endereco_atendente = $_POST['endereco_atendente'];
    $data_contratacao = $_POST['data_contratacao'];
    $salario = $_POST['salario'];
    $turno = $_POST['turno'];

    $sql = "INSERT INTO atendente (nome_atendente, cpf_atendente, email_atendente, telefone_atendente, endereco_atendente, data_contratacao, salario, turno) 
            VALUES ('$nome_atendente', '$cpf_atendente', '$email_atendente', '$telefone_atendente', '$endereco_atendente', '$data_contratacao', '$salario', '$turno')";

    $res = $conn->query($sql);

    if ($res === true) {
        echo "<script>alert('Atendente cadastrado com sucesso!');</script>";
    } else {
        echo "<script>alert('Não foi possível cadastrar o atendente');</script>";
    }
} elseif ($_REQUEST['acao'] === 'editar') {
    $id_atendente = $_POST['id_atendente'];
    $nome_atendente = $_POST['nome_atendente'];
    $cpf_atendente = $_POST['cpf_atendente'];
    $email_atendente = $_POST['email_atendente'];
    $telefone_atendente = $_POST['telefone_atendente'];
    $endereco_atendente = $_POST['endereco_atendente'];
    $data_contratacao = $_POST['data_contratacao'];
    $salario = $_POST['salario'];
    $turno = $_POST['turno'];

    $sql = "UPDATE atendente 
            SET nome_atendente='$nome_atendente', cpf_atendente='$cpf_atendente', email_atendente='$email_atendente', telefone_atendente='$telefone_atendente', endereco_atendente='$endereco_atendente', data_contratacao='$data_contratacao', salario='$salario', turno='$turno' 
            WHERE id_atendente=$id_atendente";

    $res = $conn->query($sql);

    if ($res === true) {
        echo "<script>alert('Atendente editado com sucesso!');</script>";
    } else {
        echo "<script>alert('Não foi possível editar o atendente');</script>";
    }
}

echo "<script>location.href='?page=atendente-listar';</script>";
?>
