<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php 
        $nome=$_POST["nome"] ?? "";
        include_once "saidas.php";

        include_once "conn.php";
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $sql="INSERT INTO usuario(nome,email,senha) VALUES(?,?,?)";
            $stmt=$conn->prepare($sql);
            $stmt->bind_param("sss",$nome,$email,$senha);
            if($stmt->execute()){
                echo "Cadastro feito com sucesso";
            }else{
                echo "Error ao cadastrar";
            }
        }
        

        
    
    ?>
    <div class="main">
        <form action="" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>