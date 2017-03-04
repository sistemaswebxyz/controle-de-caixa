<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

    <!-- <meta charset="utf-8"> -->
    <title></title>
    <style>
    form{
      display: inline;
    }
    </style>
  </head>

  <body>
    <form method="post" action="ins.produto.php">

      <label for="codigo">Código</label>
      <input type="text" name="codigo" id="codigo" />

      <div class="">
        <label for="nome">Nome do produto</label>
        <input type="text" name="nome" id="nome" />
      </div>

      <div class="">
        <label for="desc">Descrição do produto</label>
        <input type="text" name="desc" id="desc" />
      </div>

      <div class="">
        <label for="qtProd">Quantidade</label>
        <input type="text" name="qtProd" id="qtProd" />
      </div>

      <div class="">
        <label for="precoUn">Preço Unitário</label>
        <input type="text" name="precoUn" id="precoUn" />
      </div>

      <div class="">
        <label for="cnpj">CNPJ Fornecedor</label>
        <input type="text" name="cnpj" id="cnpj" /> <a href="#">Não fornecer</a>
      </div>

      <div class="">
        <button type="submit" name="button">Gravar</button>
      </div>
    </form>
  </body>
</html>
