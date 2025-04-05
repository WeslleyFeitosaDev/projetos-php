<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contagem regressiva</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Contagem regressiva</h1>
    </header>
    <section>
        <h2>Resposta</h1>
        <?php
        $contagem=10;
        for($i=0; $i<=10; $i++){
            
            if($contagem>0){
                echo "$contagem<br>";
                $contagem--;
                if($contagem==0){
                    echo "Decolagem";
                }
            }
            
            
        }
        ?>
    </section>
</body>
</html>