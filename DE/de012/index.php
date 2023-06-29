<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="../de001/style.css">
</head>
<body>
    <?php 
        $temp = $_GET['sec'] ??  1;

        $sem = intval($temp / 604800);
        $sem1 = $temp % 604800;

        $dias = intval($sem1 / 84600);
        $dias1 = $sem1 % 84600;

        $horas = intval($dias1 / 3600);
        $horas1 = $dias1 % 3600;

        $min = intval($horas1 / 60);
        $sec = $horas1 % 60;
    ?>
    <main>
        <h1>Insira o tempo em segundos:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sec">Quantos segundos:</label>
            <input type="number" name="sec" id="sec" required min="1" value="<?=$temp?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado:</h2>
        <li>Semanas: <?=$sem?></li>
        <li>Dias: <?=$dias?></li>
        <li>Horas: <?=$horas?></li>
        <li>Minutos: <?=$min?></li>
        <li>Segundos: <?=$sec?></li>
    </section>
</body>
</html>
