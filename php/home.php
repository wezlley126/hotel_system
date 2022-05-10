
    <link rel="stylesheet" href="../css/home.css">

    <a href="../html/conta.html">Conta</a>
    <br/>
    <a href="../html/form_candidatura.html">Candidate-se</a>

    <?php
    session_start();
      if (isset($_SESSION['user'])) {
        echo "<br/>Conta atual: ".$_SESSION['user'][0]." ".$_SESSION['user'][1];
      }

    if (isset($_SESSION['conta_criada'])) {
      if ($_SESSION['conta_criada'] == 1) {
        echo "<div class='conta_criada'>Conta criada com sucesso</div>";
        unset($_SESSION['conta_criada']);
      }
    }
    ?>
    <div id = "div_pai">
    <?php

      include_once ('../poo/quartos.class.php');
      include_once ('../mysql/connect.php');

    ?>
      <div class = "quarto1">
            <!-- imagem do quarto e outros dados; -->
        <img src="../<?php echo $quarto1 -> Imagem; ?>" alt="">
        <?php
          echo "<br/>".$quarto1 -> Descriçao."<br/> ".$quarto1 -> Preço."<br/>";
                //estrutura de repetição que escreve o número dos quartos;
          for ($i=1; $i <= 10 ; $i++) {
            // code...
            if ($i < 10){echo "<div class='quartos1'>Quarto de número 0".$quarto1 -> Numero." <a class='alugar_button' href='../php/comprar.php?comprar=$i''>Alugar</a> </div>";}
            else{
            echo "<div class='quartos1'>Quarto de número ".$quarto1 -> Numero." <a class='alugar_button' href='../php/comprar.php?comprar=$i''>Alugar</a> </div>";
          }
            $quarto1 -> Numero++;
          }
        ?>
      </div>

      <div class="quarto1">
            <!-- imagem do quarto e outros dados; -->
        <img src="../<?php echo $quarto2 -> Imagem; ?>" alt="">
          <?php
            echo "<br/>".$quarto2 -> Descriçao."<br/> ".$quarto2 -> Preço."<br/>";
                  //estrutura de repetição que escreve o número dos quartos;
            for ($i=11; $i <= 20 ; $i++) {
              // code...
              echo "<div class='quartos1'>Quarto de número ".$quarto2 -> Numero." <a class='alugar_button' href='../php/comprar.php?comprar=$i''>Alugar</a> </div>";
              $quarto2 -> Numero++;
            }
              ?>
      </div>

      <div class="quarto1">
            <!-- imagem do quarto e outros dados; -->
        <img src="../<?php echo $quarto3 -> Imagem; ?>" alt="">
        <?php
          echo "<br/>".$quarto3 -> Descriçao."<br/> ".$quarto3 -> Preço."<br/>";
                //estrutura de repetição que escreve o número dos quartos;
          for ($i=21; $i <= 30 ; $i++) {
            // code...
            echo "<div class='quartos1'>Quarto de número ".$quarto3 -> Numero." <a class='alugar_button' href='../php/comprar.php?comprar=$i''>Alugar</a> </div>";
            $quarto3 -> Numero++;
          }
                  ?>
                  <a href="deslogar.php">Deslogar</a>
      </div>
    </div>
