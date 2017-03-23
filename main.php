<?php session_start();
  if (!$_SESSION['us_id']) {
      header("Location: index.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="assets/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
  <body>
    <main>
      <div class="row main">

        <div class="col m1 l1 aside z-depth-1 hide-on-small-only">

          <ul>

            <a href="#" >
              <li><i class="material-icons">menu</i></li>
            </a>

            <a href="#" title="Visão Geral" class="tooltipped" data-delay="50" data-tooltip="Visão Geral" data-position="right">
              <li><i class="material-icons">dashboard</i></li>
            </a>

            <a href="#" class="tooltipped" data-delay="50" data-tooltip="Vendas" data-position="right">
              <li><i class="material-icons">attach_money</i></li>
            </a>

            <a href="#" title="Clientes" class="tooltipped" data-delay="50" data-tooltip="Clientes" data-position="right">
              <li><i class="material-icons">person</i></li>
            </a>

            <a href="#" class="tooltipped" data-delay="50" data-tooltip="Fornecedores" data-position="right">
              <li><i class="material-icons">local_shipping</i></li>
            </a>

            <a href="#" class="tooltipped" data-delay="50" data-tooltip="Visão Geral" data-position="right">
              <li><i class="material-icons">poll</i></li>
            </a>

            <a href="#" title="Pesquisar" class="tooltipped" data-delay="50" data-tooltip="Realizar busca" data-position="right">
              <li><i class="material-icons">search</i></li>
            </a>

            <a href="#" class="tooltipped" data-delay="50" data-tooltip="Reportar problemas" data-position="right">
              <li class="last"><i class="material-icons">bug_report</i></li>
            </a>
          </ul>

        </div>

        <div class="col s12 m11 l11 modules">
          <nav style="height:10vh">
            <div class="nav-wrapper">
              <div class="col s9 m9 l9">
                <a href="#!" class="breadcrumb">Dasboard</a>
                <a href="#!" class="breadcrumb">Usuário</a>
              </div>

              <div class="col s3 m3 l3 right">
                <div class="user-active">
                  <a href="#!" class="dropdown-button breadcrumb right" data-activates="dropdown-user">
                    <i class="material-icons">account_circle</i>
                    &nbsp;
                    <span>Raphael Moraes</span>
                    <i class="material-icons right">arrow_drop_down</i>
                  </a>
                </div>

                <ul id="dropdown-user" class="dropdown-content">
                  <li><a href="#!">Minhas Atividades</a></li>
                  <li><a href="#!">Configurações</a></li>
                  <li class="divider"></li>
                  <li><a href="#!">Sair</a></li>
                </ul>
              </div>
          </div>
        </nav>

          <iframe src="modulos/box.modulos.php?page=main" style="width:100%;min-height:88vh;border:none; margin-top:0.5%;"></iframe>

        </div>

      </div>
    </main>
  </body>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $(".dropdown-button").dropdown();
    $('.tooltipped').tooltip({delay: 50});
  });
  </script>
</html>
