<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nome=$_GET["nome"] ?? "";
        $idade=$_GET["idade"] ?? 0;
        $email=$_GET["email"] ?? "";

        $dados=[
            ["Nome", $nome],
            ["Idade", $idade],
            ["Email", $email]
        ]
    
    ?>
    <header>
        <h1>Cadastro do Usuário</h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="numero">Digite seu nome: </label>
            <input type="text" name="nome" id="nome" value="">
            <label for="numero">Digite sua idade: </label>
            <input type="number" name="idade" id="idade" value="">
            <label for="numero">Digite seu email: </label>
            <input type="email" name="email" id="email" value="">

            <input type="submit" value="Enviar">
        </form>
    </main>
    
    <section>
        <?php 
            if($nome !="" && $idade!="" && $email!=""){
                $mensagem="Nome: " .$dados[0][1] . "<br>Idade: " . $dados[1][1]."<br>Email: " .$dados[2][1];
            }else{
                if($nome=="" && $idade=="" && $email ==""){
                    $mensagem="Está faltando todos os campos, digite os campos";
                }else if($nome==""){
                    $mensagem="Está faltando o campo ".$dados[0][0];
                }else if($idade==""){
                    $mensagem="Está faltando o campo ".$dados[1][0];
                }
                else if($email==""){
                    $mensagem="Está faltando o campo ".$dados[2][0];
                }
                
            }
            
            
        ?>
        <h2>Cadastro feito</h2>
        <p><?=$mensagem?></p>
    </section>
</body>
</html>