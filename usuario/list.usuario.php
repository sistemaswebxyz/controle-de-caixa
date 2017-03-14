<?php

include 'config/db.php';

$con = conDB();
$sql = "SELECT * FROM tb_usuario ORDER BY id DESC";
$query = $con -> query($sql);
?>

<div class="container-module">


<h4>Listagem de usuário</h4>
<a href="usuario/form.usuario.ins.php">Adicionar novo usuário</a>



<!-- <button class="btn"><?php echo $query -> rowCount(). " Usuários";?></button> -->
<table border="striped">
<thead>
<tr>
	<th>Nome</th>
	<th>Login</th>
	<th>Email</th>
	<th>Tipo de conta</th>
	<th>Situação da conta</th>
</tr>

</thead>

<tbody>
	<?php while ($data= $query->fetch(PDO::FETCH_OBJ)) {
    ?>
		<tr>
			<td><?=$data->nome?></td>
			<td><?=$data->login?></td>
			<td><?=$data->email?></td>
			<td><?=($data->tipo == 1) ? "Administrador" : "Usuário Comum"; ?></td>
			<td><?=($data->expirada == 1)? "Conta Expirada": "Conta Ativa"; ?></td>
			<td>
		  		<a href="form.usuario.edit.php?cod=<?=$data->login?>"><i class="material-icons">mode_edit</i></a>
          <a href="delete.usuario.php?cod=<?=$data->login?>"><i class="material-icons">delete</i></a>
			</td>
		</tr>
<?php

} ?>
</tbody>
</table>
</div>
