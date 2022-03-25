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
    $row = mysqli_fetch_row($query);
    $_SESSION['user'] = new user;
    $_SESSION['user'] -> alterar_dados($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
  }else {
    echo "<br/> CONTA INEXISTENTE <br/>";
  }
  print_r($row);
  var_dump($_SESSION['user']);
?>
