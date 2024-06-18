<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>100&200</title>
</head>
<body>
<form method="post">
        <label for="numeros"><h3>Digite números separados por vírgula:</h3></label>
        <input type="text" class="form-control" style="width: 200px;" id="numeros" name="numeros">
        <input type="submit" class="btn btn-primary" value="Contar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["numeros"];
        $numeros = explode(",", $input);
        
        function contarNumeros($numeros)
        {
            $cont = 0;
            foreach ($numeros as $numero) {
                $numero = trim($numero);
                if ($numero >= 100 && $numero <= 200) {
                    $cont++;
                } elseif ($numero == 0) {
                    break; // Encerra a execução se encontrar o número 0
                }
            }
            return $cont;
        }
        
        $resultado = contarNumeros($numeros);
        echo "<p>Quantidade de números entre 100 e 200: $resultado</p>";
    }
    ?>
</body>
</html>