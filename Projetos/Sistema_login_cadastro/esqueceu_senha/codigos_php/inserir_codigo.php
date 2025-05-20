<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir codigo</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="caixa_inseriri_codigo">
        <form action="" method="post">
            <input type="text" name="inserir_codigo" id="inserir_codigo" placeholder="Insira o código">
            <input type="submit" value="Enviar">
        </form>
    </div>

    <?php
        session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inserir_codigo = $_POST["inserir_codigo"] ?? "";

            if (isset($_SESSION['codigo_enviado']) && $inserir_codigo === $_SESSION['codigo_enviado']){
                echo "Código certo, obrigado";
                unset($_SESSION['codigo_enviado']);
                header("location: redefinir_senha.php");
            }else {
                echo "Código errado, tente novamente";
            }
        }
    ?>
</body>
</html>
