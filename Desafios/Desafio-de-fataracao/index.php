<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma entre os numeros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero=$_GET["numero"]??0;
        
        if($numero!=0){
            $fatoracao=1;
            for($i=1; $i<=$numero ; $i++){
                $fatoracao*=$i;
            }
        }else{
            $fatoracao=0;
        }
        
    ?>
    <header>
        <h1>Soma entre números</h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="numero">Digite um número: </label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="Enviar">
        </form>
    </main>
    
    <section>
        <h2>Resultado</h2>
        <p>A fotaração do <strong> número  <?=$numero?> é <?=$fatoracao?></strong></p>
    </section>
</body>
</html>