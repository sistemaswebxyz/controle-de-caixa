<?php
  include 'db.php';
  $con = conDB();
  $sql = "SELECT * FROM tb_usuario WHERE login =  '". $_GET['cod']."'";
  $query = $con->query($sql);
  $dados = $query->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Editando Usuário</title>
    <style>
    form {
      display: inline;
    }
    </style>
  </head>

  <body>
    <h3>Editar usuário: <?=$dados->nome?></h3>
    <form method="post" action="edit.usuario.php">

      <div class="">
        <label for="nome">Nome do Usuário</label>
        <input type="text" name="nome" id="nome" value="<?=$dados->nome?>" />
      </div>

      <div class="">
        <label for="login">Login do Usuário</label>
        <input type="text" name="login" id="login" value="<?=$dados->login?>" />
      </div>

      <div class="">
        <label for="senha">Senha do Usuário</label>
        <input type="passwoord" name="senha" id="senha" value="<?=$dados->senha?>" />
      </div>

      <div class="">
        <label for="email">Email do Usuário</label>
        <input type="email" name="email" id="email" value="<?=$dados->email?>" />
      </div>

      <div class="">
		<select name="tipo" value="<?=$dados->tipo?>">
			<option value="1">Administrador</option>
			<option value="2">Usuário</option>
		</select>

	</div>

      <div>
		<select name="expirada" value="<?=$dados->expirada?>">
			<option value="1">Expirada</option>
			<option value="2">Ativa</option>
		</select>

	</div>

      <div class="">
        <button type="submit" name="button">Gravar</button>
      </div>
    </form>
  </body>
</html>
