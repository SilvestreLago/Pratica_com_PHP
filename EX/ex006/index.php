<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário retro-alimentado</title>
    <link rel="stylesheet" href="../ex004/style.css">
</head>
<body>
    <?php 
        $V1 = $_GET['v1'] ?? 0;
        $V2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>Somando valores:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$V1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$V2?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h2>RESULTADO:</h2>
        <?php 
            $RES = $V1 + $V2;
            echo "<p> O resultado da soma de $V1 e $V2 é: $RES</p>";
        ?>
    </section>
</body>
</html>