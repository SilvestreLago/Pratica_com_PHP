<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Resultado:</h1></header>
    <main>
        <?php 
            $val = floatval($_POST['num'] ?? 0);

            $cot = floatval(4.20);

            $tot = $val / $cot;

            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo"Você possui ". numfmt_format_currency($padrão, $val, "BRL")." <br>";

            echo"Convertido para dólar com a base de ". numfmt_format_currency($padrão, $cot, "BRL") ."<br>";

            //echo"Você possui U$" . number_format($tot, 2, ",", ".");

            echo"Você possui " . numfmt_format_currency($padrão, $tot, "USD");
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
    </main>
</body>
</html>
