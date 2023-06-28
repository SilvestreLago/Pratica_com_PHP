<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="../de001/style.css">
</head>
<body>
    <?php 
        $pre = $_GET['pre'] ?? 1;
        $aju =$_GET['aju'] ?? 1;
        
        $np = (($pre * $aju) /100) + $pre;
    ?>
    <main>
        <h1>Coloque os valores:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preço">Preço atual:</label>
            <input type="number" name="pre" id="pre" required value="<?=$pre?>" min="0.10" step="0.1">

            <label for="aju">Porcentagem: <span id="p">(?)</span>%</label>
            <input type="range" name="aju" id="aju" required value="<?=$aju?>" min="1" max="100" oninput="muda()">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado:</h2>
        <?php 
            echo "O produto que custava R$$pre, com o reajuste de $aju% passa a custar R$$np."; 
        ?>
    </section>
    <script>
        muda()
        function muda(){
            p.innerText = aju.value;
        }
    </script>
</body>
</html>