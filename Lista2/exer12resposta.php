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
        if($valor2 != 0) {
          $expo = $valor1 ** $valor2;
          echo "O valor da Exponenciação é $expo";          
        }
        else{
          echo "O valor 2 inserido é $valor2, não foi possível realizar a operação";
        };

    }catch (Exception $e){
            echo $e->getMessage();
        }
    }
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>