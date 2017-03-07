<?php
include '../config/db.php';
$con = conDB();
$sql = "SELECT * FROM tb_produto WHERE codProduto = :codProduto ";
$stmt = $con->prepare($sql);
$stmt->bindParam(':codProduto', $_GET['code']);
$stmt->execute();

$dados = $stmt->fetch(PDO::FETCH_OBJ);
?>

<fieldset>
  <legend>Cadastrar Código de Barras</legend>
<form action="ins.barCode.php" method="post">

  <div class="">
    <label>Código</label>
    <input type="text" name="code" readonly value="<?=$dados->codProduto?>">
  </div>

  <div class="">
    <label>Nome</label>
    <input type="text" readonly="" value="<?=$dados->nome?>">
  </div>

  <div class="">
    <label>Preço Unitário</label>
    <input type="text" readonly="" value="<?=$dados->preco?>">
  </div>

  <div class="">
    <label for="barCode">Código de barras</label>
    <input type="text" name="barCodes[]" id="barCode" value="">

  </div>
  <div class="" id="listCodeBar"></div>

  <div class="">
    <button type="submit">Gravar</button>
    <a href="#" onclick="barCode.addInputField(); event.preventDefault();">adicionar outro</a>
  </div>
</form>
</fieldset>
<script src="../js/barCode.js"></script>
