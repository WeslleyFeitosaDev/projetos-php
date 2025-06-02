<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Loja</h2>
    </header>
    <main>
        <form action="<?=$SERVER["PHP_SELF"]?>" method="post">
            <label for="">Coloque o nome do produto: </label>
            <input type="text" name="input_name" id="input_name">
            <label for="">Coloque o proço do produto: </label>
            <input type="number" name="input_price" id="input_price">
        </form>
    </main>
</body>
</html>