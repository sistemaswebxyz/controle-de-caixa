<?php
  require '../../config/db.php';
  $con = conDB();
  $sql = "SELECT SUM(p.preco_unitario) as preco FROM tb_vendas as v inner join tb_produto as p
on v.fk_produto_id = p.id where date_format(data, '%m') <= date_format(NOW(), '%m')  group by(data)";
  $query = $con->query($sql);
  $out = [];
  while ($d = $query->fetch(PDO::FETCH_OBJ)) {
      array_push($out, (float) $d->preco);
  }

header('Content-type: application/json');
  echo json_encode($out);
