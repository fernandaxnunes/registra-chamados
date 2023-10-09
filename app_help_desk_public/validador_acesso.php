<?php
  session_start();
  if(!isset($_SESSION['autenticado']) OR $_SESSION['autenticado'] =='NAO'){
    header('Location:index.php?login=erro2');
  }
?>