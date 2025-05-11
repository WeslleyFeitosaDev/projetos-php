<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    
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
                <h2>LOGIN</h2>
            </div>
            <form action="" method="post" class="formulario">
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
                    <!-- <i class='bx bx-hide'></i -->
                </div>
                
                <input type="submit" value="Login">
            </form>

            <div class="opcao_cadastrar">
                <p>Não tem conta? <a href="cadastro.php">Cadastre-se</a></p>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>