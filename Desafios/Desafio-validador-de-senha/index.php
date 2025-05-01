<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador de senha</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $senha_saida=str_replace(" ", "", $_POST["senha"] ?? "");
        
        
        function validador_senha($senha){
            $min=range('a','z');
            $max=range('A','Z');
            $todas_as_letras=array_merge($min,$max);
            if($senha !=""){
                
                foreach(str_split($senha) as $letra){
                    if(in_array($letra,$todas_as_letras) && strlen($senha)>=8){
                        return "✅ Senha válida" ;
                    }else{
                        return "❌ Senha inválida";
                    }
                    
                }
                
            }
            else{
                return "🔔 Nenhuma senha colocada!!!!";
            }
        }
    
    ?>


    <header>
        <h1>Validador de senha</h1>
    </header>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="senha">Digite uma senha: </label>
            <input type="password" name="senha" id="senha">
            <input type="submit" value="Validar">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <p>Senha analisada</p>
       
        <p><?=validador_senha($senha_saida)?></p>
    </section>


    
    
</body>
</html>