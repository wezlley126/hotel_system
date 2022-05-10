<?php
$diretorio = "candidatos_curriculos/";
  $arquivo = $_FILES['curriculo'];
  print_r($arquivo);
  $extensoes = array("txt", "docx", "pdf", "odt");
  echo "<br/>";
  print_r($extensoes);
  $extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
  if (in_array($extensao, $extensoes)) {
    echo "<br/><br/> Está no array";
    if ($arquivo['size'] <= 20971520) {
      echo "<br/><br/>O arquivo é menor que 20 Mb";
      if (move_uploaded_file($arquivo['tmp_name'], $diretorio . 1 . "." . $extensao)) {
        echo "<br/><br/> Curriculo enviado com sucesso";
      }
    }else {
      echo "<br/><br/> O arquivo é maior que 10 Mb";
    }
  }else{
    echo "<br/><br/> O arquivo deve estar nos formatos: docx, pdf, odt ou txt";
  }
  //10 Mb em Kb
  //10485760
?>
