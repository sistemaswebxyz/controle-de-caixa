<?php

  function conDB()
  {
      $con = new PDO('mysql:host=localhost; dbname=produto', 'root', '#armc2014',
      array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
      $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $con;
  }
