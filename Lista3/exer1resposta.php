<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<?php



    if ($_SERVER['REQUEST_METHOD']=='POST'){
      try{
          $valor1 = $_POST['Valor1'];
          $valor2 = $_POST['Valor2'];
          $valor3 = $_POST['Valor3'];
          $valor4 = $_POST['Valor4'];
          $valor5 = $_POST['Valor5'];
          $valor6 = $_POST['Valor6'];
          $valor7 = $_POST['Valor7'];

          $valores = [$valor1, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7];

          $menorValor = min($valores);
          $posicao = array_search($menorValor, $valores) + 1;


          echo "O menor valor é: $menorValor";

          echo "A posição do menor valor é: $posicao";
  
      }catch (Exception $e){
              echo $e->getMessage();
          }
      }





?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>