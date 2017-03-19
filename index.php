<?php
session_start();
  if (isset($_SESSION['us_id'])) {
      header("Location: main.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: i9 Soluções :.</title>
    <link rel="stylesheet" href="assets/materialize/css/materialize.min.css" />
    <link rel="stylesheet" href="assets/css/app.css" />
    <link rel="icon" type="image/png" href="favicon.ico" />
    <link rel="shortcut icon" href="favicon.ico" />
  </head>
  <body>
      <div class="center container-login">
        <div class="row center logo-login">
          <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/SEGA_logo.png" class="responsive-img">
        </div>
      <div class="row login z-depth-1">
          <div class="row">
            <div class="col s12 m12 l12" id="alert"></div>
          </div>
          <form method="post" action="main.php" onsubmit="login.doLogin(), event.preventDefault()" >
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <label for="user">USUÁRIO</label>
                    <input type="text" id="user" minlength="3" maxlength="15" required="">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <label for="passwd">SENHA</label>
                    <input type="password" id="passwd" minlength="3" maxlength="15" required >
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
                <a href="#" class="grey-text darken-1 desenvolvido">i9 soluções</a>
            </span>
        </div>
  </body>
  <script type="text/javascript" src="js/ajax.js"></script>
  <script type="text/javascript" src="js/login.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
</html>
