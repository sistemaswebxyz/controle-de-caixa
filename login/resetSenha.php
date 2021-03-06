<?php
session_start();
  if (!isset($_SESSION['us_id']) || $_SESSION['us_exp'] != 2) {
      header('HTTP/1.1 302 Redirect');
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
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <script type="text/javascript" src="../js/reset.js"></script>
  </head>
  <body>
      <div class="center container-login">
        <div class="row header-reset-senha">
          <div class="col s12 ">
            <h5 class="h5-reset">ATUALIZAR SENHA</h5>
            <div class="divider"></div>
          </div>
        </div>
        <div class="row login z-depth-1">
          <div class="row">
            <div class="col s12 m12 l12" id="alert"></div>
          </div>
              <div class="row">
                <div class="input-field col s12 m12 l12">
                    <label for="n_passwd">SENHA</label>
                    <input type="password" id="n_passwd" minlength="3" maxlength="10" required="true">
                </div>
            </div>
              <div class="row">
                <div class="input-field col s12 m12 l12">
                    <label for="c_passwd">CONFIRMA SENHA</label>
                    <input type="password" id="c_passwd" minlength="3" maxlength="10" required="true">
                </div>
            </div>
              <div class="row">
                <div class="col s12">
                    <button onclick="reset.doReset(event)"  class="btn blue" >ATUALIZAR</button>
                </div>
            </div>
          </div>
            <span class="grey-text">
              <div class="row">
                Desenvolvido por
                <a href="#" class="grey-text darken-1 desenvolvido">i9 Soluções</a>
              </div>
            </span>
        </div>
  </body>
  <script type="text/javascript" src="../js/ajax.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../assets/materialize/js/materialize.min.js"></script>
</html>
