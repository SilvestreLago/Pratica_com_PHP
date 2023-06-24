<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Resultado</h1></header>
    <main>
        <?php 
            $num = $_POST['num'];
            
            $numA = $num + 1;
            
            $numS = $num - 1;
            
            echo "O número escolhido foi: $num <br><br>";
            
            echo "O sucessor de $num é: $numS <br><br>";

            echo "O antecessor de $num é: $numA";
        ?>    
        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
    </main>

    
</body>
</html>

