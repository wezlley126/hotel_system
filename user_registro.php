<?php

  $conect = mysqli_connect('localhost:3306', 'root', 'lelo2004', 'hotel') or die("erro de conexão");

  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $CPF = $_POST['CPF'];
  $nascimento = $_POST['nascimento'];
  $saldo = $_POST['saldo'];
  $email = $_POST['email'];

  echo "$nome <br/> $sobrenome <br/> $CPF <br/> $nascimento <br/> $saldo <br/> $email";

  $insert_into = "INSERT into usuarios values ('$nome', '$sobrenome', '$CPF', '$nascimento', '$saldo', '$email')";
  $query = mysqli_query($conect, $insert_into);
  if ($query == true) {
    echo "<br/> Dados inseridos com sucesso";
  }else{
    echo "<br/> ERRO";
  }
?>
