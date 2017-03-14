<?php
include 'db.php';

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = password_hash( $_POST['senha'], PASSWORD_DEFAULT );
$email = $_POST['email'];
$tipo = $_POST['tipo'];
$expirada = $_POST['expirada'];



$con = conDB();

$sql = "UPDATE `tb_usuario` SET `nome` = ?,`login` = ?,`senha`= ?,`email`= ? , `tipo`= ?, `expirada`= ? WHERE login = ?";
$stmt = $con->prepare($sql);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $login);
$stmt->bindParam(3, $senha);
$stmt->bindParam(4, $email);
$stmt->bindParam(5, $tipo);
$stmt->bindParam(6, $expirada);
$stmt->bindParam(7, $login);
$resp = $stmt->execute();


if (!$resp) {

    print_r($stmt->errorInfo());
} else {
    echo "<a href='list.usuario.php'>Voltar aos usuários</a><br/>";
    echo "Editado com sucesso!";
}
