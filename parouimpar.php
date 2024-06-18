<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Par ou Ímpar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Verificar Par ou Ímpar</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="vetor1">Digite 15 números separados por vírgula:</label>
                <input type="text" class="form-control" id="vetor1" name="vetor1" required>
            </div>
            <button type="submit" class="btn btn-primary">Verificar</button>
        </form>

        <?php
        // Verificação se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtendo os números digitados pelo usuário
            $input = $_POST['vetor1'];

            // Transformando a string de entrada em um vetor de números inteiros
            $numeros = explode(',', $input);
            $numeros = array_map('intval', $numeros);

            // Verificando cada número e imprimindo se é par ou ímpar
            foreach ($numeros as $numero) {
                if ($numero % 2 == 0) {
                    echo "<p>O número $numero é <strong>par</strong>.</p>";
                } else {
                    echo "<p>O número $numero é <strong>ímpar</strong>.</p>";
                }
            }
        }
        ?>
    </div>

    <!-- Bootstrap JS (opcional, apenas para alguns componentes) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

