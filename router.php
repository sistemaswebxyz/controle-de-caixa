<?php

function router($arr)
{
    $arr['page'] = $arr['page'] ?? '/';
    switch ($arr['page']) {

      case 'produtos':
        include 'produto/list.produto.php';
        break;

      case '/':
        include 'login/form.login.php';
        break;
      default:
        # code...
        break;
    }
}
