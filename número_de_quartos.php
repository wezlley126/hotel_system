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
      <input style="margin: 10px;" type="submit" name="enviar" value="Criar">
      <input type="submit" name="quantidade" value="Quantidade de quartos">
    </form>
  </body>
</html>

<?php

  if(isset($_POST['enviar'])) {

  $número_quartos = $_POST['número_quartos'];
  $preço_quartos = $_POST['preço_quartos'];

    $comando = "insert into quartos values (default, default, $preço_quartos)";

    $i = 1;

    while ($i <= $número_quartos) {
          $query = mysqli_query($conect, $comando);
          if ($query == 1) {
              echo "<br/> quarto de número $i Criado com sucesso<br/>";
          }else{  echo "ERRO ao criar o quarto de número $i";  }
      $i++;
    }
  }

  if (isset($_POST['quantidade'])) {
    $quantidade_quartos = "SELECT * FROM quartos";
    $query = mysqli_query($conect, $quantidade_quartos);
    $num_rows = mysqli_num_rows($query);
    echo "Existe no total <b style = 'font-size: 20px;'> $num_rows </b> quartos.";
  }

/*
    $quantidade_quartos = "SELECT * FROM quartos";
    $query = mysqli_query($conect, $quantidade_quartos);
    $num_rows = mysqli_num_rows($query);
    echo "$num_rows";
*/
?>
