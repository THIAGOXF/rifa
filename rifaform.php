<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link type = "text/css" rel = "stylesheet" href = "formEstiloRifa.css">
  </head>
  <body>
    <div class = "formulario">
      <form action = "rifa.php" method = "post">
      <p> Sistema de sorteio de rifas <p>

      Informe o título das rifas: <input type = "text" name = titulo>
      <br>
      Informe a descricao da rifa: <input type = "text" name = descricao>
      <br>
      Informe o valor de cada rifa: <input type = "number" min = "0" max = "100" name = valor>
      <br>
      Informe o prêmio do sorteio: <input type = "text" name = premio>
      <br>
      Informe o número de rifas compradas: <input type = "number" name = numeroMax>
      <br>
      Informe quando ocorrerá o sorteio: <input type = "date" name = data>
      <br>
      Observações: <input type = "text" name = observacoes>
      <br>
      <br>

      <input type = "submit" value = "Calcular">
      <input type = "reset" value = "Limpar">
    </div>
  </body>
</html>
