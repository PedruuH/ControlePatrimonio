<?php
session_start();
include '../conexao.php';

$nome = $_POST["nome"];
$email = $_POST["email"];
$niveis_acesso_id = $_POST["id_cargo"];
$senha = md5($_POST["senha"]);

$hoje = date('Y/m/d i:H');

$sql = "INSERT INTO `usuarios` ( `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
('$nome', '$email', '$senha', 'ativo', '$niveis_acesso_id', '$hoje', NULL)";


$resultado = $conn->query($sql);

  if ($resultado === TRUE) {
      echo "Cadastrado com sucesso";
      header("Location: ../cad_usuario.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

 ?>



