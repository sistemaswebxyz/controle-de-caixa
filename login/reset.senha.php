<?php
session_start();
require "../config/db.php";
$con = ConDB();
$data = json_decode(file_get_contents('php://input'));
$n_senha = $data->n_senha;
$c_senha = $data->c_senha;


if ($n_senha !== $c_senha || $_SESSION['us_exp'] != 2) {
    http_response_code(505);
}
$n_senha = password_hash($n_senha, PASSWORD_DEFAULT);

$sql = "UPDATE tb_usuario SET senha = ?, expirada = 1 WHERE id = ?";
$stmt = $con->prepare($sql);
$stmt->bindParam(1, $n_senha);
$stmt->bindParam(2, $_SESSION['us_id']);
$res = $stmt->execute();

if ($res) {
    echo "../main.php";
}
