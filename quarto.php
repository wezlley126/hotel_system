<?php 
    /*inserir condicao sql para validar as ingormacoes dos dados atraves de uma variavel qua vai 
    delimitar o nivel de acesso do usuario*/
//Variaveis de escopo aberto 
include_once 'class/quartos.class.php';
    $CodigoQuart = $_POST['codigo'];
    $DescricaoQuart  = $_POST['descricao'];
    $PrecoQuart = $_POST['preco'];
    $ImageQuart = $_POST['image'];
    $ResultadoQuarto;
//Codicao para inserir os dados dentro da classe quarto
    if($adm == true){
        function InseriQuarto(float $a, String $b, float $c ,$d){
            $preco = $a;
            $descrica = $b;
            $codigo = $c;
            $image = $d;


            $quarto = new Quarto;

            $quarto -> Codigo_do_quart = $codigo;
            $quarto -> Preco_do_quart = $preco;
            $quarto -> Image_do_quart = $image;
            $quaero -> Descicao_do_quart = $descricao;
            
            return $RegistroQuarto = true;
        }
        InseriQuarto($CodigoQuart, $DescricaoQuart, $PrecoQuart, $ImageQuart);
    }else{
         echo "<span class='alert'> Voce nao tem os privilegio nescessarios</span>";
    }
    if($RegistroQuarto = TRUE){
        echo "<span class=''> Quarto Registrando com sucesso </span>";
    }else{
        echo "<span class='alert'> Lamento mais ocorreu algum erro na sua validacao <span>";
    }
    $quarto ->ImprimeQuarto();
?>
