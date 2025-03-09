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
          $dia = $_POST['Valor1'];
          $mes = $_POST['Valor2'];
          $ano = $_POST['Valor3'];

          if ($dia > 31){
            echo "Dia invalido.<br>";
          }

          elseif($mes > 12){
            echo "Mês invalido.<br>";
          }

          elseif($ano > 9999){
            echo "Ano inválido.<br>";
          }


          if ($dia <= 31){
                if($mes <= 12){
                        if($ano <= 9999){
                          echo "<br>$dia/$mes/$ano";
                        }
                }
          }


      }catch (Exception $e){
              echo $e->getMessage();
          }
      }

?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>