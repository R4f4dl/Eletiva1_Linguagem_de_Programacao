<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <form action="" method="POST">
        <?php for($i=0;$i<5;$i++): ?> 
            <input type="number" name="codigo[]" placeholder="Código do Produto:"/>            
            <input type="text" name="nome[]" placeholder="Nome"/>
            <input type="number" step="0.01" name="preço[]" placeholder="Preço do Produto:"/>

            <p> </p>
        <?php endfor; ?>
        <p></p>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try{
                $cadastro = array();
                $codigos = $_POST['codigo'];                 
                $nomes = $_POST['nome'];
                $precos = $_POST['preço'];

                for($i=0;$i<count($codigos);$i++){
                    $codigo = $codigos[$i];
                    $nome = $nomes[$i];
                    $preco = $precos[$i];

                    if ($precos[$i]>100){
                    $preco = $preco - ($preco * 0.1);
                    }

                    $cadastro[$codigo] = [
                        "nome" => $nome,
                        "preco" => $preco
                    ];
                }

             /*    professora eu fiquei com duvida em como aplicar a ordem alfabética então procurei 
             no chat estava tentando fazer igual no exercício 1 mas deu errado, tentei com ksort e tentei com uasort($cadastro)
             mas sei lá...*/
                uasort($cadastro, function($a, $b) {
                    return strcmp($a['nome'], $b['nome']);
                });

                $guardainfo = ""; //esse modo de exibição tinha aprendido em phyton não sabia que também funcionava aqui
                foreach ($cadastro as $codigo => $produto) {
                    $guardainfo .= 
                    "Produto: " . $produto['nome'] . "<br>" .
                    "Código: " . $codigo . "<br>" .
                    "Preço: R$ " . number_format($produto['preco'], 2, ',', '.') . "<br><br>";
                }
                echo $guardainfo;



            } catch (Exception $e){
                echo $e->getMessage();
            }
        }
    ?>
</body>
</html>