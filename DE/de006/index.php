<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006</title>
    <link rel="stylesheet" href="../de001/style.css">
</head>
<body>
    <?php 
        $V1 = $_GET['v1'] ?? 0;
        $V2 = $_GET['v2'] ?? 1;
        $I = intdiv($V1, $V2);
        $R = $V1 % $V2;
    ?>
    <main>
            <h1>Anatomia de uma divisão:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" value="<?=$V1?>">

            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" value="<?=$V2?>">

            <input type="submit" value="Dividir">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <table class="divisao">
            <tr>
                <td><?=$V1?></td>
                <td><?=$V2?></td>
            </tr>
            <tr>
                <td><?=$R?></td>
                <td><?=$I?></td>
            </tr>
        </table>
    </section>
</body>
</html>