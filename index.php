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
      <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>
    <div>
    <div class="w3-green">
    <div class="center">
      <h2> Conversor de Moedas </h2>
    </div>
    </div>

    <form action="conversao.php" class"w3-container">
    <!-- Pega a moeda de origem -->
      <div class="center2">
      <div class="w3-text-green">
      
        <h3> Moeda de Origem: </h3>
      </div>
          <p><input type="radio" name="mor" value="dolar" class="w3-radio"/> DÓLAR </p>
          <p><input type="radio" name="mor" value="euro" class="w3-radio"/> EURO </p>
          <p><input type="radio" name="mor" value="real" class="w3-radio" checked/> REAL </p>
          <p><input type="radio" name="mor" value="libra" class="w3-radio"/> LIBRA </p>
      </div>
      
    <!-- Pega a moeda de destino -->
      <div class="center2">
      <div class="w3-text-blue">
        <h3> Moeda de Destino: </h3>
      </div>
          <p><input type="radio" name="mdd" value="dolar" class="w3-radio" checked/> DÓLAR </p>
          <p><input type="radio" name="mdd" value="euro" class="w3-radio"/> EURO </p>
          <p><input type="radio" name="mdd" value="real" class="w3-radio"/> REAL </p>
          <p><input type="radio" name="mdd" value="libra" class="w3-radio"/> LIBRA </p>
      </div>
    <!-- Valor a ser convertido -->
      <div class="center2">
      <div class="w3-text-orange">
        <h3> Valor: </h3>
      </div>
          <p class="center2"><input type="number" name="valor" min="0" placeholder="ex. 45,05" class="center2" required/>
      </div>
      <!-- Botão de envio -->
      <div class="center2">
        <input type="submit" value="CONVERTER" class="w3-input" />
      </div>
    </form>
  </body>
</html>