<?php
include '../config/db.php';
// declaração de variáveis;
$rsocial = $_POST['rsocial'];
$nfantasia = $_POST['nfantasia'];
$cnpj = $_POST['cnpj'];
$descricao = $_POST['descricao'];

$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];

$representante = $_POST['representante'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$site = $_POST['site'];
$email = $_POST['email'];

$banco = $_POST['banco'];
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];


$con = conDB();
$sql = "INSERT INTO `tb_fornecedor`(`rsocial`, `nfantasia`,`cnpj`,`descricao`,`estado`, `cidade`, `cep`, `bairro`, `rua`, `numero`, `complemento`,`representante`, `telefone`, `celular`, `site`, `email`, `banco`, `agencia`, `conta`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
//Preparando  a QueryString
$stmt = $con->prepare($sql);
$stmt->bindParam(1, $rsocial);
$stmt->bindParam(2, $nfantasia);
$stmt->bindParam(3, $cnpj);
$stmt->bindParam(4, $descricao);

$stmt->bindParam(5, $estado);
$stmt->bindParam(6, $cidade);
$stmt->bindParam(7, $cep);
$stmt->bindParam(8, $bairro);
$stmt->bindParam(9, $rua);
$stmt->bindParam(10, $numero);
$stmt->bindParam(11, $complemento);

$stmt->bindParam(12, $representante);
$stmt->bindParam(13, $telefone);
$stmt->bindParam(14, $celular);
$stmt->bindParam(15, $site);
$stmt->bindParam(16, $email);

$stmt->bindParam(17, $banco);
$stmt->bindParam(18, $agencia);
$stmt->bindParam(19, $conta);
$resp = $stmt->execute();


//Retorna true ou false
if (!$resp) {
    //Retorna erro caso falhe
    //print_r($con->errorInfo());
    echo $stmt->errorCode();
} else {
    echo "<a href='index.php'>Voltar aos produtos</a><br/>";
    echo "Gravado com sucesso!";
}
