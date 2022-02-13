<?php
  session_start();
  $conect = mysqli_connect('localhost:3306', 'root', 'lelo2004', 'hotel') or die("erro de conexão");
?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="text-align: center;">
    <form class="" method="post">
      Número de quartos existentes no hotel. <br/>
      <input type="number" name="número_quartos" value=""> <br/>
      Preço por quarto. <br/>
      <input type="number" step="0.01" name="preço_quartos" value=""> <br/>
      <input style="margin: 10px;" type="submit" name="enviar">
    </form>
  </body>
</html>

<?php

  if(isset($_POST['enviar'])) {

  $_SESSION['número_quartos'] = $_POST['número_quartos'];
  $preço_quartos = $_POST['preço_quartos'];

  while ($i <= $_SESSION['número_quartos']) {
    echo "<br/> quarto de número $i <br/>";
        $query = mysqli_query($conect, $comando);
    $i++;
  }

}else{
      $_SESSION['número_quartos'] = null;
      $preço_quartos = null;  }

    $comando = "insert into quartos values (default, 0, $preço_quartos)";

    $i = 1;

    while ($i <= $_SESSION['número_quartos']) {
      echo "<br/> quarto de número $i <br/>";
          $query = mysqli_query($conect, $comando);
      $i++;
    }
?>
