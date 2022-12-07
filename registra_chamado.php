<?php
  session_start();
  $id = $_SESSION['id'];
  $arquivo = fopen('arquivo.txt', 'r');
  $titulo = str_replace('#', '-', $_POST['titulo']);
  $categoria = str_replace('#', '-', $_POST['categoria']);
  $descricao = str_replace('#', '-', $_POST['descricao']);

  //implode('#', $_POST);
  $texto = $id. '#' .$titulo. '#' . $categoria . '#' . $descricao . PHP_EOL;
  fwrite($arquivo, $texto); // escreve no arquivo
  fclose($arquivo); // fecha o arquivo
  // echo $texto;
  header('Location: abrir_chamado.php');
?>