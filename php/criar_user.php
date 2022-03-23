<?php
session_start();
include_once("../mysql/connect.php");
/*O filter dentro do myslq e para garantir que nenhuma insert */
$nome = mysqli_escape_string($conect, $_POST['nome']);
$sobrenome = mysqli_escape_string($conect, $_POST['sobrenome']);
$nascimento = mysqli_escape_string($conect, $_POST['nascimento']);
$saldo = mysqli_escape_string($conect, $_POST['saldo']);
$email = mysqli_escape_string($conect, $_POST['email']);
$senha = mysqli_escape_string($conect, $_POST['senha']);
$CPF = mysqli_escape_string($conect, $_POST['CPF']);

echo "$nome <br/>";
echo "$sobrenome <br/>";
echo "$saldo <br/>";
echo "$nascimento <br/>";
echo "$saldo <br/>";
echo "$email <br/>";
echo "$senha <br/>";
echo "$CPF <br/>";

$senha = md5($senha);

$comando = "SELECT * FROM hospedes WHERE email = '$email'";
$query = mysqli_query($conect, $comando);
$rows = mysqli_num_rows($query);
if ($rows >= 1) {
  $_SESSION['conta_existente'] = 1;
  header("location: ../home.php");
}else{
  $insere_dados = "INSERT INTO hospedes VALUES ('$nome', '$sobrenome', '$nascimento', '$saldo', '$email', '$senha', '$CPF', default)";
  $query = mysqli_query($conect, $insere_dados);

  if ($query == true) {
    echo "<br/> DADOS INSERIDOS COM SUCESSO <br/>";
    $_SESSION['conta_criada'] = 1;
    header('location: home.php');
  }else {
    echo "ERRO AO INSERIR OS DADOS";
  }
}
?>
