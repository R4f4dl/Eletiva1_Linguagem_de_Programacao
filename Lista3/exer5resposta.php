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
          $mes = $_POST['Valor1'];


         switch ($mes){
            case 1:
                echo "Janeiro";
                break;
            case 2:
                echo "Fevereiro";                
            case 3:
                echo "Março";                
            case 4:
                echo "Abril";                
            case 5:
                echo "Maio";                
            case 6:
                echo "Juhno";                
            case 7:
                echo "Julho";                
            case 8:
                echo "Agosto";                
            case 9:
                echo "Setembro";                
            case 10:
                echo "Outubro";                
            case 11:
                echo "Novembro";                
            case 12:
                echo "Dezembro";                
                break;
            default:
                echo "Nenhuma das opções!";
        }
    



  
      }catch (Exception $e){
              echo $e->getMessage();
          }
      }


?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>