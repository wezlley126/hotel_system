<?php
include_once("../mysql/connect.php");
/*O filter dentro do myslq e para garantir que nenhuma insert */
$nome = mysqli_escape_string($conect,   filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
$sobrenome = mysqli_escape_string($conect, filter_input(INPUT_POST, 'sobrenome', FILTER_SANITAZE_SPECIAL_CHARS));
$nascimento = mysqli_escape_string($conect, filter_input(INPUT_POST, 'nacimento',  FILTER_VALIDADE_SPECIAL_CHARS));
$saldo = mysqli_escape_string($conect, filter_input(INPUT_POST, 'saldo', FILTER_VALIDATE_INT));
$email = mysqli_escape_string($conect, filter_input(INPUT_POST, 'email', FILTER_VALIDADE_EMAIL));
$senha = mysqli_escape_string($conect, filter_input(INPUT_POST, 'senha', FILTER_SANITAZE_SPECIAL_CHARS));
$CPF = mysqli_escape_string($conect, filter_input(INPUT_POST, 'cpf', FILTER_SANITAZE_SPECIAL_CHARS and FILTER_SANITAZE_NUMBER_INT));

echo "$nome <br/>";
echo "$sobrenome <br/>";
echo "$saldo <br/>";
echo "$nascimento <br/>";
echo "$saldo <br/>";
echo "$email <br/>";
echo "$senha <br/>";
echo "$CPF <br/>";

$insere_dados = "INSERT INTO hospedes VALUES ('$nome', '$sobrenome', '$nascimento', '$saldo', '$email', '$senha', '$CPF', default)";
$query = mysqli_query($conect, $insere_dados);

if ($query == true) {
  echo "<br/> DADOS INSERIDOS COM SUCESSO <br/>";
}else {
  echo "ERRO AO INSERIR OS DADOS";
}
?>
