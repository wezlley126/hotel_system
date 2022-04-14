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
              //estrutura de repetição que escreve o número dos quartos;
            for ($i=1; $i <= 10 ; $i++) {
             // code...
             echo "<aside class='Quarto1'>Quar".$quarto1 -> número." <a class='alugar_button' href='html/form_registro.html''>Alugar</a> </div>";
             $quarto1 -> número++;
    }*/
  ?>
   </div>
   <main class="LayoutDoQuartoPadrao">
     <div class="ImagesDeApresentaçãoDoQuartoPadrao">
        <div class="voltar">
            <img src="../images/botoes/seta-direita.png" alt="">
        </div>
        <div class="ir">

        </div>
     </div>
     <section id="ConteudoDoQuartoPadrao">
        <article id="InformaçõesDoServicoQuartoPadrao">
            <section class="ServiçoDeQuarto">
                <header>
                    <h2>Serviço de Limpeza</h2>
                </header>
               <div>
                 <p>O Hotel Horizonte oferecer no pacote do Quarto Padrão 
                    O serviço de limpeza, o serviço de limpeza entregar uma
                    equipe especializada para manter o seu quarto limpo sempre
                    que ocorrem alguma banguçinha em seu quarto vocẽ poder 
                    acionar o serviço</p>
               </div>
            </section>
            <section class="ServiçoDeQuarto">
                  <header>
                     <h2>Serviço De Quarto</h2>
                  </header>
                  <div>
                    <p>O Hotel Horizonte oferecer no pacote do Quarto Padrão 
                       O serviço de quarto, o serviço de quarto entregar uma
                       equipe especializada para manter a sua hospedagem a
                       melhor possivel, trazendo comida resolvendo problemas 
                      tecnicos entre outros.</p>
                  </div>
            </section>
            <aside id="InformaçoesDoQuartoPadrao">
               <header>
                  <h2>Informaçoes adicionais sobre o Quarto Padrão</h2>
              </header>
                 <p>O quarto padrão vem com  os serviços ja citados acima, 
                    além de possuir banheiro com banheira, frigo bar, um telefone de 
                    a fio caso o cliente precise solicitar a recepeção, além de acesso a 
                    piscina na parte de baixo do hotel, todos os serviços adicionais como purfem master,
                    são serviços adicionais a serem pagandos.</p>
            </aside>
        </article>
        <article id="InformaçoesDeQuarto1Disponivel">
            <div class="InforHover">
              <img src="../images/botoes/quarto.png" alt="">
            </div>
            <ul class="ListagemDeQuarto">
               <?php
    
                 //estrutura de repetição que escreve o número dos quartos;
                for ($i=1; $i <= 10 ; $i++) {
                // code...
                echo "<li>Quarto".$quarto1 -> número."</br><a class='alugar' href='html/form_registro.html''>Alugar</a> </div>";
                 $quarto1 -> número++;
                }
               ?>
            </ul>
        </article>
     </section>
   </main>
   <footer class="FooterQuartoPadrao">
      <p>Todos os Direitos são Reservados a equipe @SoftwareDoEstresse juntamente com todo o Hotel Horizont</p>
   </footer>
</body>
</html>