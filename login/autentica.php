<?php
  session_start();

  require '../config/db.php';
  $dados = json_decode(file_get_contents('php://input'));
  $con = conDB();

  $sql = "SELECT * FROM tb_usuario WHERE login = ? ";
  $stmt = $con->prepare($sql);
  $stmt->bindParam(1, $dados->user);
  $stmt->execute();
  $dadosDB = $stmt->fetch(PDO::FETCH_OBJ);

  /*Verifica se existe um usuário com esse login*/
  if ($stmt->rowCount() > 0) {
      //Verifica se a senha digitada é igual ao do hash
      if (password_verify($dados->passwd, $dadosDB->senha)) {
          $_SESSION['us_name'] = $dadosDB->nome;
          $_SESSION['us_id'] = $dadosDB->id;
          $_SESSION['us_exp'] = $dadosDB->expirada;
          //Senha expirada
          if ($dadosDB->expirada == 2) {
              echo 'login/resetSenha.php';
          } else {
              echo 'main.php';
          }
      } else {
          //Senha inválida
          http_response_code(401);
      }
  } else {
      //Usuário não encontrado
      http_response_code(401);
  }
