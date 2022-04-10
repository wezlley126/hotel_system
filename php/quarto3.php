<?php 
include_once('../poo/quartos.class.php');
$quarto3 = new quarto;

$quarto3 -> imagem = "quarto3.jpeg";
$quarto3 -> preço  = "450,00";
$quarto3 -> descrição = "Só luxo aproveite a estadia.";
$quarto3 -> número = "21";
?>
<div class="quarto1">
        <!-- imagem do quarto e outros dados; -->
    <img src="../<?php echo $quarto3 -> imagem; ?>" alt="">
    <?php
      echo "<br/>".$quarto3 -> descrição."<br/> ".$quarto3 -> preço."<br/>";
            //estrutura de repetição que escreve o número dos quartos;
      for ($i=21; $i <= 30 ; $i++) {
        // code...
        echo "<div class='quartos1'>Quarto de número ".$quarto3 -> número." <a class='alugar_button' href='html/form_registro.html''>Alugar</a> </div>";
        $quarto3 -> número++;
      }
              ?>
  </div>