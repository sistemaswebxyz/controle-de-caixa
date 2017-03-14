<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="assets/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
  </head>
  <body>

      <div class="center container-login">
        <h4 class="logo-login">Logo Marca</h4>
        <div class="row login z-depth-1">
          <div class="row alert">
            <div class="col s12 m12 l12 alert-danger">
              <strong>Atenção:&nbsp;</strong> Autenticação falhou
            </div>
          </div>
          <form method="post" action="main.php" >
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <label for="user">Usuário</label>
                    <input type="text" id="user">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <label for="passwd">Senha</label>
                    <input type="password" id="passwd">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn blue" >Entrar</button>
                </div>
            </div>
          </form>
            </div>
            <span class="grey-text">
              Desenvolvido por
                <a href="#" class="grey-text darken-1 desenvolvido">xxxxxxxx</a>
            </span>
        </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
</html>
