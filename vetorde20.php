<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise de Vetor</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Análise de Vetor</h2>

        <?php
        // Criando um vetor com 20 elementos inteiros aleatórios
        $vetor = [];
        for ($i = 0; $i < 20; $i++) {
            $vetor[] = rand(1, 100); // Números aleatórios entre 1 e 100
        }

        // Encontrando o maior e o menor elemento do vetor
        $maior = max($vetor);
        $menor = min($vetor);

        // Contando números pares
        $numerosPares = 0;
        foreach ($vetor as $numero) {
            if ($numero % 2 == 0) {
                $numerosPares++;
            }
        }

        // Calculando a média dos elementos do vetor
        $soma = array_sum($vetor);
        $media = $soma / count($vetor);
        ?>

        <h4>Resultados:</h4>
        <ul>
            <li>Maior elemento: <?php echo $maior; ?></li>
            <li>Menor elemento: <?php echo $menor; ?></li>
            <li>Percentual de números pares: <?php echo number_format(($numerosPares / count($vetor)) * 100, 2); ?>%</li>
            <li>Média dos elementos: <?php echo number_format($media, 2); ?></li>
        </ul>
    </div>

    <!-- Bootstrap JS (opcional, apenas para alguns componentes) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
