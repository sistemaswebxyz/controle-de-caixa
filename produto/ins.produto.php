<?php
include '../config/db.php';
include '../fornecedor/functions.fornecedor.php';
// declaração de variáveis;
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$descricao = $_POST['desc'];
$quantidade = $_POST['qtProd'];
$preco = $_POST['precoUn'];
$fk_cnpj = getIdFornecedor($_POST['cnpj']);
$data = date('Y-m-d h:i:s');



$con = conDB();
$sql = "INSERT INTO `tb_produto`(`codProduto`,`nome`,`descricao`,`quantidade`,`preco`, dateIns,`fk_fornecedor_id`) VALUES (?,?,?,?,?,?,?)";
//Preparando  a QueryString
$stmt = $con->prepare($sql);
$stmt->bindParam(1, $codigo, PDO::PARAM_INT);
$stmt->bindParam(2, $nome);
$stmt->bindParam(3, $descricao);
$stmt->bindParam(4, $quantidade);
$stmt->bindParam(5, $preco);
$stmt->bindParam(6, $data);
$stmt->bindParam(7, $fk_cnpj);
$resp = $stmt->execute();

//Retorna true ou false
if (!$resp) {
    //Retorna erro caso falhe
    print_r($stmt->errorInfo());
} else {
    echo "<a href='list.produto.php'>Voltar aos produtos</a><br/>";
    echo "Gravado com sucesso!";
}
