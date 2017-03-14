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

        <div class="col m2 l2 aside z-depth-1">
          <ul>
            <a href="#">
              <li class="logo">
                <img src="https://evwilkin.github.io/images/materializecss.png" class="responsive-img" />
              </li>
            </a>

            <a href="#">
              <li><i class="material-icons">dashboard</i><span>Dashboard</span></li>
            </a>

            <a href="#">
              <li><i class="material-icons">attach_money</i><span>Vendas</span></li>
            </a>

            <a href="#">
              <li><i class="material-icons">person</i><span>Clientes</span></li>
            </a>

            <a href="#">
              <li><i class="material-icons">local_shipping</i> <span>Fornecedores </span></li>
            </a>

            <a href="#">
              <li><i class="material-icons">poll</i><span>Relatórios</span></li>
            </a>

            <a href="#">
              <li><i class="material-icons">search</i><span>Consultas</span></li>
            </a>

            <a href="#">
              <li class="last"><i class="material-icons">bug_report</i><span>Produtos</span></li>
            </a>
          </ul>
        </div>

        <div class="col m10 l10 modules">
          <nav>
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

          <?php include_once 'usuario/list.usuario.php'; ?>

        </div>

      </div>
    </main>
  </body>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $(".dropdown-button").dropdown();
  });
  </script>
</html>
