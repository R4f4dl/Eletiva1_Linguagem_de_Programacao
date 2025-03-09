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
          $data1 = $_POST['Valor1'];
          $data2 = $_POST['Valor2'];

          $d1 = DateTime::createFromFormat('d/m/Y', $data1);
          $d2 = DateTime::createFromFormat('d/m/Y', $data2);

          if ($d1 && $d2) {
            $diferenca = $d1->diff($d2)->days;
            echo "<p>A diferença entre as datas $data1 e $data2 é de <strong>$diferenca dias</strong>.</p>";
        } else {
            echo "  Formato de data inválido. Use DD/MM/YYYY.</p>";
        }

      }catch (Exception $e){
              echo $e->getMessage();
          }
      }

?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>