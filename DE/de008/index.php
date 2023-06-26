<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008</title>
    <link rel="stylesheet" href="../de001/style.css">
</head>
<body>
    <?php 
        $V1 = $_GET['v1'] ?? 0;
    ?>
    <main>
        <h1>Informe um número:</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="v1" id="v1" value="<?=$V1?>" required>
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Resultado:</h2>

        <?php 
            echo "A raiz quadrada de $V1 é: " . sqrt($V1) . "<br>";
            echo "A raiz cúbica de $V1 é: " . pow($V1, 1/3);
        ?>
    </section>
</body>
</html>