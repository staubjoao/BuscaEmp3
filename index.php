<?php
  $get = isset($_GET['pagina'])?$_GET['pagina']:'';
  require 'lib/funcs.php';
  require "template/header.php";
  require "template/menu.php";

  navega($get);

  require "template/footer.php";
?>
