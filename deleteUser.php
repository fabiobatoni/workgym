<?php 
  require_once('functions.php'); 
  include_once '../verificaLogin.php';

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

  if (isset($_GET['id'])){
    delete_user($_GET['id']);
  } else {
    die("ERRO: ID não definido.");
  }
?>