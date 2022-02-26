<?php
    class Quarto {
        public $número;
        public $Preço;
        public $Imagem;
        public $Descrição;

        function ImprimeInformacoes(){
            print 'número: '. $This -> número . "<br>\n";
            print 'Descrição' .$This ->Descrição . "<br>\n";
            print 'Preço' . $This ->Preço. "<br>\n";
            print 'Imagem' .$This -> Imagem. "<br>\n";
        }
    }
?>
