<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        session_start();
        $nome=$_POST["nome"] ??"";
        if($nome !=""){
            $_SESSION["ususario"] = $nome;
            $mensagem="Olá ".$_SESSION["ususario"]."!! Você esta logado";
        }else{
            $mensagem="Digite o seu nome, campo";
        }
        
        
    
    
    ?>
    <header>
        <h1>Login</h1>
        
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="">Digite seu nome: </label>
            <input type="text" name="nome" id="nome">
            <input type="submit" value="Login">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p><?=$mensagem?></p>
    </section>
    
</body>
</html>