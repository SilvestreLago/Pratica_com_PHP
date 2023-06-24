<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Resultado</h1></header>
    <main>

        <?php 
            echo "O número sorteado foi: " . mt_rand(1, 100) . ". <br>";
        ?>
        <form action="cad.php" method="post">
            <input type="submit" value="Gerar novo">
        </form>
    </main>
</body>
</html>