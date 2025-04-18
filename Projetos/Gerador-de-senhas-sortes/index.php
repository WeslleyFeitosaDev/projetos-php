<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de senhas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // letraM+letramin+carectere+numero
        $Alfabeto=["a","b","c","d","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
        $numero=rand(1,99);
        $carectere=["@","-","/","_"];
        shuffle($Alfabeto);
        shuffle($carectere);

        // print("Senha gerada: " .strtoupper($Alfabeto[0]) ."$Alfabeto[1] $Alfabeto[2] $Alfabeto[3] $Alfabeto[4] $Alfabeto[5] $Alfabeto[6] $carectere[0] $numero" )
        
        
        
    
    
    ?>

    <header>
        <h1>Gerador de senhas </h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="qtidadec">Digite quantas carecteres você quer:</label>
            <input type="number" name="qtidadec" id="qtidadec">
            <input type="submit" value="Enviar">

        </form>
    </main>
</body>
</html>