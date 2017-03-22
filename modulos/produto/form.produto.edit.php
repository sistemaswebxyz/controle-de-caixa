<?php
  include '../config/db.php';
  $con = conDB();


  $sql = "SELECT p.*,f.cnpj FROM tb_produto AS p INNER JOIN tb_fornecedor AS f ON p.fk_fornecedor_id = f.id WHERE codProduto = ". $_GET['cod'];


  $query = $con->query($sql);
  $dados = $query->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Editando Produto</title>
    <style>
    form {
      display: inline;
    }
    </style>
  </head>

  <body>
    <h3>Editar produto: <?=$dados->nome?></h3>
    <form method="post" action="edit.produto.php">

      <label for="codigo">Código</label>
      <input type="text" name="codigo" id="codigo" value="<?=$dados->codProduto?>" />

      <div class="">
        <label for="nome">Nome do produto</label>
        <input type="text" name="nome" id="nome" value="<?=$dados->nome?>" />
      </div>

      <div class="">
        <label for="desc">Descrição do produto</label>
        <input type="text" name="desc" id="desc" value="<?=$dados->descricao?>" />
      </div>

      <div class="">
        <label for="qtProd">Quantidade</label>
        <input type="text" name="qtProd" id="qtProd" value="<?=$dados->quantidade?>" />
      </div>

      <div class="">
        <label for="precoUn">Preço Unitário</label>
        <input type="text" name="precoUn" id="precoUn" value="<?=$dados->preco?>" />
      </div>

      <div class="">
        <label for="cnpj">CNPJ Fornecedor</label>
        <input type="text" name="cnpj" id="cnpj" value="<?=$dados->cnpj?>" /> <a href="#">Não fornecer</a>
      </div>

      <div class="">
        <button type="submit" name="button">Gravar</button>
      </div>
    </form>
  </body>
</html>
