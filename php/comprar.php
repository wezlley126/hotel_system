<?php
  session_start();
  include_once("../mysql/connect.php");
  include_once("../poo/quartos.class.php");

  $comprar = mysqli_escape_string($conect, $_GET['comprar']);
  if ($comprar < 1 || $comprar > 30) {
    // code...
    header('location:home.php');
  }

  var_dump($_SESSION['user']);
  if (isset($_GET['comprar'])) {
    // code..
    $comando_quarto = "SELECT * FROM hotel_quartos WHERE número_quarto = $comprar";
    $query = mysqli_query($conect, $comando_quarto);
    $rows = mysqli_fetch_row($query);
    if ($rows[1] == 'n' && $rows[4] == 0) {
      $comando = "UPDATE hotel_quartos SET ocupado = 's', hospede_atual = ".$_SESSION['user'][7]." WHERE número_quarto = $comprar";
      $query = mysqli_query($conect, $comando);
      if ($query == 1) {
        echo "<br/><br/>O QUARTO AGORA É SEU";
        }
      }
      elseif ($rows[1] == 's') {
        $ocupado_comando = "SELECT hospede_atual FROM hotel_quartos WHERE número_quarto = $comprar;";
        $query = mysqli_query($conect, $ocupado_comando);
        $row_value = mysqli_fetch_row($query);
        echo "<br/><br/>$row_value[0]";

        //Verifica se é o mesmo usuário;
        if ($row_value[0] == $_SESSION['user'][7]) {
          //Caso sim o quarto é desocupado;
          $comando = "UPDATE hotel_quartos SET ocupado = 'n', hospede_atual = null WHERE número_quarto = $comprar";
          $query = mysqli_query($conect, $comando);
          if ($query == 1) {
            echo "<br/><br/>O QUARTO FOI DESOCUPADO";
            }
        }else {
          //Caso não o programa informa que o quarto já foi ocupado por outro usuário;
          echo "<br/>O quarto já está ocupado por outro usuário";
        }
    }
    else {
      echo "<br/><br/>O QUARTO JÁ ESTÁ OCUPADO, SINTO MUITO!";
    }
  }
?>
