<?php

  function getIdFornecedor($cnpj)
  {
      $con = conDB();
      $sql = "SELECT id FROM tb_fornecedor WHERE cnpj = ?";
      $stmt = $con->prepare($sql);
      $stmt->bindParam(1, $cnpj);
      $stmt->execute();
      $res = $stmt->fetch(PDO::FETCH_OBJ);
      return $res->id;
  }
