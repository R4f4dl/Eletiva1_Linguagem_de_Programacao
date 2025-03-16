<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <form action="" method="POST">
        <?php for($i=0;$i<5;$i++): ?> 
            <input type="text" name="nome[]" placeholder="Nome"/>
            <input type="number" step="0.01" name="n1[]" placeholder="Nota 1:"/>
            <input type="number" step="0.01" name="n2[]" placeholder="Nota 2:"/>
            <input type="number" step="0.01" name="n3[]" placeholder="Nota 3:"/>
            <p> </p>
        <?php endfor; ?>
        <p></p>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try{
                $aluno = array();
                $nome = $_POST['nome'];
                $n1 = $_POST['n1']; 
                $n2 = $_POST['n2'];
                $n3 = $_POST['n3'];


                for($i=0;$i<count($nome);$i++){
                    $no1 = $n1[$i];
                    $no2 = $n1[$i];
                    $no3 = $n1[$i];
                    $media  = ($no1+$no2+$no3)/3;
                    $chavenome = $nome[$i];
                    $aluno[$chavenome] = $media;
                }

                arsort($aluno); //Serve para organizar em ordem decrescente
                foreach ($aluno as $nome => $media) {
                    echo "Nome: $nome - Média: $media<br>";
                }


            } catch (Exception $e){
                echo $e->getMessage();
            }
        }
    ?>
</body>
</html>