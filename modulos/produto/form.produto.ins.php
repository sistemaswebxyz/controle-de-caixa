<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title></title>

  </head>

  <body>
    <fieldset>
      <legend>Cadastro de Produtos</legend>
      <form method="post" action="ins.produto.php">

      <div class="">
        <label for="codigo">Código de barras</label>
        <input type="text" name="codigo" id="codigo" />
      </div>

      <div class="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" />
      </div>

      <div class="">
        <label for="desc">Descrição:</label>
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
    </fieldset>
  </body>
</html>
