<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    
    <?php 
        $sobrenome = "Silvestre";
        $idade = 18;
        $peso = 57.7;
        $casado = false;
        $num = 0xa1;
        $force = (float)30;
        $vet = [73, 'João', 57.7, false];
        echo "O sobre nome é $sobrenome <br>";
        echo "A idade é $idade <br>";
        echo "O peso é $peso <br>";
        echo "Casado? $casado <br>";
        echo "Num = $num <br>";
        echo "Casado é do tipo: ";
        var_dump($casado);
        echo "<br>O valor $force é inteiro, mas posso forca-lo a ser float ";
        var_dump($force);
        echo '<br>';
        var_dump($vet);
        //0x=hexadecimal; 0b=binario; 0=octal 3e2=3x10²
        $nome = 'João';
        $snome = "Vitor";
        echo "<br> Meu nome é $nome\"silvestre\"$snome";

    ?>

</body>
</html>