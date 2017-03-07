<?php
include '../config/db.php';
$con = conDB();
$sql = "SELECT p.*,f.nfantasia,f.cnpj  FROM tb_produto AS p INNER JOIN tb_fornecedor AS f ON p.fk_fornecedor_id = f.id ORDER BY p.dateIns DESC";
$query = $con->query($sql);
/*
  Uso mais esses -> FETCH_OBJ -> Retorna os dados em formato de objeto
  Uso mais esses -> FETCH_ASSOC -> Retorna os dados em formato de array associativo, podendo usar o nome da coluna do banco como chavae do array
  FETCH_ARRAY -> Retorna os dados em forma de array
  FETCH_ROW -> Misto de Assoc e Array
*/
?>
<h2>Listagem de Produtos</h2>
<a href="form.produto.ins.php">Novo Produto</a>
<p style="">
  <?php echo $query->rowCount()." Produtos encontrados"; ?>
</p>
<table border="1">
  <thead>
    <tr>
      <th>Código</th>
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
        <td><?=$data->codProduto?></td>
        <td><?=$data->nome?></td>
        <td><?=$data->descricao?></td>
        <td><?=$data->quantidade?></td>
        <td><?=$data->preco?></td>
        <td><?=$data->nfantasia?></td>
        <td><?=$data->cnpj?></td>
        <td>
          <a href="../codigo-de-barras/form.codebar.ins.php?code=<?=$data->codProduto?>">barCode</a>
          <a href="form.produto.edit.php?cod=<?=$data->codProduto?>">Editar</a>
          <a href="delete.produto.php?cod=<?=$data->codProduto?>">Deletar</a>
        </td>
      </tr>

    <?php

} ?>

  </tbody>
</table>
