<?php
    class Quarto {
        public $Imagem;
        public $Preço;
        public $Descriçao;
        public $Numero;

        function ImprimeInformacoes(){
            print 'número: '. $This -> numero . "<br>\n";
            print 'Descrição' .$This ->Descriçao . "<br>\n";
            print 'Preço' . $This ->Preço. "<br>\n";
            print 'Imagem' .$This -> Imagem. "<br>\n";
        }
        function InsereDados($imagem, $preço, $descriçao, $numero)
        {
          // code...
          $this -> Imagem = $imagem;
          $this -> Preço  = $preço;
          $this -> Descriçao = $descriçao;
          $this -> Numero = $numero;
        }
    }

    $quarto1 = new quarto;
    $quarto1 -> InsereDados("quarto1.jpeg", "150,00", "Um quarto básico para uma noite", "1");

    $quarto2 = new quarto;
    $quarto2 -> InsereDados("quarto2.jpeg", "250,00", "Melhor que o básico e muito bonito", "11");

    $quarto3 = new quarto;
    $quarto3 -> InsereDados("quarto3.jpeg", "450,00", "Só luxo, aproveite a estadia", "21");
?>
