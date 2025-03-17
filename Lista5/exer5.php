<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <form action="" method="POST">
        <?php for($i=0;$i<5;$i++): ?> 
            <input type="text" name="nome[]" placeholder="Nome"/>
            <input type="number"  name="livros[]" placeholder="Quantidade de Livros:"/>
            <p> </p>
        <?php endfor; ?>
        <p></p>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try{
                $estoque = array();
                $nome = $_POST['nome'];
                $quantidade = $_POST['livros']; 

                for($i=0;$i<count($nome);$i++){
                    $quant = $quantidade[$i];
                    $chavenome = $nome[$i];
                    $estoque[$chavenome] = $quant;
                }

                ksort($estoque); //Serve para organizar em ordem decrescente
                foreach ($estoque as $nome => $quant) {
                    if($quant < 5){
                        echo "Precisa Repor o estoque:";
                        echo "Nome do livro: $nome - Quantidade em estoque: $quant <br><br>";
                    }
                    else{
                    echo "Nome: $nome - Quantidade em estoque: $quant <br><br>";
                    }
                }


            } catch (Exception $e){
                echo $e->getMessage();
            }
        }
    ?>
</body>
</html>