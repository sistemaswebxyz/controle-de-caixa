<?php
session_start();
  if (!isset($_SESSION['us_id'])) {
      header("Location: ../index.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../assets/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="icon" type="image/png" href="favicon.ico" />
    <link rel="shortcut icon" href="favicon.ico" />
  </head>
  <body>
      <div class="center container-login">
        <div class="row login z-depth-1">
          <h5 style="color:#404040" >Recuperar Senha</h5>
          <div class="row">
            <div class="col s12 m12 l12" id="alert"></div>
          </div>
          <form method="post" onsubmit="reset.doResetPasswd(), event.preventDefault()" >
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <label for="n_passwd">Nova Senha</label>
                    <input type="text" id="n_passwd" minlength="3" maxlength="10" required="">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <label for="c_passwd">Confirmar Senha</label>
                    <input type="text" id="c_passwd" minlength="3" maxlength="10" required >
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
  <script type="text/javascript" src="../js/ajax.js"></script>
  <script type="text/javascript" src="../js/senha.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../assets/materialize/js/materialize.min.js"></script>
</html>
