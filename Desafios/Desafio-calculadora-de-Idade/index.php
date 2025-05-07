<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Calculadora de idade</h1>
    </header>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <input type="date" name="data" id="data">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <?php 
        $data_usuario=$_POST["data"] ?? date("Y-m-d");
        $data_atual=new DateTime();
        $nascimento_usuario=new DateTime($data_usuario);
        $idade=$nascimento_usuario->diff($data_atual);


        echo "<p>Você tem {$idade->y} anos {$idade->m} meses e {$idade->d} dias</p>";

        
    ?>
</body>
</html>