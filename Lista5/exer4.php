<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <form action="" method="POST">
        <?php for($i=0;$i<5;$i++): ?> 
            <input type="text" name="nome[]" placeholder="Nome"/>
            <input type="number" step="0.01" name="preco[]" placeholder="Preco 1:"/>

            <p> </p>
        <?php endfor; ?>
        <p></p>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try{
                $conta = array();
                $nome = $_POST['nome'];
                $preco = $_POST['preco']; 

                for($i=0;$i<count($nome);$i++){
                    $precos = $preco[$i];
                    $juros  = $precos*1.15;
                    $chavenome = $nome[$i];
                    $conta[$chavenome] = $juros;
                }

                arsort($conta); //Serve para organizar em ordem decrescente
                foreach ($conta as $nome => $juros) {
                    echo "Nome: $nome - Preço com juros: $juros<br>";
                }


            } catch (Exception $e){
                echo $e->getMessage();
            }
        }
    ?>
</body>
</html>