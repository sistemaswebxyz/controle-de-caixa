<?php
function getIdProduto($code)
{
    $con = conDB();
    $sql = "SELECT id FROM tb_produto WHERE codProduto = ?";
    $stmt = $con->prepare($sql);
    $stmt->bindParam(1, $code);
    $stmt->execute();

    $res = $stmt->fetch(PDO::FETCH_OBJ);

    return $res->id;
}
