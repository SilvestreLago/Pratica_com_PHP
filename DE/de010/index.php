<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="../de001/style.css">
</head>
<body>
    <?php 
        $V1 = $_GET["nasc"] ?? 2000;
        $V2 = $_GET["fut"] ?? date('Y');
        $ID = $V2 - $V1;
    ?>
    <main>
        <h1>Calculando a sua idade:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="id">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" required max="<?=date('Y')?>" value="<?=$V1?>">
            <label for="id">Em que ano você quer saber sua idade?</label>
            <input type="number" name="fut" id="fut" required value="<?=date('Y')?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado:</h2>
        <p>Quem nasceu no ano de <?=$V1?> terá <?=$ID?> anos em <?=$V2?>.</p>
    </section>
</body>
</html>