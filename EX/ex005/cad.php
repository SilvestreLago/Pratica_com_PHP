<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
    <link rel="stylesheet" href="../ex004/style.css">
</head>
<body>
    <main>
        <pre>
            <?php
                //DEFINE COOKIES
                setcookie("Nome", "João", time() +3600);
                
                //INICIA A SESSÃO
                session_start();

                //DEFINE UMA VARIÁVEL DE SESSÃO
                $_SESSION["teste"] = "OK!";

                echo "<h1>GET</h1>";
                var_dump($_GET);
                
                echo "<h1>POST</h1>";
                var_dump($_POST);
                
                echo "<h1>REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>COOKIES</h1>";
                var_dump($_COOKIE);

                echo "<h1>SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>ENV</h1>";
                var_dump($_ENV);

                echo "<h1>SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>