<?php

  $server = "localhost";
  $user = "root";
  $password = "";
  $database = "login";

  $conexao = new mysqli($server, $user, $password, $database);
  /*if($conexao ->connect_errno) {
    echo "Falha ao conectar: (" . $conexao->connect_errno . ") " . $conexao->connect_error;  
  } else
  echo "Conexão efetuada com sucesso!";*/
?>