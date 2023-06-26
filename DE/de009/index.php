<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 009</title>
    <link rel="stylesheet" href="../de001/style.css">
</head>
<body>
    <?php 
        $V1 = $_GET['v1'] ?? 1;
        $P1 = $_GET['p1'] ?? 1;
        $V2 = $_GET['v2'] ?? 1;
        $P2 = $_GET['p2'] ?? 1;
    ?>
    <main>
        <h1>Média ponderada e aritimética</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$V1?>" required>
            <label for="p1">Peso 1</label>
            <input type="number" name="p1" id="p1" min="1" value="<?=$P1?>" required>
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$V2?>" required>
            <label for="p2">Peso 2</label>
            <input type="number" name="p2" id="p2" min="1" value="<?=$P2?>" required>
            <input type="submit" value="Calcular">

        </form>
    </main>
    <section>
        <h2>Resultado:</h2>
        <?php
            $MN = ($V1 + $V2)/2;
            $MP = ($V1 * $P1 + $V2 * $P2) / ($P1 +$P2);
            echo "<p>A média entre os valores $V1 e $V2 é: $MN.</p>";
            echo "<p>A média ponderada entre os valores $V1 com peso $P1 e $V2 com peso $P2 é: $MP.</p>";
        ?>
    </section>
</body>
</html>