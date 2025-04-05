<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sequência de Fibonacci</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

        $numero_termos=$_GET["numero_termo"] ?? 2;
        $ant=1;
        $atu=1;
        
    
    ?>

    <header>
        <h1>Sequência de Fibonacci</h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="numero">Quantas vezes quer a Sequência de Fibonacci: </label>
            <input type="number" value="<?=$numero_termos?>" name="numero_termo">

            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Resultado é: <?php 
            echo "$ant $atu ";
            for($sequecia=3; $sequecia<=$numero_termos; $sequecia++){
                $proximo=$ant+$atu;
                echo "$proximo ";
                $ant=$atu;
                $atu=$proximo;
                
            }
        ?>
        </p>
    </section>
</body>
</html>