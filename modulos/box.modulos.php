<link rel="stylesheet" href="../assets/materialize/css/materialize.min.css">
<link rel="stylesheet" href="../assets/css/app.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../js/ajax.js"></script>
<script type="text/javascript" src="../assets/materialize/js/materialize.min.js"></script>
<?php
  $page = $_GET['page'];
  switch ($page) {
    case 'main':
      include "dashboard.php";
      break;

    default:
      # code...
      break;
  }
?>
