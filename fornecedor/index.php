<?php
include '../config/db.php';
$con = conDB();
$sql = "SELECT * FROM tb_fornecedor ORDER BY rsocial DESC";
$query = $con->query($sql);
?>
<h2>Lista de Fornecedores</h2>
<a href="fornecedor/novoFornecedor.php">Novo Fornercedor</a>
<p style="">
    <?php
        echo $query->rowCount()." Fornecedores encontrados";
    ?>
</p>
<table border="1">
    <thead>
        <tr>
            <th>Razão Social</th>
            <th>Nome Fantasia</th>
            <th>CNPJ</th>
            <th>Descrição</th>

            <th>Estado</th>
            <th>Cidade</th>
            <th>Cep</th>
            <th>Bairro</th>
            <th>Rua</th>
            <th>Número</th>
            <th>Complemento</th>

            <th>Representante</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Site</th>
            <th>email</th>

            <th>banco</th>
            <th>agencia</th>
            <th>conta</th>
        </tr>
    </thead>

    <tbody>
        <?php while ($data = $query->fetch(PDO::FETCH_OBJ)) {
        ?>

        <tr>
            <td><?=$data->rsocial?></td>
            <td><?=$data->nfantasia?></td>
            <td><?=$data->cnpj?></td>
            <td><?=$data->descricao?></td>
            <td><?=$data->estado?></td>
            <td><?=$data->cidade?></td>
            <td><?=$data->cep?></td>
            <td><?=$data->bairro?></td>
            <td><?=$data->rua?></td>
            <td><?=$data->numero?></td>
            <td><?=$data->complemento?></td>
            <td><?=$data->representante?></td>
            <td><?=$data->telefone?></td>
            <td><?=$data->celular?></td>
            <td><?=$data->site?></td>
            <td><?=$data->email?></td>
            <td><?=$data->banco?></td>
            <td><?=$data->agencia?></td>
            <td><?=$data->conta?></td>
            <td>
                <a href="fornecedor/edicaoFornecedor.php?code=<?=$data->cnpj?>">Editar</a>
                <a href="fornecedor/deletaFornecedor.php?code=<?=$data->cnpj?>">Deletar</a>
            </td>
        </tr>
    <?php

    } ?>

  </tbody>
</table>
