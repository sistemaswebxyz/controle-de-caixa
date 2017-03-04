<?php
    include '../config/db.php';
    $con = conDB();

    $sql = "DELETE FROM tb_produto WHERE codProduto = " . $_GET['cod'];
    $query = $con->query($sql);

    if ($query) {
        echo "<a href='list.produto.php'>Voltar aos produtos</a><br/>";
        echo "Deletado com sucesso";
    }
