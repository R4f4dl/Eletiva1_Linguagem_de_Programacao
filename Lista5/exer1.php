<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <form action="" method="POST">
        <?php for($i=0;$i<5;$i++): ?> 
            <input type="text" name="nome[]" placeholder="Nome"/>
            <input type="number" name="tel[]" placeholder="Telefone"/>
            <p> </p>
        <?php endfor; ?>
        <p></p>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try{
                $contato = array();
                $nome = $_POST['nome'];
                $tel = $_POST['tel'];


                for($i=0;$i<count($nome);$i++){
                    $chavenome = $nome[$i];
                    $contato[$chavenome] = $tel[$i];
                }

                ksort($contato); //Serve para organizar em ordem alfabetica
                foreach ($contato as $nome => $tel) {
                    echo "Nome: $nome - Telefone: $tel<br>";
                }


            } catch (Exception $e){
                echo $e->getMessage();
            }
        }
    ?>
</body>
</html>