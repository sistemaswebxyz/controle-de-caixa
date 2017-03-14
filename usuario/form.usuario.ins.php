<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title></title>

	<style>
	form{
	display: inline;
}
	</style>
</head>
<body>
	<form method="post" action="ins.usuario.php">

	<div>
		<label for="nome">Nome completo</label>
		<input type="text" name="nome" id="nome"/>
	</div>

	<div>
		<label for="login">Login</label>
		<input type="text" name="login" id="login" ></input>
	</div>

	<div>
		<label for="senha">Senha</label>
		<input type="password" name="senha" id="senha"></input>
	</div>

	<div>
		<label for="email">Email</label>
		<input type="email" name="email" id="email"></input>
	</div>

	<div>
		<select name="tipo">
			<option value="1">Administrador</option>
			<option value="2">Usuário</option>
		</select>

	</div>


	<div class="">
        <button type="submit" name="button">Gravar</button>
      </div>



	</form>
</body>
</html>