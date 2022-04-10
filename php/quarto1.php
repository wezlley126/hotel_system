<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <nav>
        <ul class="SubMenu">
          <li><a href="index.php">Menu</a></li>
          <li><a href="">Conta</a></li>
          <li><a href="">Saldo</a></li>
          <li class=""><a href="">Novidade</a></li>
        </ul>
    </nav>
    <?php 
       include_once('../poo/quartos.class.php');

       $quarto1 = new quarto;

       $quarto1 -> imagem = "quarto1.jpeg";
       $quarto1 -> preço  = "150,00";
       $quarto1 -> descrição = "Um quarto básico para uma noite.";
       $quarto1 -> número = "1";

    ?>
    <!--

     <div class = "quarto1">
           <img src="../<?php echo $quarto1 -> imagem; ?>" alt="">
    -->
    <?php
    /*
      echo "<br/>".$quarto1 -> descrição."<br/> ".$quarto1 -> preço."<br/>";
            //estrutura de repetição que escreve o número dos quartos;
      for ($i=1; $i <= 10 ; $i++) {
        // code...
        echo "<div class='quartos1'>Quarto de número ".$quarto1 -> número." <a class='alugar_button' href='html/form_registro.html''>Alugar</a> </div>";
        $quarto1 -> número++;
      }*/
    ?>
   </div>
   <main class="LayoutQuartoPadrao">
        <div class="QuartoPadraoImagem">
            
        </div>
    <section class="ServiçosDoQuartoPadrao">
      <article class="ServiçoDeQuartoPadrao">

      </article>
      <article class="InforDeQuartoPadrao">

      </article>
      <aside class="AlugarQuartoPadrao">

      </article>
    </section>
   </main>
</body>
</html>