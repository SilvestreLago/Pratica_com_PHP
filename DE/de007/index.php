<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 007</title>
    <link rel="stylesheet" href="../de001/style.css">
</head>
<body>
    <?php 
        $SM = 1320;
        $V1 = $_GET['v1'] ?? $SM;
        

        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        
    ?>
    <main>
        <h1>Informe o seu salário:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário R$:</label>
            <input type="number" name="v1" id="v1" value="<?=$V1?>" required>
            <input type="submit" value="Calcular">
            <p>Salário mínimo atual: <?=numfmt_format_currency($padrão, $SM, "BRL")?></p>
        </form>
    </main>
    <section>
        <h2>Resultado final:</h2>
        <?php 
            
            $RES = $V1 - (($S=intdiv($V1, $SM)) * $SM);
            //OU
            //$S = intdiv($V1, $SM);
            //$RES = $V1 % $SM;
            
            echo "<p>Você ganha: $S salários mínimos + ". numfmt_format_currency($padrão, $RES, "BRL");
        ?>
    </section>
</body>
</html>