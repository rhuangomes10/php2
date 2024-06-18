<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Números Não Comuns</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Encontrar Números Não Comuns</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="vetor1" class="form-label">Insira 10 números (vetor 1)</label>
                <input type="text" class="form-control" style="width: 400px;" name="vetor1" id="vetor1">
            </div>
            <div class="mb-3">
                <label for="vetor2" class="form-label">Insira 10 números (vetor 2)</label>
                <input type="text" class="form-control" style="width: 400px;" name="vetor2" id="vetor2">
            </div>
            <button type="submit" class="btn btn-primary">Buscar Números Não Comuns</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recebendo e convertendo os valores dos formulários em arrays de inteiros
            $vetor1 = explode(',', $_POST['vetor1']);
            $vetor2 = explode(',', $_POST['vetor2']);

            // Função para encontrar números não comuns
            function numerosNaoComuns($vetor1, $vetor2) {
                $naoComuns = array_merge(array_diff($vetor1, $vetor2), array_diff($vetor2, $vetor1));
                return $naoComuns;
            }

            // Encontrar e exibir os números não comuns
            $resultado = numerosNaoComuns($vetor1, $vetor2);

            if (!empty($resultado)) {
                echo '<h4 class="mt-4">Números Não Comuns:</h4>';
                echo '<ul>';
                foreach ($resultado as $numero) {
                    echo "<li>$numero</li>";
                }
                echo '</ul>';
            } else {
                echo '<div class="alert alert-warning mt-4" role="alert" style="width:400px;">Não há números não comuns entre os vetores.</div>';
            }
        }
        ?>
    </div>
</body>
</html>
