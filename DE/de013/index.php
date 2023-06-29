<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="../de001/style.css">
</head>
<body>
    <?php 
        $val = $_GET['val'] ??  5;

        $v200 = intval($val / 200);
        $v200R = $val % 200;

        $v100 = intval($v200R / 100);
        $v100R = $v200R % 100;

        $v50 = intval($v100R / 50);
        $v50R = $v100R % 50;

        $v10 = intval($v50R / 10);
        $v5 = $v50R % 10;

    ?>
    <main>
        <h1>Insira o valor a ser sacado:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sec">R$</label>
            <input type="number" name="val" id="val" required min="5" value="<?=$val?>" step="5">
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Resultado:</h2>
        <li>R$200: <?=$v200?></li>
        <li>R$100: <?=$v100?></li>
        <li>R$50: <?=$v50?></li>
        <li>R$10: <?=$v10?></li>
        <li>R$5: <?=$v5?></li>
    </section>
</body>
</html>