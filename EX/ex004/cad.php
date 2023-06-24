<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
        //var_dump($_GET);
        $n = $_GET["nome"] ?? "ERROR";
        $s = $_GET["sobrenome"] ?? "ERROR";

        echo "É um prazer te conhecer $n $s. Este é o meu site!";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>