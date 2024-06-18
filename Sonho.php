<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Palavras</title>
</head>
<body>
    <form method="post">
        <label for="palavra"><h3>Digite uma palavra:</h3></label><br>
        <input type="text" class="form-control" style="width: 200px;" id="palavra" name="palavra"><br>
        <input type="submit" class="btn btn-primary" value="Imprimir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $palavra = $_POST["palavra"];
        
        function imprimirMultiplos($palavra, $quantidade)
        {
            $resultado = "";
            for ($i = 1; $i <= $quantidade; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    $resultado .= $palavra . " ";
                }
                $resultado .= "<br>";
            }
            return $resultado;
        }
        
        $quantidade = 4; // Quantidade de linhas a serem impressas
        echo "<p>Palavra: $palavra</p>";
        echo imprimirMultiplos($palavra, $quantidade);
    }
    ?>
</body>
</html>