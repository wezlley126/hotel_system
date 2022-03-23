<?php
  session_start();
  include_once "../mysql/connect.php";
  include_once "../poo/user.class.php";
  $email = mysqli_escape_string($conect, $_POST['email']);
  $senha = mysqli_escape_string($conect, $_POST['senha']);
  $senha = md5($senha);

  echo "$email <br/> $senha <br/>";

  $comando = "SELECT * FROM hospedes WHERE email = '$email' AND senha = '$senha'";
  $query = mysqli_query($conect, $comando);
  $rows = mysqli_num_rows($query);
  if ($rows == 1) {
    echo "<br/> CONTA EXISTENTE <br/>";
  }else {
    echo "<br/> CONTA INEXISTENTE <br/>";
  }

  $nome = "weslley";
  $sobrenome = "borges";
  $nascimento = "2004-05-20";
  $saldo = "200";
  $email = "weslleyborges34@gmail.com";
  $senha = "lelo2004";
  $CPF = "";

  $user = new user;
  $user -> atribuir_dados($nome, $sobrenome, $nascimento, $saldo, $email, $senha, $CPF);
  echo $user -> nome;
?>
