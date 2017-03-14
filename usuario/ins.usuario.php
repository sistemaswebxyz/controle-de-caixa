<?php

include 'db.php';

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = password_hash( $_POST['senha'], PASSWORD_DEFAULT );
$email = $_POST['email'];
$dataCriacao = date('Y-m-d H:i:s');
$tipo = $_POST['tipo'];
$expirada = 2;

$con = conDB();
$sql = "INSERT INTO `tb_usuario` (`nome`,`login`,`senha`,`email`,`dataCriacao`,`tipo`,`expirada`) VALUES (?,?,?,?,?,?,?)";

$stmt = $con->prepare($sql);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $login);
$stmt->bindParam(3, $senha);
$stmt->bindParam(4, $email);
$stmt->bindParam(5, $dataCriacao);
$stmt->bindParam(6, $tipo);
$stmt->bindParam(7, $expirada);

$resp= $stmt->execute();

if(!$resp){
	print_r($stmt->errorInfo());
	echo "Este login já foi cadastrado";
	echo "<a href='form.usuario.ins.php'>Tentar novamente</a><br/>";
} else {
	echo "<a href='list.usuario.php'>Voltar aos usuários</a><br/>";
    echo "\nGravado com sucesso!";
}
	
