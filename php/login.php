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
    $_SESSION['user'] = mysqli_fetch_row($query);
    header('location: home.php');
  }else {
    echo "<br/> CONTA INEXISTENTE <br/>";
  }
  print_r($row);
  var_dump($_SESSION['user']);
?>
