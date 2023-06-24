<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analizado</h1>
        <?php 
            $num = $_POST["number"] ?? 0;
            echo "O número $num analizado ficou: <br>";
            $int = (int) $num;
            $par = $num - $int;

            echo "A parte inteira do número $num é: $int<br>";
            echo "A parte fracionária do número $num é: $par<br>";
        ?>
    </main>
</body>
</html>