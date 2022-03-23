<link rel="stylesheet" href="../css/home.css">
<?php
session_start();

if (isset($_SESSION['conta_criada'])) {
  if ($_SESSION['conta_criada'] == 1) {
    echo "<div class='conta_criada'>Conta criada com sucesso</div>";
    unset($_SESSION['conta_criada']);
  }
}
?>
<div id="div_pai">
<?php

  include_once('../poo/quartos.class.php');

  $quarto1 = new quarto;

  $quarto1 -> imagem = "quarto1.jpeg";
  $quarto1 -> preço  = "150,00";
  $quarto1 -> descrição = "Um quarto básico para uma noite.";
  $quarto1 -> número = "1";

  $quarto2 = new quarto;

  $quarto2 -> imagem = "quarto2.jpeg";
  $quarto2 -> preço  = "250,00";
  $quarto2 -> descrição = "Melhor que o básico e muito bonito.";
  $quarto2 -> número = "11";

  $quarto3 = new quarto;

  $quarto3 -> imagem = "quarto3.jpeg";
  $quarto3 -> preço  = "450,00";
  $quarto3 -> descrição = "Só luxo aproveite a estadia.";
  $quarto3 -> número = "21";

?>
  <div class = "quarto1">
        <!-- imagem do quarto e outros dados; -->
    <img src="../<?php echo $quarto1 -> imagem; ?>" alt="">
    <?php
      echo "<br/>".$quarto1 -> descrição."<br/> ".$quarto1 -> preço."<br/>";
            //estrutura de repetição que escreve o número dos quartos;
      for ($i=1; $i <= 10 ; $i++) {
        // code...
        echo "<div class='quartos1'>Quarto de número ".$quarto1 -> número." <a class='alugar_button' href='html/form_registro.html''>Alugar</a> </div>";
        $quarto1 -> número++;
      }
    ?>
  </div>

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
</div>
