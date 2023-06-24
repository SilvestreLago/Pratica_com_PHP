<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>

    <?php 
        date_default_timezone_set('America/Sao_Paulo'); //define a timezone
        echo 'Hoje é dia: ' . date('D:d:M:Y'); 
        echo ' e hora atual é:' . date('G:i:s');
    ?>
</body>
</html>