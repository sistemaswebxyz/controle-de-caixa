<?php
    include 'db.php';
    $con = conDB();

    $sql = "DELETE FROM tb_usuario WHERE login = '" . $_GET['cod']."'";
    $query = $con->query($sql);

    if ($query) {
        echo "<a href='list.usuario.php'>Voltar aos usuários</a><br/>";
        echo "Deletado com sucesso";
    }
