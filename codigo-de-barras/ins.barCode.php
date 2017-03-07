<?php
include '../config/db.php';
include '../produto/functions.produto.php';
$con = conDB();
$codProduto = getIdProduto($_POST['code']);

$barCodes = $_POST['barCodes'];

$countBarCode = count($barCodes);

    for ($i = 0; $i < $countBarCode; $i++) {
        $sql = "INSERT INTO tb_codigo_de_barras(`codigo`,`fk_produto_id`) VALUE(?,?)";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(1, $barCodes[$i]);
        $stmt->bindParam(2, $codProduto);
        $res = $stmt->execute();

        if (!$res) {
            print_r($con->errorInfo());
        }
    }
