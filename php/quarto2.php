<?php
include_once('../poo/quartos.class.php'); 
$quarto2 = new quarto;

$quarto2 -> imagem = "quarto2.jpeg";
$quarto2 -> preço  = "250,00";
$quarto2 -> descrição = "Melhor que o básico e muito bonito.";
$quarto2 -> número = "11";

?>
 <div class="quarto1">
        <!-- imagem do quarto e outros dados; -->
    <img src="../<?php echo $quarto2 -> imagem; ?>" alt="">
      <?php
        echo "<br/>".$quarto2 -> descrição."<br/> ".$quarto2 -> preço."<br/>";
              //estrutura de repetição que escreve o número dos quartos;
        for ($i=11; $i <= 20 ; $i++) {
          // code...
          echo "<div class='quartos1'>Quarto de número ".$quarto2 -> número." <a class='alugar_button' href='html/form_registro.html''>Alugar</a> </div>";
          $quarto2 -> número++;
        }
          ?>
  </div>
