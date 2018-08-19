<?php

session_start();
unset($_SESSION['ID'], $_SESSION['NOME'], $_SESSION['EMAIL']);

$_SESSION['msg'] = "
  <font color='#FF0000'>Deslogado com sucesso. </font>";
header("Location:index.php");