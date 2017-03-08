<?php
include '../config/db.php';
$con = conDB();
$sql = "SELECT p.*,f.nfantasia,f.cnpj  FROM tb_produto AS p INNER JOIN tb_fornecedor AS f ON p.fk_fornecedor_id = f.id ORDER BY p.dateIns DESC";
$query = $con->query($sql);
?>
<h2>Listagem de Produtos</h2>
<a href="form.produto.ins.php">Novo Produto</a>
<p style="">
  <?php echo $query->rowCount()." Produtos encontrados"; ?>
</p>
<table border="1">
  <thead>
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Quantidade</th>
      <th>Preço</th>
      <th>Fornecedor</th>
      <th>CNPJ</th>
      <th>Opções</th>
    </tr>
  </thead>

  <tbody>
    <?php while ($data = $query->fetch(PDO::FETCH_OBJ)) {
    ?>

      <tr>
        <td><?=$data->codigo_de_barras?></td>
        <td><?=$data->nome?></td>
        <td><?=$data->descricao?></td>
        <td><?=$data->quantidade?></td>
        <td><?=$data->preco_unitario?></td>
        <td><?=$data->nfantasia?></td>
        <td><?=$data->cnpj?></td>
        <td>
          <a href="form.produto.edit.php?produto=<?=$data->codigo_de_barras?>">Editar</a>
          <a href="delete.produto.php?produto=<?=$data->codigo_de_barras?>">Deletar</a>
        </td>
      </tr>

    <?php

} ?>

  </tbody>
</table>
