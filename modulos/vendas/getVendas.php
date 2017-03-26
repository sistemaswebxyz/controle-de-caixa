<?php
  require '../../config/db.php';
  $con = conDB();
  $sql = "SELECT * FROM tb_vendas";
  $query = $con->query($sql);

  $dados =$query->fetchAll(PDO::FETCH_OBJ);


  header('Content-type: application/json');
  echo json_encode($dados);
