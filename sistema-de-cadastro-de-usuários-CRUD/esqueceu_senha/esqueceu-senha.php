<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="main">
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="email">Digite seu email: </label>
            <input type="email" name="email" id="email" required>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php
        include_once "saidas.php"; 

        if($email !=""){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
            
                include_once "selecionar_os_dados.php";
                
                require_once "../php-mailer/enviar_codigo.php";
            
            
            }
        }

        
    
    ?>


</body>
</html>