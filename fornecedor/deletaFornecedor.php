<?php
    include '../config/db.php';
    $con = conDB();

    $sql = "DELETE FROM tb_fornecedor WHERE cnpj = " . $_GET['code'];
    $query = $con->query($sql);

    if ($query) {
        echo "<a href='index.php'>Voltar aos produtos</a><br/>";
        echo "Deletado com sucesso";
    }
