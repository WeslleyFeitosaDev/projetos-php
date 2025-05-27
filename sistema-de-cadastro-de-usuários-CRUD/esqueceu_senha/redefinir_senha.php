<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refenir senha</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php 
        $input_redefinir_senha=$_POST["redefinir_senha"] ?? "";
        session_start(); 

        if($_SERVER["REQUEST_METHOD"]  == "POST"){
            require_once "conn.php";
            require_once "selecionar_os_dados.php";
            $sql_verificar_senha="SELECT senha FROM usuario WHERE id = ?";
            $stmt_verificar_senha=$conn->prepare($sql_verificar_senha);
            $stmt_verificar_senha->bind_param("i",$_SESSION["id"]);
            $stmt_verificar_senha->execute();
            $resultadO_verificar=$stmt_verificar_senha->get_result();

            if($resultadO_verificar->num_rows === 1){
                $dados=$resultadO_verificar->fetch_assoc();
                $senha_atual=$dados["senha"];
                if($input_redefinir_senha === $senha_atual){
                    echo "Você não pode criar uma senha já usada";
                }else{
                    $sql_selcionar_email="UPDATE usuario SET senha=? WHERE id=?";
                    $stmt_selecionar_email=$conn->prepare($sql_selcionar_email);
                    $stmt_selecionar_email->bind_param("si",$input_redefinir_senha,$_SESSION["id"]);
                    $stmt_selecionar_email->execute();
                    echo "Redefinição aceita";
                }
            }
            

            
            

        }
        
    
    ?>

    <div class="caixa_redefinir_senha">
        <form action="" method="post">
            <input type="text" name="redefinir_senha" id="redefinir_senha" required>
            <input type="submit" value="Refenir Senha">
        </form>
        
    </div>



</body>
</html>