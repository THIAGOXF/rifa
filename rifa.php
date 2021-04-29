<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link type = "text/css" rel = "stylesheet" href = "modeloDaRifa.css">
  </head>
  <body>
    <?php
      $titulo = $_POST['titulo'];
      $descricao = $_POST['descricao'];
      $valor = $_POST['valor'];
      $premio = $_POST['premio'];
      $numeroMax = $_POST['numeroMax'];
      $data = $_POST['data'];
      $observacoes = $_POST['observacoes'];
      
      echo '<div class = "sorteio">';
        echo "Rifa sorteada: ";
        echo rand(1, $numeroMax);
        echo "<br>";
      echo '</div>';
      
      echo "<br>";
      echo "<br>";
      
      
      for($cont = 1; $cont <= $numeroMax; $cont++)
      {
        echo '<div class = "rifas">';
          echo "Numero da rifa: " . $cont;
          echo "<br>";
          echo $titulo;
          echo "<br>";
          echo $descricao;
          echo "<br>";
          echo "Valor: R$" . $valor . ",00";
          echo "<br>";
          echo "Premio: " . $premio;
          echo "<br>";
          echo "Data do sorteio: " . $data;
          echo "<br>";
          echo "Observacoes: " . $observacoes;
        echo '</div>';
        echo "<br>";
      }
      
    ?>

  </body>

</html>
