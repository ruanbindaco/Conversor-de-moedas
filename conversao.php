<?php
  $moedaIn = $_GET["mor"];
  $moedaOut = $_GET["mdd"];
  $valor = (float)$_GET["valor"];

  $cotDolarReal = 5.64;
  $cotEuroReal = 6.69;
  $cotLibraReal = 7.73;

  $valorEmReal = 0;
  // 1 - Convertendo para real
  if($moedaIn == "dolar"){
    $valorEmReal = $valor * $cotDolarReal;
  }else if($moedaIn == "euro"){
    $valorEmReal = $valor * $cotEuroReal;
  }else if($moedaIn == "libra"){
    $valorEmReal = $valor * $cotLibraReal;
  }else{
    $valorEmReal = $valor;
  }
  $valorConvertido = 0;
  // 2 - Converter de real para a moeda de saida
  if($moedaOut == "dolar"){
    $valorConvertido = $valorEmReal / $cotDolarReal;
  }else if($moedaOut == "euro"){
    $valorConvertido = $valorEmReal / $cotEuroReal;
  }else if($moedaOut == "libra"){
    $valorConvertido = $valorEmReal / $cotLibraReal; 
  }else{
    $valorConvertido = $valorEmReal;
  }
?>
<html>
  <head>
    <style>
.center {
  text-align: center;
  border: 3px solid green;
}
.center2 {
  text-align: center;
}
    </style>
      <title> Resultado da Conversão </title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
    <body>
      <div class= "w3-green">
      <div class="center">
   <h3>O valor convertido = <?= number_format($valorConvertido, 2,",",".") ?> </h3>
      </div>
      </div>
     <a href="index.php"><button>Voltar</button></a>
    </body>
</html>