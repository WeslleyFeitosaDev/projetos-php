<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style_cadastro.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <?php 
        $nome=$_POST["nome"] ?? "";
        $email=$_POST["email"] ?? "";
        $senha=$_POST["senha"] ?? "";
        $date=date("Y/m/d") ?? "";
    
        $conn=new mysqli("localhost","root","","sistema_cadastro");

        // verificação de error 
        if($conn->connect_error){
            die("Erro:: ".$conn->connect_error);
        }
        $mensagem="";

        // verificação se o email ja existe
    


        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if($nome !="" && $email!="" && $senha!=""){
                $sqlverificacao="SELECT id FROM usuario WHERE email = ?";
                $stmt_verficacao=$conn->prepare($sqlverificacao);
                $stmt_verficacao->bind_param("s",$email);
                $stmt_verficacao->execute();
                $stmt_verficacao->store_result();
                if($stmt_verficacao->num_rows >0){
                    $mensagem="Esse email já tem conta";
                }else{
                    $mensagem="";
                    $sql="INSERT INTO usuario(nome,email,senha,data) VALUES (?,?,?,?)";
                    $stmt=$conn->prepare($sql);
                    $stmt->bind_param("ssss",$nome,$email,$senha,$date);
                    if($stmt->execute()){
                        ("location: https://www.youtube.com");
                        exit;
                    }
                }
            }
        }
        $conn->close();
    ?>
    
    <div class="caixa_fomulario">
        <div class="parte_laranja">
            <div class="textos">
                <h1>Seja Bem vindo</h1>
                <p>Projeto de cadastro e login</p>
            </div>
            <div class="icones">
                <div class="icone_insta">
                    <i class='bx bxl-instagram' ></i>
                </div>
                <div class="icone_github">
                    <i class='bx bxl-github'></i>
                </div>
            </div>
        </div>
        <div class="parte_branca">
            <div class="titulo_login">
                <h2>CADASTRO</h2>
            </div>
            <form action="" method="post" class="formulario">
                <div class="campo_nome">
                    <div class="icone_user">
                        <i class='bx bxs-user'></i>
                    </div>
                    <input type="text" name="nome" id="nome" required placeholder="Digite seu nome">
                </div>
                <div class="campo_email">
                    <div class="icone_email">
                        <i class='bx bx-envelope'></i>
                    </div>
                    <input type="email" name="email" id="email" placeholder="Digite seu email" required>
                </div>
                <div class="campo_senha">
                    <div class="icone_senha">
                        <i class='bx bxs-lock'></i>
                    </div>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                    <i class='bx bx-show' id="olho"></i>
                    <!-- <i class='bx bx-hide'></i> -->
                </div>
                
                <input type="submit" value="Login">
            </form>

            <div class="opcao_cadastrar">
                <p>Já tem conta? <a href="index.php">Conecte-se</a></p>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>